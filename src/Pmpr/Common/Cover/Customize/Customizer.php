<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6445347dbc1d4             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Customize; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\FormMaker\Admin\Field\File; use Pmpr\Common\Foundation\FormMaker\Admin\Traits\FieldTrait; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Cover\Customize\Segment\Panel; use Pmpr\Common\Cover\Customize\Segment\Section; use Pmpr\Common\Cover\Customize\Segment\Segment; use Pmpr\Common\Cover\Customize\Setting\Setting; use Pmpr\Common\Cover\Customize\Setting\SiteOption; use WP_Customize_Control; use WP_Customize_Image_Control; use WP_Customize_Manager; abstract class Customizer extends Common { use FieldTrait; protected ?string $id = null; protected array $types = []; protected ?string $type = "\164\150\x65\155\x65\137\155\157\144\145"; protected array $panels = []; protected array $sections = []; public function __construct() { $this->kumkkwiqqiicsswu(); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x63\165\163\x74\x6f\x6d\x69\172\x65\137\x72\x65\x67\151\x73\164\145\x72", [$this, "\x63\157\155\x73\x67\x6d\x63\x77\x63\143\171\167\153\151\x75\157"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\141\144\144\137\x74\x77\151\147\x5f\146\165\x6e\143\164\x69\157\156\x73"), [$this, "\163\153\167\165\155\x6d\x67\x6f\157\143\x63\147\171\155\141\143"]); } public function skwummgooccgymac($eyoesceegakeygsi) { $eyoesceegakeygsi->kmmegqceukkkawme("\143\x75\x73\164\x6f\155\x69\x7a\x65\x72\137\x6f\x70\164\151\157\x6e", [$this, "\x67\151\151\165\x77\x73\x6d\171\x75\x6d\x71\167\x77\151\171\x71"]); } public function mwikyscisascoeea() : ?string { return $this->id; } public function gueasuouwqysmomu() : ?string { $qgeeqyucwycemwmo = $this->mwoyqeeigwqoamiw(); return ManipulateArray::get($qgeeqyucwycemwmo, $this->type); } public function mwoyqeeigwqoamiw() : array { return $this->types; } public function kumkkwiqqiicsswu() { $this->types = ["\x74\x68\145\155\145\x5f\155\x6f\144\x65" => Setting::class, "\163\x69\164\x65\137\x6f\160\164\151\157\x6e" => SiteOption::class]; } public final function comsgmcwccywkiuo($gcggigoeyymgeaoc) { if (!$gcggigoeyymgeaoc instanceof WP_Customize_Manager) { goto egyyiccaeeiooaua; } $this->yogecqociwgqoscg(); $cegumcycsaqqaioo = $this->qeeoggccsyqiegea(); foreach ($cegumcycsaqqaioo as $skeuoeoiuwwyqwou) { if (!$skeuoeoiuwwyqwou instanceof Panel) { goto ooeausyowguqicuo; } $mgiqqesweuqmsymo = $skeuoeoiuwwyqwou->suuogccckocgseyg(); if (!$mgiqqesweuqmsymo) { goto gkyawqqcmigqgaiq; } $myusoqwwewieagou = $this->omaiscgewmaukawu($skeuoeoiuwwyqwou, $gcggigoeyymgeaoc); if (!$myusoqwwewieagou) { goto wmywuusgukmmaams; } $gcggigoeyymgeaoc->add_panel($myusoqwwewieagou); $this->aqoswsqkkogggmkc($gcggigoeyymgeaoc, $mgiqqesweuqmsymo); wmywuusgukmmaams: gkyawqqcmigqgaiq: ooeausyowguqicuo: cmegwsegsosyqcai: } ewymsmkkiksgwysk: $this->aqoswsqkkogggmkc($gcggigoeyymgeaoc, $this->suuogccckocgseyg()); egyyiccaeeiooaua: } public function aqoswsqkkogggmkc($gcggigoeyymgeaoc, $mgiqqesweuqmsymo) { if (!is_array($mgiqqesweuqmsymo)) { goto sggawugoykqcmsug; } foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) { if (!$awcmekyiwwkeyisq instanceof Section) { goto ueigkucgaucgeimc; } $ikgwqyuyckaewsow = $awcmekyiwwkeyisq->ugmceccgwaaaigiy(); if (!$ikgwqyuyckaewsow) { goto kqgcyoscsusgoaqi; } $kqcoqkucyacciaoe = $this->omaiscgewmaukawu($awcmekyiwwkeyisq, $gcggigoeyymgeaoc); if (!$kqcoqkucyacciaoe) { goto wgewmqieuamsoayy; } $gcggigoeyymgeaoc->add_section($kqcoqkucyacciaoe); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto ugqaaewwmkocwwgy; } $gcggigoeyymgeaoc->add_setting($this->uyosoqisciuoyaqg($aiowsaccomcoikus, $gcggigoeyymgeaoc)); $gcggigoeyymgeaoc->add_control($this->iqumywysgqckgccw($aiowsaccomcoikus, $awcmekyiwwkeyisq->mwikyscisascoeea(), $gcggigoeyymgeaoc)); ugqaaewwmkocwwgy: omqiayeucoioqoao: } igooksugieceoege: wgewmqieuamsoayy: kqgcyoscsusgoaqi: ueigkucgaucgeimc: cewmoqyysgsmuiya: } scisgsyemmsekgos: sggawugoykqcmsug: } private function omaiscgewmaukawu(Segment $oceoauekaygmuoko, $gcggigoeyymgeaoc) { $ymaucmwyqwuuqyqe = null; if (!($oceoauekaygmuoko && $gcggigoeyymgeaoc)) { goto wakmayaoqoskekqy; } $sqeykgyoooqysmca = $oceoauekaygmuoko->gueasuouwqysmomu(); if (!class_exists($sqeykgyoooqysmca)) { goto wkeuuycukmuqiaom; } $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($gcggigoeyymgeaoc, $oceoauekaygmuoko->mwikyscisascoeea(), $oceoauekaygmuoko->sacmkccceuywoqsq()); wkeuuycukmuqiaom: wakmayaoqoskekqy: return $ymaucmwyqwuuqyqe; } private function iqumywysgqckgccw(Field $aiowsaccomcoikus, $awcmekyiwwkeyisq, $gcggigoeyymgeaoc) : ?WP_Customize_Control { $ymaucmwyqwuuqyqe = null; if (!$gcggigoeyymgeaoc) { goto mwsmsguqqkcwiiuk; } $ywmkwiwkosakssii = ["\x6c\141\x62\145\x6c" => $aiowsaccomcoikus->aakmagwggmkoiiyu(), "\x73\145\143\164\151\x6f\x6e" => $awcmekyiwwkeyisq, "\163\x65\164\x74\x69\x6e\147\x73" => $aiowsaccomcoikus->mwikyscisascoeea(), "\160\162\x69\157\x72\151\164\x79" => $aiowsaccomcoikus->yywskysiycwkwsgw(), "\x64\145\163\x63\162\151\x70\x74\x69\x6f\156" => $aiowsaccomcoikus->uuwsoaqmkwcgaqes()]; $sqeykgyoooqysmca = Control::class; if (!$aiowsaccomcoikus instanceof File) { goto qmuwoecuacmkwgem; } $sqeykgyoooqysmca = WP_Customize_Image_Control::class; qmuwoecuacmkwgem: $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($gcggigoeyymgeaoc, $aiowsaccomcoikus->mwikyscisascoeea(), $ywmkwiwkosakssii); if (!$ymaucmwyqwuuqyqe instanceof Control) { goto owmuceyswmgueasi; } $ymaucmwyqwuuqyqe->kqgkscycaasckiae($aiowsaccomcoikus); owmuceyswmgueasi: mwsmsguqqkcwiiuk: return $ymaucmwyqwuuqyqe; } private function uyosoqisciuoyaqg(Field $aiowsaccomcoikus, $gcggigoeyymgeaoc) : ?Setting { $ymaucmwyqwuuqyqe = null; if (!$gcggigoeyymgeaoc) { goto eogwckcymuugikuy; } $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); if (class_exists($sqeykgyoooqysmca)) { goto eeauyscekuckoues; } $sqeykgyoooqysmca = Setting::class; eeauyscekuckoues: $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($aiowsaccomcoikus, $gcggigoeyymgeaoc); eogwckcymuugikuy: return $ymaucmwyqwuuqyqe; } public function qeeoggccsyqiegea() : array { return $this->panels; } public function iqkkeyeieoyicoyu(Panel $skeuoeoiuwwyqwou) : self { $this->panels[$skeuoeoiuwwyqwou->mwikyscisascoeea()] = $skeuoeoiuwwyqwou; return $this; } public function suuogccckocgseyg() : array { return $this->sections; } public function kwkugmqouisgkqig(Section $awcmekyiwwkeyisq) : self { $this->sections[$awcmekyiwwkeyisq->mwikyscisascoeea()] = $awcmekyiwwkeyisq; return $this; } public function squkaueaysyeqwuy($aokagokqyuysuksm, $meqocwsecsywiiqs) : Panel { return new Panel($this->mwikyscisascoeea() . "\x5f{$aokagokqyuysuksm}", $meqocwsecsywiiqs); } public function iiwyyacwekkgigis($aokagokqyuysuksm, $meqocwsecsywiiqs) : Section { return new Section($aokagokqyuysuksm, $meqocwsecsywiiqs); } public function giiuwsmyumqwwiyq($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = false) { static $qiouiwasaauyaaue; if (isset($qiouiwasaauyaaue[$ymqmyyeuycgmigyo])) { goto qoqskyuuwueqkquk; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; switch ($this->type) { case "\164\x68\145\x6d\145\137\155\x6f\x64\x65": $eqgoocgaqwqcimie = DecoratorOption::mqcsicqwemggekye($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); goto msemumccgceyugmg; case "\x73\x69\x74\x65\x5f\x6f\160\164\151\157\156": $eqgoocgaqwqcimie = DecoratorOption::kuaqqosyyoqiueym($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); goto msemumccgceyugmg; case "\x75\163\145\x72\137\x6d\145\x74\x61": $eqgoocgaqwqcimie = ManipulateUser::igawqaomowicuayw($ymqmyyeuycgmigyo); goto msemumccgceyugmg; } wagqgeqymeqoeuyi: msemumccgceyugmg: $qiouiwasaauyaaue[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; goto iwsuawwqomaowuii; qoqskyuuwueqkquk: $eqgoocgaqwqcimie = $qiouiwasaauyaaue[$ymqmyyeuycgmigyo]; iwsuawwqomaowuii: return $eqgoocgaqwqcimie; } public abstract function yogecqociwgqoscg(); }
