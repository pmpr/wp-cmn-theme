<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64d2617863a5a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const ukyommesgeqqcayq = "\x63\157\155\155\145\x6e\164\x5f"; const wcigqgscaeeqiigq = "\165\163\145\162\137\x69\144"; const cqmeioumqiogmuog = "\x63\x6f\155\x6d\145\x6e\x74\137\141\x6c\x65\162\x74\163"; public function bwuyeikikkcmqokm() : bool { return isset($_GET["\x72\145\x70\154\171\164\x6f\143\x6f\155"]); } public function kuqogciwkswmckgw() : bool { return (bool) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\157\155\155\x65\156\x74\137\141\152\x61\170\x69\x66\x79"), true); } public function uiqcwsowwswommka($post = null) : bool { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get($post); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($post); $cuakwceieagskoaa = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\141\x6c\x6c\x6f\x77\x5f\162\x65\156\x64\145\162", true, $post, $useksmwkuswkwcqg); if (!$cuakwceieagskoaa) { goto igwkcikeyoowosoi; } $csqgaqmimuoawiym = (array) Setting::eiwcuqigayigimak(MetaBox::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\x72\145\x6e\144\x65\x72\x5f\160\157\163\164\x5f\x74\171\x70\145\163", $csqgaqmimuoawiym); $cuakwceieagskoaa = $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym, true) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, self::goumieeyyqigueiw); igwkcikeyoowosoi: return $cuakwceieagskoaa; } }
