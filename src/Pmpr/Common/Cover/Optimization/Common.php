<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63d10b6a9e73d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Optimization; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; abstract class Common extends Container { public function wigskegsqequoeks() { if (!($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($this, "\x65\156\x71\165\x65\x75\x65"))) { goto smiemmcqqukyguuu; } $this->qcsmikeggeemccuu("\x69\x6e\151\x74", [$this, $qgciuiagkkguykgs], 999); smiemmcqqukyguuu: } public function kgquecmsgcouyaya() { if (!($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($this, "\x6f\160\164\x69\155\x69\x7a\141\x74\x69\x6f\156\102\165\x66\146\145\162"))) { goto iksewmsaugayqaqq; } $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\x74\151\155\x69\172\141\x74\151\x6f\156\x5f\142\x75\146\x66\x65\x72"), [$this, $qgciuiagkkguykgs]); iksewmsaugayqaqq: } public function macyowwkykkuosce() : bool { static $cuakwceieagskoaa; if (!(!isset($cuakwceieagskoaa) || !is_bool($cuakwceieagskoaa))) { goto skuqigsokaguscas; } $cuakwceieagskoaa = !DecoratorQuery::goecwaaykqoaaagg() && !DecoratorQuery::sskgaouyswsqywgk() && !DecoratorQuery::yycwkigueqwacmic() && !DecoratorQuery::ksocgccowyqqmeii() && !DecoratorWoocommerce::wmqwkwyuqwksiiqk() && !DecoratorQuery::kmmyuiwaogukwqqi() && !DecoratorWoocommerce::gqoskmoekogyqwsc() && !DecoratorWoocommerce::ckeyeaouokcgeqeq() && !ManipulateServer::smowememmgeukwki(); $cuakwceieagskoaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\x6f\x76\145\x72\x5f\x6f\160\164\151\155\151\172\x61\164\x69\157\156\x5f\151\x73\137\x61\154\154\157\167"), $cuakwceieagskoaa); if (!$cuakwceieagskoaa) { goto sgiwoiscywusgmmm; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(SettingSection::gwucgosagousgoko, []); if (!($couiucmsqaieciue && is_array($couiucmsqaieciue))) { goto qmoocweoekqueuyy; } $agqwmkegqacsaeki = ManipulatePage::eokiwumgqmymgyoa(); $qqsoksukumkmgkwm = ManipulatePage::oigaewqgekgugqug(); if ($agqwmkegqacsaeki && DecoratorQuery::seokosgecygsmqau()) { goto ecouwqosmoyyqmkw; } if ($qqsoksukumkmgkwm && DecoratorQuery::takycgcamoacksqw()) { goto yoagcooekomeokwg; } if (!DecoratorQuery::kccakwkaqugygwmq()) { goto yamyagayiooyeekg; } $cuakwceieagskoaa = !in_array(ManipulatePost::mwikyscisascoeea(), $couiucmsqaieciue, true); yamyagayiooyeekg: goto eckcqesiokgwkkiw; yoagcooekomeokwg: $cuakwceieagskoaa = !in_array($qqsoksukumkmgkwm, $couiucmsqaieciue, true); eckcqesiokgwkkiw: goto mqiiqkuaoekeuswo; ecouwqosmoyyqmkw: $cuakwceieagskoaa = !in_array($agqwmkegqacsaeki, $couiucmsqaieciue, true); mqiiqkuaoekeuswo: qmoocweoekqueuyy: sgiwoiscywusgmmm: skuqigsokaguscas: return $cuakwceieagskoaa; } }
