<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae85a3b171             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Foundation\Data\PageInfo; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Taxonomy; use WP_Term; class Generator extends Common { const geyisyamuoomusqo = "\x64\151\x76\x69\x64\145\162"; const iiogewmmwckmegcq = "\x68\x6f\155\x65\137\165\x72\154"; const yaooyaaieecskqsq = "\x77\x72\x61\160\137\141\x74\164\x72\163"; const reigcooiouysaaok = "\154\151\x6e\x6b\x5f\x61\x74\x74\162\x73"; const ceeoggmayqcuoqwi = "\x69\x74\x65\x6d\137\x61\164\164\x72\x73"; const quewuqgwgceoamee = "\x69\x74\x65\x6d\137\x65\x6c\145\155\x65\x6e\164"; const socgekwcqwaoyyug = "\x77\162\x61\160\137\145\154\145\155\x65\156\x74"; const gawcyaqskcsegwey = "\144\x69\166\151\144\x65\162\x5f\x61\x74\164\162\163"; const koiywqsgmgmgscgy = "\x6c\151\156\153\137\143\157\x6e\x74\141\151\x6e\145\x72"; const mukyymeygmeoawck = "\x61\143\164\x69\x76\x65\137\x69\x74\145\x6d\x5f\141\x74\x74\162\163"; const qywgicgikawmwoay = "\x6c\x69\x6e\153\137\143\157\156\164\141\x69\156\145\162\x5f\x61\164\164\162\x73"; protected array $breadcrumb = []; public function ecwoamckysyqikqi() : array { return $this->breadcrumb; } protected function oeewiaacscgyamai(PageInfo $igqsaukqcqscimok) : self { $this->breadcrumb = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\142\145\146\x6f\x72\x65\x5f\x61\144\144\137\151\x74\145\x6d", $this->breadcrumb, $igqsaukqcqscimok, $this); $igqsaukqcqscimok = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x61\x64\x64\137\x69\x74\145\x6d", $igqsaukqcqscimok, $this); if (!$igqsaukqcqscimok) { goto aegysmeecgcgayyw; } $this->breadcrumb[] = $igqsaukqcqscimok; aegysmeecgcgayyw: $this->breadcrumb = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\141\x66\164\x65\162\x5f\141\x64\144\x5f\151\x74\145\x6d", $this->breadcrumb, $igqsaukqcqscimok, $this); return $this; } protected function uikgwcuascgeissw($iwkyyocymeukcceu, $uusmaiomayssaecw) : ?string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($iwkyyocymeukcceu, $uusmaiomayssaecw, ''); } protected function yceuwwmgwwqqcweu($guwumyyyakswawas) : array { $aokagokqyuysuksm = $guwumyyyakswawas[0]->cat_ID; $eyagosskwwmgwmog = get_ancestors($aokagokqyuysuksm, Constants::qgciomgukmcwscqw); $eyagosskwwmgwmog = array_reverse($eyagosskwwmgwmog); $eyagosskwwmgwmog[] = $aokagokqyuysuksm; return $eyagosskwwmgwmog; } public function wuqmciamumosasqa(?string $meqocwsecsywiiqs, ?string $migiiksoiymissge = '', bool $cmscqcqicyqkweuc = true) : PageInfo { static $ikwcsswcseyywgeo; if ($ikwcsswcseyywgeo) { goto suqkuqygkkgwyaie; } $ikwcsswcseyywgeo = 1; suqkuqygkkgwyaie: $igqsaukqcqscimok = new PageInfo(); if (!$cmscqcqicyqkweuc) { goto soaccwqimeksgwiw; } $yyimiwcuegayoskq = $this->caokeucsksukesyo()->kyqakacqeumicgag()->iqoacwuiemooiysg(); $this->oeewiaacscgyamai($igqsaukqcqscimok->aseocggwwegcmqes($yyimiwcuegayoskq->gueasuouwqysmomu())->ugaqcouwcuiaemgo($yyimiwcuegayoskq->asuigsqoowmekwok())); soaccwqimeksgwiw: $ikwcsswcseyywgeo += 10; $igqsaukqcqscimok->gswweykyogmsyawy($meqocwsecsywiiqs)->uaomeggmwqmmeoki($cmscqcqicyqkweuc)->jyumyyugiwwiqomk($ikwcsswcseyywgeo)->qmueseocuuekommo($this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\160\x61\147\x65\x5f\151\x6e\x66\157\137\160\x65\x72\155\x61\x6c\x69\x6e\x6b", $migiiksoiymissge)); return $igqsaukqcqscimok; } protected function kooiucqkggeagccu(array $ywmkwiwkosakssii = []) : array { $ggauoeuaesiymgee = [Constants::ckmqoekmugkggeym => $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->imgymusqgccqsqqq(), Constants::eoaiagsgqsmskugs => ["\164\141\x67" => __("\120\157\163\x74\163\x20\124\141\147\x67\145\x64\x3a\40\x25\163", PR__CMN__COVER), "\x34\x30\x34" => __("\105\x72\162\x6f\162\x20\64\x30\64", PR__CMN__COVER), "\x74\141\x78" => "\45\163", "\143\160\141\147\145" => __("\x43\x6f\155\155\145\156\x74\x20\120\x61\147\x65\x20\x25\163", PR__CMN__COVER), Constants::wwoeeogswkgeqack => $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::NAME), Constants::imywcsggckkcywgk => __("\x50\141\147\145\x20\45\x73", PR__CMN__COVER), Constants::yayciqueeakqwese => __("\x53\x65\141\162\x63\x68\40\x52\x65\x73\165\x6c\x74\163\40\x66\x6f\162\x3a\40\45\x73", PR__CMN__COVER), Constants::iwascisiiokuackw => __("\101\162\164\x69\x63\154\x65\x73\40\x50\157\x73\x74\145\144\x20\x62\171\40\45\163", PR__CMN__COVER), Constants::qgciomgukmcwscqw => "\45\x73"], self::geyisyamuoomusqo => null, self::iiogewmmwckmegcq => $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy("\x2f"), self::quewuqgwgceoamee => "\154\x69", self::socgekwcqwaoyyug => "\157\x6c", self::koiywqsgmgmgscgy => "\x73\160\x61\156", self::yaooyaaieecskqsq => ["\143\x6c\x61\x73\163" => "\142\162\x65\141\144\143\x72\165\155\142"], self::reigcooiouysaaok => ["\x63\x6c\x61\163\x73" => "\142\162\145\x61\x64\x63\162\165\155\x62\55\x6c\x69\x6e\x6b"], self::ceeoggmayqcuoqwi => ["\x63\x6c\141\163\163" => "\x62\162\145\x61\x64\143\162\165\x6d\142\55\x69\164\145\x6d"], self::gawcyaqskcsegwey => ["\143\x6c\x61\x73\163" => "\x62\x72\145\x61\144\143\162\165\x6d\142\x2d\144\151\166\151\144\145\x72"], self::mukyymeygmeoawck => ["\x63\x6c\x61\163\x73" => "\x62\162\145\x61\144\x63\x72\x75\155\142\x2d\151\164\x65\x6d\x20\141\143\x74\x69\x76\x65"], self::qywgicgikawmwoay => []]; $ywmkwiwkosakssii = (array) $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x67\x65\156\x65\x72\141\164\145\x5f\141\x72\147\x73", $ywmkwiwkosakssii); return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ggauoeuaesiymgee); } public function generate(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); $gqiaqmycqyywiqsw = $ywmkwiwkosakssii[self::reigcooiouysaaok]; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia("\x25\62\x24\163", "\45\x31\x24\163", $gqiaqmycqyywiqsw); if (!$ywmkwiwkosakssii[self::koiywqsgmgmgscgy]) { goto wiysogeqqwgioyka; } $iwywmkygwewiamwm = $swqimwqeweekeusq->uuccukgasskgimsq($ywmkwiwkosakssii[self::koiywqsgmgmgscgy], $ywmkwiwkosakssii[self::qywgicgikawmwoay], $iwywmkygwewiamwm); wiysogeqqwgioyka: $ysmqgacyqwayokog = $ywmkwiwkosakssii[self::geyisyamuoomusqo]; if (!$ysmqgacyqwayokog) { goto skkamseieeusycye; } $ysmqgacyqwayokog = $swqimwqeweekeusq->gmqyuaqwgiayskei($ysmqgacyqwayokog, $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); goto cgiscsqwwgqqaeqi; skkamseieeusycye: $ysmqgacyqwayokog = $swqimwqeweekeusq->uuccukgasskgimsq("\x69", $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); cgiscsqwwgqqaeqi: $caacssaumiqeaoaw = $swqimwqeweekeusq->qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::ceeoggmayqcuoqwi]); $aqykuigiuwmmcieu = ''; $momcykaoccoymeig = 0; $this->create($ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . Constants::qwumqqyuasyskkkc, $this->ecwoamckysyqikqi(), $ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($oammesyieqmwuwyi, "\147\145\164\x50\x72\x69\157\x72\151\x74\x79"); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof PageInfo) { goto ooeausyowguqicuo; } if (!($igqsaukqcqscimok === end($oammesyieqmwuwyi))) { goto ewymsmkkiksgwysk; } $igqsaukqcqscimok->qmueseocuuekommo(''); $caacssaumiqeaoaw = $swqimwqeweekeusq->qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::mukyymeygmeoawck]); ewymsmkkiksgwysk: $aqykuigiuwmmcieu .= $caacssaumiqeaoaw; if (!($momcykaoccoymeig !== 0)) { goto cmegwsegsosyqcai; } $aqykuigiuwmmcieu .= $ysmqgacyqwayokog; cmegwsegsosyqcai: if ($igqsaukqcqscimok->ycqquoiyyuesegsy()) { goto wmywuusgukmmaams; } $aqykuigiuwmmcieu .= $igqsaukqcqscimok->qcgakseyaikigqco(); goto gkyawqqcmigqgaiq; wmywuusgukmmaams: $aqykuigiuwmmcieu .= sprintf($iwywmkygwewiamwm, $igqsaukqcqscimok->ycqquoiyyuesegsy(), $igqsaukqcqscimok->qcgakseyaikigqco()); gkyawqqcmigqgaiq: $aqykuigiuwmmcieu .= "\74\x2f{$ywmkwiwkosakssii[self::quewuqgwgceoamee]}\76"; $momcykaoccoymeig++; ooeausyowguqicuo: giaacoqqqsekcayy: } syiqkaasoueowwui: return $swqimwqeweekeusq->uuccukgasskgimsq($ywmkwiwkosakssii[self::socgekwcqwaoyyug], $ywmkwiwkosakssii[self::yaooyaaieecskqsq], $aqykuigiuwmmcieu); } public function create(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); if ($this->ecwoamckysyqikqi()) { goto uimeeckqksqeekqq; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $oikyogsosqcyueay = $this->caokeucsksukesyo()->kyqakacqeumicgag()->cykwscocqwykiocm(); $qawuqcsueakkgiio = $mumyimcwkaemyyue->qaumqeeagueuqkcg(Constants::kkcqmwgccaygggcu); $iwkyyocymeukcceu = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::eoaiagsgqsmskugs); $gmigwwwmwemyaayy = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::iiogewmmwckmegcq); $meqocwsecsywiiqs = ''; $eiyqsiwggkuuqqee = 0; $mksyucucyswaukig = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ckmqoekmugkggeym); if ($mksyucucyswaukig instanceof WP_Post) { goto scisgsyemmsekgos; } if (!$mksyucucyswaukig instanceof WP_Term) { goto egyyiccaeeiooaua; } $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($mksyucucyswaukig); $migiiksoiymissge = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($mksyucucyswaukig); egyyiccaeeiooaua: goto cewmoqyysgsmuiya; scisgsyemmsekgos: $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($mksyucucyswaukig); $eiyqsiwggkuuqqee = $seumokooiykcomco->ygqycmmkoiuocoia($mksyucucyswaukig); $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($mksyucucyswaukig); cewmoqyysgsmuiya: if ($mumyimcwkaemyyue->takycgcamoacksqw()) { goto ucqmumuygcywwqma; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::wwoeeogswkgeqack), $gmigwwwmwemyaayy, false)->ugaqcouwcuiaemgo(Constants::eycwiessycciwsao)); if ($mumyimcwkaemyyue->seokosgecygsmqau()) { goto gommacygsykyussk; } if ($mumyimcwkaemyyue->sgayqmgoigoseaoo()) { goto gygwewcqsmwqismo; } if ($mumyimcwkaemyyue->qmssqeyayicowkgy()) { goto mwysseaekcsiesmm; } if ($mumyimcwkaemyyue->gouusicsisumuiei()) { goto iiiccouaaqsyikae; } if ($mumyimcwkaemyyue->qwakseskocsyiyks()) { goto kqswcsysqawkcgye; } if ($mumyimcwkaemyyue->mgkmukikygowogsm()) { goto eeyyskqsmquyquqw; } if ($mumyimcwkaemyyue->wqscegcksyocaias()) { goto uegouoiuyoqkcscg; } if ($mumyimcwkaemyyue->kccakwkaqugygwmq() && !$mumyimcwkaemyyue->aauyuieeeaakygki()) { goto isgwkwacoyimiauk; } if ($cskucqcumqsyimye->migkyseymeomymmy()) { goto uaqackioaiqwcocy; } if ($mumyimcwkaemyyue->aauyuieeeaakygki()) { goto sockeswygwcskeuq; } if ($mumyimcwkaemyyue->sgeaogakoscmysgc() && !$eiyqsiwggkuuqqee) { goto ugqwuugsweqgmywk; } if ($mumyimcwkaemyyue->sgeaogakoscmysgc() && $eiyqsiwggkuuqqee) { goto cogywoqcqummsyus; } if ($mumyimcwkaemyyue->ocwoeosukggumggw()) { goto ocaguquugeamqckq; } if ($mumyimcwkaemyyue->mykygowqgwcuecua()) { goto qmkaeeomgkwggoyo; } if ($mumyimcwkaemyyue->kmmyuiwaogukwqqi()) { goto cuumeogeomowqisc; } if (!(has_post_format() && !$mumyimcwkaemyyue->cukiusasccucgwqc())) { goto uiosisocuwokwkie; } $this->wuqmciamumosasqa(get_post_format_string(get_post_format())); uiosisocuwokwkie: goto gcckqucukawcasgk; cuumeogeomowqisc: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\64\x30\x34")); gcckqucukawcasgk: goto csammceowmqwaamq; qmkaeeomgkwggoyo: $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $qscaoekmoooeuyqg = $yoiguusocukqeayg->get($mumyimcwkaemyyue->qaumqeeagueuqkcg(Constants::iwascisiiokuackw), true); if ($qawuqcsueakkgiio) { goto gicyayswqyuoekcq; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::iwascisiiokuackw), $yoiguusocukqeayg->ygwimyogyaqgumam($qscaoekmoooeuyqg))); goto iikiiioqiyegyaak; gicyayswqyuoekcq: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::iwascisiiokuackw), $yoiguusocukqeayg->ygwimyogyaqgumam($qscaoekmoooeuyqg)), $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($qscaoekmoooeuyqg), false)->ugaqcouwcuiaemgo(Constants::iwascisiiokuackw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::imywcsggckkcywgk), $qawuqcsueakkgiio)); iikiiioqiyegyaak: csammceowmqwaamq: goto eekcoeikaeaaeyii; ocaguquugeamqckq: if ($qawuqcsueakkgiio) { goto mqkmcysgoiaouiwm; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::qeueagcuyogwwyky), single_tag_title('', false))); goto kosaqwikueyksqmw; mqkmcysgoiaouiwm: $scwiymciagumsuiw = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\164\141\147\137\151\x64"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(single_tag_title('', false), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($scwiymciagumsuiw), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($scwiymciagumsuiw))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::imywcsggckkcywgk), $qawuqcsueakkgiio)); kosaqwikueyksqmw: eekcoeikaeaaeyii: goto gmwykkouysyaqwqm; cogywoqcqummsyus: $eyagosskwwmgwmog = get_post_ancestors($seumokooiykcomco->iooowgsqoyqseyuu($mksyucucyswaukig)); foreach (array_reverse($eyagosskwwmgwmog) as $qkcoyiyeuoyyoocy) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($qkcoyiyeuoyyoocy), $seumokooiykcomco->ycqquoiyyuesegsy($qkcoyiyeuoyyoocy), false)->ugaqcouwcuiaemgo(Constants::imywcsggckkcywgk)); ykomgumacooyomsk: } ogqmesokykywseys: $this->wuqmciamumosasqa($meqocwsecsywiiqs); gmwykkouysyaqwqm: goto uaukmuiwskcemcsw; ugqwuugsweqgmywk: $oammesyieqmwuwyi = $this->sscegwueamckwmcy(self::ggcmgaccygaquiwu . "\x70\x61\147\x65\x5f\x69\x74\145\x6d", ["\x68\141\x73\137\160\141\x67\x65\137\156\x61\x6d\x65" => true], $mksyucucyswaukig); if (!($oammesyieqmwuwyi && isset($oammesyieqmwuwyi["\x68\141\163\x5f\160\x61\147\145\x5f\156\141\x6d\x65"]) && $oammesyieqmwuwyi["\x68\x61\163\x5f\x70\141\147\145\137\x6e\141\x6d\145"])) { goto awoaooyoeoyeeqee; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); awoaooyoeoyeeqee: uaukmuiwskcemcsw: goto mkwkkmkgiqiamacc; sockeswygwcskeuq: $omwmuycmeqcqokom = $seumokooiykcomco->get($eiyqsiwggkuuqqee); $awiycosuekoeeqou = get_the_category($seumokooiykcomco->iooowgsqoyqseyuu($omwmuycmeqcqokom)); $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($awiycosuekoeeqou))); cwwmimggaaecmucw: } aomysykcgikegiau: $this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($omwmuycmeqcqokom), $seumokooiykcomco->ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(Constants::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($omwmuycmeqcqokom)); $this->wuqmciamumosasqa($meqocwsecsywiiqs); mkwkkmkgiqiamacc: goto cscusseysqygsoiy; uaqackioaiqwcocy: $useksmwkuswkwcqg = $cskucqcumqsyimye->aakmagwggmkoiiyu($mksyucucyswaukig); $yowggsumsmeoeiqc = $cskucqcumqsyimye->uikgwcuascgeissw($mksyucucyswaukig, Constants::NAME); if (!$useksmwkuswkwcqg) { goto ikqqskkqqwmwssoo; } if ($qawuqcsueakkgiio) { goto ogsaaqsaogcqiouy; } $this->wuqmciamumosasqa($yowggsumsmeoeiqc); goto iwekmyyccgiyuecc; ogsaaqsaogcqiouy: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($yowggsumsmeoeiqc, $cskucqcumqsyimye->myagyqumwekameww($useksmwkuswkwcqg), false)->ugaqcouwcuiaemgo(Constants::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::imywcsggckkcywgk), $qawuqcsueakkgiio)); iwekmyyccgiyuecc: ikqqskkqqwmwssoo: cscusseysqygsoiy: goto mggeqkcksyaymcsa; isgwkwacoyimiauk: $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($mksyucucyswaukig); if (Constants::mswoacegomcucaik !== $useksmwkuswkwcqg) { goto kqqiegkuqagcqsya; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay), $seumokooiykcomco->ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(Constants::wwoeeogswkgeqack)); $awiycosuekoeeqou = get_the_category(); if (!isset($awiycosuekoeeqou[0])) { goto guykyqecgswcsmws; } $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou, Constants::qgciomgukmcwscqw), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($awiycosuekoeeqou))); wyuemgggaqogsmsq: } samwkqgwouggsguc: guykyqecgswcsmws: if ($mumyimcwkaemyyue->qaumqeeagueuqkcg("\x63\160\141\x67\145")) { goto kkumywowcoycymeo; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); goto miweggwqeiaeweia; kkumywowcoycymeo: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($meqocwsecsywiiqs, $migiiksoiymissge, false)->ugaqcouwcuiaemgo(Constants::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($useksmwkuswkwcqg))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x63\x70\x61\x67\x65"), $mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\x70\141\147\x65"))); miweggwqeiaeweia: goto ousiuuwgwkiyikyq; kqqiegkuqagcqsya: if (!($wkqsmssuaiaqmeee = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg))) { goto oomguqikqokqwgku; } if (!($wkqsmssuaiaqmeee->public && $wkqsmssuaiaqmeee->has_archive)) { goto qoqskyuuwueqkquk; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($cskucqcumqsyimye->uikgwcuascgeissw($wkqsmssuaiaqmeee, Constants::NAME), $cskucqcumqsyimye->myagyqumwekameww($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(Constants::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); qoqskyuuwueqkquk: $kesssewsiegssiya = $gkyciwoiiisgywcs->get($wkqsmssuaiaqmeee, "\155\x61\151\x6e\137\164\141\170\x6f\156\157\155\171"); if ($kesssewsiegssiya) { goto asiqwuoswmigcaki; } switch ($useksmwkuswkwcqg) { case Constants::oguseymmyyoyaako: $kesssewsiegssiya = Constants::cmckeoksigiaqykc; goto iwsuawwqomaowuii; } wcugqegqsuuuwqao: iwsuawwqomaowuii: asiqwuoswmigcaki: if (!$kesssewsiegssiya) { goto mugqyyeayeyggqqk; } $kesssewsiegssiya = $mqeowykqcggsieya->imgymusqgccqsqqq($kesssewsiegssiya); if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto ouamogymawucwswu; } if ($kesssewsiegssiya->_builtin) { goto emmsycooskoqmgeg; } $uyuaosigqymaqsaa = $seumokooiykcomco->weescwwgqgiyumyw($mksyucucyswaukig, $mqeowykqcggsieya->aakmagwggmkoiiyu($kesssewsiegssiya)); if (!isset($uyuaosigqymaqsaa[0])) { goto qgeugwymkkiacwoc; } $iwewcwusemqaiggk = $uyuaosigqymaqsaa[0]; $qyiciauwscqywwgq = $kesssewsiegssiya; $eyagosskwwmgwmog = get_ancestors($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $mqeowykqcggsieya->aakmagwggmkoiiyu($qyiciauwscqywwgq), Constants::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = $aoskwucuugeuaeus->get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($sikiyacogecgmyai), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($sikiyacogecgmyai))); mqicocmqegwukkwg: } ciykoyeioqgyaeqo: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk))); qgeugwymkkiacwoc: emmsycooskoqmgeg: ouamogymawucwswu: mugqyyeayeyggqqk: if (!($omwmuycmeqcqokom = $seumokooiykcomco->ygqycmmkoiuocoia($mksyucucyswaukig))) { goto acsqgiuageaasiyy; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($omwmuycmeqcqokom), $seumokooiykcomco->ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(Constants::cwswygwykwgsqiwu)->aseocggwwegcmqes($seumokooiykcomco->gueasuouwqysmomu($omwmuycmeqcqokom))); acsqgiuageaasiyy: $this->wuqmciamumosasqa($meqocwsecsywiiqs); oomguqikqokqwgku: ousiuuwgwkiyikyq: mggeqkcksyaymcsa: goto cgyakcqgugqgkqiw; uegouoiuyoqkcscg: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x59"), get_year_link(get_the_time("\131")), false)->ugaqcouwcuiaemgo("\171\x65\141\162")); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\106"), get_month_link(get_the_time("\131"), get_the_time("\106")), false)->ugaqcouwcuiaemgo("\x6d\157\x6e\164\150")); $this->wuqmciamumosasqa(get_the_time("\144")); cgyakcqgugqgkqiw: goto ewscugeuicukkycc; eeyyskqsmquyquqw: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x59"), get_year_link(get_the_time("\131")), false)->ugaqcouwcuiaemgo("\x79\x65\141\x72")); $this->wuqmciamumosasqa(get_the_time("\106")); ewscugeuicukkycc: goto wusciwkkckmqigms; kqswcsysqawkcgye: $this->wuqmciamumosasqa(get_the_time("\x59")); wusciwkkckmqigms: goto ukkcmocamwgiqayu; iiiccouaaqsyikae: $qmqecyyaiimkyaae = get_search_query(); if ($qawuqcsueakkgiio) { goto msemumccgceyugmg; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::yayciqueeakqwese), $qmqecyyaiimkyaae)); goto wagqgeqymeqoeuyi; msemumccgceyugmg: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::yayciqueeakqwese), get_search_query(Constants::kkcqmwgccaygggcu)), $mumyimcwkaemyyue->yqymaqmqiqmmmsoo("\x73", $qmqecyyaiimkyaae, $gmigwwwmwemyaayy), false)->ugaqcouwcuiaemgo(Constants::yayciqueeakqwese)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::imywcsggckkcywgk), $qawuqcsueakkgiio)); wagqgeqymeqoeuyi: ukkcmocamwgiqayu: goto amgsueumgaguceaa; mwysseaekcsiesmm: $iwewcwusemqaiggk = $mumyimcwkaemyyue->imgymusqgccqsqqq(); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto eogwckcymuugikuy; } $kesssewsiegssiya = $gkyciwoiiisgywcs->get($mumyimcwkaemyyue->imgymusqgccqsqqq(), Constants::gmmygyiecgmggaam); if (!$kesssewsiegssiya) { goto wakmayaoqoskekqy; } $qyiciauwscqywwgq = $mqeowykqcggsieya->imgymusqgccqsqqq($kesssewsiegssiya); if (!$qyiciauwscqywwgq instanceof WP_Taxonomy) { goto wkeuuycukmuqiaom; } foreach ($qyiciauwscqywwgq->object_type as $useksmwkuswkwcqg) { $wkqsmssuaiaqmeee = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if (!($wkqsmssuaiaqmeee && $wkqsmssuaiaqmeee->public)) { goto sggawugoykqcmsug; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($wkqsmssuaiaqmeee->label, $cskucqcumqsyimye->myagyqumwekameww($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(Constants::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); goto kqgcyoscsusgoaqi; sggawugoykqcmsug: ueigkucgaucgeimc: } kqgcyoscsusgoaqi: wkeuuycukmuqiaom: wakmayaoqoskekqy: $eyagosskwwmgwmog = get_ancestors($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk), Constants::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = $aoskwucuugeuaeus->get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($sikiyacogecgmyai), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($sikiyacogecgmyai))); owmuceyswmgueasi: } qmuwoecuacmkwgem: if ($qawuqcsueakkgiio) { goto mwsmsguqqkcwiiuk; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\164\x61\170"), $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk))); goto eeauyscekuckoues; mwsmsguqqkcwiiuk: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes($aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::imywcsggckkcywgk), $qawuqcsueakkgiio)); eeauyscekuckoues: eogwckcymuugikuy: amgsueumgaguceaa: goto uougwgeyiokewkkm; gygwewcqsmwqismo: $awiycosuekoeeqou = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\141\x74"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay), $seumokooiykcomco->ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(Constants::wwoeeogswkgeqack)); $eyagosskwwmgwmog = get_ancestors($awiycosuekoeeqou, Constants::qgciomgukmcwscqw); foreach (array_reverse($eyagosskwwmgwmog) as $omwmuycmeqcqokom) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($omwmuycmeqcqokom), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes(Constants::qgciomgukmcwscqw)); omqiayeucoioqoao: } igooksugieceoege: if ($qawuqcsueakkgiio) { goto ugqaaewwmkocwwgy; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::qgciomgukmcwscqw), single_cat_title('', false))); goto wgewmqieuamsoayy; ugqaaewwmkocwwgy: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($aoskwucuugeuaeus->qcgakseyaikigqco($awiycosuekoeeqou), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(Constants::gmmygyiecgmggaam)->aseocggwwegcmqes(Constants::qgciomgukmcwscqw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::imywcsggckkcywgk), $qawuqcsueakkgiio)); wgewmqieuamsoayy: uougwgeyiokewkkm: goto ukqocwewouckikso; gommacygsykyussk: $this->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($oikyogsosqcyueay)); ukqocwewouckikso: goto uykousayyomcaeaa; ucqmumuygcywwqma: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, Constants::wwoeeogswkgeqack), $gmigwwwmwemyaayy); uykousayyomcaeaa: uimeeckqksqeekqq: } }
