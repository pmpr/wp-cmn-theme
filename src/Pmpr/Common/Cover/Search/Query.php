<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64b299b35aaa5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Search; use Pmpr\Common\Cover\Setting; use WP_Query; use WP_Term_Query; class Query extends Common { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x70\162\x65\137\x67\145\164\x5f\x70\x6f\x73\164\x73", [$this, "\151\x67\171\167\x61\163\x63\163\x69\145\x6f\x6b\153\x6f\x77\x73"], 0)->cecaguuoecmccuse("\x70\157\x73\164\163\x5f\x73\145\x61\162\x63\x68", [$this, "\x77\141\x77\x71\x77\x61\155\163\x75\x75\x75\x6d\x65\163\153\x61"], 500, 2); $this->aqaqisyssqeomwom("\147\145\x74\137\x73\x65\x61\162\x63\150\x5f\162\x65\x73\165\154\164", [$this, "\x79\x73\x63\147\x6f\x65\x77\x6b\157\x61\x69\x79\x77\155\157\163"]); } public function wawqwamsuuumeska($qwcmueausqgiwigy, $gqgemcmoicmgaqie) { global $wpdb; if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto owgsameoayaogsma; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $cwomqsccicsqseiy = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ogkiaqsouugogsom); $wmsuioaookqmyqkw = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::kquocioeygiskksm); if (!($wmsuioaookqmyqkw || $cwomqsccicsqseiy)) { goto oeamoqweiueaueay; } $qqmmggwcsmymegca = $gqgemcmoicmgaqie->query_vars; $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\145\x78\x61\143\x74"]) ? '' : "\45"; $qwcmueausqgiwigy = ''; $_and = "\x20\x41\116\x44\40"; $_or = "\x20\117\122\40"; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $eyyicwuomioiwoeu = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $wyqayqogsymumaqg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gsyiysyskygiwqmu, self::ygoseweigiigswiu); $iwewcwusemqaiggk = $aaycmcgqqqsysccs . $eyyicwuomioiwoeu->yqccgscwmeeyigkg($qqmmggwcsmymegca["\163"] ?? '') . $aaycmcgqqqsysccs; $uqcswyskyumyyeew = ''; if (!$cwomqsccicsqseiy) { goto ceiuqsiqgiuiekem; } if (!in_array($wyqayqogsymumaqg, [self::ygoseweigiigswiu, self::qescuiwgsyuikume])) { goto gkqiqaqecmoogmaa; } $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\x2e\x70\x6f\x73\164\137\164\x69\164\x6c\x65\40\x4c\x49\x4b\105\40\x25\x73", $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; gkqiqaqecmoogmaa: if (!in_array($wyqayqogsymumaqg, [self::ygoseweigiigswiu, self::ssmskyqgcmeiayco])) { goto mceucsaeouuwyumm; } $qwcmueausqgiwigy .= $uqcswyskyumyyeew; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\x2e\160\x6f\163\164\x5f\x63\x6f\156\x74\x65\156\x74\40\114\x49\113\105\40\x25\x73{$_or}{$wpdb->posts}\x2e\160\x6f\163\x74\x5f\145\170\143\x65\x72\160\164\40\x4c\x49\x4b\105\x20\45\163", $iwewcwusemqaiggk, $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; mceucsaeouuwyumm: ceiuqsiqgiuiekem: $cniyckqcgyosooam = false; if (!is_numeric($ccamueccusigaaio)) { goto igmmqwyawcuuckkq; } $uyuaosigqymaqsaa = (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mwqguykeegesggge, []); if (in_array($ccamueccusigaaio, $uyuaosigqymaqsaa)) { goto isewysikysqewkis; } if ($uyuaosigqymaqsaa) { goto ugykmcouiwiscoqu; } $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($ccamueccusigaaio); if (!in_array($kesssewsiegssiya, (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ammgiseaaguqygig, []))) { goto gsymkkskwsgggoic; } $cniyckqcgyosooam = true; gsymkkskwsgggoic: ugykmcouiwiscoqu: goto wiwoiyoakywqyaiy; isewysikysqewkis: $cniyckqcgyosooam = true; wiwoiyoakywqyaiy: igmmqwyawcuuckkq: if (!$cniyckqcgyosooam) { goto eouwacqiommmeaqc; } $qwcmueausqgiwigy = "\x28{$qwcmueausqgiwigy}\51{$_and}"; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\x61\x73\164\56\164\145\x72\x6d\137\x69\x64\40\75\40\45\x73\51", $ccamueccusigaaio); eouwacqiommmeaqc: if (!$wmsuioaookqmyqkw) { goto syusgosewwkoagoq; } $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ewwmksgyikwikqye, []); if (!$seyqqsmuaiegkeeq) { goto egesuwkqkmaigaoe; } $ogguokqeaguoyiuk = ''; $qycoeysqasckgycc = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa); foreach ($seyqqsmuaiegkeeq as $ieqocgiosekoeoqe) { $qwcmueausqgiwigy .= $uqcswyskyumyyeew . $ogguokqeaguoyiuk; switch ($qycoeysqasckgycc) { case self::ouywiegeiyuaaawo: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\141\x73\164\164\56\164\x61\x78\x6f\x6e\x6f\155\171\x20\x3d\40\45\x73{$_and}\141\163\164\x2e\163\x6c\165\147\x20\114\x49\x4b\x45\40\x25\163\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto ykqsuiyyosyeyscc; case self::ygoseweigiigswiu: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\x61\163\x74\x74\x2e\x74\x61\x78\x6f\x6e\x6f\x6d\171\40\75\40\45\163{$_and}\50\141\163\x74\56\x6e\x61\x6d\x65\40\x4c\111\x4b\x45\x20\45\163\x20\x6f\162\40\141\x73\164\56\x73\x6c\x75\x67\x20\114\111\x4b\105\x20\x25\x73\x29\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk, $iwewcwusemqaiggk); goto ykqsuiyyosyeyscc; default: case self::qescuiwgsyuikume: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\141\163\164\x74\x2e\x74\x61\x78\x6f\x6e\157\155\171\40\x3d\40\x25\x73{$_and}\141\163\x74\x2e\x6e\141\x6d\145\40\x4c\x49\x4b\x45\40\x25\x73\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto ykqsuiyyosyeyscc; } ugogoekeckgcmuaw: ykqsuiyyosyeyscc: $uqcswyskyumyyeew = ''; $ogguokqeaguoyiuk = $_or; uscokkmquayiukag: } sqwuqegeiisoiiuq: egesuwkqkmaigaoe: syusgosewwkoagoq: if (!($wmsuioaookqmyqkw || $cniyckqcgyosooam)) { goto mcqucouuiuoagqwc; } $this->cecaguuoecmccuse("\160\x6f\x73\x74\x73\137\x6a\157\151\x6e\137\162\145\x71\x75\145\163\164", [$this, "\x6b\147\x79\157\x79\151\161\x71\x6f\x63\x75\x6d\x63\x75\153\x61"]); mcqucouuiuoagqwc: if (empty($qwcmueausqgiwigy)) { goto icumkkykaoqycqqu; } $qwcmueausqgiwigy = "{$_and}\50{$qwcmueausqgiwigy}\x29\40"; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto eweaaismksecwagy; } $qwcmueausqgiwigy .= sprintf("\x25\163\50\45\163\x2e\160\157\x73\x74\137\160\x61\163\163\167\157\162\x64\x20\x3d\40\x27\x27\x29\x20", $_and, $wpdb->posts); eweaaismksecwagy: icumkkykaoqycqqu: $this->cecaguuoecmccuse("\160\x6f\x73\x74\x73\137\144\x69\163\x74\x69\156\143\164\x5f\162\x65\161\165\145\x73\x74", [$this, "\x73\x77\x6b\x69\153\163\157\163\x71\x6f\143\x79\x61\167\x6f\x65"]); oeamoqweiueaueay: owgsameoayaogsma: return $qwcmueausqgiwigy; } public function kgyoyiqqocumcuka($eagqsqeocaokmsim) : string { global $wpdb; $eagqsqeocaokmsim .= sprintf("\40\114\105\106\124\x20\x4a\117\111\x4e\x20\45\x73\x20\x61\x73\164\x72\40\x4f\116\x20\50\45\163\x2e\x49\x44\x20\x3d\x20\141\163\x74\162\56\x6f\x62\x6a\x65\x63\x74\137\151\144\x29\x20", $wpdb->term_relationships, $wpdb->posts); $eagqsqeocaokmsim .= sprintf("\40\x4c\105\x46\124\x20\x4a\x4f\x49\x4e\x20\45\163\40\141\x73\x74\164\x20\x4f\x4e\40\x28\141\163\164\162\x2e\x74\145\162\x6d\137\x74\x61\170\x6f\156\157\x6d\x79\137\x69\144\x20\x3d\x20\x61\x73\x74\x74\56\x74\145\162\x6d\x5f\x74\x61\170\157\156\x6f\155\x79\137\151\144\x29\x20", $wpdb->term_taxonomy); $eagqsqeocaokmsim .= sprintf("\x20\114\105\106\124\40\x4a\x4f\111\116\x20\45\163\x20\141\163\x74\40\x4f\x4e\40\x28\141\163\164\x74\x2e\164\x65\162\155\137\151\144\40\x3d\40\141\x73\164\x2e\164\x65\x72\x6d\137\151\144\51\40", $wpdb->terms); return $eagqsqeocaokmsim; } public function swkiksosqocyawoe() : string { return "\104\111\123\x54\111\x4e\103\124"; } public function igywascsieokkows($gqgemcmoicmgaqie) { if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto qkyciyiwkmgkmquk; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::isksgwqqcmwaccaq, []); if ($sciomagaqmgggsiu) { goto kyiwsiakwgiwouyi; } $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::mokucseeaqkgkuqy, []); kyiwsiakwgiwouyi: switch ($this->sesseaeskwkeucks()) { case self::ygoseweigiigswiu: if (!(self::yyoaeaaaquyigiim === $ccamueccusigaaio && $sciomagaqmgggsiu)) { goto aoaqwygkaagiuuws; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sciomagaqmgggsiu); aoaqwygkaagiuuws: goto awgmegueeqeyqamu; case self::qgmuskygocwmouos: if ($ccamueccusigaaio && in_array($ccamueccusigaaio, $sciomagaqmgggsiu)) { goto esagiiawomyacuiw; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sciomagaqmgggsiu); goto maaisuqwkymeguys; esagiiawomyacuiw: $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $ccamueccusigaaio); maaisuqwkymeguys: goto awgmegueeqeyqamu; } gqimwsyemoewagcy: awgmegueeqeyqamu: qkyciyiwkmgkmquk: return $gqgemcmoicmgaqie; } public function yscgoewkoaiywmos($sogksuscggsicmac) { if (!($this->iemckwasmaugwcwi() && in_array($this->sesseaeskwkeucks(), [self::ygoseweigiigswiu, self::ucoiewcoucauqwko]))) { goto yyqygaokeccgugos; } global $wp_query; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); if (!(self::emcyuiagkcgsckma === $ccamueccusigaaio || $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($ccamueccusigaaio))) { goto aeiemwacaiygemmg; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); $suaemuyiacqyugsm = max(1, $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(self::kkcqmwgccaygggcu, 1)); $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gmskcsaawiuegywk, [self::ocsomysosuqaimuc, self::qgciomgukmcwscqw]); if (!(self::emcyuiagkcgsckma !== $ccamueccusigaaio)) { goto sksgcusuyqcwqswe; } $seyqqsmuaiegkeeq = $ccamueccusigaaio; sksgcusuyqcwqswe: $ywmkwiwkosakssii = [self::gmmygyiecgmggaam => $seyqqsmuaiegkeeq, self::eymwucuaaiiciymc => $weyoqgcesqgeusiu, self::mmqiaaskyikwwayy => $weyoqgcesqgeusiu > 0 ? ($suaemuyiacqyugsm - 1) * $weyoqgcesqgeusiu : 0]; $qwcmueausqgiwigy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\163"); switch ($ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa)) { case self::ouywiegeiyuaaawo: $ywmkwiwkosakssii[self::ouywiegeiyuaaawo] = $qwcmueausqgiwigy; goto ayceeyuocgowqwsa; case self::ygoseweigiigswiu: $ywmkwiwkosakssii[self::yayciqueeakqwese] = $qwcmueausqgiwigy; goto ayceeyuocgowqwsa; default: case self::qescuiwgsyuikume: $ywmkwiwkosakssii[self::esomoymycskkguse] = $qwcmueausqgiwigy; goto ayceeyuocgowqwsa; } iuwkiyimqmgguose: ayceeyuocgowqwsa: $aigykywoguoqmkao = new WP_Term_Query(); $sogksuscggsicmac = $aigykywoguoqmkao->query($ywmkwiwkosakssii); if (!$wp_query instanceof WP_Query) { goto yggseoaommssscwo; } $wp_query->found_posts = $this->gqumoweqkmwuuomo($seyqqsmuaiegkeeq, $ywmkwiwkosakssii); $wp_query->max_num_pages = ceil($wp_query->found_posts / $wp_query->get(self::goqgcigmiawyauai)); yggseoaommssscwo: aeiemwacaiygemmg: yyqygaokeccgugos: return $sogksuscggsicmac; } private function gqumoweqkmwuuomo($kesssewsiegssiya, $ywmkwiwkosakssii) : int { $count_args = $ywmkwiwkosakssii; unset($count_args[self::eymwucuaaiiciymc], $count_args[self::mmqiaaskyikwwayy]); return (int) wp_count_terms($kesssewsiegssiya, $count_args); } private function gouusicsisumuiei($gqgemcmoicmgaqie = null) : bool { $gouusicsisumuiei = false; if (!$this->iemckwasmaugwcwi()) { goto giuccakymqymawgk; } if ($gqgemcmoicmgaqie) { goto oeusomaaeekakake; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; oeusomaaeekakake: if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query() && self::oimusiegakqgwosg !== $gqgemcmoicmgaqie->get("\x73", self::oimusiegakqgwosg))) { goto kwuckkyqaygwgcuy; } $gouusicsisumuiei = true; kwuckkyqaygwgcuy: giuccakymqymawgk: return $gouusicsisumuiei; } }
