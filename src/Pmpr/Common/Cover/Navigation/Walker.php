<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             626988f5e0544             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Navigation; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Walker_Nav_Menu; use WP_Post; class Walker extends Walker_Nav_Menu implements ConstantInterface { protected string $elTag = "\x6c\x69"; protected string $lvlTag = "\x75\x6c"; protected array $lvlAttrs = []; protected ?string $currentLevel = null; public function kiiogoueqygqyesm() : string { return $this->lvlTag; } public function oiikmkeaimmqgaiu(string $ckgmacuacakgckiu) : self { $this->lvlTag = $ckgmacuacakgckiu; return $this; } public function cougqgqkumwagiwu() : string { return $this->elTag; } public function eggaocmukisgaqgs(string $giwyeuiuumyaygig) : self { $this->elTag = $giwyeuiuumyaygig; return $this; } public function qyaogeiwikocuwke() : array { return $this->lvlAttrs; } public function seqmucuwuueuqekq(array $ygwksawkeqcyesio) : self { $this->lvlAttrs = $ygwksawkeqcyesio; return $this; } public function display_element($kqywgoqsmuswammk, &$children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, &$aqykuigiuwmmcieu) { $aokagokqyuysuksm = $this->db_fields["\x69\144"]; if (!(isset($ywmkwiwkosakssii[0]) && is_object($ywmkwiwkosakssii[0]))) { goto kqgcyoscsusgoaqi; } $ywmkwiwkosakssii[0]->has_children = !empty($children_elements[$kqywgoqsmuswammk->{$aokagokqyuysuksm}]); kqgcyoscsusgoaqi: parent::display_element($kqywgoqsmuswammk, $children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, $aqykuigiuwmmcieu); } public function start_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = []) { $wwgucssaecqekuek = $this->qyaogeiwikocuwke(); $wwgucssaecqekuek["\x69\144"] = $this->amqewiesyqeqiuai(); $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq($this->kiiogoueqygqyesm(), $wwgucssaecqekuek); $aqykuigiuwmmcieu .= str_repeat("\x9", $gquaqgsmiuqsaoum) . "{$nsmgceoqaqogqmuw}\xa"; } public function end_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { if (isset($ywmkwiwkosakssii->item_spacing) && "\x64\151\x73\143\141\162\144" === $ywmkwiwkosakssii->item_spacing) { goto ueigkucgaucgeimc; } $oiywaimuayauqecq = "\11"; $aaycmcgqqqsysccs = "\xa"; goto sggawugoykqcmsug; ueigkucgaucgeimc: $oiywaimuayauqecq = ''; $aaycmcgqqqsysccs = ''; sggawugoykqcmsug: $qoqkkmgaewoiykkw = str_repeat($oiywaimuayauqecq, $gquaqgsmiuqsaoum); $aqykuigiuwmmcieu .= "{$qoqkkmgaewoiykkw}\74\57{$this->kiiogoueqygqyesm()}\x3e{$aaycmcgqqqsysccs}"; } public function start_el(&$aqykuigiuwmmcieu, $igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = [], $aokagokqyuysuksm = 0) { $kkisyguyosoyymqs = ManipulateArray::get($ywmkwiwkosakssii, "\x68\141\163\x5f\143\x68\x69\154\144\x72\145\156"); if (!$kkisyguyosoyymqs) { goto wkeuuycukmuqiaom; } $this->currentLevel = ManipulateString::uniqid(); wkeuuycukmuqiaom: $igqsaukqcqscimok = $this->iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs); $ywmkwiwkosakssii = DecoratorHook::sscegwueamckwmcy("\x6e\x61\166\137\x6d\x65\156\165\137\x69\x74\x65\x6d\137\x61\162\x67\163", $ywmkwiwkosakssii, $igqsaukqcqscimok, $gquaqgsmiuqsaoum); $migiiksoiymissge = null; if ($migiiksoiymissge) { goto wakmayaoqoskekqy; } $migiiksoiymissge = ManipulateArray::get($igqsaukqcqscimok, self::auqoykcmsiauccao); wakmayaoqoskekqy: if (!(!$migiiksoiymissge && $igqsaukqcqscimok->object_id)) { goto qmuwoecuacmkwgem; } $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($igqsaukqcqscimok->object_id, true); qmuwoecuacmkwgem: $wwgucssaecqekuek = []; $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x72\145\x6c", $igqsaukqcqscimok->xfn); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x68\x72\x65\x66", $migiiksoiymissge, "\43"); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\164\x69\164\x6c\x65", $igqsaukqcqscimok->attr_title); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\141\x73\163", $ywmkwiwkosakssii->link_class ?? "\x6e\x61\x76\x2d\154\151\x6e\x6b"); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\141\x73\x73", $igqsaukqcqscimok->class ?? '', $this->wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs)); if (!$igqsaukqcqscimok->target) { goto owmuceyswmgueasi; } $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x74\141\x72\147\145\x74", $igqsaukqcqscimok->target); owmuceyswmgueasi: $wwgucssaecqekuek = DecoratorHook::sscegwueamckwmcy("\x6e\x61\166\x5f\155\145\156\x75\x5f\154\x69\x6e\x6b\137\141\x74\164\162\151\142\165\x74\x65\163", $wwgucssaecqekuek, $igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); $meqocwsecsywiiqs = $igqsaukqcqscimok->title; $meqocwsecsywiiqs = DecoratorHook::sscegwueamckwmcy("\164\150\145\x5f\x74\151\164\x6c\145", $meqocwsecsywiiqs, $igqsaukqcqscimok->ID); $meqocwsecsywiiqs = DecoratorHook::sscegwueamckwmcy("\x6e\x61\x76\137\x6d\145\156\165\137\x69\164\x65\x6d\x5f\x74\x69\x74\154\x65", $meqocwsecsywiiqs, $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum); $meqocwsecsywiiqs = $this->kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $kkisyguyosoyymqs); $wwgucssaecqekuek = $this->smkqamusaugagkwi($wwgucssaecqekuek, $igqsaukqcqscimok, $kkisyguyosoyymqs); $smqwgwwgiimmiagq = $ywmkwiwkosakssii->before; $smqwgwwgiimmiagq .= ManipulateHTML::uuccukgasskgimsq("\x61", $wwgucssaecqekuek, $ywmkwiwkosakssii->link_before . $meqocwsecsywiiqs . $ywmkwiwkosakssii->link_after); $smqwgwwgiimmiagq = $this->ksosuqqukyweqiao($smqwgwwgiimmiagq, $igqsaukqcqscimok, $kkisyguyosoyymqs); $smqwgwwgiimmiagq .= $ywmkwiwkosakssii->after; if (isset($ywmkwiwkosakssii->item_spacing) && "\144\x69\x73\143\141\162\144" === $ywmkwiwkosakssii->item_spacing) { goto mwsmsguqqkcwiiuk; } $oiywaimuayauqecq = "\11"; goto eeauyscekuckoues; mwsmsguqqkcwiiuk: $oiywaimuayauqecq = ''; eeauyscekuckoues: $qoqkkmgaewoiykkw = $gquaqgsmiuqsaoum ? str_repeat($oiywaimuayauqecq, $gquaqgsmiuqsaoum) : ''; $cmkqisoeyioisqaw = empty($igqsaukqcqscimok->classes) ? [] : (array) $igqsaukqcqscimok->classes; $cmkqisoeyioisqaw[] = $ywmkwiwkosakssii->li_class ?? ''; $gecwyaugygsikyug = join("\x20", DecoratorHook::sscegwueamckwmcy("\156\x61\x76\137\x6d\x65\156\165\137\143\x73\163\137\143\x6c\141\x73\x73", array_filter($cmkqisoeyioisqaw), $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum)); $ewyeasmggkiemeiq = $this->qcgmmmeokuequagy(["\x63\154\141\163\163" => $gecwyaugygsikyug], $igqsaukqcqscimok, $kkisyguyosoyymqs); $aqykuigiuwmmcieu .= $qoqkkmgaewoiykkw . ManipulateHTML::qgsekwygcgawekeq($this->cougqgqkumwagiwu(), $ewyeasmggkiemeiq, false, $smqwgwwgiimmiagq); $aqykuigiuwmmcieu = DecoratorHook::sscegwueamckwmcy("\x77\x61\154\153\145\162\x5f\x6e\141\x76\x5f\155\145\156\x75\x5f\x73\x74\x61\162\164\x5f\145\154", $aqykuigiuwmmcieu, $igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function end_el(&$aqykuigiuwmmcieu, $data_object, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { if (isset($ywmkwiwkosakssii->item_spacing) && "\144\x69\x73\x63\x61\x72\x64" === $ywmkwiwkosakssii->item_spacing) { goto eogwckcymuugikuy; } $aaycmcgqqqsysccs = "\xa"; goto msemumccgceyugmg; eogwckcymuugikuy: $aaycmcgqqqsysccs = ''; msemumccgceyugmg: $aqykuigiuwmmcieu .= "\74\x2f{$this->cougqgqkumwagiwu()}\x3e{$aaycmcgqqqsysccs}"; } public function iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs) { if (!$kkisyguyosoyymqs) { goto wagqgeqymeqoeuyi; } $igqsaukqcqscimok = $this->igmaewykumgwoaoy($igqsaukqcqscimok, "\143\x6c\141\x73\x73\145\163", "\150\141\163\x2d\143\150\x69\x6c\x64\x72\145\156"); wagqgeqymeqoeuyi: return $igqsaukqcqscimok; } public function wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs) : string { return ''; } public function kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $meqocwsecsywiiqs; } public function ksosuqqukyweqiao($iwywmkygwewiamwm, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $iwywmkygwewiamwm; } public function qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $siquossayskcwkea; } public function smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $siquossayskcwkea; } public final function amqewiesyqeqiuai() : string { return "\x73\x75\142\155\145\x6e\x75\x5f{$this->currentLevel}"; } public function igmaewykumgwoaoy(&$wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $ggauoeuaesiymgee = '') { $eqgoocgaqwqcimie = !empty($eqgoocgaqwqcimie) ? $eqgoocgaqwqcimie : $ggauoeuaesiymgee; $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie); return $wwgucssaecqekuek; } }
