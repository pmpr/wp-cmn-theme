<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c1fc534e3e6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Theme\Navigation; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Walker_Nav_Menu; use WP_Post; class Walker extends Walker_Nav_Menu { protected string $tag = "\165\154"; protected array $attrs = []; protected ?string $currentLevel = null; public function imscqmwiukuywswa() : string { return $this->tag; } public function aoamooyyyuyiwuoq() : array { return $this->attrs; } public function display_element($kqywgoqsmuswammk, &$children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, &$aqykuigiuwmmcieu) { $aokagokqyuysuksm = $this->db_fields["\x69\144"]; if (!(isset($ywmkwiwkosakssii[0]) && is_object($ywmkwiwkosakssii[0]))) { goto eyiamcekkgkiawqy; } $ywmkwiwkosakssii[0]->has_children = !empty($children_elements[$kqywgoqsmuswammk->{$aokagokqyuysuksm}]); eyiamcekkgkiawqy: parent::display_element($kqywgoqsmuswammk, $children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, $aqykuigiuwmmcieu); } public function start_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = []) { $wwgucssaecqekuek = $this->aoamooyyyuyiwuoq(); $wwgucssaecqekuek["\x69\144"] = $this->amqewiesyqeqiuai(); $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq($this->imscqmwiukuywswa(), $wwgucssaecqekuek); $aqykuigiuwmmcieu .= str_repeat("\x9", $gquaqgsmiuqsaoum) . $nsmgceoqaqogqmuw; } public function start_el(&$aqykuigiuwmmcieu, $igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = [], $aokagokqyuysuksm = 0) { $kkisyguyosoyymqs = $ywmkwiwkosakssii->has_children; if (!$kkisyguyosoyymqs) { goto twkmiuomimomscew; } $this->currentLevel = ManipulateString::uniqid(); twkmiuomimomscew: $igqsaukqcqscimok = $this->iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs); if (isset($ywmkwiwkosakssii->item_spacing) && "\x64\x69\x73\143\141\x72\x64" === $ywmkwiwkosakssii->item_spacing) { goto kooskuwkuayiuose; } $oiywaimuayauqecq = "\11"; goto qwcegcuowwgiccos; kooskuwkuayiuose: $oiywaimuayauqecq = ''; qwcegcuowwgiccos: $qoqkkmgaewoiykkw = $gquaqgsmiuqsaoum ? str_repeat($oiywaimuayauqecq, $gquaqgsmiuqsaoum) : ''; $cmkqisoeyioisqaw = empty($igqsaukqcqscimok->classes) ? [] : (array) $igqsaukqcqscimok->classes; $ywmkwiwkosakssii = DecoratorHook::sscegwueamckwmcy("\156\x61\x76\x5f\x6d\145\x6e\165\x5f\151\x74\145\155\137\141\162\x67\163", $ywmkwiwkosakssii, $igqsaukqcqscimok, $gquaqgsmiuqsaoum); $cmkqisoeyioisqaw[] = $ywmkwiwkosakssii->li_class ?? ''; $gecwyaugygsikyug = join("\40", DecoratorHook::sscegwueamckwmcy("\156\141\x76\x5f\155\x65\156\165\x5f\x63\x73\x73\137\x63\154\x61\x73\x73", array_filter($cmkqisoeyioisqaw), $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum)); $ewyeasmggkiemeiq = $this->qcgmmmeokuequagy(["\143\154\141\163\x73" => $gecwyaugygsikyug], $igqsaukqcqscimok, $kkisyguyosoyymqs); $aqykuigiuwmmcieu .= $qoqkkmgaewoiykkw . ManipulateHTML::qgsekwygcgawekeq("\x6c\151", $ewyeasmggkiemeiq); $migiiksoiymissge = null; if (!$igqsaukqcqscimok->object_id) { goto qcessicwuikwqsis; } $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($igqsaukqcqscimok->object_id, true); qcessicwuikwqsis: if ($migiiksoiymissge) { goto yssscwioiyygssec; } $migiiksoiymissge = $igqsaukqcqscimok->url; yssscwioiyygssec: $wwgucssaecqekuek = []; $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\162\145\154", $igqsaukqcqscimok->xfn); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\150\162\145\146", $migiiksoiymissge, "\x23"); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x74\x69\164\x6c\x65", $igqsaukqcqscimok->attr_title); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\x61\163\x73", $ywmkwiwkosakssii->link_class ?? "\156\x61\x76\55\154\151\156\x6b"); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\x61\x73\163", $igqsaukqcqscimok->class ?? '', $this->wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs)); if (!$igqsaukqcqscimok->target) { goto ieumumsgyguceusy; } $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\164\141\162\x67\x65\x74", $igqsaukqcqscimok->target); ieumumsgyguceusy: $wwgucssaecqekuek = DecoratorHook::sscegwueamckwmcy("\156\x61\x76\137\155\145\156\x75\137\x6c\151\x6e\153\137\141\x74\x74\x72\x69\x62\x75\164\145\163", $wwgucssaecqekuek, $igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); $meqocwsecsywiiqs = $igqsaukqcqscimok->title; $meqocwsecsywiiqs = DecoratorHook::sscegwueamckwmcy("\164\150\x65\x5f\x74\151\x74\x6c\145", $meqocwsecsywiiqs, $igqsaukqcqscimok->ID); $meqocwsecsywiiqs = DecoratorHook::sscegwueamckwmcy("\x6e\x61\x76\x5f\x6d\x65\x6e\x75\x5f\x69\x74\145\x6d\137\x74\x69\x74\154\x65", $meqocwsecsywiiqs, $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum); $meqocwsecsywiiqs = $this->kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $kkisyguyosoyymqs); $wwgucssaecqekuek = $this->smkqamusaugagkwi($wwgucssaecqekuek, $igqsaukqcqscimok, $kkisyguyosoyymqs); $item_output = $ywmkwiwkosakssii->before; $item_output .= ManipulateHTML::uuccukgasskgimsq("\141", $wwgucssaecqekuek, $ywmkwiwkosakssii->link_before . $meqocwsecsywiiqs . $ywmkwiwkosakssii->link_after); $item_output = $this->ksosuqqukyweqiao($item_output, $igqsaukqcqscimok, $kkisyguyosoyymqs); $item_output .= $ywmkwiwkosakssii->after; $aqykuigiuwmmcieu .= DecoratorHook::sscegwueamckwmcy("\167\x61\154\x6b\145\x72\137\156\x61\x76\137\155\x65\156\x75\x5f\x73\164\x61\162\164\137\145\154", $item_output, $igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs) { if (!$kkisyguyosoyymqs) { goto coywmiyqgsweuiic; } $igqsaukqcqscimok = $this->igmaewykumgwoaoy($igqsaukqcqscimok, "\x63\154\x61\x73\163\x65\163", "\x68\141\163\x2d\143\150\151\154\x64\162\145\x6e"); coywmiyqgsweuiic: return $igqsaukqcqscimok; } public function wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs) : string { return ''; } public function kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $meqocwsecsywiiqs; } public function ksosuqqukyweqiao($iwywmkygwewiamwm, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $iwywmkygwewiamwm; } public function qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $siquossayskcwkea; } public function smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $siquossayskcwkea; } public final function amqewiesyqeqiuai() : string { return "\x73\165\142\x6d\x65\156\165\x5f{$this->currentLevel}"; } public function igmaewykumgwoaoy(&$wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $ggauoeuaesiymgee = '') { $eqgoocgaqwqcimie = !empty($eqgoocgaqwqcimie) ? $eqgoocgaqwqcimie : $ggauoeuaesiymgee; $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie); return $wwgucssaecqekuek; } }
