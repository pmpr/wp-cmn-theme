<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4a7eec562             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\Attribute; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Checkbox; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use WC_Product_Attribute; class LocalAttribute extends BaseAttribute { public function __construct() { $this->name = "\154\157\x63\141\x6c"; parent::__construct(); } public function wigskegsqequoeks() { $this->koaegcswmcqsiykq("\167\157\157\143\157\x6d\155\145\162\143\145\137\163\141\166\x65\137\x61\x74\164\x72\x69\x62\x75\164\x65\163", [$this, "\x73\x61\x76\145"], 5)->qcsmikeggeemccuu("\167\157\x6f\143\157\x6d\155\145\x72\143\145\x5f\x61\146\164\145\162\137\x70\162\157\144\165\143\164\137\x61\x74\x74\x72\x69\x62\x75\164\x65\137\163\x65\x74\x74\151\156\x67\163", [$this, "\x69\165\141\165\143\165\x6f\157\x6b\x67\x6f\x71\x69\151\151\x6f"], 10, 2); parent::wigskegsqequoeks(); } public function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->scemgqiggsykoisk($ymkomoccmymcoiea->get_name()); } public function save() { if ($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->mquqkouuagswyuuk("\x73\141\x76\x65\55\x61\164\164\162\151\x62\165\x74\145\163", "\163\x65\x63\165\162\151\x74\x79")) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); parse_str($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::uiwqcumqkgikqyue), $icwicymcioeyeyek); $aiwgcyaewwagisoo = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, "\x61\x74\x74\x72\151\x62\165\164\x65\137\x6e\x61\x6d\145\x73"); if ($icwicymcioeyeyek && $aiwgcyaewwagisoo) { $product = $this->aqasygcsqysmmyke(); $ikgwqyuyckaewsow = array_merge($this->ugmceccgwaaaigiy($product), GlobalAttribute::symcgieuakksimmu()->ugmceccgwaaaigiy($product)); [$ikgwqyuyckaewsow, $icwicymcioeyeyek] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($ikgwqyuyckaewsow, $icwicymcioeyeyek); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $qqswgiawgeaeoecu = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, $aokagokqyuysuksm, []); if (is_array($qqswgiawgeaeoecu) && $qqswgiawgeaeoecu) { foreach ($aiwgcyaewwagisoo as $momcykaoccoymeig => $ymqmyyeuycgmigyo) { $uusmaiomayssaecw = $aokagokqyuysuksm . $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->scemgqiggsykoisk($ymqmyyeuycgmigyo); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($qqswgiawgeaeoecu, $momcykaoccoymeig); if ($eqgoocgaqwqcimie) { $seumokooiykcomco->ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $product); } else { $seumokooiykcomco->smqukgcyacswysqa($uusmaiomayssaecw, $product); } } } } } } } } public function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw($qqgocisyeuuqmcwc . $ymkomoccmymcoiea, $this->aqasygcsqysmmyke(), true); } public function iuaucuookgoqiiio($ymkomoccmymcoiea, $momcykaoccoymeig) { if ($ymkomoccmymcoiea instanceof WC_Product_Attribute) { $product = $this->aqasygcsqysmmyke(); $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($product); if (!$ymkomoccmymcoiea->is_taxonomy()) { $ikgwqyuyckaewsow = array_merge($ikgwqyuyckaewsow, GlobalAttribute::symcgieuakksimmu()->ugmceccgwaaaigiy($product)); } if ($ikgwqyuyckaewsow = $this->uiwgikskqiusqook($ikgwqyuyckaewsow, $this->uqsmmauywmsuqais($ymkomoccmymcoiea), $momcykaoccoymeig)) { $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow); $nsmgceoqaqogqmuw = ''; foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aiowsaccomcoikus->ggiaseqygioygumq("{$aiowsaccomcoikus->mwikyscisascoeea()}\x5b{$momcykaoccoymeig}\x5d"); $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render(); } } echo $this->iuygowkemiiwqmiw("\146\157\162\x6d", [Constants::gouqcwikiiygyasc => $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(5), Constants::qescuiwgsyuikume => __("\103\x75\163\164\x6f\155\40\106\x69\145\154\x64\x73", PR__CMN__COVER), Constants::ymckmcsiymwqucoq => $nsmgceoqaqogqmuw, "\x63\x61\x6e\137\141\x64\144\137\152\x73" => $this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(), "\x61\154\145\x72\164\x5f\x6d\145\x73\163\141\x67\x65" => __("\x43\x61\x6e\x20\156\157\164\40\x72\145\x6e\x64\x65\x72\x20\146\x69\x65\x6c\144\x73\40\143\157\x72\162\x65\x63\164\x6c\x79\54\x20\160\x6c\145\141\x73\145\x20\x72\145\x66\x72\145\163\150\x20\160\141\x67\145\x20\x6d\x61\x6e\x75\x61\x6c\x6c\x79\x2e", PR__CMN__COVER), "\163\165\143\x63\x65\163\x73\137\x6d\x65\163\x73\141\147\145" => __("\146\x69\x65\154\x64\x73\40\154\x6f\141\x64\145\144\40\143\x6f\x72\162\x65\143\x74\x6c\x79\x2e", PR__CMN__COVER)]); } } } public function uiwgikskqiusqook($ikgwqyuyckaewsow = [], $ymqmyyeuycgmigyo = '', $momcykaoccoymeig = 0) : array { if ($ikgwqyuyckaewsow) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); parse_str($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::uiwqcumqkgikqyue), $icwicymcioeyeyek); $product = $this->aqasygcsqysmmyke(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea(); $eqgoocgaqwqcimie = false; if ($icwicymcioeyeyek && isset($icwicymcioeyeyek[$uusmaiomayssaecw])) { if ($aiowsaccomcoikus instanceof Checkbox) { $eqgoocgaqwqcimie = isset($icwicymcioeyeyek[$uusmaiomayssaecw][$momcykaoccoymeig]); } else { $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($icwicymcioeyeyek[$uusmaiomayssaecw], $momcykaoccoymeig, $icwicymcioeyeyek[$uusmaiomayssaecw]); } } else { if ($product) { $eqgoocgaqwqcimie = $this->qooeaookuemoqecm($uusmaiomayssaecw, $ymqmyyeuycgmigyo); } } $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); } } } return $ikgwqyuyckaewsow; } }
