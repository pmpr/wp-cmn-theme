<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61eec5708a232             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Theme\Navigation; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Walker_Nav_Menu; use WP_Post; class Walker extends Walker_Nav_Menu implements ConstantInterface { protected string $tag = "\x75\x6c"; protected array $attrs = []; protected ?string $currentLevel = null; public function imscqmwiukuywswa() : string { return $this->tag; } public function aoamooyyyuyiwuoq() : array { return $this->attrs; } public function display_element($kqywgoqsmuswammk, &$children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, &$aqykuigiuwmmcieu) { $aokagokqyuysuksm = $this->db_fields["\x69\144"]; if (!(isset($ywmkwiwkosakssii[0]) && is_object($ywmkwiwkosakssii[0]))) { goto eegqyykygiccaoeo; } $ywmkwiwkosakssii[0]->has_children = !empty($children_elements[$kqywgoqsmuswammk->{$aokagokqyuysuksm}]); eegqyykygiccaoeo: parent::display_element($kqywgoqsmuswammk, $children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, $aqykuigiuwmmcieu); } public function start_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = []) { $wwgucssaecqekuek = $this->aoamooyyyuyiwuoq(); $wwgucssaecqekuek["\151\x64"] = $this->amqewiesyqeqiuai(); $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq($this->imscqmwiukuywswa(), $wwgucssaecqekuek); $aqykuigiuwmmcieu .= str_repeat("\x9", $gquaqgsmiuqsaoum) . $nsmgceoqaqogqmuw; } public function start_el(&$aqykuigiuwmmcieu, $igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = [], $aokagokqyuysuksm = 0) { $kkisyguyosoyymqs = $ywmkwiwkosakssii->has_children; if (!$kkisyguyosoyymqs) { goto ywqgcegomwaiuquc; } $this->currentLevel = ManipulateString::uniqid(); ywqgcegomwaiuquc: $igqsaukqcqscimok = $this->iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs); $ywmkwiwkosakssii = DecoratorHook::sscegwueamckwmcy("\x6e\x61\x76\x5f\155\145\156\165\137\x69\164\x65\155\x5f\141\162\x67\163", $ywmkwiwkosakssii, $igqsaukqcqscimok, $gquaqgsmiuqsaoum); $migiiksoiymissge = null; if ($migiiksoiymissge) { goto wmmggowmigekyoso; } $migiiksoiymissge = ManipulateArray::get($igqsaukqcqscimok, self::auqoykcmsiauccao); wmmggowmigekyoso: if (!(!$migiiksoiymissge && $igqsaukqcqscimok->object_id)) { goto soqqemyioggmoakg; } $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($igqsaukqcqscimok->object_id, true); soqqemyioggmoakg: $wwgucssaecqekuek = []; $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\162\x65\x6c", $igqsaukqcqscimok->xfn); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\150\x72\x65\146", $migiiksoiymissge, "\43"); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x74\x69\x74\x6c\x65", $igqsaukqcqscimok->attr_title); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\x61\x73\163", $ywmkwiwkosakssii->link_class ?? "\156\141\x76\55\154\x69\156\153"); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\141\163\x73", $igqsaukqcqscimok->class ?? '', $this->wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs)); if (!$igqsaukqcqscimok->target) { goto acaqummmoyiemqss; } $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\164\141\162\x67\x65\164", $igqsaukqcqscimok->target); acaqummmoyiemqss: $wwgucssaecqekuek = DecoratorHook::sscegwueamckwmcy("\156\141\x76\x5f\x6d\x65\x6e\x75\x5f\154\x69\x6e\x6b\x5f\x61\164\164\162\151\x62\165\x74\145\163", $wwgucssaecqekuek, $igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); $meqocwsecsywiiqs = $igqsaukqcqscimok->title; $meqocwsecsywiiqs = DecoratorHook::sscegwueamckwmcy("\164\x68\x65\x5f\164\151\x74\x6c\145", $meqocwsecsywiiqs, $igqsaukqcqscimok->ID); $meqocwsecsywiiqs = DecoratorHook::sscegwueamckwmcy("\156\x61\166\137\155\x65\x6e\165\137\x69\x74\x65\x6d\x5f\164\151\x74\x6c\145", $meqocwsecsywiiqs, $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum); $meqocwsecsywiiqs = $this->kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $kkisyguyosoyymqs); $wwgucssaecqekuek = $this->smkqamusaugagkwi($wwgucssaecqekuek, $igqsaukqcqscimok, $kkisyguyosoyymqs); $smqwgwwgiimmiagq = $ywmkwiwkosakssii->before; $smqwgwwgiimmiagq .= ManipulateHTML::uuccukgasskgimsq("\141", $wwgucssaecqekuek, $ywmkwiwkosakssii->link_before . $meqocwsecsywiiqs . $ywmkwiwkosakssii->link_after); $smqwgwwgiimmiagq = $this->ksosuqqukyweqiao($smqwgwwgiimmiagq, $igqsaukqcqscimok, $kkisyguyosoyymqs); $smqwgwwgiimmiagq .= $ywmkwiwkosakssii->after; if (isset($ywmkwiwkosakssii->item_spacing) && "\x64\151\163\x63\x61\162\x64" === $ywmkwiwkosakssii->item_spacing) { goto suswcqoyyqkkquuo; } $oiywaimuayauqecq = "\11"; goto eeqesooyqagwawae; suswcqoyyqkkquuo: $oiywaimuayauqecq = ''; eeqesooyqagwawae: $qoqkkmgaewoiykkw = $gquaqgsmiuqsaoum ? str_repeat($oiywaimuayauqecq, $gquaqgsmiuqsaoum) : ''; $cmkqisoeyioisqaw = empty($igqsaukqcqscimok->classes) ? [] : (array) $igqsaukqcqscimok->classes; $cmkqisoeyioisqaw[] = $ywmkwiwkosakssii->li_class ?? ''; $gecwyaugygsikyug = join("\40", DecoratorHook::sscegwueamckwmcy("\x6e\141\166\x5f\155\145\156\x75\137\x63\163\x73\137\x63\x6c\141\x73\163", array_filter($cmkqisoeyioisqaw), $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum)); $ewyeasmggkiemeiq = $this->qcgmmmeokuequagy(["\143\154\x61\x73\163" => $gecwyaugygsikyug], $igqsaukqcqscimok, $kkisyguyosoyymqs); $aqykuigiuwmmcieu .= $qoqkkmgaewoiykkw . ManipulateHTML::qgsekwygcgawekeq($this->imscqmwiukuywswa() == "\x75\x6c" ? "\x6c\x69" : "\144\x69\x76", $ewyeasmggkiemeiq, true, $smqwgwwgiimmiagq); $aqykuigiuwmmcieu = DecoratorHook::sscegwueamckwmcy("\x77\141\154\153\x65\x72\x5f\156\141\166\x5f\x6d\x65\156\165\137\163\164\x61\x72\164\137\x65\x6c", $aqykuigiuwmmcieu, $igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs) { if (!$kkisyguyosoyymqs) { goto oqugqwcyomiaaoqu; } $igqsaukqcqscimok = $this->igmaewykumgwoaoy($igqsaukqcqscimok, "\143\154\141\163\163\x65\x73", "\150\x61\x73\x2d\x63\150\x69\x6c\x64\162\x65\156"); oqugqwcyomiaaoqu: return $igqsaukqcqscimok; } public function wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs) : string { return ''; } public function kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $meqocwsecsywiiqs; } public function ksosuqqukyweqiao($iwywmkygwewiamwm, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $iwywmkygwewiamwm; } public function qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $siquossayskcwkea; } public function smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $siquossayskcwkea; } public final function amqewiesyqeqiuai() : string { return "\x73\x75\142\155\145\156\x75\x5f{$this->currentLevel}"; } public function igmaewykumgwoaoy(&$wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $ggauoeuaesiymgee = '') { $eqgoocgaqwqcimie = !empty($eqgoocgaqwqcimie) ? $eqgoocgaqwqcimie : $ggauoeuaesiymgee; $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie); return $wwgucssaecqekuek; } }
