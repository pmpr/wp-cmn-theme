<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             621f3d639b495             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Theme\Customize; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\FormMaker\Admin\Field\File; use Pmpr\Common\Foundation\FormMaker\Admin\Traits\FieldTrait; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Theme\Customize\Segment\Panel; use Pmpr\Common\Theme\Customize\Segment\Section; use Pmpr\Common\Theme\Customize\Segment\Segment; use Pmpr\Common\Theme\Customize\Setting\Setting; use Pmpr\Common\Theme\Customize\Setting\SiteOption; use WP_Customize_Control; use WP_Customize_Cropped_Image_Control; use WP_Customize_Image_Control; use WP_Customize_Manager; abstract class Customizer extends Common { use FieldTrait; protected ?string $id = null; protected array $types = []; protected ?string $type = "\x74\x68\145\155\x65\137\155\157\144\145"; protected array $panels = []; protected array $sections = []; public function __construct() { $this->kumkkwiqqiicsswu(); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\143\x75\163\164\157\155\x69\x7a\x65\x5f\x72\x65\x67\x69\x73\x74\145\x72", [$this, "\143\x6f\155\163\x67\155\143\x77\143\x63\x79\x77\x6b\151\x75\x6f"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\141\x64\x64\137\164\167\151\x67\x5f\x66\165\x6e\x63\x74\151\x6f\156\x73"), [$this, "\x73\x6b\167\x75\x6d\155\x67\157\x6f\143\143\x67\171\x6d\141\x63"]); } public function skwummgooccgymac($eyoesceegakeygsi) { $eyoesceegakeygsi->kmmegqceukkkawme("\143\165\163\164\157\155\x69\172\145\162\x5f\x6f\x70\164\151\x6f\x6e", [$this, "\147\x69\151\165\167\x73\155\x79\x75\x6d\161\x77\167\x69\171\161"]); } public function mwikyscisascoeea() : ?string { return $this->id; } public function gueasuouwqysmomu() : ?string { $qgeeqyucwycemwmo = $this->mwoyqeeigwqoamiw(); return ManipulateArray::get($qgeeqyucwycemwmo, $this->type); } public function mwoyqeeigwqoamiw() : array { return $this->types; } public function kumkkwiqqiicsswu() { $this->types = ["\x74\x68\145\x6d\x65\x5f\x6d\157\144\x65" => Setting::class, "\163\151\164\145\x5f\x6f\160\164\151\157\x6e" => SiteOption::class]; } public final function comsgmcwccywkiuo($gcggigoeyymgeaoc) { if (!$gcggigoeyymgeaoc instanceof WP_Customize_Manager) { goto iwekmyyccgiyuecc; } $this->yogecqociwgqoscg(); $cegumcycsaqqaioo = $this->qeeoggccsyqiegea(); foreach ($cegumcycsaqqaioo as $skeuoeoiuwwyqwou) { if (!$skeuoeoiuwwyqwou instanceof Panel) { goto ogsaaqsaogcqiouy; } $mgiqqesweuqmsymo = $skeuoeoiuwwyqwou->suuogccckocgseyg(); if (!$mgiqqesweuqmsymo) { goto ousiuuwgwkiyikyq; } $myusoqwwewieagou = $this->omaiscgewmaukawu($skeuoeoiuwwyqwou, $gcggigoeyymgeaoc); if (!$myusoqwwewieagou) { goto kqqiegkuqagcqsya; } $gcggigoeyymgeaoc->add_panel($myusoqwwewieagou); $this->aqoswsqkkogggmkc($gcggigoeyymgeaoc, $mgiqqesweuqmsymo); kqqiegkuqagcqsya: ousiuuwgwkiyikyq: ogsaaqsaogcqiouy: miweggwqeiaeweia: } kkumywowcoycymeo: $this->aqoswsqkkogggmkc($gcggigoeyymgeaoc, $this->suuogccckocgseyg()); iwekmyyccgiyuecc: } public function aqoswsqkkogggmkc($gcggigoeyymgeaoc, $mgiqqesweuqmsymo) { if (!is_array($mgiqqesweuqmsymo)) { goto gicyayswqyuoekcq; } foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) { if (!$awcmekyiwwkeyisq instanceof Section) { goto kosaqwikueyksqmw; } $ikgwqyuyckaewsow = $awcmekyiwwkeyisq->ugmceccgwaaaigiy(); if (!$ikgwqyuyckaewsow) { goto mqkmcysgoiaouiwm; } $kqcoqkucyacciaoe = $this->omaiscgewmaukawu($awcmekyiwwkeyisq, $gcggigoeyymgeaoc); if (!$kqcoqkucyacciaoe) { goto ykomgumacooyomsk; } $gcggigoeyymgeaoc->add_section($kqcoqkucyacciaoe); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto ogqmesokykywseys; } $gcggigoeyymgeaoc->add_setting($this->uyosoqisciuoyaqg($aiowsaccomcoikus, $gcggigoeyymgeaoc)); $gcggigoeyymgeaoc->add_control($this->iqumywysgqckgccw($aiowsaccomcoikus, $awcmekyiwwkeyisq->mwikyscisascoeea(), $gcggigoeyymgeaoc)); ogqmesokykywseys: awoaooyoeoyeeqee: } cwwmimggaaecmucw: ykomgumacooyomsk: mqkmcysgoiaouiwm: kosaqwikueyksqmw: aomysykcgikegiau: } ikqqskkqqwmwssoo: gicyayswqyuoekcq: } private function omaiscgewmaukawu(Segment $oceoauekaygmuoko, $gcggigoeyymgeaoc) { $ymaucmwyqwuuqyqe = null; if (!($oceoauekaygmuoko && $gcggigoeyymgeaoc)) { goto uiosisocuwokwkie; } $sqeykgyoooqysmca = $oceoauekaygmuoko->gueasuouwqysmomu(); if (!class_exists($sqeykgyoooqysmca)) { goto iikiiioqiyegyaak; } $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($gcggigoeyymgeaoc, $oceoauekaygmuoko->mwikyscisascoeea(), $oceoauekaygmuoko->sacmkccceuywoqsq()); iikiiioqiyegyaak: uiosisocuwokwkie: return $ymaucmwyqwuuqyqe; } private function iqumywysgqckgccw(Field $aiowsaccomcoikus, $awcmekyiwwkeyisq, $gcggigoeyymgeaoc) : ?WP_Customize_Control { $ymaucmwyqwuuqyqe = null; if (!($aiowsaccomcoikus && $gcggigoeyymgeaoc)) { goto qmkaeeomgkwggoyo; } $ywmkwiwkosakssii = ["\x6c\141\142\x65\154" => $aiowsaccomcoikus->aakmagwggmkoiiyu(), "\163\x65\143\x74\151\x6f\156" => $awcmekyiwwkeyisq, "\163\x65\164\164\x69\x6e\147\x73" => $aiowsaccomcoikus->mwikyscisascoeea(), "\160\162\x69\157\162\151\x74\x79" => $aiowsaccomcoikus->yywskysiycwkwsgw(), "\144\x65\x73\x63\x72\151\160\164\x69\x6f\156" => $aiowsaccomcoikus->uuwsoaqmkwcgaqes()]; $sqeykgyoooqysmca = Control::class; if (!$aiowsaccomcoikus instanceof File) { goto cuumeogeomowqisc; } $sqeykgyoooqysmca = WP_Customize_Image_Control::class; cuumeogeomowqisc: $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($gcggigoeyymgeaoc, $aiowsaccomcoikus->mwikyscisascoeea(), $ywmkwiwkosakssii); if (!$ymaucmwyqwuuqyqe instanceof Control) { goto gcckqucukawcasgk; } $ymaucmwyqwuuqyqe->kqgkscycaasckiae($aiowsaccomcoikus); gcckqucukawcasgk: qmkaeeomgkwggoyo: return $ymaucmwyqwuuqyqe; } private function uyosoqisciuoyaqg(Field $aiowsaccomcoikus, $gcggigoeyymgeaoc) : ?Setting { $ymaucmwyqwuuqyqe = null; if (!($aiowsaccomcoikus && $gcggigoeyymgeaoc)) { goto ocaguquugeamqckq; } $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); if (class_exists($sqeykgyoooqysmca)) { goto csammceowmqwaamq; } $sqeykgyoooqysmca = Setting::class; csammceowmqwaamq: $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($aiowsaccomcoikus, $gcggigoeyymgeaoc); ocaguquugeamqckq: return $ymaucmwyqwuuqyqe; } public function qeeoggccsyqiegea() : array { return $this->panels; } public function iqkkeyeieoyicoyu(Panel $skeuoeoiuwwyqwou) : self { $this->panels[$skeuoeoiuwwyqwou->mwikyscisascoeea()] = $skeuoeoiuwwyqwou; return $this; } public function suuogccckocgseyg() : array { return $this->sections; } public function kwkugmqouisgkqig(Section $awcmekyiwwkeyisq) : self { $this->sections[$awcmekyiwwkeyisq->mwikyscisascoeea()] = $awcmekyiwwkeyisq; return $this; } public function squkaueaysyeqwuy($aokagokqyuysuksm, $meqocwsecsywiiqs) : Panel { return new Panel($this->mwikyscisascoeea() . "\x5f{$aokagokqyuysuksm}", $meqocwsecsywiiqs); } public function iiwyyacwekkgigis($aokagokqyuysuksm, $meqocwsecsywiiqs) : Section { return new Section($aokagokqyuysuksm, $meqocwsecsywiiqs); } public function giiuwsmyumqwwiyq($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = false) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; switch ($this->type) { case "\x74\x68\145\x6d\x65\137\155\157\144\x65": $eqgoocgaqwqcimie = DecoratorOption::mqcsicqwemggekye($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); goto eekcoeikaeaaeyii; case "\x73\151\x74\x65\x5f\x6f\x70\x74\x69\x6f\156": $eqgoocgaqwqcimie = DecoratorOption::kuaqqosyyoqiueym($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); goto eekcoeikaeaaeyii; case "\x75\x73\x65\x72\x5f\x6d\145\164\x61": $eqgoocgaqwqcimie = ManipulateUser::igawqaomowicuayw($ymqmyyeuycgmigyo); goto eekcoeikaeaaeyii; } cogywoqcqummsyus: eekcoeikaeaaeyii: return $eqgoocgaqwqcimie; } public abstract function yogecqociwgqoscg(); }
