<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ff93cfeff17             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const ukyommesgeqqcayq = "\x63\x6f\155\155\x65\156\164\137"; const wcigqgscaeeqiigq = "\165\x73\145\x72\x5f\151\144"; const cqmeioumqiogmuog = "\x63\x6f\x6d\x6d\145\156\164\x5f\141\x6c\x65\x72\164\163"; public function bwuyeikikkcmqokm() : bool { return isset($_GET["\x72\145\160\x6c\x79\x74\157\143\157\155"]); } public function kuqogciwkswmckgw() : bool { return (bool) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\157\155\x6d\x65\156\164\137\141\152\141\170\151\x66\171"), true); } public function uiqcwsowwswommka($post = null) : bool { $post = ManipulatePost::get($post); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $cuakwceieagskoaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::ukyommesgeqqcayq . "\141\154\x6c\157\167\137\162\x65\156\144\x65\x72"), true, $post, $useksmwkuswkwcqg); if (!$cuakwceieagskoaa) { goto kooskuwkuayiuose; } $csqgaqmimuoawiym = (array) Setting::eiwcuqigayigimak(MetaBox::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::ukyommesgeqqcayq . "\x72\145\x6e\x64\145\x72\x5f\x70\x6f\x73\164\137\x74\x79\x70\145\x73"), $csqgaqmimuoawiym); $cuakwceieagskoaa = $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym, true) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, self::goumieeyyqigueiw); kooskuwkuayiuose: return $cuakwceieagskoaa; } }
