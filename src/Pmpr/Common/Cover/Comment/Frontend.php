<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638bb9e826bdc             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; class Frontend extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw(self::ukyommesgeqqcayq . "\x6c\151\x73\164\137\162\145\x6e\x64\x65\162"), [$this, "\162\x65\156\144\145\162"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw(self::ukyommesgeqqcayq . "\x66\x6f\x72\x6d\x5f\x61\x6e\144\x5f\154\151\x73\x74\137\x72\x65\x6e\x64\145\162"), [$this, "\x69\x73\151\171\141\x73\171\165\x61\x6b\165\x6b\x73\x69\141\155"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(MetaBox::ayumqueugowuywqs)) { goto kyiwsiakwgiwouyi; } $this->cecaguuoecmccuse("\147\x65\164\x5f\141\x76\141\x74\141\x72", [$this, "\141\171\x73\145\x69\x75\155\157\141\157\x75\141\x63\161\143\x75"], 10, 3)->cecaguuoecmccuse("\x67\145\164\137\x63\157\155\155\145\x6e\164\137\x61\165\164\150\x6f\x72", [$this, "\155\145\x75\x6f\x65\165\153\151\x77\x6b\x65\x75\155\x67\147\153"], 10, 2); kyiwsiakwgiwouyi: } public function isiyasyuakuksiam($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = (array) ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::kqigmeickowqiiyy => ManipulatePost::mwikyscisascoeea()]); $gcqseksiskwueksc = ManipulateArray::get($ywmkwiwkosakssii, self::kqigmeickowqiiyy); if (!$this->uiqcwsowwswommka($gcqseksiskwueksc)) { goto awgmegueeqeyqamu; } echo $this->iuygowkemiiwqmiw("\x66\157\x72\x6d\x5f\x61\x6e\144\x5f\x6c\151\x73\164", [self::mswoacegomcucaik => ManipulatePost::mwikyscisascoeea($gcqseksiskwueksc), self::qescuiwgsyuikume => __("\x43\157\x6d\x6d\x65\x6e\164\40\x66\x6f\162\155\x20\141\x6e\144\x20\x6c\x69\x73\164", PR__CMN__COVER), "\x63\157\155\155\145\x6e\164\x5f\154\151\163\x74" => $this->wkwiceqaycqsygic('', $ywmkwiwkosakssii), "\x63\x6f\155\155\x65\x6e\x74\137\146\157\162\x6d" => Form::symcgieuakksimmu()->sqkcuwewwecosise([self::qaacaqioeyiuakeu => false], $gcqseksiskwueksc)]); awgmegueeqeyqamu: } public function render($ywmkwiwkosakssii = []) { echo $this->wkwiceqaycqsygic('', $ywmkwiwkosakssii); } public function uuyycaeqcawcaiqe($aqqmosqmsuueyaes) : bool { $cuakwceieagskoaa = false; $uagwmwoawiwkycao = $this->weysguygiseoukqw(MetaBox::osoyyuwymacswyum, []); $aqqmosqmsuueyaes = ManipulateComment::get($aqqmosqmsuueyaes); if (!($aqqmosqmsuueyaes && $uagwmwoawiwkycao && $aqqmosqmsuueyaes->comment_parent)) { goto gqimwsyemoewagcy; } $mkucggyaiaukqoce = ManipulateComment::issssuygyewuaswa($aqqmosqmsuueyaes); $cuakwceieagskoaa = $mkucggyaiaukqoce && ManipulateUser::esmswawesuyogmik($uagwmwoawiwkycao, $mkucggyaiaukqoce); gqimwsyemoewagcy: return $cuakwceieagskoaa; } public function meuoeukiwkeumggk($qscaoekmoooeuyqg, $aqqmosqmsuueyaes) { if (!$this->uuyycaeqcawcaiqe($aqqmosqmsuueyaes)) { goto aoaqwygkaagiuuws; } $qscaoekmoooeuyqg = get_bloginfo(self::NAME); aoaqwygkaagiuuws: return $qscaoekmoooeuyqg; } public function wkwiceqaycqsygic($nsmgceoqaqogqmuw = '', $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = (array) ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::mswoacegomcucaik => null, self::kkcqmwgccaygggcu => 1, self::qescuiwgsyuikume => __("\x43\x6f\x6d\x6d\x65\156\x74", PR__CMN__COVER), self::kqigmeickowqiiyy => 0, "\x69\x73\137\141\152\x61\170" => false, "\151\x73\x5f\x72\145\x6e\144\145\x72" => true, "\144\141\x74\x65\x5f\146\x6f\x72\x6d\x61\164" => ManipulateSetting::uyomwmskouyyqyyq(), "\x65\x6d\160\x74\x79\x5f\155\x65\x73\163\141\147\145" => __("\124\150\x65\162\x65\40\141\162\x65\40\156\157\x20\x63\157\155\x6d\x65\156\x74\163\x20\x79\x65\164\x2e", PR__CMN__COVER), "\147\x65\164\137\x63\x6f\x6d\x6d\x65\x6e\164\x73\137\141\x72\147\x73" => [], "\143\x6f\155\x6d\x65\156\164\x5f\x77\141\x69\164\x69\x6e\147\137\x74\x65\170\x74" => __("\131\x6f\165\162\x20\x63\157\155\x6d\x65\x6e\164\x20\x69\x73\x20\141\167\x61\151\164\x69\156\x67\x20\155\x6f\x64\x65\162\x61\164\151\157\x6e\56", PR__CMN__COVER)]); $ywmkwiwkosakssii = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::ukyommesgeqqcayq . "\162\x65\156\x64\145\x72\137\x61\x72\147\x73"), $ywmkwiwkosakssii, $nsmgceoqaqogqmuw); $post = ManipulateArray::get($ywmkwiwkosakssii, self::mswoacegomcucaik); $qawuqcsueakkgiio = ManipulateArray::get($ywmkwiwkosakssii, self::kkcqmwgccaygggcu); if ($post) { goto esagiiawomyacuiw; } $gcqseksiskwueksc = ManipulateArray::get($ywmkwiwkosakssii, self::kqigmeickowqiiyy); goto maaisuqwkymeguys; esagiiawomyacuiw: $gcqseksiskwueksc = ManipulatePost::mwikyscisascoeea($post, true); maaisuqwkymeguys: $kcagcoeuiasswusq = ''; $mcgoysmkqsqooceq = $ywmkwiwkosakssii["\151\163\137\141\152\x61\x78"]; $cgkkqqgoqqmmwysq = $ywmkwiwkosakssii["\151\163\137\162\145\x6e\144\x65\162"]; $qookweymeqawmcwo = ["\x65\155\x70\164\x79\137\155\145\163\x73\x61\x67\x65" => $ywmkwiwkosakssii["\145\x6d\x70\x74\x79\x5f\155\x65\x73\163\141\x67\x65"], "\150\141\x73\137\x63\157\155\x6d\x65\156\164" => false, "\x69\163\137\141\x6a\x61\x78" => $ywmkwiwkosakssii["\x69\163\137\x61\x6a\x61\170"], self::qescuiwgsyuikume => $ywmkwiwkosakssii[self::qescuiwgsyuikume]]; if (!$gcqseksiskwueksc) { goto ayceeyuocgowqwsa; } if (!(($cgkkqqgoqqmmwysq || $mcgoysmkqsqooceq) && $this->uiqcwsowwswommka($gcqseksiskwueksc))) { goto sksgcusuyqcwqswe; } $weeomyummeocueyk = array_merge($ywmkwiwkosakssii["\147\145\164\137\143\157\x6d\x6d\145\156\x74\163\x5f\141\x72\147\x73"], [self::kkcqmwgccaygggcu => $qawuqcsueakkgiio, self::eymwucuaaiiciymc => ManipulateComment::omkaowmygoqwsywq(), self::kqigmeickowqiiyy => $gcqseksiskwueksc]); $kcagcoeuiasswusq = ManipulateComment::ciugwooasaqcywas(ConvertArray::comkeiiwgwaqmcwe($weeomyummeocueyk)); $kcagcoeuiasswusq = wp_list_comments([self::qaacaqioeyiuakeu => false, self::kkcqmwgccaygggcu => $qawuqcsueakkgiio, self::wwgusigoaksqmwsm => [$this, "\171\x6d\151\143\x73\x79\x71\145\143\x73\x69\171\161\x6d\x79\143"]], $kcagcoeuiasswusq); if ($mcgoysmkqsqooceq) { goto qkyciyiwkmgkmquk; } $qookweymeqawmcwo["\x70\141\x67\151\156\141\164\151\157\156"] = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\147\x65\x74\x5f\143\x6f\x6d\x6d\145\156\x74\x5f\160\x61\147\151\x6e\141\164\x69\x6f\156"), '', [self::qaacaqioeyiuakeu => false, self::mswoacegomcucaik => $gcqseksiskwueksc]); qkyciyiwkmgkmquk: sksgcusuyqcwqswe: $qookweymeqawmcwo["\150\141\x73\x5f\143\157\x6d\x6d\x65\x6e\x74"] = ManipulatePost::gamoemyysmgugccu($gcqseksiskwueksc); $qookweymeqawmcwo["\x63\157\x75\156\x74"] = DecoratorPost::qmegicmsiwuuwysa($gcqseksiskwueksc); ayceeyuocgowqwsa: if (!$mcgoysmkqsqooceq || $cgkkqqgoqqmmwysq) { goto yggseoaommssscwo; } if (!is_string($kcagcoeuiasswusq)) { goto iuwkiyimqmgguose; } $nsmgceoqaqogqmuw = $kcagcoeuiasswusq; iuwkiyimqmgguose: goto aeiemwacaiygemmg; yggseoaommssscwo: $qookweymeqawmcwo[self::goumieeyyqigueiw] = $kcagcoeuiasswusq; $qookweymeqawmcwo["\x73\x70\151\156\156\145\162"] = ManipulateHTML::kqmkicmuscsgqeoi(["\x74\162\x61\x6e\x73\x70\141\x72\145\156\x74" => true, self::waguuiqqgsysuukq => "\62\170"]); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x6c\x69\163\164", $qookweymeqawmcwo); aeiemwacaiygemmg: return $nsmgceoqaqogqmuw; } public function ayseiumoaouacqcu($mowgokyeuymuwiew, $aqqmosqmsuueyaes, $oiegiwogmwmawkeo) { if (!$this->uuyycaeqcawcaiqe($aqqmosqmsuueyaes)) { goto kwuckkyqaygwgcuy; } $uouuguwawimuemic = $this->weysguygiseoukqw(MetaBox::aammuqouwoakgwgq . self::mswocgcucqoaesaa, 0); if (!$uouuguwawimuemic) { goto oeusomaaeekakake; } $oiegiwogmwmawkeo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\143\x6f\155\155\x65\x6e\x74\137\x61\166\141\x74\x61\x72\x5f\163\x69\172\x65"), $oiegiwogmwmawkeo, false); $wwgucssaecqekuek = ["\x63\154\x61\163\x73" => $mowgokyeuymuwiew ? DOMCrawler::waecsyqmwascmqoa($mowgokyeuymuwiew, "\151\155\x67", "\x63\x6c\141\x73\163") : '', "\141\154\x74" => __("\x41\165\164\x68\157\162\x20\114\157\147\157", PR__CMN__COVER)]; $uouuguwawimuemic = ManipulateAttachment::qaeeusqkgwagwaqc($uouuguwawimuemic, $oiegiwogmwmawkeo, $wwgucssaecqekuek); if (!$uouuguwawimuemic) { goto yyqygaokeccgugos; } $mowgokyeuymuwiew = $uouuguwawimuemic; yyqygaokeccgugos: oeusomaaeekakake: kwuckkyqaygwgcuy: return $mowgokyeuymuwiew; } public function ymicsyqecsiyqmyc($aqqmosqmsuueyaes, $ywmkwiwkosakssii = [], $gquaqgsmiuqsaoum = 0) { $GLOBALS[self::COMMENT] = $aqqmosqmsuueyaes; $oiegiwogmwmawkeo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::ukyommesgeqqcayq . "\141\166\141\x74\141\x72\x5f\163\x69\172\x65"), "\x73\155\x61\154\x6c", false); echo $this->iuygowkemiiwqmiw("\151\x74\x65\155", ["\x64\x65\x70\164\x68" => $gquaqgsmiuqsaoum, self::gouqcwikiiygyasc => ManipulateComment::mwikyscisascoeea($aqqmosqmsuueyaes), self::TEXT => ManipulateComment::souwykwwmyygqyqi($aqqmosqmsuueyaes), self::mswoacegomcucaik => ManipulateArray::get($ywmkwiwkosakssii, self::mswoacegomcucaik), self::imywcsggckkcywgk => ManipulateArray::get($ywmkwiwkosakssii, self::kkcqmwgccaygggcu, 1), self::okeuagwgwkmiokac => $ywmkwiwkosakssii, "\164\151\x6d\x65\137\155\x61\163\153" => __("\x25\61\x24\163\40\141\164\40\x25\62\x24\163", PR__CMN__COVER), "\155\x61\x78\137\144\145\x70\164\x68" => ManipulateArray::get($ywmkwiwkosakssii, "\155\141\x78\137\144\x65\160\164\x68"), "\x72\x65\x70\154\x79\137\x69\143\157\x6e" => IconFontawesomeInterface::isiauyiaoyuwiamg, "\x61\x76\x61\164\x61\x72\137\x73\x69\x7a\x65" => $oiegiwogmwmawkeo, self::COMMENT => $aqqmosqmsuueyaes]); } }
