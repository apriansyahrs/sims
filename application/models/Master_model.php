<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\102\101\x53\x45\120\101\124\110") or exit("\x4e\157\x20\144\x69\162\145\143\164\x20\163\x63\x72\x69\160\164\x20\x61\x63\143\145\x73\x73\40\x61\x6c\x6c\157\x77\145\144");
class Master_model extends CI_Model
{
    public function create($table, $data, $batch = false)
    {
        goto Yp1T1;
        A5P33:
        K3b5n:
        goto T92uM;
        T92uM:
        return $insert;
        goto EwkMb;
        Yp1T1:
        if ($batch === false) {
            goto CRF5f;
        }
        goto Z2p7g;
        JLrY5:
        CRF5f:
        goto bwGh_;
        Z2p7g:
        $insert = $this->db->insert_batch($table, $data);
        goto qDRq0;
        qDRq0:
        goto K3b5n;
        goto JLrY5;
        bwGh_:
        $insert = $this->db->insert($table, $data);
        goto A5P33;
        EwkMb:
    }
    public function update($table, $data, $pk, $id = null, $batch = false)
    {
        goto QHjH5;
        AVeJi:
        $insert = $this->db->update_batch($table, $data, $pk);
        goto GFglD;
        kaacB:
        dEf8Z:
        goto p8XDk;
        A3DnI:
        return $insert;
        goto JWt7s;
        QHjH5:
        if ($batch === false) {
            goto dEf8Z;
        }
        goto AVeJi;
        GFglD:
        goto dxvNs;
        goto kaacB;
        HKrsO:
        dxvNs:
        goto A3DnI;
        p8XDk:
        $insert = $this->db->update($table, $data, array($pk => $id));
        goto HKrsO;
        JWt7s:
    }
    public function delete($table, $data, $pk)
    {
        goto D8Ic1;
        ZM6s5:
        $this->db->query("\123\x45\x54\40\x46\x4f\122\105\111\107\x4e\x5f\x4b\x45\131\x5f\103\x48\105\103\113\123\x3d\x31");
        goto R08go;
        d0X2s:
        $deleted = $this->db->delete($table);
        goto ZM6s5;
        R08go:
        return $deleted;
        goto kXqfE;
        Ssahc:
        $this->db->where_in($pk, $data);
        goto d0X2s;
        D8Ic1:
        $this->db->query("\123\105\124\40\106\117\x52\x45\111\107\x4e\137\x4b\105\131\x5f\103\110\x45\x43\113\123\x3d\x30");
        goto Ssahc;
        kXqfE:
    }
    public function delete_not($table, $data, $pk, $col, $not)
    {
        goto IVZF0;
        PJ64M:
        $this->db->where($col . "\41\x3d" . $not);
        goto PkKlL;
        PkKlL:
        return $this->db->delete($table);
        goto xlfKj;
        IVZF0:
        $this->db->where_in($pk, $data);
        goto PJ64M;
        xlfKj:
    }
    public function getDataKelas()
    {
        goto OchNR;
        QWuvJ:
        return $this->datatables->generate();
        goto w9hkh;
        OchNR:
        $this->datatables->select("\151\x64\x5f\x6b\145\154\141\x73\x2c\40\156\x61\x6d\x61\137\x6b\x65\x6c\x61\163\x2c\40\x69\x64\x5f\152\x75\x72\x75\x73\141\x6e\x2c\40\x6e\141\155\x61\x5f\x6a\165\162\165\163\x61\x6e");
        goto gWcBl;
        ptlFw:
        $this->datatables->join("\x6d\141\163\164\x65\x72\137\152\165\162\165\x73\x61\x6e", "\152\165\x72\x75\x73\141\156\x5f\x69\144\x3d\151\x64\x5f\x6a\x75\162\x75\163\x61\x6e");
        goto TKrhd;
        TKrhd:
        $this->datatables->add_column("\x62\165\x6c\153\137\x73\145\154\145\x63\164", "\74\144\151\x76\40\x63\154\x61\163\x73\75\x22\164\x65\x78\x74\55\x63\x65\156\x74\145\162\x22\x3e\74\x69\x6e\x70\165\164\x20\164\171\x70\145\x3d\42\143\150\145\143\x6b\x62\x6f\x78\x22\40\x63\154\x61\x73\x73\x3d\x22\143\150\145\x63\153\42\x20\156\x61\155\145\75\42\x63\x68\145\x63\x6b\x65\144\133\135\x22\40\x76\x61\154\165\145\x3d\42\x24\x31\x22\x2f\76\74\57\144\151\166\76", "\151\x64\137\x6b\145\x6c\141\163\54\x20\156\x61\x6d\x61\137\x6b\145\x6c\x61\x73\54\40\151\x64\x5f\152\x75\x72\165\163\x61\x6e\54\x20\156\141\155\141\x5f\x6a\165\x72\x75\x73\x61\156");
        goto QWuvJ;
        gWcBl:
        $this->datatables->from("\155\141\x73\x74\x65\x72\x5f\153\x65\x6c\141\x73");
        goto ptlFw;
        w9hkh:
    }
    public function getKelasById($id)
    {
        goto F_kXn;
        C9R54:
        $this->db->where("\x69\144\137\x6b\x65\x6c\x61\x73", $id);
        goto VtpLk;
        F_kXn:
        $this->db->select("\x69\x64\x5f\x6b\145\x6c\141\x73\54\x20\x6e\x61\155\x61\x5f\153\x65\x6c\x61\163\x2c\x20\x6c\x65\x76\x65\x6c\137\151\x64");
        goto NHAnZ;
        yaaUt:
        return $query;
        goto GUvyc;
        CT_6u:
        $query = $this->db->get()->row();
        goto yaaUt;
        NHAnZ:
        $this->db->from("\155\x61\x73\x74\145\x72\137\153\145\x6c\141\x73");
        goto C9R54;
        VtpLk:
        $this->db->order_by("\156\141\155\141\x5f\153\145\154\x61\x73");
        goto CT_6u;
        GUvyc:
    }
    public function getDataJurusan()
    {
        goto NM286;
        um3E0:
        $this->db->from("\x6d\141\163\164\145\162\x5f\x6a\165\162\x75\163\x61\x6e");
        goto jpWQH;
        jpWQH:
        $result = $this->db->get()->result();
        goto azhXZ;
        azhXZ:
        return $result;
        goto TPobS;
        NM286:
        $this->db->select("\x2a");
        goto um3E0;
        TPobS:
    }
    public function getDataJurusanMapel($arrIds)
    {
        goto xtZYT;
        P_Ts1:
        foreach ($result as $key => $row) {
            $ret[$row->id_mapel] = $row->nama_mapel;
            Gkqva:
        }
        goto XULg5;
        nmk3C:
        return $ret;
        goto tN3dq;
        QvXE_:
        if (!$result) {
            goto iHpAk;
        }
        goto P_Ts1;
        kCqR6:
        $result = $this->db->get()->result();
        goto P4o0a;
        xtZYT:
        $this->db->select("\x69\x64\137\x6d\x61\160\x65\154\x2c\x20\156\x61\x6d\x61\137\x6d\141\x70\145\154");
        goto Lbb6v;
        fNLTn:
        $this->db->where_in("\151\144\137\155\141\x70\x65\154", $arrIds);
        goto kCqR6;
        ihPdK:
        iHpAk:
        goto nmk3C;
        XULg5:
        qSY2S:
        goto ihPdK;
        Lbb6v:
        $this->db->from("\x6d\141\163\x74\145\162\x5f\x6d\x61\x70\x65\x6c");
        goto fNLTn;
        P4o0a:
        $ret = [];
        goto QvXE_;
        tN3dq:
    }
    public function getDataTableJurusan()
    {
        goto a8Xwl;
        g5LMh:
        $this->datatables->from("\x6d\x61\163\x74\145\x72\137\152\165\x72\165\163\x61\156");
        goto ngzlF;
        V7M9g:
        return $this->datatables->generate();
        goto Ng9Av;
        a8Xwl:
        $this->datatables->select("\52");
        goto g5LMh;
        ngzlF:
        $this->db->order_by("\x69\x64\x5f\x6a\x75\x72\x75\x73\141\156");
        goto V7M9g;
        Ng9Av:
    }
    public function getJurusanById($id)
    {
        goto oii3k;
        UWzdI:
        return $query;
        goto lzrzA;
        oii3k:
        $this->db->where_in("\x69\x64\137\152\165\x72\x75\163\x61\156", $id);
        goto CEiiW;
        CEiiW:
        $this->db->order_by("\x6e\x61\155\141\137\152\165\162\x75\x73\x61\156");
        goto Au5NQ;
        Au5NQ:
        $query = $this->db->get("\155\x61\163\x74\145\162\137\x6a\x75\162\165\x73\141\x6e")->result();
        goto UWzdI;
        lzrzA:
    }
    function updateJurusan()
    {
        goto Tw1cD;
        aTKzM:
        $check_mapel = $this->input->post("\x6d\141\x70\x65\x6c", true);
        goto A_mMj;
        HQhhZ:
        $mapels = [];
        goto aTKzM;
        nO7Ix:
        $i++;
        goto VfkUG;
        VfkUG:
        goto lE9T2;
        goto Hv_Tf;
        pr03f:
        $this->db->where("\151\x64\137\x6a\x75\162\x75\163\141\x6e", $id);
        goto p3uKq;
        A_mMj:
        if (!$check_mapel) {
            goto NsI8Z;
        }
        goto mGuCs;
        WcV0O:
        $i = 0;
        goto qa3WM;
        Tw1cD:
        $id = $this->input->post("\x69\x64\137\x6a\x75\162\x75\163\x61\156");
        goto ScUNY;
        mGuCs:
        $row_mapels = count($this->input->post("\x6d\141\160\145\x6c", true));
        goto WcV0O;
        Ccnk9:
        $kode = $this->input->post("\x6b\x6f\x64\145\x5f\x6a\x75\162\165\x73\141\156", true);
        goto HQhhZ;
        fQuGX:
        $this->db->set("\x6d\x61\x70\145\154\137\160\x65\x6d\151\156\141\x74\x61\156", implode("\54", $mapels));
        goto xd9rw;
        zI07k:
        array_push($mapels, $this->input->post("\x6d\141\x70\x65\154\133" . $i . "\135", true));
        goto Q4ne5;
        EWMRp:
        if (!($i <= $row_mapels)) {
            goto Z0uWI;
        }
        goto zI07k;
        Si2M8:
        NsI8Z:
        goto PxrKI;
        Q4ne5:
        p02Wi:
        goto nO7Ix;
        UPZVB:
        $this->db->set("\153\157\x64\x65\137\152\x75\x72\165\163\x61\x6e", $kode);
        goto fQuGX;
        p3uKq:
        return $this->db->update("\155\x61\163\164\x65\162\137\x6a\165\x72\x75\163\x61\156");
        goto xmIGs;
        qa3WM:
        lE9T2:
        goto EWMRp;
        PxrKI:
        $this->db->set("\x6e\141\155\141\137\152\165\162\x75\x73\141\x6e", $name);
        goto UPZVB;
        Hv_Tf:
        Z0uWI:
        goto Si2M8;
        xd9rw:
        $this->db->set("\163\164\x61\164\x75\x73", "\x31");
        goto pr03f;
        ScUNY:
        $name = $this->input->post("\x6e\x61\x6d\141\137\x6a\x75\162\165\163\141\x6e", true);
        goto Ccnk9;
        xmIGs:
    }
    public function inputJurusan()
    {
        $data = ["\156\141\155\x61\137\152\165\162\165\163\141\x6e" => $this->input->post("\156\x61\155\141\137\152\x75\x72\x75\163\141\x6e", true), "\153\x6f\x64\145\x5f\152\x75\x72\x75\x73\x61\x6e" => $this->input->post("\x6b\157\x64\145\x5f\x6a\165\x72\x75\x73\141\x6e", true)];
        return $this->db->insert("\x6d\141\x73\x74\145\162\x5f\x6a\165\x72\x75\163\141\x6e", $data);
    }
    public function getAllDataSiswa($id_tp, $id_smt)
    {
        goto SdHRo;
        Qpqrd:
        return $query->result();
        goto KYFGt;
        Ly9fg:
        $this->db->join("\x6d\x61\163\164\145\x72\137\x6b\x65\x6c\141\163\40\143", "\143\56\151\144\x5f\x6b\x65\x6c\141\x73\75\142\56\151\144\x5f\153\x65\x6c\141\163", "\x6c\145\146\164");
        goto pgMvN;
        cdL2P:
        $query = $this->db->get();
        goto Qpqrd;
        PLk3w:
        $this->db->from("\155\x61\163\164\145\x72\137\163\x69\163\167\x61\x20\x61");
        goto oGIYv;
        pgMvN:
        $this->db->order_by("\142\x2e\151\144\137\x6b\x65\154\x61\x73");
        goto GTYqj;
        oGIYv:
        $this->db->join("\153\x65\x6c\x61\163\137\163\151\x73\x77\x61\40\x62", "\142\x2e\151\144\137\x73\x69\163\x77\x61\75\141\56\151\x64\137\163\x69\x73\167\141\40\101\x4e\104\40\x62\x2e\151\144\x5f\x74\160\x3d" . $id_tp . "\x20\x41\x4e\x44\x20\x62\x2e\x69\x64\x5f\x73\155\164\75" . $id_smt . '', "\x6c\x65\x66\x74");
        goto Ly9fg;
        UqZOo:
        $this->db->select("\x61\x2e\52\x2c\40\143\x2e\x6e\141\155\141\x5f\x6b\x65\x6c\141\x73");
        goto PLk3w;
        GTYqj:
        $this->db->order_by("\141\x2e\156\141\x6d\x61");
        goto cdL2P;
        SdHRo:
        $this->db->query("\x53\x45\124\40\x53\x51\114\137\102\111\107\137\123\105\x4c\x45\103\124\123\75\x31");
        goto UqZOo;
        KYFGt:
    }
    public function getSiswaByKelas($id_tp, $id_smt, $id_kelas)
    {
        goto doCWP;
        Hc_XC:
        $this->db->join("\155\x61\163\164\x65\162\x5f\x73\x69\163\x77\141\40\x62", "\142\x2e\151\x64\137\x73\151\163\167\x61\x3d\141\56\151\x64\137\163\x69\163\167\141");
        goto Sfy3J;
        Fbnh5:
        $this->db->where("\141\x2e\x69\x64\x5f\163\x69\163\167\141\40\x69\163\x20\x4e\117\124\40\x4e\x55\x4c\114", NULL, FALSE);
        goto U64mJ;
        v6JFW:
        $this->db->where("\141\56\151\x64\x5f\x6b\145\154\x61\163", $id_kelas);
        goto BVAAJ;
        BVAAJ:
        $this->db->order_by("\142\x2e\x6e\141\155\x61", "\101\x53\103");
        goto DKTyi;
        RstKs:
        $this->db->from("\153\x65\154\141\x73\x5f\x73\x69\x73\x77\141\x20\141");
        goto Hc_XC;
        Sfy3J:
        $this->db->where("\x61\x2e\151\x64\137\x74\x70", $id_tp);
        goto TfGzt;
        U64mJ:
        $this->db->where("\142\x2e\x69\144\x5f\x73\151\x73\167\x61\x20\x69\163\x20\116\x4f\x54\40\x4e\125\114\x4c", NULL, FALSE);
        goto v6JFW;
        doCWP:
        $this->db->select("\142\x2e\52");
        goto RstKs;
        DKTyi:
        return $this->db->get()->result();
        goto a3Oix;
        TfGzt:
        $this->db->where("\x61\x2e\x69\144\x5f\x73\x6d\x74", $id_smt);
        goto Fbnh5;
        a3Oix:
    }
    public function getDataSiswa($id_tp, $id_smt)
    {
        goto WX1WR;
        E2wOI:
        $this->datatables->select("\x61\x2e\151\144\x5f\x73\151\x73\167\141\54\x20\141\56\146\x6f\164\157\x2c\40\x61\x2e\156\x61\155\x61\54\40\x61\x2e\x6e\151\x73\54\40\x61\x2e\x6e\x69\x73\156\54\40\141\x2e\152\x65\x6e\151\x73\137\x6b\x65\154\141\x6d\x69\156\54\40\x66\56\x6c\145\x76\x65\154\137\x69\144\54\x20\146\x2e\156\141\x6d\x61\x5f\x6b\x65\154\x61\163\x2c\40\x62\x2e\163\164\141\164\165\x73");
        goto nOCK8;
        ZK8YR:
        $this->datatables->join("\x6b\x65\x6c\141\163\x5f\163\x69\x73\167\x61\x20\x64", "\144\56\x69\x64\x5f\163\x69\163\x77\141\40\x3d\x20\x61\56\151\144\137\x73\151\x73\x77\141\x20\101\x4e\x44\x20\x64\x2e\x69\144\137\164\x70\40\x3d\x20" . $id_tp . "\40\101\x4e\x44\x20\144\x2e\151\144\x5f\x73\155\164\x20\x3d\40" . $id_smt . '', "\154\145\146\x74");
        goto YzUqI;
        iXFAd:
        $this->datatables->join("\165\x73\x65\x72\163\40\143", "\141\56\x75\x73\x65\162\156\141\155\145\x3d\x63\x2e\165\x73\x65\162\x6e\141\155\x65");
        goto ZK8YR;
        u15K0:
        $this->db->order_by("\x49\x53\x4e\x55\114\x4c\50\x66\56\x6c\145\x76\145\x6c\x5f\x69\144\x29\54\40\146\x2e\154\x65\166\145\x6c\x5f\x69\x64\40\x41\x53\103");
        goto Ve23p;
        WX1WR:
        $this->db->query("\123\105\124\40\x53\x51\114\137\x42\111\107\x5f\123\105\x4c\x45\103\x54\x53\x3d\61");
        goto E2wOI;
        pDtyL:
        return $this->datatables->generate();
        goto Siwlg;
        nOCK8:
        $this->datatables->from("\155\141\163\x74\145\x72\137\163\151\x73\167\141\x20\x61");
        goto fXLnH;
        oJYf7:
        $this->db->order_by("\142\x2e\163\x74\x61\164\x75\x73", "\x41\123\x43");
        goto pDtyL;
        Ve23p:
        $this->db->order_by("\x66\x2e\x6e\141\x6d\141\137\x6b\145\154\x61\163", "\101\x53\103");
        goto oJYf7;
        YzUqI:
        $this->datatables->join("\x6d\x61\163\x74\145\x72\x5f\153\145\154\141\163\40\146", "\x66\56\x69\x64\137\153\145\154\x61\163\x3d\x64\x2e\151\144\137\x6b\x65\x6c\x61\163", "\154\x65\x66\x74");
        goto u15K0;
        fXLnH:
        $this->datatables->join("\x62\x75\153\165\x5f\x69\156\x64\165\x6b\x20\x62", "\141\x2e\151\144\137\x73\151\163\167\141\x3d\x62\x2e\151\x64\x5f\x73\x69\163\x77\141", "\154\x65\x66\164");
        goto iXFAd;
        Siwlg:
    }
    public function getAllSiswa($id_tp, $id_smt, $offset, $limit, $search = null, $sort = null, $order = null)
    {
        goto Qn7In;
        kdK6K:
        $this->db->or_like("\x61\56\156\151\x73\156", $search);
        goto WvT4Q;
        tcbzD:
        $this->db->join("\153\145\154\141\163\137\163\x69\x73\x77\x61\40\x64", "\x64\x2e\151\x64\x5f\x73\151\x73\167\x61\40\x3d\40\141\x2e\x69\144\x5f\x73\x69\163\x77\141\x20\x41\x4e\x44\x20\144\x2e\151\144\x5f\x74\160\x20\x3d\x20" . $id_tp . "\x20\x41\116\104\x20\144\x2e\x69\x64\137\x73\155\x74\x20\75\40" . $id_smt . '', "\x6c\145\146\x74");
        goto cK_7N;
        YGhX_:
        if (!($search != null)) {
            goto xwlYJ;
        }
        goto PKMS8;
        PKMS8:
        $this->db->like("\x61\56\156\141\x6d\x61", $search);
        goto y0Wt4;
        uZVVy:
        $this->db->limit($limit, $offset);
        goto n6nk9;
        WG0iu:
        return $this->db->get()->result();
        goto Po6CH;
        y0Wt4:
        $this->db->or_like("\141\x2e\x6e\151\163", $search);
        goto kdK6K;
        cK_7N:
        $this->db->join("\155\x61\x73\164\x65\x72\x5f\x6b\x65\x6c\141\x73\x20\146", "\x66\x2e\151\x64\x5f\153\x65\154\x61\x73\75\144\x2e\x69\x64\x5f\x6b\x65\x6c\141\x73", "\x6c\145\146\164");
        goto YGhX_;
        Qn7In:
        $this->db->select("\141\x2e\x69\x64\137\163\x69\x73\167\141\x2c\x20\141\x2e\x66\x6f\164\x6f\x2c\40\x61\x2e\x6e\141\155\141\54\x20\141\56\156\151\163\x2c\x20\141\56\156\x69\x73\x6e\54\40\141\x2e\x6a\x65\x6e\x69\x73\x5f\153\145\x6c\141\155\151\156\54\x20\146\x2e\x6c\x65\x76\x65\154\x5f\151\x64\x2c\x20\146\56\x6e\x61\x6d\x61\137\x6b\x65\154\141\163\54" . "\x20\50\x53\105\x4c\x45\x43\124\40\x43\x4f\125\116\124\50\151\x64\x29\x20\x46\x52\x4f\x4d\x20\x75\163\x65\x72\x73\x20\127\110\x45\122\x45\40\x75\x73\x65\x72\x73\x2e\x75\163\x65\162\156\141\x6d\x65\x20\75\40\141\56\x75\x73\x65\162\156\x61\155\x65\51\40\101\123\40\163\164\x61\x74\165\163");
        goto ssMrW;
        n6nk9:
        $this->db->order_by("\x61\56\x6e\x61\155\x61", "\x41\123\x43");
        goto tcbzD;
        ssMrW:
        $this->db->from("\155\141\x73\x74\145\162\x5f\x73\x69\x73\167\x61\40\141");
        goto uZVVy;
        WvT4Q:
        xwlYJ:
        goto WG0iu;
        Po6CH:
    }
    public function getSiswaPage($id_tp, $id_smt, $offset, $limit, $search = null, $sort = null, $order = null)
    {
        goto LuGQL;
        Trw5W:
        return $this->db->get()->result();
        goto lgiYI;
        M9tII:
        $this->db->order_by("\141\56\x6e\x61\x6d\141", "\x41\x53\x43");
        goto rtk9_;
        ZzXL8:
        cxXuX:
        goto Trw5W;
        PYTlk:
        $this->db->join("\153\145\x6c\141\x73\137\163\x69\163\x77\141\x20\144", "\144\x2e\151\144\x5f\163\x69\x73\167\141\x3d\141\56\151\x64\x5f\x73\151\163\x77\141\x20\101\x4e\104\x20\x64\x2e\151\x64\137\x74\160\x20\x3d\x20" . $id_tp . "\40\x41\116\104\40\x64\x2e\x69\144\137\163\x6d\x74\x20\x3d\x20" . $id_smt . '', "\154\145\x66\x74");
        goto tzJO3;
        tzJO3:
        $this->db->join("\x6d\x61\163\164\145\x72\x5f\153\x65\154\x61\x73\40\x66", "\146\x2e\x69\144\x5f\x6b\145\x6c\141\163\75\144\56\151\144\x5f\153\145\154\141\163", "\x6c\x65\x66\164");
        goto bRMP6;
        qCI9S:
        $this->db->or_like("\x61\56\156\x69\x73\156", $search);
        goto ZzXL8;
        GdFo1:
        $this->db->limit($limit, $offset);
        goto PYTlk;
        bRMP6:
        $this->db->order_by("\111\123\x4e\125\x4c\114\50\146\x2e\154\145\x76\145\x6c\x5f\151\x64\51\x2c\40\x66\56\154\145\166\145\x6c\137\151\x64\40\x41\123\x43");
        goto AREGj;
        UctvW:
        $this->db->from("\155\x61\x73\x74\145\162\x5f\x73\151\163\x77\x61\40\x61");
        goto GdFo1;
        nccRM:
        $this->db->like("\141\56\156\x61\x6d\141", $search);
        goto XvffH;
        XvffH:
        $this->db->or_like("\141\56\x6e\x69\x73", $search);
        goto qCI9S;
        rtk9_:
        if (!($search != null)) {
            goto cxXuX;
        }
        goto nccRM;
        AREGj:
        $this->db->order_by("\x66\56\156\x61\x6d\141\137\x6b\x65\154\141\x73", "\101\x53\103");
        goto M9tII;
        LuGQL:
        $this->db->select("\x61\56\x69\144\137\163\x69\x73\x77\141\54\40\141\x2e\146\x6f\164\157\x2c\40\141\x2e\x6e\141\155\141\x2c\x20\141\56\x6e\151\x73\54\40\141\x2e\156\x69\163\x6e\x2c\40\141\56\152\x65\156\151\x73\x5f\153\x65\154\x61\155\151\x6e\x2c\x20\x64\56\x69\x64\137\x6b\x65\154\x61\163\54\40" . "\146\56\x6e\x61\155\141\137\x6b\145\154\141\x73\x2c\x20\x28\x53\x45\114\x45\103\x54\x20\103\x4f\x55\x4e\124\x28\x69\144\x29\40\x46\122\117\x4d\x20\x75\x73\145\162\x73\x20\127\110\105\122\x45\40\165\x73\x65\162\x73\56\x75\x73\145\162\x6e\x61\155\x65\x20\x3d\40\141\56\165\x73\x65\x72\x6e\141\155\145\51\40\101\123\40\x61\x6b\164\151\146");
        goto UctvW;
        lgiYI:
    }
    public function getSiswaTotalPage($search = null)
    {
        goto pDaqB;
        emOzP:
        H6qFl:
        goto t_SXM;
        pEQ7c:
        $this->db->or_like("\x6e\151\163\x6e", $search);
        goto emOzP;
        ZXs1m:
        $this->db->or_like("\156\x69\x73", $search);
        goto pEQ7c;
        t_SXM:
        return $this->db->get()->num_rows();
        goto c7haB;
        umkBQ:
        $this->db->from("\x6d\x61\163\164\145\x72\x5f\x73\x69\x73\167\141");
        goto ipHCH;
        pDaqB:
        $this->db->select("\151\144\x5f\x73\x69\163\167\x61");
        goto umkBQ;
        ipHCH:
        if (!($search != null)) {
            goto H6qFl;
        }
        goto zbKjJ;
        zbKjJ:
        $this->db->like("\156\141\x6d\x61", $search);
        goto ZXs1m;
        c7haB:
    }
    public function getDataSiswaByKelas($id_tp, $id_smt, $id_kelas, $offset, $limit, $search = null, $sort = null, $order = null)
    {
        goto osARK;
        C4aeR:
        $this->db->or_like("\142\56\x6e\151\163", $search);
        goto W18kC;
        dCChF:
        return $this->db->get()->result();
        goto zMjMX;
        BvAhZ:
        $this->db->where("\141\x2e\151\144\x5f\x6b\x65\154\141\x73", $id_kelas);
        goto dCChF;
        IYfAX:
        $this->db->limit($limit, $offset);
        goto Hp439;
        GrcEJ:
        if (!($search != null)) {
            goto Ek2OP;
        }
        goto rm_zR;
        W18kC:
        $this->db->or_like("\x62\x2e\x6e\x69\x73\156", $search);
        goto CDIOV;
        CDIOV:
        Ek2OP:
        goto y886u;
        y886u:
        $this->db->join("\155\141\163\x74\145\162\x5f\x6b\145\154\141\x73\40\146", "\146\x2e\x69\144\137\x6b\145\x6c\141\163\75\141\56\x69\144\x5f\153\x65\x6c\x61\163");
        goto MKl80;
        vZnVA:
        $this->db->where("\141\x2e\151\144\137\163\x6d\164", $id_smt);
        goto BvAhZ;
        osARK:
        $this->db->select("\x62\x2e\151\144\137\163\151\163\x77\141\54\x20\x62\x2e\156\141\x6d\141\54\x20\142\x2e\156\151\163\54\40\142\x2e\x6e\x69\x73\156\x2c\40\x62\x2e\152\x65\156\x69\163\137\153\x65\x6c\141\x6d\151\x6e\x2c\40\142\x2e\x75\x73\x65\162\x6e\141\155\x65\54\40\x62\56\x70\141\163\163\x77\x6f\x72\144\54\x20\x62\56\x66\x6f\164\157\54" . "\x20\146\x2e\156\x61\x6d\x61\137\153\145\x6c\141\x73\54\40\50\x53\105\x4c\x45\x43\124\40\x43\x4f\125\116\x54\x28\x69\144\51\x20\x46\122\117\x4d\x20\x75\163\145\x72\x73\40\x57\x48\105\x52\x45\40\x75\163\x65\x72\x73\56\x75\163\145\162\156\x61\155\x65\x20\x3d\x20\142\x2e\165\x73\145\x72\x6e\141\155\x65\51\40\x41\x53\40\x61\x6b\164\x69\x66");
        goto ujF2X;
        u2J2P:
        if (!($limit > 0)) {
            goto YSFyF;
        }
        goto IYfAX;
        rm_zR:
        $this->db->like("\x62\56\x6e\141\x6d\141", $search);
        goto C4aeR;
        AsMIL:
        $this->db->join("\x6d\141\163\164\x65\x72\137\163\x69\x73\x77\x61\x20\142", "\142\56\151\x64\137\x73\x69\x73\x77\x61\x3d\141\x2e\151\144\x5f\163\x69\163\167\x61", "\162\x69\x67\x68\x74");
        goto GrcEJ;
        ujF2X:
        $this->db->from("\153\145\154\x61\163\137\x73\151\163\167\141\40\141");
        goto u2J2P;
        Hp439:
        YSFyF:
        goto AsMIL;
        MKl80:
        $this->db->where("\141\56\x69\x64\137\164\160", $id_tp);
        goto vZnVA;
        zMjMX:
    }
    public function getDataSiswaByKelasPage($id_tp, $id_smt, $id_kelas, $search = null)
    {
        goto dCM90;
        rp_GK:
        $this->db->where("\x61\56\151\x64\137\163\155\164", $id_smt);
        goto Rg_AU;
        bj8_t:
        $this->db->join("\x6d\x61\163\x74\145\x72\137\x73\x69\163\x77\x61\40\142", "\x62\x2e\151\144\x5f\x73\x69\x73\167\141\x3d\x61\56\x69\x64\137\163\151\163\x77\x61");
        goto jG5e0;
        O5JM6:
        $this->db->like("\x62\56\x6e\x61\155\x61", $search);
        goto hLKe0;
        oZyNE:
        $this->db->from("\x6b\145\154\x61\x73\x5f\x73\151\x73\x77\141\x20\141");
        goto TTcbG;
        dCM90:
        $this->db->select("\x61\x2e\x69\144\137\163\151\x73\167\141");
        goto oZyNE;
        Nxn4R:
        $this->db->or_like("\x62\x2e\156\151\x73\x6e", $search);
        goto iXovl;
        iXovl:
        JwlAb:
        goto vqHFb;
        vqHFb:
        return $this->db->get()->num_rows();
        goto DJqDT;
        hLKe0:
        $this->db->or_like("\x62\x2e\156\151\163", $search);
        goto Nxn4R;
        jG5e0:
        if (!($search != null)) {
            goto JwlAb;
        }
        goto O5JM6;
        Rg_AU:
        $this->db->where("\141\x2e\151\x64\x5f\x6b\x65\x6c\141\163", $id_kelas);
        goto bj8_t;
        TTcbG:
        $this->db->where("\141\x2e\151\144\137\x74\x70", $id_tp);
        goto rp_GK;
        DJqDT:
    }
    public function getSiswaById($id)
    {
        goto widFi;
        IricU:
        $this->db->where("\141\56\x69\x64\x5f\x73\x69\x73\167\x61", $id);
        goto AHwpr;
        icNQA:
        $this->db->join("\x62\x75\x6b\x75\x5f\151\156\x64\x75\x6b\x20\x62", "\141\56\x69\144\x5f\x73\151\163\167\x61\x3d\x62\x2e\x69\x64\137\x73\x69\163\167\x61", "\x6c\x65\x66\x74");
        goto IricU;
        idD9g:
        $this->db->from("\x6d\x61\163\x74\x65\162\x5f\163\151\x73\x77\x61\40\x61");
        goto icNQA;
        AHwpr:
        return $this->db->get()->row();
        goto xjlGD;
        widFi:
        $this->db->select("\x61\x2e\x2a\54\40\x62\x2e\163\x74\141\x74\x75\163");
        goto idD9g;
        xjlGD:
    }
    public function getSiswaByArrNisn($arr_nisn, $arr_nis, $arr_username)
    {
        goto ajN0s;
        ajN0s:
        $this->db->select("\151\144\137\163\151\163\x77\141\x2c\x20\156\x61\x6d\141\x2c\40\156\x69\x73\156\x2c\40\x6e\x69\163\x2c\40\x75\x73\145\x72\x6e\x61\155\x65");
        goto hf6iW;
        zYJzJ:
        return $this->db->get()->result();
        goto Gs7P8;
        EHog8:
        $this->db->where_in("\x6e\151\x73\x6e", $arr_nisn);
        goto c69Wr;
        hf6iW:
        $this->db->from("\155\141\x73\164\x65\162\x5f\x73\x69\163\x77\x61");
        goto EHog8;
        c69Wr:
        $this->db->or_where_in("\156\151\x73", $arr_nis);
        goto vQPG3;
        vQPG3:
        $this->db->or_where_in("\x75\x73\145\162\x6e\x61\155\145", $arr_username);
        goto zYJzJ;
        Gs7P8:
    }
    public function getSiswaKelasBaru($id_tp, $id_smt)
    {
        goto FWuA3;
        IL8NV:
        $result = $this->db->get()->result();
        goto Dt4nn;
        KSVY2:
        foreach ($result as $key => $row) {
            $ret[$row->id_siswa] = $row;
            IBz3i:
        }
        goto H30B4;
        ZrpfD:
        $this->db->where("\141\56\151\x64\137\163\155\x74", $id_smt);
        goto IL8NV;
        PXW4b:
        $this->db->join("\155\141\x73\x74\x65\162\x5f\x6b\145\x6c\141\x73\40\x66", "\146\56\x69\x64\x5f\153\x65\154\x61\x73\x3d\x61\x2e\151\144\137\153\x65\154\x61\x73");
        goto Xh91u;
        Xh91u:
        $this->db->where("\x61\56\151\144\137\164\160", $id_tp);
        goto ZrpfD;
        FWuA3:
        $this->db->query("\123\105\x54\x20\123\x51\114\137\102\111\x47\137\123\105\x4c\x45\x43\124\123\75\61");
        goto YSuvW;
        jkyy5:
        $this->db->join("\155\141\x73\x74\145\162\137\163\151\163\167\x61\x20\142", "\142\56\x69\x64\x5f\163\151\163\167\x61\x3d\141\56\x69\x64\137\x73\151\x73\x77\141");
        goto PXW4b;
        YSuvW:
        $this->db->select("\142\x2e\x69\x64\x5f\163\151\x73\x77\141\54\x20\x62\x2e\156\141\x6d\141\54\x20\146\x2e\151\144\x5f\153\145\x6c\x61\163\x2c\x20\x66\56\156\x61\x6d\x61\x5f\x6b\145\x6c\141\x73\54\40\146\56\153\157\x64\x65\137\x6b\x65\154\x61\163");
        goto GSpcU;
        Dt4nn:
        $ret = [];
        goto LVgbQ;
        LVgbQ:
        if (!$result) {
            goto B9Cbp;
        }
        goto KSVY2;
        H30B4:
        HizNi:
        goto mHwVg;
        mHwVg:
        B9Cbp:
        goto yz6Ay;
        GSpcU:
        $this->db->from("\x6b\x65\x6c\141\x73\137\163\x69\x73\167\141\40\x61");
        goto jkyy5;
        yz6Ay:
        return $ret;
        goto w3PvH;
        w3PvH:
    }
    public function getDataSiswaById($id_tp, $id_smt, $idSiswa)
    {
        goto GW1m1;
        x9tlw:
        $this->db->join("\143\142\x74\137\x6e\157\x6d\x6f\162\x5f\x70\x65\163\x65\162\164\141\x20\147", "\147\56\x69\x64\x5f\163\151\x73\x77\141\x3d\141\x2e\151\x64\x5f\163\x69\x73\x77\141\40\101\116\x44\x20\x67\56\151\144\x5f\x74\x70\75" . $id_tp, "\154\x65\146\164");
        goto mzXgL;
        KZW2v:
        $this->db->join("\143\x62\164\137\162\x75\x61\156\147\40\144", "\x64\x2e\x69\144\x5f\162\165\141\156\x67\75\143\x2e\162\165\141\156\147\x5f\151\144", "\154\145\146\x74");
        goto Wh0jj;
        qpUc1:
        $this->db->join("\x6d\141\x73\164\x65\x72\x5f\x73\151\x73\x77\x61\40\x62", "\x62\x2e\151\144\x5f\163\151\163\167\141\x3d\141\56\x69\144\x5f\x73\x69\x73\x77\x61", "\154\145\x66\x74");
        goto a_hOT;
        Wh0jj:
        $this->db->join("\x63\142\x74\x5f\163\x65\x73\x69\40\x65", "\145\x2e\x69\144\x5f\x73\x65\163\x69\75\x63\x2e\163\145\163\x69\x5f\x69\144", "\x6c\x65\x66\x74");
        goto qgovV;
        mzXgL:
        $this->db->join("\x63\142\x74\137\x6b\145\x6c\141\163\x5f\x72\x75\x61\x6e\147\x20\x68", "\x68\56\151\144\x5f\153\145\x6c\141\163\75\x61\56\151\144\x5f\x6b\x65\x6c\x61\163", "\x6c\145\x66\x74");
        goto G3mWW;
        ctf3x:
        $this->db->where("\141\x2e\x69\x64\137\x74\160", $id_tp);
        goto t9XRy;
        a_hOT:
        $this->db->join("\x63\x62\x74\137\x73\145\163\x69\x5f\x73\151\163\167\x61\40\x63", "\x63\x2e\163\151\163\x77\141\137\151\x64\75\141\56\151\144\137\x73\151\x73\x77\141", "\x6c\145\146\x74");
        goto KZW2v;
        t9XRy:
        $this->db->where("\x61\56\x69\144\x5f\x73\155\164", $id_smt);
        goto G_hqN;
        qgovV:
        $this->db->join("\155\x61\x73\164\x65\x72\x5f\153\145\x6c\141\163\40\146", "\x66\56\151\x64\x5f\153\x65\154\x61\x73\x3d\141\x2e\151\144\137\153\x65\x6c\x61\163", "\154\145\146\x74");
        goto x9tlw;
        G_hqN:
        $this->db->where("\141\x2e\x69\144\137\x73\x69\x73\167\141", $idSiswa);
        goto weAqi;
        JqjLo:
        $this->db->from("\153\145\x6c\x61\x73\137\163\x69\x73\x77\x61\40\x61");
        goto qpUc1;
        Ewfxg:
        $this->db->select("\x62\56\151\144\x5f\163\151\163\x77\x61\54\x20\142\x2e\x6e\141\x6d\x61\54\x20\x62\56\152\x65\x6e\151\x73\137\153\145\154\141\x6d\x69\156\x2c\40\x62\56\156\151\x73\54\x20\x62\56\x6e\151\x73\x6e\54\x20\x62\56\165\163\145\x72\x6e\141\x6d\x65\54\40\x62\x2e\x70\141\x73\163\167\x6f\162\144\54" . "\40\x62\x2e\146\x6f\x74\157\x2c\40\143\x2e\x73\145\163\151\x5f\151\144\54\40\144\56\153\157\144\x65\x5f\x72\165\x61\x6e\x67\54\40\x65\x2e\153\157\x64\x65\137\163\145\163\x69\54\40\146\x2e\156\141\155\141\137\x6b\145\154\x61\163\x2c\40\147\x2e\x6e\x6f\155\x6f\162\137\x70\145\163\145\x72\164\141\x2c" . "\40\150\56\163\x65\x74\137\163\151\x73\167\141\54\40\151\x2e\x6b\x6f\x64\x65\x5f\x72\165\141\156\147\x20\x61\163\40\162\165\141\156\x67\137\x6b\x65\x6c\x61\x73\x2c\x20\152\56\153\x6f\x64\x65\x5f\x73\x65\163\x69\x20\x61\x73\40\x73\x65\x73\151\137\153\145\154\x61\163");
        goto JqjLo;
        GW1m1:
        $this->db->query("\123\105\x54\x20\123\121\x4c\137\102\111\x47\x5f\123\105\114\105\103\x54\123\75\x31");
        goto Ewfxg;
        weAqi:
        return $this->db->get()->row();
        goto vdvQz;
        G3mWW:
        $this->db->join("\143\142\164\x5f\x72\x75\x61\156\x67\x20\151", "\x69\x2e\151\x64\x5f\x72\165\141\x6e\x67\x3d\150\x2e\x69\144\137\162\165\x61\156\x67", "\x6c\x65\146\164");
        goto Ba1rf;
        Ba1rf:
        $this->db->join("\143\142\164\137\x73\x65\x73\x69\x20\152", "\x6a\x2e\151\144\137\x73\x65\163\151\x3d\150\x2e\151\x64\x5f\x73\x65\163\x69", "\154\x65\x66\164");
        goto ctf3x;
        vdvQz:
    }
    public function getAgamaSiswa()
    {
        goto r1fsd;
        yj7iP:
        $result = $this->db->get()->result();
        goto UNnNW;
        irPx9:
        $this->db->where("\141\56\x61\147\141\x6d\x61\40\x69\x73\x20\x4e\x4f\x54\40\116\125\x4c\x4c", NULL, FALSE);
        goto Yeav3;
        C1Yqc:
        return $ret;
        goto zp2Sv;
        bf5HG:
        ChSRi:
        goto C1Yqc;
        r1fsd:
        $this->db->select("\141\147\141\155\x61");
        goto TZ1fV;
        Yeav3:
        $this->db->where("\141\x2e\x61\147\141\155\x61\x20\x21\x3d\x20\x22\60\x22", NULL, FALSE);
        goto Q8bHy;
        chhXS:
        $this->db->from("\x6d\x61\x73\x74\145\162\137\163\x69\163\x77\x61\x20\x61");
        goto irPx9;
        Q8bHy:
        $this->db->not_like("\141\56\141\147\x61\155\x61", "\120\151\154\151\150");
        goto yj7iP;
        UNnNW:
        $ret["\x2d"] = "\102\165\x6b\x61\156\x20\x4d\141\160\x65\154\40\101\x67\x61\155\141";
        goto iOYnl;
        iOYnl:
        foreach ($result as $row) {
            $ret[$row->agama] = $row->agama;
            x3jk3:
        }
        goto bf5HG;
        TZ1fV:
        $this->db->distinct();
        goto chhXS;
        zp2Sv:
    }
    public function getJurusan()
    {
        goto KFk1Q;
        GOJqO:
        $this->db->from("\x6d\x61\x73\x74\145\x72\137\153\145\154\141\x73");
        goto IqYDN;
        ah6Kt:
        $this->db->group_by("\151\x64\137\x6a\165\x72\165\x73\141\x6e");
        goto Jsyq1;
        P0wSA:
        return $query->result();
        goto jWBxM;
        Jsyq1:
        $query = $this->db->get();
        goto P0wSA;
        IqYDN:
        $this->db->join("\x6d\x61\x73\164\145\162\x5f\152\165\162\165\163\141\x6e", "\152\165\x72\x75\x73\x61\156\137\151\x64\x3d\x69\x64\x5f\152\x75\162\165\163\141\156");
        goto Z5MRX;
        KFk1Q:
        $this->db->select("\x69\x64\137\x6a\165\x72\165\x73\141\156\x2c\40\156\x61\x6d\x61\137\152\x75\162\165\x73\141\x6e");
        goto GOJqO;
        Z5MRX:
        $this->db->order_by("\156\x61\155\141\137\x6a\x75\x72\x75\163\141\156", "\x41\x53\103");
        goto ah6Kt;
        jWBxM:
    }
    public function getAllJurusan($id = null)
    {
        goto Bo6tZ;
        si5BE:
        $this->db->select("\52");
        goto u66Ym;
        Bo6tZ:
        if ($id === null) {
            goto GA11G;
        }
        goto WLhph;
        hGi50:
        $mapel = $this->db->get()->result();
        goto ZFPrr;
        ZFPrr:
        return $mapel;
        goto oTOe1;
        u66Ym:
        $this->db->from("\x6d\x61\x73\164\x65\162\x5f\152\x75\162\x75\163\141\x6e");
        goto IuNV4;
        KgVHO:
        $this->db->from("\x6a\x75\x72\165\163\x61\156\x5f\155\141\x70\145\154");
        goto I7qgD;
        m6d7K:
        return $this->db->get("\x6a\165\162\165\x73\x61\x6e")->result();
        goto EBKrz;
        dVl2v:
        WJHzk:
        goto vE82Z;
        EBKrz:
        jYW3W:
        goto Ah_mD;
        fo_w_:
        $id_jurusan = null;
        goto HlqJH;
        vE82Z:
        if (!($id_jurusan === [])) {
            goto GEcge;
        }
        goto fo_w_;
        EXeRQ:
        $jurusan = $this->db->get()->result();
        goto xOPur;
        IuNV4:
        $this->db->where_not_in("\151\144\x5f\152\x75\x72\x75\163\141\x6e", $id_jurusan);
        goto hGi50;
        xOPur:
        $id_jurusan = [];
        goto DGe5S;
        I7qgD:
        $this->db->where("\155\x61\x70\x65\154\137\151\144", $id);
        goto EXeRQ;
        oTOe1:
        goto jYW3W;
        goto Hy_qz;
        l0lj1:
        $this->db->order_by("\156\141\155\141\137\152\165\162\x75\163\141\x6e", "\101\123\x43");
        goto m6d7K;
        HlqJH:
        GEcge:
        goto si5BE;
        Hy_qz:
        GA11G:
        goto l0lj1;
        WLhph:
        $this->db->select("\x6a\165\x72\x75\163\141\x6e\x5f\151\x64");
        goto KgVHO;
        DGe5S:
        foreach ($jurusan as $j) {
            $id_jurusan[] = $j->jurusan_id;
            Zb_3W:
        }
        goto dVl2v;
        Ah_mD:
    }
    public function getKelasByJurusan($id)
    {
        $query = $this->db->get_where("\155\x61\x73\x74\x65\162\x5f\153\145\154\x61\x73", array("\152\165\162\x75\163\x61\156\x5f\x69\x64" => $id));
        return $query->result();
    }
    public function getDataGuru($tp, $smt)
    {
        goto qDEhe;
        oiQi9:
        $this->datatables->select("\141\56\x69\144\x5f\x67\x75\x72\x75\54\x20\141\56\156\141\x6d\141\137\147\165\x72\x75\x2c\40\x61\56\156\151\x70\x2c\x20\x61\56\153\157\x64\x65\x5f\147\x75\x72\x75\54\40\x61\56\152\145\156\x69\x73\137\x6b\145\x6c\x61\155\151\156\x2c\40\x61\56\146\x6f\164\157\54\40\142\x2e\151\x64\x5f\152\x61\x62\141\x74\x61\156\54\x20\142\x2e\151\144\137\x6b\x65\x6c\x61\x73\x2c\40\x62\56\x6d\x61\160\145\154\x5f\x6b\145\154\141\x73\54\40\x63\56\151\x64\137\154\145\166\x65\x6c\x2c\x20\x63\56\154\x65\166\x65\154\54\40\144\x2e\156\141\155\x61\137\x6b\145\x6c\x61\163\x2c\40\x65\x2e\x74\141\x68\165\x6e\x2c\x20\x66\56\x6e\141\x6d\141\137\163\x6d\x74");
        goto QguvL;
        VTIHO:
        $this->datatables->join("\155\x61\163\164\145\x72\137\164\160\x20\145", "\x62\x2e\151\x64\137\164\x70\x3d\145\56\151\x64\137\x74\x70", "\x6c\145\x66\x74");
        goto I3D0j;
        nmnF9:
        $this->datatables->join("\x6c\x65\166\x65\x6c\x5f\147\x75\162\x75\x20\143", "\142\56\151\144\x5f\152\x61\x62\141\x74\141\156\75\143\x2e\151\x64\x5f\154\x65\x76\145\x6c", "\x6c\145\146\x74");
        goto LzSCj;
        LzSCj:
        $this->datatables->join("\x6d\x61\163\x74\145\x72\137\x6b\145\x6c\141\x73\40\x64", "\x62\x2e\151\144\x5f\x6b\x65\x6c\x61\163\x3d\x64\x2e\151\x64\137\153\x65\154\141\163\40\101\x4e\x44\40\x64\56\x69\144\137\x74\160\75" . $tp . "\x20\101\116\104\x20\144\56\x69\x64\x5f\163\155\164\75" . $smt . '', "\154\145\146\x74");
        goto VTIHO;
        qDEhe:
        $this->db->query("\123\x45\124\40\x53\x51\114\x5f\102\x49\107\x5f\123\x45\x4c\x45\103\124\x53\x3d\61");
        goto oiQi9;
        I3D0j:
        $this->datatables->join("\155\x61\163\164\145\x72\137\163\x6d\164\40\146", "\x62\56\151\144\x5f\163\155\x74\75\x66\56\151\x64\x5f\163\155\164", "\154\x65\146\164");
        goto BV0lk;
        QguvL:
        $this->datatables->from("\x6d\x61\163\164\x65\162\137\147\165\162\x75\40\141");
        goto nsJYm;
        nsJYm:
        $this->datatables->join("\x6a\x61\142\x61\164\141\156\137\147\165\x72\x75\x20\142", "\141\x2e\x69\x64\x5f\x67\165\x72\165\75\142\56\151\x64\137\x67\165\162\165\x20\101\x4e\104\40\142\x2e\x69\144\137\x74\x70\75" . $tp . "\40\101\116\x44\x20\142\56\151\x64\137\x73\x6d\x74\75" . $smt . '', "\154\x65\146\164");
        goto nmnF9;
        BV0lk:
        return $this->datatables->generate();
        goto MABJ3;
        MABJ3:
    }
    public function getAllDataGuru($tp, $smt)
    {
        goto lssS5;
        BKRCS:
        $this->db->order_by("\x61\56\x69\144\137\147\x75\162\165", "\x61\x73\x63");
        goto GFIH7;
        GFIH7:
        return $this->db->get()->result();
        goto ANrJg;
        TEk7R:
        $this->db->join("\154\x65\x76\145\154\137\147\x75\162\x75\40\143", "\x62\x2e\151\144\137\152\141\142\x61\164\141\x6e\75\143\x2e\x69\144\x5f\x6c\145\x76\x65\154", "\x6c\x65\146\x74");
        goto eL4cY;
        WBYYS:
        $this->db->join("\155\x61\x73\x74\145\162\x5f\163\x6d\x74\x20\146", "\x62\56\x69\144\x5f\x73\x6d\x74\75\146\x2e\151\144\x5f\x73\155\x74", "\x6c\145\x66\x74");
        goto YYDnY;
        LfWUN:
        $this->db->join("\x6d\141\163\164\145\x72\x5f\x74\x70\40\145", "\x62\56\x69\144\x5f\164\x70\x3d\x65\56\151\144\137\x74\x70", "\154\x65\x66\x74");
        goto WBYYS;
        GtIor:
        $this->db->select("\x61\56\151\144\137\x67\165\162\x75\54\x20\x61\x2e\156\x61\x6d\x61\137\x67\165\162\165\x2c\x20\141\56\x6e\x69\x70\54\40\141\56\153\x6f\x64\145\x5f\147\x75\162\165\54\40\141\x2e\152\x65\156\x69\163\137\153\145\154\141\155\151\156\54\40\141\x2e\x66\x6f\164\x6f\x2c\x20\x62\x2e\151\144\137\152\x61\142\141\x74\x61\x6e\54\40\142\56\151\x64\x5f\153\x65\x6c\x61\163\x2c\x20\x62\56\x6d\x61\x70\x65\x6c\x5f\x6b\x65\x6c\x61\163\54\40\142\56\x65\x6b\x73\x74\x72\x61\x5f\153\145\x6c\141\x73\x2c\x20\143\x2e\151\144\137\154\145\166\145\154\54\x20\x63\56\x6c\x65\166\145\x6c\54\40\x64\x2e\x6e\141\155\141\x5f\153\x65\x6c\141\163\x2c\x20\x65\x2e\x74\141\x68\x75\156\x2c\x20\146\56\x6e\x61\155\x61\x5f\x73\x6d\x74\54\40\50\x53\x45\114\x45\103\x54\x20\103\x4f\125\116\x54\x28\151\x64\51\x20\x46\x52\117\115\x20\x75\163\x65\162\163\x20\145\x20\x57\110\x45\x52\105\40\145\56\x75\163\x65\162\156\x61\155\x65\x20\75\40\x61\x2e\165\x73\145\162\x6e\x61\155\145\x29\x20\101\123\40\x73\x74\141\x74\x75\x73");
        goto EcLI6;
        j3WtP:
        $this->db->join("\x6a\141\142\141\164\x61\x6e\137\x67\x75\x72\165\x20\142", "\141\x2e\x69\144\137\147\x75\x72\x75\75\x62\x2e\151\144\x5f\x67\x75\162\x75\x20\x41\116\104\x20\x62\56\x69\144\137\x74\160\75" . $tp . "\40\101\116\x44\x20\x62\56\151\x64\137\163\x6d\164\x3d" . $smt . '', "\x6c\x65\146\164");
        goto TEk7R;
        EcLI6:
        $this->db->from("\155\141\x73\x74\145\x72\x5f\x67\x75\162\165\40\x61");
        goto j3WtP;
        lssS5:
        $this->db->query("\x53\105\124\40\x53\x51\114\x5f\102\x49\x47\137\123\x45\114\105\x43\x54\x53\75\x31");
        goto GtIor;
        YYDnY:
        $this->db->order_by("\143\x2e\x69\x64\x5f\x6c\x65\166\x65\x6c", "\144\x65\163\x63");
        goto BKRCS;
        eL4cY:
        $this->db->join("\155\141\x73\x74\x65\162\x5f\153\x65\154\x61\163\x20\144", "\142\x2e\151\x64\x5f\153\x65\154\x61\x73\75\x64\x2e\151\x64\x5f\x6b\145\x6c\x61\x73\x20\x41\x4e\x44\40\144\x2e\151\144\137\164\160\75" . $tp . "\x20\101\116\104\x20\144\56\151\144\137\163\x6d\x74\75" . $smt . '', "\x6c\145\x66\164");
        goto LfWUN;
        ANrJg:
    }
    public function getGuruById($id, $id_tp = null, $id_smt = null)
    {
        goto ktfrh;
        wBxBx:
        $this->db->from("\x6d\x61\163\x74\x65\x72\x5f\x67\x75\x72\165\x20\x61");
        goto ztICy;
        ztICy:
        $this->db->join("\152\141\142\141\x74\141\156\x5f\147\165\x72\x75\x20\142", "\x61\56\151\x64\x5f\x67\x75\x72\x75\75\x62\56\151\144\137\x67\x75\x72\x75", "\154\145\146\x74");
        goto u3s1a;
        AMzlW:
        $this->db->join("\155\x61\163\x74\145\x72\x5f\x6b\145\x6c\x61\x73\40\144", "\141\x2e\x69\144\x5f\x67\165\x72\x75\75\144\x2e\147\x75\x72\x75\137\x69\x64\x20\x41\x4e\104\x20\144\56\x69\x64\x5f\164\160\x3d" . $id_tp . "\x20\x41\x4e\x44\40\x64\x2e\151\x64\x5f\163\x6d\x74\x3d" . $id_smt, "\154\145\146\x74");
        goto Uh550;
        ktfrh:
        $this->db->query("\x53\x45\124\40\123\x51\x4c\x5f\x42\111\107\137\123\x45\114\x45\x43\x54\x53\x3d\x31");
        goto aBg8f;
        aBg8f:
        $this->db->select("\52");
        goto wBxBx;
        awmXu:
        $this->db->where("\x61\x2e\151\x64\x5f\147\x75\x72\165", $id);
        goto ryiuI;
        u3s1a:
        $this->db->join("\x6c\x65\x76\145\154\x5f\147\165\x72\x75\40\143", "\x62\x2e\151\144\137\152\141\142\x61\x74\141\156\75\143\x2e\x69\x64\137\154\x65\x76\x65\154", "\154\x65\x66\x74");
        goto Bz6z3;
        Bz6z3:
        if (!($id_tp != null && $id_smt != null)) {
            goto ooUgI;
        }
        goto AMzlW;
        ryiuI:
        return $this->db->get()->row();
        goto LINdK;
        Uh550:
        ooUgI:
        goto awmXu;
        LINdK:
    }
    public function getGuruByArrId($arr_id)
    {
        goto Xk2Qb;
        y49q6:
        IW4kr:
        goto aLWBp;
        aLWBp:
        return $this->db->get()->result();
        goto eeBQE;
        Xk2Qb:
        $this->db->select("\x6e\141\155\141\137\x67\x75\x72\x75\x2c\x20\156\151\160");
        goto CtQyk;
        xMG01:
        $this->db->where_in("\151\x64\x5f\147\165\x72\x75", $arr_id);
        goto y49q6;
        JebBE:
        if (!(count($arr_id) > 0)) {
            goto IW4kr;
        }
        goto xMG01;
        CtQyk:
        $this->db->from("\x6d\141\163\x74\x65\x72\137\147\x75\162\x75");
        goto JebBE;
        eeBQE:
    }
    public function getUserIdGuruByUsername($username)
    {
        goto DC9wR;
        vgfZT:
        $this->db->select("\x2a");
        goto sEF3N;
        lpsEV:
        $this->db->join("\154\145\x76\145\154\x5f\x67\x75\162\165\40\143", "\x62\56\x69\x64\x5f\x6a\141\x62\141\x74\x61\x6e\x3d\143\56\x69\x64\137\x6c\x65\166\145\x6c", "\x6c\145\146\x74");
        goto mbOla;
        DC9wR:
        $this->db->query("\x53\105\124\x20\123\121\114\x5f\102\111\107\x5f\123\x45\x4c\x45\x43\124\123\x3d\61");
        goto vgfZT;
        mbOla:
        $this->db->where("\x61\56\165\x73\x65\162\x6e\x61\x6d\145", $username);
        goto Rhsr1;
        PMZx4:
        $this->db->join("\152\141\142\141\164\x61\x6e\137\x67\165\x72\x75\x20\142", "\141\x2e\151\x64\137\x67\x75\x72\165\x3d\x62\56\151\x64\137\147\x75\x72\165", "\x6c\x65\146\164");
        goto lpsEV;
        Rhsr1:
        return $this->db->get()->row();
        goto K3cyR;
        sEF3N:
        $this->db->from("\x6d\141\163\x74\x65\162\x5f\x67\x75\x72\165\40\x61");
        goto PMZx4;
        K3cyR:
    }
    public function getDetailJabatanGuru($id_guru)
    {
        goto YLLle;
        wIP9Z:
        $result = $this->db->get()->result();
        goto xudtu;
        YLLle:
        $this->db->query("\x53\105\x54\x20\123\x51\114\x5f\x42\111\x47\137\123\x45\114\105\x43\x54\x53\x3d\61");
        goto A0X2U;
        A0X2U:
        $this->db->select("\141\56\151\x64\x5f\x67\165\x72\165\x2c\x20\x61\x2e\156\x61\x6d\141\137\x67\x75\x72\165\x2c\x20\142\56\x69\144\137\x74\160\54\40\x62\x2e\151\144\x5f\x73\155\x74\x2c\40\x62\56\155\141\160\145\154\x5f\x6b\145\x6c\141\x73\54\40\x62\x2e\x65\x6b\x73\x74\x72\x61\x5f\153\145\154\141\x73\x2c\40\143\56\x69\x64\137\x6c\x65\166\145\154\54\40\143\x2e\154\145\x76\x65\154\54\x20\x64\56\x69\144\x5f\153\x65\x6c\x61\163\54\x20\x64\56\156\x61\155\x61\137\x6b\145\154\x61\163");
        goto ar5y4;
        ar5y4:
        $this->db->from("\155\141\163\x74\x65\x72\x5f\147\165\x72\165\40\141");
        goto YTU2W;
        YTU2W:
        $this->db->join("\x6a\x61\x62\x61\164\x61\156\x5f\x67\x75\x72\165\40\142", "\141\56\151\x64\x5f\x67\x75\x72\x75\x3d\x62\x2e\151\144\x5f\147\x75\162\165", "\154\x65\x66\x74");
        goto BVM7U;
        xudtu:
        $ret = [];
        goto LJesn;
        BVM7U:
        $this->db->join("\154\145\166\145\154\x5f\147\x75\x72\165\x20\143", "\x62\x2e\x69\x64\x5f\x6a\x61\x62\141\x74\141\156\x3d\143\x2e\151\144\x5f\154\x65\x76\x65\154", "\154\145\x66\x74");
        goto a_mkF;
        a_mkF:
        $this->db->join("\155\x61\x73\x74\x65\162\x5f\x6b\145\x6c\141\x73\x20\x64", "\x62\x2e\151\144\x5f\153\145\x6c\141\163\75\144\x2e\x69\x64\x5f\x6b\145\x6c\x61\163", "\154\x65\146\x74");
        goto tgTh5;
        tAUzB:
        return $ret;
        goto be4m3;
        FMH1w:
        KF9R_:
        goto tAUzB;
        LJesn:
        foreach ($result as $row) {
            $ret[$row->id_tp][$row->id_smt] = $row;
            On5_2:
        }
        goto FMH1w;
        tgTh5:
        $this->db->where("\x61\x2e\x69\x64\x5f\147\165\x72\165", $id_guru);
        goto wIP9Z;
        be4m3:
    }
    public function getJabatanGuru($id_guru, $tp, $smt)
    {
        goto meJq7;
        es9sv:
        $this->db->join("\154\x65\x76\x65\154\137\x67\x75\x72\x75\40\x63", "\x62\56\151\x64\x5f\152\141\x62\x61\x74\x61\x6e\x3d\143\x2e\x69\x64\137\x6c\x65\x76\145\x6c", "\154\x65\146\x74");
        goto D1cvv;
        D1cvv:
        $this->db->join("\x6d\x61\163\164\x65\162\137\153\145\x6c\141\x73\40\x64", "\x62\56\151\144\137\x6b\145\x6c\x61\x73\x3d\x64\56\x69\144\137\153\x65\154\141\x73\x20\x41\116\x44\x20\x64\x2e\x69\x64\x5f\164\160\x3d" . $tp . "\x20\101\x4e\104\40\144\x2e\x69\144\x5f\163\x6d\x74\x3d" . $smt . '', "\x6c\x65\x66\164");
        goto QjDr8;
        EwmHY:
        $query = $this->db->get()->row();
        goto e2__v;
        meJq7:
        $this->db->query("\x53\x45\x54\40\123\121\x4c\137\102\111\107\x5f\x53\105\114\105\x43\124\x53\x3d\61");
        goto cHET_;
        QjDr8:
        $this->db->where("\x61\56\x69\x64\x5f\147\x75\x72\x75", $id_guru);
        goto EwmHY;
        cpMrK:
        $this->db->from("\155\141\x73\x74\145\162\137\x67\x75\162\x75\x20\x61");
        goto RuvRN;
        cHET_:
        $this->db->select("\141\56\x69\x64\x5f\x67\x75\x72\165\x2c\40\141\x2e\156\141\x6d\141\x5f\x67\165\162\165\54\x20\142\x2e\x6d\141\160\x65\154\137\153\x65\x6c\x61\x73\x2c\40\x62\56\x65\x6b\163\164\x72\x61\x5f\153\x65\x6c\141\x73\54\40\x63\56\x69\144\x5f\x6c\x65\166\x65\154\54\40\143\x2e\154\x65\166\x65\x6c\54\40\144\x2e\151\x64\x5f\153\145\154\x61\x73\54\40\144\x2e\156\x61\x6d\x61\x5f\153\x65\x6c\141\163");
        goto cpMrK;
        e2__v:
        return $query;
        goto MOIey;
        RuvRN:
        $this->db->join("\x6a\x61\x62\x61\164\x61\156\x5f\x67\x75\162\165\x20\x62", "\x61\x2e\151\144\x5f\x67\x75\162\x75\x3d\x62\x2e\151\144\137\147\165\162\x75\x20\x41\x4e\x44\x20\x62\56\151\144\137\164\160\x3d" . $tp . "\x20\101\116\x44\40\x62\56\151\144\x5f\163\155\x74\x3d" . $smt . '', "\154\145\x66\x74");
        goto es9sv;
        MOIey:
    }
    public function getGuruMapel($tp, $smt)
    {
        goto O29gP;
        O29gP:
        $this->db->select("\141\x2e\155\141\160\x65\x6c\137\x6b\x65\x6c\141\x73\x2c\x20\x61\x2e\x65\153\x73\x74\162\141\x5f\153\x65\x6c\x61\163\x2c\x20\x61\x2e\x69\x64\137\152\x61\142\141\164\x61\x6e\54\x20\x61\56\151\x64\137\x6b\145\154\141\x73\54\40\x62\x2e\x69\144\137\147\165\x72\165\54\40\142\56\x6e\x61\155\141\137\x67\x75\162\165");
        goto KHvC4;
        SycQR:
        $query = $this->db->get()->result();
        goto hUYDv;
        hUYDv:
        return $query;
        goto WCZFe;
        HrloT:
        $this->db->where("\141\56\151\144\137\x73\155\164", $smt);
        goto SycQR;
        RW3MO:
        $this->db->join("\x6d\x61\163\x74\145\162\x5f\147\165\162\165\40\142", "\141\56\151\144\137\x67\x75\162\x75\x3d\142\56\x69\x64\x5f\x67\x75\x72\165");
        goto F3H5S;
        F3H5S:
        $this->db->where("\x61\56\x69\x64\137\x74\x70", $tp);
        goto HrloT;
        KHvC4:
        $this->db->from("\152\141\142\x61\x74\141\156\137\x67\x75\162\x75\40\141");
        goto RW3MO;
        WCZFe:
    }
    public function getKodeKelompokMapel()
    {
        goto OJ9GM;
        oJU9f:
        return $ret;
        goto uR5ac;
        QKemZ:
        $result = $this->db->get()->result();
        goto SS5lO;
        uYy4g:
        $this->db->from("\155\x61\x73\164\x65\162\137\x6b\145\x6c\157\155\160\157\x6b\137\155\141\x70\x65\154");
        goto EwIhB;
        KUuss:
        foreach ($result as $row) {
            $ret[$row->kode_kel_mapel] = $row;
            Zxjq2:
        }
        goto JwrRf;
        SS5lO:
        $ret = [];
        goto KUuss;
        JwrRf:
        zsbea:
        goto oJU9f;
        OJ9GM:
        $this->db->select("\52");
        goto uYy4g;
        EwIhB:
        $this->db->order_by("\153\x6f\x64\145\x5f\x6b\x65\x6c\x5f\155\x61\160\x65\154");
        goto QKemZ;
        uR5ac:
    }
    public function getDataKelompokMapel()
    {
        goto SIoby;
        mKJjI:
        $ret = [];
        goto ifzxE;
        JgEdO:
        $this->db->from("\155\141\163\164\x65\162\137\153\145\x6c\x6f\155\x70\x6f\x6b\x5f\x6d\x61\x70\x65\154");
        goto graDD;
        WycWl:
        $this->db->order_by("\x6b\x6f\x64\145\137\153\145\x6c\137\155\x61\160\x65\154");
        goto u7RD8;
        J_XOx:
        GtqIc:
        goto v3tEI;
        graDD:
        $this->db->where("\151\144\x5f\x70\x61\162\145\x6e\x74", "\x30");
        goto WycWl;
        u7RD8:
        $result = $this->db->get()->result();
        goto mKJjI;
        v3tEI:
        return $ret;
        goto Tdj09;
        ifzxE:
        foreach ($result as $row) {
            $ret[$row->id_kel_mapel] = $row;
            CE_3k:
        }
        goto J_XOx;
        SIoby:
        $this->db->select("\52");
        goto JgEdO;
        Tdj09:
    }
    public function getKategoriKelompokMapel()
    {
        goto j5vFs;
        FbdHy:
        $this->db->from("\x6d\141\x73\164\145\x72\x5f\x6b\x65\x6c\x6f\155\x70\157\153\137\155\x61\160\x65\x6c");
        goto atQNt;
        JAJnv:
        $this->db->where("\x6b\x61\x74\x65\x67\157\162\x69", "\127\x41\112\111\x42")->or_where("\x6b\x61\x74\x65\x67\157\162\x69", "\120\101\111\x20\x28\113\x65\x6d\x65\156\x61\147\51");
        goto FbdHy;
        j5vFs:
        $this->db->select("\153\x6f\144\x65\x5f\x6b\145\x6c\x5f\x6d\x61\x70\x65\x6c\54\40\153\141\x74\x65\x67\x6f\162\151");
        goto JAJnv;
        XO27T:
        return $result;
        goto nsxq2;
        atQNt:
        $result = $this->db->get()->result();
        goto XO27T;
        nsxq2:
    }
    public function getDataSubKelompokMapel()
    {
        goto WqU5a;
        ogRvj:
        $ret = [];
        goto gc7tC;
        GTHCI:
        $this->db->where("\x69\144\137\160\141\x72\x65\x6e\164\x20\74\x3e\40\x30");
        goto Rf4YF;
        WqU5a:
        $this->db->select("\x2a");
        goto AQTee;
        uilub:
        return $ret;
        goto rA9cK;
        AQTee:
        $this->db->from("\155\x61\x73\164\145\162\x5f\x6b\145\x6c\157\155\x70\x6f\x6b\137\x6d\141\x70\145\154");
        goto GTHCI;
        Rf4YF:
        $this->db->order_by("\x6b\157\144\x65\137\153\x65\x6c\x5f\155\141\160\x65\154");
        goto siu3w;
        siu3w:
        $result = $this->db->get()->result();
        goto ogRvj;
        JVDCF:
        Yd0V9:
        goto uilub;
        gc7tC:
        foreach ($result as $row) {
            $ret[$row->id_kel_mapel] = $row;
            ajYYT:
        }
        goto JVDCF;
        rA9cK:
    }
    public function getDataMapel()
    {
        goto tBc2s;
        IpmEC:
        return $this->datatables->generate();
        goto H2ytF;
        R0L0z:
        $this->datatables->from("\155\x61\x73\x74\145\x72\x5f\x6d\141\x70\x65\x6c");
        goto IpmEC;
        tBc2s:
        $this->datatables->select("\x69\144\x5f\x6d\x61\160\x65\x6c\54\40\156\141\x6d\x61\137\155\x61\x70\x65\154\x2c\x20\x6b\x6f\144\x65");
        goto R0L0z;
        H2ytF:
    }
    public function getAllMapel($arrKelompok = null, $arrMapel = null)
    {
        goto sCy4N;
        Ejeg2:
        npaWG:
        goto TLg5f;
        m4M2A:
        OC34Z:
        goto l7fei;
        lOHfu:
        $this->db->or_where_in("\x69\144\137\x6d\x61\x70\145\154", explode("\54", $arrMapel));
        goto m4M2A;
        kFfb7:
        return $this->db->get("\x6d\x61\x73\x74\x65\162\x5f\155\x61\x70\x65\x6c")->result();
        goto ZNOxZ;
        TLg5f:
        if (!($arrMapel != null)) {
            goto OC34Z;
        }
        goto lOHfu;
        sCy4N:
        if (!($arrMapel != null)) {
            goto npaWG;
        }
        goto NHDuZ;
        Ykyyx:
        $this->db->order_by("\165\x72\165\164\x61\156\x5f\x74\x61\155\160\151\x6c");
        goto kFfb7;
        l7fei:
        $this->db->where("\163\x74\141\x74\x75\x73", "\61");
        goto Ykyyx;
        NHDuZ:
        $this->db->where_in("\153\x65\x6c\157\155\160\157\x6b", $arrKelompok);
        goto Ejeg2;
        ZNOxZ:
    }
    public function getAllStatusMapel($arrKelompok = null, $arrMapel = null)
    {
        goto PZsUN;
        K5vjS:
        $this->db->order_by("\165\162\165\164\x61\156\137\164\x61\155\x70\x69\154");
        goto IngVj;
        IWlx0:
        $this->db->where_in("\153\x65\154\157\x6d\160\x6f\153", $arrKelompok);
        goto OYsTN;
        IngVj:
        return $this->db->get("\155\141\163\164\145\x72\x5f\x6d\141\160\x65\x6c")->result();
        goto TsYl4;
        PZsUN:
        if (!($arrMapel != null)) {
            goto CnQWk;
        }
        goto IWlx0;
        WyNLR:
        HraMd:
        goto K5vjS;
        XwDsG:
        $this->db->or_where_in("\x69\x64\x5f\155\141\160\x65\154", explode("\x2c", $arrMapel));
        goto WyNLR;
        EXKi8:
        if (!($arrMapel != null)) {
            goto HraMd;
        }
        goto XwDsG;
        OYsTN:
        CnQWk:
        goto EXKi8;
        TsYl4:
    }
    public function getAllMapelByKelompok($jenjang)
    {
        goto d18d8;
        MiE3S:
        $this->db->order_by("\165\x72\x75\x74\141\156\137\164\x61\x6d\160\x69\154");
        goto sJhMs;
        d18d8:
        $this->db->where("\163\x74\x61\164\x75\163", "\x31");
        goto gbDWr;
        xr_NR:
        xCgDj:
        goto hKEzT;
        hKEzT:
        return $ret;
        goto tHS0c;
        F1X1n:
        $ret = [];
        goto enenK;
        enenK:
        foreach ($result as $row) {
            $ret[$row->kelompok][] = $row;
            VGGQ9:
        }
        goto xr_NR;
        sJhMs:
        $result = $this->db->get("\155\141\163\164\x65\162\137\x6d\141\x70\145\x6c")->result();
        goto F1X1n;
        gbDWr:
        $this->db->order_by("\x75\x72\165\x74\141\x6e");
        goto MiE3S;
        tHS0c:
    }
    public function getAllMapelNonAktif($jenjang)
    {
        $this->db->where("\x73\x74\141\164\165\163", "\60");
        return $this->db->get("\155\141\163\x74\145\x72\137\x6d\141\x70\145\154")->result();
    }
    public function getMapelById($id, $single = false)
    {
        goto RcTOX;
        TiReI:
        fKQy4:
        goto IPBxM;
        JcXqk:
        $query = $this->db->get_where("\x6d\x61\163\x74\x65\x72\x5f\x6d\141\160\145\x6c", array("\x69\144\137\x6d\141\160\145\154" => $id))->row();
        goto GOfeY;
        GOfeY:
        goto e1WJx;
        goto TiReI;
        bsc7l:
        return $query;
        goto UMVcN;
        wXDMy:
        $this->db->order_by("\x6e\x61\155\141\137\x6d\x61\x70\145\154");
        goto DrRmb;
        OvB5J:
        e1WJx:
        goto bsc7l;
        IPBxM:
        $this->db->where_in("\x69\x64\x5f\155\141\x70\x65\x6c", $id);
        goto wXDMy;
        RcTOX:
        if ($single === false) {
            goto fKQy4;
        }
        goto JcXqk;
        DrRmb:
        $query = $this->db->get("\x6d\x61\163\164\145\162\x5f\155\x61\x70\x65\154")->result();
        goto OvB5J;
        UMVcN:
    }
    function updateMapel()
    {
        goto aK_6C;
        wa3Su:
        $kode = $this->input->post("\x6b\157\144\145\x5f\155\141\x70\145\x6c", true);
        goto o7Szs;
        h4eAh:
        $status = $this->input->post("\163\x74\141\x74\165\163", true);
        goto W5kYX;
        p_CH4:
        $this->db->set("\x6b\x6f\144\x65", $kode);
        goto zY6NU;
        v75g7:
        $durasi_mapel = $this->input->post("\144\165\x72\141\x73\x69\137\x6d\141\160\145\x6c", true);
        $this->db->set("\144\165\x72\141\x73\x69\137\x6d\141\160\145\x6c", $durasi_mapel);
        return $this->db->update("\155\141\163\164\x65\x72\137\155\x61\x70\x65\x6c");
        goto xx0K2;
        s70oe:
        $this->db->set("\x6b\x65\x6c\x6f\x6d\160\157\x6b", $kelompok);
        goto LkYq4;
        NL2j6:
        $name = $this->input->post("\156\x61\155\141\x5f\155\141\160\145\154", true);
        goto wa3Su;
        o7Szs:
        $kelompok = $this->input->post("\x6b\145\154\x6f\x6d\160\x6f\x6b", true);
        goto h4eAh;
        LkYq4:
        N1Pmt:
        goto VHkUP;
        zY6NU:
        if (!($kelompok != null)) {
            goto N1Pmt;
        }
        goto s70oe;
        aK_6C:
        $id = $this->input->post("\151\144\x5f\x6d\141\160\x65\154");
        goto NL2j6;
        VHkUP:
        $this->db->set("\163\164\x61\x74\165\x73", $status);
        goto VZtNl;
        W5kYX:
        $urut = $this->input->post("\x75\x72\165\164\x61\x6e\x5f\164\x61\x6d\x70\151\154", true);
        goto ureAy;
        GTVcN:
        $this->db->where("\151\144\x5f\x6d\x61\x70\145\x6c", $id);
        goto v75g7;
        VZtNl:
        $this->db->set("\x75\162\x75\x74\x61\156\x5f\x74\141\155\160\151\154", $urut);
        goto GTVcN;
        ureAy:
        $this->db->set("\156\141\155\141\x5f\x6d\x61\x70\145\x6c", $name);
        goto p_CH4;
        xx0K2:
    }
    public function getAllEkstra()
    {
        return $this->db->get("\155\x61\x73\x74\x65\162\x5f\145\153\x73\x74\x72\141")->result();
    }
    public function getEkstraById($id, $single = false)
    {
        goto eeOf5;
        K7mZb:
        $query = $this->db->get_where("\155\x61\x73\164\145\x72\137\x65\x6b\163\164\162\141", array("\x69\144\137\145\153\163\x74\x72\141" => $id))->row();
        goto dBF4_;
        eeOf5:
        if ($single === false) {
            goto ZdgNg;
        }
        goto K7mZb;
        yvQpw:
        return $query;
        goto fdhNE;
        BJnvx:
        ZdgNg:
        goto fXcYn;
        Bw0xF:
        FvbRU:
        goto yvQpw;
        X1tlD:
        $this->db->order_by("\156\x61\155\x61\137\x65\x6b\163\x74\x72\x61");
        goto f_H5S;
        f_H5S:
        $query = $this->db->get("\x6d\x61\x73\x74\145\x72\x5f\x65\x6b\x73\164\x72\x61")->result();
        goto Bw0xF;
        fXcYn:
        $this->db->where_in("\151\x64\x5f\145\153\163\164\x72\141", $id);
        goto X1tlD;
        dBF4_:
        goto FvbRU;
        goto BJnvx;
        fdhNE:
    }
    function updateEkstra()
    {
        goto WwkVy;
        T2M6V:
        return $this->db->update("\x6d\141\163\164\x65\x72\137\x65\x6b\x73\x74\162\x61");
        goto Lqsjy;
        WwkVy:
        $id = $this->input->post("\x69\144\x5f\x65\x6b\163\164\162\141");
        goto Yx3us;
        z4Uqu:
        $kode = $this->input->post("\153\157\144\145\x5f\145\x6b\163\x74\162\x61", true);
        goto A4sAR;
        cHXlK:
        $this->db->set("\x6b\x6f\144\145\x5f\145\x6b\x73\x74\x72\x61", $kode);
        goto rzTVk;
        A4sAR:
        $this->db->set("\x6e\x61\x6d\x61\137\145\x6b\x73\164\x72\x61", $name);
        goto cHXlK;
        rzTVk:
        $this->db->where("\151\x64\137\x65\153\163\164\162\x61", $id);
        goto T2M6V;
        Yx3us:
        $name = $this->input->post("\156\141\155\141\x5f\145\153\163\164\x72\141", true);
        goto z4Uqu;
        Lqsjy:
    }
    public function getKelasGuru()
    {
        goto LETBG;
        NFJWu:
        $this->datatables->join("\155\141\163\164\x65\x72\137\x6b\x65\x6c\x61\163", "\x6b\x65\154\x61\163\x5f\151\144\x3d\151\144\137\153\145\x6c\x61\163");
        goto Sb4ev;
        XC2RR:
        $this->datatables->from("\x6b\145\x6c\x61\x73\x5f\147\165\162\x75");
        goto NFJWu;
        XRLmS:
        $this->datatables->group_by("\147\165\x72\x75\x2e\156\x61\x6d\x61\x5f\147\x75\x72\165");
        goto ghBup;
        GAFM2:
        $this->datatables->select("\x6b\x65\x6c\141\163\x5f\147\165\162\165\56\151\144\54\x20\147\165\162\x75\56\x69\144\137\x67\x75\x72\165\x2c\x20\147\x75\x72\x75\56\x6e\151\160\x2c\40\147\x75\x72\x75\x2e\x6e\141\x6d\141\137\x67\165\162\165\x2c\x20\x47\x52\x4f\x55\120\137\x43\x4f\x4e\x43\101\x54\x28\155\x61\x73\164\x65\x72\137\153\145\x6c\x61\x73\x2e\x6e\x61\x6d\141\x5f\x6b\x65\154\141\x73\51\40\x61\163\40\x6b\x65\154\141\x73");
        goto XC2RR;
        Sb4ev:
        $this->datatables->join("\x6d\x61\163\x74\x65\162\x5f\147\165\162\x75", "\147\165\162\x75\x5f\151\144\75\x69\144\x5f\147\x75\162\x75");
        goto XRLmS;
        ghBup:
        return $this->datatables->generate();
        goto kUDvX;
        LETBG:
        $this->db->query("\123\x45\124\40\x53\x51\x4c\x5f\x42\x49\x47\x5f\123\105\x4c\x45\103\x54\x53\x3d\x31");
        goto GAFM2;
        kUDvX:
    }
    public function getKelasByGuru($id)
    {
        goto YEFAL;
        xSQuF:
        $this->db->where("\147\165\x72\x75\137\x69\144", $id);
        goto f6YOx;
        r8aPM:
        return $query;
        goto tNuei;
        f6YOx:
        $query = $this->db->get()->result();
        goto r8aPM;
        NPBN8:
        $this->db->join("\x6d\x61\163\x74\x65\162\137\x6b\145\x6c\x61\163", "\153\145\154\141\x73\x5f\x67\x75\162\165\x2e\x6b\x65\x6c\141\163\x5f\x69\144\x3d\x6b\x65\x6c\x61\163\x2e\151\x64\x5f\x6b\145\154\x61\163");
        goto xSQuF;
        ux1MN:
        $this->db->from("\x6b\x65\154\141\163\x5f\x67\x75\x72\x75");
        goto NPBN8;
        YEFAL:
        $this->db->select("\153\x65\154\141\x73\x2e\151\144\x5f\x6b\145\154\x61\x73");
        goto ux1MN;
        tNuei:
    }
    public function getAllJabatanGuru($id)
    {
        goto vjDkF;
        vjDkF:
        $result = $this->db->get_where("\x6a\141\142\141\164\x61\x6e\137\x67\x75\162\x75", "\x69\x64\137\x67\165\162\x75\75" . $id)->result();
        goto I94Rw;
        jlT8D:
        foreach ($result as $key => $row) {
            $ret[$row->id_tp][$row->id_smt] = $row->id_kelas;
            e1XQd:
        }
        goto PnK90;
        PnK90:
        qnc2y:
        goto kXrCF;
        I94Rw:
        if (!$result) {
            goto Aa5zb;
        }
        goto jlT8D;
        kXrCF:
        Aa5zb:
        goto AVNqj;
        AVNqj:
        return $ret;
        goto W8Y6P;
        W8Y6P:
    }
    public function getJurusanMapel()
    {
        goto QYXQR;
        sagdn:
        $this->datatables->from("\152\x75\x72\165\163\141\x6e\x5f\x6d\x61\x70\145\154");
        goto Q6nGL;
        MyNqQ:
        $this->datatables->select("\x6a\165\162\x75\x73\141\x6e\x5f\x6d\141\160\145\x6c\x2e\151\144\54\x20\155\x61\160\145\154\x2e\151\144\x5f\155\x61\x70\145\154\x2c\40\x6d\141\x70\x65\154\56\x6e\141\x6d\141\x5f\x6d\x61\160\x65\154\x2c\40\x6a\165\x72\x75\x73\141\x6e\x2e\x69\x64\x5f\152\165\162\165\163\x61\x6e\x2c\x20\107\122\x4f\125\x50\137\x43\x4f\x4e\103\x41\124\x28\x6a\x75\162\165\x73\x61\x6e\56\156\141\x6d\141\137\152\x75\162\165\163\141\156\x29\40\141\163\x20\x6e\141\155\141\137\x6a\165\x72\165\163\141\x6e");
        goto sagdn;
        Q9SP2:
        $this->datatables->group_by("\155\141\x73\x74\145\162\x5f\x6d\141\x70\145\154\x2e\x6e\x61\155\x61\x5f\x6d\141\160\145\x6c");
        goto LFdmX;
        Q6nGL:
        $this->datatables->join("\155\141\x73\164\145\162\137\155\141\160\145\x6c", "\155\141\x70\x65\x6c\x5f\151\x64\x3d\151\x64\x5f\x6d\x61\x70\145\154");
        goto xM57H;
        QYXQR:
        $this->db->query("\123\x45\x54\40\x53\x51\114\x5f\x42\111\x47\137\123\x45\114\x45\103\x54\123\75\61");
        goto MyNqQ;
        xM57H:
        $this->datatables->join("\155\141\163\164\145\162\x5f\152\x75\162\165\x73\141\156", "\x6a\x75\162\165\163\x61\156\137\x69\144\75\151\x64\x5f\x6a\x75\x72\165\x73\x61\156");
        goto Q9SP2;
        LFdmX:
        return $this->datatables->generate();
        goto L1MX1;
        L1MX1:
    }
    public function getMapel($id = null)
    {
        goto AyVDx;
        G3lUb:
        $this->db->from("\x6d\x61\163\x74\145\162\x5f\x6d\141\160\145\x6c");
        goto mjblo;
        GxUrB:
        $id_mapel = [];
        goto g2h32;
        cQrEn:
        jsEny:
        goto O0Ivo;
        NFgQ2:
        $this->db->where_not_in("\x6d\141\160\145\x6c\137\151\144", [$id]);
        goto KANrv;
        wSnsZ:
        if (!($id !== null)) {
            goto nPvie;
        }
        goto NFgQ2;
        g2h32:
        foreach ($mapel as $d) {
            $id_mapel[] = $d->mapel_id;
            Wt34Q:
        }
        goto cQrEn;
        j9ZYd:
        $id_mapel = null;
        goto y3xtA;
        y9NOk:
        $this->db->from("\x6a\x75\x72\165\x73\x61\156\137\x6d\x61\160\145\154");
        goto wSnsZ;
        XaBOG:
        $mapel = $this->db->get()->result();
        goto GxUrB;
        KANrv:
        nPvie:
        goto XaBOG;
        aS0XT:
        $this->db->select("\151\x64\x5f\155\141\160\145\154\54\40\156\x61\155\141\137\155\x61\160\x65\154");
        goto G3lUb;
        AyVDx:
        $this->db->select("\x6d\141\160\145\154\137\151\x64");
        goto y9NOk;
        mjblo:
        $this->db->where_not_in("\x69\x64\x5f\155\141\x70\x65\x6c", $id_mapel);
        goto Z_a2G;
        Z_a2G:
        return $this->db->get()->result();
        goto qWM2P;
        O0Ivo:
        if (!($id_mapel === [])) {
            goto sDSlh;
        }
        goto j9ZYd;
        y3xtA:
        sDSlh:
        goto aS0XT;
        qWM2P:
    }
    public function getJurusanByIdMapel($id)
    {
        goto Ztumd;
        Qjx9o:
        return $query;
        goto b_1bd;
        xYs8F:
        $this->db->from("\x6a\165\x72\165\163\x61\x6e\137\x6d\141\x70\145\x6c");
        goto DCfcF;
        J7Y_O:
        $query = $this->db->get()->result();
        goto Qjx9o;
        Ztumd:
        $this->db->select("\x6a\165\162\x75\x73\141\x6e\x2e\x69\144\137\152\x75\x72\x75\163\141\x6e");
        goto xYs8F;
        RyfkW:
        $this->db->where("\x6d\141\x70\x65\154\x5f\151\144", $id);
        goto J7Y_O;
        DCfcF:
        $this->db->join("\155\141\163\164\145\162\137\152\x75\x72\x75\163\141\x6e", "\x6a\165\162\165\x73\141\156\137\155\141\x70\145\154\x2e\152\x75\x72\x75\163\141\156\x5f\x69\144\x3d\x6a\165\x72\165\163\x61\x6e\x2e\x69\144\x5f\152\165\162\x75\x73\x61\156");
        goto RyfkW;
        b_1bd:
    }
    public function getTahunActive()
    {
        goto YlOss;
        I__9p:
        return $result;
        goto q9Z6Z;
        B16Nx:
        $this->db->where("\141\143\x74\151\166\145", 1);
        goto IXQGx;
        IXQGx:
        $result = $this->db->get()->row();
        goto I__9p;
        marXT:
        $this->db->from("\155\141\163\x74\x65\x72\137\x74\x70");
        goto B16Nx;
        YlOss:
        $this->db->select("\x69\x64\137\164\x70\54\x20\x74\141\150\165\156");
        goto marXT;
        q9Z6Z:
    }
    public function getSemesterActive()
    {
        goto gw1i5;
        vq90q:
        $this->db->where("\x61\x63\164\x69\x76\145", 1);
        goto sWyK2;
        sWyK2:
        $result = $this->db->get()->row();
        goto YUgYv;
        wUt5g:
        $this->db->from("\155\x61\x73\164\x65\162\x5f\163\155\164");
        goto vq90q;
        gw1i5:
        $this->db->select("\x69\144\137\163\x6d\164\x2c\x20\156\x61\x6d\x61\x5f\163\x6d\164\54\x20\163\155\164");
        goto wUt5g;
        YUgYv:
        return $result;
        goto PZ5xy;
        PZ5xy:
    }
    public function getJmlHariEfektif($id)
    {
        goto Z0Inb;
        PpcaE:
        $this->db->from("\155\x61\163\x74\x65\162\137\x68\141\x72\151\137\145\x66\x65\x6b\x74\x69\146");
        goto Bl_3u;
        dPBkZ:
        return $result;
        goto PA_3F;
        H2s_w:
        $result = $this->db->get()->row();
        goto dPBkZ;
        Bl_3u:
        $this->db->where("\151\144\137\150\x61\x72\151\137\x65\146\145\153\164\x69\x66", $id);
        goto H2s_w;
        Z0Inb:
        $this->db->select("\52");
        goto PpcaE;
        PA_3F:
    }
    public function getDistinctTahunLulus()
    {
        goto iNNvT;
        go89e:
        $this->db->distinct();
        goto Q9Q7C;
        Ieg5a:
        foreach ($result as $row) {
            goto UeoNF;
            RAt2l:
            wBQeL:
            goto gjm2Y;
            UeoNF:
            if (!($row->tahun_lulus != '')) {
                goto wBQeL;
            }
            goto I9uLb;
            I9uLb:
            $ret[$row->tahun_lulus] = $row->tahun_lulus;
            goto RAt2l;
            gjm2Y:
            ttnRY:
            goto Oyfdl;
            Oyfdl:
        }
        goto ktWk2;
        iNNvT:
        $this->db->select("\x74\141\x68\x75\156\137\x6c\165\154\165\x73");
        goto go89e;
        TKMgE:
        $ret = [];
        goto Ieg5a;
        Q9Q7C:
        $result = $this->db->get("\x62\x75\x6b\x75\x5f\x69\x6e\x64\165\153")->result();
        goto TKMgE;
        ktWk2:
        RRUdq:
        goto O6nJi;
        O6nJi:
        return $ret;
        goto UWAsX;
        UWAsX:
    }
    public function getDistinctKelasAkhir()
    {
        goto sE6KY;
        kkAkB:
        $result = $this->db->get("\142\x75\x6b\165\137\x69\156\144\165\153")->result();
        goto IlfUQ;
        IlfUQ:
        $ret = [];
        goto y38eF;
        sE6KY:
        $this->db->select("\x6b\145\154\x61\x73\137\141\x6b\x68\151\162");
        goto qKmHx;
        y38eF:
        foreach ($result as $row) {
            goto bjfeG;
            vB6rF:
            MRYfl:
            goto clCaZ;
            clCaZ:
            c2rKY:
            goto nuIyE;
            bjfeG:
            if (!($row->kelas_akhir != '')) {
                goto MRYfl;
            }
            goto YjVNq;
            YjVNq:
            $ret[$row->kelas_akhir] = $row->kelas_akhir;
            goto vB6rF;
            nuIyE:
        }
        goto wACvB;
        A6wg1:
        return $ret;
        goto ZD9b2;
        wACvB:
        YKFHr:
        goto A6wg1;
        qKmHx:
        $this->db->distinct();
        goto kkAkB;
        ZD9b2:
    }
    public function getAlumniByTahun($tahun, $kelas = null)
    {
        goto C8pad;
        FEdzd:
        $this->db->where("\x61\x2e\x74\x61\x68\x75\156\137\x6c\165\x6c\165\x73", $tahun);
        goto RuWkr;
        RuWkr:
        if (!($kelas != null)) {
            goto vSDzM;
        }
        goto rYtFo;
        r_Ge6:
        $this->db->join("\155\x61\x73\x74\x65\162\x5f\x73\x69\x73\167\x61\40\x62", "\x61\56\151\144\x5f\163\x69\x73\x77\x61\75\142\x2e\151\x64\x5f\x73\151\x73\167\141");
        goto FEdzd;
        rYtFo:
        $this->db->where("\x61\56\x6b\x65\154\141\163\x5f\141\153\150\x69\x72", $kelas);
        goto EMgA7;
        EMgA7:
        vSDzM:
        goto FQSAT;
        C8pad:
        $this->db->select("\x2a");
        goto iDVH3;
        iDVH3:
        $this->db->from("\x62\165\153\165\137\x69\156\x64\x75\x6b\x20\x61");
        goto r_Ge6;
        FQSAT:
        return $this->db->get()->result();
        goto upNsE;
        upNsE:
    }
    public function getAlumniById($id)
    {
        goto y65k9;
        evWiH:
        $this->db->join("\x62\x75\153\x75\137\151\x6e\144\x75\x6b\40\x62", "\141\x2e\151\x64\x5f\x73\x69\x73\x77\141\75\142\56\x69\x64\137\163\x69\x73\x77\x61");
        goto iF1Fc;
        iF1Fc:
        $this->db->where("\141\x2e\151\x64\x5f\163\x69\163\167\x61", $id);
        goto virFN;
        y65k9:
        $this->db->select("\x2a");
        goto lTVmr;
        lTVmr:
        $this->db->from("\155\x61\x73\164\145\x72\137\163\151\x73\x77\x61\40\x61");
        goto evWiH;
        virFN:
        return $this->db->get()->row();
        goto h5F0m;
        h5F0m:
    }
    public function getAllWaliKelas()
    {
        goto DBXjQ;
        falbW:
        $this->db->join("\155\141\x73\164\145\162\137\x67\x75\162\165\x20\x62", "\141\x2e\x69\144\x5f\147\x75\162\165\75\x62\x2e\151\x64\x5f\x67\165\x72\x75", "\154\x65\146\164");
        goto IPCz8;
        vUrlX:
        foreach ($result as $key => $row) {
            goto lS7KP;
            AE5Ks:
            i7gKC:
            goto P5tug;
            WQ0v4:
            $ret[$row->id_tp][$row->id_smt][$row->id_kelas] = $row;
            goto W08pp;
            lS7KP:
            if (!($row->id_level == "\x34")) {
                goto qY_tf;
            }
            goto WQ0v4;
            W08pp:
            qY_tf:
            goto AE5Ks;
            P5tug:
        }
        goto zyO8x;
        M1Ajv:
        $result = $this->db->get()->result();
        goto voLjL;
        zyO8x:
        tBV3y:
        goto e5kvC;
        e5kvC:
        egJDa:
        goto h8Tt4;
        tac3k:
        $this->db->select("\141\x2e\x69\x64\137\x74\160\54\40\141\x2e\151\x64\x5f\163\155\164\x2c\40\x61\56\x69\x64\x5f\147\x75\162\165\x2c\40\142\x2e\156\x61\x6d\141\137\147\x75\x72\165\54\40\143\x2e\151\x64\137\154\x65\x76\145\x6c\x2c\40\x63\x2e\x6c\145\x76\145\154\54\40\x64\x2e\151\144\x5f\x6b\x65\x6c\141\x73\x2c\40\x64\56\156\x61\155\141\x5f\153\x65\154\141\163");
        goto lNEnn;
        h8Tt4:
        return $ret;
        goto X41H2;
        lNEnn:
        $this->db->from("\x6a\141\x62\x61\x74\141\156\137\x67\x75\162\x75\x20\141");
        goto falbW;
        voLjL:
        $ret = [];
        goto yhZ7D;
        IPCz8:
        $this->db->join("\x6c\x65\166\145\154\137\x67\165\x72\x75\x20\143", "\141\x2e\x69\x64\x5f\152\x61\142\141\164\141\x6e\75\x63\x2e\x69\144\137\154\145\x76\145\x6c", "\154\x65\x66\x74");
        goto MnrQK;
        yhZ7D:
        if (!$result) {
            goto egJDa;
        }
        goto vUrlX;
        DBXjQ:
        $this->db->query("\x53\x45\124\x20\x53\121\x4c\x5f\x42\111\x47\x5f\123\105\114\x45\103\x54\123\x3d\x31");
        goto tac3k;
        MnrQK:
        $this->db->join("\155\x61\163\x74\x65\x72\x5f\x6b\x65\154\x61\163\x20\x64", "\141\x2e\151\144\x5f\x6b\145\x6c\x61\163\75\x64\x2e\x69\x64\137\153\145\x6c\141\x73", "\x6c\145\146\x74");
        goto M1Ajv;
        X41H2:
    }
    public function getAllGuru()
    {
        goto KXlLj;
        jpHBV:
        return $this->db->get()->result();
        goto HKygO;
        hTssJ:
        $id_guru = [];
        goto Lmtx6;
        I5IF2:
        $guru = $this->db->get()->result();
        goto hTssJ;
        VvdqO:
        $this->db->where_in("\151\144\x5f\x67\x75\162\165", $id_guru);
        goto jpHBV;
        aAYCm:
        $this->db->from("\x6a\141\x62\141\164\x61\x6e\x5f\x67\165\162\x75");
        goto I5IF2;
        EbaVM:
        $this->db->select("\x69\144\137\147\165\x72\x75\x2c\40\x6e\x69\x70\x2c\40\x6e\x61\155\141\x5f\x67\165\x72\165");
        goto xzrUM;
        Lmtx6:
        foreach ($guru as $d) {
            $id_guru[] = $d->id_guru;
            N3cpb:
        }
        goto DmnAw;
        xzrUM:
        $this->db->from("\x6d\141\163\164\x65\x72\137\147\165\x72\x75");
        goto VvdqO;
        KXlLj:
        $this->db->select("\151\144\x5f\147\165\162\x75");
        goto aAYCm;
        DmnAw:
        o2FL1:
        goto EbaVM;
        HKygO:
    }
    public function getAllKelas($tp = null, $smt = null)
    {
        goto AO7p8;
        zST0_:
        acW_X:
        goto jfoLQ;
        mtpOs:
        $this->db->where("\x61\56\x69\144\137\164\x70", $tp)->where("\141\x2e\x69\x64\137\163\155\x74", $smt);
        goto Xpz7t;
        Ih8sN:
        $this->db->from("\155\x61\163\x74\145\x72\x5f\153\x65\154\141\163\x20\141");
        goto kO5Gw;
        chjg8:
        return $ret;
        goto rVprv;
        N_TEX:
        ALspg:
        goto chjg8;
        OngNx:
        $this->db->join("\x6d\x61\163\x74\145\x72\137\147\x75\162\165\x20\x63", "\146\56\151\x64\x5f\x67\x75\x72\165\x3d\x63\56\151\x64\137\x67\x75\162\x75", "\x6c\145\146\164");
        goto CWZ15;
        jfoLQ:
        miGA3:
        goto vfsC8;
        fp6lf:
        MmGGm:
        goto N_TEX;
        CWZ15:
        $this->db->order_by("\141\56\156\141\x6d\141\x5f\153\145\154\141\163");
        goto w55pB;
        VEsgm:
        if (!$result) {
            goto MmGGm;
        }
        goto j53Wo;
        kO5Gw:
        if (!($tp != null && $smt != null)) {
            goto m_D9N;
        }
        goto mtpOs;
        BuyKf:
        $ret = [];
        goto fI9Bq;
        w1xl1:
        if (!$result) {
            goto miGA3;
        }
        goto ghAoa;
        zBBnM:
        vkN59:
        goto fp6lf;
        x3C5J:
        $this->db->join("\x6a\x61\x62\x61\164\141\x6e\137\x67\x75\162\165\40\146", "\x66\x2e\151\x64\137\153\x65\154\x61\x73\75\141\56\151\144\137\x6b\x65\154\141\163", "\x6c\x65\146\x74");
        goto q8dXu;
        j53Wo:
        foreach ($result as $key => $row) {
            $ret[$row->id_kelas] = $row;
            Ma3aB:
        }
        goto zBBnM;
        AO7p8:
        $this->db->query("\x53\x45\124\x20\x53\x51\114\x5f\x42\111\x47\x5f\123\x45\x4c\x45\x43\x54\x53\x3d\61");
        goto K1QVJ;
        w55pB:
        $result = $this->db->get()->result();
        goto BuyKf;
        NKCUb:
        f6Gtn:
        goto VEsgm;
        vfsC8:
        goto ALspg;
        goto NKCUb;
        fI9Bq:
        if ($tp != null && $smt != null) {
            goto f6Gtn;
        }
        goto w1xl1;
        q8dXu:
        $this->db->join("\155\141\163\164\145\x72\x5f\152\x75\x72\165\x73\x61\x6e\40\142", "\141\x2e\x6a\x75\x72\x75\x73\141\x6e\137\151\144\75\x62\56\x69\x64\137\x6a\x75\162\x75\163\x61\x6e", "\x6c\145\x66\164");
        goto OngNx;
        ghAoa:
        foreach ($result as $key => $row) {
            $ret[$row->id_tp][$row->id_smt][$row->id_kelas] = $row;
            qK2gw:
        }
        goto zST0_;
        K1QVJ:
        $this->db->select("\141\56\151\x64\x5f\x6b\145\x6c\141\x73\54\x20\141\56\x69\144\x5f\164\x70\54\x20\141\56\151\x64\137\163\155\164\x2c\x20\141\x2e\156\141\155\141\137\x6b\145\154\141\x73\x2c\40\141\x2e\x6b\157\x64\145\x5f\x6b\145\154\x61\163\54\40\x61\56\154\x65\x76\145\154\x5f\x69\144\x2c\40\x62\x2e\x6e\141\x6d\x61\x5f\x6a\165\x72\x75\x73\x61\x6e\54\x20\x62\x2e\153\x6f\144\x65\x5f\152\x75\x72\165\163\141\x6e\x2c\x20\143\x2e\x6e\141\x6d\141\x5f\147\x75\x72\x75");
        goto Ih8sN;
        Xpz7t:
        m_D9N:
        goto x3C5J;
        rVprv:
    }
    public function getAllKelasSiswa()
    {
        goto n6xXs;
        rKvq_:
        foreach ($result as $key => $row) {
            $ret[$row->id_kelas][$row->id_siswa] = $row;
            d1zK3:
        }
        goto Qsqlh;
        JyGRJ:
        nafmD:
        goto rZCHa;
        KJQ1o:
        $result = $this->db->get()->result();
        goto SKa19;
        n6xXs:
        $this->db->select("\x2a");
        goto gQ0bC;
        rZCHa:
        return $ret;
        goto rb0rA;
        SKa19:
        $ret = [];
        goto vFOgw;
        vFOgw:
        if (!$result) {
            goto nafmD;
        }
        goto rKvq_;
        Qsqlh:
        NW0ab:
        goto JyGRJ;
        gQ0bC:
        $this->db->from("\x6b\x65\154\x61\x73\x5f\x73\151\163\167\141");
        goto KJQ1o;
        rb0rA:
    }
    public function getDataInduk()
    {
        goto TlUUt;
        MewUs:
        $this->db->join("\x62\x75\x6b\x75\137\x69\x6e\144\x75\153\40\142", "\x61\56\151\x64\x5f\x73\x69\163\x77\x61\75\142\56\x69\x64\x5f\163\151\163\167\141", "\154\145\146\164");
        goto Ztpdo;
        eWcbA:
        $result = $this->db->get()->result();
        goto wEZ_J;
        Lrwl4:
        return $ret;
        goto fgl32;
        VtBDi:
        foreach ($result as $key => $row) {
            $ret[$row->id_siswa] = $row;
            qR5gZ:
        }
        goto P1ycs;
        M1D6s:
        if (!$result) {
            goto oShRZ;
        }
        goto VtBDi;
        Xq9kQ:
        oShRZ:
        goto Lrwl4;
        TlUUt:
        $this->db->select("\141\x2e\x2a\54\40\142\x2e\x2a\54");
        goto Jl1ib;
        Jl1ib:
        $this->db->from("\x6d\x61\x73\x74\145\162\x5f\163\151\x73\167\141\40\x61");
        goto MewUs;
        Ztpdo:
        $this->db->order_by("\141\56\x6e\x61\155\x61", "\101\123\x43");
        goto eWcbA;
        P1ycs:
        S8Bj8:
        goto Xq9kQ;
        wEZ_J:
        $ret = [];
        goto M1D6s;
        fgl32:
    }
}
