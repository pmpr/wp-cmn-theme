<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64519cf2706cb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Search; use Pmpr\Common\Cover\Setting; use WP_Query; use WP_Term_Query; class Query extends Common { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x70\x72\145\x5f\147\145\164\137\x70\157\x73\164\x73", [$this, "\x69\147\171\x77\x61\163\x63\163\x69\145\157\153\x6b\157\167\x73"], 0)->cecaguuoecmccuse("\160\x6f\x73\164\163\x5f\163\x65\x61\162\143\150", [$this, "\x77\x61\x77\161\x77\x61\155\x73\x75\x75\x75\x6d\x65\163\153\x61"], 500, 2); $this->aqaqisyssqeomwom("\147\145\164\137\163\x65\x61\x72\143\150\137\162\x65\163\x75\x6c\x74", [$this, "\171\x73\143\147\157\145\167\x6b\157\141\151\x79\x77\x6d\x6f\163"]); } public function wawqwamsuuumeska($qwcmueausqgiwigy, $gqgemcmoicmgaqie) { global $wpdb; if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto koiscokkkaimiecq; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $cwomqsccicsqseiy = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ogkiaqsouugogsom); $wmsuioaookqmyqkw = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::kquocioeygiskksm); if (!($wmsuioaookqmyqkw || $cwomqsccicsqseiy)) { goto cquecqekuucwoumw; } $qqmmggwcsmymegca = $gqgemcmoicmgaqie->query_vars; $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\x65\x78\141\143\x74"]) ? '' : "\x25"; $qwcmueausqgiwigy = ''; $_and = "\40\101\x4e\x44\x20"; $_or = "\40\117\122\40"; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $eyyicwuomioiwoeu = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $wyqayqogsymumaqg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gsyiysyskygiwqmu, self::ygoseweigiigswiu); $iwewcwusemqaiggk = $aaycmcgqqqsysccs . $eyyicwuomioiwoeu->yqccgscwmeeyigkg($qqmmggwcsmymegca["\x73"] ?? '') . $aaycmcgqqqsysccs; $uqcswyskyumyyeew = ''; if (!$cwomqsccicsqseiy) { goto micceocwuwkyusic; } if (!in_array($wyqayqogsymumaqg, [self::ygoseweigiigswiu, self::qescuiwgsyuikume])) { goto aukucaieceiwesmm; } $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\x2e\x70\157\163\x74\x5f\164\x69\x74\x6c\145\x20\114\111\113\x45\40\45\x73", $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; aukucaieceiwesmm: if (!in_array($wyqayqogsymumaqg, [self::ygoseweigiigswiu, self::ssmskyqgcmeiayco])) { goto kqyoakickmseyyeq; } $qwcmueausqgiwigy .= $uqcswyskyumyyeew; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\56\160\157\163\164\x5f\143\x6f\x6e\164\145\x6e\164\x20\x4c\111\x4b\x45\40\x25\x73{$_or}{$wpdb->posts}\56\160\157\x73\164\x5f\x65\x78\x63\145\162\x70\164\x20\114\x49\113\105\40\45\163", $iwewcwusemqaiggk, $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; kqyoakickmseyyeq: micceocwuwkyusic: $cniyckqcgyosooam = false; if (!is_numeric($ccamueccusigaaio)) { goto egaymskkosukqeao; } $uyuaosigqymaqsaa = (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mwqguykeegesggge, []); if (in_array($ccamueccusigaaio, $uyuaosigqymaqsaa)) { goto acggikioyeueeowg; } if ($uyuaosigqymaqsaa) { goto ykwasaaoeeiuomim; } $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($ccamueccusigaaio); if (!in_array($kesssewsiegssiya, (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ammgiseaaguqygig, []))) { goto iwueukqcywkiyqge; } $cniyckqcgyosooam = true; iwueukqcywkiyqge: ykwasaaoeeiuomim: goto cwikoaeqmmoimmso; acggikioyeueeowg: $cniyckqcgyosooam = true; cwikoaeqmmoimmso: egaymskkosukqeao: if (!$cniyckqcgyosooam) { goto kaiesowkgwogqseg; } $qwcmueausqgiwigy = "\50{$qwcmueausqgiwigy}\x29{$_and}"; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\141\163\164\56\x74\145\x72\155\137\x69\x64\x20\75\x20\x25\163\x29", $ccamueccusigaaio); kaiesowkgwogqseg: if (!$wmsuioaookqmyqkw) { goto csieaismmmocyacu; } $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ewwmksgyikwikqye, []); if (!$seyqqsmuaiegkeeq) { goto omykokikgocoikec; } $ogguokqeaguoyiuk = ''; $qycoeysqasckgycc = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa); foreach ($seyqqsmuaiegkeeq as $ieqocgiosekoeoqe) { $qwcmueausqgiwigy .= $uqcswyskyumyyeew . $ogguokqeaguoyiuk; switch ($qycoeysqasckgycc) { case self::ouywiegeiyuaaawo: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\141\163\x74\x74\56\164\141\x78\x6f\156\x6f\155\171\x20\x3d\x20\x25\x73{$_and}\x61\x73\x74\56\x73\x6c\x75\x67\40\x4c\x49\113\105\40\45\163\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto kgmeiwiakwicgkkk; case self::ygoseweigiigswiu: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\x61\163\164\x74\x2e\164\x61\x78\x6f\x6e\157\155\171\x20\x3d\x20\45\163{$_and}\50\141\x73\164\56\156\141\155\x65\x20\x4c\111\x4b\x45\x20\45\x73\x20\x6f\x72\x20\141\x73\x74\56\x73\154\165\x67\40\114\111\113\105\40\x25\x73\51\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk, $iwewcwusemqaiggk); goto kgmeiwiakwicgkkk; default: case self::qescuiwgsyuikume: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\141\x73\x74\x74\x2e\x74\141\170\x6f\156\x6f\155\171\40\75\40\x25\x73{$_and}\x61\163\164\x2e\156\x61\x6d\x65\x20\x4c\x49\x4b\x45\40\45\x73\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto kgmeiwiakwicgkkk; } suuskagowwgsouqw: kgmeiwiakwicgkkk: $uqcswyskyumyyeew = ''; $ogguokqeaguoyiuk = $_or; cwswueuqoamqasya: } kicwiowcogmauwiy: omykokikgocoikec: csieaismmmocyacu: if (!($wmsuioaookqmyqkw || $cniyckqcgyosooam)) { goto aquqkiggamaoegoo; } $this->cecaguuoecmccuse("\160\157\x73\164\x73\137\152\x6f\x69\156\137\162\145\161\165\x65\x73\164", [$this, "\153\x67\x79\157\x79\151\x71\161\157\x63\165\x6d\143\x75\x6b\x61"]); aquqkiggamaoegoo: if (empty($qwcmueausqgiwigy)) { goto agemwookwseyycqo; } $qwcmueausqgiwigy = "{$_and}\50{$qwcmueausqgiwigy}\x29\x20"; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto mykiyqcqiegkiqys; } $qwcmueausqgiwigy .= sprintf("\45\163\x28\x25\163\x2e\x70\x6f\163\164\x5f\x70\x61\x73\x73\167\x6f\162\144\40\75\40\x27\x27\x29\40", $_and, $wpdb->posts); mykiyqcqiegkiqys: agemwookwseyycqo: $this->cecaguuoecmccuse("\x70\157\x73\164\163\137\144\x69\163\164\151\156\x63\164\x5f\x72\x65\x71\x75\x65\x73\164", [$this, "\163\167\153\151\x6b\163\x6f\x73\161\x6f\x63\x79\141\167\157\x65"]); cquecqekuucwoumw: koiscokkkaimiecq: return $qwcmueausqgiwigy; } public function kgyoyiqqocumcuka($eagqsqeocaokmsim) : string { global $wpdb; $eagqsqeocaokmsim .= sprintf("\x20\x4c\105\x46\x54\40\112\117\x49\116\x20\x25\163\40\141\x73\x74\x72\40\117\116\x20\50\45\163\56\x49\x44\40\x3d\x20\x61\x73\164\x72\56\x6f\142\152\145\143\x74\x5f\151\144\x29\x20", $wpdb->term_relationships, $wpdb->posts); $eagqsqeocaokmsim .= sprintf("\x20\114\105\x46\x54\x20\x4a\117\111\116\x20\x25\x73\40\141\x73\x74\164\40\x4f\x4e\x20\50\141\x73\x74\x72\x2e\164\145\x72\155\x5f\x74\141\170\x6f\156\x6f\155\171\137\151\144\x20\75\x20\141\163\164\x74\56\164\x65\162\155\x5f\x74\x61\170\157\156\157\x6d\171\137\x69\144\51\40", $wpdb->term_taxonomy); $eagqsqeocaokmsim .= sprintf("\40\x4c\x45\106\124\x20\x4a\x4f\111\x4e\x20\x25\163\40\x61\x73\164\40\x4f\x4e\x20\50\141\163\x74\x74\56\x74\x65\x72\x6d\x5f\x69\x64\x20\x3d\40\x61\x73\x74\56\164\145\162\155\x5f\151\x64\51\x20", $wpdb->terms); return $eagqsqeocaokmsim; } public function swkiksosqocyawoe() : string { return "\x44\111\x53\x54\111\116\103\x54"; } public function igywascsieokkows($gqgemcmoicmgaqie) { if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto mceucsaeouuwyumm; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::isksgwqqcmwaccaq, []); if ($sciomagaqmgggsiu) { goto owuuuiekkaeoeacq; } $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::mokucseeaqkgkuqy, []); owuuuiekkaeoeacq: switch ($this->sesseaeskwkeucks()) { case self::ygoseweigiigswiu: if (!(self::yyoaeaaaquyigiim === $ccamueccusigaaio && $sciomagaqmgggsiu)) { goto mqimkwickkgqqeoi; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sciomagaqmgggsiu); mqimkwickkgqqeoi: goto saauykgakaeiyoua; case self::qgmuskygocwmouos: if ($ccamueccusigaaio && in_array($ccamueccusigaaio, $sciomagaqmgggsiu)) { goto kwyimqumkuuyaiku; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sciomagaqmgggsiu); goto gkqiqaqecmoogmaa; kwyimqumkuuyaiku: $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $ccamueccusigaaio); gkqiqaqecmoogmaa: goto saauykgakaeiyoua; } qwemkcoaseywkuuc: saauykgakaeiyoua: mceucsaeouuwyumm: return $gqgemcmoicmgaqie; } public function yscgoewkoaiywmos($sogksuscggsicmac) { if (!($this->iemckwasmaugwcwi() && in_array($this->sesseaeskwkeucks(), [self::ygoseweigiigswiu, self::ucoiewcoucauqwko]))) { goto igmmqwyawcuuckkq; } global $wp_query; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); if (!(self::emcyuiagkcgsckma === $ccamueccusigaaio || $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($ccamueccusigaaio))) { goto wiwoiyoakywqyaiy; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); $suaemuyiacqyugsm = max(1, $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(self::kkcqmwgccaygggcu, 1)); $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gmskcsaawiuegywk, [self::ocsomysosuqaimuc, self::qgciomgukmcwscqw]); if (!(self::emcyuiagkcgsckma !== $ccamueccusigaaio)) { goto ceiuqsiqgiuiekem; } $seyqqsmuaiegkeeq = $ccamueccusigaaio; ceiuqsiqgiuiekem: $ywmkwiwkosakssii = [self::gmmygyiecgmggaam => $seyqqsmuaiegkeeq, self::eymwucuaaiiciymc => $weyoqgcesqgeusiu, self::mmqiaaskyikwwayy => $weyoqgcesqgeusiu > 0 ? ($suaemuyiacqyugsm - 1) * $weyoqgcesqgeusiu : 0]; $qwcmueausqgiwigy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\x73"); switch ($ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa)) { case self::ouywiegeiyuaaawo: $ywmkwiwkosakssii[self::ouywiegeiyuaaawo] = $qwcmueausqgiwigy; goto gsymkkskwsgggoic; case self::ygoseweigiigswiu: $ywmkwiwkosakssii[self::yayciqueeakqwese] = $qwcmueausqgiwigy; goto gsymkkskwsgggoic; default: case self::qescuiwgsyuikume: $ywmkwiwkosakssii[self::esomoymycskkguse] = $qwcmueausqgiwigy; goto gsymkkskwsgggoic; } ugykmcouiwiscoqu: gsymkkskwsgggoic: $aigykywoguoqmkao = new WP_Term_Query(); $sogksuscggsicmac = $aigykywoguoqmkao->query($ywmkwiwkosakssii); if (!$wp_query instanceof WP_Query) { goto isewysikysqewkis; } $wp_query->found_posts = $this->gqumoweqkmwuuomo($seyqqsmuaiegkeeq, $ywmkwiwkosakssii); $wp_query->max_num_pages = ceil($wp_query->found_posts / $wp_query->get(self::goqgcigmiawyauai)); isewysikysqewkis: wiwoiyoakywqyaiy: igmmqwyawcuuckkq: return $sogksuscggsicmac; } private function gqumoweqkmwuuomo($kesssewsiegssiya, $ywmkwiwkosakssii) : int { $count_args = $ywmkwiwkosakssii; unset($count_args[self::eymwucuaaiiciymc], $count_args[self::mmqiaaskyikwwayy]); return (int) wp_count_terms($kesssewsiegssiya, $count_args); } private function gouusicsisumuiei($gqgemcmoicmgaqie = null) : bool { $gouusicsisumuiei = false; if (!$this->iemckwasmaugwcwi()) { goto uscokkmquayiukag; } if ($gqgemcmoicmgaqie) { goto eouwacqiommmeaqc; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; eouwacqiommmeaqc: if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query() && self::oimusiegakqgwosg !== $gqgemcmoicmgaqie->get("\163", self::oimusiegakqgwosg))) { goto sqwuqegeiisoiiuq; } $gouusicsisumuiei = true; sqwuqegeiisoiiuq: uscokkmquayiukag: return $gouusicsisumuiei; } }
