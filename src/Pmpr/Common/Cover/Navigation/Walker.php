<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             667883761741c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Navigation; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Walker_Nav_Menu; use WP_Post; class Walker extends Walker_Nav_Menu implements ConstantInterface { use HelperTrait, WrapperTrait; protected string $elTag = "\x6c\151"; protected string $lvlTag = "\165\154"; protected array $lvlAttrs = []; protected ?string $currentLevel = null; protected $preElement = null; public function kkisyguyosoyymqs($ywmkwiwkosakssii) : bool { return (bool) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, "\x68\141\x73\x5f\143\150\x69\154\144\x72\145\x6e"); } public function kiiogoueqygqyesm() : string { return $this->lvlTag; } public function oiikmkeaimmqgaiu(string $ckgmacuacakgckiu) : self { $this->lvlTag = $ckgmacuacakgckiu; return $this; } public function cougqgqkumwagiwu() : string { return $this->elTag; } public function eggaocmukisgaqgs(string $giwyeuiuumyaygig) : self { $this->elTag = $giwyeuiuumyaygig; return $this; } public function qyaogeiwikocuwke() : array { return $this->lvlAttrs; } public function seqmucuwuueuqekq(array $ygwksawkeqcyesio) : self { $this->lvlAttrs = $ygwksawkeqcyesio; return $this; } public function display_element($kqywgoqsmuswammk, &$children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, &$aqykuigiuwmmcieu) { $aokagokqyuysuksm = $this->db_fields[self::gouqcwikiiygyasc]; if (!(isset($ywmkwiwkosakssii[0]) && is_object($ywmkwiwkosakssii[0]))) { goto gkkwmqoacciwomqs; } $ywmkwiwkosakssii[0]->has_children = !empty($children_elements[$kqywgoqsmuswammk->{$aokagokqyuysuksm}]); gkkwmqoacciwomqs: parent::display_element($kqywgoqsmuswammk, $children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, $aqykuigiuwmmcieu); } public function start_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = []) { $aqykuigiuwmmcieu .= $this->usmoayqaggagwuua($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function end_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { $aqykuigiuwmmcieu .= $this->usaequuoiqiccgqe($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function start_el(&$aqykuigiuwmmcieu, $igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = [], $aokagokqyuysuksm = 0) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mqwwsgggokkiiceo = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye(); $kkisyguyosoyymqs = $this->kkisyguyosoyymqs($ywmkwiwkosakssii); if (!$kkisyguyosoyymqs) { goto kucqcgeesiccuuia; } $this->currentLevel = $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); kucqcgeesiccuuia: $igqsaukqcqscimok = $this->iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs); $ywmkwiwkosakssii = $mqwwsgggokkiiceo->sscegwueamckwmcy("\156\x61\166\137\155\x65\156\x75\x5f\151\164\x65\155\x5f\141\x72\147\163", $ywmkwiwkosakssii, $igqsaukqcqscimok, $gquaqgsmiuqsaoum); $wkaqekwwgqsqwcoi = $this->gyceuqsqmswoakmu($igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); $meqocwsecsywiiqs = $this->syiamqaugssemesg($igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); $wwgucssaecqekuek = []; $eeamcawaiqocomwy = $mqwwsgggokkiiceo->sscegwueamckwmcy("\x6e\x61\166\x5f\155\145\156\165\137\151\164\145\x6d\x5f\165\162\154", $this->womgoiuoesugioqa($igqsaukqcqscimok), $igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x72\145\x6c", $gkyciwoiiisgywcs->get($igqsaukqcqscimok, "\x78\x66\x6e")); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x68\162\x65\146", $eeamcawaiqocomwy, "\43"); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x74\x69\x74\154\145", $gkyciwoiiisgywcs->get($igqsaukqcqscimok, "\141\x74\x74\162\137\164\x69\164\x6c\x65")); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\x61\x73\x73", $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\154\151\156\x6b\137\143\154\x61\x73\x73")); $wusgqmeqeqquywgq = $this->wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\x61\163\x73", $gkyciwoiiisgywcs->get($igqsaukqcqscimok, "\143\x6c\141\x73\163"), $wusgqmeqeqquywgq); if (!$igqsaukqcqscimok->target) { goto oycuaqewsskgkqci; } $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x74\x61\x72\x67\145\164", $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::mgsccwumkcawaqcy)); oycuaqewsskgkqci: $wwgucssaecqekuek = $this->smkqamusaugagkwi($wwgucssaecqekuek, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum); $smqwgwwgiimmiagq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\142\x65\x66\x6f\162\x65"); $smqwgwwgiimmiagq .= $swqimwqeweekeusq->yuawgssgauywkiia($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\x6c\x69\x6e\x6b\x5f\x62\x65\146\157\x72\x65") . $wkaqekwwgqsqwcoi . $meqocwsecsywiiqs . $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\154\151\156\x6b\137\141\146\x74\x65\162"), null, $wwgucssaecqekuek); $smqwgwwgiimmiagq = $this->ksosuqqukyweqiao($smqwgwwgiimmiagq, $igqsaukqcqscimok, $kkisyguyosoyymqs); $smqwgwwgiimmiagq .= $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\x61\146\164\x65\162"); $aqykuigiuwmmcieu .= $this->kkgyiaeggsggwioy($igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii) . $smqwgwwgiimmiagq; $this->preElement = $igqsaukqcqscimok; } public function end_el(&$aqykuigiuwmmcieu, $igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { $this->preElement = $igqsaukqcqscimok; $aqykuigiuwmmcieu .= $this->mocasmqewmcioccg($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function usmoayqaggagwuua($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { $wwgucssaecqekuek = $this->qyaogeiwikocuwke(); $wwgucssaecqekuek[self::gouqcwikiiygyasc] = $this->amqewiesyqeqiuai(); $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq($this->kiiogoueqygqyesm(), $this->oaqwemmqmiqqmaie($wwgucssaecqekuek, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii)); return str_repeat("\11", $gquaqgsmiuqsaoum) . "{$nsmgceoqaqogqmuw}\12"; } public function usaequuoiqiccgqe($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { $qoqkkmgaewoiykkw = str_repeat($this->gquqiqakcmmkgwwi($ywmkwiwkosakssii, "\11"), $gquaqgsmiuqsaoum); return "{$qoqkkmgaewoiykkw}\74\57{$this->kiiogoueqygqyesm()}\x3e{$this->gquqiqakcmmkgwwi($ywmkwiwkosakssii)}"; } public function kkgyiaeggsggwioy($igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qoqkkmgaewoiykkw = $gquaqgsmiuqsaoum ? str_repeat($this->gquqiqakcmmkgwwi($ywmkwiwkosakssii, "\x9"), $gquaqgsmiuqsaoum) : ''; $cmkqisoeyioisqaw = (array) $gkyciwoiiisgywcs->get($igqsaukqcqscimok, "\143\x6c\141\x73\x73\145\163", []); $cmkqisoeyioisqaw[] = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\154\151\x5f\x63\x6c\x61\x73\163", ''); $gecwyaugygsikyug = implode("\x20", $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\156\x61\166\x5f\155\x65\156\165\137\143\163\x73\x5f\143\x6c\x61\x73\x73", array_filter($cmkqisoeyioisqaw), $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum)); $ewyeasmggkiemeiq = $this->qcgmmmeokuequagy(["\143\x6c\141\163\163" => $gecwyaugygsikyug], $igqsaukqcqscimok, $this->kkisyguyosoyymqs($ywmkwiwkosakssii)); return $qoqkkmgaewoiykkw . $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq($this->cougqgqkumwagiwu(), $ewyeasmggkiemeiq, false); } public function mocasmqewmcioccg($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { return "\74\57{$this->cougqgqkumwagiwu()}\76{$this->gquqiqakcmmkgwwi($ywmkwiwkosakssii)}"; } public function syiamqaugssemesg($igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii) { $mqwwsgggokkiiceo = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $meqocwsecsywiiqs = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::qescuiwgsyuikume); $meqocwsecsywiiqs = $mqwwsgggokkiiceo->sscegwueamckwmcy("\x74\150\145\137\x74\x69\164\x6c\145", $meqocwsecsywiiqs, $gkyciwoiiisgywcs->get($igqsaukqcqscimok, "\111\x44")); $meqocwsecsywiiqs = $mqwwsgggokkiiceo->sscegwueamckwmcy("\x6e\x61\x76\137\x6d\x65\x6e\x75\x5f\151\x74\145\x6d\137\164\151\164\154\145", $meqocwsecsywiiqs, $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum); return $this->kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $this->kkisyguyosoyymqs($ywmkwiwkosakssii)); } public function gyceuqsqmswoakmu($igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii) { $mqwwsgggokkiiceo = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye(); $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, self::qgqyauaqwqmqseim); $wkaqekwwgqsqwcoi = $mqwwsgggokkiiceo->sscegwueamckwmcy("\156\141\x76\x5f\155\145\x6e\x75\137\151\x74\145\155\x5f\x69\x63\x6f\x6e", $wkaqekwwgqsqwcoi, $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum); $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $this->yukwcwcsqoswwium([], $igqsaukqcqscimok, $this->kkisyguyosoyymqs($ywmkwiwkosakssii), $gquaqgsmiuqsaoum)); return $mqwwsgggokkiiceo->sscegwueamckwmcy("\156\141\x76\x5f\x6d\x65\x6e\165\x5f\151\164\x65\155\137\x69\143\x6f\156\x5f\150\164\155\x6c", $nsmgceoqaqogqmuw, $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum); } public function womgoiuoesugioqa($igqsaukqcqscimok) { $migiiksoiymissge = null; if ($migiiksoiymissge) { goto ocmagamuyawyiyka; } $migiiksoiymissge = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, self::auqoykcmsiauccao); ocmagamuyawyiyka: if (!(!$migiiksoiymissge && $igqsaukqcqscimok->object_id)) { goto amqgiisymksuuuss; } $migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($igqsaukqcqscimok->object_id, true); amqgiisymksuuuss: return $migiiksoiymissge; } public function gquqiqakcmmkgwwi($ywmkwiwkosakssii, string $wmcaeewaokocymiy = "\xa") : string { if ("\x64\151\x73\x63\x61\162\x64" === $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, "\151\x74\145\155\x5f\163\x70\x61\143\151\156\147")) { goto iwgmywqocewwgoeo; } $kgkcwaioaqiyaoeg = $wmcaeewaokocymiy; goto syoeqaqkseguwmgy; iwgmywqocewwgoeo: $kgkcwaioaqiyaoeg = ''; syoeqaqkseguwmgy: return $kgkcwaioaqiyaoeg; } public function iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs) { if (!$kkisyguyosoyymqs) { goto sgiouaqukyycswqm; } $igqsaukqcqscimok = $this->igmaewykumgwoaoy($igqsaukqcqscimok, "\x63\x6c\141\163\163\x65\163", "\150\141\163\x2d\x63\150\x69\x6c\x64\x72\145\x6e"); sgiouaqukyycswqm: return $igqsaukqcqscimok; } public function wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs) : string { return ''; } public function kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $meqocwsecsywiiqs; } public function ksosuqqukyweqiao($iwywmkygwewiamwm, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $iwywmkygwewiamwm; } public function qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $siquossayskcwkea; } public function yukwcwcsqoswwium($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum = 0) { return $siquossayskcwkea; } public function smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum = 0) { return $siquossayskcwkea; } public function oaqwemmqmiqqmaie($siquossayskcwkea, $kywcekcsigagsimc, $ywmkwiwkosakssii) { return $siquossayskcwkea; } public final function amqewiesyqeqiuai() : string { return "\x73\165\142\x6d\145\x6e\165\x5f{$this->currentLevel}"; } public function igmaewykumgwoaoy(&$wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $ggauoeuaesiymgee = '') { $eqgoocgaqwqcimie = !empty($eqgoocgaqwqcimie) ? $eqgoocgaqwqcimie : $ggauoeuaesiymgee; $wwgucssaecqekuek = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie); return $wwgucssaecqekuek; } }
