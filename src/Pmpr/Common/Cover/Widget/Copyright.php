<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             634d8236d2b29             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Widget; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Copyright extends Common { const eawaqqcqoiswqcme = ["\143\x6f\x70\x79\x72\151\147\150\164\x5f\163\171\x6d\142\x6f\154", "\x73\x69\164\x65\137\156\141\155\x65", "\x73\x74\x61\x72\164\137\144\141\164\x65", "\x65\156\x64\x5f\x64\141\164\145"]; public function __construct() { parent::__construct(__("\103\x6f\160\x79\162\151\x67\x68\x74", PR__CMN__COVER), __("\104\151\163\160\x6c\141\x79\x20\x74\150\145\x20\143\x6f\x70\171\x72\151\147\150\x74\x2e", PR__CMN__COVER)); } public function ugmceccgwaaaigiy() : array { return [self::TEXT => ["\164\x79\x70\x65" => "\164\145\x78\164\141\x72\145\x61", "\156\x61\x6d\145" => __("\x43\157\160\171\x72\x69\x67\150\x74\x20\164\145\x78\164", PR__CMN__COVER), "\162\x6f\x77\163" => 3, "\144\x65\x73\x63" => sprintf(__("\131\157\x75\x20\x63\141\x6e\x20\x75\x73\145\x20\45\x73\x20\x70\154\141\143\145\150\x6f\x6c\x64\145\162\163", PR__CMN__COVER), ManipulateHTML::uuccukgasskgimsq("\143\x6f\x64\145", [], implode("\x3c\x2f\x63\x6f\x64\145\76\x20\174\x20\74\x63\x6f\144\x65\x3e", self::eawaqqcqoiswqcme)))], self::sqsuiimgeguwgmcg => ["\164\x79\x70\145" => "\x64\x61\x74\145", "\156\x61\x6d\145" => __("\x53\164\141\162\x74\40\x64\141\164\x65", PR__CMN__COVER)]]; } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { $qookweymeqawmcwo = []; $cmwygeyygwqaemaq = ManipulateArray::get($owgumcsyqsamiemg, self::TEXT, ''); if (!$cmwygeyygwqaemaq) { goto oyiuemaaykgkqqam; } $acuayeeoiwokyomo = ''; $mcmcymukmqioukkk = ManipulateArray::get($owgumcsyqsamiemg, self::sqsuiimgeguwgmcg, ''); if (!$mcmcymukmqioukkk) { goto cgmgqucewwssmicq; } $mcmcymukmqioukkk = $this->eciukqcoqmyacwow($mcmcymukmqioukkk, "\131"); $acuayeeoiwokyomo = $this->eciukqcoqmyacwow(date("\131\55\155\x2d\x64"), "\131"); cgmgqucewwssmicq: $kmooseagagygqskw = ManipulateHTML::gmqyuaqwgiayskei("\46\x63\157\x70\x79\x3b", ["\143\154\141\163\163" => "\x63\x6f\160\x79\x72\151\147\x68\164\x2d\163\x79\155\x62\x6f\154"]); $ymqmyyeuycgmigyo = ManipulateHTML::gmqyuaqwgiayskei(get_bloginfo("\156\141\x6d\145\x73"), ["\x63\154\x61\x73\x73" => "\x62\154\157\147\x2d\x6e\x61\155\x65"]); if (!$mcmcymukmqioukkk) { goto mkomygccqkmkumsi; } $mcmcymukmqioukkk = ManipulateHTML::gmqyuaqwgiayskei($mcmcymukmqioukkk, ["\143\x6c\141\x73\163" => "\x66\x72\x6f\x6d"]); mkomygccqkmkumsi: if (!$acuayeeoiwokyomo) { goto ussceseaimqywuiy; } $acuayeeoiwokyomo = ManipulateHTML::gmqyuaqwgiayskei($acuayeeoiwokyomo, ["\x63\154\141\163\x73" => "\164\x6f"]); ussceseaimqywuiy: $qookweymeqawmcwo = [self::TEXT => str_replace(self::eawaqqcqoiswqcme, [$kmooseagagygqskw, $ymqmyyeuycgmigyo, $mcmcymukmqioukkk, $acuayeeoiwokyomo], $cmwygeyygwqaemaq), "\x63\154\x65\141\162\137\164\145\x78\164" => $cmwygeyygwqaemaq, "\163\171\x6d\142\157\x6c" => $kmooseagagygqskw, "\x66\162\157\155" => $mcmcymukmqioukkk, "\164\157" => $acuayeeoiwokyomo]; oyiuemaaykgkqqam: return $qookweymeqawmcwo; } }
