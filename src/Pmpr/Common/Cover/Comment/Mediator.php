<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b702ccb594e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Cover\Comment\Traits\CommonTrait; use Pmpr\Common\Foundation\CPT; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Comment_Query; use WP_Post; use WP_Term; class Mediator extends CPT { use CommonTrait; const geiiqwmswmekakma = 'comment_term_ID'; const qgyumcuiesiaosqs = 'comment_post_ID'; const yomcesuuyoqqgycw = 'comment_mediator'; public function mgoeqkosywwaoqyw() { parent::mgoeqkosywwaoqyw(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->musuokisgmmamoua(Constants::goumieeyyqigueiw)->usuqmwksoeaayaig(self::yomcesuuyoqqgycw)->muuwuqssqkaieqge(__('Comment Mediators', PR__CMN__COVER))->guiaswksukmgageq(__('Comment Mediator', PR__CMN__COVER)); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea'])->qcsmikeggeemccuu('pre_get_comments', [$this, 'gcqoemeuqgskeiek']); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('preprocess_comment', [$this, 'wykioicgaeiyuiqy'])->cecaguuoecmccuse('comment_id_fields', [$this, 'gsoqwmkcgkqakqie'])->cecaguuoecmccuse('get_pagenum_link', [$this, 'cmoogokogseqogsc'])->cecaguuoecmccuse('wp_list_table_class_name', [$this, 'kkcgskieciaoscqe'])->cecaguuoecmccuse('the_title', [$this, 'uqqiuasgeyeqawoo'], 10, 2)->cecaguuoecmccuse('post_type_link', [$this, 'ssosoiaokqmiqymw'], 10, 2)->cecaguuoecmccuse('comment_post_redirect', [$this, 'eusacuikkcacimog'], 10, 2)->cecaguuoecmccuse('get_comments_number', [$this, 'ymoqoqmgksagyciy'], 10, 2)->cecaguuoecmccuse('comment_reply_link', [$this, 'oemuwqsksyuocgim'], 10, 4); parent::kgquecmsgcouyaya(); } public function init() { $keywesgaqieiugqe = (array) $this->weysguygiseoukqw(Setting::ekegwsoioemeckwo, []); foreach ($keywesgaqieiugqe as $kesssewsiegssiya) { $this->cecaguuoecmccuse("{$kesssewsiegssiya}_rewrite_rules", [$this, 'uiygsusimwugqomy']); } parent::init(); } public function yeyiguyegmmyusea() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy()) { if (!$this->ammoiysyaassswky()) { $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->insert($this->miwqiiqeegeqcwis(), [Constants::siwwqayqwykwqwoy => $this->qcgakseyaikigqco(), Constants::uiaeiwkkmoayqasu => 'comment-mediator', Constants::gikuasuikwemyqoq => Constants::wmmucsiyiyusmssm]); } } } public function cmoogokogseqogsc($iwywmkygwewiamwm) { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->migkyseymeomymmy()) { global $wp_rewrite; $iwywmkygwewiamwm = preg_replace("%{$wp_rewrite->comments_pagination_base}-\\d+/%", '', $iwywmkygwewiamwm); } return $iwywmkygwewiamwm; } public function uiygsusimwugqomy($acqqmqmcquukaqsc) { global $wp_rewrite; $kesssewsiegssiya = str_replace('_rewrite_rules', '', $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->umaeoegyykkkqmia()); if ($aimykiqoaisoqsig = $wp_rewrite->get_extra_permastruct($kesssewsiegssiya)) { $aiowsaccomcoikus = $kesssewsiegssiya; if ($kesssewsiegssiya === Constants::ocsomysosuqaimuc) { $aiowsaccomcoikus = Constants::qeueagcuyogwwyky; } $eouekqmooogkoqoo = ltrim(str_replace("%{$kesssewsiegssiya}%", "([^/]+)/{$wp_rewrite->comments_pagination_base}-([0-9]{1,})/?\$", $aimykiqoaisoqsig), '/'); $acqqmqmcquukaqsc = [$eouekqmooogkoqoo => 'index.php?' . $aiowsaccomcoikus . '=$matches[1]&cpage=$matches[2]'] + $acqqmqmcquukaqsc; } return $acqqmqmcquukaqsc; } public function ymoqoqmgksagyciy($eusockqasqqmoess, $gcqseksiskwueksc) { $useksmwkuswkwcqg = $this->miwqiiqeegeqcwis(); if ($useksmwkuswkwcqg === $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)) { global $comment; $ucicuwcaawugkseg = $this->msaiieqagyoqqamc($comment); if (!$ucicuwcaawugkseg) { $ucicuwcaawugkseg = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->iooowgsqoyqseyuu(); } if ($ucicuwcaawugkseg) { $gaeqamemwmwsyukm = $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ciugwooasaqcywas([Constants::qiyqwyiiwykeccmo => true, Constants::ciywsqoeiymemsys => Constants::eucymkqyykekuymy, Constants::cuoyscoiacswuauq => [[Constants::ascagqcquwgmygkm => $useksmwkuswkwcqg, Constants::ciyoccqkiamemcmm => $ucicuwcaawugkseg, Constants::ykemsyouoqyoaysg => '=']]]); if ($gaeqamemwmwsyukm > 0) { $eusockqasqqmoess = $gaeqamemwmwsyukm; } else { $eusockqasqqmoess = 0; } } } return $eusockqasqqmoess; } public function uqqiuasgeyeqawoo($meqocwsecsywiiqs, $gcqseksiskwueksc) { $useksmwkuswkwcqg = $this->miwqiiqeegeqcwis(); if ($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc) === $useksmwkuswkwcqg) { global $comment; if ($ucicuwcaawugkseg = $this->msaiieqagyoqqamc($comment)) { $meqocwsecsywiiqs = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->qcgakseyaikigqco($ucicuwcaawugkseg); } } return $meqocwsecsywiiqs; } public function ssosoiaokqmiqymw($migiiksoiymissge, $post) { $useksmwkuswkwcqg = $this->miwqiiqeegeqcwis(); if ($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($post) === $useksmwkuswkwcqg) { global $comment; if ($ucicuwcaawugkseg = $this->msaiieqagyoqqamc($comment)) { $migiiksoiymissge = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->qmgcisuuikgmqcsu($ucicuwcaawugkseg); } } return $migiiksoiymissge; } public function oemuwqsksyuocgim($iwywmkygwewiamwm, $ywmkwiwkosakssii, $comment, $post) { if ($ucicuwcaawugkseg = $this->msaiieqagyoqqamc($comment)) { $iwywmkygwewiamwm = str_replace($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($post), $this->caokeucsksukesyo()->kckogqkiycqeumoa()->qmgcisuuikgmqcsu($ucicuwcaawugkseg), $iwywmkygwewiamwm); } return $iwywmkygwewiamwm; } public function gcqoemeuqgskeiek($gqgemcmoicmgaqie) { if ($gqgemcmoicmgaqie instanceof WP_Comment_Query) { $kkeqqkkkqwkocsyu = $gqgemcmoicmgaqie->query_vars; if (isset($kkeqqkkkqwkocsyu[Constants::eggygikowgywcayq], $kkeqqkkkqwkocsyu[Constants::wwcycgyaiaksckuk])) { $uusmaiomayssaecw = $kkeqqkkkqwkocsyu[Constants::wwcycgyaiaksckuk] === Constants::uouymeyqasaeckso ? Constants::kqigmeickowqiiyy : Constants::ooqggksagkoaeeke; $kkeqqkkkqwkocsyu[$uusmaiomayssaecw] = $kkeqqkkkqwkocsyu[Constants::eggygikowgywcayq]; } else { $mksyucucyswaukig = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->imgymusqgccqsqqq(); if ($mksyucucyswaukig instanceof WP_Term) { $kkeqqkkkqwkocsyu[Constants::ooqggksagkoaeeke] = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->iooowgsqoyqseyuu($mksyucucyswaukig); } } if (isset($kkeqqkkkqwkocsyu[Constants::ooqggksagkoaeeke])) { $kkeqqkkkqwkocsyu[Constants::kqigmeickowqiiyy] = $this->qiiysqukmimggqcq(); $oyiyuuoguwwaksaa = [Constants::ascagqcquwgmygkm => $this->miwqiiqeegeqcwis(), Constants::ciyoccqkiamemcmm => $kkeqqkkkqwkocsyu[Constants::ooqggksagkoaeeke], Constants::ykemsyouoqyoaysg => '=']; if (!isset($kkeqqkkkqwkocsyu[Constants::cuoyscoiacswuauq]) || !is_array($kkeqqkkkqwkocsyu[Constants::cuoyscoiacswuauq])) { $kkeqqkkkqwkocsyu[Constants::cuoyscoiacswuauq] = []; } $kkeqqkkkqwkocsyu[Constants::cuoyscoiacswuauq][] = $oyiyuuoguwwaksaa; } $gqgemcmoicmgaqie->query_vars = $kkeqqkkkqwkocsyu; } return $gqgemcmoicmgaqie; } public function kkcgskieciaoscqe($uucsugkcsciausuk) { if ('WP_Comments_List_Table' == $uucsugkcsciausuk) { $uucsugkcsciausuk = ListTable::class; } return $uucsugkcsciausuk; } public function eusacuikkcacimog($igscmsiuisqaqwkk, $comment) { if ($ucicuwcaawugkseg = $this->msaiieqagyoqqamc($comment)) { $igscmsiuisqaqwkk = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->qmgcisuuikgmqcsu($ucicuwcaawugkseg); if (!$igscmsiuisqaqwkk) { $igscmsiuisqaqwkk = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->keguiwkaiweywekc(); } } return $igscmsiuisqaqwkk; } public function wykioicgaeiyuiqy($scoskggikaieaaeg) { if ($gcqseksiskwueksc = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($scoskggikaieaaeg, self::qgyumcuiesiaosqs)) { if ($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc) === $this->miwqiiqeegeqcwis()) { $ucicuwcaawugkseg = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(self::geiiqwmswmekakma); if (!$ucicuwcaawugkseg) { $ucicuwcaawugkseg = $this->msaiieqagyoqqamc($this->caokeucsksukesyo()->yagekskwwyqosqcs()->qqiwsumoyiukmgco($scoskggikaieaaeg)); } if (!isset($scoskggikaieaaeg['comment_meta'])) { $scoskggikaieaaeg['comment_meta'] = []; } if ($ucicuwcaawugkseg) { $scoskggikaieaaeg['comment_meta'][$this->miwqiiqeegeqcwis()] = $ucicuwcaawugkseg; } } } return $scoskggikaieaaeg; } public function gsoqwmkcgkqakqie($nsmgceoqaqogqmuw) { $mksyucucyswaukig = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->imgymusqgccqsqqq(); if ($mksyucucyswaukig instanceof WP_Term) { $nsmgceoqaqogqmuw .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq('input', [Constants::squoamkioomemiyi => Constants::soqecysmeyiyyyys, Constants::NAME => self::geiiqwmswmekakma, Constants::ciyoccqkiamemcmm => $this->caokeucsksukesyo()->kckogqkiycqeumoa()->iooowgsqoyqseyuu($mksyucucyswaukig), Constants::gouqcwikiiygyasc => self::geiiqwmswmekakma]); } return $nsmgceoqaqogqmuw; } public function ammoiysyaassswky(string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) { $igqsaukqcqscimok = null; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($oammesyieqmwuwyi = $seumokooiykcomco->ciugwooasaqcywas($this->miwqiiqeegeqcwis())) { $igqsaukqcqscimok = array_pop($oammesyieqmwuwyi); switch ($aqykuigiuwmmcieu) { case Constants::gouqcwikiiygyasc: $igqsaukqcqscimok = $seumokooiykcomco->iooowgsqoyqseyuu($igqsaukqcqscimok); break; default: } } return $igqsaukqcqscimok; } public function qiiysqukmimggqcq() { return $this->ammoiysyaassswky(Constants::gouqcwikiiygyasc); } }
