<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6575f24183c7b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Navigation; use Pmpr\Common\Foundation\Helper\Traits\HelperTrait; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Wrapper\Traits\WrapperTrait; use Walker_Nav_Menu; use WP_Post; class Walker extends Walker_Nav_Menu implements ConstantInterface { use HelperTrait, WrapperTrait; protected string $elTag = "\154\x69"; protected string $lvlTag = "\165\x6c"; protected array $lvlAttrs = []; protected ?string $currentLevel = null; protected $preElement = null; public function kkisyguyosoyymqs($ywmkwiwkosakssii) : bool { return (bool) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, "\150\x61\x73\x5f\x63\150\151\154\144\x72\x65\156"); } public function kiiogoueqygqyesm() : string { return $this->lvlTag; } public function oiikmkeaimmqgaiu(string $ckgmacuacakgckiu) : self { $this->lvlTag = $ckgmacuacakgckiu; return $this; } public function cougqgqkumwagiwu() : string { return $this->elTag; } public function eggaocmukisgaqgs(string $giwyeuiuumyaygig) : self { $this->elTag = $giwyeuiuumyaygig; return $this; } public function qyaogeiwikocuwke() : array { return $this->lvlAttrs; } public function seqmucuwuueuqekq(array $ygwksawkeqcyesio) : self { $this->lvlAttrs = $ygwksawkeqcyesio; return $this; } public function display_element($kqywgoqsmuswammk, &$children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, &$aqykuigiuwmmcieu) { $aokagokqyuysuksm = $this->db_fields[self::gouqcwikiiygyasc]; if (!(isset($ywmkwiwkosakssii[0]) && is_object($ywmkwiwkosakssii[0]))) { goto mkomygccqkmkumsi; } $ywmkwiwkosakssii[0]->has_children = !empty($children_elements[$kqywgoqsmuswammk->{$aokagokqyuysuksm}]); mkomygccqkmkumsi: parent::display_element($kqywgoqsmuswammk, $children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, $aqykuigiuwmmcieu); } public function start_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = []) { $aqykuigiuwmmcieu .= $this->usmoayqaggagwuua($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function end_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { $aqykuigiuwmmcieu .= $this->usaequuoiqiccgqe($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function start_el(&$aqykuigiuwmmcieu, $igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = [], $aokagokqyuysuksm = 0) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mqwwsgggokkiiceo = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye(); $kkisyguyosoyymqs = $this->kkisyguyosoyymqs($ywmkwiwkosakssii); if (!$kkisyguyosoyymqs) { goto ussceseaimqywuiy; } $this->currentLevel = $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); ussceseaimqywuiy: $igqsaukqcqscimok = $this->iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs); $ywmkwiwkosakssii = $mqwwsgggokkiiceo->sscegwueamckwmcy("\x6e\x61\x76\137\155\x65\156\165\137\151\164\145\155\x5f\141\x72\147\163", $ywmkwiwkosakssii, $igqsaukqcqscimok, $gquaqgsmiuqsaoum); $wkaqekwwgqsqwcoi = $this->gyceuqsqmswoakmu($igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); $meqocwsecsywiiqs = $this->syiamqaugssemesg($igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); $wwgucssaecqekuek = []; $eeamcawaiqocomwy = $mqwwsgggokkiiceo->sscegwueamckwmcy("\x6e\x61\x76\x5f\155\x65\156\x75\137\x69\x74\145\155\x5f\x75\x72\x6c", $this->womgoiuoesugioqa($igqsaukqcqscimok), $igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\162\145\x6c", $gkyciwoiiisgywcs->get($igqsaukqcqscimok, "\x78\146\156")); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\150\x72\x65\146", $eeamcawaiqocomwy, "\43"); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\164\x69\x74\x6c\x65", $gkyciwoiiisgywcs->get($igqsaukqcqscimok, "\x61\x74\x74\x72\137\x74\x69\164\154\x65")); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\141\x73\163", $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\154\151\156\x6b\137\143\x6c\141\x73\163")); $wusgqmeqeqquywgq = $this->wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\x61\x73\x73", $gkyciwoiiisgywcs->get($igqsaukqcqscimok, "\x63\154\141\x73\x73"), $wusgqmeqeqquywgq); if (!$igqsaukqcqscimok->target) { goto oyiuemaaykgkqqam; } $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\164\x61\x72\x67\145\x74", $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::mgsccwumkcawaqcy)); oyiuemaaykgkqqam: $wwgucssaecqekuek = $this->smkqamusaugagkwi($wwgucssaecqekuek, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum); $smqwgwwgiimmiagq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\142\x65\146\x6f\x72\x65"); $smqwgwwgiimmiagq .= $swqimwqeweekeusq->yuawgssgauywkiia($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\154\x69\156\153\137\142\145\146\157\162\145") . $wkaqekwwgqsqwcoi . $meqocwsecsywiiqs . $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\x6c\151\156\x6b\x5f\141\x66\x74\145\162"), null, $wwgucssaecqekuek); $smqwgwwgiimmiagq = $this->ksosuqqukyweqiao($smqwgwwgiimmiagq, $igqsaukqcqscimok, $kkisyguyosoyymqs); $smqwgwwgiimmiagq .= $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\x61\x66\164\145\162"); $aqykuigiuwmmcieu .= $this->kkgyiaeggsggwioy($igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii) . $smqwgwwgiimmiagq; $this->preElement = $igqsaukqcqscimok; } public function end_el(&$aqykuigiuwmmcieu, $igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { $this->preElement = $igqsaukqcqscimok; $aqykuigiuwmmcieu .= $this->mocasmqewmcioccg($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function usmoayqaggagwuua($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { $wwgucssaecqekuek = $this->qyaogeiwikocuwke(); $wwgucssaecqekuek[self::gouqcwikiiygyasc] = $this->amqewiesyqeqiuai(); $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq($this->kiiogoueqygqyesm(), $this->oaqwemmqmiqqmaie($wwgucssaecqekuek, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii)); return str_repeat("\x9", $gquaqgsmiuqsaoum) . "{$nsmgceoqaqogqmuw}\12"; } public function usaequuoiqiccgqe($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { $qoqkkmgaewoiykkw = str_repeat($this->gquqiqakcmmkgwwi($ywmkwiwkosakssii, "\11"), $gquaqgsmiuqsaoum); return "{$qoqkkmgaewoiykkw}\74\57{$this->kiiogoueqygqyesm()}\76{$this->gquqiqakcmmkgwwi($ywmkwiwkosakssii)}"; } public function kkgyiaeggsggwioy($igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qoqkkmgaewoiykkw = $gquaqgsmiuqsaoum ? str_repeat($this->gquqiqakcmmkgwwi($ywmkwiwkosakssii, "\11"), $gquaqgsmiuqsaoum) : ''; $cmkqisoeyioisqaw = (array) $gkyciwoiiisgywcs->get($igqsaukqcqscimok, "\x63\x6c\x61\163\x73\x65\163", []); $cmkqisoeyioisqaw[] = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\154\x69\x5f\143\154\141\163\163", ''); $gecwyaugygsikyug = implode("\40", $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x6e\x61\166\137\x6d\x65\156\165\137\143\163\163\x5f\x63\154\x61\163\163", array_filter($cmkqisoeyioisqaw), $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum)); $ewyeasmggkiemeiq = $this->qcgmmmeokuequagy(["\143\x6c\x61\163\163" => $gecwyaugygsikyug], $igqsaukqcqscimok, $this->kkisyguyosoyymqs($ywmkwiwkosakssii)); return $qoqkkmgaewoiykkw . $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq($this->cougqgqkumwagiwu(), $ewyeasmggkiemeiq, false); } public function mocasmqewmcioccg($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { return "\x3c\57{$this->cougqgqkumwagiwu()}\x3e{$this->gquqiqakcmmkgwwi($ywmkwiwkosakssii)}"; } public function syiamqaugssemesg($igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii) { $mqwwsgggokkiiceo = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $meqocwsecsywiiqs = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::qescuiwgsyuikume); $meqocwsecsywiiqs = $mqwwsgggokkiiceo->sscegwueamckwmcy("\x74\x68\x65\x5f\164\x69\164\x6c\x65", $meqocwsecsywiiqs, $gkyciwoiiisgywcs->get($igqsaukqcqscimok, "\x49\104")); $meqocwsecsywiiqs = $mqwwsgggokkiiceo->sscegwueamckwmcy("\156\141\x76\x5f\x6d\x65\156\x75\137\151\x74\x65\155\x5f\164\x69\x74\x6c\145", $meqocwsecsywiiqs, $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum); return $this->kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $this->kkisyguyosoyymqs($ywmkwiwkosakssii)); } public function gyceuqsqmswoakmu($igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii) { $mqwwsgggokkiiceo = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye(); $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, self::qgqyauaqwqmqseim); $wkaqekwwgqsqwcoi = $mqwwsgggokkiiceo->sscegwueamckwmcy("\156\x61\x76\x5f\x6d\x65\156\165\x5f\151\x74\145\x6d\x5f\x69\143\157\x6e", $wkaqekwwgqsqwcoi, $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum); $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $this->yukwcwcsqoswwium([], $igqsaukqcqscimok, $this->kkisyguyosoyymqs($ywmkwiwkosakssii), $gquaqgsmiuqsaoum)); return $mqwwsgggokkiiceo->sscegwueamckwmcy("\x6e\x61\166\x5f\155\x65\x6e\x75\x5f\151\x74\145\155\137\151\143\157\156\137\150\x74\155\x6c", $nsmgceoqaqogqmuw, $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum); } public function womgoiuoesugioqa($igqsaukqcqscimok) { $migiiksoiymissge = null; if ($migiiksoiymissge) { goto gqmewagyagamokok; } $migiiksoiymissge = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, self::auqoykcmsiauccao); gqmewagyagamokok: if (!(!$migiiksoiymissge && $igqsaukqcqscimok->object_id)) { goto sqmoqymckwsogsqg; } $migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($igqsaukqcqscimok->object_id, true); sqmoqymckwsogsqg: return $migiiksoiymissge; } public function gquqiqakcmmkgwwi($ywmkwiwkosakssii, string $wmcaeewaokocymiy = "\12") : string { if ("\144\x69\163\143\141\162\x64" === $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, "\151\164\145\155\137\x73\160\x61\x63\151\x6e\147")) { goto uycesqqkoeamocgm; } $kgkcwaioaqiyaoeg = $wmcaeewaokocymiy; goto ceiwqkyquikcemmo; uycesqqkoeamocgm: $kgkcwaioaqiyaoeg = ''; ceiwqkyquikcemmo: return $kgkcwaioaqiyaoeg; } public function iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs) { if (!$kkisyguyosoyymqs) { goto ukomuiwukymcoaso; } $igqsaukqcqscimok = $this->igmaewykumgwoaoy($igqsaukqcqscimok, "\143\154\x61\x73\x73\x65\163", "\150\x61\x73\x2d\x63\x68\151\x6c\144\x72\x65\x6e"); ukomuiwukymcoaso: return $igqsaukqcqscimok; } public function wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs) : string { return ''; } public function kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $meqocwsecsywiiqs; } public function ksosuqqukyweqiao($iwywmkygwewiamwm, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $iwywmkygwewiamwm; } public function qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $siquossayskcwkea; } public function yukwcwcsqoswwium($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum = 0) { return $siquossayskcwkea; } public function smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum = 0) { return $siquossayskcwkea; } public function oaqwemmqmiqqmaie($siquossayskcwkea, $kywcekcsigagsimc, $ywmkwiwkosakssii) { return $siquossayskcwkea; } public final function amqewiesyqeqiuai() : string { return "\163\x75\x62\x6d\145\156\x75\137{$this->currentLevel}"; } public function igmaewykumgwoaoy(&$wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $ggauoeuaesiymgee = '') { $eqgoocgaqwqcimie = !empty($eqgoocgaqwqcimie) ? $eqgoocgaqwqcimie : $ggauoeuaesiymgee; $wwgucssaecqekuek = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie); return $wwgucssaecqekuek; } }
