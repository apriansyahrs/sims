<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\102\x41\x53\105\x50\101\124\110") or exit("\116\157\x20\x64\x69\162\145\143\x74\x20\163\143\162\151\160\164\40\141\x63\x63\145\163\x73\x20\x61\x6c\x6c\157\167\x65\x64");
class Dashboard_model extends CI_Model
{
    public function getSetting()
    {
        return $this->db->get("\x73\x65\x74\164\x69\156\x67")->row();
    }
    public function getRunningText()
    {
        return $this->db->get("\162\x75\x6e\x6e\x69\156\147\x5f\164\x65\170\164")->result();
    }
    public function total($table, $where = null)
    {
        goto BnGBV;
        BnGBV:
        if (!($where != null)) {
            goto Md7mc;
        }
        goto VKgC2;
        VKgC2:
        $this->db->where($where);
        goto Mn7ZR;
        DT471:
        return $query;
        goto RcKFJ;
        OpOD3:
        $query = $this->db->get($table)->num_rows();
        goto DT471;
        Mn7ZR:
        Md7mc:
        goto OpOD3;
        RcKFJ:
    }
    public function hapus($table, $data, $pk)
    {
        $this->db->where_in($pk, $data);
        return $this->db->delete($table);
    }
    public function getProfileAdmin($id_user)
    {
        goto exwZm;
        fmbNp:
        return $query;
        goto kMNrb;
        f2Lm1:
        $query = $this->db->get()->row();
        goto fmbNp;
        fWoyq:
        $this->db->join("\x75\163\145\162\163\x5f\x70\x72\x6f\146\151\154\145\40\x62", "\x61\56\151\144\x3d\142\56\x69\x64\x5f\x75\x73\145\162", "\x6c\x65\x66\x74");
        goto cKX8e;
        Fsx0h:
        $this->db->from("\165\163\x65\162\x73\x20\x61");
        goto fWoyq;
        exwZm:
        $this->db->select("\x62\x2e\x2a");
        goto Fsx0h;
        cKX8e:
        $this->db->where("\141\x2e\151\144", $id_user);
        goto f2Lm1;
        kMNrb:
    }
    public function totalWaliKelas($id_tp, $id_smt)
    {
        goto cDORp;
        X0S17:
        return $query;
        goto uyloP;
        JSk3u:
        $this->db->where("\151\x64\x5f\164\160", $id_tp);
        goto o0sBh;
        o0sBh:
        $this->db->where("\151\x64\x5f\x73\x6d\164", $id_smt);
        goto Jf64W;
        cDORp:
        $this->db->where("\x69\144\x5f\152\x61\142\x61\x74\x61\156", "\x34");
        goto JSk3u;
        Jf64W:
        $query = $this->db->get("\x6a\141\142\141\164\141\x6e\x5f\147\165\x72\x75")->num_rows();
        goto X0S17;
        uyloP:
    }
    public function totalSiswaKelas($id_kelas, $id_tp, $id_smt)
    {
        goto qIjE5;
        bWkeF:
        $this->db->from("\x6b\145\x6c\x61\163\137\x73\151\163\167\141\x20\141");
        goto U8NeF;
        qHhxo:
        $query = $this->db->get()->num_rows();
        goto h1BaU;
        Ux876:
        $this->db->where("\x61\56\151\144\x5f\153\x65\x6c\141\163", $id_kelas);
        goto qHhxo;
        h1BaU:
        return $query;
        goto qS0AE;
        t22Ci:
        $this->db->where("\x61\56\x69\144\137\x73\155\x74", $id_smt);
        goto Ux876;
        U8NeF:
        $this->db->where("\x61\x2e\151\x64\137\164\160", $id_tp);
        goto t22Ci;
        qIjE5:
        $this->db->select("\x61\56\151\x64\137\163\151\163\167\141");
        goto bWkeF;
        qS0AE:
    }
    public function totalPengawas()
    {
        goto ODo20;
        ODo20:
        $this->db->select("\x2a");
        goto PGR2n;
        vu8_X:
        return $query;
        goto u0ahR;
        PGR2n:
        $this->db->where("\151\144\x5f\152\141\x64\167\141\154\40\41\x3d", "\141\x3a\x30\x3a\x7b\x7d");
        goto pgeOw;
        pgeOw:
        $query = $this->db->get("\143\142\164\137\x70\x65\156\147\x61\x77\x61\163")->num_rows();
        goto vu8_X;
        u0ahR:
    }
    public function totalJadwal()
    {
        goto FXxlB;
        Q1jAo:
        $query = $this->db->get("\143\x62\x74\137\152\141\x64\167\x61\x6c")->num_rows();
        goto NX2Eu;
        FXxlB:
        $this->db->select("\x2a");
        goto Q1jAo;
        NX2Eu:
        return $query;
        goto F2xFT;
        F2xFT:
    }
    public function getDataTahun()
    {
        goto zPySf;
        nBtur:
        return $this->datatables->generate();
        goto YCDAn;
        OiYIw:
        $this->datatables->from("\x6d\x61\x73\164\145\162\x5f\164\160");
        goto nBtur;
        zPySf:
        $this->datatables->select("\151\144\x5f\x74\160\54\x20\164\x61\150\165\x6e\x2c\40\141\143\x74\151\x76\145");
        goto OiYIw;
        YCDAn:
    }
    public function getTahun()
    {
        goto f8po_;
        f8po_:
        $this->db->order_by("\164\141\150\165\x6e", "\101\123\103");
        goto N9Llr;
        N9Llr:
        $result = $this->db->get("\155\141\163\164\x65\162\x5f\x74\160")->result();
        goto ha2Td;
        ha2Td:
        return $result;
        goto smXuA;
        smXuA:
    }
    public function getTahunById($id)
    {
        $result = $this->db->get_where("\155\x61\163\164\x65\162\137\164\x70", "\151\144\x5f\x74\160\75" . $id)->row();
        return $result;
    }
    public function getTahunByTahun($tahun)
    {
        $result = $this->db->get_where("\155\141\163\x74\x65\162\x5f\164\160", "\164\141\x68\x75\156\75" . "\42" . $tahun . "\x22")->row();
        return $result;
    }
    public function getTahunActive()
    {
        goto OiRN5;
        OiRN5:
        $this->db->select("\151\x64\x5f\x74\x70\54\x20\164\141\x68\x75\x6e");
        goto yl37w;
        XfJ1n:
        $this->db->where("\x61\143\164\x69\x76\x65", 1);
        goto Rd1Gz;
        Rd1Gz:
        $result = $this->db->get()->row();
        goto joHpt;
        yl37w:
        $this->db->from("\x6d\141\x73\x74\x65\162\137\x74\x70");
        goto XfJ1n;
        joHpt:
        return $result;
        goto uPxfe;
        uPxfe:
    }
    public function getSemester()
    {
        goto bnGsE;
        bnGsE:
        $this->db->order_by("\x73\x6d\x74", "\x41\123\x43");
        goto IAvTi;
        IAvTi:
        $result = $this->db->get("\155\141\x73\x74\145\162\137\163\x6d\x74")->result();
        goto R1x__;
        R1x__:
        return $result;
        goto vpCpX;
        vpCpX:
    }
    public function getSemesterById($id)
    {
        $result = $this->db->get_where("\155\x61\x73\164\x65\162\137\163\155\164", "\x69\x64\137\163\x6d\164\x3d" . $id)->row();
        return $result;
    }
    public function getSemesterByNama($nama_smt)
    {
        $result = $this->db->get_where("\x6d\141\x73\164\145\x72\137\x73\155\x74", "\x6e\141\155\141\137\x73\x6d\164\x3d" . "\42" . $nama_smt . "\x22")->row();
        return $result;
    }
    public function getSemesterActive()
    {
        goto cbonR;
        LtpaD:
        $this->db->where("\x61\x63\x74\x69\x76\145", 1);
        goto AOK3X;
        Kn0qh:
        $this->db->from("\x6d\x61\163\x74\145\162\137\x73\x6d\x74");
        goto LtpaD;
        xkcYD:
        return $result;
        goto j3_tY;
        cbonR:
        $this->db->select("\151\x64\137\163\155\x74\54\40\x6e\x61\x6d\141\x5f\x73\155\x74\x2c\40\163\x6d\x74");
        goto Kn0qh;
        AOK3X:
        $result = $this->db->get()->row();
        goto xkcYD;
        j3_tY:
    }
    public function getDataGuruByUserId($id_user, $id_tp, $id_smt)
    {
        goto NIlCI;
        pDOyH:
        $this->db->join("\x6c\x65\x76\145\154\137\153\x65\x6c\x61\x73\40\x67", "\x66\x2e\154\145\x76\x65\x6c\x5f\151\144\x3d\147\56\151\144\x5f\154\145\x76\145\x6c", "\x6c\x65\146\164");
        goto JQ5W6;
        fRapE:
        $this->db->join("\x6c\145\166\x65\x6c\x5f\147\165\x72\165\40\x65", "\142\56\x69\144\x5f\152\141\x62\x61\x74\x61\156\x3d\145\x2e\151\x64\137\x6c\145\166\145\x6c", "\x6c\x65\146\x74");
        goto BjgoU;
        kwL0H:
        $this->db->from("\x6d\141\x73\164\x65\162\137\147\165\x72\x75\x20\141");
        goto L9wL0;
        L9wL0:
        $this->db->join("\152\x61\142\x61\x74\141\x6e\137\x67\x75\x72\165\40\x62", "\x61\56\151\x64\x5f\147\165\x72\x75\75\x62\56\151\144\x5f\x67\x75\162\x75\40\101\116\104\x20\142\56\151\x64\137\164\x70\75" . $id_tp . "\40\x41\116\104\40\142\56\151\x64\137\x73\x6d\164\x3d" . $id_smt, "\x6c\x65\x66\164");
        goto fRapE;
        JQ5W6:
        $this->db->where("\141\x2e\x69\x64\x5f\165\x73\x65\x72", $id_user);
        goto CgQug;
        evNuu:
        $this->db->select("\141\x2e\x69\144\x5f\147\x75\x72\165\x2c\x20\x61\x2e\x6e\x61\x6d\x61\x5f\147\x75\x72\165\x2c\40\x61\56\x6e\151\160\54\40\x61\56\151\x64\137\x75\x73\x65\162\x2c\x20\141\56\146\x6f\164\x6f\54\x20\x62\56\151\144\x5f\152\x61\142\x61\x74\141\156\x2c\40\142\56\x69\x64\137\x6b\145\x6c\x61\x73\x20\141\x73\40\167\x61\x6c\x69\x5f\153\145\x6c\x61\x73\54\40\146\56\x6c\145\x76\145\x6c\x5f\151\144\x2c\40\x67\x2e\x6c\x65\166\x65\154");
        goto kwL0H;
        BjgoU:
        $this->db->join("\155\141\x73\x74\x65\x72\x5f\x6b\x65\x6c\141\163\40\146", "\141\56\151\x64\137\147\165\x72\165\x3d\x66\x2e\x67\165\x72\x75\137\x69\x64\x20\101\x4e\104\x20\x66\56\151\x64\137\x74\x70\75" . $id_tp . "\x20\101\x4e\104\40\x66\x2e\x69\x64\x5f\163\x6d\x74\75" . $id_smt, "\x6c\x65\x66\x74");
        goto pDOyH;
        iIMqu:
        return $query;
        goto gokVb;
        CgQug:
        $query = $this->db->get()->row();
        goto iIMqu;
        NIlCI:
        $this->db->query("\x53\x45\x54\40\123\x51\114\x5f\x42\111\107\x5f\123\105\114\105\x43\x54\123\x3d\61");
        goto evNuu;
        gokVb:
    }
    public function getDataGuruById($id_guru, $id_tp, $id_smt)
    {
        goto pfken;
        Qz7YH:
        $query = $this->db->get()->row();
        goto Eq4nV;
        OOWoR:
        $this->db->join("\x6c\145\x76\x65\x6c\137\147\x75\x72\x75\x20\x65", "\142\56\x69\x64\137\x6a\141\142\141\x74\x61\156\x3d\145\x2e\x69\144\137\x6c\145\166\145\x6c", "\154\x65\x66\164");
        goto C8vNR;
        pfken:
        $this->db->query("\123\105\x54\x20\x53\121\114\137\x42\111\x47\x5f\123\105\x4c\x45\x43\x54\123\75\x31");
        goto b4Wem;
        fKKME:
        $this->db->from("\155\x61\x73\x74\145\x72\x5f\x67\165\x72\x75\40\141");
        goto pD5za;
        g9skC:
        $this->db->where("\141\x2e\151\x64\137\x67\165\x72\x75", $id_guru);
        goto Qz7YH;
        pD5za:
        $this->db->join("\152\141\142\x61\164\x61\156\x5f\147\x75\x72\x75\x20\x62", "\x61\x2e\x69\144\x5f\x67\x75\x72\165\x3d\x62\56\x69\x64\x5f\147\165\162\x75\40\101\116\x44\40\x62\56\x69\x64\137\x74\x70\x3d" . $id_tp . "\40\x41\x4e\x44\x20\142\x2e\151\144\137\x73\x6d\164\x3d" . $id_smt, "\x6c\145\x66\x74");
        goto OOWoR;
        Eq4nV:
        return $query;
        goto E9rF7;
        b4Wem:
        $this->db->select("\141\x2e\151\x64\x5f\x67\x75\162\165\54\40\141\x2e\x6e\x61\155\141\x5f\x67\165\162\x75\x2c\x20\141\56\x6e\x69\x70\x2c\x20\x61\x2e\151\x64\x5f\x75\163\x65\162\54\40\141\56\146\x6f\164\157\x2c\40\142\56\x69\x64\x5f\x6a\x61\x62\141\164\x61\x6e\x2c\40\142\56\x69\x64\137\153\145\x6c\141\x73\x20\x61\163\x20\167\141\x6c\x69\137\x6b\145\x6c\141\163\x2c\x20\x66\x2e\154\x65\x76\145\154\137\x69\144\x2c\x20\x67\x2e\154\x65\166\x65\154");
        goto fKKME;
        C8vNR:
        $this->db->join("\155\141\x73\x74\145\x72\137\153\145\154\141\x73\40\x66", "\x61\x2e\x69\144\137\x67\165\162\x75\75\146\56\x67\x75\162\x75\x5f\x69\144\40\101\x4e\104\40\146\56\x69\x64\137\x74\x70\75" . $id_tp . "\40\x41\x4e\x44\40\x66\56\x69\144\x5f\x73\x6d\164\x3d" . $id_smt, "\154\145\146\x74");
        goto GGDrw;
        GGDrw:
        $this->db->join("\154\145\166\145\x6c\x5f\x6b\145\x6c\141\163\x20\147", "\146\56\154\x65\166\145\154\x5f\151\144\75\x67\x2e\151\144\x5f\154\x65\x76\145\x6c", "\x6c\x65\146\164");
        goto g9skC;
        E9rF7:
    }
    public function getListGuruByUserId($id_tp, $id_smt)
    {
        goto o7Qwa;
        DF_FP:
        $this->db->join("\x6d\x61\163\x74\x65\162\137\153\145\154\141\x73\x20\x66", "\x61\56\151\x64\137\147\x75\x72\165\75\146\x2e\x67\165\162\x75\x5f\x69\x64\40\101\x4e\104\x20\146\56\x69\x64\x5f\x74\x70\x3d" . $id_tp . "\40\101\x4e\104\40\x66\x2e\x69\x64\137\x73\x6d\x74\x3d" . $id_smt, "\154\145\146\x74");
        goto GTfYN;
        Gs8SR:
        return $rest;
        goto qOx9L;
        HMnsg:
        $query = $this->db->get()->result();
        goto EyUD3;
        f5plv:
        $this->db->select("\141\56\151\x64\137\x67\x75\x72\x75\x2c\x20\141\x2e\x6e\141\x6d\x61\x5f\x67\165\162\x75\x2c\40\141\56\151\x64\137\x75\163\x65\162\54\40\141\56\146\x6f\164\x6f\x2c\x20\x62\56\151\144\137\152\x61\142\x61\164\141\156\x2c\x20\142\x2e\x69\x64\137\x6b\145\x6c\141\163\x20\x61\163\x20\x77\141\x6c\151\x5f\x6b\145\154\141\163\54\40\146\x2e\x6c\x65\166\145\x6c\x5f\x69\144\54\40\147\x2e\x6c\x65\x76\145\154");
        goto qQh2l;
        EyUD3:
        $rest = [];
        goto sXRiC;
        NYBE4:
        H8hZ7:
        goto Gs8SR;
        n0al2:
        $this->db->join("\152\141\142\141\x74\x61\156\x5f\147\165\162\x75\x20\142", "\x61\56\151\144\x5f\x67\165\x72\x75\x3d\x62\56\x69\x64\x5f\147\165\x72\165\x20\x41\x4e\x44\x20\x62\56\x69\144\x5f\x74\x70\x3d" . $id_tp . "\40\101\116\x44\40\x62\x2e\x69\x64\x5f\x73\x6d\164\x3d" . $id_smt, "\154\145\x66\x74");
        goto z6WJY;
        GTfYN:
        $this->db->join("\154\x65\x76\145\x6c\137\153\145\154\x61\x73\x20\147", "\x66\x2e\154\x65\166\x65\154\137\151\x64\75\147\56\x69\144\137\154\145\166\145\154", "\154\145\146\164");
        goto HMnsg;
        o7Qwa:
        $this->db->query("\x53\105\x54\40\x53\x51\114\137\102\111\107\x5f\x53\x45\x4c\x45\103\x54\x53\x3d\x31");
        goto f5plv;
        sXRiC:
        foreach ($query as $guru) {
            $rest[$guru->id_guru] = $guru;
            Q8jHL:
        }
        goto NYBE4;
        z6WJY:
        $this->db->join("\154\x65\x76\145\x6c\137\147\x75\162\165\x20\x65", "\142\56\x69\144\137\x6a\141\x62\x61\x74\x61\156\75\x65\x2e\x69\144\137\154\145\x76\145\x6c", "\x6c\x65\146\164");
        goto DF_FP;
        qQh2l:
        $this->db->from("\155\141\163\164\145\x72\137\147\165\x72\x75\x20\141");
        goto n0al2;
        qOx9L:
    }
    public function getDetailGuruByUserId($id_user, $id_tp, $id_smt)
    {
        goto Zz0kU;
        Btpan:
        $this->db->from("\155\x61\x73\164\145\162\137\147\165\x72\165\x20\141");
        goto NbwlN;
        I7DOI:
        $this->db->join("\154\145\166\145\154\x5f\x67\x75\x72\x75\40\x65", "\x62\56\x69\x64\137\x6a\x61\142\x61\164\141\x6e\75\x65\x2e\151\x64\137\154\145\x76\x65\x6c", "\154\145\146\x74");
        goto W20CZ;
        ZWuAc:
        $this->db->select("\x2a");
        goto Btpan;
        ATiSs:
        $query = $this->db->get()->row();
        goto M5XpU;
        NbwlN:
        $this->db->join("\x6a\x61\x62\x61\x74\141\156\137\147\x75\162\165\x20\x62", "\141\x2e\151\x64\137\x67\x75\162\165\x3d\x62\56\x69\x64\137\147\165\x72\165\40\x41\x4e\104\x20\x62\x2e\151\x64\x5f\x74\x70\75" . $id_tp . "\x20\101\116\104\x20\x62\x2e\x69\x64\137\163\x6d\x74\x3d" . $id_smt, "\154\x65\146\164");
        goto I7DOI;
        W20CZ:
        $this->db->join("\x6d\x61\x73\x74\145\162\x5f\153\x65\154\x61\x73\40\146", "\x61\x2e\151\144\x5f\147\165\162\165\x3d\x66\x2e\x67\165\x72\x75\x5f\151\144\x20\x41\116\x44\x20\x66\x2e\x69\x64\x5f\x74\160\x3d" . $id_tp . "\x20\x41\116\x44\40\146\56\x69\x64\x5f\163\155\x74\75" . $id_smt, "\154\x65\146\164");
        goto mdPZu;
        Zz0kU:
        $this->db->query("\123\x45\x54\x20\123\x51\114\x5f\102\111\107\137\x53\x45\114\105\x43\x54\x53\x3d\61");
        goto ZWuAc;
        M5XpU:
        return $query;
        goto RKqoz;
        mdPZu:
        $this->db->where("\141\x2e\x69\x64\137\165\x73\145\162", $id_user);
        goto ATiSs;
        RKqoz:
    }
    public function getKelasByMapel($id_mapel = null)
    {
        goto YnlFd;
        KyvfH:
        return $query;
        goto lRHKY;
        J89H3:
        $this->db->join("\x6d\x61\x73\x74\145\162\x5f\155\x61\x70\145\x6c\40\142", "\141\x2e\x6d\x61\x70\x65\x6c\137\151\x64\x3d\x62\56\x69\144\x5f\x6d\141\x70\x65\154", "\154\x65\146\164");
        goto sInLn;
        mvTI1:
        $this->db->from("\155\x61\163\164\x65\162\x5f\153\x65\154\x61\x73");
        goto J89H3;
        WElNg:
        $query = $this->db->get()->row();
        goto KyvfH;
        NX_6y:
        $this->db->select("\x2a");
        goto mvTI1;
        sInLn:
        $this->db->join("\x6c\145\x76\x65\x6c\x5f\x67\x75\162\x75\40\x64", "\x61\56\x6c\x65\x76\x65\x6c\x5f\x69\x64\x3d\144\56\151\x64\137\x6c\145\166\145\154", "\154\145\x66\x74");
        goto WElNg;
        YnlFd:
        $this->db->query("\123\x45\x54\40\123\121\114\137\x42\x49\x47\137\123\x45\114\105\x43\124\x53\x3d\x31");
        goto NX_6y;
        lRHKY:
    }
    public function get_where($table, $pk, $id, $join = null, $order = null)
    {
        goto vaExG;
        cYb2K:
        $this->db->where($pk, $id);
        goto yuXmf;
        W1rBs:
        if (!($order !== null)) {
            goto A2pcx;
        }
        goto XIsDs;
        A1PgN:
        w3bCP:
        goto ke7Rr;
        yuXmf:
        if (!($join !== null)) {
            goto rOz_2;
        }
        goto BDW1E;
        xuTs6:
        return $query;
        goto UodJK;
        BDW1E:
        foreach ($join as $table => $field) {
            $this->db->join($table, $field);
            FbOS0:
        }
        goto A1PgN;
        oLSuq:
        V3LuQ:
        goto rysy_;
        vYhgJ:
        $this->db->from($table);
        goto cYb2K;
        XIsDs:
        foreach ($order as $field => $sort) {
            $this->db->order_by($field, $sort);
            I9I59:
        }
        goto oLSuq;
        rysy_:
        A2pcx:
        goto mJhB4;
        ke7Rr:
        rOz_2:
        goto W1rBs;
        vaExG:
        $this->db->select("\x2a");
        goto vYhgJ;
        mJhB4:
        $query = $this->db->get();
        goto xuTs6;
        UodJK:
    }
    public function create($table, $data)
    {
        $insert = $this->db->insert($table, $data);
        return $insert;
    }
    public function update($table, $data, $pk, $id = null, $batch = false)
    {
        goto DWe33;
        DWe33:
        if ($batch === false) {
            goto J5ZZe;
        }
        goto SaN2T;
        ZpSqT:
        J5ZZe:
        goto oWd1v;
        TGpI3:
        goto SkaOm;
        goto ZpSqT;
        iXKvp:
        SkaOm:
        goto KzDkK;
        SaN2T:
        $insert = $this->db->update_batch($table, $data, $pk);
        goto TGpI3;
        oWd1v:
        $insert = $this->db->update($table, $data, array($pk => $id));
        goto iXKvp;
        KzDkK:
        return $insert;
        goto eBY0p;
        eBY0p:
    }
    public function getDataSiswa($username, $id_tp, $id_smt)
    {
        goto EYm3C;
        BRpNV:
        $this->db->join("\x6b\145\x6c\x61\x73\137\x73\151\163\x77\x61\x20\x62", "\x61\56\151\x64\137\163\x69\x73\167\x61\75\142\x2e\151\144\x5f\x73\x69\x73\167\141\40\101\x4e\x44\40\142\56\151\x64\x5f\164\x70\75" . $id_tp . "\x20\101\116\x44\x20\x62\56\x69\144\x5f\163\155\x74\75" . $id_smt, "\154\x65\x66\164");
        goto tCLj5;
        EYm3C:
        $this->db->query("\x53\x45\x54\40\123\x51\x4c\137\102\111\x47\x5f\123\x45\x4c\105\103\124\123\x3d\61");
        goto mvgen;
        F_xJ4:
        $this->db->where("\x75\163\x65\x72\156\141\x6d\x65", $username);
        goto klg6G;
        mvgen:
        $this->db->select("\x2a");
        goto L10jW;
        L10jW:
        $this->db->from("\155\x61\163\164\x65\x72\x5f\x73\151\163\167\x61\x20\141");
        goto BRpNV;
        tTu3X:
        $this->db->join("\x63\x62\x74\x5f\x73\x65\163\x69\x5f\x73\x69\163\x77\141\x20\144", "\141\x2e\x69\144\x5f\163\x69\x73\x77\141\x3d\144\56\x73\151\x73\167\x61\137\151\x64", "\x6c\x65\146\164");
        goto F_xJ4;
        y0_AE:
        return $query;
        goto sW6af;
        tCLj5:
        $this->db->join("\155\x61\163\x74\x65\162\137\x6b\145\x6c\141\x73\x20\x63", "\x62\56\x69\144\x5f\153\x65\x6c\x61\x73\75\x63\x2e\x69\x64\137\x6b\x65\x6c\x61\x73\40\101\x4e\104\40\143\56\151\x64\x5f\x74\x70\75" . $id_tp . "\x20\101\x4e\x44\x20\143\x2e\x69\x64\x5f\x73\x6d\x74\75" . $id_smt, "\x6c\145\146\164");
        goto tTu3X;
        klg6G:
        $query = $this->db->get()->row();
        goto y0_AE;
        sW6af:
    }
    public function loadPengumuman($id_for)
    {
        goto z0jiE;
        IzwrL:
        $this->db->from("\x70\x65\156\147\165\x6d\165\x6d\x61\156\x20\141");
        goto f_XCX;
        cgpkH:
        $query = $this->db->get()->result();
        goto lQl28;
        lQl28:
        return $query;
        goto tBfn6;
        f_XCX:
        $this->db->join("\155\x61\163\x74\145\x72\x5f\x67\165\162\165\x20\142", "\141\x2e\x64\141\162\x69\x3d\x62\x2e\x69\144\x5f\147\x75\162\165", "\x6c\145\x66\x74");
        goto mjXw7;
        z0jiE:
        $this->db->select("\x61\x2e\x2a\54\x20\142\x2e\x6e\x61\x6d\141\x5f\x67\165\162\x75\x2c\x20\x62\x2e\x66\157\x74\157");
        goto IzwrL;
        mjXw7:
        $this->db->where("\x6b\x65\x70\141\x64\x61", $id_for);
        goto cgpkH;
        tBfn6:
    }
    public function loadJadwalHariIni($id_tp, $id_smt, $id_kelas = null, $id_hari = null)
    {
        goto Tf329;
        Q4bta:
        $query = $this->db->get()->result();
        goto fYxBY;
        TtZkS:
        $this->db->where("\141\56\151\144\x5f\x68\x61\162\151", $id_hari);
        goto aHnTB;
        BJsg9:
        if (!($id_kelas != null)) {
            goto v8y1M;
        }
        goto EMZzB;
        zlTAd:
        if (!($id_hari != null)) {
            goto LGA3w;
        }
        goto TtZkS;
        Tf329:
        $this->db->select("\52");
        goto b0yi6;
        b0yi6:
        $this->db->from("\x6b\145\x6c\x61\x73\137\152\141\144\x77\141\x6c\137\155\141\160\145\x6c\x20\x61");
        goto jI2bV;
        hPeMy:
        v8y1M:
        goto zlTAd;
        aHnTB:
        LGA3w:
        goto Q4bta;
        FCQPs:
        $this->db->where("\x61\x2e\x69\144\137\x74\160", $id_tp);
        goto PMKDd;
        fYxBY:
        return $query;
        goto eNG30;
        EMZzB:
        $this->db->where("\x61\56\x69\144\x5f\153\145\x6c\x61\x73", $id_kelas);
        goto hPeMy;
        jI2bV:
        $this->db->join("\155\141\163\164\145\x72\137\155\x61\160\x65\x6c\x20\x62", "\142\x2e\x69\144\x5f\x6d\x61\x70\x65\154\75\x61\x2e\151\144\137\155\x61\160\x65\154", "\154\145\146\x74");
        goto FCQPs;
        PMKDd:
        $this->db->where("\141\56\x69\144\x5f\x73\x6d\x74", $id_smt);
        goto BJsg9;
        eNG30:
    }
    public function getJadwalKbm($id_tp, $id_smt, $id_kelas = null)
    {
        goto QRGVY;
        lNUJz:
        $this->db->where("\151\x64\x5f\x6b\145\154\141\163", $id_kelas);
        goto mw3n1;
        gL3D0:
        fGHSE:
        goto lNUJz;
        QRGVY:
        $this->db->select("\52");
        goto TgyU0;
        TgyU0:
        $this->db->from("\x6b\x65\x6c\141\163\137\x6a\x61\144\167\141\154\137\x6b\x62\155");
        goto AyT34;
        jZTM3:
        return $query;
        goto v8K68;
        iJbKj:
        goto K5kYk;
        goto gL3D0;
        EdWKf:
        K5kYk:
        goto jZTM3;
        bHKGh:
        if ($id_kelas != null) {
            goto fGHSE;
        }
        goto xt3Ju;
        GYP9f:
        $this->db->where("\151\144\x5f\x73\x6d\164", $id_smt);
        goto bHKGh;
        AyT34:
        $this->db->where("\x69\x64\137\x74\160", $id_tp);
        goto GYP9f;
        xt3Ju:
        $query = $this->db->get()->result();
        goto iJbKj;
        mw3n1:
        $query = $this->db->get()->row();
        goto EdWKf;
        v8K68:
    }
}
