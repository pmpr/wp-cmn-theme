<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64d2617863a5a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Foundation\Data\PageInfo; use WP_Post; use WP_Taxonomy; use WP_Term; class Generator extends Common { const geyisyamuoomusqo = "\144\x69\x76\151\x64\x65\162"; const iiogewmmwckmegcq = "\x68\x6f\155\145\137\x75\x72\154"; const yaooyaaieecskqsq = "\x77\162\141\x70\137\141\x74\164\162\x73"; const reigcooiouysaaok = "\154\x69\x6e\x6b\x5f\x61\164\164\162\x73"; const ceeoggmayqcuoqwi = "\x69\x74\145\x6d\x5f\141\x74\x74\x72\x73"; const quewuqgwgceoamee = "\151\x74\145\x6d\x5f\x65\154\x65\x6d\x65\156\164"; const socgekwcqwaoyyug = "\167\x72\x61\160\137\145\x6c\145\155\x65\x6e\x74"; const gawcyaqskcsegwey = "\144\151\166\151\144\145\x72\137\x61\x74\x74\x72\163"; const koiywqsgmgmgscgy = "\x6c\x69\x6e\x6b\x5f\x63\157\x6e\164\x61\151\156\x65\162"; const mukyymeygmeoawck = "\x61\143\x74\151\166\x65\x5f\151\x74\x65\x6d\x5f\x61\164\x74\x72\163"; const qywgicgikawmwoay = "\x6c\151\156\153\137\x63\157\x6e\x74\141\x69\x6e\145\162\x5f\141\164\164\x72\x73"; protected array $breadcrumb = []; public function ecwoamckysyqikqi() : array { return $this->breadcrumb; } protected function oeewiaacscgyamai(PageInfo $igqsaukqcqscimok) : self { $this->breadcrumb = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x62\145\x66\x6f\x72\x65\x5f\x61\x64\x64\137\x69\x74\145\x6d", $this->breadcrumb, $igqsaukqcqscimok, $this); $igqsaukqcqscimok = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\141\x64\x64\x5f\x69\164\145\155", $igqsaukqcqscimok, $this); if (!$igqsaukqcqscimok) { goto kwsqgqmwyyeykgum; } $this->breadcrumb[] = $igqsaukqcqscimok; kwsqgqmwyyeykgum: $this->breadcrumb = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\141\x66\164\145\162\137\x61\144\144\137\x69\164\x65\155", $this->breadcrumb, $igqsaukqcqscimok, $this); return $this; } protected function uikgwcuascgeissw($iwkyyocymeukcceu, $uusmaiomayssaecw) : ?string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($iwkyyocymeukcceu, $uusmaiomayssaecw, ''); } protected function yceuwwmgwwqqcweu($guwumyyyakswawas) : array { $aokagokqyuysuksm = $guwumyyyakswawas[0]->cat_ID; $eyagosskwwmgwmog = get_ancestors($aokagokqyuysuksm, self::qgciomgukmcwscqw); $eyagosskwwmgwmog = array_reverse($eyagosskwwmgwmog); $eyagosskwwmgwmog[] = $aokagokqyuysuksm; return $eyagosskwwmgwmog; } public function wuqmciamumosasqa(?string $meqocwsecsywiiqs, ?string $migiiksoiymissge = '', bool $cmscqcqicyqkweuc = true) : PageInfo { static $ikwcsswcseyywgeo; if ($ikwcsswcseyywgeo) { goto emauuoieewwoeyqq; } $ikwcsswcseyywgeo = 1; emauuoieewwoeyqq: $igqsaukqcqscimok = new PageInfo(); if (!$cmscqcqicyqkweuc) { goto koukiyqaccegmquc; } $yyimiwcuegayoskq = $this->caokeucsksukesyo()->kyqakacqeumicgag()->iqoacwuiemooiysg(); $this->oeewiaacscgyamai($igqsaukqcqscimok->aseocggwwegcmqes($yyimiwcuegayoskq->gueasuouwqysmomu())->ugaqcouwcuiaemgo($yyimiwcuegayoskq->asuigsqoowmekwok())); koukiyqaccegmquc: $ikwcsswcseyywgeo += 10; $igqsaukqcqscimok->gswweykyogmsyawy($meqocwsecsywiiqs)->uaomeggmwqmmeoki($cmscqcqicyqkweuc)->jyumyyugiwwiqomk($ikwcsswcseyywgeo)->qmueseocuuekommo($this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\160\x61\x67\145\137\x69\x6e\146\157\x5f\160\145\x72\x6d\x61\154\x69\156\x6b", $migiiksoiymissge)); return $igqsaukqcqscimok; } protected function kooiucqkggeagccu(array $ywmkwiwkosakssii = []) : array { $ggauoeuaesiymgee = [self::ckmqoekmugkggeym => $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->imgymusqgccqsqqq(), self::eoaiagsgqsmskugs => ["\x74\141\x67" => __("\x50\157\x73\164\163\40\x54\x61\x67\x67\x65\x64\72\x20\45\x73", PR__CMN__COVER), "\x34\x30\64" => __("\x45\x72\x72\x6f\162\x20\64\60\x34", PR__CMN__COVER), "\164\x61\x78" => "\x25\163", "\x63\160\x61\147\145" => __("\103\157\x6d\155\x65\x6e\164\x20\120\x61\147\x65\40\45\163", PR__CMN__COVER), self::wwoeeogswkgeqack => $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(self::NAME), self::imywcsggckkcywgk => __("\x50\x61\x67\x65\40\45\x73", PR__CMN__COVER), self::yayciqueeakqwese => __("\123\x65\x61\x72\x63\150\x20\x52\145\x73\x75\x6c\164\163\40\146\157\x72\72\x20\x25\x73", PR__CMN__COVER), self::iwascisiiokuackw => __("\x41\x72\164\151\x63\x6c\145\163\40\120\x6f\x73\164\x65\144\x20\x62\171\40\x25\x73", PR__CMN__COVER), self::qgciomgukmcwscqw => "\x25\163"], self::geyisyamuoomusqo => null, self::iiogewmmwckmegcq => $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy("\x2f"), self::quewuqgwgceoamee => "\x6c\x69", self::socgekwcqwaoyyug => "\157\x6c", self::koiywqsgmgmgscgy => "\163\x70\x61\156", self::yaooyaaieecskqsq => ["\x63\154\141\163\x73" => "\x62\x72\145\141\x64\x63\x72\x75\x6d\142"], self::reigcooiouysaaok => ["\x63\154\141\x73\x73" => "\x62\x72\x65\x61\144\x63\162\x75\155\x62\x2d\x6c\151\156\x6b"], self::ceeoggmayqcuoqwi => ["\143\154\141\x73\163" => "\142\162\145\141\x64\143\162\x75\x6d\x62\55\151\x74\x65\155"], self::gawcyaqskcsegwey => ["\143\x6c\141\x73\x73" => "\x62\x72\x65\141\144\143\x72\165\x6d\x62\x2d\144\x69\166\151\x64\145\x72"], self::mukyymeygmeoawck => ["\x63\x6c\141\x73\163" => "\142\162\x65\x61\x64\143\x72\x75\155\x62\x2d\x69\164\x65\155\40\x61\x63\164\x69\166\145"], self::qywgicgikawmwoay => []]; $ywmkwiwkosakssii = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x67\x65\156\x65\162\141\164\x65\x5f\x61\x72\x67\163", $ywmkwiwkosakssii); return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ggauoeuaesiymgee); } public function sywokgmoskcocqgy(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); $gqiaqmycqyywiqsw = $ywmkwiwkosakssii[self::reigcooiouysaaok]; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia("\45\x32\44\163", "\x25\61\44\163", $gqiaqmycqyywiqsw); if (!$ywmkwiwkosakssii[self::koiywqsgmgmgscgy]) { goto ekakkiuuquqkccse; } $iwywmkygwewiamwm = $swqimwqeweekeusq->uuccukgasskgimsq($ywmkwiwkosakssii[self::koiywqsgmgmgscgy], $ywmkwiwkosakssii[self::qywgicgikawmwoay], $iwywmkygwewiamwm); ekakkiuuquqkccse: $ysmqgacyqwayokog = $ywmkwiwkosakssii[self::geyisyamuoomusqo]; if (!$ysmqgacyqwayokog) { goto oqwwacmigasucsoc; } $ysmqgacyqwayokog = $swqimwqeweekeusq->gmqyuaqwgiayskei($ysmqgacyqwayokog, $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); goto egkeqqgakieyimuq; oqwwacmigasucsoc: $ysmqgacyqwayokog = $swqimwqeweekeusq->uuccukgasskgimsq("\x69", $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); egkeqqgakieyimuq: $caacssaumiqeaoaw = $swqimwqeweekeusq->qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::ceeoggmayqcuoqwi]); $aqykuigiuwmmcieu = ''; $momcykaoccoymeig = 0; $this->create($ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . self::qwumqqyuasyskkkc, $this->ecwoamckysyqikqi(), $ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($oammesyieqmwuwyi, "\x67\x65\x74\120\x72\x69\157\162\x69\164\x79"); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof PageInfo) { goto gsqcoqqsioiyoykq; } if (!($igqsaukqcqscimok === end($oammesyieqmwuwyi))) { goto awwaiioyywmokwsm; } $igqsaukqcqscimok->qmueseocuuekommo(''); $caacssaumiqeaoaw = $swqimwqeweekeusq->qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::mukyymeygmeoawck]); awwaiioyywmokwsm: $aqykuigiuwmmcieu .= $caacssaumiqeaoaw; if (!($momcykaoccoymeig !== 0)) { goto ckwmkquuyyugigom; } $aqykuigiuwmmcieu .= $ysmqgacyqwayokog; ckwmkquuyyugigom: if ($igqsaukqcqscimok->ycqquoiyyuesegsy()) { goto cumeycwmuuqawwyu; } $aqykuigiuwmmcieu .= $igqsaukqcqscimok->qcgakseyaikigqco(); goto uaicwcqwauosmsqm; cumeycwmuuqawwyu: $aqykuigiuwmmcieu .= sprintf($iwywmkygwewiamwm, $igqsaukqcqscimok->ycqquoiyyuesegsy(), $igqsaukqcqscimok->qcgakseyaikigqco()); uaicwcqwauosmsqm: $aqykuigiuwmmcieu .= "\74\x2f{$ywmkwiwkosakssii[self::quewuqgwgceoamee]}\76"; $momcykaoccoymeig++; gsqcoqqsioiyoykq: wswikooyuaaouqgk: } cakuguiciaiaeukg: return $swqimwqeweekeusq->uuccukgasskgimsq($ywmkwiwkosakssii[self::socgekwcqwaoyyug], $ywmkwiwkosakssii[self::yaooyaaieecskqsq], $aqykuigiuwmmcieu); } public function create(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); if ($this->ecwoamckysyqikqi()) { goto omsmaougqkqigogw; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $oikyogsosqcyueay = $this->caokeucsksukesyo()->kyqakacqeumicgag()->cykwscocqwykiocm(); $qawuqcsueakkgiio = $mumyimcwkaemyyue->qaumqeeagueuqkcg(self::kkcqmwgccaygggcu); $iwkyyocymeukcceu = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::eoaiagsgqsmskugs); $gmigwwwmwemyaayy = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::iiogewmmwckmegcq); $meqocwsecsywiiqs = ''; $eiyqsiwggkuuqqee = 0; $mksyucucyswaukig = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::ckmqoekmugkggeym); if ($mksyucucyswaukig instanceof WP_Post) { goto iaomqomgiwiegoca; } if (!$mksyucucyswaukig instanceof WP_Term) { goto goaowamiyyamueiw; } $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($mksyucucyswaukig); $migiiksoiymissge = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($mksyucucyswaukig); goaowamiyyamueiw: goto ysweqawmawicakeo; iaomqomgiwiegoca: $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($mksyucucyswaukig); $eiyqsiwggkuuqqee = $seumokooiykcomco->ygqycmmkoiuocoia($mksyucucyswaukig); $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($mksyucucyswaukig); ysweqawmawicakeo: if ($mumyimcwkaemyyue->takycgcamoacksqw()) { goto imwiyqcekcykscui; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::wwoeeogswkgeqack), $gmigwwwmwemyaayy, false)->ugaqcouwcuiaemgo(self::eycwiessycciwsao)); if ($mumyimcwkaemyyue->seokosgecygsmqau()) { goto syiyemqigyugagks; } if ($mumyimcwkaemyyue->sgayqmgoigoseaoo()) { goto xogaycsaesgqeqig; } if ($mumyimcwkaemyyue->qmssqeyayicowkgy()) { goto mmmqqoemusicwgqg; } if ($mumyimcwkaemyyue->gouusicsisumuiei()) { goto uugwmywmaqomeksa; } if ($mumyimcwkaemyyue->qwakseskocsyiyks()) { goto gwkawguwsamuomuo; } if ($mumyimcwkaemyyue->mgkmukikygowogsm()) { goto syoeqaqkseguwmgy; } if ($mumyimcwkaemyyue->wqscegcksyocaias()) { goto amqgiisymksuuuss; } if ($mumyimcwkaemyyue->kccakwkaqugygwmq() && !$mumyimcwkaemyyue->aauyuieeeaakygki()) { goto oycuaqewsskgkqci; } if ($cskucqcumqsyimye->migkyseymeomymmy()) { goto gkkwmqoacciwomqs; } if ($mumyimcwkaemyyue->aauyuieeeaakygki()) { goto weouocwmwicayyiy; } if ($mumyimcwkaemyyue->sgeaogakoscmysgc() && !$eiyqsiwggkuuqqee) { goto ugiqiewymimqecsu; } if ($mumyimcwkaemyyue->sgeaogakoscmysgc() && $eiyqsiwggkuuqqee) { goto wyugqoowakyicyic; } if ($mumyimcwkaemyyue->ocwoeosukggumggw()) { goto qgkiguggkyiycwow; } if ($mumyimcwkaemyyue->mykygowqgwcuecua()) { goto ygskksomysgaokek; } if ($mumyimcwkaemyyue->kmmyuiwaogukwqqi()) { goto kskqquqsegiiogek; } if (!(has_post_format() && !$mumyimcwkaemyyue->cukiusasccucgwqc())) { goto akeoaicoieaiekcw; } $this->wuqmciamumosasqa(get_post_format_string(get_post_format())); akeoaicoieaiekcw: goto mocaoayiouggauiy; kskqquqsegiiogek: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x34\60\64")); mocaoayiouggauiy: goto wwcwmkowgooocaem; ygskksomysgaokek: $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $qscaoekmoooeuyqg = $yoiguusocukqeayg->get($mumyimcwkaemyyue->qaumqeeagueuqkcg(self::iwascisiiokuackw), true); if ($qawuqcsueakkgiio) { goto ekoegocuqoycoeyq; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::iwascisiiokuackw), $yoiguusocukqeayg->ygwimyogyaqgumam($qscaoekmoooeuyqg))); goto yksamaucqkqsawkk; ekoegocuqoycoeyq: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::iwascisiiokuackw), $yoiguusocukqeayg->ygwimyogyaqgumam($qscaoekmoooeuyqg)), $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($qscaoekmoooeuyqg), false)->ugaqcouwcuiaemgo(self::iwascisiiokuackw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); yksamaucqkqsawkk: wwcwmkowgooocaem: goto becceuuwokgoaewy; qgkiguggkyiycwow: if ($qawuqcsueakkgiio) { goto cwugokqsmiomgmqg; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::qeueagcuyogwwyky), single_tag_title('', false))); goto uuuceqkseqkqawko; cwugokqsmiomgmqg: $scwiymciagumsuiw = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\164\141\147\137\151\144"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(single_tag_title('', false), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($scwiymciagumsuiw), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($scwiymciagumsuiw))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); uuuceqkseqkqawko: becceuuwokgoaewy: goto aeaciamekuqyieys; wyugqoowakyicyic: $eyagosskwwmgwmog = get_post_ancestors($seumokooiykcomco->iooowgsqoyqseyuu($mksyucucyswaukig)); foreach (array_reverse($eyagosskwwmgwmog) as $qkcoyiyeuoyyoocy) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($qkcoyiyeuoyyoocy), $seumokooiykcomco->ycqquoiyyuesegsy($qkcoyiyeuoyyoocy), false)->ugaqcouwcuiaemgo(self::imywcsggckkcywgk)); wkaoyycsoeoyqcae: } yeemsgmumygmumqw: $this->wuqmciamumosasqa($meqocwsecsywiiqs); aeaciamekuqyieys: goto iuysqgmmgqiywssm; ugiqiewymimqecsu: $oammesyieqmwuwyi = $this->sscegwueamckwmcy(self::ggcmgaccygaquiwu . "\x70\x61\147\145\137\151\x74\x65\x6d", ["\x68\x61\x73\x5f\160\141\x67\145\x5f\x6e\141\x6d\145" => true], $mksyucucyswaukig); if (!($oammesyieqmwuwyi && isset($oammesyieqmwuwyi["\x68\141\x73\x5f\x70\141\x67\145\137\156\x61\x6d\x65"]) && $oammesyieqmwuwyi["\150\x61\163\x5f\x70\x61\147\145\137\156\141\x6d\145"])) { goto yimeskeioamqmuwg; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); yimeskeioamqmuwg: iuysqgmmgqiywssm: goto ggyoywwggggekycs; weouocwmwicayyiy: $omwmuycmeqcqokom = $seumokooiykcomco->get($eiyqsiwggkuuqqee); $awiycosuekoeeqou = get_the_category($seumokooiykcomco->iooowgsqoyqseyuu($omwmuycmeqcqokom)); $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($awiycosuekoeeqou))); eacysqsegwcqawsa: } iquecygaakmiomeg: $this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($omwmuycmeqcqokom), $seumokooiykcomco->ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($omwmuycmeqcqokom)); $this->wuqmciamumosasqa($meqocwsecsywiiqs); ggyoywwggggekycs: goto kucqcgeesiccuuia; gkkwmqoacciwomqs: $useksmwkuswkwcqg = $cskucqcumqsyimye->aakmagwggmkoiiyu($mksyucucyswaukig); $yowggsumsmeoeiqc = $cskucqcumqsyimye->uikgwcuascgeissw($mksyucucyswaukig, self::NAME); if (!$useksmwkuswkwcqg) { goto kceeuicccqscwgsu; } if ($qawuqcsueakkgiio) { goto jkgouewqysmscmqs; } $this->wuqmciamumosasqa($yowggsumsmeoeiqc); goto sgiuwkisugmewmcs; jkgouewqysmscmqs: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($yowggsumsmeoeiqc, $cskucqcumqsyimye->myagyqumwekameww($useksmwkuswkwcqg), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); sgiuwkisugmewmcs: kceeuicccqscwgsu: kucqcgeesiccuuia: goto ocmagamuyawyiyka; oycuaqewsskgkqci: $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($mksyucucyswaukig); if (self::mswoacegomcucaik !== $useksmwkuswkwcqg) { goto iyeswoaqkaeggiiy; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay), $seumokooiykcomco->ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(self::wwoeeogswkgeqack)); $awiycosuekoeeqou = get_the_category(); if (!isset($awiycosuekoeeqou[0])) { goto ayamomygygmgwgkg; } $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou, self::qgciomgukmcwscqw), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($awiycosuekoeeqou))); oymyqcoekqyuiguq: } gicmaqmuscawegie: ayamomygygmgwgkg: if ($mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\x70\141\x67\145")) { goto gygqgauaceiuawkq; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); goto ucksaiwquekagyqe; gygqgauaceiuawkq: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($meqocwsecsywiiqs, $migiiksoiymissge, false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($useksmwkuswkwcqg, true)->name)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x63\x70\141\x67\x65"), $mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\160\x61\147\145"))); ucksaiwquekagyqe: goto asqqqqakiagymemk; iyeswoaqkaeggiiy: if (!($wkqsmssuaiaqmeee = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg))) { goto ukogwqiuuuakkawy; } if (!($wkqsmssuaiaqmeee->public && $wkqsmssuaiaqmeee->has_archive)) { goto wwswmaewcaisauei; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($wkqsmssuaiaqmeee->labels->name, $cskucqcumqsyimye->myagyqumwekameww($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); wwswmaewcaisauei: $kesssewsiegssiya = $gkyciwoiiisgywcs->get($wkqsmssuaiaqmeee, "\x6d\141\151\156\137\164\x61\170\157\x6e\x6f\155\171"); if ($kesssewsiegssiya) { goto wmaeicoyyciuaiuy; } switch ($useksmwkuswkwcqg) { case self::oguseymmyyoyaako: $kesssewsiegssiya = self::cmckeoksigiaqykc; goto wsemeeocquawyauo; } ocgkwqqmgasuoies: wsemeeocquawyauo: wmaeicoyyciuaiuy: if (!$kesssewsiegssiya) { goto oiiqqgyqmggyiums; } $kesssewsiegssiya = $mqeowykqcggsieya->imgymusqgccqsqqq($kesssewsiegssiya); if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto isqwwmikecauwyuc; } if ($kesssewsiegssiya->_builtin) { goto qqmmycmsoqegcqqw; } $uyuaosigqymaqsaa = $seumokooiykcomco->weescwwgqgiyumyw($mksyucucyswaukig, $mqeowykqcggsieya->aakmagwggmkoiiyu($kesssewsiegssiya)); if (!isset($uyuaosigqymaqsaa[0])) { goto aaogeemgkogagkai; } $iwewcwusemqaiggk = $uyuaosigqymaqsaa[0]; $qyiciauwscqywwgq = $kesssewsiegssiya; $eyagosskwwmgwmog = get_ancestors($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $mqeowykqcggsieya->aakmagwggmkoiiyu($qyiciauwscqywwgq), self::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = $aoskwucuugeuaeus->get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($sikiyacogecgmyai), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($sikiyacogecgmyai))); kwoyiysciqumswcy: } ooysmgyeqoiesgqm: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk))); aaogeemgkogagkai: qqmmycmsoqegcqqw: isqwwmikecauwyuc: oiiqqgyqmggyiums: if (!($omwmuycmeqcqokom = $seumokooiykcomco->ygqycmmkoiuocoia($mksyucucyswaukig))) { goto magymcqykamwqigw; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($omwmuycmeqcqokom), $seumokooiykcomco->ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($omwmuycmeqcqokom))); magymcqykamwqigw: $this->wuqmciamumosasqa($meqocwsecsywiiqs); ukogwqiuuuakkawy: asqqqqakiagymemk: ocmagamuyawyiyka: goto iwgmywqocewwgoeo; amqgiisymksuuuss: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x59"), get_year_link(get_the_time("\131")), false)->ugaqcouwcuiaemgo("\x79\x65\x61\x72")); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x46"), get_month_link(get_the_time("\x59"), get_the_time("\106")), false)->ugaqcouwcuiaemgo("\155\x6f\156\164\150")); $this->wuqmciamumosasqa(get_the_time("\144")); iwgmywqocewwgoeo: goto sgiouaqukyycswqm; syoeqaqkseguwmgy: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\131"), get_year_link(get_the_time("\x59")), false)->ugaqcouwcuiaemgo("\x79\145\141\x72")); $this->wuqmciamumosasqa(get_the_time("\x46")); sgiouaqukyycswqm: goto ucasigqmoiwaimkk; gwkawguwsamuomuo: $this->wuqmciamumosasqa(get_the_time("\x59")); ucasigqmoiwaimkk: goto wowmysuygugawmmu; uugwmywmaqomeksa: $qmqecyyaiimkyaae = get_search_query(); if ($qawuqcsueakkgiio) { goto gcskyqewysqaceeg; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::yayciqueeakqwese), $qmqecyyaiimkyaae)); goto kkewoqqowugagwoy; gcskyqewysqaceeg: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::yayciqueeakqwese), get_search_query(self::kkcqmwgccaygggcu)), $mumyimcwkaemyyue->yqymaqmqiqmmmsoo("\163", $qmqecyyaiimkyaae, $gmigwwwmwemyaayy), false)->ugaqcouwcuiaemgo(self::yayciqueeakqwese)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); kkewoqqowugagwoy: wowmysuygugawmmu: goto iquugwoswgkoiieg; mmmqqoemusicwgqg: $iwewcwusemqaiggk = $mumyimcwkaemyyue->imgymusqgccqsqqq(); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto qumkwsqqocooyuoq; } $kesssewsiegssiya = $gkyciwoiiisgywcs->get($mumyimcwkaemyyue->imgymusqgccqsqqq(), self::gmmygyiecgmggaam); if (!$kesssewsiegssiya) { goto qiaaqkymeuuueoqk; } $qyiciauwscqywwgq = $mqeowykqcggsieya->imgymusqgccqsqqq($kesssewsiegssiya); if (!$qyiciauwscqywwgq instanceof WP_Taxonomy) { goto asaowisseacciyia; } foreach ($qyiciauwscqywwgq->object_type as $useksmwkuswkwcqg) { $wkqsmssuaiaqmeee = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if (!($wkqsmssuaiaqmeee && $wkqsmssuaiaqmeee->public)) { goto acesyuieuuqwgkwm; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($wkqsmssuaiaqmeee->label, $cskucqcumqsyimye->myagyqumwekameww($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); goto makomwwyomweyamm; acesyuieuuqwgkwm: oqwcmgwimeisusoe: } makomwwyomweyamm: asaowisseacciyia: qiaaqkymeuuueoqk: $eyagosskwwmgwmog = get_ancestors($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk), self::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = $aoskwucuugeuaeus->get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($sikiyacogecgmyai), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($sikiyacogecgmyai))); gwiaimosqoiquwkc: } ugswokwmkumcmigc: if ($qawuqcsueakkgiio) { goto owgakkqgckqcegoi; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x74\x61\x78"), $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk))); goto cigesysuauaiccms; owgakkqgckqcegoi: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); cigesysuauaiccms: qumkwsqqocooyuoq: iquugwoswgkoiieg: goto gsiaskgsukseumig; xogaycsaesgqeqig: $awiycosuekoeeqou = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\x63\x61\164"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay), $seumokooiykcomco->ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(self::wwoeeogswkgeqack)); $eyagosskwwmgwmog = get_ancestors($awiycosuekoeeqou, self::qgciomgukmcwscqw); foreach (array_reverse($eyagosskwwmgwmog) as $omwmuycmeqcqokom) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($omwmuycmeqcqokom), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(self::qgciomgukmcwscqw)); ookcgumoacskyymy: } owisckseoogsugqq: if ($qawuqcsueakkgiio) { goto cuseccewekgcgkyg; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::qgciomgukmcwscqw), single_cat_title('', false))); goto kgysyqkoqgwmoscq; cuseccewekgcgkyg: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(self::qgciomgukmcwscqw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); kgysyqkoqgwmoscq: gsiaskgsukseumig: goto woqkgwmkmqsuceuy; syiyemqigyugagks: $this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay)); woqkgwmkmqsuceuy: goto umemmgiwimkymaya; imwiyqcekcykscui: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::wwoeeogswkgeqack), $gmigwwwmwemyaayy); umemmgiwimkymaya: omsmaougqkqigogw: } }
