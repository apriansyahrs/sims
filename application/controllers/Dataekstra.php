<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\x42\101\123\x45\x50\101\x54\x48") or exit("\x4e\157\x20\x64\151\x72\145\143\164\x20\163\x63\x72\151\x70\x74\40\x61\x63\143\145\163\163\40\x61\154\154\x6f\x77\145\x64");

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\Writer\Csv;

class Dataekstra extends CI_Controller
{
    public function __construct()
    {
        goto VeINy;
        huSn5:
        goto Joa_U;
        goto xznW0;
        VeINy:
        parent::__construct();
        goto OlIS6;
        xznW0:
        LnK23:
        goto NJvoT;
        NJvoT:
        redirect("\141\165\164\x68");
        goto hgk1c;
        omgYb:
        $this->load->model("\x4b\145\154\x61\163\137\155\x6f\x64\145\x6c", "\x6b\145\x6c\x61\x73");
        goto AJsmh;
        jGuUY:
        $this->load->model("\x44\162\x6f\160\144\x6f\167\156\x5f\155\157\x64\145\x6c", "\x64\x72\157\x70\x64\x6f\x77\x6e");
        goto omgYb;
        GEjjP:
        show_error("\x48\x61\156\x79\141\40\x41\144\155\x69\156\x69\163\x74\x72\x61\164\x6f\x72\40\x79\x61\156\x67\40\x64\151\142\x65\x72\151\x20\x68\x61\x6b\40\165\156\164\x75\x6b\x20\155\x65\156\x67\x61\x6b\x73\x65\163\40\150\141\x6c\x61\x6d\141\x6e\40\151\156\151\x2c\40\74\141\40\x68\162\145\x66\x3d\x22" . base_url("\144\141\x73\150\x62\157\x61\x72\144") . "\42\76\113\x65\155\142\141\154\151\x20\153\145\x20\155\145\x6e\x75\40\141\x77\141\x6c\74\x2f\x61\x3e", 403, "\x41\x6b\163\x65\x73\40\x54\x65\x72\x6c\141\162\x61\156\x67");
        goto b4l8J;
        AJsmh:
        $this->form_validation->set_error_delimiters('', '');
        goto iowLV;
        Is4jQ:
        $this->load->model("\x4d\x61\x73\164\145\162\x5f\x6d\x6f\144\x65\154", "\155\141\163\164\145\162");
        goto DJ16T;
        DJ16T:
        $this->load->model("\104\x61\x73\x68\x62\x6f\x61\162\144\137\155\x6f\x64\x65\154", "\144\141\163\x68\142\157\x61\x72\144");
        goto jGuUY;
        Mlv5G:
        $this->load->library(["\144\141\164\x61\x74\141\x62\x6c\x65\x73", "\146\157\x72\x6d\x5f\x76\x61\x6c\151\x64\141\164\151\157\x6e"]);
        goto Is4jQ;
        hgk1c:
        Joa_U:
        goto Mlv5G;
        CTy1J:
        if ($this->ion_auth->is_admin()) {
            goto gTkrq;
        }
        goto GEjjP;
        b4l8J:
        gTkrq:
        goto huSn5;
        OlIS6:
        if (!$this->ion_auth->logged_in()) {
            goto LnK23;
        }
        goto CTy1J;
        iowLV:
    }
    public function output_json($data, $encode = true)
    {
        goto YcoHx;
        YcoHx:
        if (!$encode) {
            goto fgk25;
        }
        goto hrnMX;
        lakXa:
        $this->output->set_content_type("\141\x70\x70\154\151\x63\x61\164\151\157\x6e\x2f\152\163\x6f\x6e")->set_output($data);
        goto qQIps;
        hrnMX:
        $data = json_encode($data);
        goto soRUO;
        soRUO:
        fgk25:
        goto lakXa;
        qQIps:
    }
    public function index()
    {
        goto o99ZC;
        GXjPa:
        $this->load->view("\137\x74\x65\x6d\x70\154\x61\x74\x65\163\57\144\x61\163\150\142\157\x61\x72\144\57\137\x66\x6f\157\x74\145\x72");
        goto G96Kj;
        redp_:
        $kelasEks = [];
        goto I7sm2;
        v3JVB:
        $data["\164\160\x5f\141\x63\164\x69\166\x65"] = $tp;
        goto vl8FW;
        OccY6:
        $tp = $this->dashboard->getTahunActive();
        goto Qhtyq;
        o99ZC:
        $user = $this->ion_auth->user()->row();
        goto ZeVGa;
        vl8FW:
        $data["\x73\x6d\164"] = $this->dashboard->getSemester();
        goto kMzzG;
        I7sm2:
        foreach ($kelas as $key => $kls) {
            $kelasEks[$key] = $this->kelas->getKelasEkskul($key, $tp->id_tp, $smt->id_smt);
            RecYI:
        }
        goto xgZhy;
        cNkKp:
        $data["\164\x70"] = $this->dashboard->getTahun();
        goto v3JVB;
        ZeVGa:
        $data = ["\165\163\x65\162" => $user, "\x6a\165\144\165\x6c" => "\105\153\163\164\162\141\153\165\x72\x69\153\x75\154\145\x72", "\163\x75\x62\x6a\165\144\165\x6c" => "\x44\x61\x74\141\x20\115\x61\164\x61\x20\x50\145\x6c\141\152\x61\162\141\156", "\x70\162\x6f\146\151\154\145" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\x74\164\151\156\x67" => $this->dashboard->getSetting()];
        goto OccY6;
        D1Lxr:
        $data["\145\x6b\163\x6b\165\x6c\137\x6b\145\154\x61\163"] = $kelasEks;
        goto PeV2C;
        Ry2mx:
        $data["\x65\153\x73\x6b\x75\x6c"] = $this->dropdown->getAllEkskul();
        goto l0e4w;
        PeV2C:
        $data["\153\x65\154\141\x73"] = $kelas;
        goto G0qIZ;
        kMzzG:
        $data["\163\155\x74\137\x61\x63\164\x69\x76\145"] = $smt;
        goto Ry2mx;
        G0qIZ:
        $data["\160\145\155\x62\x69\155\142\151\x6e\147"] = $this->dropdown->getAllGuru();
        goto JD2Yr;
        xgZhy:
        IzV_P:
        goto D1Lxr;
        Qhtyq:
        $smt = $this->dashboard->getSemesterActive();
        goto cNkKp;
        CX1Bp:
        $this->load->view("\x6d\x61\x73\x74\x65\x72\57\145\x6b\163\x74\x72\x61\57\144\141\x74\x61");
        goto GXjPa;
        JD2Yr:
        $this->load->view("\x5f\x74\x65\155\x70\x6c\141\x74\x65\x73\x2f\144\x61\x73\150\x62\x6f\x61\162\x64\57\x5f\x68\145\141\x64\x65\162", $data);
        goto CX1Bp;
        l0e4w:
        $kelas = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto redp_;
        G96Kj:
    }
    public function create()
    {
        goto cjZF2;
        cjZF2:
        $insert = ["\x6e\x61\x6d\141\x5f\145\153\x73\164\162\x61" => $this->input->post("\x6e\x61\155\141\x5f\145\x6b\x73\164\162\141", true), "\153\157\x64\x65\137\x65\x6b\163\x74\162\x61" => $this->input->post("\153\x6f\x64\x65\137\145\153\163\x74\162\141", true)];
        goto Ig2Ke;
        Ig2Ke:
        $data = $this->master->create("\155\x61\163\164\x65\x72\x5f\x65\x6b\163\x74\162\141", $insert);
        goto VHIjW;
        VHIjW:
        $this->output->set_content_type("\x61\x70\160\x6c\x69\x63\141\164\151\157\x6e\57\x6a\x73\157\x6e")->set_output($data);
        goto WfPzt;
        WfPzt:
    }
    public function read()
    {
        goto IxTVm;
        IxTVm:
        $this->datatables->select("\x2a");
        goto RUC3S;
        kFcgv:
        echo $this->datatables->generate();
        goto SaaJ7;
        RUC3S:
        $this->datatables->from("\x6d\x61\x73\164\145\x72\x5f\x65\153\x73\x74\162\x61");
        goto kFcgv;
        SaaJ7:
    }
    public function update()
    {
        $data = $this->master->updateEkstra();
        $this->output->set_content_type("\x61\x70\160\x6c\x69\x63\141\x74\x69\x6f\156\57\x6a\163\157\x6e")->set_output($data);
    }
    public function delete($id)
    {
        goto PCvO9;
        sKHnY:
        biJXD:
        goto qht1e;
        qht1e:
        $this->output_json(["\163\164\x61\164\x75\x73" => false, "\164\x6f\164\x61\x6c" => "\115\x61\x70\x65\154\40\x64\x69\147\165\x6e\x61\153\x61\x6e\40\x64\x69\40" . count($messages) . "\x20\164\x61\x62\145\x6c\x3a\x3c\x62\x72\x3e" . implode("\74\142\x72\76", $messages)]);
        goto vPL_9;
        Xcp4g:
        if ($this->master->delete("\155\x61\x73\x74\x65\162\x5f\145\153\x73\164\x72\141", [$id], "\151\x64\x5f\145\153\163\x74\x72\141")) {
            goto TBmF5;
        }
        goto wZUQS;
        wBxGA:
        AIdf2:
        goto i8T5g;
        cj100:
        $tables = [];
        goto XGfbx;
        PCvO9:
        $messages = [];
        goto cj100;
        FTh28:
        $this->output_json(["\x73\x74\x61\164\x75\163" => true, "\155\145\x73\x73\141\x67\x65" => "\x45\x6b\163\153\165\x6c\x20\142\x65\x72\x68\x61\163\x69\x6c\40\x64\151\x68\x61\160\x75\163"]);
        goto wBxGA;
        x672Q:
        $this->output_json($tables);
        goto KM_aA;
        vPL_9:
        yb8pB:
        goto YW4QH;
        NtdnR:
        UdOdC:
        goto lG3es;
        wZUQS:
        $this->output_json(["\x73\x74\x61\164\165\163" => false, "\155\x65\163\163\x61\147\x65" => "\105\153\x73\153\x75\154\x20\x67\141\x67\141\x6c\40\x64\151\x68\141\160\165\x73"]);
        goto d73YG;
        i8T5g:
        goto yb8pB;
        goto sKHnY;
        xBlaB:
        TBmF5:
        goto FTh28;
        XGfbx:
        $tabless = $this->db->list_tables();
        goto FGyrY;
        KM_aA:
        foreach ($tables as $table) {
            goto RVUGQ;
            XHgGr:
            if (!($num > 0)) {
                goto T1w3H;
            }
            goto QEQI5;
            oFwYh:
            JFE4g:
            goto kVPaP;
            E2ptS:
            $num = $this->db->count_all_results($table);
            goto XHgGr;
            sjae8:
            $this->db->where("\x69\x64\x5f\x65\153\163\x74\x72\x61", $id);
            goto E2ptS;
            FYURW:
            T1w3H:
            goto oFwYh;
            RVUGQ:
            if (!($table != "\155\x61\163\x74\x65\x72\137\x65\153\163\x74\162\x61")) {
                goto JFE4g;
            }
            goto sjae8;
            QEQI5:
            array_push($messages, $table);
            goto FYURW;
            kVPaP:
            PAH5I:
            goto SHAWX;
            SHAWX:
        }
        goto NtdnR;
        d73YG:
        goto AIdf2;
        goto xBlaB;
        FGyrY:
        foreach ($tabless as $table) {
            goto vsOg9;
            Iddks:
            foreach ($fields as $field) {
                goto QGAv_;
                QGAv_:
                if (!($field->name == "\151\x64\137\x65\153\163\x74\x72\141" || $field->name == "\x65\x6b\163\164\162\x61\137\151\x64")) {
                    goto a5Uc2;
                }
                goto ZLUW2;
                v9MYA:
                a5Uc2:
                goto H4WCu;
                ZLUW2:
                array_push($tables, $table);
                goto v9MYA;
                H4WCu:
                m0xjz:
                goto RSwyV;
                RSwyV:
            }
            goto mi_gm;
            mi_gm:
            dw3QM:
            goto HK6C3;
            HK6C3:
            Gpu1E:
            goto lXKh3;
            vsOg9:
            $fields = $this->db->field_data($table);
            goto Iddks;
            lXKh3:
        }
        goto YL9na;
        lG3es:
        if (count($messages) > 0) {
            goto biJXD;
        }
        goto Xcp4g;
        YL9na:
        XLG6O:
        goto x672Q;
        YW4QH:
    }
    public function save()
    {
        goto zsOnD;
        HQzRi:
        $update = [];
        goto vSdtV;
        toDIp:
        vIqK7:
        goto Xxiz8;
        hpe94:
        $row_insert = 0;
        goto HQzRi;
        zsOnD:
        $check_kelas = json_decode(json_encode(json_decode($this->input->post("\x6b\x65\154\x61\x73", true))));
        goto Qiq0v;
        gUWzG:
        $smt = $this->master->getSemesterActive()->id_smt;
        goto hpe94;
        ZajMC:
        $res["\165\x70\144\141\x74\x65"] = $update;
        goto cVBZR;
        vSdtV:
        foreach ($check_kelas as $key => $kls) {
            goto kySmz;
            sdUos:
            $ekstras = ["\151\144\x5f\153\145\154\141\x73\137\145\153\x73\164\x72\141" => $kls->kls_id . $tp . $smt, "\151\144\137\x6b\x65\154\x61\x73" => $kls->kls_id, "\151\x64\x5f\164\x70" => $tp, "\151\x64\x5f\x73\x6d\x74" => $smt, "\x65\x6b\x73\x74\x72\x61" => serialize($ekstra)];
            goto DFQs6;
            SxcHo:
            $kelaseks = $this->input->post("\145\x6b\x73\153\x75\154" . $kls->kls_id . "\x5b" . $j . "\135", true);
            goto JNFpX;
            tfenE:
            $ekstra = [];
            goto ggRn7;
            bmgAT:
            if (!$check_ekskul) {
                goto b39DM;
            }
            goto yNa1v;
            k_3ln:
            goto Upt7c;
            goto c0shA;
            TF4PT:
            if (!($j <= $row_ekskul)) {
                goto PBz0K;
            }
            goto SxcHo;
            JNFpX:
            $ekstra[] = ["\145\x6b\x73\x74\x72\x61" => $kelaseks];
            goto j7aOz;
            j7aOz:
            s7YyY:
            goto hgbnB;
            AUIZK:
            b39DM:
            goto rnIHL;
            c0shA:
            PBz0K:
            goto sdUos;
            rnIHL:
            B5av5:
            goto kLEtW;
            ZotE8:
            Upt7c:
            goto TF4PT;
            kySmz:
            $check_ekskul = $this->input->post("\145\153\x73\x6b\165\x6c" . $kls->kls_id, true);
            goto bmgAT;
            hgbnB:
            $j++;
            goto k_3ln;
            yNa1v:
            $row_ekskul = count($this->input->post("\145\x6b\x73\x6b\165\x6c" . $kls->kls_id, true));
            goto tfenE;
            ggRn7:
            $j = 0;
            goto ZotE8;
            DFQs6:
            $update[] = $this->db->replace("\x6b\145\154\x61\x73\137\x65\153\163\164\162\x61", $ekstras);
            goto AUIZK;
            kLEtW:
        }
        goto toDIp;
        cVBZR:
        $this->output_json($res);
        goto oEMwV;
        Qiq0v:
        $tp = $this->master->getTahunActive()->id_tp;
        goto gUWzG;
        Xxiz8:
        $res["\x73\164\141\x74\x75\163"] = true;
        goto ZajMC;
        oEMwV:
    }
    public function import($import_data = null)
    {
        goto XWi_f;
        cFRyo:
        $data = ["\x75\x73\x65\162" => $user, "\152\x75\x64\x75\154" => "\x4d\x61\164\x61\40\120\145\x6c\141\152\141\x72\x61\156", "\x73\165\x62\x6a\x75\x64\165\154" => "\111\x6d\x70\x6f\162\164\x20\115\x61\x74\x61\x20\120\x65\x6c\x61\x6a\141\x72\x61\x6e", "\x70\x72\157\146\151\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\x74\164\x69\x6e\x67" => $this->dashboard->getSetting()];
        goto uLCVq;
        VZezA:
        $this->load->view("\137\x74\145\155\160\x6c\141\x74\145\x73\57\x64\141\x73\x68\x62\x6f\141\162\x64\57\x5f\146\157\157\164\x65\162");
        goto UmGws;
        TA4Rx:
        $data["\x74\x70\x5f\x61\x63\164\x69\x76\145"] = $this->dashboard->getTahunActive();
        goto Z0xCz;
        DJ4PH:
        $this->load->view("\x6d\141\163\164\x65\162\x2f\145\x6b\163\164\162\x61\57\151\155\160\x6f\162\x74");
        goto VZezA;
        yMz8e:
        $this->load->view("\x5f\x74\x65\x6d\x70\x6c\141\x74\145\163\x2f\144\141\163\150\142\x6f\x61\x72\144\x2f\x5f\150\x65\141\144\145\162", $data);
        goto DJ4PH;
        XWi_f:
        $user = $this->ion_auth->user()->row();
        goto cFRyo;
        Z0xCz:
        $data["\163\x6d\164"] = $this->dashboard->getSemester();
        goto AytOD;
        AytOD:
        $data["\163\155\x74\x5f\141\143\x74\151\x76\145"] = $this->dashboard->getSemesterActive();
        goto yMz8e;
        XF_Qv:
        BwWws:
        goto c0gfJ;
        uLCVq:
        if (!($import_data != null)) {
            goto BwWws;
        }
        goto WRwgi;
        WRwgi:
        $data["\151\x6d\x70\x6f\162\164"] = $import_data;
        goto XF_Qv;
        c0gfJ:
        $data["\164\x70"] = $this->dashboard->getTahun();
        goto TA4Rx;
        UmGws:
    }
}
