<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6575ea95bb6b2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Search; use Pmpr\Common\Cover\Setting; use WP_Query; use WP_Term_Query; class Query extends Common { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x70\162\145\x5f\x67\x65\x74\137\x70\157\163\164\163", [$this, "\x69\x67\x79\167\141\x73\x63\163\x69\x65\x6f\153\x6b\x6f\x77\x73"], 0)->cecaguuoecmccuse("\160\x6f\163\164\163\137\x73\x65\141\x72\x63\x68", [$this, "\167\x61\167\x71\167\x61\x6d\163\165\165\x75\155\145\x73\x6b\141"], 500, 2); $this->aqaqisyssqeomwom("\x67\145\164\137\x73\x65\141\x72\x63\150\x5f\x72\145\163\x75\x6c\164", [$this, "\171\163\x63\147\x6f\145\167\153\x6f\x61\151\x79\x77\x6d\x6f\x73"]); } public function wawqwamsuuumeska($qwcmueausqgiwigy, $gqgemcmoicmgaqie) { global $wpdb; if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto giuccakymqymawgk; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $cwomqsccicsqseiy = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ogkiaqsouugogsom); $wmsuioaookqmyqkw = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::kquocioeygiskksm); if (!($wmsuioaookqmyqkw || $cwomqsccicsqseiy)) { goto kwuckkyqaygwgcuy; } $qqmmggwcsmymegca = $gqgemcmoicmgaqie->query_vars; $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\x65\170\x61\143\164"]) ? '' : "\45"; $qwcmueausqgiwigy = ''; $_and = "\40\x41\x4e\x44\x20"; $_or = "\x20\x4f\122\40"; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $eyyicwuomioiwoeu = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $wyqayqogsymumaqg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gsyiysyskygiwqmu, self::ygoseweigiigswiu); $iwewcwusemqaiggk = $aaycmcgqqqsysccs . $eyyicwuomioiwoeu->yqccgscwmeeyigkg($qqmmggwcsmymegca["\163"] ?? '') . $aaycmcgqqqsysccs; $uqcswyskyumyyeew = ''; if (!$cwomqsccicsqseiy) { goto oeamoqweiueaueay; } if (!in_array($wyqayqogsymumaqg, [self::ygoseweigiigswiu, self::qescuiwgsyuikume])) { goto eweaaismksecwagy; } $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\x2e\160\x6f\163\x74\137\x74\151\x74\x6c\145\x20\x4c\x49\x4b\105\40\45\163", $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; eweaaismksecwagy: if (!in_array($wyqayqogsymumaqg, [self::ygoseweigiigswiu, self::ssmskyqgcmeiayco])) { goto icumkkykaoqycqqu; } $qwcmueausqgiwigy .= $uqcswyskyumyyeew; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\x2e\160\x6f\163\164\137\143\157\x6e\164\145\156\x74\x20\x4c\x49\x4b\105\x20\x25\163{$_or}{$wpdb->posts}\56\160\x6f\163\164\137\x65\x78\143\145\162\x70\164\40\114\x49\x4b\x45\40\45\163", $iwewcwusemqaiggk, $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; icumkkykaoqycqqu: $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\160\x6f\x73\x74\x5f\x71\165\x65\x72\171", $qwcmueausqgiwigy, $iwewcwusemqaiggk); oeamoqweiueaueay: $cniyckqcgyosooam = false; if (!is_numeric($ccamueccusigaaio)) { goto aoaqwygkaagiuuws; } $uyuaosigqymaqsaa = (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mwqguykeegesggge, []); if (in_array($ccamueccusigaaio, $uyuaosigqymaqsaa)) { goto awgmegueeqeyqamu; } if ($uyuaosigqymaqsaa) { goto kyiwsiakwgiwouyi; } $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($ccamueccusigaaio); if (!in_array($kesssewsiegssiya, (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ammgiseaaguqygig, []))) { goto owgsameoayaogsma; } $cniyckqcgyosooam = true; owgsameoayaogsma: kyiwsiakwgiwouyi: goto gqimwsyemoewagcy; awgmegueeqeyqamu: $cniyckqcgyosooam = true; gqimwsyemoewagcy: aoaqwygkaagiuuws: if (!$cniyckqcgyosooam) { goto esagiiawomyacuiw; } $qwcmueausqgiwigy = "\x28{$qwcmueausqgiwigy}\51{$_and}"; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\x61\x73\x74\56\164\x65\x72\155\x5f\x69\x64\x20\x3d\40\x25\163\x29", $ccamueccusigaaio); esagiiawomyacuiw: if (!$wmsuioaookqmyqkw) { goto yggseoaommssscwo; } $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ewwmksgyikwikqye, []); if (!$seyqqsmuaiegkeeq) { goto iuwkiyimqmgguose; } $ogguokqeaguoyiuk = ''; $qycoeysqasckgycc = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa); foreach ($seyqqsmuaiegkeeq as $ieqocgiosekoeoqe) { $qwcmueausqgiwigy .= $uqcswyskyumyyeew . $ogguokqeaguoyiuk; switch ($qycoeysqasckgycc) { case self::ouywiegeiyuaaawo: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\x61\163\x74\x74\56\x74\141\170\x6f\x6e\x6f\155\171\x20\75\40\x25\163{$_and}\141\x73\164\x2e\163\x6c\165\x67\40\x4c\x49\113\x45\40\45\x73\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto sksgcusuyqcwqswe; case self::ygoseweigiigswiu: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\x61\163\x74\164\56\164\x61\x78\x6f\156\157\155\171\40\75\x20\45\163{$_and}\x28\x61\x73\x74\56\156\141\x6d\145\40\x4c\x49\x4b\x45\40\x25\x73\40\x6f\162\40\x61\163\x74\56\163\x6c\x75\147\40\x4c\111\113\105\40\x25\x73\51\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk, $iwewcwusemqaiggk); goto sksgcusuyqcwqswe; default: case self::qescuiwgsyuikume: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\141\163\x74\164\x2e\164\141\x78\157\x6e\x6f\x6d\171\x20\75\40\x25\x73{$_and}\141\163\x74\56\156\141\x6d\145\40\x4c\x49\113\x45\40\x25\x73\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto sksgcusuyqcwqswe; } ayceeyuocgowqwsa: sksgcusuyqcwqswe: $uqcswyskyumyyeew = ''; $ogguokqeaguoyiuk = $_or; qkyciyiwkmgkmquk: } maaisuqwkymeguys: iuwkiyimqmgguose: yggseoaommssscwo: if (!($wmsuioaookqmyqkw || $cniyckqcgyosooam)) { goto aeiemwacaiygemmg; } $this->cecaguuoecmccuse("\x70\157\x73\164\x73\x5f\152\157\151\x6e\x5f\162\145\161\165\x65\163\164", [$this, "\153\147\x79\x6f\x79\151\161\161\157\143\165\155\143\x75\x6b\x61"]); aeiemwacaiygemmg: if (empty($qwcmueausqgiwigy)) { goto oeusomaaeekakake; } $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . self::meieskyuuegwwcsy, $qwcmueausqgiwigy, $iwewcwusemqaiggk, $cwomqsccicsqseiy, $wmsuioaookqmyqkw, $gqgemcmoicmgaqie); $qwcmueausqgiwigy = "{$_and}\x28{$qwcmueausqgiwigy}\51\40"; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto yyqygaokeccgugos; } $qwcmueausqgiwigy .= sprintf("\x25\x73\x28\45\x73\x2e\160\x6f\163\x74\137\160\141\x73\x73\x77\x6f\162\144\40\x3d\x20\x27\x27\x29\x20", $_and, $wpdb->posts); yyqygaokeccgugos: oeusomaaeekakake: $this->cecaguuoecmccuse("\x70\x6f\163\164\163\x5f\144\x69\x73\164\151\x6e\x63\164\137\162\x65\x71\165\145\x73\x74", [$this, "\x73\167\x6b\x69\x6b\x73\x6f\163\161\x6f\143\x79\x61\167\x6f\145"]); kwuckkyqaygwgcuy: giuccakymqymawgk: return $qwcmueausqgiwigy; } public function kgyoyiqqocumcuka($eagqsqeocaokmsim) : string { global $wpdb; $eagqsqeocaokmsim .= sprintf("\40\114\x45\x46\x54\x20\x4a\117\111\116\40\45\x73\40\141\163\x74\x72\x20\117\x4e\x20\x28\x25\x73\x2e\x49\104\x20\75\40\x61\163\x74\162\56\x6f\x62\152\x65\x63\164\x5f\x69\x64\x29\40", $wpdb->term_relationships, $wpdb->posts); $eagqsqeocaokmsim .= sprintf("\40\114\105\106\124\x20\x4a\x4f\111\116\x20\x25\163\x20\141\163\x74\x74\x20\117\116\x20\50\x61\x73\164\x72\56\164\145\x72\155\137\x74\141\x78\157\156\157\155\171\137\151\144\40\75\40\141\163\x74\x74\56\x74\x65\162\155\137\x74\x61\x78\157\x6e\x6f\x6d\x79\137\x69\144\51\40", $wpdb->term_taxonomy); $eagqsqeocaokmsim .= sprintf("\x20\114\x45\x46\124\x20\x4a\x4f\111\116\x20\x25\163\40\141\x73\164\x20\x4f\x4e\40\50\141\163\164\164\x2e\164\145\162\155\x5f\151\144\40\x3d\x20\x61\x73\x74\x2e\x74\145\x72\155\x5f\x69\144\51\x20", $wpdb->terms); return $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\152\x6f\151\156\137\162\x65\161\165\145\x73\164", $eagqsqeocaokmsim); } public function swkiksosqocyawoe() : string { return "\104\111\123\124\111\x4e\x43\124"; } public function igywascsieokkows($gqgemcmoicmgaqie) { if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto aumowowgewgqmwci; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::isksgwqqcmwaccaq, []); if ($sciomagaqmgggsiu) { goto sicgyiyiocyygkoc; } $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::mokucseeaqkgkuqy, []); sicgyiyiocyygkoc: switch ($this->sesseaeskwkeucks()) { case self::ygoseweigiigswiu: if (!(self::yyoaeaaaquyigiim === $ccamueccusigaaio && $sciomagaqmgggsiu)) { goto eqiiaokcgakicaye; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sciomagaqmgggsiu); eqiiaokcgakicaye: goto cyosacayacumuaks; case self::qgmuskygocwmouos: if ($ccamueccusigaaio && in_array($ccamueccusigaaio, $sciomagaqmgggsiu)) { goto gcucsowqoeiwmyyq; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sciomagaqmgggsiu); goto kyiuewcikkqagwwg; gcucsowqoeiwmyyq: $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $ccamueccusigaaio); kyiuewcikkqagwwg: goto cyosacayacumuaks; } ikcwmsgocyuqiumc: cyosacayacumuaks: aumowowgewgqmwci: return $gqgemcmoicmgaqie; } public function yscgoewkoaiywmos($sogksuscggsicmac) { if (!($this->iemckwasmaugwcwi() && in_array($this->sesseaeskwkeucks(), [self::ygoseweigiigswiu, self::ucoiewcoucauqwko]))) { goto iymaiwqimisgacmk; } global $wp_query; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); if (!(self::emcyuiagkcgsckma === $ccamueccusigaaio || $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($ccamueccusigaaio))) { goto qcssigmcayuyweiy; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); $suaemuyiacqyugsm = max(1, $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(self::kkcqmwgccaygggcu, 1)); $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gmskcsaawiuegywk, [self::ocsomysosuqaimuc, self::qgciomgukmcwscqw]); if (!(self::emcyuiagkcgsckma !== $ccamueccusigaaio)) { goto oasggeyceiyieuuo; } $seyqqsmuaiegkeeq = $ccamueccusigaaio; oasggeyceiyieuuo: $ywmkwiwkosakssii = [self::mkucwyayaakigquq => $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::smagkiasowyaaocq), self::gmmygyiecgmggaam => $seyqqsmuaiegkeeq, self::eymwucuaaiiciymc => $weyoqgcesqgeusiu, self::mmqiaaskyikwwayy => $weyoqgcesqgeusiu > 0 ? ($suaemuyiacqyugsm - 1) * $weyoqgcesqgeusiu : 0]; $qwcmueausqgiwigy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\x73"); switch ($ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa)) { case self::ouywiegeiyuaaawo: $ywmkwiwkosakssii[self::ouywiegeiyuaaawo] = $qwcmueausqgiwigy; goto omuauimgkygcecsc; case self::ygoseweigiigswiu: $ywmkwiwkosakssii[self::yayciqueeakqwese] = $qwcmueausqgiwigy; goto omuauimgkygcecsc; default: case self::qescuiwgsyuikume: $ywmkwiwkosakssii[self::esomoymycskkguse] = $qwcmueausqgiwigy; goto omuauimgkygcecsc; } wwcqoeuwskquakwy: omuauimgkygcecsc: $aigykywoguoqmkao = new WP_Term_Query(); $sogksuscggsicmac = $aigykywoguoqmkao->query($ywmkwiwkosakssii); if (!$wp_query instanceof WP_Query) { goto quamuugoocyyceec; } $wp_query->found_posts = $this->gqumoweqkmwuuomo($seyqqsmuaiegkeeq, $ywmkwiwkosakssii); $wp_query->max_num_pages = ceil($wp_query->found_posts / $wp_query->get(self::goqgcigmiawyauai)); quamuugoocyyceec: qcssigmcayuyweiy: iymaiwqimisgacmk: return $sogksuscggsicmac; } private function gqumoweqkmwuuomo($kesssewsiegssiya, $ywmkwiwkosakssii) : int { $count_args = $ywmkwiwkosakssii; unset($count_args[self::eymwucuaaiiciymc], $count_args[self::mmqiaaskyikwwayy]); return (int) wp_count_terms($kesssewsiegssiya, $count_args); } private function gouusicsisumuiei($gqgemcmoicmgaqie = null) : bool { $gouusicsisumuiei = false; if (!$this->iemckwasmaugwcwi()) { goto ssywsaaqqaucesau; } if ($gqgemcmoicmgaqie) { goto mugscgugcogcasue; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; mugscgugcogcasue: if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query() && self::oimusiegakqgwosg !== $gqgemcmoicmgaqie->get("\x73", self::oimusiegakqgwosg))) { goto qyyyycwaookqaoke; } $gouusicsisumuiei = true; qyyyycwaookqaoke: ssywsaaqqaucesau: return $gouusicsisumuiei; } }
