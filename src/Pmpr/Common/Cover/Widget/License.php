<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678038baa18e0             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Widget; use Pmpr\Common\Cover\Setting\Setting; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Widget; class License extends Widget { public function __construct() { parent::__construct(__("\x4c\x69\x63\145\156\x73\x65", PR__CMN__COVER), __("\104\x69\163\x70\x6c\x61\x79\x20\164\x68\x65\40\154\151\143\145\156\163\x65\x73\40\157\146\x20\171\x6f\x75\162\40\163\151\x74\145\x2e", PR__CMN__COVER)); } public function ykwqaukkycogooii() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::ackcaikowcokggsc)->gswweykyogmsyawy(__("\111\156\143\x6c\x75\144\x65", PR__CMN__COVER))->gucwmccyimoagwcm(__("\x4c\145\141\166\145\x20\x65\x6d\160\164\171\x20\151\146\x20\171\157\x75\40\x77\x61\x6e\x74\40\x74\157\40\x73\150\x6f\x77\x20\x61\154\x6c\40\x69\x74\145\x6d\x73", PR__CMN__COVER))->acauweqyyugwisqc($this->siggceeeowgkoaam([Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]))->oikgogcweiiaocka()); } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { $ooiewiwkegguusum = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($owgumcsyqsamiemg, Constants::ackcaikowcokggsc, []); $qookweymeqawmcwo = []; if ($oammesyieqmwuwyi = $this->siggceeeowgkoaam([Constants::ackcaikowcokggsc => $ooiewiwkegguusum])) { $qookweymeqawmcwo = [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi]; } return $qookweymeqawmcwo; } public function siggceeeowgkoaam(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym, Constants::wkweqssoakmmmguq => [Constants::qescuiwgsyuikume, Constants::ascagqcquwgmygkm]]); $rsywwkgoeeiscsik = $this->weysguygiseoukqw(Setting::mgieaomemyywoqwa, [], $ywmkwiwkosakssii); if ($rsywwkgoeeiscsik && is_array($rsywwkgoeeiscsik) && Constants::ckmqoekmugkggeym === $ywmkwiwkosakssii[Constants::aisguagukaewucii]) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); foreach ($rsywwkgoeeiscsik as $momcykaoccoymeig => $caicqiiuwsyaeeko) { $qgciuiagkkguykgs = $caicqiiuwsyaeeko[Constants::kkeogqiyysoyuemk] ?? Constants::kicoscymgmgqeqgy; switch ($qgciuiagkkguykgs) { case Constants::kicoscymgmgqeqgy: $gskuwmeemyeuwogc = stripcslashes($caicqiiuwsyaeeko[Constants::kicoscymgmgqeqgy] ?? ''); if ($gskuwmeemyeuwogc) { if ($smuykqsageuocuos->has($gskuwmeemyeuwogc, "\x69\155\147")) { $oiegiwogmwmawkeo = $caicqiiuwsyaeeko[Constants::qmeuakmyaucgeyeu] ?? ''; $mcqieaigyeeyaksm = $caicqiiuwsyaeeko[Setting::eeewoeyqoigcuuyg] ?? ''; $siquossayskcwkea = []; $qeswwaqqsyymqawg = $caicqiiuwsyaeeko[Constants::qomookamaskuoswk] ?? 0; $cswemwoyesycwkuq = $caicqiiuwsyaeeko[Constants::sogmkkcwuamuqegw] ?? 0; if ($mcqieaigyeeyaksm) { if ($oiegiwogmwmawkeo) { $icwicymcioeyeyek = $eaeiswmwiqewicoc->uikkssqcoewckces($mcqieaigyeeyaksm, $oiegiwogmwmawkeo); $ogomymegcoacqisg = $icwicymcioeyeyek[0] ?? ''; $qeswwaqqsyymqawg = $icwicymcioeyeyek[1] ?? 80; $cswemwoyesycwkuq = $icwicymcioeyeyek[2] ?? 80; } else { $ogomymegcoacqisg = $eaeiswmwiqewicoc->mgaeeqsgeoukeokc($mcqieaigyeeyaksm); } $siquossayskcwkea["\163\143\x72"] = $ogomymegcoacqisg; } else { if ($oiegiwogmwmawkeo) { $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->qucaqeskcaoqgkso($oiegiwogmwmawkeo); if ($icwicymcioeyeyek) { $qeswwaqqsyymqawg = $icwicymcioeyeyek[1] ?? 80; $cswemwoyesycwkuq = $icwicymcioeyeyek[2] ?? 80; } } } if ($qeswwaqqsyymqawg && $cswemwoyesycwkuq) { $siquossayskcwkea[Constants::qomookamaskuoswk] = $qeswwaqqsyymqawg; $siquossayskcwkea[Constants::sogmkkcwuamuqegw] = $cswemwoyesycwkuq; } if ($siquossayskcwkea = array_filter($siquossayskcwkea)) { $gskuwmeemyeuwogc = $smuykqsageuocuos->qcgocuceocquqcuw($gskuwmeemyeuwogc, ["\151\x6d\x67" => $siquossayskcwkea]); } } $rsywwkgoeeiscsik[$momcykaoccoymeig][Constants::kicoscymgmgqeqgy] = html_entity_decode($gskuwmeemyeuwogc); } break; case Constants::ogigqueukwysusii: if (!empty($caicqiiuwsyaeeko[Constants::qmeuakmyaucgeyeu])) { $rsywwkgoeeiscsik[$momcykaoccoymeig][Constants::qmeuakmyaucgeyeu] = [$caicqiiuwsyaeeko[Constants::qomookamaskuoswk] ?? 80, $caicqiiuwsyaeeko[Constants::sogmkkcwuamuqegw] ?? 80]; } break; } } } return $rsywwkgoeeiscsik; } }
