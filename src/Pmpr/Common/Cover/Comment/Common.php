<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6403c9aab1269             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const ukyommesgeqqcayq = "\143\x6f\x6d\155\145\x6e\164\x5f"; const wcigqgscaeeqiigq = "\165\163\x65\162\137\x69\x64"; const cqmeioumqiogmuog = "\143\157\x6d\155\145\x6e\164\x5f\141\x6c\145\x72\164\163"; public function bwuyeikikkcmqokm() : bool { return isset($_GET["\162\x65\160\154\x79\x74\157\x63\157\155"]); } public function kuqogciwkswmckgw() : bool { return (bool) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\143\157\155\155\x65\x6e\x74\x5f\141\152\x61\x78\151\x66\171"), true); } public function uiqcwsowwswommka($post = null) : bool { $post = ManipulatePost::get($post); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $cuakwceieagskoaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::ukyommesgeqqcayq . "\x61\x6c\x6c\157\167\x5f\162\x65\156\x64\145\x72"), true, $post, $useksmwkuswkwcqg); if (!$cuakwceieagskoaa) { goto kooskuwkuayiuose; } $csqgaqmimuoawiym = (array) Setting::eiwcuqigayigimak(MetaBox::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::ukyommesgeqqcayq . "\x72\x65\x6e\x64\x65\162\137\x70\157\x73\164\137\x74\x79\x70\145\163"), $csqgaqmimuoawiym); $cuakwceieagskoaa = $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym, true) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, self::goumieeyyqigueiw); kooskuwkuayiuose: return $cuakwceieagskoaa; } }
