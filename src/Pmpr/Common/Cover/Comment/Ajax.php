<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64bf80131e0f6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Exception; use Pmpr\Common\Cover\Setting; class Ajax extends Common { const yaouagmmkiyguiso = "\x73\x75\x62\155\151\164\x5f\143\x6f\x6d\155\x65\x6e\x74\x5f\146\157\x72\x6d"; const kceoggiuqkiimsum = "\x67\x65\164\137\143\x6f\x6d\x6d\145\x6e\x74\x5f\x6c\151\163\x74"; const myikkigscysoykgy = ["\147\145\x74\x5f\154\x69\x73\x74" => self::kceoggiuqkiimsum, "\163\x75\x62\x6d\151\x74\x5f\x66\157\x72\155" => self::yaouagmmkiyguiso]; public function wigskegsqequoeks() { $this->iqkqummseggmikgo(self::yaouagmmkiyguiso, [$this, "\x61\x65\x61\161\x67\171\x73\x67\141\145\x6f\x77\x61\147\x75\x67"])->iqkqummseggmikgo(self::kceoggiuqkiimsum, [$this, "\143\x69\165\147\x77\x6f\157\x61\163\141\161\143\171\167\141\x73"]); } public function aeaqgysgaeowagug() { $occymigcemkqucuw = false; try { $aqqmosqmsuueyaes = wp_handle_comment_submission(wp_unslash($_POST)); if (is_wp_error($aqqmosqmsuueyaes)) { goto cwikoaeqmmoimmso; } if ($aqqmosqmsuueyaes) { goto ykwasaaoeeiuomim; } $keccaugmemegoimu = __("\123\157\x6d\145\x74\x68\x69\x6e\147\40\x69\x73\x20\x77\162\157\x6e\147\54\40\x70\154\x65\141\x73\145\40\164\x72\171\40\141\147\x61\x69\156\56", PR__CMN__COVER); goto acggikioyeueeowg; ykwasaaoeeiuomim: if (!($mkucggyaiaukqoce = $this->caokeucsksukesyo()->issssuygyewuaswa()->get())) { goto iwueukqcywkiyqge; } $this->cqscqicucmeamkyq("\163\x65\x74\x5f\143\157\155\x6d\x65\156\x74\x5f\x63\157\157\153\151\145\x73", $aqqmosqmsuueyaes, $mkucggyaiaukqoce); iwueukqcywkiyqge: $keccaugmemegoimu = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(MetaBox::kiywiwgciwcoiiyy); $occymigcemkqucuw = true; acggikioyeueeowg: goto egaymskkosukqeao; cwikoaeqmmoimmso: $iswcokucwmiosiaq = (int) $aqqmosqmsuueyaes->get_error_data(); if ($iswcokucwmiosiaq) { goto kqyoakickmseyyeq; } $keccaugmemegoimu = __("\x55\156\153\156\157\167\156\40\105\x72\162\x6f\x72", PR__CMN__COVER); goto micceocwuwkyusic; kqyoakickmseyyeq: $keccaugmemegoimu = $aqqmosqmsuueyaes->get_error_message(); micceocwuwkyusic: egaymskkosukqeao: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $wgaoewqkwgomoaai->sagusgigmkeysock(); } $keccaugmemegoimu = $this->caokeucsksukesyo()->kugiyqykwaskawsc()->oockkqiqsssakuug([self::ssmskyqgcmeiayco => $keccaugmemegoimu, self::squoamkioomemiyi => $occymigcemkqucuw ? self::ckcawaoawwioqecq : self::ecioqysekgaasegg]); $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } public function ciugwooasaqcywas() { $gqiuywqwmiieqcww = $kigowwqauiumummw = false; $ogougosiwuoqymou = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); if ($this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto csieaismmmocyacu; } $sogksuscggsicmac = $ogougosiwuoqymou->oockkqiqsssakuug($uamcoiueqaamsqma); goto aquqkiggamaoegoo; csieaismmmocyacu: $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $suaemuyiacqyugsm = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(self::imywcsggckkcywgk, 1); $sqeykgyoooqysmca = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(self::squoamkioomemiyi, self::COMMENT); $post = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(self::kqigmeickowqiiyy, 0); if ($post && $suaemuyiacqyugsm) { goto suuskagowwgsouqw; } $sogksuscggsicmac = $ogougosiwuoqymou->oockkqiqsssakuug(__("\122\145\161\165\x69\162\x65\x64\x20\144\x61\164\x61\x20\156\157\164\x20\x70\141\x73\163\x65\x64", PR__CMN__COVER)); goto omykokikgocoikec; suuskagowwgsouqw: $ywmkwiwkosakssii = ["\151\163\137\x61\x6a\141\170" => true, "\x69\x73\x5f\x72\145\x6e\x64\145\162" => false, self::squoamkioomemiyi => $sqeykgyoooqysmca, self::kkcqmwgccaygggcu => $suaemuyiacqyugsm, self::kqigmeickowqiiyy => $post]; if ($kcacywcwwywmkkoi = Frontend::symcgieuakksimmu()) { goto cwswueuqoamqasya; } $sogksuscggsicmac = $ogougosiwuoqymou->oockkqiqsssakuug(__("\123\145\162\166\145\x72\40\x45\x72\162\x6f\162", PR__CMN__COVER)); goto kgmeiwiakwicgkkk; cwswueuqoamqasya: $sogksuscggsicmac = $kcacywcwwywmkkoi->wkwiceqaycqsygic('', $ywmkwiwkosakssii); if ($sogksuscggsicmac) { goto kaiesowkgwogqseg; } $gqiuywqwmiieqcww = true; goto kicwiowcogmauwiy; kaiesowkgwogqseg: $uuwmqqqiwksuaise = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ymgsgecsiqeegseg($post); $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->miggcoaueioaoqga(); $gqiuywqwmiieqcww = !($uuwmqqqiwksuaise && $weyoqgcesqgeusiu) || $uuwmqqqiwksuaise / $weyoqgcesqgeusiu <= $suaemuyiacqyugsm; $sogksuscggsicmac = $this->caokeucsksukesyo()->gkksucgseqqemesc()->gyqqesecwssesmyy($sogksuscggsicmac, "\154\x69\56\x63\157\155\155\145\x6e\x74\55\154\151\163\x74\55\151\164\x65\x6d\72\x6e\x6f\x74\x28\x2e\x63\157\x6d\x6d\x65\156\x74\x2d\143\x68\151\x6c\144\51"); kicwiowcogmauwiy: $kigowwqauiumummw = true; kgmeiwiakwicgkkk: omykokikgocoikec: aquqkiggamaoegoo: $this->uaggqsoeugksgooc($kigowwqauiumummw, [self::DONE => $gqiuywqwmiieqcww, self::syomkiqgogwyuiyw => $sogksuscggsicmac]); } }
