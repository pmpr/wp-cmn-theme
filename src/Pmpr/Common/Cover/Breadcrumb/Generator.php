<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             644402bcd2f68             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Foundation\Data\PageInfo; use WP_Post; use WP_Taxonomy; use WP_Term; class Generator extends Common { const geyisyamuoomusqo = "\144\x69\166\x69\144\x65\162"; const iiogewmmwckmegcq = "\x68\x6f\x6d\x65\x5f\165\162\x6c"; const yaooyaaieecskqsq = "\167\162\141\x70\137\141\x74\164\x72\163"; const reigcooiouysaaok = "\x6c\x69\x6e\x6b\137\141\164\164\x72\x73"; const ceeoggmayqcuoqwi = "\x69\x74\x65\x6d\137\x61\x74\164\x72\163"; const quewuqgwgceoamee = "\x69\164\145\x6d\x5f\x65\x6c\145\x6d\145\x6e\164"; const socgekwcqwaoyyug = "\x77\x72\141\x70\137\145\154\145\x6d\145\x6e\x74"; const gawcyaqskcsegwey = "\144\x69\166\x69\x64\x65\162\x5f\x61\x74\164\x72\163"; const koiywqsgmgmgscgy = "\154\151\156\x6b\x5f\143\157\x6e\164\x61\151\x6e\145\162"; const mukyymeygmeoawck = "\141\x63\x74\151\166\x65\x5f\151\x74\x65\x6d\x5f\x61\164\164\162\x73"; const qywgicgikawmwoay = "\x6c\x69\x6e\x6b\x5f\x63\157\156\x74\141\151\x6e\145\x72\137\x61\x74\x74\x72\x73"; protected array $breadcrumb = []; public function ecwoamckysyqikqi() : array { return $this->breadcrumb; } protected function oeewiaacscgyamai(PageInfo $igqsaukqcqscimok) : self { $this->breadcrumb = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x62\x65\146\157\162\145\x5f\141\144\x64\x5f\151\164\145\x6d", $this->breadcrumb, $igqsaukqcqscimok, $this); $igqsaukqcqscimok = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x61\x64\144\x5f\x69\x74\x65\x6d", $igqsaukqcqscimok, $this); if (!$igqsaukqcqscimok) { goto kyiwsiakwgiwouyi; } $this->breadcrumb[] = $igqsaukqcqscimok; kyiwsiakwgiwouyi: $this->breadcrumb = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\141\x66\164\x65\x72\x5f\141\144\x64\x5f\151\x74\x65\155", $this->breadcrumb, $igqsaukqcqscimok, $this); return $this; } protected function uikgwcuascgeissw($iwkyyocymeukcceu, $uusmaiomayssaecw) : ?string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($iwkyyocymeukcceu, $uusmaiomayssaecw, ''); } protected function yceuwwmgwwqqcweu($guwumyyyakswawas) : array { $aokagokqyuysuksm = $guwumyyyakswawas[0]->cat_ID; $eyagosskwwmgwmog = get_ancestors($aokagokqyuysuksm, self::qgciomgukmcwscqw); $eyagosskwwmgwmog = array_reverse($eyagosskwwmgwmog); $eyagosskwwmgwmog[] = $aokagokqyuysuksm; return $eyagosskwwmgwmog; } public function wuqmciamumosasqa(?string $meqocwsecsywiiqs, ?string $migiiksoiymissge = '', bool $cmscqcqicyqkweuc = true) : PageInfo { static $ikwcsswcseyywgeo; if ($ikwcsswcseyywgeo) { goto awgmegueeqeyqamu; } $ikwcsswcseyywgeo = 1; awgmegueeqeyqamu: $igqsaukqcqscimok = new PageInfo(); if (!$cmscqcqicyqkweuc) { goto gqimwsyemoewagcy; } $yyimiwcuegayoskq = $this->caokeucsksukesyo()->kyqakacqeumicgag()->iqoacwuiemooiysg(); $this->oeewiaacscgyamai($igqsaukqcqscimok->aseocggwwegcmqes($yyimiwcuegayoskq->gueasuouwqysmomu())->ugaqcouwcuiaemgo($yyimiwcuegayoskq->asuigsqoowmekwok())); gqimwsyemoewagcy: $ikwcsswcseyywgeo += 10; $igqsaukqcqscimok->gswweykyogmsyawy($meqocwsecsywiiqs)->uaomeggmwqmmeoki($cmscqcqicyqkweuc)->jyumyyugiwwiqomk($ikwcsswcseyywgeo)->qmueseocuuekommo($this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\160\141\147\145\137\151\x6e\146\x6f\137\x70\145\x72\155\141\154\x69\156\153", $migiiksoiymissge)); return $igqsaukqcqscimok; } protected function kooiucqkggeagccu(array $ywmkwiwkosakssii = []) : array { $ggauoeuaesiymgee = [self::ckmqoekmugkggeym => $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->imgymusqgccqsqqq(), self::eoaiagsgqsmskugs => ["\164\x61\147" => __("\x50\157\163\x74\163\40\x54\x61\x67\147\145\144\x3a\40\45\163", PR__CMN__COVER), "\64\60\x34" => __("\x45\x72\x72\x6f\x72\40\x34\60\x34", PR__CMN__COVER), "\x74\x61\170" => "\x25\x73", "\x63\160\x61\x67\145" => __("\x43\157\155\x6d\145\x6e\164\x20\120\141\x67\145\x20\45\x73", PR__CMN__COVER), self::wwoeeogswkgeqack => $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(self::NAME), self::imywcsggckkcywgk => __("\x50\x61\x67\145\x20\45\x73", PR__CMN__COVER), self::yayciqueeakqwese => __("\123\x65\x61\162\x63\x68\40\x52\x65\x73\x75\x6c\164\163\40\x66\157\162\72\40\45\163", PR__CMN__COVER), self::iwascisiiokuackw => __("\x41\162\164\151\x63\x6c\145\163\40\x50\x6f\x73\x74\145\144\x20\x62\171\x20\x25\163", PR__CMN__COVER), self::qgciomgukmcwscqw => "\x25\163"], self::geyisyamuoomusqo => null, self::iiogewmmwckmegcq => $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy("\x2f"), self::quewuqgwgceoamee => "\154\x69", self::socgekwcqwaoyyug => "\x6f\x6c", self::koiywqsgmgmgscgy => "\x73\x70\x61\156", self::yaooyaaieecskqsq => ["\x63\x6c\x61\x73\163" => "\x62\x72\145\x61\144\143\x72\165\155\142"], self::reigcooiouysaaok => ["\143\154\141\163\x73" => "\142\x72\x65\141\144\x63\162\x75\x6d\142\55\x6c\x69\156\153"], self::ceeoggmayqcuoqwi => ["\x63\x6c\x61\x73\x73" => "\x62\162\x65\141\x64\x63\x72\x75\x6d\x62\x2d\151\164\145\155"], self::gawcyaqskcsegwey => ["\143\x6c\x61\x73\163" => "\142\162\145\x61\144\143\x72\x75\x6d\142\x2d\x64\151\166\151\144\145\x72"], self::mukyymeygmeoawck => ["\x63\154\x61\163\x73" => "\142\x72\x65\x61\144\143\x72\165\155\x62\x2d\x69\x74\145\155\x20\141\x63\x74\151\x76\x65"], self::qywgicgikawmwoay => []]; $ywmkwiwkosakssii = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\147\145\x6e\x65\x72\141\164\145\x5f\141\x72\147\163", $ywmkwiwkosakssii); return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ggauoeuaesiymgee); } public function sywokgmoskcocqgy(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); $gqiaqmycqyywiqsw = $ywmkwiwkosakssii[self::reigcooiouysaaok]; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia("\x25\62\44\x73", "\45\61\44\163", $gqiaqmycqyywiqsw); if (!$ywmkwiwkosakssii[self::koiywqsgmgmgscgy]) { goto aoaqwygkaagiuuws; } $iwywmkygwewiamwm = $swqimwqeweekeusq->uuccukgasskgimsq($ywmkwiwkosakssii[self::koiywqsgmgmgscgy], $ywmkwiwkosakssii[self::qywgicgikawmwoay], $iwywmkygwewiamwm); aoaqwygkaagiuuws: $ysmqgacyqwayokog = $ywmkwiwkosakssii[self::geyisyamuoomusqo]; if (!$ysmqgacyqwayokog) { goto esagiiawomyacuiw; } $ysmqgacyqwayokog = $swqimwqeweekeusq->gmqyuaqwgiayskei($ysmqgacyqwayokog, $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); goto maaisuqwkymeguys; esagiiawomyacuiw: $ysmqgacyqwayokog = $swqimwqeweekeusq->uuccukgasskgimsq("\x69", $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); maaisuqwkymeguys: $caacssaumiqeaoaw = $swqimwqeweekeusq->qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::ceeoggmayqcuoqwi]); $aqykuigiuwmmcieu = ''; $momcykaoccoymeig = 0; $this->create($ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . self::qwumqqyuasyskkkc, $this->ecwoamckysyqikqi(), $ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($oammesyieqmwuwyi, "\x67\x65\164\120\x72\x69\157\162\151\x74\x79"); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof PageInfo) { goto yyqygaokeccgugos; } if (!($igqsaukqcqscimok === end($oammesyieqmwuwyi))) { goto ayceeyuocgowqwsa; } $igqsaukqcqscimok->qmueseocuuekommo(''); $caacssaumiqeaoaw = $swqimwqeweekeusq->qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::mukyymeygmeoawck]); ayceeyuocgowqwsa: $aqykuigiuwmmcieu .= $caacssaumiqeaoaw; if (!($momcykaoccoymeig !== 0)) { goto iuwkiyimqmgguose; } $aqykuigiuwmmcieu .= $ysmqgacyqwayokog; iuwkiyimqmgguose: if ($igqsaukqcqscimok->ycqquoiyyuesegsy()) { goto yggseoaommssscwo; } $aqykuigiuwmmcieu .= $igqsaukqcqscimok->qcgakseyaikigqco(); goto aeiemwacaiygemmg; yggseoaommssscwo: $aqykuigiuwmmcieu .= sprintf($iwywmkygwewiamwm, $igqsaukqcqscimok->ycqquoiyyuesegsy(), $igqsaukqcqscimok->qcgakseyaikigqco()); aeiemwacaiygemmg: $aqykuigiuwmmcieu .= "\x3c\x2f{$ywmkwiwkosakssii[self::quewuqgwgceoamee]}\76"; $momcykaoccoymeig++; yyqygaokeccgugos: sksgcusuyqcwqswe: } qkyciyiwkmgkmquk: return $swqimwqeweekeusq->uuccukgasskgimsq($ywmkwiwkosakssii[self::socgekwcqwaoyyug], $ywmkwiwkosakssii[self::yaooyaaieecskqsq], $aqykuigiuwmmcieu); } public function create(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); if ($this->ecwoamckysyqikqi()) { goto koukiyqaccegmquc; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $oikyogsosqcyueay = $this->caokeucsksukesyo()->kyqakacqeumicgag()->cykwscocqwykiocm(); $qawuqcsueakkgiio = $mumyimcwkaemyyue->qaumqeeagueuqkcg(self::kkcqmwgccaygggcu); $iwkyyocymeukcceu = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::eoaiagsgqsmskugs); $gmigwwwmwemyaayy = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::iiogewmmwckmegcq); $meqocwsecsywiiqs = ''; $eiyqsiwggkuuqqee = 0; $mksyucucyswaukig = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::ckmqoekmugkggeym); if ($mksyucucyswaukig instanceof WP_Post) { goto kwuckkyqaygwgcuy; } if (!$mksyucucyswaukig instanceof WP_Term) { goto oeusomaaeekakake; } $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($mksyucucyswaukig); $migiiksoiymissge = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($mksyucucyswaukig); oeusomaaeekakake: goto giuccakymqymawgk; kwuckkyqaygwgcuy: $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($mksyucucyswaukig); $eiyqsiwggkuuqqee = $seumokooiykcomco->ygqycmmkoiuocoia($mksyucucyswaukig); $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($mksyucucyswaukig); giuccakymqymawgk: if ($mumyimcwkaemyyue->takycgcamoacksqw()) { goto kwsqgqmwyyeykgum; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::wwoeeogswkgeqack), $gmigwwwmwemyaayy, false)->ugaqcouwcuiaemgo(self::eycwiessycciwsao)); if ($mumyimcwkaemyyue->seokosgecygsmqau()) { goto sooecucuakgkuyis; } if ($mumyimcwkaemyyue->sgayqmgoigoseaoo()) { goto yseyyukqaowwouua; } if ($mumyimcwkaemyyue->qmssqeyayicowkgy()) { goto qsokkkyoackoycie; } if ($mumyimcwkaemyyue->gouusicsisumuiei()) { goto cysgqimowcqoqqsc; } if ($mumyimcwkaemyyue->qwakseskocsyiyks()) { goto gicuuwuuuwumyooa; } if ($mumyimcwkaemyyue->mgkmukikygowogsm()) { goto skwusmoyomgqkimm; } if ($mumyimcwkaemyyue->wqscegcksyocaias()) { goto cmmusgkieoqyymgs; } if ($mumyimcwkaemyyue->kccakwkaqugygwmq() && !$mumyimcwkaemyyue->aauyuieeeaakygki()) { goto kmooekeyemqgucci; } if ($cskucqcumqsyimye->migkyseymeomymmy()) { goto mosuacsuaasssciu; } if ($mumyimcwkaemyyue->aauyuieeeaakygki()) { goto esqwswmoegiqcckg; } if ($mumyimcwkaemyyue->sgeaogakoscmysgc() && !$eiyqsiwggkuuqqee) { goto mwieyyqamgwicgco; } if ($mumyimcwkaemyyue->sgeaogakoscmysgc() && $eiyqsiwggkuuqqee) { goto kceuusiekagyeoys; } if ($mumyimcwkaemyyue->ocwoeosukggumggw()) { goto gkoaeuekqockuoiq; } if ($mumyimcwkaemyyue->mykygowqgwcuecua()) { goto kwmiwaecqcgiaqye; } if ($mumyimcwkaemyyue->kmmyuiwaogukwqqi()) { goto ukwoswyyogmsygqg; } if (!(has_post_format() && !$mumyimcwkaemyyue->cukiusasccucgwqc())) { goto yggmaskeguaqkusc; } $this->wuqmciamumosasqa(get_post_format_string(get_post_format())); yggmaskeguaqkusc: goto jsmisuccwyukksgc; ukwoswyyogmsygqg: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x34\x30\x34")); jsmisuccwyukksgc: goto yqicwmekwuoywyus; kwmiwaecqcgiaqye: $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $qscaoekmoooeuyqg = $yoiguusocukqeayg->get($mumyimcwkaemyyue->qaumqeeagueuqkcg(self::iwascisiiokuackw), true); if ($qawuqcsueakkgiio) { goto uwaimsisescsgyqk; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::iwascisiiokuackw), $yoiguusocukqeayg->ygwimyogyaqgumam($qscaoekmoooeuyqg))); goto uqcsksaywyqeumig; uwaimsisescsgyqk: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::iwascisiiokuackw), $yoiguusocukqeayg->ygwimyogyaqgumam($qscaoekmoooeuyqg)), $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($qscaoekmoooeuyqg), false)->ugaqcouwcuiaemgo(self::iwascisiiokuackw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); uqcsksaywyqeumig: yqicwmekwuoywyus: goto eekaiaeqewiqkkgm; gkoaeuekqockuoiq: if ($qawuqcsueakkgiio) { goto ggeoqeowscwkeumy; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::qeueagcuyogwwyky), single_tag_title('', false))); goto qyeswawykmasuqye; ggeoqeowscwkeumy: $scwiymciagumsuiw = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\164\141\147\x5f\151\144"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(single_tag_title('', false), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($scwiymciagumsuiw), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($scwiymciagumsuiw))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); qyeswawykmasuqye: eekaiaeqewiqkkgm: goto uyeyscsaigimsqwq; kceuusiekagyeoys: $eyagosskwwmgwmog = get_post_ancestors($seumokooiykcomco->iooowgsqoyqseyuu($mksyucucyswaukig)); foreach (array_reverse($eyagosskwwmgwmog) as $qkcoyiyeuoyyoocy) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($qkcoyiyeuoyyoocy), $seumokooiykcomco->ycqquoiyyuesegsy($qkcoyiyeuoyyoocy), false)->ugaqcouwcuiaemgo(self::imywcsggckkcywgk)); cuommomwmsackoqc: } awaqksikyomsuaeo: $this->wuqmciamumosasqa($meqocwsecsywiiqs); uyeyscsaigimsqwq: goto wkiymcoqqiigqaaw; mwieyyqamgwicgco: $oammesyieqmwuwyi = $this->sscegwueamckwmcy(self::ggcmgaccygaquiwu . "\160\x61\x67\145\x5f\x69\x74\145\x6d", ["\x68\141\x73\137\x70\141\x67\145\137\156\141\155\145" => true], $mksyucucyswaukig); if (!($oammesyieqmwuwyi && isset($oammesyieqmwuwyi["\x68\141\x73\x5f\x70\141\x67\145\x5f\x6e\x61\x6d\145"]) && $oammesyieqmwuwyi["\x68\x61\163\x5f\x70\x61\147\x65\x5f\x6e\141\x6d\x65"])) { goto iqsgossweywksoia; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); iqsgossweywksoia: wkiymcoqqiigqaaw: goto qmokwkocmcyeyesc; esqwswmoegiqcckg: $omwmuycmeqcqokom = $seumokooiykcomco->get($eiyqsiwggkuuqqee); $awiycosuekoeeqou = get_the_category($seumokooiykcomco->iooowgsqoyqseyuu($omwmuycmeqcqokom)); $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($awiycosuekoeeqou))); igwkcikeyoowosoi: } ksckqkmwiqggykke: $this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($omwmuycmeqcqokom), $seumokooiykcomco->ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($omwmuycmeqcqokom)); $this->wuqmciamumosasqa($meqocwsecsywiiqs); qmokwkocmcyeyesc: goto qksckewucmosemuo; mosuacsuaasssciu: $useksmwkuswkwcqg = $cskucqcumqsyimye->aakmagwggmkoiiyu($mksyucucyswaukig); $yowggsumsmeoeiqc = $cskucqcumqsyimye->uikgwcuascgeissw($mksyucucyswaukig, self::NAME); if (!$useksmwkuswkwcqg) { goto mimacwyuueomgwwy; } if ($qawuqcsueakkgiio) { goto ekoqieigyoeyauqa; } $this->wuqmciamumosasqa($yowggsumsmeoeiqc); goto cuwcsamuuqyuyqsu; ekoqieigyoeyauqa: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($yowggsumsmeoeiqc, $cskucqcumqsyimye->myagyqumwekameww($useksmwkuswkwcqg), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); cuwcsamuuqyuyqsu: mimacwyuueomgwwy: qksckewucmosemuo: goto skuuyysooocugyww; kmooekeyemqgucci: $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($mksyucucyswaukig); if (self::mswoacegomcucaik !== $useksmwkuswkwcqg) { goto ssagcgqaucssyego; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay), $seumokooiykcomco->ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(self::wwoeeogswkgeqack)); $awiycosuekoeeqou = get_the_category(); if (!isset($awiycosuekoeeqou[0])) { goto giugwaeuwaomossq; } $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou, self::qgciomgukmcwscqw), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($awiycosuekoeeqou))); suqckoccuyeeymww: } yoqsigmoyaaceqky: giugwaeuwaomossq: if ($mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\x70\141\x67\145")) { goto acgqaeakoyasgkku; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); goto sycougcyeqmeiagk; acgqaeakoyasgkku: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($meqocwsecsywiiqs, $migiiksoiymissge, false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($useksmwkuswkwcqg, true)->name)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x63\160\141\x67\145"), $mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\160\141\x67\x65"))); sycougcyeqmeiagk: goto mqgeseysuwcaqwiy; ssagcgqaucssyego: if (!($wkqsmssuaiaqmeee = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg))) { goto yksywwikmeksikqc; } if (!($wkqsmssuaiaqmeee->public && $wkqsmssuaiaqmeee->has_archive)) { goto ygcgoaokauigwuus; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($wkqsmssuaiaqmeee->labels->name, $cskucqcumqsyimye->myagyqumwekameww($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); ygcgoaokauigwuus: $kesssewsiegssiya = $gkyciwoiiisgywcs->get($wkqsmssuaiaqmeee, "\x6d\141\x69\x6e\x5f\164\141\170\157\x6e\x6f\155\x79"); if ($kesssewsiegssiya) { goto ousmyagwsiooumos; } switch ($useksmwkuswkwcqg) { case self::oguseymmyyoyaako: $kesssewsiegssiya = self::cmckeoksigiaqykc; goto ysiqakyaiooyscwy; } auumaoycmsmsgigs: ysiqakyaiooyscwy: ousmyagwsiooumos: if (!$kesssewsiegssiya) { goto iwkckkeimmeoquyq; } $kesssewsiegssiya = $mqeowykqcggsieya->imgymusqgccqsqqq($kesssewsiegssiya); if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto yqcusaeysomccaok; } if ($kesssewsiegssiya->_builtin) { goto qwisiamkmkkwucyo; } $uyuaosigqymaqsaa = $seumokooiykcomco->weescwwgqgiyumyw($mksyucucyswaukig, $mqeowykqcggsieya->aakmagwggmkoiiyu($kesssewsiegssiya)); if (!isset($uyuaosigqymaqsaa[0])) { goto sgocecweikecwwgq; } $iwewcwusemqaiggk = $uyuaosigqymaqsaa[0]; $qyiciauwscqywwgq = $kesssewsiegssiya; $eyagosskwwmgwmog = get_ancestors($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $mqeowykqcggsieya->aakmagwggmkoiiyu($qyiciauwscqywwgq), self::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = $aoskwucuugeuaeus->get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($sikiyacogecgmyai), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($sikiyacogecgmyai))); yiceawuuiusakwiq: } qeuyekusasqmcqms: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk))); sgocecweikecwwgq: qwisiamkmkkwucyo: yqcusaeysomccaok: iwkckkeimmeoquyq: if (!($omwmuycmeqcqokom = $seumokooiykcomco->ygqycmmkoiuocoia($mksyucucyswaukig))) { goto masakmomqmeocqqg; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($omwmuycmeqcqokom), $seumokooiykcomco->ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($omwmuycmeqcqokom))); masakmomqmeocqqg: $this->wuqmciamumosasqa($meqocwsecsywiiqs); yksywwikmeksikqc: mqgeseysuwcaqwiy: skuuyysooocugyww: goto mkgmaguyswskyioa; cmmusgkieoqyymgs: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x59"), get_year_link(get_the_time("\131")), false)->ugaqcouwcuiaemgo("\171\145\x61\x72")); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\106"), get_month_link(get_the_time("\131"), get_the_time("\x46")), false)->ugaqcouwcuiaemgo("\x6d\157\x6e\164\x68")); $this->wuqmciamumosasqa(get_the_time("\144")); mkgmaguyswskyioa: goto usyckeewsgwaysam; skwusmoyomgqkimm: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x59"), get_year_link(get_the_time("\x59")), false)->ugaqcouwcuiaemgo("\171\x65\141\x72")); $this->wuqmciamumosasqa(get_the_time("\x46")); usyckeewsgwaysam: goto kakkuyeccaacewyo; gicuuwuuuwumyooa: $this->wuqmciamumosasqa(get_the_time("\131")); kakkuyeccaacewyo: goto ismeikacqqyqcmqe; cysgqimowcqoqqsc: $qmqecyyaiimkyaae = get_search_query(); if ($qawuqcsueakkgiio) { goto qyyyycwaookqaoke; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::yayciqueeakqwese), $qmqecyyaiimkyaae)); goto ssywsaaqqaucesau; qyyyycwaookqaoke: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::yayciqueeakqwese), get_search_query(self::kkcqmwgccaygggcu)), $mumyimcwkaemyyue->yqymaqmqiqmmmsoo("\x73", $qmqecyyaiimkyaae, $gmigwwwmwemyaayy), false)->ugaqcouwcuiaemgo(self::yayciqueeakqwese)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); ssywsaaqqaucesau: ismeikacqqyqcmqe: goto casgoamcqkekgeeo; qsokkkyoackoycie: $iwewcwusemqaiggk = $mumyimcwkaemyyue->imgymusqgccqsqqq(); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto mugscgugcogcasue; } $kesssewsiegssiya = $gkyciwoiiisgywcs->get($mumyimcwkaemyyue->imgymusqgccqsqqq(), self::gmmygyiecgmggaam); if (!$kesssewsiegssiya) { goto omuauimgkygcecsc; } $qyiciauwscqywwgq = $mqeowykqcggsieya->imgymusqgccqsqqq($kesssewsiegssiya); if (!$qyiciauwscqywwgq instanceof WP_Taxonomy) { goto oasggeyceiyieuuo; } foreach ($qyiciauwscqywwgq->object_type as $useksmwkuswkwcqg) { $wkqsmssuaiaqmeee = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if (!($wkqsmssuaiaqmeee && $wkqsmssuaiaqmeee->public)) { goto aumowowgewgqmwci; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($wkqsmssuaiaqmeee->label, $cskucqcumqsyimye->myagyqumwekameww($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); goto gcucsowqoeiwmyyq; aumowowgewgqmwci: kyiuewcikkqagwwg: } gcucsowqoeiwmyyq: oasggeyceiyieuuo: omuauimgkygcecsc: $eyagosskwwmgwmog = get_ancestors($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk), self::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = $aoskwucuugeuaeus->get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($sikiyacogecgmyai), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($sikiyacogecgmyai))); quamuugoocyyceec: } wwcqoeuwskquakwy: if ($qawuqcsueakkgiio) { goto qcssigmcayuyweiy; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x74\141\x78"), $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk))); goto iymaiwqimisgacmk; qcssigmcayuyweiy: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); iymaiwqimisgacmk: mugscgugcogcasue: casgoamcqkekgeeo: goto qcgyggiaowuqswuw; yseyyukqaowwouua: $awiycosuekoeeqou = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\141\x74"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay), $seumokooiykcomco->ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(self::wwoeeogswkgeqack)); $eyagosskwwmgwmog = get_ancestors($awiycosuekoeeqou, self::qgciomgukmcwscqw); foreach (array_reverse($eyagosskwwmgwmog) as $omwmuycmeqcqokom) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($omwmuycmeqcqokom), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(self::qgciomgukmcwscqw)); cyosacayacumuaks: } sicgyiyiocyygkoc: if ($qawuqcsueakkgiio) { goto ikcwmsgocyuqiumc; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::qgciomgukmcwscqw), single_cat_title('', false))); goto eqiiaokcgakicaye; ikcwmsgocyuqiumc: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(self::qgciomgukmcwscqw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); eqiiaokcgakicaye: qcgyggiaowuqswuw: goto ywqakqkmmcoceqka; sooecucuakgkuyis: $this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay)); ywqakqkmmcoceqka: goto emauuoieewwoeyqq; kwsqgqmwyyeykgum: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::wwoeeogswkgeqack), $gmigwwwmwemyaayy); emauuoieewwoeyqq: koukiyqaccegmquc: } }
