<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cf4ba10c294             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Search; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Query; use WP_Term_Query; class Query extends Common { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\160\x72\145\137\x67\145\164\137\x70\x6f\x73\164\163", [$this, "\151\x67\171\x77\141\x73\143\x73\x69\x65\157\153\153\157\167\x73"], 0)->cecaguuoecmccuse("\160\x6f\163\164\163\137\163\145\x61\162\143\150", [$this, "\x77\x61\167\161\167\141\x6d\x73\x75\x75\165\x6d\145\163\153\141"], 500, 2); $this->aqaqisyssqeomwom("\x67\145\x74\137\163\x65\141\162\x63\x68\x5f\162\x65\163\165\154\x74", [$this, "\171\x73\143\147\x6f\145\x77\x6b\157\141\x69\171\x77\155\x6f\x73"]); } public function wawqwamsuuumeska($qwcmueausqgiwigy, $gqgemcmoicmgaqie) { global $wpdb; if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto oymyqcoekqyuiguq; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $cwomqsccicsqseiy = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ogkiaqsouugogsom); $wmsuioaookqmyqkw = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::kquocioeygiskksm); if (!($wmsuioaookqmyqkw || $cwomqsccicsqseiy)) { goto gicmaqmuscawegie; } $qqmmggwcsmymegca = $gqgemcmoicmgaqie->query_vars; $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\145\x78\x61\143\164"]) ? '' : "\x25"; $qwcmueausqgiwigy = ''; $_and = "\40\101\x4e\x44\x20"; $_or = "\x20\x4f\122\x20"; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $eyyicwuomioiwoeu = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $wyqayqogsymumaqg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gsyiysyskygiwqmu, Constants::ygoseweigiigswiu); $iwewcwusemqaiggk = $aaycmcgqqqsysccs . $eyyicwuomioiwoeu->yqccgscwmeeyigkg($qqmmggwcsmymegca["\163"] ?? '') . $aaycmcgqqqsysccs; $uqcswyskyumyyeew = ''; if (!$cwomqsccicsqseiy) { goto cigesysuauaiccms; } if (!in_array($wyqayqogsymumaqg, [Constants::ygoseweigiigswiu, Constants::qescuiwgsyuikume], true)) { goto gwiaimosqoiquwkc; } $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\x2e\160\x6f\x73\164\137\164\151\164\x6c\145\x20\114\111\x4b\105\40\x25\x73", $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; gwiaimosqoiquwkc: if (!in_array($wyqayqogsymumaqg, [Constants::ygoseweigiigswiu, Constants::ssmskyqgcmeiayco], true)) { goto owgakkqgckqcegoi; } $qwcmueausqgiwigy .= $uqcswyskyumyyeew; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\56\160\x6f\x73\164\137\143\157\156\164\x65\156\x74\40\114\x49\x4b\105\x20\45\163{$_or}{$wpdb->posts}\x2e\x70\x6f\163\164\x5f\x65\x78\x63\145\x72\160\x74\40\x4c\111\x4b\105\40\x25\163", $iwewcwusemqaiggk, $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; owgakkqgckqcegoi: $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\x70\x6f\163\x74\x5f\x71\165\x65\x72\171", $qwcmueausqgiwigy, $iwewcwusemqaiggk); cigesysuauaiccms: $cniyckqcgyosooam = false; if (!is_numeric($ccamueccusigaaio)) { goto wsemeeocquawyauo; } $uyuaosigqymaqsaa = (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mwqguykeegesggge, []); if (in_array($ccamueccusigaaio, $uyuaosigqymaqsaa)) { goto kkewoqqowugagwoy; } if ($uyuaosigqymaqsaa) { goto gcskyqewysqaceeg; } $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($ccamueccusigaaio); if (!in_array($kesssewsiegssiya, (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ammgiseaaguqygig, []))) { goto qumkwsqqocooyuoq; } $cniyckqcgyosooam = true; qumkwsqqocooyuoq: gcskyqewysqaceeg: goto wwswmaewcaisauei; kkewoqqowugagwoy: $cniyckqcgyosooam = true; wwswmaewcaisauei: wsemeeocquawyauo: if (!$cniyckqcgyosooam) { goto ocgkwqqmgasuoies; } $qwcmueausqgiwigy = "\x28{$qwcmueausqgiwigy}\x29{$_and}"; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\141\x73\x74\x2e\164\145\162\x6d\x5f\151\144\40\x3d\x20\x25\163\x29", $ccamueccusigaaio); ocgkwqqmgasuoies: if (!$wmsuioaookqmyqkw) { goto isqwwmikecauwyuc; } $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ewwmksgyikwikqye, []); if (!$seyqqsmuaiegkeeq) { goto qqmmycmsoqegcqqw; } $ogguokqeaguoyiuk = ''; $qycoeysqasckgycc = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa); foreach ($seyqqsmuaiegkeeq as $ieqocgiosekoeoqe) { $qwcmueausqgiwigy .= $uqcswyskyumyyeew . $ogguokqeaguoyiuk; switch ($qycoeysqasckgycc) { case Constants::ouywiegeiyuaaawo: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\x61\163\164\164\x2e\x74\141\170\157\x6e\157\155\171\x20\75\x20\45\x73{$_and}\141\163\164\x2e\x73\x6c\165\147\x20\114\111\113\x45\x20\x25\x73\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto kwoyiysciqumswcy; case Constants::ygoseweigiigswiu: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\141\x73\164\x74\56\164\141\x78\x6f\156\157\x6d\x79\x20\x3d\x20\45\x73{$_and}\x28\x61\x73\x74\x2e\x6e\x61\155\145\40\x4c\x49\113\105\x20\x25\x73\x20\x6f\x72\40\x61\x73\164\56\x73\154\165\147\x20\x4c\111\x4b\x45\40\x25\x73\51\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk, $iwewcwusemqaiggk); goto kwoyiysciqumswcy; default: case Constants::qescuiwgsyuikume: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\x61\163\164\164\x2e\164\141\170\157\156\x6f\x6d\x79\x20\x3d\x20\45\163{$_and}\141\x73\164\x2e\x6e\141\x6d\x65\40\x4c\111\x4b\x45\x20\x25\163\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto kwoyiysciqumswcy; } aaogeemgkogagkai: kwoyiysciqumswcy: $uqcswyskyumyyeew = ''; $ogguokqeaguoyiuk = $_or; ooysmgyeqoiesgqm: } wmaeicoyyciuaiuy: qqmmycmsoqegcqqw: isqwwmikecauwyuc: if (!($wmsuioaookqmyqkw || $cniyckqcgyosooam)) { goto oiiqqgyqmggyiums; } $this->cecaguuoecmccuse("\x70\157\x73\164\x73\137\x6a\157\x69\x6e\137\x72\145\161\x75\145\x73\164", [$this, "\x6b\x67\x79\x6f\171\151\x71\161\x6f\x63\x75\155\143\165\153\x61"]); oiiqqgyqmggyiums: if (empty($qwcmueausqgiwigy)) { goto ukogwqiuuuakkawy; } $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . Constants::meieskyuuegwwcsy, $qwcmueausqgiwigy, $iwewcwusemqaiggk, $cwomqsccicsqseiy, $wmsuioaookqmyqkw, $gqgemcmoicmgaqie); $qwcmueausqgiwigy = "{$_and}\x28{$qwcmueausqgiwigy}\51\x20"; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto magymcqykamwqigw; } $qwcmueausqgiwigy .= sprintf("\45\163\50\x25\x73\56\160\157\163\x74\x5f\160\x61\163\x73\167\x6f\162\x64\40\x3d\40\x27\47\x29\40", $_and, $wpdb->posts); magymcqykamwqigw: ukogwqiuuuakkawy: $this->cecaguuoecmccuse("\160\x6f\x73\x74\163\137\x64\151\x73\164\x69\x6e\143\x74\x5f\x72\145\161\x75\x65\x73\x74", [$this, "\x73\167\x6b\x69\153\163\157\163\161\157\x63\171\141\167\x6f\x65"]); gicmaqmuscawegie: oymyqcoekqyuiguq: return $qwcmueausqgiwigy; } public function kgyoyiqqocumcuka($eagqsqeocaokmsim) : string { global $wpdb; $eagqsqeocaokmsim .= sprintf("\40\x4c\x45\106\x54\x20\x4a\x4f\x49\x4e\x20\45\163\x20\141\x73\x74\162\x20\117\116\x20\50\x25\x73\x2e\111\104\40\x3d\40\x61\x73\164\x72\56\x6f\x62\x6a\x65\143\x74\x5f\x69\144\x29\40", $wpdb->term_relationships, $wpdb->posts); $eagqsqeocaokmsim .= sprintf("\x20\114\x45\106\x54\x20\112\x4f\111\116\40\45\163\40\141\163\164\164\40\x4f\116\x20\x28\x61\x73\164\x72\x2e\x74\x65\162\155\137\164\x61\170\157\156\157\155\171\137\151\x64\x20\x3d\x20\x61\163\x74\164\x2e\x74\145\162\x6d\137\164\141\170\x6f\156\x6f\155\171\x5f\x69\144\51\40", $wpdb->term_taxonomy); $eagqsqeocaokmsim .= sprintf("\40\114\x45\106\124\40\112\117\111\116\40\x25\x73\40\141\x73\x74\x20\x4f\116\40\x28\141\163\164\164\x2e\164\145\x72\x6d\137\151\144\40\75\40\141\x73\164\56\164\145\x72\155\137\151\x64\51\x20", $wpdb->terms); return $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\x6a\157\151\x6e\x5f\162\145\161\165\145\x73\x74", $eagqsqeocaokmsim); } public function swkiksosqocyawoe() : string { return "\104\111\x53\x54\x49\x4e\x43\124"; } public function igywascsieokkows($gqgemcmoicmgaqie) { if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto sgiuwkisugmewmcs; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::isksgwqqcmwaccaq, []); if ($sciomagaqmgggsiu) { goto ayamomygygmgwgkg; } $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::mokucseeaqkgkuqy, []); ayamomygygmgwgkg: switch ($this->sesseaeskwkeucks()) { case Constants::ygoseweigiigswiu: if (!(Constants::yyoaeaaaquyigiim === $ccamueccusigaaio && $sciomagaqmgggsiu)) { goto iyeswoaqkaeggiiy; } $gqgemcmoicmgaqie->set(Constants::uouymeyqasaeckso, $sciomagaqmgggsiu); iyeswoaqkaeggiiy: goto gygqgauaceiuawkq; case Constants::qgmuskygocwmouos: if ($ccamueccusigaaio && in_array($ccamueccusigaaio, $sciomagaqmgggsiu, true)) { goto asqqqqakiagymemk; } $gqgemcmoicmgaqie->set(Constants::uouymeyqasaeckso, $sciomagaqmgggsiu); goto jkgouewqysmscmqs; asqqqqakiagymemk: $gqgemcmoicmgaqie->set(Constants::uouymeyqasaeckso, $ccamueccusigaaio); jkgouewqysmscmqs: goto gygqgauaceiuawkq; } ucksaiwquekagyqe: gygqgauaceiuawkq: sgiuwkisugmewmcs: return $gqgemcmoicmgaqie; } public function yscgoewkoaiywmos($sogksuscggsicmac) { if (!($this->iemckwasmaugwcwi() && in_array($this->sesseaeskwkeucks(), [Constants::ygoseweigiigswiu, Constants::ucoiewcoucauqwko], true))) { goto wkaoyycsoeoyqcae; } global $wp_query; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); if (!(Constants::emcyuiagkcgsckma === $ccamueccusigaaio || $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($ccamueccusigaaio))) { goto yeemsgmumygmumqw; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); $suaemuyiacqyugsm = max(1, $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(Constants::kkcqmwgccaygggcu, 1)); $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gmskcsaawiuegywk, [Constants::ocsomysosuqaimuc, Constants::qgciomgukmcwscqw]); if (!(Constants::emcyuiagkcgsckma !== $ccamueccusigaaio)) { goto kceeuicccqscwgsu; } $seyqqsmuaiegkeeq = $ccamueccusigaaio; kceeuicccqscwgsu: $ywmkwiwkosakssii = [Constants::mkucwyayaakigquq => $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::smagkiasowyaaocq), Constants::gmmygyiecgmggaam => $seyqqsmuaiegkeeq, Constants::eymwucuaaiiciymc => $weyoqgcesqgeusiu, Constants::mmqiaaskyikwwayy => $weyoqgcesqgeusiu > 0 ? ($suaemuyiacqyugsm - 1) * $weyoqgcesqgeusiu : 0]; $qwcmueausqgiwigy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\163"); switch ($ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa)) { case Constants::ouywiegeiyuaaawo: $ywmkwiwkosakssii[Constants::ouywiegeiyuaaawo] = $qwcmueausqgiwigy; goto iquecygaakmiomeg; case Constants::ygoseweigiigswiu: $ywmkwiwkosakssii[Constants::yayciqueeakqwese] = $qwcmueausqgiwigy; goto iquecygaakmiomeg; default: case Constants::qescuiwgsyuikume: $ywmkwiwkosakssii[Constants::esomoymycskkguse] = $qwcmueausqgiwigy; goto iquecygaakmiomeg; } eacysqsegwcqawsa: iquecygaakmiomeg: $aigykywoguoqmkao = new WP_Term_Query(); $sogksuscggsicmac = $aigykywoguoqmkao->query($ywmkwiwkosakssii); if (!$wp_query instanceof WP_Query) { goto yimeskeioamqmuwg; } $wp_query->found_posts = $this->gqumoweqkmwuuomo($seyqqsmuaiegkeeq, $ywmkwiwkosakssii); $wp_query->max_num_pages = ceil($wp_query->found_posts / $wp_query->get(Constants::goqgcigmiawyauai)); yimeskeioamqmuwg: yeemsgmumygmumqw: wkaoyycsoeoyqcae: return $sogksuscggsicmac; } private function gqumoweqkmwuuomo($kesssewsiegssiya, $ywmkwiwkosakssii) : int { $count_args = $ywmkwiwkosakssii; unset($count_args[Constants::eymwucuaaiiciymc], $count_args[Constants::mmqiaaskyikwwayy]); return (int) wp_count_terms($kesssewsiegssiya, $count_args); } private function gouusicsisumuiei($gqgemcmoicmgaqie = null) : bool { $gouusicsisumuiei = false; if (!$this->iemckwasmaugwcwi()) { goto ekoegocuqoycoeyq; } if ($gqgemcmoicmgaqie) { goto cwugokqsmiomgmqg; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; cwugokqsmiomgmqg: if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query() && Constants::oimusiegakqgwosg !== $gqgemcmoicmgaqie->get("\x73", Constants::oimusiegakqgwosg))) { goto uuuceqkseqkqawko; } $gouusicsisumuiei = true; uuuceqkseqkqawko: ekoegocuqoycoeyq: return $gouusicsisumuiei; } }
