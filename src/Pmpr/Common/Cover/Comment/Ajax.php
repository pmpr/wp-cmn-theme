<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             634d8e59c1e2a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Exception; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateBootstrap; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Ajax extends Common { const yaouagmmkiyguiso = "\163\165\x62\155\151\x74\x5f\143\x6f\155\x6d\145\156\x74\137\146\x6f\162\x6d"; const kceoggiuqkiimsum = "\x67\x65\164\137\143\157\155\x6d\x65\x6e\164\x5f\x6c\x69\x73\x74"; const myikkigscysoykgy = ["\147\x65\x74\137\x6c\151\163\x74" => self::kceoggiuqkiimsum, "\x73\165\142\155\x69\x74\x5f\x66\157\162\x6d" => self::yaouagmmkiyguiso]; public function wigskegsqequoeks() { $this->iqkqummseggmikgo(self::yaouagmmkiyguiso, [$this, "\141\x65\x61\161\x67\171\163\147\141\x65\x6f\167\x61\x67\x75\x67"])->iqkqummseggmikgo(self::kceoggiuqkiimsum, [$this, "\143\151\x75\x67\167\157\157\141\x73\141\161\143\x79\x77\141\x73"]); } public function aeaqgysgaeowagug() { $occymigcemkqucuw = false; try { $aqqmosqmsuueyaes = wp_handle_comment_submission(wp_unslash($_POST)); if (is_wp_error($aqqmosqmsuueyaes)) { goto ueigkucgaucgeimc; } if ($aqqmosqmsuueyaes) { goto wgewmqieuamsoayy; } $keccaugmemegoimu = __("\123\157\x6d\145\164\x68\x69\156\x67\x20\x69\163\x20\167\x72\x6f\156\147\x2c\x20\x70\x6c\x65\x61\x73\145\40\x74\x72\171\40\141\x67\141\x69\x6e\56", PR__CMN__COVER); goto kqgcyoscsusgoaqi; wgewmqieuamsoayy: $mkucggyaiaukqoce = ManipulateUser::get(); if (!$mkucggyaiaukqoce) { goto ugqaaewwmkocwwgy; } $this->cqscqicucmeamkyq("\163\x65\164\137\x63\x6f\x6d\x6d\145\156\x74\137\143\157\157\x6b\151\145\x73", $aqqmosqmsuueyaes, $mkucggyaiaukqoce); ugqaaewwmkocwwgy: $keccaugmemegoimu = $this->weysguygiseoukqw(MetaBox::kiywiwgciwcoiiyy); $occymigcemkqucuw = true; kqgcyoscsusgoaqi: goto sggawugoykqcmsug; ueigkucgaucgeimc: $iswcokucwmiosiaq = (int) $aqqmosqmsuueyaes->get_error_data(); if ($iswcokucwmiosiaq) { goto igooksugieceoege; } $keccaugmemegoimu = __("\x55\156\153\x6e\157\x77\x6e\40\105\x72\162\x6f\x72", PR__CMN__COVER); goto omqiayeucoioqoao; igooksugieceoege: $keccaugmemegoimu = $aqqmosqmsuueyaes->get_error_message(); omqiayeucoioqoao: sggawugoykqcmsug: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $wgaoewqkwgomoaai->sagusgigmkeysock(); } $keccaugmemegoimu = ManipulateBootstrap::oockkqiqsssakuug($keccaugmemegoimu, $occymigcemkqucuw ? self::ckcawaoawwioqecq : self::ecioqysekgaasegg); $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } public function ciugwooasaqcywas() { $gqiuywqwmiieqcww = $kigowwqauiumummw = false; if ($this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto eogwckcymuugikuy; } $sogksuscggsicmac = ManipulateBootstrap::oockkqiqsssakuug($uamcoiueqaamsqma, self::ecioqysekgaasegg); goto msemumccgceyugmg; eogwckcymuugikuy: $suaemuyiacqyugsm = ManipulateArray::get($_POST, self::imywcsggckkcywgk, 1); $sqeykgyoooqysmca = ManipulateArray::get($_POST, self::squoamkioomemiyi, self::COMMENT); $post = ManipulateArray::get($_POST, self::kqigmeickowqiiyy, 0); if ($post && $suaemuyiacqyugsm) { goto mwsmsguqqkcwiiuk; } $sogksuscggsicmac = ManipulateBootstrap::oockkqiqsssakuug(__("\122\x65\161\x75\x69\162\x65\144\40\x64\x61\x74\141\40\x6e\x6f\x74\x20\160\x61\x73\x73\145\144", PR__CMN__COVER), self::ecioqysekgaasegg); goto eeauyscekuckoues; mwsmsguqqkcwiiuk: $ywmkwiwkosakssii = ["\x69\163\x5f\141\x6a\x61\x78" => true, "\x69\x73\x5f\x72\x65\x6e\144\x65\162" => false, self::squoamkioomemiyi => $sqeykgyoooqysmca, self::kkcqmwgccaygggcu => $suaemuyiacqyugsm, self::kqigmeickowqiiyy => $post]; if ($kcacywcwwywmkkoi = Frontend::symcgieuakksimmu()) { goto qmuwoecuacmkwgem; } $sogksuscggsicmac = ManipulateBootstrap::oockkqiqsssakuug(__("\123\x65\x72\x76\x65\162\x20\x45\x72\x72\x6f\x72", PR__CMN__COVER), self::ecioqysekgaasegg); goto owmuceyswmgueasi; qmuwoecuacmkwgem: $sogksuscggsicmac = $kcacywcwwywmkkoi->wkwiceqaycqsygic('', $ywmkwiwkosakssii); if ($sogksuscggsicmac) { goto wkeuuycukmuqiaom; } $gqiuywqwmiieqcww = true; goto wakmayaoqoskekqy; wkeuuycukmuqiaom: $uuwmqqqiwksuaise = ManipulatePost::ymgsgecsiqeegseg($post); $weyoqgcesqgeusiu = ManipulateComment::omkaowmygoqwsywq(); $gqiuywqwmiieqcww = !($uuwmqqqiwksuaise && $weyoqgcesqgeusiu) || $uuwmqqqiwksuaise / $weyoqgcesqgeusiu <= $suaemuyiacqyugsm; $sogksuscggsicmac = DOMCrawler::gyqqesecwssesmyy($sogksuscggsicmac, "\154\x69\x2e\143\157\x6d\155\x65\x6e\x74\55\154\x69\163\x74\x2d\151\x74\x65\x6d\x3a\156\157\x74\50\56\143\157\x6d\155\x65\x6e\x74\x2d\x63\150\151\x6c\x64\x29"); wakmayaoqoskekqy: $kigowwqauiumummw = true; owmuceyswmgueasi: eeauyscekuckoues: msemumccgceyugmg: $this->uaggqsoeugksgooc($kigowwqauiumummw, ["\x72\145\163\165\154\x74" => $sogksuscggsicmac, "\144\x6f\x6e\x65" => $gqiuywqwmiieqcww]); } }
