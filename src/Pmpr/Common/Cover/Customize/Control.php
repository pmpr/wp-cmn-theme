<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63fe352cd71f1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Customize; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Group; use WP_Customize_Control; class Control extends WP_Customize_Control { protected $field = null; public function kqgkscycaasckiae(?Field $aiowsaccomcoikus) : self { $this->field = $aiowsaccomcoikus; return $this; } public function ygwimyogyaqgumam() : ?Field { return $this->field; } protected function render_content() { $aiowsaccomcoikus = $this->ygwimyogyaqgumam(); if ($aiowsaccomcoikus instanceof Field) { goto cysgqimowcqoqqsc; } parent::render_content(); goto ismeikacqqyqcmqe; cysgqimowcqoqqsc: $iwywmkygwewiamwm = $this->get_link(); if (!preg_match("\x2f\x5e\x28\77\41\134\x3d\174\134\x22\x29\x28\x2e\x2b\x29\x3d\42\x28\56\53\x29\42\57", $iwywmkygwewiamwm, $sogksuscggsicmac)) { goto kakkuyeccaacewyo; } $wisgiwskwawciiee = $sogksuscggsicmac[1]; $eqgoocgaqwqcimie = $sogksuscggsicmac[2]; if ($aiowsaccomcoikus instanceof Group) { goto usyckeewsgwaysam; } $aiowsaccomcoikus->qcgocuceocquqcuw($wisgiwskwawciiee, $eqgoocgaqwqcimie); goto gicuuwuuuwumyooa; usyckeewsgwaysam: foreach ($aiowsaccomcoikus->ugmceccgwaaaigiy() as $oyacqckguigccoig) { $oyacqckguigccoig->qcgocuceocquqcuw($wisgiwskwawciiee, $eqgoocgaqwqcimie); skwusmoyomgqkimm: } mkgmaguyswskyioa: gicuuwuuuwumyooa: $eqgoocgaqwqcimie = $this->value(); $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie)->usoqcyyugsuyiewc("\x63\165\x73\164\x6f\x6d\x2d\x63\x75\163\x74\157\155\x69\x7a\x65\x2d\x63\157\156\x74\x72\x6f\x6c")->render($this->id, true); kakkuyeccaacewyo: ismeikacqqyqcmqe: } }
