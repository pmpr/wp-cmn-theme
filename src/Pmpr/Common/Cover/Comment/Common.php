<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668f1d166ebcf             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use WP_Post; use WP_Term; abstract class Common extends Container { const ukyommesgeqqcayq = "\x63\x6f\155\x6d\x65\156\164\137"; const wcigqgscaeeqiigq = "\x75\x73\145\x72\137\151\x64"; const cqmeioumqiogmuog = "\143\157\x6d\155\x65\156\x74\x5f\141\x6c\x65\162\164\163"; public function bwuyeikikkcmqokm() : bool { return isset($_GET["\x72\x65\160\154\171\x74\157\x63\x6f\x6d"]); } public function kuqogciwkswmckgw() : bool { return (bool) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\143\x6f\155\x6d\x65\156\x74\137\x61\x6a\141\170\151\x66\x79"), true); } public function uiqcwsowwswommka() { global $withcomments, $post; $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); $moqewomugocaueis = $mumyimcwkaemyyue->mwyqswsaeeewsosm(); $sqeykgyoooqysmca = self::uouymeyqasaeckso; $ccamwkygaogkooek = false; $mqyaskyaekmkegmg = null; if ($mksyucucyswaukig instanceof WP_Post) { goto mkgmaguyswskyioa; } if ($mksyucucyswaukig instanceof WP_Term) { goto skwusmoyomgqkimm; } goto cmmusgkieoqyymgs; mkgmaguyswskyioa: $post = $mksyucucyswaukig; $ccamwkygaogkooek = true; $mqyaskyaekmkegmg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($mksyucucyswaukig); goto cmmusgkieoqyymgs; skwusmoyomgqkimm: $post = Mediator::symcgieuakksimmu()->ammoiysyaassswky(); $sqeykgyoooqysmca = self::gmmygyiecgmggaam; $mqyaskyaekmkegmg = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($mksyucucyswaukig); cmmusgkieoqyymgs: $cuakwceieagskoaa = false; if (!($mksyucucyswaukig && $mqyaskyaekmkegmg)) { goto casgoamcqkekgeeo; } if (!$this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\141\x6c\154\157\167\x5f\162\145\x6e\x64\145\162", true, $mksyucucyswaukig, $sqeykgyoooqysmca, $mqyaskyaekmkegmg)) { goto qsokkkyoackoycie; } if ($ccamwkygaogkooek) { goto kakkuyeccaacewyo; } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->esqicqsuigywkaqw()) { goto gicuuwuuuwumyooa; } $keywesgaqieiugqe = (array) Setting::eiwcuqigayigimak(SettingSection::ekegwsoioemeckwo, []); $keywesgaqieiugqe = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\x72\x65\156\144\145\162\x5f\x74\141\x78\157\x6e\157\155\151\145\163", $keywesgaqieiugqe); $cuakwceieagskoaa = in_array($mqyaskyaekmkegmg, $keywesgaqieiugqe, true); if (!$cuakwceieagskoaa) { goto usyckeewsgwaysam; } $withcomments = true; usyckeewsgwaysam: gicuuwuuuwumyooa: goto cysgqimowcqoqqsc; kakkuyeccaacewyo: $csqgaqmimuoawiym = (array) Setting::eiwcuqigayigimak(SettingSection::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\162\145\156\144\x65\x72\137\x70\157\x73\164\x5f\x74\x79\160\x65\x73", $csqgaqmimuoawiym); $cuakwceieagskoaa = comments_open($mksyucucyswaukig) && in_array($mqyaskyaekmkegmg, $csqgaqmimuoawiym, true) && $this->uwkmaywceaaaigwo()->gscioiumssogceuc()->akwkkemsqyaykueg($mqyaskyaekmkegmg, self::goumieeyyqigueiw); cysgqimowcqoqqsc: if (!$cuakwceieagskoaa) { goto ismeikacqqyqcmqe; } $cuakwceieagskoaa = [self::mswoacegomcucaik => $post, self::ckmqoekmugkggeym => $mksyucucyswaukig, self::eggygikowgywcayq => $moqewomugocaueis, self::wwcycgyaiaksckuk => $sqeykgyoooqysmca]; ismeikacqqyqcmqe: qsokkkyoackoycie: casgoamcqkekgeeo: return $cuakwceieagskoaa; } }
