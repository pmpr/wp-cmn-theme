<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654a75e1bf70e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use WP_Post; use WP_Term; abstract class Common extends Container { const ukyommesgeqqcayq = "\x63\157\155\155\x65\x6e\164\x5f"; const wcigqgscaeeqiigq = "\165\x73\x65\x72\137\151\144"; const cqmeioumqiogmuog = "\x63\157\x6d\155\145\156\x74\x5f\141\x6c\x65\162\x74\x73"; public function bwuyeikikkcmqokm() : bool { return isset($_GET["\162\x65\x70\154\171\164\157\x63\157\x6d"]); } public function kuqogciwkswmckgw() : bool { return (bool) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\143\157\x6d\x6d\x65\x6e\164\x5f\141\152\141\x78\151\146\171"), true); } public function uiqcwsowwswommka() { global $kwysiomeoawmgmuu; $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); $moqewomugocaueis = $mumyimcwkaemyyue->mwyqswsaeeewsosm(); $sqeykgyoooqysmca = self::uouymeyqasaeckso; $ccamwkygaogkooek = false; $mqyaskyaekmkegmg = null; if ($mksyucucyswaukig instanceof WP_Post) { goto omuauimgkygcecsc; } if ($mksyucucyswaukig instanceof WP_Term) { goto wwcqoeuwskquakwy; } goto oasggeyceiyieuuo; omuauimgkygcecsc: $ccamwkygaogkooek = true; $mqyaskyaekmkegmg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($mksyucucyswaukig); goto oasggeyceiyieuuo; wwcqoeuwskquakwy: $sqeykgyoooqysmca = self::gmmygyiecgmggaam; $mqyaskyaekmkegmg = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($mksyucucyswaukig); oasggeyceiyieuuo: $cuakwceieagskoaa = false; if (!($mksyucucyswaukig && $mqyaskyaekmkegmg)) { goto qyyyycwaookqaoke; } if (!$this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\141\x6c\154\157\167\137\x72\145\156\144\145\x72", true, $mksyucucyswaukig, $sqeykgyoooqysmca, $mqyaskyaekmkegmg)) { goto mugscgugcogcasue; } if ($ccamwkygaogkooek) { goto quamuugoocyyceec; } $keywesgaqieiugqe = (array) Setting::eiwcuqigayigimak(SettingSection::ekegwsoioemeckwo, []); $keywesgaqieiugqe = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\x72\145\156\x64\145\162\x5f\x74\x61\170\157\x6e\157\155\x69\145\x73", $keywesgaqieiugqe); $cuakwceieagskoaa = in_array($mqyaskyaekmkegmg, $keywesgaqieiugqe, true); goto qcssigmcayuyweiy; quamuugoocyyceec: $csqgaqmimuoawiym = (array) Setting::eiwcuqigayigimak(SettingSection::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\x72\145\x6e\x64\145\162\137\x70\157\163\x74\137\164\x79\x70\145\163", $csqgaqmimuoawiym); $cuakwceieagskoaa = comments_open($mksyucucyswaukig) && in_array($mqyaskyaekmkegmg, $csqgaqmimuoawiym, true) && $this->uwkmaywceaaaigwo()->gscioiumssogceuc()->akwkkemsqyaykueg($mqyaskyaekmkegmg, self::goumieeyyqigueiw); qcssigmcayuyweiy: if (!$cuakwceieagskoaa) { goto iymaiwqimisgacmk; } $kwysiomeoawmgmuu = true; $cuakwceieagskoaa = [self::ckmqoekmugkggeym => $mksyucucyswaukig, self::eggygikowgywcayq => $moqewomugocaueis, self::wwcycgyaiaksckuk => $sqeykgyoooqysmca]; iymaiwqimisgacmk: mugscgugcogcasue: qyyyycwaookqaoke: return $cuakwceieagskoaa; } }
