<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665e0f0338f6d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Customize; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Collection; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use WP_Customize_Control; class Control extends WP_Customize_Control { protected ?Field $field = null; public function kqgkscycaasckiae(?Field $aiowsaccomcoikus) : self { $this->field = $aiowsaccomcoikus; return $this; } public function ygwimyogyaqgumam() : ?Field { return $this->field; } protected function render_content() { $aiowsaccomcoikus = $this->ygwimyogyaqgumam(); if ($aiowsaccomcoikus instanceof Field) { goto ykwasaaoeeiuomim; } parent::render_content(); goto acggikioyeueeowg; ykwasaaoeeiuomim: $iwywmkygwewiamwm = $this->get_link(); if (!preg_match("\57\136\x28\x3f\41\x5c\x3d\x7c\134\42\x29\50\56\53\x29\75\x22\x28\56\53\x29\x22\57", $iwywmkygwewiamwm, $sogksuscggsicmac)) { goto iwueukqcywkiyqge; } $wisgiwskwawciiee = $sogksuscggsicmac[1]; $eqgoocgaqwqcimie = $sogksuscggsicmac[2]; if ($aiowsaccomcoikus instanceof Collection) { goto kqyoakickmseyyeq; } $aiowsaccomcoikus->qcgocuceocquqcuw($wisgiwskwawciiee, $eqgoocgaqwqcimie); goto micceocwuwkyusic; kqyoakickmseyyeq: foreach ($aiowsaccomcoikus->ugmceccgwaaaigiy() as $oyacqckguigccoig) { $oyacqckguigccoig->qcgocuceocquqcuw($wisgiwskwawciiee, $eqgoocgaqwqcimie); aukucaieceiwesmm: } iauwuugggmegwisk: micceocwuwkyusic: $eqgoocgaqwqcimie = $this->value(); $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie)->kakecegieeqyyayu()->qigsyyqgewgskemg("\143\165\163\x74\x6f\x6d\x2d\143\165\163\164\157\x6d\x69\172\145\55\143\x6f\156\x74\x72\157\154"); $aiowsaccomcoikus->render(); iwueukqcywkiyqge: acggikioyeueeowg: } }
