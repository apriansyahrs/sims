<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\102\x41\123\x45\x50\x41\124\110") or exit("\116\x6f\40\144\x69\x72\x65\143\x74\40\163\143\162\x69\160\x74\x20\x61\x63\x63\x65\x73\x73\40\x61\x6c\x6c\x6f\x77\x65\144");
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        goto YLRgl;
        gt30P:
        $this->load->model("\x44\x61\163\150\142\x6f\141\162\144\x5f\155\157\x64\x65\154", "\144\x61\163\x68\x62\157\x61\x72\144");
        goto t3Bsn;
        NdO6K:
        if ($this->ion_auth->logged_in()) {
            goto AQURg;
        }
        goto lrAUu;
        lrAUu:
        redirect("\x61\165\x74\x68");
        goto d_S_9;
        Bm0y1:
        $this->load->model("\x44\x72\157\160\x64\157\x77\156\137\155\157\144\145\x6c", "\144\162\157\160\x64\157\167\x6e");
        goto vcgs9;
        pG4en:
        $this->load->model("\x4d\x61\x73\x74\145\x72\x5f\x6d\157\x64\x65\x6c", "\155\141\163\164\x65\x72");
        goto gt30P;
        t3Bsn:
        $this->load->model("\114\x6f\147\x5f\x6d\x6f\x64\145\x6c", "\x6c\x6f\x67\x67\x69\156\x67");
        goto Bm0y1;
        d_S_9:
        AQURg:
        goto pG4en;
        YLRgl:
        parent::__construct();
        goto NdO6K;
        vcgs9:
        $this->load->model("\x43\142\x74\137\155\157\144\145\154", "\x63\x62\164");
        goto IbXOW;
        IbXOW:
    }
    public function admin_box($setting, $tp, $smt)
    {
        goto Ui2Ii;
        axMV5:
        goto q75Pq;
        goto pH18b;
        h1GJN:
        CatLl:
        goto sBLgU;
        MuyaG:
        $info_box = json_decode(json_encode($box), FALSE);
        goto we2Yk;
        pH18b:
        skKBf:
        goto A4hN2;
        sBLgU:
        $where = "\152\145\156\152\141\156\147\75\x32\40\x4f\x52\40\152\145\x6e\x6a\141\156\x67\x3d\x31";
        goto BkmIW;
        we2Yk:
        return $info_box;
        goto fNrnY;
        g2KV9:
        if ($setting->jenjang == "\61") {
            goto skKBf;
        }
        goto d_bQR;
        lU9sX:
        $box = [["\142\x6f\170" => "\x62\154\x75\145", "\164\157\x74\x61\154" => $this->dashboard->total("\155\x61\163\164\145\162\x5f\163\x69\163\167\x61"), "\x74\x69\x74\154\145" => "\123\x69\x73\167\x61", "\165\x72\x6c" => "\144\141\x74\141\163\151\163\x77\x61", "\x69\x63\157\156" => "\x75\x73\x65\162\163"], ["\x62\x6f\x78" => "\143\x79\x61\156", "\x74\157\164\x61\154" => $this->dashboard->total("\x6d\141\x73\164\x65\162\137\x6b\145\x6c\x61\163", "\x69\x64\137\x74\x70\x3d" . $tp . "\x20\101\116\104\40\x69\144\x5f\163\155\x74\75" . $smt), "\x74\x69\164\x6c\145" => "\x52\x6f\155\142\145\x6c", "\165\x72\x6c" => "\x64\x61\164\141\153\x65\154\141\x73", "\x69\143\x6f\156" => "\x62\145\x6c\x6c"], ["\x62\157\170" => "\164\145\141\x6c", "\164\157\164\x61\x6c" => $this->dashboard->total("\155\141\x73\x74\x65\162\x5f\x67\165\x72\x75"), "\164\151\x74\154\x65" => "\x47\x75\162\165", "\x75\162\x6c" => "\144\141\x74\141\x67\x75\x72\165", "\x69\143\x6f\156" => "\x75\x73\145\x72"], ["\142\x6f\x78" => "\146\x75\x63\x68\163\x69\x61", "\x74\x6f\164\141\154" => $this->dashboard->totalWaliKelas($tp, $smt), "\164\x69\x74\x6c\145" => "\127\x61\x6c\151\x20\x4b\145\x6c\x61\x73", "\165\162\x6c" => "\x64\x61\164\141\147\165\x72\x75", "\151\143\x6f\156" => "\165\163\145\x72"], ["\142\157\x78" => "\x73\x75\x63\x63\x65\x73\163", "\164\x6f\164\141\154" => $this->dashboard->total("\155\141\163\x74\145\162\x5f\x6d\x61\160\x65\x6c", $where), "\164\151\164\x6c\x65" => "\x4d\141\x70\145\154", "\x75\162\x6c" => "\144\x61\164\141\155\141\x70\145\x6c", "\151\143\x6f\156" => "\142\157\x6f\x6b"], ["\x62\157\170" => "\171\x65\x6c\154\x6f\167", "\x74\x6f\x74\141\154" => $this->dashboard->total("\x6d\141\163\x74\145\162\137\x65\x6b\163\x74\x72\141"), "\x74\x69\x74\154\x65" => "\105\x6b\x73\x74\x72\141\x6b\165\x72\x69\153\x75\x6c\145\x72", "\x75\162\154" => "\144\x61\164\141\x65\153\x73\x74\162\141", "\151\143\157\156" => "\142\x6f\x6f\153"]];
        goto MuyaG;
        A4hN2:
        $where = "\152\x65\156\x6a\x61\x6e\147\75\60\x20\x4f\122\x20\152\145\x6e\x6a\141\x6e\x67\x3d\61";
        goto TJSeq;
        Ui2Ii:
        $where = '';
        goto g2KV9;
        TJSeq:
        goto q75Pq;
        goto h1GJN;
        BkmIW:
        q75Pq:
        goto lU9sX;
        d_bQR:
        if ($setting->jenjang == "\62") {
            goto CatLl;
        }
        goto axMV5;
        fNrnY:
    }
    public function guru_box($setting)
    {
        goto TNNzX;
        qJD5g:
        $box = [["\x62\x6f\170" => "\164\x65\141\154", "\164\x6f\164\x61\x6c" => $this->dashboard->total("\x6d\141\163\164\145\x72\x5f\153\x65\154\x61\x73"), "\x74\151\164\x6c\x65" => "\x52\x6f\155\142\145\154", "\x69\143\157\x6e" => "\x75\x73\x65\162"], ["\142\157\x78" => "\x62\154\x75\145", "\x74\x6f\164\x61\154" => $this->dashboard->total("\x6d\141\x73\x74\145\162\x5f\163\151\163\167\x61"), "\164\151\164\154\145" => "\x53\x69\x73\x77\141", "\x69\x63\157\156" => "\x75\x73\145\162\163"], ["\x62\157\170" => "\x66\x75\143\150\x73\151\x61", "\164\x6f\x74\x61\x6c" => $this->dashboard->total("\155\141\x73\x74\145\x72\137\x67\x75\162\x75"), "\x74\151\164\154\x65" => "\107\x75\162\x75", "\151\143\x6f\156" => "\165\163\x65\162"], ["\142\157\170" => "\x73\165\143\143\x65\163\x73", "\x74\157\164\x61\154" => $this->dashboard->total("\x6d\141\163\164\145\x72\x5f\155\141\160\145\x6c", $where), "\164\151\x74\x6c\145" => "\x4d\141\x70\145\154", "\x69\143\x6f\156" => "\142\157\x6f\x6b"]];
        goto Kg_o3;
        qnNQL:
        goto NPWMz;
        goto zAq0P;
        ZmrzE:
        NPWMz:
        goto qJD5g;
        XR8Ry:
        return $info_box;
        goto Hr0Yw;
        kzgkK:
        ycS9F:
        goto o7NIM;
        zAq0P:
        zCBfc:
        goto ZSw9z;
        qLmDK:
        if ($setting->jenjang == "\x31") {
            goto zCBfc;
        }
        goto KEokb;
        TNNzX:
        $where = '';
        goto qLmDK;
        Kg_o3:
        $info_box = json_decode(json_encode($box), FALSE);
        goto XR8Ry;
        hCHgW:
        goto NPWMz;
        goto kzgkK;
        o7NIM:
        $where = "\x6a\x65\156\152\141\x6e\147\x3d\x32\x20\117\122\x20\152\145\x6e\152\141\x6e\x67\x3d\x31";
        goto ZmrzE;
        KEokb:
        if ($setting->jenjang == "\62") {
            goto ycS9F;
        }
        goto qnNQL;
        ZSw9z:
        $where = "\x6a\145\x6e\x6a\x61\x6e\x67\75\60\x20\117\122\40\152\145\x6e\x6a\x61\156\147\x3d\61";
        goto hCHgW;
        Hr0Yw:
    }
    public function ujian_box()
    {
        goto o0Vh1;
        QNlZ5:
        return $info_box;
        goto SVkPd;
        o0Vh1:
        $box = [["\x62\x6f\170" => "\x69\x6e\144\151\147\157", "\x74\157\164\x61\x6c" => $this->dashboard->total("\x63\x62\x74\x5f\162\165\x61\156\x67"), "\164\151\164\154\145" => "\122\x75\141\x6e\147\x20\125\152\x69\x61\156", "\x75\x72\x6c" => "\x63\x62\164\162\x75\x61\156\x67", "\151\143\x6f\156" => "\x73\x63\x68\x6f\x6f\x6c"], ["\142\x6f\x78" => "\x6d\141\x72\157\157\x6e", "\164\157\x74\141\154" => $this->dashboard->total("\x63\x62\164\x5f\163\x65\x73\x69"), "\164\x69\164\x6c\145" => "\x53\145\x73\x69", "\x75\x72\154" => "\x63\x62\x74\x73\x65\x73\x69", "\x69\x63\157\156" => "\143\x6c\x6f\143\x6b"], ["\x62\157\x78" => "\x67\162\145\x65\x6e", "\164\157\164\141\x6c" => $this->dashboard->total("\x63\x62\164\x5f\142\x61\x6e\153\137\x73\157\x61\154"), "\164\151\x74\x6c\145" => "\102\141\x6e\x6b\x20\123\x6f\x61\x6c", "\x75\162\154" => "\143\142\x74\x62\x61\156\x6b\x73\x6f\141\154", "\x69\143\157\x6e" => "\146\157\154\x64\145\162"], ["\142\157\x78" => "\x74\x65\141\x6c", "\x74\x6f\164\x61\154" => $this->dashboard->totalJadwal(), "\164\151\x74\x6c\145" => "\112\x61\144\x77\x61\x6c", "\x75\162\x6c" => "\143\142\164\x6a\141\144\x77\x61\154", "\151\143\x6f\156" => "\143\x6c\x6f\143\x6b"]];
        goto Dwwj1;
        Dwwj1:
        $info_box = json_decode(json_encode($box), FALSE);
        goto QNlZ5;
        SVkPd:
    }
    public function menu_siswa_box()
    {
        goto tMdn0;
        tMdn0:
        $box = [["\x74\x69\x74\x6c\145" => "\112\x61\x64\x77\x61\154\x20\x50\145\154\x61\x6a\141\162\141\156", "\x69\143\x6f\x6e" => "\x69\143\x5f\157\156\154\x69\x6e\x65\56\x70\x6e\147", "\154\151\x6e\153" => "\163\151\163\167\141\57\152\x61\x64\x77\141\154\x70\145\154\141\152\141\x72\x61\156"], ["\x74\x69\164\154\145" => "\115\141\x74\145\162\151", "\x69\x63\x6f\x6e" => "\x69\143\137\145\x6c\145\x61\x72\x6e\151\156\147\x2e\160\x6e\x67", "\154\x69\x6e\153" => "\163\x69\x73\167\x61\57\x6d\141\164\145\x72\x69"], ["\164\151\164\154\145" => "\x54\x75\x67\x61\x73", "\151\143\x6f\x6e" => "\151\143\137\x71\165\145\163\x74\151\x6f\156\x73\56\x70\x6e\x67", "\x6c\151\156\x6b" => "\x73\151\x73\167\141\57\x74\x75\147\141\x73"], ["\164\x69\164\x6c\x65" => "\125\x6a\151\141\156\40\57\x20\x55\154\141\x6e\147\x61\156", "\x69\x63\x6f\156" => "\151\143\x5f\161\165\x65\163\164\151\x6f\156\56\160\156\x67", "\154\x69\x6e\x6b" => "\x73\x69\x73\x77\141\57\143\142\164"], ["\164\x69\x74\154\x65" => "\x4e\151\x6c\141\x69\x20\x48\x61\163\x69\x6c", "\x69\x63\157\x6e" => "\151\143\x5f\x65\x78\x61\155\x2e\x70\x6e\x67", "\x6c\151\156\x6b" => "\163\151\163\x77\141\x2f\150\x61\163\x69\x6c"], ["\164\x69\164\x6c\145" => "\101\x62\x73\145\156\163\151", "\151\x63\x6f\156" => "\x69\143\137\143\154\151\160\x62\157\x61\162\x64\x2e\160\156\147", "\154\x69\156\153" => "\x73\151\163\x77\x61\57\153\x65\150\141\x64\151\x72\x61\x6e"], ["\164\x69\164\154\x65" => "\x43\x61\164\x61\164\x61\x6e\x20\x47\165\162\165", "\151\143\157\x6e" => "\151\143\x5f\x73\x74\165\x64\145\x6e\164\x2e\160\x6e\x67", "\x6c\x69\x6e\153" => "\163\x69\x73\x77\x61\57\143\x61\164\141\x74\x61\156"]];
        goto GqEJi;
        m27Wa:
        return $info_box;
        goto Cxq_Q;
        GqEJi:
        $info_box = json_decode(json_encode($box), FALSE);
        goto m27Wa;
        Cxq_Q:
    }
    public function index()
    {
        goto oDWJH;
        vxvzc:
        $data["\147\x75\162\x75"] = $guru;
        goto Uz6bj;
        gALSJ:
        goto db7nA;
        goto F5ZJZ;
        BmtSw:
        foreach ($kbms as $key => $item) {
            $arrKbm[$item->id_kelas] = $item;
            Ru6d8:
        }
        goto sfl3_;
        geU47:
        goto UXOps;
        goto Qn21O;
        RwSrY:
        $tglJadwals = $this->cbt->getAllJadwalByJenis(null, $tp->id_tp, $smt->id_smt);
        goto K__7N;
        a2LTW:
        $data["\x73\x69\x73\167\x61"] = $siswa;
        goto lLWjU;
        RL1kJ:
        goto z33pF;
        goto Pl6NS;
        n0yyE:
        $this->load->view("\x6d\145\155\x62\x65\162\163\x2f\x67\165\x72\165\x2f\x74\x65\155\160\154\x61\164\x65\x73\x2f\146\x6f\x6f\x74\145\162");
        goto LG8LA;
        cmp0x:
        goto db7nA;
        goto eCv9H;
        CFyls:
        foreach ($jadwal as $key => $item) {
            $arrJadwalKelas[$item->id_kelas][$item->jam_ke] = $item;
            GfhgQ:
        }
        goto weH89;
        WHTJw:
        $arrJadwalKelas = [];
        goto CFyls;
        E0Vw3:
        $arrKbm = [];
        goto BmtSw;
        AJnrj:
        $tkn["\x74\157\153\145\156"] = '';
        goto WlJAE;
        vVtRN:
        z33pF:
        goto Ppxw0;
        SfIaR:
        $data["\160\x72\157\x66\x69\154\x65"] = $this->dashboard->getProfileAdmin($user->id);
        goto b_dP5;
        NdDva:
        $data["\153\x62\x6d\163"] = $arrKbm[$siswa->id_kelas] ?? null;
        goto QW93U;
        h_Bnl:
        $tkn["\x65\154\x61\x70\163\x65\144"] = "\x30\x30\x3a\x30\x30\x3a\x30\60";
        goto ihkxp;
        SM3sf:
        dVcXV:
        goto WHTJw;
        sfl3_:
        qMwzZ:
        goto hv5OL;
        jkcEU:
        $this->load->view("\144\x69\163\141\x62\154\x65\x5f\154\157\147\151\156", $data);
        goto vVtRN;
        LG8LA:
        goto O5Fw2;
        goto O4Bn_;
        QW93U:
        $data["\152\x61\x64\x77\141\x6c\x73"] = $arrJadwalKelas[$siswa->id_kelas] ?? [];
        goto iIqey;
        wsI1w:
        $data["\x61\x64\x61\137\165\152\151\x61\x6e"] = $this->cbt->getDataJadwalByTgl(date("\131\55\x6d\55\144"));
        goto ojiF4;
        uQ8ZP:
        $jadwal = $this->dashboard->loadJadwalHariIni($tp->id_tp, $smt->id_smt, null, $day);
        goto XAYkt;
        tTZqD:
        $data["\x74\160\x5f\x61\143\x74\x69\166\x65"] = $tp;
        goto fCxec;
        hv5OL:
        if ($this->ion_auth->in_group("\x73\151\x73\x77\x61")) {
            goto aufbc;
        }
        goto Ef8Fw;
        sLDNu:
        O5Fw2:
        goto BYDZa;
        ubfqF:
        $data["\162\165\x61\156\x67\163"] = $this->cbt->getDistinctRuang($tp->id_tp, $smt->id_smt, []);
        goto bUHZN;
        BYDZa:
        db7nA:
        goto geU47;
        fCxec:
        $data["\x73\155\164"] = $this->dashboard->getSemester();
        goto o4bKZ;
        ld15l:
        $this->load->view("\155\145\155\142\145\162\x73\57\x73\151\x73\167\141\x2f\x74\145\155\160\x6c\141\164\x65\x73\57\x66\157\157\x74\x65\162");
        goto RL1kJ;
        F5ZJZ:
        Trzio:
        goto CBf4y;
        I2gUG:
        $day = date("\x4e", strtotime(date("\131\55\x6d\55\x64")));
        goto uQ8ZP;
        STZY3:
        $data["\164\x70"] = $this->dashboard->getTahun();
        goto tTZqD;
        Pl6NS:
        H9Lbt:
        goto jkcEU;
        FBw9B:
        $data["\165\x6a\x69\141\x6e\x5f\142\x6f\170"] = $this->ujian_box();
        goto SfIaR;
        lLWjU:
        $data["\155\145\156\x75"] = $this->menu_siswa_box();
        goto NdDva;
        CBf4y:
        $data["\151\156\x66\x6f\137\x62\x6f\x78"] = $this->admin_box($setting, $tp->id_tp, $smt->id_smt);
        goto FBw9B;
        QYa6g:
        $this->load->view("\155\145\x6d\142\145\162\x73\57\x67\165\162\x75\x2f\x64\141\163\150\x62\x6f\x61\162\144");
        goto n0yyE;
        hgVM2:
        I5fmu:
        goto z2GBX;
        KRGGt:
        $data["\x6d\x61\160\145\154\x73"] = $this->master->getAllMapel();
        goto RwSrY;
        u0mE4:
        $data["\x6a\141\x64\167\x61\x6c\163\x5f\165\152\x69\x61\x6e"] = $tglJadwals;
        goto UjkMp;
        fxbS8:
        $this->load->view("\x64\151\163\141\x62\x6c\x65\137\x6c\x6f\147\151\156", $data);
        goto sLDNu;
        K__7N:
        foreach ($tglJadwals as $tgl => $jadwalss) {
            goto msVeq;
            A1vqO:
            f3yuC:
            goto ZXmFE;
            msVeq:
            foreach ($jadwalss as $mpl => $jadwals) {
                goto pJEXk;
                ZdCQH:
                Ebbxw:
                goto rVqkj;
                rVqkj:
                TCc9t:
                goto TcO4I;
                pJEXk:
                foreach ($jadwals as $jadwal) {
                    goto eKQ6t;
                    sElxY:
                    A15gf:
                    goto TSNuv;
                    eKQ6t:
                    $jadwal->bank_kelas = unserialize($jadwal->bank_kelas);
                    goto NGjjm;
                    BabuN:
                    L2zxC:
                    goto sElxY;
                    NGjjm:
                    foreach ($jadwal->bank_kelas as $kb) {
                        goto icQi2;
                        tk63V:
                        $p = $this->cbt->getKelasUjian($kb["\x6b\x65\x6c\x61\x73\x5f\x69\x64"]);
                        goto fDaqi;
                        fDaqi:
                        $jadwal->peserta[] = $p;
                        goto lGS8O;
                        lGS8O:
                        x338q:
                        goto K3xeN;
                        K3xeN:
                        i2ub3:
                        goto tgw48;
                        icQi2:
                        if (!($kb["\153\145\x6c\x61\x73\137\151\x64"] != '')) {
                            goto x338q;
                        }
                        goto tk63V;
                        tgw48:
                    }
                    goto BabuN;
                    TSNuv:
                }
                goto ZdCQH;
                TcO4I:
            }
            goto A1vqO;
            ZXmFE:
            Gb0S8:
            goto fcBwO;
            fcBwO:
        }
        goto fRSYN;
        XAYkt:
        $kbms = $this->dashboard->getJadwalKbm($tp->id_tp, $smt->id_smt);
        goto Xd0l7;
        o4bKZ:
        $data["\x73\x6d\164\x5f\x61\x63\x74\x69\166\x65"] = $smt;
        goto ZK3Y0;
        UQTuH:
        if ($siswa == null) {
            goto H9Lbt;
        }
        goto a2LTW;
        C8ooR:
        $data = ["\x75\163\x65\x72" => $user, "\x6a\x75\144\165\154" => "\x42\x65\x72\141\156\x64\141", "\x73\x75\x62\x6a\x75\144\165\x6c" => "\x48\141\154\x61\x6d\x61\x6e\40\x55\x74\141\155\x61", "\x73\145\164\x74\x69\x6e\147" => $setting];
        goto GXz0Y;
        A7m8K:
        $this->load->view("\144\141\x73\x68\x62\157\141\x72\144");
        goto bR0BV;
        WlJAE:
        $tkn["\x61\x75\x74\x6f"] = "\x30";
        goto L6Pn3;
        ihkxp:
        $data["\x74\157\x6b\145\x6e"] = $token != null ? $token : json_decode(json_encode($tkn));
        goto wsI1w;
        ROQ4q:
        $data["\x75\x6a\x69\141\156\x5f\x62\157\170"] = $this->ujian_box();
        goto vxvzc;
        kFMmP:
        $user = $this->ion_auth->user()->row();
        goto C8ooR;
        rhwfI:
        if ($this->ion_auth->is_admin()) {
            goto Trzio;
        }
        goto uyFIQ;
        fID0W:
        $data["\151\x6e\146\x6f\x5f\x62\x6f\x78"] = $this->admin_box($setting, $tp->id_tp, $smt->id_smt);
        goto ROQ4q;
        HRBW8:
        $kelass = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto hgVM2;
        Ef8Fw:
        $token = $this->cbt->getToken();
        goto AJnrj;
        UjkMp:
        $data["\x70\145\156\x67\x61\x77\x61\163"] = $this->cbt->getAllPengawas($tp->id_tp, $smt->id_smt, null, null);
        goto ubfqF;
        HZklq:
        $smt = $this->dashboard->getSemesterActive();
        goto STZY3;
        uyFIQ:
        if ($this->ion_auth->in_group("\x67\165\x72\165")) {
            goto PUI4D;
        }
        goto gALSJ;
        GXz0Y:
        $tp = $this->dashboard->getTahunActive();
        goto HZklq;
        iIqey:
        $data["\x72\165\156\x6e\151\x6e\147\x5f\x74\145\170\164"] = $this->dashboard->getRunningText();
        goto K9Q7K;
        bR0BV:
        $this->load->view("\137\x74\x65\x6d\x70\x6c\141\164\x65\x73\x2f\x64\x61\x73\x68\x62\x6f\141\x72\144\57\137\x66\x6f\x6f\x74\145\x72");
        goto cmp0x;
        eCv9H:
        PUI4D:
        goto IsSrt;
        ojiF4:
        $data["\152\141\144\167\141\x6c\x73"] = $arrJadwalKelas;
        goto l9E1h;
        z2GBX:
        $data["\x6b\145\154\141\163\x65\163"] = $kelass;
        goto I2gUG;
        bUHZN:
        $data["\147\165\x72\165\x73"] = $this->dropdown->getAllGuru();
        goto rhwfI;
        K9Q7K:
        $this->load->view("\155\145\x6d\142\x65\162\x73\x2f\163\151\x73\167\141\57\x74\145\155\160\154\x61\x74\x65\x73\x2f\x68\145\x61\x64\x65\x72", $data);
        goto JawFP;
        oDWJH:
        $setting = $this->dashboard->getSetting();
        goto kFMmP;
        l9E1h:
        $data["\x6b\142\155\x73"] = $arrKbm;
        goto KRGGt;
        L6Pn3:
        $tkn["\x6a\141\x72\141\153"] = "\61";
        goto h_Bnl;
        Qn21O:
        aufbc:
        goto ooEx8;
        JawFP:
        $this->load->view("\155\x65\x6d\x62\145\x72\163\57\x73\151\163\167\x61\x2f\x64\x61\x73\x68\x62\157\x61\162\144");
        goto ld15l;
        Uz6bj:
        $this->load->view("\155\x65\155\142\145\162\163\x2f\x67\165\162\x75\57\x74\145\x6d\x70\154\141\164\x65\x73\x2f\x68\x65\141\144\145\x72", $data);
        goto QYa6g;
        IsSrt:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto XppIi;
        weH89:
        g2zhJ:
        goto E0Vw3;
        fRSYN:
        bmzBB:
        goto u0mE4;
        ooEx8:
        $siswa = $this->dashboard->getDataSiswa($user->username, $tp->id_tp, $smt->id_smt);
        goto UQTuH;
        hlb3U:
        if (!($tp != null)) {
            goto I5fmu;
        }
        goto HRBW8;
        ZK3Y0:
        $kelass = [];
        goto hlb3U;
        b_dP5:
        $this->load->view("\137\164\x65\x6d\160\x6c\x61\164\145\163\57\x64\141\x73\150\142\157\x61\x72\144\x2f\137\150\x65\141\144\x65\162", $data);
        goto A7m8K;
        XppIi:
        if ($guru == null) {
            goto lOA1V;
        }
        goto fID0W;
        Ppxw0:
        UXOps:
        goto H2eSE;
        Xd0l7:
        foreach ($kbms as $kbm) {
            $kbm->istirahat = unserialize($kbm->istirahat);
            asHEi:
        }
        goto SM3sf;
        O4Bn_:
        lOA1V:
        goto fxbS8;
        H2eSE:
    }
    public function checkTokenJadwal()
    {
        goto oNK32;
        oNK32:
        $data["\141\144\141\x5f\x75\152\151\x61\x6e"] = $this->cbt->getDataJadwalByTgl(date("\x59\x2d\x6d\55\144"));
        goto yYBDh;
        yYBDh:
        $token = $this->cbt->getToken();
        goto CmBBz;
        be33O:
        $data["\164\157\153\145\x6e"] = $token;
        goto gNbUd;
        CmBBz:
        $token->now = date("\144\x2d\x6d\x2d\131\x20\110\72\x69\x3a\x73");
        goto be33O;
        gNbUd:
        $this->output_json($data);
        goto OMti3;
        OMti3:
    }
    public function output_json($data, $encode = true)
    {
        goto jKKRx;
        jKKRx:
        if (!$encode) {
            goto a9tJ1;
        }
        goto L9BCX;
        hmaHj:
        $this->output->set_content_type("\141\x70\x70\154\x69\143\x61\164\x69\157\x6e\x2f\x6a\163\157\156")->set_output($data);
        goto eUodW;
        L0Fjh:
        a9tJ1:
        goto hmaHj;
        L9BCX:
        $data = json_encode($data);
        goto L0Fjh;
        eUodW:
    }
    public function gantiTahun()
    {
        goto b_PiT;
        TAGKq:
        $this->dashboard->update("\155\x61\163\164\x65\x72\x5f\164\160", $update, "\x69\x64\x5f\164\x70", null, true);
        goto iHVS2;
        e4oWI:
        $id_tp = $this->input->post("\x69\x64\x5f\x74\x70\133" . $i . "\135", true);
        goto JGQb7;
        b_PiT:
        $aktif = $this->input->post("\x61\x63\x74\x69\x76\x65", true);
        goto BtD3N;
        jMnOr:
        $data["\x73\164\x61\x74\165\163"] = true;
        goto yuVpS;
        DxfEG:
        $update[] = array("\x69\x64\137\x74\x70" => $id_tp, "\x74\141\x68\x75\156" => $tahun, "\141\x63\x74\x69\x76\145" => $active);
        goto dWMl2;
        osWLf:
        $i = 0;
        goto spb3N;
        ycj0L:
        $active = 1;
        goto OXH1J;
        dWMl2:
        gDwRB:
        goto uarPx;
        M48vE:
        $this->output_json($data);
        goto ywiIb;
        uarPx:
        $i++;
        goto XCOnM;
        iHVS2:
        $data["\165\x70\144\141\x74\x65"] = $update;
        goto jMnOr;
        OXH1J:
        zJPLo:
        goto DxfEG;
        CfNO5:
        xRCcJ:
        goto TAGKq;
        XCOnM:
        goto nV3XW;
        goto CfNO5;
        yuVpS:
        $this->logging->saveLog(4, "\x6d\145\156\x67\x67\141\156\164\x69\40\x74\x61\150\165\x6e\x20\x61\152\x61\x72\141\x6e\40\141\153\x74\151\x66");
        goto M48vE;
        BtD3N:
        $rows = count($this->input->post("\164\x61\x68\x75\156", true));
        goto osWLf;
        uFd_L:
        if (!($i <= $rows)) {
            goto xRCcJ;
        }
        goto e4oWI;
        JnPA0:
        if ($id_tp === $aktif) {
            goto ES1ig;
        }
        goto mSZ0y;
        spb3N:
        nV3XW:
        goto uFd_L;
        mSZ0y:
        $active = 0;
        goto yb6Lh;
        YK62i:
        ES1ig:
        goto ycj0L;
        JGQb7:
        $tahun = $this->input->post("\x74\x61\150\x75\x6e\x5b" . $i . "\x5d", true);
        goto JnPA0;
        yb6Lh:
        goto zJPLo;
        goto YK62i;
        ywiIb:
    }
    public function gantiSemester()
    {
        goto dML4G;
        RPMOa:
        $this->output_json($data);
        goto BfTiR;
        XpJhl:
        au1Fr:
        goto uDtmV;
        y5GAp:
        $update[] = array("\151\x64\x5f\x73\x6d\x74" => $id_smt, "\163\x6d\x74" => $smt, "\x61\143\164\x69\166\x65" => $active);
        goto c7mba;
        sUA6N:
        if ($id_smt === $aktif) {
            goto wHkW0;
        }
        goto FdZf5;
        WvwYA:
        wHkW0:
        goto rijbQ;
        NdfYu:
        goto au1Fr;
        goto NXrVo;
        gkkOI:
        $data["\x73\x74\x61\x74\x75\x73"] = true;
        goto JHFq7;
        uFjRV:
        $i++;
        goto NdfYu;
        RIOyE:
        $this->dashboard->update("\155\141\163\x74\145\x72\x5f\x73\155\164", $update, "\x69\144\137\x73\x6d\164", null, true);
        goto VaxGN;
        z9Ho9:
        goto Df3Tp;
        goto WvwYA;
        rijbQ:
        $active = 1;
        goto vCouB;
        FdZf5:
        $active = 0;
        goto z9Ho9;
        NMiUz:
        $rows = count($this->input->post("\163\155\164", true));
        goto X4p8U;
        JHFq7:
        $this->logging->saveLog(4, "\155\x65\x6e\147\x67\141\x6e\x74\151\x20\163\145\x6d\145\x73\x74\145\162\x20\x61\x6b\x74\151\146");
        goto RPMOa;
        X4p8U:
        $i = 1;
        goto XpJhl;
        NXrVo:
        q_16l:
        goto RIOyE;
        vCouB:
        Df3Tp:
        goto y5GAp;
        VaxGN:
        $data["\165\x70\x64\141\164\x65"] = $update;
        goto gkkOI;
        pj7qR:
        $smt = $this->input->post("\x73\x6d\x74\x5b" . $i . "\135", true);
        goto sUA6N;
        PxHnl:
        $id_smt = $this->input->post("\x69\x64\137\163\155\164\x5b" . $i . "\135", true);
        goto pj7qR;
        c7mba:
        HJpnV:
        goto uFjRV;
        dML4G:
        $aktif = $this->input->post("\141\143\164\151\x76\x65", true);
        goto NMiUz;
        uDtmV:
        if (!($i <= $rows)) {
            goto q_16l;
        }
        goto PxHnl;
        BfTiR:
    }
    public function getNotifikasi()
    {
    }
    public function getLog($limit)
    {
        $this->output_json($this->logging->loadAktifitas($limit));
    }
    public function hapusLog()
    {
        goto JfnuV;
        Nlvdi:
        $deleted = ["\163\x74\x61\164\x75\x73" => false, "\x6d\x65\163\163\x61\147\x65" => "\x67\x61\147\141\154"];
        goto Z9X17;
        BrxML:
        if ($this->db->empty_table("\154\157\x67")) {
            goto psHfk;
        }
        goto Nlvdi;
        RwHQX:
        $this->db->trans_complete();
        goto SoE1U;
        Z9X17:
        goto I60Ju;
        goto VI0V7;
        SoE1U:
        $this->output_json($deleted);
        goto eZf1v;
        lDwjK:
        I60Ju:
        goto RwHQX;
        sTI8H:
        $deleted = ["\163\x74\x61\164\x75\163" => true, "\155\145\x73\163\x61\147\x65" => "\x62\x65\162\x68\141\163\x69\x6c"];
        goto lDwjK;
        VI0V7:
        psHfk:
        goto sTI8H;
        JfnuV:
        $this->db->trans_start();
        goto BrxML;
        eZf1v:
    }
    public function getLogSiswa($limit)
    {
        $this->output_json($this->logging->loadAktifitasSiswa($limit));
    }
    public function getPengumuman($for)
    {
        $this->output_json($this->dashboard->loadPengumuman($for));
    }
    public function getJadwalHariIni($id_kelas, $id_hari)
    {
        goto uwH1u;
        uwH1u:
        $tp = $this->dashboard->getTahunActive();
        goto GPk0Q;
        GPk0Q:
        $smt = $this->dashboard->getSemesterActive();
        goto icCTo;
        icCTo:
        $this->output_json($this->dashboard->loadJadwalHariIni($tp->id_tp, $smt->id_smt, $id_kelas, $id_hari));
        goto btrD0;
        btrD0:
    }
    public function getJadwalKbm($id_kelas)
    {
        goto BCI3z;
        MnsML:
        $this->output_json(array("\152\x61\x64\x77\x61\154" => $jadwal, "\x69\x73\164\x69\162\141\150\x61\x74" => $istirahat));
        goto a1Eqv;
        Uf7FU:
        $jadwal = $this->dashboard->getJadwalKbm($tp->id_tp, $smt->id_smt, $id_kelas);
        goto jD7XL;
        BCI3z:
        $tp = $this->dashboard->getTahunActive();
        goto WIjBG;
        jD7XL:
        $istirahat = unserialize($jadwal->istirahat);
        goto MnsML;
        WIjBG:
        $smt = $this->dashboard->getSemesterActive();
        goto Uf7FU;
        a1Eqv:
    }
}
