<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c027cf2c189             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Theme\Customize; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\FormMaker\Admin\Field\File; use Pmpr\Common\Foundation\FormMaker\Admin\Traits\FieldTrait; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Theme\Customize\Segment\Panel; use Pmpr\Common\Theme\Customize\Segment\Section; use Pmpr\Common\Theme\Customize\Segment\Segment; use Pmpr\Common\Theme\Customize\Setting\Setting; use Pmpr\Common\Theme\Customize\Setting\SiteOption; use WP_Customize_Control; use WP_Customize_Cropped_Image_Control; use WP_Customize_Image_Control; use WP_Customize_Manager; abstract class Customizer extends Common { use FieldTrait; protected ?string $id = null; protected array $types = []; protected ?string $type = "\x74\x68\145\x6d\x65\x5f\155\157\144\145"; protected array $panels = []; protected array $sections = []; public function __construct() { $this->kumkkwiqqiicsswu(); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\143\x75\x73\164\157\155\151\x7a\145\x5f\162\145\x67\151\163\164\x65\162", [$this, "\143\x6f\x6d\x73\147\155\143\167\143\143\x79\167\153\151\165\x6f"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\141\x64\144\137\164\167\151\147\137\146\165\156\143\164\x69\x6f\156\x73"), [$this, "\163\153\167\165\155\155\147\x6f\157\143\x63\x67\x79\x6d\141\143"]); } public function skwummgooccgymac($eyoesceegakeygsi) { $eyoesceegakeygsi->kmmegqceukkkawme("\143\x75\163\164\157\x6d\x69\x7a\145\162\137\157\160\x74\x69\157\156", [$this, "\x67\x69\151\165\167\x73\x6d\x79\165\x6d\x71\x77\x77\x69\x79\161"]); } public function mwikyscisascoeea() : ?string { return $this->id; } public function gueasuouwqysmomu() : ?string { $qgeeqyucwycemwmo = $this->mwoyqeeigwqoamiw(); return ManipulateArray::get($qgeeqyucwycemwmo, $this->type); } public function mwoyqeeigwqoamiw() : array { return $this->types; } public function kumkkwiqqiicsswu() { $this->types = ["\x74\x68\x65\155\x65\137\155\157\144\145" => Setting::class, "\163\151\x74\145\x5f\157\160\164\x69\x6f\x6e" => SiteOption::class]; } public final function comsgmcwccywkiuo($gcggigoeyymgeaoc) { if (!$gcggigoeyymgeaoc instanceof WP_Customize_Manager) { goto kwagwqyusyiyoaqs; } $this->yogecqociwgqoscg(); $cegumcycsaqqaioo = $this->qeeoggccsyqiegea(); foreach ($cegumcycsaqqaioo as $skeuoeoiuwwyqwou) { if (!$skeuoeoiuwwyqwou instanceof Panel) { goto eqkauqciwewmgeoi; } $mgiqqesweuqmsymo = $skeuoeoiuwwyqwou->suuogccckocgseyg(); if (!$mgiqqesweuqmsymo) { goto sciwggaeogcoesiu; } $myusoqwwewieagou = $this->omaiscgewmaukawu($skeuoeoiuwwyqwou, $gcggigoeyymgeaoc); if (!$myusoqwwewieagou) { goto mkwskuycuyguqqok; } $gcggigoeyymgeaoc->add_panel($myusoqwwewieagou); $this->aqoswsqkkogggmkc($gcggigoeyymgeaoc, $mgiqqesweuqmsymo); mkwskuycuyguqqok: sciwggaeogcoesiu: eqkauqciwewmgeoi: kuicqywysciceggs: } cuykwgmswkskqkyi: $this->aqoswsqkkogggmkc($gcggigoeyymgeaoc, $this->suuogccckocgseyg()); kwagwqyusyiyoaqs: } public function aqoswsqkkogggmkc($gcggigoeyymgeaoc, $mgiqqesweuqmsymo) { if (!is_array($mgiqqesweuqmsymo)) { goto yiwiqaqmwiogawym; } foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) { if (!$awcmekyiwwkeyisq instanceof Section) { goto ocokwuuquaokmasc; } $ikgwqyuyckaewsow = $awcmekyiwwkeyisq->ugmceccgwaaaigiy(); if (!$ikgwqyuyckaewsow) { goto cggowoquuiwqkyew; } $kqcoqkucyacciaoe = $this->omaiscgewmaukawu($awcmekyiwwkeyisq, $gcggigoeyymgeaoc); if (!$kqcoqkucyacciaoe) { goto uukumskkeggaowck; } $gcggigoeyymgeaoc->add_section($kqcoqkucyacciaoe); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto eequksumcoogyoem; } $gcggigoeyymgeaoc->add_setting($this->uyosoqisciuoyaqg($aiowsaccomcoikus, $gcggigoeyymgeaoc)); $gcggigoeyymgeaoc->add_control($this->iqumywysgqckgccw($aiowsaccomcoikus, $awcmekyiwwkeyisq->mwikyscisascoeea(), $gcggigoeyymgeaoc)); eequksumcoogyoem: sqiciiuwmykocycc: } iomcaiwewsawiamu: uukumskkeggaowck: cggowoquuiwqkyew: ocokwuuquaokmasc: kiqogmwcgcamwiig: } yowsmsiyimmimemc: yiwiqaqmwiogawym: } private function omaiscgewmaukawu(Segment $oceoauekaygmuoko, $gcggigoeyymgeaoc) { $ymaucmwyqwuuqyqe = null; if (!($oceoauekaygmuoko && $gcggigoeyymgeaoc)) { goto meawswgwagoqgkye; } $sqeykgyoooqysmca = $oceoauekaygmuoko->gueasuouwqysmomu(); if (!class_exists($sqeykgyoooqysmca)) { goto goacqqsgaaigyuaw; } $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($gcggigoeyymgeaoc, $oceoauekaygmuoko->mwikyscisascoeea(), $oceoauekaygmuoko->sacmkccceuywoqsq()); goacqqsgaaigyuaw: meawswgwagoqgkye: return $ymaucmwyqwuuqyqe; } private function iqumywysgqckgccw(Field $aiowsaccomcoikus, $awcmekyiwwkeyisq, $gcggigoeyymgeaoc) : ?WP_Customize_Control { $ymaucmwyqwuuqyqe = null; if (!($aiowsaccomcoikus && $gcggigoeyymgeaoc)) { goto mswsoaimesegiiic; } $ywmkwiwkosakssii = ["\x6c\141\x62\x65\x6c" => $aiowsaccomcoikus->aakmagwggmkoiiyu(), "\163\145\143\164\x69\x6f\156" => $awcmekyiwwkeyisq, "\163\x65\x74\x74\151\x6e\x67\x73" => $aiowsaccomcoikus->mwikyscisascoeea(), "\160\162\151\x6f\x72\x69\164\x79" => $aiowsaccomcoikus->yywskysiycwkwsgw(), "\x64\145\x73\143\162\x69\160\164\151\x6f\x6e" => $aiowsaccomcoikus->uuwsoaqmkwcgaqes()]; $sqeykgyoooqysmca = Control::class; if (!$aiowsaccomcoikus instanceof File) { goto wcesymwqykqoyuqk; } $sqeykgyoooqysmca = WP_Customize_Image_Control::class; wcesymwqykqoyuqk: $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($gcggigoeyymgeaoc, $aiowsaccomcoikus->mwikyscisascoeea(), $ywmkwiwkosakssii); if (!$ymaucmwyqwuuqyqe instanceof Control) { goto usqgaogkqgemuima; } $ymaucmwyqwuuqyqe->kqgkscycaasckiae($aiowsaccomcoikus); usqgaogkqgemuima: mswsoaimesegiiic: return $ymaucmwyqwuuqyqe; } private function uyosoqisciuoyaqg(Field $aiowsaccomcoikus, $gcggigoeyymgeaoc) : ?Setting { $ymaucmwyqwuuqyqe = null; if (!($aiowsaccomcoikus && $gcggigoeyymgeaoc)) { goto kecwuwwcwokuksyq; } $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); if (class_exists($sqeykgyoooqysmca)) { goto egasokooagakisiy; } $sqeykgyoooqysmca = Setting::class; egasokooagakisiy: $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($aiowsaccomcoikus, $gcggigoeyymgeaoc); kecwuwwcwokuksyq: return $ymaucmwyqwuuqyqe; } public function qeeoggccsyqiegea() : array { return $this->panels; } public function iqkkeyeieoyicoyu(Panel $skeuoeoiuwwyqwou) : self { $this->panels[$skeuoeoiuwwyqwou->mwikyscisascoeea()] = $skeuoeoiuwwyqwou; return $this; } public function suuogccckocgseyg() : array { return $this->sections; } public function kwkugmqouisgkqig(Section $awcmekyiwwkeyisq) : self { $this->sections[$awcmekyiwwkeyisq->mwikyscisascoeea()] = $awcmekyiwwkeyisq; return $this; } public function squkaueaysyeqwuy($aokagokqyuysuksm, $meqocwsecsywiiqs) : Panel { return new Panel($this->mwikyscisascoeea() . "\137{$aokagokqyuysuksm}", $meqocwsecsywiiqs); } public function iiwyyacwekkgigis($aokagokqyuysuksm, $meqocwsecsywiiqs) : Section { return new Section($aokagokqyuysuksm, $meqocwsecsywiiqs); } public function giiuwsmyumqwwiyq($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = false) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; switch ($this->type) { case "\164\x68\x65\x6d\x65\137\x6d\x6f\x64\145": $eqgoocgaqwqcimie = DecoratorOption::mqcsicqwemggekye($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); goto qgegkeomwscwwiuw; case "\x73\x69\x74\145\x5f\x6f\x70\x74\x69\157\x6e": $eqgoocgaqwqcimie = DecoratorOption::kuaqqosyyoqiueym($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); goto qgegkeomwscwwiuw; case "\x75\x73\x65\162\137\155\x65\164\141": $eqgoocgaqwqcimie = ManipulateUser::igawqaomowicuayw($ymqmyyeuycgmigyo); goto qgegkeomwscwwiuw; } qmiwsequckckoaei: qgegkeomwscwwiuw: return $eqgoocgaqwqcimie; } public abstract function yogecqociwgqoscg(); }
