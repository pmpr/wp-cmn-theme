<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6575fee4ecf8c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Interfaces\IconInterface; use WP_Post; use WP_Term; class Frontend extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x66\164\x65\x72\137\163\x65\164\x75\x70\137\164\150\x65\155\x65", [$this, "\153\147\153\x6d\x77\165\x63\x6d\x6b\143\x71\141\x6b\x73\x6d\157"]); $this->waqewsckuayqguos(self::ukyommesgeqqcayq . "\154\151\163\164\x5f\x72\145\156\144\x65\x72", [$this, "\162\x65\156\144\x65\x72"])->waqewsckuayqguos(self::ukyommesgeqqcayq . "\x66\157\162\155\x5f\141\156\x64\x5f\154\151\163\164\x5f\x72\145\156\x64\145\x72", [$this, "\x69\163\x69\x79\x61\x73\171\165\x61\x6b\165\153\x73\151\141\x6d"]); parent::wigskegsqequoeks(); } public function kgkmwucmkcqaksmo() { if (!Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(SettingSection::ayumqueugowuywqs)) { goto ooysmgyeqoiesgqm; } $this->cecaguuoecmccuse("\147\x65\164\x5f\141\166\141\x74\141\162", [$this, "\x61\171\163\x65\151\x75\155\157\x61\157\x75\x61\x63\161\x63\165"], 10, 3)->cecaguuoecmccuse("\147\x65\164\137\x63\157\155\x6d\x65\x6e\164\137\x61\x75\x74\x68\157\x72", [$this, "\155\x65\x75\157\145\165\153\151\167\153\x65\x75\x6d\x67\x67\153"], 10, 2); ooysmgyeqoiesgqm: } public function isiyasyuakuksiam(array $ywmkwiwkosakssii = []) { if (!($icwicymcioeyeyek = $this->uiqcwsowwswommka())) { goto kwoyiysciqumswcy; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $icwicymcioeyeyek); echo $this->iuygowkemiiwqmiw("\146\157\x72\155\x5f\141\x6e\144\x5f\x6c\x69\163\x74", [self::qescuiwgsyuikume => __("\x43\157\x6d\x6d\x65\156\x74\x20\x66\x6f\x72\x6d\x20\x61\x6e\x64\40\x6c\151\x73\x74", PR__CMN__COVER), "\143\157\x6d\x6d\145\x6e\164\x5f\154\151\x73\164" => $this->ckgkesscwwgyimsq('', $ywmkwiwkosakssii), "\143\x6f\155\x6d\x65\x6e\164\x5f\x66\157\162\x6d" => Form::symcgieuakksimmu()->wgqqgewcmcemoewo([self::qaacaqioeyiuakeu => false]), self::eggygikowgywcayq => $ywmkwiwkosakssii[self::eggygikowgywcayq]]); kwoyiysciqumswcy: } public function render(array $ywmkwiwkosakssii = []) { echo $this->ckgkesscwwgyimsq('', $ywmkwiwkosakssii); } public function uuyycaeqcawcaiqe($comment) : bool { $kuowggqsyksiyygi = $this->caokeucsksukesyo()->yagekskwwyqosqcs(); $cuakwceieagskoaa = false; $uagwmwoawiwkycao = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(SettingSection::osoyyuwymacswyum, []); $comment = $kuowggqsyksiyygi->get($comment); if (!($comment && $uagwmwoawiwkycao && $comment->comment_parent)) { goto aaogeemgkogagkai; } $mkucggyaiaukqoce = $kuowggqsyksiyygi->msyqmssukoqkqkau($comment); $cuakwceieagskoaa = $mkucggyaiaukqoce && $this->caokeucsksukesyo()->issssuygyewuaswa()->esmswawesuyogmik($uagwmwoawiwkycao, $mkucggyaiaukqoce); aaogeemgkogagkai: return $cuakwceieagskoaa; } public function meuoeukiwkeumggk($qscaoekmoooeuyqg, $comment) { if (!$this->uuyycaeqcawcaiqe($comment)) { goto qqmmycmsoqegcqqw; } $qscaoekmoooeuyqg = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(self::NAME); qqmmycmsoqegcqqw: return $qscaoekmoooeuyqg; } public function ayseiumoaouacqcu($mowgokyeuymuwiew, $comment, $oiegiwogmwmawkeo) { if (!$this->uuyycaeqcawcaiqe($comment)) { goto ukogwqiuuuakkawy; } $uouuguwawimuemic = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(SettingSection::aammuqouwoakgwgq, 0); if (!$uouuguwawimuemic) { goto magymcqykamwqigw; } $oiegiwogmwmawkeo = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\141\x76\x61\x74\141\162\137\163\x69\172\x65", $oiegiwogmwmawkeo, false); if (!is_numeric($oiegiwogmwmawkeo)) { goto isqwwmikecauwyuc; } $oiegiwogmwmawkeo = [$oiegiwogmwmawkeo, $oiegiwogmwmawkeo]; isqwwmikecauwyuc: $wwgucssaecqekuek = ["\143\x6c\x61\163\163" => $mowgokyeuymuwiew ? $this->caokeucsksukesyo()->gkksucgseqqemesc()->waecsyqmwascmqoa($mowgokyeuymuwiew, "\151\155\x67", "\x63\x6c\x61\x73\163") : '', "\x61\x6c\x74" => __("\101\x75\164\x68\x6f\162\40\x4c\157\147\157", PR__CMN__COVER)]; if (!($uouuguwawimuemic = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->qaeeusqkgwagwaqc($uouuguwawimuemic, $oiegiwogmwmawkeo, $wwgucssaecqekuek))) { goto oiiqqgyqmggyiums; } $mowgokyeuymuwiew = $uouuguwawimuemic; oiiqqgyqmggyiums: magymcqykamwqigw: ukogwqiuuuakkawy: return $mowgokyeuymuwiew; } public function ckgkesscwwgyimsq($nsmgceoqaqogqmuw = '', array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [self::eggygikowgywcayq => null, self::wwcycgyaiaksckuk => self::uouymeyqasaeckso, self::kkcqmwgccaygggcu => 1, self::qescuiwgsyuikume => __("\x43\x6f\x6d\x6d\145\156\x74", PR__CMN__COVER), "\151\163\x5f\x61\152\141\x78" => false, "\x69\x73\137\162\145\x6e\144\145\x72" => true, "\144\x61\164\x65\x5f\146\x6f\162\x6d\x61\x74" => $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(), "\x65\155\160\x74\x79\x5f\155\x65\163\x73\141\147\145" => __("\x54\150\145\x72\x65\x20\141\162\145\x20\x6e\x6f\40\143\157\155\x6d\145\156\x74\163\x20\x79\145\x74\56", PR__CMN__COVER), "\147\x65\x74\x5f\143\x6f\x6d\155\145\156\164\x73\x5f\141\162\147\163" => [], "\143\157\155\155\145\156\x74\x5f\167\x61\151\x74\x69\x6e\x67\137\x74\x65\170\164" => __("\131\x6f\x75\162\40\x63\157\x6d\x6d\145\156\164\x20\x69\x73\x20\141\x77\141\151\x74\151\156\147\40\x6d\157\144\x65\x72\x61\x74\151\157\156\56", PR__CMN__COVER)]); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $ywmkwiwkosakssii = (array) $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\x72\x65\156\x64\x65\162\x5f\x61\162\147\x73", $ywmkwiwkosakssii, $nsmgceoqaqogqmuw); $qawuqcsueakkgiio = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::kkcqmwgccaygggcu); $moqewomugocaueis = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::eggygikowgywcayq); $mqyaskyaekmkegmg = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::wwcycgyaiaksckuk); $kcagcoeuiasswusq = ''; $mcgoysmkqsqooceq = false; $cgkkqqgoqqmmwysq = true; $cwccwesgwckcgmei = []; $qookweymeqawmcwo = ["\145\155\x70\164\171\x5f\x6d\145\163\163\141\x67\145" => $ywmkwiwkosakssii["\x65\x6d\160\x74\171\137\x6d\x65\x73\163\141\147\145"], "\150\x61\x73\x5f\143\157\x6d\x6d\x65\x6e\x74" => false, "\151\x73\137\141\152\141\170" => $mcgoysmkqsqooceq, self::qescuiwgsyuikume => $ywmkwiwkosakssii[self::qescuiwgsyuikume]]; if (!$moqewomugocaueis) { goto ucksaiwquekagyqe; } if (!(($cgkkqqgoqqmmwysq || $mcgoysmkqsqooceq) && $this->uiqcwsowwswommka())) { goto oymyqcoekqyuiguq; } $kuowggqsyksiyygi = $this->caokeucsksukesyo()->yagekskwwyqosqcs(); $weeomyummeocueyk = array_merge($ywmkwiwkosakssii["\x67\x65\164\x5f\x63\x6f\155\155\x65\156\x74\163\137\x61\x72\147\163"], [self::kkcqmwgccaygggcu => $qawuqcsueakkgiio, self::awkcoioakcaougmq => self::omaksceqmigeaoko, self::eymwucuaaiiciymc => $kuowggqsyksiyygi->omkaowmygoqwsywq(), self::ciywsqoeiymemsys => self::eucymkqyykekuymy, self::eggygikowgywcayq => $moqewomugocaueis, self::wwcycgyaiaksckuk => $mqyaskyaekmkegmg]); $cwccwesgwckcgmei = $kuowggqsyksiyygi->ciugwooasaqcywas(ConvertArray::comkeiiwgwaqmcwe($weeomyummeocueyk)); $kcagcoeuiasswusq = $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ekysoioumkkwawwm([self::qaacaqioeyiuakeu => false, self::kkcqmwgccaygggcu => $qawuqcsueakkgiio, self::wwgusigoaksqmwsm => [$this, "\x79\x6d\151\143\163\x79\x71\x65\x63\163\x69\171\x71\155\x79\x63"]], $cwccwesgwckcgmei); if ($mcgoysmkqsqooceq) { goto gicmaqmuscawegie; } $qookweymeqawmcwo["\160\x61\x67\x69\156\x61\x74\x69\x6f\x6e"] = $this->ocksiywmkyaqseou("\x67\x65\x74\137\143\157\155\155\x65\x6e\x74\137\160\141\147\x69\156\141\x74\x69\157\x6e", '', [self::qaacaqioeyiuakeu => false, self::eggygikowgywcayq => $moqewomugocaueis]); gicmaqmuscawegie: oymyqcoekqyuiguq: switch ($mqyaskyaekmkegmg) { case self::gmmygyiecgmggaam: $qookweymeqawmcwo["\150\x61\x73\x5f\x63\x6f\x6d\155\145\x6e\x74"] = !empty($cwccwesgwckcgmei); goto ayamomygygmgwgkg; case self::uouymeyqasaeckso: $qookweymeqawmcwo["\150\x61\x73\x5f\x63\157\x6d\155\x65\x6e\x74"] = $seumokooiykcomco->gamoemyysmgugccu($moqewomugocaueis); goto ayamomygygmgwgkg; } gygqgauaceiuawkq: ayamomygygmgwgkg: $qookweymeqawmcwo[self::qiyqwyiiwykeccmo] = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->qmegicmsiwuuwysa($ywmkwiwkosakssii[self::mswoacegomcucaik] ?? $moqewomugocaueis); ucksaiwquekagyqe: if (!$mcgoysmkqsqooceq || $cgkkqqgoqqmmwysq) { goto asqqqqakiagymemk; } if (!is_string($kcagcoeuiasswusq)) { goto iyeswoaqkaeggiiy; } $nsmgceoqaqogqmuw = $kcagcoeuiasswusq; iyeswoaqkaeggiiy: goto jkgouewqysmscmqs; asqqqqakiagymemk: $qookweymeqawmcwo[self::goumieeyyqigueiw] = $kcagcoeuiasswusq; $qookweymeqawmcwo["\x73\160\x69\156\x6e\x65\162"] = $this->caokeucsksukesyo()->kugiyqykwaskawsc()->kqmkicmuscsgqeoi(["\x74\x72\x61\x6e\163\160\x61\x72\145\x6e\x74" => true, self::waguuiqqgsysuukq => "\62\x78"]); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x6c\x69\x73\x74", $qookweymeqawmcwo); jkgouewqysmscmqs: return $nsmgceoqaqogqmuw; } public function ymicsyqecsiyqmyc($comment, $ywmkwiwkosakssii = [], $gquaqgsmiuqsaoum = 0) { $GLOBALS[self::COMMENT] = $comment; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $oiegiwogmwmawkeo = $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . "\141\x76\x61\164\x61\162\x5f\163\x69\x7a\145", "\163\155\x61\x6c\x6c", false); echo $this->iuygowkemiiwqmiw("\151\164\145\x6d", ["\x64\x65\160\164\x68" => $gquaqgsmiuqsaoum, self::gouqcwikiiygyasc => $this->caokeucsksukesyo()->yagekskwwyqosqcs()->iooowgsqoyqseyuu($comment), self::TEXT => $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ykgcioecqcwwkime($comment), self::imywcsggckkcywgk => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::kkcqmwgccaygggcu, 1), self::okeuagwgwkmiokac => $ywmkwiwkosakssii, "\164\151\155\145\137\x6d\x61\163\153" => __("\45\x31\x24\x73\x20\x61\164\x20\x25\62\x24\x73", PR__CMN__COVER), "\x6d\x61\x78\x5f\144\x65\160\164\x68" => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\155\x61\170\x5f\144\145\160\164\150"), "\x72\x65\160\x6c\x79\x5f\x69\143\x6f\156" => IconInterface::wgcuaiqkaoqksgqo, "\x61\x76\141\x74\141\162\137\x73\x69\172\x65" => $oiegiwogmwmawkeo, self::COMMENT => $comment, self::eggygikowgywcayq => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::eggygikowgywcayq)]); } }
