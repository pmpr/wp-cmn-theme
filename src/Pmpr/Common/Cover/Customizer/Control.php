<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4a7eec562             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Customizer; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Collection; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Customize_Control; class Control extends WP_Customize_Control { protected ?Field $field = null; public function kqgkscycaasckiae(?Field $aiowsaccomcoikus) : self { $this->field = $aiowsaccomcoikus; return $this; } public function ygwimyogyaqgumam() : ?Field { return $this->field; } protected function render_content() { $aiowsaccomcoikus = $this->ygwimyogyaqgumam(); if ($aiowsaccomcoikus instanceof Field) { $iwywmkygwewiamwm = $this->get_link(); if (preg_match("\x2f\136\x28\77\41\134\75\174\134\x22\51\50\x2e\53\x29\x3d\x22\x28\x2e\x2b\51\x22\x2f", $iwywmkygwewiamwm, $sogksuscggsicmac)) { $wisgiwskwawciiee = $sogksuscggsicmac[1]; $eqgoocgaqwqcimie = $sogksuscggsicmac[2]; if ($aiowsaccomcoikus instanceof Collection) { foreach ($aiowsaccomcoikus->ugmceccgwaaaigiy() as $oyacqckguigccoig) { $oyacqckguigccoig->qcgocuceocquqcuw($wisgiwskwawciiee, $eqgoocgaqwqcimie); } } else { $aiowsaccomcoikus->qcgocuceocquqcuw($wisgiwskwawciiee, $eqgoocgaqwqcimie); } $eqgoocgaqwqcimie = $this->value(); $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie)->kakecegieeqyyayu()->qigsyyqgewgskemg("\x63\165\163\x74\x6f\155\x2d\x63\x75\163\164\x6f\155\x69\172\x65\55\x63\157\x6e\x74\162\157\154"); $aiowsaccomcoikus->render([Constants::qaacaqioeyiuakeu => true]); } } else { parent::render_content(); } } }
