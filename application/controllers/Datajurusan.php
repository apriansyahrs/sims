<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\102\101\123\105\120\101\x54\110") or exit("\x4e\x6f\x20\x64\151\162\145\x63\x74\x20\x73\143\162\x69\160\164\x20\141\143\143\145\x73\x73\40\x61\x6c\x6c\157\x77\x65\x64");

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\Writer\Csv;
use PhpOffice\PhpWord\PhpWord;

class Datajurusan extends CI_Controller
{
    public function __construct()
    {
        goto z5Ct3;
        z5Ct3:
        parent::__construct();
        goto kIJhM;
        lfoEP:
        FNQoO:
        goto sldQ9;
        KN17h:
        $this->form_validation->set_error_delimiters('', '');
        goto p3mvR;
        l6rQa:
        $this->load->model("\x44\141\x73\150\x62\157\141\x72\x64\137\155\x6f\x64\x65\x6c", "\144\141\x73\150\x62\x6f\x61\x72\x64");
        goto JpGez;
        sldQ9:
        redirect("\141\165\164\150");
        goto TYxfZ;
        TaGl1:
        show_error("\110\141\x6e\x79\x61\x20\101\x64\x6d\x69\x6e\151\x73\x74\x72\x61\164\x6f\x72\x20\x79\141\x6e\147\x20\144\151\142\x65\x72\151\40\150\x61\153\40\x75\x6e\164\165\x6b\40\155\x65\156\147\x61\153\163\x65\163\40\x68\141\154\141\155\141\156\x20\151\156\x69\54\x20\74\x61\x20\150\162\145\x66\75\42" . base_url("\144\x61\x73\150\x62\157\x61\x72\144") . "\x22\76\113\x65\x6d\x62\x61\x6c\x69\x20\153\x65\x20\155\x65\x6e\x75\x20\141\x77\141\x6c\x3c\57\141\x3e", 403, "\x41\153\x73\x65\x73\x20\x54\x65\x72\154\141\x72\x61\156\x67");
        goto dqUZu;
        kIJhM:
        if (!$this->ion_auth->logged_in()) {
            goto FNQoO;
        }
        goto BLzLQ;
        mfOi9:
        $this->load->model("\115\141\x73\x74\x65\x72\137\155\157\144\145\x6c", "\155\141\163\164\x65\x72");
        goto l6rQa;
        JpGez:
        $this->load->model("\104\162\x6f\x70\x64\157\x77\x6e\137\x6d\x6f\144\145\x6c", "\x64\162\157\160\x64\157\x77\x6e");
        goto KN17h;
        BLzLQ:
        if ($this->ion_auth->is_admin()) {
            goto gvA30;
        }
        goto TaGl1;
        dqUZu:
        gvA30:
        goto kTt61;
        RWUif:
        $this->load->library(["\144\x61\x74\x61\x74\x61\142\x6c\145\x73", "\x66\x6f\x72\x6d\137\x76\141\x6c\x69\144\141\x74\x69\157\156"]);
        goto mfOi9;
        kTt61:
        goto a1QGy;
        goto lfoEP;
        TYxfZ:
        a1QGy:
        goto RWUif;
        p3mvR:
    }
    public function output_json($data, $encode = true)
    {
        goto k4pi4;
        NGHUM:
        JXkjd:
        goto GXz6Q;
        bZFdk:
        $data = json_encode($data);
        goto NGHUM;
        k4pi4:
        if (!$encode) {
            goto JXkjd;
        }
        goto bZFdk;
        GXz6Q:
        $this->output->set_content_type("\141\160\160\154\x69\143\x61\x74\151\x6f\x6e\57\152\x73\x6f\x6e")->set_output($data);
        goto rrvus;
        rrvus:
    }
    public function index()
    {
        goto oeSak;
        g2vY5:
        $data["\163\155\x74"] = $this->dashboard->getSemester();
        goto qNmuc;
        j5PkA:
        foreach ($jurusans as $jurusan) {
            $jurusan_mapels[$jurusan->id_jurusan] = $this->master->getDataJurusanMapel(explode("\x2c", $jurusan->mapel_peminatan));
            fEa9Z:
        }
        goto H3xa8;
        H3xa8:
        HBC10:
        goto ya8jP;
        Phr_b:
        $this->load->view("\155\141\163\x74\x65\162\57\152\x75\x72\x75\x73\x61\x6e\57\144\141\164\141");
        goto vToB1;
        wHLp0:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto RoiTS;
        ya8jP:
        $data["\x6a\x75\162\x75\x73\141\156\x73"] = $jurusans;
        goto NC0Qm;
        vToB1:
        $this->load->view("\137\164\x65\155\x70\x6c\x61\x74\x65\x73\57\144\x61\163\x68\x62\157\x61\162\144\x2f\137\146\157\x6f\164\x65\x72");
        goto cBRz3;
        oeSak:
        $user = $this->ion_auth->user()->row();
        goto TRFT8;
        NC0Qm:
        $data["\152\x75\x72\165\163\x61\156\x5f\155\x61\160\145\154\163"] = $jurusan_mapels;
        goto gv8WA;
        gv8WA:
        $this->load->view("\x5f\x74\145\x6d\x70\x6c\141\x74\x65\163\x2f\x64\x61\x73\150\x62\x6f\x61\x72\144\x2f\137\150\x65\x61\x64\x65\x72", $data);
        goto Phr_b;
        RoiTS:
        $data["\164\x70\x5f\x61\143\x74\151\166\x65"] = $this->dashboard->getTahunActive();
        goto g2vY5;
        TRFT8:
        $data = ["\165\x73\x65\162" => $user, "\152\165\x64\x75\x6c" => "\x4a\x75\162\165\163\141\x6e", "\x73\165\x62\x6a\x75\144\165\x6c" => "\x44\x61\x66\164\141\x72\40\112\x75\162\165\x73\141\156", "\x70\x72\x6f\x66\151\154\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\x65\164\x74\151\156\147" => $this->dashboard->getSetting()];
        goto wHLp0;
        OEQlA:
        $data["\155\141\160\x65\154\x5f\x70\x65\x6d\x69\x6e\x61\x74\x61\x6e"] = $this->dropdown->getAllMapelPeminatan();
        goto Ffj3i;
        Ffj3i:
        $jurusans = $this->master->getDataJurusan();
        goto tM_Jj;
        tM_Jj:
        $jurusan_mapels = [];
        goto j5PkA;
        qNmuc:
        $data["\163\x6d\x74\x5f\x61\x63\x74\151\x76\145"] = $this->dashboard->getSemesterActive();
        goto OEQlA;
        cBRz3:
    }
    public function add()
    {
        goto ZgoqA;
        dKZu0:
        $data["\163\164\x61\x74\165\x73"] = $insert;
        goto OhQt6;
        II2MO:
        $row_mapels = count($this->input->post("\x6d\x61\x70\145\154", true));
        goto WZnGr;
        jGZzN:
        goto Kk9kL;
        goto XMLgk;
        aDf0b:
        $i++;
        goto jGZzN;
        ZgoqA:
        $mapels = [];
        goto l5sT3;
        XMLgk:
        IGWaJ:
        goto dtXeW;
        DevEL:
        $this->master->create("\x6d\141\x73\164\145\162\x5f\152\165\x72\165\x73\141\156", $insert, false);
        goto dKZu0;
        o0M7Y:
        array_push($mapels, $this->input->post("\155\x61\160\x65\154\133" . $i . "\x5d", true));
        goto amWO4;
        dtXeW:
        LdNVR:
        goto G0R2K;
        OhQt6:
        $this->output_json($data);
        goto YdSSg;
        G0R2K:
        $insert = ["\x6e\141\x6d\x61\137\x6a\x75\162\165\163\141\x6e" => $this->input->post("\156\141\155\141\x5f\152\x75\x72\165\163\141\156", true), "\153\157\144\x65\137\x6a\x75\162\165\163\x61\x6e" => $this->input->post("\x6b\157\x64\145\x5f\x6a\x75\162\165\163\141\x6e", true), "\155\x61\x70\x65\154\x5f\160\x65\155\x69\x6e\141\164\x61\x6e" => implode("\54", $mapels)];
        goto DevEL;
        WZnGr:
        $i = 0;
        goto ULhdl;
        l5sT3:
        $check_mapel = $this->input->post("\155\x61\160\x65\x6c", true);
        goto YZ_Wp;
        amWO4:
        SVNzs:
        goto aDf0b;
        TNDIj:
        if (!($i <= $row_mapels)) {
            goto IGWaJ;
        }
        goto o0M7Y;
        YZ_Wp:
        if (!$check_mapel) {
            goto LdNVR;
        }
        goto II2MO;
        ULhdl:
        Kk9kL:
        goto TNDIj;
        YdSSg:
    }
    public function data()
    {
        $this->output_json($this->master->getDataTableJurusan(), false);
    }
    public function save()
    {
        goto IdR4d;
        Ftbim:
        crAWp:
        goto wxzdZ;
        rSlUO:
        $this->output_json($data);
        goto Xe7NK;
        wxzdZ:
        if (!($i <= $rows)) {
            goto I4w5D;
        }
        goto y6Puk;
        gDcIh:
        if ($status) {
            goto RX8lR;
        }
        goto SSDit;
        SSDit:
        if (!isset($error)) {
            goto MhBIj;
        }
        goto tKwHh;
        tKwHh:
        $data["\x65\162\x72\157\162\163"] = $error;
        goto jz7Vx;
        L0WTX:
        if (!($mode == "\x65\144\151\x74")) {
            goto tphNg;
        }
        goto G7poJ;
        MmU6O:
        $data["\x69\x6e\x73\x65\x72\164"] = $insert;
        goto z2riS;
        OjOd3:
        $i++;
        goto vm0Vp;
        UFErP:
        Jijo_:
        goto BXe6T;
        z84Sc:
        zlFg_:
        goto VDgTV;
        kwj3j:
        if ($this->form_validation->run() === FALSE) {
            goto iDG6v;
        }
        goto mux8n;
        h1BLq:
        goto uJZeQ;
        goto WuWo_;
        jz7Vx:
        MhBIj:
        goto DjfWe;
        oi0b_:
        uJZeQ:
        goto k6AZt;
        DjfWe:
        goto mXqKV;
        goto ED6f4;
        y6Puk:
        $nama_jurusan = "\156\141\155\141\137\x6a\165\162\165\x73\141\156\x5b" . $i . "\135";
        goto u4yoS;
        T1O6c:
        iDG6v:
        goto uGwXm;
        mux8n:
        if ($mode == "\141\x64\x64") {
            goto LD_0F;
        }
        goto mWxgj;
        ED6f4:
        RX8lR:
        goto gdCsj;
        uGwXm:
        $error[] = [$nama_jurusan => form_error($nama_jurusan)];
        goto px0aH;
        hcQJB:
        $this->form_validation->set_message("\x72\145\161\x75\x69\x72\x65\x64", "\x7b\x66\151\145\154\144\x7d\40\127\x61\x6a\x69\x62\x20\x64\151\151\x73\x69");
        goto kwj3j;
        vm0Vp:
        goto crAWp;
        goto zXAzQ;
        zvsDm:
        $mode = $this->input->post("\x6d\157\144\x65", true);
        goto OSDCA;
        r66Ly:
        mXqKV:
        goto F5yZ0;
        zXAzQ:
        I4w5D:
        goto gDcIh;
        F5yZ0:
        $data["\x73\x74\x61\x74\165\163"] = $status;
        goto rSlUO;
        z2riS:
        IruYJ:
        goto r66Ly;
        px0aH:
        $status = FALSE;
        goto z84Sc;
        k6AZt:
        $status = TRUE;
        goto kwm6Q;
        X4zPa:
        $insert[] = ["\x6e\141\155\x61\x5f\152\165\x72\x75\163\141\156" => $this->input->post($nama_jurusan, true)];
        goto oi0b_;
        esXOX:
        tphNg:
        goto jDFSh;
        ttCWr:
        fjJ8U:
        goto h1BLq;
        BXe6T:
        $this->master->create("\x6d\x61\x73\164\x65\x72\137\x6a\x75\162\165\x73\141\x6e", $insert, true);
        goto MmU6O;
        kwm6Q:
        goto zlFg_;
        goto T1O6c;
        IdR4d:
        $rows = count($this->input->post("\156\x61\x6d\141\137\x6a\x75\162\x75\163\141\156", true));
        goto zvsDm;
        OSDCA:
        $i = 1;
        goto Ftbim;
        AfJlB:
        $update[] = array("\x69\144\137\152\x75\x72\165\x73\141\x6e" => $this->input->post("\x69\144\137\152\x75\162\165\163\141\x6e\133" . $i . "\135", true), "\156\x61\x6d\x61\x5f\152\x75\x72\165\163\141\156" => $this->input->post($nama_jurusan, true));
        goto ttCWr;
        gdCsj:
        if ($mode == "\x61\144\x64") {
            goto Jijo_;
        }
        goto L0WTX;
        VDgTV:
        Xx4KR:
        goto OjOd3;
        WuWo_:
        LD_0F:
        goto X4zPa;
        jDFSh:
        goto IruYJ;
        goto UFErP;
        G7poJ:
        $this->master->update("\x6d\x61\x73\164\145\162\137\x6a\165\x72\x75\163\x61\156", $update, "\x69\144\x5f\x6a\x75\x72\x75\163\141\x6e", null, true);
        goto AKA8z;
        mWxgj:
        if (!($mode == "\x65\144\151\x74")) {
            goto fjJ8U;
        }
        goto AfJlB;
        AKA8z:
        $data["\165\x70\x64\x61\164\x65"] = $update;
        goto esXOX;
        u4yoS:
        $this->form_validation->set_rules($nama_jurusan, "\x4a\165\x72\x75\x73\141\x6e", "\x72\145\x71\165\x69\x72\x65\x64");
        goto hcQJB;
        Xe7NK:
    }
    public function update()
    {
        $data = $this->master->updateJurusan();
        $this->output->set_content_type("\x61\x70\160\x6c\x69\x63\141\x74\x69\x6f\x6e\x2f\x6a\163\x6f\156")->set_output($data);
    }
    public function delete()
    {
        goto tujOb;
        WGbBd:
        q8VSy:
        goto GDVfq;
        soTvs:
        if (count($messages) > 0) {
            goto jisKi;
        }
        goto VkPBj;
        yLDW1:
        $tabless = $this->db->list_tables();
        goto vFBJ4;
        Uip0o:
        E8lNH:
        goto RSNhY;
        V5CnT:
        HeZNf:
        goto YqNj7;
        ggNT0:
        Xn_kA:
        goto FOTYR;
        DqXxw:
        foreach ($tables as $table) {
            goto j5cSQ;
            G59dq:
            $this->db->where_in("\x6a\165\x72\165\x73\141\156\137\151\144", $chk);
            goto gshOb;
            j5cSQ:
            if (!($table != "\x6d\x61\x73\164\145\162\x5f\152\165\x72\x75\163\141\x6e")) {
                goto x9Zuv;
            }
            goto Yrz_d;
            jVoD1:
            array_push($messages, $table);
            goto hQlnb;
            CEjTo:
            edkGG:
            goto AeVNF;
            Yrz_d:
            if ($table == "\155\x61\163\164\145\162\137\153\145\x6c\141\x73") {
                goto NZMXI;
            }
            goto xDMPl;
            xDMPl:
            $this->db->where_in("\x69\144\137\x6a\165\162\165\163\x61\156", $chk);
            goto VIZh4;
            VIZh4:
            $num = $this->db->count_all_results($table);
            goto zH1E0;
            Zm0qy:
            NZMXI:
            goto G59dq;
            hQlnb:
            FJSEm:
            goto Q4XOi;
            gshOb:
            $num = $this->db->count_all_results($table);
            goto CEjTo;
            pUYCZ:
            q55T3:
            goto yodnY;
            AeVNF:
            if (!($num > 0)) {
                goto FJSEm;
            }
            goto jVoD1;
            zH1E0:
            goto edkGG;
            goto Zm0qy;
            Q4XOi:
            x9Zuv:
            goto pUYCZ;
            yodnY:
        }
        goto sLgqc;
        vX27Q:
        OroFi:
        goto DqXxw;
        VkPBj:
        if (!$this->master->delete("\x6d\x61\163\x74\x65\x72\x5f\x6a\165\x72\165\163\x61\156", $chk, "\151\x64\137\x6a\165\162\x75\x73\141\156")) {
            goto E8lNH;
        }
        goto xcGVU;
        RSNhY:
        goto HeZNf;
        goto O6LCV;
        YqNj7:
        goto q8VSy;
        goto ggNT0;
        zZCoB:
        $messages = [];
        goto dUjfJ;
        dUjfJ:
        $tables = [];
        goto yLDW1;
        YxXLl:
        if (!$chk) {
            goto Xn_kA;
        }
        goto zZCoB;
        O6LCV:
        jisKi:
        goto Z0wEw;
        vFBJ4:
        foreach ($tabless as $table) {
            goto E6rbq;
            E6rbq:
            $fields = $this->db->field_data($table);
            goto dYwkg;
            t5dsH:
            NSMQ4:
            goto Ks3bJ;
            Ks3bJ:
            OCgw3:
            goto ZB9hp;
            dYwkg:
            foreach ($fields as $field) {
                goto M98ZE;
                kKPdp:
                array_push($tables, $table);
                goto RJXzW;
                M98ZE:
                if (!($field->name == "\x69\x64\137\152\x75\x72\x75\163\x61\x6e" || $field->name == "\x6a\165\162\165\x73\141\x6e\137\151\144")) {
                    goto KVuBX;
                }
                goto kKPdp;
                Q0bzq:
                Y_kM9:
                goto nP5uM;
                RJXzW:
                KVuBX:
                goto Q0bzq;
                nP5uM:
            }
            goto t5dsH;
            ZB9hp:
        }
        goto vX27Q;
        tujOb:
        $chk = $this->input->post("\143\150\145\x63\153\x65\x64", true);
        goto YxXLl;
        FOTYR:
        $this->output_json(["\163\164\141\164\x75\163" => false, "\164\x6f\164\141\x6c" => "\x54\x69\x64\141\153\x20\141\144\141\40\x64\x61\164\x61\40\x79\141\156\147\40\144\x69\160\151\154\x69\150\41"]);
        goto WGbBd;
        sLgqc:
        G0Wwe:
        goto soTvs;
        xcGVU:
        $this->output_json(["\x73\164\141\x74\165\163" => true, "\164\x6f\164\141\x6c" => count($chk)]);
        goto Uip0o;
        Z0wEw:
        $this->output_json(["\x73\164\141\x74\165\163" => false, "\x74\157\164\x61\x6c" => "\104\141\164\x61\40\x4a\165\x72\165\x73\x61\156\x20\x64\x69\x67\x75\156\x61\x6b\x61\x6e\40\x64\151\40" . count($messages) . "\40\x74\x61\142\x65\154\72\x3c\142\x72\x3e" . implode("\x3c\x62\x72\76", $messages)]);
        goto V5CnT;
        GDVfq:
    }
    public function load_jurusan()
    {
        $data = $this->master->getJurusan();
        $this->output_json($data);
    }
    public function import($import_data = null)
    {
        goto NUkux;
        NUkux:
        $user = $this->ion_auth->user()->row();
        goto mHZDF;
        wDbHn:
        $data["\151\155\x70\157\x72\x74"] = $import_data;
        goto q3GKK;
        ZJdn2:
        $data["\164\160\137\x61\143\164\151\x76\145"] = $this->dashboard->getTahunActive();
        goto DtR4F;
        C3nHq:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto ZJdn2;
        cpefF:
        $data["\163\x6d\164\137\x61\x63\x74\151\x76\145"] = $this->dashboard->getSemesterActive();
        goto NcSsC;
        HLrm3:
        $this->load->view("\155\x61\163\x74\x65\x72\x2f\x6a\165\162\x75\x73\x61\156\x2f\x69\155\160\157\162\x74");
        goto CMrcC;
        mHZDF:
        $data = ["\x75\163\x65\x72" => $user, "\x6a\165\x64\165\154" => "\x49\x6d\x70\157\162\x74\x20\112\165\162\165\x73\141\x6e", "\163\165\x62\152\x75\144\165\x6c" => "\x49\155\160\157\162\x74\x20\x4a\x75\162\165\x73\x61\x6e", "\x70\162\x6f\x66\x69\154\145" => $this->dashboard->getProfileAdmin($user->id), "\163\145\164\x74\151\x6e\x67" => $this->dashboard->getSetting()];
        goto OEMEn;
        OEMEn:
        if (!($import_data != null)) {
            goto EGAdj;
        }
        goto wDbHn;
        DtR4F:
        $data["\163\155\164"] = $this->dashboard->getSemester();
        goto cpefF;
        q3GKK:
        EGAdj:
        goto C3nHq;
        CMrcC:
        $this->load->view("\x5f\x74\x65\155\x70\x6c\141\164\x65\x73\x2f\x64\x61\163\150\142\x6f\x61\162\x64\57\137\146\157\x6f\164\x65\x72");
        goto fps43;
        NcSsC:
        $this->load->view("\x5f\x74\x65\x6d\160\154\x61\164\145\x73\x2f\144\x61\x73\x68\142\x6f\x61\162\144\x2f\x5f\150\x65\141\x64\145\162", $data);
        goto HLrm3;
        fps43:
    }
    public function preview()
    {
        goto U0lqV;
        sJYfs:
        $spreadsheet = $reader->load($file);
        goto GexhI;
        r9o2O:
        $i++;
        goto tmMtw;
        dUJ0z:
        $config["\141\154\154\157\167\x65\x64\137\164\171\x70\145\x73"] = "\170\154\163\174\x78\154\x73\x78\x7c\x63\163\166";
        goto NDOKO;
        gf8OR:
        die;
        goto mUWa1;
        tmMtw:
        goto M_7fr;
        goto JlNnW;
        JlNnW:
        ryhNa:
        goto trB_q;
        wpnO3:
        if (!$this->upload->do_upload("\x75\x70\x6c\x6f\141\144\137\x66\151\154\145")) {
            goto igowM;
        }
        goto LROf4;
        jUykU:
        echo $error;
        goto gf8OR;
        NxNJs:
        xVdhB:
        goto r9o2O;
        mUWa1:
        WLdRB:
        goto hlVuE;
        trB_q:
        unlink($file);
        goto dt9lo;
        xUBOf:
        $error = $this->upload->display_errors();
        goto jUykU;
        dt9lo:
        echo json_encode($data);
        goto au3Oc;
        wnafA:
        $ext = $this->upload->data("\x66\151\x6c\x65\137\145\x78\164");
        goto u9O1C;
        uJKHf:
        DPrJC:
        goto sJYfs;
        GexhI:
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
        goto ou19L;
        LROf4:
        $file = $this->upload->data("\146\x75\154\x6c\x5f\x70\x61\x74\x68");
        goto wnafA;
        u9O1C:
        switch ($ext) {
            case "\x2e\170\154\x73\x78":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                goto DPrJC;
            case "\x2e\x78\x6c\x73":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                goto DPrJC;
            case "\x2e\143\163\166":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                goto DPrJC;
            default:
                echo "\x75\x6e\153\x6e\157\x77\x6e\40\x66\151\154\x65\x20\145\x78\164";
                die;
        }
        goto DH5Vi;
        dn5vb:
        igowM:
        goto xUBOf;
        ou19L:
        $data = [];
        goto Gjv60;
        au3Oc:
        goto WLdRB;
        goto dn5vb;
        obZlx:
        $this->load->library("\x75\160\x6c\x6f\x61\x64", $config);
        goto wpnO3;
        DH5Vi:
        SFoH0:
        goto uJKHf;
        a0goA:
        ggbnJ:
        goto NxNJs;
        Gjv60:
        $i = 1;
        goto xlKPi;
        NGr8x:
        $data[] = ["\x6e\141\155\x61" => $sheetData[$i][1], "\153\x6f\144\x65" => $sheetData[$i][2]];
        goto a0goA;
        U0lqV:
        $config["\165\160\x6c\x6f\x61\144\x5f\160\141\x74\150"] = "\56\57\165\x70\154\x6f\x61\144\163\x2f\x69\x6d\160\157\162\x74\x2f";
        goto dUJ0z;
        KXM4j:
        if (!($sheetData[$i][0] != null)) {
            goto ggbnJ;
        }
        goto NGr8x;
        Hcz1j:
        $config["\x65\156\x63\162\171\160\x74\x5f\156\x61\155\x65"] = true;
        goto obZlx;
        NDOKO:
        $config["\x6d\141\170\x5f\x73\151\172\x65"] = 2048;
        goto Hcz1j;
        AJ0Xk:
        if (!($i < count($sheetData))) {
            goto ryhNa;
        }
        goto KXM4j;
        xlKPi:
        M_7fr:
        goto AJ0Xk;
        hlVuE:
    }
    public function previewWord()
    {
        goto jtKfk;
        KctZg:
        $phpWord = \PhpOffice\PhpWord\IOFactory::load($file);
        goto vIHMB;
        jtKfk:
        $config["\x75\x70\x6c\x6f\141\144\137\x70\141\164\x68"] = "\x2e\57\x75\160\154\157\141\144\x73\57\151\155\x70\157\162\164\x2f";
        goto AaIqH;
        sx5_s:
        qrxnr:
        goto MdBX1;
        FCUs5:
        $cols = $rows[$i]->getElementsByTagName("\164\144");
        goto fvN4Y;
        vIHMB:
        $htmlWriter = new \PhpOffice\PhpWord\Writer\HTML($phpWord);
        goto Kgvrr;
        wRUze:
        $data = [];
        goto jAmXp;
        yrGZI:
        if (!($i < $rows->count())) {
            goto zJ9Jp;
        }
        goto FCUs5;
        SnsWG:
        $dom = new DOMDocument();
        goto h2bxf;
        M0aHI:
        $this->load->library("\165\160\154\x6f\141\144", $config);
        goto oRyLg;
        rmWCt:
        $error = $this->upload->display_errors();
        goto hmIJk;
        hmIJk:
        echo $error;
        goto qHXkt;
        GZkTL:
        $i++;
        goto GkfL6;
        ZKX7N:
        goto qrxnr;
        goto kd0Xw;
        YqdP3:
        zJ9Jp:
        goto mt2GV;
        qHXkt:
        die;
        goto sx5_s;
        cqMrG:
        $config["\x6d\141\170\x5f\x73\x69\x7a\145"] = 2048;
        goto r4ETZ;
        kd0Xw:
        xTxGY:
        goto rmWCt;
        jAmXp:
        $dom->preserveWhiteSpace = false;
        goto IY107;
        jcw2S:
        $file = $this->upload->data("\x66\x75\154\154\137\160\x61\x74\150");
        goto KctZg;
        ZKeve:
        $text = file_get_contents("\x2e\57\165\160\x6c\157\x61\x64\x73\x2f\x74\x65\155\160\x2f\144\157\143\56\150\164\x6d\154");
        goto SnsWG;
        r4ETZ:
        $config["\145\x6e\143\x72\171\160\164\137\x6e\141\x6d\x65"] = true;
        goto M0aHI;
        Kgvrr:
        try {
            $htmlWriter->save("\x2e\x2f\165\x70\154\x6f\x61\x64\x73\x2f\x74\x65\155\160\x2f\x64\x6f\143\56\x68\164\x6d\154");
        } catch (\PhpOffice\PhpWord\Exception\Exception $e) {
        }
        goto IJkW6;
        NZvUp:
        $rows = $tables->item(0)->getElementsByTagName("\x74\x72");
        goto yI7eb;
        fvN4Y:
        $data[] = ["\x6e\x61\155\141" => $cols->item(1)->nodeValue, "\x6b\157\x64\145" => $cols->item(2)->nodeValue];
        goto jw1xC;
        yI7eb:
        $i = 1;
        goto Tj6Uu;
        h2bxf:
        $dom->loadHTML($text);
        goto wRUze;
        AaIqH:
        $config["\141\x6c\154\157\x77\145\x64\137\x74\171\x70\145\163"] = "\x64\157\143\x78";
        goto cqMrG;
        Tj6Uu:
        wOCcY:
        goto yrGZI;
        oRyLg:
        if (!$this->upload->do_upload("\x75\160\x6c\157\141\x64\x5f\x66\151\154\145")) {
            goto xTxGY;
        }
        goto jcw2S;
        jw1xC:
        LNtF9:
        goto GZkTL;
        IY107:
        $tables = $dom->getElementsByTagName("\164\x61\x62\x6c\x65");
        goto NZvUp;
        IJkW6:
        unlink($file);
        goto ZKeve;
        GkfL6:
        goto wOCcY;
        goto YqdP3;
        mt2GV:
        echo json_encode($data);
        goto ZKX7N;
        MdBX1:
    }
    public function do_import()
    {
        goto PYOi1;
        hS1F2:
        $this->output->set_content_type("\x61\160\x70\154\151\143\141\164\x69\157\156\x2f\x6a\163\x6f\156")->set_output($save);
        goto sgQDJ;
        PYOi1:
        $data = json_decode($this->input->post("\152\165\162\165\x73\x61\x6e", true));
        goto W3KFj;
        ZAc3z:
        foreach ($data as $j) {
            $jurusan[] = ["\156\141\155\x61\137\152\165\x72\165\x73\141\156" => $j->nama, "\153\157\x64\145\137\x6a\165\x72\x75\163\141\x6e" => $j->kode];
            WM3Vs:
        }
        goto Rn8Lu;
        Rn8Lu:
        LXpfj:
        goto DWvTx;
        W3KFj:
        $jurusan = [];
        goto ZAc3z;
        DWvTx:
        $save = $this->master->create("\x6d\x61\163\x74\145\x72\137\152\165\x72\165\163\141\156", $jurusan, true);
        goto hS1F2;
        sgQDJ:
    }
    function updateById()
    {
        goto ZPNxO;
        ZPNxO:
        $id = $this->input->post("\151\144\x5f\x6a\x75\162\x75\x73\141\x6e");
        goto QERWX;
        QERWX:
        $nama = $this->input->post("\165\x73\145\x72\156\141\x6d\145", true);
        goto xxFyX;
        LzD9A:
        $this->db->where("\151\144\137\x6a\165\162\165\163\x61\x6e", $id);
        goto aEdeE;
        aEdeE:
        return $this->db->update("\155\x61\x73\x74\145\162\x5f\x6a\x75\x72\x75\163\141\x6e");
        goto b5IeN;
        zOUWb:
        $this->db->set("\x6e\x61\155\x61\137\x6a\x75\x72\x75\163\x61\x6e", $nama);
        goto bpKAh;
        bpKAh:
        $this->db->set("\x6b\x6f\x64\x65\x5f\152\x75\162\165\x73\141\x6e", $kode);
        goto LzD9A;
        xxFyX:
        $kode = $this->input->post("\x65\x6d\x61\151\154", true);
        goto zOUWb;
        b5IeN:
    }
    public function hapusById()
    {
        goto UJhT4;
        DGsjD:
        return $this->db->delete("\155\x61\163\x74\145\x72\137\x6a\165\162\x75\163\141\156");
        goto aJGXa;
        aYGvA:
        $this->db->where("\x69\144\x5f\x6a\165\x72\x75\x73\x61\156", $id);
        goto DGsjD;
        UJhT4:
        $id = $this->input->post("\151\x64");
        goto aYGvA;
        aJGXa:
    }
    function exist($table, $data)
    {
        goto xRz2U;
        bvxo_:
        if ($count === 0) {
            goto cGsBH;
        }
        goto po4hF;
        rqcEk:
        return false;
        goto c5n9s;
        po4hF:
        return true;
        goto DbvxI;
        KIFn7:
        $count = $query->num_rows();
        goto bvxo_;
        g1cBH:
        cGsBH:
        goto rqcEk;
        c5n9s:
        vrt83:
        goto qJxCd;
        xRz2U:
        $query = $this->db->get_where($table, $data);
        goto KIFn7;
        DbvxI:
        goto vrt83;
        goto g1cBH;
        qJxCd:
    }
}
