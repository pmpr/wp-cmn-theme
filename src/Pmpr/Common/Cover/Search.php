<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63d8301100b18             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use WP_Query; class Search extends Container { const oegcekuecakougom = "\163\x5f\160\x74"; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x70\x72\145\x5f\x67\145\x74\x5f\160\x6f\x73\164\163", [$this, "\151\145\x69\x6b\x77\x75\x73\x71\165\167\x61\x77\171\151\x75\x65"], 0)->cecaguuoecmccuse("\x67\x65\164\x5f\x73\145\141\x72\x63\x68\x5f\146\x6f\x72\x6d", [$this, "\x71\143\x73\151\145\x63\x79\151\x67\x65\x77\x73\161\x61\x69\x73"], 10, 2); parent::kgquecmsgcouyaya(); } public function qcsiecyigewsqais($eaoumsseceiowgsk, $ywmkwiwkosakssii = []) { $nsmgceoqaqogqmuw = $this->yyoqecggyacaseko($ywmkwiwkosakssii); if (!$nsmgceoqaqogqmuw) { goto mkgmaguyswskyioa; } $eaoumsseceiowgsk = $nsmgceoqaqogqmuw; mkgmaguyswskyioa: return $eaoumsseceiowgsk; } public function yyoqecggyacaseko(array $ywmkwiwkosakssii = []) : string { $pkyyagewkiyckmwy = ManipulateArray::get($ywmkwiwkosakssii, self::uissasisiuymwsmu); $useksmwkuswkwcqg = ManipulateArray::get($ywmkwiwkosakssii, self::uouymeyqasaeckso, ''); if ($useksmwkuswkwcqg) { goto skwusmoyomgqkimm; } $useksmwkuswkwcqg = $this->emoumkegmaskagaw(); skwusmoyomgqkimm: $iwiewowoqmoekyqi = $pkyyagewkiyckmwy; if (is_array($useksmwkuswkwcqg)) { goto gicuuwuuuwumyooa; } if (!$useksmwkuswkwcqg) { goto usyckeewsgwaysam; } $iwiewowoqmoekyqi = sprintf(__("\123\x65\x61\x72\143\150\40\x69\156\40\45\x73", PR__CMN__COVER), ManipulatePost::waaisqccqacqeium($useksmwkuswkwcqg)->label); usyckeewsgwaysam: goto kakkuyeccaacewyo; gicuuwuuuwumyooa: $useksmwkuswkwcqg = implode("\x2c", $useksmwkuswkwcqg); kakkuyeccaacewyo: $ikgwqyuyckaewsow = [self::yayciqueeakqwese => Form::ymuegqgyuagyucws("\163\145\x61\x72\x63\150\x5f\151\x6e\x70\165\164")->usuqmwksoeaayaig("\x73")->esakmaucmeoucami()->kyiucygqsgequoys($iwiewowoqmoekyqi)->iygyugseyaqwywyg(DecoratorQuery::siiwuwaswckkuoya())->igmaewykumgwoaoy("\x61\x72\x69\141\55\144\145\163\x63\162\151\x62\x65\x64\142\x79", "\x73\145\x61\162\143\x68\x5f\163\165\142\155\x69\164"), self::uouymeyqasaeckso => Form::cwiuiiakukcsaakw(self::oegcekuecakougom, $useksmwkuswkwcqg), self::iueeekcmggceyscu => Form::ucmasmuimegwqeuk("\163\145\x61\162\x63\150\137\x73\165\142\155\151\x74", $iwiewowoqmoekyqi)->jyumyyugiwwiqomk(50)]; $ikgwqyuyckaewsow = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\145\141\x72\x63\x68\x5f\146\x6f\x72\x6d\137\146\151\145\154\144\x73"), $ikgwqyuyckaewsow, $ywmkwiwkosakssii); $eaoumsseceiowgsk = Form::mmmemoswoaiewkes("\x73\x65\141\162\x63\150\x5f\146\x6f\x72\x6d")->ewweaossowcqywaw($ikgwqyuyckaewsow)->cukciuymuoaqgwic("\107\105\124")->cwqickkaaokiquuo(ManipulateServer::gmigwwwmwemyaayy()); $eaoumsseceiowgsk = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\145\x61\x72\143\x68\x5f\x66\157\x72\155\137\157\142\x6a\x65\x63\x74"), $eaoumsseceiowgsk); return $eaoumsseceiowgsk->render(); } public function ieikwusquwawyiue($gqgemcmoicmgaqie) { if (!ManipulateQuery::eewqyocggsagyuis()) { goto ismeikacqqyqcmqe; } $sqeykgyoooqysmca = $this->emoumkegmaskagaw(); if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query())) { goto cysgqimowcqoqqsc; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sqeykgyoooqysmca); cysgqimowcqoqqsc: ismeikacqqyqcmqe: return $gqgemcmoicmgaqie; } public function emoumkegmaskagaw() { $qgiocsakoiaswkou = ManipulatePost::gueasuouwqysmomu(); $useksmwkuswkwcqg = ManipulateServer::yyqgamuwwakgciey(self::oegcekuecakougom); $useksmwkuswkwcqg = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\x65\x61\x72\143\150\x5f\160\x6f\163\x74\137\x74\171\x70\x65"), $useksmwkuswkwcqg, $qgiocsakoiaswkou); if ($useksmwkuswkwcqg) { goto qsokkkyoackoycie; } $useksmwkuswkwcqg = $qgiocsakoiaswkou; qsokkkyoackoycie: if (!is_array($useksmwkuswkwcqg)) { goto casgoamcqkekgeeo; } $useksmwkuswkwcqg = explode("\54", $useksmwkuswkwcqg); casgoamcqkekgeeo: return $useksmwkuswkwcqg; } }
