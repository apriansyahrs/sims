<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Userorangtua extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect('auth');
        }
        $this->load->library(['datatables', 'form_validation']);
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
            'subjudul' => 'Data Orang Tua Siswa',
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
        // Tentukan nama dan nomor HP berdasarkan status keluarga
        if (!empty($orangtua->username) && !empty($orangtua->nama_orang_tua)) {
            $nama = explode(' ', $orangtua->nama_orang_tua);
            $username = trim($orangtua->username);
            $password = $orangtua->username;
        } else {
            return ['status' => false, 'msg' => 'Nama atau nomor HP orang tua tidak ditemukan atau kosong'];
        }
    
        // Split the name into first name and last name
        $first_name = $nama[0] ?? '';
        $last_name = isset($nama[1]) ? implode(' ', array_slice($nama, 1)) : '';
        $additional_data = [
            'first_name' => $first_name,
            'last_name'  => $last_name
        ];
    
        $group = array('4'); // Group 4 for parents
        $email = $username . '@orangtua.com';
    
        // Check if the user already exists, and delete it before reactivating
        $user_orangtua = $this->db->get_where('users', ['email' => $email])->row();
        $deleted = true;
    
        if ($user_orangtua != null) {
            $deleted = $this->ion_auth->delete_user($user_orangtua->id);
        }
    
        if ($deleted) {
            $reg = $this->registerOrangtua($username, $password, $email, $additional_data, $group);
            return [
                'status' => $reg['status'],
                'msg'    => $reg['status'] ? 'Akun diaktifkan.' : 'Akun gagal diaktifkan.'
            ];
        } else {
            return ['status' => false, 'msg' => 'Akun orang tua tidak dapat dihapus sebelumnya.'];
        }
    }
    
   
    public function activate($unique_id)
    {
        list($id_siswa, $status_keluarga) = explode('_', $unique_id);

        $siswa = $this->users->getDataOrangtuaSiswa($id_siswa);

        if (!$siswa) {
            $data = [
                'status' => false,
                'msg'    => 'Siswa tidak ditemukan.'
            ];
            $this->output_json($data);
            return;
        }

        $data = $this->aktifkan($siswa, $status_keluarga);
        $this->output_json($data);
    }

    public function aktifkanSemua()
    {
        // Ambil data orang tua yang akan diaktifkan
        $orangtuaAktif = $this->users->getOrangtuaAktif();
    
        $jum = 0;
        $errors = []; // Menyimpan daftar error, jika ada
    
        foreach ($orangtuaAktif as $orangtua) {
            try {
                // Pastikan nomor HP ada dan belum aktif
                if (!empty($orangtua->username) && intval($orangtua->aktif) === 0) {
                    $result = $this->aktifkan($orangtua, $orangtua->status_keluarga);
                    if (!$result['status']) {
                        $errors[] = "Gagal mengaktifkan: " . $orangtua->nama_orang_tua . " (No HP: " . $orangtua->username . ") - Error: " . $result['msg'];
                    } else {
                        $jum += 1;
                    }
                } else {
                    $errors[] = "Data tidak valid atau sudah aktif untuk: " . $orangtua->nama_orang_tua;
                    continue; // Lanjutkan ke loop berikutnya, tanpa menghentikan proses
                }
            } catch (Exception $e) {
                // Tangani error yang terjadi
                $errors[] = "Exception terjadi untuk: " . $orangtua->nama_orang_tua . " - " . $e->getMessage();
            }
        }
    
        // Output hasil, meskipun ada error
        if (count($errors) > 0) {
            $data = [
                'status' => false,
                'jumlah' => $jum,
                'msg'    => 'Terdapat kesalahan dalam mengaktifkan beberapa orang tua: ' . implode(', ', $errors)
            ];
        } else {
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

        // Coba hapus user
        $deleted = $this->ion_auth->delete_user($user->id);
        if (!$deleted) {
            error_log("Gagal menghapus user dengan ID: " . $user->id); // Logging
        }

        return [
            'status' => $deleted,
            'msg'    => $deleted ? 'User ' . urldecode($nama) . ' berhasil dinonaktifkan.' : 'Gagal menonaktifkan ' . urldecode($nama)
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
        // Ambil data orang tua yang aktif
        $orangtuaAktif = $this->users->getOrangtuaAktif();
        $jum = 0;
        $errors = []; // Menyimpan daftar error

        foreach ($orangtuaAktif as $orangtua) {
            if ($orangtua->aktif > 0) {
                // Ambil user berdasarkan username
                $user = $this->users->getUsers($orangtua->username);

                if ($user) {
                    // Coba nonaktifkan (hapus) user
                    $del = $this->nonaktifkan($user, $orangtua->nama_orang_tua);
                    if ($del['status']) {
                        $jum += 1; // Hitung berapa user yang berhasil dihapus
                    } else {
                        $errors[] = "Gagal nonaktifkan: " . $orangtua->nama_orang_tua . " (No HP: " . $orangtua->username . ")";
                    }
                } else {
                    $errors[] = "User tidak ditemukan untuk: " . $orangtua->nama_orang_tua;
                }
            }
        }

        if (count($errors) > 0) {
            // Jika ada error, kirimkan pesan error
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
            'subjudul'     => 'Edit Data User',
            'setting'      => $this->dashboard->getSetting()
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

        // Jika validasi gagal
        if ($this->form_validation->run() === FALSE) {
            // Kembalikan ke halaman edit dengan error
        } else {
            $insert = [
                "username"      => $username,
                "password"      => $this->input->post('password', true)
            ];

            $data['insert'] = $this->master->create('master_siswa', $insert);
            $data['text'] = 'Siswa berhasil ditambahkan';
            redirect('UserOrangtua/edit/' . $id_siswa);
        }
    }

    public function change_password()
    {
        $this->form_validation->set_rules('old', 'Old Password', 'required');
        $this->form_validation->set_rules('new', 'New Password', 'required|min_length[6]|matches[new_confirm]');
        $this->form_validation->set_rules('new_confirm', 'Confirm New Password', 'required');

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
}
