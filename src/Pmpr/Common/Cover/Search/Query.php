<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6683fecfd1c7e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Search; use Pmpr\Common\Cover\Setting; use WP_Query; use WP_Term_Query; class Query extends Common { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x70\x72\x65\x5f\x67\145\x74\137\160\x6f\x73\x74\x73", [$this, "\x69\x67\171\167\141\x73\x63\x73\151\145\x6f\153\x6b\x6f\167\163"], 0)->cecaguuoecmccuse("\x70\x6f\163\164\x73\137\x73\145\x61\162\143\x68", [$this, "\167\x61\x77\x71\167\x61\155\x73\165\165\x75\x6d\145\x73\x6b\x61"], 500, 2); $this->aqaqisyssqeomwom("\x67\145\164\x5f\163\x65\141\x72\143\150\137\x72\x65\x73\165\x6c\164", [$this, "\171\x73\x63\x67\x6f\145\x77\x6b\x6f\141\x69\171\x77\155\157\x73"]); } public function wawqwamsuuumeska($qwcmueausqgiwigy, $gqgemcmoicmgaqie) { global $wpdb; if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto kqqiegkuqagcqsya; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $cwomqsccicsqseiy = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ogkiaqsouugogsom); $wmsuioaookqmyqkw = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::kquocioeygiskksm); if (!($wmsuioaookqmyqkw || $cwomqsccicsqseiy)) { goto miweggwqeiaeweia; } $qqmmggwcsmymegca = $gqgemcmoicmgaqie->query_vars; $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\145\170\x61\x63\x74"]) ? '' : "\45"; $qwcmueausqgiwigy = ''; $_and = "\40\101\116\104\x20"; $_or = "\x20\x4f\x52\40"; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $eyyicwuomioiwoeu = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $wyqayqogsymumaqg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gsyiysyskygiwqmu, self::ygoseweigiigswiu); $iwewcwusemqaiggk = $aaycmcgqqqsysccs . $eyyicwuomioiwoeu->yqccgscwmeeyigkg($qqmmggwcsmymegca["\163"] ?? '') . $aaycmcgqqqsysccs; $uqcswyskyumyyeew = ''; if (!$cwomqsccicsqseiy) { goto qoqskyuuwueqkquk; } if (!in_array($wyqayqogsymumaqg, [self::ygoseweigiigswiu, self::qescuiwgsyuikume])) { goto msemumccgceyugmg; } $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\56\160\157\x73\164\x5f\x74\151\164\154\145\40\x4c\111\x4b\105\x20\x25\x73", $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; msemumccgceyugmg: if (!in_array($wyqayqogsymumaqg, [self::ygoseweigiigswiu, self::ssmskyqgcmeiayco])) { goto wagqgeqymeqoeuyi; } $qwcmueausqgiwigy .= $uqcswyskyumyyeew; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("{$wpdb->posts}\x2e\160\x6f\x73\164\x5f\143\157\x6e\x74\145\x6e\164\40\114\111\113\x45\40\x25\x73{$_or}{$wpdb->posts}\x2e\160\x6f\163\x74\x5f\145\x78\x63\145\x72\x70\164\40\x4c\x49\113\x45\x20\45\163", $iwewcwusemqaiggk, $iwewcwusemqaiggk); $uqcswyskyumyyeew = $_or; wagqgeqymeqoeuyi: $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\160\x6f\163\164\x5f\x71\x75\145\x72\x79", $qwcmueausqgiwigy, $iwewcwusemqaiggk); qoqskyuuwueqkquk: $cniyckqcgyosooam = false; if (!is_numeric($ccamueccusigaaio)) { goto mqicocmqegwukkwg; } $uyuaosigqymaqsaa = (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mwqguykeegesggge, []); if (in_array($ccamueccusigaaio, $uyuaosigqymaqsaa)) { goto asiqwuoswmigcaki; } if ($uyuaosigqymaqsaa) { goto wcugqegqsuuuwqao; } $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($ccamueccusigaaio); if (!in_array($kesssewsiegssiya, (array) $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ammgiseaaguqygig, []))) { goto iwsuawwqomaowuii; } $cniyckqcgyosooam = true; iwsuawwqomaowuii: wcugqegqsuuuwqao: goto ciykoyeioqgyaeqo; asiqwuoswmigcaki: $cniyckqcgyosooam = true; ciykoyeioqgyaeqo: mqicocmqegwukkwg: if (!$cniyckqcgyosooam) { goto qgeugwymkkiacwoc; } $qwcmueausqgiwigy = "\x28{$qwcmueausqgiwigy}\51{$_and}"; $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\x61\163\164\x2e\x74\145\162\155\137\151\x64\x20\x3d\x20\45\163\51", $ccamueccusigaaio); qgeugwymkkiacwoc: if (!$wmsuioaookqmyqkw) { goto samwkqgwouggsguc; } $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::ewwmksgyikwikqye, []); if (!$seyqqsmuaiegkeeq) { goto oomguqikqokqwgku; } $ogguokqeaguoyiuk = ''; $qycoeysqasckgycc = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa); foreach ($seyqqsmuaiegkeeq as $ieqocgiosekoeoqe) { $qwcmueausqgiwigy .= $uqcswyskyumyyeew . $ogguokqeaguoyiuk; switch ($qycoeysqasckgycc) { case self::ouywiegeiyuaaawo: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\141\x73\164\x74\x2e\164\141\170\157\156\x6f\155\x79\x20\x3d\40\x25\x73{$_and}\141\163\164\x2e\x73\x6c\x75\147\40\x4c\111\113\x45\40\45\x73\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto mugqyyeayeyggqqk; case self::ygoseweigiigswiu: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\50\x61\x73\x74\164\56\x74\141\x78\157\x6e\157\x6d\x79\40\x3d\40\45\x73{$_and}\50\141\163\164\56\x6e\x61\155\x65\40\x4c\111\113\x45\40\x25\x73\40\157\162\x20\141\x73\x74\x2e\163\154\x75\147\x20\x4c\x49\113\x45\x20\x25\163\51\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk, $iwewcwusemqaiggk); goto mugqyyeayeyggqqk; default: case self::qescuiwgsyuikume: $qwcmueausqgiwigy .= $eyyicwuomioiwoeu->prepare("\x28\x61\163\164\x74\56\164\141\170\x6f\x6e\157\155\171\40\x3d\x20\45\x73{$_and}\x61\x73\164\x2e\x6e\x61\155\145\x20\114\111\113\x45\40\x25\x73\51", $ieqocgiosekoeoqe, $iwewcwusemqaiggk); goto mugqyyeayeyggqqk; } acsqgiuageaasiyy: mugqyyeayeyggqqk: $uqcswyskyumyyeew = ''; $ogguokqeaguoyiuk = $_or; ouamogymawucwswu: } emmsycooskoqmgeg: oomguqikqokqwgku: samwkqgwouggsguc: if (!($wmsuioaookqmyqkw || $cniyckqcgyosooam)) { goto wyuemgggaqogsmsq; } $this->cecaguuoecmccuse("\160\x6f\x73\x74\163\x5f\x6a\157\x69\x6e\137\x72\x65\161\x75\145\x73\x74", [$this, "\x6b\147\171\x6f\171\x69\x71\x71\x6f\x63\x75\x6d\x63\x75\153\x61"]); wyuemgggaqogsmsq: if (empty($qwcmueausqgiwigy)) { goto kkumywowcoycymeo; } $qwcmueausqgiwigy = $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . self::meieskyuuegwwcsy, $qwcmueausqgiwigy, $iwewcwusemqaiggk, $cwomqsccicsqseiy, $wmsuioaookqmyqkw, $gqgemcmoicmgaqie); $qwcmueausqgiwigy = "{$_and}\50{$qwcmueausqgiwigy}\51\x20"; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto guykyqecgswcsmws; } $qwcmueausqgiwigy .= sprintf("\45\x73\50\x25\163\56\x70\157\163\164\x5f\160\141\x73\x73\x77\157\162\x64\x20\75\40\x27\x27\51\40", $_and, $wpdb->posts); guykyqecgswcsmws: kkumywowcoycymeo: $this->cecaguuoecmccuse("\x70\157\163\x74\163\137\x64\151\x73\x74\151\156\143\164\137\162\x65\161\165\x65\163\x74", [$this, "\163\167\153\151\153\x73\x6f\x73\161\x6f\143\171\x61\x77\157\x65"]); miweggwqeiaeweia: kqqiegkuqagcqsya: return $qwcmueausqgiwigy; } public function kgyoyiqqocumcuka($eagqsqeocaokmsim) : string { global $wpdb; $eagqsqeocaokmsim .= sprintf("\40\x4c\105\106\x54\40\x4a\x4f\111\116\x20\45\x73\x20\141\163\x74\x72\40\117\x4e\40\50\45\x73\x2e\111\104\40\x3d\x20\x61\x73\x74\x72\56\x6f\142\152\x65\x63\x74\137\x69\144\x29\x20", $wpdb->term_relationships, $wpdb->posts); $eagqsqeocaokmsim .= sprintf("\40\114\105\x46\124\40\x4a\117\111\x4e\40\45\163\40\x61\163\164\164\x20\x4f\116\40\x28\x61\x73\164\x72\56\164\145\x72\x6d\x5f\x74\141\x78\157\x6e\157\x6d\x79\137\x69\144\40\75\40\x61\163\164\x74\56\x74\x65\x72\155\137\x74\x61\x78\157\x6e\x6f\155\x79\137\x69\144\51\40", $wpdb->term_taxonomy); $eagqsqeocaokmsim .= sprintf("\40\114\x45\x46\x54\40\x4a\x4f\x49\116\x20\45\163\40\x61\163\164\x20\x4f\x4e\40\50\x61\x73\164\x74\x2e\164\x65\x72\x6d\137\151\x64\40\x3d\x20\x61\163\x74\x2e\x74\145\x72\x6d\137\x69\144\x29\40", $wpdb->terms); return $this->ocksiywmkyaqseou(self::ecuwamcuymyycucq . "\x6a\x6f\151\156\x5f\162\145\161\165\145\x73\164", $eagqsqeocaokmsim); } public function swkiksosqocyawoe() : string { return "\x44\x49\123\124\111\x4e\103\124"; } public function igywascsieokkows($gqgemcmoicmgaqie) { if (!$this->gouusicsisumuiei($gqgemcmoicmgaqie)) { goto awoaooyoeoyeeqee; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $ccamueccusigaaio = $this->awwoqyciiocumkqq(); $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::isksgwqqcmwaccaq, []); if ($sciomagaqmgggsiu) { goto ousiuuwgwkiyikyq; } $sciomagaqmgggsiu = (array) $ykquycoiqesuckco->eiwcuqigayigimak(SettingSegment::mokucseeaqkgkuqy, []); ousiuuwgwkiyikyq: switch ($this->sesseaeskwkeucks()) { case self::ygoseweigiigswiu: if (!(self::yyoaeaaaquyigiim === $ccamueccusigaaio && $sciomagaqmgggsiu)) { goto ikqqskkqqwmwssoo; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sciomagaqmgggsiu); ikqqskkqqwmwssoo: goto ogsaaqsaogcqiouy; case self::qgmuskygocwmouos: if ($ccamueccusigaaio && in_array($ccamueccusigaaio, $sciomagaqmgggsiu)) { goto aomysykcgikegiau; } $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $sciomagaqmgggsiu); goto cwwmimggaaecmucw; aomysykcgikegiau: $gqgemcmoicmgaqie->set(self::uouymeyqasaeckso, $ccamueccusigaaio); cwwmimggaaecmucw: goto ogsaaqsaogcqiouy; } iwekmyyccgiyuecc: ogsaaqsaogcqiouy: awoaooyoeoyeeqee: return $gqgemcmoicmgaqie; } public function yscgoewkoaiywmos($sogksuscggsicmac) { if (!($this->iemckwasmaugwcwi() && in_array($this->sesseaeskwkeucks(), [self::ygoseweigiigswiu, self::ucoiewcoucauqwko]))) { goto iikiiioqiyegyaak; } global $wp_query; $ccamueccusigaaio = $this->awwoqyciiocumkqq(); if (!(self::emcyuiagkcgsckma === $ccamueccusigaaio || $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($ccamueccusigaaio))) { goto gicyayswqyuoekcq; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); $suaemuyiacqyugsm = max(1, $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(self::kkcqmwgccaygggcu, 1)); $seyqqsmuaiegkeeq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::gmskcsaawiuegywk, [self::ocsomysosuqaimuc, self::qgciomgukmcwscqw]); if (!(self::emcyuiagkcgsckma !== $ccamueccusigaaio)) { goto ogqmesokykywseys; } $seyqqsmuaiegkeeq = $ccamueccusigaaio; ogqmesokykywseys: $ywmkwiwkosakssii = [self::mkucwyayaakigquq => $ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::smagkiasowyaaocq), self::gmmygyiecgmggaam => $seyqqsmuaiegkeeq, self::eymwucuaaiiciymc => $weyoqgcesqgeusiu, self::mmqiaaskyikwwayy => $weyoqgcesqgeusiu > 0 ? ($suaemuyiacqyugsm - 1) * $weyoqgcesqgeusiu : 0]; $qwcmueausqgiwigy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\163"); switch ($ykquycoiqesuckco->giiuwsmyumqwwiyq(SettingSegment::mueuocgkoqqkgysa)) { case self::ouywiegeiyuaaawo: $ywmkwiwkosakssii[self::ouywiegeiyuaaawo] = $qwcmueausqgiwigy; goto ykomgumacooyomsk; case self::ygoseweigiigswiu: $ywmkwiwkosakssii[self::yayciqueeakqwese] = $qwcmueausqgiwigy; goto ykomgumacooyomsk; default: case self::qescuiwgsyuikume: $ywmkwiwkosakssii[self::esomoymycskkguse] = $qwcmueausqgiwigy; goto ykomgumacooyomsk; } mqkmcysgoiaouiwm: ykomgumacooyomsk: $aigykywoguoqmkao = new WP_Term_Query(); $sogksuscggsicmac = $aigykywoguoqmkao->query($ywmkwiwkosakssii); if (!$wp_query instanceof WP_Query) { goto kosaqwikueyksqmw; } $wp_query->found_posts = $this->gqumoweqkmwuuomo($seyqqsmuaiegkeeq, $ywmkwiwkosakssii); $wp_query->max_num_pages = ceil($wp_query->found_posts / $wp_query->get(self::goqgcigmiawyauai)); kosaqwikueyksqmw: gicyayswqyuoekcq: iikiiioqiyegyaak: return $sogksuscggsicmac; } private function gqumoweqkmwuuomo($kesssewsiegssiya, $ywmkwiwkosakssii) : int { $count_args = $ywmkwiwkosakssii; unset($count_args[self::eymwucuaaiiciymc], $count_args[self::mmqiaaskyikwwayy]); return (int) wp_count_terms($kesssewsiegssiya, $count_args); } private function gouusicsisumuiei($gqgemcmoicmgaqie = null) : bool { $gouusicsisumuiei = false; if (!$this->iemckwasmaugwcwi()) { goto gcckqucukawcasgk; } if ($gqgemcmoicmgaqie) { goto uiosisocuwokwkie; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; uiosisocuwokwkie: if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_search() && $gqgemcmoicmgaqie->is_main_query() && self::oimusiegakqgwosg !== $gqgemcmoicmgaqie->get("\163", self::oimusiegakqgwosg))) { goto cuumeogeomowqisc; } $gouusicsisumuiei = true; cuumeogeomowqisc: gcckqucukawcasgk: return $gouusicsisumuiei; } }
