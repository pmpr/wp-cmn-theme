<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654a7b6f49bc9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Foundation\Data\PageInfo; use WP_Post; use WP_Taxonomy; use WP_Term; class Generator extends Common { const geyisyamuoomusqo = "\x64\151\166\x69\144\x65\x72"; const iiogewmmwckmegcq = "\x68\x6f\x6d\145\137\x75\x72\154"; const yaooyaaieecskqsq = "\x77\162\141\160\x5f\x61\164\x74\x72\x73"; const reigcooiouysaaok = "\x6c\x69\x6e\153\x5f\141\164\x74\x72\163"; const ceeoggmayqcuoqwi = "\151\164\145\155\x5f\x61\x74\164\x72\x73"; const quewuqgwgceoamee = "\151\164\x65\155\x5f\145\154\145\155\145\x6e\164"; const socgekwcqwaoyyug = "\167\162\x61\x70\137\145\x6c\145\155\x65\156\164"; const gawcyaqskcsegwey = "\x64\151\166\151\144\145\162\137\x61\164\164\x72\x73"; const koiywqsgmgmgscgy = "\x6c\151\x6e\153\137\x63\157\156\164\x61\151\x6e\x65\162"; const mukyymeygmeoawck = "\141\143\x74\151\x76\145\137\x69\164\145\155\x5f\141\164\164\x72\163"; const qywgicgikawmwoay = "\x6c\151\x6e\153\x5f\x63\x6f\x6e\x74\x61\x69\x6e\x65\x72\137\141\164\164\162\163"; protected array $breadcrumb = []; public function ecwoamckysyqikqi() : array { return $this->breadcrumb; } protected function oeewiaacscgyamai(PageInfo $igqsaukqcqscimok) : self { $this->breadcrumb = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\142\145\x66\157\x72\x65\137\x61\x64\x64\x5f\x69\164\145\155", $this->breadcrumb, $igqsaukqcqscimok, $this); $igqsaukqcqscimok = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x61\144\144\137\151\x74\x65\x6d", $igqsaukqcqscimok, $this); if (!$igqsaukqcqscimok) { goto ygcsmkuycoagwyou; } $this->breadcrumb[] = $igqsaukqcqscimok; ygcsmkuycoagwyou: $this->breadcrumb = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\141\146\x74\145\x72\137\141\144\x64\x5f\x69\x74\145\155", $this->breadcrumb, $igqsaukqcqscimok, $this); return $this; } protected function uikgwcuascgeissw($iwkyyocymeukcceu, $uusmaiomayssaecw) : ?string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($iwkyyocymeukcceu, $uusmaiomayssaecw, ''); } protected function yceuwwmgwwqqcweu($guwumyyyakswawas) : array { $aokagokqyuysuksm = $guwumyyyakswawas[0]->cat_ID; $eyagosskwwmgwmog = get_ancestors($aokagokqyuysuksm, self::qgciomgukmcwscqw); $eyagosskwwmgwmog = array_reverse($eyagosskwwmgwmog); $eyagosskwwmgwmog[] = $aokagokqyuysuksm; return $eyagosskwwmgwmog; } public function wuqmciamumosasqa(?string $meqocwsecsywiiqs, ?string $migiiksoiymissge = '', bool $cmscqcqicyqkweuc = true) : PageInfo { static $ikwcsswcseyywgeo; if ($ikwcsswcseyywgeo) { goto kqksuugcgsyeoayy; } $ikwcsswcseyywgeo = 1; kqksuugcgsyeoayy: $igqsaukqcqscimok = new PageInfo(); if (!$cmscqcqicyqkweuc) { goto iggyqogweyosuikc; } $yyimiwcuegayoskq = $this->caokeucsksukesyo()->kyqakacqeumicgag()->iqoacwuiemooiysg(); $this->oeewiaacscgyamai($igqsaukqcqscimok->aseocggwwegcmqes($yyimiwcuegayoskq->gueasuouwqysmomu())->ugaqcouwcuiaemgo($yyimiwcuegayoskq->asuigsqoowmekwok())); iggyqogweyosuikc: $ikwcsswcseyywgeo += 10; $igqsaukqcqscimok->gswweykyogmsyawy($meqocwsecsywiiqs)->uaomeggmwqmmeoki($cmscqcqicyqkweuc)->jyumyyugiwwiqomk($ikwcsswcseyywgeo)->qmueseocuuekommo($this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\160\141\147\x65\x5f\x69\156\x66\157\x5f\160\145\x72\x6d\141\154\151\x6e\153", $migiiksoiymissge)); return $igqsaukqcqscimok; } protected function kooiucqkggeagccu(array $ywmkwiwkosakssii = []) : array { $ggauoeuaesiymgee = [self::ckmqoekmugkggeym => $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->imgymusqgccqsqqq(), self::eoaiagsgqsmskugs => ["\x74\x61\x67" => __("\x50\x6f\163\164\163\40\x54\141\x67\147\x65\144\x3a\x20\x25\163", PR__CMN__COVER), "\x34\60\x34" => __("\105\x72\162\x6f\162\x20\x34\x30\64", PR__CMN__COVER), "\164\141\x78" => "\x25\163", "\x63\x70\x61\147\x65" => __("\x43\157\x6d\x6d\145\x6e\x74\40\x50\x61\x67\145\40\45\163", PR__CMN__COVER), self::wwoeeogswkgeqack => $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(self::NAME), self::imywcsggckkcywgk => __("\x50\x61\147\145\x20\45\x73", PR__CMN__COVER), self::yayciqueeakqwese => __("\x53\x65\x61\162\143\150\x20\122\x65\163\165\x6c\x74\x73\x20\x66\x6f\162\72\40\x25\163", PR__CMN__COVER), self::iwascisiiokuackw => __("\x41\x72\164\151\x63\x6c\145\163\x20\120\157\163\x74\x65\144\x20\x62\171\40\x25\163", PR__CMN__COVER), self::qgciomgukmcwscqw => "\45\x73"], self::geyisyamuoomusqo => null, self::iiogewmmwckmegcq => $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy("\57"), self::quewuqgwgceoamee => "\x6c\x69", self::socgekwcqwaoyyug => "\x6f\154", self::koiywqsgmgmgscgy => "\x73\160\141\156", self::yaooyaaieecskqsq => ["\143\154\x61\163\x73" => "\x62\x72\x65\141\144\x63\162\165\x6d\142"], self::reigcooiouysaaok => ["\143\x6c\x61\163\x73" => "\142\162\x65\141\144\x63\x72\165\x6d\142\x2d\x6c\x69\x6e\153"], self::ceeoggmayqcuoqwi => ["\x63\154\141\163\163" => "\x62\162\x65\141\x64\143\162\x75\x6d\x62\x2d\151\x74\145\155"], self::gawcyaqskcsegwey => ["\143\x6c\141\x73\163" => "\x62\x72\x65\141\x64\143\x72\x75\x6d\142\x2d\144\151\166\x69\144\145\162"], self::mukyymeygmeoawck => ["\x63\x6c\141\x73\x73" => "\x62\x72\145\x61\x64\143\162\165\x6d\x62\55\x69\164\x65\x6d\x20\141\143\x74\151\166\x65"], self::qywgicgikawmwoay => []]; $ywmkwiwkosakssii = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\147\x65\x6e\x65\x72\x61\164\x65\137\141\x72\147\163", $ywmkwiwkosakssii); return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ggauoeuaesiymgee); } public function sywokgmoskcocqgy(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); $gqiaqmycqyywiqsw = $ywmkwiwkosakssii[self::reigcooiouysaaok]; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia("\45\x32\x24\163", "\x25\61\44\163", $gqiaqmycqyywiqsw); if (!$ywmkwiwkosakssii[self::koiywqsgmgmgscgy]) { goto qqewoyookaskiuek; } $iwywmkygwewiamwm = $swqimwqeweekeusq->uuccukgasskgimsq($ywmkwiwkosakssii[self::koiywqsgmgmgscgy], $ywmkwiwkosakssii[self::qywgicgikawmwoay], $iwywmkygwewiamwm); qqewoyookaskiuek: $ysmqgacyqwayokog = $ywmkwiwkosakssii[self::geyisyamuoomusqo]; if (!$ysmqgacyqwayokog) { goto ssoucoucsgccekwe; } $ysmqgacyqwayokog = $swqimwqeweekeusq->gmqyuaqwgiayskei($ysmqgacyqwayokog, $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); goto qkcyqocqqwmqgqww; ssoucoucsgccekwe: $ysmqgacyqwayokog = $swqimwqeweekeusq->uuccukgasskgimsq("\151", $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); qkcyqocqqwmqgqww: $caacssaumiqeaoaw = $swqimwqeweekeusq->qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::ceeoggmayqcuoqwi]); $aqykuigiuwmmcieu = ''; $momcykaoccoymeig = 0; $this->create($ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . self::qwumqqyuasyskkkc, $this->ecwoamckysyqikqi(), $ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($oammesyieqmwuwyi, "\x67\145\164\x50\x72\151\x6f\162\151\164\171"); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof PageInfo) { goto suswcqoyyqkkquuo; } if (!($igqsaukqcqscimok === end($oammesyieqmwuwyi))) { goto ywqgcegomwaiuquc; } $igqsaukqcqscimok->qmueseocuuekommo(''); $caacssaumiqeaoaw = $swqimwqeweekeusq->qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::mukyymeygmeoawck]); ywqgcegomwaiuquc: $aqykuigiuwmmcieu .= $caacssaumiqeaoaw; if (!($momcykaoccoymeig !== 0)) { goto wmmggowmigekyoso; } $aqykuigiuwmmcieu .= $ysmqgacyqwayokog; wmmggowmigekyoso: if ($igqsaukqcqscimok->ycqquoiyyuesegsy()) { goto soqqemyioggmoakg; } $aqykuigiuwmmcieu .= $igqsaukqcqscimok->qcgakseyaikigqco(); goto acaqummmoyiemqss; soqqemyioggmoakg: $aqykuigiuwmmcieu .= sprintf($iwywmkygwewiamwm, $igqsaukqcqscimok->ycqquoiyyuesegsy(), $igqsaukqcqscimok->qcgakseyaikigqco()); acaqummmoyiemqss: $aqykuigiuwmmcieu .= "\74\57{$ywmkwiwkosakssii[self::quewuqgwgceoamee]}\x3e"; $momcykaoccoymeig++; suswcqoyyqkkquuo: eegqyykygiccaoeo: } miyqyeiwquwsacsm: return $swqimwqeweekeusq->uuccukgasskgimsq($ywmkwiwkosakssii[self::socgekwcqwaoyyug], $ywmkwiwkosakssii[self::yaooyaaieecskqsq], $aqykuigiuwmmcieu); } public function create(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); if ($this->ecwoamckysyqikqi()) { goto gmwykkouysyaqwqm; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $oikyogsosqcyueay = $this->caokeucsksukesyo()->kyqakacqeumicgag()->cykwscocqwykiocm(); $qawuqcsueakkgiio = $mumyimcwkaemyyue->qaumqeeagueuqkcg(self::kkcqmwgccaygggcu); $iwkyyocymeukcceu = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::eoaiagsgqsmskugs); $gmigwwwmwemyaayy = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::iiogewmmwckmegcq); $meqocwsecsywiiqs = ''; $eiyqsiwggkuuqqee = 0; $mksyucucyswaukig = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::ckmqoekmugkggeym); if ($mksyucucyswaukig instanceof WP_Post) { goto oqugqwcyomiaaoqu; } if (!$mksyucucyswaukig instanceof WP_Term) { goto eeqesooyqagwawae; } $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($mksyucucyswaukig); $migiiksoiymissge = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($mksyucucyswaukig); eeqesooyqagwawae: goto foeeqckqsyockkak; oqugqwcyomiaaoqu: $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($mksyucucyswaukig); $eiyqsiwggkuuqqee = $seumokooiykcomco->ygqycmmkoiuocoia($mksyucucyswaukig); $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($mksyucucyswaukig); foeeqckqsyockkak: if ($mumyimcwkaemyyue->takycgcamoacksqw()) { goto eekcoeikaeaaeyii; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::wwoeeogswkgeqack), $gmigwwwmwemyaayy, false)->ugaqcouwcuiaemgo(self::eycwiessycciwsao)); if ($mumyimcwkaemyyue->seokosgecygsmqau()) { goto csammceowmqwaamq; } if ($mumyimcwkaemyyue->sgayqmgoigoseaoo()) { goto gcckqucukawcasgk; } if ($mumyimcwkaemyyue->qmssqeyayicowkgy()) { goto uiosisocuwokwkie; } if ($mumyimcwkaemyyue->gouusicsisumuiei()) { goto gicyayswqyuoekcq; } if ($mumyimcwkaemyyue->qwakseskocsyiyks()) { goto mqkmcysgoiaouiwm; } if ($mumyimcwkaemyyue->mgkmukikygowogsm()) { goto ogqmesokykywseys; } if ($mumyimcwkaemyyue->wqscegcksyocaias()) { goto cwwmimggaaecmucw; } if ($mumyimcwkaemyyue->kccakwkaqugygwmq() && !$mumyimcwkaemyyue->aauyuieeeaakygki()) { goto ikqqskkqqwmwssoo; } if ($cskucqcumqsyimye->migkyseymeomymmy()) { goto ogsaaqsaogcqiouy; } if ($mumyimcwkaemyyue->aauyuieeeaakygki()) { goto kqqiegkuqagcqsya; } if ($mumyimcwkaemyyue->sgeaogakoscmysgc() && !$eiyqsiwggkuuqqee) { goto kkumywowcoycymeo; } if ($mumyimcwkaemyyue->sgeaogakoscmysgc() && $eiyqsiwggkuuqqee) { goto wyuemgggaqogsmsq; } if ($mumyimcwkaemyyue->ocwoeosukggumggw()) { goto oomguqikqokqwgku; } if ($mumyimcwkaemyyue->mykygowqgwcuecua()) { goto mugqyyeayeyggqqk; } if ($mumyimcwkaemyyue->kmmyuiwaogukwqqi()) { goto emmsycooskoqmgeg; } if (!(has_post_format() && !$mumyimcwkaemyyue->cukiusasccucgwqc())) { goto qgeugwymkkiacwoc; } $this->wuqmciamumosasqa(get_post_format_string(get_post_format())); qgeugwymkkiacwoc: goto ouamogymawucwswu; emmsycooskoqmgeg: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x34\60\64")); ouamogymawucwswu: goto acsqgiuageaasiyy; mugqyyeayeyggqqk: $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $qscaoekmoooeuyqg = $yoiguusocukqeayg->get($mumyimcwkaemyyue->qaumqeeagueuqkcg(self::iwascisiiokuackw), true); if ($qawuqcsueakkgiio) { goto ciykoyeioqgyaeqo; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::iwascisiiokuackw), $yoiguusocukqeayg->ygwimyogyaqgumam($qscaoekmoooeuyqg))); goto mqicocmqegwukkwg; ciykoyeioqgyaeqo: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::iwascisiiokuackw), $yoiguusocukqeayg->ygwimyogyaqgumam($qscaoekmoooeuyqg)), $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($qscaoekmoooeuyqg), false)->ugaqcouwcuiaemgo(self::iwascisiiokuackw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); mqicocmqegwukkwg: acsqgiuageaasiyy: goto samwkqgwouggsguc; oomguqikqokqwgku: if ($qawuqcsueakkgiio) { goto wcugqegqsuuuwqao; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::qeueagcuyogwwyky), single_tag_title('', false))); goto asiqwuoswmigcaki; wcugqegqsuuuwqao: $scwiymciagumsuiw = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\x74\x61\147\x5f\x69\x64"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(single_tag_title('', false), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($scwiymciagumsuiw), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($scwiymciagumsuiw))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); asiqwuoswmigcaki: samwkqgwouggsguc: goto guykyqecgswcsmws; wyuemgggaqogsmsq: $eyagosskwwmgwmog = get_post_ancestors($seumokooiykcomco->iooowgsqoyqseyuu($mksyucucyswaukig)); foreach (array_reverse($eyagosskwwmgwmog) as $qkcoyiyeuoyyoocy) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($qkcoyiyeuoyyoocy), $seumokooiykcomco->ycqquoiyyuesegsy($qkcoyiyeuoyyoocy), false)->ugaqcouwcuiaemgo(self::imywcsggckkcywgk)); iwsuawwqomaowuii: } qoqskyuuwueqkquk: $this->wuqmciamumosasqa($meqocwsecsywiiqs); guykyqecgswcsmws: goto miweggwqeiaeweia; kkumywowcoycymeo: $oammesyieqmwuwyi = $this->sscegwueamckwmcy(self::ggcmgaccygaquiwu . "\x70\141\x67\x65\137\x69\x74\x65\x6d", ["\150\x61\x73\137\160\141\x67\x65\x5f\156\141\155\145" => true], $mksyucucyswaukig); if (!($oammesyieqmwuwyi && isset($oammesyieqmwuwyi["\x68\141\x73\x5f\160\141\x67\x65\x5f\156\x61\155\x65"]) && $oammesyieqmwuwyi["\150\x61\x73\x5f\160\141\x67\x65\137\156\141\x6d\145"])) { goto wagqgeqymeqoeuyi; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); wagqgeqymeqoeuyi: miweggwqeiaeweia: goto ousiuuwgwkiyikyq; kqqiegkuqagcqsya: $omwmuycmeqcqokom = $seumokooiykcomco->get($eiyqsiwggkuuqqee); $awiycosuekoeeqou = get_the_category($seumokooiykcomco->iooowgsqoyqseyuu($omwmuycmeqcqokom)); $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($awiycosuekoeeqou))); msemumccgceyugmg: } eogwckcymuugikuy: $this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($omwmuycmeqcqokom), $seumokooiykcomco->ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($omwmuycmeqcqokom)); $this->wuqmciamumosasqa($meqocwsecsywiiqs); ousiuuwgwkiyikyq: goto iwekmyyccgiyuecc; ogsaaqsaogcqiouy: $useksmwkuswkwcqg = $cskucqcumqsyimye->aakmagwggmkoiiyu($mksyucucyswaukig); $yowggsumsmeoeiqc = $cskucqcumqsyimye->uikgwcuascgeissw($mksyucucyswaukig, self::NAME); if (!$useksmwkuswkwcqg) { goto eeauyscekuckoues; } if ($qawuqcsueakkgiio) { goto owmuceyswmgueasi; } $this->wuqmciamumosasqa($yowggsumsmeoeiqc); goto mwsmsguqqkcwiiuk; owmuceyswmgueasi: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($yowggsumsmeoeiqc, $cskucqcumqsyimye->myagyqumwekameww($useksmwkuswkwcqg), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); mwsmsguqqkcwiiuk: eeauyscekuckoues: iwekmyyccgiyuecc: goto aomysykcgikegiau; ikqqskkqqwmwssoo: $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($mksyucucyswaukig); if (self::mswoacegomcucaik !== $useksmwkuswkwcqg) { goto wakmayaoqoskekqy; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay), $seumokooiykcomco->ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(self::wwoeeogswkgeqack)); $awiycosuekoeeqou = get_the_category(); if (!isset($awiycosuekoeeqou[0])) { goto ueigkucgaucgeimc; } $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou, self::qgciomgukmcwscqw), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($awiycosuekoeeqou))); kqgcyoscsusgoaqi: } wgewmqieuamsoayy: ueigkucgaucgeimc: if ($mumyimcwkaemyyue->qaumqeeagueuqkcg("\x63\160\x61\147\x65")) { goto sggawugoykqcmsug; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); goto wkeuuycukmuqiaom; sggawugoykqcmsug: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($meqocwsecsywiiqs, $migiiksoiymissge, false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($useksmwkuswkwcqg, true)->name)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x63\160\x61\x67\145"), $mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\x70\x61\147\x65"))); wkeuuycukmuqiaom: goto qmuwoecuacmkwgem; wakmayaoqoskekqy: if (!($wkqsmssuaiaqmeee = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg))) { goto ugqaaewwmkocwwgy; } if (!($wkqsmssuaiaqmeee->public && $wkqsmssuaiaqmeee->has_archive)) { goto giaacoqqqsekcayy; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($wkqsmssuaiaqmeee->labels->name, $cskucqcumqsyimye->myagyqumwekameww($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); giaacoqqqsekcayy: $kesssewsiegssiya = $gkyciwoiiisgywcs->get($wkqsmssuaiaqmeee, "\x6d\141\151\x6e\x5f\164\x61\170\157\156\157\155\171"); if ($kesssewsiegssiya) { goto wmywuusgukmmaams; } switch ($useksmwkuswkwcqg) { case self::oguseymmyyoyaako: $kesssewsiegssiya = self::cmckeoksigiaqykc; goto ewymsmkkiksgwysk; } cmegwsegsosyqcai: ewymsmkkiksgwysk: wmywuusgukmmaams: if (!$kesssewsiegssiya) { goto igooksugieceoege; } $kesssewsiegssiya = $mqeowykqcggsieya->imgymusqgccqsqqq($kesssewsiegssiya); if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto cewmoqyysgsmuiya; } if ($kesssewsiegssiya->_builtin) { goto scisgsyemmsekgos; } $uyuaosigqymaqsaa = $seumokooiykcomco->weescwwgqgiyumyw($mksyucucyswaukig, $mqeowykqcggsieya->aakmagwggmkoiiyu($kesssewsiegssiya)); if (!isset($uyuaosigqymaqsaa[0])) { goto egyyiccaeeiooaua; } $iwewcwusemqaiggk = $uyuaosigqymaqsaa[0]; $qyiciauwscqywwgq = $kesssewsiegssiya; $eyagosskwwmgwmog = get_ancestors($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $mqeowykqcggsieya->aakmagwggmkoiiyu($qyiciauwscqywwgq), self::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = $aoskwucuugeuaeus->get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($sikiyacogecgmyai), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($sikiyacogecgmyai))); ooeausyowguqicuo: } gkyawqqcmigqgaiq: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk))); egyyiccaeeiooaua: scisgsyemmsekgos: cewmoqyysgsmuiya: igooksugieceoege: if (!($omwmuycmeqcqokom = $seumokooiykcomco->ygqycmmkoiuocoia($mksyucucyswaukig))) { goto omqiayeucoioqoao; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($omwmuycmeqcqokom), $seumokooiykcomco->ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($omwmuycmeqcqokom))); omqiayeucoioqoao: $this->wuqmciamumosasqa($meqocwsecsywiiqs); ugqaaewwmkocwwgy: qmuwoecuacmkwgem: aomysykcgikegiau: goto awoaooyoeoyeeqee; cwwmimggaaecmucw: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\131"), get_year_link(get_the_time("\131")), false)->ugaqcouwcuiaemgo("\171\145\x61\x72")); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x46"), get_month_link(get_the_time("\131"), get_the_time("\106")), false)->ugaqcouwcuiaemgo("\x6d\x6f\x6e\x74\x68")); $this->wuqmciamumosasqa(get_the_time("\144")); awoaooyoeoyeeqee: goto ykomgumacooyomsk; ogqmesokykywseys: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x59"), get_year_link(get_the_time("\x59")), false)->ugaqcouwcuiaemgo("\171\145\x61\162")); $this->wuqmciamumosasqa(get_the_time("\106")); ykomgumacooyomsk: goto kosaqwikueyksqmw; mqkmcysgoiaouiwm: $this->wuqmciamumosasqa(get_the_time("\131")); kosaqwikueyksqmw: goto iikiiioqiyegyaak; gicyayswqyuoekcq: $qmqecyyaiimkyaae = get_search_query(); if ($qawuqcsueakkgiio) { goto cgiscsqwwgqqaeqi; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::yayciqueeakqwese), $qmqecyyaiimkyaae)); goto syiqkaasoueowwui; cgiscsqwwgqqaeqi: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::yayciqueeakqwese), get_search_query(self::kkcqmwgccaygggcu)), $mumyimcwkaemyyue->yqymaqmqiqmmmsoo("\163", $qmqecyyaiimkyaae, $gmigwwwmwemyaayy), false)->ugaqcouwcuiaemgo(self::yayciqueeakqwese)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); syiqkaasoueowwui: iikiiioqiyegyaak: goto cuumeogeomowqisc; uiosisocuwokwkie: $iwewcwusemqaiggk = $mumyimcwkaemyyue->imgymusqgccqsqqq(); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto skkamseieeusycye; } $kesssewsiegssiya = $gkyciwoiiisgywcs->get($mumyimcwkaemyyue->imgymusqgccqsqqq(), self::gmmygyiecgmggaam); if (!$kesssewsiegssiya) { goto gaomwagkcciesyqy; } $qyiciauwscqywwgq = $mqeowykqcggsieya->imgymusqgccqsqqq($kesssewsiegssiya); if (!$qyiciauwscqywwgq instanceof WP_Taxonomy) { goto esuiysskoweawsue; } foreach ($qyiciauwscqywwgq->object_type as $useksmwkuswkwcqg) { $wkqsmssuaiaqmeee = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if (!($wkqsmssuaiaqmeee && $wkqsmssuaiaqmeee->public)) { goto uqqaiagaeqgqgaiy; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($wkqsmssuaiaqmeee->label, $cskucqcumqsyimye->myagyqumwekameww($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); goto qicwaskssogcokgm; uqqaiagaeqgqgaiy: uguigkcmukuouway: } qicwaskssogcokgm: esuiysskoweawsue: gaomwagkcciesyqy: $eyagosskwwmgwmog = get_ancestors($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk), self::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = $aoskwucuugeuaeus->get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($sikiyacogecgmyai), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($sikiyacogecgmyai))); suqkuqygkkgwyaie: } aegysmeecgcgayyw: if ($qawuqcsueakkgiio) { goto soaccwqimeksgwiw; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x74\x61\x78"), $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk))); goto wiysogeqqwgioyka; soaccwqimeksgwiw: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); wiysogeqqwgioyka: skkamseieeusycye: cuumeogeomowqisc: goto qmkaeeomgkwggoyo; gcckqucukawcasgk: $awiycosuekoeeqou = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\x63\141\164"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay), $seumokooiykcomco->ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(self::wwoeeogswkgeqack)); $eyagosskwwmgwmog = get_ancestors($awiycosuekoeeqou, self::qgciomgukmcwscqw); foreach (array_reverse($eyagosskwwmgwmog) as $omwmuycmeqcqokom) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($omwmuycmeqcqokom), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(self::qgciomgukmcwscqw)); hoeeyiowekaeemko: } iekumemscwieugqw: if ($qawuqcsueakkgiio) { goto kymkucucyeoeikim; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::qgciomgukmcwscqw), single_cat_title('', false))); goto usquiuuyiyqaeyiu; kymkucucyeoeikim: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(self::qgciomgukmcwscqw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); usquiuuyiyqaeyiu: qmkaeeomgkwggoyo: goto ocaguquugeamqckq; csammceowmqwaamq: $this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay)); ocaguquugeamqckq: goto cogywoqcqummsyus; eekcoeikaeaaeyii: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::wwoeeogswkgeqack), $gmigwwwmwemyaayy); cogywoqcqummsyus: gmwykkouysyaqwqm: } }
