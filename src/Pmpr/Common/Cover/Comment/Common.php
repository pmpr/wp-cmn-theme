<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661cfe171bf2b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use WP_Post; use WP_Term; abstract class Common extends Container { const ukyommesgeqqcayq = "\143\x6f\155\155\x65\156\x74\x5f"; const wcigqgscaeeqiigq = "\x75\163\x65\162\x5f\151\x64"; const cqmeioumqiogmuog = "\x63\x6f\x6d\x6d\x65\x6e\164\137\x61\154\x65\162\x74\x73"; public function bwuyeikikkcmqokm() : bool { return isset($_GET["\162\x65\160\x6c\171\x74\157\143\x6f\x6d"]); } public function kuqogciwkswmckgw() : bool { return (bool) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\143\x6f\155\x6d\145\x6e\164\x5f\x61\152\141\170\x69\146\171"), true); } public function uiqcwsowwswommka() { global $withcomments, $post; $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); $moqewomugocaueis = $mumyimcwkaemyyue->mwyqswsaeeewsosm(); $sqeykgyoooqysmca = self::uouymeyqasaeckso; $ccamwkygaogkooek = false; $mqyaskyaekmkegmg = null; if ($mksyucucyswaukig instanceof WP_Post) { goto goqmywuiicciasyk; } if ($mksyucucyswaukig instanceof WP_Term) { goto siecswkggyikqkga; } goto oyiuyywyeoskckuw; goqmywuiicciasyk: $post = $mksyucucyswaukig; $ccamwkygaogkooek = true; $mqyaskyaekmkegmg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($mksyucucyswaukig); goto oyiuyywyeoskckuw; siecswkggyikqkga: $post = Mediator::symcgieuakksimmu()->ammoiysyaassswky(); $sqeykgyoooqysmca = self::gmmygyiecgmggaam; $mqyaskyaekmkegmg = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($mksyucucyswaukig); oyiuyywyeoskckuw: $cuakwceieagskoaa = false; if (!($mksyucucyswaukig && $mqyaskyaekmkegmg)) { goto yamyagayiooyeekg; } if (!$this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\x61\154\x6c\157\167\137\162\145\156\x64\x65\162", true, $mksyucucyswaukig, $sqeykgyoooqysmca, $mqyaskyaekmkegmg)) { goto iksewmsaugayqaqq; } if ($ccamwkygaogkooek) { goto yuqgwwmqwqiuwmaw; } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->esqicqsuigywkaqw()) { goto easqmyamcmeesgya; } $keywesgaqieiugqe = (array) Setting::eiwcuqigayigimak(SettingSection::ekegwsoioemeckwo, []); $keywesgaqieiugqe = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\x72\145\156\144\145\x72\x5f\164\x61\x78\157\x6e\x6f\155\x69\x65\x73", $keywesgaqieiugqe); $cuakwceieagskoaa = in_array($mqyaskyaekmkegmg, $keywesgaqieiugqe, true); if (!$cuakwceieagskoaa) { goto qkuiwoqksgayqqmg; } $withcomments = true; qkuiwoqksgayqqmg: easqmyamcmeesgya: goto quaqmuusokiyqgqe; yuqgwwmqwqiuwmaw: $csqgaqmimuoawiym = (array) Setting::eiwcuqigayigimak(SettingSection::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\x72\145\x6e\x64\x65\162\137\160\x6f\x73\x74\x5f\164\171\160\145\163", $csqgaqmimuoawiym); $cuakwceieagskoaa = comments_open($mksyucucyswaukig) && in_array($mqyaskyaekmkegmg, $csqgaqmimuoawiym, true) && $this->uwkmaywceaaaigwo()->gscioiumssogceuc()->akwkkemsqyaykueg($mqyaskyaekmkegmg, self::goumieeyyqigueiw); quaqmuusokiyqgqe: if (!$cuakwceieagskoaa) { goto smiemmcqqukyguuu; } $cuakwceieagskoaa = [self::mswoacegomcucaik => $post, self::ckmqoekmugkggeym => $mksyucucyswaukig, self::eggygikowgywcayq => $moqewomugocaueis, self::wwcycgyaiaksckuk => $sqeykgyoooqysmca]; smiemmcqqukyguuu: iksewmsaugayqaqq: yamyagayiooyeekg: return $cuakwceieagskoaa; } }
