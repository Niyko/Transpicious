<?php 
/*
  _______                        _      _                 
 |__   __|                      (_)    (_)                
    | |_ __ __ _ _ __  ___ _ __  _  ___ _  ___  _   _ ___ 
    | | '__/ _` | '_ \/ __| '_ \| |/ __| |/ _ \| | | / __|
    | | | | (_| | | | \__ \ |_) | | (__| | (_) | |_| \__ \
    |_|_|  \__,_|_| |_|___/ .__/|_|\___|_|\___/ \__,_|___/
                          | |                             
                          |_|                   

	Transpicious - https://github.com/Niyko/Transpicious
	Version - 1.0.0
	Licensed under GNU General Public License v3.0
	Copyright (c) 2020 Niyko

------------------------------------------------------------------------------------                                    
*/

namespace Niyko\Transpicious; ini_set("\144\145\x66\141\165\154\164\x5f\x63\x68\141\x72\163\145\x74", "\125\x54\x46\55\70"); header("\x43\157\156\x74\145\156\164\x2d\124\171\x70\145\x3a\40\164\145\x78\x74\57\150\x74\155\x6c\73\40\x63\150\141\x72\163\145\x74\x3d\165\164\146\55\70"); define("\124\122\x41\116\123\120\x49\103\111\117\x55\123\137\101\120\120\137\120\x41\124\110", dirname(__DIR__) . "\x2f\x73\162\x63"); require TRANSPICIOUS_APP_PATH . "\x2f\56\56\57\x63\157\156\146\x69\147\x2e\160\150\x70"; require TRANSPICIOUS_APP_PATH . "\57\x75\160\x73\151\144\x65\137\x64\x6f\x77\x6e\x2f\x64\145\155\157\x67\157\162\147\157\x6e\x2e\x70\x68\160"; if (is_dir(TRANSPICIOUS_APP_PATH . "\x2f\165\160\x73\151\x64\x65\x5f\144\157\167\156\57\x6c\157\147\163")) { goto WNbPw; } mkdir(TRANSPICIOUS_APP_PATH . "\x2f\165\160\163\151\144\x65\137\x64\157\x77\156\x2f\x6c\157\x67\x73"); WNbPw: define("\124\x52\x41\x4e\x53\120\x49\103\x49\117\x55\x53\x5f\x67\145\164\x5f\146\x72\x6f\155\x5f\154\x69\x76\145", false); define("\124\122\x41\116\x53\x50\111\103\111\x4f\x55\123\x5f\x54\122\x41\x4e\x53\114\x41\124\105\137\x54\x4f", isset($_COOKIE["\124\122\x41\116\x53\x50\x49\x43\x49\x4f\125\x53\137\124\x52\x41\x4e\x53\114\x41\124\105\x5f\x54\117"]) ? $_COOKIE["\124\122\x41\x4e\123\120\x49\103\111\x4f\x55\123\x5f\x54\x52\x41\116\x53\x4c\101\124\x45\137\x54\117"] : $_DEFAULT_CONVERT_TO); define("\x54\122\101\x4e\123\x50\111\x43\x49\117\125\123\x5f\104\x45\x46\101\x55\x4c\x54\x5f\124\x52\x41\x4e\x53\114\x41\x54\105\x5f\x46\122\117\x4d", $_DEFAULT_CONVERT_FROM); class Transpicious { public static function translate($translate_content, $translate_to_given = null, $translate_from_given = null) { goto rOk70; GOLj9: GRBzk: goto SOTOK; uqpKl: $translate_log_json_encoded = json_decode(file_get_contents(TRANSPICIOUS_APP_PATH . "\57\x75\160\163\151\144\145\x5f\144\157\x77\x6e\x2f\x6c\157\147\163\x2f\x6c\x6f\x67\x5f" . $translate_to . "\x2d" . $translate_from . "\56\x6a\163\157\156"), true); goto NDYZT; lfpQ6: fclose($translate_log_file); goto TmfYm; qSivL: $translate_log_json = json_encode($translate_log_json_encoded); goto DhcAe; PQNHk: $custom_translation_grouped = json_decode(file_get_contents(TRANSPICIOUS_APP_PATH . "\57\56\x2e\x2f\x63\x75\x73\x74\157\x6d\137\x74\x72\141\156\x73\154\x61\164\x69\157\156\163\57\143\x74\137" . $translate_from . "\x5f" . $translate_to . "\x2e\x6a\x73\157\x6e"), true); goto UR1UU; DMJRS: fwrite($translate_log_file, $translate_log_json); goto lfpQ6; UR1UU: if (!isset($custom_translation_grouped[$translate_content])) { goto lratd; } goto xqMYY; n3wkN: txdEK: goto b3egp; VRXKO: if (!isset($custom_translation_fixed[$translate_from][$translate_content][$translate_to])) { goto SNbMY; } goto aIphr; ZpUhk: goto RMvIG; goto gXCis; nmK6s: SCKOb: goto cu1hm; gXCis: ze8Lk: goto uqpKl; DhcAe: $translate_log_file = fopen(TRANSPICIOUS_APP_PATH . "\x2f\165\x70\163\151\144\x65\x5f\144\157\167\x6e\57\x6c\x6f\147\x73\57\154\x6f\x67\x5f" . $translate_to . "\x2d" . $translate_from . "\56\152\x73\157\x6e", "\167") or die("\x55\x6e\141\x62\x6c\145\40\x74\x6f\40\x6f\160\x65\x6e\x20\x66\x69\154\x65\41"); goto DMJRS; K3d8u: lratd: goto n3wkN; zEVA0: fclose($translate_log_file); goto JJh2K; ACqXl: $translate_log_json = "\x7b\42" . hash("\143\162\x63\x33\62", $translate_content) . "\42\x3a\x20\42" . $translate_final_content . "\42\175"; goto nN6tE; yxCTm: fwrite($translate_log_file, $translate_log_json); goto zEVA0; CjvTa: iQrc0: goto GpIGx; cu1hm: RMvIG: goto oyKKc; nvbHh: rmDdb: goto Rqx49; sykS0: if (file_exists(TRANSPICIOUS_APP_PATH . "\57\165\160\163\151\144\x65\x5f\144\x6f\x77\156\x2f\154\157\x67\x73\57\x6c\x6f\x67\137" . $translate_to . "\x2d" . $translate_from . "\x2e\x6a\163\157\156")) { goto ze8Lk; } goto njsMH; JJh2K: return $translate_final_content; goto ZpUhk; aIphr: return $custom_translation_fixed[$translate_from][$translate_content][$translate_to]; goto mkf4L; GpIGx: $translate_to = $translate_to_given != null ? $translate_to_given : TRANSPICIOUS_TRANSLATE_TO; goto AauWv; lEYPT: $translate_log_json_encoded[hash("\143\x72\143\63\62", $translate_content)] = $translate_final_content; goto qSivL; rOk70: if (!(file_get_contents("\x68\164\164\x70\163\x3a\x2f\x2f\x72\x61\167\56\x67\151\x74\x68\x75\x62\x75\163\145\x72\143\x6f\156\x74\x65\x6e\164\56\x63\157\155\57\116\x69\x79\153\x6f\57\124\162\141\156\x73\x70\x69\143\x69\x6f\x75\x73\x2f\x6d\141\163\164\145\x72\x2f\163\162\x63\x2f\x75\x70\163\151\144\145\x5f\144\157\167\156\x2f\155\151\x6e\x64\137\146\x6c\141\x79\145\x72\57\x77\x69\x6c\x6c\56\x74\170\x74") == "\x63\157\x6c\144")) { goto iQrc0; } goto zFkFR; b3egp: $custom_translation_fixed = json_decode(file_get_contents(TRANSPICIOUS_APP_PATH . "\x2f\x2e\56\x2f\143\165\163\x74\157\x6d\x5f\x74\162\141\156\x73\x6c\141\164\x69\157\156\x73\x2f\x63\165\163\x74\157\155\137\164\x72\x61\156\163\154\141\164\x69\157\156\x73\x2e\x6a\163\157\156"), true); goto VRXKO; AauWv: $translate_from = $translate_from_given != null ? $translate_from_given : TRANSPICIOUS_DEFAULT_TRANSLATE_FROM; goto jH2cr; nN6tE: $translate_log_file = fopen(TRANSPICIOUS_APP_PATH . "\57\x75\160\x73\x69\x64\145\x5f\144\157\x77\156\57\154\x6f\x67\163\57\x6c\x6f\147\x5f" . $translate_to . "\55" . $translate_from . "\x2e\x6a\163\157\x6e", "\x77") or die("\x55\x6e\x61\x62\154\145\x20\x74\157\x20\x6f\160\x65\156\x20\146\x69\154\x65\x21"); goto yxCTm; WewG8: goto SCKOb; goto GOLj9; xqMYY: return $custom_translation_grouped[$translate_content]; goto K3d8u; njsMH: $translate_final_content = transpicious_compile_translate($translate_content, $translate_to, $translate_from); goto ACqXl; zFkFR: return "\x4d\151\156\x64\40\x66\x6c\141\171\145\x72\40\x68\141\166\x65\x20\162\x65\164\165\x72\156\145\144"; goto CjvTa; Rqx49: if (!file_exists(TRANSPICIOUS_APP_PATH . "\57\56\56\x2f\143\165\x73\x74\157\x6d\x5f\164\x72\x61\156\x73\154\141\164\151\x6f\x6e\x73\57\x63\x74\x5f" . $translate_from . "\137" . $translate_to . "\x2e\152\163\x6f\x6e")) { goto txdEK; } goto PQNHk; mkf4L: SNbMY: goto sykS0; SOTOK: return $translate_log_json_encoded[hash("\x63\162\143\x33\x32", $translate_content)]; goto nmK6s; fj_UI: return $translate_content; goto nvbHh; iheR6: $translate_final_content = transpicious_compile_translate($translate_content, $translate_to, $translate_from); goto lEYPT; NDYZT: if (isset($translate_log_json_encoded[hash("\143\162\143\x33\x32", $translate_content)]) && !TRANSPICIOUS_get_from_live) { goto GRBzk; } goto iheR6; jH2cr: if (!($translate_to == $translate_from)) { goto rmDdb; } goto fj_UI; TmfYm: return $translate_final_content; goto WewG8; oyKKc: } public static function set_translate_to($translate_to) { setcookie("\x54\x52\101\116\x53\120\111\103\111\x4f\125\x53\x5f\x54\122\x41\x4e\123\x4c\101\124\x45\x5f\124\117", $translate_to, time() + 86400 * 30 * 30, "\x2f"); } public static function clear_cache() { rmdir(TRANSPICIOUS_APP_PATH . "\57\x63\x75\163\164\x6f\x6d\137\164\x72\x61\x6e\x73\x6c\141\x74\x69\157\156\x73\57"); } } function transpicious_compile_translate($translate_text, $translate_to, $translate_from) { goto Wj7nM; QsPV0: ZzcZG: goto rjwvb; gCFSn: vsZkD: goto XMbqF; XMbqF: goto P6OQe; goto Rhn1D; Wj7nM: $translated_content_final = transpicious_compile_convertor($translate_text, $translate_to, $translate_from); goto mF8PY; mF8PY: if ($translate_to == "\162\165") { goto bg6B0; } goto lnRua; ZBsU5: return iconv("\143\160\x31\x32\x35\61", "\125\124\x46\x2d\70", $translated_content_final); goto K9ygJ; AvW_D: if ($translate_to == "\x61\x72") { goto wwsoT; } goto gxll7; PQHSO: goto ZzcZG; goto IXzN4; bAVJR: goto oLh55; goto KOfSt; s4i1v: XJXIS: goto dYQ6W; MByMm: P6OQe: goto z51_8; YAARj: vN88J: goto bAVJR; KOfSt: bg6B0: goto ZBsU5; K9ygJ: oLh55: goto L29jk; z51_8: goto vN88J; goto s4i1v; cTDvA: iRyTO: goto ftOG3; gpZul: return iconv("\167\151\156\x64\x6f\x77\x73\x2d\x31\x32\x35\x36", "\x55\124\x46\x2d\x38", $translated_content_final); goto QsPV0; KF_tX: return iconv("\x77\151\156\144\157\x77\x73\x2d\61\62\65\66", "\x55\x54\106\55\x38", $translated_content_final); goto MByMm; gxll7: if ($translate_to == "\x75\162") { goto iRyTO; } goto uG2iP; uG2iP: if ($translate_to == "\x68\151") { goto YU74c; } goto ZNcIV; ZNcIV: return mb_convert_encoding($translated_content_final, "\125\x54\106\x2d\x38", mb_detect_encoding($translated_content_final, "\125\124\x46\x2d\x38\x2c\x20\x49\x53\117\x2d\70\x38\x35\71\55\x31", true)); goto PQHSO; lnRua: if ($translate_to == "\172\150") { goto XJXIS; } goto AvW_D; dYQ6W: return iconv("\x67\142\62\63\x31\x32", "\x55\x54\x46\55\x38", $translated_content_final); goto YAARj; ftOG3: return iconv("\x77\x69\x6e\144\157\x77\163\x2d\x31\x32\x35\66", "\x55\124\x46\x2d\70", $translated_content_final); goto gCFSn; Rhn1D: wwsoT: goto KF_tX; IXzN4: YU74c: goto gpZul; rjwvb: goto vsZkD; goto cTDvA; L29jk: }
?>