<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ed5b69b9ad7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Foundation\Data\PageInfo; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use WP_Post; use WP_Taxonomy; use WP_Term; class Generator extends Common { const geyisyamuoomusqo = "\144\151\x76\x69\144\x65\162"; const iiogewmmwckmegcq = "\150\157\155\x65\137\165\162\154"; const yaooyaaieecskqsq = "\x77\x72\x61\160\137\x61\164\164\x72\x73"; const reigcooiouysaaok = "\x6c\151\x6e\153\137\x61\164\164\x72\x73"; const ceeoggmayqcuoqwi = "\151\x74\x65\x6d\137\141\164\164\x72\163"; const quewuqgwgceoamee = "\151\x74\x65\x6d\137\145\x6c\145\155\145\x6e\x74"; const socgekwcqwaoyyug = "\x77\162\141\160\137\x65\x6c\x65\155\145\156\x74"; const gawcyaqskcsegwey = "\144\x69\x76\151\x64\x65\x72\x5f\x61\x74\x74\x72\x73"; const koiywqsgmgmgscgy = "\154\x69\x6e\x6b\x5f\x63\157\156\x74\141\151\x6e\145\x72"; const mukyymeygmeoawck = "\x61\143\x74\x69\x76\x65\137\x69\x74\145\x6d\x5f\x61\x74\x74\162\x73"; const qywgicgikawmwoay = "\154\151\x6e\x6b\137\x63\x6f\156\x74\x61\x69\156\x65\162\x5f\141\x74\x74\162\x73"; protected array $breadcrumb = []; public function ecwoamckysyqikqi() : array { return $this->breadcrumb; } protected function oeewiaacscgyamai(PageInfo $igqsaukqcqscimok) : self { $this->breadcrumb = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::iukiayaokaiiicwo . "\142\x65\x66\157\x72\145\137\141\x64\144\x5f\151\164\x65\x6d"), $this->breadcrumb, $igqsaukqcqscimok, $this); $this->breadcrumb[] = $igqsaukqcqscimok; $this->breadcrumb = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::iukiayaokaiiicwo . "\141\x66\164\x65\162\137\141\x64\x64\137\151\x74\x65\155"), $this->breadcrumb, $igqsaukqcqscimok, $this); return $this; } protected function uikgwcuascgeissw($iwkyyocymeukcceu, $uusmaiomayssaecw) : ?string { return ManipulateArray::get($iwkyyocymeukcceu, $uusmaiomayssaecw, ''); } protected function yceuwwmgwwqqcweu($guwumyyyakswawas) : array { $aokagokqyuysuksm = $guwumyyyakswawas[0]->cat_ID; $eyagosskwwmgwmog = get_ancestors($aokagokqyuysuksm, self::qgciomgukmcwscqw); $eyagosskwwmgwmog = array_reverse($eyagosskwwmgwmog); $eyagosskwwmgwmog[] = $aokagokqyuysuksm; return $eyagosskwwmgwmog; } public function wuqmciamumosasqa(?string $meqocwsecsywiiqs, ?string $migiiksoiymissge = '', bool $cmscqcqicyqkweuc = true) : PageInfo { static $ikwcsswcseyywgeo; if ($ikwcsswcseyywgeo) { goto guykyqecgswcsmws; } $ikwcsswcseyywgeo = 1; guykyqecgswcsmws: $igqsaukqcqscimok = new PageInfo(); if (!$cmscqcqicyqkweuc) { goto kkumywowcoycymeo; } $yyimiwcuegayoskq = ManipulatePage::iqoacwuiemooiysg(); $this->oeewiaacscgyamai($igqsaukqcqscimok->aseocggwwegcmqes($yyimiwcuegayoskq->gueasuouwqysmomu())->ugaqcouwcuiaemgo($yyimiwcuegayoskq->asuigsqoowmekwok())); kkumywowcoycymeo: $ikwcsswcseyywgeo += 10; $igqsaukqcqscimok->gswweykyogmsyawy($meqocwsecsywiiqs)->uaomeggmwqmmeoki($cmscqcqicyqkweuc)->jyumyyugiwwiqomk($ikwcsswcseyywgeo)->qmueseocuuekommo($this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::iukiayaokaiiicwo . "\160\141\x67\x65\137\151\156\x66\x6f\137\160\x65\x72\155\141\154\x69\x6e\153"), $migiiksoiymissge)); return $igqsaukqcqscimok; } protected function kooiucqkggeagccu(array $ywmkwiwkosakssii = []) : array { $ggauoeuaesiymgee = [self::ckmqoekmugkggeym => DecoratorQuery::imgymusqgccqsqqq(), self::eoaiagsgqsmskugs => ["\164\x61\147" => __("\x50\x6f\163\x74\x73\40\x54\x61\x67\x67\x65\x64\72\40\45\x73", PR__CMN__COVER), "\x34\x30\64" => __("\x45\x72\162\157\162\x20\64\60\x34", PR__CMN__COVER), "\x74\x61\170" => "\x25\163", "\143\x70\x61\x67\145" => __("\x43\157\x6d\155\145\156\164\40\120\141\x67\145\x20\x25\163", PR__CMN__COVER), self::wwoeeogswkgeqack => get_bloginfo(self::NAME), self::imywcsggckkcywgk => __("\120\141\147\145\40\45\x73", PR__CMN__COVER), self::yayciqueeakqwese => __("\123\145\x61\x72\143\150\x20\122\145\x73\x75\x6c\x74\x73\x20\x66\x6f\162\72\40\45\163", PR__CMN__COVER), self::iwascisiiokuackw => __("\101\162\164\151\x63\154\x65\163\x20\x50\x6f\163\x74\x65\x64\40\x62\171\x20\x25\163", PR__CMN__COVER), self::qgciomgukmcwscqw => "\x25\x73"], self::geyisyamuoomusqo => null, self::iiogewmmwckmegcq => esc_url(ManipulateServer::gmigwwwmwemyaayy("\57")), self::quewuqgwgceoamee => "\x6c\x69", self::socgekwcqwaoyyug => "\157\x6c", self::koiywqsgmgmgscgy => "\163\160\141\x6e", self::yaooyaaieecskqsq => ["\x63\x6c\141\x73\163" => "\142\x72\x65\141\144\143\x72\165\155\142"], self::reigcooiouysaaok => ["\x63\x6c\x61\x73\x73" => "\142\x72\x65\x61\x64\143\162\x75\155\142\x2d\154\x69\156\153"], self::ceeoggmayqcuoqwi => ["\x63\x6c\x61\163\163" => "\142\x72\145\141\x64\143\x72\x75\x6d\142\x2d\151\164\145\155"], self::gawcyaqskcsegwey => ["\x63\154\x61\163\163" => "\142\x72\145\141\144\143\162\165\155\x62\x2d\144\x69\x76\x69\144\x65\162"], self::mukyymeygmeoawck => ["\x63\154\x61\163\163" => "\x62\162\145\x61\144\x63\x72\x75\x6d\x62\x2d\151\x74\x65\155\40\x61\143\x74\151\166\x65"], self::qywgicgikawmwoay => []]; $ywmkwiwkosakssii = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::iukiayaokaiiicwo . "\147\145\156\x65\x72\141\x74\145\137\x61\x72\147\163"), $ywmkwiwkosakssii); return ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ggauoeuaesiymgee); } public function sywokgmoskcocqgy(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); $gqiaqmycqyywiqsw = $ywmkwiwkosakssii[self::reigcooiouysaaok]; $iwywmkygwewiamwm = ManipulateHTML::yuawgssgauywkiia("\x25\x32\44\163", "\45\61\x24\163", $gqiaqmycqyywiqsw); if (!$ywmkwiwkosakssii[self::koiywqsgmgmgscgy]) { goto miweggwqeiaeweia; } $iwywmkygwewiamwm = ManipulateHTML::uuccukgasskgimsq($ywmkwiwkosakssii[self::koiywqsgmgmgscgy], $ywmkwiwkosakssii[self::qywgicgikawmwoay], $iwywmkygwewiamwm); miweggwqeiaeweia: $ysmqgacyqwayokog = $ywmkwiwkosakssii[self::geyisyamuoomusqo]; if (!$ysmqgacyqwayokog) { goto kqqiegkuqagcqsya; } $ysmqgacyqwayokog = ManipulateHTML::gmqyuaqwgiayskei($ysmqgacyqwayokog, $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); goto ousiuuwgwkiyikyq; kqqiegkuqagcqsya: $ysmqgacyqwayokog = ManipulateHTML::uuccukgasskgimsq("\151", $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); ousiuuwgwkiyikyq: $caacssaumiqeaoaw = ManipulateHTML::qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::ceeoggmayqcuoqwi]); $aqykuigiuwmmcieu = ''; $momcykaoccoymeig = 0; $this->create($ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::iukiayaokaiiicwo . self::qwumqqyuasyskkkc), $this->ecwoamckysyqikqi(), $ywmkwiwkosakssii); $oammesyieqmwuwyi = ManipulateArray::yaeiiwwyckwugsem($oammesyieqmwuwyi, "\147\145\x74\x50\162\151\157\162\151\x74\x79"); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof PageInfo) { goto ogqmesokykywseys; } if (!($igqsaukqcqscimok === end($oammesyieqmwuwyi))) { goto ikqqskkqqwmwssoo; } $igqsaukqcqscimok->qmueseocuuekommo(''); $caacssaumiqeaoaw = ManipulateHTML::qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::mukyymeygmeoawck]); ikqqskkqqwmwssoo: $aqykuigiuwmmcieu .= $caacssaumiqeaoaw; if (!($momcykaoccoymeig !== 0)) { goto aomysykcgikegiau; } $aqykuigiuwmmcieu .= $ysmqgacyqwayokog; aomysykcgikegiau: if ($igqsaukqcqscimok->ycqquoiyyuesegsy()) { goto cwwmimggaaecmucw; } $aqykuigiuwmmcieu .= $igqsaukqcqscimok->qcgakseyaikigqco(); goto awoaooyoeoyeeqee; cwwmimggaaecmucw: $aqykuigiuwmmcieu .= sprintf($iwywmkygwewiamwm, $igqsaukqcqscimok->ycqquoiyyuesegsy(), $igqsaukqcqscimok->qcgakseyaikigqco()); awoaooyoeoyeeqee: $aqykuigiuwmmcieu .= "\74\57{$ywmkwiwkosakssii[self::quewuqgwgceoamee]}\76"; $momcykaoccoymeig++; ogqmesokykywseys: iwekmyyccgiyuecc: } ogsaaqsaogcqiouy: return ManipulateHTML::uuccukgasskgimsq($ywmkwiwkosakssii[self::socgekwcqwaoyyug], $ywmkwiwkosakssii[self::yaooyaaieecskqsq], $aqykuigiuwmmcieu); } public function create(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); if ($this->ecwoamckysyqikqi()) { goto zayqqeqgcwkekwws; } $oikyogsosqcyueay = ManipulatePage::cykwscocqwykiocm(); $qawuqcsueakkgiio = DecoratorQuery::qaumqeeagueuqkcg(self::kkcqmwgccaygggcu); $iwkyyocymeukcceu = ManipulateArray::get($ywmkwiwkosakssii, self::eoaiagsgqsmskugs); $gmigwwwmwemyaayy = ManipulateArray::get($ywmkwiwkosakssii, self::iiogewmmwckmegcq); $meqocwsecsywiiqs = ''; $eiyqsiwggkuuqqee = 0; $mksyucucyswaukig = ManipulateArray::get($ywmkwiwkosakssii, self::ckmqoekmugkggeym); if ($mksyucucyswaukig instanceof WP_Post) { goto mqkmcysgoiaouiwm; } if (!$mksyucucyswaukig instanceof WP_Term) { goto ykomgumacooyomsk; } $meqocwsecsywiiqs = ManipulateTerm::qcgakseyaikigqco($mksyucucyswaukig); $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($mksyucucyswaukig); ykomgumacooyomsk: goto kosaqwikueyksqmw; mqkmcysgoiaouiwm: $meqocwsecsywiiqs = ManipulatePost::qcgakseyaikigqco($mksyucucyswaukig); $eiyqsiwggkuuqqee = ManipulatePost::ygqycmmkoiuocoia($mksyucucyswaukig); $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($mksyucucyswaukig); kosaqwikueyksqmw: if (DecoratorQuery::takycgcamoacksqw()) { goto sqyokemumceysegy; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::wwoeeogswkgeqack), $gmigwwwmwemyaayy, false)->ugaqcouwcuiaemgo(self::eycwiessycciwsao)); if (DecoratorQuery::seokosgecygsmqau()) { goto usymasgsyqgsuocg; } if (DecoratorQuery::sgayqmgoigoseaoo()) { goto qikaewekoecykeou; } if (DecoratorQuery::qmssqeyayicowkgy()) { goto qsgqwyqaqiowkmco; } if (DecoratorQuery::gouusicsisumuiei()) { goto wwukgaquuyoissgy; } if (DecoratorQuery::qwakseskocsyiyks()) { goto mscgewkcqcoowweg; } if (DecoratorQuery::mgkmukikygowogsm()) { goto esaqcqqwuussiiwo; } if (DecoratorQuery::wqscegcksyocaias()) { goto okkmcocqokkskasy; } if (DecoratorQuery::kccakwkaqugygwmq() && !DecoratorQuery::aauyuieeeaakygki()) { goto iwsmmkqaoksmocok; } if (ManipulatePost::sqyyemqmmgmyiaam()) { goto ocywegekakimmwcq; } if (DecoratorQuery::aauyuieeeaakygki()) { goto gswcoeiisamakwii; } if (DecoratorQuery::sgeaogakoscmysgc() && !$eiyqsiwggkuuqqee) { goto ikuuiauwouuqawuw; } if (DecoratorQuery::sgeaogakoscmysgc() && $eiyqsiwggkuuqqee) { goto kwiggogcgciwuwqk; } if (DecoratorQuery::ocwoeosukggumggw()) { goto suqceasgacskcmkc; } if (DecoratorQuery::mykygowqgwcuecua()) { goto oimkeqocuguqqsqk; } if (DecoratorQuery::kmmyuiwaogukwqqi()) { goto mogkoocsoeuyoqqa; } if (!(has_post_format() && !DecoratorQuery::cukiusasccucgwqc())) { goto wsesqmcqoiyyqkqi; } $this->wuqmciamumosasqa(get_post_format_string(get_post_format())); wsesqmcqoiyyqkqi: goto wkwamkgkwykeqkec; mogkoocsoeuyoqqa: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x34\x30\64")); wkwamkgkwykeqkec: goto oeocukauoyosicso; oimkeqocuguqqsqk: $qscaoekmoooeuyqg = ManipulateUser::get(DecoratorQuery::qaumqeeagueuqkcg(self::iwascisiiokuackw), true); if ($qawuqcsueakkgiio) { goto oyeyomcgkmgymogq; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::iwascisiiokuackw), ManipulateUser::ygwimyogyaqgumam($qscaoekmoooeuyqg))); goto iesekaeqeomeuaui; oyeyomcgkmgymogq: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::iwascisiiokuackw), ManipulateUser::ygwimyogyaqgumam($qscaoekmoooeuyqg)), DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg), false)->ugaqcouwcuiaemgo(self::iwascisiiokuackw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); iesekaeqeomeuaui: oeocukauoyosicso: goto yykqaowwsqgqysmq; suqceasgacskcmkc: if ($qawuqcsueakkgiio) { goto gamqcwuwkikwqoay; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x74\141\147"), single_tag_title('', false))); goto mscyggqcesgqqksu; gamqcwuwkikwqoay: $scwiymciagumsuiw = DecoratorQuery::qaumqeeagueuqkcg("\x74\x61\147\137\x69\144"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(single_tag_title('', false), ManipulateTerm::qmgcisuuikgmqcsu($scwiymciagumsuiw), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($scwiymciagumsuiw))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); mscyggqcesgqqksu: yykqaowwsqgqysmq: goto uckewycoogsogwiy; kwiggogcgciwuwqk: $eyagosskwwmgwmog = get_post_ancestors(ManipulatePost::mwikyscisascoeea($mksyucucyswaukig)); foreach (array_reverse($eyagosskwwmgwmog) as $qkcoyiyeuoyyoocy) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulatePost::qcgakseyaikigqco($qkcoyiyeuoyyoocy), ManipulatePost::ycqquoiyyuesegsy($qkcoyiyeuoyyoocy), false)->ugaqcouwcuiaemgo(self::imywcsggckkcywgk)); ieqesiiageaauiuw: } yiowgigkkwsoqcci: $this->wuqmciamumosasqa($meqocwsecsywiiqs); uckewycoogsogwiy: goto yoqakewookqoqacm; ikuuiauwouuqawuw: $oammesyieqmwuwyi = $this->sscegwueamckwmcy(self::ggcmgaccygaquiwu . "\x70\141\x67\x65\137\x69\164\145\x6d", ["\150\x61\163\137\160\x61\x67\x65\x5f\x6e\141\x6d\145" => true], $mksyucucyswaukig); if (!($oammesyieqmwuwyi && isset($oammesyieqmwuwyi["\x68\141\163\x5f\160\141\x67\145\137\x6e\141\155\145"]) && $oammesyieqmwuwyi["\x68\141\163\x5f\x70\x61\147\145\137\156\x61\x6d\x65"])) { goto sioekkmekwygemyc; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); sioekkmekwygemyc: yoqakewookqoqacm: goto yuimwyoywaiiqacs; gswcoeiisamakwii: $omwmuycmeqcqokom = ManipulatePost::get($eiyqsiwggkuuqqee); $awiycosuekoeeqou = get_the_category(ManipulatePost::mwikyscisascoeea($omwmuycmeqcqokom)); $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($awiycosuekoeeqou), ManipulateTerm::qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($awiycosuekoeeqou))); qukocuwgakemmyga: } uqokiksoqcwwqgio: $this->wuqmciamumosasqa(ManipulatePost::qcgakseyaikigqco($omwmuycmeqcqokom), ManipulatePost::ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo("\163\151\x6e\x67\154\x65")->aseocggwwegcmqes(ManipulatePost::gueasuouwqysmomu($omwmuycmeqcqokom)); $this->wuqmciamumosasqa($meqocwsecsywiiqs); yuimwyoywaiiqacs: goto emqswoaawgeyosmi; ocywegekakimmwcq: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($mksyucucyswaukig, true); if (!$useksmwkuswkwcqg) { goto kocqqoyymosmuksu; } if ($qawuqcsueakkgiio) { goto uimeeckqksqeekqq; } $this->wuqmciamumosasqa($useksmwkuswkwcqg->label); goto iuuuususuuuaieem; uimeeckqksqeekqq: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($useksmwkuswkwcqg->label, ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg->name), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg->name)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); iuuuususuuuaieem: kocqqoyymosmuksu: emqswoaawgeyosmi: goto esikeyqyuikmaiek; iwsmmkqaoksmocok: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($mksyucucyswaukig); if (self::mswoacegomcucaik !== $useksmwkuswkwcqg) { goto ucqmumuygcywwqma; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulatePost::qcgakseyaikigqco($oikyogsosqcyueay), ManipulatePost::ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(self::wwoeeogswkgeqack)); $awiycosuekoeeqou = get_the_category(); if (!isset($awiycosuekoeeqou[0])) { goto uougwgeyiokewkkm; } $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($awiycosuekoeeqou), ManipulateTerm::qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($awiycosuekoeeqou))); gygwewcqsmwqismo: } amgsueumgaguceaa: uougwgeyiokewkkm: if (DecoratorQuery::qaumqeeagueuqkcg("\143\160\141\x67\x65")) { goto gommacygsykyussk; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); goto ukqocwewouckikso; gommacygsykyussk: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($meqocwsecsywiiqs, $migiiksoiymissge, false)->ugaqcouwcuiaemgo("\x73\x69\x6e\147\x6c\145")->aseocggwwegcmqes(ManipulatePost::gueasuouwqysmomu($useksmwkuswkwcqg, true)->name)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\143\x70\x61\x67\145"), DecoratorQuery::qaumqeeagueuqkcg("\143\x70\x61\x67\x65"))); ukqocwewouckikso: goto uykousayyomcaeaa; ucqmumuygcywwqma: if (!($wkqsmssuaiaqmeee = ManipulatePost::waaisqccqacqeium($useksmwkuswkwcqg))) { goto mwysseaekcsiesmm; } if (!($wkqsmssuaiaqmeee->public && $wkqsmssuaiaqmeee->has_archive)) { goto cscusseysqygsoiy; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($wkqsmssuaiaqmeee->labels->name, ManipulatePost::mqgeysameoesmuqw($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); cscusseysqygsoiy: $kesssewsiegssiya = ManipulateArray::get($wkqsmssuaiaqmeee, "\155\x61\x69\x6e\x5f\x74\x61\x78\157\x6e\x6f\x6d\x79"); if ($kesssewsiegssiya) { goto uegouoiuyoqkcscg; } switch ($useksmwkuswkwcqg) { case self::oguseymmyyoyaako: $kesssewsiegssiya = self::cmckeoksigiaqykc; goto isgwkwacoyimiauk; } mggeqkcksyaymcsa: isgwkwacoyimiauk: uegouoiuyoqkcscg: if (!$kesssewsiegssiya) { goto iiiccouaaqsyikae; } $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya); if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto wusciwkkckmqigms; } if ($kesssewsiegssiya->_builtin) { goto kqswcsysqawkcgye; } $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($mksyucucyswaukig, ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya)); if (!isset($uyuaosigqymaqsaa[0])) { goto ewscugeuicukkycc; } $iwewcwusemqaiggk = $uyuaosigqymaqsaa[0]; $qyiciauwscqywwgq = $kesssewsiegssiya; $eyagosskwwmgwmog = get_ancestors(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), ManipulateTaxonomy::aakmagwggmkoiiyu($qyiciauwscqywwgq), self::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = ManipulateTerm::get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($sikiyacogecgmyai), ManipulateTerm::qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($sikiyacogecgmyai))); eeyyskqsmquyquqw: } cgyakcqgugqgkqiw: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk), ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($iwewcwusemqaiggk))); ewscugeuicukkycc: kqswcsysqawkcgye: wusciwkkckmqigms: iiiccouaaqsyikae: if (!($omwmuycmeqcqokom = ManipulatePost::ygqycmmkoiuocoia($mksyucucyswaukig))) { goto ukkcmocamwgiqayu; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulatePost::qcgakseyaikigqco($omwmuycmeqcqokom), ManipulatePost::ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo("\163\x69\156\147\x6c\x65")->aseocggwwegcmqes(ManipulatePost::gueasuouwqysmomu($omwmuycmeqcqokom))); ukkcmocamwgiqayu: $this->wuqmciamumosasqa($meqocwsecsywiiqs); mwysseaekcsiesmm: uykousayyomcaeaa: esikeyqyuikmaiek: goto qiiigwkqeoewsuwm; okkmcocqokkskasy: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x59"), get_year_link(get_the_time("\x59")), false)->ugaqcouwcuiaemgo("\171\145\141\162")); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x46"), get_month_link(get_the_time("\131"), get_the_time("\106")), false)->ugaqcouwcuiaemgo("\155\157\156\164\150")); $this->wuqmciamumosasqa(get_the_time("\144")); qiiigwkqeoewsuwm: goto ikqeeaysmqgcgawq; esaqcqqwuussiiwo: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\131"), get_year_link(get_the_time("\x59")), false)->ugaqcouwcuiaemgo("\171\145\141\x72")); $this->wuqmciamumosasqa(get_the_time("\x46")); ikqeeaysmqgcgawq: goto suqcsgaosywaauuu; mscgewkcqcoowweg: $this->wuqmciamumosasqa(get_the_time("\x59")); suqcsgaosywaauuu: goto gsygwgsiawgmqiyi; wwukgaquuyoissgy: $qmqecyyaiimkyaae = get_search_query(); if ($qawuqcsueakkgiio) { goto mkwkkmkgiqiamacc; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::yayciqueeakqwese), $qmqecyyaiimkyaae)); goto uaqackioaiqwcocy; mkwkkmkgiqiamacc: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::yayciqueeakqwese), get_search_query(self::kkcqmwgccaygggcu)), DecoratorQuery::yqymaqmqiqmmmsoo("\163", $qmqecyyaiimkyaae, $gmigwwwmwemyaayy), false)->ugaqcouwcuiaemgo(self::yayciqueeakqwese)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); uaqackioaiqwcocy: gsygwgsiawgmqiyi: goto yqagomygmeoecwey; qsgqwyqaqiowkmco: $iwewcwusemqaiggk = DecoratorQuery::imgymusqgccqsqqq(); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto sockeswygwcskeuq; } $kesssewsiegssiya = ManipulateArray::get(DecoratorQuery::imgymusqgccqsqqq(), self::gmmygyiecgmggaam); if (!$kesssewsiegssiya) { goto eekcoeikaeaaeyii; } $qyiciauwscqywwgq = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya); if (!$qyiciauwscqywwgq instanceof WP_Taxonomy) { goto ocaguquugeamqckq; } foreach ($qyiciauwscqywwgq->object_type as $useksmwkuswkwcqg) { $wkqsmssuaiaqmeee = ManipulatePost::waaisqccqacqeium($useksmwkuswkwcqg); if (!($wkqsmssuaiaqmeee && $wkqsmssuaiaqmeee->public)) { goto csammceowmqwaamq; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($wkqsmssuaiaqmeee->label, ManipulatePost::mqgeysameoesmuqw($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); goto gcckqucukawcasgk; csammceowmqwaamq: qmkaeeomgkwggoyo: } gcckqucukawcasgk: ocaguquugeamqckq: eekcoeikaeaaeyii: $eyagosskwwmgwmog = get_ancestors(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), ManipulateTerm::yyoeeseewqmmyaee($iwewcwusemqaiggk), self::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = ManipulateTerm::get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($sikiyacogecgmyai), ManipulateTerm::qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($sikiyacogecgmyai))); gmwykkouysyaqwqm: } cogywoqcqummsyus: if ($qawuqcsueakkgiio) { goto ugqwuugsweqgmywk; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x74\x61\x78"), ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk))); goto uaukmuiwskcemcsw; ugqwuugsweqgmywk: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk), ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($iwewcwusemqaiggk))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); uaukmuiwskcemcsw: sockeswygwcskeuq: yqagomygmeoecwey: goto eucqomyqykgoiuge; qikaewekoecykeou: $awiycosuekoeeqou = DecoratorQuery::qaumqeeagueuqkcg("\x63\141\x74"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulatePost::qcgakseyaikigqco($oikyogsosqcyueay), ManipulatePost::ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(self::wwoeeogswkgeqack)); $eyagosskwwmgwmog = get_ancestors($awiycosuekoeeqou, self::qgciomgukmcwscqw); foreach (array_reverse($eyagosskwwmgwmog) as $omwmuycmeqcqokom) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($omwmuycmeqcqokom), ManipulateTerm::qmgcisuuikgmqcsu($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(self::qgciomgukmcwscqw)); iikiiioqiyegyaak: } gicyayswqyuoekcq: if ($qawuqcsueakkgiio) { goto uiosisocuwokwkie; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::qgciomgukmcwscqw), single_cat_title('', false))); goto cuumeogeomowqisc; uiosisocuwokwkie: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($awiycosuekoeeqou), ManipulateTerm::qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(self::qgciomgukmcwscqw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); cuumeogeomowqisc: eucqomyqykgoiuge: goto aiccyaswigkaycqk; usymasgsyqgsuocg: $this->wuqmciamumosasqa(ManipulatePost::qcgakseyaikigqco($oikyogsosqcyueay)); aiccyaswigkaycqk: goto oqousikwiiqagoyw; sqyokemumceysegy: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::wwoeeogswkgeqack), $gmigwwwmwemyaayy); oqousikwiiqagoyw: zayqqeqgcwkekwws: } }
