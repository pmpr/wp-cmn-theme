<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbb41cc8f2e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\ListTable; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPListTable; use WC_Product; class ProductCustomer extends WPListTable { const muaawyoqqgewygai = "\x6f\162\144\145\162\163"; protected ?int $product = null; public function __construct($ywmkwiwkosakssii = []) { parent::__construct($this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::wyucqaeuuqkesque => false, "\160\154\165\162\x61\154" => __("\103\x75\163\x74\x6f\155\145\162\x73", PR__CMN__COVER), "\163\x69\156\x67\x75\154\141\162" => __("\x43\165\x73\164\157\155\145\162", PR__CMN__COVER)])); } public function aqasygcsqysmmyke() : ?int { return $this->product; } public function yiagkoqoiemmqssu() : ?WC_Product { return $this->caokeucsksukesyo()->aqasygcsqysmmyke()->get($this->aqasygcsqysmmyke()); } public function get_columns() : array { return [Constants::meksegaoamowuwoq => __("\125\163\x65\162", PR__CMN__COVER), self::muaawyoqqgewygai => __("\117\x72\144\x65\x72\x73", PR__CMN__COVER)]; } protected function column_default($igqsaukqcqscimok, $column_name) { switch ($column_name) { case Constants::meksegaoamowuwoq: $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $igqsaukqcqscimok[Constants::meksegaoamowuwoq]; $swqimwqeweekeusq->yuawgssgauywkiia($swqimwqeweekeusq->ciuuiyckmsygceis($yoiguusocukqeayg->ygwimyogyaqgumam($mkucggyaiaukqoce)), $yoiguusocukqeayg->yyykkcyiksewsoqy($mkucggyaiaukqoce)); goto iwcmgioeaiyuacwi; case self::muaawyoqqgewygai: printf(__("\45\x73\x20\117\x72\x64\x65\x72\x73", PR__CMN__COVER), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(count($igqsaukqcqscimok[self::muaawyoqqgewygai]))); goto iwcmgioeaiyuacwi; } iyyaiuccouqowyga: iwcmgioeaiyuacwi: } public function no_items() { printf(esc_html__("\x4e\157\x20\143\165\163\164\x6f\x6d\145\162\x20\142\x6f\165\147\150\164\40\x25\x73\x20\160\x72\157\144\x75\143\x74\x2e", PR__CMN__COVER), $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($this->aqasygcsqysmmyke())); } public function prepare_items() { $product = $this->aqasygcsqysmmyke(); if ($product) { goto ikqagqacuwcgwmqy; } wp_die("\160\162\x6f\x64\x75\143\x74\x20\151\144\40\156\157\x74\x20\x64\x65\x74\x65\162\x6d\151\x6e\145\x64\40\146\x6f\162\x20\x70\162\157\x64\165\x63\164\40\x63\x75\x73\x74\x6f\x6d\145\162\x20\x6c\151\x73\x74\72\x20" . $this->uqggkiomyiceyooa()); ikqagqacuwcgwmqy: $oqseeekuqisekiwy = array_map("\145\x73\x63\x5f\163\x71\154", $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->ouqoeawmueswmksm()); global $wpdb; $gqgemcmoicmgaqie = "\40\160\x6d\x2e\x6d\x65\164\x61\x5f\x76\x61\154\165\145\x20\106\122\117\115\40{$wpdb->posts}\x20\101\123\40\160\40"; $gqgemcmoicmgaqie .= "\40\111\116\x4e\105\122\x20\x4a\117\x49\x4e\40{$wpdb->postmeta}\x20\x41\123\40\160\155\x20\x4f\x4e\40\160\56\111\x44\x20\x3d\40\160\155\x2e\x70\x6f\x73\164\x5f\151\x64\x20"; $gqgemcmoicmgaqie .= "\x20\x49\x4e\116\105\122\x20\x4a\117\111\116\x20{$wpdb->prefix}\167\x6f\x6f\x63\157\155\155\145\162\143\x65\137\x6f\162\144\145\162\137\151\164\x65\155\163\40\x41\123\x20\151\40\x4f\116\40\160\x2e\x49\x44\x20\x3d\x20\x69\x2e\157\x72\144\145\x72\137\x69\144\x20"; $gqgemcmoicmgaqie .= "\40\111\x4e\116\105\122\x20\x4a\x4f\x49\116\x20{$wpdb->prefix}\x77\157\x6f\x63\157\155\x6d\x65\x72\143\145\137\157\162\144\145\162\x5f\151\x74\x65\155\155\145\164\x61\x20\x41\x53\x20\151\155\40\x4f\x4e\40\151\x2e\x6f\x72\x64\145\x72\x5f\x69\164\145\155\137\x69\144\x20\75\40\x69\x6d\56\157\162\x64\x65\x72\x5f\151\164\145\x6d\137\x69\x64\40"; $gqgemcmoicmgaqie .= "\40\127\110\105\122\105\x20\x70\56\160\x6f\163\164\x5f\163\164\141\164\x75\163\x20\111\x4e\40\x28\x20\47\x77\143\55" . implode("\x27\54\x27\167\143\x2d", $oqseeekuqisekiwy) . "\x27\x20\x29\x20"; $gqgemcmoicmgaqie .= "\x20\x41\x4e\x44\x20\160\x6d\x2e\155\x65\164\141\x5f\153\x65\171\x20\x49\x4e\40\x28\x20\x27\137\143\x75\163\164\157\x6d\145\162\137\165\x73\145\x72\x27\x20\51\40"; $gqgemcmoicmgaqie .= "\x20\x41\x4e\x44\x20\151\x6d\56\155\145\164\141\137\x6b\145\x79\40\x49\116\40\50\x20\47\x5f\x70\x72\x6f\x64\x75\x63\x74\137\x69\144\x27\54\40\47\137\x76\141\x72\151\141\x74\151\x6f\x6e\x5f\x69\x64\47\x20\x29\40"; $gqgemcmoicmgaqie .= "\x20\101\116\104\40\151\x6d\x2e\155\145\164\141\137\x76\x61\154\x75\145\x20\x3d\x20{$product}\40"; $this->count = 10; $weyoqgcesqgeusiu = $this->sooksiiooeywkyaq(); $umwqusowiqmyseom = $this->caokeucsksukesyo()->skckwsgymkimyuwo()->prepare("\x4c\x49\x4d\x49\x54\x20\45\x64\x2c\x20\x25\x64\x3b", ($this->get_pagenum() - 1) * $weyoqgcesqgeusiu, $weyoqgcesqgeusiu); $miouyyaoyyekgiqu = $wpdb->get_col("\123\x45\114\x45\x43\124\x20\x44\111\123\124\x49\116\x43\x54\x20{$gqgemcmoicmgaqie}\x20{$umwqusowiqmyseom}"); if (!$miouyyaoyyekgiqu) { goto ugmukcwgcioqgywy; } $aqauykcugwiqkumq = $this->caokeucsksukesyo()->mmmcswscsiecscwg(); foreach ($miouyyaoyyekgiqu as $scwmkmciyywokcug) { $this->items[] = [Constants::meksegaoamowuwoq => $scwmkmciyywokcug, self::muaawyoqqgewygai => $aqauykcugwiqkumq->uymqeymoecokewmk($product, $scwmkmciyywokcug)]; cksomiiqscosigke: } gcogomgmqcgkeceg: ugmukcwgcioqgywy: parent::prepare_items(); } }
