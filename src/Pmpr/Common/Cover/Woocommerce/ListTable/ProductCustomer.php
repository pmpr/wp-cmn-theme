<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678a9fcb2eda4             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\ListTable; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPListTable; use WC_Product; class ProductCustomer extends WPListTable { const muaawyoqqgewygai = "\x6f\x72\144\x65\162\x73"; protected ?int $product = null; public function __construct($ywmkwiwkosakssii = []) { parent::__construct($this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::wyucqaeuuqkesque => false, "\160\x6c\165\x72\141\x6c" => __("\103\x75\163\x74\157\155\x65\x72\x73", PR__CMN__COVER), "\x73\151\156\x67\x75\x6c\141\162" => __("\x43\x75\x73\x74\x6f\155\x65\x72", PR__CMN__COVER)])); } public function aqasygcsqysmmyke() : ?int { return $this->product; } public function yiagkoqoiemmqssu() : ?WC_Product { return $this->caokeucsksukesyo()->aqasygcsqysmmyke()->get($this->aqasygcsqysmmyke()); } public function get_columns() : array { return [Constants::meksegaoamowuwoq => __("\x55\163\145\162", PR__CMN__COVER), self::muaawyoqqgewygai => __("\x4f\162\144\x65\x72\163", PR__CMN__COVER)]; } protected function column_default($igqsaukqcqscimok, $column_name) { switch ($column_name) { case Constants::meksegaoamowuwoq: $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $igqsaukqcqscimok[Constants::meksegaoamowuwoq]; $swqimwqeweekeusq->yuawgssgauywkiia($swqimwqeweekeusq->ciuuiyckmsygceis($yoiguusocukqeayg->ygwimyogyaqgumam($mkucggyaiaukqoce)), $yoiguusocukqeayg->yyykkcyiksewsoqy($mkucggyaiaukqoce)); break; case self::muaawyoqqgewygai: printf(__("\45\x73\x20\x4f\x72\x64\145\x72\x73", PR__CMN__COVER), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(count($igqsaukqcqscimok[self::muaawyoqqgewygai]))); break; } } public function no_items() { printf(esc_html__("\116\157\40\x63\x75\x73\164\157\155\x65\x72\x20\142\x6f\165\x67\x68\x74\40\45\163\40\160\162\157\x64\x75\143\164\56", PR__CMN__COVER), $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($this->aqasygcsqysmmyke())); } public function prepare_items() { $product = $this->aqasygcsqysmmyke(); if (!$product) { wp_die("\160\x72\157\144\165\143\x74\x20\x69\x64\x20\156\x6f\x74\x20\144\145\x74\x65\x72\155\151\156\x65\144\x20\146\x6f\162\x20\160\162\x6f\x64\165\143\164\40\143\165\163\164\157\x6d\145\162\40\154\151\163\164\x3a\40" . static::class); } $oqseeekuqisekiwy = array_map("\x65\x73\143\x5f\x73\x71\154", $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->ouqoeawmueswmksm()); global $wpdb; $gqgemcmoicmgaqie = "\40\x70\x6d\x2e\x6d\x65\x74\x61\x5f\x76\141\154\165\145\40\x46\x52\x4f\115\40{$wpdb->posts}\x20\x41\x53\40\160\40"; $gqgemcmoicmgaqie .= "\40\111\116\116\105\122\40\x4a\117\x49\x4e\40{$wpdb->postmeta}\x20\x41\x53\x20\160\x6d\x20\117\x4e\40\160\x2e\111\x44\x20\x3d\x20\160\155\x2e\160\x6f\x73\164\x5f\x69\x64\40"; $gqgemcmoicmgaqie .= "\x20\111\x4e\116\x45\122\40\x4a\117\x49\x4e\40{$wpdb->prefix}\x77\x6f\157\x63\157\155\x6d\145\x72\x63\145\137\157\162\144\145\x72\x5f\x69\164\x65\x6d\x73\x20\x41\123\40\151\x20\117\x4e\x20\160\x2e\x49\104\x20\x3d\40\x69\56\157\162\144\x65\162\x5f\x69\144\40"; $gqgemcmoicmgaqie .= "\x20\x49\116\x4e\x45\x52\x20\x4a\117\x49\116\40{$wpdb->prefix}\167\x6f\157\x63\x6f\x6d\x6d\x65\x72\143\145\137\157\x72\x64\x65\162\137\x69\164\x65\155\x6d\145\164\141\x20\x41\123\40\x69\x6d\x20\117\x4e\x20\x69\56\x6f\x72\x64\145\162\137\x69\x74\x65\x6d\x5f\151\144\x20\75\40\x69\x6d\x2e\157\x72\x64\x65\162\137\151\x74\145\155\137\151\144\40"; $gqgemcmoicmgaqie .= "\40\x57\110\x45\122\x45\40\x70\56\x70\x6f\x73\x74\x5f\163\164\141\x74\165\x73\40\x49\116\40\x28\x20\47\167\143\x2d" . implode("\47\54\x27\167\143\x2d", $oqseeekuqisekiwy) . "\x27\x20\x29\40"; $gqgemcmoicmgaqie .= "\x20\x41\x4e\x44\40\160\x6d\x2e\x6d\x65\164\x61\x5f\153\x65\x79\x20\x49\116\40\x28\x20\47\137\x63\165\x73\164\157\x6d\x65\x72\137\165\163\x65\162\x27\x20\51\x20"; $gqgemcmoicmgaqie .= "\x20\101\116\104\x20\x69\155\56\x6d\x65\164\x61\137\x6b\x65\171\40\111\x4e\x20\x28\x20\47\x5f\x70\x72\157\x64\165\143\x74\137\151\144\x27\54\40\x27\137\x76\x61\x72\x69\x61\164\151\x6f\x6e\137\151\x64\47\40\x29\40"; $gqgemcmoicmgaqie .= "\40\x41\116\x44\40\x69\155\56\x6d\x65\164\x61\x5f\166\141\x6c\165\x65\40\x3d\x20{$product}\40"; $this->count = 10; $weyoqgcesqgeusiu = $this->sooksiiooeywkyaq(); $umwqusowiqmyseom = $this->caokeucsksukesyo()->skckwsgymkimyuwo()->prepare("\114\x49\115\111\x54\x20\x25\144\54\40\45\144\x3b", ($this->get_pagenum() - 1) * $weyoqgcesqgeusiu, $weyoqgcesqgeusiu); $miouyyaoyyekgiqu = $wpdb->get_col("\123\x45\114\105\103\124\x20\104\x49\123\x54\x49\116\103\124\x20{$gqgemcmoicmgaqie}\x20{$umwqusowiqmyseom}"); if ($miouyyaoyyekgiqu) { $aqauykcugwiqkumq = $this->caokeucsksukesyo()->mmmcswscsiecscwg(); foreach ($miouyyaoyyekgiqu as $scwmkmciyywokcug) { $this->items[] = [Constants::meksegaoamowuwoq => $scwmkmciyywokcug, self::muaawyoqqgewygai => $aqauykcugwiqkumq->uymqeymoecokewmk($product, $scwmkmciyywokcug)]; } } parent::prepare_items(); } }
