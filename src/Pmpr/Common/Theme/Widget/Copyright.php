<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d45f2055871             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Theme\Widget; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Copyright extends Common { const ikoeuckcmywgyggq = ["\143\157\160\171\x72\x69\147\150\x74\x5f\163\171\155\x62\x6f\154", "\163\151\x74\145\x5f\x6e\141\x6d\x65", "\x73\x74\141\162\x74\x5f\x64\x61\x74\x65", "\145\x6e\x64\x5f\x64\x61\x74\x65"]; public function __construct() { parent::__construct(__("\x43\157\160\x79\x72\x69\x67\x68\x74", PR__CMN__THEME), __("\x44\x69\163\160\x6c\x61\x79\40\x74\x68\145\x20\x63\x6f\x70\171\162\x69\147\150\x74\x2e", PR__CMN__THEME)); } public function ugmceccgwaaaigiy() : array { return [self::TEXT => ["\164\x79\x70\145" => "\x74\x65\170\x74\x61\162\145\141", "\156\x61\155\x65" => __("\x43\157\160\171\x72\x69\147\x68\x74\40\164\145\170\x74", PR__CMN__THEME), "\x72\x6f\x77\163" => 3, "\x64\x65\163\143" => sprintf(__("\x59\157\x75\x20\x63\x61\156\40\165\163\x65\40\45\163\x20\x73\150\x6f\162\164\x20\153\145\171\163", PR__CMN__THEME), ManipulateHTML::uuccukgasskgimsq("\143\x6f\x64\145", [], implode("\74\x2f\143\x6f\144\145\x3e\40\x7c\40\74\143\x6f\x64\x65\76", self::ikoeuckcmywgyggq)))], self::sqsuiimgeguwgmcg => ["\x74\x79\160\x65" => "\x64\141\164\x65", "\x6e\141\x6d\145" => __("\123\164\x61\162\x74\40\x64\x61\164\145", PR__CMN__THEME)]]; } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { $qookweymeqawmcwo = []; $cmwygeyygwqaemaq = ManipulateArray::get($owgumcsyqsamiemg, self::TEXT, ''); if (!$cmwygeyygwqaemaq) { goto sukskmcwsoysiuqu; } $acuayeeoiwokyomo = ''; $mcmcymukmqioukkk = ManipulateArray::get($owgumcsyqsamiemg, self::sqsuiimgeguwgmcg, ''); if (!$mcmcymukmqioukkk) { goto ygkcacsyyckescqs; } $mcmcymukmqioukkk = $this->eciukqcoqmyacwow($mcmcymukmqioukkk, "\x59"); $acuayeeoiwokyomo = $this->eciukqcoqmyacwow(date("\131\55\155\55\144"), "\x59"); ygkcacsyyckescqs: $kmooseagagygqskw = ManipulateHTML::gmqyuaqwgiayskei("\46\143\157\160\171\73", ["\x63\x6c\141\163\x73" => "\x63\x6f\x70\x79\x72\151\147\150\x74\55\163\x79\155\x62\157\x6c"]); $ymqmyyeuycgmigyo = ManipulateHTML::gmqyuaqwgiayskei(get_bloginfo("\x6e\141\x6d\145\x73"), ["\143\x6c\141\x73\163" => "\142\154\157\x67\55\156\141\x6d\x65"]); if (!$mcmcymukmqioukkk) { goto cuoqqgaygogsmmic; } $mcmcymukmqioukkk = ManipulateHTML::gmqyuaqwgiayskei($mcmcymukmqioukkk, ["\x63\x6c\x61\163\x73" => "\x66\162\x6f\x6d"]); cuoqqgaygogsmmic: if (!$acuayeeoiwokyomo) { goto cgewcsueoyaeikgm; } $acuayeeoiwokyomo = ManipulateHTML::gmqyuaqwgiayskei($acuayeeoiwokyomo, ["\x63\x6c\141\x73\163" => "\164\x6f"]); cgewcsueoyaeikgm: $qookweymeqawmcwo = [self::TEXT => str_replace(self::ikoeuckcmywgyggq, [$kmooseagagygqskw, $ymqmyyeuycgmigyo, $mcmcymukmqioukkk, $acuayeeoiwokyomo], $cmwygeyygwqaemaq), "\143\154\x65\x61\x72\137\164\x65\x78\x74" => $cmwygeyygwqaemaq, "\163\x79\155\x62\x6f\154" => $kmooseagagygqskw, "\x66\162\x6f\155" => $mcmcymukmqioukkk, "\164\x6f" => $acuayeeoiwokyomo]; sukskmcwsoysiuqu: return $qookweymeqawmcwo; } }
