<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6236558843ba2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Theme\Navigation; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Walker_Nav_Menu; use WP_Post; class Walker extends Walker_Nav_Menu implements ConstantInterface { protected string $elTag = "\x6c\151"; protected string $lvlTag = "\165\x6c"; protected array $lvlAttrs = []; protected ?string $currentLevel = null; public function kiiogoueqygqyesm() : string { return $this->lvlTag; } public function oiikmkeaimmqgaiu(string $ckgmacuacakgckiu) : self { $this->lvlTag = $ckgmacuacakgckiu; return $this; } public function cougqgqkumwagiwu() : string { return $this->elTag; } public function eggaocmukisgaqgs(string $giwyeuiuumyaygig) : self { $this->elTag = $giwyeuiuumyaygig; return $this; } public function qyaogeiwikocuwke() : array { return $this->lvlAttrs; } public function seqmucuwuueuqekq(array $ygwksawkeqcyesio) : self { $this->lvlAttrs = $ygwksawkeqcyesio; return $this; } public function display_element($kqywgoqsmuswammk, &$children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, &$aqykuigiuwmmcieu) { $aokagokqyuysuksm = $this->db_fields["\x69\144"]; if (!(isset($ywmkwiwkosakssii[0]) && is_object($ywmkwiwkosakssii[0]))) { goto qogqewiwmwiwskgm; } $ywmkwiwkosakssii[0]->has_children = !empty($children_elements[$kqywgoqsmuswammk->{$aokagokqyuysuksm}]); qogqewiwmwiwskgm: parent::display_element($kqywgoqsmuswammk, $children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, $aqykuigiuwmmcieu); } public function start_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = []) { $wwgucssaecqekuek = $this->qyaogeiwikocuwke(); $wwgucssaecqekuek["\151\144"] = $this->amqewiesyqeqiuai(); $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq($this->kiiogoueqygqyesm(), $wwgucssaecqekuek); $aqykuigiuwmmcieu .= str_repeat("\x9", $gquaqgsmiuqsaoum) . "{$nsmgceoqaqogqmuw}\12"; } public function end_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { if (isset($ywmkwiwkosakssii->item_spacing) && "\x64\x69\163\143\141\x72\144" === $ywmkwiwkosakssii->item_spacing) { goto qgoiooayqmqqsiok; } $oiywaimuayauqecq = "\x9"; $aaycmcgqqqsysccs = "\12"; goto qwigomakwmyiwkgo; qgoiooayqmqqsiok: $oiywaimuayauqecq = ''; $aaycmcgqqqsysccs = ''; qwigomakwmyiwkgo: $qoqkkmgaewoiykkw = str_repeat($oiywaimuayauqecq, $gquaqgsmiuqsaoum); $aqykuigiuwmmcieu .= "{$qoqkkmgaewoiykkw}\x3c\x2f{$this->kiiogoueqygqyesm()}\76{$aaycmcgqqqsysccs}"; } public function start_el(&$aqykuigiuwmmcieu, $igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = [], $aokagokqyuysuksm = 0) { $kkisyguyosoyymqs = ManipulateArray::get($ywmkwiwkosakssii, "\150\x61\163\137\x63\x68\x69\x6c\144\x72\145\x6e"); if (!$kkisyguyosoyymqs) { goto myoicgcuugciueis; } $this->currentLevel = ManipulateString::uniqid(); myoicgcuugciueis: $igqsaukqcqscimok = $this->iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs); $ywmkwiwkosakssii = DecoratorHook::sscegwueamckwmcy("\156\141\x76\137\x6d\x65\x6e\x75\137\151\x74\145\155\x5f\141\162\147\x73", $ywmkwiwkosakssii, $igqsaukqcqscimok, $gquaqgsmiuqsaoum); $migiiksoiymissge = null; if ($migiiksoiymissge) { goto asmecuqiyyswueqe; } $migiiksoiymissge = ManipulateArray::get($igqsaukqcqscimok, self::auqoykcmsiauccao); asmecuqiyyswueqe: if (!(!$migiiksoiymissge && $igqsaukqcqscimok->object_id)) { goto csscmcacoikwsecs; } $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($igqsaukqcqscimok->object_id, true); csscmcacoikwsecs: $wwgucssaecqekuek = []; $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\162\145\x6c", $igqsaukqcqscimok->xfn); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\150\162\145\x66", $migiiksoiymissge, "\43"); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\164\x69\x74\x6c\145", $igqsaukqcqscimok->attr_title); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\x61\x73\x73", $ywmkwiwkosakssii->link_class ?? "\x6e\x61\166\55\x6c\x69\156\x6b"); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\141\163\x73", $igqsaukqcqscimok->class ?? '', $this->wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs)); if (!$igqsaukqcqscimok->target) { goto cuykwgmswkskqkyi; } $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x74\x61\x72\x67\145\164", $igqsaukqcqscimok->target); cuykwgmswkskqkyi: $wwgucssaecqekuek = DecoratorHook::sscegwueamckwmcy("\156\x61\166\x5f\x6d\145\x6e\x75\137\x6c\151\156\x6b\137\x61\x74\164\162\x69\142\x75\x74\145\x73", $wwgucssaecqekuek, $igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); $meqocwsecsywiiqs = $igqsaukqcqscimok->title; $meqocwsecsywiiqs = DecoratorHook::sscegwueamckwmcy("\164\x68\145\x5f\164\x69\164\154\145", $meqocwsecsywiiqs, $igqsaukqcqscimok->ID); $meqocwsecsywiiqs = DecoratorHook::sscegwueamckwmcy("\x6e\141\x76\x5f\x6d\145\156\x75\137\x69\x74\x65\155\137\164\x69\164\x6c\145", $meqocwsecsywiiqs, $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum); $meqocwsecsywiiqs = $this->kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $kkisyguyosoyymqs); $wwgucssaecqekuek = $this->smkqamusaugagkwi($wwgucssaecqekuek, $igqsaukqcqscimok, $kkisyguyosoyymqs); $smqwgwwgiimmiagq = $ywmkwiwkosakssii->before; $smqwgwwgiimmiagq .= ManipulateHTML::uuccukgasskgimsq("\x61", $wwgucssaecqekuek, $ywmkwiwkosakssii->link_before . $meqocwsecsywiiqs . $ywmkwiwkosakssii->link_after); $smqwgwwgiimmiagq = $this->ksosuqqukyweqiao($smqwgwwgiimmiagq, $igqsaukqcqscimok, $kkisyguyosoyymqs); $smqwgwwgiimmiagq .= $ywmkwiwkosakssii->after; if (isset($ywmkwiwkosakssii->item_spacing) && "\x64\x69\x73\143\x61\162\144" === $ywmkwiwkosakssii->item_spacing) { goto kuicqywysciceggs; } $oiywaimuayauqecq = "\x9"; goto mkwskuycuyguqqok; kuicqywysciceggs: $oiywaimuayauqecq = ''; mkwskuycuyguqqok: $qoqkkmgaewoiykkw = $gquaqgsmiuqsaoum ? str_repeat($oiywaimuayauqecq, $gquaqgsmiuqsaoum) : ''; $cmkqisoeyioisqaw = empty($igqsaukqcqscimok->classes) ? [] : (array) $igqsaukqcqscimok->classes; $cmkqisoeyioisqaw[] = $ywmkwiwkosakssii->li_class ?? ''; $gecwyaugygsikyug = join("\40", DecoratorHook::sscegwueamckwmcy("\x6e\141\x76\137\x6d\145\x6e\x75\137\x63\163\x73\137\143\x6c\x61\163\163", array_filter($cmkqisoeyioisqaw), $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum)); $ewyeasmggkiemeiq = $this->qcgmmmeokuequagy(["\143\154\x61\x73\x73" => $gecwyaugygsikyug], $igqsaukqcqscimok, $kkisyguyosoyymqs); $aqykuigiuwmmcieu .= $qoqkkmgaewoiykkw . ManipulateHTML::qgsekwygcgawekeq($this->cougqgqkumwagiwu(), $ewyeasmggkiemeiq, false, $smqwgwwgiimmiagq); $aqykuigiuwmmcieu = DecoratorHook::sscegwueamckwmcy("\167\x61\x6c\153\x65\x72\137\x6e\141\166\137\x6d\x65\156\x75\x5f\163\164\141\x72\x74\137\x65\154", $aqykuigiuwmmcieu, $igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function end_el(&$aqykuigiuwmmcieu, $data_object, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { if (isset($ywmkwiwkosakssii->item_spacing) && "\144\151\163\143\x61\162\144" === $ywmkwiwkosakssii->item_spacing) { goto sciwggaeogcoesiu; } $aaycmcgqqqsysccs = "\12"; goto eqkauqciwewmgeoi; sciwggaeogcoesiu: $aaycmcgqqqsysccs = ''; eqkauqciwewmgeoi: $aqykuigiuwmmcieu .= "\74\57{$this->cougqgqkumwagiwu()}\x3e{$aaycmcgqqqsysccs}"; } public function iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs) { if (!$kkisyguyosoyymqs) { goto kwagwqyusyiyoaqs; } $igqsaukqcqscimok = $this->igmaewykumgwoaoy($igqsaukqcqscimok, "\x63\x6c\141\x73\163\x65\x73", "\x68\141\x73\55\x63\x68\x69\154\144\162\145\x6e"); kwagwqyusyiyoaqs: return $igqsaukqcqscimok; } public function wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs) : string { return ''; } public function kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $meqocwsecsywiiqs; } public function ksosuqqukyweqiao($iwywmkygwewiamwm, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $iwywmkygwewiamwm; } public function qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $siquossayskcwkea; } public function smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $siquossayskcwkea; } public final function amqewiesyqeqiuai() : string { return "\x73\165\142\x6d\145\156\x75\x5f{$this->currentLevel}"; } public function igmaewykumgwoaoy(&$wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $ggauoeuaesiymgee = '') { $eqgoocgaqwqcimie = !empty($eqgoocgaqwqcimie) ? $eqgoocgaqwqcimie : $ggauoeuaesiymgee; $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie); return $wwgucssaecqekuek; } }
