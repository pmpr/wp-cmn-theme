<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63920d77c1226             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use WP_Query; class Search extends Container { const oegcekuecakougom = "\x73\x5f\160\164"; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x70\x72\x65\x5f\147\x65\164\137\160\x6f\x73\164\163", [$this, "\151\x65\151\x6b\167\165\x73\x71\165\167\141\x77\171\x69\165\145"], 0)->cecaguuoecmccuse("\147\145\164\137\x73\145\x61\x72\x63\x68\137\x66\x6f\162\x6d", [$this, "\161\143\x73\x69\x65\143\x79\x69\147\145\167\x73\x71\x61\151\x73"], 10, 2); parent::kgquecmsgcouyaya(); } public function qcsiecyigewsqais($eaoumsseceiowgsk, $ywmkwiwkosakssii = []) { $nsmgceoqaqogqmuw = $this->yyoqecggyacaseko($ywmkwiwkosakssii); if (!$nsmgceoqaqogqmuw) { goto qcssigmcayuyweiy; } $eaoumsseceiowgsk = $nsmgceoqaqogqmuw; qcssigmcayuyweiy: return $eaoumsseceiowgsk; } public function yyoqecggyacaseko(array $ywmkwiwkosakssii = []) : string { $pkyyagewkiyckmwy = ManipulateArray::get($ywmkwiwkosakssii, self::uissasisiuymwsmu); $useksmwkuswkwcqg = ManipulateArray::get($ywmkwiwkosakssii, self::uouymeyqasaeckso, ''); if ($useksmwkuswkwcqg) { goto iymaiwqimisgacmk; } $useksmwkuswkwcqg = $this->emoumkegmaskagaw(); iymaiwqimisgacmk: $iwiewowoqmoekyqi = $pkyyagewkiyckmwy; if (is_array($useksmwkuswkwcqg)) { goto qyyyycwaookqaoke; } if (!$useksmwkuswkwcqg) { goto mugscgugcogcasue; } $iwiewowoqmoekyqi = sprintf(__("\x53\145\x61\x72\x63\150\40\x69\x6e\x20\x25\163", PR__CMN__COVER), ManipulatePost::waaisqccqacqeium($useksmwkuswkwcqg)->label); mugscgugcogcasue: goto ssywsaaqqaucesau; qyyyycwaookqaoke: $useksmwkuswkwcqg = implode("\x2c", $useksmwkuswkwcqg); ssywsaaqqaucesau: $ikgwqyuyckaewsow = [self::yayciqueeakqwese => Form::ymuegqgyuagyucws("\x73\x65\x61\x72\x63\x68\x5f\151\x6e\160\165\164")->usuqmwksoeaayaig("\163")->esakmaucmeoucami()->kyiucygqsgequoys($iwiewowoqmoekyqi)->iygyugseyaqwywyg(DecoratorQuery::siiwuwaswckkuoya())->igmaewykumgwoaoy("\141\162\151\141\x2d\144\x65\x73\x63\x72\151\x62\x65\x64\142\171", "\163\x65\x61\162\143\150\x5f\163\x75\x62\x6d\151\x74"), self::uouymeyqasaeckso => Form::cwiuiiakukcsaakw(self::oegcekuecakougom, $useksmwkuswkwcqg), self::iueeekcmggceyscu => Form::ucmasmuimegwqeuk("\163\145\141\162\143\x68\x5f\163\x75\142\x6d\151\164", $iwiewowoqmoekyqi)->jyumyyugiwwiqomk(50)]; $ikgwqyuyckaewsow = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\x65\x61\162\x63\x68\x5f\x66\157\x72\155\137\x66\x69\145\x6c\x64\163"), $ikgwqyuyckaewsow, $ywmkwiwkosakssii); $eaoumsseceiowgsk = Form::mmmemoswoaiewkes("\x73\x65\141\162\x63\150\x5f\146\x6f\x72\155")->ewweaossowcqywaw($ikgwqyuyckaewsow)->cukciuymuoaqgwic("\x47\x45\124")->cwqickkaaokiquuo(ManipulateServer::gmigwwwmwemyaayy()); $eaoumsseceiowgsk = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x73\145\x61\x72\x63\x68\x5f\x66\x6f\162\155\x5f\157\x62\152\x65\x63\164"), $eaoumsseceiowgsk); return $eaoumsseceiowgsk->render(); } public function ieikwusquwawyiue($gqgemcmoicmgaqie) { if (!ManipulateQuery::eewqyocggsagyuis()) { goto ysiqakyaiooyscwy; } $sqeykgyoooqysmca = $this->emoumkegmaskagaw(); if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query())) { goto ygcgoaokauigwuus; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sqeykgyoooqysmca); ygcgoaokauigwuus: ysiqakyaiooyscwy: return $gqgemcmoicmgaqie; } public function emoumkegmaskagaw() { $qgiocsakoiaswkou = ManipulatePost::gueasuouwqysmomu(); $useksmwkuswkwcqg = ManipulateServer::yyqgamuwwakgciey(self::oegcekuecakougom); $useksmwkuswkwcqg = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\x65\x61\162\143\150\x5f\160\x6f\163\164\137\x74\x79\160\145"), $useksmwkuswkwcqg, $qgiocsakoiaswkou); if ($useksmwkuswkwcqg) { goto auumaoycmsmsgigs; } $useksmwkuswkwcqg = $qgiocsakoiaswkou; auumaoycmsmsgigs: if (!is_array($useksmwkuswkwcqg)) { goto ousmyagwsiooumos; } $useksmwkuswkwcqg = explode("\54", $useksmwkuswkwcqg); ousmyagwsiooumos: return $useksmwkuswkwcqg; } }
