<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6224e46415a81             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Theme\Navigation; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Walker_Nav_Menu; use WP_Post; class Walker extends Walker_Nav_Menu implements ConstantInterface { protected string $tag = "\165\x6c"; protected array $attrs = []; protected ?string $currentLevel = null; public function imscqmwiukuywswa() : string { return $this->tag; } public function aoamooyyyuyiwuoq() : array { return $this->attrs; } public function display_element($kqywgoqsmuswammk, &$children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, &$aqykuigiuwmmcieu) { $aokagokqyuysuksm = $this->db_fields["\x69\144"]; if (!(isset($ywmkwiwkosakssii[0]) && is_object($ywmkwiwkosakssii[0]))) { goto qogqewiwmwiwskgm; } $ywmkwiwkosakssii[0]->has_children = !empty($children_elements[$kqywgoqsmuswammk->{$aokagokqyuysuksm}]); qogqewiwmwiwskgm: parent::display_element($kqywgoqsmuswammk, $children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, $aqykuigiuwmmcieu); } public function start_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = []) { $wwgucssaecqekuek = $this->aoamooyyyuyiwuoq(); $wwgucssaecqekuek["\x69\144"] = $this->amqewiesyqeqiuai(); $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq($this->imscqmwiukuywswa(), $wwgucssaecqekuek); $aqykuigiuwmmcieu .= str_repeat("\11", $gquaqgsmiuqsaoum) . "{$nsmgceoqaqogqmuw}\xa"; } public function end_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { if (isset($ywmkwiwkosakssii->item_spacing) && "\144\x69\163\143\141\162\144" === $ywmkwiwkosakssii->item_spacing) { goto qgoiooayqmqqsiok; } $oiywaimuayauqecq = "\x9"; $aaycmcgqqqsysccs = "\xa"; goto qwigomakwmyiwkgo; qgoiooayqmqqsiok: $oiywaimuayauqecq = ''; $aaycmcgqqqsysccs = ''; qwigomakwmyiwkgo: $qoqkkmgaewoiykkw = str_repeat($oiywaimuayauqecq, $gquaqgsmiuqsaoum); $aqykuigiuwmmcieu .= "{$qoqkkmgaewoiykkw}\74\57{$this->imscqmwiukuywswa()}\76{$aaycmcgqqqsysccs}"; } public function start_el(&$aqykuigiuwmmcieu, $igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = [], $aokagokqyuysuksm = 0) { $kkisyguyosoyymqs = $ywmkwiwkosakssii->has_children; if (!$kkisyguyosoyymqs) { goto myoicgcuugciueis; } $this->currentLevel = ManipulateString::uniqid(); myoicgcuugciueis: $igqsaukqcqscimok = $this->iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs); $ywmkwiwkosakssii = DecoratorHook::sscegwueamckwmcy("\x6e\x61\166\x5f\155\x65\x6e\x75\x5f\151\164\145\155\137\141\162\x67\163", $ywmkwiwkosakssii, $igqsaukqcqscimok, $gquaqgsmiuqsaoum); $migiiksoiymissge = null; if ($migiiksoiymissge) { goto asmecuqiyyswueqe; } $migiiksoiymissge = ManipulateArray::get($igqsaukqcqscimok, self::auqoykcmsiauccao); asmecuqiyyswueqe: if (!(!$migiiksoiymissge && $igqsaukqcqscimok->object_id)) { goto csscmcacoikwsecs; } $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($igqsaukqcqscimok->object_id, true); csscmcacoikwsecs: $wwgucssaecqekuek = []; $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x72\145\x6c", $igqsaukqcqscimok->xfn); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\150\162\145\x66", $migiiksoiymissge, "\x23"); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\164\151\164\154\145", $igqsaukqcqscimok->attr_title); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\141\x73\x73", $ywmkwiwkosakssii->link_class ?? "\156\x61\166\x2d\x6c\x69\156\x6b"); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\141\x73\x73", $igqsaukqcqscimok->class ?? '', $this->wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs)); if (!$igqsaukqcqscimok->target) { goto cuykwgmswkskqkyi; } $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\164\141\162\147\x65\164", $igqsaukqcqscimok->target); cuykwgmswkskqkyi: $wwgucssaecqekuek = DecoratorHook::sscegwueamckwmcy("\x6e\141\x76\137\x6d\x65\x6e\x75\x5f\154\151\156\x6b\137\x61\x74\x74\x72\x69\142\x75\x74\145\163", $wwgucssaecqekuek, $igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); $meqocwsecsywiiqs = $igqsaukqcqscimok->title; $meqocwsecsywiiqs = DecoratorHook::sscegwueamckwmcy("\x74\150\145\137\x74\151\164\x6c\145", $meqocwsecsywiiqs, $igqsaukqcqscimok->ID); $meqocwsecsywiiqs = DecoratorHook::sscegwueamckwmcy("\156\141\166\137\155\145\156\165\137\151\164\x65\155\x5f\164\151\x74\154\145", $meqocwsecsywiiqs, $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum); $meqocwsecsywiiqs = $this->kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $kkisyguyosoyymqs); $wwgucssaecqekuek = $this->smkqamusaugagkwi($wwgucssaecqekuek, $igqsaukqcqscimok, $kkisyguyosoyymqs); $smqwgwwgiimmiagq = $ywmkwiwkosakssii->before; $smqwgwwgiimmiagq .= ManipulateHTML::uuccukgasskgimsq("\141", $wwgucssaecqekuek, $ywmkwiwkosakssii->link_before . $meqocwsecsywiiqs . $ywmkwiwkosakssii->link_after); $smqwgwwgiimmiagq = $this->ksosuqqukyweqiao($smqwgwwgiimmiagq, $igqsaukqcqscimok, $kkisyguyosoyymqs); $smqwgwwgiimmiagq .= $ywmkwiwkosakssii->after; if (isset($ywmkwiwkosakssii->item_spacing) && "\x64\x69\x73\143\141\x72\144" === $ywmkwiwkosakssii->item_spacing) { goto kuicqywysciceggs; } $oiywaimuayauqecq = "\11"; goto mkwskuycuyguqqok; kuicqywysciceggs: $oiywaimuayauqecq = ''; mkwskuycuyguqqok: $qoqkkmgaewoiykkw = $gquaqgsmiuqsaoum ? str_repeat($oiywaimuayauqecq, $gquaqgsmiuqsaoum) : ''; $cmkqisoeyioisqaw = empty($igqsaukqcqscimok->classes) ? [] : (array) $igqsaukqcqscimok->classes; $cmkqisoeyioisqaw[] = $ywmkwiwkosakssii->li_class ?? ''; $gecwyaugygsikyug = join("\x20", DecoratorHook::sscegwueamckwmcy("\x6e\141\x76\x5f\x6d\145\x6e\165\137\x63\x73\x73\137\x63\x6c\141\163\163", array_filter($cmkqisoeyioisqaw), $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum)); $ewyeasmggkiemeiq = $this->qcgmmmeokuequagy(["\x63\154\141\x73\163" => $gecwyaugygsikyug], $igqsaukqcqscimok, $kkisyguyosoyymqs); $aqykuigiuwmmcieu .= $qoqkkmgaewoiykkw . ManipulateHTML::qgsekwygcgawekeq($this->imscqmwiukuywswa() == "\x75\154" ? "\x6c\151" : "\144\151\x76", $ewyeasmggkiemeiq, false, $smqwgwwgiimmiagq); $aqykuigiuwmmcieu = DecoratorHook::sscegwueamckwmcy("\x77\141\154\x6b\145\162\x5f\156\141\x76\137\x6d\x65\156\165\137\163\x74\141\162\164\x5f\x65\154", $aqykuigiuwmmcieu, $igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs) { if (!$kkisyguyosoyymqs) { goto sciwggaeogcoesiu; } $igqsaukqcqscimok = $this->igmaewykumgwoaoy($igqsaukqcqscimok, "\x63\x6c\x61\163\x73\x65\x73", "\150\x61\x73\55\143\150\x69\x6c\x64\x72\145\156"); sciwggaeogcoesiu: return $igqsaukqcqscimok; } public function wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs) : string { return ''; } public function kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $meqocwsecsywiiqs; } public function ksosuqqukyweqiao($iwywmkygwewiamwm, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $iwywmkygwewiamwm; } public function qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $siquossayskcwkea; } public function smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $siquossayskcwkea; } public final function amqewiesyqeqiuai() : string { return "\x73\x75\142\155\145\x6e\x75\x5f{$this->currentLevel}"; } public function igmaewykumgwoaoy(&$wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $ggauoeuaesiymgee = '') { $eqgoocgaqwqcimie = !empty($eqgoocgaqwqcimie) ? $eqgoocgaqwqcimie : $ggauoeuaesiymgee; $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie); return $wwgucssaecqekuek; } }
