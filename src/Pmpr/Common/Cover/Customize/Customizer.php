<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668107334b816             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Customize; use Pmpr\Common\Cover\Customize\Segment\Panel; use Pmpr\Common\Cover\Customize\Segment\Section; use Pmpr\Common\Cover\Customize\Segment\Segment; use Pmpr\Common\Cover\Customize\Setting\Setting; use Pmpr\Common\Cover\Customize\Setting\SiteOption; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Media; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use WP_Customize_Control; use WP_Customize_Image_Control; use WP_Customize_Manager; abstract class Customizer extends Common { use ObjectTrait; protected ?string $id = null; protected array $types = []; protected ?string $type = "\164\150\145\x6d\x65\137\x6d\x6f\144\x65"; protected array $panels = []; protected array $sections = []; public function __construct() { $this->kumkkwiqqiicsswu(); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\143\x75\x73\164\157\155\x69\x7a\145\137\x72\x65\147\151\x73\x74\x65\x72", [$this, "\143\x6f\155\163\147\x6d\143\x77\x63\x63\x79\x77\x6b\x69\x75\157"]); $this->waqewsckuayqguos("\x61\144\x64\137\164\x77\151\147\137\146\165\156\143\164\x69\x6f\x6e\x73", [$this, "\163\153\x77\x75\x6d\155\147\157\157\x63\x63\x67\x79\x6d\141\143"]); } public function skwummgooccgymac($eyoesceegakeygsi) { $eyoesceegakeygsi->kmmegqceukkkawme("\143\x75\163\x74\157\155\x69\172\x65\x72\x5f\157\160\164\151\x6f\x6e", [$this, "\x67\151\151\165\x77\163\155\x79\x75\x6d\161\167\167\151\x79\161"]); } public function mwikyscisascoeea() : ?string { return $this->id; } public function gueasuouwqysmomu() : ?string { $qgeeqyucwycemwmo = $this->mwoyqeeigwqoamiw(); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qgeeqyucwycemwmo, $this->type); } public function mwoyqeeigwqoamiw() : array { return $this->types; } public function kumkkwiqqiicsswu() { $this->types = ["\x74\x68\145\x6d\x65\x5f\155\157\144\x65" => Setting::class, "\163\151\164\x65\x5f\x6f\x70\164\x69\x6f\156" => SiteOption::class]; } public final function comsgmcwccywkiuo($gcggigoeyymgeaoc) { if (!$gcggigoeyymgeaoc instanceof WP_Customize_Manager) { goto ayyweymyuuiauamo; } $this->yogecqociwgqoscg(); $cegumcycsaqqaioo = $this->qeeoggccsyqiegea(); foreach ($cegumcycsaqqaioo as $skeuoeoiuwwyqwou) { if (!$skeuoeoiuwwyqwou instanceof Panel) { goto yqykqysmiquwoasu; } $mgiqqesweuqmsymo = $skeuoeoiuwwyqwou->suuogccckocgseyg(); if (!$mgiqqesweuqmsymo) { goto cmqucgoewuyieoyk; } $myusoqwwewieagou = $this->omaiscgewmaukawu($skeuoeoiuwwyqwou, $gcggigoeyymgeaoc); if (!$myusoqwwewieagou) { goto gimmuoqwckiseaik; } $gcggigoeyymgeaoc->add_panel($myusoqwwewieagou); $this->aqoswsqkkogggmkc($gcggigoeyymgeaoc, $mgiqqesweuqmsymo); gimmuoqwckiseaik: cmqucgoewuyieoyk: yqykqysmiquwoasu: iqcogmsguwoikame: } quwcqmyokicssyew: $this->aqoswsqkkogggmkc($gcggigoeyymgeaoc, $this->suuogccckocgseyg()); ayyweymyuuiauamo: } public function aqoswsqkkogggmkc($gcggigoeyymgeaoc, $mgiqqesweuqmsymo) { if (!is_array($mgiqqesweuqmsymo)) { goto miyqyeiwquwsacsm; } foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) { if (!$awcmekyiwwkeyisq instanceof Section) { goto qkcyqocqqwmqgqww; } $ikgwqyuyckaewsow = $awcmekyiwwkeyisq->ugmceccgwaaaigiy(); if (!$ikgwqyuyckaewsow) { goto ssoucoucsgccekwe; } $kqcoqkucyacciaoe = $this->omaiscgewmaukawu($awcmekyiwwkeyisq, $gcggigoeyymgeaoc); if (!$kqcoqkucyacciaoe) { goto qqewoyookaskiuek; } $gcggigoeyymgeaoc->add_section($kqcoqkucyacciaoe); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto iggyqogweyosuikc; } $gcggigoeyymgeaoc->add_setting($this->uyosoqisciuoyaqg($aiowsaccomcoikus, $gcggigoeyymgeaoc)); $gcggigoeyymgeaoc->add_control($this->iqumywysgqckgccw($aiowsaccomcoikus, $awcmekyiwwkeyisq->mwikyscisascoeea(), $gcggigoeyymgeaoc)); iggyqogweyosuikc: kqksuugcgsyeoayy: } ygcsmkuycoagwyou: qqewoyookaskiuek: ssoucoucsgccekwe: qkcyqocqqwmqgqww: omugkkesagcyagmk: } mosqsmqimqgqoase: miyqyeiwquwsacsm: } private function omaiscgewmaukawu(Segment $oceoauekaygmuoko, $gcggigoeyymgeaoc) { $ymaucmwyqwuuqyqe = null; if (!($oceoauekaygmuoko && $gcggigoeyymgeaoc)) { goto ywqgcegomwaiuquc; } $sqeykgyoooqysmca = $oceoauekaygmuoko->gueasuouwqysmomu(); if (!class_exists($sqeykgyoooqysmca)) { goto eegqyykygiccaoeo; } $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($gcggigoeyymgeaoc, $oceoauekaygmuoko->mwikyscisascoeea(), $oceoauekaygmuoko->sacmkccceuywoqsq()); eegqyykygiccaoeo: ywqgcegomwaiuquc: return $ymaucmwyqwuuqyqe; } private function iqumywysgqckgccw(Field $aiowsaccomcoikus, $awcmekyiwwkeyisq, $gcggigoeyymgeaoc) : ?WP_Customize_Control { $ymaucmwyqwuuqyqe = null; if (!$gcggigoeyymgeaoc) { goto acaqummmoyiemqss; } $ywmkwiwkosakssii = ["\154\141\142\145\x6c" => $aiowsaccomcoikus->aakmagwggmkoiiyu(), "\x73\145\143\164\x69\157\x6e" => $awcmekyiwwkeyisq, "\163\145\164\164\151\x6e\x67\x73" => $aiowsaccomcoikus->mwikyscisascoeea(), "\x70\x72\x69\157\x72\x69\164\x79" => $aiowsaccomcoikus->yywskysiycwkwsgw(), "\144\x65\163\143\x72\x69\160\164\x69\157\x6e" => $aiowsaccomcoikus->meqceykmywmqgoym()]; $sqeykgyoooqysmca = Control::class; if (!$aiowsaccomcoikus instanceof Media) { goto wmmggowmigekyoso; } $sqeykgyoooqysmca = WP_Customize_Image_Control::class; wmmggowmigekyoso: $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($gcggigoeyymgeaoc, $aiowsaccomcoikus->mwikyscisascoeea(), $ywmkwiwkosakssii); if (!$ymaucmwyqwuuqyqe instanceof Control) { goto soqqemyioggmoakg; } $ymaucmwyqwuuqyqe->kqgkscycaasckiae($aiowsaccomcoikus); soqqemyioggmoakg: acaqummmoyiemqss: return $ymaucmwyqwuuqyqe; } private function uyosoqisciuoyaqg(Field $aiowsaccomcoikus, $gcggigoeyymgeaoc) : ?Setting { $ymaucmwyqwuuqyqe = null; if (!$gcggigoeyymgeaoc) { goto eeqesooyqagwawae; } $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); if (class_exists($sqeykgyoooqysmca)) { goto suswcqoyyqkkquuo; } $sqeykgyoooqysmca = Setting::class; suswcqoyyqkkquuo: $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($aiowsaccomcoikus, $gcggigoeyymgeaoc); eeqesooyqagwawae: return $ymaucmwyqwuuqyqe; } public function qeeoggccsyqiegea() : array { return $this->panels; } public function iqkkeyeieoyicoyu(Panel $skeuoeoiuwwyqwou) : self { $this->panels[$skeuoeoiuwwyqwou->mwikyscisascoeea()] = $skeuoeoiuwwyqwou; return $this; } public function suuogccckocgseyg() : array { return $this->sections; } public function kwkugmqouisgkqig(Section $awcmekyiwwkeyisq) : self { $this->sections[$awcmekyiwwkeyisq->mwikyscisascoeea()] = $awcmekyiwwkeyisq; return $this; } public function squkaueaysyeqwuy($aokagokqyuysuksm, $meqocwsecsywiiqs) : Panel { return new Panel($this->mwikyscisascoeea() . "\x5f{$aokagokqyuysuksm}", $meqocwsecsywiiqs); } public function iiwyyacwekkgigis($aokagokqyuysuksm, $meqocwsecsywiiqs) : Section { return new Section($aokagokqyuysuksm, $meqocwsecsywiiqs); } public function giiuwsmyumqwwiyq($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = false) { static $qiouiwasaauyaaue; if (isset($qiouiwasaauyaaue[$ymqmyyeuycgmigyo])) { goto iekumemscwieugqw; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; switch ($this->type) { case "\164\x68\145\155\145\137\155\157\144\145": $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->mqcsicqwemggekye($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); goto oqugqwcyomiaaoqu; case "\163\151\x74\145\137\x6f\x70\x74\x69\x6f\x6e": $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->kuaqqosyyoqiueym($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); goto oqugqwcyomiaaoqu; case "\x75\x73\145\x72\x5f\x6d\x65\x74\x61": $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->issssuygyewuaswa()->igawqaomowicuayw($ymqmyyeuycgmigyo); goto oqugqwcyomiaaoqu; } foeeqckqsyockkak: oqugqwcyomiaaoqu: $qiouiwasaauyaaue[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; goto hoeeyiowekaeemko; iekumemscwieugqw: $eqgoocgaqwqcimie = $qiouiwasaauyaaue[$ymqmyyeuycgmigyo]; hoeeyiowekaeemko: return $eqgoocgaqwqcimie; } public abstract function yogecqociwgqoscg(); }
