<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64315acd704a7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Foundation\Data\PageInfo; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use WP_Post; use WP_Taxonomy; use WP_Term; class Generator extends Common { const geyisyamuoomusqo = "\x64\151\166\151\144\x65\162"; const iiogewmmwckmegcq = "\150\157\155\x65\x5f\165\162\154"; const yaooyaaieecskqsq = "\167\162\x61\160\137\x61\x74\x74\x72\163"; const reigcooiouysaaok = "\154\151\x6e\153\137\x61\x74\x74\162\x73"; const ceeoggmayqcuoqwi = "\x69\164\x65\155\137\141\164\x74\162\x73"; const quewuqgwgceoamee = "\x69\x74\x65\x6d\x5f\x65\x6c\145\x6d\x65\x6e\164"; const socgekwcqwaoyyug = "\x77\x72\141\160\137\x65\154\x65\x6d\x65\x6e\x74"; const gawcyaqskcsegwey = "\144\x69\166\x69\144\x65\162\137\141\x74\x74\162\x73"; const koiywqsgmgmgscgy = "\154\x69\x6e\x6b\x5f\x63\157\x6e\164\x61\x69\x6e\x65\x72"; const mukyymeygmeoawck = "\x61\143\x74\x69\166\145\x5f\x69\164\145\x6d\x5f\141\x74\x74\x72\163"; const qywgicgikawmwoay = "\x6c\x69\156\x6b\137\143\x6f\x6e\x74\141\151\156\145\162\x5f\x61\x74\x74\162\x73"; protected array $breadcrumb = []; public function ecwoamckysyqikqi() : array { return $this->breadcrumb; } protected function oeewiaacscgyamai(PageInfo $igqsaukqcqscimok) : self { $this->breadcrumb = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::iukiayaokaiiicwo . "\142\145\146\x6f\162\145\x5f\141\144\144\x5f\151\164\x65\x6d"), $this->breadcrumb, $igqsaukqcqscimok, $this); $this->breadcrumb[] = $igqsaukqcqscimok; $this->breadcrumb = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::iukiayaokaiiicwo . "\x61\146\164\145\x72\137\141\x64\144\137\x69\164\x65\x6d"), $this->breadcrumb, $igqsaukqcqscimok, $this); return $this; } protected function uikgwcuascgeissw($iwkyyocymeukcceu, $uusmaiomayssaecw) : ?string { return ManipulateArray::get($iwkyyocymeukcceu, $uusmaiomayssaecw, ''); } protected function yceuwwmgwwqqcweu($guwumyyyakswawas) : array { $aokagokqyuysuksm = $guwumyyyakswawas[0]->cat_ID; $eyagosskwwmgwmog = get_ancestors($aokagokqyuysuksm, self::qgciomgukmcwscqw); $eyagosskwwmgwmog = array_reverse($eyagosskwwmgwmog); $eyagosskwwmgwmog[] = $aokagokqyuysuksm; return $eyagosskwwmgwmog; } public function wuqmciamumosasqa(?string $meqocwsecsywiiqs, ?string $migiiksoiymissge = '', bool $cmscqcqicyqkweuc = true) : PageInfo { static $ikwcsswcseyywgeo; if ($ikwcsswcseyywgeo) { goto yssqmyoaokkksukc; } $ikwcsswcseyywgeo = 1; yssqmyoaokkksukc: $igqsaukqcqscimok = new PageInfo(); if (!$cmscqcqicyqkweuc) { goto ooqksueucyagyuoe; } $yyimiwcuegayoskq = ManipulatePage::iqoacwuiemooiysg(); $this->oeewiaacscgyamai($igqsaukqcqscimok->aseocggwwegcmqes($yyimiwcuegayoskq->gueasuouwqysmomu())->ugaqcouwcuiaemgo($yyimiwcuegayoskq->asuigsqoowmekwok())); ooqksueucyagyuoe: $ikwcsswcseyywgeo += 10; $igqsaukqcqscimok->gswweykyogmsyawy($meqocwsecsywiiqs)->uaomeggmwqmmeoki($cmscqcqicyqkweuc)->jyumyyugiwwiqomk($ikwcsswcseyywgeo)->qmueseocuuekommo($this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::iukiayaokaiiicwo . "\x70\x61\x67\x65\x5f\x69\156\x66\x6f\x5f\160\145\x72\155\x61\154\x69\156\x6b"), $migiiksoiymissge)); return $igqsaukqcqscimok; } protected function kooiucqkggeagccu(array $ywmkwiwkosakssii = []) : array { $ggauoeuaesiymgee = [self::ckmqoekmugkggeym => DecoratorQuery::imgymusqgccqsqqq(), self::eoaiagsgqsmskugs => ["\164\x61\x67" => __("\x50\x6f\163\164\x73\x20\x54\x61\x67\147\145\x64\x3a\x20\x25\x73", PR__CMN__COVER), "\64\60\64" => __("\105\x72\162\x6f\162\x20\64\60\64", PR__CMN__COVER), "\164\x61\170" => "\45\x73", "\x63\160\141\147\x65" => __("\x43\x6f\x6d\155\145\156\164\40\120\x61\147\145\40\x25\x73", PR__CMN__COVER), self::wwoeeogswkgeqack => get_bloginfo(self::NAME), self::imywcsggckkcywgk => __("\x50\141\x67\145\x20\45\x73", PR__CMN__COVER), self::yayciqueeakqwese => __("\123\145\x61\162\x63\x68\x20\x52\145\x73\x75\x6c\164\x73\40\x66\157\x72\72\x20\x25\163", PR__CMN__COVER), self::iwascisiiokuackw => __("\x41\162\164\x69\x63\x6c\x65\163\x20\120\x6f\x73\164\x65\144\x20\x62\171\40\x25\x73", PR__CMN__COVER), self::qgciomgukmcwscqw => "\x25\163"], self::geyisyamuoomusqo => null, self::iiogewmmwckmegcq => esc_url(ManipulateServer::gmigwwwmwemyaayy("\57")), self::quewuqgwgceoamee => "\154\x69", self::socgekwcqwaoyyug => "\157\x6c", self::koiywqsgmgmgscgy => "\x73\x70\x61\x6e", self::yaooyaaieecskqsq => ["\x63\x6c\141\x73\163" => "\142\x72\145\141\144\x63\x72\x75\155\x62"], self::reigcooiouysaaok => ["\x63\154\141\x73\163" => "\x62\x72\x65\141\x64\143\x72\x75\x6d\x62\55\154\151\156\x6b"], self::ceeoggmayqcuoqwi => ["\x63\154\141\163\x73" => "\x62\x72\x65\141\x64\x63\162\165\155\x62\x2d\x69\164\x65\155"], self::gawcyaqskcsegwey => ["\143\154\x61\163\163" => "\142\162\x65\x61\144\143\162\165\155\142\55\144\x69\166\x69\x64\145\162"], self::mukyymeygmeoawck => ["\143\154\141\163\x73" => "\142\162\x65\x61\144\143\162\x75\155\142\55\151\x74\x65\x6d\x20\141\x63\164\x69\x76\145"], self::qywgicgikawmwoay => []]; $ywmkwiwkosakssii = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::iukiayaokaiiicwo . "\147\145\x6e\145\162\141\x74\x65\137\x61\162\147\163"), $ywmkwiwkosakssii); return ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ggauoeuaesiymgee); } public function sywokgmoskcocqgy(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); $gqiaqmycqyywiqsw = $ywmkwiwkosakssii[self::reigcooiouysaaok]; $iwywmkygwewiamwm = ManipulateHTML::yuawgssgauywkiia("\45\x32\44\x73", "\45\61\x24\163", $gqiaqmycqyywiqsw); if (!$ywmkwiwkosakssii[self::koiywqsgmgmgscgy]) { goto osmmoyqkqoucsgow; } $iwywmkygwewiamwm = ManipulateHTML::uuccukgasskgimsq($ywmkwiwkosakssii[self::koiywqsgmgmgscgy], $ywmkwiwkosakssii[self::qywgicgikawmwoay], $iwywmkygwewiamwm); osmmoyqkqoucsgow: $ysmqgacyqwayokog = $ywmkwiwkosakssii[self::geyisyamuoomusqo]; if (!$ysmqgacyqwayokog) { goto wgiygcmqaokywuqa; } $ysmqgacyqwayokog = ManipulateHTML::gmqyuaqwgiayskei($ysmqgacyqwayokog, $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); goto iauwuugggmegwisk; wgiygcmqaokywuqa: $ysmqgacyqwayokog = ManipulateHTML::uuccukgasskgimsq("\x69", $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); iauwuugggmegwisk: $caacssaumiqeaoaw = ManipulateHTML::qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::ceeoggmayqcuoqwi]); $aqykuigiuwmmcieu = ''; $momcykaoccoymeig = 0; $this->create($ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::iukiayaokaiiicwo . self::qwumqqyuasyskkkc), $this->ecwoamckysyqikqi(), $ywmkwiwkosakssii); $oammesyieqmwuwyi = ManipulateArray::yaeiiwwyckwugsem($oammesyieqmwuwyi, "\147\x65\x74\x50\x72\151\x6f\162\x69\x74\x79"); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof PageInfo) { goto cwikoaeqmmoimmso; } if (!($igqsaukqcqscimok === end($oammesyieqmwuwyi))) { goto micceocwuwkyusic; } $igqsaukqcqscimok->qmueseocuuekommo(''); $caacssaumiqeaoaw = ManipulateHTML::qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::mukyymeygmeoawck]); micceocwuwkyusic: $aqykuigiuwmmcieu .= $caacssaumiqeaoaw; if (!($momcykaoccoymeig !== 0)) { goto iwueukqcywkiyqge; } $aqykuigiuwmmcieu .= $ysmqgacyqwayokog; iwueukqcywkiyqge: if ($igqsaukqcqscimok->ycqquoiyyuesegsy()) { goto ykwasaaoeeiuomim; } $aqykuigiuwmmcieu .= $igqsaukqcqscimok->qcgakseyaikigqco(); goto acggikioyeueeowg; ykwasaaoeeiuomim: $aqykuigiuwmmcieu .= sprintf($iwywmkygwewiamwm, $igqsaukqcqscimok->ycqquoiyyuesegsy(), $igqsaukqcqscimok->qcgakseyaikigqco()); acggikioyeueeowg: $aqykuigiuwmmcieu .= "\x3c\x2f{$ywmkwiwkosakssii[self::quewuqgwgceoamee]}\76"; $momcykaoccoymeig++; cwikoaeqmmoimmso: kqyoakickmseyyeq: } aukucaieceiwesmm: return ManipulateHTML::uuccukgasskgimsq($ywmkwiwkosakssii[self::socgekwcqwaoyyug], $ywmkwiwkosakssii[self::yaooyaaieecskqsq], $aqykuigiuwmmcieu); } public function create(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->kooiucqkggeagccu($ywmkwiwkosakssii); if ($this->ecwoamckysyqikqi()) { goto suqckoccuyeeymww; } $oikyogsosqcyueay = ManipulatePage::cykwscocqwykiocm(); $qawuqcsueakkgiio = DecoratorQuery::qaumqeeagueuqkcg(self::kkcqmwgccaygggcu); $iwkyyocymeukcceu = ManipulateArray::get($ywmkwiwkosakssii, self::eoaiagsgqsmskugs); $gmigwwwmwemyaayy = ManipulateArray::get($ywmkwiwkosakssii, self::iiogewmmwckmegcq); $meqocwsecsywiiqs = ''; $eiyqsiwggkuuqqee = 0; $mksyucucyswaukig = ManipulateArray::get($ywmkwiwkosakssii, self::ckmqoekmugkggeym); if ($mksyucucyswaukig instanceof WP_Post) { goto kaiesowkgwogqseg; } if (!$mksyucucyswaukig instanceof WP_Term) { goto egaymskkosukqeao; } $meqocwsecsywiiqs = ManipulateTerm::qcgakseyaikigqco($mksyucucyswaukig); $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($mksyucucyswaukig); egaymskkosukqeao: goto kicwiowcogmauwiy; kaiesowkgwogqseg: $meqocwsecsywiiqs = ManipulatePost::qcgakseyaikigqco($mksyucucyswaukig); $eiyqsiwggkuuqqee = ManipulatePost::ygqycmmkoiuocoia($mksyucucyswaukig); $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($mksyucucyswaukig); kicwiowcogmauwiy: if (DecoratorQuery::takycgcamoacksqw()) { goto yksywwikmeksikqc; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::wwoeeogswkgeqack), $gmigwwwmwemyaayy, false)->ugaqcouwcuiaemgo(self::eycwiessycciwsao)); if (DecoratorQuery::seokosgecygsmqau()) { goto iwkckkeimmeoquyq; } if (DecoratorQuery::sgayqmgoigoseaoo()) { goto qwisiamkmkkwucyo; } if (DecoratorQuery::qmssqeyayicowkgy()) { goto yiceawuuiusakwiq; } if (DecoratorQuery::gouusicsisumuiei()) { goto ousmyagwsiooumos; } if (DecoratorQuery::qwakseskocsyiyks()) { goto ysiqakyaiooyscwy; } if (DecoratorQuery::mgkmukikygowogsm()) { goto ssywsaaqqaucesau; } if (DecoratorQuery::wqscegcksyocaias()) { goto mugscgugcogcasue; } if (DecoratorQuery::kccakwkaqugygwmq() && !DecoratorQuery::aauyuieeeaakygki()) { goto qcssigmcayuyweiy; } if (ManipulatePost::sqyyemqmmgmyiaam()) { goto wwcqoeuwskquakwy; } if (DecoratorQuery::aauyuieeeaakygki()) { goto oasggeyceiyieuuo; } if (DecoratorQuery::sgeaogakoscmysgc() && !$eiyqsiwggkuuqqee) { goto kyiuewcikkqagwwg; } if (DecoratorQuery::sgeaogakoscmysgc() && $eiyqsiwggkuuqqee) { goto eqiiaokcgakicaye; } if (DecoratorQuery::ocwoeosukggumggw()) { goto cyosacayacumuaks; } if (DecoratorQuery::mykygowqgwcuecua()) { goto giuccakymqymawgk; } if (DecoratorQuery::kmmyuiwaogukwqqi()) { goto oeusomaaeekakake; } if (!(has_post_format() && !DecoratorQuery::cukiusasccucgwqc())) { goto yyqygaokeccgugos; } $this->wuqmciamumosasqa(get_post_format_string(get_post_format())); yyqygaokeccgugos: goto kwuckkyqaygwgcuy; oeusomaaeekakake: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x34\x30\x34")); kwuckkyqaygwgcuy: goto sicgyiyiocyygkoc; giuccakymqymawgk: $qscaoekmoooeuyqg = ManipulateUser::get(DecoratorQuery::qaumqeeagueuqkcg(self::iwascisiiokuackw), true); if ($qawuqcsueakkgiio) { goto yggseoaommssscwo; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::iwascisiiokuackw), ManipulateUser::ygwimyogyaqgumam($qscaoekmoooeuyqg))); goto aeiemwacaiygemmg; yggseoaommssscwo: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::iwascisiiokuackw), ManipulateUser::ygwimyogyaqgumam($qscaoekmoooeuyqg)), DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg), false)->ugaqcouwcuiaemgo(self::iwascisiiokuackw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); aeiemwacaiygemmg: sicgyiyiocyygkoc: goto ikcwmsgocyuqiumc; cyosacayacumuaks: if ($qawuqcsueakkgiio) { goto ayceeyuocgowqwsa; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x74\141\147"), single_tag_title('', false))); goto iuwkiyimqmgguose; ayceeyuocgowqwsa: $scwiymciagumsuiw = DecoratorQuery::qaumqeeagueuqkcg("\x74\141\x67\137\151\x64"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(single_tag_title('', false), ManipulateTerm::qmgcisuuikgmqcsu($scwiymciagumsuiw), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($scwiymciagumsuiw))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); iuwkiyimqmgguose: ikcwmsgocyuqiumc: goto gcucsowqoeiwmyyq; eqiiaokcgakicaye: $eyagosskwwmgwmog = get_post_ancestors(ManipulatePost::mwikyscisascoeea($mksyucucyswaukig)); foreach (array_reverse($eyagosskwwmgwmog) as $qkcoyiyeuoyyoocy) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulatePost::qcgakseyaikigqco($qkcoyiyeuoyyoocy), ManipulatePost::ycqquoiyyuesegsy($qkcoyiyeuoyyoocy), false)->ugaqcouwcuiaemgo(self::imywcsggckkcywgk)); sksgcusuyqcwqswe: } qkyciyiwkmgkmquk: $this->wuqmciamumosasqa($meqocwsecsywiiqs); gcucsowqoeiwmyyq: goto aumowowgewgqmwci; kyiuewcikkqagwwg: $oammesyieqmwuwyi = $this->sscegwueamckwmcy(self::ggcmgaccygaquiwu . "\x70\141\147\x65\137\151\164\x65\155", ["\x68\x61\163\137\160\141\x67\145\x5f\x6e\x61\x6d\x65" => true], $mksyucucyswaukig); if (!($oammesyieqmwuwyi && isset($oammesyieqmwuwyi["\150\x61\163\x5f\x70\141\x67\145\x5f\156\141\155\145"]) && $oammesyieqmwuwyi["\150\x61\x73\137\160\x61\147\145\x5f\156\141\x6d\145"])) { goto maaisuqwkymeguys; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); maaisuqwkymeguys: aumowowgewgqmwci: goto omuauimgkygcecsc; oasggeyceiyieuuo: $omwmuycmeqcqokom = ManipulatePost::get($eiyqsiwggkuuqqee); $awiycosuekoeeqou = get_the_category(ManipulatePost::mwikyscisascoeea($omwmuycmeqcqokom)); $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($awiycosuekoeeqou), ManipulateTerm::qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($awiycosuekoeeqou))); esagiiawomyacuiw: } aoaqwygkaagiuuws: $this->wuqmciamumosasqa(ManipulatePost::qcgakseyaikigqco($omwmuycmeqcqokom), ManipulatePost::ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo("\x73\151\156\147\154\x65")->aseocggwwegcmqes(ManipulatePost::gueasuouwqysmomu($omwmuycmeqcqokom)); $this->wuqmciamumosasqa($meqocwsecsywiiqs); omuauimgkygcecsc: goto quamuugoocyyceec; wwcqoeuwskquakwy: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($mksyucucyswaukig, true); if (!$useksmwkuswkwcqg) { goto gqimwsyemoewagcy; } if ($qawuqcsueakkgiio) { goto kyiwsiakwgiwouyi; } $this->wuqmciamumosasqa($useksmwkuswkwcqg->label); goto awgmegueeqeyqamu; kyiwsiakwgiwouyi: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($useksmwkuswkwcqg->label, ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg->name), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg->name)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); awgmegueeqeyqamu: gqimwsyemoewagcy: quamuugoocyyceec: goto iymaiwqimisgacmk; qcssigmcayuyweiy: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($mksyucucyswaukig); if (self::mswoacegomcucaik !== $useksmwkuswkwcqg) { goto oeamoqweiueaueay; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulatePost::qcgakseyaikigqco($oikyogsosqcyueay), ManipulatePost::ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(self::wwoeeogswkgeqack)); $awiycosuekoeeqou = get_the_category(); if (!isset($awiycosuekoeeqou[0])) { goto mcqucouuiuoagqwc; } $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($awiycosuekoeeqou), ManipulateTerm::qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($awiycosuekoeeqou))); syusgosewwkoagoq: } egesuwkqkmaigaoe: mcqucouuiuoagqwc: if (DecoratorQuery::qaumqeeagueuqkcg("\143\160\141\x67\145")) { goto eweaaismksecwagy; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); goto icumkkykaoqycqqu; eweaaismksecwagy: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($meqocwsecsywiiqs, $migiiksoiymissge, false)->ugaqcouwcuiaemgo("\x73\151\x6e\x67\x6c\x65")->aseocggwwegcmqes(ManipulatePost::gueasuouwqysmomu($useksmwkuswkwcqg, true)->name)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\143\x70\x61\x67\x65"), DecoratorQuery::qaumqeeagueuqkcg("\x63\160\141\x67\x65"))); icumkkykaoqycqqu: goto owgsameoayaogsma; oeamoqweiueaueay: if (!($wkqsmssuaiaqmeee = ManipulatePost::waaisqccqacqeium($useksmwkuswkwcqg))) { goto ugogoekeckgcmuaw; } if (!($wkqsmssuaiaqmeee->public && $wkqsmssuaiaqmeee->has_archive)) { goto mceucsaeouuwyumm; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($wkqsmssuaiaqmeee->labels->name, ManipulatePost::mqgeysameoesmuqw($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); mceucsaeouuwyumm: $kesssewsiegssiya = ManipulateArray::get($wkqsmssuaiaqmeee, "\x6d\x61\x69\156\137\x74\x61\x78\x6f\156\157\x6d\171"); if ($kesssewsiegssiya) { goto ugykmcouiwiscoqu; } switch ($useksmwkuswkwcqg) { case self::oguseymmyyoyaako: $kesssewsiegssiya = self::cmckeoksigiaqykc; goto ceiuqsiqgiuiekem; } gsymkkskwsgggoic: ceiuqsiqgiuiekem: ugykmcouiwiscoqu: if (!$kesssewsiegssiya) { goto uscokkmquayiukag; } $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya); if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto sqwuqegeiisoiiuq; } if ($kesssewsiegssiya->_builtin) { goto eouwacqiommmeaqc; } $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($mksyucucyswaukig, ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya)); if (!isset($uyuaosigqymaqsaa[0])) { goto igmmqwyawcuuckkq; } $iwewcwusemqaiggk = $uyuaosigqymaqsaa[0]; $qyiciauwscqywwgq = $kesssewsiegssiya; $eyagosskwwmgwmog = get_ancestors(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), ManipulateTaxonomy::aakmagwggmkoiiyu($qyiciauwscqywwgq), self::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = ManipulateTerm::get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($sikiyacogecgmyai), ManipulateTerm::qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($sikiyacogecgmyai))); wiwoiyoakywqyaiy: } isewysikysqewkis: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk), ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($iwewcwusemqaiggk))); igmmqwyawcuuckkq: eouwacqiommmeaqc: sqwuqegeiisoiiuq: uscokkmquayiukag: if (!($omwmuycmeqcqokom = ManipulatePost::ygqycmmkoiuocoia($mksyucucyswaukig))) { goto ykqsuiyyosyeyscc; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulatePost::qcgakseyaikigqco($omwmuycmeqcqokom), ManipulatePost::ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo("\163\151\x6e\147\154\145")->aseocggwwegcmqes(ManipulatePost::gueasuouwqysmomu($omwmuycmeqcqokom))); ykqsuiyyosyeyscc: $this->wuqmciamumosasqa($meqocwsecsywiiqs); ugogoekeckgcmuaw: owgsameoayaogsma: iymaiwqimisgacmk: goto qyyyycwaookqaoke; mugscgugcogcasue: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x59"), get_year_link(get_the_time("\x59")), false)->ugaqcouwcuiaemgo("\171\x65\141\x72")); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\106"), get_month_link(get_the_time("\x59"), get_the_time("\x46")), false)->ugaqcouwcuiaemgo("\x6d\157\156\x74\150")); $this->wuqmciamumosasqa(get_the_time("\144")); qyyyycwaookqaoke: goto ygcgoaokauigwuus; ssywsaaqqaucesau: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x59"), get_year_link(get_the_time("\131")), false)->ugaqcouwcuiaemgo("\x79\x65\141\162")); $this->wuqmciamumosasqa(get_the_time("\106")); ygcgoaokauigwuus: goto auumaoycmsmsgigs; ysiqakyaiooyscwy: $this->wuqmciamumosasqa(get_the_time("\131")); auumaoycmsmsgigs: goto qeuyekusasqmcqms; ousmyagwsiooumos: $qmqecyyaiimkyaae = get_search_query(); if ($qawuqcsueakkgiio) { goto kwyimqumkuuyaiku; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::yayciqueeakqwese), $qmqecyyaiimkyaae)); goto gkqiqaqecmoogmaa; kwyimqumkuuyaiku: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::yayciqueeakqwese), get_search_query(self::kkcqmwgccaygggcu)), DecoratorQuery::yqymaqmqiqmmmsoo("\x73", $qmqecyyaiimkyaae, $gmigwwwmwemyaayy), false)->ugaqcouwcuiaemgo(self::yayciqueeakqwese)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); gkqiqaqecmoogmaa: qeuyekusasqmcqms: goto sgocecweikecwwgq; yiceawuuiusakwiq: $iwewcwusemqaiggk = DecoratorQuery::imgymusqgccqsqqq(); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto mqimkwickkgqqeoi; } $kesssewsiegssiya = ManipulateArray::get(DecoratorQuery::imgymusqgccqsqqq(), self::gmmygyiecgmggaam); if (!$kesssewsiegssiya) { goto cquecqekuucwoumw; } $qyiciauwscqywwgq = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya); if (!$qyiciauwscqywwgq instanceof WP_Taxonomy) { goto agemwookwseyycqo; } foreach ($qyiciauwscqywwgq->object_type as $useksmwkuswkwcqg) { $wkqsmssuaiaqmeee = ManipulatePost::waaisqccqacqeium($useksmwkuswkwcqg); if (!($wkqsmssuaiaqmeee && $wkqsmssuaiaqmeee->public)) { goto mykiyqcqiegkiqys; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($wkqsmssuaiaqmeee->label, ManipulatePost::mqgeysameoesmuqw($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo(self::uouymeyqasaeckso)->aseocggwwegcmqes($useksmwkuswkwcqg)); goto csieaismmmocyacu; mykiyqcqiegkiqys: aquqkiggamaoegoo: } csieaismmmocyacu: agemwookwseyycqo: cquecqekuucwoumw: $eyagosskwwmgwmog = get_ancestors(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), ManipulateTerm::yyoeeseewqmmyaee($iwewcwusemqaiggk), self::gmmygyiecgmggaam); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = ManipulateTerm::get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($sikiyacogecgmyai), ManipulateTerm::qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($sikiyacogecgmyai))); owuuuiekkaeoeacq: } koiscokkkaimiecq: if ($qawuqcsueakkgiio) { goto saauykgakaeiyoua; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x74\x61\x78"), ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk))); goto qwemkcoaseywkuuc; saauykgakaeiyoua: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk), ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($iwewcwusemqaiggk))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); qwemkcoaseywkuuc: mqimkwickkgqqeoi: sgocecweikecwwgq: goto yqcusaeysomccaok; qwisiamkmkkwucyo: $awiycosuekoeeqou = DecoratorQuery::qaumqeeagueuqkcg("\x63\x61\164"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulatePost::qcgakseyaikigqco($oikyogsosqcyueay), ManipulatePost::ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo(self::wwoeeogswkgeqack)); $eyagosskwwmgwmog = get_ancestors($awiycosuekoeeqou, self::qgciomgukmcwscqw); foreach (array_reverse($eyagosskwwmgwmog) as $omwmuycmeqcqokom) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($omwmuycmeqcqokom), ManipulateTerm::qmgcisuuikgmqcsu($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(self::qgciomgukmcwscqw)); kgmeiwiakwicgkkk: } cwswueuqoamqasya: if ($qawuqcsueakkgiio) { goto suuskagowwgsouqw; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::qgciomgukmcwscqw), single_cat_title('', false))); goto omykokikgocoikec; suuskagowwgsouqw: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($awiycosuekoeeqou), ManipulateTerm::qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo(self::gmmygyiecgmggaam)->aseocggwwegcmqes(self::qgciomgukmcwscqw)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::imywcsggckkcywgk), $qawuqcsueakkgiio)); omykokikgocoikec: yqcusaeysomccaok: goto masakmomqmeocqqg; iwkckkeimmeoquyq: $this->wuqmciamumosasqa(ManipulatePost::qcgakseyaikigqco($oikyogsosqcyueay)); masakmomqmeocqqg: goto yoqsigmoyaaceqky; yksywwikmeksikqc: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, self::wwoeeogswkgeqack), $gmigwwwmwemyaayy); yoqsigmoyaaceqky: suqckoccuyeeymww: } }
