<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             626988f5e0544             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Optimization; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; abstract class Common extends Container { public function wigskegsqequoeks() { if (!($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($this, "\145\x6e\161\x75\x65\165\x65"))) { goto kuicqywysciceggs; } $this->qcsmikeggeemccuu("\151\156\151\x74", [$this, $qgciuiagkkguykgs], 999); kuicqywysciceggs: } public function kgquecmsgcouyaya() { if (!($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($this, "\x6f\160\x74\x69\x6d\151\172\x61\x74\151\157\156\x42\165\x66\x66\145\x72"))) { goto mkwskuycuyguqqok; } $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\164\151\155\151\x7a\141\x74\151\x6f\x6e\137\x62\x75\x66\x66\x65\162"), [$this, $qgciuiagkkguykgs]); mkwskuycuyguqqok: } public function macyowwkykkuosce() : bool { static $cuakwceieagskoaa; if (!(!isset($cuakwceieagskoaa) || !is_bool($cuakwceieagskoaa))) { goto eequksumcoogyoem; } $cuakwceieagskoaa = !DecoratorQuery::goecwaaykqoaaagg() && !DecoratorQuery::sskgaouyswsqywgk() && !DecoratorQuery::yycwkigueqwacmic() && !DecoratorQuery::ksocgccowyqqmeii() && !DecoratorWoocommerce::wmqwkwyuqwksiiqk() && !DecoratorQuery::kmmyuiwaogukwqqi() && !DecoratorWoocommerce::gqoskmoekogyqwsc() && !DecoratorWoocommerce::ckeyeaouokcgeqeq() && !ManipulateServer::smowememmgeukwki(); $cuakwceieagskoaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\143\x6f\166\145\x72\x5f\x6f\x70\164\x69\x6d\x69\x7a\141\164\x69\157\156\x5f\x69\163\137\x61\x6c\154\x6f\x77"), $cuakwceieagskoaa); if (!$cuakwceieagskoaa) { goto sqiciiuwmykocycc; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(Setting::gwucgosagousgoko, []); if (!($couiucmsqaieciue && is_array($couiucmsqaieciue))) { goto iomcaiwewsawiamu; } $agqwmkegqacsaeki = ManipulatePage::eokiwumgqmymgyoa(); $qqsoksukumkmgkwm = ManipulatePage::oigaewqgekgugqug(); if ($agqwmkegqacsaeki && DecoratorQuery::seokosgecygsmqau()) { goto yowsmsiyimmimemc; } if ($qqsoksukumkmgkwm && DecoratorQuery::takycgcamoacksqw()) { goto eqkauqciwewmgeoi; } if (!DecoratorQuery::kccakwkaqugygwmq()) { goto sciwggaeogcoesiu; } $cuakwceieagskoaa = !in_array(ManipulatePost::mwikyscisascoeea(), $couiucmsqaieciue); sciwggaeogcoesiu: goto kwagwqyusyiyoaqs; eqkauqciwewmgeoi: $cuakwceieagskoaa = !in_array($qqsoksukumkmgkwm, $couiucmsqaieciue); kwagwqyusyiyoaqs: goto kiqogmwcgcamwiig; yowsmsiyimmimemc: $cuakwceieagskoaa = !in_array($agqwmkegqacsaeki, $couiucmsqaieciue); kiqogmwcgcamwiig: iomcaiwewsawiamu: sqiciiuwmykocycc: eequksumcoogyoem: return $cuakwceieagskoaa; } }
