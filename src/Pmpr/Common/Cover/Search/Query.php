<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce113365b6d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Search; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Query; use WP_Term_Query; class Query extends Common { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x70\x72\x65\x5f\147\x65\164\137\160\157\163\164\163", [$this, "\151\x67\x79\x77\x61\163\x63\163\151\145\x6f\153\153\x6f\x77\x73"], 0)->cecaguuoecmccuse("\x70\x6f\163\164\163\x5f\163\145\x61\x72\143\150", [$this, "\x77\x61\167\161\x77\x61\155\163\x75\x75\165\x6d\145\x73\153\141"], 500, 2); $this->aqaqisyssqeomwom("\x67\145\164\x5f\x73\x65\141\162\x63\150\x5f\x72\145\163\x75\x6c\164", [$this, "\171\163\x63\147\157\145\167\153\x6f\141\x69\171\x77\x6d\157\163"]); } public function wawqwamsuuumeska($qwcmueausqgiwigy, $gqgemcmoicmgaqie) { global $wpdb; if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto gicmaqmuscawegie; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $cwomqsccicsqseiy = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ogkiaqsouugogsom); $wmsuioaookqmyqkw = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::kquocioeygiskksm); if (!($wmsuioaookqmyqkw || $cwomqsccicsqseiy)) { goto ukogwqiuuuakkawy; } $qqmmggwcsmymegca = $gqgemcmoicmgaqie->query_vars; $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\x65\x78\x61\x63\164"]) ? '' : "\x25"; $qwcmueausqgiwigy = ''; $_and = "\x20\101\x4e\104\x20"; $_or = "\x20\x4f\x52\x20"; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $eyyicwuomioiwoeu = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $wyqayqogsymumaqg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gsyiysyskygiwqmu, Constants::ygoseweigiigswiu); $iwewcwusemqaiggk = $aaycmcgqqqsysccs . $eyyicwuomioiwoeu->yqccgscwmeeyigkg($qqmmggwcsmymegca["\163"] ?? '') . $aaycmcgqqqsysccs; $uqcswyskyumyyeew = ''; if (!$cwomqsccicsqseiy) { goto owgakkqgckqcegoi; } if (!in_array($wyqayqogsymumaqg, [Constants::ygoseweigiigswiu, Constants::qescuiwgsyuikume], true)) { goto ugswokwmkumcmigc; } $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\56\x70\157\x73\x74\137\x74\x69\164\154\145\x20\x4c\111\x4b\x45\40\45\x73", $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; ugswokwmkumcmigc: if (!in_array($wyqayqogsymumaqg, [Constants::ygoseweigiigswiu, Constants::ssmskyqgcmeiayco], true)) { goto gwiaimosqoiquwkc; } $qwcmueausqgiwigy .= $uqcswyskyumyyeew; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\x2e\160\x6f\163\x74\x5f\143\x6f\x6e\164\145\156\164\x20\x4c\111\113\105\40\45\163{$_or}{$wpdb->posts}\x2e\x70\157\x73\164\x5f\x65\x78\143\145\162\160\164\x20\x4c\x49\x4b\105\40\45\x73", $iwewcwusemqaiggk, $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; gwiaimosqoiquwkc: $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\x70\157\163\x74\137\x71\165\145\x72\171", $qwcmueausqgiwigy, $iwewcwusemqaiggk); owgakkqgckqcegoi: $cniyckqcgyosooam = false; if (!is_numeric($ccamueccusigaaio)) { goto wwswmaewcaisauei; } $uyuaosigqymaqsaa = (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mwqguykeegesggge, []); if (in_array($ccamueccusigaaio, $uyuaosigqymaqsaa)) { goto gcskyqewysqaceeg; } if ($uyuaosigqymaqsaa) { goto qumkwsqqocooyuoq; } $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($ccamueccusigaaio); if (!in_array($kesssewsiegssiya, (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ammgiseaaguqygig, []))) { goto cigesysuauaiccms; } $cniyckqcgyosooam = true; cigesysuauaiccms: qumkwsqqocooyuoq: goto kkewoqqowugagwoy; gcskyqewysqaceeg: $cniyckqcgyosooam = true; kkewoqqowugagwoy: wwswmaewcaisauei: if (!$cniyckqcgyosooam) { goto wsemeeocquawyauo; } $qwcmueausqgiwigy = "\50{$qwcmueausqgiwigy}\51{$_and}"; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\x61\163\x74\56\164\145\162\x6d\x5f\151\x64\x20\75\x20\45\163\x29", $ccamueccusigaaio); wsemeeocquawyauo: if (!$wmsuioaookqmyqkw) { goto qqmmycmsoqegcqqw; } $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ewwmksgyikwikqye, []); if (!$seyqqsmuaiegkeeq) { goto aaogeemgkogagkai; } $ogguokqeaguoyiuk = ''; $qycoeysqasckgycc = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa); foreach ($seyqqsmuaiegkeeq as $ieqocgiosekoeoqe) { $qwcmueausqgiwigy .= $uqcswyskyumyyeew . $ogguokqeaguoyiuk; switch ($qycoeysqasckgycc) { case Constants::ouywiegeiyuaaawo: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\141\163\164\x74\x2e\164\x61\x78\157\156\157\155\x79\x20\x3d\x20\45\163{$_and}\x61\x73\164\56\163\154\165\147\x20\x4c\111\113\105\40\x25\163\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto ooysmgyeqoiesgqm; case Constants::ygoseweigiigswiu: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\141\x73\164\x74\x2e\164\141\x78\x6f\156\x6f\x6d\171\x20\x3d\40\x25\163{$_and}\x28\141\163\164\x2e\156\x61\x6d\145\40\x4c\x49\113\105\40\45\163\x20\x6f\162\x20\x61\163\164\x2e\x73\154\x75\x67\x20\x4c\x49\113\105\x20\45\163\51\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk, $iwewcwusemqaiggk); goto ooysmgyeqoiesgqm; default: case Constants::qescuiwgsyuikume: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\x61\163\x74\164\x2e\x74\x61\170\x6f\x6e\x6f\x6d\x79\x20\x3d\x20\x25\163{$_and}\x61\x73\164\x2e\x6e\x61\155\x65\40\114\x49\113\105\40\45\163\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto ooysmgyeqoiesgqm; } kwoyiysciqumswcy: ooysmgyeqoiesgqm: $uqcswyskyumyyeew = ''; $ogguokqeaguoyiuk = $_or; wmaeicoyyciuaiuy: } ocgkwqqmgasuoies: aaogeemgkogagkai: qqmmycmsoqegcqqw: if (!($wmsuioaookqmyqkw || $cniyckqcgyosooam)) { goto isqwwmikecauwyuc; } $this->cecaguuoecmccuse("\160\x6f\x73\x74\163\137\152\157\151\156\137\x72\145\x71\x75\x65\163\x74", [$this, "\153\147\171\157\x79\x69\161\x71\157\x63\x75\155\143\x75\x6b\141"]); isqwwmikecauwyuc: if (empty($qwcmueausqgiwigy)) { goto magymcqykamwqigw; } $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . Constants::meieskyuuegwwcsy, $qwcmueausqgiwigy, $iwewcwusemqaiggk, $cwomqsccicsqseiy, $wmsuioaookqmyqkw, $gqgemcmoicmgaqie); $qwcmueausqgiwigy = "{$_and}\50{$qwcmueausqgiwigy}\x29\40"; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto oiiqqgyqmggyiums; } $qwcmueausqgiwigy .= sprintf("\45\163\50\45\x73\x2e\x70\157\163\164\x5f\160\141\163\163\167\157\162\144\x20\x3d\x20\47\47\x29\40", $_and, $wpdb->posts); oiiqqgyqmggyiums: magymcqykamwqigw: $this->cecaguuoecmccuse("\x70\157\163\x74\x73\x5f\x64\151\x73\x74\x69\x6e\143\164\137\x72\145\x71\x75\145\163\x74", [$this, "\x73\167\x6b\x69\x6b\x73\157\163\161\157\x63\171\141\x77\x6f\x65"]); ukogwqiuuuakkawy: gicmaqmuscawegie: return $qwcmueausqgiwigy; } public function kgyoyiqqocumcuka($eagqsqeocaokmsim) : string { global $wpdb; $eagqsqeocaokmsim .= sprintf("\x20\114\105\x46\x54\40\112\117\111\116\40\45\163\x20\141\163\164\x72\x20\117\x4e\x20\50\45\x73\x2e\x49\104\x20\75\40\x61\163\x74\162\56\x6f\x62\152\x65\143\164\137\x69\x64\51\x20", $wpdb->term_relationships, $wpdb->posts); $eagqsqeocaokmsim .= sprintf("\40\114\x45\x46\124\x20\x4a\117\x49\x4e\x20\45\163\40\x61\x73\x74\164\40\x4f\x4e\40\x28\141\x73\x74\162\x2e\x74\145\x72\x6d\137\x74\x61\170\x6f\x6e\157\x6d\171\x5f\x69\x64\x20\x3d\40\141\163\x74\164\56\164\145\162\155\x5f\x74\x61\170\x6f\156\157\155\x79\137\151\x64\51\x20", $wpdb->term_taxonomy); $eagqsqeocaokmsim .= sprintf("\x20\x4c\x45\x46\124\40\112\117\x49\x4e\40\x25\x73\40\141\163\x74\x20\117\x4e\x20\x28\x61\163\x74\164\56\164\x65\x72\155\137\151\144\x20\75\x20\x61\163\x74\x2e\164\145\x72\155\137\x69\144\x29\40", $wpdb->terms); return $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\152\157\x69\x6e\137\162\145\x71\165\145\163\x74", $eagqsqeocaokmsim); } public function swkiksosqocyawoe() : string { return "\104\111\x53\x54\111\116\103\x54"; } public function igywascsieokkows($gqgemcmoicmgaqie) { if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto jkgouewqysmscmqs; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::isksgwqqcmwaccaq, []); if ($sciomagaqmgggsiu) { goto oymyqcoekqyuiguq; } $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::mokucseeaqkgkuqy, []); oymyqcoekqyuiguq: switch ($this->sesseaeskwkeucks()) { case Constants::ygoseweigiigswiu: if (!(Constants::yyoaeaaaquyigiim === $ccamueccusigaaio && $sciomagaqmgggsiu)) { goto ucksaiwquekagyqe; } $gqgemcmoicmgaqie->set(Constants::uouymeyqasaeckso, $sciomagaqmgggsiu); ucksaiwquekagyqe: goto ayamomygygmgwgkg; case Constants::qgmuskygocwmouos: if ($ccamueccusigaaio && in_array($ccamueccusigaaio, $sciomagaqmgggsiu, true)) { goto iyeswoaqkaeggiiy; } $gqgemcmoicmgaqie->set(Constants::uouymeyqasaeckso, $sciomagaqmgggsiu); goto asqqqqakiagymemk; iyeswoaqkaeggiiy: $gqgemcmoicmgaqie->set(Constants::uouymeyqasaeckso, $ccamueccusigaaio); asqqqqakiagymemk: goto ayamomygygmgwgkg; } gygqgauaceiuawkq: ayamomygygmgwgkg: jkgouewqysmscmqs: return $gqgemcmoicmgaqie; } public function yscgoewkoaiywmos($sogksuscggsicmac) { if (!($this->iemckwasmaugwcwi() && in_array($this->sesseaeskwkeucks(), [Constants::ygoseweigiigswiu, Constants::ucoiewcoucauqwko], true))) { goto yeemsgmumygmumqw; } global $wp_query; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); if (!(Constants::emcyuiagkcgsckma === $ccamueccusigaaio || $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($ccamueccusigaaio))) { goto yimeskeioamqmuwg; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); $suaemuyiacqyugsm = max(1, $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(Constants::kkcqmwgccaygggcu, 1)); $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gmskcsaawiuegywk, [Constants::ocsomysosuqaimuc, Constants::qgciomgukmcwscqw]); if (!(Constants::emcyuiagkcgsckma !== $ccamueccusigaaio)) { goto sgiuwkisugmewmcs; } $seyqqsmuaiegkeeq = $ccamueccusigaaio; sgiuwkisugmewmcs: $ywmkwiwkosakssii = [Constants::mkucwyayaakigquq => $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::smagkiasowyaaocq), Constants::gmmygyiecgmggaam => $seyqqsmuaiegkeeq, Constants::eymwucuaaiiciymc => $weyoqgcesqgeusiu, Constants::mmqiaaskyikwwayy => $weyoqgcesqgeusiu > 0 ? ($suaemuyiacqyugsm - 1) * $weyoqgcesqgeusiu : 0]; $qwcmueausqgiwigy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\163"); switch ($ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa)) { case Constants::ouywiegeiyuaaawo: $ywmkwiwkosakssii[Constants::ouywiegeiyuaaawo] = $qwcmueausqgiwigy; goto kceeuicccqscwgsu; case Constants::ygoseweigiigswiu: $ywmkwiwkosakssii[Constants::yayciqueeakqwese] = $qwcmueausqgiwigy; goto kceeuicccqscwgsu; default: case Constants::qescuiwgsyuikume: $ywmkwiwkosakssii[Constants::esomoymycskkguse] = $qwcmueausqgiwigy; goto kceeuicccqscwgsu; } iquecygaakmiomeg: kceeuicccqscwgsu: $aigykywoguoqmkao = new WP_Term_Query(); $sogksuscggsicmac = $aigykywoguoqmkao->query($ywmkwiwkosakssii); if (!$wp_query instanceof WP_Query) { goto eacysqsegwcqawsa; } $wp_query->found_posts = $this->gqumoweqkmwuuomo($seyqqsmuaiegkeeq, $ywmkwiwkosakssii); $wp_query->max_num_pages = ceil($wp_query->found_posts / $wp_query->get(Constants::goqgcigmiawyauai)); eacysqsegwcqawsa: yimeskeioamqmuwg: yeemsgmumygmumqw: return $sogksuscggsicmac; } private function gqumoweqkmwuuomo($kesssewsiegssiya, $ywmkwiwkosakssii) : int { $count_args = $ywmkwiwkosakssii; unset($count_args[Constants::eymwucuaaiiciymc], $count_args[Constants::mmqiaaskyikwwayy]); return (int) wp_count_terms($kesssewsiegssiya, $count_args); } private function gouusicsisumuiei($gqgemcmoicmgaqie = null) : bool { $gouusicsisumuiei = false; if (!$this->iemckwasmaugwcwi()) { goto uuuceqkseqkqawko; } if ($gqgemcmoicmgaqie) { goto wkaoyycsoeoyqcae; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; wkaoyycsoeoyqcae: if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query() && Constants::oimusiegakqgwosg !== $gqgemcmoicmgaqie->get("\x73", Constants::oimusiegakqgwosg))) { goto cwugokqsmiomgmqg; } $gouusicsisumuiei = true; cwugokqsmiomgmqg: uuuceqkseqkqawko: return $gouusicsisumuiei; } }
