<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             662d6d105d6a3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Search; use Pmpr\Common\Cover\Setting; use WP_Query; use WP_Term_Query; class Query extends Common { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\160\x72\x65\x5f\x67\x65\164\x5f\160\157\163\164\x73", [$this, "\x69\x67\171\x77\x61\163\143\163\x69\145\x6f\x6b\x6b\x6f\167\163"], 0)->cecaguuoecmccuse("\x70\157\x73\164\x73\x5f\163\x65\141\162\143\150", [$this, "\x77\x61\x77\x71\x77\141\x6d\x73\x75\165\165\155\145\x73\153\141"], 500, 2); $this->aqaqisyssqeomwom("\x67\145\164\137\x73\x65\x61\162\x63\x68\137\162\145\163\x75\154\x74", [$this, "\x79\163\x63\147\157\145\x77\x6b\x6f\x61\151\171\x77\155\157\163"]); } public function wawqwamsuuumeska($qwcmueausqgiwigy, $gqgemcmoicmgaqie) { global $wpdb; if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto mqimkwickkgqqeoi; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $cwomqsccicsqseiy = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ogkiaqsouugogsom); $wmsuioaookqmyqkw = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::kquocioeygiskksm); if (!($wmsuioaookqmyqkw || $cwomqsccicsqseiy)) { goto qwemkcoaseywkuuc; } $qqmmggwcsmymegca = $gqgemcmoicmgaqie->query_vars; $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\145\170\x61\143\164"]) ? '' : "\x25"; $qwcmueausqgiwigy = ''; $_and = "\40\101\x4e\104\x20"; $_or = "\x20\x4f\122\x20"; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $eyyicwuomioiwoeu = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $wyqayqogsymumaqg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gsyiysyskygiwqmu, self::ygoseweigiigswiu); $iwewcwusemqaiggk = $aaycmcgqqqsysccs . $eyyicwuomioiwoeu->yqccgscwmeeyigkg($qqmmggwcsmymegca["\x73"] ?? '') . $aaycmcgqqqsysccs; $uqcswyskyumyyeew = ''; if (!$cwomqsccicsqseiy) { goto cwikoaeqmmoimmso; } if (!in_array($wyqayqogsymumaqg, [self::ygoseweigiigswiu, self::qescuiwgsyuikume])) { goto ykwasaaoeeiuomim; } $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\56\160\157\163\x74\x5f\164\151\x74\x6c\x65\40\114\x49\113\x45\x20\x25\x73", $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; ykwasaaoeeiuomim: if (!in_array($wyqayqogsymumaqg, [self::ygoseweigiigswiu, self::ssmskyqgcmeiayco])) { goto acggikioyeueeowg; } $qwcmueausqgiwigy .= $uqcswyskyumyyeew; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\56\x70\x6f\163\x74\x5f\143\x6f\156\x74\x65\156\164\40\114\111\x4b\x45\40\45\163{$_or}{$wpdb->posts}\56\x70\157\x73\164\137\x65\170\x63\x65\x72\160\x74\40\114\111\x4b\105\x20\45\x73", $iwewcwusemqaiggk, $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; acggikioyeueeowg: $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\160\x6f\x73\164\137\x71\x75\145\x72\x79", $qwcmueausqgiwigy, $iwewcwusemqaiggk); cwikoaeqmmoimmso: $cniyckqcgyosooam = false; if (!is_numeric($ccamueccusigaaio)) { goto kgmeiwiakwicgkkk; } $uyuaosigqymaqsaa = (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mwqguykeegesggge, []); if (in_array($ccamueccusigaaio, $uyuaosigqymaqsaa)) { goto kicwiowcogmauwiy; } if ($uyuaosigqymaqsaa) { goto kaiesowkgwogqseg; } $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($ccamueccusigaaio); if (!in_array($kesssewsiegssiya, (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ammgiseaaguqygig, []))) { goto egaymskkosukqeao; } $cniyckqcgyosooam = true; egaymskkosukqeao: kaiesowkgwogqseg: goto cwswueuqoamqasya; kicwiowcogmauwiy: $cniyckqcgyosooam = true; cwswueuqoamqasya: kgmeiwiakwicgkkk: if (!$cniyckqcgyosooam) { goto suuskagowwgsouqw; } $qwcmueausqgiwigy = "\x28{$qwcmueausqgiwigy}\51{$_and}"; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\141\163\x74\56\164\145\162\x6d\x5f\x69\x64\x20\x3d\40\x25\163\x29", $ccamueccusigaaio); suuskagowwgsouqw: if (!$wmsuioaookqmyqkw) { goto cquecqekuucwoumw; } $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ewwmksgyikwikqye, []); if (!$seyqqsmuaiegkeeq) { goto agemwookwseyycqo; } $ogguokqeaguoyiuk = ''; $qycoeysqasckgycc = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa); foreach ($seyqqsmuaiegkeeq as $ieqocgiosekoeoqe) { $qwcmueausqgiwigy .= $uqcswyskyumyyeew . $ogguokqeaguoyiuk; switch ($qycoeysqasckgycc) { case self::ouywiegeiyuaaawo: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\141\163\x74\164\56\x74\x61\170\x6f\156\x6f\x6d\171\x20\x3d\x20\x25\x73{$_and}\141\x73\x74\x2e\x73\154\165\147\x20\x4c\x49\x4b\105\40\45\163\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto aquqkiggamaoegoo; case self::ygoseweigiigswiu: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\x61\x73\164\164\56\164\141\170\x6f\156\x6f\155\171\x20\x3d\x20\45\163{$_and}\x28\141\x73\164\56\x6e\141\x6d\x65\40\114\x49\113\105\40\x25\x73\40\x6f\162\x20\141\163\164\56\163\154\x75\147\x20\114\111\x4b\105\x20\x25\x73\51\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk, $iwewcwusemqaiggk); goto aquqkiggamaoegoo; default: case self::qescuiwgsyuikume: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\x61\163\164\x74\x2e\164\x61\170\x6f\x6e\157\155\x79\x20\x3d\40\x25\x73{$_and}\x61\x73\x74\x2e\156\141\x6d\x65\40\114\111\x4b\x45\x20\x25\163\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto aquqkiggamaoegoo; } mykiyqcqiegkiqys: aquqkiggamaoegoo: $uqcswyskyumyyeew = ''; $ogguokqeaguoyiuk = $_or; csieaismmmocyacu: } omykokikgocoikec: agemwookwseyycqo: cquecqekuucwoumw: if (!($wmsuioaookqmyqkw || $cniyckqcgyosooam)) { goto koiscokkkaimiecq; } $this->cecaguuoecmccuse("\160\157\x73\164\163\137\152\157\151\x6e\x5f\x72\x65\161\165\x65\x73\x74", [$this, "\153\147\x79\157\x79\x69\x71\161\157\143\165\155\x63\x75\x6b\141"]); koiscokkkaimiecq: if (empty($qwcmueausqgiwigy)) { goto saauykgakaeiyoua; } $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . self::meieskyuuegwwcsy, $qwcmueausqgiwigy, $iwewcwusemqaiggk, $cwomqsccicsqseiy, $wmsuioaookqmyqkw, $gqgemcmoicmgaqie); $qwcmueausqgiwigy = "{$_and}\50{$qwcmueausqgiwigy}\51\x20"; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto owuuuiekkaeoeacq; } $qwcmueausqgiwigy .= sprintf("\x25\163\50\x25\163\x2e\160\x6f\x73\x74\137\x70\141\x73\163\167\x6f\x72\x64\x20\75\x20\47\x27\51\40", $_and, $wpdb->posts); owuuuiekkaeoeacq: saauykgakaeiyoua: $this->cecaguuoecmccuse("\160\x6f\x73\164\163\x5f\x64\x69\163\x74\151\156\x63\x74\x5f\x72\145\x71\x75\145\163\164", [$this, "\163\x77\x6b\151\x6b\163\x6f\163\x71\x6f\x63\171\x61\x77\157\x65"]); qwemkcoaseywkuuc: mqimkwickkgqqeoi: return $qwcmueausqgiwigy; } public function kgyoyiqqocumcuka($eagqsqeocaokmsim) : string { global $wpdb; $eagqsqeocaokmsim .= sprintf("\x20\114\105\106\124\40\x4a\x4f\x49\116\x20\45\163\40\x61\x73\164\x72\40\x4f\x4e\x20\50\45\163\56\x49\104\x20\x3d\40\x61\163\x74\x72\x2e\157\142\x6a\x65\x63\164\x5f\151\144\x29\40", $wpdb->term_relationships, $wpdb->posts); $eagqsqeocaokmsim .= sprintf("\x20\114\105\106\x54\40\x4a\117\111\x4e\40\x25\x73\x20\141\x73\164\x74\x20\117\x4e\40\50\x61\163\x74\162\56\164\145\162\155\x5f\x74\x61\170\x6f\x6e\157\x6d\171\x5f\151\144\x20\75\40\x61\163\164\x74\x2e\x74\x65\x72\x6d\137\x74\141\x78\157\156\x6f\155\171\137\151\144\x29\40", $wpdb->term_taxonomy); $eagqsqeocaokmsim .= sprintf("\x20\114\x45\x46\124\x20\x4a\x4f\111\x4e\40\x25\163\40\141\x73\164\x20\117\x4e\x20\50\x61\163\164\x74\x2e\164\145\x72\155\x5f\x69\144\40\75\40\x61\163\164\56\164\145\x72\155\137\x69\x64\x29\40", $wpdb->terms); return $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\x6a\x6f\151\x6e\x5f\162\x65\161\165\145\163\x74", $eagqsqeocaokmsim); } public function swkiksosqocyawoe() : string { return "\104\x49\x53\124\x49\x4e\103\124"; } public function igywascsieokkows($gqgemcmoicmgaqie) { if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto isewysikysqewkis; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::isksgwqqcmwaccaq, []); if ($sciomagaqmgggsiu) { goto kwyimqumkuuyaiku; } $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::mokucseeaqkgkuqy, []); kwyimqumkuuyaiku: switch ($this->sesseaeskwkeucks()) { case self::ygoseweigiigswiu: if (!(self::yyoaeaaaquyigiim === $ccamueccusigaaio && $sciomagaqmgggsiu)) { goto ceiuqsiqgiuiekem; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sciomagaqmgggsiu); ceiuqsiqgiuiekem: goto gkqiqaqecmoogmaa; case self::qgmuskygocwmouos: if ($ccamueccusigaaio && in_array($ccamueccusigaaio, $sciomagaqmgggsiu)) { goto gsymkkskwsgggoic; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sciomagaqmgggsiu); goto ugykmcouiwiscoqu; gsymkkskwsgggoic: $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $ccamueccusigaaio); ugykmcouiwiscoqu: goto gkqiqaqecmoogmaa; } mceucsaeouuwyumm: gkqiqaqecmoogmaa: isewysikysqewkis: return $gqgemcmoicmgaqie; } public function yscgoewkoaiywmos($sogksuscggsicmac) { if (!($this->iemckwasmaugwcwi() && in_array($this->sesseaeskwkeucks(), [self::ygoseweigiigswiu, self::ucoiewcoucauqwko]))) { goto ykqsuiyyosyeyscc; } global $wp_query; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); if (!(self::emcyuiagkcgsckma === $ccamueccusigaaio || $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($ccamueccusigaaio))) { goto uscokkmquayiukag; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); $suaemuyiacqyugsm = max(1, $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(self::kkcqmwgccaygggcu, 1)); $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gmskcsaawiuegywk, [self::ocsomysosuqaimuc, self::qgciomgukmcwscqw]); if (!(self::emcyuiagkcgsckma !== $ccamueccusigaaio)) { goto wiwoiyoakywqyaiy; } $seyqqsmuaiegkeeq = $ccamueccusigaaio; wiwoiyoakywqyaiy: $ywmkwiwkosakssii = [self::mkucwyayaakigquq => $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::smagkiasowyaaocq), self::gmmygyiecgmggaam => $seyqqsmuaiegkeeq, self::eymwucuaaiiciymc => $weyoqgcesqgeusiu, self::mmqiaaskyikwwayy => $weyoqgcesqgeusiu > 0 ? ($suaemuyiacqyugsm - 1) * $weyoqgcesqgeusiu : 0]; $qwcmueausqgiwigy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\x73"); switch ($ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa)) { case self::ouywiegeiyuaaawo: $ywmkwiwkosakssii[self::ouywiegeiyuaaawo] = $qwcmueausqgiwigy; goto igmmqwyawcuuckkq; case self::ygoseweigiigswiu: $ywmkwiwkosakssii[self::yayciqueeakqwese] = $qwcmueausqgiwigy; goto igmmqwyawcuuckkq; default: case self::qescuiwgsyuikume: $ywmkwiwkosakssii[self::esomoymycskkguse] = $qwcmueausqgiwigy; goto igmmqwyawcuuckkq; } eouwacqiommmeaqc: igmmqwyawcuuckkq: $aigykywoguoqmkao = new WP_Term_Query(); $sogksuscggsicmac = $aigykywoguoqmkao->query($ywmkwiwkosakssii); if (!$wp_query instanceof WP_Query) { goto sqwuqegeiisoiiuq; } $wp_query->found_posts = $this->gqumoweqkmwuuomo($seyqqsmuaiegkeeq, $ywmkwiwkosakssii); $wp_query->max_num_pages = ceil($wp_query->found_posts / $wp_query->get(self::goqgcigmiawyauai)); sqwuqegeiisoiiuq: uscokkmquayiukag: ykqsuiyyosyeyscc: return $sogksuscggsicmac; } private function gqumoweqkmwuuomo($kesssewsiegssiya, $ywmkwiwkosakssii) : int { $count_args = $ywmkwiwkosakssii; unset($count_args[self::eymwucuaaiiciymc], $count_args[self::mmqiaaskyikwwayy]); return (int) wp_count_terms($kesssewsiegssiya, $count_args); } private function gouusicsisumuiei($gqgemcmoicmgaqie = null) : bool { $gouusicsisumuiei = false; if (!$this->iemckwasmaugwcwi()) { goto syusgosewwkoagoq; } if ($gqgemcmoicmgaqie) { goto ugogoekeckgcmuaw; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; ugogoekeckgcmuaw: if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query() && self::oimusiegakqgwosg !== $gqgemcmoicmgaqie->get("\163", self::oimusiegakqgwosg))) { goto egesuwkqkmaigaoe; } $gouusicsisumuiei = true; egesuwkqkmaigaoe: syusgosewwkoagoq: return $gouusicsisumuiei; } }
