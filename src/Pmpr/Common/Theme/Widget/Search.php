<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c027cf2c189             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Theme\Widget; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Search extends Common { const SHOW_COUNT = "\163\150\x6f\167\137\x63\x6f\165\x6e\164"; public function __construct() { parent::__construct(__("\101\144\x76\x61\x6e\x63\145\x20\123\x65\x61\162\143\150", PR__CMN__THEME), __("\x41\144\x76\x61\x6e\143\145\x20\123\x65\141\x72\143\x68\40\146\165\156\143\x74\151\157\x6e\141\154\x69\164\x79\x2e", PR__CMN__THEME)); } public function ugmceccgwaaaigiy() : array { return [self::qescuiwgsyuikume => ["\156\141\155\x65" => __("\124\x69\164\x6c\x65", PR__CMN__THEME)], self::SHOW_COUNT => ["\164\x79\x70\145" => "\143\x68\x65\143\153\142\157\170", "\x6e\141\x6d\x65" => __("\x53\150\x6f\167\x20\122\x65\163\165\154\164\40\103\157\165\156\x74", PR__CMN__THEME)], self::POST_TYPE => ["\164\171\160\145" => "\142\163\163\145\154\x65\143\x74", "\x6e\141\x6d\145" => __("\120\x6f\163\164\x20\164\171\x70\145", PR__CMN__THEME), "\x64\x65\x73\143" => __("\x49\146\x20\x79\x6f\165\40\167\x61\156\164\40\160\162\157\143\x65\x73\x73\40\x74\141\162\147\x65\x74\x20\x70\x6f\x73\164\x20\164\171\160\x65\40\141\x75\x74\157\x6d\141\164\151\143\x61\x6c\x6c\171\54\40\154\145\x61\x76\145\40\164\150\x69\x73\x20\x66\151\145\154\x64\40\x65\155\x70\x74\171\56", PR__CMN__THEME), "\x6f\160\164\x69\x6f\156\x73" => ManipulatePost::mwoyqeeigwqoamiw([self::aisguagukaewucii => self::eoaiagsgqsmskugs])]]; } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { $eaoumsseceiowgsk = get_search_form(["\145\x63\x68\x6f" => false, self::uissasisiuymwsmu => ManipulateArray::get($owgumcsyqsamiemg, self::qescuiwgsyuikume), self::POST_TYPE => ManipulateArray::get($owgumcsyqsamiemg, self::POST_TYPE)]); $gaeqamemwmwsyukm = 0; if (!(DecoratorQuery::gouusicsisumuiei() && ManipulateArray::get($owgumcsyqsamiemg, self::SHOW_COUNT))) { goto igymseewwyiocoug; } $gaeqamemwmwsyukm = ManipulateHTML::gusouagusgyoaeya(sprintf(__("\x25\x73\x20\x52\145\163\165\154\164\163", PR__CMN__THEME), $this->msywmyaoqmaegsuy(ManipulateQuery::qooeaookuemoqecm("\160\157\x73\x74\x5f\x63\157\x75\156\164")))); igymseewwyiocoug: return array_merge($owgumcsyqsamiemg, ["\146\157\x72\155" => $eaoumsseceiowgsk, self::qiyqwyiiwykeccmo => $gaeqamemwmwsyukm]); } }
