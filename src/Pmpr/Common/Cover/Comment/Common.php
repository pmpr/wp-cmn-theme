<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6441752d7ba3f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const ukyommesgeqqcayq = "\143\x6f\155\155\x65\x6e\x74\137"; const wcigqgscaeeqiigq = "\x75\163\x65\x72\137\151\144"; const cqmeioumqiogmuog = "\x63\157\x6d\155\145\156\164\x5f\141\154\145\162\164\163"; public function bwuyeikikkcmqokm() : bool { return isset($_GET["\162\x65\x70\154\171\164\157\x63\157\155"]); } public function kuqogciwkswmckgw() : bool { return (bool) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\143\x6f\x6d\x6d\x65\x6e\x74\137\141\x6a\141\170\151\146\x79"), true); } public function uiqcwsowwswommka($post = null) : bool { $post = ManipulatePost::get($post); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $cuakwceieagskoaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::ukyommesgeqqcayq . "\x61\x6c\x6c\x6f\167\x5f\x72\x65\156\x64\x65\162"), true, $post, $useksmwkuswkwcqg); if (!$cuakwceieagskoaa) { goto sooecucuakgkuyis; } $csqgaqmimuoawiym = (array) Setting::eiwcuqigayigimak(MetaBox::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::ukyommesgeqqcayq . "\162\x65\x6e\144\x65\x72\x5f\x70\x6f\x73\x74\x5f\164\x79\x70\x65\163"), $csqgaqmimuoawiym); $cuakwceieagskoaa = $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym, true) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, self::goumieeyyqigueiw); sooecucuakgkuyis: return $cuakwceieagskoaa; } }
