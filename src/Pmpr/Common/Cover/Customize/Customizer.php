<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668f1d166ebcf             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Customize; use Pmpr\Common\Cover\Customize\Segment\Panel; use Pmpr\Common\Cover\Customize\Segment\Section; use Pmpr\Common\Cover\Customize\Segment\Segment; use Pmpr\Common\Cover\Customize\Setting\Setting; use Pmpr\Common\Cover\Customize\Setting\SiteOption; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Media; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use WP_Customize_Control; use WP_Customize_Image_Control; use WP_Customize_Manager; abstract class Customizer extends Common { use ObjectTrait; protected ?string $id = null; protected array $types = []; protected ?string $type = "\x74\150\x65\155\x65\137\x6d\x6f\144\145"; protected array $panels = []; protected array $sections = []; public function __construct() { $this->kumkkwiqqiicsswu(); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x63\165\163\x74\157\155\151\172\x65\137\162\145\x67\x69\163\164\145\x72", [$this, "\x63\x6f\155\x73\x67\x6d\x63\x77\x63\143\x79\167\x6b\x69\165\157"]); $this->waqewsckuayqguos("\x61\x64\144\137\x74\167\151\x67\137\x66\165\156\x63\x74\151\x6f\x6e\163", [$this, "\x73\x6b\167\165\x6d\x6d\147\x6f\157\143\x63\x67\x79\x6d\x61\143"]); } public function skwummgooccgymac($eyoesceegakeygsi) { $eyoesceegakeygsi->kmmegqceukkkawme("\x63\x75\163\164\157\x6d\x69\172\x65\x72\137\x6f\160\164\x69\x6f\x6e", [$this, "\x67\151\x69\x75\167\x73\155\171\165\155\x71\x77\x77\151\x79\x71"]); } public function mwikyscisascoeea() : ?string { return $this->id; } public function gueasuouwqysmomu() : ?string { $qgeeqyucwycemwmo = $this->mwoyqeeigwqoamiw(); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qgeeqyucwycemwmo, $this->type); } public function mwoyqeeigwqoamiw() : array { return $this->types; } public function kumkkwiqqiicsswu() { $this->types = ["\x74\150\x65\x6d\x65\x5f\x6d\157\144\145" => Setting::class, "\163\151\164\145\137\157\160\164\x69\x6f\x6e" => SiteOption::class]; } public final function comsgmcwccywkiuo($gcggigoeyymgeaoc) { if (!$gcggigoeyymgeaoc instanceof WP_Customize_Manager) { goto oasisywuwssumsok; } $this->yogecqociwgqoscg(); $cegumcycsaqqaioo = $this->qeeoggccsyqiegea(); foreach ($cegumcycsaqqaioo as $skeuoeoiuwwyqwou) { if (!$skeuoeoiuwwyqwou instanceof Panel) { goto iuyagqakcieasiua; } $mgiqqesweuqmsymo = $skeuoeoiuwwyqwou->suuogccckocgseyg(); if (!$mgiqqesweuqmsymo) { goto ucaoyoamaycsiacq; } $myusoqwwewieagou = $this->omaiscgewmaukawu($skeuoeoiuwwyqwou, $gcggigoeyymgeaoc); if (!$myusoqwwewieagou) { goto mccimkgwkkamsime; } $gcggigoeyymgeaoc->add_panel($myusoqwwewieagou); $this->aqoswsqkkogggmkc($gcggigoeyymgeaoc, $mgiqqesweuqmsymo); mccimkgwkkamsime: ucaoyoamaycsiacq: iuyagqakcieasiua: guqmgiqaaowaauyo: } qweyymyuuqwcmkqg: $this->aqoswsqkkogggmkc($gcggigoeyymgeaoc, $this->suuogccckocgseyg()); oasisywuwssumsok: } public function aqoswsqkkogggmkc($gcggigoeyymgeaoc, $mgiqqesweuqmsymo) { if (!is_array($mgiqqesweuqmsymo)) { goto wiaesksmicgikqcm; } foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) { if (!$awcmekyiwwkeyisq instanceof Section) { goto auaigccmwqwsqsku; } $ikgwqyuyckaewsow = $awcmekyiwwkeyisq->ugmceccgwaaaigiy(); if (!$ikgwqyuyckaewsow) { goto measoqewessauqma; } $kqcoqkucyacciaoe = $this->omaiscgewmaukawu($awcmekyiwwkeyisq, $gcggigoeyymgeaoc); if (!$kqcoqkucyacciaoe) { goto qckouamqueqiykqi; } $gcggigoeyymgeaoc->add_section($kqcoqkucyacciaoe); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto kieyoaoawqacqamy; } $gcggigoeyymgeaoc->add_setting($this->uyosoqisciuoyaqg($aiowsaccomcoikus, $gcggigoeyymgeaoc)); $gcggigoeyymgeaoc->add_control($this->iqumywysgqckgccw($aiowsaccomcoikus, $awcmekyiwwkeyisq->mwikyscisascoeea(), $gcggigoeyymgeaoc)); kieyoaoawqacqamy: eciksmgaqikwegwq: } okagauksoqkoqygi: qckouamqueqiykqi: measoqewessauqma: auaigccmwqwsqsku: iokemmkgmcaksiqu: } iaoyeugekskmewgs: wiaesksmicgikqcm: } private function omaiscgewmaukawu(Segment $oceoauekaygmuoko, $gcggigoeyymgeaoc) { $ymaucmwyqwuuqyqe = null; if (!($oceoauekaygmuoko && $gcggigoeyymgeaoc)) { goto gqaimiooakyykccy; } $sqeykgyoooqysmca = $oceoauekaygmuoko->gueasuouwqysmomu(); if (!class_exists($sqeykgyoooqysmca)) { goto mcucegiogmuyogki; } $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($gcggigoeyymgeaoc, $oceoauekaygmuoko->mwikyscisascoeea(), $oceoauekaygmuoko->sacmkccceuywoqsq()); mcucegiogmuyogki: gqaimiooakyykccy: return $ymaucmwyqwuuqyqe; } private function iqumywysgqckgccw(Field $aiowsaccomcoikus, $awcmekyiwwkeyisq, $gcggigoeyymgeaoc) : ?WP_Customize_Control { $ymaucmwyqwuuqyqe = null; if (!$gcggigoeyymgeaoc) { goto gykuaukukosiocoy; } $ywmkwiwkosakssii = ["\154\141\x62\145\x6c" => $aiowsaccomcoikus->aakmagwggmkoiiyu(), "\x73\x65\x63\164\151\157\156" => $awcmekyiwwkeyisq, "\163\145\164\x74\x69\x6e\147\163" => $aiowsaccomcoikus->mwikyscisascoeea(), "\x70\x72\151\157\162\151\164\x79" => $aiowsaccomcoikus->yywskysiycwkwsgw(), "\144\145\163\x63\162\151\x70\164\151\157\156" => $aiowsaccomcoikus->meqceykmywmqgoym()]; $sqeykgyoooqysmca = Control::class; if (!$aiowsaccomcoikus instanceof Media) { goto agemeseegiuuowgo; } $sqeykgyoooqysmca = WP_Customize_Image_Control::class; agemeseegiuuowgo: $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($gcggigoeyymgeaoc, $aiowsaccomcoikus->mwikyscisascoeea(), $ywmkwiwkosakssii); if (!$ymaucmwyqwuuqyqe instanceof Control) { goto goswwiomuackymqi; } $ymaucmwyqwuuqyqe->kqgkscycaasckiae($aiowsaccomcoikus); goswwiomuackymqi: gykuaukukosiocoy: return $ymaucmwyqwuuqyqe; } private function uyosoqisciuoyaqg(Field $aiowsaccomcoikus, $gcggigoeyymgeaoc) : ?Setting { $ymaucmwyqwuuqyqe = null; if (!$gcggigoeyymgeaoc) { goto uuisaeysawuagysg; } $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); if (class_exists($sqeykgyoooqysmca)) { goto camawumockccayaq; } $sqeykgyoooqysmca = Setting::class; camawumockccayaq: $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($aiowsaccomcoikus, $gcggigoeyymgeaoc); uuisaeysawuagysg: return $ymaucmwyqwuuqyqe; } public function qeeoggccsyqiegea() : array { return $this->panels; } public function iqkkeyeieoyicoyu(Panel $skeuoeoiuwwyqwou) : self { $this->panels[$skeuoeoiuwwyqwou->mwikyscisascoeea()] = $skeuoeoiuwwyqwou; return $this; } public function suuogccckocgseyg() : array { return $this->sections; } public function kwkugmqouisgkqig(Section $awcmekyiwwkeyisq) : self { $this->sections[$awcmekyiwwkeyisq->mwikyscisascoeea()] = $awcmekyiwwkeyisq; return $this; } public function squkaueaysyeqwuy($aokagokqyuysuksm, $meqocwsecsywiiqs) : Panel { return new Panel($this->mwikyscisascoeea() . "\x5f{$aokagokqyuysuksm}", $meqocwsecsywiiqs); } public function iiwyyacwekkgigis($aokagokqyuysuksm, $meqocwsecsywiiqs) : Section { return new Section($aokagokqyuysuksm, $meqocwsecsywiiqs); } public function giiuwsmyumqwwiyq($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = false) { static $qiouiwasaauyaaue; if (isset($qiouiwasaauyaaue[$ymqmyyeuycgmigyo])) { goto qowcwmsiyscackaa; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; switch ($this->type) { case "\x74\150\145\155\145\137\x6d\x6f\x64\x65": $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->mqcsicqwemggekye($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); goto ggqeakyaggiuegek; case "\x73\151\x74\145\x5f\157\x70\x74\x69\157\156": $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->kuaqqosyyoqiueym($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); goto ggqeakyaggiuegek; case "\165\x73\145\162\x5f\x6d\x65\x74\141": $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->issssuygyewuaswa()->igawqaomowicuayw($ymqmyyeuycgmigyo); goto ggqeakyaggiuegek; } usgcoawgqswoeiec: ggqeakyaggiuegek: $qiouiwasaauyaaue[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; goto aqigiwmamkowomiw; qowcwmsiyscackaa: $eqgoocgaqwqcimie = $qiouiwasaauyaaue[$ymqmyyeuycgmigyo]; aqigiwmamkowomiw: return $eqgoocgaqwqcimie; } public abstract function yogecqociwgqoscg(); }
