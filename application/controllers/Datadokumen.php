<?php

defined("BASEPATH") or exit("No direct script access allowed");

class Datadokumen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Memuat library 'upload'
        // $this->load->library("upload");

        // Memuat model 'Dashboard_model' dengan alias 'dashboard'
        $this->load->model("Dashboard_model", "dashboard");
        $this->load->model("Dokumen_Model", "dokumen");
        $this->load->model('Dropdown_model', 'dropdown');


        // Memuat helper 'directory'
        // $this->load->helper("directory");

        // Memeriksa apakah pengguna telah login
        if (!$this->ion_auth->logged_in()) {
            redirect("auth");
        }

        // Memeriksa apakah pengguna adalah admin
        // if ($this->ion_auth->is_admin()) {
        //     // Jika iya, lanjutkan eksekusi
        // } else {
        //     // Jika bukan, tampilkan pesan error
        //     show_error("Hanya Admin yang memiliki akses halaman ini", 403, "Akses Dilarang");
        // }
    }


    public function output_json($data, $encode = true)
    {
        if (!$encode) {
            $this->output->set_content_type("application/json")->set_output($data);
        } else {
            $data = json_encode($data);
            $this->output->set_content_type("application/json")->set_output($data);
        }
    }


    // public function index()
    // {
    //     $user = $this->ion_auth->user()->row(); // Mengambil data user yang sedang login
    //     $data = [
    //         'user' => $user,
    //         'judul' => 'Dokumen',
    //         'subjudul' => 'Daftar Dokumen',
    //         'dokumens' => $this->dokumen->getDataDokumen(),
    //         'tp_active' => $this->dashboard->getTahunActive(),
    //         'smt_active' => $this->dashboard->getSemesterActive(),
    //         'setting' => $this->dashboard->getSetting(),
    //     ];

    //     // Memuat view yang sesuai
    //     $this->load->view('members/guru/templates/header', $data);
    //     $this->load->view("master/dokumen/data");
    //     $this->load->view('members/guru/templates/footer');
    // }

    public function index()
    {
        $setting = $this->dashboard->getSetting();
        $user = $this->ion_auth->user()->row(); // Mengambil data user yang sedang login
        $data = [
            'user'             => $user,
            'judul'            => 'Dokumen Guru',
            'subjudul'        => 'Daftar dokumen',
            'setting'        => $setting
        ];

        $tp = $this->dashboard->getTahunActive();
        $smt = $this->dashboard->getSemesterActive();

        $data['tp'] = $this->dashboard->getTahun();
        $data['tp_active'] = $tp;
        $data['smt'] = $this->dashboard->getSemester();
        $data['smt_active'] = $smt;

        // Memuat view yang sesuai
        if ($this->ion_auth->is_admin()) {
            $id_guru = $this->input->get('id');

            $data['profile'] = $this->dashboard->getProfileAdmin($user->id);
            $allGuru = $this->dropdown->getAllGuruDokumen();
            // array_unshift($allGuru, ['00' => 'Semua Guru']);
            $data['gurus'] = $allGuru;
            $data['id_guru'] = $id_guru == null ? '' : $id_guru;

            // Mendapatkan dokumen berdasarkan ID guru (jika diberikan)
            if ($id_guru != null) {
                $dokumen = $this->dokumen->getDataDokumenByUserId($id_guru);
            } else {
                $dokumen = $this->dokumen->getDataDokumen();  // Jika ID guru tidak diberikan, ambil semua dokumen
            }

            $data['dokumens'] = $dokumen;

            $this->load->view('_templates/dashboard/_header', $data);
            $this->load->view('master/dokumen/data');
            $this->load->view('_templates/dashboard/_footer');
        } elseif ($this->ion_auth->in_group('guru')) {
            $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
            if ($guru == null) {
                $this->load->view('disable_login', $data);
            } else {
                $data['guru'] = $guru;
                $data['dokumens'] = $this->dokumen->getDataDokumenByUserId($user->id);

                $this->load->view('members/guru/templates/header', $data);
                $this->load->view('master/dokumen/data');
                $this->load->view('members/guru/templates/footer');
            }
        }
    }


    public function store()
    {
        $nama_dokumen = $this->input->post('nama_dokumen');
        $link_dokumen = $this->input->post('link_dokumen');
        $user = $this->ion_auth->user()->row();

        $insert = array(
            'nama_dokumen' => $nama_dokumen,
            'link_dokumen' => $link_dokumen,
            'id_user' => $user->id,
        );

        $this->dokumen->insertDataDokumen($insert);
        $data["status"] = $insert;
        $this->output_json($data);
    }

    public function update()
    {
        $id_dokumen = $this->input->post('id_dokumen');
        $nama_dokumen = $this->input->post('nama_dokumen');
        $link_dokumen = $this->input->post('link_dokumen');
        $insert = array(
            'nama_dokumen' => $nama_dokumen,
            'link_dokumen' => $link_dokumen
        );

        $this->dokumen->updateDataDokumen($id_dokumen, $insert);
        $data["status"] = $insert;
        $this->output_json($data);
    }

    public function delete()
    {
        // Mengambil data yang dikirimkan melalui metode POST
        $ids = $this->input->post('checked', true);

        // Memastikan ada data yang dipilih
        if (!$ids) {
            $this->output->set_content_type('application/json')->set_output(json_encode(['status' => false, 'message' => 'Tidak ada data yang dipilih']));
            return;
        }

        // Memuat model Dokumen_Model
        $this->load->model('Dokumen_Model');

        // Memanggil fungsi deleteDataDokumen dari model untuk menghapus data
        $deleted_count = $this->dokumen->deleteDataDokumen($ids);

        // Mengecek apakah ada data yang berhasil dihapus
        if ($deleted_count > 0) {
            $this->output->set_content_type('application/json')->set_output(json_encode(['status' => true, 'message' => 'Data berhasil dihapus', 'total_deleted' => $deleted_count]));
        } else {
            $this->output->set_content_type('application/json')->set_output(json_encode(['status' => false, 'message' => 'Gagal menghapus data']));
        }
    }
}
