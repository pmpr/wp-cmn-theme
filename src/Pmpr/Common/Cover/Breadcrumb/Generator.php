<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65785598c2485             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Foundation\Data\PageInfo; use WP_Post; use WP_Taxonomy; use WP_Term; class Generator extends Common { const geyisyamuoomusqo = "\144\151\166\x69\x64\145\162"; const iiogewmmwckmegcq = "\x68\x6f\155\145\x5f\x75\x72\154"; const yaooyaaieecskqsq = "\167\162\141\x70\x5f\141\164\164\x72\x73"; const reigcooiouysaaok = "\x6c\x69\156\x6b\x5f\141\164\x74\x72\x73"; const ceeoggmayqcuoqwi = "\151\164\x65\x6d\x5f\x61\164\164\x72\x73"; const quewuqgwgceoamee = "\x69\x74\x65\155\137\145\154\x65\155\x65\156\164"; const socgekwcqwaoyyug = "\167\162\x61\x70\137\145\x6c\x65\x6d\x65\x6e\164"; const gawcyaqskcsegwey = "\x64\151\x76\x69\x64\145\162\x5f\x61\164\x74\162\163"; const koiywqsgmgmgscgy = "\x6c\151\x6e\153\137\x63\x6f\x6e\164\141\x69\x6e\145\162"; const mukyymeygmeoawck = "\x61\143\164\151\x76\145\x5f\151\x74\x65\x6d\137\141\x74\x74\162\163"; const qywgicgikawmwoay = "\154\151\156\x6b\137\143\x6f\x6e\164\x61\151\x6e\x65\x72\x5f\x61\x74\164\162\163"; protected array $breadcrumb = []; public function ecwoamckysyqikqi() : array { return $this->breadcrumb; } protected function oeewiaacscgyamai(PageInfo $igqsaukqcqscimok) : self { $this->breadcrumb = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x62\145\x66\157\x72\x65\137\141\144\x64\x5f\151\x74\x65\x6d", $this->breadcrumb, $igqsaukqcqscimok, $this); $igqsaukqcqscimok = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\141\144\x64\x5f\x69\164\145\x6d", $igqsaukqcqscimok, $this); if (!$igqsaukqcqscimok) { goto emmsycooskoqmgeg; } $this->breadcrumb[] = $igqsaukqcqscimok; emmsycooskoqmgeg: $this->breadcrumb = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x61\x66\x74\145\162\137\141\144\144\x5f\151\x74\145\155", $this->breadcrumb, $igqsaukqcqscimok, $this); return $this; } protected function uikgwcuascgeissw($iwkyyocymeukcceu, $uusmaiomayssaecw) : ?string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($iwkyyocymeukcceu, $uusmaiomayssaecw, ''); } protected function yceuwwmgwwqqcweu($guwumyyyakswawas) : array { $aokagokqyuysuksm = $guwumyyyakswawas[0]->cat_ID; $eyagosskwwmgwmog = get_ancestors($aokagokqyuysuksm, self::qgciomgukmcwscqw); $eyagosskwwmgwmog = array_reverse($eyagosskwwmgwmog); $eyagosskwwmgwmog[] = $aokagokqyuysuksm; return $eyagosskwwmgwmog; } public function wuqmciamumosasqa(?string $meqocwsecsywiiqs, ?string $migiiksoiymissge = '', bool $cmscqcqicyqkweuc = true) : PageInfo { static $ikwcsswcseyywgeo; if ($ikwcsswcseyywgeo) { goto ouamogymawucwswu; } $ikwcsswcseyywgeo = 1; ouamogymawucwswu: $igqsaukqcqscimok = new PageInfo(); if (!$cmscqcqicyqkweuc) { goto mugqyyeayeyggqqk; } $yyimiwcuegayoskq = $this->caokeucsksukesyo()->kyqakacqeumicgag()->iqoacwuiemooiysg(); $this->oeewiaacscgyamai($igqsaukqcqscimok->aseocggwwegcmqes($yyimiwcuegayoskq->gueasuouwqysmomu())->ugaqcouwcuiaemgo($yyimiwcuegayoskq->asuigsqoowmekwok())); mugqyyeayeyggqqk: $ikwcsswcseyywgeo += 10; $igqsaukqcqscimok->gswweykyogmsyawy($meqocwsecsywiiqs)->uaomeggmwqmmeoki($cmscqcqicyqkweuc)->jyumyyugiwwiqomk($ikwcsswcseyywgeo)->qmueseocuuekommo($this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\160\141\147\145\137\x69\156\146\x6f\x5f\160\x65\x72\155\x61\x6c\x69\x6e\x6b", $migiiksoiymissge)); return $igqsaukqcqscimok; } protected function kooiucqkggeagccu(array $ywmkwiwkosakssii = []) : array { $ggauoeuaesiymgee = [self::ckmqoekmugkggeym => $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->imgymusqgccqsqqq(), self::eoaiagsgqsmskugs => ["\164\x61\147" => __("\x50\x6f\x73\164\163\x20\x54\x61\x67\147\x65\x64\x3a\40\x25\x73", PR__CMN__COVER), "\64\60\x34" => __("\x45\x72\162\157\x72\x20\64\60\x34", PR__CMN__COVER), "\164\x61\x78" => "\45\x73", "\x63\x70\x61\x67\x65" => __("\x43\157\x6d\x6d\x65\x6e\x74\40\120\141\147\145\x20\x25\163", PR__CMN__COVER), self::wwoeeogswkgeqack => $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(self::NAME), self::imywcsggckkcywgk => __("\x50\141\147\x65\x20\45\163", PR__CMN__COVER), self::yayciqueeakqwese => __("\x53\145\141\x72\x63\150\x20\x52\145\x73\165\x6c\x74\x73\40\146\157\162\72\x20\45\163", PR__CMN__COVER), self::iwascisiiokuackw => __("\x41\x72\164\x69\x63\x6c\145\x73\x20\x50\x6f\x73\164\145\x64\40\x62\x79\x20\x25\163", PR__CMN__COVER), self::qgciomgukmcwscqw => "\x25\163"], self::geyisyamuoomusqo => null, self::iiogewmmwckmegcq => $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy("\57"), self::quewuqgwgceoamee => "\154\151", self::socgekwcqwaoyyug => "\x6f\x6c", self::koiywqsgmgmgscgy => "\163\160\141\x6e", self::yaooyaaieecskqsq => ["\143\154\141\163\x73" => "\x62\x72\x65\141\144\143\162\x75\x6d\142"], self::reigcooiouysaaok => ["\x63\x6c\141\163\x73" => "\x62\162\x65\x61\x64\x63\x72\x75\155\142\x2d\x6c\x69\156\153"], self::ceeoggmayqcuoqwi => ["\143\x6c\141\163\163" => "\142\x72\x65\x61\x64\143\x72\165\155\142\55\151\x74\x65\x6d"], self::gawcyaqskcsegwey => ["\143\154\141\x73\163" => "\x62\x72\x65\x61\144\x63\x72\165\155\142\55\x64\x69\166\x69\x64\145\162"], self::mukyymeygmeoawck => ["\x63\x6c\141\163\163" => "\142\162\x65\x61\144\x63\162\x75\x6d\x62\55\x69\x74\145\155\x20\141\143\164\x69\166\x65"], self::qywgicgikawmwoay => []]; $ywmkwiwkosakssii = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x67\x65\x6e\x65\x72\x61\164\x65\x5f\x61\x72\x67\x73", $ywmkwiwkosakssii); return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ggauoeuaesiymgee); } public function sywokgmoskcocqgy(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); $gqiaqmycqyywiqsw = $ywmkwiwkosakssii[self::reigcooiouysaaok]; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia("\45\x32\x24\x73", "\45\x31\x24\163", $gqiaqmycqyywiqsw); if (!$ywmkwiwkosakssii[self::koiywqsgmgmgscgy]) { goto acsqgiuageaasiyy; } $iwywmkygwewiamwm = $swqimwqeweekeusq->uuccukgasskgimsq($ywmkwiwkosakssii[self::koiywqsgmgmgscgy], $ywmkwiwkosakssii[self::qywgicgikawmwoay], $iwywmkygwewiamwm); acsqgiuageaasiyy: $ysmqgacyqwayokog = $ywmkwiwkosakssii[self::geyisyamuoomusqo]; if (!$ysmqgacyqwayokog) { goto oomguqikqokqwgku; } $ysmqgacyqwayokog = $swqimwqeweekeusq->gmqyuaqwgiayskei($ysmqgacyqwayokog, $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); goto samwkqgwouggsguc; oomguqikqokqwgku: $ysmqgacyqwayokog = $swqimwqeweekeusq->uuccukgasskgimsq("\151", $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); samwkqgwouggsguc: $caacssaumiqeaoaw = $swqimwqeweekeusq->qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::ceeoggmayqcuoqwi]); $aqykuigiuwmmcieu = ''; $momcykaoccoymeig = 0; $this->create($ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . self::qwumqqyuasyskkkc, $this->ecwoamckysyqikqi(), $ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($oammesyieqmwuwyi, "\147\145\x74\x50\162\x69\x6f\162\x69\164\171"); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof PageInfo) { goto ogsaaqsaogcqiouy; } if (!($igqsaukqcqscimok === end($oammesyieqmwuwyi))) { goto kkumywowcoycymeo; } $igqsaukqcqscimok->qmueseocuuekommo(''); $caacssaumiqeaoaw = $swqimwqeweekeusq->qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::mukyymeygmeoawck]); kkumywowcoycymeo: $aqykuigiuwmmcieu .= $caacssaumiqeaoaw; if (!($momcykaoccoymeig !== 0)) { goto miweggwqeiaeweia; } $aqykuigiuwmmcieu .= $ysmqgacyqwayokog; miweggwqeiaeweia: if ($igqsaukqcqscimok->ycqquoiyyuesegsy()) { goto kqqiegkuqagcqsya; } $aqykuigiuwmmcieu .= $igqsaukqcqscimok->qcgakseyaikigqco(); goto ousiuuwgwkiyikyq; kqqiegkuqagcqsya: $aqykuigiuwmmcieu .= sprintf($iwywmkygwewiamwm, $igqsaukqcqscimok->ycqquoiyyuesegsy(), $igqsaukqcqscimok->qcgakseyaikigqco()); ousiuuwgwkiyikyq: $aqykuigiuwmmcieu .= "\x3c\x2f{$ywmkwiwkosakssii[self::quewuqgwgceoamee]}\76"; $momcykaoccoymeig++; ogsaaqsaogcqiouy: guykyqecgswcsmws: } wyuemgggaqogsmsq: return $swqimwqeweekeusq->uuccukgasskgimsq($ywmkwiwkosakssii[self::socgekwcqwaoyyug], $ywmkwiwkosakssii[self::yaooyaaieecskqsq], $aqykuigiuwmmcieu); } public function create(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); if ($this->ecwoamckysyqikqi()) { goto qikaewekoecykeou; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $oikyogsosqcyueay = $this->caokeucsksukesyo()->kyqakacqeumicgag()->cykwscocqwykiocm(); $qawuqcsueakkgiio = $mumyimcwkaemyyue->qaumqeeagueuqkcg(self::kkcqmwgccaygggcu); $iwkyyocymeukcceu = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::eoaiagsgqsmskugs); $gmigwwwmwemyaayy = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::iiogewmmwckmegcq); $meqocwsecsywiiqs = ''; $eiyqsiwggkuuqqee = 0; $mksyucucyswaukig = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::ckmqoekmugkggeym); if ($mksyucucyswaukig instanceof WP_Post) { goto ikqqskkqqwmwssoo; } if (!$mksyucucyswaukig instanceof WP_Term) { goto iwekmyyccgiyuecc; } $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($mksyucucyswaukig); $migiiksoiymissge = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($mksyucucyswaukig); iwekmyyccgiyuecc: goto aomysykcgikegiau; ikqqskkqqwmwssoo: $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($mksyucucyswaukig); $eiyqsiwggkuuqqee = $seumokooiykcomco->ygqycmmkoiuocoia($mksyucucyswaukig); $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($mksyucucyswaukig); aomysykcgikegiau: if ($mumyimcwkaemyyue->takycgcamoacksqw()) { goto qsgqwyqaqiowkmco; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::wwoeeogswkgeqack), $gmigwwwmwemyaayy, false)->ugaqcouwcuiaemgo(self::eycwiessycciwsao)); if ($mumyimcwkaemyyue->seokosgecygsmqau()) { goto wwukgaquuyoissgy; } if ($mumyimcwkaemyyue->sgayqmgoigoseaoo()) { goto mscgewkcqcoowweg; } if ($mumyimcwkaemyyue->qmssqeyayicowkgy()) { goto esaqcqqwuussiiwo; } if ($mumyimcwkaemyyue->gouusicsisumuiei()) { goto okkmcocqokkskasy; } if ($mumyimcwkaemyyue->qwakseskocsyiyks()) { goto iwsmmkqaoksmocok; } if ($mumyimcwkaemyyue->mgkmukikygowogsm()) { goto ocywegekakimmwcq; } if ($mumyimcwkaemyyue->wqscegcksyocaias()) { goto gswcoeiisamakwii; } if ($mumyimcwkaemyyue->kccakwkaqugygwmq() && !$mumyimcwkaemyyue->aauyuieeeaakygki()) { goto ikuuiauwouuqawuw; } if ($cskucqcumqsyimye->migkyseymeomymmy()) { goto kwiggogcgciwuwqk; } if ($mumyimcwkaemyyue->aauyuieeeaakygki()) { goto suqceasgacskcmkc; } if ($mumyimcwkaemyyue->sgeaogakoscmysgc() && !$eiyqsiwggkuuqqee) { goto oimkeqocuguqqsqk; } if ($mumyimcwkaemyyue->sgeaogakoscmysgc() && $eiyqsiwggkuuqqee) { goto mogkoocsoeuyoqqa; } if ($mumyimcwkaemyyue->ocwoeosukggumggw()) { goto iesekaeqeomeuaui; } if ($mumyimcwkaemyyue->mykygowqgwcuecua()) { goto mscyggqcesgqqksu; } if ($mumyimcwkaemyyue->kmmyuiwaogukwqqi()) { goto ieqesiiageaauiuw; } if (!(has_post_format() && !$mumyimcwkaemyyue->cukiusasccucgwqc())) { goto yiowgigkkwsoqcci; } $this->wuqmciamumosasqa(get_post_format_string(get_post_format())); yiowgigkkwsoqcci: goto gamqcwuwkikwqoay; ieqesiiageaauiuw: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\64\60\x34")); gamqcwuwkikwqoay: goto oyeyomcgkmgymogq; mscyggqcesgqqksu: $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $qscaoekmoooeuyqg = $yoiguusocukqeayg->get($mumyimcwkaemyyue->qaumqeeagueuqkcg(self::iwascisiiokuackw), true); if ($qawuqcsueakkgiio) { goto qukocuwgakemmyga; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::iwascisiiokuackw), $yoiguusocukqeayg->ygwimyogyaqgumam($qscaoekmoooeuyqg))); goto sioekkmekwygemyc; qukocuwgakemmyga: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::iwascisiiokuackw), $yoiguusocukqeayg->ygwimyogyaqgumam($qscaoekmoooeuyqg)), $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($qscaoekmoooeuyqg), false)->ugaqcouwcuiaemgo(self::iwascisiiokuackw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); sioekkmekwygemyc: oyeyomcgkmgymogq: goto wsesqmcqoiyyqkqi; iesekaeqeomeuaui: if ($qawuqcsueakkgiio) { goto kocqqoyymosmuksu; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::qeueagcuyogwwyky), single_tag_title('', false))); goto uqokiksoqcwwqgio; kocqqoyymosmuksu: $scwiymciagumsuiw = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\x74\x61\x67\137\x69\144"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(single_tag_title('', false), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($scwiymciagumsuiw), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($scwiymciagumsuiw))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); uqokiksoqcwwqgio: wsesqmcqoiyyqkqi: goto wkwamkgkwykeqkec; mogkoocsoeuyoqqa: $eyagosskwwmgwmog = get_post_ancestors($seumokooiykcomco->iooowgsqoyqseyuu($mksyucucyswaukig)); foreach (array_reverse($eyagosskwwmgwmog) as $qkcoyiyeuoyyoocy) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($qkcoyiyeuoyyoocy), $seumokooiykcomco->ycqquoiyyuesegsy($qkcoyiyeuoyyoocy), false)->ugaqcouwcuiaemgo(self::imywcsggckkcywgk)); iuuuususuuuaieem: } uimeeckqksqeekqq: $this->wuqmciamumosasqa($meqocwsecsywiiqs); wkwamkgkwykeqkec: goto oeocukauoyosicso; oimkeqocuguqqsqk: $oammesyieqmwuwyi = $this->sscegwueamckwmcy(self::ggcmgaccygaquiwu . "\x70\x61\x67\x65\x5f\x69\164\x65\155", ["\150\141\x73\x5f\x70\141\147\x65\x5f\x6e\x61\x6d\145" => true], $mksyucucyswaukig); if (!($oammesyieqmwuwyi && isset($oammesyieqmwuwyi["\x68\x61\x73\x5f\160\x61\147\145\x5f\x6e\141\155\x65"]) && $oammesyieqmwuwyi["\150\x61\163\x5f\x70\x61\x67\x65\x5f\156\141\155\145"])) { goto uykousayyomcaeaa; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); uykousayyomcaeaa: oeocukauoyosicso: goto yykqaowwsqgqysmq; suqceasgacskcmkc: $omwmuycmeqcqokom = $seumokooiykcomco->get($eiyqsiwggkuuqqee); $awiycosuekoeeqou = get_the_category($seumokooiykcomco->iooowgsqoyqseyuu($omwmuycmeqcqokom)); $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($awiycosuekoeeqou))); ucqmumuygcywwqma: } ukqocwewouckikso: $this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($omwmuycmeqcqokom), $seumokooiykcomco->ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($omwmuycmeqcqokom)); $this->wuqmciamumosasqa($meqocwsecsywiiqs); yykqaowwsqgqysmq: goto uckewycoogsogwiy; kwiggogcgciwuwqk: $useksmwkuswkwcqg = $cskucqcumqsyimye->aakmagwggmkoiiyu($mksyucucyswaukig); $yowggsumsmeoeiqc = $cskucqcumqsyimye->uikgwcuascgeissw($mksyucucyswaukig, self::NAME); if (!$useksmwkuswkwcqg) { goto gommacygsykyussk; } if ($qawuqcsueakkgiio) { goto gygwewcqsmwqismo; } $this->wuqmciamumosasqa($yowggsumsmeoeiqc); goto uougwgeyiokewkkm; gygwewcqsmwqismo: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($yowggsumsmeoeiqc, $cskucqcumqsyimye->myagyqumwekameww($useksmwkuswkwcqg), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); uougwgeyiokewkkm: gommacygsykyussk: uckewycoogsogwiy: goto yoqakewookqoqacm; ikuuiauwouuqawuw: $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($mksyucucyswaukig); if (self::mswoacegomcucaik !== $useksmwkuswkwcqg) { goto mwysseaekcsiesmm; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay), $seumokooiykcomco->ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(self::wwoeeogswkgeqack)); $awiycosuekoeeqou = get_the_category(); if (!isset($awiycosuekoeeqou[0])) { goto wusciwkkckmqigms; } $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou, self::qgciomgukmcwscqw), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($awiycosuekoeeqou))); kqswcsysqawkcgye: } ewscugeuicukkycc: wusciwkkckmqigms: if ($mumyimcwkaemyyue->qaumqeeagueuqkcg("\x63\x70\141\147\x65")) { goto iiiccouaaqsyikae; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); goto ukkcmocamwgiqayu; iiiccouaaqsyikae: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($meqocwsecsywiiqs, $migiiksoiymissge, false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($useksmwkuswkwcqg))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\143\160\x61\147\x65"), $mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\x70\x61\147\145"))); ukkcmocamwgiqayu: goto amgsueumgaguceaa; mwysseaekcsiesmm: if (!($wkqsmssuaiaqmeee = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg))) { goto eeyyskqsmquyquqw; } if (!($wkqsmssuaiaqmeee->public && $wkqsmssuaiaqmeee->has_archive)) { goto gmwykkouysyaqwqm; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($cskucqcumqsyimye->uikgwcuascgeissw($wkqsmssuaiaqmeee, self::NAME), $cskucqcumqsyimye->myagyqumwekameww($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); gmwykkouysyaqwqm: $kesssewsiegssiya = $gkyciwoiiisgywcs->get($wkqsmssuaiaqmeee, "\x6d\141\x69\156\137\164\x61\x78\157\x6e\x6f\x6d\x79"); if ($kesssewsiegssiya) { goto sockeswygwcskeuq; } switch ($useksmwkuswkwcqg) { case self::oguseymmyyoyaako: $kesssewsiegssiya = self::cmckeoksigiaqykc; goto ugqwuugsweqgmywk; } uaukmuiwskcemcsw: ugqwuugsweqgmywk: sockeswygwcskeuq: if (!$kesssewsiegssiya) { goto uegouoiuyoqkcscg; } $kesssewsiegssiya = $mqeowykqcggsieya->imgymusqgccqsqqq($kesssewsiegssiya); if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto mggeqkcksyaymcsa; } if ($kesssewsiegssiya->_builtin) { goto isgwkwacoyimiauk; } $uyuaosigqymaqsaa = $seumokooiykcomco->weescwwgqgiyumyw($mksyucucyswaukig, $mqeowykqcggsieya->aakmagwggmkoiiyu($kesssewsiegssiya)); if (!isset($uyuaosigqymaqsaa[0])) { goto cscusseysqygsoiy; } $iwewcwusemqaiggk = $uyuaosigqymaqsaa[0]; $qyiciauwscqywwgq = $kesssewsiegssiya; $eyagosskwwmgwmog = get_ancestors($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $mqeowykqcggsieya->aakmagwggmkoiiyu($qyiciauwscqywwgq), self::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = $aoskwucuugeuaeus->get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($sikiyacogecgmyai), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($sikiyacogecgmyai))); uaqackioaiqwcocy: } mkwkkmkgiqiamacc: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk))); cscusseysqygsoiy: isgwkwacoyimiauk: mggeqkcksyaymcsa: uegouoiuyoqkcscg: if (!($omwmuycmeqcqokom = $seumokooiykcomco->ygqycmmkoiuocoia($mksyucucyswaukig))) { goto cgyakcqgugqgkqiw; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($omwmuycmeqcqokom), $seumokooiykcomco->ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($omwmuycmeqcqokom))); cgyakcqgugqgkqiw: $this->wuqmciamumosasqa($meqocwsecsywiiqs); eeyyskqsmquyquqw: amgsueumgaguceaa: yoqakewookqoqacm: goto yuimwyoywaiiqacs; gswcoeiisamakwii: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x59"), get_year_link(get_the_time("\131")), false)->ugaqcouwcuiaemgo("\171\x65\141\162")); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x46"), get_month_link(get_the_time("\131"), get_the_time("\x46")), false)->ugaqcouwcuiaemgo("\155\x6f\x6e\x74\x68")); $this->wuqmciamumosasqa(get_the_time("\144")); yuimwyoywaiiqacs: goto emqswoaawgeyosmi; ocywegekakimmwcq: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x59"), get_year_link(get_the_time("\x59")), false)->ugaqcouwcuiaemgo("\x79\145\141\x72")); $this->wuqmciamumosasqa(get_the_time("\106")); emqswoaawgeyosmi: goto esikeyqyuikmaiek; iwsmmkqaoksmocok: $this->wuqmciamumosasqa(get_the_time("\131")); esikeyqyuikmaiek: goto qiiigwkqeoewsuwm; okkmcocqokkskasy: $qmqecyyaiimkyaae = get_search_query(); if ($qawuqcsueakkgiio) { goto eekcoeikaeaaeyii; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::yayciqueeakqwese), $qmqecyyaiimkyaae)); goto cogywoqcqummsyus; eekcoeikaeaaeyii: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::yayciqueeakqwese), get_search_query(self::kkcqmwgccaygggcu)), $mumyimcwkaemyyue->yqymaqmqiqmmmsoo("\x73", $qmqecyyaiimkyaae, $gmigwwwmwemyaayy), false)->ugaqcouwcuiaemgo(self::yayciqueeakqwese)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); cogywoqcqummsyus: qiiigwkqeoewsuwm: goto ikqeeaysmqgcgawq; esaqcqqwuussiiwo: $iwewcwusemqaiggk = $mumyimcwkaemyyue->imgymusqgccqsqqq(); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto ocaguquugeamqckq; } $kesssewsiegssiya = $gkyciwoiiisgywcs->get($mumyimcwkaemyyue->imgymusqgccqsqqq(), self::gmmygyiecgmggaam); if (!$kesssewsiegssiya) { goto uiosisocuwokwkie; } $qyiciauwscqywwgq = $mqeowykqcggsieya->imgymusqgccqsqqq($kesssewsiegssiya); if (!$qyiciauwscqywwgq instanceof WP_Taxonomy) { goto iikiiioqiyegyaak; } foreach ($qyiciauwscqywwgq->object_type as $useksmwkuswkwcqg) { $wkqsmssuaiaqmeee = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if (!($wkqsmssuaiaqmeee && $wkqsmssuaiaqmeee->public)) { goto gicyayswqyuoekcq; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($wkqsmssuaiaqmeee->label, $cskucqcumqsyimye->myagyqumwekameww($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); goto mqkmcysgoiaouiwm; gicyayswqyuoekcq: kosaqwikueyksqmw: } mqkmcysgoiaouiwm: iikiiioqiyegyaak: uiosisocuwokwkie: $eyagosskwwmgwmog = get_ancestors($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk), self::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = $aoskwucuugeuaeus->get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($sikiyacogecgmyai), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($sikiyacogecgmyai))); gcckqucukawcasgk: } cuumeogeomowqisc: if ($qawuqcsueakkgiio) { goto qmkaeeomgkwggoyo; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\164\x61\170"), $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk))); goto csammceowmqwaamq; qmkaeeomgkwggoyo: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); csammceowmqwaamq: ocaguquugeamqckq: ikqeeaysmqgcgawq: goto suqcsgaosywaauuu; mscgewkcqcoowweg: $awiycosuekoeeqou = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\x63\x61\164"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay), $seumokooiykcomco->ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(self::wwoeeogswkgeqack)); $eyagosskwwmgwmog = get_ancestors($awiycosuekoeeqou, self::qgciomgukmcwscqw); foreach (array_reverse($eyagosskwwmgwmog) as $omwmuycmeqcqokom) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($omwmuycmeqcqokom), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(self::qgciomgukmcwscqw)); awoaooyoeoyeeqee: } cwwmimggaaecmucw: if ($qawuqcsueakkgiio) { goto ogqmesokykywseys; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::qgciomgukmcwscqw), single_cat_title('', false))); goto ykomgumacooyomsk; ogqmesokykywseys: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(self::qgciomgukmcwscqw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); ykomgumacooyomsk: suqcsgaosywaauuu: goto gsygwgsiawgmqiyi; wwukgaquuyoissgy: $this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay)); gsygwgsiawgmqiyi: goto yqagomygmeoecwey; qsgqwyqaqiowkmco: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::wwoeeogswkgeqack), $gmigwwwmwemyaayy); yqagomygmeoecwey: qikaewekoecykeou: } }
