<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6620edcfcc58f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Search; use Pmpr\Common\Cover\Setting; use WP_Query; use WP_Term_Query; class Query extends Common { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\160\x72\x65\x5f\x67\x65\164\x5f\160\x6f\163\164\x73", [$this, "\151\147\171\x77\x61\163\x63\163\151\x65\157\x6b\x6b\x6f\x77\163"], 0)->cecaguuoecmccuse("\160\157\x73\164\x73\x5f\x73\145\141\x72\143\150", [$this, "\x77\141\x77\x71\167\x61\155\163\x75\x75\165\x6d\x65\x73\153\141"], 500, 2); $this->aqaqisyssqeomwom("\147\x65\x74\137\163\145\141\162\143\x68\137\162\x65\163\x75\154\x74", [$this, "\171\x73\143\147\157\145\x77\153\x6f\141\151\171\x77\155\x6f\163"]); } public function wawqwamsuuumeska($qwcmueausqgiwigy, $gqgemcmoicmgaqie) { global $wpdb; if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto mgcuiguaomoqwwwm; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $cwomqsccicsqseiy = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ogkiaqsouugogsom); $wmsuioaookqmyqkw = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::kquocioeygiskksm); if (!($wmsuioaookqmyqkw || $cwomqsccicsqseiy)) { goto smcguieygyqcaqgs; } $qqmmggwcsmymegca = $gqgemcmoicmgaqie->query_vars; $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\145\170\141\143\x74"]) ? '' : "\45"; $qwcmueausqgiwigy = ''; $_and = "\40\101\116\104\x20"; $_or = "\x20\x4f\122\40"; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $eyyicwuomioiwoeu = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $wyqayqogsymumaqg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gsyiysyskygiwqmu, self::ygoseweigiigswiu); $iwewcwusemqaiggk = $aaycmcgqqqsysccs . $eyyicwuomioiwoeu->yqccgscwmeeyigkg($qqmmggwcsmymegca["\163"] ?? '') . $aaycmcgqqqsysccs; $uqcswyskyumyyeew = ''; if (!$cwomqsccicsqseiy) { goto easqmyamcmeesgya; } if (!in_array($wyqayqogsymumaqg, [self::ygoseweigiigswiu, self::qescuiwgsyuikume])) { goto siecswkggyikqkga; } $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\x2e\160\157\163\164\137\164\x69\164\154\x65\x20\x4c\x49\113\105\x20\45\163", $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; siecswkggyikqkga: if (!in_array($wyqayqogsymumaqg, [self::ygoseweigiigswiu, self::ssmskyqgcmeiayco])) { goto qkuiwoqksgayqqmg; } $qwcmueausqgiwigy .= $uqcswyskyumyyeew; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\x2e\160\x6f\x73\x74\137\x63\157\x6e\x74\145\156\x74\x20\114\111\113\x45\40\x25\163{$_or}{$wpdb->posts}\x2e\160\x6f\163\164\137\x65\170\143\x65\x72\160\164\40\x4c\x49\113\105\40\45\x73", $iwewcwusemqaiggk, $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; qkuiwoqksgayqqmg: $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\x70\157\163\164\137\x71\x75\145\162\171", $qwcmueausqgiwigy, $iwewcwusemqaiggk); easqmyamcmeesgya: $cniyckqcgyosooam = false; if (!is_numeric($ccamueccusigaaio)) { goto yamyagayiooyeekg; } $uyuaosigqymaqsaa = (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mwqguykeegesggge, []); if (in_array($ccamueccusigaaio, $uyuaosigqymaqsaa)) { goto smiemmcqqukyguuu; } if ($uyuaosigqymaqsaa) { goto quaqmuusokiyqgqe; } $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($ccamueccusigaaio); if (!in_array($kesssewsiegssiya, (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ammgiseaaguqygig, []))) { goto yuqgwwmqwqiuwmaw; } $cniyckqcgyosooam = true; yuqgwwmqwqiuwmaw: quaqmuusokiyqgqe: goto iksewmsaugayqaqq; smiemmcqqukyguuu: $cniyckqcgyosooam = true; iksewmsaugayqaqq: yamyagayiooyeekg: if (!$cniyckqcgyosooam) { goto yoagcooekomeokwg; } $qwcmueausqgiwigy = "\50{$qwcmueausqgiwigy}\x29{$_and}"; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\x61\163\x74\x2e\164\145\162\155\137\x69\144\x20\x3d\40\45\163\x29", $ccamueccusigaaio); yoagcooekomeokwg: if (!$wmsuioaookqmyqkw) { goto skuqigsokaguscas; } $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ewwmksgyikwikqye, []); if (!$seyqqsmuaiegkeeq) { goto sgiwoiscywusgmmm; } $ogguokqeaguoyiuk = ''; $qycoeysqasckgycc = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa); foreach ($seyqqsmuaiegkeeq as $ieqocgiosekoeoqe) { $qwcmueausqgiwigy .= $uqcswyskyumyyeew . $ogguokqeaguoyiuk; switch ($qycoeysqasckgycc) { case self::ouywiegeiyuaaawo: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\x61\163\x74\x74\x2e\x74\x61\x78\157\x6e\157\x6d\x79\40\75\40\45\163{$_and}\x61\x73\164\x2e\163\154\x75\x67\40\x4c\x49\x4b\105\40\45\163\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto mqiiqkuaoekeuswo; case self::ygoseweigiigswiu: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\x61\x73\164\164\56\x74\x61\170\x6f\x6e\157\155\x79\x20\x3d\40\45\x73{$_and}\50\141\x73\x74\x2e\x6e\x61\155\145\40\x4c\111\113\105\40\45\163\40\x6f\x72\x20\x61\163\x74\56\x73\154\165\x67\40\114\111\113\105\40\45\163\51\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk, $iwewcwusemqaiggk); goto mqiiqkuaoekeuswo; default: case self::qescuiwgsyuikume: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\x61\x73\x74\x74\x2e\x74\x61\170\157\x6e\157\x6d\171\40\75\x20\x25\x73{$_and}\141\x73\164\56\156\141\155\x65\x20\114\x49\113\105\x20\45\163\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto mqiiqkuaoekeuswo; } qmoocweoekqueuyy: mqiiqkuaoekeuswo: $uqcswyskyumyyeew = ''; $ogguokqeaguoyiuk = $_or; ecouwqosmoyyqmkw: } eckcqesiokgwkkiw: sgiwoiscywusgmmm: skuqigsokaguscas: if (!($wmsuioaookqmyqkw || $cniyckqcgyosooam)) { goto quyogmwugsyoaaiu; } $this->cecaguuoecmccuse("\x70\157\x73\x74\x73\137\x6a\x6f\x69\x6e\x5f\x72\145\161\x75\x65\163\164", [$this, "\153\147\x79\157\171\x69\161\161\157\143\x75\x6d\143\x75\x6b\x61"]); quyogmwugsyoaaiu: if (empty($qwcmueausqgiwigy)) { goto wmumywgyyeagqoeq; } $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . self::meieskyuuegwwcsy, $qwcmueausqgiwigy, $iwewcwusemqaiggk, $cwomqsccicsqseiy, $wmsuioaookqmyqkw, $gqgemcmoicmgaqie); $qwcmueausqgiwigy = "{$_and}\x28{$qwcmueausqgiwigy}\51\40"; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto mmgmqogugasaqkgg; } $qwcmueausqgiwigy .= sprintf("\x25\163\x28\x25\x73\x2e\160\157\163\x74\137\160\x61\x73\163\x77\157\x72\144\40\x3d\40\47\x27\x29\x20", $_and, $wpdb->posts); mmgmqogugasaqkgg: wmumywgyyeagqoeq: $this->cecaguuoecmccuse("\x70\x6f\163\164\x73\x5f\144\151\x73\164\151\x6e\143\164\137\x72\x65\161\x75\145\163\164", [$this, "\x73\167\x6b\x69\153\x73\157\163\161\157\x63\x79\141\x77\x6f\145"]); smcguieygyqcaqgs: mgcuiguaomoqwwwm: return $qwcmueausqgiwigy; } public function kgyoyiqqocumcuka($eagqsqeocaokmsim) : string { global $wpdb; $eagqsqeocaokmsim .= sprintf("\40\x4c\x45\x46\124\x20\112\117\111\116\40\45\x73\40\x61\x73\164\162\x20\117\x4e\x20\50\45\x73\56\x49\104\x20\x3d\40\x61\163\164\162\56\157\x62\152\145\143\164\x5f\x69\x64\x29\x20", $wpdb->term_relationships, $wpdb->posts); $eagqsqeocaokmsim .= sprintf("\x20\x4c\105\x46\124\40\112\117\111\116\x20\45\x73\40\141\x73\164\164\x20\117\116\x20\50\141\x73\x74\x72\56\x74\x65\162\155\x5f\x74\x61\170\x6f\156\x6f\x6d\171\x5f\151\x64\x20\x3d\x20\141\163\164\x74\56\x74\145\162\x6d\137\x74\141\170\157\156\x6f\155\x79\x5f\x69\x64\51\x20", $wpdb->term_taxonomy); $eagqsqeocaokmsim .= sprintf("\40\x4c\x45\106\x54\40\x4a\x4f\111\116\40\x25\163\40\x61\x73\x74\40\x4f\116\x20\x28\x61\163\x74\164\x2e\x74\145\x72\155\x5f\x69\x64\x20\x3d\x20\141\x73\x74\56\164\x65\162\155\x5f\x69\144\51\x20", $wpdb->terms); return $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\x6a\157\x69\x6e\x5f\162\145\161\165\x65\163\164", $eagqsqeocaokmsim); } public function swkiksosqocyawoe() : string { return "\x44\111\123\124\x49\116\103\x54"; } public function igywascsieokkows($gqgemcmoicmgaqie) { if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto osmmoyqkqoucsgow; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::isksgwqqcmwaccaq, []); if ($sciomagaqmgggsiu) { goto eoyiumycaigawmmc; } $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::mokucseeaqkgkuqy, []); eoyiumycaigawmmc: switch ($this->sesseaeskwkeucks()) { case self::ygoseweigiigswiu: if (!(self::yyoaeaaaquyigiim === $ccamueccusigaaio && $sciomagaqmgggsiu)) { goto sckioayasmkcoeoo; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sciomagaqmgggsiu); sckioayasmkcoeoo: goto yuoeumyiuqkuouey; case self::qgmuskygocwmouos: if ($ccamueccusigaaio && in_array($ccamueccusigaaio, $sciomagaqmgggsiu)) { goto yssqmyoaokkksukc; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sciomagaqmgggsiu); goto ooqksueucyagyuoe; yssqmyoaokkksukc: $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $ccamueccusigaaio); ooqksueucyagyuoe: goto yuoeumyiuqkuouey; } eyiwqgqcsqakwqss: yuoeumyiuqkuouey: osmmoyqkqoucsgow: return $gqgemcmoicmgaqie; } public function yscgoewkoaiywmos($sogksuscggsicmac) { if (!($this->iemckwasmaugwcwi() && in_array($this->sesseaeskwkeucks(), [self::ygoseweigiigswiu, self::ucoiewcoucauqwko]))) { goto iwueukqcywkiyqge; } global $wp_query; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); if (!(self::emcyuiagkcgsckma === $ccamueccusigaaio || $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($ccamueccusigaaio))) { goto micceocwuwkyusic; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); $suaemuyiacqyugsm = max(1, $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(self::kkcqmwgccaygggcu, 1)); $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gmskcsaawiuegywk, [self::ocsomysosuqaimuc, self::qgciomgukmcwscqw]); if (!(self::emcyuiagkcgsckma !== $ccamueccusigaaio)) { goto wgiygcmqaokywuqa; } $seyqqsmuaiegkeeq = $ccamueccusigaaio; wgiygcmqaokywuqa: $ywmkwiwkosakssii = [self::mkucwyayaakigquq => $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::smagkiasowyaaocq), self::gmmygyiecgmggaam => $seyqqsmuaiegkeeq, self::eymwucuaaiiciymc => $weyoqgcesqgeusiu, self::mmqiaaskyikwwayy => $weyoqgcesqgeusiu > 0 ? ($suaemuyiacqyugsm - 1) * $weyoqgcesqgeusiu : 0]; $qwcmueausqgiwigy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\163"); switch ($ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa)) { case self::ouywiegeiyuaaawo: $ywmkwiwkosakssii[self::ouywiegeiyuaaawo] = $qwcmueausqgiwigy; goto iauwuugggmegwisk; case self::ygoseweigiigswiu: $ywmkwiwkosakssii[self::yayciqueeakqwese] = $qwcmueausqgiwigy; goto iauwuugggmegwisk; default: case self::qescuiwgsyuikume: $ywmkwiwkosakssii[self::esomoymycskkguse] = $qwcmueausqgiwigy; goto iauwuugggmegwisk; } aukucaieceiwesmm: iauwuugggmegwisk: $aigykywoguoqmkao = new WP_Term_Query(); $sogksuscggsicmac = $aigykywoguoqmkao->query($ywmkwiwkosakssii); if (!$wp_query instanceof WP_Query) { goto kqyoakickmseyyeq; } $wp_query->found_posts = $this->gqumoweqkmwuuomo($seyqqsmuaiegkeeq, $ywmkwiwkosakssii); $wp_query->max_num_pages = ceil($wp_query->found_posts / $wp_query->get(self::goqgcigmiawyauai)); kqyoakickmseyyeq: micceocwuwkyusic: iwueukqcywkiyqge: return $sogksuscggsicmac; } private function gqumoweqkmwuuomo($kesssewsiegssiya, $ywmkwiwkosakssii) : int { $count_args = $ywmkwiwkosakssii; unset($count_args[self::eymwucuaaiiciymc], $count_args[self::mmqiaaskyikwwayy]); return (int) wp_count_terms($kesssewsiegssiya, $count_args); } private function gouusicsisumuiei($gqgemcmoicmgaqie = null) : bool { $gouusicsisumuiei = false; if (!$this->iemckwasmaugwcwi()) { goto cwikoaeqmmoimmso; } if ($gqgemcmoicmgaqie) { goto ykwasaaoeeiuomim; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; ykwasaaoeeiuomim: if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query() && self::oimusiegakqgwosg !== $gqgemcmoicmgaqie->get("\163", self::oimusiegakqgwosg))) { goto acggikioyeueeowg; } $gouusicsisumuiei = true; acggikioyeueeowg: cwikoaeqmmoimmso: return $gouusicsisumuiei; } }
