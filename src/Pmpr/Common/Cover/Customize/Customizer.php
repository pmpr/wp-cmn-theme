<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642989de227db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Customize; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\FormMaker\Admin\Field\File; use Pmpr\Common\Foundation\FormMaker\Admin\Traits\FieldTrait; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Cover\Customize\Segment\Panel; use Pmpr\Common\Cover\Customize\Segment\Section; use Pmpr\Common\Cover\Customize\Segment\Segment; use Pmpr\Common\Cover\Customize\Setting\Setting; use Pmpr\Common\Cover\Customize\Setting\SiteOption; use WP_Customize_Control; use WP_Customize_Image_Control; use WP_Customize_Manager; abstract class Customizer extends Common { use FieldTrait; protected ?string $id = null; protected array $types = []; protected ?string $type = "\164\150\145\x6d\145\x5f\155\157\x64\145"; protected array $panels = []; protected array $sections = []; public function __construct() { $this->kumkkwiqqiicsswu(); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\143\165\x73\x74\x6f\x6d\151\172\x65\x5f\x72\145\x67\x69\x73\164\x65\x72", [$this, "\143\x6f\x6d\x73\147\x6d\x63\167\143\x63\x79\x77\x6b\151\165\157"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x61\x64\144\137\x74\167\x69\x67\137\x66\x75\x6e\x63\164\x69\x6f\156\x73"), [$this, "\x73\x6b\x77\165\155\155\x67\157\157\143\143\x67\x79\155\x61\143"]); } public function skwummgooccgymac($eyoesceegakeygsi) { $eyoesceegakeygsi->kmmegqceukkkawme("\x63\165\x73\x74\157\155\x69\172\145\x72\x5f\157\160\x74\x69\x6f\x6e", [$this, "\x67\x69\151\x75\167\x73\x6d\x79\165\x6d\x71\x77\x77\x69\x79\161"]); } public function mwikyscisascoeea() : ?string { return $this->id; } public function gueasuouwqysmomu() : ?string { $qgeeqyucwycemwmo = $this->mwoyqeeigwqoamiw(); return ManipulateArray::get($qgeeqyucwycemwmo, $this->type); } public function mwoyqeeigwqoamiw() : array { return $this->types; } public function kumkkwiqqiicsswu() { $this->types = ["\x74\x68\145\155\x65\x5f\x6d\x6f\x64\145" => Setting::class, "\x73\151\x74\145\137\x6f\x70\x74\x69\x6f\156" => SiteOption::class]; } public final function comsgmcwccywkiuo($gcggigoeyymgeaoc) { if (!$gcggigoeyymgeaoc instanceof WP_Customize_Manager) { goto csscmcacoikwsecs; } $this->yogecqociwgqoscg(); $cegumcycsaqqaioo = $this->qeeoggccsyqiegea(); foreach ($cegumcycsaqqaioo as $skeuoeoiuwwyqwou) { if (!$skeuoeoiuwwyqwou instanceof Panel) { goto asmecuqiyyswueqe; } $mgiqqesweuqmsymo = $skeuoeoiuwwyqwou->suuogccckocgseyg(); if (!$mgiqqesweuqmsymo) { goto myoicgcuugciueis; } $myusoqwwewieagou = $this->omaiscgewmaukawu($skeuoeoiuwwyqwou, $gcggigoeyymgeaoc); if (!$myusoqwwewieagou) { goto qwigomakwmyiwkgo; } $gcggigoeyymgeaoc->add_panel($myusoqwwewieagou); $this->aqoswsqkkogggmkc($gcggigoeyymgeaoc, $mgiqqesweuqmsymo); qwigomakwmyiwkgo: myoicgcuugciueis: asmecuqiyyswueqe: qgoiooayqmqqsiok: } qogqewiwmwiwskgm: $this->aqoswsqkkogggmkc($gcggigoeyymgeaoc, $this->suuogccckocgseyg()); csscmcacoikwsecs: } public function aqoswsqkkogggmkc($gcggigoeyymgeaoc, $mgiqqesweuqmsymo) { if (!is_array($mgiqqesweuqmsymo)) { goto iomcaiwewsawiamu; } foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) { if (!$awcmekyiwwkeyisq instanceof Section) { goto kiqogmwcgcamwiig; } $ikgwqyuyckaewsow = $awcmekyiwwkeyisq->ugmceccgwaaaigiy(); if (!$ikgwqyuyckaewsow) { goto yowsmsiyimmimemc; } $kqcoqkucyacciaoe = $this->omaiscgewmaukawu($awcmekyiwwkeyisq, $gcggigoeyymgeaoc); if (!$kqcoqkucyacciaoe) { goto kwagwqyusyiyoaqs; } $gcggigoeyymgeaoc->add_section($kqcoqkucyacciaoe); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto eqkauqciwewmgeoi; } $gcggigoeyymgeaoc->add_setting($this->uyosoqisciuoyaqg($aiowsaccomcoikus, $gcggigoeyymgeaoc)); $gcggigoeyymgeaoc->add_control($this->iqumywysgqckgccw($aiowsaccomcoikus, $awcmekyiwwkeyisq->mwikyscisascoeea(), $gcggigoeyymgeaoc)); eqkauqciwewmgeoi: sciwggaeogcoesiu: } mkwskuycuyguqqok: kwagwqyusyiyoaqs: yowsmsiyimmimemc: kiqogmwcgcamwiig: kuicqywysciceggs: } cuykwgmswkskqkyi: iomcaiwewsawiamu: } private function omaiscgewmaukawu(Segment $oceoauekaygmuoko, $gcggigoeyymgeaoc) { $ymaucmwyqwuuqyqe = null; if (!($oceoauekaygmuoko && $gcggigoeyymgeaoc)) { goto eequksumcoogyoem; } $sqeykgyoooqysmca = $oceoauekaygmuoko->gueasuouwqysmomu(); if (!class_exists($sqeykgyoooqysmca)) { goto sqiciiuwmykocycc; } $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($gcggigoeyymgeaoc, $oceoauekaygmuoko->mwikyscisascoeea(), $oceoauekaygmuoko->sacmkccceuywoqsq()); sqiciiuwmykocycc: eequksumcoogyoem: return $ymaucmwyqwuuqyqe; } private function iqumywysgqckgccw(Field $aiowsaccomcoikus, $awcmekyiwwkeyisq, $gcggigoeyymgeaoc) : ?WP_Customize_Control { $ymaucmwyqwuuqyqe = null; if (!$gcggigoeyymgeaoc) { goto ocokwuuquaokmasc; } $ywmkwiwkosakssii = ["\x6c\x61\x62\145\x6c" => $aiowsaccomcoikus->aakmagwggmkoiiyu(), "\163\145\143\x74\x69\157\156" => $awcmekyiwwkeyisq, "\163\145\x74\x74\x69\156\x67\163" => $aiowsaccomcoikus->mwikyscisascoeea(), "\x70\x72\x69\x6f\x72\151\164\x79" => $aiowsaccomcoikus->yywskysiycwkwsgw(), "\x64\x65\163\x63\162\x69\160\164\151\x6f\156" => $aiowsaccomcoikus->uuwsoaqmkwcgaqes()]; $sqeykgyoooqysmca = Control::class; if (!$aiowsaccomcoikus instanceof File) { goto uukumskkeggaowck; } $sqeykgyoooqysmca = WP_Customize_Image_Control::class; uukumskkeggaowck: $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($gcggigoeyymgeaoc, $aiowsaccomcoikus->mwikyscisascoeea(), $ywmkwiwkosakssii); if (!$ymaucmwyqwuuqyqe instanceof Control) { goto cggowoquuiwqkyew; } $ymaucmwyqwuuqyqe->kqgkscycaasckiae($aiowsaccomcoikus); cggowoquuiwqkyew: ocokwuuquaokmasc: return $ymaucmwyqwuuqyqe; } private function uyosoqisciuoyaqg(Field $aiowsaccomcoikus, $gcggigoeyymgeaoc) : ?Setting { $ymaucmwyqwuuqyqe = null; if (!$gcggigoeyymgeaoc) { goto goacqqsgaaigyuaw; } $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); if (class_exists($sqeykgyoooqysmca)) { goto yiwiqaqmwiogawym; } $sqeykgyoooqysmca = Setting::class; yiwiqaqmwiogawym: $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($aiowsaccomcoikus, $gcggigoeyymgeaoc); goacqqsgaaigyuaw: return $ymaucmwyqwuuqyqe; } public function qeeoggccsyqiegea() : array { return $this->panels; } public function iqkkeyeieoyicoyu(Panel $skeuoeoiuwwyqwou) : self { $this->panels[$skeuoeoiuwwyqwou->mwikyscisascoeea()] = $skeuoeoiuwwyqwou; return $this; } public function suuogccckocgseyg() : array { return $this->sections; } public function kwkugmqouisgkqig(Section $awcmekyiwwkeyisq) : self { $this->sections[$awcmekyiwwkeyisq->mwikyscisascoeea()] = $awcmekyiwwkeyisq; return $this; } public function squkaueaysyeqwuy($aokagokqyuysuksm, $meqocwsecsywiiqs) : Panel { return new Panel($this->mwikyscisascoeea() . "\137{$aokagokqyuysuksm}", $meqocwsecsywiiqs); } public function iiwyyacwekkgigis($aokagokqyuysuksm, $meqocwsecsywiiqs) : Section { return new Section($aokagokqyuysuksm, $meqocwsecsywiiqs); } public function giiuwsmyumqwwiyq($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = false) { static $qiouiwasaauyaaue; if (isset($qiouiwasaauyaaue[$ymqmyyeuycgmigyo])) { goto usqgaogkqgemuima; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; switch ($this->type) { case "\164\150\145\x6d\x65\x5f\155\157\x64\x65": $eqgoocgaqwqcimie = DecoratorOption::mqcsicqwemggekye($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); goto meawswgwagoqgkye; case "\163\x69\164\x65\x5f\x6f\160\x74\151\x6f\x6e": $eqgoocgaqwqcimie = DecoratorOption::kuaqqosyyoqiueym($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); goto meawswgwagoqgkye; case "\165\x73\145\x72\x5f\155\x65\164\x61": $eqgoocgaqwqcimie = ManipulateUser::igawqaomowicuayw($ymqmyyeuycgmigyo); goto meawswgwagoqgkye; } wcesymwqykqoyuqk: meawswgwagoqgkye: $qiouiwasaauyaaue[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; goto mswsoaimesegiiic; usqgaogkqgemuima: $eqgoocgaqwqcimie = $qiouiwasaauyaaue[$ymqmyyeuycgmigyo]; mswsoaimesegiiic: return $eqgoocgaqwqcimie; } public abstract function yogecqociwgqoscg(); }
