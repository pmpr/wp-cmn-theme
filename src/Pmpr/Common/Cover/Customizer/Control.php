<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6751a83354743             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Customizer; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Collection; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Customize_Control; class Control extends WP_Customize_Control { protected ?Field $field = null; public function kqgkscycaasckiae(?Field $aiowsaccomcoikus) : self { $this->field = $aiowsaccomcoikus; return $this; } public function ygwimyogyaqgumam() : ?Field { return $this->field; } protected function render_content() { $aiowsaccomcoikus = $this->ygwimyogyaqgumam(); if ($aiowsaccomcoikus instanceof Field) { $iwywmkygwewiamwm = $this->get_link(); if (preg_match("\57\136\x28\x3f\x21\134\75\174\x5c\x22\51\x28\56\x2b\51\75\42\50\x2e\x2b\51\x22\x2f", $iwywmkygwewiamwm, $sogksuscggsicmac)) { $wisgiwskwawciiee = $sogksuscggsicmac[1]; $eqgoocgaqwqcimie = $sogksuscggsicmac[2]; if ($aiowsaccomcoikus instanceof Collection) { foreach ($aiowsaccomcoikus->ugmceccgwaaaigiy() as $oyacqckguigccoig) { $oyacqckguigccoig->qcgocuceocquqcuw($wisgiwskwawciiee, $eqgoocgaqwqcimie); } } else { $aiowsaccomcoikus->qcgocuceocquqcuw($wisgiwskwawciiee, $eqgoocgaqwqcimie); } $eqgoocgaqwqcimie = $this->value(); $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie)->kakecegieeqyyayu()->qigsyyqgewgskemg("\x63\165\163\x74\157\155\x2d\x63\165\x73\x74\157\x6d\x69\172\145\55\x63\x6f\156\164\162\157\154"); $aiowsaccomcoikus->render([Constants::qaacaqioeyiuakeu => true]); } } else { parent::render_content(); } } }
