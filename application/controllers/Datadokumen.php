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


        // Memuat helper 'directory'
        // $this->load->helper("directory");

        // Memeriksa apakah pengguna telah login
        if (!$this->ion_auth->logged_in()) {
            redirect("auth");
        }

        // Memeriksa apakah pengguna adalah admin
        if ($this->ion_auth->is_admin()) {
            // Jika iya, lanjutkan eksekusi
        } else {
            // Jika bukan, tampilkan pesan error
            show_error("Hanya Admin yang memiliki akses halaman ini", 403, "Akses Dilarang");
        }
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


    public function index()
    {
        $user = $this->ion_auth->user()->row();
        $data['tp_active'] = $this->dashboard->getTahunActive();
        $data['smt_active'] = $this->dashboard->getSemesterActive();
        $data['setting'] = $this->dashboard->getSetting();
        $data['profile'] = $this->dashboard->getProfileAdmin($user->id);
        $data['user'] = $user;
        $data['judul'] = 'Dokumen';
        $data['subjudul'] = 'Daftar Dokumen';
        $data['dokumens'] = $this->dokumen->getDataDokumen();

        // Memuat view yang sesuai
        $this->load->view("_templates/dashboard/_header", $data);
        $this->load->view("master/dokumen/data");
        $this->load->view("_templates/dashboard/_footer");
    }


    public function store()
    {
        $nama_dokumen = $this->input->post('nama_dokumen');
        $link_dokumen = $this->input->post('link_dokumen');
        $insert = array(
            'nama_dokumen' => $nama_dokumen,
            'link_dokumen' => $link_dokumen
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
