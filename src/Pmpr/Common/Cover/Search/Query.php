<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654a78139b661             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Search; use Pmpr\Common\Cover\Setting; use WP_Query; use WP_Term_Query; class Query extends Common { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x70\162\145\137\147\x65\164\x5f\x70\157\163\164\163", [$this, "\x69\147\171\x77\141\x73\x63\x73\151\145\x6f\x6b\x6b\x6f\x77\163"], 0)->cecaguuoecmccuse("\x70\157\163\x74\163\137\x73\x65\141\x72\x63\150", [$this, "\167\x61\x77\x71\167\141\155\x73\165\165\x75\155\145\x73\153\141"], 500, 2); $this->aqaqisyssqeomwom("\147\145\x74\137\x73\x65\141\162\143\x68\x5f\x72\145\163\165\154\164", [$this, "\171\x73\x63\147\157\x65\167\153\157\141\x69\171\x77\x6d\x6f\163"]); } public function wawqwamsuuumeska($qwcmueausqgiwigy, $gqgemcmoicmgaqie) { global $wpdb; if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto goaowamiyyamueiw; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $cwomqsccicsqseiy = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ogkiaqsouugogsom); $wmsuioaookqmyqkw = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::kquocioeygiskksm); if (!($wmsuioaookqmyqkw || $cwomqsccicsqseiy)) { goto gsqcoqqsioiyoykq; } $qqmmggwcsmymegca = $gqgemcmoicmgaqie->query_vars; $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\145\x78\x61\143\x74"]) ? '' : "\x25"; $qwcmueausqgiwigy = ''; $_and = "\40\101\116\104\x20"; $_or = "\40\x4f\x52\x20"; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $eyyicwuomioiwoeu = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $wyqayqogsymumaqg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gsyiysyskygiwqmu, self::ygoseweigiigswiu); $iwewcwusemqaiggk = $aaycmcgqqqsysccs . $eyyicwuomioiwoeu->yqccgscwmeeyigkg($qqmmggwcsmymegca["\163"] ?? '') . $aaycmcgqqqsysccs; $uqcswyskyumyyeew = ''; if (!$cwomqsccicsqseiy) { goto yseyyukqaowwouua; } if (!in_array($wyqayqogsymumaqg, [self::ygoseweigiigswiu, self::qescuiwgsyuikume])) { goto qsokkkyoackoycie; } $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\x2e\x70\157\x73\164\137\164\151\x74\154\145\40\x4c\111\x4b\x45\40\45\x73", $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; qsokkkyoackoycie: if (!in_array($wyqayqogsymumaqg, [self::ygoseweigiigswiu, self::ssmskyqgcmeiayco])) { goto casgoamcqkekgeeo; } $qwcmueausqgiwigy .= $uqcswyskyumyyeew; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\56\160\x6f\163\164\x5f\x63\157\156\x74\x65\156\164\40\x4c\x49\113\105\x20\x25\x73{$_or}{$wpdb->posts}\56\x70\x6f\x73\x74\x5f\x65\170\143\145\162\x70\164\40\114\111\113\x45\40\45\x73", $iwewcwusemqaiggk, $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; casgoamcqkekgeeo: $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\x70\157\163\164\137\161\165\x65\x72\171", $qwcmueausqgiwigy, $iwewcwusemqaiggk); yseyyukqaowwouua: $cniyckqcgyosooam = false; if (!is_numeric($ccamueccusigaaio)) { goto emauuoieewwoeyqq; } $uyuaosigqymaqsaa = (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mwqguykeegesggge, []); if (in_array($ccamueccusigaaio, $uyuaosigqymaqsaa)) { goto ywqakqkmmcoceqka; } if ($uyuaosigqymaqsaa) { goto sooecucuakgkuyis; } $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($ccamueccusigaaio); if (!in_array($kesssewsiegssiya, (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ammgiseaaguqygig, []))) { goto qcgyggiaowuqswuw; } $cniyckqcgyosooam = true; qcgyggiaowuqswuw: sooecucuakgkuyis: goto kwsqgqmwyyeykgum; ywqakqkmmcoceqka: $cniyckqcgyosooam = true; kwsqgqmwyyeykgum: emauuoieewwoeyqq: if (!$cniyckqcgyosooam) { goto koukiyqaccegmquc; } $qwcmueausqgiwigy = "\50{$qwcmueausqgiwigy}\51{$_and}"; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\141\x73\164\56\x74\x65\162\x6d\x5f\151\144\x20\75\x20\x25\163\x29", $ccamueccusigaaio); koukiyqaccegmquc: if (!$wmsuioaookqmyqkw) { goto awwaiioyywmokwsm; } $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ewwmksgyikwikqye, []); if (!$seyqqsmuaiegkeeq) { goto wswikooyuaaouqgk; } $ogguokqeaguoyiuk = ''; $qycoeysqasckgycc = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa); foreach ($seyqqsmuaiegkeeq as $ieqocgiosekoeoqe) { $qwcmueausqgiwigy .= $uqcswyskyumyyeew . $ogguokqeaguoyiuk; switch ($qycoeysqasckgycc) { case self::ouywiegeiyuaaawo: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\141\163\164\x74\56\164\x61\170\157\156\x6f\x6d\171\x20\x3d\x20\45\163{$_and}\x61\x73\164\x2e\163\154\165\147\x20\114\x49\113\x45\x20\45\x73\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto egkeqqgakieyimuq; case self::ygoseweigiigswiu: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\141\x73\164\x74\56\x74\141\x78\157\x6e\157\x6d\x79\40\x3d\40\x25\x73{$_and}\50\x61\x73\164\56\156\x61\x6d\145\x20\114\x49\113\105\40\x25\163\x20\x6f\162\x20\141\163\x74\x2e\163\x6c\165\147\x20\x4c\x49\x4b\x45\40\x25\163\51\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk, $iwewcwusemqaiggk); goto egkeqqgakieyimuq; default: case self::qescuiwgsyuikume: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\141\x73\164\164\x2e\x74\x61\x78\x6f\156\157\x6d\x79\40\75\40\x25\163{$_and}\141\x73\x74\x2e\x6e\141\155\145\x20\114\x49\x4b\105\x20\45\x73\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto egkeqqgakieyimuq; } cakuguiciaiaeukg: egkeqqgakieyimuq: $uqcswyskyumyyeew = ''; $ogguokqeaguoyiuk = $_or; oqwwacmigasucsoc: } ekakkiuuquqkccse: wswikooyuaaouqgk: awwaiioyywmokwsm: if (!($wmsuioaookqmyqkw || $cniyckqcgyosooam)) { goto ckwmkquuyyugigom; } $this->cecaguuoecmccuse("\160\x6f\163\x74\x73\137\152\157\151\x6e\137\x72\x65\x71\165\x65\x73\164", [$this, "\153\x67\171\x6f\x79\151\x71\161\x6f\x63\x75\x6d\x63\165\x6b\141"]); ckwmkquuyyugigom: if (empty($qwcmueausqgiwigy)) { goto uaicwcqwauosmsqm; } $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . self::meieskyuuegwwcsy, $qwcmueausqgiwigy, $iwewcwusemqaiggk, $cwomqsccicsqseiy, $wmsuioaookqmyqkw, $gqgemcmoicmgaqie); $qwcmueausqgiwigy = "{$_and}\50{$qwcmueausqgiwigy}\x29\x20"; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto cumeycwmuuqawwyu; } $qwcmueausqgiwigy .= sprintf("\45\163\x28\x25\163\56\x70\157\x73\164\137\160\141\163\x73\x77\157\x72\x64\40\x3d\x20\x27\47\x29\40", $_and, $wpdb->posts); cumeycwmuuqawwyu: uaicwcqwauosmsqm: $this->cecaguuoecmccuse("\x70\x6f\x73\x74\x73\137\x64\151\x73\164\x69\156\143\164\x5f\162\x65\x71\x75\145\163\164", [$this, "\163\x77\x6b\151\x6b\163\157\163\x71\x6f\x63\171\x61\167\157\x65"]); gsqcoqqsioiyoykq: goaowamiyyamueiw: return $qwcmueausqgiwigy; } public function kgyoyiqqocumcuka($eagqsqeocaokmsim) : string { global $wpdb; $eagqsqeocaokmsim .= sprintf("\40\x4c\x45\x46\x54\40\x4a\x4f\111\116\x20\x25\x73\x20\141\x73\x74\162\x20\117\x4e\x20\x28\45\x73\56\x49\104\x20\75\x20\x61\163\x74\x72\56\157\142\x6a\145\x63\164\137\151\x64\x29\x20", $wpdb->term_relationships, $wpdb->posts); $eagqsqeocaokmsim .= sprintf("\x20\114\105\106\x54\x20\112\x4f\111\116\40\45\x73\x20\x61\x73\164\x74\x20\x4f\116\40\x28\141\163\x74\x72\x2e\164\x65\162\x6d\137\x74\141\x78\x6f\156\x6f\155\x79\x5f\x69\x64\40\x3d\x20\x61\163\x74\164\x2e\164\145\x72\x6d\x5f\164\x61\170\157\156\157\155\171\137\151\x64\x29\40", $wpdb->term_taxonomy); $eagqsqeocaokmsim .= sprintf("\x20\114\x45\x46\124\x20\x4a\117\x49\116\x20\45\x73\40\x61\x73\164\40\x4f\x4e\x20\x28\141\163\x74\164\56\x74\x65\162\155\x5f\x69\144\40\x3d\x20\141\163\x74\56\164\x65\162\155\137\x69\x64\x29\40", $wpdb->terms); return $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\x6a\157\151\156\x5f\x72\x65\x71\165\x65\x73\164", $eagqsqeocaokmsim); } public function swkiksosqocyawoe() : string { return "\104\111\x53\124\x49\x4e\103\x54"; } public function igywascsieokkows($gqgemcmoicmgaqie) { if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto makomwwyomweyamm; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::isksgwqqcmwaccaq, []); if ($sciomagaqmgggsiu) { goto iaomqomgiwiegoca; } $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::mokucseeaqkgkuqy, []); iaomqomgiwiegoca: switch ($this->sesseaeskwkeucks()) { case self::ygoseweigiigswiu: if (!(self::yyoaeaaaquyigiim === $ccamueccusigaaio && $sciomagaqmgggsiu)) { goto ookcgumoacskyymy; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sciomagaqmgggsiu); ookcgumoacskyymy: goto ysweqawmawicakeo; case self::qgmuskygocwmouos: if ($ccamueccusigaaio && in_array($ccamueccusigaaio, $sciomagaqmgggsiu)) { goto cuseccewekgcgkyg; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sciomagaqmgggsiu); goto kgysyqkoqgwmoscq; cuseccewekgcgkyg: $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $ccamueccusigaaio); kgysyqkoqgwmoscq: goto ysweqawmawicakeo; } owisckseoogsugqq: ysweqawmawicakeo: makomwwyomweyamm: return $gqgemcmoicmgaqie; } public function yscgoewkoaiywmos($sogksuscggsicmac) { if (!($this->iemckwasmaugwcwi() && in_array($this->sesseaeskwkeucks(), [self::ygoseweigiigswiu, self::ucoiewcoucauqwko]))) { goto gwiaimosqoiquwkc; } global $wp_query; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); if (!(self::emcyuiagkcgsckma === $ccamueccusigaaio || $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($ccamueccusigaaio))) { goto ugswokwmkumcmigc; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); $suaemuyiacqyugsm = max(1, $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(self::kkcqmwgccaygggcu, 1)); $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gmskcsaawiuegywk, [self::ocsomysosuqaimuc, self::qgciomgukmcwscqw]); if (!(self::emcyuiagkcgsckma !== $ccamueccusigaaio)) { goto oqwcmgwimeisusoe; } $seyqqsmuaiegkeeq = $ccamueccusigaaio; oqwcmgwimeisusoe: $ywmkwiwkosakssii = [self::mkucwyayaakigquq => $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::smagkiasowyaaocq), self::gmmygyiecgmggaam => $seyqqsmuaiegkeeq, self::eymwucuaaiiciymc => $weyoqgcesqgeusiu, self::mmqiaaskyikwwayy => $weyoqgcesqgeusiu > 0 ? ($suaemuyiacqyugsm - 1) * $weyoqgcesqgeusiu : 0]; $qwcmueausqgiwigy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\163"); switch ($ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa)) { case self::ouywiegeiyuaaawo: $ywmkwiwkosakssii[self::ouywiegeiyuaaawo] = $qwcmueausqgiwigy; goto acesyuieuuqwgkwm; case self::ygoseweigiigswiu: $ywmkwiwkosakssii[self::yayciqueeakqwese] = $qwcmueausqgiwigy; goto acesyuieuuqwgkwm; default: case self::qescuiwgsyuikume: $ywmkwiwkosakssii[self::esomoymycskkguse] = $qwcmueausqgiwigy; goto acesyuieuuqwgkwm; } asaowisseacciyia: acesyuieuuqwgkwm: $aigykywoguoqmkao = new WP_Term_Query(); $sogksuscggsicmac = $aigykywoguoqmkao->query($ywmkwiwkosakssii); if (!$wp_query instanceof WP_Query) { goto qiaaqkymeuuueoqk; } $wp_query->found_posts = $this->gqumoweqkmwuuomo($seyqqsmuaiegkeeq, $ywmkwiwkosakssii); $wp_query->max_num_pages = ceil($wp_query->found_posts / $wp_query->get(self::goqgcigmiawyauai)); qiaaqkymeuuueoqk: ugswokwmkumcmigc: gwiaimosqoiquwkc: return $sogksuscggsicmac; } private function gqumoweqkmwuuomo($kesssewsiegssiya, $ywmkwiwkosakssii) : int { $count_args = $ywmkwiwkosakssii; unset($count_args[self::eymwucuaaiiciymc], $count_args[self::mmqiaaskyikwwayy]); return (int) wp_count_terms($kesssewsiegssiya, $count_args); } private function gouusicsisumuiei($gqgemcmoicmgaqie = null) : bool { $gouusicsisumuiei = false; if (!$this->iemckwasmaugwcwi()) { goto qumkwsqqocooyuoq; } if ($gqgemcmoicmgaqie) { goto owgakkqgckqcegoi; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; owgakkqgckqcegoi: if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query() && self::oimusiegakqgwosg !== $gqgemcmoicmgaqie->get("\163", self::oimusiegakqgwosg))) { goto cigesysuauaiccms; } $gouusicsisumuiei = true; cigesysuauaiccms: qumkwsqqocooyuoq: return $gouusicsisumuiei; } }
