<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62698766eff8c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Optimization; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; abstract class Common extends Container { public function wigskegsqequoeks() { if (!($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($this, "\145\x6e\161\165\x65\165\x65"))) { goto kuicqywysciceggs; } $this->qcsmikeggeemccuu("\x69\156\x69\x74", [$this, $qgciuiagkkguykgs], 999); kuicqywysciceggs: } public function kgquecmsgcouyaya() { if (!($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($this, "\x6f\160\x74\x69\x6d\x69\172\x61\x74\151\x6f\x6e\x42\165\x66\146\145\162"))) { goto mkwskuycuyguqqok; } $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\x74\x69\x6d\151\172\x61\164\151\x6f\156\x5f\x62\165\146\x66\x65\x72"), [$this, $qgciuiagkkguykgs]); mkwskuycuyguqqok: } public function macyowwkykkuosce() : bool { static $cuakwceieagskoaa; if (!(!isset($cuakwceieagskoaa) || !is_bool($cuakwceieagskoaa))) { goto eequksumcoogyoem; } $cuakwceieagskoaa = !DecoratorQuery::goecwaaykqoaaagg() && !DecoratorQuery::sskgaouyswsqywgk() && !DecoratorQuery::yycwkigueqwacmic() && !DecoratorQuery::ksocgccowyqqmeii() && !DecoratorWoocommerce::wmqwkwyuqwksiiqk() && !DecoratorQuery::kmmyuiwaogukwqqi() && !DecoratorWoocommerce::gqoskmoekogyqwsc() && !DecoratorWoocommerce::ckeyeaouokcgeqeq() && !ManipulateServer::smowememmgeukwki(); $cuakwceieagskoaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\143\x6f\166\x65\162\137\x6f\x70\164\x69\x6d\x69\x7a\x61\164\x69\157\156\x5f\151\x73\137\x61\x6c\x6c\x6f\167"), $cuakwceieagskoaa); if (!$cuakwceieagskoaa) { goto sqiciiuwmykocycc; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(Setting::gwucgosagousgoko, []); if (!($couiucmsqaieciue && is_array($couiucmsqaieciue))) { goto iomcaiwewsawiamu; } $agqwmkegqacsaeki = ManipulatePage::eokiwumgqmymgyoa(); $qqsoksukumkmgkwm = ManipulatePage::oigaewqgekgugqug(); if ($agqwmkegqacsaeki && DecoratorQuery::seokosgecygsmqau()) { goto yowsmsiyimmimemc; } if ($qqsoksukumkmgkwm && DecoratorQuery::takycgcamoacksqw()) { goto eqkauqciwewmgeoi; } if (!DecoratorQuery::kccakwkaqugygwmq()) { goto sciwggaeogcoesiu; } $cuakwceieagskoaa = !in_array(ManipulatePost::mwikyscisascoeea(), $couiucmsqaieciue); sciwggaeogcoesiu: goto kwagwqyusyiyoaqs; eqkauqciwewmgeoi: $cuakwceieagskoaa = !in_array($qqsoksukumkmgkwm, $couiucmsqaieciue); kwagwqyusyiyoaqs: goto kiqogmwcgcamwiig; yowsmsiyimmimemc: $cuakwceieagskoaa = !in_array($agqwmkegqacsaeki, $couiucmsqaieciue); kiqogmwcgcamwiig: iomcaiwewsawiamu: sqiciiuwmykocycc: eequksumcoogyoem: return $cuakwceieagskoaa; } }
