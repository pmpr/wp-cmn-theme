<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65a291f02b96c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Search; use Pmpr\Common\Cover\Setting; use WP_Query; use WP_Term_Query; class Query extends Common { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x70\x72\x65\x5f\x67\x65\x74\x5f\160\157\x73\164\163", [$this, "\x69\147\x79\x77\141\163\x63\x73\x69\x65\x6f\153\x6b\x6f\167\x73"], 0)->cecaguuoecmccuse("\x70\157\x73\164\163\x5f\x73\145\141\162\143\150", [$this, "\167\141\167\161\x77\141\x6d\x73\x75\x75\x75\x6d\145\x73\x6b\x61"], 500, 2); $this->aqaqisyssqeomwom("\x67\x65\164\x5f\x73\x65\141\162\x63\150\137\162\145\163\165\154\x74", [$this, "\171\x73\143\x67\x6f\x65\167\x6b\157\x61\151\x79\x77\x6d\157\163"]); } public function wawqwamsuuumeska($qwcmueausqgiwigy, $gqgemcmoicmgaqie) { global $wpdb; if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto okagauksoqkoqygi; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $cwomqsccicsqseiy = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ogkiaqsouugogsom); $wmsuioaookqmyqkw = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::kquocioeygiskksm); if (!($wmsuioaookqmyqkw || $cwomqsccicsqseiy)) { goto iokemmkgmcaksiqu; } $qqmmggwcsmymegca = $gqgemcmoicmgaqie->query_vars; $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\145\x78\141\143\164"]) ? '' : "\45"; $qwcmueausqgiwigy = ''; $_and = "\x20\101\x4e\104\40"; $_or = "\x20\117\x52\x20"; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $eyyicwuomioiwoeu = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $wyqayqogsymumaqg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gsyiysyskygiwqmu, self::ygoseweigiigswiu); $iwewcwusemqaiggk = $aaycmcgqqqsysccs . $eyyicwuomioiwoeu->yqccgscwmeeyigkg($qqmmggwcsmymegca["\163"] ?? '') . $aaycmcgqqqsysccs; $uqcswyskyumyyeew = ''; if (!$cwomqsccicsqseiy) { goto iquugwoswgkoiieg; } if (!in_array($wyqayqogsymumaqg, [self::ygoseweigiigswiu, self::qescuiwgsyuikume])) { goto wowmysuygugawmmu; } $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\x2e\x70\x6f\163\164\137\x74\151\164\154\145\x20\114\111\113\105\40\45\163", $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; wowmysuygugawmmu: if (!in_array($wyqayqogsymumaqg, [self::ygoseweigiigswiu, self::ssmskyqgcmeiayco])) { goto mmmqqoemusicwgqg; } $qwcmueausqgiwigy .= $uqcswyskyumyyeew; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\56\160\x6f\x73\164\137\143\x6f\156\x74\x65\156\164\40\x4c\x49\x4b\105\x20\x25\x73{$_or}{$wpdb->posts}\56\160\x6f\163\x74\137\145\170\143\x65\x72\x70\164\x20\x4c\x49\113\105\x20\45\x73", $iwewcwusemqaiggk, $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; mmmqqoemusicwgqg: $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\160\157\x73\164\x5f\x71\165\145\x72\171", $qwcmueausqgiwigy, $iwewcwusemqaiggk); iquugwoswgkoiieg: $cniyckqcgyosooam = false; if (!is_numeric($ccamueccusigaaio)) { goto imwiyqcekcykscui; } $uyuaosigqymaqsaa = (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mwqguykeegesggge, []); if (in_array($ccamueccusigaaio, $uyuaosigqymaqsaa)) { goto syiyemqigyugagks; } if ($uyuaosigqymaqsaa) { goto gsiaskgsukseumig; } $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($ccamueccusigaaio); if (!in_array($kesssewsiegssiya, (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ammgiseaaguqygig, []))) { goto xogaycsaesgqeqig; } $cniyckqcgyosooam = true; xogaycsaesgqeqig: gsiaskgsukseumig: goto woqkgwmkmqsuceuy; syiyemqigyugagks: $cniyckqcgyosooam = true; woqkgwmkmqsuceuy: imwiyqcekcykscui: if (!$cniyckqcgyosooam) { goto umemmgiwimkymaya; } $qwcmueausqgiwigy = "\50{$qwcmueausqgiwigy}\51{$_and}"; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\x61\x73\164\x2e\164\145\162\155\137\151\x64\x20\75\40\45\163\51", $ccamueccusigaaio); umemmgiwimkymaya: if (!$wmsuioaookqmyqkw) { goto ucaoyoamaycsiacq; } $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ewwmksgyikwikqye, []); if (!$seyqqsmuaiegkeeq) { goto mccimkgwkkamsime; } $ogguokqeaguoyiuk = ''; $qycoeysqasckgycc = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa); foreach ($seyqqsmuaiegkeeq as $ieqocgiosekoeoqe) { $qwcmueausqgiwigy .= $uqcswyskyumyyeew . $ogguokqeaguoyiuk; switch ($qycoeysqasckgycc) { case self::ouywiegeiyuaaawo: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\141\163\164\x74\56\x74\141\x78\157\x6e\x6f\x6d\x79\x20\75\x20\45\x73{$_and}\x61\163\164\x2e\163\x6c\165\x67\40\114\111\113\105\40\x25\x73\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto qweyymyuuqwcmkqg; case self::ygoseweigiigswiu: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\x61\163\x74\x74\56\x74\141\x78\157\x6e\x6f\155\x79\40\x3d\x20\x25\x73{$_and}\x28\141\163\164\x2e\x6e\x61\x6d\145\40\x4c\111\x4b\105\x20\x25\x73\x20\x6f\162\x20\141\x73\164\56\x73\154\165\x67\x20\x4c\111\x4b\x45\40\x25\x73\x29\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk, $iwewcwusemqaiggk); goto qweyymyuuqwcmkqg; default: case self::qescuiwgsyuikume: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\x61\x73\164\164\x2e\x74\x61\x78\x6f\156\157\155\x79\40\75\40\45\163{$_and}\141\x73\x74\56\x6e\x61\155\145\x20\x4c\111\x4b\105\40\45\x73\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto qweyymyuuqwcmkqg; } guqmgiqaaowaauyo: qweyymyuuqwcmkqg: $uqcswyskyumyyeew = ''; $ogguokqeaguoyiuk = $_or; geasgywiogoeamek: } omsmaougqkqigogw: mccimkgwkkamsime: ucaoyoamaycsiacq: if (!($wmsuioaookqmyqkw || $cniyckqcgyosooam)) { goto iuyagqakcieasiua; } $this->cecaguuoecmccuse("\x70\x6f\x73\164\x73\137\x6a\x6f\151\x6e\x5f\x72\145\x71\x75\145\x73\164", [$this, "\x6b\147\171\x6f\x79\x69\161\161\157\143\165\x6d\143\165\153\141"]); iuyagqakcieasiua: if (empty($qwcmueausqgiwigy)) { goto iaoyeugekskmewgs; } $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . self::meieskyuuegwwcsy, $qwcmueausqgiwigy, $iwewcwusemqaiggk, $cwomqsccicsqseiy, $wmsuioaookqmyqkw, $gqgemcmoicmgaqie); $qwcmueausqgiwigy = "{$_and}\50{$qwcmueausqgiwigy}\x29\40"; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto oasisywuwssumsok; } $qwcmueausqgiwigy .= sprintf("\45\x73\x28\45\x73\56\160\157\x73\x74\137\160\x61\x73\x73\167\x6f\x72\x64\40\x3d\40\x27\47\x29\x20", $_and, $wpdb->posts); oasisywuwssumsok: iaoyeugekskmewgs: $this->cecaguuoecmccuse("\x70\x6f\163\164\x73\x5f\144\x69\x73\x74\151\x6e\x63\164\137\162\x65\161\x75\x65\x73\x74", [$this, "\x73\167\153\x69\153\x73\x6f\x73\x71\x6f\143\x79\141\x77\x6f\145"]); iokemmkgmcaksiqu: okagauksoqkoqygi: return $qwcmueausqgiwigy; } public function kgyoyiqqocumcuka($eagqsqeocaokmsim) : string { global $wpdb; $eagqsqeocaokmsim .= sprintf("\40\114\x45\x46\124\x20\112\117\x49\x4e\40\45\x73\x20\x61\163\x74\162\40\x4f\x4e\x20\50\x25\x73\56\x49\x44\x20\75\x20\x61\163\164\x72\56\x6f\142\x6a\145\x63\x74\x5f\x69\144\51\40", $wpdb->term_relationships, $wpdb->posts); $eagqsqeocaokmsim .= sprintf("\40\114\x45\106\124\40\x4a\x4f\x49\116\x20\45\163\40\x61\163\x74\164\40\117\116\x20\50\x61\x73\x74\x72\x2e\x74\145\x72\155\137\x74\141\x78\x6f\156\x6f\x6d\171\x5f\x69\144\40\x3d\40\x61\163\x74\164\56\x74\145\162\x6d\137\164\x61\x78\x6f\156\x6f\x6d\x79\137\x69\144\51\x20", $wpdb->term_taxonomy); $eagqsqeocaokmsim .= sprintf("\x20\x4c\105\106\124\x20\x4a\117\x49\x4e\x20\45\163\40\x61\163\164\40\x4f\116\x20\50\141\163\164\x74\x2e\x74\145\x72\155\x5f\151\x64\40\x3d\40\x61\x73\x74\x2e\x74\x65\x72\x6d\137\x69\144\x29\40", $wpdb->terms); return $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\x6a\157\151\x6e\x5f\162\x65\x71\165\145\163\x74", $eagqsqeocaokmsim); } public function swkiksosqocyawoe() : string { return "\104\x49\123\x54\x49\116\x43\124"; } public function igywascsieokkows($gqgemcmoicmgaqie) { if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto mcucegiogmuyogki; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::isksgwqqcmwaccaq, []); if ($sciomagaqmgggsiu) { goto eciksmgaqikwegwq; } $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::mokucseeaqkgkuqy, []); eciksmgaqikwegwq: switch ($this->sesseaeskwkeucks()) { case self::ygoseweigiigswiu: if (!(self::yyoaeaaaquyigiim === $ccamueccusigaaio && $sciomagaqmgggsiu)) { goto measoqewessauqma; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sciomagaqmgggsiu); measoqewessauqma: goto kieyoaoawqacqamy; case self::qgmuskygocwmouos: if ($ccamueccusigaaio && in_array($ccamueccusigaaio, $sciomagaqmgggsiu)) { goto auaigccmwqwsqsku; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sciomagaqmgggsiu); goto wiaesksmicgikqcm; auaigccmwqwsqsku: $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $ccamueccusigaaio); wiaesksmicgikqcm: goto kieyoaoawqacqamy; } qckouamqueqiykqi: kieyoaoawqacqamy: mcucegiogmuyogki: return $gqgemcmoicmgaqie; } public function yscgoewkoaiywmos($sogksuscggsicmac) { if (!($this->iemckwasmaugwcwi() && in_array($this->sesseaeskwkeucks(), [self::ygoseweigiigswiu, self::ucoiewcoucauqwko]))) { goto uuisaeysawuagysg; } global $wp_query; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); if (!(self::emcyuiagkcgsckma === $ccamueccusigaaio || $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($ccamueccusigaaio))) { goto camawumockccayaq; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); $suaemuyiacqyugsm = max(1, $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(self::kkcqmwgccaygggcu, 1)); $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gmskcsaawiuegywk, [self::ocsomysosuqaimuc, self::qgciomgukmcwscqw]); if (!(self::emcyuiagkcgsckma !== $ccamueccusigaaio)) { goto gqaimiooakyykccy; } $seyqqsmuaiegkeeq = $ccamueccusigaaio; gqaimiooakyykccy: $ywmkwiwkosakssii = [self::mkucwyayaakigquq => $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::smagkiasowyaaocq), self::gmmygyiecgmggaam => $seyqqsmuaiegkeeq, self::eymwucuaaiiciymc => $weyoqgcesqgeusiu, self::mmqiaaskyikwwayy => $weyoqgcesqgeusiu > 0 ? ($suaemuyiacqyugsm - 1) * $weyoqgcesqgeusiu : 0]; $qwcmueausqgiwigy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\163"); switch ($ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa)) { case self::ouywiegeiyuaaawo: $ywmkwiwkosakssii[self::ouywiegeiyuaaawo] = $qwcmueausqgiwigy; goto agemeseegiuuowgo; case self::ygoseweigiigswiu: $ywmkwiwkosakssii[self::yayciqueeakqwese] = $qwcmueausqgiwigy; goto agemeseegiuuowgo; default: case self::qescuiwgsyuikume: $ywmkwiwkosakssii[self::esomoymycskkguse] = $qwcmueausqgiwigy; goto agemeseegiuuowgo; } goswwiomuackymqi: agemeseegiuuowgo: $aigykywoguoqmkao = new WP_Term_Query(); $sogksuscggsicmac = $aigykywoguoqmkao->query($ywmkwiwkosakssii); if (!$wp_query instanceof WP_Query) { goto gykuaukukosiocoy; } $wp_query->found_posts = $this->gqumoweqkmwuuomo($seyqqsmuaiegkeeq, $ywmkwiwkosakssii); $wp_query->max_num_pages = ceil($wp_query->found_posts / $wp_query->get(self::goqgcigmiawyauai)); gykuaukukosiocoy: camawumockccayaq: uuisaeysawuagysg: return $sogksuscggsicmac; } private function gqumoweqkmwuuomo($kesssewsiegssiya, $ywmkwiwkosakssii) : int { $count_args = $ywmkwiwkosakssii; unset($count_args[self::eymwucuaaiiciymc], $count_args[self::mmqiaaskyikwwayy]); return (int) wp_count_terms($kesssewsiegssiya, $count_args); } private function gouusicsisumuiei($gqgemcmoicmgaqie = null) : bool { $gouusicsisumuiei = false; if (!$this->iemckwasmaugwcwi()) { goto qowcwmsiyscackaa; } if ($gqgemcmoicmgaqie) { goto ggqeakyaggiuegek; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; ggqeakyaggiuegek: if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query() && self::oimusiegakqgwosg !== $gqgemcmoicmgaqie->get("\x73", self::oimusiegakqgwosg))) { goto usgcoawgqswoeiec; } $gouusicsisumuiei = true; usgcoawgqswoeiec: qowcwmsiyscackaa: return $gouusicsisumuiei; } }
