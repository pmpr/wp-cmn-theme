<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6534dfee9401b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const ukyommesgeqqcayq = "\143\x6f\155\x6d\x65\x6e\164\137"; const wcigqgscaeeqiigq = "\165\x73\145\162\x5f\151\144"; const cqmeioumqiogmuog = "\143\157\155\x6d\x65\x6e\164\137\141\154\145\162\164\163"; public function bwuyeikikkcmqokm() : bool { return isset($_GET["\162\145\x70\x6c\171\164\x6f\143\x6f\x6d"]); } public function kuqogciwkswmckgw() : bool { return (bool) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\157\x6d\x6d\145\x6e\x74\x5f\x61\152\141\170\151\x66\x79"), true); } public function uiqcwsowwswommka($post = null) : bool { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get($post); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($post); $cuakwceieagskoaa = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\141\x6c\x6c\x6f\x77\x5f\162\x65\156\x64\145\162", true, $post, $useksmwkuswkwcqg); if (!$cuakwceieagskoaa) { goto coywmiyqgsweuiic; } $csqgaqmimuoawiym = (array) Setting::eiwcuqigayigimak(MetaBox::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\162\x65\x6e\144\x65\162\x5f\x70\157\163\x74\x5f\x74\x79\160\x65\163", $csqgaqmimuoawiym); $cuakwceieagskoaa = $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym, true) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, self::goumieeyyqigueiw); coywmiyqgsweuiic: return $cuakwceieagskoaa; } }
