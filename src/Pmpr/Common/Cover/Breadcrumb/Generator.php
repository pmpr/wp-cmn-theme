<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63f695169f6fa             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Foundation\Data\PageInfo; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use WP_Post; use WP_Taxonomy; use WP_Term; class Generator extends Common { const geyisyamuoomusqo = "\x64\x69\x76\151\x64\145\162"; const iiogewmmwckmegcq = "\150\157\155\x65\137\x75\162\154"; const yaooyaaieecskqsq = "\x77\162\x61\160\x5f\x61\x74\164\162\163"; const reigcooiouysaaok = "\154\151\156\153\x5f\x61\x74\x74\162\x73"; const ceeoggmayqcuoqwi = "\151\x74\145\155\x5f\141\164\x74\162\x73"; const quewuqgwgceoamee = "\x69\x74\x65\x6d\137\x65\x6c\x65\155\x65\156\164"; const socgekwcqwaoyyug = "\167\162\141\160\x5f\x65\x6c\x65\155\x65\156\164"; const gawcyaqskcsegwey = "\x64\x69\x76\x69\144\x65\162\x5f\x61\x74\x74\x72\163"; const koiywqsgmgmgscgy = "\154\x69\x6e\x6b\x5f\143\x6f\156\x74\141\151\x6e\x65\162"; const mukyymeygmeoawck = "\141\143\x74\151\166\145\137\151\x74\x65\155\x5f\x61\164\x74\x72\x73"; const qywgicgikawmwoay = "\x6c\151\156\x6b\137\x63\x6f\156\164\141\x69\x6e\x65\162\137\141\x74\164\x72\163"; protected array $breadcrumb = []; public function ecwoamckysyqikqi() : array { return $this->breadcrumb; } protected function oeewiaacscgyamai(PageInfo $igqsaukqcqscimok) : self { $this->breadcrumb = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::iukiayaokaiiicwo . "\x62\145\146\157\x72\145\137\x61\144\144\137\151\x74\145\155"), $this->breadcrumb, $igqsaukqcqscimok, $this); $this->breadcrumb[] = $igqsaukqcqscimok; $this->breadcrumb = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::iukiayaokaiiicwo . "\141\x66\x74\x65\x72\137\x61\x64\144\x5f\151\164\145\x6d"), $this->breadcrumb, $igqsaukqcqscimok, $this); return $this; } protected function uikgwcuascgeissw($iwkyyocymeukcceu, $uusmaiomayssaecw) : ?string { return ManipulateArray::get($iwkyyocymeukcceu, $uusmaiomayssaecw, ''); } protected function yceuwwmgwwqqcweu($guwumyyyakswawas) : array { $aokagokqyuysuksm = $guwumyyyakswawas[0]->cat_ID; $eyagosskwwmgwmog = get_ancestors($aokagokqyuysuksm, self::qgciomgukmcwscqw); $eyagosskwwmgwmog = array_reverse($eyagosskwwmgwmog); $eyagosskwwmgwmog[] = $aokagokqyuysuksm; return $eyagosskwwmgwmog; } public function wuqmciamumosasqa(?string $meqocwsecsywiiqs, ?string $migiiksoiymissge = '', bool $cmscqcqicyqkweuc = true) : PageInfo { static $ikwcsswcseyywgeo; if ($ikwcsswcseyywgeo) { goto giaacoqqqsekcayy; } $ikwcsswcseyywgeo = 1; giaacoqqqsekcayy: $igqsaukqcqscimok = new PageInfo(); if (!$cmscqcqicyqkweuc) { goto ewymsmkkiksgwysk; } $yyimiwcuegayoskq = ManipulatePage::iqoacwuiemooiysg(); $this->oeewiaacscgyamai($igqsaukqcqscimok->aseocggwwegcmqes($yyimiwcuegayoskq->gueasuouwqysmomu())->ugaqcouwcuiaemgo($yyimiwcuegayoskq->asuigsqoowmekwok())); ewymsmkkiksgwysk: $ikwcsswcseyywgeo += 10; $igqsaukqcqscimok->gswweykyogmsyawy($meqocwsecsywiiqs)->uaomeggmwqmmeoki($cmscqcqicyqkweuc)->jyumyyugiwwiqomk($ikwcsswcseyywgeo)->qmueseocuuekommo($this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::iukiayaokaiiicwo . "\x70\141\x67\145\x5f\151\x6e\146\157\x5f\160\x65\x72\155\141\x6c\x69\x6e\x6b"), $migiiksoiymissge)); return $igqsaukqcqscimok; } protected function kooiucqkggeagccu(array $ywmkwiwkosakssii = []) : array { $ggauoeuaesiymgee = [self::ckmqoekmugkggeym => DecoratorQuery::imgymusqgccqsqqq(), self::eoaiagsgqsmskugs => ["\164\x61\x67" => __("\120\x6f\x73\164\x73\x20\x54\141\x67\147\145\x64\72\x20\x25\163", PR__CMN__COVER), "\x34\60\64" => __("\x45\162\x72\x6f\x72\40\x34\60\x34", PR__CMN__COVER), "\x74\141\170" => "\45\x73", "\x63\160\x61\147\145" => __("\x43\x6f\x6d\x6d\x65\156\164\x20\120\x61\147\145\x20\45\x73", PR__CMN__COVER), self::wwoeeogswkgeqack => get_bloginfo(self::NAME), self::imywcsggckkcywgk => __("\120\x61\147\x65\40\x25\163", PR__CMN__COVER), self::yayciqueeakqwese => __("\123\145\x61\x72\143\150\40\x52\145\x73\x75\154\x74\x73\x20\146\x6f\162\72\40\x25\163", PR__CMN__COVER), self::iwascisiiokuackw => __("\x41\162\164\x69\143\x6c\x65\x73\40\x50\157\163\x74\145\x64\x20\142\171\x20\x25\163", PR__CMN__COVER), self::qgciomgukmcwscqw => "\x25\x73"], self::geyisyamuoomusqo => null, self::iiogewmmwckmegcq => esc_url(ManipulateServer::gmigwwwmwemyaayy("\x2f")), self::quewuqgwgceoamee => "\x6c\x69", self::socgekwcqwaoyyug => "\157\154", self::koiywqsgmgmgscgy => "\163\x70\x61\156", self::yaooyaaieecskqsq => ["\x63\154\141\x73\163" => "\x62\x72\x65\x61\x64\143\162\x75\x6d\x62"], self::reigcooiouysaaok => ["\143\x6c\x61\x73\163" => "\142\162\x65\x61\144\x63\x72\165\x6d\x62\x2d\x6c\x69\x6e\153"], self::ceeoggmayqcuoqwi => ["\x63\154\141\x73\163" => "\x62\x72\x65\x61\x64\x63\x72\x75\x6d\142\55\x69\x74\145\x6d"], self::gawcyaqskcsegwey => ["\143\154\141\163\x73" => "\142\x72\145\x61\x64\143\x72\165\x6d\x62\55\144\x69\x76\x69\144\145\162"], self::mukyymeygmeoawck => ["\143\154\141\163\x73" => "\x62\x72\145\141\144\x63\x72\x75\x6d\142\x2d\x69\x74\x65\x6d\40\141\143\x74\151\166\x65"], self::qywgicgikawmwoay => []]; $ywmkwiwkosakssii = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::iukiayaokaiiicwo . "\x67\x65\x6e\145\x72\141\164\145\x5f\x61\x72\147\163"), $ywmkwiwkosakssii); return ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ggauoeuaesiymgee); } public function sywokgmoskcocqgy(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); $gqiaqmycqyywiqsw = $ywmkwiwkosakssii[self::reigcooiouysaaok]; $iwywmkygwewiamwm = ManipulateHTML::yuawgssgauywkiia("\x25\x32\x24\x73", "\45\61\44\x73", $gqiaqmycqyywiqsw); if (!$ywmkwiwkosakssii[self::koiywqsgmgmgscgy]) { goto cmegwsegsosyqcai; } $iwywmkygwewiamwm = ManipulateHTML::uuccukgasskgimsq($ywmkwiwkosakssii[self::koiywqsgmgmgscgy], $ywmkwiwkosakssii[self::qywgicgikawmwoay], $iwywmkygwewiamwm); cmegwsegsosyqcai: $ysmqgacyqwayokog = $ywmkwiwkosakssii[self::geyisyamuoomusqo]; if (!$ysmqgacyqwayokog) { goto wmywuusgukmmaams; } $ysmqgacyqwayokog = ManipulateHTML::gmqyuaqwgiayskei($ysmqgacyqwayokog, $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); goto gkyawqqcmigqgaiq; wmywuusgukmmaams: $ysmqgacyqwayokog = ManipulateHTML::uuccukgasskgimsq("\151", $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); gkyawqqcmigqgaiq: $caacssaumiqeaoaw = ManipulateHTML::qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::ceeoggmayqcuoqwi]); $aqykuigiuwmmcieu = ''; $momcykaoccoymeig = 0; $this->create($ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::iukiayaokaiiicwo . self::qwumqqyuasyskkkc), $this->ecwoamckysyqikqi(), $ywmkwiwkosakssii); $oammesyieqmwuwyi = ManipulateArray::yaeiiwwyckwugsem($oammesyieqmwuwyi, "\147\x65\x74\120\162\x69\x6f\x72\x69\164\171"); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof PageInfo) { goto ugqaaewwmkocwwgy; } if (!($igqsaukqcqscimok === end($oammesyieqmwuwyi))) { goto scisgsyemmsekgos; } $igqsaukqcqscimok->qmueseocuuekommo(''); $caacssaumiqeaoaw = ManipulateHTML::qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::mukyymeygmeoawck]); scisgsyemmsekgos: $aqykuigiuwmmcieu .= $caacssaumiqeaoaw; if (!($momcykaoccoymeig !== 0)) { goto cewmoqyysgsmuiya; } $aqykuigiuwmmcieu .= $ysmqgacyqwayokog; cewmoqyysgsmuiya: if ($igqsaukqcqscimok->ycqquoiyyuesegsy()) { goto igooksugieceoege; } $aqykuigiuwmmcieu .= $igqsaukqcqscimok->qcgakseyaikigqco(); goto omqiayeucoioqoao; igooksugieceoege: $aqykuigiuwmmcieu .= sprintf($iwywmkygwewiamwm, $igqsaukqcqscimok->ycqquoiyyuesegsy(), $igqsaukqcqscimok->qcgakseyaikigqco()); omqiayeucoioqoao: $aqykuigiuwmmcieu .= "\x3c\x2f{$ywmkwiwkosakssii[self::quewuqgwgceoamee]}\76"; $momcykaoccoymeig++; ugqaaewwmkocwwgy: egyyiccaeeiooaua: } ooeausyowguqicuo: return ManipulateHTML::uuccukgasskgimsq($ywmkwiwkosakssii[self::socgekwcqwaoyyug], $ywmkwiwkosakssii[self::yaooyaaieecskqsq], $aqykuigiuwmmcieu); } public function create(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); if ($this->ecwoamckysyqikqi()) { goto yiowgigkkwsoqcci; } $oikyogsosqcyueay = ManipulatePage::cykwscocqwykiocm(); $qawuqcsueakkgiio = DecoratorQuery::qaumqeeagueuqkcg(self::kkcqmwgccaygggcu); $iwkyyocymeukcceu = ManipulateArray::get($ywmkwiwkosakssii, self::eoaiagsgqsmskugs); $gmigwwwmwemyaayy = ManipulateArray::get($ywmkwiwkosakssii, self::iiogewmmwckmegcq); $meqocwsecsywiiqs = ''; $eiyqsiwggkuuqqee = 0; $mksyucucyswaukig = ManipulateArray::get($ywmkwiwkosakssii, self::ckmqoekmugkggeym); if ($mksyucucyswaukig instanceof WP_Post) { goto kqgcyoscsusgoaqi; } if (!$mksyucucyswaukig instanceof WP_Term) { goto wgewmqieuamsoayy; } $meqocwsecsywiiqs = ManipulateTerm::qcgakseyaikigqco($mksyucucyswaukig); $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($mksyucucyswaukig); wgewmqieuamsoayy: goto ueigkucgaucgeimc; kqgcyoscsusgoaqi: $meqocwsecsywiiqs = ManipulatePost::qcgakseyaikigqco($mksyucucyswaukig); $eiyqsiwggkuuqqee = ManipulatePost::ygqycmmkoiuocoia($mksyucucyswaukig); $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($mksyucucyswaukig); ueigkucgaucgeimc: if (DecoratorQuery::takycgcamoacksqw()) { goto qukocuwgakemmyga; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::wwoeeogswkgeqack), $gmigwwwmwemyaayy, false)->ugaqcouwcuiaemgo(self::eycwiessycciwsao)); if (DecoratorQuery::seokosgecygsmqau()) { goto kocqqoyymosmuksu; } if (DecoratorQuery::sgayqmgoigoseaoo()) { goto uimeeckqksqeekqq; } if (DecoratorQuery::qmssqeyayicowkgy()) { goto ucqmumuygcywwqma; } if (DecoratorQuery::gouusicsisumuiei()) { goto gommacygsykyussk; } if (DecoratorQuery::qwakseskocsyiyks()) { goto gygwewcqsmwqismo; } if (DecoratorQuery::mgkmukikygowogsm()) { goto mwysseaekcsiesmm; } if (DecoratorQuery::wqscegcksyocaias()) { goto iiiccouaaqsyikae; } if (DecoratorQuery::kccakwkaqugygwmq() && !DecoratorQuery::aauyuieeeaakygki()) { goto kqswcsysqawkcgye; } if (ManipulatePost::sqyyemqmmgmyiaam()) { goto eeyyskqsmquyquqw; } if (DecoratorQuery::aauyuieeeaakygki()) { goto uegouoiuyoqkcscg; } if (DecoratorQuery::sgeaogakoscmysgc() && !$eiyqsiwggkuuqqee) { goto isgwkwacoyimiauk; } if (DecoratorQuery::sgeaogakoscmysgc() && $eiyqsiwggkuuqqee) { goto uaqackioaiqwcocy; } if (DecoratorQuery::ocwoeosukggumggw()) { goto sockeswygwcskeuq; } if (DecoratorQuery::mykygowqgwcuecua()) { goto ugqwuugsweqgmywk; } if (DecoratorQuery::kmmyuiwaogukwqqi()) { goto cogywoqcqummsyus; } if (!(has_post_format() && !DecoratorQuery::cukiusasccucgwqc())) { goto eekcoeikaeaaeyii; } $this->wuqmciamumosasqa(get_post_format_string(get_post_format())); eekcoeikaeaaeyii: goto gmwykkouysyaqwqm; cogywoqcqummsyus: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x34\60\x34")); gmwykkouysyaqwqm: goto uaukmuiwskcemcsw; ugqwuugsweqgmywk: $qscaoekmoooeuyqg = ManipulateUser::get(DecoratorQuery::qaumqeeagueuqkcg(self::iwascisiiokuackw), true); if ($qawuqcsueakkgiio) { goto csammceowmqwaamq; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::iwascisiiokuackw), ManipulateUser::ygwimyogyaqgumam($qscaoekmoooeuyqg))); goto ocaguquugeamqckq; csammceowmqwaamq: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::iwascisiiokuackw), ManipulateUser::ygwimyogyaqgumam($qscaoekmoooeuyqg)), DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg), false)->ugaqcouwcuiaemgo(self::iwascisiiokuackw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); ocaguquugeamqckq: uaukmuiwskcemcsw: goto mkwkkmkgiqiamacc; sockeswygwcskeuq: if ($qawuqcsueakkgiio) { goto gcckqucukawcasgk; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\164\141\x67"), single_tag_title('', false))); goto qmkaeeomgkwggoyo; gcckqucukawcasgk: $scwiymciagumsuiw = DecoratorQuery::qaumqeeagueuqkcg("\164\141\x67\x5f\151\144"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(single_tag_title('', false), ManipulateTerm::qmgcisuuikgmqcsu($scwiymciagumsuiw), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($scwiymciagumsuiw))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); qmkaeeomgkwggoyo: mkwkkmkgiqiamacc: goto cscusseysqygsoiy; uaqackioaiqwcocy: $eyagosskwwmgwmog = get_post_ancestors(ManipulatePost::mwikyscisascoeea($mksyucucyswaukig)); foreach (array_reverse($eyagosskwwmgwmog) as $qkcoyiyeuoyyoocy) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulatePost::qcgakseyaikigqco($qkcoyiyeuoyyoocy), ManipulatePost::ycqquoiyyuesegsy($qkcoyiyeuoyyoocy), false)->ugaqcouwcuiaemgo(self::imywcsggckkcywgk)); cuumeogeomowqisc: } uiosisocuwokwkie: $this->wuqmciamumosasqa($meqocwsecsywiiqs); cscusseysqygsoiy: goto mggeqkcksyaymcsa; isgwkwacoyimiauk: $oammesyieqmwuwyi = $this->sscegwueamckwmcy(self::ggcmgaccygaquiwu . "\160\x61\147\x65\x5f\x69\x74\x65\x6d", ["\150\141\163\137\160\141\147\145\137\x6e\x61\x6d\145" => true], $mksyucucyswaukig); if (!($oammesyieqmwuwyi && isset($oammesyieqmwuwyi["\150\x61\x73\137\x70\141\147\145\x5f\x6e\x61\x6d\145"]) && $oammesyieqmwuwyi["\x68\x61\x73\x5f\x70\x61\147\145\137\x6e\141\x6d\x65"])) { goto iikiiioqiyegyaak; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); iikiiioqiyegyaak: mggeqkcksyaymcsa: goto cgyakcqgugqgkqiw; uegouoiuyoqkcscg: $omwmuycmeqcqokom = ManipulatePost::get($eiyqsiwggkuuqqee); $awiycosuekoeeqou = get_the_category(ManipulatePost::mwikyscisascoeea($omwmuycmeqcqokom)); $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($awiycosuekoeeqou), ManipulateTerm::qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($awiycosuekoeeqou))); gicyayswqyuoekcq: } kosaqwikueyksqmw: $this->wuqmciamumosasqa(ManipulatePost::qcgakseyaikigqco($omwmuycmeqcqokom), ManipulatePost::ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo("\x73\x69\x6e\x67\154\x65")->aseocggwwegcmqes(ManipulatePost::gueasuouwqysmomu($omwmuycmeqcqokom)); $this->wuqmciamumosasqa($meqocwsecsywiiqs); cgyakcqgugqgkqiw: goto ewscugeuicukkycc; eeyyskqsmquyquqw: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($mksyucucyswaukig, true); if (!$useksmwkuswkwcqg) { goto mqkmcysgoiaouiwm; } if ($qawuqcsueakkgiio) { goto ogqmesokykywseys; } $this->wuqmciamumosasqa($useksmwkuswkwcqg->label); goto ykomgumacooyomsk; ogqmesokykywseys: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($useksmwkuswkwcqg->label, ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg->name), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg->name)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); ykomgumacooyomsk: mqkmcysgoiaouiwm: ewscugeuicukkycc: goto wusciwkkckmqigms; kqswcsysqawkcgye: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($mksyucucyswaukig); if (self::mswoacegomcucaik !== $useksmwkuswkwcqg) { goto cwwmimggaaecmucw; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulatePost::qcgakseyaikigqco($oikyogsosqcyueay), ManipulatePost::ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(self::wwoeeogswkgeqack)); $awiycosuekoeeqou = get_the_category(); if (!isset($awiycosuekoeeqou[0])) { goto iwekmyyccgiyuecc; } $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($awiycosuekoeeqou), ManipulateTerm::qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($awiycosuekoeeqou))); ogsaaqsaogcqiouy: } ousiuuwgwkiyikyq: iwekmyyccgiyuecc: if (DecoratorQuery::qaumqeeagueuqkcg("\x63\x70\x61\x67\145")) { goto ikqqskkqqwmwssoo; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); goto aomysykcgikegiau; ikqqskkqqwmwssoo: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($meqocwsecsywiiqs, $migiiksoiymissge, false)->ugaqcouwcuiaemgo("\x73\x69\156\147\x6c\x65")->aseocggwwegcmqes(ManipulatePost::gueasuouwqysmomu($useksmwkuswkwcqg, true)->name)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\143\x70\141\x67\145"), DecoratorQuery::qaumqeeagueuqkcg("\143\x70\x61\x67\x65"))); aomysykcgikegiau: goto awoaooyoeoyeeqee; cwwmimggaaecmucw: if (!($wkqsmssuaiaqmeee = ManipulatePost::waaisqccqacqeium($useksmwkuswkwcqg))) { goto kqqiegkuqagcqsya; } if (!($wkqsmssuaiaqmeee->public && $wkqsmssuaiaqmeee->has_archive)) { goto qgeugwymkkiacwoc; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($wkqsmssuaiaqmeee->labels->name, ManipulatePost::mqgeysameoesmuqw($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); qgeugwymkkiacwoc: $kesssewsiegssiya = ManipulateArray::get($wkqsmssuaiaqmeee, "\155\141\151\156\x5f\164\141\170\157\x6e\157\155\171"); if ($kesssewsiegssiya) { goto mugqyyeayeyggqqk; } switch ($useksmwkuswkwcqg) { case self::oguseymmyyoyaako: $kesssewsiegssiya = self::cmckeoksigiaqykc; goto emmsycooskoqmgeg; } ouamogymawucwswu: emmsycooskoqmgeg: mugqyyeayeyggqqk: if (!$kesssewsiegssiya) { goto kkumywowcoycymeo; } $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya); if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto guykyqecgswcsmws; } if ($kesssewsiegssiya->_builtin) { goto wyuemgggaqogsmsq; } $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($mksyucucyswaukig, ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya)); if (!isset($uyuaosigqymaqsaa[0])) { goto samwkqgwouggsguc; } $iwewcwusemqaiggk = $uyuaosigqymaqsaa[0]; $qyiciauwscqywwgq = $kesssewsiegssiya; $eyagosskwwmgwmog = get_ancestors(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), ManipulateTaxonomy::aakmagwggmkoiiyu($qyiciauwscqywwgq), self::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = ManipulateTerm::get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($sikiyacogecgmyai), ManipulateTerm::qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($sikiyacogecgmyai))); oomguqikqokqwgku: } acsqgiuageaasiyy: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk), ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($iwewcwusemqaiggk))); samwkqgwouggsguc: wyuemgggaqogsmsq: guykyqecgswcsmws: kkumywowcoycymeo: if (!($omwmuycmeqcqokom = ManipulatePost::ygqycmmkoiuocoia($mksyucucyswaukig))) { goto miweggwqeiaeweia; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulatePost::qcgakseyaikigqco($omwmuycmeqcqokom), ManipulatePost::ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo("\x73\151\156\x67\x6c\x65")->aseocggwwegcmqes(ManipulatePost::gueasuouwqysmomu($omwmuycmeqcqokom))); miweggwqeiaeweia: $this->wuqmciamumosasqa($meqocwsecsywiiqs); kqqiegkuqagcqsya: awoaooyoeoyeeqee: wusciwkkckmqigms: goto ukkcmocamwgiqayu; iiiccouaaqsyikae: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\131"), get_year_link(get_the_time("\x59")), false)->ugaqcouwcuiaemgo("\x79\x65\141\162")); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x46"), get_month_link(get_the_time("\131"), get_the_time("\x46")), false)->ugaqcouwcuiaemgo("\155\x6f\156\164\x68")); $this->wuqmciamumosasqa(get_the_time("\x64")); ukkcmocamwgiqayu: goto amgsueumgaguceaa; mwysseaekcsiesmm: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\131"), get_year_link(get_the_time("\131")), false)->ugaqcouwcuiaemgo("\171\145\x61\162")); $this->wuqmciamumosasqa(get_the_time("\106")); amgsueumgaguceaa: goto uougwgeyiokewkkm; gygwewcqsmwqismo: $this->wuqmciamumosasqa(get_the_time("\x59")); uougwgeyiokewkkm: goto ukqocwewouckikso; gommacygsykyussk: $qmqecyyaiimkyaae = get_search_query(); if ($qawuqcsueakkgiio) { goto ciykoyeioqgyaeqo; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::yayciqueeakqwese), $qmqecyyaiimkyaae)); goto mqicocmqegwukkwg; ciykoyeioqgyaeqo: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::yayciqueeakqwese), get_search_query(self::kkcqmwgccaygggcu)), DecoratorQuery::yqymaqmqiqmmmsoo("\x73", $qmqecyyaiimkyaae, $gmigwwwmwemyaayy), false)->ugaqcouwcuiaemgo(self::yayciqueeakqwese)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); mqicocmqegwukkwg: ukqocwewouckikso: goto uykousayyomcaeaa; ucqmumuygcywwqma: $iwewcwusemqaiggk = DecoratorQuery::imgymusqgccqsqqq(); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto asiqwuoswmigcaki; } $kesssewsiegssiya = ManipulateArray::get(DecoratorQuery::imgymusqgccqsqqq(), self::gmmygyiecgmggaam); if (!$kesssewsiegssiya) { goto msemumccgceyugmg; } $qyiciauwscqywwgq = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya); if (!$qyiciauwscqywwgq instanceof WP_Taxonomy) { goto eogwckcymuugikuy; } foreach ($qyiciauwscqywwgq->object_type as $useksmwkuswkwcqg) { $wkqsmssuaiaqmeee = ManipulatePost::waaisqccqacqeium($useksmwkuswkwcqg); if (!($wkqsmssuaiaqmeee && $wkqsmssuaiaqmeee->public)) { goto eeauyscekuckoues; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($wkqsmssuaiaqmeee->label, ManipulatePost::mqgeysameoesmuqw($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); goto owmuceyswmgueasi; eeauyscekuckoues: mwsmsguqqkcwiiuk: } owmuceyswmgueasi: eogwckcymuugikuy: msemumccgceyugmg: $eyagosskwwmgwmog = get_ancestors(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), ManipulateTerm::yyoeeseewqmmyaee($iwewcwusemqaiggk), self::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = ManipulateTerm::get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($sikiyacogecgmyai), ManipulateTerm::qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($sikiyacogecgmyai))); qoqskyuuwueqkquk: } wagqgeqymeqoeuyi: if ($qawuqcsueakkgiio) { goto iwsuawwqomaowuii; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\164\x61\170"), ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk))); goto wcugqegqsuuuwqao; iwsuawwqomaowuii: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk), ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($iwewcwusemqaiggk))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); wcugqegqsuuuwqao: asiqwuoswmigcaki: uykousayyomcaeaa: goto iuuuususuuuaieem; uimeeckqksqeekqq: $awiycosuekoeeqou = DecoratorQuery::qaumqeeagueuqkcg("\143\x61\164"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulatePost::qcgakseyaikigqco($oikyogsosqcyueay), ManipulatePost::ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(self::wwoeeogswkgeqack)); $eyagosskwwmgwmog = get_ancestors($awiycosuekoeeqou, self::qgciomgukmcwscqw); foreach (array_reverse($eyagosskwwmgwmog) as $omwmuycmeqcqokom) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($omwmuycmeqcqokom), ManipulateTerm::qmgcisuuikgmqcsu($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(self::qgciomgukmcwscqw)); wkeuuycukmuqiaom: } sggawugoykqcmsug: if ($qawuqcsueakkgiio) { goto wakmayaoqoskekqy; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::qgciomgukmcwscqw), single_cat_title('', false))); goto qmuwoecuacmkwgem; wakmayaoqoskekqy: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($awiycosuekoeeqou), ManipulateTerm::qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(self::qgciomgukmcwscqw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); qmuwoecuacmkwgem: iuuuususuuuaieem: goto uqokiksoqcwwqgio; kocqqoyymosmuksu: $this->wuqmciamumosasqa(ManipulatePost::qcgakseyaikigqco($oikyogsosqcyueay)); uqokiksoqcwwqgio: goto sioekkmekwygemyc; qukocuwgakemmyga: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::wwoeeogswkgeqack), $gmigwwwmwemyaayy); sioekkmekwygemyc: yiowgigkkwsoqcci: } }
