<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\x42\101\x53\x45\120\x41\x54\110") or exit("\116\157\x20\144\x69\x72\145\x63\x74\40\x73\143\x72\x69\x70\164\40\141\143\143\x65\163\x73\x20\141\x6c\x6c\x6f\167\145\x64");
class Settings extends CI_Controller
{
    public function __construct()
    {
        goto me9yi;
        xZloa:
        goto rO3Oh;
        goto VfpGf;
        pQe8i:
        rO3Oh:
        goto Waykt;
        q3Zfb:
        LhCVZ:
        goto xZloa;
        LlSXM:
        $this->load->model("\104\141\163\150\x62\x6f\x61\x72\x64\137\155\157\144\x65\154", "\144\x61\163\150\x62\157\x61\162\x64");
        goto cjlU9;
        DEGcf:
        redirect("\141\x75\164\x68");
        goto pQe8i;
        Waykt:
        $this->load->library("\x75\160\x6c\x6f\141\x64");
        goto SCPGv;
        EX_UA:
        if (!$this->ion_auth->logged_in()) {
            goto vdIB5;
        }
        goto XYVWf;
        SCPGv:
        $this->load->model("\x53\x65\164\164\x69\x6e\147\163\x5f\x6d\157\x64\145\154", "\x73\145\164\x74\x69\156\x67\x73");
        goto LlSXM;
        XYVWf:
        if ($this->ion_auth->is_admin()) {
            goto LhCVZ;
        }
        goto mcE0_;
        cjlU9:
        $this->load->helper("\144\x69\x72\x65\143\x74\157\x72\x79");
        goto MyfgM;
        me9yi:
        parent::__construct();
        goto EX_UA;
        VfpGf:
        vdIB5:
        goto DEGcf;
        mcE0_:
        show_error("\110\x61\156\171\x61\40\x41\x64\x6d\151\156\x20\x79\x61\x6e\x67\x20\142\x6f\154\x65\x68\40\155\x65\x6e\147\141\153\163\145\x73\x20\150\141\x6c\141\155\141\156\40\x69\x6e\151", 403, "\101\153\163\145\163\x20\x64\151\154\x61\162\141\156\147");
        goto q3Zfb;
        MyfgM:
    }
    public function output_json($data, $encode = true)
    {
        goto XZfvB;
        b7seQ:
        $this->output->set_content_type("\x61\160\160\154\151\x63\141\x74\x69\157\156\57\x6a\163\x6f\156")->set_output($data);
        goto V0E2J;
        bv2n3:
        eJTkC:
        goto b7seQ;
        bcbwv:
        $data = json_encode($data);
        goto bv2n3;
        XZfvB:
        if (!$encode) {
            goto eJTkC;
        }
        goto bcbwv;
        V0E2J:
    }
    public function index()
    {
        goto x9gkk;
        abnvI:
        $data["\163\155\164"] = $this->dashboard->getSemester();
        goto L6CW4;
        nrj6i:
        $this->load->view("\x73\145\x74\x74\151\x6e\x67\x2f\x64\141\x74\x61");
        goto R1q12;
        L6CW4:
        $data["\163\155\x74\x5f\141\x63\164\x69\x76\x65"] = $this->dashboard->getSemesterActive();
        goto D_pRf;
        D_pRf:
        $this->load->view("\x5f\x74\145\155\x70\x6c\141\x74\145\163\x2f\144\x61\163\x68\142\157\141\x72\144\57\137\150\145\141\x64\145\x72", $data);
        goto nrj6i;
        tXqNT:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto mEEAt;
        x9gkk:
        $user = $this->ion_auth->user()->row();
        goto sePGT;
        R1q12:
        $this->load->view("\x5f\x74\145\155\160\x6c\x61\164\145\163\x2f\144\x61\163\x68\142\157\x61\162\144\x2f\x5f\x66\x6f\157\164\145\162");
        goto eT8zI;
        mEEAt:
        $data["\x74\160\x5f\141\x63\164\x69\166\145"] = $this->dashboard->getTahunActive();
        goto abnvI;
        sePGT:
        $data = ["\x75\163\x65\x72" => $user, "\x6a\x75\144\x75\x6c" => "\120\162\x6f\146\x69\154\x65\40\123\145\x6b\x6f\x6c\141\150", "\163\165\142\152\x75\x64\x75\x6c" => '', "\x70\x72\x6f\146\151\154\145" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\164\164\x69\x6e\147" => $this->dashboard->getSetting()];
        goto tXqNT;
        eT8zI:
    }
    public function dbManager()
    {
        goto ezg7T;
        BgLIh:
        $data["\163\x65\x74\164\151\156\x67"] = $this->settings->getSetting();
        goto u1MZs;
        IV9ks:
        $data["\x73\x6d\x74"] = $this->dashboard->getSemester();
        goto q_RXS;
        Csl7r:
        $this->load->view("\x5f\164\145\155\160\x6c\x61\x74\145\x73\x2f\144\x61\163\150\142\x6f\141\162\x64\57\137\150\145\x61\x64\x65\162", $data);
        goto QkUhN;
        QkUhN:
        $this->load->view("\x73\145\164\x74\151\x6e\147\x2f\x64\142");
        goto DBJYu;
        u1MZs:
        $data["\x6c\151\x73\x74"] = directory_map("\x2e\x2f\142\141\143\x6b\x75\160\x73\57");
        goto Csl7r;
        ezg7T:
        $data = ["\165\x73\x65\162" => $this->ion_auth->user()->row(), "\152\x75\x64\165\154" => "\x42\x61\143\x6b\165\160\x20\144\141\x6e\x20\x52\x65\163\x74\x6f\162\145", "\x73\165\x62\152\x75\x64\165\x6c" => "\102\x61\x63\x6b\x75\160\x20\x64\141\x6e\40\122\x65\x73\164\157\162\145"];
        goto eCg2h;
        IRsbp:
        $data["\x74\160\137\141\143\164\x69\166\145"] = $this->dashboard->getTahunActive();
        goto IV9ks;
        eCg2h:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto IRsbp;
        DBJYu:
        $this->load->view("\137\164\145\155\160\154\141\164\x65\x73\57\x64\x61\x73\x68\142\x6f\x61\x72\x64\x2f\x5f\146\157\x6f\164\145\x72");
        goto MKP2O;
        q_RXS:
        $data["\x73\155\164\137\141\143\x74\151\x76\x65"] = $this->dashboard->getSemesterActive();
        goto BgLIh;
        MKP2O:
    }
    function uploadFile($logo)
    {
        goto Yyovi;
        Yyovi:
        if (isset($_FILES["\x6c\157\x67\157"]["\156\141\x6d\145"])) {
            goto RvMzm;
        }
        goto L4K8v;
        ZgMfD:
        $this->upload->initialize($config);
        goto xlzNg;
        RtE6O:
        $config["\141\x6c\x6c\157\x77\x65\x64\137\x74\171\160\145\163"] = "\x67\151\146\x7c\x6a\160\147\174\x70\156\147\x7c\152\x70\x65\x67\174\112\x50\x45\107\x7c\112\x50\x47\174\x50\116\107\174\107\x49\106";
        goto sH4Q4;
        pASz8:
        V05In:
        goto IFeuG;
        alC0r:
        goto UfLPi;
        goto pASz8;
        sH4Q4:
        $config["\157\x76\145\x72\167\x72\x69\164\145"] = true;
        goto zvn5U;
        PvRaG:
        $data["\x73\x74\x61\164\165\163"] = true;
        goto alC0r;
        QAN5j:
        goto OGARN;
        goto hBX5P;
        L4K8v:
        $data["\163\162\x63"] = '';
        goto QAN5j;
        IFeuG:
        $data["\163\164\141\164\165\x73"] = false;
        goto p_DOg;
        gpJas:
        $data["\x66\151\x6c\x65\156\141\x6d\145"] = pathinfo($result["\146\x69\x6c\145\137\156\141\x6d\x65"], PATHINFO_FILENAME);
        goto PvRaG;
        ArGw1:
        $data["\x73\x69\172\x65"] = $_FILES["\154\x6f\147\157"]["\163\x69\172\x65"];
        goto APw1U;
        xlzNg:
        if (!$this->upload->do_upload("\154\x6f\147\x6f")) {
            goto V05In;
        }
        goto LiOkg;
        APw1U:
        OGARN:
        goto mHv9z;
        mHv9z:
        $this->output_json($data);
        goto viGAW;
        LiOkg:
        $result = $this->upload->data();
        goto TuEYk;
        iPI0w:
        $data["\164\171\x70\145"] = $_FILES["\x6c\157\147\157"]["\164\171\160\x65"];
        goto ArGw1;
        zvn5U:
        $config["\146\x69\x6c\x65\137\x6e\141\x6d\145"] = $logo;
        goto ZgMfD;
        wryry:
        UfLPi:
        goto iPI0w;
        MUWG1:
        $config["\x75\160\154\x6f\141\x64\137\160\141\164\x68"] = "\56\x2f\x75\160\x6c\x6f\141\144\x73\57\163\x65\164\164\151\156\147\163\57";
        goto RtE6O;
        hBX5P:
        RvMzm:
        goto MUWG1;
        p_DOg:
        $data["\163\x72\143"] = $this->upload->display_errors();
        goto wryry;
        TuEYk:
        $data["\x73\162\x63"] = base_url() . "\x75\x70\154\x6f\141\144\x73\57\x73\x65\x74\164\x69\x6e\x67\163\57" . $result["\x66\x69\x6c\x65\x5f\156\x61\x6d\x65"];
        goto gpJas;
        viGAW:
    }
    function deleteFile()
    {
        goto fQ54d;
        pEw2O:
        $file_name = str_replace(base_url(), '', $src);
        goto N4PxR;
        huZgV:
        XHO6p:
        goto q0Ent;
        N4PxR:
        if (!unlink($file_name)) {
            goto XHO6p;
        }
        goto Z9FFY;
        Z9FFY:
        echo "\106\151\x6c\145\x20\x44\x65\154\145\x74\x65\40\123\x75\143\x63\x65\x73\x73\x66\x75\x6c\154\x79";
        goto huZgV;
        fQ54d:
        $src = $this->input->post("\x73\x72\x63");
        goto pEw2O;
        q0Ent:
    }
    public function saveSetting()
    {
        goto p8zlq;
        EJmqI:
        $npsn = $this->input->post("\156\x70\163\156", true);
        goto opHdU;
        tlDxM:
        $satuan_pendidikan = $this->input->post("\x73\141\164\x75\141\x6e\137\x70\x65\x6e\144\151\x64\151\153\141\x6e", true);
        goto a2HVO;
        xN2X6:
        $tlp = $this->input->post("\x74\x6c\160", true);
        goto a6GEG;
        CJbhN:
        $kota = $this->input->post("\x6b\x6f\x74\x61", true);
        goto r8vdl;
        zgkx6:
        $update = $this->db->update("\163\x65\164\164\x69\x6e\x67", $insert);
        goto JFg7o;
        jERy7:
        $tanda_tangan = $this->input->post("\x74\x61\156\x64\141\x5f\164\x61\x6e\x67\141\156", true);
        goto gKT0K;
        FiMZB:
        $logo_kanan = $this->input->post("\154\x6f\147\157\x5f\x6b\x61\x6e\141\x6e", true);
        goto PFft5;
        zmD3d:
        $prov = $this->input->post("\160\162\x6f\x76\151\x6e\163\151", true);
        goto TiDu4;
        a6GEG:
        $web = $this->input->post("\167\145\142", true);
        goto gK1QH;
        PFft5:
        $logo_kiri = $this->input->post("\x6c\x6f\147\x6f\x5f\153\x69\x72\x69", true);
        goto Ncb3V;
        gKT0K:
        $nama_aplikasi = $this->input->post("\156\141\155\x61\x5f\141\160\x6c\151\x6b\141\163\x69", true);
        goto FiMZB;
        Ncb3V:
        $insert = ["\x73\145\x6b\x6f\154\141\150" => $sekolah, "\156\x73\x73" => $nss, "\x6e\x70\163\156" => $npsn, "\x6a\145\x6e\152\141\156\147" => $jenjang, "\163\141\164\165\141\156\x5f\x70\145\156\144\x69\144\151\x6b\141\156" => $satuan_pendidikan, "\141\x6c\x61\x6d\141\164" => $alamat, "\144\x65\163\x61" => $desa, "\153\x6f\x74\x61" => $kota, "\x6b\x65\x63\x61\x6d\141\x74\141\156" => $kec, "\153\x6f\144\145\137\160\157\163" => $kodepos, "\x70\x72\x6f\x76\151\156\x73\x69" => $prov, "\x77\145\142" => $web, "\146\141\x78" => $fax, "\145\x6d\141\x69\154" => $email, "\x74\145\154\160" => $tlp, "\x6b\x65\160\x73\145\153" => $kepsek, "\x6e\151\x70" => $nip, "\x74\x61\156\x64\x61\x5f\164\x61\x6e\147\x61\156" => str_replace(base_url(), '', $tanda_tangan), "\x6e\x61\155\141\x5f\x61\160\154\x69\153\x61\163\151" => $nama_aplikasi, "\x6c\157\x67\x6f\137\153\x61\156\x61\x6e" => str_replace(base_url(), '', $logo_kanan), "\x6c\x6f\x67\157\x5f\x6b\151\162\x69" => str_replace(base_url(), '', $logo_kiri)];
        goto EYu1d;
        Ljwqw:
        $kepsek = $this->input->post("\x6b\x65\160\163\x65\153", true);
        goto ZJWLX;
        aaiHt:
        $kec = $this->input->post("\153\145\143", true);
        goto zmD3d;
        TiDu4:
        $kodepos = $this->input->post("\x6b\157\x64\145\x5f\160\157\163", true);
        goto xN2X6;
        ZJWLX:
        $nip = $this->input->post("\156\151\x70", true);
        goto jERy7;
        xac2s:
        $email = $this->input->post("\145\x6d\141\151\x6c", true);
        goto Ljwqw;
        JFg7o:
        $this->output_json($update);
        goto ILyKu;
        opHdU:
        $jenjang = $this->input->post("\152\x65\156\152\x61\156\x67", true);
        goto tlDxM;
        r8vdl:
        $desa = $this->input->post("\x64\x65\163\141", true);
        goto aaiHt;
        YNC5R:
        $nss = $this->input->post("\x6e\163\163", true);
        goto EJmqI;
        p8zlq:
        $sekolah = $this->input->post("\156\x61\x6d\x61\x5f\163\145\x6b\157\x6c\141\x68", true);
        goto YNC5R;
        gK1QH:
        $fax = $this->input->post("\146\x61\170", true);
        goto xac2s;
        a2HVO:
        $alamat = $this->input->post("\141\154\141\155\141\164", true);
        goto CJbhN;
        EYu1d:
        $this->db->where("\x69\x64\x5f\163\x65\164\164\x69\156\147", 1);
        goto zgkx6;
        ILyKu:
    }
}
