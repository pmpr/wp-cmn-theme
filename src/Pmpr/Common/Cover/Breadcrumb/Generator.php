<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66361537dbfa1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Foundation\Data\PageInfo; use WP_Post; use WP_Taxonomy; use WP_Term; class Generator extends Common { const geyisyamuoomusqo = "\x64\x69\166\151\144\145\x72"; const iiogewmmwckmegcq = "\150\x6f\155\145\137\165\162\154"; const yaooyaaieecskqsq = "\x77\162\141\160\x5f\x61\164\x74\162\x73"; const reigcooiouysaaok = "\154\x69\156\153\x5f\141\x74\164\162\x73"; const ceeoggmayqcuoqwi = "\151\164\x65\x6d\x5f\141\164\x74\x72\x73"; const quewuqgwgceoamee = "\151\164\x65\x6d\137\145\154\x65\155\x65\x6e\164"; const socgekwcqwaoyyug = "\x77\x72\x61\x70\137\x65\x6c\x65\x6d\145\156\x74"; const gawcyaqskcsegwey = "\x64\151\x76\x69\144\145\x72\x5f\x61\164\164\x72\x73"; const koiywqsgmgmgscgy = "\154\151\x6e\x6b\137\x63\x6f\x6e\x74\x61\x69\156\145\162"; const mukyymeygmeoawck = "\x61\x63\164\151\x76\145\137\151\x74\x65\x6d\x5f\141\164\x74\162\x73"; const qywgicgikawmwoay = "\154\151\x6e\x6b\x5f\143\157\156\164\x61\151\x6e\145\162\137\x61\164\x74\162\x73"; protected array $breadcrumb = []; public function ecwoamckysyqikqi() : array { return $this->breadcrumb; } protected function oeewiaacscgyamai(PageInfo $igqsaukqcqscimok) : self { $this->breadcrumb = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\142\145\146\x6f\162\145\137\141\144\144\137\x69\164\x65\155", $this->breadcrumb, $igqsaukqcqscimok, $this); $igqsaukqcqscimok = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x61\x64\x64\137\x69\164\x65\155", $igqsaukqcqscimok, $this); if (!$igqsaukqcqscimok) { goto qqewoyookaskiuek; } $this->breadcrumb[] = $igqsaukqcqscimok; qqewoyookaskiuek: $this->breadcrumb = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x61\x66\x74\145\162\x5f\141\144\x64\x5f\x69\x74\x65\155", $this->breadcrumb, $igqsaukqcqscimok, $this); return $this; } protected function uikgwcuascgeissw($iwkyyocymeukcceu, $uusmaiomayssaecw) : ?string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($iwkyyocymeukcceu, $uusmaiomayssaecw, ''); } protected function yceuwwmgwwqqcweu($guwumyyyakswawas) : array { $aokagokqyuysuksm = $guwumyyyakswawas[0]->cat_ID; $eyagosskwwmgwmog = get_ancestors($aokagokqyuysuksm, self::qgciomgukmcwscqw); $eyagosskwwmgwmog = array_reverse($eyagosskwwmgwmog); $eyagosskwwmgwmog[] = $aokagokqyuysuksm; return $eyagosskwwmgwmog; } public function wuqmciamumosasqa(?string $meqocwsecsywiiqs, ?string $migiiksoiymissge = '', bool $cmscqcqicyqkweuc = true) : PageInfo { static $ikwcsswcseyywgeo; if ($ikwcsswcseyywgeo) { goto ssoucoucsgccekwe; } $ikwcsswcseyywgeo = 1; ssoucoucsgccekwe: $igqsaukqcqscimok = new PageInfo(); if (!$cmscqcqicyqkweuc) { goto qkcyqocqqwmqgqww; } $yyimiwcuegayoskq = $this->caokeucsksukesyo()->kyqakacqeumicgag()->iqoacwuiemooiysg(); $this->oeewiaacscgyamai($igqsaukqcqscimok->aseocggwwegcmqes($yyimiwcuegayoskq->gueasuouwqysmomu())->ugaqcouwcuiaemgo($yyimiwcuegayoskq->asuigsqoowmekwok())); qkcyqocqqwmqgqww: $ikwcsswcseyywgeo += 10; $igqsaukqcqscimok->gswweykyogmsyawy($meqocwsecsywiiqs)->uaomeggmwqmmeoki($cmscqcqicyqkweuc)->jyumyyugiwwiqomk($ikwcsswcseyywgeo)->qmueseocuuekommo($this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x70\141\x67\x65\137\x69\156\x66\157\137\x70\145\x72\155\x61\154\x69\x6e\x6b", $migiiksoiymissge)); return $igqsaukqcqscimok; } protected function kooiucqkggeagccu(array $ywmkwiwkosakssii = []) : array { $ggauoeuaesiymgee = [self::ckmqoekmugkggeym => $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->imgymusqgccqsqqq(), self::eoaiagsgqsmskugs => ["\x74\141\147" => __("\x50\157\x73\164\163\x20\124\x61\x67\147\x65\144\72\x20\x25\163", PR__CMN__COVER), "\x34\60\x34" => __("\105\x72\x72\157\x72\40\x34\x30\x34", PR__CMN__COVER), "\164\141\170" => "\45\163", "\x63\x70\x61\147\x65" => __("\x43\157\x6d\155\x65\x6e\164\x20\120\x61\x67\x65\x20\45\x73", PR__CMN__COVER), self::wwoeeogswkgeqack => $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(self::NAME), self::imywcsggckkcywgk => __("\120\141\x67\145\x20\x25\x73", PR__CMN__COVER), self::yayciqueeakqwese => __("\x53\x65\x61\162\x63\150\x20\122\x65\x73\165\154\164\163\x20\x66\x6f\162\72\x20\45\x73", PR__CMN__COVER), self::iwascisiiokuackw => __("\101\162\164\151\x63\154\x65\163\x20\120\157\x73\164\x65\x64\x20\x62\x79\40\x25\x73", PR__CMN__COVER), self::qgciomgukmcwscqw => "\x25\163"], self::geyisyamuoomusqo => null, self::iiogewmmwckmegcq => $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy("\x2f"), self::quewuqgwgceoamee => "\154\x69", self::socgekwcqwaoyyug => "\x6f\154", self::koiywqsgmgmgscgy => "\163\x70\141\156", self::yaooyaaieecskqsq => ["\143\x6c\141\x73\163" => "\x62\x72\x65\x61\144\143\162\x75\155\x62"], self::reigcooiouysaaok => ["\x63\154\141\163\x73" => "\142\162\145\141\144\x63\162\x75\155\142\55\154\x69\x6e\x6b"], self::ceeoggmayqcuoqwi => ["\x63\154\141\163\x73" => "\142\x72\145\x61\144\x63\x72\x75\x6d\x62\55\151\x74\x65\x6d"], self::gawcyaqskcsegwey => ["\143\x6c\141\163\163" => "\142\x72\145\x61\144\143\162\x75\x6d\142\55\x64\x69\166\x69\144\145\162"], self::mukyymeygmeoawck => ["\x63\x6c\x61\x73\x73" => "\142\x72\x65\141\x64\x63\x72\x75\x6d\x62\55\151\x74\145\x6d\40\x61\143\164\151\x76\145"], self::qywgicgikawmwoay => []]; $ywmkwiwkosakssii = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\147\145\x6e\x65\x72\141\164\145\137\141\x72\147\x73", $ywmkwiwkosakssii); return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ggauoeuaesiymgee); } public function sywokgmoskcocqgy(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); $gqiaqmycqyywiqsw = $ywmkwiwkosakssii[self::reigcooiouysaaok]; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia("\x25\62\x24\x73", "\x25\61\44\x73", $gqiaqmycqyywiqsw); if (!$ywmkwiwkosakssii[self::koiywqsgmgmgscgy]) { goto miyqyeiwquwsacsm; } $iwywmkygwewiamwm = $swqimwqeweekeusq->uuccukgasskgimsq($ywmkwiwkosakssii[self::koiywqsgmgmgscgy], $ywmkwiwkosakssii[self::qywgicgikawmwoay], $iwywmkygwewiamwm); miyqyeiwquwsacsm: $ysmqgacyqwayokog = $ywmkwiwkosakssii[self::geyisyamuoomusqo]; if (!$ysmqgacyqwayokog) { goto eegqyykygiccaoeo; } $ysmqgacyqwayokog = $swqimwqeweekeusq->gmqyuaqwgiayskei($ysmqgacyqwayokog, $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); goto ywqgcegomwaiuquc; eegqyykygiccaoeo: $ysmqgacyqwayokog = $swqimwqeweekeusq->uuccukgasskgimsq("\x69", $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); ywqgcegomwaiuquc: $caacssaumiqeaoaw = $swqimwqeweekeusq->qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::ceeoggmayqcuoqwi]); $aqykuigiuwmmcieu = ''; $momcykaoccoymeig = 0; $this->create($ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . self::qwumqqyuasyskkkc, $this->ecwoamckysyqikqi(), $ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($oammesyieqmwuwyi, "\147\145\164\x50\x72\151\x6f\x72\x69\164\171"); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof PageInfo) { goto foeeqckqsyockkak; } if (!($igqsaukqcqscimok === end($oammesyieqmwuwyi))) { goto acaqummmoyiemqss; } $igqsaukqcqscimok->qmueseocuuekommo(''); $caacssaumiqeaoaw = $swqimwqeweekeusq->qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::mukyymeygmeoawck]); acaqummmoyiemqss: $aqykuigiuwmmcieu .= $caacssaumiqeaoaw; if (!($momcykaoccoymeig !== 0)) { goto suswcqoyyqkkquuo; } $aqykuigiuwmmcieu .= $ysmqgacyqwayokog; suswcqoyyqkkquuo: if ($igqsaukqcqscimok->ycqquoiyyuesegsy()) { goto eeqesooyqagwawae; } $aqykuigiuwmmcieu .= $igqsaukqcqscimok->qcgakseyaikigqco(); goto oqugqwcyomiaaoqu; eeqesooyqagwawae: $aqykuigiuwmmcieu .= sprintf($iwywmkygwewiamwm, $igqsaukqcqscimok->ycqquoiyyuesegsy(), $igqsaukqcqscimok->qcgakseyaikigqco()); oqugqwcyomiaaoqu: $aqykuigiuwmmcieu .= "\74\x2f{$ywmkwiwkosakssii[self::quewuqgwgceoamee]}\x3e"; $momcykaoccoymeig++; foeeqckqsyockkak: soqqemyioggmoakg: } wmmggowmigekyoso: return $swqimwqeweekeusq->uuccukgasskgimsq($ywmkwiwkosakssii[self::socgekwcqwaoyyug], $ywmkwiwkosakssii[self::yaooyaaieecskqsq], $aqykuigiuwmmcieu); } public function create(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); if ($this->ecwoamckysyqikqi()) { goto sockeswygwcskeuq; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $oikyogsosqcyueay = $this->caokeucsksukesyo()->kyqakacqeumicgag()->cykwscocqwykiocm(); $qawuqcsueakkgiio = $mumyimcwkaemyyue->qaumqeeagueuqkcg(self::kkcqmwgccaygggcu); $iwkyyocymeukcceu = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::eoaiagsgqsmskugs); $gmigwwwmwemyaayy = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::iiogewmmwckmegcq); $meqocwsecsywiiqs = ''; $eiyqsiwggkuuqqee = 0; $mksyucucyswaukig = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::ckmqoekmugkggeym); if ($mksyucucyswaukig instanceof WP_Post) { goto hoeeyiowekaeemko; } if (!$mksyucucyswaukig instanceof WP_Term) { goto iekumemscwieugqw; } $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($mksyucucyswaukig); $migiiksoiymissge = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($mksyucucyswaukig); iekumemscwieugqw: goto kymkucucyeoeikim; hoeeyiowekaeemko: $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($mksyucucyswaukig); $eiyqsiwggkuuqqee = $seumokooiykcomco->ygqycmmkoiuocoia($mksyucucyswaukig); $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($mksyucucyswaukig); kymkucucyeoeikim: if ($mumyimcwkaemyyue->takycgcamoacksqw()) { goto ugqwuugsweqgmywk; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::wwoeeogswkgeqack), $gmigwwwmwemyaayy, false)->ugaqcouwcuiaemgo(self::eycwiessycciwsao)); if ($mumyimcwkaemyyue->seokosgecygsmqau()) { goto cogywoqcqummsyus; } if ($mumyimcwkaemyyue->sgayqmgoigoseaoo()) { goto ocaguquugeamqckq; } if ($mumyimcwkaemyyue->qmssqeyayicowkgy()) { goto qmkaeeomgkwggoyo; } if ($mumyimcwkaemyyue->gouusicsisumuiei()) { goto cuumeogeomowqisc; } if ($mumyimcwkaemyyue->qwakseskocsyiyks()) { goto iikiiioqiyegyaak; } if ($mumyimcwkaemyyue->mgkmukikygowogsm()) { goto kosaqwikueyksqmw; } if ($mumyimcwkaemyyue->wqscegcksyocaias()) { goto ykomgumacooyomsk; } if ($mumyimcwkaemyyue->kccakwkaqugygwmq() && !$mumyimcwkaemyyue->aauyuieeeaakygki()) { goto awoaooyoeoyeeqee; } if ($cskucqcumqsyimye->migkyseymeomymmy()) { goto aomysykcgikegiau; } if ($mumyimcwkaemyyue->aauyuieeeaakygki()) { goto iwekmyyccgiyuecc; } if ($mumyimcwkaemyyue->sgeaogakoscmysgc() && !$eiyqsiwggkuuqqee) { goto ousiuuwgwkiyikyq; } if ($mumyimcwkaemyyue->sgeaogakoscmysgc() && $eiyqsiwggkuuqqee) { goto miweggwqeiaeweia; } if ($mumyimcwkaemyyue->ocwoeosukggumggw()) { goto guykyqecgswcsmws; } if ($mumyimcwkaemyyue->mykygowqgwcuecua()) { goto samwkqgwouggsguc; } if ($mumyimcwkaemyyue->kmmyuiwaogukwqqi()) { goto acsqgiuageaasiyy; } if (!(has_post_format() && !$mumyimcwkaemyyue->cukiusasccucgwqc())) { goto mugqyyeayeyggqqk; } $this->wuqmciamumosasqa(get_post_format_string(get_post_format())); mugqyyeayeyggqqk: goto oomguqikqokqwgku; acsqgiuageaasiyy: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\64\60\64")); oomguqikqokqwgku: goto wyuemgggaqogsmsq; samwkqgwouggsguc: $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $qscaoekmoooeuyqg = $yoiguusocukqeayg->get($mumyimcwkaemyyue->qaumqeeagueuqkcg(self::iwascisiiokuackw), true); if ($qawuqcsueakkgiio) { goto emmsycooskoqmgeg; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::iwascisiiokuackw), $yoiguusocukqeayg->ygwimyogyaqgumam($qscaoekmoooeuyqg))); goto ouamogymawucwswu; emmsycooskoqmgeg: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::iwascisiiokuackw), $yoiguusocukqeayg->ygwimyogyaqgumam($qscaoekmoooeuyqg)), $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($qscaoekmoooeuyqg), false)->ugaqcouwcuiaemgo(self::iwascisiiokuackw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); ouamogymawucwswu: wyuemgggaqogsmsq: goto kkumywowcoycymeo; guykyqecgswcsmws: if ($qawuqcsueakkgiio) { goto mqicocmqegwukkwg; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::qeueagcuyogwwyky), single_tag_title('', false))); goto qgeugwymkkiacwoc; mqicocmqegwukkwg: $scwiymciagumsuiw = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\164\x61\147\137\151\144"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(single_tag_title('', false), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($scwiymciagumsuiw), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($scwiymciagumsuiw))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); qgeugwymkkiacwoc: kkumywowcoycymeo: goto kqqiegkuqagcqsya; miweggwqeiaeweia: $eyagosskwwmgwmog = get_post_ancestors($seumokooiykcomco->iooowgsqoyqseyuu($mksyucucyswaukig)); foreach (array_reverse($eyagosskwwmgwmog) as $qkcoyiyeuoyyoocy) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($qkcoyiyeuoyyoocy), $seumokooiykcomco->ycqquoiyyuesegsy($qkcoyiyeuoyyoocy), false)->ugaqcouwcuiaemgo(self::imywcsggckkcywgk)); ciykoyeioqgyaeqo: } asiqwuoswmigcaki: $this->wuqmciamumosasqa($meqocwsecsywiiqs); kqqiegkuqagcqsya: goto ogsaaqsaogcqiouy; ousiuuwgwkiyikyq: $oammesyieqmwuwyi = $this->sscegwueamckwmcy(self::ggcmgaccygaquiwu . "\160\141\147\145\x5f\151\x74\x65\155", ["\x68\141\163\137\x70\x61\x67\145\137\x6e\141\x6d\145" => true], $mksyucucyswaukig); if (!($oammesyieqmwuwyi && isset($oammesyieqmwuwyi["\x68\141\163\x5f\x70\141\147\x65\137\156\141\x6d\x65"]) && $oammesyieqmwuwyi["\150\141\x73\137\x70\x61\147\145\x5f\x6e\x61\155\145"])) { goto wcugqegqsuuuwqao; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); wcugqegqsuuuwqao: ogsaaqsaogcqiouy: goto ikqqskkqqwmwssoo; iwekmyyccgiyuecc: $omwmuycmeqcqokom = $seumokooiykcomco->get($eiyqsiwggkuuqqee); $awiycosuekoeeqou = get_the_category($seumokooiykcomco->iooowgsqoyqseyuu($omwmuycmeqcqokom)); $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($awiycosuekoeeqou))); iwsuawwqomaowuii: } qoqskyuuwueqkquk: $this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($omwmuycmeqcqokom), $seumokooiykcomco->ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($omwmuycmeqcqokom)); $this->wuqmciamumosasqa($meqocwsecsywiiqs); ikqqskkqqwmwssoo: goto cwwmimggaaecmucw; aomysykcgikegiau: $useksmwkuswkwcqg = $cskucqcumqsyimye->aakmagwggmkoiiyu($mksyucucyswaukig); $yowggsumsmeoeiqc = $cskucqcumqsyimye->uikgwcuascgeissw($mksyucucyswaukig, self::NAME); if (!$useksmwkuswkwcqg) { goto wagqgeqymeqoeuyi; } if ($qawuqcsueakkgiio) { goto eogwckcymuugikuy; } $this->wuqmciamumosasqa($yowggsumsmeoeiqc); goto msemumccgceyugmg; eogwckcymuugikuy: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($yowggsumsmeoeiqc, $cskucqcumqsyimye->myagyqumwekameww($useksmwkuswkwcqg), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); msemumccgceyugmg: wagqgeqymeqoeuyi: cwwmimggaaecmucw: goto ogqmesokykywseys; awoaooyoeoyeeqee: $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($mksyucucyswaukig); if (self::mswoacegomcucaik !== $useksmwkuswkwcqg) { goto mwsmsguqqkcwiiuk; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay), $seumokooiykcomco->ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(self::wwoeeogswkgeqack)); $awiycosuekoeeqou = get_the_category(); if (!isset($awiycosuekoeeqou[0])) { goto wakmayaoqoskekqy; } $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou, self::qgciomgukmcwscqw), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($awiycosuekoeeqou))); wkeuuycukmuqiaom: } sggawugoykqcmsug: wakmayaoqoskekqy: if ($mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\160\141\x67\145")) { goto qmuwoecuacmkwgem; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); goto owmuceyswmgueasi; qmuwoecuacmkwgem: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($meqocwsecsywiiqs, $migiiksoiymissge, false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($useksmwkuswkwcqg))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\143\160\141\x67\x65"), $mumyimcwkaemyyue->qaumqeeagueuqkcg("\x63\160\141\147\145"))); owmuceyswmgueasi: goto eeauyscekuckoues; mwsmsguqqkcwiiuk: if (!($wkqsmssuaiaqmeee = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg))) { goto ueigkucgaucgeimc; } if (!($wkqsmssuaiaqmeee->public && $wkqsmssuaiaqmeee->has_archive)) { goto wmywuusgukmmaams; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($cskucqcumqsyimye->uikgwcuascgeissw($wkqsmssuaiaqmeee, self::NAME), $cskucqcumqsyimye->myagyqumwekameww($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); wmywuusgukmmaams: $kesssewsiegssiya = $gkyciwoiiisgywcs->get($wkqsmssuaiaqmeee, "\x6d\141\151\x6e\137\164\141\170\157\156\x6f\155\171"); if ($kesssewsiegssiya) { goto egyyiccaeeiooaua; } switch ($useksmwkuswkwcqg) { case self::oguseymmyyoyaako: $kesssewsiegssiya = self::cmckeoksigiaqykc; goto gkyawqqcmigqgaiq; } ooeausyowguqicuo: gkyawqqcmigqgaiq: egyyiccaeeiooaua: if (!$kesssewsiegssiya) { goto wgewmqieuamsoayy; } $kesssewsiegssiya = $mqeowykqcggsieya->imgymusqgccqsqqq($kesssewsiegssiya); if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto ugqaaewwmkocwwgy; } if ($kesssewsiegssiya->_builtin) { goto omqiayeucoioqoao; } $uyuaosigqymaqsaa = $seumokooiykcomco->weescwwgqgiyumyw($mksyucucyswaukig, $mqeowykqcggsieya->aakmagwggmkoiiyu($kesssewsiegssiya)); if (!isset($uyuaosigqymaqsaa[0])) { goto igooksugieceoege; } $iwewcwusemqaiggk = $uyuaosigqymaqsaa[0]; $qyiciauwscqywwgq = $kesssewsiegssiya; $eyagosskwwmgwmog = get_ancestors($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $mqeowykqcggsieya->aakmagwggmkoiiyu($qyiciauwscqywwgq), self::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = $aoskwucuugeuaeus->get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($sikiyacogecgmyai), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($sikiyacogecgmyai))); cewmoqyysgsmuiya: } scisgsyemmsekgos: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk))); igooksugieceoege: omqiayeucoioqoao: ugqaaewwmkocwwgy: wgewmqieuamsoayy: if (!($omwmuycmeqcqokom = $seumokooiykcomco->ygqycmmkoiuocoia($mksyucucyswaukig))) { goto kqgcyoscsusgoaqi; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($omwmuycmeqcqokom), $seumokooiykcomco->ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($omwmuycmeqcqokom))); kqgcyoscsusgoaqi: $this->wuqmciamumosasqa($meqocwsecsywiiqs); ueigkucgaucgeimc: eeauyscekuckoues: ogqmesokykywseys: goto mqkmcysgoiaouiwm; ykomgumacooyomsk: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\131"), get_year_link(get_the_time("\131")), false)->ugaqcouwcuiaemgo("\171\145\141\162")); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x46"), get_month_link(get_the_time("\x59"), get_the_time("\106")), false)->ugaqcouwcuiaemgo("\x6d\x6f\x6e\164\x68")); $this->wuqmciamumosasqa(get_the_time("\144")); mqkmcysgoiaouiwm: goto gicyayswqyuoekcq; kosaqwikueyksqmw: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\131"), get_year_link(get_the_time("\131")), false)->ugaqcouwcuiaemgo("\171\145\141\x72")); $this->wuqmciamumosasqa(get_the_time("\106")); gicyayswqyuoekcq: goto uiosisocuwokwkie; iikiiioqiyegyaak: $this->wuqmciamumosasqa(get_the_time("\131")); uiosisocuwokwkie: goto gcckqucukawcasgk; cuumeogeomowqisc: $qmqecyyaiimkyaae = get_search_query(); if ($qawuqcsueakkgiio) { goto ewymsmkkiksgwysk; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::yayciqueeakqwese), $qmqecyyaiimkyaae)); goto cmegwsegsosyqcai; ewymsmkkiksgwysk: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::yayciqueeakqwese), get_search_query(self::kkcqmwgccaygggcu)), $mumyimcwkaemyyue->yqymaqmqiqmmmsoo("\163", $qmqecyyaiimkyaae, $gmigwwwmwemyaayy), false)->ugaqcouwcuiaemgo(self::yayciqueeakqwese)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); cmegwsegsosyqcai: gcckqucukawcasgk: goto csammceowmqwaamq; qmkaeeomgkwggoyo: $iwewcwusemqaiggk = $mumyimcwkaemyyue->imgymusqgccqsqqq(); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto giaacoqqqsekcayy; } $kesssewsiegssiya = $gkyciwoiiisgywcs->get($mumyimcwkaemyyue->imgymusqgccqsqqq(), self::gmmygyiecgmggaam); if (!$kesssewsiegssiya) { goto soaccwqimeksgwiw; } $qyiciauwscqywwgq = $mqeowykqcggsieya->imgymusqgccqsqqq($kesssewsiegssiya); if (!$qyiciauwscqywwgq instanceof WP_Taxonomy) { goto suqkuqygkkgwyaie; } foreach ($qyiciauwscqywwgq->object_type as $useksmwkuswkwcqg) { $wkqsmssuaiaqmeee = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if (!($wkqsmssuaiaqmeee && $wkqsmssuaiaqmeee->public)) { goto aegysmeecgcgayyw; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($wkqsmssuaiaqmeee->label, $cskucqcumqsyimye->myagyqumwekameww($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); goto esuiysskoweawsue; aegysmeecgcgayyw: gaomwagkcciesyqy: } esuiysskoweawsue: suqkuqygkkgwyaie: soaccwqimeksgwiw: $eyagosskwwmgwmog = get_ancestors($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk), self::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = $aoskwucuugeuaeus->get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($sikiyacogecgmyai), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($sikiyacogecgmyai))); skkamseieeusycye: } wiysogeqqwgioyka: if ($qawuqcsueakkgiio) { goto cgiscsqwwgqqaeqi; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x74\141\x78"), $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk))); goto syiqkaasoueowwui; cgiscsqwwgqqaeqi: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); syiqkaasoueowwui: giaacoqqqsekcayy: csammceowmqwaamq: goto eekcoeikaeaaeyii; ocaguquugeamqckq: $awiycosuekoeeqou = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\x61\164"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay), $seumokooiykcomco->ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(self::wwoeeogswkgeqack)); $eyagosskwwmgwmog = get_ancestors($awiycosuekoeeqou, self::qgciomgukmcwscqw); foreach (array_reverse($eyagosskwwmgwmog) as $omwmuycmeqcqokom) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($omwmuycmeqcqokom), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(self::qgciomgukmcwscqw)); qicwaskssogcokgm: } usquiuuyiyqaeyiu: if ($qawuqcsueakkgiio) { goto uguigkcmukuouway; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::qgciomgukmcwscqw), single_cat_title('', false))); goto uqqaiagaeqgqgaiy; uguigkcmukuouway: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(self::qgciomgukmcwscqw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); uqqaiagaeqgqgaiy: eekcoeikaeaaeyii: goto gmwykkouysyaqwqm; cogywoqcqummsyus: $this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay)); gmwykkouysyaqwqm: goto uaukmuiwskcemcsw; ugqwuugsweqgmywk: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::wwoeeogswkgeqack), $gmigwwwmwemyaayy); uaukmuiwskcemcsw: sockeswygwcskeuq: } }
