<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ff93cfeff17             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Navigation; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Helper\Traits\HelperTrait; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Wrapper\Traits\WrapperTrait; use Walker_Nav_Menu; use WP_Post; class Walker extends Walker_Nav_Menu implements ConstantInterface { use HelperTrait, WrapperTrait; protected string $elTag = "\154\151"; protected string $lvlTag = "\x75\154"; protected array $lvlAttrs = []; protected ?string $currentLevel = null; public function kiiogoueqygqyesm() : string { return $this->lvlTag; } public function oiikmkeaimmqgaiu(string $ckgmacuacakgckiu) : self { $this->lvlTag = $ckgmacuacakgckiu; return $this; } public function cougqgqkumwagiwu() : string { return $this->elTag; } public function eggaocmukisgaqgs(string $giwyeuiuumyaygig) : self { $this->elTag = $giwyeuiuumyaygig; return $this; } public function qyaogeiwikocuwke() : array { return $this->lvlAttrs; } public function seqmucuwuueuqekq(array $ygwksawkeqcyesio) : self { $this->lvlAttrs = $ygwksawkeqcyesio; return $this; } public function display_element($kqywgoqsmuswammk, &$children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, &$aqykuigiuwmmcieu) { $aokagokqyuysuksm = $this->db_fields[self::gouqcwikiiygyasc]; if (!(isset($ywmkwiwkosakssii[0]) && is_object($ywmkwiwkosakssii[0]))) { goto aoquoewagkseayug; } $ywmkwiwkosakssii[0]->has_children = !empty($children_elements[$kqywgoqsmuswammk->{$aokagokqyuysuksm}]); aoquoewagkseayug: parent::display_element($kqywgoqsmuswammk, $children_elements, $max_depth, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii, $aqykuigiuwmmcieu); } public function start_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = []) { $wwgucssaecqekuek = $this->qyaogeiwikocuwke(); $wwgucssaecqekuek[self::gouqcwikiiygyasc] = $this->amqewiesyqeqiuai(); $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq($this->kiiogoueqygqyesm(), $wwgucssaecqekuek); $aqykuigiuwmmcieu .= str_repeat("\11", $gquaqgsmiuqsaoum) . "{$nsmgceoqaqogqmuw}\12"; } public function end_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { $qoqkkmgaewoiykkw = str_repeat($this->gquqiqakcmmkgwwi($ywmkwiwkosakssii, "\11"), $gquaqgsmiuqsaoum); $aqykuigiuwmmcieu .= "{$qoqkkmgaewoiykkw}\x3c\57{$this->kiiogoueqygqyesm()}\76{$this->gquqiqakcmmkgwwi($ywmkwiwkosakssii)}"; } public function start_el(&$aqykuigiuwmmcieu, $igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = [], $aokagokqyuysuksm = 0) { $kkisyguyosoyymqs = ManipulateArray::get($ywmkwiwkosakssii, "\x68\141\163\x5f\x63\x68\x69\x6c\x64\x72\145\x6e"); if (!$kkisyguyosoyymqs) { goto osuscoaaomwcqkew; } $this->currentLevel = ManipulateString::uniqid(); osuscoaaomwcqkew: $igqsaukqcqscimok = $this->iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs); $ywmkwiwkosakssii = DecoratorHook::sscegwueamckwmcy("\x6e\x61\166\x5f\155\x65\156\x75\x5f\x69\164\x65\x6d\137\141\162\x67\163", $ywmkwiwkosakssii, $igqsaukqcqscimok, $gquaqgsmiuqsaoum); $migiiksoiymissge = null; if ($migiiksoiymissge) { goto ciucewqgyoiouesq; } $migiiksoiymissge = ManipulateArray::get($igqsaukqcqscimok, self::auqoykcmsiauccao); ciucewqgyoiouesq: if (!(!$migiiksoiymissge && $igqsaukqcqscimok->object_id)) { goto cgmgqucewwssmicq; } $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($igqsaukqcqscimok->object_id, true); cgmgqucewwssmicq: $wwgucssaecqekuek = []; $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\162\145\x6c", ManipulateArray::get($igqsaukqcqscimok, "\x78\146\x6e")); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\150\162\145\146", $migiiksoiymissge, "\43"); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x74\x69\x74\154\145", ManipulateArray::get($igqsaukqcqscimok, "\x61\164\164\162\137\164\x69\164\154\145")); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\141\x73\x73", ManipulateArray::get($ywmkwiwkosakssii, "\154\151\x6e\153\137\x63\154\x61\x73\163")); $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\141\163\x73", ManipulateArray::get($igqsaukqcqscimok, "\x63\154\141\163\x73"), $this->wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs)); if (!$igqsaukqcqscimok->target) { goto mkomygccqkmkumsi; } $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\164\x61\x72\x67\x65\164", ManipulateArray::get($igqsaukqcqscimok, self::mgsccwumkcawaqcy)); mkomygccqkmkumsi: $wwgucssaecqekuek = DecoratorHook::sscegwueamckwmcy("\x6e\x61\x76\137\x6d\x65\156\165\137\154\x69\x6e\x6b\137\x61\164\164\x72\151\x62\x75\164\145\x73", $wwgucssaecqekuek, $igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); $meqocwsecsywiiqs = ManipulateArray::get($igqsaukqcqscimok, self::qescuiwgsyuikume); $meqocwsecsywiiqs = DecoratorHook::sscegwueamckwmcy("\x74\150\x65\137\164\x69\164\x6c\x65", $meqocwsecsywiiqs, ManipulateArray::get($igqsaukqcqscimok, "\111\x44")); $meqocwsecsywiiqs = DecoratorHook::sscegwueamckwmcy("\x6e\141\166\x5f\x6d\145\x6e\x75\137\x69\x74\145\155\137\x74\x69\164\154\145", $meqocwsecsywiiqs, $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum); $meqocwsecsywiiqs = $this->kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $kkisyguyosoyymqs); $wwgucssaecqekuek = $this->smkqamusaugagkwi($wwgucssaecqekuek, $igqsaukqcqscimok, $kkisyguyosoyymqs); $smqwgwwgiimmiagq = ManipulateArray::get($ywmkwiwkosakssii, "\142\x65\146\x6f\x72\x65"); $smqwgwwgiimmiagq .= ManipulateHTML::yuawgssgauywkiia(ManipulateArray::get($ywmkwiwkosakssii, "\154\x69\x6e\153\x5f\142\145\x66\157\162\145") . $meqocwsecsywiiqs . ManipulateArray::get($ywmkwiwkosakssii, "\154\x69\x6e\x6b\x5f\x61\x66\x74\145\x72"), null, $wwgucssaecqekuek); $smqwgwwgiimmiagq = $this->ksosuqqukyweqiao($smqwgwwgiimmiagq, $igqsaukqcqscimok, $kkisyguyosoyymqs); $smqwgwwgiimmiagq .= ManipulateArray::get($ywmkwiwkosakssii, "\x61\x66\x74\145\x72"); $qoqkkmgaewoiykkw = $gquaqgsmiuqsaoum ? str_repeat($this->gquqiqakcmmkgwwi($ywmkwiwkosakssii, "\x9"), $gquaqgsmiuqsaoum) : ''; $cmkqisoeyioisqaw = (array) ManipulateArray::get($igqsaukqcqscimok, "\143\x6c\141\163\163\145\x73", []); $cmkqisoeyioisqaw[] = ManipulateArray::get($ywmkwiwkosakssii, "\154\x69\x5f\143\154\x61\x73\163", ''); $gecwyaugygsikyug = implode("\40", DecoratorHook::sscegwueamckwmcy("\156\x61\x76\x5f\155\x65\156\165\x5f\x63\163\163\x5f\143\154\141\163\163", array_filter($cmkqisoeyioisqaw), $igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum)); $ewyeasmggkiemeiq = $this->qcgmmmeokuequagy(["\143\x6c\x61\163\x73" => $gecwyaugygsikyug], $igqsaukqcqscimok, $kkisyguyosoyymqs); $aqykuigiuwmmcieu .= $qoqkkmgaewoiykkw . ManipulateHTML::qgsekwygcgawekeq($this->cougqgqkumwagiwu(), $ewyeasmggkiemeiq, false, $smqwgwwgiimmiagq); $aqykuigiuwmmcieu = DecoratorHook::sscegwueamckwmcy("\167\141\x6c\x6b\x65\162\x5f\156\x61\166\x5f\155\x65\x6e\x75\137\163\x74\x61\x72\164\137\x65\x6c", $aqykuigiuwmmcieu, $igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function gquqiqakcmmkgwwi($ywmkwiwkosakssii, string $wmcaeewaokocymiy = "\12") : string { if ("\144\151\163\143\x61\162\x64" === ManipulateArray::get($ywmkwiwkosakssii, "\x69\x74\145\x6d\x5f\163\x70\x61\143\151\156\x67")) { goto ussceseaimqywuiy; } $kgkcwaioaqiyaoeg = $wmcaeewaokocymiy; goto oyiuemaaykgkqqam; ussceseaimqywuiy: $kgkcwaioaqiyaoeg = ''; oyiuemaaykgkqqam: return $kgkcwaioaqiyaoeg; } public function end_el(&$aqykuigiuwmmcieu, $data_object, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { $aqykuigiuwmmcieu .= "\x3c\57{$this->cougqgqkumwagiwu()}\76{$this->gquqiqakcmmkgwwi($ywmkwiwkosakssii)}"; } public function iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs) { if (!$kkisyguyosoyymqs) { goto gqmewagyagamokok; } $igqsaukqcqscimok = $this->igmaewykumgwoaoy($igqsaukqcqscimok, "\x63\x6c\141\163\163\x65\163", "\150\141\x73\55\x63\150\x69\154\x64\x72\x65\156"); gqmewagyagamokok: return $igqsaukqcqscimok; } public function wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs) : string { return ''; } public function kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $meqocwsecsywiiqs; } public function ksosuqqukyweqiao($iwywmkygwewiamwm, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $iwywmkygwewiamwm; } public function qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $siquossayskcwkea; } public function smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return $siquossayskcwkea; } public final function amqewiesyqeqiuai() : string { return "\x73\165\142\x6d\x65\156\165\137{$this->currentLevel}"; } public function igmaewykumgwoaoy(&$wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $ggauoeuaesiymgee = '') { $eqgoocgaqwqcimie = !empty($eqgoocgaqwqcimie) ? $eqgoocgaqwqcimie : $ggauoeuaesiymgee; $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, $uusmaiomayssaecw, $eqgoocgaqwqcimie); return $wwgucssaecqekuek; } }
