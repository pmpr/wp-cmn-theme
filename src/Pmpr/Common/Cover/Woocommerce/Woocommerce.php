<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64dcd6a0a2fe6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce; use WC_Admin_List_Table_Products; use WC_Product; use WP_Query; class Woocommerce extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\146\x74\x65\162\137\x73\145\x74\165\160\137\x74\150\x65\155\145", [$this, "\161\161\x75\155\171\161\x67\143\x75\161\x67\x61\x69\x63\141\155"])->qcsmikeggeemccuu("\x63\165\x72\x72\x65\x6e\x74\x5f\x73\x63\x72\x65\145\x6e", [$this, "\143\143\141\x6b\x75\165\x65\x63\171\163\167\x77\x61\x6d\161\x67"], PHP_INT_MAX); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\154\157\157\160\137\x73\150\157\160\x5f\x70\145\162\137\x70\x61\x67\145", [$this, "\147\157\x79\163\x77\147\167\157\x65\x6b\145\143\x79\147\143\157"], 999)->cecaguuoecmccuse("\x66\157\x72\x6d\141\x74\164\x65\144\137\x77\x6f\157\143\x6f\x6d\155\145\x72\x63\x65\x5f\160\162\151\x63\x65", [$this, "\x65\x65\x65\163\x73\x69\157\x77\x67\x71\167\x75\x6d\x77\165\x6b"], 999)->cecaguuoecmccuse("\x77\143\x5f\160\x72\x69\143\145", [$this, "\x77\153\157\171\x61\165\x75\x75\x65\143\x71\x61\163\x65\163\163"], 99, 4)->cecaguuoecmccuse("\167\x6f\157\143\157\155\155\145\x72\x63\x65\137\x70\162\x6f\x64\x75\143\x74\137\164\141\x62\x73", [$this, "\165\x69\x6b\155\147\167\x63\163\147\157\x6d\x63\x75\x79\167\157"], 20)->cecaguuoecmccuse("\x77\x6f\x6f\x63\x6f\155\155\145\162\143\145\137\x61\x63\x63\157\165\156\164\137\x6d\x65\156\x75\x5f\x69\x74\x65\x6d\163", [$this, "\x67\151\x75\x63\171\145\x71\147\x77\x65\x69\x65\141\x71\x61\x67"], 999); } public function iemaakgqgqosiecm() { Cart::symcgieuakksimmu(); Setting::symcgieuakksimmu(); Quantity::symcgieuakksimmu(); } public function ccakuuecyswwamqg() { global $wc_list_table; if (!($wc_list_table instanceof WC_Admin_List_Table_Products && Setting::wwameuqwugekuykk())) { goto makomwwyomweyamm; } $this->ggmgmqswqkgecosg("\x72\x65\161\165\x65\x73\x74", [$wc_list_table, "\x72\x65\x71\x75\x65\163\164\x5f\161\165\145\x72\171"])->cecaguuoecmccuse("\160\x6f\163\164\163\x5f\x73\x65\x61\x72\143\150", [$this, "\145\141\171\153\x6f\147\147\163\x79\141\x75\155\141\x67\153\163"], 10, 2); makomwwyomweyamm: } public function qqumyqgcuqgaicam() { $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->musuokisgmmamoua("\x77\x6f\x6f\x63\x6f\x6d\155\145\162\143\145"); } public function eaykoggsyaumagks($qwcmueausqgiwigy, $gqgemcmoicmgaqie) : string { if (!(isset($_GET["\163"]) && $gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_main_query() && $gqgemcmoicmgaqie->is_admin)) { goto oqwcmgwimeisusoe; } global $wpdb; $eyyicwuomioiwoeu = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $qqmmggwcsmymegca = $gqgemcmoicmgaqie->query_vars; $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\x65\170\x61\x63\164"]) ? '' : "\x25"; $qwcmueausqgiwigy = $eyyicwuomioiwoeu->prepare("\x20\x41\x4e\104\40\50\x25\163\x2e\160\x6f\163\x74\137\164\x69\164\154\145\40\114\111\113\x45\x20\47\x25\x73\45\x73\45\x73\47\51\40", $wpdb->posts, $aaycmcgqqqsysccs, $eyyicwuomioiwoeu->yqccgscwmeeyigkg(esc_sql($_GET["\x73"])), $aaycmcgqqqsysccs); oqwcmgwimeisusoe: return $qwcmueausqgiwigy; } public function goyswgwoekecygco($weyoqgcesqgeusiu) { if (!$this->caokeucsksukesyo()->wikusamwomuogoau()->uiskcesaqyyewwsa()) { goto asaowisseacciyia; } $youqwiyugsiuksaa = (int) Setting::ioukqkmiwsokywyy(); if (!($youqwiyugsiuksaa > 0)) { goto acesyuieuuqwgkwm; } $weyoqgcesqgeusiu = $youqwiyugsiuksaa; acesyuieuuqwgkwm: asaowisseacciyia: return $weyoqgcesqgeusiu; } public function eeessiowgqwumwuk($aumscagymwyyicag) : string { return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei($aumscagymwyyicag, ["\x63\x6c\141\163\163" => "\160\x72\151\x63\145\55\x61\x6d\157\x75\x6e\164"]); } public function giucyeqgweieaqag($oammesyieqmwuwyi) { if (!(is_array($oammesyieqmwuwyi) && !$this->caokeucsksukesyo()->wikusamwomuogoau()->eaiyegoagkgeowae())) { goto ugswokwmkumcmigc; } if (!($yemgmmgogcwccuky = Setting::eiwcuqigayigimak(Setting::cuqwmqwgcuuceoqo, []))) { goto qiaaqkymeuuueoqk; } $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($oammesyieqmwuwyi, $yemgmmgogcwccuky); qiaaqkymeuuueoqk: ugswokwmkumcmigc: return $oammesyieqmwuwyi; } public function uikmgwcsgomcuywo($ywoucyskcquysiwc) : array { $cciauwuwuqaywgce = "\141\144\144\x69\164\x69\157\156\141\x6c\137\151\156\146\157\162\x6d\x61\x74\151\x6f\156"; if (!isset($ywoucyskcquysiwc[$cciauwuwuqaywgce])) { goto owgakkqgckqcegoi; } $meqocwsecsywiiqs = Setting::oowsugsmwuqmaaii(); if (!rtrim($meqocwsecsywiiqs)) { goto gwiaimosqoiquwkc; } $ywoucyskcquysiwc[$cciauwuwuqaywgce][self::qescuiwgsyuikume] = $meqocwsecsywiiqs; gwiaimosqoiquwkc: owgakkqgckqcegoi: return $ywoucyskcquysiwc; } public function giagsqiwuscougmu($aumscagymwyyicag, $kicccmgaoiissqys) { if (!($kicccmgaoiissqys instanceof WC_Product && $kicccmgaoiissqys->get_price() <= 0 && ($swsiuagyekaqiois = Setting::eiwcuqigayigimak(Setting::lkawsqiicuikigyu, '')))) { goto cigesysuauaiccms; } $aumscagymwyyicag = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei($swsiuagyekaqiois, ["\x63\x6c\141\163\163" => "\x70\162\151\143\x65\55\146\162\145\145"]); cigesysuauaiccms: return $aumscagymwyyicag; } public function wkoyauuuecqasess($nsmgceoqaqogqmuw, $aumscagymwyyicag, $ywmkwiwkosakssii, $wumyeqkaemkcowka) { $aoqagsqecokqqwqg = 1000; if (!(Setting::uusioiccyseocsmw() && $wumyeqkaemkcowka >= $aoqagsqecokqqwqg)) { goto ocgkwqqmgasuoies; } $agikakqqswiwaqgc = [1000 => __("\124\150\157\x75\163\141\x6e\144\163", PR__CMN__COVER), 1000000 => __("\115\151\154\154\x69\157\156\163", PR__CMN__COVER), 1000000000 => __("\x42\x69\x6c\x6c\151\157\x6e\x73", PR__CMN__COVER)]; $momcykaoccoymeig = 1; $gaeqamemwmwsyukm = count($agikakqqswiwaqgc); $aqykuigiuwmmcieu = $iyqygqimawuycsyq = null; foreach ($agikakqqswiwaqgc as $mqwsmsykyouoomgm => $meqocwsecsywiiqs) { $aqykuigiuwmmcieu = $wumyeqkaemkcowka / $mqwsmsykyouoomgm; if (!($aqykuigiuwmmcieu < $mqwsmsykyouoomgm || $gaeqamemwmwsyukm == $momcykaoccoymeig)) { goto kkewoqqowugagwoy; } $iyqygqimawuycsyq = $meqocwsecsywiiqs; goto qumkwsqqocooyuoq; kkewoqqowugagwoy: $momcykaoccoymeig++; gcskyqewysqaceeg: } qumkwsqqocooyuoq: if (!($aqykuigiuwmmcieu && $iyqygqimawuycsyq)) { goto wsemeeocquawyauo; } $aocuqemkaqyyiqae = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->soqyyosiiqwwucga($ywmkwiwkosakssii["\x63\x75\x72\x72\145\156\x63\171"]); $mogsmwwuqscwiwom = sprintf($ywmkwiwkosakssii["\x70\x72\151\x63\145\x5f\x66\x6f\162\x6d\141\x74"], $aocuqemkaqyyiqae, $iyqygqimawuycsyq); $owimomwwoksyoeae = $ywmkwiwkosakssii["\x64\x65\x63\x69\x6d\141\x6c\x73"]; $gyesqcyuwmuayugq = strlen(substr(strrchr($aqykuigiuwmmcieu, "\x2e"), 1)); if (!($owimomwwoksyoeae < $gyesqcyuwmuayugq)) { goto wwswmaewcaisauei; } $owimomwwoksyoeae = $gyesqcyuwmuayugq; wwswmaewcaisauei: $aqykuigiuwmmcieu = number_format($aqykuigiuwmmcieu, $owimomwwoksyoeae, $ywmkwiwkosakssii["\144\145\x63\151\155\141\154\137\163\145\x70\141\162\141\164\157\x72"], $ywmkwiwkosakssii["\x74\x68\x6f\x75\163\x61\x6e\144\x5f\x73\145\x70\141\x72\x61\x74\157\162"]); $aqykuigiuwmmcieu = $this->eeessiowgqwumwuk($aqykuigiuwmmcieu); $nsmgceoqaqogqmuw = str_replace($aocuqemkaqyyiqae, $mogsmwwuqscwiwom, $nsmgceoqaqogqmuw); $nsmgceoqaqogqmuw = str_replace($aumscagymwyyicag, $aqykuigiuwmmcieu, $nsmgceoqaqogqmuw); wsemeeocquawyauo: ocgkwqqmgasuoies: return $nsmgceoqaqogqmuw; } }
