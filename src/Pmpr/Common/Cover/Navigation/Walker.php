<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63cc007a51661             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Navigation; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Walker_Nav_Menu; use WP_Post; class Walker extends Walker_Nav_Menu implements ConstantInterface { protected string $elTag = "\x6c\x69"; protected string $lvlTag = "\x75\x6c"; protected array $lvlAttrs = []; protected ?string $currentLevel = null; public function kiiogoueqygqyesm() : string { return $this->lvlTag; } public function oiikmkeaimmqgaiu(string $ckgmacuacakgckiu) : self { $this->lvlTag = $ckgmacuacakgckiu; return $this; } public function cougqgqkumwagiwu() : string { return $this->elTag; } public function eggaocmukisgaqgs(string $giwyeuiuumyaygig) : self { $this->elTag = $giwyeuiuumyaygig; return $this; } public function qyaogeiwikocuwke() : array { return $this->lvlAttrs; } public function seqmucuwuueuqekq(array $ygwksawkeqcyesio) : self { $this->lvlAttrs = $ygwksawkeqcyesio; return $this; } public function display_element($kqywgoqsmuswammk, &$children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, &$aqykuigiuwmmcieu) { $aokagokqyuysuksm = $this->db_fields[self::gouqcwikiiygyasc]; if (!(isset($ywmkwiwkosakssii[0]) && is_object($ywmkwiwkosakssii[0]))) { goto kooskuwkuayiuose; } $ywmkwiwkosakssii[0]->has_children = !empty($children_elements[$kqywgoqsmuswammk->{$aokagokqyuysuksm}]); kooskuwkuayiuose: parent::display_element($kqywgoqsmuswammk, $children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, $aqykuigiuwmmcieu); } public function start_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = []) { $wwgucssaecqekuek = $this->qyaogeiwikocuwke(); $wwgucssaecqekuek[self::gouqcwikiiygyasc] = $this->amqewiesyqeqiuai(); $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq($this->kiiogoueqygqyesm(), $wwgucssaecqekuek); $aqykuigiuwmmcieu .= str_repeat("\11", $gquaqgsmiuqsaoum) . "{$nsmgceoqaqogqmuw}\xa"; } public function end_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { $qoqkkmgaewoiykkw = str_repeat($this->gquqiqakcmmkgwwi($ywmkwiwkosakssii, "\11"), $gquaqgsmiuqsaoum); $aqykuigiuwmmcieu .= "{$qoqkkmgaewoiykkw}\x3c\57{$this->kiiogoueqygqyesm()}\76{$this->gquqiqakcmmkgwwi($ywmkwiwkosakssii)}"; } public function start_el(&$aqykuigiuwmmcieu, $igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = [], $aokagokqyuysuksm = 0) { $kkisyguyosoyymqs = ManipulateArray::get($ywmkwiwkosakssii, "\x68\141\x73\x5f\143\150\151\x6c\144\x72\145\x6e"); if (!$kkisyguyosoyymqs) { goto qwcegcuowwgiccos; } $this->currentLevel = ManipulateString::uniqid(); qwcegcuowwgiccos: $igqsaukqcqscimok = $this->iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs); $ywmkwiwkosakssii = DecoratorHook::sscegwueamckwmcy("\x6e\141\166\137\155\145\x6e\165\x5f\151\x74\145\x6d\137\141\x72\x67\163", $ywmkwiwkosakssii, $igqsaukqcqscimok, $gquaqgsmiuqsaoum); $migiiksoiymissge = null; if ($migiiksoiymissge) { goto qcessicwuikwqsis; } $migiiksoiymissge = ManipulateArray::get($igqsaukqcqscimok, self::auqoykcmsiauccao); qcessicwuikwqsis: if (!(!$migiiksoiymissge && $igqsaukqcqscimok->object_id)) { goto yssscwioiyygssec; } $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($igqsaukqcqscimok->object_id, true); yssscwioiyygssec: $wwgucssaecqekuek = []; $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x72\145\154", ManipulateArray::get($igqsaukqcqscimok, "\x78\x66\156")); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\150\162\x65\146", $migiiksoiymissge, "\43"); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\164\x69\x74\154\145", ManipulateArray::get($igqsaukqcqscimok, "\x61\x74\x74\x72\x5f\164\x69\x74\x6c\145")); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\x61\x73\x73", ManipulateArray::get($ywmkwiwkosakssii, "\154\x69\156\153\137\x63\x6c\141\163\x73")); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\x61\163\163", ManipulateArray::get($igqsaukqcqscimok, "\143\154\x61\163\163"), $this->wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs)); if (!$igqsaukqcqscimok->target) { goto ieumumsgyguceusy; } $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x74\141\162\x67\145\x74", ManipulateArray::get($igqsaukqcqscimok, self::mgsccwumkcawaqcy)); ieumumsgyguceusy: $wwgucssaecqekuek = DecoratorHook::sscegwueamckwmcy("\x6e\141\x76\137\155\145\156\165\x5f\154\x69\x6e\153\137\x61\x74\164\x72\151\142\165\x74\x65\163", $wwgucssaecqekuek, $igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); $meqocwsecsywiiqs = ManipulateArray::get($igqsaukqcqscimok, self::qescuiwgsyuikume); $meqocwsecsywiiqs = DecoratorHook::sscegwueamckwmcy("\164\x68\x65\137\x74\x69\x74\x6c\145", $meqocwsecsywiiqs, ManipulateArray::get($igqsaukqcqscimok, "\111\x44")); $meqocwsecsywiiqs = DecoratorHook::sscegwueamckwmcy("\x6e\x61\166\x5f\155\x65\156\x75\137\x69\x74\x65\x6d\x5f\x74\151\x74\154\x65", $meqocwsecsywiiqs, $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum); $meqocwsecsywiiqs = $this->kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $kkisyguyosoyymqs); $wwgucssaecqekuek = $this->smkqamusaugagkwi($wwgucssaecqekuek, $igqsaukqcqscimok, $kkisyguyosoyymqs); $smqwgwwgiimmiagq = ManipulateArray::get($ywmkwiwkosakssii, "\x62\145\146\x6f\162\145"); $smqwgwwgiimmiagq .= ManipulateHTML::yuawgssgauywkiia(ManipulateArray::get($ywmkwiwkosakssii, "\x6c\151\156\x6b\137\x62\x65\146\157\x72\x65") . $meqocwsecsywiiqs . ManipulateArray::get($ywmkwiwkosakssii, "\x6c\x69\x6e\x6b\x5f\x61\x66\164\145\x72"), null, $wwgucssaecqekuek); $smqwgwwgiimmiagq = $this->ksosuqqukyweqiao($smqwgwwgiimmiagq, $igqsaukqcqscimok, $kkisyguyosoyymqs); $smqwgwwgiimmiagq .= ManipulateArray::get($ywmkwiwkosakssii, "\x61\x66\x74\x65\162"); $qoqkkmgaewoiykkw = $gquaqgsmiuqsaoum ? str_repeat($this->gquqiqakcmmkgwwi($ywmkwiwkosakssii, "\x9"), $gquaqgsmiuqsaoum) : ''; $cmkqisoeyioisqaw = (array) ManipulateArray::get($igqsaukqcqscimok, "\x63\154\x61\163\x73\x65\163", []); $cmkqisoeyioisqaw[] = ManipulateArray::get($ywmkwiwkosakssii, "\154\x69\x5f\143\154\141\x73\163", ''); $gecwyaugygsikyug = implode("\x20", DecoratorHook::sscegwueamckwmcy("\x6e\x61\x76\137\155\x65\156\165\x5f\x63\x73\x73\x5f\x63\154\x61\x73\x73", array_filter($cmkqisoeyioisqaw), $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum)); $ewyeasmggkiemeiq = $this->qcgmmmeokuequagy(["\143\x6c\x61\x73\163" => $gecwyaugygsikyug], $igqsaukqcqscimok, $kkisyguyosoyymqs); $aqykuigiuwmmcieu .= $qoqkkmgaewoiykkw . ManipulateHTML::qgsekwygcgawekeq($this->cougqgqkumwagiwu(), $ewyeasmggkiemeiq, false, $smqwgwwgiimmiagq); $aqykuigiuwmmcieu = DecoratorHook::sscegwueamckwmcy("\x77\x61\x6c\x6b\x65\162\137\156\x61\166\137\155\x65\156\x75\x5f\x73\x74\141\x72\x74\137\145\154", $aqykuigiuwmmcieu, $igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function gquqiqakcmmkgwwi($ywmkwiwkosakssii, string $wmcaeewaokocymiy = "\xa") : string { if ("\x64\x69\163\143\x61\162\x64" === ManipulateArray::get($ywmkwiwkosakssii, "\x69\x74\x65\155\x5f\163\160\141\143\x69\156\147")) { goto coywmiyqgsweuiic; } $kgkcwaioaqiyaoeg = $wmcaeewaokocymiy; goto siqagquguiemuoku; coywmiyqgsweuiic: $kgkcwaioaqiyaoeg = ''; siqagquguiemuoku: return $kgkcwaioaqiyaoeg; } public function end_el(&$aqykuigiuwmmcieu, $data_object, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { $aqykuigiuwmmcieu .= "\x3c\x2f{$this->cougqgqkumwagiwu()}\76{$this->gquqiqakcmmkgwwi($ywmkwiwkosakssii)}"; } public function iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs) { if (!$kkisyguyosoyymqs) { goto ycakugokkqkuqyiu; } $igqsaukqcqscimok = $this->igmaewykumgwoaoy($igqsaukqcqscimok, "\x63\x6c\141\x73\163\145\x73", "\x68\x61\163\55\143\x68\151\154\144\162\x65\x6e"); ycakugokkqkuqyiu: return $igqsaukqcqscimok; } public function wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs) : string { return ''; } public function kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $meqocwsecsywiiqs; } public function ksosuqqukyweqiao($iwywmkygwewiamwm, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $iwywmkygwewiamwm; } public function qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $siquossayskcwkea; } public function smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $siquossayskcwkea; } public final function amqewiesyqeqiuai() : string { return "\x73\x75\142\x6d\145\156\165\137{$this->currentLevel}"; } public function igmaewykumgwoaoy(&$wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $ggauoeuaesiymgee = '') { $eqgoocgaqwqcimie = !empty($eqgoocgaqwqcimie) ? $eqgoocgaqwqcimie : $ggauoeuaesiymgee; $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie); return $wwgucssaecqekuek; } }
