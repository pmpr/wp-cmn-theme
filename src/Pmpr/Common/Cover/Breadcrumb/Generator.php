<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65a290d22e4f7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Foundation\Data\PageInfo; use WP_Post; use WP_Taxonomy; use WP_Term; class Generator extends Common { const geyisyamuoomusqo = "\x64\x69\x76\151\144\x65\x72"; const iiogewmmwckmegcq = "\150\x6f\x6d\x65\137\165\x72\154"; const yaooyaaieecskqsq = "\167\x72\141\x70\x5f\x61\164\x74\162\163"; const reigcooiouysaaok = "\x6c\x69\x6e\x6b\x5f\x61\x74\x74\x72\x73"; const ceeoggmayqcuoqwi = "\x69\x74\x65\155\x5f\141\164\164\162\163"; const quewuqgwgceoamee = "\x69\164\x65\x6d\x5f\x65\x6c\x65\155\145\x6e\x74"; const socgekwcqwaoyyug = "\167\162\141\160\137\145\154\x65\x6d\x65\156\164"; const gawcyaqskcsegwey = "\x64\x69\166\151\144\145\162\x5f\x61\x74\164\162\x73"; const koiywqsgmgmgscgy = "\x6c\x69\x6e\153\x5f\x63\157\156\x74\141\x69\x6e\x65\162"; const mukyymeygmeoawck = "\141\x63\x74\151\166\145\137\x69\x74\145\155\x5f\141\x74\x74\162\163"; const qywgicgikawmwoay = "\x6c\x69\156\x6b\x5f\143\x6f\156\x74\x61\151\156\x65\162\137\141\164\164\x72\x73"; protected array $breadcrumb = []; public function ecwoamckysyqikqi() : array { return $this->breadcrumb; } protected function oeewiaacscgyamai(PageInfo $igqsaukqcqscimok) : self { $this->breadcrumb = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x62\145\146\x6f\x72\x65\137\141\x64\x64\x5f\151\164\x65\x6d", $this->breadcrumb, $igqsaukqcqscimok, $this); $igqsaukqcqscimok = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\141\x64\x64\x5f\x69\164\145\155", $igqsaukqcqscimok, $this); if (!$igqsaukqcqscimok) { goto oasggeyceiyieuuo; } $this->breadcrumb[] = $igqsaukqcqscimok; oasggeyceiyieuuo: $this->breadcrumb = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\141\146\x74\145\x72\x5f\141\x64\144\137\151\164\145\x6d", $this->breadcrumb, $igqsaukqcqscimok, $this); return $this; } protected function uikgwcuascgeissw($iwkyyocymeukcceu, $uusmaiomayssaecw) : ?string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($iwkyyocymeukcceu, $uusmaiomayssaecw, ''); } protected function yceuwwmgwwqqcweu($guwumyyyakswawas) : array { $aokagokqyuysuksm = $guwumyyyakswawas[0]->cat_ID; $eyagosskwwmgwmog = get_ancestors($aokagokqyuysuksm, self::qgciomgukmcwscqw); $eyagosskwwmgwmog = array_reverse($eyagosskwwmgwmog); $eyagosskwwmgwmog[] = $aokagokqyuysuksm; return $eyagosskwwmgwmog; } public function wuqmciamumosasqa(?string $meqocwsecsywiiqs, ?string $migiiksoiymissge = '', bool $cmscqcqicyqkweuc = true) : PageInfo { static $ikwcsswcseyywgeo; if ($ikwcsswcseyywgeo) { goto omuauimgkygcecsc; } $ikwcsswcseyywgeo = 1; omuauimgkygcecsc: $igqsaukqcqscimok = new PageInfo(); if (!$cmscqcqicyqkweuc) { goto wwcqoeuwskquakwy; } $yyimiwcuegayoskq = $this->caokeucsksukesyo()->kyqakacqeumicgag()->iqoacwuiemooiysg(); $this->oeewiaacscgyamai($igqsaukqcqscimok->aseocggwwegcmqes($yyimiwcuegayoskq->gueasuouwqysmomu())->ugaqcouwcuiaemgo($yyimiwcuegayoskq->asuigsqoowmekwok())); wwcqoeuwskquakwy: $ikwcsswcseyywgeo += 10; $igqsaukqcqscimok->gswweykyogmsyawy($meqocwsecsywiiqs)->uaomeggmwqmmeoki($cmscqcqicyqkweuc)->jyumyyugiwwiqomk($ikwcsswcseyywgeo)->qmueseocuuekommo($this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\160\141\147\145\137\151\x6e\146\157\x5f\x70\145\x72\155\141\x6c\151\x6e\x6b", $migiiksoiymissge)); return $igqsaukqcqscimok; } protected function kooiucqkggeagccu(array $ywmkwiwkosakssii = []) : array { $ggauoeuaesiymgee = [self::ckmqoekmugkggeym => $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->imgymusqgccqsqqq(), self::eoaiagsgqsmskugs => ["\x74\141\x67" => __("\x50\x6f\x73\164\163\x20\124\141\147\x67\x65\x64\x3a\x20\x25\163", PR__CMN__COVER), "\x34\x30\64" => __("\105\x72\162\x6f\162\40\64\x30\64", PR__CMN__COVER), "\164\141\x78" => "\45\163", "\143\x70\x61\x67\145" => __("\x43\157\x6d\155\x65\156\164\40\x50\x61\x67\x65\x20\x25\x73", PR__CMN__COVER), self::wwoeeogswkgeqack => $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(self::NAME), self::imywcsggckkcywgk => __("\x50\141\147\x65\40\x25\x73", PR__CMN__COVER), self::yayciqueeakqwese => __("\123\x65\x61\162\143\150\40\x52\145\163\165\154\x74\x73\40\x66\x6f\162\72\x20\45\x73", PR__CMN__COVER), self::iwascisiiokuackw => __("\101\x72\x74\151\143\154\x65\x73\x20\x50\x6f\163\x74\x65\144\x20\142\x79\40\x25\163", PR__CMN__COVER), self::qgciomgukmcwscqw => "\45\163"], self::geyisyamuoomusqo => null, self::iiogewmmwckmegcq => $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy("\57"), self::quewuqgwgceoamee => "\154\x69", self::socgekwcqwaoyyug => "\157\x6c", self::koiywqsgmgmgscgy => "\x73\160\x61\156", self::yaooyaaieecskqsq => ["\143\154\x61\163\x73" => "\x62\x72\145\141\x64\143\x72\165\155\142"], self::reigcooiouysaaok => ["\143\x6c\x61\x73\x73" => "\x62\162\145\141\x64\143\x72\x75\155\x62\x2d\x6c\151\156\153"], self::ceeoggmayqcuoqwi => ["\x63\x6c\141\x73\163" => "\142\x72\145\x61\144\143\162\x75\x6d\142\x2d\x69\x74\x65\x6d"], self::gawcyaqskcsegwey => ["\x63\154\141\163\163" => "\142\162\x65\141\144\x63\162\165\x6d\x62\x2d\x64\151\x76\x69\144\x65\x72"], self::mukyymeygmeoawck => ["\143\154\x61\x73\x73" => "\x62\x72\145\141\144\x63\x72\x75\x6d\142\55\x69\164\x65\x6d\40\141\x63\164\151\166\145"], self::qywgicgikawmwoay => []]; $ywmkwiwkosakssii = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\147\x65\156\145\162\141\164\x65\x5f\x61\x72\147\163", $ywmkwiwkosakssii); return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ggauoeuaesiymgee); } public function sywokgmoskcocqgy(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); $gqiaqmycqyywiqsw = $ywmkwiwkosakssii[self::reigcooiouysaaok]; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia("\45\x32\44\163", "\x25\61\44\x73", $gqiaqmycqyywiqsw); if (!$ywmkwiwkosakssii[self::koiywqsgmgmgscgy]) { goto quamuugoocyyceec; } $iwywmkygwewiamwm = $swqimwqeweekeusq->uuccukgasskgimsq($ywmkwiwkosakssii[self::koiywqsgmgmgscgy], $ywmkwiwkosakssii[self::qywgicgikawmwoay], $iwywmkygwewiamwm); quamuugoocyyceec: $ysmqgacyqwayokog = $ywmkwiwkosakssii[self::geyisyamuoomusqo]; if (!$ysmqgacyqwayokog) { goto qcssigmcayuyweiy; } $ysmqgacyqwayokog = $swqimwqeweekeusq->gmqyuaqwgiayskei($ysmqgacyqwayokog, $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); goto iymaiwqimisgacmk; qcssigmcayuyweiy: $ysmqgacyqwayokog = $swqimwqeweekeusq->uuccukgasskgimsq("\151", $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); iymaiwqimisgacmk: $caacssaumiqeaoaw = $swqimwqeweekeusq->qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::ceeoggmayqcuoqwi]); $aqykuigiuwmmcieu = ''; $momcykaoccoymeig = 0; $this->create($ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . self::qwumqqyuasyskkkc, $this->ecwoamckysyqikqi(), $ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($oammesyieqmwuwyi, "\147\145\164\120\x72\151\x6f\162\x69\164\171"); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof PageInfo) { goto ousmyagwsiooumos; } if (!($igqsaukqcqscimok === end($oammesyieqmwuwyi))) { goto ssywsaaqqaucesau; } $igqsaukqcqscimok->qmueseocuuekommo(''); $caacssaumiqeaoaw = $swqimwqeweekeusq->qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::mukyymeygmeoawck]); ssywsaaqqaucesau: $aqykuigiuwmmcieu .= $caacssaumiqeaoaw; if (!($momcykaoccoymeig !== 0)) { goto ygcgoaokauigwuus; } $aqykuigiuwmmcieu .= $ysmqgacyqwayokog; ygcgoaokauigwuus: if ($igqsaukqcqscimok->ycqquoiyyuesegsy()) { goto ysiqakyaiooyscwy; } $aqykuigiuwmmcieu .= $igqsaukqcqscimok->qcgakseyaikigqco(); goto auumaoycmsmsgigs; ysiqakyaiooyscwy: $aqykuigiuwmmcieu .= sprintf($iwywmkygwewiamwm, $igqsaukqcqscimok->ycqquoiyyuesegsy(), $igqsaukqcqscimok->qcgakseyaikigqco()); auumaoycmsmsgigs: $aqykuigiuwmmcieu .= "\74\57{$ywmkwiwkosakssii[self::quewuqgwgceoamee]}\x3e"; $momcykaoccoymeig++; ousmyagwsiooumos: qyyyycwaookqaoke: } mugscgugcogcasue: return $swqimwqeweekeusq->uuccukgasskgimsq($ywmkwiwkosakssii[self::socgekwcqwaoyyug], $ywmkwiwkosakssii[self::yaooyaaieecskqsq], $aqykuigiuwmmcieu); } public function create(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); if ($this->ecwoamckysyqikqi()) { goto ugswokwmkumcmigc; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $oikyogsosqcyueay = $this->caokeucsksukesyo()->kyqakacqeumicgag()->cykwscocqwykiocm(); $qawuqcsueakkgiio = $mumyimcwkaemyyue->qaumqeeagueuqkcg(self::kkcqmwgccaygggcu); $iwkyyocymeukcceu = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::eoaiagsgqsmskugs); $gmigwwwmwemyaayy = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::iiogewmmwckmegcq); $meqocwsecsywiiqs = ''; $eiyqsiwggkuuqqee = 0; $mksyucucyswaukig = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::ckmqoekmugkggeym); if ($mksyucucyswaukig instanceof WP_Post) { goto yiceawuuiusakwiq; } if (!$mksyucucyswaukig instanceof WP_Term) { goto qeuyekusasqmcqms; } $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($mksyucucyswaukig); $migiiksoiymissge = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($mksyucucyswaukig); qeuyekusasqmcqms: goto sgocecweikecwwgq; yiceawuuiusakwiq: $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($mksyucucyswaukig); $eiyqsiwggkuuqqee = $seumokooiykcomco->ygqycmmkoiuocoia($mksyucucyswaukig); $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($mksyucucyswaukig); sgocecweikecwwgq: if ($mumyimcwkaemyyue->takycgcamoacksqw()) { goto asaowisseacciyia; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::wwoeeogswkgeqack), $gmigwwwmwemyaayy, false)->ugaqcouwcuiaemgo(self::eycwiessycciwsao)); if ($mumyimcwkaemyyue->seokosgecygsmqau()) { goto oqwcmgwimeisusoe; } if ($mumyimcwkaemyyue->sgayqmgoigoseaoo()) { goto kgysyqkoqgwmoscq; } if ($mumyimcwkaemyyue->qmssqeyayicowkgy()) { goto ookcgumoacskyymy; } if ($mumyimcwkaemyyue->gouusicsisumuiei()) { goto ysweqawmawicakeo; } if ($mumyimcwkaemyyue->qwakseskocsyiyks()) { goto goaowamiyyamueiw; } if ($mumyimcwkaemyyue->mgkmukikygowogsm()) { goto uaicwcqwauosmsqm; } if ($mumyimcwkaemyyue->wqscegcksyocaias()) { goto ckwmkquuyyugigom; } if ($mumyimcwkaemyyue->kccakwkaqugygwmq() && !$mumyimcwkaemyyue->aauyuieeeaakygki()) { goto wswikooyuaaouqgk; } if ($cskucqcumqsyimye->migkyseymeomymmy()) { goto egkeqqgakieyimuq; } if ($mumyimcwkaemyyue->aauyuieeeaakygki()) { goto ekakkiuuquqkccse; } if ($mumyimcwkaemyyue->sgeaogakoscmysgc() && !$eiyqsiwggkuuqqee) { goto emauuoieewwoeyqq; } if ($mumyimcwkaemyyue->sgeaogakoscmysgc() && $eiyqsiwggkuuqqee) { goto ywqakqkmmcoceqka; } if ($mumyimcwkaemyyue->ocwoeosukggumggw()) { goto qcgyggiaowuqswuw; } if ($mumyimcwkaemyyue->mykygowqgwcuecua()) { goto casgoamcqkekgeeo; } if ($mumyimcwkaemyyue->kmmyuiwaogukwqqi()) { goto ismeikacqqyqcmqe; } if (!(has_post_format() && !$mumyimcwkaemyyue->cukiusasccucgwqc())) { goto cysgqimowcqoqqsc; } $this->wuqmciamumosasqa(get_post_format_string(get_post_format())); cysgqimowcqoqqsc: goto qsokkkyoackoycie; ismeikacqqyqcmqe: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\64\x30\x34")); qsokkkyoackoycie: goto yseyyukqaowwouua; casgoamcqkekgeeo: $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $qscaoekmoooeuyqg = $yoiguusocukqeayg->get($mumyimcwkaemyyue->qaumqeeagueuqkcg(self::iwascisiiokuackw), true); if ($qawuqcsueakkgiio) { goto gicuuwuuuwumyooa; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::iwascisiiokuackw), $yoiguusocukqeayg->ygwimyogyaqgumam($qscaoekmoooeuyqg))); goto kakkuyeccaacewyo; gicuuwuuuwumyooa: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::iwascisiiokuackw), $yoiguusocukqeayg->ygwimyogyaqgumam($qscaoekmoooeuyqg)), $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($qscaoekmoooeuyqg), false)->ugaqcouwcuiaemgo(self::iwascisiiokuackw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); kakkuyeccaacewyo: yseyyukqaowwouua: goto sooecucuakgkuyis; qcgyggiaowuqswuw: if ($qawuqcsueakkgiio) { goto skwusmoyomgqkimm; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::qeueagcuyogwwyky), single_tag_title('', false))); goto usyckeewsgwaysam; skwusmoyomgqkimm: $scwiymciagumsuiw = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\x74\x61\x67\x5f\151\x64"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(single_tag_title('', false), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($scwiymciagumsuiw), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($scwiymciagumsuiw))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); usyckeewsgwaysam: sooecucuakgkuyis: goto kwsqgqmwyyeykgum; ywqakqkmmcoceqka: $eyagosskwwmgwmog = get_post_ancestors($seumokooiykcomco->iooowgsqoyqseyuu($mksyucucyswaukig)); foreach (array_reverse($eyagosskwwmgwmog) as $qkcoyiyeuoyyoocy) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($qkcoyiyeuoyyoocy), $seumokooiykcomco->ycqquoiyyuesegsy($qkcoyiyeuoyyoocy), false)->ugaqcouwcuiaemgo(self::imywcsggckkcywgk)); mkgmaguyswskyioa: } cmmusgkieoqyymgs: $this->wuqmciamumosasqa($meqocwsecsywiiqs); kwsqgqmwyyeykgum: goto koukiyqaccegmquc; emauuoieewwoeyqq: $oammesyieqmwuwyi = $this->sscegwueamckwmcy(self::ggcmgaccygaquiwu . "\160\x61\x67\x65\137\x69\164\x65\155", ["\150\x61\x73\x5f\160\141\x67\x65\137\156\141\155\x65" => true], $mksyucucyswaukig); if (!($oammesyieqmwuwyi && isset($oammesyieqmwuwyi["\150\141\x73\137\160\x61\x67\x65\137\156\141\x6d\x65"]) && $oammesyieqmwuwyi["\150\141\163\x5f\x70\x61\x67\x65\x5f\x6e\x61\155\x65"])) { goto skuuyysooocugyww; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); skuuyysooocugyww: koukiyqaccegmquc: goto oqwwacmigasucsoc; ekakkiuuquqkccse: $omwmuycmeqcqokom = $seumokooiykcomco->get($eiyqsiwggkuuqqee); $awiycosuekoeeqou = get_the_category($seumokooiykcomco->iooowgsqoyqseyuu($omwmuycmeqcqokom)); $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($awiycosuekoeeqou))); kmooekeyemqgucci: } qksckewucmosemuo: $this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($omwmuycmeqcqokom), $seumokooiykcomco->ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($omwmuycmeqcqokom)); $this->wuqmciamumosasqa($meqocwsecsywiiqs); oqwwacmigasucsoc: goto cakuguiciaiaeukg; egkeqqgakieyimuq: $useksmwkuswkwcqg = $cskucqcumqsyimye->aakmagwggmkoiiyu($mksyucucyswaukig); $yowggsumsmeoeiqc = $cskucqcumqsyimye->uikgwcuascgeissw($mksyucucyswaukig, self::NAME); if (!$useksmwkuswkwcqg) { goto mosuacsuaasssciu; } if ($qawuqcsueakkgiio) { goto esqwswmoegiqcckg; } $this->wuqmciamumosasqa($yowggsumsmeoeiqc); goto qmokwkocmcyeyesc; esqwswmoegiqcckg: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($yowggsumsmeoeiqc, $cskucqcumqsyimye->myagyqumwekameww($useksmwkuswkwcqg), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); qmokwkocmcyeyesc: mosuacsuaasssciu: cakuguiciaiaeukg: goto awwaiioyywmokwsm; wswikooyuaaouqgk: $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($mksyucucyswaukig); if (self::mswoacegomcucaik !== $useksmwkuswkwcqg) { goto mwieyyqamgwicgco; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay), $seumokooiykcomco->ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(self::wwoeeogswkgeqack)); $awiycosuekoeeqou = get_the_category(); if (!isset($awiycosuekoeeqou[0])) { goto eekaiaeqewiqkkgm; } $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou, self::qgciomgukmcwscqw), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($awiycosuekoeeqou))); gkoaeuekqockuoiq: } yqicwmekwuoywyus: eekaiaeqewiqkkgm: if ($mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\160\x61\147\145")) { goto kceuusiekagyeoys; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); goto uyeyscsaigimsqwq; kceuusiekagyeoys: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($meqocwsecsywiiqs, $migiiksoiymissge, false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($useksmwkuswkwcqg))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x63\x70\x61\147\x65"), $mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\x70\x61\147\x65"))); uyeyscsaigimsqwq: goto wkiymcoqqiigqaaw; mwieyyqamgwicgco: if (!($wkqsmssuaiaqmeee = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg))) { goto kwmiwaecqcgiaqye; } if (!($wkqsmssuaiaqmeee->public && $wkqsmssuaiaqmeee->has_archive)) { goto igwkcikeyoowosoi; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($cskucqcumqsyimye->uikgwcuascgeissw($wkqsmssuaiaqmeee, self::NAME), $cskucqcumqsyimye->myagyqumwekameww($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); igwkcikeyoowosoi: $kesssewsiegssiya = $gkyciwoiiisgywcs->get($wkqsmssuaiaqmeee, "\155\x61\151\x6e\x5f\164\x61\x78\x6f\156\157\155\171"); if ($kesssewsiegssiya) { goto cuommomwmsackoqc; } switch ($useksmwkuswkwcqg) { case self::oguseymmyyoyaako: $kesssewsiegssiya = self::cmckeoksigiaqykc; goto iqsgossweywksoia; } awaqksikyomsuaeo: iqsgossweywksoia: cuommomwmsackoqc: if (!$kesssewsiegssiya) { goto ukwoswyyogmsygqg; } $kesssewsiegssiya = $mqeowykqcggsieya->imgymusqgccqsqqq($kesssewsiegssiya); if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto yggmaskeguaqkusc; } if ($kesssewsiegssiya->_builtin) { goto uqcsksaywyqeumig; } $uyuaosigqymaqsaa = $seumokooiykcomco->weescwwgqgiyumyw($mksyucucyswaukig, $mqeowykqcggsieya->aakmagwggmkoiiyu($kesssewsiegssiya)); if (!isset($uyuaosigqymaqsaa[0])) { goto uwaimsisescsgyqk; } $iwewcwusemqaiggk = $uyuaosigqymaqsaa[0]; $qyiciauwscqywwgq = $kesssewsiegssiya; $eyagosskwwmgwmog = get_ancestors($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $mqeowykqcggsieya->aakmagwggmkoiiyu($qyiciauwscqywwgq), self::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = $aoskwucuugeuaeus->get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($sikiyacogecgmyai), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($sikiyacogecgmyai))); qyeswawykmasuqye: } ggeoqeowscwkeumy: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk))); uwaimsisescsgyqk: uqcsksaywyqeumig: yggmaskeguaqkusc: ukwoswyyogmsygqg: if (!($omwmuycmeqcqokom = $seumokooiykcomco->ygqycmmkoiuocoia($mksyucucyswaukig))) { goto jsmisuccwyukksgc; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($omwmuycmeqcqokom), $seumokooiykcomco->ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($omwmuycmeqcqokom))); jsmisuccwyukksgc: $this->wuqmciamumosasqa($meqocwsecsywiiqs); kwmiwaecqcgiaqye: wkiymcoqqiigqaaw: awwaiioyywmokwsm: goto cumeycwmuuqawwyu; ckwmkquuyyugigom: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x59"), get_year_link(get_the_time("\x59")), false)->ugaqcouwcuiaemgo("\171\145\x61\x72")); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\106"), get_month_link(get_the_time("\131"), get_the_time("\x46")), false)->ugaqcouwcuiaemgo("\155\x6f\156\164\x68")); $this->wuqmciamumosasqa(get_the_time("\144")); cumeycwmuuqawwyu: goto gsqcoqqsioiyoykq; uaicwcqwauosmsqm: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\131"), get_year_link(get_the_time("\131")), false)->ugaqcouwcuiaemgo("\x79\x65\x61\162")); $this->wuqmciamumosasqa(get_the_time("\106")); gsqcoqqsioiyoykq: goto iaomqomgiwiegoca; goaowamiyyamueiw: $this->wuqmciamumosasqa(get_the_time("\x59")); iaomqomgiwiegoca: goto owisckseoogsugqq; ysweqawmawicakeo: $qmqecyyaiimkyaae = get_search_query(); if ($qawuqcsueakkgiio) { goto mimacwyuueomgwwy; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::yayciqueeakqwese), $qmqecyyaiimkyaae)); goto ksckqkmwiqggykke; mimacwyuueomgwwy: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::yayciqueeakqwese), get_search_query(self::kkcqmwgccaygggcu)), $mumyimcwkaemyyue->yqymaqmqiqmmmsoo("\163", $qmqecyyaiimkyaae, $gmigwwwmwemyaayy), false)->ugaqcouwcuiaemgo(self::yayciqueeakqwese)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); ksckqkmwiqggykke: owisckseoogsugqq: goto cuseccewekgcgkyg; ookcgumoacskyymy: $iwewcwusemqaiggk = $mumyimcwkaemyyue->imgymusqgccqsqqq(); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto cuwcsamuuqyuyqsu; } $kesssewsiegssiya = $gkyciwoiiisgywcs->get($mumyimcwkaemyyue->imgymusqgccqsqqq(), self::gmmygyiecgmggaam); if (!$kesssewsiegssiya) { goto acgqaeakoyasgkku; } $qyiciauwscqywwgq = $mqeowykqcggsieya->imgymusqgccqsqqq($kesssewsiegssiya); if (!$qyiciauwscqywwgq instanceof WP_Taxonomy) { goto giugwaeuwaomossq; } foreach ($qyiciauwscqywwgq->object_type as $useksmwkuswkwcqg) { $wkqsmssuaiaqmeee = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if (!($wkqsmssuaiaqmeee && $wkqsmssuaiaqmeee->public)) { goto suqckoccuyeeymww; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($wkqsmssuaiaqmeee->label, $cskucqcumqsyimye->myagyqumwekameww($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); goto yksywwikmeksikqc; suqckoccuyeeymww: yoqsigmoyaaceqky: } yksywwikmeksikqc: giugwaeuwaomossq: acgqaeakoyasgkku: $eyagosskwwmgwmog = get_ancestors($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk), self::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = $aoskwucuugeuaeus->get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($sikiyacogecgmyai), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($sikiyacogecgmyai))); ssagcgqaucssyego: } sycougcyeqmeiagk: if ($qawuqcsueakkgiio) { goto mqgeseysuwcaqwiy; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x74\141\170"), $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk))); goto ekoqieigyoeyauqa; mqgeseysuwcaqwiy: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); ekoqieigyoeyauqa: cuwcsamuuqyuyqsu: cuseccewekgcgkyg: goto makomwwyomweyamm; kgysyqkoqgwmoscq: $awiycosuekoeeqou = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\x63\x61\x74"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay), $seumokooiykcomco->ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(self::wwoeeogswkgeqack)); $eyagosskwwmgwmog = get_ancestors($awiycosuekoeeqou, self::qgciomgukmcwscqw); foreach (array_reverse($eyagosskwwmgwmog) as $omwmuycmeqcqokom) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($omwmuycmeqcqokom), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(self::qgciomgukmcwscqw)); yqcusaeysomccaok: } qwisiamkmkkwucyo: if ($qawuqcsueakkgiio) { goto iwkckkeimmeoquyq; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::qgciomgukmcwscqw), single_cat_title('', false))); goto masakmomqmeocqqg; iwkckkeimmeoquyq: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(self::qgciomgukmcwscqw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); masakmomqmeocqqg: makomwwyomweyamm: goto acesyuieuuqwgkwm; oqwcmgwimeisusoe: $this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay)); acesyuieuuqwgkwm: goto qiaaqkymeuuueoqk; asaowisseacciyia: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::wwoeeogswkgeqack), $gmigwwwmwemyaayy); qiaaqkymeuuueoqk: ugswokwmkumcmigc: } }
