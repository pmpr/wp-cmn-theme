<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61efa852b5220             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Theme; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use WP_Query; class Search extends Container { const oegcekuecakougom = "\x73\x5f\160\x74"; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\160\162\145\x5f\147\x65\164\137\160\x6f\163\x74\163", [$this, "\151\145\x69\153\x77\165\x73\x71\165\x77\141\x77\x79\151\165\x65"], 0)->cecaguuoecmccuse("\147\x65\x74\x5f\163\145\x61\162\143\x68\137\x66\157\162\x6d", [$this, "\x71\x63\x73\151\x65\143\x79\x69\147\145\x77\163\161\x61\x69\163"], 10, 2); parent::kgquecmsgcouyaya(); } public function qcsiecyigewsqais($eaoumsseceiowgsk, $ywmkwiwkosakssii = []) { $nsmgceoqaqogqmuw = $this->yyoqecggyacaseko($ywmkwiwkosakssii); if (!$nsmgceoqaqogqmuw) { goto cgewcsueoyaeikgm; } $eaoumsseceiowgsk = $nsmgceoqaqogqmuw; cgewcsueoyaeikgm: return $eaoumsseceiowgsk; } public function yyoqecggyacaseko(array $ywmkwiwkosakssii = []) : string { $pkyyagewkiyckmwy = ManipulateArray::get($ywmkwiwkosakssii, self::uissasisiuymwsmu); $useksmwkuswkwcqg = ManipulateArray::get($ywmkwiwkosakssii, self::uouymeyqasaeckso, ''); if ($useksmwkuswkwcqg) { goto sukskmcwsoysiuqu; } $useksmwkuswkwcqg = $this->emoumkegmaskagaw(); sukskmcwsoysiuqu: $iwiewowoqmoekyqi = $pkyyagewkiyckmwy; if (is_array($useksmwkuswkwcqg)) { goto mqccmesakuemceqi; } if (!$useksmwkuswkwcqg) { goto igymseewwyiocoug; } $iwiewowoqmoekyqi = sprintf(__("\123\145\141\x72\143\150\40\x69\x6e\40\45\x73", PR__CMN__THEME), ManipulatePost::waaisqccqacqeium($useksmwkuswkwcqg)->label); igymseewwyiocoug: goto eyiamcekkgkiawqy; mqccmesakuemceqi: $useksmwkuswkwcqg = implode("\x2c", $useksmwkuswkwcqg); eyiamcekkgkiawqy: $ikgwqyuyckaewsow = [self::yayciqueeakqwese => Form::ymuegqgyuagyucws("\x73\x65\x61\162\143\x68\137\151\156\160\165\164")->usuqmwksoeaayaig("\163")->esakmaucmeoucami()->kyiucygqsgequoys($iwiewowoqmoekyqi)->iygyugseyaqwywyg(DecoratorQuery::siiwuwaswckkuoya())->igmaewykumgwoaoy("\x61\x72\x69\141\55\x64\145\163\143\162\151\142\x65\144\x62\171", "\x73\x65\x61\x72\x63\150\x5f\163\165\142\155\x69\x74"), self::uouymeyqasaeckso => Form::cwiuiiakukcsaakw(self::oegcekuecakougom, $useksmwkuswkwcqg), self::iueeekcmggceyscu => Form::ucmasmuimegwqeuk("\x73\x65\141\162\143\150\x5f\x73\x75\142\x6d\x69\x74", $iwiewowoqmoekyqi)->jyumyyugiwwiqomk(50)]; $ikgwqyuyckaewsow = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x73\x65\x61\x72\143\150\137\x66\157\162\155\137\146\x69\145\x6c\144\x73"), $ikgwqyuyckaewsow, $ywmkwiwkosakssii); $eaoumsseceiowgsk = Form::mmmemoswoaiewkes("\x73\145\141\162\x63\x68\x5f\146\x6f\162\155")->ewweaossowcqywaw($ikgwqyuyckaewsow)->cukciuymuoaqgwic("\107\105\x54")->cwqickkaaokiquuo(ManipulateServer::gmigwwwmwemyaayy()); $eaoumsseceiowgsk = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\145\141\162\143\150\137\146\x6f\x72\155\137\x6f\142\152\x65\143\164"), $eaoumsseceiowgsk); return $eaoumsseceiowgsk->render(); } public function ieikwusquwawyiue($gqgemcmoicmgaqie) { if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query())) { goto kooskuwkuayiuose; } if (!($sqeykgyoooqysmca = $this->emoumkegmaskagaw())) { goto twkmiuomimomscew; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sqeykgyoooqysmca); twkmiuomimomscew: kooskuwkuayiuose: return $gqgemcmoicmgaqie; } public function emoumkegmaskagaw() { $qgiocsakoiaswkou = ManipulatePost::gueasuouwqysmomu(); $useksmwkuswkwcqg = ManipulateServer::yyqgamuwwakgciey(self::oegcekuecakougom); $useksmwkuswkwcqg = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x73\x65\x61\162\x63\150\137\x70\157\163\x74\137\164\171\160\145"), $useksmwkuswkwcqg, $qgiocsakoiaswkou); if ($useksmwkuswkwcqg) { goto qwcegcuowwgiccos; } $useksmwkuswkwcqg = $qgiocsakoiaswkou; qwcegcuowwgiccos: if (!$useksmwkuswkwcqg) { goto qcessicwuikwqsis; } $useksmwkuswkwcqg = explode("\x2c", $useksmwkuswkwcqg); qcessicwuikwqsis: return $useksmwkuswkwcqg; } }
