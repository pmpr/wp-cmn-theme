<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ae2f59eb649             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Optimization; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; abstract class Common extends Container { public function wigskegsqequoeks() { if (!($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($this, "\145\156\x71\x75\145\165\145"))) { goto ocywegekakimmwcq; } $this->qcsmikeggeemccuu("\151\x6e\151\x74", [$this, $qgciuiagkkguykgs], 999); ocywegekakimmwcq: } public function kgquecmsgcouyaya() { if (!($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($this, "\x6f\160\164\151\155\151\172\x61\x74\x69\157\x6e\102\x75\146\x66\x65\162"))) { goto emqswoaawgeyosmi; } $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\x74\151\155\x69\x7a\141\x74\151\x6f\156\x5f\x62\165\x66\146\145\x72"), [$this, $qgciuiagkkguykgs]); emqswoaawgeyosmi: } public function macyowwkykkuosce() : bool { static $cuakwceieagskoaa; if (!(!isset($cuakwceieagskoaa) || !is_bool($cuakwceieagskoaa))) { goto suqcsgaosywaauuu; } $cuakwceieagskoaa = !DecoratorQuery::goecwaaykqoaaagg() && !DecoratorQuery::sskgaouyswsqywgk() && !DecoratorQuery::yycwkigueqwacmic() && !DecoratorQuery::ksocgccowyqqmeii() && !DecoratorWoocommerce::wmqwkwyuqwksiiqk() && !DecoratorQuery::kmmyuiwaogukwqqi() && !DecoratorWoocommerce::gqoskmoekogyqwsc() && !DecoratorWoocommerce::ckeyeaouokcgeqeq() && !ManipulateServer::smowememmgeukwki(); $cuakwceieagskoaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\143\157\x76\145\162\x5f\x6f\160\x74\x69\x6d\x69\172\x61\x74\151\x6f\x6e\x5f\151\163\137\x61\x6c\154\157\167"), $cuakwceieagskoaa); if (!$cuakwceieagskoaa) { goto mscgewkcqcoowweg; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(Setting::gwucgosagousgoko, []); if (!($couiucmsqaieciue && is_array($couiucmsqaieciue))) { goto ikqeeaysmqgcgawq; } $agqwmkegqacsaeki = ManipulatePage::eokiwumgqmymgyoa(); $qqsoksukumkmgkwm = ManipulatePage::oigaewqgekgugqug(); if ($agqwmkegqacsaeki && DecoratorQuery::seokosgecygsmqau()) { goto qiiigwkqeoewsuwm; } if ($qqsoksukumkmgkwm && DecoratorQuery::takycgcamoacksqw()) { goto esikeyqyuikmaiek; } if (!DecoratorQuery::kccakwkaqugygwmq()) { goto iwsmmkqaoksmocok; } $cuakwceieagskoaa = !in_array(ManipulatePost::mwikyscisascoeea(), $couiucmsqaieciue, true); iwsmmkqaoksmocok: goto okkmcocqokkskasy; esikeyqyuikmaiek: $cuakwceieagskoaa = !in_array($qqsoksukumkmgkwm, $couiucmsqaieciue, true); okkmcocqokkskasy: goto esaqcqqwuussiiwo; qiiigwkqeoewsuwm: $cuakwceieagskoaa = !in_array($agqwmkegqacsaeki, $couiucmsqaieciue, true); esaqcqqwuussiiwo: ikqeeaysmqgcgawq: mscgewkcqcoowweg: suqcsgaosywaauuu: return $cuakwceieagskoaa; } }
