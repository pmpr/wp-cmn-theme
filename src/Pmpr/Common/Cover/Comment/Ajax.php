<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ae2f59eb649             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Exception; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateBootstrap; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Ajax extends Common { const yaouagmmkiyguiso = "\163\x75\x62\155\151\164\137\x63\x6f\155\155\145\x6e\164\x5f\x66\157\x72\x6d"; const kceoggiuqkiimsum = "\x67\145\x74\x5f\x63\x6f\155\155\x65\156\x74\x5f\x6c\x69\163\164"; const myikkigscysoykgy = ["\147\x65\x74\137\154\x69\163\164" => self::kceoggiuqkiimsum, "\163\x75\x62\155\151\164\x5f\146\x6f\162\x6d" => self::yaouagmmkiyguiso]; public function wigskegsqequoeks() { $this->iqkqummseggmikgo(self::yaouagmmkiyguiso, [$this, "\x61\x65\x61\161\147\171\163\147\x61\x65\157\167\x61\147\x75\x67"])->iqkqummseggmikgo(self::kceoggiuqkiimsum, [$this, "\x63\x69\165\x67\167\x6f\157\141\163\x61\x71\x63\x79\x77\x61\x73"]); } public function aeaqgysgaeowagug() { $occymigcemkqucuw = false; try { $aqqmosqmsuueyaes = wp_handle_comment_submission(wp_unslash($_POST)); if (is_wp_error($aqqmosqmsuueyaes)) { goto sqwuqegeiisoiiuq; } if ($aqqmosqmsuueyaes) { goto igmmqwyawcuuckkq; } $keccaugmemegoimu = __("\123\x6f\155\145\x74\x68\151\x6e\147\x20\151\x73\x20\167\162\157\x6e\147\x2c\40\x70\x6c\x65\x61\x73\145\40\x74\162\171\x20\141\x67\x61\151\156\56", PR__CMN__COVER); goto eouwacqiommmeaqc; igmmqwyawcuuckkq: $mkucggyaiaukqoce = ManipulateUser::get(); if (!$mkucggyaiaukqoce) { goto wiwoiyoakywqyaiy; } $this->cqscqicucmeamkyq("\163\145\x74\137\143\157\155\155\x65\x6e\x74\x5f\x63\x6f\x6f\153\x69\145\163", $aqqmosqmsuueyaes, $mkucggyaiaukqoce); wiwoiyoakywqyaiy: $keccaugmemegoimu = $this->weysguygiseoukqw(MetaBox::kiywiwgciwcoiiyy); $occymigcemkqucuw = true; eouwacqiommmeaqc: goto uscokkmquayiukag; sqwuqegeiisoiiuq: $iswcokucwmiosiaq = (int) $aqqmosqmsuueyaes->get_error_data(); if ($iswcokucwmiosiaq) { goto ugykmcouiwiscoqu; } $keccaugmemegoimu = __("\x55\x6e\153\156\x6f\167\x6e\x20\x45\162\x72\x6f\162", PR__CMN__COVER); goto isewysikysqewkis; ugykmcouiwiscoqu: $keccaugmemegoimu = $aqqmosqmsuueyaes->get_error_message(); isewysikysqewkis: uscokkmquayiukag: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $wgaoewqkwgomoaai->sagusgigmkeysock(); } $keccaugmemegoimu = ManipulateBootstrap::oockkqiqsssakuug($keccaugmemegoimu, $occymigcemkqucuw ? self::ckcawaoawwioqecq : self::ecioqysekgaasegg); $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } public function ciugwooasaqcywas() { $gqiuywqwmiieqcww = $kigowwqauiumummw = false; if ($this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto icumkkykaoqycqqu; } $sogksuscggsicmac = ManipulateBootstrap::oockkqiqsssakuug($uamcoiueqaamsqma, self::ecioqysekgaasegg); goto oeamoqweiueaueay; icumkkykaoqycqqu: $suaemuyiacqyugsm = ManipulateArray::get($_POST, self::imywcsggckkcywgk, 1); $sqeykgyoooqysmca = ManipulateArray::get($_POST, self::squoamkioomemiyi, self::COMMENT); $post = ManipulateArray::get($_POST, self::kqigmeickowqiiyy, 0); if ($post && $suaemuyiacqyugsm) { goto mcqucouuiuoagqwc; } $sogksuscggsicmac = ManipulateBootstrap::oockkqiqsssakuug(__("\122\x65\161\x75\151\x72\145\x64\x20\144\141\x74\x61\x20\156\x6f\x74\40\160\141\163\163\x65\144", PR__CMN__COVER), self::ecioqysekgaasegg); goto eweaaismksecwagy; mcqucouuiuoagqwc: $ywmkwiwkosakssii = ["\151\x73\x5f\141\152\141\x78" => true, "\x69\163\137\162\x65\156\x64\145\162" => false, self::squoamkioomemiyi => $sqeykgyoooqysmca, self::kkcqmwgccaygggcu => $suaemuyiacqyugsm, self::kqigmeickowqiiyy => $post]; if ($kcacywcwwywmkkoi = Frontend::symcgieuakksimmu()) { goto egesuwkqkmaigaoe; } $sogksuscggsicmac = ManipulateBootstrap::oockkqiqsssakuug(__("\x53\145\x72\x76\145\x72\40\105\162\162\157\162", PR__CMN__COVER), self::ecioqysekgaasegg); goto syusgosewwkoagoq; egesuwkqkmaigaoe: $sogksuscggsicmac = $kcacywcwwywmkkoi->wkwiceqaycqsygic('', $ywmkwiwkosakssii); if ($sogksuscggsicmac) { goto ykqsuiyyosyeyscc; } $gqiuywqwmiieqcww = true; goto ugogoekeckgcmuaw; ykqsuiyyosyeyscc: $uuwmqqqiwksuaise = ManipulatePost::ymgsgecsiqeegseg($post); $weyoqgcesqgeusiu = ManipulateComment::omkaowmygoqwsywq(); $gqiuywqwmiieqcww = !($uuwmqqqiwksuaise && $weyoqgcesqgeusiu) || $uuwmqqqiwksuaise / $weyoqgcesqgeusiu <= $suaemuyiacqyugsm; $sogksuscggsicmac = DOMCrawler::gyqqesecwssesmyy($sogksuscggsicmac, "\x6c\151\x2e\143\x6f\x6d\x6d\x65\x6e\164\55\x6c\x69\x73\x74\55\151\164\145\x6d\x3a\156\x6f\164\50\x2e\x63\x6f\155\x6d\x65\156\164\x2d\x63\x68\151\x6c\144\51"); ugogoekeckgcmuaw: $kigowwqauiumummw = true; syusgosewwkoagoq: eweaaismksecwagy: oeamoqweiueaueay: $this->uaggqsoeugksgooc($kigowwqauiumummw, ["\162\145\163\165\x6c\164" => $sogksuscggsicmac, "\x64\157\156\x65" => $gqiuywqwmiieqcww]); } }
