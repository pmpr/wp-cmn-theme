<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6575f24183c7b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Interfaces\IconInterface; use WP_Post; use WP_Term; class Frontend extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x66\x74\x65\162\x5f\163\145\164\x75\160\137\x74\150\145\x6d\145", [$this, "\153\147\153\155\167\165\143\x6d\153\143\161\141\153\163\155\157"]); $this->waqewsckuayqguos(self::ukyommesgeqqcayq . "\x6c\151\x73\164\x5f\162\x65\x6e\144\145\x72", [$this, "\x72\x65\x6e\144\145\162"])->waqewsckuayqguos(self::ukyommesgeqqcayq . "\146\157\x72\x6d\x5f\141\156\144\137\x6c\x69\x73\164\137\162\145\156\x64\x65\x72", [$this, "\x69\163\x69\171\141\163\x79\165\141\153\x75\x6b\163\x69\141\155"]); parent::wigskegsqequoeks(); } public function kgkmwucmkcqaksmo() { if (!Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(SettingSection::ayumqueugowuywqs)) { goto ooysmgyeqoiesgqm; } $this->cecaguuoecmccuse("\147\145\x74\137\141\x76\x61\x74\141\x72", [$this, "\141\171\x73\145\x69\165\155\x6f\x61\x6f\x75\x61\143\x71\x63\165"], 10, 3)->cecaguuoecmccuse("\147\145\164\x5f\143\x6f\155\155\x65\x6e\x74\x5f\141\x75\x74\150\x6f\162", [$this, "\x6d\145\x75\x6f\x65\x75\x6b\x69\x77\153\x65\165\155\147\x67\153"], 10, 2); ooysmgyeqoiesgqm: } public function isiyasyuakuksiam(array $ywmkwiwkosakssii = []) { if (!($icwicymcioeyeyek = $this->uiqcwsowwswommka())) { goto kwoyiysciqumswcy; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $icwicymcioeyeyek); echo $this->iuygowkemiiwqmiw("\x66\157\x72\x6d\x5f\x61\x6e\144\137\154\x69\163\x74", [self::qescuiwgsyuikume => __("\x43\157\155\155\145\156\164\x20\146\x6f\162\x6d\x20\141\x6e\144\x20\154\151\163\164", PR__CMN__COVER), "\143\x6f\155\x6d\x65\x6e\164\137\154\151\163\x74" => $this->ckgkesscwwgyimsq('', $ywmkwiwkosakssii), "\143\157\155\x6d\145\x6e\x74\x5f\146\x6f\162\x6d" => Form::symcgieuakksimmu()->wgqqgewcmcemoewo([self::qaacaqioeyiuakeu => false]), self::eggygikowgywcayq => $ywmkwiwkosakssii[self::eggygikowgywcayq]]); kwoyiysciqumswcy: } public function render(array $ywmkwiwkosakssii = []) { echo $this->ckgkesscwwgyimsq('', $ywmkwiwkosakssii); } public function uuyycaeqcawcaiqe($comment) : bool { $kuowggqsyksiyygi = $this->caokeucsksukesyo()->yagekskwwyqosqcs(); $cuakwceieagskoaa = false; $uagwmwoawiwkycao = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(SettingSection::osoyyuwymacswyum, []); $comment = $kuowggqsyksiyygi->get($comment); if (!($comment && $uagwmwoawiwkycao && $comment->comment_parent)) { goto aaogeemgkogagkai; } $mkucggyaiaukqoce = $kuowggqsyksiyygi->msyqmssukoqkqkau($comment); $cuakwceieagskoaa = $mkucggyaiaukqoce && $this->caokeucsksukesyo()->issssuygyewuaswa()->esmswawesuyogmik($uagwmwoawiwkycao, $mkucggyaiaukqoce); aaogeemgkogagkai: return $cuakwceieagskoaa; } public function meuoeukiwkeumggk($qscaoekmoooeuyqg, $comment) { if (!$this->uuyycaeqcawcaiqe($comment)) { goto qqmmycmsoqegcqqw; } $qscaoekmoooeuyqg = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(self::NAME); qqmmycmsoqegcqqw: return $qscaoekmoooeuyqg; } public function ayseiumoaouacqcu($mowgokyeuymuwiew, $comment, $oiegiwogmwmawkeo) { if (!$this->uuyycaeqcawcaiqe($comment)) { goto ukogwqiuuuakkawy; } $uouuguwawimuemic = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(SettingSection::aammuqouwoakgwgq, 0); if (!$uouuguwawimuemic) { goto magymcqykamwqigw; } $oiegiwogmwmawkeo = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\x61\x76\x61\x74\x61\x72\137\163\x69\x7a\145", $oiegiwogmwmawkeo, false); if (!is_numeric($oiegiwogmwmawkeo)) { goto isqwwmikecauwyuc; } $oiegiwogmwmawkeo = [$oiegiwogmwmawkeo, $oiegiwogmwmawkeo]; isqwwmikecauwyuc: $wwgucssaecqekuek = ["\143\154\x61\x73\163" => $mowgokyeuymuwiew ? $this->caokeucsksukesyo()->gkksucgseqqemesc()->waecsyqmwascmqoa($mowgokyeuymuwiew, "\151\x6d\x67", "\x63\154\141\x73\x73") : '', "\x61\154\x74" => __("\101\165\x74\150\157\162\40\114\x6f\147\x6f", PR__CMN__COVER)]; if (!($uouuguwawimuemic = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->qaeeusqkgwagwaqc($uouuguwawimuemic, $oiegiwogmwmawkeo, $wwgucssaecqekuek))) { goto oiiqqgyqmggyiums; } $mowgokyeuymuwiew = $uouuguwawimuemic; oiiqqgyqmggyiums: magymcqykamwqigw: ukogwqiuuuakkawy: return $mowgokyeuymuwiew; } public function ckgkesscwwgyimsq($nsmgceoqaqogqmuw = '', array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [self::eggygikowgywcayq => null, self::wwcycgyaiaksckuk => self::uouymeyqasaeckso, self::kkcqmwgccaygggcu => 1, self::qescuiwgsyuikume => __("\x43\157\155\155\145\x6e\x74", PR__CMN__COVER), "\151\x73\x5f\141\x6a\141\170" => false, "\x69\163\137\x72\145\156\144\x65\x72" => true, "\x64\x61\x74\145\x5f\x66\x6f\x72\155\141\x74" => $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(), "\145\x6d\160\164\x79\137\x6d\145\x73\x73\x61\147\145" => __("\124\x68\145\162\x65\40\x61\162\145\x20\156\157\x20\143\157\x6d\155\145\x6e\x74\x73\40\x79\x65\164\56", PR__CMN__COVER), "\147\145\164\137\143\x6f\155\155\145\156\x74\x73\x5f\x61\162\147\x73" => [], "\x63\157\155\155\x65\x6e\164\137\167\x61\x69\164\x69\x6e\147\x5f\x74\x65\x78\x74" => __("\x59\157\165\x72\40\x63\157\x6d\x6d\x65\156\x74\x20\x69\x73\40\x61\167\x61\x69\x74\x69\156\147\x20\x6d\157\144\145\x72\x61\164\151\157\x6e\56", PR__CMN__COVER)]); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $ywmkwiwkosakssii = (array) $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\162\145\156\x64\x65\162\x5f\x61\x72\147\x73", $ywmkwiwkosakssii, $nsmgceoqaqogqmuw); $qawuqcsueakkgiio = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::kkcqmwgccaygggcu); $moqewomugocaueis = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::eggygikowgywcayq); $mqyaskyaekmkegmg = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::wwcycgyaiaksckuk); $kcagcoeuiasswusq = ''; $mcgoysmkqsqooceq = false; $cgkkqqgoqqmmwysq = true; $cwccwesgwckcgmei = []; $qookweymeqawmcwo = ["\145\x6d\160\x74\171\x5f\x6d\x65\163\163\141\x67\x65" => $ywmkwiwkosakssii["\x65\155\160\164\x79\x5f\155\x65\163\x73\141\x67\145"], "\150\x61\163\137\x63\x6f\x6d\x6d\145\156\x74" => false, "\x69\x73\x5f\x61\152\x61\170" => $mcgoysmkqsqooceq, self::qescuiwgsyuikume => $ywmkwiwkosakssii[self::qescuiwgsyuikume]]; if (!$moqewomugocaueis) { goto ucksaiwquekagyqe; } if (!(($cgkkqqgoqqmmwysq || $mcgoysmkqsqooceq) && $this->uiqcwsowwswommka())) { goto oymyqcoekqyuiguq; } $kuowggqsyksiyygi = $this->caokeucsksukesyo()->yagekskwwyqosqcs(); $weeomyummeocueyk = array_merge($ywmkwiwkosakssii["\x67\x65\164\x5f\143\x6f\155\155\x65\x6e\164\x73\137\x61\162\147\x73"], [self::kkcqmwgccaygggcu => $qawuqcsueakkgiio, self::awkcoioakcaougmq => self::omaksceqmigeaoko, self::eymwucuaaiiciymc => $kuowggqsyksiyygi->omkaowmygoqwsywq(), self::ciywsqoeiymemsys => self::eucymkqyykekuymy, self::eggygikowgywcayq => $moqewomugocaueis, self::wwcycgyaiaksckuk => $mqyaskyaekmkegmg]); $cwccwesgwckcgmei = $kuowggqsyksiyygi->ciugwooasaqcywas(ConvertArray::comkeiiwgwaqmcwe($weeomyummeocueyk)); $kcagcoeuiasswusq = $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ekysoioumkkwawwm([self::qaacaqioeyiuakeu => false, self::kkcqmwgccaygggcu => $qawuqcsueakkgiio, self::wwgusigoaksqmwsm => [$this, "\x79\x6d\x69\x63\163\x79\161\x65\x63\163\151\171\161\155\171\x63"]], $cwccwesgwckcgmei); if ($mcgoysmkqsqooceq) { goto gicmaqmuscawegie; } $qookweymeqawmcwo["\x70\x61\x67\151\156\x61\164\x69\x6f\156"] = $this->ocksiywmkyaqseou("\147\145\x74\137\143\x6f\x6d\x6d\x65\x6e\164\x5f\x70\141\x67\151\x6e\x61\164\x69\x6f\x6e", '', [self::qaacaqioeyiuakeu => false, self::eggygikowgywcayq => $moqewomugocaueis]); gicmaqmuscawegie: oymyqcoekqyuiguq: switch ($mqyaskyaekmkegmg) { case self::gmmygyiecgmggaam: $qookweymeqawmcwo["\x68\x61\x73\137\x63\x6f\155\x6d\145\x6e\164"] = !empty($cwccwesgwckcgmei); goto ayamomygygmgwgkg; case self::uouymeyqasaeckso: $qookweymeqawmcwo["\x68\141\x73\137\143\x6f\155\x6d\145\156\164"] = $seumokooiykcomco->gamoemyysmgugccu($moqewomugocaueis); goto ayamomygygmgwgkg; } gygqgauaceiuawkq: ayamomygygmgwgkg: $qookweymeqawmcwo[self::qiyqwyiiwykeccmo] = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->qmegicmsiwuuwysa($ywmkwiwkosakssii[self::mswoacegomcucaik] ?? $moqewomugocaueis); ucksaiwquekagyqe: if (!$mcgoysmkqsqooceq || $cgkkqqgoqqmmwysq) { goto asqqqqakiagymemk; } if (!is_string($kcagcoeuiasswusq)) { goto iyeswoaqkaeggiiy; } $nsmgceoqaqogqmuw = $kcagcoeuiasswusq; iyeswoaqkaeggiiy: goto jkgouewqysmscmqs; asqqqqakiagymemk: $qookweymeqawmcwo[self::goumieeyyqigueiw] = $kcagcoeuiasswusq; $qookweymeqawmcwo["\163\x70\x69\156\x6e\145\162"] = $this->caokeucsksukesyo()->kugiyqykwaskawsc()->kqmkicmuscsgqeoi(["\164\x72\x61\x6e\163\x70\141\162\x65\x6e\164" => true, self::waguuiqqgsysuukq => "\x32\170"]); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\154\151\x73\x74", $qookweymeqawmcwo); jkgouewqysmscmqs: return $nsmgceoqaqogqmuw; } public function ymicsyqecsiyqmyc($comment, $ywmkwiwkosakssii = [], $gquaqgsmiuqsaoum = 0) { $GLOBALS[self::COMMENT] = $comment; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $oiegiwogmwmawkeo = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\141\x76\141\164\141\162\137\163\x69\x7a\x65", "\163\x6d\x61\154\x6c", false); echo $this->iuygowkemiiwqmiw("\151\x74\x65\155", ["\144\145\x70\164\x68" => $gquaqgsmiuqsaoum, self::gouqcwikiiygyasc => $this->caokeucsksukesyo()->yagekskwwyqosqcs()->iooowgsqoyqseyuu($comment), self::TEXT => $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ykgcioecqcwwkime($comment), self::imywcsggckkcywgk => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::kkcqmwgccaygggcu, 1), self::okeuagwgwkmiokac => $ywmkwiwkosakssii, "\164\151\155\x65\137\x6d\141\x73\x6b" => __("\x25\x31\x24\163\x20\141\x74\40\x25\62\x24\163", PR__CMN__COVER), "\x6d\141\x78\137\144\x65\x70\x74\150" => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\x6d\141\170\x5f\x64\145\x70\x74\150"), "\162\145\x70\x6c\x79\137\x69\x63\157\x6e" => IconInterface::wgcuaiqkaoqksgqo, "\x61\x76\141\164\141\162\x5f\163\x69\172\x65" => $oiegiwogmwmawkeo, self::COMMENT => $comment, self::eggygikowgywcayq => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::eggygikowgywcayq)]); } }
