<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             653e69c3c4f44             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Search; use Pmpr\Common\Cover\Setting; use WP_Query; use WP_Term_Query; class Query extends Common { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\160\x72\x65\137\147\145\x74\x5f\x70\x6f\163\x74\163", [$this, "\151\x67\x79\167\141\163\143\163\x69\145\x6f\153\x6b\x6f\167\163"], 0)->cecaguuoecmccuse("\160\157\163\164\x73\x5f\163\145\141\162\143\150", [$this, "\x77\x61\167\x71\167\141\x6d\x73\165\x75\165\155\145\163\153\141"], 500, 2); $this->aqaqisyssqeomwom("\147\x65\164\137\163\x65\x61\x72\143\150\x5f\162\x65\x73\x75\154\164", [$this, "\171\x73\143\147\x6f\145\x77\x6b\x6f\x61\151\x79\x77\x6d\x6f\x73"]); } public function wawqwamsuuumeska($qwcmueausqgiwigy, $gqgemcmoicmgaqie) { global $wpdb; if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto kceuusiekagyeoys; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $cwomqsccicsqseiy = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ogkiaqsouugogsom); $wmsuioaookqmyqkw = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::kquocioeygiskksm); if (!($wmsuioaookqmyqkw || $cwomqsccicsqseiy)) { goto eekaiaeqewiqkkgm; } $qqmmggwcsmymegca = $gqgemcmoicmgaqie->query_vars; $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\145\x78\x61\x63\x74"]) ? '' : "\x25"; $qwcmueausqgiwigy = ''; $_and = "\x20\x41\116\104\x20"; $_or = "\x20\117\122\x20"; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $eyyicwuomioiwoeu = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $wyqayqogsymumaqg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gsyiysyskygiwqmu, self::ygoseweigiigswiu); $iwewcwusemqaiggk = $aaycmcgqqqsysccs . $eyyicwuomioiwoeu->yqccgscwmeeyigkg($qqmmggwcsmymegca["\x73"] ?? '') . $aaycmcgqqqsysccs; $uqcswyskyumyyeew = ''; if (!$cwomqsccicsqseiy) { goto mimacwyuueomgwwy; } if (!in_array($wyqayqogsymumaqg, [self::ygoseweigiigswiu, self::qescuiwgsyuikume])) { goto ekoqieigyoeyauqa; } $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\x2e\x70\157\163\x74\x5f\164\151\164\x6c\145\x20\x4c\111\x4b\x45\x20\x25\163", $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; ekoqieigyoeyauqa: if (!in_array($wyqayqogsymumaqg, [self::ygoseweigiigswiu, self::ssmskyqgcmeiayco])) { goto cuwcsamuuqyuyqsu; } $qwcmueausqgiwigy .= $uqcswyskyumyyeew; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\x2e\160\x6f\x73\x74\x5f\x63\157\156\164\145\156\164\40\x4c\111\113\105\x20\45\163{$_or}{$wpdb->posts}\56\x70\x6f\x73\164\x5f\145\170\143\145\162\160\164\x20\x4c\x49\x4b\x45\40\45\163", $iwewcwusemqaiggk, $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; cuwcsamuuqyuyqsu: $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\160\x6f\x73\164\137\161\x75\x65\162\171", $qwcmueausqgiwigy, $iwewcwusemqaiggk); mimacwyuueomgwwy: $cniyckqcgyosooam = false; if (!is_numeric($ccamueccusigaaio)) { goto cuommomwmsackoqc; } $uyuaosigqymaqsaa = (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mwqguykeegesggge, []); if (in_array($ccamueccusigaaio, $uyuaosigqymaqsaa)) { goto iqsgossweywksoia; } if ($uyuaosigqymaqsaa) { goto igwkcikeyoowosoi; } $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($ccamueccusigaaio); if (!in_array($kesssewsiegssiya, (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ammgiseaaguqygig, []))) { goto ksckqkmwiqggykke; } $cniyckqcgyosooam = true; ksckqkmwiqggykke: igwkcikeyoowosoi: goto awaqksikyomsuaeo; iqsgossweywksoia: $cniyckqcgyosooam = true; awaqksikyomsuaeo: cuommomwmsackoqc: if (!$cniyckqcgyosooam) { goto ggeoqeowscwkeumy; } $qwcmueausqgiwigy = "\50{$qwcmueausqgiwigy}\51{$_and}"; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\141\x73\x74\56\x74\145\162\x6d\137\151\x64\40\x3d\40\45\163\x29", $ccamueccusigaaio); ggeoqeowscwkeumy: if (!$wmsuioaookqmyqkw) { goto jsmisuccwyukksgc; } $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ewwmksgyikwikqye, []); if (!$seyqqsmuaiegkeeq) { goto ukwoswyyogmsygqg; } $ogguokqeaguoyiuk = ''; $qycoeysqasckgycc = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa); foreach ($seyqqsmuaiegkeeq as $ieqocgiosekoeoqe) { $qwcmueausqgiwigy .= $uqcswyskyumyyeew . $ogguokqeaguoyiuk; switch ($qycoeysqasckgycc) { case self::ouywiegeiyuaaawo: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\x61\163\164\164\56\x74\x61\170\x6f\156\157\155\x79\40\x3d\x20\x25\x73{$_and}\141\163\x74\56\x73\x6c\165\147\x20\x4c\x49\113\105\x20\x25\x73\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto uqcsksaywyqeumig; case self::ygoseweigiigswiu: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\x61\x73\164\164\56\164\x61\170\157\156\157\155\x79\x20\75\x20\45\x73{$_and}\50\x61\x73\x74\56\156\141\155\x65\x20\x4c\x49\x4b\x45\40\x25\x73\x20\x6f\162\40\141\163\x74\x2e\163\x6c\x75\x67\x20\x4c\x49\x4b\x45\40\45\163\51\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk, $iwewcwusemqaiggk); goto uqcsksaywyqeumig; default: case self::qescuiwgsyuikume: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\x61\163\x74\x74\56\x74\x61\x78\x6f\x6e\x6f\155\x79\x20\x3d\x20\45\x73{$_and}\141\x73\x74\56\156\x61\155\145\x20\114\111\113\x45\x20\x25\x73\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto uqcsksaywyqeumig; } yggmaskeguaqkusc: uqcsksaywyqeumig: $uqcswyskyumyyeew = ''; $ogguokqeaguoyiuk = $_or; uwaimsisescsgyqk: } qyeswawykmasuqye: ukwoswyyogmsygqg: jsmisuccwyukksgc: if (!($wmsuioaookqmyqkw || $cniyckqcgyosooam)) { goto kwmiwaecqcgiaqye; } $this->cecaguuoecmccuse("\160\157\163\x74\x73\137\x6a\157\x69\156\x5f\162\145\x71\165\x65\x73\164", [$this, "\153\x67\171\157\171\151\x71\x71\x6f\143\x75\x6d\x63\165\x6b\141"]); kwmiwaecqcgiaqye: if (empty($qwcmueausqgiwigy)) { goto gkoaeuekqockuoiq; } $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . self::meieskyuuegwwcsy, $qwcmueausqgiwigy, $iwewcwusemqaiggk, $cwomqsccicsqseiy, $wmsuioaookqmyqkw, $gqgemcmoicmgaqie); $qwcmueausqgiwigy = "{$_and}\50{$qwcmueausqgiwigy}\51\x20"; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto yqicwmekwuoywyus; } $qwcmueausqgiwigy .= sprintf("\45\x73\x28\45\163\x2e\160\157\163\x74\137\x70\141\x73\x73\x77\x6f\x72\x64\40\75\x20\47\47\x29\x20", $_and, $wpdb->posts); yqicwmekwuoywyus: gkoaeuekqockuoiq: $this->cecaguuoecmccuse("\160\157\x73\164\163\137\x64\151\163\x74\151\x6e\x63\x74\137\162\x65\x71\x75\x65\163\x74", [$this, "\163\167\153\151\x6b\163\157\x73\161\x6f\x63\171\x61\x77\157\x65"]); eekaiaeqewiqkkgm: kceuusiekagyeoys: return $qwcmueausqgiwigy; } public function kgyoyiqqocumcuka($eagqsqeocaokmsim) : string { global $wpdb; $eagqsqeocaokmsim .= sprintf("\x20\114\x45\x46\124\x20\112\x4f\x49\116\40\x25\163\x20\141\163\x74\x72\x20\x4f\x4e\x20\50\45\163\x2e\x49\104\40\x3d\40\141\x73\x74\x72\x2e\x6f\x62\152\x65\x63\x74\x5f\x69\144\x29\40", $wpdb->term_relationships, $wpdb->posts); $eagqsqeocaokmsim .= sprintf("\x20\x4c\x45\106\x54\40\112\x4f\x49\x4e\40\45\163\x20\x61\x73\x74\x74\x20\x4f\x4e\40\x28\141\x73\x74\162\x2e\x74\x65\162\x6d\x5f\x74\141\x78\x6f\156\157\155\171\x5f\151\x64\x20\75\x20\141\163\x74\164\x2e\164\145\x72\x6d\137\x74\x61\x78\157\156\157\x6d\171\137\151\144\51\40", $wpdb->term_taxonomy); $eagqsqeocaokmsim .= sprintf("\40\x4c\x45\x46\124\40\x4a\x4f\111\116\x20\45\x73\x20\141\x73\x74\40\x4f\116\x20\50\x61\x73\164\164\56\x74\145\x72\155\137\x69\x64\40\75\x20\141\x73\164\56\164\x65\x72\x6d\x5f\x69\x64\x29\x20", $wpdb->terms); return $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\x6a\157\151\x6e\x5f\x72\x65\161\165\x65\163\164", $eagqsqeocaokmsim); } public function swkiksosqocyawoe() : string { return "\x44\x49\x53\x54\x49\116\x43\x54"; } public function igywascsieokkows($gqgemcmoicmgaqie) { if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto qksckewucmosemuo; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::isksgwqqcmwaccaq, []); if ($sciomagaqmgggsiu) { goto uyeyscsaigimsqwq; } $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::mokucseeaqkgkuqy, []); uyeyscsaigimsqwq: switch ($this->sesseaeskwkeucks()) { case self::ygoseweigiigswiu: if (!(self::yyoaeaaaquyigiim === $ccamueccusigaaio && $sciomagaqmgggsiu)) { goto esqwswmoegiqcckg; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sciomagaqmgggsiu); esqwswmoegiqcckg: goto mwieyyqamgwicgco; case self::qgmuskygocwmouos: if ($ccamueccusigaaio && in_array($ccamueccusigaaio, $sciomagaqmgggsiu)) { goto qmokwkocmcyeyesc; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sciomagaqmgggsiu); goto mosuacsuaasssciu; qmokwkocmcyeyesc: $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $ccamueccusigaaio); mosuacsuaasssciu: goto mwieyyqamgwicgco; } wkiymcoqqiigqaaw: mwieyyqamgwicgco: qksckewucmosemuo: return $gqgemcmoicmgaqie; } public function yscgoewkoaiywmos($sogksuscggsicmac) { if (!($this->iemckwasmaugwcwi() && in_array($this->sesseaeskwkeucks(), [self::ygoseweigiigswiu, self::ucoiewcoucauqwko]))) { goto usyckeewsgwaysam; } global $wp_query; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); if (!(self::emcyuiagkcgsckma === $ccamueccusigaaio || $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($ccamueccusigaaio))) { goto skwusmoyomgqkimm; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); $suaemuyiacqyugsm = max(1, $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(self::kkcqmwgccaygggcu, 1)); $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gmskcsaawiuegywk, [self::ocsomysosuqaimuc, self::qgciomgukmcwscqw]); if (!(self::emcyuiagkcgsckma !== $ccamueccusigaaio)) { goto kmooekeyemqgucci; } $seyqqsmuaiegkeeq = $ccamueccusigaaio; kmooekeyemqgucci: $ywmkwiwkosakssii = [self::mkucwyayaakigquq => $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::smagkiasowyaaocq), self::gmmygyiecgmggaam => $seyqqsmuaiegkeeq, self::eymwucuaaiiciymc => $weyoqgcesqgeusiu, self::mmqiaaskyikwwayy => $weyoqgcesqgeusiu > 0 ? ($suaemuyiacqyugsm - 1) * $weyoqgcesqgeusiu : 0]; $qwcmueausqgiwigy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\163"); switch ($ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa)) { case self::ouywiegeiyuaaawo: $ywmkwiwkosakssii[self::ouywiegeiyuaaawo] = $qwcmueausqgiwigy; goto skuuyysooocugyww; case self::ygoseweigiigswiu: $ywmkwiwkosakssii[self::yayciqueeakqwese] = $qwcmueausqgiwigy; goto skuuyysooocugyww; default: case self::qescuiwgsyuikume: $ywmkwiwkosakssii[self::esomoymycskkguse] = $qwcmueausqgiwigy; goto skuuyysooocugyww; } cmmusgkieoqyymgs: skuuyysooocugyww: $aigykywoguoqmkao = new WP_Term_Query(); $sogksuscggsicmac = $aigykywoguoqmkao->query($ywmkwiwkosakssii); if (!$wp_query instanceof WP_Query) { goto mkgmaguyswskyioa; } $wp_query->found_posts = $this->gqumoweqkmwuuomo($seyqqsmuaiegkeeq, $ywmkwiwkosakssii); $wp_query->max_num_pages = ceil($wp_query->found_posts / $wp_query->get(self::goqgcigmiawyauai)); mkgmaguyswskyioa: skwusmoyomgqkimm: usyckeewsgwaysam: return $sogksuscggsicmac; } private function gqumoweqkmwuuomo($kesssewsiegssiya, $ywmkwiwkosakssii) : int { $count_args = $ywmkwiwkosakssii; unset($count_args[self::eymwucuaaiiciymc], $count_args[self::mmqiaaskyikwwayy]); return (int) wp_count_terms($kesssewsiegssiya, $count_args); } private function gouusicsisumuiei($gqgemcmoicmgaqie = null) : bool { $gouusicsisumuiei = false; if (!$this->iemckwasmaugwcwi()) { goto cysgqimowcqoqqsc; } if ($gqgemcmoicmgaqie) { goto gicuuwuuuwumyooa; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; gicuuwuuuwumyooa: if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query() && self::oimusiegakqgwosg !== $gqgemcmoicmgaqie->get("\x73", self::oimusiegakqgwosg))) { goto kakkuyeccaacewyo; } $gouusicsisumuiei = true; kakkuyeccaacewyo: cysgqimowcqoqqsc: return $gouusicsisumuiei; } }
