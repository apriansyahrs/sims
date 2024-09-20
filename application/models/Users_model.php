<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{

    public function getDatausers($id = null)
    {
        $this->db->query('SET SQL_BIG_SELECTS=1');
        $this->datatables->select('users.id, username, first_name, last_name, email, FROM_UNIXTIME(created_on) as created_on, last_login, active, groups.name as level');
        $this->datatables->from('users_groups');
        $this->datatables->join('users', 'users_groups.user_id=users.id');
        $this->datatables->join('groups', 'users_groups.group_id=groups.id');
        if ($id !== null) {
            $this->datatables->where('users.id !=', $id);
        }
        return $this->datatables->generate();
    }

    public function getLevelGuru()
    {
        return $this->db->get('level_guru')->result();
    }

    public function getDataadmin()
    {
        $this->db->query('SET SQL_BIG_SELECTS=1');
        $this->datatables->select('users.id, username, first_name, last_name, email, FROM_UNIXTIME(created_on) as created_on, last_login, active, groups.name as level');
        $this->datatables->from('users_groups');
        $this->datatables->join('users', 'users_groups.user_id=users.id');
        $this->datatables->join('groups', 'users_groups.group_id=groups.id');
        $this->datatables->where('group_id =', 1);
        return $this->datatables->generate();
    }

    public function getUserGuru($tp, $smt)
    {
        $this->db->query('SET SQL_BIG_SELECTS=1');
        $this->datatables->select('a.id_guru, a.nama_guru, a.username, a.password, c.level, e.id, ' .
            '(SELECT COUNT(id) FROM users WHERE e.username = a.username) AS aktif, ' .
            '(SELECT COUNT(login) FROM login_attempts WHERE login_attempts.login = a.username) AS reset');
        $this->datatables->from('master_guru a');
        $this->datatables->join('jabatan_guru b', 'a.id_guru=b.id_guru AND b.id_tp=' . $tp . ' AND b.id_smt=' . $smt . '', 'left');
        $this->datatables->join('level_guru c', 'b.id_jabatan=c.id_level', 'left');
        $this->datatables->join('users e', 'a.username=e.username', 'left');
        return $this->datatables->generate();
    }

    public function getDataGuru($id)
    {
        $this->db->select('*');
        $this->db->from('master_guru');
        $this->db->where('id_guru', $id);
        return $this->db->get()->row();
    }

    public function getDetailGuru($id)
    {
        $this->db->query('SET SQL_BIG_SELECTS=1');
        $this->db->select('a.id_guru, a.nama_guru, a.username, a.password, a.email, c.level, e.id, (SELECT COUNT(id) FROM users WHERE e.username = a.username) AS aktif');
        $this->db->from('master_guru a');
        $this->db->join('jabatan_guru b', 'a.id_guru=b.id_guru', 'left');
        $this->db->join('level_guru c', 'b.id_jabatan=c.id_level', 'left');
        $this->db->join('users e', 'a.username=e.username', 'left');
        $this->db->where('a.id_guru', $id);
        return $this->db->get()->row();
    }

    public function getGuruAktif()
    {
        $this->db->select('a.id_guru, c.id, (SELECT COUNT(id) FROM users WHERE users.username = a.username) AS aktif');
        $this->db->join('users c', 'a.username=c.username', 'left');
        return $this->db->get('master_guru a')->result();
    }

    public function getGuruByUsername($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('master_guru')->row();
    }

    public function getSiswaByUsername($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('master_siswa')->row();
    }

    public function getUsers($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('users')->row();
    }

    public function getGroupSiswa()
    {
        $this->db->select('*');
        $this->db->from('users_groups a');
        $this->db->join('users b', 'a.user_id=b.id', 'left');
        $this->db->where('group_id', 3);
        return $this->db->get()->result();
    }

    public function getKelas($tp, $smt)
    {
        $this->db->where('id_tp', $tp);
        $this->db->where('id_smt', $smt);
        return $this->db->get('master_kelas')->result();
    }

    public function getMapel()
    {
        return $this->db->get('master_mapel')->result();
    }

    public function getUserSiswaPage($id_tp, $id_smt, $offset, $limit, $search = null, $sort = null, $order = null)
    {
        $this->db->select('a.id_siswa, a.nis, a.foto, a.nama, a.username, a.password, d.id_kelas, ' .
            'f.nama_kelas, (SELECT COUNT(id) FROM users WHERE users.username = a.username) AS aktif, ' .
            '(SELECT COUNT(login) FROM login_attempts WHERE login_attempts.login = a.username) AS reset');
        $this->db->from('master_siswa a');
        $this->db->limit($limit, $offset);
        $this->db->join('kelas_siswa d', 'd.id_siswa=a.id_siswa AND d.id_tp = ' . $id_tp . ' AND d.id_smt = ' . $id_smt . '', 'left');
        $this->db->join('master_kelas f', 'f.id_kelas=d.id_kelas', 'left');
        //$this->db->join('users u', 'u.username=a.username', 'left');
        $this->db->order_by('ISNULL(f.level_id), f.level_id ASC');
        $this->db->order_by('f.nama_kelas', 'ASC');
        $this->db->order_by('a.nama', 'ASC');

        if ($search != null) {
            $this->db->like('a.nama', $search);
            $this->db->or_like('a.nis', $search);
            $this->db->or_like('a.nisn', $search);
        }
        return $this->db->get()->result();
    }

    public function getUserSiswaTotalPage($search = null)
    {
        $this->db->select('id_siswa');
        $this->db->from('master_siswa');
        if ($search != null) {
            $this->db->like('nama', $search);
            $this->db->or_like('nis', $search);
            $this->db->or_like('nisn', $search);
        }
        return $this->db->get()->num_rows();
    }

    public function getUserSiswa($tp, $smt)
    {
        $this->db->query('SET SQL_BIG_SELECTS=1');
        $this->datatables->select('a.id_siswa, a.nis,.a.nama, a.username, a.password, c.nama_kelas, d.id, (SELECT COUNT(id) FROM users WHERE d.username = a.username) AS aktif');
        $this->datatables->from('master_siswa a');
        $this->datatables->join('kelas_siswa b', 'b.id_siswa=a.id_siswa AND b.id_tp=' . $tp . ' AND b.id_smt=' . $smt . '', 'left');
        $this->datatables->join('master_kelas c', 'c.id_kelas=b.id_kelas', 'left');
        $this->datatables->join('users d', 'd.username=a.username', 'left');
        return $this->datatables->generate();
    }

    public function getDataSiswa($id)
    {
        $this->db->select('nis, nisn, nama, username, password'); // tambahkan kolom yang diperlukan
        $this->db->from('master_siswa');
        $this->db->where('id_siswa', $id);
        return $this->db->get()->row();
    }

    public function getSiswaAktif($ids_user = null)
    {
        $this->db->select('a.id_siswa, a.nis, a.nisn, a.username, a.password, a.nama, c.id, (SELECT COUNT(id) FROM users WHERE users.username = a.username) AS aktif');
        if ($ids_user != null) $this->db->where_in('a.id_siswa', $ids_user);
        $this->db->join('users c', 'a.username=c.username', 'left');
        return $this->db->get('master_siswa a')->result();
    }

    // Fungsi untuk mengambil data orang tua dengan pagination dan data aktif
    public function getUserOrangTuaPage($tp, $smt, $offset, $limit, $search = null)
    {
        // Query untuk Ayah
        $queryAyah = $this->db->select('CONCAT(id_siswa, "_Ayah") AS unique_id, id_siswa, nama AS nama_siswa, nama_ayah AS nama_orang_tua, nohp_ayah AS username, "Ayah" AS status_keluarga, ' .
            '(SELECT COUNT(id) FROM users WHERE users.username = nohp_ayah) AS aktif, ' .
            '(SELECT COUNT(login) FROM login_attempts WHERE login_attempts.login = nohp_ayah) AS reset')
            ->from('master_siswa')
            ->where('nama_ayah IS NOT NULL AND nama_ayah != ""')
            ->where('nohp_ayah IS NOT NULL AND nohp_ayah != ""');

        // Tambahkan pencarian di query Ayah jika ada
        if ($search) {
            $queryAyah->group_start()
                ->like('nama_ayah', $search)
                ->or_like('nama', $search) // Pencarian juga pada nama siswa
                ->group_end();
        }
        $queryAyah = $queryAyah->get_compiled_select();

        // Query untuk Ibu
        $queryIbu = $this->db->select('CONCAT(id_siswa, "_Ibu") AS unique_id, id_siswa, nama AS nama_siswa, nama_ibu AS nama_orang_tua, nohp_ibu AS username, "Ibu" AS status_keluarga, ' .
            '(SELECT COUNT(id) FROM users WHERE users.username = nohp_ibu) AS aktif, ' .
            '(SELECT COUNT(login) FROM login_attempts WHERE login_attempts.login = nohp_ibu) AS reset')
            ->from('master_siswa')
            ->where('nama_ibu IS NOT NULL AND nama_ibu != ""')
            ->where('nohp_ibu IS NOT NULL AND nohp_ibu != ""');

        // Tambahkan pencarian di query Ibu jika ada
        if ($search) {
            $queryIbu->group_start()
                ->like('nama_ibu', $search)
                ->or_like('nama', $search) // Pencarian juga pada nama siswa
                ->group_end();
        }
        $queryIbu = $queryIbu->get_compiled_select();

        // Query untuk Wali
        $queryWali = $this->db->select('CONCAT(id_siswa, "_Wali") AS unique_id, id_siswa, nama AS nama_siswa, nama_wali AS nama_orang_tua, nohp_wali AS username, "Wali" AS status_keluarga, ' .
            '(SELECT COUNT(id) FROM users WHERE users.username = nohp_wali) AS aktif, ' .
            '(SELECT COUNT(login) FROM login_attempts WHERE login_attempts.login = nohp_wali) AS reset')
            ->from('master_siswa')
            ->where('nama_wali IS NOT NULL AND nama_wali != ""')
            ->where('nohp_wali IS NOT NULL AND nohp_wali != ""');

        // Tambahkan pencarian di query Wali jika ada
        if ($search) {
            $queryWali->group_start()
                ->like('nama_wali', $search)
                ->or_like('nama', $search) // Pencarian juga pada nama siswa
                ->group_end();
        }
        $queryWali = $queryWali->get_compiled_select();

        // Gabungkan ketiga query menggunakan UNION ALL
        $finalQuery = "($queryAyah) UNION ALL ($queryIbu) UNION ALL ($queryWali)";

        // Eksekusi query akhir dengan pagination
        $this->db->from("($finalQuery) as orangtua");
        $this->db->limit($limit, $offset);

        return $this->db->get()->result();
    }

    // Fungsi untuk mengambil total data orang tua
    public function getUserOrangTuaTotalPage($search = null)
    {
        // Query untuk Ayah
        $queryAyah = $this->db->select('id_siswa')
            ->from('master_siswa')
            ->where('nama_ayah IS NOT NULL AND nama_ayah != ""')
            ->where('nohp_ayah IS NOT NULL AND nohp_ayah != ""'); // Tambahkan kondisi nomor HP

        // Tambahkan pencarian di query Ayah jika ada
        if ($search) {
            $queryAyah->group_start()
                ->like('nama_ayah', $search)
                ->or_like('nama', $search) // Pencarian juga pada nama siswa
                ->group_end();
        }
        $queryAyah = $queryAyah->get_compiled_select();

        // Query untuk Ibu
        $queryIbu = $this->db->select('id_siswa')
            ->from('master_siswa')
            ->where('nama_ibu IS NOT NULL AND nama_ibu != ""')
            ->where('nohp_ibu IS NOT NULL AND nohp_ibu != ""'); // Tambahkan kondisi nomor HP

        // Tambahkan pencarian di query Ibu jika ada
        if ($search) {
            $queryIbu->group_start()
                ->like('nama_ibu', $search)
                ->or_like('nama', $search) // Pencarian juga pada nama siswa
                ->group_end();
        }
        $queryIbu = $queryIbu->get_compiled_select();

        // Query untuk Wali
        $queryWali = $this->db->select('id_siswa')
            ->from('master_siswa')
            ->where('nama_wali IS NOT NULL AND nama_wali != ""')
            ->where('nohp_wali IS NOT NULL AND nohp_wali != ""'); // Tambahkan kondisi nomor HP

        // Tambahkan pencarian di query Wali jika ada
        if ($search) {
            $queryWali->group_start()
                ->like('nama_wali', $search)
                ->or_like('nama', $search) // Pencarian juga pada nama siswa
                ->group_end();
        }
        $queryWali = $queryWali->get_compiled_select();

        // Gabungkan ketiga query menggunakan UNION ALL
        $finalQuery = "($queryAyah) UNION ALL ($queryIbu) UNION ALL ($queryWali)";

        // Hitung total baris hasil dari UNION ALL
        $this->db->from("($finalQuery) as orangtua");

        return $this->db->count_all_results();
    }

    // Fungsi untuk mengambil data orang tua berdasarkan ID siswa
    public function getDataOrangtuaSiswa($id)
    {
        $this->db->select('nis, nisn, nama, nama_ayah, nohp_ayah, nama_ibu, nohp_ibu, nama_wali, nohp_wali'); // tambahkan kolom yang diperlukan
        $this->db->from('master_siswa');
        $this->db->where('id_siswa', $id);
        return $this->db->get()->row();
    }

    // Fungsi untuk mengambil detail orang tua berdasarkan ID
    public function getDataOrangTua($id)
    {
        $this->db->select('nama_ayah, nama_ibu, nama_wali');
        $this->db->from('master_siswa');
        $this->db->where('id_siswa', $id);
        return $this->db->get()->row();
    }

    public function getOrangtuaAktif($ids_orangtua = null)
    {
        // Query untuk Ayah
        $queryAyah = $this->db->select('id_siswa, nama AS nama_siswa, nama_ayah AS nama_orang_tua, nohp_ayah AS username, "Ayah" AS status_keluarga, 
                                    (SELECT COUNT(id) FROM users WHERE users.username = nohp_ayah) AS aktif')
            ->from('master_siswa')
            ->where('nama_ayah IS NOT NULL AND nama_ayah != ""');

        if ($ids_orangtua != null) {
            $queryAyah->where_in('id_siswa', $ids_orangtua);
        }
        $queryAyah = $queryAyah->get_compiled_select();

        // Query untuk Ibu
        $queryIbu = $this->db->select('id_siswa, nama AS nama_siswa, nama_ibu AS nama_orang_tua, nohp_ibu AS username, "Ibu" AS status_keluarga, 
                                   (SELECT COUNT(id) FROM users WHERE users.username = nohp_ibu) AS aktif')
            ->from('master_siswa')
            ->where('nama_ibu IS NOT NULL AND nama_ibu != ""');

        if ($ids_orangtua != null) {
            $queryIbu->where_in('id_siswa', $ids_orangtua);
        }
        $queryIbu = $queryIbu->get_compiled_select();

        // Query untuk Wali
        $queryWali = $this->db->select('id_siswa, nama AS nama_siswa, nama_wali AS nama_orang_tua, nohp_wali AS username, "Wali" AS status_keluarga, 
                                    (SELECT COUNT(id) FROM users WHERE users.username = nohp_wali) AS aktif')
            ->from('master_siswa')
            ->where('nama_wali IS NOT NULL AND nama_wali != ""');

        if ($ids_orangtua != null) {
            $queryWali->where_in('id_siswa', $ids_orangtua);
        }
        $queryWali = $queryWali->get_compiled_select();

        // Gabungkan ketiga query menggunakan UNION ALL
        $finalQuery = "($queryAyah) UNION ALL ($queryIbu) UNION ALL ($queryWali)";

        // Eksekusi query akhir
        $this->db->from("($finalQuery) as orangtua");

        return $this->db->get()->result();
    }
}
