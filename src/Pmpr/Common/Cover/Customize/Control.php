<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             644539feeb045             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Customize; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Group; use WP_Customize_Control; class Control extends WP_Customize_Control { protected $field = null; public function kqgkscycaasckiae(?Field $aiowsaccomcoikus) : self { $this->field = $aiowsaccomcoikus; return $this; } public function ygwimyogyaqgumam() : ?Field { return $this->field; } protected function render_content() { $aiowsaccomcoikus = $this->ygwimyogyaqgumam(); if ($aiowsaccomcoikus instanceof Field) { goto emmsycooskoqmgeg; } parent::render_content(); goto ouamogymawucwswu; emmsycooskoqmgeg: $iwywmkygwewiamwm = $this->get_link(); if (!preg_match("\57\136\x28\x3f\41\x5c\x3d\174\x5c\x22\x29\50\x2e\x2b\x29\x3d\42\x28\56\x2b\51\x22\x2f", $iwywmkygwewiamwm, $sogksuscggsicmac)) { goto qgeugwymkkiacwoc; } $wisgiwskwawciiee = $sogksuscggsicmac[1]; $eqgoocgaqwqcimie = $sogksuscggsicmac[2]; if ($aiowsaccomcoikus instanceof Group) { goto ciykoyeioqgyaeqo; } $aiowsaccomcoikus->qcgocuceocquqcuw($wisgiwskwawciiee, $eqgoocgaqwqcimie); goto mqicocmqegwukkwg; ciykoyeioqgyaeqo: foreach ($aiowsaccomcoikus->ugmceccgwaaaigiy() as $oyacqckguigccoig) { $oyacqckguigccoig->qcgocuceocquqcuw($wisgiwskwawciiee, $eqgoocgaqwqcimie); asiqwuoswmigcaki: } wcugqegqsuuuwqao: mqicocmqegwukkwg: $eqgoocgaqwqcimie = $this->value(); $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie)->usoqcyyugsuyiewc("\x63\165\163\164\x6f\x6d\55\143\165\x73\x74\157\155\x69\x7a\145\55\143\x6f\156\164\x72\157\154")->render($this->id, true); qgeugwymkkiacwoc: ouamogymawucwswu: } }
