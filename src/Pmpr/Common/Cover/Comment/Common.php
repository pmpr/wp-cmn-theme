<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce633b36061             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Term; abstract class Common extends Container { const ukyommesgeqqcayq = "\x63\x6f\x6d\x6d\145\x6e\164\137"; const wcigqgscaeeqiigq = "\x75\x73\x65\x72\x5f\x69\144"; const cqmeioumqiogmuog = "\x63\x6f\155\x6d\145\x6e\164\137\141\x6c\145\162\164\x73"; public function bwuyeikikkcmqokm() : bool { return isset($_GET["\162\145\160\x6c\171\164\x6f\143\x6f\x6d"]); } public function kuqogciwkswmckgw() : bool { return (bool) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\143\x6f\155\x6d\145\x6e\164\137\x61\152\141\170\x69\146\171"), true); } public function uiqcwsowwswommka() { global $withcomments, $post; $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); $moqewomugocaueis = $mumyimcwkaemyyue->mwyqswsaeeewsosm(); $sqeykgyoooqysmca = Constants::uouymeyqasaeckso; $ccamwkygaogkooek = false; $mqyaskyaekmkegmg = null; if ($mksyucucyswaukig instanceof WP_Post) { goto wsqeiwkgoiekwasy; } if ($mksyucucyswaukig instanceof WP_Term) { goto swesqeqmagkicuws; } goto smmagoyuqoigoesc; wsqeiwkgoiekwasy: $post = $mksyucucyswaukig; $ccamwkygaogkooek = true; $mqyaskyaekmkegmg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($mksyucucyswaukig); goto smmagoyuqoigoesc; swesqeqmagkicuws: $post = Mediator::symcgieuakksimmu()->ammoiysyaassswky(); $sqeykgyoooqysmca = Constants::gmmygyiecgmggaam; $mqyaskyaekmkegmg = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($mksyucucyswaukig); smmagoyuqoigoesc: $cuakwceieagskoaa = false; if (!($mksyucucyswaukig && $mqyaskyaekmkegmg)) { goto iwsaaiggkciigsmc; } if (!$this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\x61\154\x6c\157\167\x5f\162\145\x6e\x64\x65\x72", true, $mksyucucyswaukig, $sqeykgyoooqysmca, $mqyaskyaekmkegmg)) { goto eucakkcoiiwkwsme; } if ($ccamwkygaogkooek) { goto kwayumouacgkgyas; } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->esqicqsuigywkaqw()) { goto kgqgcggccmiwayua; } $keywesgaqieiugqe = (array) Setting::eiwcuqigayigimak(SettingSection::ekegwsoioemeckwo, []); $keywesgaqieiugqe = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\x72\145\x6e\144\x65\x72\137\164\141\x78\x6f\156\157\x6d\151\145\163", $keywesgaqieiugqe); $cuakwceieagskoaa = in_array($mqyaskyaekmkegmg, $keywesgaqieiugqe, true); if (!$cuakwceieagskoaa) { goto cwyaysecsakaqgew; } $withcomments = true; cwyaysecsakaqgew: kgqgcggccmiwayua: goto rgaagksgsewuwgmo; kwayumouacgkgyas: $csqgaqmimuoawiym = (array) Setting::eiwcuqigayigimak(SettingSection::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\162\x65\x6e\x64\145\162\x5f\160\157\163\x74\137\164\x79\x70\145\x73", $csqgaqmimuoawiym); $cuakwceieagskoaa = comments_open($mksyucucyswaukig) && in_array($mqyaskyaekmkegmg, $csqgaqmimuoawiym, true) && $this->uwkmaywceaaaigwo()->gscioiumssogceuc()->akwkkemsqyaykueg($mqyaskyaekmkegmg, Constants::goumieeyyqigueiw); rgaagksgsewuwgmo: if (!$cuakwceieagskoaa) { goto mcmcocyuugueaeww; } $cuakwceieagskoaa = [Constants::mswoacegomcucaik => $post, Constants::ckmqoekmugkggeym => $mksyucucyswaukig, Constants::eggygikowgywcayq => $moqewomugocaueis, Constants::wwcycgyaiaksckuk => $sqeykgyoooqysmca]; mcmcocyuugueaeww: eucakkcoiiwkwsme: iwsaaiggkciigsmc: return $cuakwceieagskoaa; } }
