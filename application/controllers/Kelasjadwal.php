<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Kelasjadwal extends CI_Controller { public function __construct() { goto PAGGs; t8ihn: $this->load->model("\x4c\157\x67\x5f\155\x6f\x64\x65\x6c", "\x6c\157\x67\147\x69\156\x67"); goto D3RYg; U5l2s: $this->load->library(["\144\141\x74\x61\x74\141\142\x6c\145\x73", "\146\157\x72\x6d\x5f\x76\x61\x6c\151\x64\141\x74\151\157\156"]); goto TDtHI; y84hc: $this->load->model("\x44\x72\157\x70\144\x6f\x77\x6e\137\x6d\157\144\x65\x6c", "\144\x72\157\160\144\x6f\x77\156"); goto sKGLl; qOfRX: kG1Z5: goto U5l2s; r7JYI: if ($this->ion_auth->logged_in()) { goto kG1Z5; } goto shaBi; sKGLl: $this->form_validation->set_error_delimiters('', ''); goto jL4L0; kskHw: $this->load->model("\x43\142\x74\137\155\x6f\144\145\x6c", "\x63\142\x74"); goto t8ihn; D3RYg: $this->load->model("\113\x65\154\141\x73\x5f\x6d\157\x64\x65\x6c", "\153\x65\154\141\163"); goto y84hc; PAGGs: parent::__construct(); goto r7JYI; shaBi: redirect("\141\x75\164\x68"); goto qOfRX; OCiVX: $this->load->model("\x44\141\x73\150\142\157\141\x72\x64\137\155\157\x64\x65\x6c", "\x64\141\x73\x68\142\157\141\162\x64"); goto kskHw; TDtHI: $this->load->model("\115\x61\163\164\x65\x72\x5f\x6d\157\x64\145\154", "\x6d\x61\163\x74\x65\x72"); goto OCiVX; jL4L0: } public function output_json($data, $encode = true) { goto eq0xI; eq0xI: if (!$encode) { goto BitnU; } goto CGpGf; AMK3q: $this->output->set_content_type("\x61\160\160\154\151\143\x61\164\x69\157\x6e\x2f\152\163\x6f\x6e")->set_output($data); goto PIyN0; M2hqd: BitnU: goto AMK3q; CGpGf: $data = json_encode($data); goto M2hqd; PIyN0: } public function index() { goto RfqRJ; G5OO8: $smt = $this->dashboard->getSemesterActive(); goto yh_us; fPzlb: $data["\152\x6d\x6c\x49\163\x74"] = []; goto xs5Bu; aixOF: if ($this->ion_auth->is_admin()) { goto XoSqb; } goto IHaSU; DnJcL: goto a_qf1; goto sX12v; FDAgZ: $this->load->view("\x5f\164\x65\155\x70\154\141\164\x65\163\57\144\141\x73\150\x62\157\x61\x72\x64\57\137\146\157\157\x74\x65\162"); goto vLDGW; DecTb: $this->load->view("\x6d\145\x6d\x62\145\x72\163\x2f\147\165\162\165\57\153\145\x6c\141\x73\x2f\152\141\144\167\x61\154\x2f\x64\141\164\141"); goto An2MD; xy_RL: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto x4xJp; xs5Bu: $data["\152\155\x6c\115\x61\x70\145\x6c"] = []; goto aixOF; P0ACo: $data["\x6d\x65\164\150\157\144"] = ''; goto fPzlb; NHQr3: $data["\x67\165\x72\165"] = $guru; goto cQFQG; HfAoR: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto NHQr3; t87yb: $data = ["\x75\x73\145\x72" => $user, "\152\165\x64\x75\x6c" => "\x4a\141\144\x77\141\154\x20\120\x65\154\141\x6a\141\162\141\156", "\163\x75\142\152\165\144\x75\x6c" => "\x53\145\164\x20\112\x61\x64\x77\x61\x6c\x20\x50\145\154\141\x6a\x61\x72\x61\156", "\163\145\x74\x74\x69\x6e\x67" => $this->dashboard->getSetting()]; goto mNPsb; An2MD: $this->load->view("\155\145\x6d\x62\x65\x72\163\x2f\x67\x75\x72\165\x2f\x74\145\x6d\160\x6c\x61\164\x65\163\57\146\x6f\x6f\164\145\162"); goto RRgSe; d9Qp9: $data["\x74\x70\x5f\x61\x63\164\151\x76\x65"] = $tp; goto xy_RL; iigRe: $data["\153\x65\154\x61\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto dcb23; IHaSU: if ($this->ion_auth->in_group("\x67\165\162\165")) { goto HaydG; } goto DnJcL; RRgSe: a_qf1: goto AqreD; YOxvZ: HaydG: goto HfAoR; CV0G_: $data["\160\x72\x6f\146\x69\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto yN4Xm; ZoxAO: $this->load->view("\x6b\145\x6c\x61\x73\57\152\x61\x64\167\141\154\57\144\x61\164\x61"); goto FDAgZ; sX12v: XoSqb: goto CV0G_; x4xJp: $data["\x73\x6d\164\137\x61\143\x74\x69\166\145"] = $smt; goto iigRe; mNPsb: $tp = $this->dashboard->getTahunActive(); goto G5OO8; yh_us: $data["\x74\160"] = $this->dashboard->getTahun(); goto d9Qp9; cQFQG: $this->load->view("\x6d\x65\155\142\145\x72\163\57\x67\x75\x72\165\x2f\x74\145\x6d\160\154\x61\164\x65\x73\x2f\150\145\141\x64\x65\162", $data); goto DecTb; dcb23: $data["\x69\144\x5f\153\x65\154\x61\163"] = "\60"; goto P0ACo; yN4Xm: $this->load->view("\x5f\164\145\x6d\x70\154\141\164\145\163\57\x64\x61\x73\x68\x62\x6f\141\x72\x64\57\x5f\150\x65\141\x64\145\x72", $data); goto ZoxAO; RfqRJ: $user = $this->ion_auth->user()->row(); goto t87yb; vLDGW: goto a_qf1; goto YOxvZ; AqreD: } public function kelas($kelas) { goto JAxgK; R_fhO: $data["\x74\160"] = $this->dashboard->getTahun(); goto aD_KH; RtExp: goto s5ZEu; goto qbhQv; Dejjw: goto RqE9L; goto v2FNZ; zu8hJ: $setting = $this->dashboard->getSetting(); goto adt4V; X7_37: if ($jadm == null) { goto yTesT; } goto oP2z3; jobpF: ZhtR6: goto hb20X; hb20X: $data["\x6d\x65\164\150\157\144"] = "\x61\144\x64"; goto I1rhj; SRI5Q: $this->load->view("\x6b\x65\x6c\141\x73\57\152\x61\144\x77\x61\154\x2f\144\x61\164\141"); goto q0lXd; j7ZMw: $this->load->view("\137\164\x65\155\160\154\x61\164\x65\x73\57\x64\141\163\150\x62\x6f\141\162\x64\57\x5f\x68\145\x61\144\x65\x72", $data); goto SRI5Q; pPPEY: goto bCFeU; goto jobpF; GIhlF: $i++; goto pPPEY; m1s0j: $i = 0; goto yoUf9; u6tNb: if ($this->ion_auth->is_admin()) { goto aOKTj; } goto XkjRS; VuFnJ: $data["\151\x64\137\153\x65\x6c\141\x73"] = $kelas; goto XzUow; C42Iz: if (!($i < $jml_mapel)) { goto ZhtR6; } goto R0M1q; ST0Yj: $data["\x73\x6d\164"] = $this->dashboard->getSemester(); goto dZgwM; gxTYL: $this->load->view("\155\x65\155\142\x65\162\163\x2f\x67\x75\162\x75\x2f\164\x65\155\160\x6c\141\x74\145\x73\x2f\150\x65\x61\x64\x65\x72", $data); goto XZiK_; UYlZW: goto IL7L4; goto LBNnD; IOCDF: s5ZEu: goto ffX6z; LBNnD: CSh40: goto i4kdi; ALWCy: $data["\x6d\x61\x70\145\x6c\163"] = $this->dropdown->getAllKodeMapel(); goto u6tNb; adt4V: $data = ["\165\163\x65\162" => $user, "\x6a\x75\x64\x75\x6c" => "\112\141\144\x77\141\x6c\40\120\145\154\141\152\x61\x72\x61\156", "\163\x75\142\152\x75\x64\165\x6c" => "\x53\x65\164\x20\112\141\x64\x77\x61\x6c\x20\x50\145\154\x61\152\141\x72\141\x6e", "\x73\x65\164\x74\151\156\147" => $setting]; goto tUcHw; IC_d_: $this->load->view("\x6d\145\155\142\145\x72\x73\57\147\x75\x72\x75\57\164\145\155\160\154\x61\164\145\163\57\x66\x6f\157\164\145\x72"); goto IOCDF; ba95Z: $data["\x70\162\157\x66\x69\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto j7ZMw; JAxgK: $user = $this->ion_auth->user()->row(); goto zu8hJ; v2FNZ: yTesT: goto m1s0j; q0lXd: $this->load->view("\x5f\x74\x65\x6d\160\x6c\x61\164\x65\163\57\144\141\163\150\142\157\141\162\144\x2f\x5f\x66\157\157\x74\145\162"); goto RtExp; oP2z3: foreach ($jadm as $j) { $jadwal_mapel[] = ["\152\141\x64\x77\x61\154" => $this->kelas->getJadwalMapelByHari($tp->id_tp, $smt->id_smt, $j->jam_ke, $kelas)]; SAg32: } goto krcm9; aD_KH: $data["\x74\160\x5f\x61\143\x74\151\166\145"] = $tp; goto ST0Yj; qVBP6: $data["\155\x65\164\150\x6f\x64"] = "\x65\x64\151\164"; goto Dejjw; XOw97: aOKTj: goto ba95Z; ABVzb: $data["\147\165\x72\165"] = $this->dashboard->getDetailGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto gxTYL; czuAd: $jml_mapel = $jadk == null ? 1 : $jadk->kbm_jml_mapel_hari; goto X7_37; Nvq_v: $jadk = $this->kelas->getJadwalKbm($tp->id_tp, $smt->id_smt, $kelas); goto pySWi; XZiK_: $this->load->view("\155\145\x6d\x62\145\162\163\57\147\165\162\165\57\153\145\x6c\x61\x73\57\x6a\141\144\x77\x61\x6c\57\144\x61\x74\141"); goto IC_d_; I1rhj: RqE9L: goto uBNzq; tUcHw: $tp = $this->dashboard->getTahunActive(); goto pI1vV; XkjRS: if ($this->ion_auth->in_group("\x67\165\x72\x75")) { goto ucUYg; } goto XTYTP; XzUow: $jadm = $this->kelas->getJadwalMapelGroupJam($tp->id_tp, $smt->id_smt, $kelas); goto czuAd; R0M1q: $jadwal_mapel[] = ["\x6a\x61\x64\167\x61\154" => $this->kelas->getDummyJadwalMapel($tp->id_tp, $smt->id_smt, $i + 1, $kelas)]; goto FS1x9; yoUf9: bCFeU: goto C42Iz; dZgwM: $data["\x73\155\x74\137\141\x63\164\x69\x76\x65"] = $smt; goto RamQT; XTYTP: goto s5ZEu; goto XOw97; DZpjj: $data["\152\x61\x64\x77\141\154\137\153\x62\155"] = $jadk; goto UYlZW; krcm9: aYW32: goto qVBP6; pySWi: if ($jadk == null) { goto CSh40; } goto DZpjj; FS1x9: MH1ls: goto GIhlF; WqM1o: IL7L4: goto VuFnJ; qbhQv: ucUYg: goto ABVzb; RamQT: $data["\x6b\x65\x6c\141\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto Nvq_v; uBNzq: $data["\152\141\x64\x77\141\x6c\137\x6d\x61\160\x65\154"] = $jadwal_mapel; goto ALWCy; i4kdi: $data["\152\141\144\167\141\x6c\137\x6b\142\155"] = json_decode(json_encode(["\151\144\137\x74\x70" => $tp->tahun, "\151\x64\x5f\x73\x6d\164" => $smt->smt, "\151\144\x5f\x6b\145\x6c\x61\x73" => $kelas, "\x6b\x62\155\137\x6a\141\155\137\x70\145\x6c" => '', "\x6b\142\x6d\x5f\x6a\141\155\x5f\155\165\x6c\x61\x69" => '', "\153\142\155\137\x6a\155\154\x5f\x6d\x61\160\145\x6c\137\150\x61\x72\x69" => '', "\151\x73\164\151\x72\x61\x68\x61\x74" => serialize([]), "\x61\144\141" => false])); goto WqM1o; pI1vV: $smt = $this->dashboard->getSemesterActive(); goto R_fhO; ffX6z: } public function setJadwal() { goto DW5u7; oF1NM: $update = $this->db->replace("\x6b\145\154\141\x73\137\152\141\x64\167\x61\154\137\x6b\142\x6d", $insert); goto aznSe; vHArC: $id_smt = $this->master->getSemesterActive()->id_smt; goto aZlRN; MiW9s: $insert = [ "\x69\x64\137\x6b\x62\155" => $id_tp . $id_smt . $id_kelas, "\151\x64\x5f\x74\160" => $id_tp, "\151\144\137\x73\x6d\164" => $id_smt, "\x69\144\137\153\145\154\x61\x73" => $id_kelas, "\x6b\142\x6d\x5f\x6a\x61\x6d\137\160\145\154" => $this->input->post("\152\141\155\x5f\155\141\160\x65\154", true) ?? 0, "\153\142\155\137\152\x61\x6d\x5f\x6d\x75\154\141\x69" => $this->input->post("\152\141\155\137\x6d\165\154\x61\151", true), "\x6b\x62\x6d\x5f\x6a\x6d\154\x5f\x6d\x61\x70\x65\154\x5f\x68\x61\162\x69" => $this->input->post("\x6a\155\x6c\137\x6d\x61\x70\x65\154", true), "\151\163\164\151\x72\141\x68\x61\x74" => serialize($istirahat)]; goto oF1NM; nkJUJ: $durasi = $this->input->post("\x64\165\162\x5f\151\163\164" . $i, true); goto Lw7_r; Eywtp: $i++; goto orzfL; DW5u7: $istirahat = []; goto ojwEm; vKQsS: if (!($i < 5)) { goto tWa_t; } goto N1nNX; N1nNX: $jamke = $this->input->post("\x69\163\x74" . $i, true); goto nkJUJ; aznSe: $this->logging->saveLog(3, "\x6d\x65\x72\165\x62\141\150\40\x6a\141\x64\x77\141\x6c\40\x70\145\x6c\x61\152\x61\162\141\x6e"); goto P0mh3; ExYHT: mH3pE: goto dJ0_V; CRHMl: $istirahat[] = ["\x69\x73\x74" => $jamke, "\144\165\162" => $durasi]; goto ExYHT; kRB3Q: $id_tp = $this->master->getTahunActive()->id_tp; goto vHArC; aZlRN: $id_kelas = $this->input->post("\x69\144\137\x6b\x65\154\x61\163", true); goto MiW9s; orzfL: goto pmyra; goto mg80d; dJ0_V: Yc_L7: goto Eywtp; SmL20: pmyra: goto vKQsS; ojwEm: $i = 1; goto SmL20; P0mh3: $data["\x73\164\x61\164\x75\x73"] = $update; goto I0TP7; Lw7_r: if (!$jamke) { goto mH3pE; } goto CRHMl; I0TP7: $this->output_json($data); goto SVfXb; mg80d: tWa_t: goto kRB3Q; SVfXb: } public function setMapel() { goto YYa4B; vSIi2: $this->output_json($res); goto jjUUH; OuubF: $array = array("\x69\x64\x5f\164\x70" => $input[0]->id_tp, "\151\x64\x5f\163\x6d\164" => $input[0]->id_smt, "\151\x64\137\x6b\x65\x6c\x61\x73" => $id_kelas); goto mu9YW; sCJ51: $data = []; goto TeXAU; YYa4B: $input = json_decode($this->input->post("\144\x61\164\141", true)); goto vcK40; vcK40: $id_kelas = $this->input->post("\x69\144\x5f\153\145\154\141\163", true); goto OuubF; q0evO: $update = $this->db->insert_batch("\x6b\145\154\x61\x73\137\152\x61\x64\167\141\154\x5f\155\141\x70\145\x6c", $data); goto qjd0Y; qjd0Y: $res["\163\164\141\x74\x75\163"] = $update; goto vSIi2; ZL_38: u42kc: goto q0evO; jLvuI: $this->db->delete("\x6b\145\x6c\x61\163\137\152\141\144\167\x61\154\137\155\141\160\145\154"); goto sCJ51; mu9YW: $this->db->where($array); goto jLvuI; TeXAU: foreach ($input as $d) { $data[] = ["\151\x64\x5f\x6a\x61\x64\x77\x61\154" => $d->id_tp . $d->id_smt . $id_kelas . $d->id_hari . $d->jam_ke, "\151\x64\137\164\160" => $d->id_tp, "\x69\144\x5f\x73\x6d\164" => $d->id_smt, "\x69\144\137\153\145\x6c\141\163" => $id_kelas, "\x69\144\x5f\x68\x61\x72\x69" => $d->id_hari, "\152\141\155\x5f\153\145" => $d->jam_ke, "\x69\144\x5f\x6d\141\x70\145\x6c" => $d->id_mapel]; pJnVE: } goto ZL_38; jjUUH: } }
