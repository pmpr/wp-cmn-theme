<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c027cf2c189             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Theme\Navigation; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Walker_Nav_Menu; use WP_Post; class Walker extends Walker_Nav_Menu { protected string $tag = "\165\x6c"; protected array $attrs = []; protected ?string $currentLevel = null; public function imscqmwiukuywswa() : string { return $this->tag; } public function aoamooyyyuyiwuoq() : array { return $this->attrs; } public function display_element($kqywgoqsmuswammk, &$children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, &$aqykuigiuwmmcieu) { $aokagokqyuysuksm = $this->db_fields["\151\144"]; if (!(isset($ywmkwiwkosakssii[0]) && is_object($ywmkwiwkosakssii[0]))) { goto eyiamcekkgkiawqy; } $ywmkwiwkosakssii[0]->has_children = !empty($children_elements[$kqywgoqsmuswammk->{$aokagokqyuysuksm}]); eyiamcekkgkiawqy: parent::display_element($kqywgoqsmuswammk, $children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, $aqykuigiuwmmcieu); } public function start_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = []) { $wwgucssaecqekuek = $this->aoamooyyyuyiwuoq(); $wwgucssaecqekuek["\x69\144"] = $this->amqewiesyqeqiuai(); $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq($this->imscqmwiukuywswa(), $wwgucssaecqekuek); $aqykuigiuwmmcieu .= str_repeat("\x9", $gquaqgsmiuqsaoum) . $nsmgceoqaqogqmuw; } public function start_el(&$aqykuigiuwmmcieu, $igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = [], $aokagokqyuysuksm = 0) { $kkisyguyosoyymqs = $ywmkwiwkosakssii->has_children; if (!$kkisyguyosoyymqs) { goto twkmiuomimomscew; } $this->currentLevel = ManipulateString::uniqid(); twkmiuomimomscew: $igqsaukqcqscimok = $this->iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs); if (isset($ywmkwiwkosakssii->item_spacing) && "\x64\x69\x73\143\141\162\x64" === $ywmkwiwkosakssii->item_spacing) { goto kooskuwkuayiuose; } $oiywaimuayauqecq = "\x9"; goto qwcegcuowwgiccos; kooskuwkuayiuose: $oiywaimuayauqecq = ''; qwcegcuowwgiccos: $qoqkkmgaewoiykkw = $gquaqgsmiuqsaoum ? str_repeat($oiywaimuayauqecq, $gquaqgsmiuqsaoum) : ''; $cmkqisoeyioisqaw = empty($igqsaukqcqscimok->classes) ? [] : (array) $igqsaukqcqscimok->classes; $ywmkwiwkosakssii = DecoratorHook::sscegwueamckwmcy("\x6e\141\x76\x5f\x6d\x65\x6e\165\x5f\151\x74\x65\155\x5f\x61\x72\147\163", $ywmkwiwkosakssii, $igqsaukqcqscimok, $gquaqgsmiuqsaoum); $cmkqisoeyioisqaw[] = $ywmkwiwkosakssii->li_class ?? ''; $gecwyaugygsikyug = join("\x20", DecoratorHook::sscegwueamckwmcy("\156\141\x76\137\155\x65\x6e\165\x5f\x63\x73\x73\x5f\x63\154\141\x73\163", array_filter($cmkqisoeyioisqaw), $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum)); $ewyeasmggkiemeiq = $this->qcgmmmeokuequagy(["\x63\154\141\x73\x73" => $gecwyaugygsikyug], $igqsaukqcqscimok, $kkisyguyosoyymqs); $aqykuigiuwmmcieu .= $qoqkkmgaewoiykkw . ManipulateHTML::qgsekwygcgawekeq("\x6c\x69", $ewyeasmggkiemeiq); $migiiksoiymissge = null; if (!$igqsaukqcqscimok->object_id) { goto qcessicwuikwqsis; } $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($igqsaukqcqscimok->object_id, true); qcessicwuikwqsis: if ($migiiksoiymissge) { goto yssscwioiyygssec; } $migiiksoiymissge = $igqsaukqcqscimok->url; yssscwioiyygssec: $wwgucssaecqekuek = []; $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x72\x65\154", $igqsaukqcqscimok->xfn); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x68\162\x65\x66", $migiiksoiymissge, "\43"); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x74\x69\164\x6c\145", $igqsaukqcqscimok->attr_title); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\x61\x73\163", $ywmkwiwkosakssii->link_class ?? "\156\x61\x76\x2d\x6c\151\156\153"); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\x61\x73\x73", $igqsaukqcqscimok->class ?? '', $this->wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs)); if (!$igqsaukqcqscimok->target) { goto ieumumsgyguceusy; } $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\164\x61\x72\x67\x65\164", $igqsaukqcqscimok->target); ieumumsgyguceusy: $wwgucssaecqekuek = DecoratorHook::sscegwueamckwmcy("\x6e\141\x76\x5f\x6d\x65\156\165\137\x6c\151\156\x6b\x5f\x61\x74\164\162\151\x62\x75\164\x65\163", $wwgucssaecqekuek, $igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); $meqocwsecsywiiqs = $igqsaukqcqscimok->title; $meqocwsecsywiiqs = DecoratorHook::sscegwueamckwmcy("\x74\x68\145\x5f\x74\151\x74\x6c\145", $meqocwsecsywiiqs, $igqsaukqcqscimok->ID); $meqocwsecsywiiqs = DecoratorHook::sscegwueamckwmcy("\x6e\x61\x76\x5f\x6d\145\156\165\137\151\x74\x65\x6d\x5f\x74\x69\x74\154\x65", $meqocwsecsywiiqs, $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum); $meqocwsecsywiiqs = $this->kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $kkisyguyosoyymqs); $wwgucssaecqekuek = $this->smkqamusaugagkwi($wwgucssaecqekuek, $igqsaukqcqscimok, $kkisyguyosoyymqs); $item_output = $ywmkwiwkosakssii->before; $item_output .= ManipulateHTML::uuccukgasskgimsq("\141", $wwgucssaecqekuek, $ywmkwiwkosakssii->link_before . $meqocwsecsywiiqs . $ywmkwiwkosakssii->link_after); $item_output = $this->ksosuqqukyweqiao($item_output, $igqsaukqcqscimok, $kkisyguyosoyymqs); $item_output .= $ywmkwiwkosakssii->after; $aqykuigiuwmmcieu .= DecoratorHook::sscegwueamckwmcy("\167\x61\154\x6b\x65\x72\137\156\x61\x76\x5f\155\145\156\165\137\x73\x74\141\x72\164\x5f\x65\x6c", $item_output, $igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs) { if (!$kkisyguyosoyymqs) { goto coywmiyqgsweuiic; } $igqsaukqcqscimok = $this->igmaewykumgwoaoy($igqsaukqcqscimok, "\143\154\141\x73\163\145\x73", "\x68\x61\163\x2d\x63\150\x69\x6c\x64\x72\145\x6e"); coywmiyqgsweuiic: return $igqsaukqcqscimok; } public function wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs) : string { return ''; } public function kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $meqocwsecsywiiqs; } public function ksosuqqukyweqiao($iwywmkygwewiamwm, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $iwywmkygwewiamwm; } public function qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $siquossayskcwkea; } public function smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $siquossayskcwkea; } public final function amqewiesyqeqiuai() : string { return "\x73\x75\142\155\145\x6e\x75\137{$this->currentLevel}"; } public function igmaewykumgwoaoy(&$wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $ggauoeuaesiymgee = '') { $eqgoocgaqwqcimie = !empty($eqgoocgaqwqcimie) ? $eqgoocgaqwqcimie : $ggauoeuaesiymgee; $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie); return $wwgucssaecqekuek; } }
