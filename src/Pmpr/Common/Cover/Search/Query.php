<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67522cf903aeb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Search; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Query; use WP_Term_Query; class Query extends Common { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x70\x72\x65\137\147\x65\x74\x5f\160\x6f\163\x74\163", [$this, "\151\x67\171\167\141\163\x63\163\151\x65\x6f\x6b\x6b\157\x77\x73"], 0)->cecaguuoecmccuse("\x70\x6f\163\164\163\137\x73\145\x61\162\x63\150", [$this, "\x77\141\x77\x71\167\x61\x6d\x73\x75\165\x75\x6d\145\x73\x6b\141"], 500, 2); $this->aqaqisyssqeomwom("\x67\x65\x74\x5f\x73\145\x61\162\x63\x68\137\x72\x65\163\165\x6c\164", [$this, "\x79\x73\143\x67\x6f\145\167\153\x6f\141\x69\171\x77\155\x6f\x73"]); } public function wawqwamsuuumeska($qwcmueausqgiwigy, $gqgemcmoicmgaqie) { global $wpdb; if ($this->gouusicsisumuiei($gqgemcmoicmgaqie)) { $cwomqsccicsqseiy = $this->weysguygiseoukqw(Setting::ogkiaqsouugogsom); $wmsuioaookqmyqkw = $this->weysguygiseoukqw(Setting::kquocioeygiskksm); if ($wmsuioaookqmyqkw || $cwomqsccicsqseiy) { $qqmmggwcsmymegca = $gqgemcmoicmgaqie->query_vars; $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\145\170\141\143\164"]) ? '' : "\45"; $qwcmueausqgiwigy = ''; $_and = "\40\x41\x4e\x44\40"; $_or = "\40\117\x52\x20"; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $eyyicwuomioiwoeu = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $wyqayqogsymumaqg = $this->weysguygiseoukqw(Setting::gsyiysyskygiwqmu, Constants::ygoseweigiigswiu); $iwewcwusemqaiggk = $aaycmcgqqqsysccs . $eyyicwuomioiwoeu->yqccgscwmeeyigkg($qqmmggwcsmymegca["\x73"] ?? '') . $aaycmcgqqqsysccs; $uqcswyskyumyyeew = ''; if ($cwomqsccicsqseiy) { if (in_array($wyqayqogsymumaqg, [Constants::ygoseweigiigswiu, Constants::qescuiwgsyuikume], true)) { $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\56\x70\x6f\x73\164\x5f\x74\151\164\154\x65\40\x4c\111\113\x45\x20\45\x73", $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; } if (in_array($wyqayqogsymumaqg, [Constants::ygoseweigiigswiu, Constants::ssmskyqgcmeiayco], true)) { $qwcmueausqgiwigy .= $uqcswyskyumyyeew; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\56\x70\157\x73\164\x5f\143\157\x6e\x74\x65\156\164\40\114\111\113\105\40\x25\163{$_or}{$wpdb->posts}\56\x70\x6f\163\164\x5f\145\x78\143\145\x72\x70\164\40\x4c\111\113\x45\x20\x25\x73", $iwewcwusemqaiggk, $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; } $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\160\x6f\163\164\137\161\x75\x65\162\x79", $qwcmueausqgiwigy, $iwewcwusemqaiggk); } $cniyckqcgyosooam = false; if (is_numeric($ccamueccusigaaio)) { $uyuaosigqymaqsaa = (array) $this->weysguygiseoukqw(Setting::mwqguykeegesggge, []); if (in_array($ccamueccusigaaio, $uyuaosigqymaqsaa)) { $cniyckqcgyosooam = true; } else { if (!$uyuaosigqymaqsaa) { $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($ccamueccusigaaio); if (in_array($kesssewsiegssiya, (array) $this->weysguygiseoukqw(Setting::ammgiseaaguqygig, []), true)) { $cniyckqcgyosooam = true; } } } } if ($cniyckqcgyosooam) { $qwcmueausqgiwigy = "\x28{$qwcmueausqgiwigy}\51{$_and}"; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\x61\x73\x74\x2e\164\x65\162\155\137\x69\144\40\75\40\45\x73\x29", $ccamueccusigaaio); } if ($wmsuioaookqmyqkw) { $seyqqsmuaiegkeeq = $this->weysguygiseoukqw(Setting::ewwmksgyikwikqye, []); if ($seyqqsmuaiegkeeq) { $ogguokqeaguoyiuk = ''; $qycoeysqasckgycc = $this->weysguygiseoukqw(Setting::mueuocgkoqqkgysa); foreach ($seyqqsmuaiegkeeq as $ieqocgiosekoeoqe) { $qwcmueausqgiwigy .= $uqcswyskyumyyeew . $ogguokqeaguoyiuk; switch ($qycoeysqasckgycc) { case Constants::ouywiegeiyuaaawo: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\141\163\x74\x74\56\164\141\x78\157\x6e\x6f\x6d\x79\x20\x3d\x20\45\x73{$_and}\x61\x73\x74\56\x73\154\x75\x67\x20\114\111\x4b\105\x20\x25\x73\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); break; case Constants::ygoseweigiigswiu: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\141\x73\164\164\56\164\141\x78\x6f\156\x6f\x6d\x79\x20\75\40\45\x73{$_and}\50\141\163\x74\56\156\x61\155\145\x20\114\x49\x4b\105\40\45\163\40\157\x72\x20\141\x73\164\x2e\x73\154\x75\x67\x20\x4c\111\113\x45\40\45\163\51\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk, $iwewcwusemqaiggk); break; default: case Constants::qescuiwgsyuikume: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\141\163\x74\x74\56\x74\141\170\x6f\156\x6f\x6d\171\40\75\40\x25\x73{$_and}\141\x73\164\56\156\141\155\145\x20\x4c\x49\113\105\x20\x25\163\x29", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); break; } $uqcswyskyumyyeew = ''; $ogguokqeaguoyiuk = $_or; } } } if ($wmsuioaookqmyqkw || $cniyckqcgyosooam) { $this->cecaguuoecmccuse("\x70\157\163\x74\x73\x5f\152\157\x69\x6e\x5f\162\145\x71\x75\145\163\164", [$this, "\x6b\147\171\157\171\x69\161\161\x6f\x63\165\155\143\165\x6b\141"]); } if (!empty($qwcmueausqgiwigy)) { $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . Constants::meieskyuuegwwcsy, $qwcmueausqgiwigy, $iwewcwusemqaiggk, $cwomqsccicsqseiy, $wmsuioaookqmyqkw, $gqgemcmoicmgaqie); $qwcmueausqgiwigy = "{$_and}\x28{$qwcmueausqgiwigy}\51\x20"; if (!$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $qwcmueausqgiwigy .= sprintf("\x25\163\x28\45\163\x2e\160\x6f\x73\164\137\160\141\x73\x73\x77\157\162\x64\40\x3d\40\x27\x27\51\40", $_and, $wpdb->posts); } } $this->cecaguuoecmccuse("\160\x6f\x73\164\163\x5f\144\151\x73\x74\151\x6e\143\x74\x5f\162\145\x71\165\145\x73\x74", [$this, "\x73\167\x6b\x69\x6b\163\157\x73\161\157\x63\171\x61\x77\157\145"]); } } return $qwcmueausqgiwigy; } public function kgyoyiqqocumcuka($eagqsqeocaokmsim) : string { global $wpdb; $eagqsqeocaokmsim .= sprintf("\40\114\x45\106\x54\40\x4a\x4f\111\116\40\x25\163\x20\x61\163\x74\162\x20\x4f\x4e\x20\50\x25\163\x2e\x49\x44\x20\x3d\40\141\x73\x74\162\x2e\157\142\152\145\143\x74\x5f\151\x64\x29\40", $wpdb->term_relationships, $wpdb->posts); $eagqsqeocaokmsim .= sprintf("\40\114\x45\x46\124\40\x4a\x4f\x49\116\40\x25\163\40\x61\163\x74\x74\40\x4f\116\40\50\141\163\x74\x72\x2e\164\145\x72\x6d\x5f\x74\x61\x78\157\156\157\x6d\171\x5f\151\x64\x20\x3d\40\x61\163\x74\164\56\164\145\x72\155\x5f\164\x61\170\x6f\x6e\157\x6d\171\137\151\x64\x29\x20", $wpdb->term_taxonomy); $eagqsqeocaokmsim .= sprintf("\x20\x4c\x45\x46\124\x20\x4a\117\x49\116\x20\x25\163\x20\141\x73\164\40\x4f\x4e\x20\50\141\163\164\x74\x2e\164\x65\162\x6d\x5f\151\144\40\x3d\40\141\x73\164\56\164\x65\162\155\137\151\x64\51\40", $wpdb->terms); return $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\x6a\157\151\x6e\x5f\x72\145\x71\x75\x65\163\164", $eagqsqeocaokmsim); } public function swkiksosqocyawoe() : string { return "\104\x49\123\124\x49\116\x43\x54"; } public function igywascsieokkows($gqgemcmoicmgaqie) { if ($this->gouusicsisumuiei($gqgemcmoicmgaqie)) { $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $sciomagaqmgggsiu = (array) $this->weysguygiseoukqw(Setting::isksgwqqcmwaccaq, []); if (!$sciomagaqmgggsiu) { $sciomagaqmgggsiu = (array) $this->weysguygiseoukqw(Setting::mokucseeaqkgkuqy, []); } switch ($this->sesseaeskwkeucks()) { case Constants::ygoseweigiigswiu: if (Constants::yyoaeaaaquyigiim === $ccamueccusigaaio && $sciomagaqmgggsiu) { $gqgemcmoicmgaqie->set(Constants::uouymeyqasaeckso, $sciomagaqmgggsiu); } break; case Constants::qgmuskygocwmouos: if ($ccamueccusigaaio && in_array($ccamueccusigaaio, $sciomagaqmgggsiu, true)) { $gqgemcmoicmgaqie->set(Constants::uouymeyqasaeckso, $ccamueccusigaaio); } else { $gqgemcmoicmgaqie->set(Constants::uouymeyqasaeckso, $sciomagaqmgggsiu); } break; } } return $gqgemcmoicmgaqie; } public function yscgoewkoaiywmos($sogksuscggsicmac) { if ($this->iemckwasmaugwcwi() && in_array($this->sesseaeskwkeucks(), [Constants::ygoseweigiigswiu, Constants::ucoiewcoucauqwko], true)) { global $wp_query; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); if (Constants::emcyuiagkcgsckma === $ccamueccusigaaio || $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($ccamueccusigaaio)) { $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); $suaemuyiacqyugsm = max(1, $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(Constants::kkcqmwgccaygggcu, 1)); $seyqqsmuaiegkeeq = $this->weysguygiseoukqw(Setting::gmskcsaawiuegywk, [Constants::ocsomysosuqaimuc, Constants::qgciomgukmcwscqw]); if (Constants::emcyuiagkcgsckma !== $ccamueccusigaaio) { $seyqqsmuaiegkeeq = $ccamueccusigaaio; } $ywmkwiwkosakssii = [Constants::mkucwyayaakigquq => $this->weysguygiseoukqw(Setting::smagkiasowyaaocq), Constants::gmmygyiecgmggaam => $seyqqsmuaiegkeeq, Constants::eymwucuaaiiciymc => $weyoqgcesqgeusiu, Constants::mmqiaaskyikwwayy => $weyoqgcesqgeusiu > 0 ? ($suaemuyiacqyugsm - 1) * $weyoqgcesqgeusiu : 0]; $qwcmueausqgiwigy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\x73"); switch ($this->weysguygiseoukqw(Setting::mueuocgkoqqkgysa)) { case Constants::ouywiegeiyuaaawo: $ywmkwiwkosakssii[Constants::ouywiegeiyuaaawo] = $qwcmueausqgiwigy; break; case Constants::ygoseweigiigswiu: $ywmkwiwkosakssii[Constants::yayciqueeakqwese] = $qwcmueausqgiwigy; break; default: case Constants::qescuiwgsyuikume: $ywmkwiwkosakssii[Constants::esomoymycskkguse] = $qwcmueausqgiwigy; break; } $aigykywoguoqmkao = new WP_Term_Query(); $sogksuscggsicmac = $aigykywoguoqmkao->query($ywmkwiwkosakssii); if ($wp_query instanceof WP_Query) { $wp_query->found_posts = $this->gqumoweqkmwuuomo($seyqqsmuaiegkeeq, $ywmkwiwkosakssii); $wp_query->max_num_pages = ceil($wp_query->found_posts / $wp_query->get(Constants::goqgcigmiawyauai)); } } } return $sogksuscggsicmac; } private function gqumoweqkmwuuomo($kesssewsiegssiya, $ywmkwiwkosakssii) : int { $count_args = $ywmkwiwkosakssii; unset($count_args[Constants::eymwucuaaiiciymc], $count_args[Constants::mmqiaaskyikwwayy]); return (int) wp_count_terms($kesssewsiegssiya, $count_args); } private function gouusicsisumuiei($gqgemcmoicmgaqie = null) : bool { $gouusicsisumuiei = false; if ($this->iemckwasmaugwcwi()) { if (!$gqgemcmoicmgaqie) { global $wp_query; $gqgemcmoicmgaqie = $wp_query; } if ($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query() && Constants::oimusiegakqgwosg !== $gqgemcmoicmgaqie->get("\x73", Constants::oimusiegakqgwosg)) { $gouusicsisumuiei = true; } } return $gouusicsisumuiei; } }
