<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63274f651f3f2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Optimization; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; abstract class Common extends Container { public function wigskegsqequoeks() { if (!($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($this, "\145\x6e\x71\x75\x65\165\x65"))) { goto mqccmesakuemceqi; } $this->qcsmikeggeemccuu("\x69\156\151\x74", [$this, $qgciuiagkkguykgs], 999); mqccmesakuemceqi: } public function kgquecmsgcouyaya() { if (!($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($this, "\157\160\x74\x69\155\x69\x7a\141\164\151\x6f\156\102\165\x66\146\145\162"))) { goto eyiamcekkgkiawqy; } $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\164\x69\155\x69\x7a\x61\164\151\157\x6e\x5f\142\x75\146\x66\145\x72"), [$this, $qgciuiagkkguykgs]); eyiamcekkgkiawqy: } public function macyowwkykkuosce() : bool { static $cuakwceieagskoaa; if (!(!isset($cuakwceieagskoaa) || !is_bool($cuakwceieagskoaa))) { goto siqagquguiemuoku; } $cuakwceieagskoaa = !DecoratorQuery::goecwaaykqoaaagg() && !DecoratorQuery::sskgaouyswsqywgk() && !DecoratorQuery::yycwkigueqwacmic() && !DecoratorQuery::ksocgccowyqqmeii() && !DecoratorWoocommerce::wmqwkwyuqwksiiqk() && !DecoratorQuery::kmmyuiwaogukwqqi() && !DecoratorWoocommerce::gqoskmoekogyqwsc() && !DecoratorWoocommerce::ckeyeaouokcgeqeq() && !ManipulateServer::smowememmgeukwki(); $cuakwceieagskoaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\157\166\145\162\137\x6f\x70\164\151\155\x69\172\x61\164\x69\157\156\137\151\x73\137\141\154\x6c\x6f\167"), $cuakwceieagskoaa); if (!$cuakwceieagskoaa) { goto coywmiyqgsweuiic; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(Setting::gwucgosagousgoko, []); if (!($couiucmsqaieciue && is_array($couiucmsqaieciue))) { goto ieumumsgyguceusy; } $agqwmkegqacsaeki = ManipulatePage::eokiwumgqmymgyoa(); $qqsoksukumkmgkwm = ManipulatePage::oigaewqgekgugqug(); if ($agqwmkegqacsaeki && DecoratorQuery::seokosgecygsmqau()) { goto qcessicwuikwqsis; } if ($qqsoksukumkmgkwm && DecoratorQuery::takycgcamoacksqw()) { goto kooskuwkuayiuose; } if (!DecoratorQuery::kccakwkaqugygwmq()) { goto twkmiuomimomscew; } $cuakwceieagskoaa = !in_array(ManipulatePost::mwikyscisascoeea(), $couiucmsqaieciue); twkmiuomimomscew: goto qwcegcuowwgiccos; kooskuwkuayiuose: $cuakwceieagskoaa = !in_array($qqsoksukumkmgkwm, $couiucmsqaieciue); qwcegcuowwgiccos: goto yssscwioiyygssec; qcessicwuikwqsis: $cuakwceieagskoaa = !in_array($agqwmkegqacsaeki, $couiucmsqaieciue); yssscwioiyygssec: ieumumsgyguceusy: coywmiyqgsweuiic: siqagquguiemuoku: return $cuakwceieagskoaa; } }
