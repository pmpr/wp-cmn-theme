<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64690d447e1ff             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const ukyommesgeqqcayq = "\143\x6f\x6d\x6d\x65\156\164\137"; const wcigqgscaeeqiigq = "\165\x73\145\162\137\151\144"; const cqmeioumqiogmuog = "\143\x6f\x6d\x6d\145\x6e\x74\137\x61\x6c\x65\162\164\x73"; public function bwuyeikikkcmqokm() : bool { return isset($_GET["\162\145\x70\x6c\171\164\x6f\x63\x6f\155"]); } public function kuqogciwkswmckgw() : bool { return (bool) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\157\x6d\x6d\x65\156\164\x5f\141\152\141\x78\151\146\171"), true); } public function uiqcwsowwswommka($post = null) : bool { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get($post); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($post); $cuakwceieagskoaa = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\141\x6c\x6c\157\x77\137\162\145\156\x64\x65\x72", true, $post, $useksmwkuswkwcqg); if (!$cuakwceieagskoaa) { goto qumkwsqqocooyuoq; } $csqgaqmimuoawiym = (array) Setting::eiwcuqigayigimak(MetaBox::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\x72\145\156\144\145\x72\137\160\157\163\164\x5f\164\x79\x70\x65\x73", $csqgaqmimuoawiym); $cuakwceieagskoaa = $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym, true) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, self::goumieeyyqigueiw); qumkwsqqocooyuoq: return $cuakwceieagskoaa; } }
