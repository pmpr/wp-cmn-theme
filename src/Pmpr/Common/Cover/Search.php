<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63272c633418e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use WP_Query; class Search extends Container { const oegcekuecakougom = "\x73\x5f\x70\164"; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\160\x72\x65\137\147\145\164\137\160\x6f\x73\164\163", [$this, "\151\x65\x69\x6b\167\x75\x73\161\165\167\141\167\171\151\165\x65"], 0)->cecaguuoecmccuse("\x67\145\164\x5f\163\145\141\162\143\150\x5f\x66\x6f\162\155", [$this, "\x71\x63\x73\x69\145\143\171\151\x67\x65\167\x73\161\x61\x69\x73"], 10, 2); parent::kgquecmsgcouyaya(); } public function qcsiecyigewsqais($eaoumsseceiowgsk, $ywmkwiwkosakssii = []) { $nsmgceoqaqogqmuw = $this->yyoqecggyacaseko($ywmkwiwkosakssii); if (!$nsmgceoqaqogqmuw) { goto suswcqoyyqkkquuo; } $eaoumsseceiowgsk = $nsmgceoqaqogqmuw; suswcqoyyqkkquuo: return $eaoumsseceiowgsk; } public function yyoqecggyacaseko(array $ywmkwiwkosakssii = []) : string { $pkyyagewkiyckmwy = ManipulateArray::get($ywmkwiwkosakssii, self::uissasisiuymwsmu); $useksmwkuswkwcqg = ManipulateArray::get($ywmkwiwkosakssii, self::uouymeyqasaeckso, ''); if ($useksmwkuswkwcqg) { goto eeqesooyqagwawae; } $useksmwkuswkwcqg = $this->emoumkegmaskagaw(); eeqesooyqagwawae: $iwiewowoqmoekyqi = $pkyyagewkiyckmwy; if (is_array($useksmwkuswkwcqg)) { goto foeeqckqsyockkak; } if (!$useksmwkuswkwcqg) { goto oqugqwcyomiaaoqu; } $iwiewowoqmoekyqi = sprintf(__("\123\x65\141\x72\143\150\40\151\x6e\x20\x25\x73", PR__CMN__COVER), ManipulatePost::waaisqccqacqeium($useksmwkuswkwcqg)->label); oqugqwcyomiaaoqu: goto iekumemscwieugqw; foeeqckqsyockkak: $useksmwkuswkwcqg = implode("\54", $useksmwkuswkwcqg); iekumemscwieugqw: $ikgwqyuyckaewsow = [self::yayciqueeakqwese => Form::ymuegqgyuagyucws("\163\x65\x61\162\x63\150\x5f\151\x6e\x70\x75\x74")->usuqmwksoeaayaig("\x73")->esakmaucmeoucami()->kyiucygqsgequoys($iwiewowoqmoekyqi)->iygyugseyaqwywyg(DecoratorQuery::siiwuwaswckkuoya())->igmaewykumgwoaoy("\x61\162\x69\x61\x2d\x64\x65\163\143\162\151\x62\145\144\142\x79", "\x73\145\x61\162\x63\150\137\x73\165\142\155\151\164"), self::uouymeyqasaeckso => Form::cwiuiiakukcsaakw(self::oegcekuecakougom, $useksmwkuswkwcqg), self::iueeekcmggceyscu => Form::ucmasmuimegwqeuk("\x73\x65\x61\x72\143\x68\137\163\x75\x62\x6d\x69\164", $iwiewowoqmoekyqi)->jyumyyugiwwiqomk(50)]; $ikgwqyuyckaewsow = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\x65\141\x72\x63\150\x5f\146\x6f\162\155\x5f\x66\x69\x65\x6c\x64\x73"), $ikgwqyuyckaewsow, $ywmkwiwkosakssii); $eaoumsseceiowgsk = Form::mmmemoswoaiewkes("\163\x65\x61\x72\x63\x68\137\146\157\x72\x6d")->ewweaossowcqywaw($ikgwqyuyckaewsow)->cukciuymuoaqgwic("\107\105\124")->cwqickkaaokiquuo(ManipulateServer::gmigwwwmwemyaayy()); $eaoumsseceiowgsk = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\145\141\162\x63\x68\x5f\x66\157\x72\155\137\157\142\152\x65\x63\164"), $eaoumsseceiowgsk); return $eaoumsseceiowgsk->render(); } public function ieikwusquwawyiue($gqgemcmoicmgaqie) { if (!ManipulateQuery::eewqyocggsagyuis()) { goto kymkucucyeoeikim; } $sqeykgyoooqysmca = $this->emoumkegmaskagaw(); if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query())) { goto hoeeyiowekaeemko; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sqeykgyoooqysmca); hoeeyiowekaeemko: kymkucucyeoeikim: return $gqgemcmoicmgaqie; } public function emoumkegmaskagaw() { $qgiocsakoiaswkou = ManipulatePost::gueasuouwqysmomu(); $useksmwkuswkwcqg = ManipulateServer::yyqgamuwwakgciey(self::oegcekuecakougom); $useksmwkuswkwcqg = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\145\x61\162\143\x68\x5f\160\157\x73\x74\137\x74\x79\x70\x65"), $useksmwkuswkwcqg, $qgiocsakoiaswkou); if ($useksmwkuswkwcqg) { goto usquiuuyiyqaeyiu; } $useksmwkuswkwcqg = $qgiocsakoiaswkou; usquiuuyiyqaeyiu: if (!is_array($useksmwkuswkwcqg)) { goto qicwaskssogcokgm; } $useksmwkuswkwcqg = explode("\x2c", $useksmwkuswkwcqg); qicwaskssogcokgm: return $useksmwkuswkwcqg; } }
