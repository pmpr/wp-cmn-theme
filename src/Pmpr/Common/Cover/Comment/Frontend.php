<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6445347dbc1d4             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Frontend extends Common { public function wigskegsqequoeks() { $this->waqewsckuayqguos(self::ukyommesgeqqcayq . "\154\x69\163\164\137\x72\x65\x6e\144\145\x72", [$this, "\x72\x65\x6e\x64\x65\x72"])->waqewsckuayqguos(self::ukyommesgeqqcayq . "\x66\157\162\x6d\137\141\156\x64\x5f\154\151\163\x74\137\x72\x65\156\x64\x65\162", [$this, "\x69\163\x69\x79\141\x73\x79\165\141\x6b\165\x6b\163\151\x61\x6d"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(MetaBox::ayumqueugowuywqs)) { goto wsemeeocquawyauo; } $this->cecaguuoecmccuse("\x67\x65\x74\x5f\x61\166\141\164\141\x72", [$this, "\141\x79\x73\x65\151\x75\155\x6f\x61\x6f\165\141\143\161\x63\165"], 10, 3)->cecaguuoecmccuse("\x67\x65\164\137\143\157\x6d\155\145\156\x74\137\141\165\x74\x68\x6f\x72", [$this, "\155\145\165\157\145\x75\153\151\167\x6b\x65\x75\x6d\x67\147\x6b"], 10, 2); wsemeeocquawyauo: } public function isiyasyuakuksiam($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = (array) ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::kqigmeickowqiiyy => ManipulatePost::mwikyscisascoeea()]); $gcqseksiskwueksc = ManipulateArray::get($ywmkwiwkosakssii, self::kqigmeickowqiiyy); if (!$this->uiqcwsowwswommka($gcqseksiskwueksc)) { goto ocgkwqqmgasuoies; } echo $this->iuygowkemiiwqmiw("\x66\157\x72\x6d\x5f\x61\156\x64\x5f\x6c\151\x73\164", [self::mswoacegomcucaik => ManipulatePost::mwikyscisascoeea($gcqseksiskwueksc), self::qescuiwgsyuikume => __("\x43\157\x6d\155\145\156\x74\40\146\x6f\162\x6d\40\141\156\x64\40\154\x69\x73\x74", PR__CMN__COVER), "\x63\x6f\x6d\x6d\x65\x6e\x74\137\x6c\x69\x73\164" => $this->wkwiceqaycqsygic('', $ywmkwiwkosakssii), "\143\x6f\155\155\145\x6e\164\137\x66\x6f\162\155" => Form::symcgieuakksimmu()->sqkcuwewwecosise([self::qaacaqioeyiuakeu => false], $gcqseksiskwueksc)]); ocgkwqqmgasuoies: } public function render($ywmkwiwkosakssii = []) { echo $this->wkwiceqaycqsygic('', $ywmkwiwkosakssii); } public function uuyycaeqcawcaiqe($aqqmosqmsuueyaes) : bool { $cuakwceieagskoaa = false; $uagwmwoawiwkycao = $this->weysguygiseoukqw(MetaBox::osoyyuwymacswyum, []); $aqqmosqmsuueyaes = ManipulateComment::get($aqqmosqmsuueyaes); if (!($aqqmosqmsuueyaes && $uagwmwoawiwkycao && $aqqmosqmsuueyaes->comment_parent)) { goto wmaeicoyyciuaiuy; } $mkucggyaiaukqoce = ManipulateComment::issssuygyewuaswa($aqqmosqmsuueyaes); $cuakwceieagskoaa = $mkucggyaiaukqoce && ManipulateUser::esmswawesuyogmik($uagwmwoawiwkycao, $mkucggyaiaukqoce); wmaeicoyyciuaiuy: return $cuakwceieagskoaa; } public function meuoeukiwkeumggk($qscaoekmoooeuyqg, $aqqmosqmsuueyaes) { if (!$this->uuyycaeqcawcaiqe($aqqmosqmsuueyaes)) { goto ooysmgyeqoiesgqm; } $qscaoekmoooeuyqg = get_bloginfo(self::NAME); ooysmgyeqoiesgqm: return $qscaoekmoooeuyqg; } public function wkwiceqaycqsygic($nsmgceoqaqogqmuw = '', $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = (array) ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::mswoacegomcucaik => null, self::kkcqmwgccaygggcu => 1, self::qescuiwgsyuikume => __("\x43\157\x6d\x6d\x65\x6e\164", PR__CMN__COVER), self::kqigmeickowqiiyy => 0, "\x69\163\x5f\x61\x6a\141\x78" => false, "\151\163\137\x72\x65\x6e\144\145\x72" => true, "\144\x61\x74\145\x5f\x66\157\162\155\x61\x74" => ManipulateSetting::uyomwmskouyyqyyq(), "\x65\155\x70\164\171\137\x6d\x65\x73\163\141\147\x65" => __("\124\x68\x65\x72\145\x20\x61\x72\145\40\156\x6f\x20\x63\x6f\155\155\x65\156\164\x73\40\171\145\x74\56", PR__CMN__COVER), "\x67\145\164\x5f\x63\x6f\x6d\155\145\156\164\x73\x5f\x61\x72\x67\x73" => [], "\143\157\x6d\x6d\145\x6e\x74\137\167\x61\151\164\x69\x6e\x67\x5f\x74\x65\170\164" => __("\131\x6f\165\162\40\143\157\x6d\155\145\x6e\164\40\151\163\40\141\x77\x61\151\164\x69\x6e\147\x20\155\157\x64\145\x72\x61\x74\x69\x6f\156\56", PR__CMN__COVER)]); $ywmkwiwkosakssii = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::ukyommesgeqqcayq . "\x72\145\x6e\144\x65\x72\x5f\141\x72\x67\163"), $ywmkwiwkosakssii, $nsmgceoqaqogqmuw); $post = ManipulateArray::get($ywmkwiwkosakssii, self::mswoacegomcucaik); $qawuqcsueakkgiio = ManipulateArray::get($ywmkwiwkosakssii, self::kkcqmwgccaygggcu); if ($post) { goto kwoyiysciqumswcy; } $gcqseksiskwueksc = ManipulateArray::get($ywmkwiwkosakssii, self::kqigmeickowqiiyy); goto aaogeemgkogagkai; kwoyiysciqumswcy: $gcqseksiskwueksc = ManipulatePost::mwikyscisascoeea($post, true); aaogeemgkogagkai: $kcagcoeuiasswusq = ''; $mcgoysmkqsqooceq = $ywmkwiwkosakssii["\151\163\137\x61\x6a\141\x78"]; $cgkkqqgoqqmmwysq = $ywmkwiwkosakssii["\x69\x73\x5f\x72\x65\x6e\144\x65\162"]; $qookweymeqawmcwo = ["\145\155\x70\164\x79\x5f\155\x65\163\163\x61\147\145" => $ywmkwiwkosakssii["\145\x6d\160\x74\171\137\155\x65\x73\x73\x61\x67\x65"], "\x68\x61\163\137\x63\157\155\155\145\x6e\164" => false, "\x69\x73\x5f\x61\x6a\x61\x78" => $ywmkwiwkosakssii["\151\163\137\x61\152\x61\170"], self::qescuiwgsyuikume => $ywmkwiwkosakssii[self::qescuiwgsyuikume]]; if (!$gcqseksiskwueksc) { goto oiiqqgyqmggyiums; } if (!(($cgkkqqgoqqmmwysq || $mcgoysmkqsqooceq) && $this->uiqcwsowwswommka($gcqseksiskwueksc))) { goto isqwwmikecauwyuc; } $weeomyummeocueyk = array_merge($ywmkwiwkosakssii["\147\x65\164\137\x63\157\155\x6d\145\x6e\x74\163\x5f\141\162\x67\163"], [self::kkcqmwgccaygggcu => $qawuqcsueakkgiio, self::eymwucuaaiiciymc => ManipulateComment::omkaowmygoqwsywq(), self::ciywsqoeiymemsys => self::eucymkqyykekuymy, self::kqigmeickowqiiyy => $gcqseksiskwueksc]); $kcagcoeuiasswusq = ManipulateComment::ciugwooasaqcywas(ConvertArray::comkeiiwgwaqmcwe($weeomyummeocueyk)); $kcagcoeuiasswusq = wp_list_comments([self::qaacaqioeyiuakeu => false, self::kkcqmwgccaygggcu => $qawuqcsueakkgiio, self::wwgusigoaksqmwsm => [$this, "\x79\x6d\151\143\x73\x79\161\x65\143\x73\x69\171\161\155\171\x63"]], $kcagcoeuiasswusq); if ($mcgoysmkqsqooceq) { goto qqmmycmsoqegcqqw; } $qookweymeqawmcwo["\160\141\147\x69\x6e\x61\164\151\x6f\x6e"] = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x67\145\x74\137\x63\157\x6d\x6d\145\x6e\x74\x5f\160\141\147\x69\156\x61\164\x69\x6f\156"), '', [self::qaacaqioeyiuakeu => false, self::mswoacegomcucaik => $gcqseksiskwueksc]); qqmmycmsoqegcqqw: isqwwmikecauwyuc: $qookweymeqawmcwo[self::qiyqwyiiwykeccmo] = DecoratorPost::qmegicmsiwuuwysa($gcqseksiskwueksc); $qookweymeqawmcwo["\x68\141\x73\x5f\x63\157\x6d\155\x65\x6e\x74"] = ManipulatePost::gamoemyysmgugccu($gcqseksiskwueksc); oiiqqgyqmggyiums: if (!$mcgoysmkqsqooceq || $cgkkqqgoqqmmwysq) { goto ukogwqiuuuakkawy; } if (!is_string($kcagcoeuiasswusq)) { goto magymcqykamwqigw; } $nsmgceoqaqogqmuw = $kcagcoeuiasswusq; magymcqykamwqigw: goto gicmaqmuscawegie; ukogwqiuuuakkawy: $qookweymeqawmcwo[self::goumieeyyqigueiw] = $kcagcoeuiasswusq; $qookweymeqawmcwo["\x73\x70\151\x6e\x6e\145\162"] = ManipulateHTML::kqmkicmuscsgqeoi(["\x74\162\141\x6e\163\x70\x61\x72\145\x6e\164" => true, self::waguuiqqgsysuukq => "\62\x78"]); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x6c\151\x73\x74", $qookweymeqawmcwo); gicmaqmuscawegie: return $nsmgceoqaqogqmuw; } public function ayseiumoaouacqcu($mowgokyeuymuwiew, $aqqmosqmsuueyaes, $oiegiwogmwmawkeo) { if (!$this->uuyycaeqcawcaiqe($aqqmosqmsuueyaes)) { goto gygqgauaceiuawkq; } $uouuguwawimuemic = $this->weysguygiseoukqw(MetaBox::aammuqouwoakgwgq . self::mswocgcucqoaesaa, 0); if (!$uouuguwawimuemic) { goto ayamomygygmgwgkg; } $oiegiwogmwmawkeo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\143\157\155\155\145\156\164\x5f\x61\x76\x61\x74\x61\162\x5f\x73\151\172\x65"), $oiegiwogmwmawkeo, false); $wwgucssaecqekuek = ["\x63\x6c\x61\163\163" => $mowgokyeuymuwiew ? DOMCrawler::waecsyqmwascmqoa($mowgokyeuymuwiew, "\151\x6d\147", "\143\154\x61\x73\163") : '', "\141\x6c\x74" => __("\x41\x75\x74\x68\x6f\162\x20\114\157\147\x6f", PR__CMN__COVER)]; $uouuguwawimuemic = ManipulateAttachment::qaeeusqkgwagwaqc($uouuguwawimuemic, $oiegiwogmwmawkeo, $wwgucssaecqekuek); if (!$uouuguwawimuemic) { goto oymyqcoekqyuiguq; } $mowgokyeuymuwiew = $uouuguwawimuemic; oymyqcoekqyuiguq: ayamomygygmgwgkg: gygqgauaceiuawkq: return $mowgokyeuymuwiew; } public function ymicsyqecsiyqmyc($aqqmosqmsuueyaes, $ywmkwiwkosakssii = [], $gquaqgsmiuqsaoum = 0) { $GLOBALS[self::COMMENT] = $aqqmosqmsuueyaes; $oiegiwogmwmawkeo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::ukyommesgeqqcayq . "\141\166\141\164\141\162\x5f\163\x69\172\x65"), "\x73\155\141\154\x6c", false); echo $this->iuygowkemiiwqmiw("\x69\164\145\155", ["\144\x65\160\164\x68" => $gquaqgsmiuqsaoum, self::gouqcwikiiygyasc => ManipulateComment::mwikyscisascoeea($aqqmosqmsuueyaes), self::TEXT => ManipulateComment::souwykwwmyygqyqi($aqqmosqmsuueyaes), self::mswoacegomcucaik => ManipulateArray::get($ywmkwiwkosakssii, self::mswoacegomcucaik), self::imywcsggckkcywgk => ManipulateArray::get($ywmkwiwkosakssii, self::kkcqmwgccaygggcu, 1), self::okeuagwgwkmiokac => $ywmkwiwkosakssii, "\x74\x69\155\145\137\155\x61\163\x6b" => __("\45\61\44\x73\40\141\164\x20\x25\x32\44\x73", PR__CMN__COVER), "\155\141\170\137\144\x65\x70\164\150" => ManipulateArray::get($ywmkwiwkosakssii, "\x6d\141\x78\x5f\x64\145\x70\164\x68"), "\x72\145\x70\154\171\137\x69\143\157\156" => IconInterface::wgcuaiqkaoqksgqo, "\141\x76\141\x74\x61\x72\x5f\x73\151\x7a\x65" => $oiegiwogmwmawkeo, self::COMMENT => $aqqmosqmsuueyaes]); } }
