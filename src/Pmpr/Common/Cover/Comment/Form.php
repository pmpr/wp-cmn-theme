<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b702ccb594e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Comment; use Pmpr\Common\Foundation\Interfaces\Constants; class Form extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('comment_form_after', [$this, 'umawqkgmmckyygyk'])->qcsmikeggeemccuu('comment_form_before', [$this, 'muaowgssocuyksym'])->qcsmikeggeemccuu('set_comment_cookies', [$this, 'cuomeiwckekemywm'], 10, 2); $this->waqewsckuayqguos('before_enqueue_frontend_assets', [$this, 'enqueue'])->waqewsckuayqguos(self::ukyommesgeqqcayq . 'form_render', [$this, 'render']); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('comment_form_defaults', [$this, 'kmgwicqeicuqoooy'], 99)->cecaguuoecmccuse('comment_form_default_fields', [$this, 'ukyoyigeiaccugag'], 99)->cecaguuoecmccuse('comment_post_redirect', [$this, 'qkskgwugqcimkwcq'], 999, 2)->cecaguuoecmccuse('woocommerce_product_review_comment_form_args', [$this, 'kmgwicqeicuqoooy'], 99); $this->aqaqisyssqeomwom(self::ukyommesgeqqcayq . 'form_has_extra_field', [$this, 'scwckuwuussmcwku']); } public function enqueue() { if ($this->kuqogciwkswmckgw() && $this->uiqcwsowwswommka()) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, 'comment', 'comment.js')->simswskycwagoeqy())->qkqeooqcomucuwyk($this, 'comment', [Constants::wyucqaeuuqkesque => Ajax::myikkigscysoykgy, 'cancel_reply' => $this->iuygowkemiiwqmiw('cancel_reply', ['text' => __('Cancel Reply', PR__CMN__COVER)])]); } } public function kmgwicqeicuqoooy($ywmkwiwkosakssii = []) : array { $aeaqgysgaeowagug = $this->caokeucsksukesyo()->kugiyqykwaskawsc()->qoeiescseggagsqs('%2$s')->ooqqgmyocscgmyae()->gswweykyogmsyawy('%4$s')->usuqmwksoeaayaig('%1$s')->qigsyyqgewgskemg('%3$s')->igmaewykumgwoaoy('form', 'commentform')->ckccqugcgucieugo()->ssseuumiskesuiss()->render(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw([Constants::qaacaqioeyiuakeu => true, 'has_rating' => true, 'has_cookie' => true, 'class_form' => 'comment-form', 'class_submit' => 'comment-submit', 'label_submit' => __('Submit', PR__CMN__COVER), 'submit_field' => $swqimwqeweekeusq->gusouagusgyoaeya('%1$s %2$s', ['class' => 'form-submit']), 'submit_button' => $aeaqgysgaeowagug, 'cancel_reply_link' => __('Cancel reply', PR__CMN__COVER), 'title_reply_after' => '</div>', 'comment_notes_before' => '', 'title_reply_before' => $swqimwqeweekeusq->iaaacsuskiakkwui('', ['class' => 'comment-reply-title', Constants::gouqcwikiiygyasc => 'reply-title']), Constants::ayscagukkeoucmoe => true], $ywmkwiwkosakssii); $ywmkwiwkosakssii = (array) $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . 'form_args', $ywmkwiwkosakssii); if ($this->weysguygiseoukqw(Setting::issmqgeeogwuokqa)) { $wkcwesaqcgakkuos = $this->weysguygiseoukqw(Setting::weamucukagocwego); $ywmkwiwkosakssii['title_reply_after'] = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, 'title_reply_after') . $this->kyycsmkmussgaoou($wkcwesaqcgakkuos); $wigioeoyyusmuuaw = 'collapse'; if (!$wkcwesaqcgakkuos) { $wigioeoyyusmuuaw = ' show'; } $ywmkwiwkosakssii = (array) $swqimwqeweekeusq->igmaewykumgwoaoy($ywmkwiwkosakssii, 'class_form', $wigioeoyyusmuuaw); } return $ywmkwiwkosakssii; } public function muaowgssocuyksym() { ob_start(); } public function ukyoyigeiaccugag($ikgwqyuyckaewsow) { $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($ikgwqyuyckaewsow, 'cookies'); return $ikgwqyuyckaewsow; } public function render(array $ywmkwiwkosakssii = []) { if ($icwicymcioeyeyek = $this->uiqcwsowwswommka()) { $this->ewcsyqaaigkicgse('render_notices', self::cqmeioumqiogmuog); $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->eaoumsseceiowgsk($ywmkwiwkosakssii, $icwicymcioeyeyek[Constants::mswoacegomcucaik]); } } public function umawqkgmmckyygyk() { $uamcoiueqaamsqma = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui('', ['class' => 'message', Constants::gouqcwikiiygyasc => 'comment_form_message']); echo $this->ocksiywmkyaqseou(self::ukyommesgeqqcayq . 'form_html', $uamcoiueqaamsqma . ob_get_clean()); } public function wgqqgewcmcemoewo(array $ywmkwiwkosakssii = []) { ob_start(); $this->render($ywmkwiwkosakssii); return ob_get_clean(); } public function scwckuwuussmcwku($umuecysoywoumgwo) : bool { return $umuecysoywoumgwo && !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum(); } public function kyycsmkmussgaoou(bool $wkcwesaqcgakkuos = false) : string { return $this->iuygowkemiiwqmiw('toggle_form', ['collapsible_onload' => $wkcwesaqcgakkuos, 'show_form_text' => __('Toggle Form', PR__CMN__COVER), 'target_form' => '#commentform']); } public function cuomeiwckekemywm($comment, $mkucggyaiaukqoce) { if ($this->kuqogciwkswmckgw()) { $uamcoiueqaamsqma = $this->ocksiywmkyaqseou('comment_post_success_message', sprintf(__('Dear %s, Your comment has been sent successfully.', PR__CMN__COVER), $this->caokeucsksukesyo()->issssuygyewuaswa()->ygwimyogyaqgumam($mkucggyaiaukqoce)), $comment, $mkucggyaiaukqoce); $this->caokeucsksukesyo()->kugiyqykwaskawsc()->oockkqiqsssakuug([Constants::gouqcwikiiygyasc => self::cqmeioumqiogmuog, Constants::squoamkioomemiyi => Constants::ckcawaoawwioqecq, Constants::ssmskyqgcmeiayco => $uamcoiueqaamsqma]); } } public function qkskgwugqcimkwcq($igscmsiuisqaqwkk, $comment) : string { if ($this->caokeucsksukesyo()->kwoycoqogoswycgg()->has(self::cqmeioumqiogmuog)) { $igscmsiuisqaqwkk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($this->caokeucsksukesyo()->yagekskwwyqosqcs()->ayueggmoqeeukqmq($comment)) . '#' . self::cqmeioumqiogmuog; } return $igscmsiuisqaqwkk; } private function kuqogciwkswmckgw() : bool { return (bool) $this->ocksiywmkyaqseou('comment_ajaxify', true); } }
