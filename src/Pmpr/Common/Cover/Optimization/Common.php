<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62b851b2b1962             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Optimization; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; abstract class Common extends Container { public function wigskegsqequoeks() { if (!($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($this, "\x65\x6e\x71\165\x65\x75\145"))) { goto sggawugoykqcmsug; } $this->qcsmikeggeemccuu("\151\x6e\x69\x74", [$this, $qgciuiagkkguykgs], 999); sggawugoykqcmsug: } public function kgquecmsgcouyaya() { if (!($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($this, "\x6f\x70\164\x69\x6d\x69\x7a\x61\164\151\157\x6e\x42\165\x66\x66\x65\162"))) { goto wkeuuycukmuqiaom; } $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\164\x69\x6d\151\172\141\x74\151\157\x6e\137\x62\165\146\x66\x65\162"), [$this, $qgciuiagkkguykgs]); wkeuuycukmuqiaom: } public function macyowwkykkuosce() : bool { static $cuakwceieagskoaa; if (!(!isset($cuakwceieagskoaa) || !is_bool($cuakwceieagskoaa))) { goto wagqgeqymeqoeuyi; } $cuakwceieagskoaa = !DecoratorQuery::goecwaaykqoaaagg() && !DecoratorQuery::sskgaouyswsqywgk() && !DecoratorQuery::yycwkigueqwacmic() && !DecoratorQuery::ksocgccowyqqmeii() && !DecoratorWoocommerce::wmqwkwyuqwksiiqk() && !DecoratorQuery::kmmyuiwaogukwqqi() && !DecoratorWoocommerce::gqoskmoekogyqwsc() && !DecoratorWoocommerce::ckeyeaouokcgeqeq() && !ManipulateServer::smowememmgeukwki(); $cuakwceieagskoaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\x6f\166\145\162\x5f\x6f\160\164\151\x6d\151\x7a\141\x74\151\157\156\x5f\x69\163\x5f\141\x6c\154\157\167"), $cuakwceieagskoaa); if (!$cuakwceieagskoaa) { goto msemumccgceyugmg; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(Setting::gwucgosagousgoko, []); if (!($couiucmsqaieciue && is_array($couiucmsqaieciue))) { goto eogwckcymuugikuy; } $agqwmkegqacsaeki = ManipulatePage::eokiwumgqmymgyoa(); $qqsoksukumkmgkwm = ManipulatePage::oigaewqgekgugqug(); if ($agqwmkegqacsaeki && DecoratorQuery::seokosgecygsmqau()) { goto mwsmsguqqkcwiiuk; } if ($qqsoksukumkmgkwm && DecoratorQuery::takycgcamoacksqw()) { goto qmuwoecuacmkwgem; } if (!DecoratorQuery::kccakwkaqugygwmq()) { goto wakmayaoqoskekqy; } $cuakwceieagskoaa = !in_array(ManipulatePost::mwikyscisascoeea(), $couiucmsqaieciue); wakmayaoqoskekqy: goto owmuceyswmgueasi; qmuwoecuacmkwgem: $cuakwceieagskoaa = !in_array($qqsoksukumkmgkwm, $couiucmsqaieciue); owmuceyswmgueasi: goto eeauyscekuckoues; mwsmsguqqkcwiiuk: $cuakwceieagskoaa = !in_array($agqwmkegqacsaeki, $couiucmsqaieciue); eeauyscekuckoues: eogwckcymuugikuy: msemumccgceyugmg: wagqgeqymeqoeuyi: return $cuakwceieagskoaa; } }
