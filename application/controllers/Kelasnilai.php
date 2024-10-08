<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Kelasnilai extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect('auth');
        } else if (!$this->ion_auth->is_admin() && !$this->ion_auth->in_group('guru')) {
            show_error('Hanya Administrator yang diberi hak untuk mengakses halaman ini, <a href="' . base_url('dashboard') . '">Kembali ke menu awal</a>', 403, 'Akses Terlarang');
        }
        $this->load->library(['datatables', 'form_validation']); // Load Library Ignited-Datatables
        $this->load->model('Master_model', 'master');
        $this->load->model('Dashboard_model', 'dashboard');
        $this->load->model('Dropdown_model', 'dropdown');
        $this->load->model('Kelas_model', 'kelas');
        $this->form_validation->set_error_delimiters('', '');
    }

    public function output_json($data, $encode = true)
    {
        if ($encode) $data = json_encode($data);
        $this->output->set_content_type('application/json')->set_output($data);
    }

    public function index()
    {
        $user = $this->ion_auth->user()->row();
        $data = [
            'user' => $user,
            'judul' => 'Rekapitulasi Nilai Siswa',
            'subjudul' => 'Nilai dalam satu semester',
            'setting'        => $this->dashboard->getSetting()
        ];

        $tp = $this->dashboard->getTahunActive();
        $smt = $this->dashboard->getSemesterActive();
        $data['tp'] = $this->dashboard->getTahun();
        $data['tp_active'] = $tp;
        $data['smt'] = $this->dashboard->getSemester();
        $data['smt_active'] = $smt;

        // $id_kelas = $this->input->get('kelas', true);
        // $id_mapel = $this->input->get('mapel', true);
        // $data['kelas_selected'] = $id_kelas;
        // $data['mapel_selected'] = $id_mapel;

        if ($this->ion_auth->is_admin()) {
            $data['profile'] = $this->dashboard->getProfileAdmin($user->id);
            $data['mapel'] = $this->dropdown->getAllMapel();
            $data['kelas'] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);

            $this->load->view('_templates/dashboard/_header', $data);
            $this->load->view('kelas/nilai/data');
            $this->load->view('_templates/dashboard/_footer');
        } else {
            $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
            $data['guru'] = $guru;
            $data['id_guru'] = isset($guru->id_guru) ? $guru->id_guru : null;

            $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt);
            $mapel = isset($mapel_guru->mapel_kelas) ? json_decode(json_encode($this->maybe_unserialize($mapel_guru->mapel_kelas))) : [];

            $arrId = [];
            if (!empty($mapel)) {
                foreach ($mapel as $mpl) {
                    if (isset($mpl->kelas_mapel)) {
                        foreach ($mpl->kelas_mapel as $id_mapel) {
                            if (isset($id_mapel->kelas)) {
                                $arrId[] = $id_mapel->kelas;
                            }
                        }
                    }
                }
            }

            $kelasses = [];
            if (!empty($arrId)) {
                $kelasses = $this->dropdown->getAllKelasByArrayId($tp->id_tp, $smt->id_smt, $arrId);
            }

            $arrMapel = [];
            $arrKelas = [];
            if (!empty($mapel)) {
                foreach ($mapel as $m) {
                    $arrMapel[$m->id_mapel] = $m->nama_mapel ?? '';

                    if (isset($m->kelas_mapel)) {
                        foreach ($m->kelas_mapel as $kls_mapel) {
                            if (isset($kelasses[$kls_mapel->kelas])) {
                                $arrKelas[$kls_mapel->kelas] = $kelasses[$kls_mapel->kelas];
                            }
                        }
                    }
                }
            }

            $data['mapel'] = $arrMapel;
            $data['kelas'] = $arrKelas; // Sudah tidak nested

            $this->load->view('members/guru/templates/header', $data);
            $this->load->view('kelas/nilai/data');
            $this->load->view('members/guru/templates/footer');
        }
    }

    public function loadNilaiMapel()
    {
        $kelas = $this->input->get('kelas');
        $mapel = $this->input->get('mapel');
        $tahun = $this->input->get('tahun');
        $smt = $this->input->get('smt');
        $stahun = $this->input->get('stahun');

        // Mendefinisikan $startYear dan $endYear
        $startYear = $stahun; // Asumsi start year adalah $stahun
        $endYear = $tahun; // Asumsi end year adalah $tahun

        $siswa = $this->kelas->getKelasSiswa($kelas, $tahun, $smt);

        if ($smt == '1') {
            $arrBulan = ['07', '08', '09', '10', '11', '12'];
        } else {
            $arrBulan = ['01', '02', '03', '04', '05', '06'];
        }

        $namaBulan = ["", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember"];
        $namaHari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];

        $infos = $this->kelas->getJadwalMapelByMapel($kelas, $mapel, $tahun, $smt);
        $log_siswa = $this->kelas->getRekapMateriSemester($kelas);
        $jadwal_per_bulan = [];
        $jadwal_materi = [];
        $log_materi = [];
        $cols = 0;

        foreach ($arrBulan as $bulan) {
            foreach ($infos as $info) {
                $jadwal_per_bulan[$info->id_hari][$info->jam_ke] = $info;
                try {
                    // Pastikan untuk memberikan semua argumen: id_hari, bulan, startYear, endYear
                    $dates = $this->getDateFromWeekday($info->id_hari, $bulan, $startYear, $endYear);
                    $mtr = null;
                    $tgs = null;

                    foreach ($dates as $date) {
                        $d = explode('-', $date ?? '');
                        if (count($d) < 3) continue; // Validasi tanggal

                        $b = $d[1];
                        $t = $d[2];
                        $jj = $this->kelas->getAllMateriByTgl($kelas, $date, [$mapel]);

                        $mtr = isset($jj[$mapel][$info->jam_ke][1]) ? $jj[$mapel][$info->jam_ke][1] : null;
                        $tgs = isset($jj[$mapel][$info->jam_ke][2]) ? $jj[$mapel][$info->jam_ke][2] : null;

                        $jadwal_materi[$b][$t][$info->jam_ke][1] = $mtr;
                        $jadwal_materi[$b][$t][$info->jam_ke][2] = $tgs;

                        $cols++;
                    }
                } catch (Exception $e) {
                    log_message('error', 'Error parsing date: ' . $e->getMessage());
                }
            }
        }

        $log = [];
        if (count($siswa) > 0 && count($jadwal_per_bulan) > 0) {
            foreach ($siswa as $s) {
                $log[$s->id_siswa] = [
                    'nama' => $s->nama,
                    'nis' => $s->nis,
                    'kelas' => $s->nama_kelas,
                    'nilai_materi' => isset($log_siswa[1][$s->id_siswa]) ? $log_siswa[1][$s->id_siswa] : [],
                    'nilai_tugas' => isset($log_siswa[2][$s->id_siswa]) ? $log_siswa[2][$s->id_siswa] : [],
                ];
            }

            $data = [
                'log' => $log,
                'materi' => $jadwal_materi,
                'bulans' => $arrBulan,
                'mapels' => $jadwal_per_bulan,
                'nilai' => $log_siswa,
                'cols' => $cols
            ];
        } else {
            $data['mapels'] = [];
        }

        $this->output_json($data);
    }

    function getDateFromWeekday($id_hari, $bulan, $startYear, $endYear)
    {
        $dates = [];
        try {
            $startDate = new DateTime("{$startYear}-{$bulan}-01");
            $endDate = new DateTime("{$endYear}-{$bulan}-01");
            $endDate = $endDate->modify('last day of this month');

            for ($date = clone $startDate; $date <= $endDate; $date->modify('+1 day')) {
                if ($date->format('N') == $id_hari) {
                    $dates[] = $date->format('Y-m-d');
                }
            }
        } catch (Exception $e) {
            log_message('error', 'Error generating dates: ' . $e->getMessage());
        }

        return $dates;
    }


    function total_hari($id_day, $bulan, $taun)
    {
        $days = 0;
        $dates = [];
        $total_days = cal_days_in_month(CAL_GREGORIAN, $bulan, $taun);
        $idday = $id_day == '7' ? 0 : $id_day;
        for ($i = 1; $i < $total_days; $i++) {
            if (date('N', strtotime($taun . '-' . $bulan . '-' . $i)) == $idday) {
                $days++;
                array_push($dates, date('Y-m-d', strtotime($taun . '-' . $bulan . '-' . $i)));
            }
        }
        return $dates;
    }
}
