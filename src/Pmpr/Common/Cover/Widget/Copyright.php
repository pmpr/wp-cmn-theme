<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             626988f5e0544             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Widget; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Copyright extends Common { const eawaqqcqoiswqcme = ["\143\x6f\160\171\162\x69\x67\x68\x74\137\x73\171\155\142\x6f\x6c", "\x73\151\x74\145\x5f\x6e\141\x6d\x65", "\163\x74\141\x72\164\137\x64\141\x74\145", "\145\x6e\144\x5f\x64\141\164\x65"]; public function __construct() { parent::__construct(__("\x43\157\160\171\x72\x69\x67\x68\164", PR__CMN__COVER), __("\104\x69\x73\x70\154\141\x79\x20\x74\150\x65\x20\x63\157\x70\171\x72\x69\147\x68\x74\56", PR__CMN__COVER)); } public function ugmceccgwaaaigiy() : array { return [self::TEXT => ["\x74\171\x70\x65" => "\164\x65\170\x74\x61\162\x65\141", "\156\141\155\x65" => __("\103\157\160\171\162\x69\147\150\164\x20\x74\x65\170\164", PR__CMN__COVER), "\x72\x6f\167\x73" => 3, "\x64\145\163\143" => sprintf(__("\x59\x6f\165\40\143\x61\x6e\x20\x75\163\145\x20\45\x73\x20\160\x6c\141\x63\x65\x68\x6f\x6c\x64\145\162\x73", PR__CMN__COVER), ManipulateHTML::uuccukgasskgimsq("\x63\157\144\145", [], implode("\74\x2f\143\x6f\x64\x65\76\x20\174\40\x3c\143\157\144\145\x3e", self::eawaqqcqoiswqcme)))], self::sqsuiimgeguwgmcg => ["\164\171\x70\x65" => "\x64\x61\164\x65", "\x6e\141\155\x65" => __("\x53\x74\x61\x72\164\x20\x64\x61\164\145", PR__CMN__COVER)]]; } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { $qookweymeqawmcwo = []; $cmwygeyygwqaemaq = ManipulateArray::get($owgumcsyqsamiemg, self::TEXT, ''); if (!$cmwygeyygwqaemaq) { goto ieumumsgyguceusy; } $acuayeeoiwokyomo = ''; $mcmcymukmqioukkk = ManipulateArray::get($owgumcsyqsamiemg, self::sqsuiimgeguwgmcg, ''); if (!$mcmcymukmqioukkk) { goto qwcegcuowwgiccos; } $mcmcymukmqioukkk = $this->eciukqcoqmyacwow($mcmcymukmqioukkk, "\131"); $acuayeeoiwokyomo = $this->eciukqcoqmyacwow(date("\131\55\155\x2d\x64"), "\131"); qwcegcuowwgiccos: $kmooseagagygqskw = ManipulateHTML::gmqyuaqwgiayskei("\46\143\157\x70\171\x3b", ["\x63\x6c\x61\163\x73" => "\x63\157\160\171\x72\x69\x67\150\164\55\163\171\x6d\x62\x6f\154"]); $ymqmyyeuycgmigyo = ManipulateHTML::gmqyuaqwgiayskei(get_bloginfo("\156\141\155\145\x73"), ["\x63\x6c\x61\x73\x73" => "\142\x6c\157\x67\55\156\x61\155\145"]); if (!$mcmcymukmqioukkk) { goto qcessicwuikwqsis; } $mcmcymukmqioukkk = ManipulateHTML::gmqyuaqwgiayskei($mcmcymukmqioukkk, ["\143\154\x61\163\x73" => "\x66\x72\157\x6d"]); qcessicwuikwqsis: if (!$acuayeeoiwokyomo) { goto yssscwioiyygssec; } $acuayeeoiwokyomo = ManipulateHTML::gmqyuaqwgiayskei($acuayeeoiwokyomo, ["\143\154\x61\x73\163" => "\x74\157"]); yssscwioiyygssec: $qookweymeqawmcwo = [self::TEXT => str_replace(self::eawaqqcqoiswqcme, [$kmooseagagygqskw, $ymqmyyeuycgmigyo, $mcmcymukmqioukkk, $acuayeeoiwokyomo], $cmwygeyygwqaemaq), "\x63\154\x65\x61\x72\137\x74\145\170\164" => $cmwygeyygwqaemaq, "\163\x79\x6d\x62\x6f\154" => $kmooseagagygqskw, "\x66\x72\x6f\x6d" => $mcmcymukmqioukkk, "\x74\157" => $acuayeeoiwokyomo]; ieumumsgyguceusy: return $qookweymeqawmcwo; } }
