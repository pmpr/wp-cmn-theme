<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64326052db17b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Customize; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Group; use WP_Customize_Control; class Control extends WP_Customize_Control { protected $field = null; public function kqgkscycaasckiae(?Field $aiowsaccomcoikus) : self { $this->field = $aiowsaccomcoikus; return $this; } public function ygwimyogyaqgumam() : ?Field { return $this->field; } protected function render_content() { $aiowsaccomcoikus = $this->ygwimyogyaqgumam(); if ($aiowsaccomcoikus instanceof Field) { goto wcugqegqsuuuwqao; } parent::render_content(); goto asiqwuoswmigcaki; wcugqegqsuuuwqao: $iwywmkygwewiamwm = $this->get_link(); if (!preg_match("\57\x5e\50\x3f\x21\134\x3d\x7c\134\x22\51\x28\56\53\51\x3d\42\50\x2e\x2b\x29\42\57", $iwywmkygwewiamwm, $sogksuscggsicmac)) { goto iwsuawwqomaowuii; } $wisgiwskwawciiee = $sogksuscggsicmac[1]; $eqgoocgaqwqcimie = $sogksuscggsicmac[2]; if ($aiowsaccomcoikus instanceof Group) { goto wagqgeqymeqoeuyi; } $aiowsaccomcoikus->qcgocuceocquqcuw($wisgiwskwawciiee, $eqgoocgaqwqcimie); goto qoqskyuuwueqkquk; wagqgeqymeqoeuyi: foreach ($aiowsaccomcoikus->ugmceccgwaaaigiy() as $oyacqckguigccoig) { $oyacqckguigccoig->qcgocuceocquqcuw($wisgiwskwawciiee, $eqgoocgaqwqcimie); msemumccgceyugmg: } eogwckcymuugikuy: qoqskyuuwueqkquk: $eqgoocgaqwqcimie = $this->value(); $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie)->usoqcyyugsuyiewc("\143\x75\x73\164\157\155\55\143\x75\163\x74\157\155\x69\172\145\55\x63\x6f\156\x74\x72\x6f\154")->render($this->id, true); iwsuawwqomaowuii: asiqwuoswmigcaki: } }
