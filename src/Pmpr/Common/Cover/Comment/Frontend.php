<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65782c408de8b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Interfaces\IconInterface; use WP_Post; use WP_Term; class Frontend extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x66\164\145\x72\137\x73\x65\164\x75\x70\137\x74\150\145\x6d\145", [$this, "\153\147\x6b\x6d\x77\x75\143\x6d\x6b\143\161\x61\x6b\x73\155\157"]); $this->waqewsckuayqguos(self::ukyommesgeqqcayq . "\154\151\x73\x74\x5f\x72\x65\x6e\144\145\162", [$this, "\x72\x65\x6e\x64\x65\162"])->waqewsckuayqguos(self::ukyommesgeqqcayq . "\146\x6f\162\155\137\x61\x6e\x64\x5f\154\151\163\x74\x5f\162\145\x6e\144\x65\162", [$this, "\x69\163\x69\171\x61\x73\x79\x75\141\x6b\x75\x6b\163\x69\x61\155"]); parent::wigskegsqequoeks(); } public function kgkmwucmkcqaksmo() { if (!Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(SettingSection::ayumqueugowuywqs)) { goto ooysmgyeqoiesgqm; } $this->cecaguuoecmccuse("\147\x65\x74\137\141\166\141\x74\x61\162", [$this, "\x61\171\163\x65\151\165\155\157\141\x6f\165\x61\x63\161\x63\x75"], 10, 3)->cecaguuoecmccuse("\x67\x65\164\x5f\x63\157\155\155\x65\156\164\x5f\x61\x75\x74\150\157\x72", [$this, "\155\145\165\157\145\x75\153\151\167\x6b\x65\x75\x6d\x67\147\153"], 10, 2); ooysmgyeqoiesgqm: } public function isiyasyuakuksiam(array $ywmkwiwkosakssii = []) { if (!($icwicymcioeyeyek = $this->uiqcwsowwswommka())) { goto kwoyiysciqumswcy; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $icwicymcioeyeyek); echo $this->iuygowkemiiwqmiw("\x66\157\162\x6d\x5f\x61\x6e\144\x5f\154\151\163\164", [self::qescuiwgsyuikume => __("\103\x6f\155\155\x65\156\x74\40\146\157\162\155\40\x61\x6e\x64\40\x6c\151\x73\164", PR__CMN__COVER), "\143\157\155\155\145\156\164\137\154\151\163\x74" => $this->ckgkesscwwgyimsq('', $ywmkwiwkosakssii), "\143\x6f\155\155\145\156\x74\x5f\146\157\x72\155" => Form::symcgieuakksimmu()->wgqqgewcmcemoewo([self::qaacaqioeyiuakeu => false]), self::eggygikowgywcayq => $ywmkwiwkosakssii[self::eggygikowgywcayq]]); kwoyiysciqumswcy: } public function render(array $ywmkwiwkosakssii = []) { echo $this->ckgkesscwwgyimsq('', $ywmkwiwkosakssii); } public function uuyycaeqcawcaiqe($comment) : bool { $kuowggqsyksiyygi = $this->caokeucsksukesyo()->yagekskwwyqosqcs(); $cuakwceieagskoaa = false; $uagwmwoawiwkycao = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(SettingSection::osoyyuwymacswyum, []); $comment = $kuowggqsyksiyygi->get($comment); if (!($comment && $uagwmwoawiwkycao && $comment->comment_parent)) { goto aaogeemgkogagkai; } $mkucggyaiaukqoce = $kuowggqsyksiyygi->msyqmssukoqkqkau($comment); $cuakwceieagskoaa = $mkucggyaiaukqoce && $this->caokeucsksukesyo()->issssuygyewuaswa()->esmswawesuyogmik($uagwmwoawiwkycao, $mkucggyaiaukqoce); aaogeemgkogagkai: return $cuakwceieagskoaa; } public function meuoeukiwkeumggk($qscaoekmoooeuyqg, $comment) { if (!$this->uuyycaeqcawcaiqe($comment)) { goto qqmmycmsoqegcqqw; } $qscaoekmoooeuyqg = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(self::NAME); qqmmycmsoqegcqqw: return $qscaoekmoooeuyqg; } public function ayseiumoaouacqcu($mowgokyeuymuwiew, $comment, $oiegiwogmwmawkeo) { if (!$this->uuyycaeqcawcaiqe($comment)) { goto ukogwqiuuuakkawy; } $uouuguwawimuemic = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(SettingSection::aammuqouwoakgwgq, 0); if (!$uouuguwawimuemic) { goto magymcqykamwqigw; } $oiegiwogmwmawkeo = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\141\x76\141\x74\141\x72\137\x73\151\172\x65", $oiegiwogmwmawkeo, false); if (!is_numeric($oiegiwogmwmawkeo)) { goto isqwwmikecauwyuc; } $oiegiwogmwmawkeo = [$oiegiwogmwmawkeo, $oiegiwogmwmawkeo]; isqwwmikecauwyuc: $wwgucssaecqekuek = ["\143\154\141\163\163" => $mowgokyeuymuwiew ? $this->caokeucsksukesyo()->gkksucgseqqemesc()->waecsyqmwascmqoa($mowgokyeuymuwiew, "\x69\x6d\x67", "\143\154\x61\163\x73") : '', "\x61\x6c\164" => __("\x41\x75\164\x68\157\x72\40\x4c\x6f\x67\157", PR__CMN__COVER)]; if (!($uouuguwawimuemic = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->qaeeusqkgwagwaqc($uouuguwawimuemic, $oiegiwogmwmawkeo, $wwgucssaecqekuek))) { goto oiiqqgyqmggyiums; } $mowgokyeuymuwiew = $uouuguwawimuemic; oiiqqgyqmggyiums: magymcqykamwqigw: ukogwqiuuuakkawy: return $mowgokyeuymuwiew; } public function ckgkesscwwgyimsq($nsmgceoqaqogqmuw = '', array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [self::eggygikowgywcayq => null, self::wwcycgyaiaksckuk => self::uouymeyqasaeckso, self::kkcqmwgccaygggcu => $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg("\143\x70\141\x67\x65"), self::qescuiwgsyuikume => __("\x43\157\x6d\155\145\156\x74", PR__CMN__COVER), "\x69\163\x5f\141\152\x61\x78" => false, "\x69\x73\x5f\162\x65\x6e\144\145\162" => true, "\144\141\164\x65\x5f\x66\x6f\162\155\141\x74" => $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(), "\x65\155\160\x74\171\x5f\x6d\x65\163\x73\141\x67\x65" => __("\x54\x68\x65\162\145\x20\141\162\145\x20\x6e\157\x20\x63\x6f\155\x6d\x65\x6e\164\x73\x20\x79\145\164\56", PR__CMN__COVER), "\147\145\164\137\x63\157\155\155\145\x6e\x74\x73\137\141\162\147\163" => [], "\143\157\x6d\155\145\156\x74\137\167\141\151\164\151\156\147\x5f\164\x65\x78\164" => __("\131\x6f\165\x72\40\x63\157\155\x6d\x65\156\x74\40\151\163\40\x61\x77\x61\151\164\x69\156\x67\40\x6d\x6f\x64\x65\x72\141\x74\151\x6f\x6e\x2e", PR__CMN__COVER)]); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $ywmkwiwkosakssii = (array) $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\162\145\x6e\x64\145\162\137\x61\162\147\x73", $ywmkwiwkosakssii, $nsmgceoqaqogqmuw); $qawuqcsueakkgiio = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::kkcqmwgccaygggcu); $moqewomugocaueis = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::eggygikowgywcayq); $mqyaskyaekmkegmg = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::wwcycgyaiaksckuk); $kcagcoeuiasswusq = ''; $mcgoysmkqsqooceq = false; $cgkkqqgoqqmmwysq = true; $qookweymeqawmcwo = ["\145\155\160\164\171\137\155\x65\x73\x73\141\x67\145" => $ywmkwiwkosakssii["\x65\155\x70\x74\x79\x5f\x6d\x65\163\x73\141\147\145"], "\150\x61\x73\137\143\x6f\x6d\x6d\145\156\x74" => false, "\x69\163\x5f\141\152\x61\170" => $mcgoysmkqsqooceq, self::qescuiwgsyuikume => $ywmkwiwkosakssii[self::qescuiwgsyuikume]]; if (!$moqewomugocaueis) { goto ucksaiwquekagyqe; } if (!(($cgkkqqgoqqmmwysq || $mcgoysmkqsqooceq) && $this->uiqcwsowwswommka())) { goto oymyqcoekqyuiguq; } $kuowggqsyksiyygi = $this->caokeucsksukesyo()->yagekskwwyqosqcs(); $weeomyummeocueyk = array_merge($ywmkwiwkosakssii["\147\145\x74\x5f\x63\x6f\x6d\x6d\145\x6e\164\x73\137\141\x72\x67\x73"], [self::qaacaqioeyiuakeu => false, self::kkcqmwgccaygggcu => $qawuqcsueakkgiio, self::awkcoioakcaougmq => self::omaksceqmigeaoko, self::eymwucuaaiiciymc => $kuowggqsyksiyygi->omkaowmygoqwsywq(), self::ciywsqoeiymemsys => self::eucymkqyykekuymy, self::wwgusigoaksqmwsm => [$this, "\171\155\151\x63\163\x79\161\145\143\163\151\171\161\x6d\171\x63"], self::eggygikowgywcayq => $moqewomugocaueis, self::wwcycgyaiaksckuk => $mqyaskyaekmkegmg]); $kcagcoeuiasswusq = $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ekysoioumkkwawwm(ConvertArray::comkeiiwgwaqmcwe($weeomyummeocueyk)); if ($mcgoysmkqsqooceq) { goto gicmaqmuscawegie; } $qookweymeqawmcwo["\160\x61\147\x69\156\x61\164\x69\157\156"] = $this->ocksiywmkyaqseou("\x67\145\x74\x5f\143\157\155\x6d\145\156\x74\x5f\160\x61\x67\x69\x6e\141\x74\151\x6f\156", '', [self::qaacaqioeyiuakeu => false, self::eggygikowgywcayq => $moqewomugocaueis]); gicmaqmuscawegie: oymyqcoekqyuiguq: switch ($mqyaskyaekmkegmg) { case self::gmmygyiecgmggaam: $qookweymeqawmcwo["\x68\x61\163\x5f\143\157\x6d\x6d\145\156\x74"] = !empty($kcagcoeuiasswusq); goto ayamomygygmgwgkg; case self::uouymeyqasaeckso: $qookweymeqawmcwo["\x68\141\x73\x5f\x63\157\x6d\155\x65\x6e\164"] = $seumokooiykcomco->gamoemyysmgugccu($moqewomugocaueis); goto ayamomygygmgwgkg; } gygqgauaceiuawkq: ayamomygygmgwgkg: $qookweymeqawmcwo[self::qiyqwyiiwykeccmo] = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->qmegicmsiwuuwysa($ywmkwiwkosakssii[self::mswoacegomcucaik] ?? $moqewomugocaueis); ucksaiwquekagyqe: if (!$mcgoysmkqsqooceq || $cgkkqqgoqqmmwysq) { goto asqqqqakiagymemk; } if (!is_string($kcagcoeuiasswusq)) { goto iyeswoaqkaeggiiy; } $nsmgceoqaqogqmuw = $kcagcoeuiasswusq; iyeswoaqkaeggiiy: goto jkgouewqysmscmqs; asqqqqakiagymemk: $qookweymeqawmcwo[self::goumieeyyqigueiw] = $kcagcoeuiasswusq; $qookweymeqawmcwo["\163\x70\x69\156\156\x65\162"] = $this->caokeucsksukesyo()->kugiyqykwaskawsc()->kqmkicmuscsgqeoi(["\x74\x72\141\x6e\163\x70\141\x72\145\156\x74" => true, self::waguuiqqgsysuukq => "\x32\x78"]); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x6c\x69\x73\x74", $qookweymeqawmcwo); jkgouewqysmscmqs: return $nsmgceoqaqogqmuw; } public function ymicsyqecsiyqmyc($comment, $ywmkwiwkosakssii = [], $gquaqgsmiuqsaoum = 0) { $GLOBALS[self::COMMENT] = $comment; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $oiegiwogmwmawkeo = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\141\x76\x61\x74\141\162\137\x73\x69\x7a\x65", "\x73\x6d\x61\x6c\x6c", false); echo $this->iuygowkemiiwqmiw("\151\164\145\x6d", ["\x64\x65\160\x74\x68" => $gquaqgsmiuqsaoum, self::gouqcwikiiygyasc => $this->caokeucsksukesyo()->yagekskwwyqosqcs()->iooowgsqoyqseyuu($comment), self::TEXT => $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ykgcioecqcwwkime($comment), self::imywcsggckkcywgk => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::kkcqmwgccaygggcu, 1), self::okeuagwgwkmiokac => $ywmkwiwkosakssii, "\164\x69\155\145\x5f\x6d\x61\163\153" => __("\x25\61\x24\x73\40\x61\164\x20\x25\x32\44\163", PR__CMN__COVER), "\x6d\x61\170\137\x64\x65\160\164\x68" => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\x6d\x61\x78\137\144\145\160\164\150"), "\x72\x65\160\x6c\x79\137\151\x63\157\x6e" => IconInterface::wgcuaiqkaoqksgqo, "\141\166\141\x74\x61\162\x5f\x73\151\x7a\145" => $oiegiwogmwmawkeo, self::COMMENT => $comment, self::eggygikowgywcayq => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::eggygikowgywcayq)]); } }
