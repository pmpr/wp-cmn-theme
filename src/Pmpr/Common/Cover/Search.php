<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             626988f5e0544             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use WP_Query; class Search extends Container { const oegcekuecakougom = "\x73\x5f\160\164"; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x70\162\145\x5f\147\145\164\137\x70\157\x73\164\x73", [$this, "\x69\145\151\153\x77\165\163\x71\x75\x77\141\167\x79\151\x75\145"], 0)->cecaguuoecmccuse("\147\x65\164\x5f\x73\x65\141\162\x63\x68\x5f\x66\x6f\x72\x6d", [$this, "\161\x63\x73\x69\145\143\171\151\147\x65\x77\x73\x71\x61\151\x73"], 10, 2); parent::kgquecmsgcouyaya(); } public function qcsiecyigewsqais($eaoumsseceiowgsk, $ywmkwiwkosakssii = []) { $nsmgceoqaqogqmuw = $this->yyoqecggyacaseko($ywmkwiwkosakssii); if (!$nsmgceoqaqogqmuw) { goto mqkmcysgoiaouiwm; } $eaoumsseceiowgsk = $nsmgceoqaqogqmuw; mqkmcysgoiaouiwm: return $eaoumsseceiowgsk; } public function yyoqecggyacaseko(array $ywmkwiwkosakssii = []) : string { $pkyyagewkiyckmwy = ManipulateArray::get($ywmkwiwkosakssii, self::uissasisiuymwsmu); $useksmwkuswkwcqg = ManipulateArray::get($ywmkwiwkosakssii, self::uouymeyqasaeckso, ''); if ($useksmwkuswkwcqg) { goto kosaqwikueyksqmw; } $useksmwkuswkwcqg = $this->emoumkegmaskagaw(); kosaqwikueyksqmw: $iwiewowoqmoekyqi = $pkyyagewkiyckmwy; if (is_array($useksmwkuswkwcqg)) { goto iikiiioqiyegyaak; } if (!$useksmwkuswkwcqg) { goto gicyayswqyuoekcq; } $iwiewowoqmoekyqi = sprintf(__("\x53\x65\141\x72\x63\x68\x20\151\x6e\40\x25\x73", PR__CMN__COVER), ManipulatePost::waaisqccqacqeium($useksmwkuswkwcqg)->label); gicyayswqyuoekcq: goto uiosisocuwokwkie; iikiiioqiyegyaak: $useksmwkuswkwcqg = implode("\x2c", $useksmwkuswkwcqg); uiosisocuwokwkie: $ikgwqyuyckaewsow = [self::yayciqueeakqwese => Form::ymuegqgyuagyucws("\x73\145\141\x72\143\x68\137\x69\x6e\160\165\x74")->usuqmwksoeaayaig("\163")->esakmaucmeoucami()->kyiucygqsgequoys($iwiewowoqmoekyqi)->iygyugseyaqwywyg(DecoratorQuery::siiwuwaswckkuoya())->igmaewykumgwoaoy("\141\162\151\141\55\x64\145\x73\143\162\x69\x62\145\x64\142\x79", "\x73\x65\141\x72\x63\150\137\x73\x75\x62\x6d\151\x74"), self::uouymeyqasaeckso => Form::cwiuiiakukcsaakw(self::oegcekuecakougom, $useksmwkuswkwcqg), self::iueeekcmggceyscu => Form::ucmasmuimegwqeuk("\x73\x65\141\162\143\x68\137\163\x75\x62\x6d\x69\x74", $iwiewowoqmoekyqi)->jyumyyugiwwiqomk(50)]; $ikgwqyuyckaewsow = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\145\x61\x72\x63\150\137\x66\157\162\155\137\146\x69\145\x6c\144\x73"), $ikgwqyuyckaewsow, $ywmkwiwkosakssii); $eaoumsseceiowgsk = Form::mmmemoswoaiewkes("\163\x65\141\162\143\150\137\146\157\x72\155")->ewweaossowcqywaw($ikgwqyuyckaewsow)->cukciuymuoaqgwic("\x47\x45\124")->cwqickkaaokiquuo(ManipulateServer::gmigwwwmwemyaayy()); $eaoumsseceiowgsk = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\145\141\x72\x63\150\137\146\157\162\155\x5f\157\142\x6a\145\143\x74"), $eaoumsseceiowgsk); return $eaoumsseceiowgsk->render(); } public function ieikwusquwawyiue($gqgemcmoicmgaqie) { if (!ManipulateQuery::eewqyocggsagyuis()) { goto gcckqucukawcasgk; } $sqeykgyoooqysmca = $this->emoumkegmaskagaw(); if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query())) { goto cuumeogeomowqisc; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sqeykgyoooqysmca); cuumeogeomowqisc: gcckqucukawcasgk: return $gqgemcmoicmgaqie; } public function emoumkegmaskagaw() { $qgiocsakoiaswkou = ManipulatePost::gueasuouwqysmomu(); $useksmwkuswkwcqg = ManipulateServer::yyqgamuwwakgciey(self::oegcekuecakougom); $useksmwkuswkwcqg = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x73\145\141\x72\x63\x68\137\x70\x6f\163\x74\137\164\x79\160\x65"), $useksmwkuswkwcqg, $qgiocsakoiaswkou); if ($useksmwkuswkwcqg) { goto qmkaeeomgkwggoyo; } $useksmwkuswkwcqg = $qgiocsakoiaswkou; qmkaeeomgkwggoyo: if (!is_array($useksmwkuswkwcqg)) { goto csammceowmqwaamq; } $useksmwkuswkwcqg = explode("\54", $useksmwkuswkwcqg); csammceowmqwaamq: return $useksmwkuswkwcqg; } }
