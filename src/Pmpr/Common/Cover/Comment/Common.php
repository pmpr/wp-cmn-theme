<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             673bbd7abdc00             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Cover\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Term; abstract class Common extends Container { const ukyommesgeqqcayq = "\x63\x6f\x6d\155\145\x6e\x74\x5f"; const wcigqgscaeeqiigq = "\165\x73\145\162\137\x69\144"; const cqmeioumqiogmuog = "\x63\x6f\x6d\x6d\x65\156\164\137\x61\154\145\x72\x74\163"; public function bwuyeikikkcmqokm() : bool { return isset($_GET["\162\x65\x70\154\171\164\157\143\157\155"]); } public function kuqogciwkswmckgw() : bool { return (bool) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\157\x6d\155\145\x6e\164\x5f\x61\x6a\141\x78\x69\x66\171"), true); } public function uiqcwsowwswommka() { global $withcomments, $post; $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); $moqewomugocaueis = $mumyimcwkaemyyue->mwyqswsaeeewsosm(); $sqeykgyoooqysmca = Constants::uouymeyqasaeckso; $ccamwkygaogkooek = false; $mqyaskyaekmkegmg = null; if ($mksyucucyswaukig instanceof WP_Post) { $post = $mksyucucyswaukig; $ccamwkygaogkooek = true; $mqyaskyaekmkegmg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($mksyucucyswaukig); } elseif ($mksyucucyswaukig instanceof WP_Term) { $post = Mediator::symcgieuakksimmu()->ammoiysyaassswky(); $sqeykgyoooqysmca = Constants::gmmygyiecgmggaam; $mqyaskyaekmkegmg = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($mksyucucyswaukig); } $cuakwceieagskoaa = false; if ($mksyucucyswaukig && $mqyaskyaekmkegmg) { if ($this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\141\154\x6c\157\x77\137\162\145\156\144\x65\x72", true, $mksyucucyswaukig, $sqeykgyoooqysmca, $mqyaskyaekmkegmg)) { if ($ccamwkygaogkooek) { $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\x72\145\x6e\x64\145\x72\137\160\157\x73\x74\x5f\x74\171\160\145\x73", $csqgaqmimuoawiym); $cuakwceieagskoaa = comments_open($mksyucucyswaukig) && in_array($mqyaskyaekmkegmg, $csqgaqmimuoawiym, true) && $this->uwkmaywceaaaigwo()->gscioiumssogceuc()->akwkkemsqyaykueg($mqyaskyaekmkegmg, Constants::goumieeyyqigueiw); } else { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->esqicqsuigywkaqw()) { $keywesgaqieiugqe = (array) $this->weysguygiseoukqw(Setting::ekegwsoioemeckwo, []); $keywesgaqieiugqe = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\x72\145\156\144\145\162\x5f\x74\x61\170\157\x6e\157\155\x69\145\163", $keywesgaqieiugqe); $cuakwceieagskoaa = in_array($mqyaskyaekmkegmg, $keywesgaqieiugqe, true); if ($cuakwceieagskoaa) { $withcomments = true; } } } if ($cuakwceieagskoaa) { $cuakwceieagskoaa = [Constants::mswoacegomcucaik => $post, Constants::ckmqoekmugkggeym => $mksyucucyswaukig, Constants::eggygikowgywcayq => $moqewomugocaueis, Constants::wwcycgyaiaksckuk => $sqeykgyoooqysmca]; } } } return $cuakwceieagskoaa; } }
