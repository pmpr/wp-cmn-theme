<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678030c3dd532             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Customizer; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Collection; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Customize_Control; class Control extends WP_Customize_Control { protected ?Field $field = null; public function kqgkscycaasckiae(?Field $aiowsaccomcoikus) : self { $this->field = $aiowsaccomcoikus; return $this; } public function ygwimyogyaqgumam() : ?Field { return $this->field; } protected function render_content() { $aiowsaccomcoikus = $this->ygwimyogyaqgumam(); if ($aiowsaccomcoikus instanceof Field) { $iwywmkygwewiamwm = $this->get_link(); if (preg_match("\x2f\136\x28\x3f\x21\134\x3d\174\134\42\x29\x28\x2e\53\x29\75\x22\50\x2e\53\51\x22\57", $iwywmkygwewiamwm, $sogksuscggsicmac)) { $wisgiwskwawciiee = $sogksuscggsicmac[1]; $eqgoocgaqwqcimie = $sogksuscggsicmac[2]; if ($aiowsaccomcoikus instanceof Collection) { foreach ($aiowsaccomcoikus->ugmceccgwaaaigiy() as $oyacqckguigccoig) { $oyacqckguigccoig->qcgocuceocquqcuw($wisgiwskwawciiee, $eqgoocgaqwqcimie); } } else { $aiowsaccomcoikus->qcgocuceocquqcuw($wisgiwskwawciiee, $eqgoocgaqwqcimie); } $eqgoocgaqwqcimie = $this->value(); $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie)->kakecegieeqyyayu()->qigsyyqgewgskemg("\143\x75\x73\164\157\x6d\x2d\143\165\163\164\x6f\155\x69\172\x65\x2d\143\x6f\x6e\164\162\x6f\154"); $aiowsaccomcoikus->render([Constants::qaacaqioeyiuakeu => true]); } } else { parent::render_content(); } } }
