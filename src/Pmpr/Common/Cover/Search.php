<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64315acd704a7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use WP_Query; class Search extends Container { const oegcekuecakougom = "\163\x5f\x70\164"; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x70\162\145\137\x67\145\x74\x5f\160\x6f\163\x74\163", [$this, "\151\x65\x69\x6b\x77\165\163\161\x75\167\141\x77\x79\151\165\x65"], 0)->cecaguuoecmccuse("\147\145\164\x5f\x73\145\141\162\143\150\x5f\146\157\x72\x6d", [$this, "\161\x63\163\151\x65\143\x79\151\x67\145\167\163\161\x61\x69\163"], 10, 2); parent::kgquecmsgcouyaya(); } public function qcsiecyigewsqais($eaoumsseceiowgsk, $ywmkwiwkosakssii = []) { $nsmgceoqaqogqmuw = $this->yyoqecggyacaseko($ywmkwiwkosakssii); if (!$nsmgceoqaqogqmuw) { goto wwukgaquuyoissgy; } $eaoumsseceiowgsk = $nsmgceoqaqogqmuw; wwukgaquuyoissgy: return $eaoumsseceiowgsk; } public function yyoqecggyacaseko(array $ywmkwiwkosakssii = []) : string { $pkyyagewkiyckmwy = ManipulateArray::get($ywmkwiwkosakssii, self::uissasisiuymwsmu); $useksmwkuswkwcqg = ManipulateArray::get($ywmkwiwkosakssii, self::uouymeyqasaeckso, ''); if ($useksmwkuswkwcqg) { goto gsygwgsiawgmqiyi; } $useksmwkuswkwcqg = $this->emoumkegmaskagaw(); gsygwgsiawgmqiyi: $iwiewowoqmoekyqi = $pkyyagewkiyckmwy; if (is_array($useksmwkuswkwcqg)) { goto yqagomygmeoecwey; } if (!$useksmwkuswkwcqg) { goto qsgqwyqaqiowkmco; } $iwiewowoqmoekyqi = sprintf(__("\123\145\141\x72\x63\x68\x20\x69\156\40\x25\163", PR__CMN__COVER), ManipulatePost::waaisqccqacqeium($useksmwkuswkwcqg)->label); qsgqwyqaqiowkmco: goto qikaewekoecykeou; yqagomygmeoecwey: $useksmwkuswkwcqg = implode("\54", $useksmwkuswkwcqg); qikaewekoecykeou: $ikgwqyuyckaewsow = [self::yayciqueeakqwese => Form::ymuegqgyuagyucws("\x73\x65\141\x72\143\x68\137\x69\x6e\160\165\164")->usuqmwksoeaayaig("\x73")->esakmaucmeoucami()->kyiucygqsgequoys($iwiewowoqmoekyqi)->iygyugseyaqwywyg(DecoratorQuery::siiwuwaswckkuoya())->igmaewykumgwoaoy("\141\162\x69\x61\55\144\145\x73\x63\x72\151\x62\x65\144\142\171", "\x73\145\141\x72\x63\150\x5f\x73\165\x62\155\151\x74"), self::uouymeyqasaeckso => Form::cwiuiiakukcsaakw(self::oegcekuecakougom, $useksmwkuswkwcqg), self::iueeekcmggceyscu => Form::ucmasmuimegwqeuk("\163\145\141\162\x63\x68\137\163\x75\142\x6d\x69\x74", $iwiewowoqmoekyqi)->jyumyyugiwwiqomk(50)]; $ikgwqyuyckaewsow = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x73\145\141\162\x63\150\x5f\x66\x6f\162\x6d\137\146\x69\x65\x6c\144\163"), $ikgwqyuyckaewsow, $ywmkwiwkosakssii); $eaoumsseceiowgsk = Form::mmmemoswoaiewkes("\x73\x65\x61\162\143\x68\137\x66\x6f\x72\155")->ewweaossowcqywaw($ikgwqyuyckaewsow)->cukciuymuoaqgwic("\107\105\124")->cwqickkaaokiquuo(ManipulateServer::gmigwwwmwemyaayy()); $eaoumsseceiowgsk = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\x65\141\x72\143\150\137\x66\x6f\162\155\137\x6f\142\152\145\143\164"), $eaoumsseceiowgsk); return $eaoumsseceiowgsk->render(); } public function ieikwusquwawyiue($gqgemcmoicmgaqie) { if (!ManipulateQuery::eewqyocggsagyuis()) { goto usymasgsyqgsuocg; } $sqeykgyoooqysmca = $this->emoumkegmaskagaw(); if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query())) { goto eucqomyqykgoiuge; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sqeykgyoooqysmca); eucqomyqykgoiuge: usymasgsyqgsuocg: return $gqgemcmoicmgaqie; } public function emoumkegmaskagaw() { $qgiocsakoiaswkou = ManipulatePost::gueasuouwqysmomu(); $useksmwkuswkwcqg = ManipulateServer::yyqgamuwwakgciey(self::oegcekuecakougom); $useksmwkuswkwcqg = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x73\x65\141\x72\143\x68\x5f\x70\157\x73\164\137\x74\171\160\x65"), $useksmwkuswkwcqg, $qgiocsakoiaswkou); if ($useksmwkuswkwcqg) { goto aiccyaswigkaycqk; } $useksmwkuswkwcqg = $qgiocsakoiaswkou; aiccyaswigkaycqk: if (!is_array($useksmwkuswkwcqg)) { goto sqyokemumceysegy; } $useksmwkuswkwcqg = explode("\x2c", $useksmwkuswkwcqg); sqyokemumceysegy: return $useksmwkuswkwcqg; } }
