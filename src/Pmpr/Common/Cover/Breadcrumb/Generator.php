<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             644539feeb045             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Foundation\Data\PageInfo; use WP_Post; use WP_Taxonomy; use WP_Term; class Generator extends Common { const geyisyamuoomusqo = "\x64\x69\x76\151\x64\x65\x72"; const iiogewmmwckmegcq = "\x68\x6f\155\145\137\165\162\x6c"; const yaooyaaieecskqsq = "\x77\162\x61\160\x5f\x61\x74\164\162\x73"; const reigcooiouysaaok = "\154\x69\156\x6b\x5f\141\164\164\x72\x73"; const ceeoggmayqcuoqwi = "\x69\164\145\155\137\141\x74\164\162\x73"; const quewuqgwgceoamee = "\151\x74\145\155\x5f\x65\154\x65\155\x65\x6e\x74"; const socgekwcqwaoyyug = "\167\x72\x61\160\x5f\145\x6c\x65\155\x65\x6e\x74"; const gawcyaqskcsegwey = "\x64\151\x76\151\144\x65\x72\137\x61\x74\164\x72\163"; const koiywqsgmgmgscgy = "\x6c\151\x6e\x6b\x5f\143\x6f\x6e\164\141\151\x6e\x65\162"; const mukyymeygmeoawck = "\141\143\164\x69\x76\x65\137\x69\x74\145\155\x5f\x61\x74\x74\162\x73"; const qywgicgikawmwoay = "\154\151\156\x6b\x5f\x63\x6f\x6e\164\141\x69\x6e\145\162\x5f\x61\164\164\x72\163"; protected array $breadcrumb = []; public function ecwoamckysyqikqi() : array { return $this->breadcrumb; } protected function oeewiaacscgyamai(PageInfo $igqsaukqcqscimok) : self { $this->breadcrumb = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\142\145\146\157\x72\x65\x5f\x61\144\x64\137\x69\164\x65\155", $this->breadcrumb, $igqsaukqcqscimok, $this); $igqsaukqcqscimok = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x61\144\x64\x5f\151\x74\x65\155", $igqsaukqcqscimok, $this); if (!$igqsaukqcqscimok) { goto aeiemwacaiygemmg; } $this->breadcrumb[] = $igqsaukqcqscimok; aeiemwacaiygemmg: $this->breadcrumb = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\141\146\x74\x65\162\137\x61\x64\x64\137\151\164\x65\155", $this->breadcrumb, $igqsaukqcqscimok, $this); return $this; } protected function uikgwcuascgeissw($iwkyyocymeukcceu, $uusmaiomayssaecw) : ?string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($iwkyyocymeukcceu, $uusmaiomayssaecw, ''); } protected function yceuwwmgwwqqcweu($guwumyyyakswawas) : array { $aokagokqyuysuksm = $guwumyyyakswawas[0]->cat_ID; $eyagosskwwmgwmog = get_ancestors($aokagokqyuysuksm, self::qgciomgukmcwscqw); $eyagosskwwmgwmog = array_reverse($eyagosskwwmgwmog); $eyagosskwwmgwmog[] = $aokagokqyuysuksm; return $eyagosskwwmgwmog; } public function wuqmciamumosasqa(?string $meqocwsecsywiiqs, ?string $migiiksoiymissge = '', bool $cmscqcqicyqkweuc = true) : PageInfo { static $ikwcsswcseyywgeo; if ($ikwcsswcseyywgeo) { goto yyqygaokeccgugos; } $ikwcsswcseyywgeo = 1; yyqygaokeccgugos: $igqsaukqcqscimok = new PageInfo(); if (!$cmscqcqicyqkweuc) { goto oeusomaaeekakake; } $yyimiwcuegayoskq = $this->caokeucsksukesyo()->kyqakacqeumicgag()->iqoacwuiemooiysg(); $this->oeewiaacscgyamai($igqsaukqcqscimok->aseocggwwegcmqes($yyimiwcuegayoskq->gueasuouwqysmomu())->ugaqcouwcuiaemgo($yyimiwcuegayoskq->asuigsqoowmekwok())); oeusomaaeekakake: $ikwcsswcseyywgeo += 10; $igqsaukqcqscimok->gswweykyogmsyawy($meqocwsecsywiiqs)->uaomeggmwqmmeoki($cmscqcqicyqkweuc)->jyumyyugiwwiqomk($ikwcsswcseyywgeo)->qmueseocuuekommo($this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x70\141\x67\x65\137\x69\156\146\x6f\x5f\x70\145\162\155\x61\x6c\151\156\153", $migiiksoiymissge)); return $igqsaukqcqscimok; } protected function kooiucqkggeagccu(array $ywmkwiwkosakssii = []) : array { $ggauoeuaesiymgee = [self::ckmqoekmugkggeym => $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->imgymusqgccqsqqq(), self::eoaiagsgqsmskugs => ["\x74\141\147" => __("\x50\x6f\x73\164\163\x20\x54\141\x67\147\145\x64\72\x20\x25\x73", PR__CMN__COVER), "\64\x30\64" => __("\x45\x72\x72\x6f\x72\x20\64\60\64", PR__CMN__COVER), "\x74\x61\170" => "\x25\x73", "\143\x70\141\147\145" => __("\x43\x6f\155\x6d\x65\156\164\x20\120\x61\x67\x65\x20\x25\163", PR__CMN__COVER), self::wwoeeogswkgeqack => $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(self::NAME), self::imywcsggckkcywgk => __("\120\141\147\145\x20\x25\x73", PR__CMN__COVER), self::yayciqueeakqwese => __("\123\x65\x61\162\143\150\40\x52\145\x73\165\154\x74\163\40\146\157\x72\x3a\x20\45\x73", PR__CMN__COVER), self::iwascisiiokuackw => __("\x41\162\x74\x69\x63\x6c\x65\x73\40\120\157\163\164\x65\x64\40\x62\x79\40\x25\163", PR__CMN__COVER), self::qgciomgukmcwscqw => "\x25\163"], self::geyisyamuoomusqo => null, self::iiogewmmwckmegcq => $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy("\x2f"), self::quewuqgwgceoamee => "\154\x69", self::socgekwcqwaoyyug => "\157\154", self::koiywqsgmgmgscgy => "\x73\x70\141\x6e", self::yaooyaaieecskqsq => ["\x63\154\x61\x73\163" => "\x62\x72\145\x61\x64\143\162\165\155\x62"], self::reigcooiouysaaok => ["\143\x6c\x61\163\163" => "\x62\162\x65\x61\x64\x63\x72\165\155\142\x2d\154\151\156\x6b"], self::ceeoggmayqcuoqwi => ["\143\x6c\x61\x73\163" => "\142\162\x65\141\144\x63\162\165\x6d\142\x2d\151\164\x65\x6d"], self::gawcyaqskcsegwey => ["\143\x6c\x61\163\x73" => "\x62\x72\145\141\x64\143\x72\x75\155\x62\55\x64\151\x76\151\x64\145\x72"], self::mukyymeygmeoawck => ["\143\154\141\163\163" => "\x62\162\145\x61\x64\x63\162\165\x6d\142\x2d\151\164\x65\155\40\141\143\164\x69\x76\x65"], self::qywgicgikawmwoay => []]; $ywmkwiwkosakssii = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\147\x65\156\x65\162\x61\x74\x65\137\141\162\147\163", $ywmkwiwkosakssii); return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ggauoeuaesiymgee); } public function sywokgmoskcocqgy(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); $gqiaqmycqyywiqsw = $ywmkwiwkosakssii[self::reigcooiouysaaok]; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia("\x25\62\44\x73", "\x25\x31\x24\x73", $gqiaqmycqyywiqsw); if (!$ywmkwiwkosakssii[self::koiywqsgmgmgscgy]) { goto kwuckkyqaygwgcuy; } $iwywmkygwewiamwm = $swqimwqeweekeusq->uuccukgasskgimsq($ywmkwiwkosakssii[self::koiywqsgmgmgscgy], $ywmkwiwkosakssii[self::qywgicgikawmwoay], $iwywmkygwewiamwm); kwuckkyqaygwgcuy: $ysmqgacyqwayokog = $ywmkwiwkosakssii[self::geyisyamuoomusqo]; if (!$ysmqgacyqwayokog) { goto giuccakymqymawgk; } $ysmqgacyqwayokog = $swqimwqeweekeusq->gmqyuaqwgiayskei($ysmqgacyqwayokog, $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); goto sicgyiyiocyygkoc; giuccakymqymawgk: $ysmqgacyqwayokog = $swqimwqeweekeusq->uuccukgasskgimsq("\151", $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); sicgyiyiocyygkoc: $caacssaumiqeaoaw = $swqimwqeweekeusq->qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::ceeoggmayqcuoqwi]); $aqykuigiuwmmcieu = ''; $momcykaoccoymeig = 0; $this->create($ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . self::qwumqqyuasyskkkc, $this->ecwoamckysyqikqi(), $ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($oammesyieqmwuwyi, "\147\x65\x74\x50\162\x69\157\162\x69\164\171"); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof PageInfo) { goto oasggeyceiyieuuo; } if (!($igqsaukqcqscimok === end($oammesyieqmwuwyi))) { goto eqiiaokcgakicaye; } $igqsaukqcqscimok->qmueseocuuekommo(''); $caacssaumiqeaoaw = $swqimwqeweekeusq->qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::mukyymeygmeoawck]); eqiiaokcgakicaye: $aqykuigiuwmmcieu .= $caacssaumiqeaoaw; if (!($momcykaoccoymeig !== 0)) { goto gcucsowqoeiwmyyq; } $aqykuigiuwmmcieu .= $ysmqgacyqwayokog; gcucsowqoeiwmyyq: if ($igqsaukqcqscimok->ycqquoiyyuesegsy()) { goto kyiuewcikkqagwwg; } $aqykuigiuwmmcieu .= $igqsaukqcqscimok->qcgakseyaikigqco(); goto aumowowgewgqmwci; kyiuewcikkqagwwg: $aqykuigiuwmmcieu .= sprintf($iwywmkygwewiamwm, $igqsaukqcqscimok->ycqquoiyyuesegsy(), $igqsaukqcqscimok->qcgakseyaikigqco()); aumowowgewgqmwci: $aqykuigiuwmmcieu .= "\x3c\57{$ywmkwiwkosakssii[self::quewuqgwgceoamee]}\76"; $momcykaoccoymeig++; oasggeyceiyieuuo: ikcwmsgocyuqiumc: } cyosacayacumuaks: return $swqimwqeweekeusq->uuccukgasskgimsq($ywmkwiwkosakssii[self::socgekwcqwaoyyug], $ywmkwiwkosakssii[self::yaooyaaieecskqsq], $aqykuigiuwmmcieu); } public function create(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); if ($this->ecwoamckysyqikqi()) { goto goaowamiyyamueiw; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $oikyogsosqcyueay = $this->caokeucsksukesyo()->kyqakacqeumicgag()->cykwscocqwykiocm(); $qawuqcsueakkgiio = $mumyimcwkaemyyue->qaumqeeagueuqkcg(self::kkcqmwgccaygggcu); $iwkyyocymeukcceu = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::eoaiagsgqsmskugs); $gmigwwwmwemyaayy = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::iiogewmmwckmegcq); $meqocwsecsywiiqs = ''; $eiyqsiwggkuuqqee = 0; $mksyucucyswaukig = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::ckmqoekmugkggeym); if ($mksyucucyswaukig instanceof WP_Post) { goto wwcqoeuwskquakwy; } if (!$mksyucucyswaukig instanceof WP_Term) { goto omuauimgkygcecsc; } $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($mksyucucyswaukig); $migiiksoiymissge = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($mksyucucyswaukig); omuauimgkygcecsc: goto quamuugoocyyceec; wwcqoeuwskquakwy: $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($mksyucucyswaukig); $eiyqsiwggkuuqqee = $seumokooiykcomco->ygqycmmkoiuocoia($mksyucucyswaukig); $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($mksyucucyswaukig); quamuugoocyyceec: if ($mumyimcwkaemyyue->takycgcamoacksqw()) { goto uaicwcqwauosmsqm; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::wwoeeogswkgeqack), $gmigwwwmwemyaayy, false)->ugaqcouwcuiaemgo(self::eycwiessycciwsao)); if ($mumyimcwkaemyyue->seokosgecygsmqau()) { goto ckwmkquuyyugigom; } if ($mumyimcwkaemyyue->sgayqmgoigoseaoo()) { goto wswikooyuaaouqgk; } if ($mumyimcwkaemyyue->qmssqeyayicowkgy()) { goto egkeqqgakieyimuq; } if ($mumyimcwkaemyyue->gouusicsisumuiei()) { goto ekakkiuuquqkccse; } if ($mumyimcwkaemyyue->qwakseskocsyiyks()) { goto emauuoieewwoeyqq; } if ($mumyimcwkaemyyue->mgkmukikygowogsm()) { goto ywqakqkmmcoceqka; } if ($mumyimcwkaemyyue->wqscegcksyocaias()) { goto qcgyggiaowuqswuw; } if ($mumyimcwkaemyyue->kccakwkaqugygwmq() && !$mumyimcwkaemyyue->aauyuieeeaakygki()) { goto casgoamcqkekgeeo; } if ($cskucqcumqsyimye->migkyseymeomymmy()) { goto ismeikacqqyqcmqe; } if ($mumyimcwkaemyyue->aauyuieeeaakygki()) { goto kakkuyeccaacewyo; } if ($mumyimcwkaemyyue->sgeaogakoscmysgc() && !$eiyqsiwggkuuqqee) { goto usyckeewsgwaysam; } if ($mumyimcwkaemyyue->sgeaogakoscmysgc() && $eiyqsiwggkuuqqee) { goto mkgmaguyswskyioa; } if ($mumyimcwkaemyyue->ocwoeosukggumggw()) { goto skuuyysooocugyww; } if ($mumyimcwkaemyyue->mykygowqgwcuecua()) { goto qksckewucmosemuo; } if ($mumyimcwkaemyyue->kmmyuiwaogukwqqi()) { goto qmokwkocmcyeyesc; } if (!(has_post_format() && !$mumyimcwkaemyyue->cukiusasccucgwqc())) { goto esqwswmoegiqcckg; } $this->wuqmciamumosasqa(get_post_format_string(get_post_format())); esqwswmoegiqcckg: goto mosuacsuaasssciu; qmokwkocmcyeyesc: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x34\x30\x34")); mosuacsuaasssciu: goto kmooekeyemqgucci; qksckewucmosemuo: $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $qscaoekmoooeuyqg = $yoiguusocukqeayg->get($mumyimcwkaemyyue->qaumqeeagueuqkcg(self::iwascisiiokuackw), true); if ($qawuqcsueakkgiio) { goto mwieyyqamgwicgco; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::iwascisiiokuackw), $yoiguusocukqeayg->ygwimyogyaqgumam($qscaoekmoooeuyqg))); goto wkiymcoqqiigqaaw; mwieyyqamgwicgco: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::iwascisiiokuackw), $yoiguusocukqeayg->ygwimyogyaqgumam($qscaoekmoooeuyqg)), $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($qscaoekmoooeuyqg), false)->ugaqcouwcuiaemgo(self::iwascisiiokuackw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); wkiymcoqqiigqaaw: kmooekeyemqgucci: goto cmmusgkieoqyymgs; skuuyysooocugyww: if ($qawuqcsueakkgiio) { goto kceuusiekagyeoys; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::qeueagcuyogwwyky), single_tag_title('', false))); goto uyeyscsaigimsqwq; kceuusiekagyeoys: $scwiymciagumsuiw = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\x74\x61\x67\137\151\x64"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(single_tag_title('', false), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($scwiymciagumsuiw), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($scwiymciagumsuiw))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); uyeyscsaigimsqwq: cmmusgkieoqyymgs: goto skwusmoyomgqkimm; mkgmaguyswskyioa: $eyagosskwwmgwmog = get_post_ancestors($seumokooiykcomco->iooowgsqoyqseyuu($mksyucucyswaukig)); foreach (array_reverse($eyagosskwwmgwmog) as $qkcoyiyeuoyyoocy) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($qkcoyiyeuoyyoocy), $seumokooiykcomco->ycqquoiyyuesegsy($qkcoyiyeuoyyoocy), false)->ugaqcouwcuiaemgo(self::imywcsggckkcywgk)); eekaiaeqewiqkkgm: } gkoaeuekqockuoiq: $this->wuqmciamumosasqa($meqocwsecsywiiqs); skwusmoyomgqkimm: goto gicuuwuuuwumyooa; usyckeewsgwaysam: $oammesyieqmwuwyi = $this->sscegwueamckwmcy(self::ggcmgaccygaquiwu . "\160\141\147\145\x5f\151\164\x65\155", ["\x68\x61\163\137\x70\141\x67\x65\x5f\156\141\155\x65" => true], $mksyucucyswaukig); if (!($oammesyieqmwuwyi && isset($oammesyieqmwuwyi["\150\141\163\x5f\x70\x61\x67\x65\x5f\x6e\x61\155\x65"]) && $oammesyieqmwuwyi["\150\x61\x73\137\160\141\147\145\x5f\x6e\141\x6d\145"])) { goto yqicwmekwuoywyus; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); yqicwmekwuoywyus: gicuuwuuuwumyooa: goto cysgqimowcqoqqsc; kakkuyeccaacewyo: $omwmuycmeqcqokom = $seumokooiykcomco->get($eiyqsiwggkuuqqee); $awiycosuekoeeqou = get_the_category($seumokooiykcomco->iooowgsqoyqseyuu($omwmuycmeqcqokom)); $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($awiycosuekoeeqou))); kwmiwaecqcgiaqye: } jsmisuccwyukksgc: $this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($omwmuycmeqcqokom), $seumokooiykcomco->ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($omwmuycmeqcqokom)); $this->wuqmciamumosasqa($meqocwsecsywiiqs); cysgqimowcqoqqsc: goto qsokkkyoackoycie; ismeikacqqyqcmqe: $useksmwkuswkwcqg = $cskucqcumqsyimye->aakmagwggmkoiiyu($mksyucucyswaukig); $yowggsumsmeoeiqc = $cskucqcumqsyimye->uikgwcuascgeissw($mksyucucyswaukig, self::NAME); if (!$useksmwkuswkwcqg) { goto ukwoswyyogmsygqg; } if ($qawuqcsueakkgiio) { goto uqcsksaywyqeumig; } $this->wuqmciamumosasqa($yowggsumsmeoeiqc); goto yggmaskeguaqkusc; uqcsksaywyqeumig: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($yowggsumsmeoeiqc, $cskucqcumqsyimye->myagyqumwekameww($useksmwkuswkwcqg), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); yggmaskeguaqkusc: ukwoswyyogmsygqg: qsokkkyoackoycie: goto yseyyukqaowwouua; casgoamcqkekgeeo: $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($mksyucucyswaukig); if (self::mswoacegomcucaik !== $useksmwkuswkwcqg) { goto qyeswawykmasuqye; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay), $seumokooiykcomco->ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(self::wwoeeogswkgeqack)); $awiycosuekoeeqou = get_the_category(); if (!isset($awiycosuekoeeqou[0])) { goto awaqksikyomsuaeo; } $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou, self::qgciomgukmcwscqw), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($awiycosuekoeeqou))); iqsgossweywksoia: } igwkcikeyoowosoi: awaqksikyomsuaeo: if ($mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\x70\141\147\x65")) { goto cuommomwmsackoqc; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); goto ggeoqeowscwkeumy; cuommomwmsackoqc: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($meqocwsecsywiiqs, $migiiksoiymissge, false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($useksmwkuswkwcqg, true)->name)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\143\x70\141\x67\145"), $mumyimcwkaemyyue->qaumqeeagueuqkcg("\x63\x70\x61\147\x65"))); ggeoqeowscwkeumy: goto uwaimsisescsgyqk; qyeswawykmasuqye: if (!($wkqsmssuaiaqmeee = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg))) { goto ksckqkmwiqggykke; } if (!($wkqsmssuaiaqmeee->public && $wkqsmssuaiaqmeee->has_archive)) { goto yksywwikmeksikqc; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($wkqsmssuaiaqmeee->labels->name, $cskucqcumqsyimye->myagyqumwekameww($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); yksywwikmeksikqc: $kesssewsiegssiya = $gkyciwoiiisgywcs->get($wkqsmssuaiaqmeee, "\x6d\141\x69\x6e\137\x74\141\170\x6f\x6e\157\155\171"); if ($kesssewsiegssiya) { goto giugwaeuwaomossq; } switch ($useksmwkuswkwcqg) { case self::oguseymmyyoyaako: $kesssewsiegssiya = self::cmckeoksigiaqykc; goto yoqsigmoyaaceqky; } suqckoccuyeeymww: yoqsigmoyaaceqky: giugwaeuwaomossq: if (!$kesssewsiegssiya) { goto cuwcsamuuqyuyqsu; } $kesssewsiegssiya = $mqeowykqcggsieya->imgymusqgccqsqqq($kesssewsiegssiya); if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto ekoqieigyoeyauqa; } if ($kesssewsiegssiya->_builtin) { goto mqgeseysuwcaqwiy; } $uyuaosigqymaqsaa = $seumokooiykcomco->weescwwgqgiyumyw($mksyucucyswaukig, $mqeowykqcggsieya->aakmagwggmkoiiyu($kesssewsiegssiya)); if (!isset($uyuaosigqymaqsaa[0])) { goto ssagcgqaucssyego; } $iwewcwusemqaiggk = $uyuaosigqymaqsaa[0]; $qyiciauwscqywwgq = $kesssewsiegssiya; $eyagosskwwmgwmog = get_ancestors($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $mqeowykqcggsieya->aakmagwggmkoiiyu($qyiciauwscqywwgq), self::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = $aoskwucuugeuaeus->get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($sikiyacogecgmyai), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($sikiyacogecgmyai))); sycougcyeqmeiagk: } acgqaeakoyasgkku: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk))); ssagcgqaucssyego: mqgeseysuwcaqwiy: ekoqieigyoeyauqa: cuwcsamuuqyuyqsu: if (!($omwmuycmeqcqokom = $seumokooiykcomco->ygqycmmkoiuocoia($mksyucucyswaukig))) { goto mimacwyuueomgwwy; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($omwmuycmeqcqokom), $seumokooiykcomco->ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($omwmuycmeqcqokom))); mimacwyuueomgwwy: $this->wuqmciamumosasqa($meqocwsecsywiiqs); ksckqkmwiqggykke: uwaimsisescsgyqk: yseyyukqaowwouua: goto sooecucuakgkuyis; qcgyggiaowuqswuw: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\131"), get_year_link(get_the_time("\131")), false)->ugaqcouwcuiaemgo("\x79\145\x61\x72")); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x46"), get_month_link(get_the_time("\x59"), get_the_time("\x46")), false)->ugaqcouwcuiaemgo("\x6d\157\156\x74\x68")); $this->wuqmciamumosasqa(get_the_time("\x64")); sooecucuakgkuyis: goto kwsqgqmwyyeykgum; ywqakqkmmcoceqka: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x59"), get_year_link(get_the_time("\x59")), false)->ugaqcouwcuiaemgo("\x79\145\141\x72")); $this->wuqmciamumosasqa(get_the_time("\x46")); kwsqgqmwyyeykgum: goto koukiyqaccegmquc; emauuoieewwoeyqq: $this->wuqmciamumosasqa(get_the_time("\x59")); koukiyqaccegmquc: goto oqwwacmigasucsoc; ekakkiuuquqkccse: $qmqecyyaiimkyaae = get_search_query(); if ($qawuqcsueakkgiio) { goto iwkckkeimmeoquyq; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::yayciqueeakqwese), $qmqecyyaiimkyaae)); goto masakmomqmeocqqg; iwkckkeimmeoquyq: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::yayciqueeakqwese), get_search_query(self::kkcqmwgccaygggcu)), $mumyimcwkaemyyue->yqymaqmqiqmmmsoo("\163", $qmqecyyaiimkyaae, $gmigwwwmwemyaayy), false)->ugaqcouwcuiaemgo(self::yayciqueeakqwese)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); masakmomqmeocqqg: oqwwacmigasucsoc: goto cakuguiciaiaeukg; egkeqqgakieyimuq: $iwewcwusemqaiggk = $mumyimcwkaemyyue->imgymusqgccqsqqq(); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto yqcusaeysomccaok; } $kesssewsiegssiya = $gkyciwoiiisgywcs->get($mumyimcwkaemyyue->imgymusqgccqsqqq(), self::gmmygyiecgmggaam); if (!$kesssewsiegssiya) { goto ousmyagwsiooumos; } $qyiciauwscqywwgq = $mqeowykqcggsieya->imgymusqgccqsqqq($kesssewsiegssiya); if (!$qyiciauwscqywwgq instanceof WP_Taxonomy) { goto auumaoycmsmsgigs; } foreach ($qyiciauwscqywwgq->object_type as $useksmwkuswkwcqg) { $wkqsmssuaiaqmeee = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if (!($wkqsmssuaiaqmeee && $wkqsmssuaiaqmeee->public)) { goto ysiqakyaiooyscwy; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($wkqsmssuaiaqmeee->label, $cskucqcumqsyimye->myagyqumwekameww($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); goto ssywsaaqqaucesau; ysiqakyaiooyscwy: ygcgoaokauigwuus: } ssywsaaqqaucesau: auumaoycmsmsgigs: ousmyagwsiooumos: $eyagosskwwmgwmog = get_ancestors($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk), self::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = $aoskwucuugeuaeus->get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($sikiyacogecgmyai), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($sikiyacogecgmyai))); yiceawuuiusakwiq: } qeuyekusasqmcqms: if ($qawuqcsueakkgiio) { goto sgocecweikecwwgq; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\164\x61\x78"), $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk))); goto qwisiamkmkkwucyo; sgocecweikecwwgq: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); qwisiamkmkkwucyo: yqcusaeysomccaok: cakuguiciaiaeukg: goto awwaiioyywmokwsm; wswikooyuaaouqgk: $awiycosuekoeeqou = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\x63\x61\164"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay), $seumokooiykcomco->ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(self::wwoeeogswkgeqack)); $eyagosskwwmgwmog = get_ancestors($awiycosuekoeeqou, self::qgciomgukmcwscqw); foreach (array_reverse($eyagosskwwmgwmog) as $omwmuycmeqcqokom) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($omwmuycmeqcqokom), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(self::qgciomgukmcwscqw)); iymaiwqimisgacmk: } qcssigmcayuyweiy: if ($qawuqcsueakkgiio) { goto mugscgugcogcasue; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::qgciomgukmcwscqw), single_cat_title('', false))); goto qyyyycwaookqaoke; mugscgugcogcasue: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(self::qgciomgukmcwscqw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); qyyyycwaookqaoke: awwaiioyywmokwsm: goto cumeycwmuuqawwyu; ckwmkquuyyugigom: $this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay)); cumeycwmuuqawwyu: goto gsqcoqqsioiyoykq; uaicwcqwauosmsqm: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::wwoeeogswkgeqack), $gmigwwwmwemyaayy); gsqcoqqsioiyoykq: goaowamiyyamueiw: } }
