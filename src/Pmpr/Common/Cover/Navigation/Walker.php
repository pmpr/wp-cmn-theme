<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6436caf32c6f6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Navigation; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Helper\Traits\HelperTrait; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Wrapper\Traits\WrapperTrait; use Walker_Nav_Menu; use WP_Post; class Walker extends Walker_Nav_Menu implements ConstantInterface { use HelperTrait, WrapperTrait; protected string $elTag = "\x6c\x69"; protected string $lvlTag = "\165\x6c"; protected array $lvlAttrs = []; protected ?string $currentLevel = null; public function kiiogoueqygqyesm() : string { return $this->lvlTag; } public function oiikmkeaimmqgaiu(string $ckgmacuacakgckiu) : self { $this->lvlTag = $ckgmacuacakgckiu; return $this; } public function cougqgqkumwagiwu() : string { return $this->elTag; } public function eggaocmukisgaqgs(string $giwyeuiuumyaygig) : self { $this->elTag = $giwyeuiuumyaygig; return $this; } public function qyaogeiwikocuwke() : array { return $this->lvlAttrs; } public function seqmucuwuueuqekq(array $ygwksawkeqcyesio) : self { $this->lvlAttrs = $ygwksawkeqcyesio; return $this; } public function display_element($kqywgoqsmuswammk, &$children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, &$aqykuigiuwmmcieu) { $aokagokqyuysuksm = $this->db_fields[self::gouqcwikiiygyasc]; if (!(isset($ywmkwiwkosakssii[0]) && is_object($ywmkwiwkosakssii[0]))) { goto oimkeqocuguqqsqk; } $ywmkwiwkosakssii[0]->has_children = !empty($children_elements[$kqywgoqsmuswammk->{$aokagokqyuysuksm}]); oimkeqocuguqqsqk: parent::display_element($kqywgoqsmuswammk, $children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, $aqykuigiuwmmcieu); } public function start_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = []) { $wwgucssaecqekuek = $this->qyaogeiwikocuwke(); $wwgucssaecqekuek[self::gouqcwikiiygyasc] = $this->amqewiesyqeqiuai(); $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq($this->kiiogoueqygqyesm(), $wwgucssaecqekuek); $aqykuigiuwmmcieu .= str_repeat("\11", $gquaqgsmiuqsaoum) . "{$nsmgceoqaqogqmuw}\12"; } public function end_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { $qoqkkmgaewoiykkw = str_repeat($this->gquqiqakcmmkgwwi($ywmkwiwkosakssii, "\x9"), $gquaqgsmiuqsaoum); $aqykuigiuwmmcieu .= "{$qoqkkmgaewoiykkw}\74\x2f{$this->kiiogoueqygqyesm()}\x3e{$this->gquqiqakcmmkgwwi($ywmkwiwkosakssii)}"; } public function start_el(&$aqykuigiuwmmcieu, $igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = [], $aokagokqyuysuksm = 0) { $kkisyguyosoyymqs = ManipulateArray::get($ywmkwiwkosakssii, "\150\141\163\x5f\x63\x68\151\154\x64\x72\145\156"); if (!$kkisyguyosoyymqs) { goto oeocukauoyosicso; } $this->currentLevel = ManipulateString::uniqid(); oeocukauoyosicso: $igqsaukqcqscimok = $this->iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs); $ywmkwiwkosakssii = DecoratorHook::sscegwueamckwmcy("\156\x61\166\137\x6d\145\x6e\165\x5f\151\x74\145\155\x5f\x61\x72\147\x73", $ywmkwiwkosakssii, $igqsaukqcqscimok, $gquaqgsmiuqsaoum); $migiiksoiymissge = null; if ($migiiksoiymissge) { goto suqceasgacskcmkc; } $migiiksoiymissge = ManipulateArray::get($igqsaukqcqscimok, self::auqoykcmsiauccao); suqceasgacskcmkc: if (!(!$migiiksoiymissge && $igqsaukqcqscimok->object_id)) { goto yykqaowwsqgqysmq; } $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($igqsaukqcqscimok->object_id, true); yykqaowwsqgqysmq: $wwgucssaecqekuek = []; $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x72\x65\x6c", ManipulateArray::get($igqsaukqcqscimok, "\x78\146\x6e")); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x68\162\145\x66", $migiiksoiymissge, "\43"); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x74\x69\x74\x6c\x65", ManipulateArray::get($igqsaukqcqscimok, "\x61\x74\x74\x72\x5f\x74\151\164\x6c\145")); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\141\x73\163", ManipulateArray::get($ywmkwiwkosakssii, "\154\x69\x6e\x6b\137\x63\x6c\x61\x73\x73")); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\x61\x73\x73", ManipulateArray::get($igqsaukqcqscimok, "\143\154\141\163\x73"), $this->wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs)); if (!$igqsaukqcqscimok->target) { goto kwiggogcgciwuwqk; } $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x74\141\162\x67\145\x74", ManipulateArray::get($igqsaukqcqscimok, self::mgsccwumkcawaqcy)); kwiggogcgciwuwqk: $wwgucssaecqekuek = DecoratorHook::sscegwueamckwmcy("\156\141\166\137\155\x65\156\165\137\x6c\x69\156\153\137\x61\x74\164\162\151\x62\165\164\x65\x73", $wwgucssaecqekuek, $igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); $meqocwsecsywiiqs = ManipulateArray::get($igqsaukqcqscimok, self::qescuiwgsyuikume); $meqocwsecsywiiqs = DecoratorHook::sscegwueamckwmcy("\164\x68\x65\x5f\x74\151\x74\154\145", $meqocwsecsywiiqs, ManipulateArray::get($igqsaukqcqscimok, "\111\x44")); $meqocwsecsywiiqs = DecoratorHook::sscegwueamckwmcy("\x6e\x61\x76\137\155\145\x6e\165\x5f\x69\x74\x65\155\x5f\x74\x69\x74\154\145", $meqocwsecsywiiqs, $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum); $meqocwsecsywiiqs = $this->kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $kkisyguyosoyymqs); $wwgucssaecqekuek = $this->smkqamusaugagkwi($wwgucssaecqekuek, $igqsaukqcqscimok, $kkisyguyosoyymqs); $smqwgwwgiimmiagq = ManipulateArray::get($ywmkwiwkosakssii, "\x62\145\x66\157\x72\145"); $smqwgwwgiimmiagq .= ManipulateHTML::yuawgssgauywkiia(ManipulateArray::get($ywmkwiwkosakssii, "\x6c\x69\x6e\153\x5f\142\x65\x66\157\x72\x65") . $meqocwsecsywiiqs . ManipulateArray::get($ywmkwiwkosakssii, "\154\151\x6e\x6b\x5f\141\x66\x74\x65\162"), null, $wwgucssaecqekuek); $smqwgwwgiimmiagq = $this->ksosuqqukyweqiao($smqwgwwgiimmiagq, $igqsaukqcqscimok, $kkisyguyosoyymqs); $smqwgwwgiimmiagq .= ManipulateArray::get($ywmkwiwkosakssii, "\141\x66\164\145\x72"); $qoqkkmgaewoiykkw = $gquaqgsmiuqsaoum ? str_repeat($this->gquqiqakcmmkgwwi($ywmkwiwkosakssii, "\x9"), $gquaqgsmiuqsaoum) : ''; $cmkqisoeyioisqaw = (array) ManipulateArray::get($igqsaukqcqscimok, "\143\x6c\x61\163\x73\145\x73", []); $cmkqisoeyioisqaw[] = ManipulateArray::get($ywmkwiwkosakssii, "\154\x69\x5f\143\x6c\141\163\163", ''); $gecwyaugygsikyug = implode("\40", DecoratorHook::sscegwueamckwmcy("\156\141\x76\x5f\x6d\145\156\165\x5f\x63\x73\163\x5f\x63\x6c\x61\x73\163", array_filter($cmkqisoeyioisqaw), $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum)); $ewyeasmggkiemeiq = $this->qcgmmmeokuequagy(["\x63\x6c\141\163\x73" => $gecwyaugygsikyug], $igqsaukqcqscimok, $kkisyguyosoyymqs); $aqykuigiuwmmcieu .= $qoqkkmgaewoiykkw . ManipulateHTML::qgsekwygcgawekeq($this->cougqgqkumwagiwu(), $ewyeasmggkiemeiq, false, $smqwgwwgiimmiagq); $aqykuigiuwmmcieu = DecoratorHook::sscegwueamckwmcy("\x77\141\154\x6b\145\x72\137\x6e\x61\166\x5f\x6d\145\x6e\165\x5f\x73\164\141\x72\x74\137\145\x6c", $aqykuigiuwmmcieu, $igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function gquqiqakcmmkgwwi($ywmkwiwkosakssii, string $wmcaeewaokocymiy = "\12") : string { if ("\144\151\163\x63\141\162\144" === ManipulateArray::get($ywmkwiwkosakssii, "\151\x74\x65\155\137\x73\x70\x61\x63\151\156\147")) { goto uckewycoogsogwiy; } $kgkcwaioaqiyaoeg = $wmcaeewaokocymiy; goto ikuuiauwouuqawuw; uckewycoogsogwiy: $kgkcwaioaqiyaoeg = ''; ikuuiauwouuqawuw: return $kgkcwaioaqiyaoeg; } public function end_el(&$aqykuigiuwmmcieu, $data_object, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { $aqykuigiuwmmcieu .= "\74\x2f{$this->cougqgqkumwagiwu()}\76{$this->gquqiqakcmmkgwwi($ywmkwiwkosakssii)}"; } public function iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs) { if (!$kkisyguyosoyymqs) { goto yoqakewookqoqacm; } $igqsaukqcqscimok = $this->igmaewykumgwoaoy($igqsaukqcqscimok, "\143\154\141\163\x73\x65\163", "\x68\141\x73\x2d\143\x68\x69\154\x64\162\145\x6e"); yoqakewookqoqacm: return $igqsaukqcqscimok; } public function wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs) : string { return ''; } public function kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $meqocwsecsywiiqs; } public function ksosuqqukyweqiao($iwywmkygwewiamwm, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $iwywmkygwewiamwm; } public function qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $siquossayskcwkea; } public function smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $siquossayskcwkea; } public final function amqewiesyqeqiuai() : string { return "\163\x75\x62\155\145\156\165\x5f{$this->currentLevel}"; } public function igmaewykumgwoaoy(&$wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $ggauoeuaesiymgee = '') { $eqgoocgaqwqcimie = !empty($eqgoocgaqwqcimie) ? $eqgoocgaqwqcimie : $ggauoeuaesiymgee; $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie); return $wwgucssaecqekuek; } }
