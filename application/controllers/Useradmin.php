<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\x42\101\123\x45\x50\x41\124\x48") or exit("\x4e\157\40\x64\151\x72\x65\x63\x74\x20\163\x63\162\x69\160\164\x20\x61\x63\143\x65\x73\163\x20\x61\154\154\157\x77\x65\x64");
class Useradmin extends CI_Controller
{
    public function __construct()
    {
        goto AUIbh;
        k2vEm:
        U9GUE:
        goto tspaG;
        GI3Ef:
        $this->load->model("\115\x61\x73\x74\145\162\x5f\155\x6f\144\145\154", "\x6d\x61\163\x74\x65\x72");
        goto sA5xJ;
        sGABQ:
        $this->load->library(["\x64\x61\x74\141\164\x61\x62\x6c\145\x73", "\x66\x6f\162\x6d\137\166\141\x6c\151\144\141\164\x69\157\156"]);
        goto Rzn3R;
        AUIbh:
        parent::__construct();
        goto evErB;
        evErB:
        if (!$this->ion_auth->logged_in()) {
            goto U9GUE;
        }
        goto fEWqC;
        foE7h:
        ca3nI:
        goto uhTxD;
        fEWqC:
        if ($this->ion_auth->is_admin()) {
            goto ca3nI;
        }
        goto iuMzN;
        ZdcEf:
        Yc35Q:
        goto GvFWP;
        iuMzN:
        show_error("\x48\x61\x6e\171\141\x20\101\x64\155\x69\x6e\151\x73\164\162\141\164\157\x72\x20\171\141\156\x67\40\144\x69\142\145\x72\x69\x20\x68\x61\x6b\40\x75\x6e\164\165\x6b\x20\x6d\145\156\147\141\x6b\x73\x65\x73\40\150\141\x6c\141\155\x61\x6e\40\151\156\151\54\40\x3c\x61\x20\150\x72\145\x66\75\x22" . base_url("\144\x61\163\x68\x62\157\x61\x72\144") . "\42\76\x4b\x65\x6d\x62\x61\x6c\x69\x20\x6b\x65\40\x6d\x65\x6e\165\40\x61\x77\x61\x6c\x3c\57\141\x3e", 403, "\x41\x6b\163\x65\163\40\124\145\162\x6c\x61\x72\141\x6e\147");
        goto foE7h;
        GvFWP:
        $this->load->library("\165\160\154\157\x61\144");
        goto sGABQ;
        tspaG:
        redirect("\x61\165\x74\150");
        goto ZdcEf;
        sA5xJ:
        $this->load->model("\104\x61\x73\x68\142\157\x61\162\x64\137\x6d\157\x64\145\154", "\x64\x61\x73\x68\x62\157\141\x72\144");
        goto xQmpi;
        uhTxD:
        goto Yc35Q;
        goto k2vEm;
        Rzn3R:
        $this->load->model("\x55\x73\145\162\x73\x5f\x6d\157\x64\145\x6c", "\x75\163\145\162\x73");
        goto GI3Ef;
        xQmpi:
        $this->form_validation->set_error_delimiters('', '');
        goto IsA3D;
        IsA3D:
    }
    public function is_admin()
    {
        goto G2ZXA;
        RPoWB:
        cOL5L:
        goto izrcb;
        eMnnX:
        show_error("\110\141\156\x79\x61\40\x41\144\x6d\151\x6e\x69\x73\164\162\141\164\x6f\162\40\171\x61\x6e\x67\40\x64\x69\x62\x65\x72\x69\40\x68\141\153\x20\x75\156\x74\x75\153\x20\155\145\x6e\147\141\x6b\x73\x65\x73\x20\x68\141\154\141\x6d\x61\x6e\40\151\x6e\x69\x2c\x20\x3c\x61\40\x68\x72\145\146\75\x22" . base_url("\x64\141\163\x68\142\157\x61\x72\144") . "\42\76\x4b\145\155\142\x61\x6c\151\x20\153\145\x20\x6d\145\156\165\40\141\x77\141\x6c\x3c\57\x61\x3e", 403, "\x41\x6b\x73\x65\x73\x20\124\145\162\x6c\141\162\141\156\147");
        goto RPoWB;
        G2ZXA:
        if ($this->ion_auth->is_admin()) {
            goto cOL5L;
        }
        goto eMnnX;
        izrcb:
    }
    public function output_json($data, $encode = true)
    {
        goto arV_v;
        pjtd2:
        oM4ZY:
        goto wuroz;
        arV_v:
        if (!$encode) {
            goto oM4ZY;
        }
        goto pSMSO;
        wuroz:
        $this->output->set_content_type("\141\x70\160\154\x69\x63\x61\x74\x69\x6f\156\x2f\152\x73\157\156")->set_output($data);
        goto AnSp_;
        pSMSO:
        $data = json_encode($data);
        goto pjtd2;
        AnSp_:
    }
    public function data()
    {
        $this->is_admin();
        $this->output_json($this->users->getDataadmin(), false);
    }
    public function index()
    {
        goto fOeuq;
        m8A6x:
        $this->load->view("\x75\163\145\162\163\57\141\144\155\151\156\x2f\144\x61\x74\141");
        goto xj9eW;
        lRqB8:
        $data["\164\x70\x5f\x61\x63\164\x69\166\145"] = $this->dashboard->getTahunActive();
        goto rk7uJ;
        rk7uJ:
        $data["\163\155\x74"] = $this->dashboard->getSemester();
        goto i4PA0;
        i4PA0:
        $data["\x73\x6d\164\x5f\141\x63\164\x69\x76\x65"] = $this->dashboard->getSemesterActive();
        goto CJfdk;
        vTiMI:
        $data = ["\x75\x73\145\162" => $user, "\152\x75\x64\x75\154" => "\x41\x64\x6d\x69\156\40\115\141\156\x61\x67\x65\x6d\x65\x6e\x74", "\163\x75\142\x6a\165\x64\x75\154" => "\104\141\x74\141\x20\101\x64\155\x69\x6e", "\x70\162\157\x66\151\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\164\164\151\x6e\147" => $this->dashboard->getSetting()];
        goto WMwVR;
        RK72h:
        $user = $this->ion_auth->user()->row();
        goto vTiMI;
        CJfdk:
        $this->load->view("\x5f\x74\x65\155\x70\x6c\141\x74\x65\163\57\x64\x61\163\x68\142\x6f\x61\162\x64\57\137\150\x65\141\x64\x65\162\x2e\160\x68\160", $data);
        goto m8A6x;
        WMwVR:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto lRqB8;
        xj9eW:
        $this->load->view("\x5f\164\x65\x6d\x70\154\x61\164\x65\163\x2f\144\141\x73\x68\x62\x6f\x61\x72\x64\x2f\x5f\x66\157\157\164\x65\162\x2e\160\150\160");
        goto qtrOy;
        fOeuq:
        $this->is_admin();
        goto RK72h;
        qtrOy:
    }
    public function edit($id)
    {
        goto rQ2BD;
        Et7hn:
        $data["\x73\x6d\164\x5f\x61\143\x74\x69\166\x65"] = $this->dashboard->getSemesterActive();
        goto OQptC;
        IE5ov:
        $data = ["\165\x73\x65\x72" => $user, "\152\x75\144\x75\x6c" => "\x41\144\155\x69\x6e\151\x73\x74\x72\141\164\157\x72", "\163\x75\x62\152\165\144\165\154" => "\x45\144\151\164\40\104\x61\164\x61\40\101\144\155\151\x6e", "\165\163\145\x72\x73" => $this->ion_auth->user($id)->row(), "\x67\162\157\x75\160\x73" => $this->ion_auth->groups()->result(), "\x6c\145\166\145\154" => $level[0], "\x70\x72\x6f\x66\151\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\163\145\x74\164\151\x6e\147" => $this->dashboard->getSetting()];
        goto kYS9N;
        OQptC:
        $this->load->view("\x5f\164\x65\155\x70\x6c\141\164\145\163\57\144\x61\163\150\142\157\x61\x72\144\x2f\137\150\x65\x61\x64\145\162\56\160\x68\160", $data);
        goto Txmx9;
        O8nXW:
        $user = $this->ion_auth->user()->row();
        goto IE5ov;
        rQ2BD:
        $level = $this->ion_auth->get_users_groups($id)->result();
        goto O8nXW;
        kYS9N:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto sR_05;
        Txmx9:
        $this->load->view("\x75\163\x65\x72\x73\57\141\x64\155\151\x6e\57\x65\144\x69\164");
        goto LQCog;
        TMYpQ:
        $data["\163\x6d\x74"] = $this->dashboard->getSemester();
        goto Et7hn;
        LQCog:
        $this->load->view("\x5f\164\x65\155\x70\154\141\164\145\x73\x2f\144\x61\163\150\x62\x6f\141\x72\144\57\137\x66\x6f\x6f\164\x65\x72\x2e\160\150\160");
        goto XLt6Y;
        sR_05:
        $data["\x74\160\137\141\x63\164\x69\x76\145"] = $this->dashboard->getTahunActive();
        goto TMYpQ;
        XLt6Y:
    }
    public function create()
    {
        goto zZcT0;
        ym60C:
        $this->form_validation->set_rules("\x65\155\x61\151\154", "\x45\155\x61\151\x6c", "\x72\x65\x71\x75\x69\x72\x65\x64\x7c\x76\x61\154\x69\x64\x5f\145\155\x61\151\x6c");
        goto lYRRP;
        KWgaS:
        $group = array("\x31");
        goto NZ3cl;
        w8aMQ:
        RQNk6:
        goto RIAjV;
        EAMp7:
        ccBJ1:
        goto KXcv6;
        Q8W1K:
        $additional_data = ["\146\151\x72\163\x74\137\156\x61\155\145" => $this->input->post("\x66\x69\x72\163\164\x5f\x6e\141\155\145", true), "\x6c\x61\163\164\137\x6e\141\155\145" => $this->input->post("\154\x61\163\164\x5f\x6e\x61\x6d\145", true)];
        goto KWgaS;
        NZ3cl:
        if ($this->ion_auth->username_check($username)) {
            goto qn7hN;
        }
        goto YGhru;
        rSpay:
        $data = ["\x73\x74\141\164\165\x73" => true, "\155\163\x67" => "\125\163\145\x72\x20\142\x65\x72\x68\x61\163\x69\x6c\40\144\x69\x62\165\x61\164\x2e\x20\x4e\111\120\40\x64\x69\x67\165\156\141\x6b\x61\156\40\x73\x65\x62\x61\147\141\x69\40\160\141\x73\163\167\x6f\162\x64\x20\160\141\x64\141\40\163\141\x61\x74\x20\x6c\157\147\x69\x6e\56"];
        goto jKaC1;
        THVgd:
        tEJQk:
        goto HZd3Z;
        c1mLS:
        MNiyu:
        goto PMeZH;
        YGhru:
        if ($this->ion_auth->email_check($email)) {
            goto MNiyu;
        }
        goto W9nZk;
        HZd3Z:
        $this->output_json($data);
        goto jeXJW;
        UK65p:
        $data["\x73\164\x61\164\165\163"] = false;
        goto wRI_C;
        dSIpm:
        EL3dA:
        goto UK65p;
        jKaC1:
        goto ccBJ1;
        goto c1mLS;
        iMWSq:
        $username = $this->input->post("\x75\x73\x65\x72\156\x61\x6d\145", true);
        goto M2Lv3;
        PMeZH:
        $data = ["\x73\164\x61\164\x75\x73" => false, "\155\163\147" => "\x45\155\141\151\154\40\x74\x69\144\x61\x6b\40\x74\x65\x72\x73\x65\144\151\141\40\50\x73\x75\144\141\x68\40\x64\x69\x67\x75\156\141\x6b\141\x6e\51\x2e"];
        goto EAMp7;
        Gn5aU:
        $data = ["\x73\164\141\x74\x75\163" => false, "\155\163\147" => "\125\163\145\162\156\141\x6d\145\x20\164\151\x64\141\153\x20\164\x65\162\x73\x65\x64\x69\141\40\x28\x73\165\x64\x61\150\x20\x64\x69\147\165\x6e\x61\153\x61\156\x29\x2e"];
        goto w8aMQ;
        RIAjV:
        goto tEJQk;
        goto dSIpm;
        cdI_v:
        $email = $this->input->post("\145\x6d\141\151\x6c", true);
        goto Q8W1K;
        wRI_C:
        $data["\x65\162\162\x6f\162\x73"] = ["\x75\163\145\x72\156\x61\155\145" => form_error("\x75\x73\145\162\156\141\155\x65"), "\x66\151\x72\163\x74\137\156\x61\155\x65" => form_error("\146\x69\162\x73\164\x5f\x6e\x61\x6d\145"), "\x6c\141\x73\x74\137\x6e\141\155\x65" => form_error("\x6c\x61\163\x74\x5f\156\x61\x6d\145"), "\x65\155\x61\151\154" => form_error("\145\x6d\x61\x69\x6c"), "\x70\x61\163\x73\x77\157\x72\144" => form_error("\160\x61\x73\x73\167\157\x72\144"), "\x63\157\x6e\x66\x69\x72\155\x5f\x70\x61\163\x73\167\157\x72\x64" => form_error("\x63\157\156\146\x69\x72\155\x5f\x70\x61\163\163\167\x6f\x72\144")];
        goto THVgd;
        KXcv6:
        goto RQNk6;
        goto sOQme;
        lYRRP:
        $this->form_validation->set_rules("\160\141\x73\163\x77\157\x72\x64", "\x50\x61\x73\x73\x77\157\x72\144", "\164\162\151\155\174\155\151\x6e\x5f\x6c\145\x6e\x67\x74\150\133\66\135\x7c\x6d\x61\x78\137\154\x65\156\147\164\150\133\x32\x30\x5d\x7c\x72\145\x71\165\151\x72\x65\x64");
        goto hs764;
        BHJrH:
        $this->form_validation->set_rules("\165\163\x65\x72\156\x61\155\x65", "\125\x73\145\x72\x6e\141\x6d\x65", "\x72\145\161\x75\x69\x72\145\x64");
        goto UhVes;
        y1lW0:
        if ($this->form_validation->run() === FALSE) {
            goto EL3dA;
        }
        goto iMWSq;
        zZcT0:
        $this->is_admin();
        goto BHJrH;
        M2Lv3:
        $password = $this->input->post("\160\x61\163\x73\x77\157\162\x64", true);
        goto cdI_v;
        W9nZk:
        $this->ion_auth->register($username, $password, $email, $additional_data, $group);
        goto rSpay;
        sOQme:
        qn7hN:
        goto Gn5aU;
        hs764:
        $this->form_validation->set_rules("\x63\157\x6e\146\151\162\155\137\160\141\163\x73\x77\157\x72\144", "\x43\157\x6e\146\151\x72\155\x20\x70\141\x73\x73\167\x6f\162\144", "\164\162\x69\155\174\155\x61\164\x63\x68\x65\163\x5b\x70\141\x73\x73\167\157\x72\x64\x5d\174\x72\145\x71\165\151\162\x65\144");
        goto y1lW0;
        UhVes:
        $this->form_validation->set_rules("\x66\151\x72\163\x74\137\156\x61\155\145", "\x46\x69\x72\163\164\x20\x4e\x61\155\x65", "\x72\x65\x71\165\151\x72\x65\144");
        goto JVAql;
        JVAql:
        $this->form_validation->set_rules("\154\x61\163\x74\x5f\x6e\141\x6d\x65", "\114\x61\163\x74\40\x4e\x61\x6d\x65", "\162\x65\x71\165\151\162\145\144");
        goto ym60C;
        jeXJW:
    }
    public function edit_info()
    {
        goto kVuxd;
        Dimi4:
        Bh7Uq:
        goto al_cE;
        CmbmA:
        $id = $this->input->post("\151\x64", true);
        goto W2i02;
        RBJxi:
        $this->output_json($data);
        goto gbRRw;
        w6lS1:
        $this->form_validation->set_rules("\146\x69\162\163\x74\137\156\x61\x6d\x65", "\x46\151\x72\x73\x74\40\x4e\x61\x6d\x65", "\162\x65\161\165\151\162\x65\144");
        goto ySbYQ;
        HUlg3:
        $data["\163\x74\x61\x74\x75\x73"] = $update ? true : false;
        goto rPrVI;
        ySbYQ:
        $this->form_validation->set_rules("\x6c\x61\x73\164\137\x6e\141\x6d\x65", "\x4c\x61\x73\x74\40\x4e\141\155\145", "\162\x65\161\165\151\162\145\x64");
        goto wc5HH;
        VcKxY:
        $data["\x65\x72\162\x6f\x72\163"] = ["\x75\163\x65\162\156\141\x6d\x65" => form_error("\165\x73\x65\162\156\141\155\x65"), "\x66\151\162\x73\x74\x5f\x6e\x61\155\x65" => form_error("\x66\x69\x72\163\x74\137\156\141\x6d\x65"), "\154\141\x73\x74\x5f\x6e\x61\x6d\x65" => form_error("\154\x61\x73\164\137\156\x61\x6d\145"), "\145\155\141\x69\154" => form_error("\x65\155\141\151\154")];
        goto csIqO;
        kVuxd:
        $this->is_admin();
        goto hENLC;
        rPrVI:
        goto MLDD0;
        goto Dimi4;
        W2i02:
        $input = ["\x75\163\x65\162\156\x61\155\145" => $this->input->post("\165\163\145\162\x6e\x61\x6d\x65", true), "\146\151\x72\x73\x74\137\x6e\141\x6d\x65" => $this->input->post("\146\x69\162\163\164\137\156\141\x6d\x65", true), "\x6c\141\x73\164\137\x6e\141\x6d\145" => $this->input->post("\154\141\163\164\x5f\156\x61\x6d\x65", true), "\145\155\141\151\154" => $this->input->post("\x65\155\141\151\154", true)];
        goto qoGHy;
        wc5HH:
        $this->form_validation->set_rules("\x65\155\x61\151\x6c", "\x45\155\141\151\x6c", "\x72\x65\161\x75\151\x72\x65\x64\x7c\166\x61\154\151\x64\x5f\x65\x6d\x61\151\154");
        goto n4kpE;
        hENLC:
        $this->form_validation->set_rules("\165\x73\x65\x72\x6e\x61\155\145", "\125\163\x65\162\156\141\155\x65", "\x72\145\161\x75\151\x72\145\x64");
        goto w6lS1;
        qoGHy:
        $update = $this->master->update("\165\163\x65\x72\163", $input, "\x69\144", $id);
        goto HUlg3;
        csIqO:
        MLDD0:
        goto RBJxi;
        al_cE:
        $data["\163\x74\x61\164\x75\163"] = false;
        goto VcKxY;
        n4kpE:
        if ($this->form_validation->run() === FALSE) {
            goto Bh7Uq;
        }
        goto CmbmA;
        gbRRw:
    }
    public function edit_status()
    {
        goto MI0p2;
        iHsvf:
        $data["\163\x74\141\164\x75\163"] = false;
        goto I0Y2F;
        YTSwH:
        DjRpb:
        goto s4EXr;
        cfPDT:
        $data["\x73\164\x61\x74\x75\163"] = $update ? true : false;
        goto b9Vf6;
        j_3m3:
        $input = ["\141\143\164\151\166\145" => $this->input->post("\x73\164\141\164\165\x73", true)];
        goto e6ihT;
        jlGhD:
        $this->form_validation->set_rules("\163\164\x61\164\165\163", "\123\164\141\x74\165\163", "\162\x65\161\x75\151\x72\145\x64");
        goto wc0gU;
        s4EXr:
        $this->output_json($data);
        goto Wgs1y;
        wc0gU:
        if ($this->form_validation->run() === FALSE) {
            goto o2fHY;
        }
        goto u4Qbs;
        I0Y2F:
        $data["\x65\162\x72\x6f\162\163"] = ["\x73\164\141\x74\x75\x73" => form_error("\x73\x74\x61\x74\165\163")];
        goto YTSwH;
        u4Qbs:
        $id = $this->input->post("\x69\144", true);
        goto j_3m3;
        MI0p2:
        $this->is_admin();
        goto jlGhD;
        b9Vf6:
        goto DjRpb;
        goto vj5UF;
        e6ihT:
        $update = $this->master->update("\x75\x73\x65\x72\x73", $input, "\151\x64", $id);
        goto cfPDT;
        vj5UF:
        o2fHY:
        goto iHsvf;
        Wgs1y:
    }
    public function edit_level()
    {
        goto lQN3B;
        hNhBU:
        mJbPw:
        goto Uw2Lp;
        ICIt2:
        $data["\163\x74\x61\x74\x75\x73"] = false;
        goto MSv_1;
        MSv_1:
        $data["\145\x72\162\157\x72\163"] = ["\x6c\145\166\145\154" => form_error("\154\x65\166\x65\154")];
        goto hNhBU;
        VSNcb:
        $this->form_validation->set_rules("\154\145\166\x65\x6c", "\114\145\x76\x65\x6c", "\x72\x65\x71\x75\x69\x72\x65\x64");
        goto pzh3H;
        Uw2Lp:
        $this->output_json($data);
        goto byslv;
        DTLCB:
        HAmlE:
        goto ICIt2;
        Wezlt:
        $input = ["\147\x72\x6f\165\x70\137\x69\x64" => $this->input->post("\154\x65\166\145\154", true)];
        goto eJkrZ;
        AgqKy:
        goto mJbPw;
        goto DTLCB;
        xWGr2:
        $id = $this->input->post("\151\x64", true);
        goto Wezlt;
        QUTTh:
        $data["\x73\164\x61\164\165\163"] = $update ? true : false;
        goto AgqKy;
        eJkrZ:
        $update = $this->master->update("\165\163\145\x72\x73\x5f\x67\162\x6f\x75\x70\163", $input, "\165\x73\x65\162\137\x69\x64", $id);
        goto QUTTh;
        lQN3B:
        $this->is_admin();
        goto VSNcb;
        pzh3H:
        if ($this->form_validation->run() === FALSE) {
            goto HAmlE;
        }
        goto xWGr2;
        byslv:
    }
    public function change_password()
    {
        goto XZkCy;
        nTL1R:
        $data["\163\x74\141\x74\165\163"] = true;
        goto tTPH_;
        gpyTv:
        $this->output_json($data);
        goto KLZkm;
        UllIl:
        $identity = $this->session->userdata("\151\x64\145\x6e\x74\151\164\x79");
        goto zMRDK;
        qlqbs:
        if ($change) {
            goto zbNpP;
        }
        goto JUtC3;
        XZkCy:
        $this->form_validation->set_rules("\157\154\x64", $this->lang->line("\143\x68\141\156\147\x65\137\160\141\x73\x73\x77\157\162\x64\137\x76\x61\154\x69\144\141\164\151\157\156\x5f\157\x6c\x64\137\160\141\x73\163\167\157\162\x64\x5f\154\141\x62\x65\x6c"), "\x72\145\161\165\151\162\x65\x64");
        goto R404t;
        R404t:
        $this->form_validation->set_rules("\156\145\167", $this->lang->line("\143\150\141\156\147\145\x5f\160\141\163\163\x77\x6f\162\144\137\x76\x61\154\x69\144\141\164\x69\x6f\x6e\x5f\x6e\145\167\x5f\160\x61\x73\x73\x77\x6f\x72\x64\137\154\x61\142\x65\x6c"), "\x72\x65\x71\165\151\x72\145\144\x7c\x6d\x69\156\x5f\154\x65\156\147\x74\x68\133" . $this->config->item("\x6d\x69\x6e\x5f\x70\141\x73\x73\167\x6f\x72\x64\x5f\154\x65\x6e\147\164\x68", "\151\x6f\156\x5f\141\x75\x74\150") . "\x5d\174\155\x61\164\143\x68\145\163\133\x6e\145\167\137\143\x6f\156\146\151\x72\155\x5d");
        goto bxaVi;
        tTPH_:
        W5DHP:
        goto r2NS6;
        Wbp4Y:
        goto W5DHP;
        goto gTjV9;
        z0L5e:
        $data = ["\x73\x74\141\x74\x75\x73" => false, "\x65\x72\x72\157\x72\163" => ["\157\154\x64" => form_error("\x6f\x6c\x64"), "\156\x65\x77" => form_error("\156\145\x77"), "\156\x65\x77\137\143\157\156\146\151\x72\x6d" => form_error("\156\x65\x77\x5f\x63\x6f\156\146\151\162\155")]];
        goto aPjk4;
        r2NS6:
        goto EBvKm;
        goto Yn6Ik;
        aPjk4:
        EBvKm:
        goto gpyTv;
        Yn6Ik:
        TEU9p:
        goto z0L5e;
        gTjV9:
        zbNpP:
        goto nTL1R;
        zMRDK:
        $change = $this->ion_auth->change_password($identity, $this->input->post("\x6f\154\x64"), $this->input->post("\x6e\145\x77"));
        goto qlqbs;
        bxaVi:
        $this->form_validation->set_rules("\156\x65\x77\x5f\143\157\156\x66\151\x72\x6d", $this->lang->line("\x63\150\141\156\147\145\x5f\160\x61\x73\x73\167\157\162\144\x5f\x76\x61\154\x69\x64\x61\164\151\x6f\156\137\156\x65\x77\137\160\x61\163\163\167\x6f\x72\x64\x5f\x63\x6f\156\146\151\162\x6d\137\x6c\x61\142\x65\154"), "\162\145\x71\165\151\162\x65\144");
        goto rV80t;
        rV80t:
        if ($this->form_validation->run() === FALSE) {
            goto TEU9p;
        }
        goto UllIl;
        JUtC3:
        $data = ["\163\x74\141\164\x75\163" => false, "\x6d\163\147" => $this->ion_auth->errors()];
        goto Wbp4Y;
        KLZkm:
    }
    public function delete($id)
    {
        goto Qlr7j;
        MHCS6:
        $data["\163\164\x61\x74\x75\x73"] = $this->ion_auth->delete_user($id) ? true : false;
        goto YSB2L;
        YSB2L:
        $this->output_json($data);
        goto wpp7x;
        Qlr7j:
        $this->is_admin();
        goto MHCS6;
        wpp7x:
    }
    function uploadFile($id_user)
    {
        goto MbAUF;
        YfLoN:
        $data["\163\x69\x7a\145"] = $_FILES["\x66\x6f\x74\x6f"]["\163\151\x7a\x65"];
        goto Int_r;
        s1liN:
        $config["\157\166\145\x72\167\162\151\x74\145"] = true;
        goto NJAvK;
        MbAUF:
        if (isset($_FILES["\146\157\x74\157"]["\x6e\141\155\145"])) {
            goto TOkG3;
        }
        goto kLwaa;
        eVdKA:
        goto M0Xlm;
        goto i2Lut;
        ktkLj:
        $data["\164\171\160\145"] = $_FILES["\146\x6f\x74\157"]["\x74\x79\160\x65"];
        goto YfLoN;
        Int_r:
        M0Xlm:
        goto Z1yqC;
        t33U9:
        $config["\141\154\x6c\x6f\x77\145\144\x5f\164\x79\160\145\163"] = "\147\151\146\x7c\152\x70\147\174\x70\156\x67\x7c\x6a\x70\145\x67\x7c\112\120\x45\x47\174\x4a\120\x47\174\x50\x4e\107\174\107\111\x46";
        goto s1liN;
        yrTaf:
        $config["\165\x70\154\157\x61\x64\x5f\160\141\164\150"] = "\x2e\57\165\x70\x6c\157\x61\144\163\x2f\x70\162\157\146\x69\154\x65\163\x2f";
        goto t33U9;
        KLrpH:
        $data["\x66\151\x6c\145\156\x61\155\145"] = pathinfo($result["\146\151\154\x65\x5f\x6e\x61\x6d\x65"], PATHINFO_FILENAME);
        goto qvoiY;
        kLwaa:
        $data["\x73\x72\143"] = '';
        goto eVdKA;
        LTHGv:
        if (!$this->upload->do_upload("\146\157\164\x6f")) {
            goto I0GAd;
        }
        goto zLVot;
        Km_mf:
        $data["\x73\x72\143"] = base_url() . "\x75\160\x6c\157\141\x64\x73\57\160\x72\x6f\x66\x69\154\145\x73\57" . $result["\x66\151\x6c\145\137\156\x61\x6d\x65"];
        goto KLrpH;
        i2Lut:
        TOkG3:
        goto yrTaf;
        Z1yqC:
        $this->output_json($data);
        goto UsXFe;
        BdE8a:
        $this->upload->initialize($config);
        goto LTHGv;
        iFmUl:
        ZXbot:
        goto ktkLj;
        Yu7LF:
        $data["\163\164\141\x74\x75\163"] = false;
        goto BBvX6;
        BBvX6:
        $data["\x73\162\143"] = $this->upload->display_errors();
        goto iFmUl;
        zLVot:
        $result = $this->upload->data();
        goto Km_mf;
        NJAvK:
        $config["\x66\151\x6c\145\x5f\x6e\141\155\145"] = "\x66\x6f\x74\157\x5f" . $id_user;
        goto BdE8a;
        XeQbC:
        goto ZXbot;
        goto oeUnL;
        oeUnL:
        I0GAd:
        goto Yu7LF;
        qvoiY:
        $data["\163\x74\141\164\165\x73"] = true;
        goto XeQbC;
        UsXFe:
    }
    function deleteFile()
    {
        goto LjP24;
        z8bS8:
        $file_name = str_replace(base_url(), '', $src);
        goto YHtf_;
        LjP24:
        $src = $this->input->post("\163\162\x63");
        goto z8bS8;
        YHtf_:
        if (!unlink($file_name)) {
            goto sK0BO;
        }
        goto LG81z;
        paJaY:
        sK0BO:
        goto jTgx6;
        LG81z:
        echo "\x46\151\154\x65\40\x44\145\x6c\x65\x74\x65\x20\x53\x75\143\x63\x65\x73\x73\146\x75\x6c\x6c\171";
        goto paJaY;
        jTgx6:
    }
    function saveProfile()
    {
        goto YZpoV;
        mH7EC:
        $user = $this->ion_auth->user()->row();
        goto bXVbb;
        YZpoV:
        $nama = $this->input->post("\156\141\155\141\x5f\154\x65\156\147\153\x61\x70");
        goto Be15Y;
        bXVbb:
        $insert = ["\151\144\137\165\x73\145\x72" => $user->id, "\x6e\x61\x6d\x61\x5f\154\x65\x6e\x67\x6b\141\x70" => $nama, "\x6a\x61\142\x61\164\141\156" => $jabatan, "\146\x6f\164\x6f" => str_replace(base_url(), '', $foto)];
        goto cqIf5;
        chFs1:
        $this->output_json($res);
        goto mvPnu;
        Vd4KJ:
        $res["\163\164\141\164\x75\163"] = $update;
        goto chFs1;
        M0Q8X:
        $foto = $this->input->post("\x66\157\x74\157");
        goto mH7EC;
        cqIf5:
        $update = $this->db->replace("\165\163\145\x72\x73\137\x70\162\x6f\146\151\x6c\145", $insert);
        goto Vd4KJ;
        Be15Y:
        $jabatan = $this->input->post("\152\x61\142\x61\x74\141\156");
        goto M0Q8X;
        mvPnu:
    }
}
