<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             644539feeb045             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Frontend extends Common { public function wigskegsqequoeks() { $this->waqewsckuayqguos(self::ukyommesgeqqcayq . "\x6c\x69\x73\x74\137\162\x65\x6e\144\x65\162", [$this, "\162\x65\156\144\145\x72"])->waqewsckuayqguos(self::ukyommesgeqqcayq . "\146\x6f\162\x6d\137\141\156\x64\137\154\151\x73\x74\x5f\162\x65\156\x64\x65\162", [$this, "\x69\163\x69\171\x61\163\171\165\x61\x6b\165\x6b\163\151\x61\155"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(MetaBox::ayumqueugowuywqs)) { goto wwswmaewcaisauei; } $this->cecaguuoecmccuse("\147\145\164\x5f\141\x76\141\164\x61\x72", [$this, "\141\171\163\145\151\x75\155\x6f\x61\157\165\141\143\x71\x63\165"], 10, 3)->cecaguuoecmccuse("\147\x65\164\x5f\143\157\x6d\x6d\145\x6e\x74\x5f\x61\165\x74\x68\157\x72", [$this, "\155\x65\x75\x6f\x65\x75\x6b\x69\x77\153\145\x75\x6d\147\147\x6b"], 10, 2); wwswmaewcaisauei: } public function isiyasyuakuksiam($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = (array) ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::kqigmeickowqiiyy => ManipulatePost::mwikyscisascoeea()]); $gcqseksiskwueksc = ManipulateArray::get($ywmkwiwkosakssii, self::kqigmeickowqiiyy); if (!$this->uiqcwsowwswommka($gcqseksiskwueksc)) { goto wsemeeocquawyauo; } echo $this->iuygowkemiiwqmiw("\x66\157\162\x6d\x5f\x61\156\x64\x5f\154\x69\163\164", [self::mswoacegomcucaik => ManipulatePost::mwikyscisascoeea($gcqseksiskwueksc), self::qescuiwgsyuikume => __("\x43\157\x6d\155\x65\x6e\164\40\146\x6f\x72\155\40\x61\156\144\40\x6c\x69\x73\164", PR__CMN__COVER), "\x63\x6f\155\155\x65\x6e\x74\x5f\154\x69\163\164" => $this->wkwiceqaycqsygic('', $ywmkwiwkosakssii), "\x63\x6f\x6d\x6d\145\x6e\x74\x5f\146\157\x72\x6d" => Form::symcgieuakksimmu()->sqkcuwewwecosise([self::qaacaqioeyiuakeu => false], $gcqseksiskwueksc)]); wsemeeocquawyauo: } public function render($ywmkwiwkosakssii = []) { echo $this->wkwiceqaycqsygic('', $ywmkwiwkosakssii); } public function uuyycaeqcawcaiqe($aqqmosqmsuueyaes) : bool { $cuakwceieagskoaa = false; $uagwmwoawiwkycao = $this->weysguygiseoukqw(MetaBox::osoyyuwymacswyum, []); $aqqmosqmsuueyaes = ManipulateComment::get($aqqmosqmsuueyaes); if (!($aqqmosqmsuueyaes && $uagwmwoawiwkycao && $aqqmosqmsuueyaes->comment_parent)) { goto ocgkwqqmgasuoies; } $mkucggyaiaukqoce = ManipulateComment::issssuygyewuaswa($aqqmosqmsuueyaes); $cuakwceieagskoaa = $mkucggyaiaukqoce && ManipulateUser::esmswawesuyogmik($uagwmwoawiwkycao, $mkucggyaiaukqoce); ocgkwqqmgasuoies: return $cuakwceieagskoaa; } public function meuoeukiwkeumggk($qscaoekmoooeuyqg, $aqqmosqmsuueyaes) { if (!$this->uuyycaeqcawcaiqe($aqqmosqmsuueyaes)) { goto wmaeicoyyciuaiuy; } $qscaoekmoooeuyqg = get_bloginfo(self::NAME); wmaeicoyyciuaiuy: return $qscaoekmoooeuyqg; } public function wkwiceqaycqsygic($nsmgceoqaqogqmuw = '', $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = (array) ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::mswoacegomcucaik => null, self::kkcqmwgccaygggcu => 1, self::qescuiwgsyuikume => __("\103\x6f\155\x6d\145\156\164", PR__CMN__COVER), self::kqigmeickowqiiyy => 0, "\151\x73\x5f\141\x6a\141\x78" => false, "\151\x73\x5f\162\x65\x6e\144\x65\x72" => true, "\x64\x61\164\145\x5f\146\157\162\x6d\141\164" => ManipulateSetting::uyomwmskouyyqyyq(), "\x65\x6d\x70\x74\171\x5f\x6d\145\x73\x73\141\x67\x65" => __("\x54\x68\145\x72\x65\40\x61\x72\145\40\156\x6f\40\x63\157\x6d\155\x65\156\x74\x73\40\171\145\164\x2e", PR__CMN__COVER), "\147\x65\x74\x5f\143\157\x6d\x6d\x65\x6e\164\x73\x5f\141\162\x67\163" => [], "\x63\157\x6d\155\x65\156\164\137\167\x61\151\164\151\156\147\137\164\145\x78\164" => __("\x59\x6f\165\x72\x20\143\x6f\155\155\145\156\164\x20\151\x73\x20\141\167\141\x69\164\151\x6e\147\x20\155\157\x64\145\162\x61\x74\x69\157\156\56", PR__CMN__COVER)]); $ywmkwiwkosakssii = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::ukyommesgeqqcayq . "\162\145\x6e\144\145\162\137\x61\x72\x67\x73"), $ywmkwiwkosakssii, $nsmgceoqaqogqmuw); $post = ManipulateArray::get($ywmkwiwkosakssii, self::mswoacegomcucaik); $qawuqcsueakkgiio = ManipulateArray::get($ywmkwiwkosakssii, self::kkcqmwgccaygggcu); if ($post) { goto ooysmgyeqoiesgqm; } $gcqseksiskwueksc = ManipulateArray::get($ywmkwiwkosakssii, self::kqigmeickowqiiyy); goto kwoyiysciqumswcy; ooysmgyeqoiesgqm: $gcqseksiskwueksc = ManipulatePost::mwikyscisascoeea($post, true); kwoyiysciqumswcy: $kcagcoeuiasswusq = ''; $mcgoysmkqsqooceq = $ywmkwiwkosakssii["\151\163\x5f\x61\x6a\x61\170"]; $cgkkqqgoqqmmwysq = $ywmkwiwkosakssii["\x69\163\x5f\162\145\156\x64\145\x72"]; $qookweymeqawmcwo = ["\x65\x6d\160\x74\x79\x5f\x6d\145\163\163\141\147\x65" => $ywmkwiwkosakssii["\145\x6d\x70\x74\x79\x5f\x6d\145\163\x73\x61\x67\x65"], "\150\x61\x73\137\143\x6f\155\155\x65\156\x74" => false, "\x69\x73\137\141\x6a\x61\x78" => $ywmkwiwkosakssii["\151\163\137\141\x6a\x61\x78"], self::qescuiwgsyuikume => $ywmkwiwkosakssii[self::qescuiwgsyuikume]]; if (!$gcqseksiskwueksc) { goto isqwwmikecauwyuc; } if (!(($cgkkqqgoqqmmwysq || $mcgoysmkqsqooceq) && $this->uiqcwsowwswommka($gcqseksiskwueksc))) { goto qqmmycmsoqegcqqw; } $weeomyummeocueyk = array_merge($ywmkwiwkosakssii["\x67\x65\164\137\143\x6f\x6d\155\x65\156\x74\163\x5f\x61\162\147\x73"], [self::kkcqmwgccaygggcu => $qawuqcsueakkgiio, self::eymwucuaaiiciymc => ManipulateComment::omkaowmygoqwsywq(), self::ciywsqoeiymemsys => self::eucymkqyykekuymy, self::kqigmeickowqiiyy => $gcqseksiskwueksc]); $kcagcoeuiasswusq = ManipulateComment::ciugwooasaqcywas(ConvertArray::comkeiiwgwaqmcwe($weeomyummeocueyk)); $kcagcoeuiasswusq = wp_list_comments([self::qaacaqioeyiuakeu => false, self::kkcqmwgccaygggcu => $qawuqcsueakkgiio, self::wwgusigoaksqmwsm => [$this, "\x79\x6d\151\143\163\x79\161\145\143\163\151\x79\161\x6d\x79\x63"]], $kcagcoeuiasswusq); if ($mcgoysmkqsqooceq) { goto aaogeemgkogagkai; } $qookweymeqawmcwo["\x70\x61\x67\151\x6e\141\x74\151\157\x6e"] = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\147\145\x74\x5f\x63\x6f\x6d\155\145\x6e\164\x5f\160\141\147\x69\156\x61\x74\151\157\x6e"), '', [self::qaacaqioeyiuakeu => false, self::mswoacegomcucaik => $gcqseksiskwueksc]); aaogeemgkogagkai: qqmmycmsoqegcqqw: $qookweymeqawmcwo[self::qiyqwyiiwykeccmo] = DecoratorPost::qmegicmsiwuuwysa($gcqseksiskwueksc); $qookweymeqawmcwo["\x68\141\163\x5f\x63\x6f\x6d\x6d\x65\x6e\x74"] = ManipulatePost::gamoemyysmgugccu($gcqseksiskwueksc); isqwwmikecauwyuc: if (!$mcgoysmkqsqooceq || $cgkkqqgoqqmmwysq) { goto magymcqykamwqigw; } if (!is_string($kcagcoeuiasswusq)) { goto oiiqqgyqmggyiums; } $nsmgceoqaqogqmuw = $kcagcoeuiasswusq; oiiqqgyqmggyiums: goto ukogwqiuuuakkawy; magymcqykamwqigw: $qookweymeqawmcwo[self::goumieeyyqigueiw] = $kcagcoeuiasswusq; $qookweymeqawmcwo["\163\x70\151\x6e\x6e\145\x72"] = ManipulateHTML::kqmkicmuscsgqeoi(["\164\162\x61\x6e\163\x70\x61\162\x65\156\x74" => true, self::waguuiqqgsysuukq => "\62\x78"]); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x6c\151\x73\164", $qookweymeqawmcwo); ukogwqiuuuakkawy: return $nsmgceoqaqogqmuw; } public function ayseiumoaouacqcu($mowgokyeuymuwiew, $aqqmosqmsuueyaes, $oiegiwogmwmawkeo) { if (!$this->uuyycaeqcawcaiqe($aqqmosqmsuueyaes)) { goto ayamomygygmgwgkg; } $uouuguwawimuemic = $this->weysguygiseoukqw(MetaBox::aammuqouwoakgwgq . self::mswocgcucqoaesaa, 0); if (!$uouuguwawimuemic) { goto oymyqcoekqyuiguq; } $oiegiwogmwmawkeo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\143\157\x6d\155\145\x6e\x74\137\x61\166\x61\164\141\162\137\163\151\x7a\145"), $oiegiwogmwmawkeo, false); $wwgucssaecqekuek = ["\x63\154\141\x73\163" => $mowgokyeuymuwiew ? DOMCrawler::waecsyqmwascmqoa($mowgokyeuymuwiew, "\x69\x6d\147", "\x63\x6c\x61\163\x73") : '', "\141\x6c\x74" => __("\x41\165\164\150\157\162\x20\114\x6f\x67\x6f", PR__CMN__COVER)]; $uouuguwawimuemic = ManipulateAttachment::qaeeusqkgwagwaqc($uouuguwawimuemic, $oiegiwogmwmawkeo, $wwgucssaecqekuek); if (!$uouuguwawimuemic) { goto gicmaqmuscawegie; } $mowgokyeuymuwiew = $uouuguwawimuemic; gicmaqmuscawegie: oymyqcoekqyuiguq: ayamomygygmgwgkg: return $mowgokyeuymuwiew; } public function ymicsyqecsiyqmyc($aqqmosqmsuueyaes, $ywmkwiwkosakssii = [], $gquaqgsmiuqsaoum = 0) { $GLOBALS[self::COMMENT] = $aqqmosqmsuueyaes; $oiegiwogmwmawkeo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::ukyommesgeqqcayq . "\141\166\141\x74\x61\162\x5f\x73\151\x7a\145"), "\x73\155\x61\154\154", false); echo $this->iuygowkemiiwqmiw("\x69\x74\x65\x6d", ["\144\145\x70\x74\150" => $gquaqgsmiuqsaoum, self::gouqcwikiiygyasc => ManipulateComment::mwikyscisascoeea($aqqmosqmsuueyaes), self::TEXT => ManipulateComment::souwykwwmyygqyqi($aqqmosqmsuueyaes), self::mswoacegomcucaik => ManipulateArray::get($ywmkwiwkosakssii, self::mswoacegomcucaik), self::imywcsggckkcywgk => ManipulateArray::get($ywmkwiwkosakssii, self::kkcqmwgccaygggcu, 1), self::okeuagwgwkmiokac => $ywmkwiwkosakssii, "\x74\151\155\145\x5f\155\x61\x73\153" => __("\x25\61\x24\x73\x20\x61\164\40\x25\x32\x24\x73", PR__CMN__COVER), "\155\x61\170\x5f\x64\145\160\164\x68" => ManipulateArray::get($ywmkwiwkosakssii, "\155\141\170\x5f\144\x65\x70\x74\x68"), "\162\x65\x70\x6c\171\x5f\151\x63\157\x6e" => IconInterface::wgcuaiqkaoqksgqo, "\x61\x76\141\x74\141\162\x5f\163\151\172\x65" => $oiegiwogmwmawkeo, self::COMMENT => $aqqmosqmsuueyaes]); } }
