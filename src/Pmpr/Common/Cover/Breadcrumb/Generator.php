<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             645607f7f3e17             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Foundation\Data\PageInfo; use WP_Post; use WP_Taxonomy; use WP_Term; class Generator extends Common { const geyisyamuoomusqo = "\144\151\x76\x69\144\x65\x72"; const iiogewmmwckmegcq = "\150\x6f\x6d\x65\137\x75\162\x6c"; const yaooyaaieecskqsq = "\x77\x72\x61\160\x5f\x61\164\x74\162\163"; const reigcooiouysaaok = "\x6c\x69\156\x6b\x5f\141\164\x74\x72\x73"; const ceeoggmayqcuoqwi = "\151\164\145\155\x5f\x61\164\x74\162\163"; const quewuqgwgceoamee = "\x69\164\145\x6d\137\145\154\x65\155\x65\x6e\x74"; const socgekwcqwaoyyug = "\x77\162\141\160\x5f\145\154\145\x6d\x65\x6e\164"; const gawcyaqskcsegwey = "\x64\x69\166\151\x64\145\x72\137\141\164\164\x72\163"; const koiywqsgmgmgscgy = "\x6c\x69\x6e\153\137\x63\x6f\156\x74\x61\x69\x6e\x65\162"; const mukyymeygmeoawck = "\141\x63\164\151\166\x65\x5f\x69\x74\145\155\137\x61\164\164\x72\x73"; const qywgicgikawmwoay = "\x6c\x69\156\x6b\x5f\x63\x6f\x6e\164\x61\151\x6e\145\162\137\x61\164\164\162\163"; protected array $breadcrumb = []; public function ecwoamckysyqikqi() : array { return $this->breadcrumb; } protected function oeewiaacscgyamai(PageInfo $igqsaukqcqscimok) : self { $this->breadcrumb = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\142\x65\146\157\162\145\137\x61\x64\x64\137\151\x74\145\155", $this->breadcrumb, $igqsaukqcqscimok, $this); $igqsaukqcqscimok = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\141\144\144\137\151\x74\x65\x6d", $igqsaukqcqscimok, $this); if (!$igqsaukqcqscimok) { goto ikcwmsgocyuqiumc; } $this->breadcrumb[] = $igqsaukqcqscimok; ikcwmsgocyuqiumc: $this->breadcrumb = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\141\146\x74\x65\x72\137\x61\144\x64\x5f\x69\164\x65\x6d", $this->breadcrumb, $igqsaukqcqscimok, $this); return $this; } protected function uikgwcuascgeissw($iwkyyocymeukcceu, $uusmaiomayssaecw) : ?string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($iwkyyocymeukcceu, $uusmaiomayssaecw, ''); } protected function yceuwwmgwwqqcweu($guwumyyyakswawas) : array { $aokagokqyuysuksm = $guwumyyyakswawas[0]->cat_ID; $eyagosskwwmgwmog = get_ancestors($aokagokqyuysuksm, self::qgciomgukmcwscqw); $eyagosskwwmgwmog = array_reverse($eyagosskwwmgwmog); $eyagosskwwmgwmog[] = $aokagokqyuysuksm; return $eyagosskwwmgwmog; } public function wuqmciamumosasqa(?string $meqocwsecsywiiqs, ?string $migiiksoiymissge = '', bool $cmscqcqicyqkweuc = true) : PageInfo { static $ikwcsswcseyywgeo; if ($ikwcsswcseyywgeo) { goto eqiiaokcgakicaye; } $ikwcsswcseyywgeo = 1; eqiiaokcgakicaye: $igqsaukqcqscimok = new PageInfo(); if (!$cmscqcqicyqkweuc) { goto gcucsowqoeiwmyyq; } $yyimiwcuegayoskq = $this->caokeucsksukesyo()->kyqakacqeumicgag()->iqoacwuiemooiysg(); $this->oeewiaacscgyamai($igqsaukqcqscimok->aseocggwwegcmqes($yyimiwcuegayoskq->gueasuouwqysmomu())->ugaqcouwcuiaemgo($yyimiwcuegayoskq->asuigsqoowmekwok())); gcucsowqoeiwmyyq: $ikwcsswcseyywgeo += 10; $igqsaukqcqscimok->gswweykyogmsyawy($meqocwsecsywiiqs)->uaomeggmwqmmeoki($cmscqcqicyqkweuc)->jyumyyugiwwiqomk($ikwcsswcseyywgeo)->qmueseocuuekommo($this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x70\x61\147\x65\137\x69\x6e\x66\157\x5f\160\x65\x72\x6d\141\x6c\x69\156\x6b", $migiiksoiymissge)); return $igqsaukqcqscimok; } protected function kooiucqkggeagccu(array $ywmkwiwkosakssii = []) : array { $ggauoeuaesiymgee = [self::ckmqoekmugkggeym => $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->imgymusqgccqsqqq(), self::eoaiagsgqsmskugs => ["\x74\x61\147" => __("\x50\x6f\163\x74\x73\40\124\141\x67\x67\x65\x64\72\x20\45\163", PR__CMN__COVER), "\64\x30\x34" => __("\105\x72\162\157\162\40\x34\60\64", PR__CMN__COVER), "\x74\x61\x78" => "\x25\163", "\143\160\141\x67\x65" => __("\x43\157\155\155\145\x6e\164\40\x50\x61\x67\x65\x20\x25\x73", PR__CMN__COVER), self::wwoeeogswkgeqack => $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(self::NAME), self::imywcsggckkcywgk => __("\x50\x61\x67\145\x20\45\x73", PR__CMN__COVER), self::yayciqueeakqwese => __("\123\145\141\x72\x63\x68\40\122\145\163\x75\154\164\x73\40\146\x6f\162\x3a\40\45\163", PR__CMN__COVER), self::iwascisiiokuackw => __("\101\162\x74\x69\143\154\x65\x73\40\x50\157\163\164\145\x64\40\142\171\40\x25\163", PR__CMN__COVER), self::qgciomgukmcwscqw => "\x25\163"], self::geyisyamuoomusqo => null, self::iiogewmmwckmegcq => $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy("\x2f"), self::quewuqgwgceoamee => "\x6c\151", self::socgekwcqwaoyyug => "\157\x6c", self::koiywqsgmgmgscgy => "\x73\x70\141\156", self::yaooyaaieecskqsq => ["\143\154\141\163\x73" => "\142\162\x65\x61\x64\143\x72\x75\x6d\x62"], self::reigcooiouysaaok => ["\143\x6c\141\163\163" => "\142\x72\x65\141\144\143\x72\165\x6d\x62\x2d\x6c\151\156\x6b"], self::ceeoggmayqcuoqwi => ["\x63\x6c\141\x73\163" => "\142\x72\x65\141\x64\x63\x72\x75\x6d\x62\x2d\x69\164\145\155"], self::gawcyaqskcsegwey => ["\x63\x6c\141\x73\x73" => "\x62\x72\x65\x61\144\x63\162\x75\155\x62\55\144\151\x76\151\x64\x65\162"], self::mukyymeygmeoawck => ["\x63\x6c\141\x73\x73" => "\142\162\145\x61\144\x63\162\x75\x6d\142\x2d\x69\x74\145\x6d\40\141\143\164\151\166\145"], self::qywgicgikawmwoay => []]; $ywmkwiwkosakssii = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\147\145\156\x65\x72\141\x74\x65\x5f\x61\162\x67\163", $ywmkwiwkosakssii); return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ggauoeuaesiymgee); } public function sywokgmoskcocqgy(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); $gqiaqmycqyywiqsw = $ywmkwiwkosakssii[self::reigcooiouysaaok]; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia("\x25\x32\x24\163", "\45\61\44\x73", $gqiaqmycqyywiqsw); if (!$ywmkwiwkosakssii[self::koiywqsgmgmgscgy]) { goto kyiuewcikkqagwwg; } $iwywmkygwewiamwm = $swqimwqeweekeusq->uuccukgasskgimsq($ywmkwiwkosakssii[self::koiywqsgmgmgscgy], $ywmkwiwkosakssii[self::qywgicgikawmwoay], $iwywmkygwewiamwm); kyiuewcikkqagwwg: $ysmqgacyqwayokog = $ywmkwiwkosakssii[self::geyisyamuoomusqo]; if (!$ysmqgacyqwayokog) { goto aumowowgewgqmwci; } $ysmqgacyqwayokog = $swqimwqeweekeusq->gmqyuaqwgiayskei($ysmqgacyqwayokog, $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); goto oasggeyceiyieuuo; aumowowgewgqmwci: $ysmqgacyqwayokog = $swqimwqeweekeusq->uuccukgasskgimsq("\x69", $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); oasggeyceiyieuuo: $caacssaumiqeaoaw = $swqimwqeweekeusq->qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::ceeoggmayqcuoqwi]); $aqykuigiuwmmcieu = ''; $momcykaoccoymeig = 0; $this->create($ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . self::qwumqqyuasyskkkc, $this->ecwoamckysyqikqi(), $ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($oammesyieqmwuwyi, "\x67\145\164\120\x72\151\x6f\x72\151\x74\171"); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof PageInfo) { goto qyyyycwaookqaoke; } if (!($igqsaukqcqscimok === end($oammesyieqmwuwyi))) { goto quamuugoocyyceec; } $igqsaukqcqscimok->qmueseocuuekommo(''); $caacssaumiqeaoaw = $swqimwqeweekeusq->qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::mukyymeygmeoawck]); quamuugoocyyceec: $aqykuigiuwmmcieu .= $caacssaumiqeaoaw; if (!($momcykaoccoymeig !== 0)) { goto qcssigmcayuyweiy; } $aqykuigiuwmmcieu .= $ysmqgacyqwayokog; qcssigmcayuyweiy: if ($igqsaukqcqscimok->ycqquoiyyuesegsy()) { goto iymaiwqimisgacmk; } $aqykuigiuwmmcieu .= $igqsaukqcqscimok->qcgakseyaikigqco(); goto mugscgugcogcasue; iymaiwqimisgacmk: $aqykuigiuwmmcieu .= sprintf($iwywmkygwewiamwm, $igqsaukqcqscimok->ycqquoiyyuesegsy(), $igqsaukqcqscimok->qcgakseyaikigqco()); mugscgugcogcasue: $aqykuigiuwmmcieu .= "\74\x2f{$ywmkwiwkosakssii[self::quewuqgwgceoamee]}\x3e"; $momcykaoccoymeig++; qyyyycwaookqaoke: wwcqoeuwskquakwy: } omuauimgkygcecsc: return $swqimwqeweekeusq->uuccukgasskgimsq($ywmkwiwkosakssii[self::socgekwcqwaoyyug], $ywmkwiwkosakssii[self::yaooyaaieecskqsq], $aqykuigiuwmmcieu); } public function create(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); if ($this->ecwoamckysyqikqi()) { goto makomwwyomweyamm; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $oikyogsosqcyueay = $this->caokeucsksukesyo()->kyqakacqeumicgag()->cykwscocqwykiocm(); $qawuqcsueakkgiio = $mumyimcwkaemyyue->qaumqeeagueuqkcg(self::kkcqmwgccaygggcu); $iwkyyocymeukcceu = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::eoaiagsgqsmskugs); $gmigwwwmwemyaayy = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::iiogewmmwckmegcq); $meqocwsecsywiiqs = ''; $eiyqsiwggkuuqqee = 0; $mksyucucyswaukig = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::ckmqoekmugkggeym); if ($mksyucucyswaukig instanceof WP_Post) { goto ygcgoaokauigwuus; } if (!$mksyucucyswaukig instanceof WP_Term) { goto ssywsaaqqaucesau; } $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($mksyucucyswaukig); $migiiksoiymissge = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($mksyucucyswaukig); ssywsaaqqaucesau: goto ysiqakyaiooyscwy; ygcgoaokauigwuus: $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($mksyucucyswaukig); $eiyqsiwggkuuqqee = $seumokooiykcomco->ygqycmmkoiuocoia($mksyucucyswaukig); $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($mksyucucyswaukig); ysiqakyaiooyscwy: if ($mumyimcwkaemyyue->takycgcamoacksqw()) { goto cuseccewekgcgkyg; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::wwoeeogswkgeqack), $gmigwwwmwemyaayy, false)->ugaqcouwcuiaemgo(self::eycwiessycciwsao)); if ($mumyimcwkaemyyue->seokosgecygsmqau()) { goto owisckseoogsugqq; } if ($mumyimcwkaemyyue->sgayqmgoigoseaoo()) { goto iaomqomgiwiegoca; } if ($mumyimcwkaemyyue->qmssqeyayicowkgy()) { goto gsqcoqqsioiyoykq; } if ($mumyimcwkaemyyue->gouusicsisumuiei()) { goto cumeycwmuuqawwyu; } if ($mumyimcwkaemyyue->qwakseskocsyiyks()) { goto awwaiioyywmokwsm; } if ($mumyimcwkaemyyue->mgkmukikygowogsm()) { goto cakuguiciaiaeukg; } if ($mumyimcwkaemyyue->wqscegcksyocaias()) { goto oqwwacmigasucsoc; } if ($mumyimcwkaemyyue->kccakwkaqugygwmq() && !$mumyimcwkaemyyue->aauyuieeeaakygki()) { goto koukiyqaccegmquc; } if ($cskucqcumqsyimye->migkyseymeomymmy()) { goto kwsqgqmwyyeykgum; } if ($mumyimcwkaemyyue->aauyuieeeaakygki()) { goto sooecucuakgkuyis; } if ($mumyimcwkaemyyue->sgeaogakoscmysgc() && !$eiyqsiwggkuuqqee) { goto yseyyukqaowwouua; } if ($mumyimcwkaemyyue->sgeaogakoscmysgc() && $eiyqsiwggkuuqqee) { goto qsokkkyoackoycie; } if ($mumyimcwkaemyyue->ocwoeosukggumggw()) { goto cysgqimowcqoqqsc; } if ($mumyimcwkaemyyue->mykygowqgwcuecua()) { goto gicuuwuuuwumyooa; } if ($mumyimcwkaemyyue->kmmyuiwaogukwqqi()) { goto skwusmoyomgqkimm; } if (!(has_post_format() && !$mumyimcwkaemyyue->cukiusasccucgwqc())) { goto mkgmaguyswskyioa; } $this->wuqmciamumosasqa(get_post_format_string(get_post_format())); mkgmaguyswskyioa: goto usyckeewsgwaysam; skwusmoyomgqkimm: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\64\x30\64")); usyckeewsgwaysam: goto kakkuyeccaacewyo; gicuuwuuuwumyooa: $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $qscaoekmoooeuyqg = $yoiguusocukqeayg->get($mumyimcwkaemyyue->qaumqeeagueuqkcg(self::iwascisiiokuackw), true); if ($qawuqcsueakkgiio) { goto skuuyysooocugyww; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::iwascisiiokuackw), $yoiguusocukqeayg->ygwimyogyaqgumam($qscaoekmoooeuyqg))); goto cmmusgkieoqyymgs; skuuyysooocugyww: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::iwascisiiokuackw), $yoiguusocukqeayg->ygwimyogyaqgumam($qscaoekmoooeuyqg)), $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($qscaoekmoooeuyqg), false)->ugaqcouwcuiaemgo(self::iwascisiiokuackw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); cmmusgkieoqyymgs: kakkuyeccaacewyo: goto ismeikacqqyqcmqe; cysgqimowcqoqqsc: if ($qawuqcsueakkgiio) { goto qksckewucmosemuo; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::qeueagcuyogwwyky), single_tag_title('', false))); goto kmooekeyemqgucci; qksckewucmosemuo: $scwiymciagumsuiw = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\x74\x61\147\137\x69\x64"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(single_tag_title('', false), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($scwiymciagumsuiw), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($scwiymciagumsuiw))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); kmooekeyemqgucci: ismeikacqqyqcmqe: goto casgoamcqkekgeeo; qsokkkyoackoycie: $eyagosskwwmgwmog = get_post_ancestors($seumokooiykcomco->iooowgsqoyqseyuu($mksyucucyswaukig)); foreach (array_reverse($eyagosskwwmgwmog) as $qkcoyiyeuoyyoocy) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($qkcoyiyeuoyyoocy), $seumokooiykcomco->ycqquoiyyuesegsy($qkcoyiyeuoyyoocy), false)->ugaqcouwcuiaemgo(self::imywcsggckkcywgk)); mosuacsuaasssciu: } qmokwkocmcyeyesc: $this->wuqmciamumosasqa($meqocwsecsywiiqs); casgoamcqkekgeeo: goto qcgyggiaowuqswuw; yseyyukqaowwouua: $oammesyieqmwuwyi = $this->sscegwueamckwmcy(self::ggcmgaccygaquiwu . "\x70\141\147\x65\137\x69\x74\145\x6d", ["\x68\x61\x73\137\160\141\x67\145\137\156\141\x6d\145" => true], $mksyucucyswaukig); if (!($oammesyieqmwuwyi && isset($oammesyieqmwuwyi["\150\x61\x73\137\160\x61\x67\145\x5f\156\x61\155\145"]) && $oammesyieqmwuwyi["\150\x61\x73\x5f\x70\x61\x67\145\137\x6e\x61\x6d\x65"])) { goto esqwswmoegiqcckg; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); esqwswmoegiqcckg: qcgyggiaowuqswuw: goto ywqakqkmmcoceqka; sooecucuakgkuyis: $omwmuycmeqcqokom = $seumokooiykcomco->get($eiyqsiwggkuuqqee); $awiycosuekoeeqou = get_the_category($seumokooiykcomco->iooowgsqoyqseyuu($omwmuycmeqcqokom)); $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($awiycosuekoeeqou))); wkiymcoqqiigqaaw: } mwieyyqamgwicgco: $this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($omwmuycmeqcqokom), $seumokooiykcomco->ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($omwmuycmeqcqokom)); $this->wuqmciamumosasqa($meqocwsecsywiiqs); ywqakqkmmcoceqka: goto emauuoieewwoeyqq; kwsqgqmwyyeykgum: $useksmwkuswkwcqg = $cskucqcumqsyimye->aakmagwggmkoiiyu($mksyucucyswaukig); $yowggsumsmeoeiqc = $cskucqcumqsyimye->uikgwcuascgeissw($mksyucucyswaukig, self::NAME); if (!$useksmwkuswkwcqg) { goto uyeyscsaigimsqwq; } if ($qawuqcsueakkgiio) { goto eekaiaeqewiqkkgm; } $this->wuqmciamumosasqa($yowggsumsmeoeiqc); goto kceuusiekagyeoys; eekaiaeqewiqkkgm: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($yowggsumsmeoeiqc, $cskucqcumqsyimye->myagyqumwekameww($useksmwkuswkwcqg), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); kceuusiekagyeoys: uyeyscsaigimsqwq: emauuoieewwoeyqq: goto ekakkiuuquqkccse; koukiyqaccegmquc: $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($mksyucucyswaukig); if (self::mswoacegomcucaik !== $useksmwkuswkwcqg) { goto yqicwmekwuoywyus; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay), $seumokooiykcomco->ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(self::wwoeeogswkgeqack)); $awiycosuekoeeqou = get_the_category(); if (!isset($awiycosuekoeeqou[0])) { goto ukwoswyyogmsygqg; } $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou, self::qgciomgukmcwscqw), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($awiycosuekoeeqou))); yggmaskeguaqkusc: } uqcsksaywyqeumig: ukwoswyyogmsygqg: if ($mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\x70\141\x67\145")) { goto jsmisuccwyukksgc; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); goto kwmiwaecqcgiaqye; jsmisuccwyukksgc: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($meqocwsecsywiiqs, $migiiksoiymissge, false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($useksmwkuswkwcqg, true)->name)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x63\160\x61\x67\145"), $mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\x70\x61\x67\x65"))); kwmiwaecqcgiaqye: goto gkoaeuekqockuoiq; yqicwmekwuoywyus: if (!($wkqsmssuaiaqmeee = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg))) { goto uwaimsisescsgyqk; } if (!($wkqsmssuaiaqmeee->public && $wkqsmssuaiaqmeee->has_archive)) { goto mqgeseysuwcaqwiy; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($wkqsmssuaiaqmeee->labels->name, $cskucqcumqsyimye->myagyqumwekameww($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); mqgeseysuwcaqwiy: $kesssewsiegssiya = $gkyciwoiiisgywcs->get($wkqsmssuaiaqmeee, "\x6d\x61\151\x6e\x5f\164\x61\170\157\156\157\155\171"); if ($kesssewsiegssiya) { goto mimacwyuueomgwwy; } switch ($useksmwkuswkwcqg) { case self::oguseymmyyoyaako: $kesssewsiegssiya = self::cmckeoksigiaqykc; goto ekoqieigyoeyauqa; } cuwcsamuuqyuyqsu: ekoqieigyoeyauqa: mimacwyuueomgwwy: if (!$kesssewsiegssiya) { goto ggeoqeowscwkeumy; } $kesssewsiegssiya = $mqeowykqcggsieya->imgymusqgccqsqqq($kesssewsiegssiya); if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto cuommomwmsackoqc; } if ($kesssewsiegssiya->_builtin) { goto awaqksikyomsuaeo; } $uyuaosigqymaqsaa = $seumokooiykcomco->weescwwgqgiyumyw($mksyucucyswaukig, $mqeowykqcggsieya->aakmagwggmkoiiyu($kesssewsiegssiya)); if (!isset($uyuaosigqymaqsaa[0])) { goto iqsgossweywksoia; } $iwewcwusemqaiggk = $uyuaosigqymaqsaa[0]; $qyiciauwscqywwgq = $kesssewsiegssiya; $eyagosskwwmgwmog = get_ancestors($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $mqeowykqcggsieya->aakmagwggmkoiiyu($qyiciauwscqywwgq), self::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = $aoskwucuugeuaeus->get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($sikiyacogecgmyai), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($sikiyacogecgmyai))); igwkcikeyoowosoi: } ksckqkmwiqggykke: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk))); iqsgossweywksoia: awaqksikyomsuaeo: cuommomwmsackoqc: ggeoqeowscwkeumy: if (!($omwmuycmeqcqokom = $seumokooiykcomco->ygqycmmkoiuocoia($mksyucucyswaukig))) { goto qyeswawykmasuqye; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($omwmuycmeqcqokom), $seumokooiykcomco->ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($omwmuycmeqcqokom))); qyeswawykmasuqye: $this->wuqmciamumosasqa($meqocwsecsywiiqs); uwaimsisescsgyqk: gkoaeuekqockuoiq: ekakkiuuquqkccse: goto egkeqqgakieyimuq; oqwwacmigasucsoc: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x59"), get_year_link(get_the_time("\x59")), false)->ugaqcouwcuiaemgo("\x79\x65\141\162")); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\106"), get_month_link(get_the_time("\131"), get_the_time("\106")), false)->ugaqcouwcuiaemgo("\x6d\x6f\x6e\164\150")); $this->wuqmciamumosasqa(get_the_time("\144")); egkeqqgakieyimuq: goto wswikooyuaaouqgk; cakuguiciaiaeukg: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x59"), get_year_link(get_the_time("\x59")), false)->ugaqcouwcuiaemgo("\x79\x65\141\x72")); $this->wuqmciamumosasqa(get_the_time("\x46")); wswikooyuaaouqgk: goto ckwmkquuyyugigom; awwaiioyywmokwsm: $this->wuqmciamumosasqa(get_the_time("\x59")); ckwmkquuyyugigom: goto uaicwcqwauosmsqm; cumeycwmuuqawwyu: $qmqecyyaiimkyaae = get_search_query(); if ($qawuqcsueakkgiio) { goto sycougcyeqmeiagk; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::yayciqueeakqwese), $qmqecyyaiimkyaae)); goto ssagcgqaucssyego; sycougcyeqmeiagk: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::yayciqueeakqwese), get_search_query(self::kkcqmwgccaygggcu)), $mumyimcwkaemyyue->yqymaqmqiqmmmsoo("\x73", $qmqecyyaiimkyaae, $gmigwwwmwemyaayy), false)->ugaqcouwcuiaemgo(self::yayciqueeakqwese)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); ssagcgqaucssyego: uaicwcqwauosmsqm: goto goaowamiyyamueiw; gsqcoqqsioiyoykq: $iwewcwusemqaiggk = $mumyimcwkaemyyue->imgymusqgccqsqqq(); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto acgqaeakoyasgkku; } $kesssewsiegssiya = $gkyciwoiiisgywcs->get($mumyimcwkaemyyue->imgymusqgccqsqqq(), self::gmmygyiecgmggaam); if (!$kesssewsiegssiya) { goto masakmomqmeocqqg; } $qyiciauwscqywwgq = $mqeowykqcggsieya->imgymusqgccqsqqq($kesssewsiegssiya); if (!$qyiciauwscqywwgq instanceof WP_Taxonomy) { goto iwkckkeimmeoquyq; } foreach ($qyiciauwscqywwgq->object_type as $useksmwkuswkwcqg) { $wkqsmssuaiaqmeee = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if (!($wkqsmssuaiaqmeee && $wkqsmssuaiaqmeee->public)) { goto yqcusaeysomccaok; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($wkqsmssuaiaqmeee->label, $cskucqcumqsyimye->myagyqumwekameww($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); goto sgocecweikecwwgq; yqcusaeysomccaok: qwisiamkmkkwucyo: } sgocecweikecwwgq: iwkckkeimmeoquyq: masakmomqmeocqqg: $eyagosskwwmgwmog = get_ancestors($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk), self::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = $aoskwucuugeuaeus->get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($sikiyacogecgmyai), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($sikiyacogecgmyai))); yoqsigmoyaaceqky: } yksywwikmeksikqc: if ($qawuqcsueakkgiio) { goto suqckoccuyeeymww; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\164\141\x78"), $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk))); goto giugwaeuwaomossq; suqckoccuyeeymww: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); giugwaeuwaomossq: acgqaeakoyasgkku: goaowamiyyamueiw: goto ysweqawmawicakeo; iaomqomgiwiegoca: $awiycosuekoeeqou = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\x63\x61\x74"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay), $seumokooiykcomco->ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(self::wwoeeogswkgeqack)); $eyagosskwwmgwmog = get_ancestors($awiycosuekoeeqou, self::qgciomgukmcwscqw); foreach (array_reverse($eyagosskwwmgwmog) as $omwmuycmeqcqokom) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($omwmuycmeqcqokom), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(self::qgciomgukmcwscqw)); ousmyagwsiooumos: } auumaoycmsmsgigs: if ($qawuqcsueakkgiio) { goto qeuyekusasqmcqms; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::qgciomgukmcwscqw), single_cat_title('', false))); goto yiceawuuiusakwiq; qeuyekusasqmcqms: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(self::qgciomgukmcwscqw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); yiceawuuiusakwiq: ysweqawmawicakeo: goto ookcgumoacskyymy; owisckseoogsugqq: $this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay)); ookcgumoacskyymy: goto kgysyqkoqgwmoscq; cuseccewekgcgkyg: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::wwoeeogswkgeqack), $gmigwwwmwemyaayy); kgysyqkoqgwmoscq: makomwwyomweyamm: } }
