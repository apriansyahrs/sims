<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\x42\101\x53\105\120\x41\x54\x48") or exit("\116\x6f\40\x64\151\x72\145\x63\164\40\x73\x63\x72\x69\x70\x74\40\x61\143\x63\145\163\x73\40\x61\x6c\x6c\157\167\x65\x64");
class Dataguru extends CI_Controller
{
    public function __construct()
    {
        goto ECaUQ;
        ECaUQ:
        parent::__construct();
        goto vYJMj;
        Os06B:
        goto l0SbO;
        goto vrNnf;
        mOt2D:
        $this->form_validation->set_error_delimiters('', '');
        goto fHSRY;
        fWGst:
        QN4l3:
        goto Os06B;
        vYJMj:
        if (!$this->ion_auth->logged_in()) {
            goto WdCg1;
        }
        goto FsoKm;
        FsoKm:
        if ($this->ion_auth->is_admin()) {
            goto QN4l3;
        }
        goto r5EQr;
        XwDbb:
        l0SbO:
        goto rhHnI;
        r5EQr:
        show_error("\110\141\156\x79\141\x20\101\144\155\151\156\x69\163\x74\x72\141\x74\157\162\x20\171\141\x6e\147\40\x64\151\x62\145\x72\x69\40\x68\141\153\40\165\156\164\165\x6b\40\155\145\x6e\x67\x61\x6b\x73\x65\163\x20\x68\x61\x6c\x61\x6d\x61\156\x20\x69\156\151\54\40\x3c\x61\40\x68\162\x65\146\x3d\x22" . base_url("\x64\141\x73\150\x62\157\141\162\x64") . "\42\x3e\x4b\x65\x6d\x62\x61\154\x69\40\x6b\145\x20\155\145\156\x75\x20\x61\x77\x61\x6c\x3c\x2f\141\x3e", 403, "\x41\153\163\x65\163\40\x54\x65\162\x6c\141\x72\x61\156\x67");
        goto fWGst;
        rhHnI:
        $this->load->library(["\x64\x61\164\x61\x74\141\x62\154\145\163", "\x66\x6f\x72\155\x5f\x76\x61\x6c\151\x64\141\164\x69\x6f\x6e"]);
        goto mOt2D;
        aBcoQ:
        redirect("\x61\165\164\x68");
        goto XwDbb;
        vrNnf:
        WdCg1:
        goto aBcoQ;
        fHSRY:
    }
    public function output_json($data, $encode = true)
    {
        goto Mb0Vb;
        Cc1_g:
        JP8IY:
        goto zgVAH;
        UgAgQ:
        $data = json_encode($data);
        goto Cc1_g;
        Mb0Vb:
        if (!$encode) {
            goto JP8IY;
        }
        goto UgAgQ;
        zgVAH:
        $this->output->set_content_type("\141\160\x70\x6c\151\x63\141\164\151\157\x6e\57\x6a\163\x6f\156")->set_output($data);
        goto UJLiP;
        UJLiP:
    }
    public function index()
    {
        goto AzEVB;
        PszSy:
        if (!$mapels) {
            goto AXcdz;
        }
        goto bTr9_;
        sWKnl:
        AXcdz:
        goto VOGd0;
        wH80m:
        $this->load->view("\155\141\x73\x74\x65\162\57\x67\165\x72\165\57\x64\x61\x74\x61");
        goto smgM4;
        smgM4:
        $this->load->view("\x5f\x74\145\x6d\x70\154\x61\164\145\x73\x2f\x64\141\x73\x68\x62\x6f\141\162\x64\57\x5f\146\157\x6f\164\145\x72");
        goto e3QPS;
        al0zD:
        $data["\163\155\164"] = $this->dashboard->getSemester();
        goto P3hck;
        E8NkX:
        $this->load->model("\115\x61\x73\164\x65\162\x5f\155\x6f\144\x65\154", "\x6d\141\x73\164\145\162");
        goto F3fWr;
        VOGd0:
        $data["\155\x61\160\145\154\x73"] = $ret;
        goto mfQsM;
        lmltA:
        $setting = $this->dashboard->getSetting();
        goto I08zs;
        XunVa:
        PXOHU:
        goto sWKnl;
        zWHjs:
        $data["\153\x65\154\x61\x73\163"] = $this->master->getAllKelas($tp->id_tp, $smt->id_smt);
        goto k9hLR;
        vrnUa:
        $data["\164\160\137\141\143\x74\x69\x76\145"] = $tp;
        goto al0zD;
        iZ98F:
        $tp = $this->dashboard->getTahunActive();
        goto pUyMj;
        I08zs:
        $data = ["\165\x73\145\x72" => $user, "\152\165\144\x75\x6c" => "\x47\x75\x72\x75", "\x73\x75\x62\x6a\165\144\165\x6c" => "\x44\x61\164\141\x20\107\x75\x72\x75", "\x70\x72\x6f\146\x69\x6c\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\145\164\164\x69\156\147" => $setting];
        goto iZ98F;
        P3hck:
        $data["\x73\x6d\164\137\x61\x63\x74\x69\x76\x65"] = $smt;
        goto ZOuZ7;
        k9hLR:
        $data["\147\165\162\x75\x73"] = $this->master->getAllDataGuru($tp->id_tp, $smt->id_smt);
        goto Yifrz;
        wdGFo:
        $mode = $this->input->get("\155\x6f\x64\x65", true);
        goto dU5Ny;
        ZOuZ7:
        $mapels = $this->master->getAllMapel();
        goto mroHR;
        Yifrz:
        $this->load->view("\x5f\164\145\155\160\154\x61\x74\x65\x73\57\x64\141\163\x68\142\157\x61\162\144\x2f\137\150\x65\x61\x64\145\x72", $data);
        goto wH80m;
        dU5Ny:
        $user = $this->ion_auth->user()->row();
        goto lmltA;
        mfQsM:
        $data["\x65\x78\x74\162\x61\163"] = $this->dropdown->getAllKodeEkskul();
        goto zWHjs;
        mwOVO:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto vrnUa;
        mroHR:
        $ret = [];
        goto PszSy;
        bTr9_:
        foreach ($mapels as $key => $row) {
            $ret[$row->id_mapel] = $row;
            Bo84k:
        }
        goto XunVa;
        NGoGH:
        $data["\x6d\x6f\x64\x65"] = $mode == null ? "\61" : "\x32";
        goto mwOVO;
        AzEVB:
        $this->load->model("\104\x72\157\x70\x64\157\167\x6e\x5f\x6d\157\144\x65\x6c", "\x64\162\157\x70\x64\x6f\167\156");
        goto E8NkX;
        F3fWr:
        $this->load->model("\x44\x61\163\150\142\157\141\162\144\137\155\x6f\144\145\154", "\144\141\x73\x68\142\x6f\141\x72\x64");
        goto wdGFo;
        pUyMj:
        $smt = $this->dashboard->getSemesterActive();
        goto NGoGH;
        e3QPS:
    }
    public function data()
    {
        goto oeXKZ;
        VE8IK:
        $this->output_json($this->master->getDataGuru($tp->id_tp, $smt->id_smt), false);
        goto C3Mbq;
        y1YRQ:
        $smt = $this->dashboard->getSemesterActive();
        goto VE8IK;
        FcmEs:
        $this->load->model("\104\141\163\150\x62\157\x61\162\x64\137\x6d\157\x64\145\x6c", "\x64\x61\163\150\x62\x6f\141\x72\x64");
        goto BLp46;
        oeXKZ:
        $this->load->model("\115\x61\x73\x74\x65\x72\x5f\x6d\x6f\144\145\x6c", "\155\x61\163\164\x65\162");
        goto FcmEs;
        BLp46:
        $tp = $this->dashboard->getTahunActive();
        goto y1YRQ;
        C3Mbq:
    }
    public function edit($id)
    {
        goto On4gX;
        E6x55:
        $data["\163\155\164\x5f\x61\x63\164\151\x76\145"] = $smt;
        goto jKa1q;
        lTGQE:
        $data["\164\x70\x5f\141\143\164\151\x76\145"] = $tp;
        goto JsDby;
        X5_Rm:
        $inputsProfile = [["\154\x61\142\145\154" => "\116\x61\155\x61\x20\114\x65\x6e\147\153\141\160", "\x6e\x61\x6d\145" => "\x6e\x61\155\141\137\x67\x75\162\x75", "\166\x61\154\x75\x65" => $guru->nama_guru, "\151\x63\157\x6e" => "\x66\x61\x72\x20\x66\141\55\165\163\x65\162", "\x74\x79\160\145" => "\164\x65\x78\x74"], ["\154\x61\x62\x65\154" => "\x45\155\141\x69\x6c", "\156\x61\x6d\145" => "\145\155\141\x69\154", "\166\141\x6c\165\x65" => $guru->email, "\x69\143\x6f\156" => "\146\x61\162\x20\x66\x61\55\x65\x6e\x76\145\154\x6f\160\x65", "\164\x79\160\145" => "\164\145\170\164"], ["\x6c\x61\x62\145\x6c" => "\x4e\x49\x50\40\57\x20\116\x55\x50\124\113", "\156\x61\155\x65" => "\x6e\x69\160", "\x76\141\154\165\x65" => $guru->nip, "\151\143\x6f\x6e" => "\x66\x61\162\x20\146\x61\55\x69\x64\x2d\143\x61\x72\144", "\x74\x79\160\x65" => "\x74\x65\x78\164"], ["\x6c\x61\142\x65\154" => "\112\x65\x6e\x69\x73\x20\x4b\145\154\141\155\x69\156", "\156\x61\x6d\145" => "\x6a\145\156\x69\x73\137\x6b\x65\x6c\x61\155\151\156", "\x76\x61\154\165\x65" => $guru->jenis_kelamin, "\151\x63\157\x6e" => "\x66\141\x73\x20\146\141\55\x76\x65\x6e\x75\163\55\x6d\x61\x72\x73", "\164\x79\160\x65" => "\x74\x65\170\164"], ["\x6c\x61\142\x65\x6c" => "\116\157\56\40\110\141\x6e\x64\x70\x68\157\156\x65", "\x6e\x61\155\x65" => "\156\x6f\x5f\150\160", "\166\x61\x6c\165\x65" => $guru->no_hp, "\x69\x63\x6f\156" => "\146\141\x20\146\141\x2d\x70\150\x6f\x6e\145", "\164\171\160\145" => "\x6e\x75\x6d\x62\x65\162"], ["\x6c\x61\x62\x65\x6c" => "\x41\x67\141\155\141", "\156\x61\155\145" => "\141\x67\141\x6d\x61", "\166\141\154\165\145" => $guru->agama, "\151\143\157\x6e" => "\146\141\x72\40\x66\141\x2d\x75\163\145\x72", "\164\x79\x70\145" => "\164\x65\x78\164"]];
        goto u0QcQ;
        udj1A:
        $data["\164\x70"] = $this->dashboard->getTahun();
        goto lTGQE;
        RhyCO:
        $smt = $this->master->getSemesterActive();
        goto tjxoh;
        tjxoh:
        $guru = $this->master->getGuruById($id, $tp->id_tp, $smt->id_smt);
        goto OD_a0;
        laLyE:
        $user = $this->ion_auth->user()->row();
        goto Tb6v7;
        pnhTL:
        $this->load->view("\x5f\164\145\x6d\x70\x6c\141\x74\145\163\x2f\x64\141\x73\x68\x62\x6f\x61\162\x64\x2f\x5f\150\x65\x61\144\145\x72", $data);
        goto lI6jM;
        jKa1q:
        $data["\151\144\137\x61\143\x74\x69\166\145"] = $id;
        goto X5_Rm;
        On4gX:
        $this->load->model("\115\141\x73\164\x65\x72\137\155\157\144\145\x6c", "\155\x61\x73\164\145\162");
        goto XTKPa;
        Tb6v7:
        $setting = $this->dashboard->getSetting();
        goto Ckq34;
        JsDby:
        $data["\x73\155\164"] = $this->dashboard->getSemester();
        goto E6x55;
        ZD8PD:
        $data["\151\x6e\160\165\164\137\141\154\x61\155\x61\x74"] = json_decode(json_encode($inputsAlamat), FALSE);
        goto pnhTL;
        Ckq34:
        $tp = $this->master->getTahunActive();
        goto RhyCO;
        XTKPa:
        $this->load->model("\104\x61\x73\x68\x62\x6f\141\x72\x64\137\x6d\157\144\x65\154", "\144\x61\163\150\142\157\x61\162\x64");
        goto laLyE;
        u0QcQ:
        $inputsAlamat = [["\154\141\142\x65\x6c" => "\x4e\x49\x4b", "\156\141\155\x65" => "\x6e\x6f\137\153\x74\x70", "\x76\141\x6c\x75\145" => $guru->no_ktp, "\151\143\x6f\x6e" => "\x66\x61\x72\x20\x66\x61\55\x69\144\x2d\143\141\x72\x64", "\164\171\x70\x65" => "\x6e\165\x6d\142\145\x72"], ["\x6c\x61\142\145\x6c" => "\124\145\x6d\160\141\164\40\114\141\x68\151\x72", "\156\x61\155\145" => "\164\x65\155\160\141\x74\137\x6c\x61\x68\151\x72", "\x76\x61\154\x75\145" => $guru->tempat_lahir, "\151\143\x6f\x6e" => "\146\x61\40\x66\141\x2d\155\141\x70\55\155\x61\162\153\x65\162", "\164\x79\160\145" => "\164\145\x78\x74"], ["\x6c\x61\142\x65\x6c" => "\124\147\154\x2e\40\x4c\x61\x68\151\x72", "\x6e\141\x6d\145" => "\164\x67\154\x5f\x6c\141\x68\x69\x72", "\166\141\x6c\165\x65" => $guru->tgl_lahir, "\151\x63\157\156" => "\146\x61\40\x66\x61\55\x63\x61\154\145\156\144\x61\162", "\164\171\160\145" => "\164\145\170\164"], ["\x6c\x61\x62\145\x6c" => "\101\x6c\x61\x6d\141\x74", "\x6e\141\x6d\145" => "\x61\154\141\155\x61\x74\137\x6a\141\x6c\x61\x6e", "\x76\x61\154\165\145" => $guru->alamat_jalan, "\151\x63\x6f\156" => "\146\141\x20\146\x61\55\155\x61\x70\x2d\155\141\x72\153\x65\x72", "\164\x79\x70\x65" => "\164\x65\170\x74"], ["\x6c\141\x62\145\154" => "\113\145\143\x61\x6d\141\164\x61\156", "\x6e\x61\155\x65" => "\153\x65\x63\141\155\x61\x74\141\x6e", "\x76\x61\x6c\165\145" => $guru->kecamatan, "\151\x63\x6f\156" => "\x66\x61\x20\x66\x61\x2d\x6d\x61\x70\55\155\141\162\x6b\x65\x72", "\164\x79\x70\x65" => "\164\145\x78\x74"], ["\154\141\142\145\x6c" => "\x4b\157\x74\x61\x2f\x4b\141\x62\56", "\156\x61\155\x65" => "\x6b\141\x62\x75\x70\x61\164\145\x6e", "\x76\141\x6c\165\x65" => $guru->kabupaten, "\151\143\157\156" => "\x66\141\x20\146\x61\x2d\x6d\x61\160\x2d\155\x61\x72\153\x65\x72", "\164\171\160\x65" => "\x74\x65\x78\x74"], ["\154\x61\142\x65\x6c" => "\x50\162\x6f\x76\151\156\163\x69", "\156\x61\x6d\145" => "\160\162\x6f\x76\x69\x6e\x73\x69", "\166\x61\x6c\165\145" => $guru->provinsi, "\x69\143\157\x6e" => "\x66\x61\x20\x66\x61\55\155\141\160\55\155\x61\x72\x6b\145\x72", "\x74\x79\160\x65" => "\164\x65\170\164"], ["\x6c\141\142\145\x6c" => "\x4b\x6f\144\145\40\x50\x6f\163", "\156\x61\155\x65" => "\153\157\144\x65\x5f\x70\x6f\163", "\166\x61\154\165\145" => $guru->kode_pos, "\x69\x63\x6f\x6e" => "\146\141\40\146\141\x2d\x65\156\166\x65\154\157\x70\x65", "\x74\171\160\145" => "\156\165\x6d\142\x65\162"]];
        goto L0qLY;
        Re5kB:
        $this->load->view("\137\164\145\x6d\x70\x6c\x61\164\x65\163\57\x64\141\163\150\142\x6f\x61\x72\x64\x2f\137\x66\x6f\x6f\x74\x65\x72");
        goto sVzUO;
        OD_a0:
        $data = ["\x75\163\x65\162" => $user, "\152\165\144\165\154" => "\x45\x64\x69\x74\x20\107\x75\162\165", "\163\x75\x62\x6a\165\144\x75\x6c" => "\105\144\151\x74\x20\x44\141\x74\141\40\107\x75\x72\165", "\155\141\160\x65\x6c" => $this->master->getAllMapel(), "\147\165\162\x75" => $guru, "\160\162\x6f\x66\x69\154\145" => $this->dashboard->getProfileAdmin($user->id), "\163\145\x74\x74\151\x6e\x67" => $setting];
        goto udj1A;
        lI6jM:
        $this->load->view("\x6d\x61\163\164\145\162\x2f\147\x75\x72\x75\57\145\x64\151\164");
        goto Re5kB;
        L0qLY:
        $data["\151\x6e\x70\x75\x74\x5f\160\162\157\146\151\x6c\x65"] = json_decode(json_encode($inputsProfile), FALSE);
        goto ZD8PD;
        sVzUO:
    }
    public function create()
    {
        goto AMGDO;
        pgQXs:
        $nip = $this->input->post("\x6e\151\x70", true);
        goto XejjB;
        YJy_O:
        $username = $this->input->post("\165\x73\145\x72\x6e\x61\x6d\x65", true);
        goto r55ta;
        C1_sc:
        $u_nip = "\x69\x73\137\x75\156\x69\161\165\x65\x5b\x6d\x61\x73\x74\x65\x72\137\x67\165\x72\x75\x2e\x6e\x69\160\x5d";
        goto hXw16;
        XejjB:
        $nama_guru = $this->input->post("\x6e\141\x6d\x61\x5f\x67\165\x72\165", true);
        goto YJy_O;
        hXw16:
        $u_username = "\x7c\151\x73\137\165\156\x69\x71\165\x65\x5b\155\141\x73\164\x65\162\x5f\x67\x75\x72\x75\56\x75\163\145\x72\x6e\141\155\x65\x5d";
        goto DrxPh;
        DrxPh:
        $this->form_validation->set_rules("\156\151\x70", "\x4e\x49\x50", "\x72\145\161\165\x69\x72\x65\x64\x7c\156\165\x6d\x65\x72\151\x63\174\x74\162\151\x6d\x7c" . $u_nip);
        goto a3zgp;
        odq_W:
        $input = ["\156\x69\x70" => trim($nip), "\x6e\141\155\x61\x5f\x67\x75\162\x75" => trim($nama_guru), "\x75\x73\145\x72\156\x61\x6d\x65" => trim($username), "\160\x61\163\x73\167\x6f\x72\x64" => trim($password), "\146\x6f\x74\x6f" => "\x75\x70\154\x6f\x61\144\163\57\160\162\x6f\x66\151\154\145\x73\57" . trim($nip) . "\x2e\152\x70\x67"];
        goto F2312;
        F2312:
        $action = $this->master->create("\155\141\163\164\x65\x72\x5f\x67\165\162\x75", $input);
        goto XzMvU;
        wHrUt:
        goto fxN2j;
        goto PrASF;
        bLJW5:
        $this->output_json(["\x73\164\x61\x74\x75\163" => true]);
        goto W6Xme;
        BMUuM:
        S33kS:
        goto bLJW5;
        PrASF:
        GNhAX:
        goto OUAKU;
        fQvoj:
        fxN2j:
        goto hL3vP;
        dcCZI:
        $this->output_json($data);
        goto fQvoj;
        b27vM:
        $this->form_validation->set_rules("\x70\x61\x73\x73\x77\x6f\x72\x64", "\x50\141\163\x73\x77\157\162\144", "\x72\145\161\x75\151\162\x65\144");
        goto tacJ_;
        a3zgp:
        $this->form_validation->set_rules("\156\x61\155\x61\x5f\147\165\162\x75", "\116\141\x6d\141\x20\x47\165\x72\165", "\162\145\x71\x75\x69\x72\x65\x64\x7c\164\162\x69\x6d\x7c\x6d\151\x6e\137\154\145\156\x67\164\x68\x5b\x32\135");
        goto gxIGQ;
        r55ta:
        $password = $this->input->post("\x70\141\x73\x73\x77\157\162\x64", true);
        goto C1_sc;
        XzMvU:
        if ($action) {
            goto S33kS;
        }
        goto zqRYe;
        hGwrQ:
        goto yQpN2;
        goto BMUuM;
        W6Xme:
        yQpN2:
        goto wHrUt;
        AMGDO:
        $this->load->model("\115\x61\163\x74\145\x72\x5f\x6d\157\144\145\x6c", "\155\141\163\x74\145\162");
        goto pgQXs;
        zqRYe:
        $this->output_json(["\x73\164\141\164\x75\x73" => false]);
        goto hGwrQ;
        tacJ_:
        if ($this->form_validation->run() == FALSE) {
            goto GNhAX;
        }
        goto odq_W;
        OUAKU:
        $data = ["\x73\x74\141\x74\165\163" => false, "\x65\162\162\157\162\x73" => ["\156\x69\x70" => form_error("\156\x69\x70"), "\156\x61\x6d\x61\137\147\x75\162\x75" => form_error("\x6e\x61\x6d\141\x5f\x67\165\162\x75"), "\165\163\145\x72\x6e\141\155\x65" => form_error("\165\163\145\x72\x6e\x61\x6d\x65"), "\x70\x61\163\163\167\x6f\x72\x64" => form_error("\160\x61\x73\163\x77\157\x72\144")]];
        goto dcCZI;
        gxIGQ:
        $this->form_validation->set_rules("\165\x73\x65\162\156\x61\155\x65", "\125\163\145\x72\156\x61\155\145", "\162\145\x71\x75\x69\162\145\x64\x7c\164\162\151\155" . $u_username);
        goto b27vM;
        hL3vP:
    }
    public function save()
    {
        goto hMjZ7;
        F2nUn:
        $this->output_json(["\x73\x74\141\x74\165\x73" => false]);
        goto zOlHv;
        FpTT_:
        ASjuT:
        goto PxSqN;
        URg4b:
        $action = $this->master->create("\155\141\x73\164\x65\x72\x5f\x67\165\162\x75", $input);
        goto FwKjX;
        hMjZ7:
        $this->load->model("\115\141\163\x74\145\x72\x5f\155\157\x64\145\154", "\x6d\x61\163\164\145\162");
        goto vuycm;
        ZOe1U:
        if ($method == "\x61\x64\x64") {
            goto RAE2p;
        }
        goto ss8qb;
        VHQd1:
        $u_email = $dbdata->email === $email ? '' : "\174\x69\163\x5f\165\156\151\161\165\145\x5b\147\165\x72\x75\56\x65\x6d\141\x69\x6c\135";
        goto BIwqd;
        nH28R:
        g7blI:
        goto URg4b;
        vuycm:
        $method = $this->input->post("\155\145\164\150\x6f\144", true);
        goto h7w7u;
        eQlP1:
        $this->form_validation->set_rules("\x6d\141\x70\x65\154", "\x4d\x61\164\x61\40\113\165\x6c\x69\141\x68", "\162\145\x71\x75\x69\162\x65\x64");
        goto eCaTJ;
        Zd8Zy:
        if ($action) {
            goto ASjuT;
        }
        goto F2nUn;
        de1K1:
        $u_nip = $dbdata->nip === $nip ? '' : "\x7c\x69\x73\137\165\156\x69\161\x75\x65\x5b\147\165\162\x75\56\156\x69\160\x5d";
        goto VHQd1;
        kiss6:
        $input = ["\x6e\151\160" => $nip, "\156\141\155\141\137\147\165\162\165" => $nama_guru, "\x65\155\x61\x69\154" => $email, "\155\x61\160\x65\154\x5f\151\144" => $mapel];
        goto cqOBn;
        pLz6V:
        yguKe:
        goto WYnNY;
        qhOv6:
        $email = $this->input->post("\145\155\x61\151\x6c", true);
        goto ikGjR;
        C9MOB:
        $u_email = "\x7c\x69\x73\x5f\x75\x6e\151\161\x75\x65\133\x67\x75\x72\x75\x2e\145\155\x61\151\x6c\x5d";
        goto yZle6;
        FwKjX:
        iifEe:
        goto Zd8Zy;
        K2n9I:
        RAE2p:
        goto nI9Q1;
        PxSqN:
        $this->output_json(["\x73\164\x61\x74\165\163" => true]);
        goto uIV3e;
        uIV3e:
        qb_v4:
        goto VQlh4;
        vaByl:
        xcUlc:
        goto x_GBN;
        h7w7u:
        $id_guru = $this->input->post("\151\144\x5f\147\x75\162\x75", true);
        goto NBxMY;
        Avihf:
        k2JX2:
        goto AStPa;
        cUncB:
        $this->form_validation->set_rules("\x6e\141\155\x61\137\x67\165\x72\165", "\x4e\x61\x6d\141\40\x47\165\162\165", "\x72\x65\161\165\151\162\145\x64\174\x74\162\x69\155\x7c\x6d\151\156\137\x6c\145\x6e\x67\x74\150\133\x33\x5d");
        goto iTHsG;
        Yucox:
        $action = $this->master->update("\155\141\163\164\x65\162\137\x67\165\162\x75", $input, "\151\144\x5f\x67\165\162\x75", $id_guru);
        goto Avihf;
        BIwqd:
        goto vVLiu;
        goto K2n9I;
        nI9Q1:
        $u_nip = "\174\x69\163\x5f\165\x6e\151\161\165\145\133\x67\x75\162\x75\56\x6e\x69\160\135";
        goto C9MOB;
        iTHsG:
        $this->form_validation->set_rules("\145\155\141\x69\154", "\x45\155\x61\x69\154", "\162\x65\161\x75\151\x72\145\x64\174\x74\162\x69\x6d\174\x76\141\154\151\x64\137\145\155\x61\x69\x6c" . $u_email);
        goto eQlP1;
        w_o3m:
        $this->form_validation->set_rules("\x6e\151\160", "\x4e\111\x50", "\x72\x65\161\165\151\162\145\x64\174\164\162\x69\155\174\155\x69\156\x5f\154\x65\x6e\x67\164\x68\x5b\x38\x5d" . $u_nip);
        goto cUncB;
        eCaTJ:
        if ($this->form_validation->run() == FALSE) {
            goto yguKe;
        }
        goto kiss6;
        VQlh4:
        goto xcUlc;
        goto pLz6V;
        cqOBn:
        if ($method === "\x61\x64\x64") {
            goto g7blI;
        }
        goto pbTfr;
        ss8qb:
        $dbdata = $this->master->getGuruById($id_guru);
        goto de1K1;
        tU9AZ:
        $this->output_json($data);
        goto vaByl;
        AStPa:
        goto iifEe;
        goto nH28R;
        pbTfr:
        if (!($method === "\x65\144\151\x74")) {
            goto k2JX2;
        }
        goto Yucox;
        MOEOz:
        $nama_guru = $this->input->post("\x6e\x61\x6d\141\x5f\147\x75\x72\165", true);
        goto qhOv6;
        ikGjR:
        $mapel = $this->input->post("\x70\x61\x73\x73\167\157\162\144", true);
        goto ZOe1U;
        NBxMY:
        $nip = $this->input->post("\x6e\151\x70", true);
        goto MOEOz;
        yZle6:
        vVLiu:
        goto w_o3m;
        WYnNY:
        $data = ["\x73\164\x61\164\x75\x73" => false, "\145\x72\x72\157\x72\x73" => ["\x6e\151\x70" => form_error("\156\151\x70"), "\x6e\x61\155\141\x5f\147\165\162\165" => form_error("\156\x61\155\x61\137\x67\165\162\165"), "\145\155\141\x69\154" => form_error("\x65\x6d\x61\x69\x6c"), "\x6d\141\x70\145\x6c" => form_error("\x6d\x61\x70\x65\154")]];
        goto tU9AZ;
        zOlHv:
        goto qb_v4;
        goto FpTT_;
        x_GBN:
    }
    public function deleteGuru()
    {
        goto hW1tV;
        MOl0i:
        $this->output_json($data);
        goto itirC;
        Ykngb:
        foreach ($tables as $table) {
            goto hJ4u4;
            hJ4u4:
            if (!($table != "\x6d\141\x73\164\145\x72\x5f\x67\x75\x72\165")) {
                goto SEKbx;
            }
            goto Z9suF;
            bJANI:
            $num = $this->db->count_all_results($table);
            goto D3duC;
            hhEbD:
            $this->db->where("\x69\x64\x5f\147\x75\x72\165", $chk);
            goto bJANI;
            MWTD6:
            SEKbx:
            goto gXRhN;
            A6WJu:
            F8kUQ:
            goto AWbJ1;
            gs6XA:
            mKbeI:
            goto qjjo_;
            Z9suF:
            if ($table == "\x6d\141\x73\164\145\x72\137\x6b\145\154\141\163") {
                goto mKbeI;
            }
            goto hhEbD;
            Qg6lq:
            UKbGL:
            goto MWTD6;
            D3duC:
            goto F8kUQ;
            goto gs6XA;
            AWbJ1:
            if (!($num > 0)) {
                goto UKbGL;
            }
            goto w_9rp;
            w_9rp:
            array_push($messages, $table);
            goto Qg6lq;
            Bytza:
            $num = $this->db->count_all_results($table);
            goto A6WJu;
            gXRhN:
            YxuJk:
            goto yrvTT;
            qjjo_:
            $this->db->where("\147\x75\x72\165\137\x69\x64", $chk);
            goto Bytza;
            yrvTT:
        }
        goto VKHiV;
        inhG4:
        Cet5P:
        goto XzlGv;
        hW1tV:
        $this->load->model("\x4d\141\x73\164\145\x72\x5f\155\x6f\x64\x65\154", "\x6d\141\163\x74\x65\162");
        goto adkbg;
        RdUOy:
        Z2fNv:
        goto Ykngb;
        GpRHR:
        $tables = [];
        goto XuLk4;
        XuLk4:
        $tabless = $this->db->list_tables();
        goto UjaAH;
        OUVpk:
        $messages = [];
        goto GpRHR;
        NiKUx:
        $data["\x73\x74\x61\164\165\163"] = $this->master->delete("\x6d\141\x73\164\x65\162\137\x67\x75\162\x75", $chk, "\151\144\137\147\x75\x72\165");
        goto MOl0i;
        adkbg:
        $chk = $this->input->post("\x69\144\x5f\x67\x75\x72\x75", true);
        goto OUVpk;
        AU1Mb:
        if (count($messages) > 0) {
            goto Cet5P;
        }
        goto NiKUx;
        itirC:
        goto kcYre;
        goto inhG4;
        XzlGv:
        $this->output_json(["\x63\x6f\165\x6e\x74" => count($messages), "\163\x74\x61\164\x75\163" => false, "\155\x65\x73\x73\141\147\145" => "\x44\141\164\141\x20\147\165\x72\x75\x20\x64\151\147\x75\156\x61\153\x61\x6e\40\144\151\40" . count($messages) . "\x20\164\x61\142\x65\154\72\74\142\x72\x3e" . implode("\74\x62\162\x3e", $messages)]);
        goto lX2We;
        VKHiV:
        KIe69:
        goto AU1Mb;
        UjaAH:
        foreach ($tabless as $table) {
            goto xAUn3;
            TqRGq:
            GB_Gc:
            goto Afz6q;
            Afz6q:
            JoWIX:
            goto HXlE9;
            xAUn3:
            $fields = $this->db->field_data($table);
            goto AfDQQ;
            AfDQQ:
            foreach ($fields as $field) {
                goto DFLAn;
                jGp_j:
                bf8aE:
                goto I1RvX;
                V_J2c:
                array_push($tables, $table);
                goto jGp_j;
                DFLAn:
                if (!($field->name == "\151\144\x5f\147\165\162\x75" || $field->name == "\x67\165\x72\165\x5f\151\144")) {
                    goto bf8aE;
                }
                goto V_J2c;
                I1RvX:
                oBjEa:
                goto piAwK;
                piAwK:
            }
            goto TqRGq;
            HXlE9:
        }
        goto RdUOy;
        lX2We:
        kcYre:
        goto MyHW_;
        MyHW_:
    }
    public function detail($id_guru)
    {
        goto t5rsv;
        oaqLh:
        $data["\x6b\145\154\141\163"] = $this->master->getAllKelas();
        goto P03xu;
        v1wo1:
        $data = ["\x75\163\x65\x72" => $user, "\x6a\x75\144\x75\154" => "\104\x65\x74\x61\151\x6c\40\107\x75\x72\x75", "\163\x75\142\152\x75\x64\165\154" => "\111\x6e\x66\157\40\112\x61\142\141\164\141\x6e\x20\107\x75\162\165", "\155\x61\160\145\154" => $this->master->getAllMapel(), "\x70\x72\157\x66\x69\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\x74\164\x69\x6e\147" => $setting];
        goto N6WUJ;
        VMWo4:
        $data["\x67\165\x72\x75"] = ["\144\x65\x74\141\151\154" => $this->master->getGuruByArrId([$id_guru])[0], "\x6a\x61\x62\x61\x74\141\156" => $this->master->getDetailJabatanGuru($id_guru), "\155\x61\x74\145\162\151" => $this->db->get_where("\153\145\154\141\163\x5f\155\x61\x74\x65\x72\151", "\151\x64\137\147\x75\162\x75\75" . $id_guru)->num_rows(), "\x63\x61\164\141\x74\141\156\x5f\155\141\x70\x65\154" => $this->db->get_where("\x6b\x65\154\x61\x73\137\x63\141\x74\141\x74\141\156\137\x6d\x61\160\145\x6c", "\x69\144\137\147\165\x72\165\75" . $id_guru)->num_rows(), "\142\x61\156\153\137\x73\157\x61\x6c" => $this->db->get_where("\x63\x62\164\137\x62\141\x6e\153\x5f\163\x6f\x61\154", "\x62\x61\x6e\153\137\x67\165\162\x75\x5f\151\x64\x3d" . $id_guru)->num_rows(), "\x70\x65\x6e\147\x61\167\x61\163" => $this->db->get_where("\143\142\164\x5f\x70\x65\x6e\147\x61\167\141\163", "\151\x64\137\147\165\162\165\x20\x4c\111\113\105\x20\42\45" . $id_guru . "\x25\x22")->num_rows(), "\160\x6f\163\164\x73" => $this->db->get_where("\x70\x6f\163\x74", "\x64\x61\162\151\x3d" . $id_guru)->num_rows(), "\x63\157\155\155\x65\156\x74\x73" => $this->db->get_where("\160\x6f\163\164\137\143\x6f\155\x6d\145\156\x74\x73", "\x64\141\162\151\x3d" . $id_guru)->num_rows(), "\162\x65\x70\x6c\x69\x65\x73" => $this->db->get_where("\x70\x6f\x73\164\x5f\162\145\x70\154\x79", "\x64\x61\x72\x69\75" . $id_guru)->num_rows()];
        goto dy1aO;
        sNdWD:
        $data["\x73\155\164\x5f\141\x63\x74\x69\166\145"] = $this->dashboard->getSemesterActive();
        goto oaqLh;
        N6WUJ:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto eeC1U;
        NOx10:
        $user = $this->ion_auth->user()->row();
        goto fmD2K;
        t5rsv:
        $this->load->model("\x4d\x61\x73\x74\x65\162\137\x6d\x6f\144\145\x6c", "\155\141\x73\164\x65\162");
        goto H9Bh3;
        rmwHk:
        $this->load->view("\137\x74\x65\155\160\x6c\141\x74\145\163\57\x64\141\x73\x68\x62\157\x61\x72\144\x2f\137\x66\x6f\x6f\164\145\x72");
        goto HVxHD;
        H9Bh3:
        $this->load->model("\x44\x61\x73\150\142\x6f\x61\162\x64\137\x6d\x6f\x64\145\154", "\x64\141\163\150\x62\x6f\x61\x72\144");
        goto NOx10;
        fmD2K:
        $setting = $this->dashboard->getSetting();
        goto v1wo1;
        dy1aO:
        $this->load->view("\137\164\x65\155\160\x6c\x61\164\x65\x73\x2f\x64\141\x73\150\142\157\141\162\144\57\x5f\x68\x65\141\144\x65\162", $data);
        goto t7hb6;
        P03xu:
        $data["\151\x64\137\147\165\162\165"] = $id_guru;
        goto VMWo4;
        Clwvi:
        $data["\x73\x6d\x74"] = $this->dashboard->getSemester();
        goto sNdWD;
        t7hb6:
        $this->load->view("\155\x61\163\x74\145\x72\57\147\x75\x72\165\57\144\145\x74\141\151\x6c");
        goto rmwHk;
        eeC1U:
        $data["\x74\x70\137\141\143\164\151\x76\x65"] = $this->dashboard->getTahunActive();
        goto Clwvi;
        HVxHD:
    }
    public function delete()
    {
        goto tbYnk;
        gqIu0:
        V21Ie:
        goto hbUXQ;
        Gwhdy:
        i8SKj:
        goto c6le_;
        iMta5:
        $this->output_json(["\163\164\141\x74\x75\x73" => true, "\x74\157\164\x61\154" => count($chk)]);
        goto Gwhdy;
        HrwMA:
        $chk = $this->input->post("\x63\x68\145\x63\153\145\144", true);
        goto Agbs4;
        Agbs4:
        if (!$chk) {
            goto lv0FE;
        }
        goto MoIEz;
        T17RJ:
        $this->output_json(["\163\164\141\x74\x75\x73" => false]);
        goto gqIu0;
        tbYnk:
        $this->load->model("\x4d\x61\x73\164\x65\162\x5f\x6d\x6f\x64\x65\154", "\x6d\x61\163\164\x65\162");
        goto HrwMA;
        Lu1Lq:
        lv0FE:
        goto T17RJ;
        MoIEz:
        if (!$this->master->delete("\155\x61\x73\164\145\x72\137\147\x75\x72\165", $chk, "\x69\x64\137\147\x75\x72\165")) {
            goto i8SKj;
        }
        goto iMta5;
        c6le_:
        goto V21Ie;
        goto Lu1Lq;
        hbUXQ:
    }
    public function forceDelete()
    {
        goto eioOu;
        jBfK5:
        $data["\163\164\x61\x74\165\163"] = $this->master->delete("\x6d\x61\163\164\145\162\x5f\x67\165\162\165", $id_guru, "\x69\144\x5f\147\165\x72\165");
        goto fU_0a;
        eioOu:
        $this->load->model("\x4d\x61\163\x74\145\x72\x5f\x6d\x6f\144\x65\x6c", "\155\x61\163\x74\x65\x72");
        goto ncDhS;
        ncDhS:
        $id_guru = $this->input->post("\151\144\x5f\147\165\162\165", true);
        goto jBfK5;
        fU_0a:
        $this->output_json($data);
        goto DaEiz;
        DaEiz:
    }
    public function create_user()
    {
        goto gbegz;
        SCgny:
        dQfAy:
        goto FCpsB;
        aS35t:
        if ($this->ion_auth->email_check($email)) {
            goto yLqih;
        }
        goto EVoh9;
        Prqak:
        $group = array("\x32");
        goto vThg7;
        TzidH:
        $first_name = $nama[0];
        goto zoPp5;
        EVoh9:
        $this->ion_auth->register($username, $password, $email, $additional_data, $group);
        goto orNOY;
        jQTpI:
        $password = $data->nip;
        goto IGFpX;
        II4lS:
        yyg8P:
        goto jbB5v;
        FCpsB:
        $this->output_json($data);
        goto ErD41;
        gbegz:
        $this->load->model("\115\x61\x73\164\x65\x72\137\x6d\x6f\x64\145\x6c", "\155\141\163\164\x65\162");
        goto YySjl;
        zoPp5:
        $last_name = end($nama);
        goto RDNDl;
        PHd9L:
        $nama = explode("\x20", $data->nama_guru);
        goto TzidH;
        IGFpX:
        $email = $data->email;
        goto wI7tS;
        gLpT3:
        $data = $this->master->getGuruById($id);
        goto PHd9L;
        RDNDl:
        $username = $data->nip;
        goto jQTpI;
        vThg7:
        if ($this->ion_auth->username_check($username)) {
            goto Og70l;
        }
        goto aS35t;
        ygpJL:
        yLqih:
        goto UhWTV;
        orNOY:
        $data = ["\163\164\141\164\x75\163" => true, "\155\x73\147" => "\125\x73\x65\x72\x20\x62\x65\162\150\141\x73\x69\x6c\40\x64\151\142\165\x61\x74\x2e\x20\x4e\111\120\x20\144\x69\147\165\156\141\x6b\141\156\40\163\145\x62\141\147\x61\151\40\x70\x61\163\163\167\157\x72\144\40\160\x61\x64\x61\x20\x73\141\141\x74\40\x6c\157\147\151\x6e\56"];
        goto t7N2m;
        jbB5v:
        goto dQfAy;
        goto wPDQX;
        t7N2m:
        goto yyg8P;
        goto ygpJL;
        uN3sI:
        $data = ["\163\164\141\164\165\163" => false, "\x6d\x73\147" => "\125\x73\145\x72\x6e\141\155\145\40\164\x69\x64\141\153\40\164\145\162\x73\145\x64\151\141\x20\50\163\x75\x64\x61\x68\40\144\x69\147\x75\156\141\153\141\156\x29\x2e"];
        goto SCgny;
        wPDQX:
        Og70l:
        goto uN3sI;
        UhWTV:
        $data = ["\163\164\141\x74\165\163" => false, "\x6d\x73\147" => "\105\155\141\x69\x6c\40\x74\151\x64\x61\x6b\40\164\x65\x72\163\145\x64\151\141\40\50\x73\165\x64\x61\150\40\x64\151\147\165\x6e\141\x6b\141\156\51\56"];
        goto II4lS;
        YySjl:
        $id = $this->input->get("\151\144", true);
        goto gLpT3;
        wI7tS:
        $additional_data = ["\x66\151\162\x73\164\137\156\141\155\145" => $first_name, "\x6c\x61\163\164\x5f\x6e\x61\x6d\x65" => $last_name];
        goto Prqak;
        ErD41:
    }
    public function previewExcel()
    {
        goto to8_V;
        KjpK3:
        $config["\x6d\141\170\137\163\151\x7a\x65"] = 2048;
        goto crNMN;
        ob2jp:
        echo json_encode($data);
        goto LakdC;
        B0aU_:
        $this->load->library("\x75\x70\x6c\157\141\144", $config);
        goto Sdfxt;
        QYCZQ:
        die;
        goto gSlG6;
        HrHsL:
        ZwPfk:
        goto DCWg4;
        AXfzD:
        rZEFp:
        goto Ae4y9;
        ZQdIB:
        unlink($file);
        goto ob2jp;
        Sdfxt:
        if (!$this->upload->do_upload("\165\160\x6c\157\x61\144\137\x66\x69\154\145")) {
            goto ZwPfk;
        }
        goto ovBiy;
        BVcPP:
        mDtPp:
        goto OgDlB;
        dm8Lm:
        $i = 1;
        goto LjUJd;
        DAr33:
        $ext = $this->upload->data("\146\x69\154\145\x5f\145\x78\164");
        goto uolV4;
        LjUJd:
        AhrFg:
        goto TuM8n;
        to8_V:
        $config["\x75\x70\154\x6f\x61\x64\137\x70\141\x74\150"] = "\x2e\x2f\165\x70\x6c\157\141\144\x73\57\x69\x6d\x70\x6f\162\x74\x2f";
        goto dKYf7;
        uolV4:
        switch ($ext) {
            case "\56\170\x6c\163\170":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                goto rZEFp;
            case "\x2e\170\x6c\163":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                goto rZEFp;
            case "\x2e\x63\163\166":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                goto rZEFp;
            default:
                echo "\165\156\153\x6e\157\167\x6e\x20\x66\x69\x6c\145\40\x65\x78\164";
                die;
        }
        goto PsQZE;
        XqxM2:
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
        goto LW20d;
        PsQZE:
        BEYIL:
        goto AXfzD;
        TuM8n:
        if (!($i < count($sheetData))) {
            goto SyeUD;
        }
        goto JIkwk;
        JIkwk:
        if (!($sheetData[$i][0] != null)) {
            goto mDtPp;
        }
        goto JbfyA;
        Ae4y9:
        $spreadsheet = $reader->load($file);
        goto XqxM2;
        QdpET:
        $i++;
        goto bDUKV;
        LakdC:
        goto Kqcpc;
        goto HrHsL;
        xMP6G:
        echo $error;
        goto QYCZQ;
        OgDlB:
        i9XVK:
        goto QdpET;
        gSlG6:
        Kqcpc:
        goto Vgj2d;
        JbfyA:
        $data[] = ["\156\x61\x6d\x61" => $sheetData[$i][1], "\156\x69\x70" => $sheetData[$i][2], "\153\157\x64\145" => $sheetData[$i][3], "\x75\x73\145\x72\x6e\141\x6d\x65" => $sheetData[$i][4], "\160\141\x73\x73\x77\157\x72\x64" => $sheetData[$i][5]];
        goto BVcPP;
        ovBiy:
        $file = $this->upload->data("\146\x75\154\154\137\x70\141\164\150");
        goto DAr33;
        bDUKV:
        goto AhrFg;
        goto UAkbk;
        LW20d:
        $data = [];
        goto dm8Lm;
        DCWg4:
        $error = $this->upload->display_errors();
        goto xMP6G;
        UAkbk:
        SyeUD:
        goto ZQdIB;
        dKYf7:
        $config["\141\154\154\157\167\145\144\137\x74\x79\x70\x65\x73"] = "\x78\154\163\174\x78\x6c\163\170\174\x63\163\x76";
        goto KjpK3;
        crNMN:
        $config["\145\x6e\x63\162\171\160\164\137\x6e\x61\155\145"] = true;
        goto B0aU_;
        Vgj2d:
    }
    public function previewWord()
    {
        goto dCzAO;
        K0QgC:
        $dom = new DOMDocument();
        goto bLpNL;
        mukTV:
        $htmlWriter = new \PhpOffice\PhpWord\Writer\HTML($phpWord);
        goto uQgP7;
        yQjDX:
        $text = file_get_contents("\56\x2f\x75\160\154\x6f\141\144\x73\x2f\x74\x65\x6d\x70\57\x64\x6f\143\56\x68\x74\x6d\x6c");
        goto K0QgC;
        uzKW6:
        unlink($file);
        goto yQjDX;
        fmnXD:
        die;
        goto djTgA;
        Pt4p_:
        $i = 1;
        goto iF6ky;
        dCzAO:
        $config["\x75\x70\x6c\x6f\x61\x64\137\x70\x61\164\x68"] = "\x2e\x2f\x75\160\154\157\x61\x64\x73\57\x69\155\160\157\x72\x74\57";
        goto qfftD;
        ocRCW:
        echo $error;
        goto fmnXD;
        IKqQ2:
        ga0jl:
        goto X7YFf;
        ADjRi:
        $config["\x6d\x61\170\137\163\151\x7a\x65"] = 2048;
        goto SDy94;
        SDy94:
        $config["\x65\156\143\x72\171\x70\x74\137\156\x61\x6d\x65"] = true;
        goto uIwav;
        KYIph:
        $rows = $tables->item(0)->getElementsByTagName("\x74\x72");
        goto Pt4p_;
        HWK13:
        $error = $this->upload->display_errors();
        goto ocRCW;
        oYzTJ:
        echo json_encode($data);
        goto r7dFF;
        AcDug:
        $data = [];
        goto h4s0w;
        i0P5s:
        $data[] = ["\156\141\x6d\x61" => $cols->item(1)->nodeValue, "\x6e\x69\160" => $cols->item(2)->nodeValue, "\x6b\x6f\x64\x65" => $cols->item(3)->nodeValue, "\x75\163\x65\x72\156\141\155\145" => $cols->item(4)->nodeValue, "\x70\141\163\163\x77\157\162\x64" => $cols->item(5)->nodeValue];
        goto IKqQ2;
        AJWo0:
        if (!($i < $rows->count())) {
            goto spdS5;
        }
        goto T0p7m;
        ZkEM_:
        $phpWord = \PhpOffice\PhpWord\IOFactory::load($file);
        goto mukTV;
        fqKbZ:
        spdS5:
        goto oYzTJ;
        RuXY9:
        goto W27oV;
        goto fqKbZ;
        LxtO4:
        $file = $this->upload->data("\x66\x75\x6c\x6c\x5f\x70\x61\164\x68");
        goto ZkEM_;
        h4s0w:
        $dom->preserveWhiteSpace = false;
        goto TC2CG;
        TC2CG:
        $tables = $dom->getElementsByTagName("\x74\x61\142\x6c\x65");
        goto KYIph;
        uIwav:
        $this->load->library("\x75\x70\x6c\x6f\x61\x64", $config);
        goto UJZuY;
        uQgP7:
        try {
            $htmlWriter->save("\56\57\165\160\154\x6f\x61\x64\163\57\x74\x65\155\160\57\x64\157\143\56\x68\x74\155\154");
        } catch (\PhpOffice\PhpWord\Exception\Exception $e) {
        }
        goto uzKW6;
        iF6ky:
        W27oV:
        goto AJWo0;
        bLpNL:
        $dom->loadHTML($text);
        goto AcDug;
        djTgA:
        wTIhz:
        goto U2qtJ;
        r7dFF:
        goto wTIhz;
        goto gUv_s;
        T0p7m:
        $cols = $rows[$i]->getElementsByTagName("\x74\x64");
        goto i0P5s;
        UJZuY:
        if (!$this->upload->do_upload("\x75\160\154\157\141\144\x5f\146\x69\x6c\145")) {
            goto bUoFO;
        }
        goto LxtO4;
        X7YFf:
        $i++;
        goto RuXY9;
        gUv_s:
        bUoFO:
        goto HWK13;
        qfftD:
        $config["\141\154\x6c\157\167\145\x64\137\164\171\160\145\x73"] = "\144\x6f\x63\x78";
        goto ADjRi;
        U2qtJ:
    }
    public function import($import_data = null)
    {
        goto v1GrH;
        smyog:
        if (!($import_data != null)) {
            goto TyJHT;
        }
        goto UUA9D;
        UUA9D:
        $data["\151\x6d\160\x6f\162\164"] = $import_data;
        goto mh_OZ;
        GdLI9:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto UhIzB;
        XWQ85:
        $this->load->view("\137\x74\145\x6d\160\154\x61\x74\145\163\57\144\x61\x73\x68\142\x6f\141\162\x64\x2f\137\146\x6f\157\164\145\162");
        goto y3ICs;
        UhIzB:
        $data["\164\x70\x5f\141\x63\164\151\x76\145"] = $this->dashboard->getTahunActive();
        goto K3wLF;
        mh_OZ:
        TyJHT:
        goto GdLI9;
        v1GrH:
        $this->load->model("\x4d\141\163\x74\145\x72\x5f\x6d\x6f\x64\145\154", "\x6d\141\163\164\145\x72");
        goto veRpT;
        GcW9i:
        $user = $this->ion_auth->user()->row();
        goto J52vX;
        qusO6:
        $data["\x73\155\164\137\141\x63\x74\151\x76\145"] = $this->dashboard->getSemesterActive();
        goto rYkwq;
        veRpT:
        $this->load->model("\x44\x61\x73\x68\x62\x6f\141\162\x64\x5f\x6d\x6f\144\145\x6c", "\x64\x61\x73\150\x62\x6f\141\x72\x64");
        goto GcW9i;
        J52vX:
        $setting = $this->dashboard->getSetting();
        goto zEkLG;
        rYkwq:
        $this->load->view("\x5f\164\x65\x6d\160\154\x61\164\x65\163\x2f\x64\141\x73\150\x62\x6f\141\162\144\x2f\137\150\145\141\144\x65\162", $data);
        goto M9F4e;
        K3wLF:
        $data["\163\155\x74"] = $this->dashboard->getSemester();
        goto qusO6;
        M9F4e:
        $this->load->view("\x6d\141\x73\x74\145\162\57\147\165\x72\165\x2f\141\x64\x64");
        goto XWQ85;
        zEkLG:
        $data = ["\x75\x73\145\162" => $user, "\x6a\x75\144\x75\154" => "\107\x75\162\x75", "\163\165\x62\x6a\x75\144\165\154" => "\124\x61\155\142\141\150\x20\104\x61\x74\x61\40\107\165\162\x75", "\x6d\141\160\x65\x6c" => $this->master->getAllMapel(), "\160\162\157\x66\151\x6c\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\164\x74\151\156\147" => $setting];
        goto smyog;
        y3ICs:
    }
    public function preview()
    {
        goto HXaHe;
        U2quZ:
        $config["\155\141\x78\137\x73\151\172\145"] = 2048;
        goto ZbNSA;
        vzq2K:
        $config["\141\154\154\157\167\x65\144\x5f\164\x79\160\x65\163"] = "\x78\x6c\163\x7c\170\154\x73\x78\x7c\x63\163\x76";
        goto U2quZ;
        nIoQU:
        goto MHCGs;
        goto Yr5FU;
        MymFt:
        echo $error;
        goto YsGJ8;
        rP6mp:
        unlink($file);
        goto dhBmy;
        Kb3rr:
        $i = 1;
        goto NZRG6;
        KEKHL:
        jVJDB:
        goto NiQXW;
        NiQXW:
        Wr40N:
        goto F7GHq;
        LLrJC:
        $ext = $this->upload->data("\x66\x69\154\x65\x5f\145\x78\x74");
        goto DsJXi;
        IIrkG:
        $data[] = ["\156\x69\x70" => $sheetData[$i][0], "\156\141\x6d\x61\x5f\147\x75\162\x75" => $sheetData[$i][1], "\x65\x6d\x61\151\154" => $sheetData[$i][2], "\155\x61\160\145\x6c\137\x69\x64" => $sheetData[$i][3]];
        goto JAF70;
        ZbNSA:
        $config["\x65\156\x63\162\x79\160\x74\x5f\x6e\141\x6d\x65"] = true;
        goto nZyUu;
        NZRG6:
        MHCGs:
        goto tXK_y;
        YsGJ8:
        die;
        goto ggeXg;
        dhBmy:
        $this->import($data);
        goto zKzFO;
        qtrc6:
        wv932:
        goto JduUu;
        Yr5FU:
        oqVsv:
        goto rP6mp;
        JduUu:
        $error = $this->upload->display_errors();
        goto MymFt;
        DsJXi:
        switch ($ext) {
            case "\x2e\170\154\x73\170":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                goto Wr40N;
            case "\56\x78\154\163":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                goto Wr40N;
            case "\56\x63\x73\x76":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                goto Wr40N;
            default:
                echo "\165\156\153\156\x6f\167\x6e\40\146\151\154\x65\x20\x65\170\164";
                die;
        }
        goto KEKHL;
        nZyUu:
        $this->load->library("\x75\160\154\157\141\144", $config);
        goto NdC_V;
        HXaHe:
        $config["\165\160\154\157\141\x64\x5f\160\x61\x74\x68"] = "\x2e\57\x75\160\x6c\157\x61\x64\163\57\151\155\x70\x6f\162\164\57";
        goto vzq2K;
        tXK_y:
        if (!($i < count($sheetData))) {
            goto oqVsv;
        }
        goto IIrkG;
        KWCD2:
        $file = $this->upload->data("\x66\165\x6c\154\137\160\x61\x74\150");
        goto LLrJC;
        NdC_V:
        if (!$this->upload->do_upload("\x75\x70\154\157\x61\x64\137\x66\151\154\x65")) {
            goto wv932;
        }
        goto KWCD2;
        F7GHq:
        $spreadsheet = $reader->load($file);
        goto CTw3Z;
        I5_zY:
        $data = [];
        goto Kb3rr;
        eBwyh:
        $i++;
        goto nIoQU;
        zKzFO:
        goto zmNp8;
        goto qtrc6;
        ggeXg:
        zmNp8:
        goto wOcGz;
        JAF70:
        oHEW7:
        goto eBwyh;
        CTw3Z:
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
        goto I5_zY;
        wOcGz:
    }
    public function do_import()
    {
        goto d1VB8;
        UZNMS:
        $input = json_decode($this->input->post("\x67\x75\x72\165", true));
        goto qzHzX;
        MeoLV:
        $this->output->set_content_type("\x61\160\x70\x6c\151\x63\x61\164\x69\157\156\57\x6a\163\x6f\156")->set_output($save);
        goto hWTjm;
        qzHzX:
        $data = [];
        goto GNAO0;
        vhO12:
        qltTb:
        goto JUlQt;
        JUlQt:
        $save = $this->master->create("\x6d\x61\x73\164\x65\162\137\x67\165\x72\x75", $data, true);
        goto MeoLV;
        d1VB8:
        $this->load->model("\115\141\163\x74\x65\162\137\155\x6f\144\145\x6c", "\x6d\141\x73\164\145\x72");
        goto UZNMS;
        GNAO0:
        foreach ($input as $d) {
            $data[] = ["\x6e\x61\x6d\x61\x5f\x67\x75\162\x75" => trim($d->nama), "\156\151\x70" => trim($d->nip), "\165\163\x65\162\x6e\x61\x6d\x65" => trim($d->username), "\160\x61\163\163\167\157\162\144" => trim($d->password), "\x66\157\164\157" => "\165\160\154\x6f\141\x64\163\57\160\x72\157\146\151\x6c\x65\163\57" . trim($d->nip) . "\x2e\x6a\160\x67"];
            rNPRc:
        }
        goto vhO12;
        hWTjm:
    }
    public function editJabatan($id)
    {
        goto Dzxly;
        Dzxly:
        $this->load->model("\104\162\157\x70\144\x6f\167\x6e\137\x6d\157\x64\x65\x6c", "\144\162\x6f\x70\x64\x6f\x77\156");
        goto KvcyT;
        pC5pa:
        $data["\153\165\x72"] = $smt;
        goto OFZYd;
        gUzHq:
        $tp = $this->dashboard->getTahunActive();
        goto Vi0p4;
        kORl4:
        $data = ["\165\163\x65\x72" => $user, "\x6a\165\144\x75\154" => "\x4a\141\142\141\164\141\x6e\x20\x47\x75\162\x75", "\x73\x75\142\152\165\x64\165\154" => "\x45\x64\x69\x74\40\112\x61\x62\141\x74\141\156\x20\x47\x75\x72\165", "\x70\162\x6f\146\151\154\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\x74\x74\151\x6e\147" => $this->dashboard->getSetting()];
        goto iHPx2;
        tudlL:
        $data["\155\x61\x70\x65\x6c\x73"] = $this->dropdown->getAllMapel();
        goto Pm3rz;
        e2aUR:
        $user = $this->ion_auth->user()->row();
        goto kORl4;
        HeLeN:
        $this->load->view("\137\164\145\155\160\154\x61\164\145\163\x2f\x64\x61\x73\150\x62\x6f\x61\x72\144\x2f\137\150\x65\141\144\x65\x72", $data);
        goto J3eHB;
        OAUDX:
        $guru_before->mapel_kelas = json_decode(json_encode(unserialize($guru_before->mapel_kelas)));
        goto Hsu3q;
        RgfNN:
        NNEfU:
        goto U3Ip3;
        DiBmE:
        $data["\163\x6d\164\137\x61\143\164\151\x76\145"] = $smt;
        goto UE_9q;
        Zry8w:
        $guru_before = $this->master->getJabatanGuru($id, $tp2, $smt2);
        goto OAUDX;
        Pm3rz:
        $data["\x6c\x65\x76\145\x6c\163"] = $this->dropdown->getAllLevelGuru();
        goto UZb2F;
        RzIoZ:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto HN2qT;
        Vi0p4:
        $smt = $this->dashboard->getSemesterActive();
        goto pklWa;
        Hsu3q:
        $guru_before->ekstra_kelas = json_decode(json_encode(unserialize($guru_before->ekstra_kelas)));
        goto ADQIF;
        U3Ip3:
        $data["\153\145\154\141\x73\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto tudlL;
        PtW0x:
        if (!($group === "\141\x64\155\151\x6e")) {
            goto NNEfU;
        }
        goto LBeZZ;
        iHPx2:
        $data["\x67\165\x72\165"] = $guru;
        goto RzIoZ;
        j9FW_:
        $data["\x73\x6d\164"] = $this->dashboard->getSemester();
        goto DiBmE;
        yOoJd:
        $this->load->view("\x5f\164\145\155\x70\154\141\x74\145\163\x2f\x64\141\x73\x68\x62\157\x61\162\x64\x2f\x5f\146\x6f\157\164\x65\x72");
        goto LetbB;
        J3eHB:
        $this->load->view("\x6d\141\x73\x74\145\162\57\147\165\162\x75\57\x65\x64\x69\x74\x6d\141\160\145\x6c");
        goto yOoJd;
        ADQIF:
        $data["\x62\x65\x66\157\x72\145"] = ["\x6b\145\x6c\x61\163\163" => $this->dropdown->getAllKelas($tp2, $smt2), "\147\x75\162\165" => $guru_before];
        goto HeLeN;
        pklWa:
        $guru = $this->master->getJabatanGuru($id, $tp->id_tp, $smt->id_smt);
        goto e2aUR;
        UZb2F:
        $data["\145\x6b\x73\153\x75\154"] = $this->dropdown->getAllEkskul();
        goto pC5pa;
        FJREZ:
        $this->load->model("\x44\x61\x73\150\142\x6f\x61\x72\x64\x5f\x6d\x6f\144\145\x6c", "\144\x61\163\150\x62\x6f\141\162\x64");
        goto gUzHq;
        h6pvw:
        $tp2 = $smt->id_smt == "\x31" ? $tp->id_tp - 1 : $tp->id_tp;
        goto Zry8w;
        LBeZZ:
        $data["\x67\162\157\165\x70\163"] = $this->ion_auth->groups()->result();
        goto RgfNN;
        HN2qT:
        $data["\x74\x70\137\141\x63\164\151\x76\145"] = $tp;
        goto j9FW_;
        OFZYd:
        $smt2 = $smt->id_smt == "\61" ? "\x32" : "\x31";
        goto h6pvw;
        KvcyT:
        $this->load->model("\x4d\141\163\x74\145\162\137\155\157\144\x65\154", "\155\x61\163\164\145\162");
        goto FJREZ;
        UE_9q:
        $group = $this->ion_auth->get_users_groups($user->id)->row()->name;
        goto PtW0x;
        LetbB:
    }
    public function saveJabatan()
    {
        goto T7y1F;
        dGztq:
        goto k8EJc;
        goto vMhBv;
        EzyVs:
        if (!$check) {
            goto P4pLl;
        }
        goto dzT99;
        zfT5A:
        $kelass1 = $this->kelas->getNamaKelasByNama($tp->id_tp, $smt->id_smt);
        goto a10Sk;
        dzT99:
        $row_kelas = count($this->input->post("\153\x65\x6c\141\x73\x6d\141\x70\145\x6c" . $mapel, true));
        goto digfN;
        f7o1y:
        $smt2 = $smt->id_smt == "\x31" ? "\62" : "\x31";
        goto zF4jR;
        lUxOm:
        frz84:
        goto AG4vz;
        orpgZ:
        sKLrL:
        goto zYYKg;
        ku4Xk:
        if (!($j <= $row_kelas)) {
            goto y_mlU;
        }
        goto z91sn;
        v7yN7:
        if ($copy) {
            goto XIjNS;
        }
        goto nN4yK;
        Fg82S:
        $kelas = [];
        goto ado1z;
        MnEXq:
        $ekstra = $this->input->post("\145\153\x73\x74\162\141\x5b" . $i . "\135", true);
        goto noBeZ;
        mm2hd:
        k8EJc:
        goto jWUyM;
        NVWyz:
        $kelas_wali = $kelass1[$tmp_wali];
        goto gLpgo;
        xWtT8:
        Mu9Qw:
        goto ku4Xk;
        noBeZ:
        $nama_ekstra = $this->input->post("\156\141\x6d\x61\x5f\x65\153\x73\x74\162\x61" . $ekstra, true);
        goto rO38V;
        sAFzJ:
        $check_ekstra = $this->input->post("\x65\153\x73\164\x72\141", true);
        goto BThno;
        bnNCX:
        $check = $this->input->post("\153\x65\154\x61\x73\x6d\141\x70\145\x6c" . $mapel, true);
        goto EzyVs;
        d02xE:
        $i = 0;
        goto n6tTB;
        mVfwe:
        rgAVH:
        goto ILIM2;
        e11Dk:
        goto fOL9r;
        goto abLMJ;
        L8ZPW:
        goto ow4lj;
        goto weaZ3;
        J3JYr:
        $tmp_nama2 = $kelass2[$kelasekstra];
        goto UumJ4;
        AdRC8:
        P4pLl:
        goto X2m1D;
        Vtx2E:
        $ekstras[] = ["\x69\x64\x5f\145\153\163\164\x72\141" => $ekstra, "\x6e\x61\155\x61\x5f\145\153\163\x74\162\141" => $nama_ekstra, "\x6b\x65\x6c\141\x73\x5f\145\x6b\163\164\162\141" => $kelas];
        goto EKahx;
        SvPAL:
        if ($this->input->post()) {
            goto ivFfb;
        }
        goto eMKS9;
        wo85L:
        $mapel = $this->input->post("\155\x61\x70\145\154\133" . $i . "\x5d", true);
        goto WmxYD;
        weaZ3:
        XIjNS:
        goto jBNx3;
        r1LUx:
        $mapels = [];
        goto L8tMl;
        G90oJ:
        $id_level = $this->input->post("\154\145\166\x65\x6c", true);
        goto hKrVn;
        e9L8n:
        EUYwK:
        goto JKZ_3;
        IoBoh:
        if (!isset($kelass2[$kelasekstra])) {
            goto rgAVH;
        }
        goto J3JYr;
        G7BTA:
        $mapels[] = ["\x69\x64\x5f\155\x61\160\145\154" => $mapel, "\156\x61\x6d\x61\137\155\x61\160\x65\154" => $nama_mapel, "\153\145\154\x61\163\x5f\x6d\141\x70\x65\x6c" => $kelas];
        goto AdRC8;
        WasuP:
        $data = ["\x69\144\x5f\152\141\142\x61\x74\x61\156\137\x67\165\x72\165" => $id_guru . $tp->id_tp . $smt->id_smt, "\151\x64\137\147\165\x72\x75" => $id_guru, "\151\x64\x5f\x6a\x61\x62\141\x74\x61\156" => $id_level, "\x69\144\137\x6b\145\154\141\163" => $kelas_wali == null ? 0 : $kelas_wali, "\x6d\x61\x70\145\154\137\x6b\145\154\x61\x73" => $kelas_mapel_guru, "\145\153\x73\x74\162\141\x5f\153\x65\154\x61\163" => $kelas_ekstra_guru, "\151\x64\137\164\x70" => $tp->id_tp, "\x69\144\137\x73\155\x74" => $smt->id_smt];
        goto SvPAL;
        vNDhO:
        if (!isset($kelass1[$tmp_nama])) {
            goto lk6_5;
        }
        goto oh1CW;
        iXxyz:
        $kelas[] = ["\x6b\x65\154\x61\x73" => $kelasmapel];
        goto dGztq;
        fBlJq:
        $this->load->model("\113\x65\154\141\163\x5f\155\157\144\145\x6c", "\153\145\154\x61\163");
        goto xbjC_;
        H10Os:
        HIwLM:
        goto mm2hd;
        brxw2:
        $i = 0;
        goto H6O1B;
        tNtf8:
        $this->load->model("\115\141\x73\x74\145\162\137\155\157\x64\145\x6c", "\x6d\141\x73\164\x65\162");
        goto fBlJq;
        rO38V:
        $check = $this->input->post("\x6b\145\154\x61\163\x65\x6b\163\x74\x72\x61" . $ekstra, true);
        goto zfdzr;
        vbPvE:
        goto igD1Y;
        goto orpgZ;
        ado1z:
        $j = 0;
        goto tqQrz;
        DY9Pt:
        $res["\x6d\163\147"] = "\x45\162\162\x6f\162\x20\160\157\163\x74\x20\x64\141\164\x61";
        goto ehIfy;
        L8tMl:
        $check_mapel = $this->input->post("\x6d\141\x70\145\x6c", true);
        goto QOOdb;
        WmxYD:
        $nama_mapel = $this->input->post("\x6e\141\155\141\x5f\x6d\141\x70\x65\x6c" . $mapel, true);
        goto bnNCX;
        AG4vz:
        $kelas_mapel_guru = serialize($mapels);
        goto V_kAY;
        V_kAY:
        $ekstras = [];
        goto sAFzJ;
        abLMJ:
        O5vjZ:
        goto lUxOm;
        zF4jR:
        $tp2 = $smt->id_smt == "\x31" ? $tp->id_tp - 1 : $tp->id_tp;
        goto zfT5A;
        QePw7:
        $row_kelas = count($this->input->post("\153\x65\x6c\x61\163\x65\x6b\163\164\162\141" . $ekstra, true));
        goto Fg82S;
        zfdzr:
        if (!$check) {
            goto JefZ9;
        }
        goto QePw7;
        vMhBv:
        FtVvt:
        goto dcW20;
        Pyhwg:
        $tp = $this->master->getTahunActive();
        goto iqIoa;
        iqIoa:
        $smt = $this->master->getSemesterActive();
        goto f7o1y;
        zYYKg:
        gSY41:
        goto mS6bk;
        a10Sk:
        $kelass2 = $this->dropdown->getAllKelas($tp2, $smt2);
        goto v7yN7;
        H2bYE:
        $i++;
        goto vbPvE;
        H6O1B:
        fOL9r:
        goto n3bie;
        jBNx3:
        $tmp_wali = $kelass2[$wali];
        goto NVWyz;
        rIhcv:
        goto Tzsx6;
        goto F1v4k;
        zgo2Y:
        goto Mu9Qw;
        goto fnP6J;
        oBe_3:
        if ($copy) {
            goto irfN4;
        }
        goto vTSjc;
        pHUTe:
        $j++;
        goto zgo2Y;
        eMKS9:
        $res["\x73\x74\x61\164\165\163"] = FALSE;
        goto DY9Pt;
        F1v4k:
        irfN4:
        goto IoBoh;
        H2hUN:
        $update = $this->db->replace("\152\141\142\141\x74\141\x6e\137\147\165\162\x75", $data);
        goto hlI1S;
        ehIfy:
        goto pjxP2;
        goto r3qX3;
        n6tTB:
        igD1Y:
        goto aYlde;
        xbjC_:
        $id_guru = $this->input->post("\x69\144\x5f\147\165\162\x75", true);
        goto G90oJ;
        QOOdb:
        if (!$check_mapel) {
            goto frz84;
        }
        goto CPQom;
        BTNHj:
        Z1gJv:
        goto H2bYE;
        digfN:
        $kelas = [];
        goto kE35t;
        gLpgo:
        ow4lj:
        goto r1LUx;
        UC0IU:
        $res["\155\163\x67"] = $update ? "\104\141\x74\x61\x20\x62\145\162\150\141\x73\x69\x6c\x20\144\x69\x73\151\x6d\160\x61\x6e" : "\107\141\147\141\154\x20\x6d\145\x6e\x79\x69\x6d\x70\141\156\x20\x64\141\164\x61";
        goto QceMl;
        tqQrz:
        FZx7g:
        goto GrvtJ;
        hKrVn:
        $wali = $this->input->post("\153\x65\154\141\x73\x5f\167\x61\x6c\x69", true);
        goto sYUj_;
        hlI1S:
        $res["\x73\164\141\x74\165\x73"] = $update;
        goto UC0IU;
        UumJ4:
        $kelas[] = ["\153\145\x6c\141\163" => $kelass1[$tmp_nama2]];
        goto mVfwe;
        uorKN:
        $kelasekstra = $this->input->post("\x6b\x65\154\x61\x73\145\x6b\x73\x74\162\141" . $ekstra . "\133" . $j . "\x5d", true);
        goto oBe_3;
        At61J:
        $row_ekstras = count($this->input->post("\145\x6b\x73\x74\x72\x61", true));
        goto d02xE;
        loSaf:
        pXCa2:
        goto Vtx2E;
        n3bie:
        if (!($i <= $row_mapels)) {
            goto O5vjZ;
        }
        goto wo85L;
        k608x:
        goto FZx7g;
        goto loSaf;
        QvIn1:
        $i++;
        goto e11Dk;
        r3qX3:
        ivFfb:
        goto H2hUN;
        ILIM2:
        Tzsx6:
        goto e9L8n;
        BThno:
        if (!$check_ekstra) {
            goto gSY41;
        }
        goto At61J;
        nN4yK:
        $kelas_wali = $wali;
        goto L8ZPW;
        CPQom:
        $row_mapels = count($this->input->post("\155\141\160\145\x6c", true));
        goto brxw2;
        BaE9q:
        $tmp_nama = $kelass2[$kelasmapel];
        goto vNDhO;
        kdBYC:
        $this->output_json($res);
        goto eb42m;
        z91sn:
        $kelasmapel = $this->input->post("\x6b\145\x6c\x61\x73\x6d\x61\x70\x65\x6c" . $mapel . "\133" . $j . "\135", true);
        goto WrlcO;
        aYlde:
        if (!($i <= $row_ekstras)) {
            goto sKLrL;
        }
        goto MnEXq;
        sYUj_:
        $copy = $this->input->post("\143\x6f\x70\171", true) != null;
        goto Pyhwg;
        QceMl:
        pjxP2:
        goto kdBYC;
        mS6bk:
        $kelas_ekstra_guru = serialize($ekstras);
        goto WasuP;
        dcW20:
        if (!isset($kelass2[$kelasmapel])) {
            goto HIwLM;
        }
        goto BaE9q;
        GrvtJ:
        if (!($j <= $row_kelas)) {
            goto pXCa2;
        }
        goto uorKN;
        jWUyM:
        IFqor:
        goto pHUTe;
        JKZ_3:
        $j++;
        goto k608x;
        T7y1F:
        $this->load->model("\x44\x72\x6f\160\x64\157\167\x6e\137\155\157\144\145\x6c", "\x64\x72\157\x70\x64\157\x77\156");
        goto tNtf8;
        EKahx:
        JefZ9:
        goto BTNHj;
        WrlcO:
        if ($copy) {
            goto FtVvt;
        }
        goto iXxyz;
        fnP6J:
        y_mlU:
        goto G7BTA;
        vTSjc:
        $kelas[] = ["\x6b\x65\x6c\141\x73" => $kelasekstra];
        goto rIhcv;
        v1Eun:
        lk6_5:
        goto H10Os;
        kE35t:
        $j = 0;
        goto xWtT8;
        oh1CW:
        $kelas[] = ["\x6b\x65\x6c\x61\163" => $kelass1[$tmp_nama]];
        goto v1Eun;
        X2m1D:
        ozxGQ:
        goto QvIn1;
        eb42m:
    }
    public function getDataKelas()
    {
        goto mYsNI;
        fJFfv:
        $data["\152\141\142\141\164\141\156"] = $jbtn;
        goto ouLM7;
        Nl2L7:
        $this->load->model("\x44\x61\x73\150\x62\157\x61\162\x64\x5f\x6d\x6f\144\145\154", "\x64\141\x73\x68\142\x6f\x61\x72\144");
        goto mXxcE;
        SS2pA:
        ObG1k:
        goto fJFfv;
        eR_rr:
        $ekstra_terisi = [];
        goto SL7KB;
        aFvkg:
        $jabatans = $this->master->getGuruMapel($tp->id_tp, $smt->id_smt);
        goto Oy2cY;
        ZGUtd:
        $smt = $this->dashboard->getSemesterActive();
        goto aFvkg;
        ouLM7:
        $data["\155\160\154\137\x74\145\162\151\x73\x69"] = $mapel_terisi;
        goto Rr9bO;
        G6VYg:
        $data["\x6b\x65\154\x61\163"] = $this->users->getKelas($tp->id_tp, $smt->id_smt);
        goto d0tTw;
        o5hFB:
        $tp = $this->dashboard->getTahunActive();
        goto ZGUtd;
        mXxcE:
        $this->load->model("\125\x73\x65\x72\x73\137\x6d\x6f\144\145\154", "\x75\163\145\x72\x73");
        goto o5hFB;
        Rr9bO:
        $data["\145\153\x73\137\x74\145\162\x69\163\x69"] = $ekstra_terisi;
        goto G6VYg;
        d0tTw:
        $this->output_json($data);
        goto IoGTW;
        Oy2cY:
        $mapel_terisi = [];
        goto eR_rr;
        HoL83:
        foreach ($jabatans as $jabatan) {
            goto CIuSS;
            ZIpQ5:
            KwQI6:
            goto egiam;
            kGwzX:
            foreach ($mpl_kls as $mpls) {
                goto Nfrm2;
                oDYi0:
                $mapel_terisi[$mpls->id_mapel][$jabatan->id_guru] = ["\151\144\137\147\165\x72\165" => $jabatan->id_guru, "\147\x75\x72\x75" => $jabatan->nama_guru, "\x6b\x65\154\141\x73" => $klss];
                goto YJgp9;
                TQstL:
                foreach ($mpls->kelas_mapel as $mpl) {
                    $klss[] = $mpl->kelas;
                    P5T4y:
                }
                goto a9KNP;
                YJgp9:
                T0Ope:
                goto GiLUg;
                a9KNP:
                fHsJG:
                goto oDYi0;
                Nfrm2:
                $klss = [];
                goto TQstL;
                GiLUg:
            }
            goto ZIpQ5;
            UiH6o:
            $jbtn[$jabatan->id_jabatan][$jabatan->id_kelas] = ["\156\141\155\141" => $jabatan->nama_guru, "\x69\x64" => $jabatan->id_guru];
            goto SeKcJ;
            egiam:
            foreach ($eks_kls as $eks) {
                goto Rue1F;
                owNTe:
                Kn8k3:
                goto b7eo0;
                Rue1F:
                $klse = [];
                goto TjNHl;
                YIs80:
                OrSZB:
                goto u3KrF;
                TjNHl:
                foreach ($eks->kelas_ekstra as $ek) {
                    $klse[] = $ek->kelas;
                    BnJ_3:
                }
                goto YIs80;
                u3KrF:
                $ekstra_terisi[$eks->id_ekstra][$jabatan->id_guru] = ["\151\144\x5f\x67\x75\x72\x75" => $jabatan->id_guru, "\x67\x75\162\165" => $jabatan->nama_guru, "\153\145\x6c\141\163" => $klse];
                goto owNTe;
                b7eo0:
            }
            goto FRM2u;
            CIuSS:
            $mpl_kls = $jabatan->mapel_kelas = json_decode(json_encode(unserialize($jabatan->mapel_kelas)));
            goto Ygrs5;
            FRM2u:
            ezVFz:
            goto UiH6o;
            Ygrs5:
            $eks_kls = $jabatan->ekstra_kelas = json_decode(json_encode(unserialize($jabatan->ekstra_kelas)));
            goto kGwzX;
            SeKcJ:
            k_W1j:
            goto v_Di1;
            v_Di1:
        }
        goto SS2pA;
        mYsNI:
        $this->load->model("\x4d\141\x73\164\x65\x72\x5f\x6d\157\144\145\x6c", "\x6d\x61\x73\x74\x65\162");
        goto Nl2L7;
        SL7KB:
        $jbtn = [];
        goto HoL83;
        IoGTW:
    }
    public function addjabatan()
    {
        goto VHJ9g;
        odfiE:
        $replaced = $this->db->delete("\x6c\145\x76\145\154\137\147\x75\x72\x75", "\x69\x64\137\x6c\x65\166\145\154\x3d" . $id);
        goto xr3lY;
        VHJ9g:
        $mode = $this->input->post("\x6d\157\144\x65", true);
        goto RhNKv;
        zHwBJ:
        $this->output_json($data);
        goto a6o_h;
        IgjU4:
        $insert = ["\x69\144\137\x6c\x65\x76\145\x6c" => $id, "\x6c\145\166\145\x6c" => $this->input->post("\154\145\166\145\154", true)];
        goto tKhNh;
        OsIHZ:
        $data = ["\x73\x75\143\143\145\x73\163" => $replaced, "\x6d\x73\147" => $replaced ? "\x53\165\153\x73\x65\x73\x20" . $s_mode . "\40\x6a\141\x62\x61\164\141\156" : "\107\141\147\x61\154\40" . $s_mode . "\x20\x6a\x61\142\141\164\141\156"];
        goto zHwBJ;
        tKhNh:
        $replaced = $this->db->replace("\x6c\145\166\145\x6c\137\147\x75\162\x75", $insert);
        goto buDZU;
        YX7ZT:
        kBaK2:
        goto IgjU4;
        w2lBC:
        if ($mode == "\61") {
            goto kBaK2;
        }
        goto odfiE;
        buDZU:
        YZr7l:
        goto OsIHZ;
        RhNKv:
        $id = $this->input->post("\151\x64\137\154\x65\x76\145\x6c", true);
        goto bvcMt;
        xr3lY:
        goto YZr7l;
        goto YX7ZT;
        bvcMt:
        $s_mode = $mode == "\x31" ? "\155\145\x6e\x79\151\x6d\160\141\156" : "\155\x65\156\x67\x68\x61\x70\165\x73";
        goto w2lBC;
        a6o_h:
    }
}
