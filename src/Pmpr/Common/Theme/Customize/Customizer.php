<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61f6d9f4ac432             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Theme\Customize; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\FormMaker\Admin\Field\File; use Pmpr\Common\Foundation\FormMaker\Admin\Traits\FieldTrait; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Theme\Customize\Segment\Panel; use Pmpr\Common\Theme\Customize\Segment\Section; use Pmpr\Common\Theme\Customize\Segment\Segment; use Pmpr\Common\Theme\Customize\Setting\Setting; use Pmpr\Common\Theme\Customize\Setting\SiteOption; use WP_Customize_Control; use WP_Customize_Cropped_Image_Control; use WP_Customize_Image_Control; use WP_Customize_Manager; abstract class Customizer extends Common { use FieldTrait; protected ?string $id = null; protected array $types = []; protected ?string $type = "\x74\x68\x65\155\145\x5f\155\157\x64\x65"; protected array $panels = []; protected array $sections = []; public function __construct() { $this->kumkkwiqqiicsswu(); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\143\x75\163\164\157\x6d\151\172\145\x5f\162\145\x67\151\163\x74\x65\162", [$this, "\x63\157\155\x73\147\155\x63\x77\143\143\171\x77\x6b\x69\165\x6f"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x61\x64\x64\137\164\167\x69\x67\x5f\146\165\156\x63\164\x69\x6f\x6e\x73"), [$this, "\163\153\167\165\x6d\x6d\147\x6f\157\x63\x63\x67\x79\x6d\141\143"]); } public function skwummgooccgymac($eyoesceegakeygsi) { $eyoesceegakeygsi->kmmegqceukkkawme("\x63\x75\x73\x74\x6f\x6d\151\172\x65\x72\137\x6f\160\164\151\157\x6e", [$this, "\x67\x69\151\165\x77\x73\155\171\x75\155\x71\167\167\151\x79\161"]); } public function mwikyscisascoeea() : ?string { return $this->id; } public function gueasuouwqysmomu() : ?string { $qgeeqyucwycemwmo = $this->mwoyqeeigwqoamiw(); return ManipulateArray::get($qgeeqyucwycemwmo, $this->type); } public function mwoyqeeigwqoamiw() : array { return $this->types; } public function kumkkwiqqiicsswu() { $this->types = ["\x74\x68\x65\x6d\x65\x5f\x6d\157\144\x65" => Setting::class, "\163\x69\x74\145\x5f\x6f\x70\x74\x69\x6f\156" => SiteOption::class]; } public final function comsgmcwccywkiuo($gcggigoeyymgeaoc) { if (!$gcggigoeyymgeaoc instanceof WP_Customize_Manager) { goto ciykoyeioqgyaeqo; } $this->yogecqociwgqoscg(); $cegumcycsaqqaioo = $this->qeeoggccsyqiegea(); foreach ($cegumcycsaqqaioo as $skeuoeoiuwwyqwou) { if (!$skeuoeoiuwwyqwou instanceof Panel) { goto asiqwuoswmigcaki; } $mgiqqesweuqmsymo = $skeuoeoiuwwyqwou->suuogccckocgseyg(); if (!$mgiqqesweuqmsymo) { goto wcugqegqsuuuwqao; } $myusoqwwewieagou = $this->omaiscgewmaukawu($skeuoeoiuwwyqwou, $gcggigoeyymgeaoc); if (!$myusoqwwewieagou) { goto iwsuawwqomaowuii; } $gcggigoeyymgeaoc->add_panel($myusoqwwewieagou); $this->aqoswsqkkogggmkc($gcggigoeyymgeaoc, $mgiqqesweuqmsymo); iwsuawwqomaowuii: wcugqegqsuuuwqao: asiqwuoswmigcaki: qoqskyuuwueqkquk: } wagqgeqymeqoeuyi: $this->aqoswsqkkogggmkc($gcggigoeyymgeaoc, $this->suuogccckocgseyg()); ciykoyeioqgyaeqo: } public function aqoswsqkkogggmkc($gcggigoeyymgeaoc, $mgiqqesweuqmsymo) { if (!is_array($mgiqqesweuqmsymo)) { goto wyuemgggaqogsmsq; } foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) { if (!$awcmekyiwwkeyisq instanceof Section) { goto samwkqgwouggsguc; } $ikgwqyuyckaewsow = $awcmekyiwwkeyisq->ugmceccgwaaaigiy(); if (!$ikgwqyuyckaewsow) { goto oomguqikqokqwgku; } $kqcoqkucyacciaoe = $this->omaiscgewmaukawu($awcmekyiwwkeyisq, $gcggigoeyymgeaoc); if (!$kqcoqkucyacciaoe) { goto acsqgiuageaasiyy; } $gcggigoeyymgeaoc->add_section($kqcoqkucyacciaoe); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto mugqyyeayeyggqqk; } $gcggigoeyymgeaoc->add_setting($this->uyosoqisciuoyaqg($aiowsaccomcoikus, $gcggigoeyymgeaoc)); $gcggigoeyymgeaoc->add_control($this->iqumywysgqckgccw($aiowsaccomcoikus, $awcmekyiwwkeyisq->mwikyscisascoeea(), $gcggigoeyymgeaoc)); mugqyyeayeyggqqk: ouamogymawucwswu: } emmsycooskoqmgeg: acsqgiuageaasiyy: oomguqikqokqwgku: samwkqgwouggsguc: qgeugwymkkiacwoc: } mqicocmqegwukkwg: wyuemgggaqogsmsq: } private function omaiscgewmaukawu(Segment $oceoauekaygmuoko, $gcggigoeyymgeaoc) { $ymaucmwyqwuuqyqe = null; if (!($oceoauekaygmuoko && $gcggigoeyymgeaoc)) { goto kkumywowcoycymeo; } $sqeykgyoooqysmca = $oceoauekaygmuoko->gueasuouwqysmomu(); if (!class_exists($sqeykgyoooqysmca)) { goto guykyqecgswcsmws; } $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($gcggigoeyymgeaoc, $oceoauekaygmuoko->mwikyscisascoeea(), $oceoauekaygmuoko->sacmkccceuywoqsq()); guykyqecgswcsmws: kkumywowcoycymeo: return $ymaucmwyqwuuqyqe; } private function iqumywysgqckgccw(Field $aiowsaccomcoikus, $awcmekyiwwkeyisq, $gcggigoeyymgeaoc) : ?WP_Customize_Control { $ymaucmwyqwuuqyqe = null; if (!($aiowsaccomcoikus && $gcggigoeyymgeaoc)) { goto ousiuuwgwkiyikyq; } $ywmkwiwkosakssii = ["\x6c\141\142\x65\x6c" => $aiowsaccomcoikus->aakmagwggmkoiiyu(), "\x73\x65\143\164\151\157\156" => $awcmekyiwwkeyisq, "\x73\145\x74\x74\151\156\147\x73" => $aiowsaccomcoikus->mwikyscisascoeea(), "\160\x72\151\157\162\x69\164\171" => $aiowsaccomcoikus->yywskysiycwkwsgw(), "\x64\145\163\143\x72\151\160\x74\151\157\x6e" => $aiowsaccomcoikus->uuwsoaqmkwcgaqes()]; $sqeykgyoooqysmca = Control::class; if (!$aiowsaccomcoikus instanceof File) { goto miweggwqeiaeweia; } $sqeykgyoooqysmca = WP_Customize_Image_Control::class; miweggwqeiaeweia: $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($gcggigoeyymgeaoc, $aiowsaccomcoikus->mwikyscisascoeea(), $ywmkwiwkosakssii); if (!$ymaucmwyqwuuqyqe instanceof Control) { goto kqqiegkuqagcqsya; } $ymaucmwyqwuuqyqe->kqgkscycaasckiae($aiowsaccomcoikus); kqqiegkuqagcqsya: ousiuuwgwkiyikyq: return $ymaucmwyqwuuqyqe; } private function uyosoqisciuoyaqg(Field $aiowsaccomcoikus, $gcggigoeyymgeaoc) : ?Setting { $ymaucmwyqwuuqyqe = null; if (!($aiowsaccomcoikus && $gcggigoeyymgeaoc)) { goto iwekmyyccgiyuecc; } $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); if (class_exists($sqeykgyoooqysmca)) { goto ogsaaqsaogcqiouy; } $sqeykgyoooqysmca = Setting::class; ogsaaqsaogcqiouy: $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($aiowsaccomcoikus, $gcggigoeyymgeaoc); iwekmyyccgiyuecc: return $ymaucmwyqwuuqyqe; } public function qeeoggccsyqiegea() : array { return $this->panels; } public function iqkkeyeieoyicoyu(Panel $skeuoeoiuwwyqwou) : self { $this->panels[$skeuoeoiuwwyqwou->mwikyscisascoeea()] = $skeuoeoiuwwyqwou; return $this; } public function suuogccckocgseyg() : array { return $this->sections; } public function kwkugmqouisgkqig(Section $awcmekyiwwkeyisq) : self { $this->sections[$awcmekyiwwkeyisq->mwikyscisascoeea()] = $awcmekyiwwkeyisq; return $this; } public function squkaueaysyeqwuy($aokagokqyuysuksm, $meqocwsecsywiiqs) : Panel { return new Panel($this->mwikyscisascoeea() . "\137{$aokagokqyuysuksm}", $meqocwsecsywiiqs); } public function iiwyyacwekkgigis($aokagokqyuysuksm, $meqocwsecsywiiqs) : Section { return new Section($aokagokqyuysuksm, $meqocwsecsywiiqs); } public function giiuwsmyumqwwiyq($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = false) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; switch ($this->type) { case "\164\x68\x65\x6d\145\137\155\x6f\x64\145": $eqgoocgaqwqcimie = DecoratorOption::mqcsicqwemggekye($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); goto ikqqskkqqwmwssoo; case "\x73\151\164\x65\x5f\157\x70\x74\151\x6f\156": $eqgoocgaqwqcimie = DecoratorOption::kuaqqosyyoqiueym($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); goto ikqqskkqqwmwssoo; case "\x75\x73\x65\162\x5f\x6d\x65\x74\141": $eqgoocgaqwqcimie = ManipulateUser::igawqaomowicuayw($ymqmyyeuycgmigyo); goto ikqqskkqqwmwssoo; } aomysykcgikegiau: ikqqskkqqwmwssoo: return $eqgoocgaqwqcimie; } public abstract function yogecqociwgqoscg(); }
