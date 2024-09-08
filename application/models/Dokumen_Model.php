<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen_Model extends CI_Model {

    function getDataDokumen() {
        $query = $this->db->get('master_dokumen');
        return $query->result();
    }
    
    function getDataDokumenByUserId($id_user) {
        $this->db->where('id_user', $id_user);
        $query = $this->db->get('master_dokumen');
        return $query->result();
    }

    function insertDataDokumen($data) {
        $this->db->insert('master_dokumen', $data);
    }

    function updateDataDokumen($id_dokumen, $data) {
        $this->db->where('id_dokumen', $id_dokumen);
        $this->db->update('master_dokumen', $data);
    }

    public function deleteDataDokumen($ids) {
        // Menghapus dokumen berdasarkan id_dokumen yang diberikan
        $this->db->where_in('id_dokumen', $ids);
        $this->db->delete('master_dokumen');

        // Mengembalikan jumlah dokumen yang berhasil dihapus
        return $this->db->affected_rows();
    }
}
