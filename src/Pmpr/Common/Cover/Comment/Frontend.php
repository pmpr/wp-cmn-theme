<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63b40112aa680             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Frontend extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw(self::ukyommesgeqqcayq . "\154\x69\163\x74\x5f\162\x65\156\x64\x65\x72"), [$this, "\162\x65\156\x64\145\162"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw(self::ukyommesgeqqcayq . "\146\157\162\155\137\141\156\x64\137\154\x69\x73\x74\x5f\162\x65\156\x64\145\162"), [$this, "\x69\163\151\x79\x61\x73\x79\165\141\153\x75\x6b\x73\151\141\x6d"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(MetaBox::ayumqueugowuywqs)) { goto kicwiowcogmauwiy; } $this->cecaguuoecmccuse("\147\x65\164\x5f\141\166\x61\164\141\x72", [$this, "\141\171\163\145\151\165\x6d\157\141\x6f\165\141\143\x71\143\165"], 10, 3)->cecaguuoecmccuse("\x67\x65\164\x5f\143\157\155\x6d\x65\x6e\164\x5f\x61\165\x74\x68\x6f\162", [$this, "\x6d\145\165\x6f\145\165\x6b\151\167\153\x65\x75\155\147\x67\153"], 10, 2); kicwiowcogmauwiy: } public function isiyasyuakuksiam($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = (array) ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::kqigmeickowqiiyy => ManipulatePost::mwikyscisascoeea()]); $gcqseksiskwueksc = ManipulateArray::get($ywmkwiwkosakssii, self::kqigmeickowqiiyy); if (!$this->uiqcwsowwswommka($gcqseksiskwueksc)) { goto cwswueuqoamqasya; } echo $this->iuygowkemiiwqmiw("\x66\x6f\162\x6d\x5f\141\156\x64\137\x6c\x69\163\x74", [self::mswoacegomcucaik => ManipulatePost::mwikyscisascoeea($gcqseksiskwueksc), self::qescuiwgsyuikume => __("\x43\157\155\155\145\156\164\40\146\x6f\162\x6d\x20\x61\x6e\144\x20\154\151\x73\164", PR__CMN__COVER), "\x63\x6f\x6d\155\x65\x6e\164\137\x6c\151\x73\164" => $this->wkwiceqaycqsygic('', $ywmkwiwkosakssii), "\x63\x6f\x6d\x6d\145\x6e\164\x5f\146\157\162\155" => Form::symcgieuakksimmu()->sqkcuwewwecosise([self::qaacaqioeyiuakeu => false], $gcqseksiskwueksc)]); cwswueuqoamqasya: } public function render($ywmkwiwkosakssii = []) { echo $this->wkwiceqaycqsygic('', $ywmkwiwkosakssii); } public function uuyycaeqcawcaiqe($aqqmosqmsuueyaes) : bool { $cuakwceieagskoaa = false; $uagwmwoawiwkycao = $this->weysguygiseoukqw(MetaBox::osoyyuwymacswyum, []); $aqqmosqmsuueyaes = ManipulateComment::get($aqqmosqmsuueyaes); if (!($aqqmosqmsuueyaes && $uagwmwoawiwkycao && $aqqmosqmsuueyaes->comment_parent)) { goto kgmeiwiakwicgkkk; } $mkucggyaiaukqoce = ManipulateComment::issssuygyewuaswa($aqqmosqmsuueyaes); $cuakwceieagskoaa = $mkucggyaiaukqoce && ManipulateUser::esmswawesuyogmik($uagwmwoawiwkycao, $mkucggyaiaukqoce); kgmeiwiakwicgkkk: return $cuakwceieagskoaa; } public function meuoeukiwkeumggk($qscaoekmoooeuyqg, $aqqmosqmsuueyaes) { if (!$this->uuyycaeqcawcaiqe($aqqmosqmsuueyaes)) { goto suuskagowwgsouqw; } $qscaoekmoooeuyqg = get_bloginfo(self::NAME); suuskagowwgsouqw: return $qscaoekmoooeuyqg; } public function wkwiceqaycqsygic($nsmgceoqaqogqmuw = '', $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = (array) ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::mswoacegomcucaik => null, self::kkcqmwgccaygggcu => 1, self::qescuiwgsyuikume => __("\x43\157\155\155\x65\156\x74", PR__CMN__COVER), self::kqigmeickowqiiyy => 0, "\151\163\x5f\141\x6a\141\x78" => false, "\x69\x73\x5f\x72\x65\x6e\144\145\162" => true, "\144\x61\x74\145\137\x66\x6f\x72\x6d\x61\164" => ManipulateSetting::uyomwmskouyyqyyq(), "\x65\x6d\x70\x74\171\x5f\155\x65\163\x73\x61\x67\x65" => __("\124\150\145\x72\x65\40\x61\x72\145\x20\156\157\x20\143\x6f\x6d\155\x65\x6e\x74\163\40\x79\x65\164\x2e", PR__CMN__COVER), "\x67\x65\164\x5f\143\157\155\x6d\x65\156\164\163\x5f\x61\162\x67\163" => [], "\143\x6f\x6d\155\x65\156\164\137\x77\141\151\x74\x69\156\x67\x5f\x74\x65\x78\164" => __("\x59\157\165\162\x20\x63\x6f\x6d\x6d\x65\x6e\x74\40\151\163\40\141\x77\x61\x69\164\x69\x6e\147\x20\155\x6f\144\145\162\x61\x74\151\157\156\x2e", PR__CMN__COVER)]); $ywmkwiwkosakssii = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::ukyommesgeqqcayq . "\162\145\x6e\144\145\x72\x5f\141\162\x67\x73"), $ywmkwiwkosakssii, $nsmgceoqaqogqmuw); $post = ManipulateArray::get($ywmkwiwkosakssii, self::mswoacegomcucaik); $qawuqcsueakkgiio = ManipulateArray::get($ywmkwiwkosakssii, self::kkcqmwgccaygggcu); if ($post) { goto omykokikgocoikec; } $gcqseksiskwueksc = ManipulateArray::get($ywmkwiwkosakssii, self::kqigmeickowqiiyy); goto csieaismmmocyacu; omykokikgocoikec: $gcqseksiskwueksc = ManipulatePost::mwikyscisascoeea($post, true); csieaismmmocyacu: $kcagcoeuiasswusq = ''; $mcgoysmkqsqooceq = $ywmkwiwkosakssii["\x69\163\137\141\152\x61\x78"]; $cgkkqqgoqqmmwysq = $ywmkwiwkosakssii["\x69\163\137\162\145\x6e\144\145\x72"]; $qookweymeqawmcwo = ["\145\155\160\164\x79\137\155\x65\163\x73\141\x67\145" => $ywmkwiwkosakssii["\145\155\x70\164\171\137\x6d\x65\x73\163\x61\x67\145"], "\150\141\x73\x5f\x63\157\155\x6d\145\x6e\x74" => false, "\x69\x73\x5f\141\x6a\x61\x78" => $ywmkwiwkosakssii["\151\163\x5f\141\x6a\141\x78"], self::qescuiwgsyuikume => $ywmkwiwkosakssii[self::qescuiwgsyuikume]]; if (!$gcqseksiskwueksc) { goto agemwookwseyycqo; } if (!(($cgkkqqgoqqmmwysq || $mcgoysmkqsqooceq) && $this->uiqcwsowwswommka($gcqseksiskwueksc))) { goto mykiyqcqiegkiqys; } $weeomyummeocueyk = array_merge($ywmkwiwkosakssii["\147\x65\164\x5f\x63\x6f\155\155\x65\x6e\x74\x73\137\141\x72\147\x73"], [self::kkcqmwgccaygggcu => $qawuqcsueakkgiio, self::eymwucuaaiiciymc => ManipulateComment::omkaowmygoqwsywq(), self::ciywsqoeiymemsys => self::eucymkqyykekuymy, self::kqigmeickowqiiyy => $gcqseksiskwueksc]); $kcagcoeuiasswusq = ManipulateComment::ciugwooasaqcywas(ConvertArray::comkeiiwgwaqmcwe($weeomyummeocueyk)); $kcagcoeuiasswusq = wp_list_comments([self::qaacaqioeyiuakeu => false, self::kkcqmwgccaygggcu => $qawuqcsueakkgiio, self::wwgusigoaksqmwsm => [$this, "\171\x6d\x69\x63\163\x79\161\145\143\x73\151\x79\161\x6d\x79\x63"]], $kcagcoeuiasswusq); if ($mcgoysmkqsqooceq) { goto aquqkiggamaoegoo; } $qookweymeqawmcwo["\160\x61\x67\x69\x6e\141\164\x69\157\x6e"] = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x67\x65\164\x5f\x63\x6f\x6d\x6d\145\156\164\137\x70\141\147\x69\156\141\164\x69\157\x6e"), '', [self::qaacaqioeyiuakeu => false, self::mswoacegomcucaik => $gcqseksiskwueksc]); aquqkiggamaoegoo: mykiyqcqiegkiqys: $qookweymeqawmcwo[self::qiyqwyiiwykeccmo] = DecoratorPost::qmegicmsiwuuwysa($gcqseksiskwueksc); $qookweymeqawmcwo["\150\141\163\x5f\143\x6f\x6d\155\145\x6e\x74"] = ManipulatePost::gamoemyysmgugccu($gcqseksiskwueksc); agemwookwseyycqo: if (!$mcgoysmkqsqooceq || $cgkkqqgoqqmmwysq) { goto koiscokkkaimiecq; } if (!is_string($kcagcoeuiasswusq)) { goto cquecqekuucwoumw; } $nsmgceoqaqogqmuw = $kcagcoeuiasswusq; cquecqekuucwoumw: goto owuuuiekkaeoeacq; koiscokkkaimiecq: $qookweymeqawmcwo[self::goumieeyyqigueiw] = $kcagcoeuiasswusq; $qookweymeqawmcwo["\163\160\x69\156\x6e\x65\162"] = ManipulateHTML::kqmkicmuscsgqeoi(["\x74\x72\x61\156\163\160\141\162\145\x6e\x74" => true, self::waguuiqqgsysuukq => "\62\x78"]); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\154\x69\163\x74", $qookweymeqawmcwo); owuuuiekkaeoeacq: return $nsmgceoqaqogqmuw; } public function ayseiumoaouacqcu($mowgokyeuymuwiew, $aqqmosqmsuueyaes, $oiegiwogmwmawkeo) { if (!$this->uuyycaeqcawcaiqe($aqqmosqmsuueyaes)) { goto mqimkwickkgqqeoi; } $uouuguwawimuemic = $this->weysguygiseoukqw(MetaBox::aammuqouwoakgwgq . self::mswocgcucqoaesaa, 0); if (!$uouuguwawimuemic) { goto qwemkcoaseywkuuc; } $oiegiwogmwmawkeo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\157\x6d\155\145\x6e\x74\137\x61\166\x61\164\141\162\x5f\x73\151\172\x65"), $oiegiwogmwmawkeo, false); $wwgucssaecqekuek = ["\143\154\x61\163\x73" => $mowgokyeuymuwiew ? DOMCrawler::waecsyqmwascmqoa($mowgokyeuymuwiew, "\x69\155\147", "\143\154\x61\x73\x73") : '', "\141\154\x74" => __("\101\165\164\x68\157\x72\40\x4c\157\x67\x6f", PR__CMN__COVER)]; $uouuguwawimuemic = ManipulateAttachment::qaeeusqkgwagwaqc($uouuguwawimuemic, $oiegiwogmwmawkeo, $wwgucssaecqekuek); if (!$uouuguwawimuemic) { goto saauykgakaeiyoua; } $mowgokyeuymuwiew = $uouuguwawimuemic; saauykgakaeiyoua: qwemkcoaseywkuuc: mqimkwickkgqqeoi: return $mowgokyeuymuwiew; } public function ymicsyqecsiyqmyc($aqqmosqmsuueyaes, $ywmkwiwkosakssii = [], $gquaqgsmiuqsaoum = 0) { $GLOBALS[self::COMMENT] = $aqqmosqmsuueyaes; $oiegiwogmwmawkeo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::ukyommesgeqqcayq . "\x61\x76\x61\164\x61\x72\137\163\151\172\x65"), "\x73\x6d\x61\154\154", false); echo $this->iuygowkemiiwqmiw("\x69\x74\145\155", ["\144\x65\x70\x74\150" => $gquaqgsmiuqsaoum, self::gouqcwikiiygyasc => ManipulateComment::mwikyscisascoeea($aqqmosqmsuueyaes), self::TEXT => ManipulateComment::souwykwwmyygqyqi($aqqmosqmsuueyaes), self::mswoacegomcucaik => ManipulateArray::get($ywmkwiwkosakssii, self::mswoacegomcucaik), self::imywcsggckkcywgk => ManipulateArray::get($ywmkwiwkosakssii, self::kkcqmwgccaygggcu, 1), self::okeuagwgwkmiokac => $ywmkwiwkosakssii, "\164\x69\x6d\x65\x5f\155\141\163\x6b" => __("\x25\61\x24\163\40\141\x74\x20\45\x32\x24\x73", PR__CMN__COVER), "\155\x61\170\137\144\145\x70\164\x68" => ManipulateArray::get($ywmkwiwkosakssii, "\x6d\141\x78\137\144\145\x70\164\x68"), "\x72\x65\160\x6c\x79\x5f\x69\143\157\156" => IconInterface::wgcuaiqkaoqksgqo, "\141\166\x61\164\x61\x72\x5f\163\151\172\145" => $oiegiwogmwmawkeo, self::COMMENT => $aqqmosqmsuueyaes]); } }
