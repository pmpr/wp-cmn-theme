<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             662d5a8e62a84             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Customize; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Collection; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use WP_Customize_Control; class Control extends WP_Customize_Control { protected ?Field $field = null; public function kqgkscycaasckiae(?Field $aiowsaccomcoikus) : self { $this->field = $aiowsaccomcoikus; return $this; } public function ygwimyogyaqgumam() : ?Field { return $this->field; } protected function render_content() { $aiowsaccomcoikus = $this->ygwimyogyaqgumam(); if ($aiowsaccomcoikus instanceof Field) { goto eiawsoasmscmqswa; } parent::render_content(); goto ickcmqoiosquugwe; eiawsoasmscmqswa: $iwywmkygwewiamwm = $this->get_link(); if (!preg_match("\x2f\x5e\50\x3f\41\134\75\x7c\134\42\x29\50\x2e\53\51\x3d\x22\x28\56\53\51\42\57", $iwywmkygwewiamwm, $sogksuscggsicmac)) { goto goeoymmqqqeeoime; } $wisgiwskwawciiee = $sogksuscggsicmac[1]; $eqgoocgaqwqcimie = $sogksuscggsicmac[2]; if ($aiowsaccomcoikus instanceof Collection) { goto qgegkeomwscwwiuw; } $aiowsaccomcoikus->qcgocuceocquqcuw($wisgiwskwawciiee, $eqgoocgaqwqcimie); goto qmiwsequckckoaei; qgegkeomwscwwiuw: foreach ($aiowsaccomcoikus->ugmceccgwaaaigiy() as $oyacqckguigccoig) { $oyacqckguigccoig->qcgocuceocquqcuw($wisgiwskwawciiee, $eqgoocgaqwqcimie); kecwuwwcwokuksyq: } egasokooagakisiy: qmiwsequckckoaei: $eqgoocgaqwqcimie = $this->value(); $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie)->kakecegieeqyyayu()->qigsyyqgewgskemg("\143\x75\x73\164\x6f\155\x2d\x63\x75\x73\x74\157\x6d\151\172\145\55\143\157\x6e\x74\x72\157\154"); $aiowsaccomcoikus->render(); goeoymmqqqeeoime: ickcmqoiosquugwe: } }
