<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined('BASEPATH') or exit('No direct script access allowed');

class Userorangtua extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect('auth');
        }
        $this->load->library(['datatables', 'form_validation']); // Load Library Ignited-Datatables
        $this->load->model('Users_model', 'users');
        $this->load->model('Master_model', 'master');
        $this->load->model('Dashboard_model', 'dashboard');
        $this->form_validation->set_error_delimiters('', '');
    }

    public function is_has_access()
    {
        $user_id = $this->ion_auth->user()->row()->id;
        $group = $this->ion_auth->get_users_groups($user_id)->row()->name;
        if (!$group === 'admin' or !$group === 'guru') {
            show_error('Hanya Administrator yang diberi hak untuk mengakses halaman ini, <a href="' . base_url('dashboard') . '">Kembali ke menu awal</a>', 403, 'Akses Terlarang');
        }
    }

    public function output_json($data, $encode = true)
    {
        if ($encode) $data = json_encode($data);
        $this->output->set_content_type('application/json')->set_output($data);
    }

    public function index()
    {
        $this->is_has_access();
        $user = $this->ion_auth->user()->row();

        $data = [
            'user' => $user,
            'judul'    => 'User Management',
            'subjudul' => 'Data User Siswa',
            'profile'        => $this->dashboard->getProfileAdmin($user->id),
            'setting'        => $this->dashboard->getSetting()
        ];

        $data['tp'] = $this->dashboard->getTahun();
        $data['tp_active'] = $this->dashboard->getTahunActive();
        $data['smt'] = $this->dashboard->getSemester();
        $data['smt_active'] = $this->dashboard->getSemesterActive();

        $this->load->view('_templates/dashboard/_header', $data);
        $this->load->view('users/orangtua/data');
        $this->load->view('_templates/dashboard/_footer');
    }

    public function list()
    {
        $page = $this->input->post('page', true);
        $limit = $this->input->post('limit', true);
        $search = $this->input->post('search', true);
        //$sortBy = $this->input->post('sort', true);
        //$sortOrder = $this->input->post('order', true);

        $offset = ($page - 1) * $limit;
        $tp = $this->dashboard->getTahunActive();
        $smt = $this->dashboard->getSemesterActive();

        $count_orangtua = $this->users->getUserOrangtuaTotalPage($search);
        $lists = $this->users->getUserOrangtuaPage($tp->id_tp, $smt->id_smt, $offset, $limit, $search);
        $data = [
            'lists' => $lists,
            'total' => $count_orangtua,
            'pages' => ceil($count_orangtua / $limit),
            'search' => $search,
            'perpage' => $limit
        ];

        $this->output_json($data);
    }

    private function registerOrangtua($username, $password, $email, $additional_data, $group)
    {
        // Fungsi Ion Auth untuk register user baru
        $reg = $this->ion_auth->register($username, $password, $email, $additional_data, $group);

        $data['status'] = true;
        $data['id'] = $reg;
        if ($reg == false) {
            $data['status'] = false;
        }
        return $data;
    }


    private function aktifkan($orangtua, $status_keluarga)
    {
        // Tentukan nama berdasarkan status keluarga (Ayah, Ibu, Wali)
        if ($status_keluarga == 'Ayah') {
            $nama = explode(' ', $orangtua->nama_ayah);
        } elseif ($status_keluarga == 'Ibu') {
            $nama = explode(' ', $orangtua->nama_ibu);
        } elseif ($status_keluarga == 'Wali') {
            $nama = explode(' ', $orangtua->nama_wali);
        }

        // Ambil first_name dan last_name
        $first_name = $nama[0] ?? ''; // Nama depan
        $last_name = isset($nama[1]) ? implode(' ', array_slice($nama, 1)) : ''; // Nama belakang jika ada lebih dari satu kata

        // Tentukan username dan password berdasarkan nomor HP
        $username = '';
        $password = ''; // Username dan password berdasarkan nomor HP

        if ($status_keluarga == 'Ayah') {
            $username = trim($orangtua->nohp_ayah);
            $password = $orangtua->nohp_ayah; // Password juga menggunakan nomor HP
        } elseif ($status_keluarga == 'Ibu') {
            $username = trim($orangtua->nohp_ibu);
            $password = $orangtua->nohp_ibu; // Password juga menggunakan nomor HP
        } elseif ($status_keluarga == 'Wali') {
            $username = trim($orangtua->nohp_wali);
            $password = $orangtua->nohp_wali; // Password juga menggunakan nomor HP
        }

        // Data tambahan untuk user orang tua
        $additional_data = [
            'first_name' => $first_name,
            'last_name'  => $last_name
        ];

        // Grup ID untuk orang tua
        $group = array('4'); // Grup 4 untuk orang tua

        // Cek apakah user dengan email ini sudah ada
        $email = $username . '@orangtua.com';  // Format email disesuaikan dari username
        $user_orangtua = $this->db->get_where('users', ['email' => $email])->row();
        $deleted = true;

        // Jika sudah ada, hapus user sebelumnya
        if ($user_orangtua != null) {
            $deleted = $this->ion_auth->delete_user($user_orangtua->id);
        }

        // Jika user berhasil dihapus atau tidak ada user sebelumnya
        if ($deleted) {
            // Register user baru
            $reg = $this->registerOrangtua($username, $password, $email, $additional_data, $group);
            $data = [
                'status' => $reg['status'],
                'msg'    => !$reg['status'] ? 'Akun gagal diaktifkan.' : 'Akun diaktifkan.'
            ];
        } else {
            $data = [
                'status' => false,
                'msg'    => 'Akun orang tua tidak tersedia (sudah digunakan).'
            ];
        }

        return $data;
    }



    public function activate($unique_id)
    {
        // Pisahkan id_siswa dan status keluarga (Ayah, Ibu, Wali) dari unique_id
        list($id_siswa, $status_keluarga) = explode('_', $unique_id);

        // Ambil data siswa berdasarkan id_siswa
        $siswa = $this->users->getDataOrangtuaSiswa($id_siswa);

        // Pastikan siswa ditemukan
        if (!$siswa) {
            $data = [
                'status' => false,
                'msg'    => 'Siswa tidak ditemukan.'
            ];
            $this->output_json($data);
            return;
        }

        // Panggil fungsi untuk aktivasi akun orang tua berdasarkan status_keluarga
        $data = $this->aktifkan($siswa, $status_keluarga);

        // Kembalikan data dalam format JSON
        $this->output_json($data);
    }


    public function aktifkanSemua()
    {
        // Ambil data orang tua yang akan diaktifkan
        $orangtuaAktif = $this->users->getOrangtuaAktif();
        $jum = 0;
        $errors = []; // Menyimpan daftar error, jika ada

        foreach ($orangtuaAktif as $siswa) {
            if ($siswa->aktif == 0) {
                $result = $this->aktifkan($siswa, $siswa->status_keluarga); // Sesuaikan status keluarga
                if (!$result['status']) {
                    // Jika ada kesalahan, simpan error tetapi lanjutkan ke siswa berikutnya
                    $errors[] = "Gagal mengaktifkan: " . $siswa->nama;
                } else {
                    $jum += 1; // Hitung berapa orang tua yang berhasil diaktifkan
                }
            }
        }

        if (count($errors) > 0) {
            // Jika ada error, kirimkan pesan error, tetapi tetap kirimkan jumlah yang berhasil diaktifkan
            $data = [
                'status' => false,
                'jumlah' => $jum,
                'msg'    => 'Terdapat kesalahan dalam mengaktifkan beberapa orang tua: ' . implode(', ', $errors)
            ];
        } else {
            // Semua sukses
            $data = [
                'status' => true,
                'jumlah' => $jum,
                'msg'    => $jum . ' orang tua diaktifkan.'
            ];
        }

        $this->output_json($data);
    }



    private function nonaktifkan($user, $nama)
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
            return [
                'status' => false,
                'msg'    => 'Anda harus menjadi administrator untuk melihat halaman ini.'
            ];
        }

        $deleted = $this->ion_auth->delete_user($user->id);
        return [
            'status' => $deleted,
            'msg'    => $deleted ? 'Akun dinonaktifkan.' : 'Akun gagal dinonaktifkan.'
        ];
    }


    public function deactivate($username, $nama)
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
            $data = [
                'status' => false,
                'msg'    => 'Anda harus menjadi administrator untuk melihat halaman ini.'
            ];
            $this->output_json($data, true);
            return;
        }

        $user = $this->users->getUsers($username);

        if (!$user) {
            $data = [
                'status' => false,
                'msg'    => 'Pengguna tidak ditemukan.'
            ];
            $this->output_json($data, true);
            return;
        }

        $data = $this->nonaktifkan($user, $nama);
        $this->output_json($data, true);
    }


    public function reset_login($username, $nama)
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
            $data = [
                'status' => false,
                'msg'    => 'Anda harus menjadi administrator untuk melihat halaman ini.'
            ];
            $this->output_json($data, true);
            return;
        }

        // Hapus login attempts berdasarkan username
        $this->db->where('login', $username);
        if ($this->db->delete('login_attempts')) {
            $data = [
                'status' => true,
                'msg'    => 'User ' . $nama . ' berhasil direset'
            ];
        } else {
            $data = [
                'status' => false,
                'msg'    => 'User ' . $nama . ' gagal direset'
            ];
        }

        $this->output_json($data, true);
    }


    public function nonaktifkanSemua()
    {
        // Ambil data orang tua yang akan dinonaktifkan
        $orangtuaAktif = $this->users->getOrangtuaAktif();
        $jum = 0;
        $errors = []; // Menyimpan daftar error, jika ada

        foreach ($orangtuaAktif as $orangtua) {
            if ($orangtua->aktif > 0) {
                $del = $this->nonaktifkan($orangtua, $orangtua->nama_orang_tua);
                if (!$del['status']) {
                    // Jika ada kesalahan, simpan error tetapi lanjutkan ke siswa berikutnya
                    $errors[] = "Gagal menonaktifkan: " . $orangtua->nama_orang_tua;
                } else {
                    $jum += 1; // Hitung berapa orang tua yang berhasil dinonaktifkan
                }
            }
        }

        if (count($errors) > 0) {
            // Jika ada error, kirimkan pesan error, tetapi tetap kirimkan jumlah yang berhasil dinonaktifkan
            $data = [
                'status' => false,
                'jumlah' => $jum,
                'msg'    => 'Terdapat kesalahan dalam menonaktifkan beberapa orang tua: ' . implode(', ', $errors)
            ];
        } else {
            // Semua sukses
            $data = [
                'status' => true,
                'jumlah' => $jum,
                'msg'    => $jum . ' orang tua dinonaktifkan.'
            ];
        }

        $this->output_json($data);
    }



    public function edit($id)
    {
        $tp = $this->dashboard->getTahunActive();
        $smt = $this->dashboard->getSemesterActive();
        $siswa = $this->master->getDataSiswaById($tp->id_tp, $smt->id_smt, $id);
        $user = $this->ion_auth->user()->row();
        $data = [
            'user'         => $user,
            'judul'        => 'User Management',
            'subjudul'    => 'Edit Data User',
            'setting'        => $this->dashboard->getSetting()
        ];
        $data['siswa'] = $siswa;
        $data['tp'] = $this->dashboard->getTahun();
        $data['tp_active'] = $tp;
        $data['smt'] = $this->dashboard->getSemester();
        $data['smt_active'] = $smt;

        if ($this->ion_auth->is_admin()) {
            $data['profile'] = $this->dashboard->getProfileAdmin($user->id);
            $this->load->view('_templates/dashboard/_header', $data);
            $this->load->view('users/orangtua/edit');
            $this->load->view('_templates/dashboard/_footer');
        } else {
            $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
            $data['guru'] = $guru;
            $this->load->view('members/guru/templates/header', $data);
            $this->load->view('users/orangtua/edit');
            $this->load->view('members/guru/templates/footer');
        }
    }

    public function update()
    {
        $id_siswa = $this->input->post('id_siswa', true);
        $username = $this->input->post('username', true);
        $oldPass = $this->input->post('old', true);
        $newPass = $this->input->post('new', true);

        $this->form_validation->set_rules('username', 'Username', 'required|numeric|trim|min_length[6]|is_unique[master_siswa.username]');
        $this->form_validation->set_rules('old', 'Password Lama', 'required|numeric|trim|min_length[6]');
        $this->form_validation->set_rules('new', 'Password Baru', 'required|numeric|trim|min_length[6]');

        /*
        if($this->form_validation->run()===FALSE){
            //$this->session->set_flashdata('editsiswa', '<div id="flashdata" class="alert alert-default-danger align-content-center" role="alert"> test </div>');
            //redirect('UserOrangtua/edit/'.$id_siswa);
        } else {
            $insert = [
                "username"      => $username,
                "password"      => $this->input->post('password', true)];

            $data['insert'] = $this->master->create('master_siswa', $insert);
            $data['text'] = 'Siswa berhasil ditambahkan';
            $this->session->set_flashdata('editsiswa', '<div id="flashdata" class="alert alert-default-danger align-content-center" role="alert"> test </div>');
            redirect('UserOrangtua/edit/'.$id_siswa);
        }
        */
        //$this->output_json($siswa);
    }

    public function change_password()
    {
        $this->form_validation->set_rules('old', $this->lang->line('change_password_validation_old_password_label'), 'required');
        $this->form_validation->set_rules('new', $this->lang->line('change_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|matches[new_confirm]');
        $this->form_validation->set_rules('new_confirm', $this->lang->line('change_password_validation_new_password_confirm_label'), 'required');

        if ($this->form_validation->run() === FALSE) {
            $data = [
                'status' => false,
                'errors' => [
                    'old' => form_error('old'),
                    'new' => form_error('new'),
                    'new_confirm' => form_error('new_confirm')
                ]
            ];
        } else {
            $identity = $this->session->userdata('identity');
            $change = $this->ion_auth->change_password($identity, $this->input->post('old'), $this->input->post('new'));
            if ($change) {
                $data['status'] = true;
            } else {
                $data = [
                    'status'     => false,
                    'msg'        => $this->ion_auth->errors()
                ];
            }
        }
        $this->output_json($data);
    }

    public function delete($id)
    {
        $this->is_has_access();
        $data['status'] = $this->ion_auth->delete_user($id) ? true : false;
        $this->output_json($data);
    }

    private function hash_password($password)
    {
        if (empty($password) || strpos($password, "\0") !== FALSE || strlen($password) > 4096) {
            return FALSE;
        }
        return password_hash($password, PASSWORD_BCRYPT);
    }
}
