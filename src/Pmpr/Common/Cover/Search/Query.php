<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbd6c83ea60             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Search; use Pmpr\Common\Cover\Setting\Setting as BaseSetting; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Query; use WP_Term_Query; class Query extends Common { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x70\162\x65\x5f\x67\x65\x74\x5f\160\157\163\x74\163", [$this, "\x69\x67\171\167\141\163\x63\163\151\145\157\x6b\x6b\x6f\167\x73"], 0)->cecaguuoecmccuse("\x70\x6f\163\x74\163\137\x73\x65\141\162\x63\150", [$this, "\x77\141\167\161\167\141\x6d\x73\165\165\x75\155\145\x73\x6b\141"], 500, 2); $this->aqaqisyssqeomwom("\147\145\x74\x5f\x73\145\x61\x72\x63\150\137\x72\x65\x73\x75\x6c\x74", [$this, "\x79\x73\x63\147\x6f\145\167\153\x6f\141\151\171\167\x6d\x6f\163"]); } public function wawqwamsuuumeska($qwcmueausqgiwigy, $gqgemcmoicmgaqie) { global $wpdb; if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto qmuwoecuacmkwgem; } $ykquycoiqesuckco = BaseSetting::symcgieuakksimmu(); $cwomqsccicsqseiy = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::ogkiaqsouugogsom); $wmsuioaookqmyqkw = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::kquocioeygiskksm); if (!($wmsuioaookqmyqkw || $cwomqsccicsqseiy)) { goto wakmayaoqoskekqy; } $qqmmggwcsmymegca = $gqgemcmoicmgaqie->query_vars; $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\x65\170\141\x63\x74"]) ? '' : "\45"; $qwcmueausqgiwigy = ''; $_and = "\x20\101\116\104\x20"; $_or = "\x20\117\122\x20"; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $eyyicwuomioiwoeu = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $wyqayqogsymumaqg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::gsyiysyskygiwqmu, Constants::ygoseweigiigswiu); $iwewcwusemqaiggk = $aaycmcgqqqsysccs . $eyyicwuomioiwoeu->yqccgscwmeeyigkg($qqmmggwcsmymegca["\x73"] ?? '') . $aaycmcgqqqsysccs; $uqcswyskyumyyeew = ''; if (!$cwomqsccicsqseiy) { goto ewymsmkkiksgwysk; } if (!in_array($wyqayqogsymumaqg, [Constants::ygoseweigiigswiu, Constants::qescuiwgsyuikume], true)) { goto syiqkaasoueowwui; } $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\56\160\x6f\163\x74\x5f\164\151\164\154\145\40\x4c\x49\113\105\x20\45\163", $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; syiqkaasoueowwui: if (!in_array($wyqayqogsymumaqg, [Constants::ygoseweigiigswiu, Constants::ssmskyqgcmeiayco], true)) { goto giaacoqqqsekcayy; } $qwcmueausqgiwigy .= $uqcswyskyumyyeew; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\56\160\157\x73\x74\137\x63\157\156\164\145\x6e\164\40\x4c\111\x4b\105\40\x25\163{$_or}{$wpdb->posts}\x2e\x70\x6f\163\x74\x5f\145\x78\x63\145\x72\160\164\x20\x4c\111\113\x45\40\45\163", $iwewcwusemqaiggk, $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; giaacoqqqsekcayy: $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\x70\157\163\x74\x5f\161\165\145\162\x79", $qwcmueausqgiwigy, $iwewcwusemqaiggk); ewymsmkkiksgwysk: $cniyckqcgyosooam = false; if (!is_numeric($ccamueccusigaaio)) { goto egyyiccaeeiooaua; } $uyuaosigqymaqsaa = (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::mwqguykeegesggge, []); if (in_array($ccamueccusigaaio, $uyuaosigqymaqsaa)) { goto gkyawqqcmigqgaiq; } if ($uyuaosigqymaqsaa) { goto wmywuusgukmmaams; } $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($ccamueccusigaaio); if (!in_array($kesssewsiegssiya, (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::ammgiseaaguqygig, []))) { goto cmegwsegsosyqcai; } $cniyckqcgyosooam = true; cmegwsegsosyqcai: wmywuusgukmmaams: goto ooeausyowguqicuo; gkyawqqcmigqgaiq: $cniyckqcgyosooam = true; ooeausyowguqicuo: egyyiccaeeiooaua: if (!$cniyckqcgyosooam) { goto scisgsyemmsekgos; } $qwcmueausqgiwigy = "\x28{$qwcmueausqgiwigy}\51{$_and}"; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\141\163\164\56\x74\x65\x72\155\x5f\x69\144\40\75\x20\x25\163\x29", $ccamueccusigaaio); scisgsyemmsekgos: if (!$wmsuioaookqmyqkw) { goto kqgcyoscsusgoaqi; } $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::ewwmksgyikwikqye, []); if (!$seyqqsmuaiegkeeq) { goto wgewmqieuamsoayy; } $ogguokqeaguoyiuk = ''; $qycoeysqasckgycc = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::mueuocgkoqqkgysa); foreach ($seyqqsmuaiegkeeq as $ieqocgiosekoeoqe) { $qwcmueausqgiwigy .= $uqcswyskyumyyeew . $ogguokqeaguoyiuk; switch ($qycoeysqasckgycc) { case Constants::ouywiegeiyuaaawo: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\141\x73\164\164\x2e\x74\141\x78\x6f\156\157\x6d\171\40\75\x20\45\163{$_and}\141\163\164\56\x73\x6c\x75\x67\40\x4c\x49\113\x45\40\x25\x73\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto omqiayeucoioqoao; case Constants::ygoseweigiigswiu: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\141\163\164\164\x2e\x74\141\170\157\x6e\157\x6d\x79\x20\75\40\x25\x73{$_and}\x28\141\163\164\56\156\141\x6d\x65\40\x4c\111\x4b\105\40\45\163\40\x6f\x72\40\141\163\164\x2e\x73\154\165\x67\x20\114\111\113\105\40\x25\x73\51\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk, $iwewcwusemqaiggk); goto omqiayeucoioqoao; default: case Constants::qescuiwgsyuikume: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\141\163\x74\164\56\x74\141\170\x6f\x6e\x6f\x6d\x79\x20\75\40\45\163{$_and}\x61\163\164\56\x6e\141\x6d\x65\x20\114\111\113\x45\x20\45\x73\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto omqiayeucoioqoao; } ugqaaewwmkocwwgy: omqiayeucoioqoao: $uqcswyskyumyyeew = ''; $ogguokqeaguoyiuk = $_or; igooksugieceoege: } cewmoqyysgsmuiya: wgewmqieuamsoayy: kqgcyoscsusgoaqi: if (!($wmsuioaookqmyqkw || $cniyckqcgyosooam)) { goto ueigkucgaucgeimc; } $this->cecaguuoecmccuse("\160\x6f\x73\x74\163\137\x6a\157\151\x6e\137\x72\145\161\165\x65\x73\164", [$this, "\153\x67\171\157\171\x69\x71\161\x6f\143\x75\x6d\143\165\153\141"]); ueigkucgaucgeimc: if (empty($qwcmueausqgiwigy)) { goto wkeuuycukmuqiaom; } $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . Constants::meieskyuuegwwcsy, $qwcmueausqgiwigy, $iwewcwusemqaiggk, $cwomqsccicsqseiy, $wmsuioaookqmyqkw, $gqgemcmoicmgaqie); $qwcmueausqgiwigy = "{$_and}\50{$qwcmueausqgiwigy}\x29\40"; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto sggawugoykqcmsug; } $qwcmueausqgiwigy .= sprintf("\45\163\50\x25\x73\x2e\160\157\x73\164\137\x70\x61\x73\163\167\157\162\144\40\x3d\40\x27\x27\51\40", $_and, $wpdb->posts); sggawugoykqcmsug: wkeuuycukmuqiaom: $this->cecaguuoecmccuse("\x70\157\x73\164\x73\137\144\x69\x73\164\151\156\143\164\x5f\162\x65\161\x75\145\163\164", [$this, "\x73\167\153\151\153\x73\157\163\x71\157\x63\x79\141\x77\157\145"]); wakmayaoqoskekqy: qmuwoecuacmkwgem: return $qwcmueausqgiwigy; } public function kgyoyiqqocumcuka($eagqsqeocaokmsim) : string { global $wpdb; $eagqsqeocaokmsim .= sprintf("\x20\114\105\106\x54\x20\x4a\x4f\x49\116\x20\x25\163\40\141\163\x74\x72\x20\117\x4e\x20\x28\x25\x73\x2e\x49\104\x20\75\x20\141\163\x74\x72\x2e\x6f\x62\x6a\x65\143\x74\x5f\x69\x64\51\x20", $wpdb->term_relationships, $wpdb->posts); $eagqsqeocaokmsim .= sprintf("\40\114\105\x46\124\40\112\x4f\x49\116\40\x25\163\x20\x61\163\x74\x74\x20\x4f\116\x20\50\x61\163\164\162\56\x74\145\162\x6d\137\x74\x61\170\157\156\157\155\x79\x5f\x69\x64\x20\75\x20\x61\x73\x74\164\x2e\164\145\x72\155\137\x74\141\x78\x6f\x6e\157\x6d\171\x5f\151\144\x29\x20", $wpdb->term_taxonomy); $eagqsqeocaokmsim .= sprintf("\x20\x4c\x45\106\124\40\x4a\117\111\116\40\x25\163\40\141\163\x74\40\x4f\x4e\x20\x28\141\163\164\164\56\x74\145\162\x6d\x5f\x69\x64\x20\x3d\40\x61\x73\164\56\164\145\x72\x6d\x5f\x69\x64\51\x20", $wpdb->terms); return $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\x6a\157\151\156\137\162\145\x71\x75\x65\163\x74", $eagqsqeocaokmsim); } public function swkiksosqocyawoe() : string { return "\104\111\x53\124\x49\116\x43\124"; } public function igywascsieokkows($gqgemcmoicmgaqie) { if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto qoqskyuuwueqkquk; } $ykquycoiqesuckco = BaseSetting::symcgieuakksimmu(); $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::isksgwqqcmwaccaq, []); if ($sciomagaqmgggsiu) { goto owmuceyswmgueasi; } $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::mokucseeaqkgkuqy, []); owmuceyswmgueasi: switch ($this->sesseaeskwkeucks()) { case Constants::ygoseweigiigswiu: if (!(Constants::yyoaeaaaquyigiim === $ccamueccusigaaio && $sciomagaqmgggsiu)) { goto eogwckcymuugikuy; } $gqgemcmoicmgaqie->set(Constants::uouymeyqasaeckso, $sciomagaqmgggsiu); eogwckcymuugikuy: goto mwsmsguqqkcwiiuk; case Constants::qgmuskygocwmouos: if ($ccamueccusigaaio && in_array($ccamueccusigaaio, $sciomagaqmgggsiu, true)) { goto msemumccgceyugmg; } $gqgemcmoicmgaqie->set(Constants::uouymeyqasaeckso, $sciomagaqmgggsiu); goto wagqgeqymeqoeuyi; msemumccgceyugmg: $gqgemcmoicmgaqie->set(Constants::uouymeyqasaeckso, $ccamueccusigaaio); wagqgeqymeqoeuyi: goto mwsmsguqqkcwiiuk; } eeauyscekuckoues: mwsmsguqqkcwiiuk: qoqskyuuwueqkquk: return $gqgemcmoicmgaqie; } public function yscgoewkoaiywmos($sogksuscggsicmac) { if (!($this->iemckwasmaugwcwi() && in_array($this->sesseaeskwkeucks(), [Constants::ygoseweigiigswiu, Constants::ucoiewcoucauqwko], true))) { goto qgeugwymkkiacwoc; } global $wp_query; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); if (!(Constants::emcyuiagkcgsckma === $ccamueccusigaaio || $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($ccamueccusigaaio))) { goto mqicocmqegwukkwg; } $ykquycoiqesuckco = BaseSetting::symcgieuakksimmu(); $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); $suaemuyiacqyugsm = max(1, $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(Constants::kkcqmwgccaygggcu, 1)); $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::gmskcsaawiuegywk, [Constants::ocsomysosuqaimuc, Constants::qgciomgukmcwscqw]); if (!(Constants::emcyuiagkcgsckma !== $ccamueccusigaaio)) { goto iwsuawwqomaowuii; } $seyqqsmuaiegkeeq = $ccamueccusigaaio; iwsuawwqomaowuii: $ywmkwiwkosakssii = [Constants::mkucwyayaakigquq => $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::smagkiasowyaaocq), Constants::gmmygyiecgmggaam => $seyqqsmuaiegkeeq, Constants::eymwucuaaiiciymc => $weyoqgcesqgeusiu, Constants::mmqiaaskyikwwayy => $weyoqgcesqgeusiu > 0 ? ($suaemuyiacqyugsm - 1) * $weyoqgcesqgeusiu : 0]; $qwcmueausqgiwigy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\x73"); switch ($ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::mueuocgkoqqkgysa)) { case Constants::ouywiegeiyuaaawo: $ywmkwiwkosakssii[Constants::ouywiegeiyuaaawo] = $qwcmueausqgiwigy; goto wcugqegqsuuuwqao; case Constants::ygoseweigiigswiu: $ywmkwiwkosakssii[Constants::yayciqueeakqwese] = $qwcmueausqgiwigy; goto wcugqegqsuuuwqao; default: case Constants::qescuiwgsyuikume: $ywmkwiwkosakssii[Constants::esomoymycskkguse] = $qwcmueausqgiwigy; goto wcugqegqsuuuwqao; } asiqwuoswmigcaki: wcugqegqsuuuwqao: $aigykywoguoqmkao = new WP_Term_Query(); $sogksuscggsicmac = $aigykywoguoqmkao->query($ywmkwiwkosakssii); if (!$wp_query instanceof WP_Query) { goto ciykoyeioqgyaeqo; } $wp_query->found_posts = $this->gqumoweqkmwuuomo($seyqqsmuaiegkeeq, $ywmkwiwkosakssii); $wp_query->max_num_pages = ceil($wp_query->found_posts / $wp_query->get(Constants::goqgcigmiawyauai)); ciykoyeioqgyaeqo: mqicocmqegwukkwg: qgeugwymkkiacwoc: return $sogksuscggsicmac; } private function gqumoweqkmwuuomo($kesssewsiegssiya, $ywmkwiwkosakssii) : int { $count_args = $ywmkwiwkosakssii; unset($count_args[Constants::eymwucuaaiiciymc], $count_args[Constants::mmqiaaskyikwwayy]); return (int) wp_count_terms($kesssewsiegssiya, $count_args); } private function gouusicsisumuiei($gqgemcmoicmgaqie = null) : bool { $gouusicsisumuiei = false; if (!$this->iemckwasmaugwcwi()) { goto mugqyyeayeyggqqk; } if ($gqgemcmoicmgaqie) { goto emmsycooskoqmgeg; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; emmsycooskoqmgeg: if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query() && Constants::oimusiegakqgwosg !== $gqgemcmoicmgaqie->get("\x73", Constants::oimusiegakqgwosg))) { goto ouamogymawucwswu; } $gouusicsisumuiei = true; ouamogymawucwswu: mugqyyeayeyggqqk: return $gouusicsisumuiei; } }
