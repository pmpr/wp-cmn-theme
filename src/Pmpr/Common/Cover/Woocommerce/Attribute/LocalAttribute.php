<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b702ccb594e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\Attribute; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Checkbox; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use WC_Product_Attribute; class LocalAttribute extends BaseAttribute { public function __construct() { $this->name = 'local'; parent::__construct(); } public function wigskegsqequoeks() { $this->koaegcswmcqsiykq('woocommerce_save_attributes', [$this, 'save'], 5)->qcsmikeggeemccuu('woocommerce_after_product_attribute_settings', [$this, 'iuaucuookgoqiiio'], 10, 2); parent::wigskegsqequoeks(); } public function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->scemgqiggsykoisk($ymkomoccmymcoiea->get_name()); } public function save() { if ($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->mquqkouuagswyuuk('save-attributes', 'security')) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); parse_str($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::uiwqcumqkgikqyue), $icwicymcioeyeyek); $aiwgcyaewwagisoo = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, 'attribute_names'); if ($icwicymcioeyeyek && $aiwgcyaewwagisoo) { $product = $this->aqasygcsqysmmyke(); $ikgwqyuyckaewsow = array_merge($this->ugmceccgwaaaigiy($product), GlobalAttribute::symcgieuakksimmu()->ugmceccgwaaaigiy($product)); [$ikgwqyuyckaewsow, $icwicymcioeyeyek] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($ikgwqyuyckaewsow, $icwicymcioeyeyek); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $qqswgiawgeaeoecu = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, $aokagokqyuysuksm, []); if (is_array($qqswgiawgeaeoecu) && $qqswgiawgeaeoecu) { foreach ($aiwgcyaewwagisoo as $momcykaoccoymeig => $ymqmyyeuycgmigyo) { $uusmaiomayssaecw = $aokagokqyuysuksm . $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->scemgqiggsykoisk($ymqmyyeuycgmigyo); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($qqswgiawgeaeoecu, $momcykaoccoymeig); if ($eqgoocgaqwqcimie) { $seumokooiykcomco->ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $product); } else { $seumokooiykcomco->smqukgcyacswysqa($uusmaiomayssaecw, $product); } } } } } } } } public function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw($qqgocisyeuuqmcwc . $ymkomoccmymcoiea, $this->aqasygcsqysmmyke(), true); } public function iuaucuookgoqiiio($ymkomoccmymcoiea, $momcykaoccoymeig) { if ($ymkomoccmymcoiea instanceof WC_Product_Attribute) { $product = $this->aqasygcsqysmmyke(); $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($product); if (!$ymkomoccmymcoiea->is_taxonomy()) { $ikgwqyuyckaewsow = array_merge($ikgwqyuyckaewsow, GlobalAttribute::symcgieuakksimmu()->ugmceccgwaaaigiy($product)); } if ($ikgwqyuyckaewsow = $this->uiwgikskqiusqook($ikgwqyuyckaewsow, $this->uqsmmauywmsuqais($ymkomoccmymcoiea), $momcykaoccoymeig)) { $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow); $nsmgceoqaqogqmuw = ''; foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aiowsaccomcoikus->ggiaseqygioygumq("{$aiowsaccomcoikus->mwikyscisascoeea()}[{$momcykaoccoymeig}]"); $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render(); } } echo $this->iuygowkemiiwqmiw('form', [Constants::gouqcwikiiygyasc => $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(5), Constants::qescuiwgsyuikume => __('Custom Fields', PR__CMN__COVER), Constants::ymckmcsiymwqucoq => $nsmgceoqaqogqmuw, 'can_add_js' => $this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(), 'alert_message' => __('Can not render fields correctly, please refresh page manually.', PR__CMN__COVER), 'success_message' => __('fields loaded correctly.', PR__CMN__COVER)]); } } } public function uiwgikskqiusqook($ikgwqyuyckaewsow = [], $ymqmyyeuycgmigyo = '', $momcykaoccoymeig = 0) : array { if ($ikgwqyuyckaewsow) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); parse_str($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::uiwqcumqkgikqyue), $icwicymcioeyeyek); $product = $this->aqasygcsqysmmyke(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea(); $eqgoocgaqwqcimie = false; if ($icwicymcioeyeyek && isset($icwicymcioeyeyek[$uusmaiomayssaecw])) { if ($aiowsaccomcoikus instanceof Checkbox) { $eqgoocgaqwqcimie = isset($icwicymcioeyeyek[$uusmaiomayssaecw][$momcykaoccoymeig]); } else { $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($icwicymcioeyeyek[$uusmaiomayssaecw], $momcykaoccoymeig, $icwicymcioeyeyek[$uusmaiomayssaecw]); } } else { if ($product) { $eqgoocgaqwqcimie = $this->qooeaookuemoqecm($uusmaiomayssaecw, $ymqmyyeuycgmigyo); } } $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); } } } return $ikgwqyuyckaewsow; } }
