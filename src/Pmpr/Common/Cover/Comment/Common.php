<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661da07985021             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use WP_Post; use WP_Term; abstract class Common extends Container { const ukyommesgeqqcayq = "\x63\x6f\x6d\155\145\156\164\137"; const wcigqgscaeeqiigq = "\165\163\x65\x72\137\x69\144"; const cqmeioumqiogmuog = "\143\157\155\x6d\x65\156\x74\x5f\141\x6c\x65\x72\x74\x73"; public function bwuyeikikkcmqokm() : bool { return isset($_GET["\x72\x65\160\x6c\x79\164\x6f\x63\x6f\x6d"]); } public function kuqogciwkswmckgw() : bool { return (bool) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\143\157\155\x6d\145\x6e\164\137\x61\x6a\141\x78\151\146\x79"), true); } public function uiqcwsowwswommka() { global $withcomments, $post; $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); $moqewomugocaueis = $mumyimcwkaemyyue->mwyqswsaeeewsosm(); $sqeykgyoooqysmca = self::uouymeyqasaeckso; $ccamwkygaogkooek = false; $mqyaskyaekmkegmg = null; if ($mksyucucyswaukig instanceof WP_Post) { goto goqmywuiicciasyk; } if ($mksyucucyswaukig instanceof WP_Term) { goto siecswkggyikqkga; } goto oyiuyywyeoskckuw; goqmywuiicciasyk: $post = $mksyucucyswaukig; $ccamwkygaogkooek = true; $mqyaskyaekmkegmg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($mksyucucyswaukig); goto oyiuyywyeoskckuw; siecswkggyikqkga: $post = Mediator::symcgieuakksimmu()->ammoiysyaassswky(); $sqeykgyoooqysmca = self::gmmygyiecgmggaam; $mqyaskyaekmkegmg = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($mksyucucyswaukig); oyiuyywyeoskckuw: $cuakwceieagskoaa = false; if (!($mksyucucyswaukig && $mqyaskyaekmkegmg)) { goto yamyagayiooyeekg; } if (!$this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\x61\154\154\157\x77\137\x72\145\156\x64\145\x72", true, $mksyucucyswaukig, $sqeykgyoooqysmca, $mqyaskyaekmkegmg)) { goto iksewmsaugayqaqq; } if ($ccamwkygaogkooek) { goto yuqgwwmqwqiuwmaw; } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->esqicqsuigywkaqw()) { goto easqmyamcmeesgya; } $keywesgaqieiugqe = (array) Setting::eiwcuqigayigimak(SettingSection::ekegwsoioemeckwo, []); $keywesgaqieiugqe = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\x72\x65\156\x64\145\x72\137\164\x61\x78\157\156\x6f\x6d\151\x65\163", $keywesgaqieiugqe); $cuakwceieagskoaa = in_array($mqyaskyaekmkegmg, $keywesgaqieiugqe, true); if (!$cuakwceieagskoaa) { goto qkuiwoqksgayqqmg; } $withcomments = true; qkuiwoqksgayqqmg: easqmyamcmeesgya: goto quaqmuusokiyqgqe; yuqgwwmqwqiuwmaw: $csqgaqmimuoawiym = (array) Setting::eiwcuqigayigimak(SettingSection::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\162\x65\x6e\x64\x65\162\x5f\x70\157\163\x74\x5f\x74\171\160\x65\163", $csqgaqmimuoawiym); $cuakwceieagskoaa = comments_open($mksyucucyswaukig) && in_array($mqyaskyaekmkegmg, $csqgaqmimuoawiym, true) && $this->uwkmaywceaaaigwo()->gscioiumssogceuc()->akwkkemsqyaykueg($mqyaskyaekmkegmg, self::goumieeyyqigueiw); quaqmuusokiyqgqe: if (!$cuakwceieagskoaa) { goto smiemmcqqukyguuu; } $cuakwceieagskoaa = [self::mswoacegomcucaik => $post, self::ckmqoekmugkggeym => $mksyucucyswaukig, self::eggygikowgywcayq => $moqewomugocaueis, self::wwcycgyaiaksckuk => $sqeykgyoooqysmca]; smiemmcqqukyguuu: iksewmsaugayqaqq: yamyagayiooyeekg: return $cuakwceieagskoaa; } }
