<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638a85407a67e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Exception; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateBootstrap; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Ajax extends Common { const yaouagmmkiyguiso = "\x73\165\142\155\151\x74\137\x63\x6f\155\x6d\145\x6e\x74\137\x66\x6f\x72\155"; const kceoggiuqkiimsum = "\x67\x65\x74\137\x63\x6f\155\155\145\x6e\x74\x5f\154\151\163\x74"; const myikkigscysoykgy = ["\147\x65\164\137\154\x69\163\164" => self::kceoggiuqkiimsum, "\x73\x75\x62\x6d\x69\164\137\x66\x6f\x72\x6d" => self::yaouagmmkiyguiso]; public function wigskegsqequoeks() { $this->iqkqummseggmikgo(self::yaouagmmkiyguiso, [$this, "\141\145\x61\161\x67\171\x73\147\141\x65\157\167\141\x67\x75\147"])->iqkqummseggmikgo(self::kceoggiuqkiimsum, [$this, "\143\x69\x75\147\x77\x6f\157\x61\163\x61\x71\x63\x79\167\x61\163"]); } public function aeaqgysgaeowagug() { $occymigcemkqucuw = false; try { $aqqmosqmsuueyaes = wp_handle_comment_submission(wp_unslash($_POST)); if (is_wp_error($aqqmosqmsuueyaes)) { goto ceiuqsiqgiuiekem; } if ($aqqmosqmsuueyaes) { goto gkqiqaqecmoogmaa; } $keccaugmemegoimu = __("\x53\x6f\155\145\x74\150\x69\156\147\40\x69\x73\x20\167\x72\x6f\x6e\147\54\x20\160\154\145\x61\x73\145\x20\164\x72\171\40\x61\x67\141\x69\156\x2e", PR__CMN__COVER); goto mceucsaeouuwyumm; gkqiqaqecmoogmaa: $mkucggyaiaukqoce = ManipulateUser::get(); if (!$mkucggyaiaukqoce) { goto kwyimqumkuuyaiku; } $this->cqscqicucmeamkyq("\163\x65\164\137\143\157\155\155\145\x6e\x74\137\x63\157\157\x6b\151\145\163", $aqqmosqmsuueyaes, $mkucggyaiaukqoce); kwyimqumkuuyaiku: $keccaugmemegoimu = $this->weysguygiseoukqw(MetaBox::kiywiwgciwcoiiyy); $occymigcemkqucuw = true; mceucsaeouuwyumm: goto gsymkkskwsgggoic; ceiuqsiqgiuiekem: $iswcokucwmiosiaq = (int) $aqqmosqmsuueyaes->get_error_data(); if ($iswcokucwmiosiaq) { goto qwemkcoaseywkuuc; } $keccaugmemegoimu = __("\x55\x6e\x6b\x6e\x6f\167\x6e\40\105\162\162\157\162", PR__CMN__COVER); goto mqimkwickkgqqeoi; qwemkcoaseywkuuc: $keccaugmemegoimu = $aqqmosqmsuueyaes->get_error_message(); mqimkwickkgqqeoi: gsymkkskwsgggoic: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $wgaoewqkwgomoaai->sagusgigmkeysock(); } $keccaugmemegoimu = ManipulateBootstrap::oockkqiqsssakuug($keccaugmemegoimu, $occymigcemkqucuw ? self::ckcawaoawwioqecq : self::ecioqysekgaasegg); $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } public function ciugwooasaqcywas() { $gqiuywqwmiieqcww = $kigowwqauiumummw = false; if ($this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto uscokkmquayiukag; } $sogksuscggsicmac = ManipulateBootstrap::oockkqiqsssakuug($uamcoiueqaamsqma, self::ecioqysekgaasegg); goto ykqsuiyyosyeyscc; uscokkmquayiukag: $suaemuyiacqyugsm = ManipulateArray::get($_POST, self::imywcsggckkcywgk, 1); $sqeykgyoooqysmca = ManipulateArray::get($_POST, self::squoamkioomemiyi, self::COMMENT); $post = ManipulateArray::get($_POST, self::kqigmeickowqiiyy, 0); if ($post && $suaemuyiacqyugsm) { goto eouwacqiommmeaqc; } $sogksuscggsicmac = ManipulateBootstrap::oockkqiqsssakuug(__("\x52\x65\161\165\151\x72\x65\144\x20\144\141\164\x61\40\x6e\157\164\x20\160\141\163\x73\x65\144", PR__CMN__COVER), self::ecioqysekgaasegg); goto sqwuqegeiisoiiuq; eouwacqiommmeaqc: $ywmkwiwkosakssii = ["\151\x73\x5f\141\x6a\141\170" => true, "\151\x73\x5f\x72\145\x6e\144\145\x72" => false, self::squoamkioomemiyi => $sqeykgyoooqysmca, self::kkcqmwgccaygggcu => $suaemuyiacqyugsm, self::kqigmeickowqiiyy => $post]; if ($kcacywcwwywmkkoi = Frontend::symcgieuakksimmu()) { goto wiwoiyoakywqyaiy; } $sogksuscggsicmac = ManipulateBootstrap::oockkqiqsssakuug(__("\123\145\162\x76\145\162\x20\x45\162\x72\157\x72", PR__CMN__COVER), self::ecioqysekgaasegg); goto igmmqwyawcuuckkq; wiwoiyoakywqyaiy: $sogksuscggsicmac = $kcacywcwwywmkkoi->wkwiceqaycqsygic('', $ywmkwiwkosakssii); if ($sogksuscggsicmac) { goto ugykmcouiwiscoqu; } $gqiuywqwmiieqcww = true; goto isewysikysqewkis; ugykmcouiwiscoqu: $uuwmqqqiwksuaise = ManipulatePost::ymgsgecsiqeegseg($post); $weyoqgcesqgeusiu = ManipulateComment::omkaowmygoqwsywq(); $gqiuywqwmiieqcww = !($uuwmqqqiwksuaise && $weyoqgcesqgeusiu) || $uuwmqqqiwksuaise / $weyoqgcesqgeusiu <= $suaemuyiacqyugsm; $sogksuscggsicmac = DOMCrawler::gyqqesecwssesmyy($sogksuscggsicmac, "\154\x69\56\143\x6f\155\x6d\x65\x6e\164\55\154\x69\163\164\x2d\151\164\145\x6d\72\x6e\157\x74\50\56\143\157\x6d\155\x65\x6e\x74\55\x63\x68\x69\x6c\x64\51"); isewysikysqewkis: $kigowwqauiumummw = true; igmmqwyawcuuckkq: sqwuqegeiisoiiuq: ykqsuiyyosyeyscc: $this->uaggqsoeugksgooc($kigowwqauiumummw, ["\162\145\x73\165\x6c\164" => $sogksuscggsicmac, "\x64\157\156\x65" => $gqiuywqwmiieqcww]); } }
