<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67522cf903aeb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\Attribute; use Pmpr\Common\Cover\Container; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use WC_Product_Attribute; abstract class BaseAttribute extends Container { protected array $fields = []; protected ?string $name = null; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\x6f\157\x63\x6f\155\155\x65\x72\143\145\x5f\141\x74\164\162\151\x62\x75\164\145\x5f\x6f\165\x74\x70\165\164", [$this, "\156\x6f\161\x75\x6d\161\141\x71\x69\163\x6d\155\153\141\143\x75"], 99, 4); parent::kgquecmsgcouyaya(); } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function ugmceccgwaaaigiy($product = null) : array { return (array) $this->ocksiywmkyaqseou("\x77\x6f\157\143\157\x6d\x6d\145\x72\143\x65\137{$this->aakmagwggmkoiiyu()}\x5f\x61\164\164\162\151\x62\165\164\145\x5f\x63\x75\x73\164\x6f\155\x5f\146\151\145\x6c\144\x73", $this->fields, $product); } public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self { $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus; return $this; } public function aqasygcsqysmmyke($aokagokqyuysuksm = null) : int { $product = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::kqigmeickowqiiyy); if (!$product || $aokagokqyuysuksm) { $product = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($aokagokqyuysuksm); } return absint($product); } public function noqumqaqismmkacu($aqykuigiuwmmcieu, $ymkomoccmymcoiea, $product) { $product = $this->aqasygcsqysmmyke($product); if ($ymkomoccmymcoiea instanceof WC_Product_Attribute) { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($product); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { if (is_numeric($uusmaiomayssaecw)) { $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea(); } if (!$gkyciwoiiisgywcs->get($aqykuigiuwmmcieu, $uusmaiomayssaecw)) { $aqykuigiuwmmcieu[$uusmaiomayssaecw] = $this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $this->uqsmmauywmsuqais($ymkomoccmymcoiea)); } } } } return $aqykuigiuwmmcieu; } public abstract function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea); public abstract function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string; }
