<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668f2a2573623             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Foundation\Data\PageInfo; use WP_Post; use WP_Taxonomy; use WP_Term; class Generator extends Common { const geyisyamuoomusqo = "\x64\x69\166\x69\x64\x65\x72"; const iiogewmmwckmegcq = "\x68\x6f\x6d\x65\137\165\x72\154"; const yaooyaaieecskqsq = "\x77\x72\x61\160\137\141\164\x74\162\x73"; const reigcooiouysaaok = "\x6c\151\156\x6b\137\141\164\164\162\163"; const ceeoggmayqcuoqwi = "\x69\x74\145\x6d\x5f\x61\164\164\x72\163"; const quewuqgwgceoamee = "\x69\164\145\155\137\145\x6c\x65\x6d\145\156\164"; const socgekwcqwaoyyug = "\167\162\141\160\137\x65\x6c\x65\x6d\145\156\x74"; const gawcyaqskcsegwey = "\x64\x69\166\x69\x64\x65\x72\x5f\x61\164\x74\x72\163"; const koiywqsgmgmgscgy = "\x6c\151\x6e\153\x5f\x63\157\x6e\x74\141\x69\156\145\x72"; const mukyymeygmeoawck = "\141\143\164\151\x76\145\x5f\151\x74\x65\155\x5f\x61\164\164\x72\163"; const qywgicgikawmwoay = "\154\151\156\x6b\x5f\x63\x6f\156\x74\x61\x69\x6e\145\x72\137\x61\164\x74\162\163"; protected array $breadcrumb = []; public function ecwoamckysyqikqi() : array { return $this->breadcrumb; } protected function oeewiaacscgyamai(PageInfo $igqsaukqcqscimok) : self { $this->breadcrumb = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\142\145\146\157\x72\x65\137\141\x64\144\137\x69\x74\145\155", $this->breadcrumb, $igqsaukqcqscimok, $this); $igqsaukqcqscimok = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x61\144\x64\137\x69\x74\x65\155", $igqsaukqcqscimok, $this); if (!$igqsaukqcqscimok) { goto sggawugoykqcmsug; } $this->breadcrumb[] = $igqsaukqcqscimok; sggawugoykqcmsug: $this->breadcrumb = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x61\x66\x74\145\x72\x5f\141\x64\x64\x5f\151\164\x65\155", $this->breadcrumb, $igqsaukqcqscimok, $this); return $this; } protected function uikgwcuascgeissw($iwkyyocymeukcceu, $uusmaiomayssaecw) : ?string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($iwkyyocymeukcceu, $uusmaiomayssaecw, ''); } protected function yceuwwmgwwqqcweu($guwumyyyakswawas) : array { $aokagokqyuysuksm = $guwumyyyakswawas[0]->cat_ID; $eyagosskwwmgwmog = get_ancestors($aokagokqyuysuksm, self::qgciomgukmcwscqw); $eyagosskwwmgwmog = array_reverse($eyagosskwwmgwmog); $eyagosskwwmgwmog[] = $aokagokqyuysuksm; return $eyagosskwwmgwmog; } public function wuqmciamumosasqa(?string $meqocwsecsywiiqs, ?string $migiiksoiymissge = '', bool $cmscqcqicyqkweuc = true) : PageInfo { static $ikwcsswcseyywgeo; if ($ikwcsswcseyywgeo) { goto wkeuuycukmuqiaom; } $ikwcsswcseyywgeo = 1; wkeuuycukmuqiaom: $igqsaukqcqscimok = new PageInfo(); if (!$cmscqcqicyqkweuc) { goto wakmayaoqoskekqy; } $yyimiwcuegayoskq = $this->caokeucsksukesyo()->kyqakacqeumicgag()->iqoacwuiemooiysg(); $this->oeewiaacscgyamai($igqsaukqcqscimok->aseocggwwegcmqes($yyimiwcuegayoskq->gueasuouwqysmomu())->ugaqcouwcuiaemgo($yyimiwcuegayoskq->asuigsqoowmekwok())); wakmayaoqoskekqy: $ikwcsswcseyywgeo += 10; $igqsaukqcqscimok->gswweykyogmsyawy($meqocwsecsywiiqs)->uaomeggmwqmmeoki($cmscqcqicyqkweuc)->jyumyyugiwwiqomk($ikwcsswcseyywgeo)->qmueseocuuekommo($this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\160\x61\147\145\x5f\151\x6e\146\x6f\137\160\145\162\x6d\141\154\151\x6e\153", $migiiksoiymissge)); return $igqsaukqcqscimok; } protected function kooiucqkggeagccu(array $ywmkwiwkosakssii = []) : array { $ggauoeuaesiymgee = [self::ckmqoekmugkggeym => $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->imgymusqgccqsqqq(), self::eoaiagsgqsmskugs => ["\164\141\147" => __("\x50\157\x73\164\x73\x20\124\x61\147\x67\145\144\x3a\40\45\x73", PR__CMN__COVER), "\64\60\x34" => __("\105\162\162\x6f\x72\x20\x34\60\64", PR__CMN__COVER), "\x74\x61\170" => "\x25\x73", "\143\x70\x61\147\x65" => __("\103\157\x6d\155\145\156\x74\40\120\141\147\x65\x20\x25\x73", PR__CMN__COVER), self::wwoeeogswkgeqack => $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(self::NAME), self::imywcsggckkcywgk => __("\x50\x61\147\x65\x20\45\x73", PR__CMN__COVER), self::yayciqueeakqwese => __("\x53\x65\141\162\x63\x68\x20\x52\x65\x73\165\x6c\164\x73\x20\146\x6f\x72\x3a\x20\45\x73", PR__CMN__COVER), self::iwascisiiokuackw => __("\101\162\164\151\143\x6c\145\x73\40\120\x6f\x73\x74\x65\144\40\142\x79\40\45\163", PR__CMN__COVER), self::qgciomgukmcwscqw => "\45\x73"], self::geyisyamuoomusqo => null, self::iiogewmmwckmegcq => $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy("\57"), self::quewuqgwgceoamee => "\154\x69", self::socgekwcqwaoyyug => "\x6f\x6c", self::koiywqsgmgmgscgy => "\163\160\141\x6e", self::yaooyaaieecskqsq => ["\143\x6c\x61\163\x73" => "\142\x72\x65\141\x64\143\162\165\155\142"], self::reigcooiouysaaok => ["\143\154\141\x73\163" => "\142\x72\145\x61\x64\x63\162\165\x6d\x62\x2d\x6c\x69\x6e\153"], self::ceeoggmayqcuoqwi => ["\143\154\141\163\x73" => "\142\x72\145\x61\144\143\x72\165\155\x62\x2d\151\164\145\x6d"], self::gawcyaqskcsegwey => ["\x63\x6c\141\x73\x73" => "\x62\162\145\x61\144\x63\x72\x75\155\142\55\x64\151\166\x69\x64\x65\x72"], self::mukyymeygmeoawck => ["\x63\x6c\x61\163\163" => "\142\x72\x65\141\144\x63\162\165\x6d\142\x2d\x69\164\145\x6d\40\141\x63\164\x69\166\145"], self::qywgicgikawmwoay => []]; $ywmkwiwkosakssii = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\147\x65\x6e\x65\x72\141\x74\x65\x5f\141\162\147\163", $ywmkwiwkosakssii); return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ggauoeuaesiymgee); } public function generate(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); $gqiaqmycqyywiqsw = $ywmkwiwkosakssii[self::reigcooiouysaaok]; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia("\45\62\x24\163", "\x25\61\44\x73", $gqiaqmycqyywiqsw); if (!$ywmkwiwkosakssii[self::koiywqsgmgmgscgy]) { goto qmuwoecuacmkwgem; } $iwywmkygwewiamwm = $swqimwqeweekeusq->uuccukgasskgimsq($ywmkwiwkosakssii[self::koiywqsgmgmgscgy], $ywmkwiwkosakssii[self::qywgicgikawmwoay], $iwywmkygwewiamwm); qmuwoecuacmkwgem: $ysmqgacyqwayokog = $ywmkwiwkosakssii[self::geyisyamuoomusqo]; if (!$ysmqgacyqwayokog) { goto owmuceyswmgueasi; } $ysmqgacyqwayokog = $swqimwqeweekeusq->gmqyuaqwgiayskei($ysmqgacyqwayokog, $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); goto mwsmsguqqkcwiiuk; owmuceyswmgueasi: $ysmqgacyqwayokog = $swqimwqeweekeusq->uuccukgasskgimsq("\x69", $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); mwsmsguqqkcwiiuk: $caacssaumiqeaoaw = $swqimwqeweekeusq->qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::ceeoggmayqcuoqwi]); $aqykuigiuwmmcieu = ''; $momcykaoccoymeig = 0; $this->create($ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . self::qwumqqyuasyskkkc, $this->ecwoamckysyqikqi(), $ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($oammesyieqmwuwyi, "\x67\145\x74\120\x72\x69\x6f\x72\151\164\x79"); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof PageInfo) { goto wcugqegqsuuuwqao; } if (!($igqsaukqcqscimok === end($oammesyieqmwuwyi))) { goto msemumccgceyugmg; } $igqsaukqcqscimok->qmueseocuuekommo(''); $caacssaumiqeaoaw = $swqimwqeweekeusq->qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::mukyymeygmeoawck]); msemumccgceyugmg: $aqykuigiuwmmcieu .= $caacssaumiqeaoaw; if (!($momcykaoccoymeig !== 0)) { goto wagqgeqymeqoeuyi; } $aqykuigiuwmmcieu .= $ysmqgacyqwayokog; wagqgeqymeqoeuyi: if ($igqsaukqcqscimok->ycqquoiyyuesegsy()) { goto qoqskyuuwueqkquk; } $aqykuigiuwmmcieu .= $igqsaukqcqscimok->qcgakseyaikigqco(); goto iwsuawwqomaowuii; qoqskyuuwueqkquk: $aqykuigiuwmmcieu .= sprintf($iwywmkygwewiamwm, $igqsaukqcqscimok->ycqquoiyyuesegsy(), $igqsaukqcqscimok->qcgakseyaikigqco()); iwsuawwqomaowuii: $aqykuigiuwmmcieu .= "\74\57{$ywmkwiwkosakssii[self::quewuqgwgceoamee]}\76"; $momcykaoccoymeig++; wcugqegqsuuuwqao: eogwckcymuugikuy: } eeauyscekuckoues: return $swqimwqeweekeusq->uuccukgasskgimsq($ywmkwiwkosakssii[self::socgekwcqwaoyyug], $ywmkwiwkosakssii[self::yaooyaaieecskqsq], $aqykuigiuwmmcieu); } public function create(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); if ($this->ecwoamckysyqikqi()) { goto yoqakewookqoqacm; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $oikyogsosqcyueay = $this->caokeucsksukesyo()->kyqakacqeumicgag()->cykwscocqwykiocm(); $qawuqcsueakkgiio = $mumyimcwkaemyyue->qaumqeeagueuqkcg(self::kkcqmwgccaygggcu); $iwkyyocymeukcceu = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::eoaiagsgqsmskugs); $gmigwwwmwemyaayy = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::iiogewmmwckmegcq); $meqocwsecsywiiqs = ''; $eiyqsiwggkuuqqee = 0; $mksyucucyswaukig = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::ckmqoekmugkggeym); if ($mksyucucyswaukig instanceof WP_Post) { goto ciykoyeioqgyaeqo; } if (!$mksyucucyswaukig instanceof WP_Term) { goto asiqwuoswmigcaki; } $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($mksyucucyswaukig); $migiiksoiymissge = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($mksyucucyswaukig); asiqwuoswmigcaki: goto mqicocmqegwukkwg; ciykoyeioqgyaeqo: $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($mksyucucyswaukig); $eiyqsiwggkuuqqee = $seumokooiykcomco->ygqycmmkoiuocoia($mksyucucyswaukig); $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($mksyucucyswaukig); mqicocmqegwukkwg: if ($mumyimcwkaemyyue->takycgcamoacksqw()) { goto uckewycoogsogwiy; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::wwoeeogswkgeqack), $gmigwwwmwemyaayy, false)->ugaqcouwcuiaemgo(self::eycwiessycciwsao)); if ($mumyimcwkaemyyue->seokosgecygsmqau()) { goto yykqaowwsqgqysmq; } if ($mumyimcwkaemyyue->sgayqmgoigoseaoo()) { goto oeocukauoyosicso; } if ($mumyimcwkaemyyue->qmssqeyayicowkgy()) { goto wkwamkgkwykeqkec; } if ($mumyimcwkaemyyue->gouusicsisumuiei()) { goto wsesqmcqoiyyqkqi; } if ($mumyimcwkaemyyue->qwakseskocsyiyks()) { goto oyeyomcgkmgymogq; } if ($mumyimcwkaemyyue->mgkmukikygowogsm()) { goto gamqcwuwkikwqoay; } if ($mumyimcwkaemyyue->wqscegcksyocaias()) { goto yiowgigkkwsoqcci; } if ($mumyimcwkaemyyue->kccakwkaqugygwmq() && !$mumyimcwkaemyyue->aauyuieeeaakygki()) { goto qukocuwgakemmyga; } if ($cskucqcumqsyimye->migkyseymeomymmy()) { goto kocqqoyymosmuksu; } if ($mumyimcwkaemyyue->aauyuieeeaakygki()) { goto uimeeckqksqeekqq; } if ($mumyimcwkaemyyue->sgeaogakoscmysgc() && !$eiyqsiwggkuuqqee) { goto ucqmumuygcywwqma; } if ($mumyimcwkaemyyue->sgeaogakoscmysgc() && $eiyqsiwggkuuqqee) { goto gommacygsykyussk; } if ($mumyimcwkaemyyue->ocwoeosukggumggw()) { goto gygwewcqsmwqismo; } if ($mumyimcwkaemyyue->mykygowqgwcuecua()) { goto mwysseaekcsiesmm; } if ($mumyimcwkaemyyue->kmmyuiwaogukwqqi()) { goto iiiccouaaqsyikae; } if (!(has_post_format() && !$mumyimcwkaemyyue->cukiusasccucgwqc())) { goto wusciwkkckmqigms; } $this->wuqmciamumosasqa(get_post_format_string(get_post_format())); wusciwkkckmqigms: goto ukkcmocamwgiqayu; iiiccouaaqsyikae: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\64\60\x34")); ukkcmocamwgiqayu: goto amgsueumgaguceaa; mwysseaekcsiesmm: $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $qscaoekmoooeuyqg = $yoiguusocukqeayg->get($mumyimcwkaemyyue->qaumqeeagueuqkcg(self::iwascisiiokuackw), true); if ($qawuqcsueakkgiio) { goto ewscugeuicukkycc; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::iwascisiiokuackw), $yoiguusocukqeayg->ygwimyogyaqgumam($qscaoekmoooeuyqg))); goto kqswcsysqawkcgye; ewscugeuicukkycc: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::iwascisiiokuackw), $yoiguusocukqeayg->ygwimyogyaqgumam($qscaoekmoooeuyqg)), $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($qscaoekmoooeuyqg), false)->ugaqcouwcuiaemgo(self::iwascisiiokuackw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); kqswcsysqawkcgye: amgsueumgaguceaa: goto uougwgeyiokewkkm; gygwewcqsmwqismo: if ($qawuqcsueakkgiio) { goto cgyakcqgugqgkqiw; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::qeueagcuyogwwyky), single_tag_title('', false))); goto eeyyskqsmquyquqw; cgyakcqgugqgkqiw: $scwiymciagumsuiw = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\164\141\147\137\151\x64"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(single_tag_title('', false), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($scwiymciagumsuiw), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($scwiymciagumsuiw))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); eeyyskqsmquyquqw: uougwgeyiokewkkm: goto ukqocwewouckikso; gommacygsykyussk: $eyagosskwwmgwmog = get_post_ancestors($seumokooiykcomco->iooowgsqoyqseyuu($mksyucucyswaukig)); foreach (array_reverse($eyagosskwwmgwmog) as $qkcoyiyeuoyyoocy) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($qkcoyiyeuoyyoocy), $seumokooiykcomco->ycqquoiyyuesegsy($qkcoyiyeuoyyoocy), false)->ugaqcouwcuiaemgo(self::imywcsggckkcywgk)); uegouoiuyoqkcscg: } mggeqkcksyaymcsa: $this->wuqmciamumosasqa($meqocwsecsywiiqs); ukqocwewouckikso: goto uykousayyomcaeaa; ucqmumuygcywwqma: $oammesyieqmwuwyi = $this->sscegwueamckwmcy(self::ggcmgaccygaquiwu . "\160\141\x67\145\x5f\x69\164\x65\x6d", ["\x68\141\x73\137\x70\141\x67\145\x5f\156\x61\155\x65" => true], $mksyucucyswaukig); if (!($oammesyieqmwuwyi && isset($oammesyieqmwuwyi["\x68\141\x73\x5f\160\141\147\145\137\x6e\x61\x6d\145"]) && $oammesyieqmwuwyi["\150\x61\x73\137\160\141\147\145\137\156\x61\x6d\145"])) { goto isgwkwacoyimiauk; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); isgwkwacoyimiauk: uykousayyomcaeaa: goto iuuuususuuuaieem; uimeeckqksqeekqq: $omwmuycmeqcqokom = $seumokooiykcomco->get($eiyqsiwggkuuqqee); $awiycosuekoeeqou = get_the_category($seumokooiykcomco->iooowgsqoyqseyuu($omwmuycmeqcqokom)); $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($awiycosuekoeeqou))); cscusseysqygsoiy: } uaqackioaiqwcocy: $this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($omwmuycmeqcqokom), $seumokooiykcomco->ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($omwmuycmeqcqokom)); $this->wuqmciamumosasqa($meqocwsecsywiiqs); iuuuususuuuaieem: goto uqokiksoqcwwqgio; kocqqoyymosmuksu: $useksmwkuswkwcqg = $cskucqcumqsyimye->aakmagwggmkoiiyu($mksyucucyswaukig); $yowggsumsmeoeiqc = $cskucqcumqsyimye->uikgwcuascgeissw($mksyucucyswaukig, self::NAME); if (!$useksmwkuswkwcqg) { goto mkwkkmkgiqiamacc; } if ($qawuqcsueakkgiio) { goto uaukmuiwskcemcsw; } $this->wuqmciamumosasqa($yowggsumsmeoeiqc); goto sockeswygwcskeuq; uaukmuiwskcemcsw: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($yowggsumsmeoeiqc, $cskucqcumqsyimye->myagyqumwekameww($useksmwkuswkwcqg), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); sockeswygwcskeuq: mkwkkmkgiqiamacc: uqokiksoqcwwqgio: goto sioekkmekwygemyc; qukocuwgakemmyga: $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($mksyucucyswaukig); if (self::mswoacegomcucaik !== $useksmwkuswkwcqg) { goto gmwykkouysyaqwqm; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay), $seumokooiykcomco->ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(self::wwoeeogswkgeqack)); $awiycosuekoeeqou = get_the_category(); if (!isset($awiycosuekoeeqou[0])) { goto ocaguquugeamqckq; } $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou, self::qgciomgukmcwscqw), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($awiycosuekoeeqou))); csammceowmqwaamq: } qmkaeeomgkwggoyo: ocaguquugeamqckq: if ($mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\160\x61\x67\145")) { goto eekcoeikaeaaeyii; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); goto cogywoqcqummsyus; eekcoeikaeaaeyii: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($meqocwsecsywiiqs, $migiiksoiymissge, false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($useksmwkuswkwcqg))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\143\x70\x61\x67\145"), $mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\x70\x61\147\145"))); cogywoqcqummsyus: goto ugqwuugsweqgmywk; gmwykkouysyaqwqm: if (!($wkqsmssuaiaqmeee = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg))) { goto gcckqucukawcasgk; } if (!($wkqsmssuaiaqmeee->public && $wkqsmssuaiaqmeee->has_archive)) { goto aomysykcgikegiau; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($cskucqcumqsyimye->uikgwcuascgeissw($wkqsmssuaiaqmeee, self::NAME), $cskucqcumqsyimye->myagyqumwekameww($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); aomysykcgikegiau: $kesssewsiegssiya = $gkyciwoiiisgywcs->get($wkqsmssuaiaqmeee, "\x6d\141\151\x6e\x5f\164\x61\x78\x6f\156\157\155\x79"); if ($kesssewsiegssiya) { goto ogqmesokykywseys; } switch ($useksmwkuswkwcqg) { case self::oguseymmyyoyaako: $kesssewsiegssiya = self::cmckeoksigiaqykc; goto cwwmimggaaecmucw; } awoaooyoeoyeeqee: cwwmimggaaecmucw: ogqmesokykywseys: if (!$kesssewsiegssiya) { goto uiosisocuwokwkie; } $kesssewsiegssiya = $mqeowykqcggsieya->imgymusqgccqsqqq($kesssewsiegssiya); if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto iikiiioqiyegyaak; } if ($kesssewsiegssiya->_builtin) { goto gicyayswqyuoekcq; } $uyuaosigqymaqsaa = $seumokooiykcomco->weescwwgqgiyumyw($mksyucucyswaukig, $mqeowykqcggsieya->aakmagwggmkoiiyu($kesssewsiegssiya)); if (!isset($uyuaosigqymaqsaa[0])) { goto kosaqwikueyksqmw; } $iwewcwusemqaiggk = $uyuaosigqymaqsaa[0]; $qyiciauwscqywwgq = $kesssewsiegssiya; $eyagosskwwmgwmog = get_ancestors($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $mqeowykqcggsieya->aakmagwggmkoiiyu($qyiciauwscqywwgq), self::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = $aoskwucuugeuaeus->get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($sikiyacogecgmyai), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($sikiyacogecgmyai))); mqkmcysgoiaouiwm: } ykomgumacooyomsk: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk))); kosaqwikueyksqmw: gicyayswqyuoekcq: iikiiioqiyegyaak: uiosisocuwokwkie: if (!($omwmuycmeqcqokom = $seumokooiykcomco->ygqycmmkoiuocoia($mksyucucyswaukig))) { goto cuumeogeomowqisc; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($omwmuycmeqcqokom), $seumokooiykcomco->ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($omwmuycmeqcqokom))); cuumeogeomowqisc: $this->wuqmciamumosasqa($meqocwsecsywiiqs); gcckqucukawcasgk: ugqwuugsweqgmywk: sioekkmekwygemyc: goto ieqesiiageaauiuw; yiowgigkkwsoqcci: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x59"), get_year_link(get_the_time("\131")), false)->ugaqcouwcuiaemgo("\171\x65\x61\x72")); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\106"), get_month_link(get_the_time("\x59"), get_the_time("\106")), false)->ugaqcouwcuiaemgo("\155\157\156\164\x68")); $this->wuqmciamumosasqa(get_the_time("\144")); ieqesiiageaauiuw: goto mscyggqcesgqqksu; gamqcwuwkikwqoay: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\131"), get_year_link(get_the_time("\131")), false)->ugaqcouwcuiaemgo("\171\x65\x61\162")); $this->wuqmciamumosasqa(get_the_time("\x46")); mscyggqcesgqqksu: goto iesekaeqeomeuaui; oyeyomcgkmgymogq: $this->wuqmciamumosasqa(get_the_time("\131")); iesekaeqeomeuaui: goto mogkoocsoeuyoqqa; wsesqmcqoiyyqkqi: $qmqecyyaiimkyaae = get_search_query(); if ($qawuqcsueakkgiio) { goto iwekmyyccgiyuecc; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::yayciqueeakqwese), $qmqecyyaiimkyaae)); goto ikqqskkqqwmwssoo; iwekmyyccgiyuecc: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::yayciqueeakqwese), get_search_query(self::kkcqmwgccaygggcu)), $mumyimcwkaemyyue->yqymaqmqiqmmmsoo("\x73", $qmqecyyaiimkyaae, $gmigwwwmwemyaayy), false)->ugaqcouwcuiaemgo(self::yayciqueeakqwese)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); ikqqskkqqwmwssoo: mogkoocsoeuyoqqa: goto oimkeqocuguqqsqk; wkwamkgkwykeqkec: $iwewcwusemqaiggk = $mumyimcwkaemyyue->imgymusqgccqsqqq(); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto ogsaaqsaogcqiouy; } $kesssewsiegssiya = $gkyciwoiiisgywcs->get($mumyimcwkaemyyue->imgymusqgccqsqqq(), self::gmmygyiecgmggaam); if (!$kesssewsiegssiya) { goto guykyqecgswcsmws; } $qyiciauwscqywwgq = $mqeowykqcggsieya->imgymusqgccqsqqq($kesssewsiegssiya); if (!$qyiciauwscqywwgq instanceof WP_Taxonomy) { goto wyuemgggaqogsmsq; } foreach ($qyiciauwscqywwgq->object_type as $useksmwkuswkwcqg) { $wkqsmssuaiaqmeee = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if (!($wkqsmssuaiaqmeee && $wkqsmssuaiaqmeee->public)) { goto samwkqgwouggsguc; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($wkqsmssuaiaqmeee->label, $cskucqcumqsyimye->myagyqumwekameww($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); goto acsqgiuageaasiyy; samwkqgwouggsguc: oomguqikqokqwgku: } acsqgiuageaasiyy: wyuemgggaqogsmsq: guykyqecgswcsmws: $eyagosskwwmgwmog = get_ancestors($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk), self::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = $aoskwucuugeuaeus->get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($sikiyacogecgmyai), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($sikiyacogecgmyai))); miweggwqeiaeweia: } kkumywowcoycymeo: if ($qawuqcsueakkgiio) { goto kqqiegkuqagcqsya; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x74\141\x78"), $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk))); goto ousiuuwgwkiyikyq; kqqiegkuqagcqsya: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); ousiuuwgwkiyikyq: ogsaaqsaogcqiouy: oimkeqocuguqqsqk: goto suqceasgacskcmkc; oeocukauoyosicso: $awiycosuekoeeqou = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\141\x74"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay), $seumokooiykcomco->ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(self::wwoeeogswkgeqack)); $eyagosskwwmgwmog = get_ancestors($awiycosuekoeeqou, self::qgciomgukmcwscqw); foreach (array_reverse($eyagosskwwmgwmog) as $omwmuycmeqcqokom) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($omwmuycmeqcqokom), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(self::qgciomgukmcwscqw)); emmsycooskoqmgeg: } qgeugwymkkiacwoc: if ($qawuqcsueakkgiio) { goto ouamogymawucwswu; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::qgciomgukmcwscqw), single_cat_title('', false))); goto mugqyyeayeyggqqk; ouamogymawucwswu: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(self::qgciomgukmcwscqw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); mugqyyeayeyggqqk: suqceasgacskcmkc: goto kwiggogcgciwuwqk; yykqaowwsqgqysmq: $this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay)); kwiggogcgciwuwqk: goto ikuuiauwouuqawuw; uckewycoogsogwiy: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::wwoeeogswkgeqack), $gmigwwwmwemyaayy); ikuuiauwouuqawuw: yoqakewookqoqacm: } }
