<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668107334b816             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Customize; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Collection; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use WP_Customize_Control; class Control extends WP_Customize_Control { protected ?Field $field = null; public function kqgkscycaasckiae(?Field $aiowsaccomcoikus) : self { $this->field = $aiowsaccomcoikus; return $this; } public function ygwimyogyaqgumam() : ?Field { return $this->field; } protected function render_content() { $aiowsaccomcoikus = $this->ygwimyogyaqgumam(); if ($aiowsaccomcoikus instanceof Field) { goto wwkgkaecgiwggcck; } parent::render_content(); goto umgaesggesswoaqe; wwkgkaecgiwggcck: $iwywmkygwewiamwm = $this->get_link(); if (!preg_match("\57\136\x28\77\41\134\x3d\174\x5c\x22\51\50\x2e\53\51\x3d\42\x28\56\x2b\51\42\57", $iwywmkygwewiamwm, $sogksuscggsicmac)) { goto kciouyuaqkyqomam; } $wisgiwskwawciiee = $sogksuscggsicmac[1]; $eqgoocgaqwqcimie = $sogksuscggsicmac[2]; if ($aiowsaccomcoikus instanceof Collection) { goto sycygoiaiqqageym; } $aiowsaccomcoikus->qcgocuceocquqcuw($wisgiwskwawciiee, $eqgoocgaqwqcimie); goto gygawoqywkukmqee; sycygoiaiqqageym: foreach ($aiowsaccomcoikus->ugmceccgwaaaigiy() as $oyacqckguigccoig) { $oyacqckguigccoig->qcgocuceocquqcuw($wisgiwskwawciiee, $eqgoocgaqwqcimie); oouoqimaaqcmccay: } ycakugokkqkuqyiu: gygawoqywkukmqee: $eqgoocgaqwqcimie = $this->value(); $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie)->kakecegieeqyyayu()->qigsyyqgewgskemg("\x63\165\x73\x74\157\x6d\55\143\x75\x73\164\x6f\155\151\172\145\55\143\157\x6e\x74\162\x6f\154"); $aiowsaccomcoikus->render(); kciouyuaqkyqomam: umgaesggesswoaqe: } }
