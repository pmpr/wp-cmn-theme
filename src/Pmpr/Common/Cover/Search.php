<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             634d8236d2b29             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use WP_Query; class Search extends Container { const oegcekuecakougom = "\163\x5f\160\164"; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\160\x72\x65\x5f\147\145\x74\x5f\160\x6f\x73\x74\163", [$this, "\151\x65\151\153\x77\x75\x73\161\165\167\141\x77\171\151\x75\x65"], 0)->cecaguuoecmccuse("\x67\x65\164\x5f\163\145\x61\162\x63\150\137\146\157\162\x6d", [$this, "\x71\143\x73\x69\x65\x63\171\x69\x67\145\x77\163\161\141\151\163"], 10, 2); parent::kgquecmsgcouyaya(); } public function qcsiecyigewsqais($eaoumsseceiowgsk, $ywmkwiwkosakssii = []) { $nsmgceoqaqogqmuw = $this->yyoqecggyacaseko($ywmkwiwkosakssii); if (!$nsmgceoqaqogqmuw) { goto csscmcacoikwsecs; } $eaoumsseceiowgsk = $nsmgceoqaqogqmuw; csscmcacoikwsecs: return $eaoumsseceiowgsk; } public function yyoqecggyacaseko(array $ywmkwiwkosakssii = []) : string { $pkyyagewkiyckmwy = ManipulateArray::get($ywmkwiwkosakssii, self::uissasisiuymwsmu); $useksmwkuswkwcqg = ManipulateArray::get($ywmkwiwkosakssii, self::uouymeyqasaeckso, ''); if ($useksmwkuswkwcqg) { goto cuykwgmswkskqkyi; } $useksmwkuswkwcqg = $this->emoumkegmaskagaw(); cuykwgmswkskqkyi: $iwiewowoqmoekyqi = $pkyyagewkiyckmwy; if (is_array($useksmwkuswkwcqg)) { goto mkwskuycuyguqqok; } if (!$useksmwkuswkwcqg) { goto kuicqywysciceggs; } $iwiewowoqmoekyqi = sprintf(__("\123\x65\141\162\143\x68\x20\x69\x6e\40\45\x73", PR__CMN__COVER), ManipulatePost::waaisqccqacqeium($useksmwkuswkwcqg)->label); kuicqywysciceggs: goto sciwggaeogcoesiu; mkwskuycuyguqqok: $useksmwkuswkwcqg = implode("\54", $useksmwkuswkwcqg); sciwggaeogcoesiu: $ikgwqyuyckaewsow = [self::yayciqueeakqwese => Form::ymuegqgyuagyucws("\163\145\x61\162\143\150\137\x69\156\160\165\164")->usuqmwksoeaayaig("\163")->esakmaucmeoucami()->kyiucygqsgequoys($iwiewowoqmoekyqi)->iygyugseyaqwywyg(DecoratorQuery::siiwuwaswckkuoya())->igmaewykumgwoaoy("\x61\x72\151\x61\55\144\145\163\x63\162\x69\142\x65\x64\x62\171", "\163\x65\141\x72\x63\150\x5f\163\x75\142\x6d\151\x74"), self::uouymeyqasaeckso => Form::cwiuiiakukcsaakw(self::oegcekuecakougom, $useksmwkuswkwcqg), self::iueeekcmggceyscu => Form::ucmasmuimegwqeuk("\163\x65\x61\x72\x63\x68\137\163\165\x62\x6d\x69\164", $iwiewowoqmoekyqi)->jyumyyugiwwiqomk(50)]; $ikgwqyuyckaewsow = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x73\x65\x61\x72\x63\150\x5f\146\157\x72\x6d\x5f\x66\x69\x65\154\144\163"), $ikgwqyuyckaewsow, $ywmkwiwkosakssii); $eaoumsseceiowgsk = Form::mmmemoswoaiewkes("\x73\145\x61\162\x63\150\x5f\x66\157\162\155")->ewweaossowcqywaw($ikgwqyuyckaewsow)->cukciuymuoaqgwic("\107\x45\x54")->cwqickkaaokiquuo(ManipulateServer::gmigwwwmwemyaayy()); $eaoumsseceiowgsk = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\x65\141\162\x63\150\137\x66\x6f\x72\x6d\x5f\x6f\x62\152\145\x63\x74"), $eaoumsseceiowgsk); return $eaoumsseceiowgsk->render(); } public function ieikwusquwawyiue($gqgemcmoicmgaqie) { if (!ManipulateQuery::eewqyocggsagyuis()) { goto kwagwqyusyiyoaqs; } $sqeykgyoooqysmca = $this->emoumkegmaskagaw(); if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query())) { goto eqkauqciwewmgeoi; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sqeykgyoooqysmca); eqkauqciwewmgeoi: kwagwqyusyiyoaqs: return $gqgemcmoicmgaqie; } public function emoumkegmaskagaw() { $qgiocsakoiaswkou = ManipulatePost::gueasuouwqysmomu(); $useksmwkuswkwcqg = ManipulateServer::yyqgamuwwakgciey(self::oegcekuecakougom); $useksmwkuswkwcqg = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x73\145\141\162\x63\x68\137\x70\x6f\163\164\137\x74\171\160\145"), $useksmwkuswkwcqg, $qgiocsakoiaswkou); if ($useksmwkuswkwcqg) { goto yowsmsiyimmimemc; } $useksmwkuswkwcqg = $qgiocsakoiaswkou; yowsmsiyimmimemc: if (!is_array($useksmwkuswkwcqg)) { goto kiqogmwcgcamwiig; } $useksmwkuswkwcqg = explode("\54", $useksmwkuswkwcqg); kiqogmwcgcamwiig: return $useksmwkuswkwcqg; } }
