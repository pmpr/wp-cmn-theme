<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638a6929f34ef             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const ukyommesgeqqcayq = "\143\157\155\x6d\145\156\164\137"; const wcigqgscaeeqiigq = "\x75\163\x65\162\137\151\144"; const cqmeioumqiogmuog = "\x63\157\x6d\x6d\145\x6e\x74\x5f\x61\x6c\145\162\164\163"; public function bwuyeikikkcmqokm() : bool { return isset($_GET["\162\145\160\154\171\164\x6f\x63\157\x6d"]); } public function kuqogciwkswmckgw() : bool { return (bool) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\157\x6d\x6d\x65\156\x74\137\x61\152\x61\170\151\146\x79"), true); } public function uiqcwsowwswommka($post = null) : bool { $post = ManipulatePost::get($post); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $cuakwceieagskoaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::ukyommesgeqqcayq . "\x61\154\154\x6f\167\x5f\162\145\x6e\x64\145\x72"), true, $post, $useksmwkuswkwcqg); if (!$cuakwceieagskoaa) { goto gkqiqaqecmoogmaa; } $csqgaqmimuoawiym = (array) Setting::eiwcuqigayigimak(MetaBox::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::ukyommesgeqqcayq . "\x72\x65\156\x64\x65\162\x5f\160\x6f\163\x74\137\x74\171\x70\145\x73"), $csqgaqmimuoawiym); $cuakwceieagskoaa = $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym, true) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, self::goumieeyyqigueiw); gkqiqaqecmoogmaa: return $cuakwceieagskoaa; } }
