<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63d10b6a9e73d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use WP_Query; class Search extends Container { const oegcekuecakougom = "\163\x5f\160\x74"; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x70\162\145\x5f\x67\145\x74\137\160\157\x73\164\163", [$this, "\151\x65\151\x6b\167\165\163\161\165\x77\x61\x77\x79\x69\x75\145"], 0)->cecaguuoecmccuse("\x67\x65\x74\137\x73\x65\x61\162\x63\150\x5f\146\x6f\x72\155", [$this, "\x71\143\163\x69\x65\x63\x79\x69\x67\x65\x77\163\x71\141\151\163"], 10, 2); parent::kgquecmsgcouyaya(); } public function qcsiecyigewsqais($eaoumsseceiowgsk, $ywmkwiwkosakssii = []) { $nsmgceoqaqogqmuw = $this->yyoqecggyacaseko($ywmkwiwkosakssii); if (!$nsmgceoqaqogqmuw) { goto mkgmaguyswskyioa; } $eaoumsseceiowgsk = $nsmgceoqaqogqmuw; mkgmaguyswskyioa: return $eaoumsseceiowgsk; } public function yyoqecggyacaseko(array $ywmkwiwkosakssii = []) : string { $pkyyagewkiyckmwy = ManipulateArray::get($ywmkwiwkosakssii, self::uissasisiuymwsmu); $useksmwkuswkwcqg = ManipulateArray::get($ywmkwiwkosakssii, self::uouymeyqasaeckso, ''); if ($useksmwkuswkwcqg) { goto skwusmoyomgqkimm; } $useksmwkuswkwcqg = $this->emoumkegmaskagaw(); skwusmoyomgqkimm: $iwiewowoqmoekyqi = $pkyyagewkiyckmwy; if (is_array($useksmwkuswkwcqg)) { goto gicuuwuuuwumyooa; } if (!$useksmwkuswkwcqg) { goto usyckeewsgwaysam; } $iwiewowoqmoekyqi = sprintf(__("\x53\x65\141\162\x63\x68\40\x69\156\x20\45\x73", PR__CMN__COVER), ManipulatePost::waaisqccqacqeium($useksmwkuswkwcqg)->label); usyckeewsgwaysam: goto kakkuyeccaacewyo; gicuuwuuuwumyooa: $useksmwkuswkwcqg = implode("\x2c", $useksmwkuswkwcqg); kakkuyeccaacewyo: $ikgwqyuyckaewsow = [self::yayciqueeakqwese => Form::ymuegqgyuagyucws("\163\x65\x61\162\x63\x68\137\151\156\x70\165\164")->usuqmwksoeaayaig("\x73")->esakmaucmeoucami()->kyiucygqsgequoys($iwiewowoqmoekyqi)->iygyugseyaqwywyg(DecoratorQuery::siiwuwaswckkuoya())->igmaewykumgwoaoy("\141\162\151\x61\x2d\144\145\163\143\x72\151\142\145\x64\x62\171", "\163\x65\141\x72\x63\150\137\163\x75\142\155\x69\x74"), self::uouymeyqasaeckso => Form::cwiuiiakukcsaakw(self::oegcekuecakougom, $useksmwkuswkwcqg), self::iueeekcmggceyscu => Form::ucmasmuimegwqeuk("\x73\x65\141\x72\x63\150\137\x73\x75\x62\x6d\x69\x74", $iwiewowoqmoekyqi)->jyumyyugiwwiqomk(50)]; $ikgwqyuyckaewsow = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\145\141\x72\143\x68\137\146\x6f\x72\x6d\137\146\151\x65\x6c\144\x73"), $ikgwqyuyckaewsow, $ywmkwiwkosakssii); $eaoumsseceiowgsk = Form::mmmemoswoaiewkes("\163\x65\141\162\143\150\x5f\146\157\x72\155")->ewweaossowcqywaw($ikgwqyuyckaewsow)->cukciuymuoaqgwic("\107\105\x54")->cwqickkaaokiquuo(ManipulateServer::gmigwwwmwemyaayy()); $eaoumsseceiowgsk = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\145\141\x72\143\x68\x5f\146\x6f\162\x6d\137\157\142\x6a\x65\143\164"), $eaoumsseceiowgsk); return $eaoumsseceiowgsk->render(); } public function ieikwusquwawyiue($gqgemcmoicmgaqie) { if (!ManipulateQuery::eewqyocggsagyuis()) { goto ismeikacqqyqcmqe; } $sqeykgyoooqysmca = $this->emoumkegmaskagaw(); if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query())) { goto cysgqimowcqoqqsc; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sqeykgyoooqysmca); cysgqimowcqoqqsc: ismeikacqqyqcmqe: return $gqgemcmoicmgaqie; } public function emoumkegmaskagaw() { $qgiocsakoiaswkou = ManipulatePost::gueasuouwqysmomu(); $useksmwkuswkwcqg = ManipulateServer::yyqgamuwwakgciey(self::oegcekuecakougom); $useksmwkuswkwcqg = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\x65\141\x72\143\x68\137\x70\x6f\x73\164\137\x74\x79\x70\x65"), $useksmwkuswkwcqg, $qgiocsakoiaswkou); if ($useksmwkuswkwcqg) { goto qsokkkyoackoycie; } $useksmwkuswkwcqg = $qgiocsakoiaswkou; qsokkkyoackoycie: if (!is_array($useksmwkuswkwcqg)) { goto casgoamcqkekgeeo; } $useksmwkuswkwcqg = explode("\54", $useksmwkuswkwcqg); casgoamcqkekgeeo: return $useksmwkuswkwcqg; } }
