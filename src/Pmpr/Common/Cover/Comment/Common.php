<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638bc0b520799             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const ukyommesgeqqcayq = "\x63\157\x6d\x6d\145\156\x74\137"; const wcigqgscaeeqiigq = "\165\163\145\162\x5f\151\144"; const cqmeioumqiogmuog = "\143\157\x6d\155\x65\x6e\164\x5f\x61\154\x65\x72\x74\x73"; public function bwuyeikikkcmqokm() : bool { return isset($_GET["\x72\x65\x70\x6c\171\164\x6f\x63\157\x6d"]); } public function kuqogciwkswmckgw() : bool { return (bool) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\143\157\x6d\155\x65\x6e\164\x5f\141\152\x61\170\x69\146\x79"), true); } public function uiqcwsowwswommka($post = null) : bool { $post = ManipulatePost::get($post); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $cuakwceieagskoaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::ukyommesgeqqcayq . "\x61\x6c\x6c\157\x77\x5f\x72\x65\x6e\144\x65\x72"), true, $post, $useksmwkuswkwcqg); if (!$cuakwceieagskoaa) { goto ceiuqsiqgiuiekem; } $csqgaqmimuoawiym = (array) Setting::eiwcuqigayigimak(MetaBox::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::ukyommesgeqqcayq . "\162\x65\156\144\145\x72\x5f\160\x6f\x73\x74\x5f\164\x79\x70\145\163"), $csqgaqmimuoawiym); $cuakwceieagskoaa = $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym, true) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, self::goumieeyyqigueiw); ceiuqsiqgiuiekem: return $cuakwceieagskoaa; } }
