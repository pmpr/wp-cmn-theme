<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64ce52edbd607             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Search; use Pmpr\Common\Cover\Setting; use WP_Query; use WP_Term_Query; class Query extends Common { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\160\x72\x65\x5f\x67\x65\x74\x5f\160\157\163\x74\x73", [$this, "\x69\147\171\x77\141\x73\143\163\x69\x65\157\x6b\153\x6f\167\163"], 0)->cecaguuoecmccuse("\160\157\x73\x74\163\137\163\145\141\162\143\150", [$this, "\167\141\167\161\167\x61\155\163\165\x75\x75\155\x65\163\153\x61"], 500, 2); $this->aqaqisyssqeomwom("\147\145\x74\137\x73\145\141\x72\143\x68\137\x72\145\163\x75\x6c\164", [$this, "\x79\x73\x63\147\157\x65\167\x6b\157\141\151\x79\167\155\x6f\x73"]); } public function wawqwamsuuumeska($qwcmueausqgiwigy, $gqgemcmoicmgaqie) { global $wpdb; if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto iggyqogweyosuikc; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $cwomqsccicsqseiy = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ogkiaqsouugogsom); $wmsuioaookqmyqkw = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::kquocioeygiskksm); if (!($wmsuioaookqmyqkw || $cwomqsccicsqseiy)) { goto kqksuugcgsyeoayy; } $qqmmggwcsmymegca = $gqgemcmoicmgaqie->query_vars; $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\145\170\141\143\x74"]) ? '' : "\x25"; $qwcmueausqgiwigy = ''; $_and = "\x20\x41\x4e\104\40"; $_or = "\40\x4f\122\40"; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $eyyicwuomioiwoeu = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $wyqayqogsymumaqg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gsyiysyskygiwqmu, self::ygoseweigiigswiu); $iwewcwusemqaiggk = $aaycmcgqqqsysccs . $eyyicwuomioiwoeu->yqccgscwmeeyigkg($qqmmggwcsmymegca["\x73"] ?? '') . $aaycmcgqqqsysccs; $uqcswyskyumyyeew = ''; if (!$cwomqsccicsqseiy) { goto sycygoiaiqqageym; } if (!in_array($wyqayqogsymumaqg, [self::ygoseweigiigswiu, self::qescuiwgsyuikume])) { goto ycakugokkqkuqyiu; } $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\56\x70\157\x73\x74\x5f\164\x69\164\154\x65\x20\114\x49\113\x45\x20\x25\x73", $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; ycakugokkqkuqyiu: if (!in_array($wyqayqogsymumaqg, [self::ygoseweigiigswiu, self::ssmskyqgcmeiayco])) { goto oouoqimaaqcmccay; } $qwcmueausqgiwigy .= $uqcswyskyumyyeew; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\x2e\x70\157\163\x74\137\x63\x6f\156\164\145\156\164\x20\114\111\x4b\105\40\45\163{$_or}{$wpdb->posts}\56\x70\157\163\x74\x5f\145\170\x63\145\162\x70\164\40\x4c\111\113\x45\x20\x25\x73", $iwewcwusemqaiggk, $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; oouoqimaaqcmccay: sycygoiaiqqageym: $cniyckqcgyosooam = false; if (!is_numeric($ccamueccusigaaio)) { goto qsygcycwieukkgwc; } $uyuaosigqymaqsaa = (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mwqguykeegesggge, []); if (in_array($ccamueccusigaaio, $uyuaosigqymaqsaa)) { goto wwkgkaecgiwggcck; } if ($uyuaosigqymaqsaa) { goto kciouyuaqkyqomam; } $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($ccamueccusigaaio); if (!in_array($kesssewsiegssiya, (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ammgiseaaguqygig, []))) { goto gygawoqywkukmqee; } $cniyckqcgyosooam = true; gygawoqywkukmqee: kciouyuaqkyqomam: goto umgaesggesswoaqe; wwkgkaecgiwggcck: $cniyckqcgyosooam = true; umgaesggesswoaqe: qsygcycwieukkgwc: if (!$cniyckqcgyosooam) { goto kiwqkcaekqqyuegq; } $qwcmueausqgiwigy = "\x28{$qwcmueausqgiwigy}\x29{$_and}"; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\x61\x73\x74\x2e\164\145\162\x6d\x5f\x69\x64\40\75\x20\45\163\x29", $ccamueccusigaaio); kiwqkcaekqqyuegq: if (!$wmsuioaookqmyqkw) { goto ayyweymyuuiauamo; } $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ewwmksgyikwikqye, []); if (!$seyqqsmuaiegkeeq) { goto yqykqysmiquwoasu; } $ogguokqeaguoyiuk = ''; $qycoeysqasckgycc = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa); foreach ($seyqqsmuaiegkeeq as $ieqocgiosekoeoqe) { $qwcmueausqgiwigy .= $uqcswyskyumyyeew . $ogguokqeaguoyiuk; switch ($qycoeysqasckgycc) { case self::ouywiegeiyuaaawo: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\141\163\164\x74\x2e\164\x61\x78\x6f\x6e\157\x6d\171\x20\75\x20\45\163{$_and}\x61\163\x74\56\163\154\165\147\40\x4c\111\113\x45\x20\45\x73\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto gimmuoqwckiseaik; case self::ygoseweigiigswiu: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\141\163\x74\164\x2e\x74\x61\170\157\x6e\x6f\155\x79\40\75\40\45\163{$_and}\50\x61\x73\164\56\x6e\x61\155\x65\x20\114\111\x4b\105\40\45\x73\40\157\162\x20\141\x73\164\56\163\x6c\165\x67\x20\114\111\x4b\105\x20\x25\163\51\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk, $iwewcwusemqaiggk); goto gimmuoqwckiseaik; default: case self::qescuiwgsyuikume: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\141\163\164\164\x2e\164\x61\170\157\156\157\155\x79\x20\75\x20\45\163{$_and}\141\163\x74\x2e\x6e\141\155\x65\40\114\x49\x4b\105\40\x25\x73\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto gimmuoqwckiseaik; } cmqucgoewuyieoyk: gimmuoqwckiseaik: $uqcswyskyumyyeew = ''; $ogguokqeaguoyiuk = $_or; iqcogmsguwoikame: } quwcqmyokicssyew: yqykqysmiquwoasu: ayyweymyuuiauamo: if (!($wmsuioaookqmyqkw || $cniyckqcgyosooam)) { goto mosqsmqimqgqoase; } $this->cecaguuoecmccuse("\160\157\163\x74\x73\137\x6a\x6f\x69\x6e\137\162\145\x71\165\x65\x73\x74", [$this, "\x6b\147\171\157\171\x69\x71\x71\x6f\143\165\x6d\x63\x75\153\x61"]); mosqsmqimqgqoase: if (empty($qwcmueausqgiwigy)) { goto ygcsmkuycoagwyou; } $qwcmueausqgiwigy = "{$_and}\50{$qwcmueausqgiwigy}\51\40"; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto omugkkesagcyagmk; } $qwcmueausqgiwigy .= sprintf("\x25\163\x28\x25\x73\56\x70\x6f\163\x74\137\x70\141\x73\x73\x77\157\x72\144\40\x3d\40\x27\47\x29\40", $_and, $wpdb->posts); omugkkesagcyagmk: ygcsmkuycoagwyou: $this->cecaguuoecmccuse("\160\157\x73\x74\163\x5f\x64\x69\x73\164\151\156\x63\164\137\x72\x65\x71\x75\x65\x73\x74", [$this, "\163\x77\x6b\x69\153\163\157\163\x71\157\x63\x79\x61\x77\x6f\x65"]); kqksuugcgsyeoayy: iggyqogweyosuikc: return $qwcmueausqgiwigy; } public function kgyoyiqqocumcuka($eagqsqeocaokmsim) : string { global $wpdb; $eagqsqeocaokmsim .= sprintf("\40\114\105\106\124\x20\x4a\117\111\116\40\x25\x73\40\x61\163\x74\162\x20\117\116\40\x28\x25\x73\x2e\x49\104\40\75\40\141\x73\164\x72\56\x6f\142\152\145\143\x74\137\x69\144\51\x20", $wpdb->term_relationships, $wpdb->posts); $eagqsqeocaokmsim .= sprintf("\x20\114\105\x46\124\x20\x4a\x4f\x49\x4e\40\x25\163\40\x61\163\x74\164\x20\117\x4e\40\50\141\163\164\x72\56\164\145\162\155\x5f\x74\141\x78\157\x6e\x6f\155\171\137\151\x64\40\75\x20\x61\x73\x74\164\x2e\164\145\x72\155\137\x74\141\x78\157\x6e\157\x6d\x79\x5f\x69\144\51\40", $wpdb->term_taxonomy); $eagqsqeocaokmsim .= sprintf("\40\x4c\x45\x46\x54\40\x4a\x4f\x49\x4e\x20\x25\x73\x20\141\x73\x74\40\x4f\116\x20\x28\141\163\x74\x74\56\x74\145\x72\155\137\151\144\40\75\40\x61\x73\x74\x2e\164\x65\x72\155\137\x69\x64\51\x20", $wpdb->terms); return $eagqsqeocaokmsim; } public function swkiksosqocyawoe() : string { return "\x44\111\x53\124\x49\x4e\103\124"; } public function igywascsieokkows($gqgemcmoicmgaqie) { if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto wmmggowmigekyoso; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::isksgwqqcmwaccaq, []); if ($sciomagaqmgggsiu) { goto qqewoyookaskiuek; } $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::mokucseeaqkgkuqy, []); qqewoyookaskiuek: switch ($this->sesseaeskwkeucks()) { case self::ygoseweigiigswiu: if (!(self::yyoaeaaaquyigiim === $ccamueccusigaaio && $sciomagaqmgggsiu)) { goto miyqyeiwquwsacsm; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sciomagaqmgggsiu); miyqyeiwquwsacsm: goto ssoucoucsgccekwe; case self::qgmuskygocwmouos: if ($ccamueccusigaaio && in_array($ccamueccusigaaio, $sciomagaqmgggsiu)) { goto eegqyykygiccaoeo; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sciomagaqmgggsiu); goto ywqgcegomwaiuquc; eegqyykygiccaoeo: $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $ccamueccusigaaio); ywqgcegomwaiuquc: goto ssoucoucsgccekwe; } qkcyqocqqwmqgqww: ssoucoucsgccekwe: wmmggowmigekyoso: return $gqgemcmoicmgaqie; } public function yscgoewkoaiywmos($sogksuscggsicmac) { if (!($this->iemckwasmaugwcwi() && in_array($this->sesseaeskwkeucks(), [self::ygoseweigiigswiu, self::ucoiewcoucauqwko]))) { goto foeeqckqsyockkak; } global $wp_query; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); if (!(self::emcyuiagkcgsckma === $ccamueccusigaaio || $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($ccamueccusigaaio))) { goto oqugqwcyomiaaoqu; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); $suaemuyiacqyugsm = max(1, $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(self::kkcqmwgccaygggcu, 1)); $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gmskcsaawiuegywk, [self::ocsomysosuqaimuc, self::qgciomgukmcwscqw]); if (!(self::emcyuiagkcgsckma !== $ccamueccusigaaio)) { goto soqqemyioggmoakg; } $seyqqsmuaiegkeeq = $ccamueccusigaaio; soqqemyioggmoakg: $ywmkwiwkosakssii = [self::gmmygyiecgmggaam => $seyqqsmuaiegkeeq, self::eymwucuaaiiciymc => $weyoqgcesqgeusiu, self::mmqiaaskyikwwayy => $weyoqgcesqgeusiu > 0 ? ($suaemuyiacqyugsm - 1) * $weyoqgcesqgeusiu : 0]; $qwcmueausqgiwigy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\163"); switch ($ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa)) { case self::ouywiegeiyuaaawo: $ywmkwiwkosakssii[self::ouywiegeiyuaaawo] = $qwcmueausqgiwigy; goto acaqummmoyiemqss; case self::ygoseweigiigswiu: $ywmkwiwkosakssii[self::yayciqueeakqwese] = $qwcmueausqgiwigy; goto acaqummmoyiemqss; default: case self::qescuiwgsyuikume: $ywmkwiwkosakssii[self::esomoymycskkguse] = $qwcmueausqgiwigy; goto acaqummmoyiemqss; } suswcqoyyqkkquuo: acaqummmoyiemqss: $aigykywoguoqmkao = new WP_Term_Query(); $sogksuscggsicmac = $aigykywoguoqmkao->query($ywmkwiwkosakssii); if (!$wp_query instanceof WP_Query) { goto eeqesooyqagwawae; } $wp_query->found_posts = $this->gqumoweqkmwuuomo($seyqqsmuaiegkeeq, $ywmkwiwkosakssii); $wp_query->max_num_pages = ceil($wp_query->found_posts / $wp_query->get(self::goqgcigmiawyauai)); eeqesooyqagwawae: oqugqwcyomiaaoqu: foeeqckqsyockkak: return $sogksuscggsicmac; } private function gqumoweqkmwuuomo($kesssewsiegssiya, $ywmkwiwkosakssii) : int { $count_args = $ywmkwiwkosakssii; unset($count_args[self::eymwucuaaiiciymc], $count_args[self::mmqiaaskyikwwayy]); return (int) wp_count_terms($kesssewsiegssiya, $count_args); } private function gouusicsisumuiei($gqgemcmoicmgaqie = null) : bool { $gouusicsisumuiei = false; if (!$this->iemckwasmaugwcwi()) { goto kymkucucyeoeikim; } if ($gqgemcmoicmgaqie) { goto iekumemscwieugqw; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; iekumemscwieugqw: if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query() && self::oimusiegakqgwosg !== $gqgemcmoicmgaqie->get("\x73", self::oimusiegakqgwosg))) { goto hoeeyiowekaeemko; } $gouusicsisumuiei = true; hoeeyiowekaeemko: kymkucucyeoeikim: return $gouusicsisumuiei; } }
