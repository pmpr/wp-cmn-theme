<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61eec5708a232             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Theme; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use WP_Query; class Search extends Container { const oegcekuecakougom = "\163\x5f\x70\164"; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\160\162\x65\x5f\147\145\x74\137\x70\x6f\x73\164\x73", [$this, "\x69\x65\x69\153\167\x75\x73\161\165\x77\141\167\171\x69\x75\145"], 0)->cecaguuoecmccuse("\147\x65\164\137\163\x65\x61\x72\143\150\137\146\x6f\x72\155", [$this, "\x71\143\163\151\x65\143\171\151\147\x65\x77\x73\161\141\x69\x73"], 10, 2); parent::kgquecmsgcouyaya(); } public function qcsiecyigewsqais($eaoumsseceiowgsk, $ywmkwiwkosakssii = []) { $nsmgceoqaqogqmuw = $this->yyoqecggyacaseko($ywmkwiwkosakssii); if (!$nsmgceoqaqogqmuw) { goto cgewcsueoyaeikgm; } $eaoumsseceiowgsk = $nsmgceoqaqogqmuw; cgewcsueoyaeikgm: return $eaoumsseceiowgsk; } public function yyoqecggyacaseko(array $ywmkwiwkosakssii = []) : string { $pkyyagewkiyckmwy = ManipulateArray::get($ywmkwiwkosakssii, self::uissasisiuymwsmu); $useksmwkuswkwcqg = ManipulateArray::get($ywmkwiwkosakssii, self::uouymeyqasaeckso, ''); if ($useksmwkuswkwcqg) { goto sukskmcwsoysiuqu; } $useksmwkuswkwcqg = $this->emoumkegmaskagaw(); sukskmcwsoysiuqu: $iwiewowoqmoekyqi = $pkyyagewkiyckmwy; if (is_array($useksmwkuswkwcqg)) { goto mqccmesakuemceqi; } if (!$useksmwkuswkwcqg) { goto igymseewwyiocoug; } $iwiewowoqmoekyqi = sprintf(__("\123\x65\141\162\x63\x68\40\151\156\x20\45\x73", PR__CMN__THEME), ManipulatePost::waaisqccqacqeium($useksmwkuswkwcqg)->label); igymseewwyiocoug: goto eyiamcekkgkiawqy; mqccmesakuemceqi: $useksmwkuswkwcqg = implode("\54", $useksmwkuswkwcqg); eyiamcekkgkiawqy: $ikgwqyuyckaewsow = [self::yayciqueeakqwese => Form::ymuegqgyuagyucws("\x73\145\x61\x72\x63\x68\x5f\151\x6e\160\x75\164")->usuqmwksoeaayaig("\163")->esakmaucmeoucami()->kyiucygqsgequoys($iwiewowoqmoekyqi)->iygyugseyaqwywyg(DecoratorQuery::siiwuwaswckkuoya())->igmaewykumgwoaoy("\141\x72\x69\x61\55\144\145\x73\x63\162\x69\142\x65\144\142\x79", "\163\x65\x61\162\143\x68\x5f\163\165\142\x6d\x69\164"), self::uouymeyqasaeckso => Form::cwiuiiakukcsaakw(self::oegcekuecakougom, $useksmwkuswkwcqg), self::iueeekcmggceyscu => Form::ucmasmuimegwqeuk("\163\x65\x61\x72\x63\150\137\x73\165\x62\155\151\x74", $iwiewowoqmoekyqi)->jyumyyugiwwiqomk(50)]; $ikgwqyuyckaewsow = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\x65\141\x72\143\x68\137\x66\x6f\162\155\137\x66\151\x65\x6c\x64\x73"), $ikgwqyuyckaewsow, $ywmkwiwkosakssii); $eaoumsseceiowgsk = Form::mmmemoswoaiewkes("\163\145\x61\x72\143\x68\x5f\146\157\x72\x6d")->ewweaossowcqywaw($ikgwqyuyckaewsow)->cukciuymuoaqgwic("\x47\105\124")->cwqickkaaokiquuo(ManipulateServer::gmigwwwmwemyaayy()); $eaoumsseceiowgsk = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\145\x61\x72\143\x68\x5f\146\x6f\x72\155\x5f\157\142\152\x65\x63\164"), $eaoumsseceiowgsk); return $eaoumsseceiowgsk->render(); } public function ieikwusquwawyiue($gqgemcmoicmgaqie) { if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query())) { goto kooskuwkuayiuose; } if (!($sqeykgyoooqysmca = $this->emoumkegmaskagaw())) { goto twkmiuomimomscew; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sqeykgyoooqysmca); twkmiuomimomscew: kooskuwkuayiuose: return $gqgemcmoicmgaqie; } public function emoumkegmaskagaw() { $qgiocsakoiaswkou = ManipulatePost::gueasuouwqysmomu(); $useksmwkuswkwcqg = ManipulateServer::yyqgamuwwakgciey(self::oegcekuecakougom); $useksmwkuswkwcqg = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x73\145\141\x72\x63\150\137\x70\157\163\x74\137\164\x79\160\x65"), $useksmwkuswkwcqg, $qgiocsakoiaswkou); if ($useksmwkuswkwcqg) { goto qwcegcuowwgiccos; } $useksmwkuswkwcqg = $qgiocsakoiaswkou; qwcegcuowwgiccos: if (!$useksmwkuswkwcqg) { goto qcessicwuikwqsis; } $useksmwkuswkwcqg = explode("\x2c", $useksmwkuswkwcqg); qcessicwuikwqsis: return $useksmwkuswkwcqg; } }
