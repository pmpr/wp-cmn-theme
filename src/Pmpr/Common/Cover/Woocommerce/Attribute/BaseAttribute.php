<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc4ae274fd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\Attribute; use Pmpr\Common\Cover\Container; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use WC_Product_Attribute; abstract class BaseAttribute extends Container { protected array $fields = []; protected ?string $name = null; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\x6f\x6f\x63\x6f\155\155\x65\162\143\145\137\141\164\164\x72\x69\142\165\x74\x65\x5f\x6f\x75\x74\x70\165\164", [$this, "\156\157\x71\x75\x6d\x71\x61\x71\151\x73\155\155\153\x61\143\165"], 99, 4); parent::kgquecmsgcouyaya(); } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function ugmceccgwaaaigiy($product = null) : array { return (array) $this->ocksiywmkyaqseou("\167\x6f\x6f\x63\157\155\155\x65\x72\143\x65\x5f{$this->aakmagwggmkoiiyu()}\137\x61\x74\x74\x72\151\x62\x75\x74\x65\137\143\165\x73\164\157\x6d\x5f\x66\x69\145\154\x64\x73", $this->fields, $product); } public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self { $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus; return $this; } public function aqasygcsqysmmyke($aokagokqyuysuksm = null) : int { $product = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::kqigmeickowqiiyy); if (!$product || $aokagokqyuysuksm) { $product = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($aokagokqyuysuksm); } return absint($product); } public function noqumqaqismmkacu($aqykuigiuwmmcieu, $ymkomoccmymcoiea, $product) { $product = $this->aqasygcsqysmmyke($product); if ($ymkomoccmymcoiea instanceof WC_Product_Attribute) { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($product); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { if (is_numeric($uusmaiomayssaecw)) { $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea(); } if (!$gkyciwoiiisgywcs->get($aqykuigiuwmmcieu, $uusmaiomayssaecw)) { $aqykuigiuwmmcieu[$uusmaiomayssaecw] = $this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $this->uqsmmauywmsuqais($ymkomoccmymcoiea)); } } } } return $aqykuigiuwmmcieu; } public abstract function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea); public abstract function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string; }
