<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65785598c2485             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Search; use Pmpr\Common\Cover\Setting; use WP_Query; use WP_Term_Query; class Query extends Common { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\160\x72\145\137\147\145\x74\137\x70\x6f\163\164\x73", [$this, "\151\x67\x79\x77\141\163\143\163\151\x65\x6f\x6b\153\157\167\x73"], 0)->cecaguuoecmccuse("\160\157\x73\164\163\x5f\x73\145\141\162\x63\x68", [$this, "\167\141\x77\161\167\141\x6d\163\x75\165\165\155\x65\163\x6b\141"], 500, 2); $this->aqaqisyssqeomwom("\x67\145\164\x5f\163\x65\x61\x72\143\x68\137\x72\145\x73\165\154\x74", [$this, "\x79\x73\x63\147\157\x65\x77\x6b\157\141\x69\x79\167\x6d\157\163"]); } public function wawqwamsuuumeska($qwcmueausqgiwigy, $gqgemcmoicmgaqie) { global $wpdb; if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto giuccakymqymawgk; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $cwomqsccicsqseiy = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ogkiaqsouugogsom); $wmsuioaookqmyqkw = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::kquocioeygiskksm); if (!($wmsuioaookqmyqkw || $cwomqsccicsqseiy)) { goto kwuckkyqaygwgcuy; } $qqmmggwcsmymegca = $gqgemcmoicmgaqie->query_vars; $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\x65\170\141\x63\164"]) ? '' : "\45"; $qwcmueausqgiwigy = ''; $_and = "\40\101\x4e\x44\40"; $_or = "\40\x4f\122\40"; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $eyyicwuomioiwoeu = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $wyqayqogsymumaqg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gsyiysyskygiwqmu, self::ygoseweigiigswiu); $iwewcwusemqaiggk = $aaycmcgqqqsysccs . $eyyicwuomioiwoeu->yqccgscwmeeyigkg($qqmmggwcsmymegca["\x73"] ?? '') . $aaycmcgqqqsysccs; $uqcswyskyumyyeew = ''; if (!$cwomqsccicsqseiy) { goto oeamoqweiueaueay; } if (!in_array($wyqayqogsymumaqg, [self::ygoseweigiigswiu, self::qescuiwgsyuikume])) { goto eweaaismksecwagy; } $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\x2e\160\157\163\164\137\x74\151\x74\154\145\40\x4c\111\x4b\x45\40\45\163", $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; eweaaismksecwagy: if (!in_array($wyqayqogsymumaqg, [self::ygoseweigiigswiu, self::ssmskyqgcmeiayco])) { goto icumkkykaoqycqqu; } $qwcmueausqgiwigy .= $uqcswyskyumyyeew; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\x2e\160\x6f\163\x74\137\x63\157\x6e\x74\x65\x6e\164\40\x4c\111\x4b\105\x20\x25\x73{$_or}{$wpdb->posts}\56\x70\x6f\163\164\x5f\x65\170\x63\145\162\160\164\40\x4c\x49\x4b\105\40\45\x73", $iwewcwusemqaiggk, $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; icumkkykaoqycqqu: $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\x70\157\x73\x74\137\161\165\x65\162\x79", $qwcmueausqgiwigy, $iwewcwusemqaiggk); oeamoqweiueaueay: $cniyckqcgyosooam = false; if (!is_numeric($ccamueccusigaaio)) { goto aoaqwygkaagiuuws; } $uyuaosigqymaqsaa = (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mwqguykeegesggge, []); if (in_array($ccamueccusigaaio, $uyuaosigqymaqsaa)) { goto awgmegueeqeyqamu; } if ($uyuaosigqymaqsaa) { goto kyiwsiakwgiwouyi; } $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($ccamueccusigaaio); if (!in_array($kesssewsiegssiya, (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ammgiseaaguqygig, []))) { goto owgsameoayaogsma; } $cniyckqcgyosooam = true; owgsameoayaogsma: kyiwsiakwgiwouyi: goto gqimwsyemoewagcy; awgmegueeqeyqamu: $cniyckqcgyosooam = true; gqimwsyemoewagcy: aoaqwygkaagiuuws: if (!$cniyckqcgyosooam) { goto esagiiawomyacuiw; } $qwcmueausqgiwigy = "\x28{$qwcmueausqgiwigy}\x29{$_and}"; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\x61\x73\x74\x2e\x74\x65\162\x6d\137\151\144\x20\x3d\x20\45\x73\51", $ccamueccusigaaio); esagiiawomyacuiw: if (!$wmsuioaookqmyqkw) { goto yggseoaommssscwo; } $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ewwmksgyikwikqye, []); if (!$seyqqsmuaiegkeeq) { goto iuwkiyimqmgguose; } $ogguokqeaguoyiuk = ''; $qycoeysqasckgycc = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa); foreach ($seyqqsmuaiegkeeq as $ieqocgiosekoeoqe) { $qwcmueausqgiwigy .= $uqcswyskyumyyeew . $ogguokqeaguoyiuk; switch ($qycoeysqasckgycc) { case self::ouywiegeiyuaaawo: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\x61\x73\x74\164\x2e\x74\x61\x78\x6f\156\x6f\155\x79\40\x3d\40\45\163{$_and}\x61\x73\164\56\x73\x6c\165\147\x20\114\x49\113\105\40\x25\x73\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto sksgcusuyqcwqswe; case self::ygoseweigiigswiu: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\141\163\x74\x74\56\164\141\x78\x6f\156\157\x6d\171\x20\x3d\40\45\163{$_and}\x28\141\163\164\56\x6e\141\x6d\145\x20\114\x49\x4b\105\x20\x25\x73\x20\157\x72\x20\141\x73\164\56\x73\154\165\x67\x20\x4c\111\x4b\x45\40\45\163\x29\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk, $iwewcwusemqaiggk); goto sksgcusuyqcwqswe; default: case self::qescuiwgsyuikume: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\141\163\x74\x74\56\x74\141\x78\x6f\156\157\x6d\171\x20\75\x20\x25\x73{$_and}\x61\x73\x74\56\x6e\141\x6d\x65\40\x4c\x49\113\x45\40\x25\x73\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto sksgcusuyqcwqswe; } ayceeyuocgowqwsa: sksgcusuyqcwqswe: $uqcswyskyumyyeew = ''; $ogguokqeaguoyiuk = $_or; qkyciyiwkmgkmquk: } maaisuqwkymeguys: iuwkiyimqmgguose: yggseoaommssscwo: if (!($wmsuioaookqmyqkw || $cniyckqcgyosooam)) { goto aeiemwacaiygemmg; } $this->cecaguuoecmccuse("\x70\157\163\x74\163\137\x6a\157\x69\x6e\x5f\x72\145\161\x75\145\163\164", [$this, "\x6b\147\x79\157\x79\x69\161\x71\157\143\x75\x6d\143\165\153\141"]); aeiemwacaiygemmg: if (empty($qwcmueausqgiwigy)) { goto oeusomaaeekakake; } $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . self::meieskyuuegwwcsy, $qwcmueausqgiwigy, $iwewcwusemqaiggk, $cwomqsccicsqseiy, $wmsuioaookqmyqkw, $gqgemcmoicmgaqie); $qwcmueausqgiwigy = "{$_and}\50{$qwcmueausqgiwigy}\51\40"; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto yyqygaokeccgugos; } $qwcmueausqgiwigy .= sprintf("\45\163\x28\x25\x73\x2e\160\157\x73\164\x5f\x70\141\163\x73\167\157\x72\x64\x20\75\40\x27\47\x29\x20", $_and, $wpdb->posts); yyqygaokeccgugos: oeusomaaeekakake: $this->cecaguuoecmccuse("\160\x6f\163\x74\163\137\144\151\x73\x74\x69\x6e\x63\x74\137\x72\145\161\x75\x65\x73\x74", [$this, "\163\167\x6b\151\x6b\x73\157\163\x71\x6f\143\171\x61\167\157\x65"]); kwuckkyqaygwgcuy: giuccakymqymawgk: return $qwcmueausqgiwigy; } public function kgyoyiqqocumcuka($eagqsqeocaokmsim) : string { global $wpdb; $eagqsqeocaokmsim .= sprintf("\x20\x4c\105\x46\x54\x20\x4a\117\111\x4e\x20\x25\163\x20\141\x73\164\x72\40\x4f\116\x20\50\45\x73\56\111\104\40\x3d\x20\x61\x73\164\162\x2e\x6f\142\152\145\x63\164\x5f\x69\144\x29\40", $wpdb->term_relationships, $wpdb->posts); $eagqsqeocaokmsim .= sprintf("\40\114\105\x46\x54\x20\x4a\117\111\116\40\x25\163\40\x61\x73\x74\164\x20\117\116\x20\50\x61\x73\x74\162\x2e\164\145\x72\x6d\137\164\x61\x78\x6f\156\157\155\171\137\x69\144\x20\75\x20\141\163\x74\164\x2e\164\145\162\x6d\x5f\x74\141\170\x6f\156\x6f\155\171\x5f\x69\144\51\40", $wpdb->term_taxonomy); $eagqsqeocaokmsim .= sprintf("\40\114\105\x46\124\40\112\x4f\x49\116\x20\45\x73\40\141\163\x74\40\117\116\x20\50\141\163\164\164\x2e\x74\x65\162\x6d\137\151\x64\x20\x3d\40\x61\x73\x74\56\164\145\162\155\137\x69\144\51\40", $wpdb->terms); return $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\152\157\x69\x6e\137\162\x65\161\165\x65\x73\164", $eagqsqeocaokmsim); } public function swkiksosqocyawoe() : string { return "\x44\x49\123\x54\111\x4e\103\124"; } public function igywascsieokkows($gqgemcmoicmgaqie) { if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto aumowowgewgqmwci; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::isksgwqqcmwaccaq, []); if ($sciomagaqmgggsiu) { goto sicgyiyiocyygkoc; } $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::mokucseeaqkgkuqy, []); sicgyiyiocyygkoc: switch ($this->sesseaeskwkeucks()) { case self::ygoseweigiigswiu: if (!(self::yyoaeaaaquyigiim === $ccamueccusigaaio && $sciomagaqmgggsiu)) { goto eqiiaokcgakicaye; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sciomagaqmgggsiu); eqiiaokcgakicaye: goto cyosacayacumuaks; case self::qgmuskygocwmouos: if ($ccamueccusigaaio && in_array($ccamueccusigaaio, $sciomagaqmgggsiu)) { goto gcucsowqoeiwmyyq; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sciomagaqmgggsiu); goto kyiuewcikkqagwwg; gcucsowqoeiwmyyq: $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $ccamueccusigaaio); kyiuewcikkqagwwg: goto cyosacayacumuaks; } ikcwmsgocyuqiumc: cyosacayacumuaks: aumowowgewgqmwci: return $gqgemcmoicmgaqie; } public function yscgoewkoaiywmos($sogksuscggsicmac) { if (!($this->iemckwasmaugwcwi() && in_array($this->sesseaeskwkeucks(), [self::ygoseweigiigswiu, self::ucoiewcoucauqwko]))) { goto iymaiwqimisgacmk; } global $wp_query; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); if (!(self::emcyuiagkcgsckma === $ccamueccusigaaio || $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($ccamueccusigaaio))) { goto qcssigmcayuyweiy; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); $suaemuyiacqyugsm = max(1, $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(self::kkcqmwgccaygggcu, 1)); $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gmskcsaawiuegywk, [self::ocsomysosuqaimuc, self::qgciomgukmcwscqw]); if (!(self::emcyuiagkcgsckma !== $ccamueccusigaaio)) { goto oasggeyceiyieuuo; } $seyqqsmuaiegkeeq = $ccamueccusigaaio; oasggeyceiyieuuo: $ywmkwiwkosakssii = [self::mkucwyayaakigquq => $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::smagkiasowyaaocq), self::gmmygyiecgmggaam => $seyqqsmuaiegkeeq, self::eymwucuaaiiciymc => $weyoqgcesqgeusiu, self::mmqiaaskyikwwayy => $weyoqgcesqgeusiu > 0 ? ($suaemuyiacqyugsm - 1) * $weyoqgcesqgeusiu : 0]; $qwcmueausqgiwigy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\163"); switch ($ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa)) { case self::ouywiegeiyuaaawo: $ywmkwiwkosakssii[self::ouywiegeiyuaaawo] = $qwcmueausqgiwigy; goto omuauimgkygcecsc; case self::ygoseweigiigswiu: $ywmkwiwkosakssii[self::yayciqueeakqwese] = $qwcmueausqgiwigy; goto omuauimgkygcecsc; default: case self::qescuiwgsyuikume: $ywmkwiwkosakssii[self::esomoymycskkguse] = $qwcmueausqgiwigy; goto omuauimgkygcecsc; } wwcqoeuwskquakwy: omuauimgkygcecsc: $aigykywoguoqmkao = new WP_Term_Query(); $sogksuscggsicmac = $aigykywoguoqmkao->query($ywmkwiwkosakssii); if (!$wp_query instanceof WP_Query) { goto quamuugoocyyceec; } $wp_query->found_posts = $this->gqumoweqkmwuuomo($seyqqsmuaiegkeeq, $ywmkwiwkosakssii); $wp_query->max_num_pages = ceil($wp_query->found_posts / $wp_query->get(self::goqgcigmiawyauai)); quamuugoocyyceec: qcssigmcayuyweiy: iymaiwqimisgacmk: return $sogksuscggsicmac; } private function gqumoweqkmwuuomo($kesssewsiegssiya, $ywmkwiwkosakssii) : int { $count_args = $ywmkwiwkosakssii; unset($count_args[self::eymwucuaaiiciymc], $count_args[self::mmqiaaskyikwwayy]); return (int) wp_count_terms($kesssewsiegssiya, $count_args); } private function gouusicsisumuiei($gqgemcmoicmgaqie = null) : bool { $gouusicsisumuiei = false; if (!$this->iemckwasmaugwcwi()) { goto ssywsaaqqaucesau; } if ($gqgemcmoicmgaqie) { goto mugscgugcogcasue; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; mugscgugcogcasue: if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query() && self::oimusiegakqgwosg !== $gqgemcmoicmgaqie->get("\163", self::oimusiegakqgwosg))) { goto qyyyycwaookqaoke; } $gouusicsisumuiei = true; qyyyycwaookqaoke: ssywsaaqqaucesau: return $gouusicsisumuiei; } }
