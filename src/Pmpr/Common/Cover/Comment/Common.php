<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             660dbf0b9b05a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use WP_Post; use WP_Term; abstract class Common extends Container { const ukyommesgeqqcayq = "\x63\x6f\155\155\x65\156\164\x5f"; const wcigqgscaeeqiigq = "\x75\x73\145\x72\137\151\x64"; const cqmeioumqiogmuog = "\x63\157\155\x6d\x65\x6e\x74\x5f\x61\154\x65\x72\x74\163"; public function bwuyeikikkcmqokm() : bool { return isset($_GET["\162\x65\x70\x6c\171\164\157\143\x6f\155"]); } public function kuqogciwkswmckgw() : bool { return (bool) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\143\x6f\155\x6d\145\156\164\x5f\141\x6a\x61\x78\x69\x66\171"), true); } public function uiqcwsowwswommka() { global $withcomments, $post; $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); $moqewomugocaueis = $mumyimcwkaemyyue->mwyqswsaeeewsosm(); $sqeykgyoooqysmca = self::uouymeyqasaeckso; $ccamwkygaogkooek = false; $mqyaskyaekmkegmg = null; if ($mksyucucyswaukig instanceof WP_Post) { goto iquecygaakmiomeg; } if ($mksyucucyswaukig instanceof WP_Term) { goto eacysqsegwcqawsa; } goto kceeuicccqscwgsu; iquecygaakmiomeg: $post = $mksyucucyswaukig; $ccamwkygaogkooek = true; $mqyaskyaekmkegmg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($mksyucucyswaukig); goto kceeuicccqscwgsu; eacysqsegwcqawsa: $post = Mediator::symcgieuakksimmu()->ammoiysyaassswky(); $sqeykgyoooqysmca = self::gmmygyiecgmggaam; $mqyaskyaekmkegmg = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($mksyucucyswaukig); kceeuicccqscwgsu: $cuakwceieagskoaa = false; if (!($mksyucucyswaukig && $mqyaskyaekmkegmg)) { goto yksamaucqkqsawkk; } if (!$this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\x61\x6c\x6c\157\x77\137\x72\x65\x6e\x64\x65\162", true, $mksyucucyswaukig, $sqeykgyoooqysmca, $mqyaskyaekmkegmg)) { goto ekoegocuqoycoeyq; } if ($ccamwkygaogkooek) { goto wkaoyycsoeoyqcae; } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->esqicqsuigywkaqw()) { goto yeemsgmumygmumqw; } $keywesgaqieiugqe = (array) Setting::eiwcuqigayigimak(SettingSection::ekegwsoioemeckwo, []); $keywesgaqieiugqe = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\162\x65\x6e\144\x65\162\137\x74\141\170\x6f\x6e\157\155\x69\145\163", $keywesgaqieiugqe); $cuakwceieagskoaa = in_array($mqyaskyaekmkegmg, $keywesgaqieiugqe, true); if (!$cuakwceieagskoaa) { goto yimeskeioamqmuwg; } $withcomments = true; yimeskeioamqmuwg: yeemsgmumygmumqw: goto cwugokqsmiomgmqg; wkaoyycsoeoyqcae: $csqgaqmimuoawiym = (array) Setting::eiwcuqigayigimak(SettingSection::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\x72\x65\x6e\144\x65\162\137\x70\157\163\164\137\164\171\x70\x65\163", $csqgaqmimuoawiym); $cuakwceieagskoaa = comments_open($mksyucucyswaukig) && in_array($mqyaskyaekmkegmg, $csqgaqmimuoawiym, true) && $this->uwkmaywceaaaigwo()->gscioiumssogceuc()->akwkkemsqyaykueg($mqyaskyaekmkegmg, self::goumieeyyqigueiw); cwugokqsmiomgmqg: if (!$cuakwceieagskoaa) { goto uuuceqkseqkqawko; } $cuakwceieagskoaa = [self::mswoacegomcucaik => $post, self::ckmqoekmugkggeym => $mksyucucyswaukig, self::eggygikowgywcayq => $moqewomugocaueis, self::wwcycgyaiaksckuk => $sqeykgyoooqysmca]; uuuceqkseqkqawko: ekoegocuqoycoeyq: yksamaucqkqsawkk: return $cuakwceieagskoaa; } }
