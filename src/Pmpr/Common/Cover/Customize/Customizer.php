<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65785598c2485             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Customize; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\FormMaker\Admin\Field\File; use Pmpr\Common\Foundation\FormMaker\Admin\Traits\FieldTrait; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Cover\Customize\Segment\Panel; use Pmpr\Common\Cover\Customize\Segment\Section; use Pmpr\Common\Cover\Customize\Segment\Segment; use Pmpr\Common\Cover\Customize\Setting\Setting; use Pmpr\Common\Cover\Customize\Setting\SiteOption; use WP_Customize_Control; use WP_Customize_Image_Control; use WP_Customize_Manager; abstract class Customizer extends Common { use FieldTrait; protected ?string $id = null; protected array $types = []; protected ?string $type = "\164\150\145\x6d\x65\137\155\x6f\x64\x65"; protected array $panels = []; protected array $sections = []; public function __construct() { $this->kumkkwiqqiicsswu(); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x63\165\x73\164\157\155\x69\x7a\145\x5f\x72\145\x67\x69\x73\x74\x65\x72", [$this, "\x63\157\155\x73\x67\x6d\143\x77\143\143\171\167\153\151\165\157"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x61\144\x64\x5f\164\x77\x69\147\137\146\x75\x6e\x63\164\151\157\x6e\163"), [$this, "\x73\153\167\x75\x6d\x6d\x67\x6f\x6f\143\x63\x67\171\155\141\143"]); } public function skwummgooccgymac($eyoesceegakeygsi) { $eyoesceegakeygsi->kmmegqceukkkawme("\143\165\x73\164\x6f\155\151\172\x65\x72\137\x6f\x70\x74\151\157\x6e", [$this, "\147\x69\x69\165\x77\163\x6d\x79\165\155\161\167\167\151\x79\x71"]); } public function mwikyscisascoeea() : ?string { return $this->id; } public function gueasuouwqysmomu() : ?string { $qgeeqyucwycemwmo = $this->mwoyqeeigwqoamiw(); return ManipulateArray::get($qgeeqyucwycemwmo, $this->type); } public function mwoyqeeigwqoamiw() : array { return $this->types; } public function kumkkwiqqiicsswu() { $this->types = ["\x74\x68\x65\x6d\145\137\155\x6f\144\145" => Setting::class, "\x73\151\164\x65\137\157\x70\164\x69\x6f\156" => SiteOption::class]; } public final function comsgmcwccywkiuo($gcggigoeyymgeaoc) { if (!$gcggigoeyymgeaoc instanceof WP_Customize_Manager) { goto giaacoqqqsekcayy; } $this->yogecqociwgqoscg(); $cegumcycsaqqaioo = $this->qeeoggccsyqiegea(); foreach ($cegumcycsaqqaioo as $skeuoeoiuwwyqwou) { if (!$skeuoeoiuwwyqwou instanceof Panel) { goto syiqkaasoueowwui; } $mgiqqesweuqmsymo = $skeuoeoiuwwyqwou->suuogccckocgseyg(); if (!$mgiqqesweuqmsymo) { goto cgiscsqwwgqqaeqi; } $myusoqwwewieagou = $this->omaiscgewmaukawu($skeuoeoiuwwyqwou, $gcggigoeyymgeaoc); if (!$myusoqwwewieagou) { goto skkamseieeusycye; } $gcggigoeyymgeaoc->add_panel($myusoqwwewieagou); $this->aqoswsqkkogggmkc($gcggigoeyymgeaoc, $mgiqqesweuqmsymo); skkamseieeusycye: cgiscsqwwgqqaeqi: syiqkaasoueowwui: wiysogeqqwgioyka: } soaccwqimeksgwiw: $this->aqoswsqkkogggmkc($gcggigoeyymgeaoc, $this->suuogccckocgseyg()); giaacoqqqsekcayy: } public function aqoswsqkkogggmkc($gcggigoeyymgeaoc, $mgiqqesweuqmsymo) { if (!is_array($mgiqqesweuqmsymo)) { goto igooksugieceoege; } foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) { if (!$awcmekyiwwkeyisq instanceof Section) { goto cewmoqyysgsmuiya; } $ikgwqyuyckaewsow = $awcmekyiwwkeyisq->ugmceccgwaaaigiy(); if (!$ikgwqyuyckaewsow) { goto scisgsyemmsekgos; } $kqcoqkucyacciaoe = $this->omaiscgewmaukawu($awcmekyiwwkeyisq, $gcggigoeyymgeaoc); if (!$kqcoqkucyacciaoe) { goto egyyiccaeeiooaua; } $gcggigoeyymgeaoc->add_section($kqcoqkucyacciaoe); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto ooeausyowguqicuo; } $gcggigoeyymgeaoc->add_setting($this->uyosoqisciuoyaqg($aiowsaccomcoikus, $gcggigoeyymgeaoc)); $gcggigoeyymgeaoc->add_control($this->iqumywysgqckgccw($aiowsaccomcoikus, $awcmekyiwwkeyisq->mwikyscisascoeea(), $gcggigoeyymgeaoc)); ooeausyowguqicuo: gkyawqqcmigqgaiq: } wmywuusgukmmaams: egyyiccaeeiooaua: scisgsyemmsekgos: cewmoqyysgsmuiya: cmegwsegsosyqcai: } ewymsmkkiksgwysk: igooksugieceoege: } private function omaiscgewmaukawu(Segment $oceoauekaygmuoko, $gcggigoeyymgeaoc) { $ymaucmwyqwuuqyqe = null; if (!($oceoauekaygmuoko && $gcggigoeyymgeaoc)) { goto ugqaaewwmkocwwgy; } $sqeykgyoooqysmca = $oceoauekaygmuoko->gueasuouwqysmomu(); if (!class_exists($sqeykgyoooqysmca)) { goto omqiayeucoioqoao; } $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($gcggigoeyymgeaoc, $oceoauekaygmuoko->mwikyscisascoeea(), $oceoauekaygmuoko->sacmkccceuywoqsq()); omqiayeucoioqoao: ugqaaewwmkocwwgy: return $ymaucmwyqwuuqyqe; } private function iqumywysgqckgccw(Field $aiowsaccomcoikus, $awcmekyiwwkeyisq, $gcggigoeyymgeaoc) : ?WP_Customize_Control { $ymaucmwyqwuuqyqe = null; if (!$gcggigoeyymgeaoc) { goto ueigkucgaucgeimc; } $ywmkwiwkosakssii = ["\154\141\142\x65\x6c" => $aiowsaccomcoikus->aakmagwggmkoiiyu(), "\x73\x65\x63\164\151\x6f\156" => $awcmekyiwwkeyisq, "\x73\145\164\x74\x69\x6e\147\x73" => $aiowsaccomcoikus->mwikyscisascoeea(), "\x70\x72\151\x6f\x72\151\x74\171" => $aiowsaccomcoikus->yywskysiycwkwsgw(), "\144\x65\163\x63\162\x69\160\164\x69\x6f\x6e" => $aiowsaccomcoikus->uuwsoaqmkwcgaqes()]; $sqeykgyoooqysmca = Control::class; if (!$aiowsaccomcoikus instanceof File) { goto wgewmqieuamsoayy; } $sqeykgyoooqysmca = WP_Customize_Image_Control::class; wgewmqieuamsoayy: $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($gcggigoeyymgeaoc, $aiowsaccomcoikus->mwikyscisascoeea(), $ywmkwiwkosakssii); if (!$ymaucmwyqwuuqyqe instanceof Control) { goto kqgcyoscsusgoaqi; } $ymaucmwyqwuuqyqe->kqgkscycaasckiae($aiowsaccomcoikus); kqgcyoscsusgoaqi: ueigkucgaucgeimc: return $ymaucmwyqwuuqyqe; } private function uyosoqisciuoyaqg(Field $aiowsaccomcoikus, $gcggigoeyymgeaoc) : ?Setting { $ymaucmwyqwuuqyqe = null; if (!$gcggigoeyymgeaoc) { goto wkeuuycukmuqiaom; } $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); if (class_exists($sqeykgyoooqysmca)) { goto sggawugoykqcmsug; } $sqeykgyoooqysmca = Setting::class; sggawugoykqcmsug: $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($aiowsaccomcoikus, $gcggigoeyymgeaoc); wkeuuycukmuqiaom: return $ymaucmwyqwuuqyqe; } public function qeeoggccsyqiegea() : array { return $this->panels; } public function iqkkeyeieoyicoyu(Panel $skeuoeoiuwwyqwou) : self { $this->panels[$skeuoeoiuwwyqwou->mwikyscisascoeea()] = $skeuoeoiuwwyqwou; return $this; } public function suuogccckocgseyg() : array { return $this->sections; } public function kwkugmqouisgkqig(Section $awcmekyiwwkeyisq) : self { $this->sections[$awcmekyiwwkeyisq->mwikyscisascoeea()] = $awcmekyiwwkeyisq; return $this; } public function squkaueaysyeqwuy($aokagokqyuysuksm, $meqocwsecsywiiqs) : Panel { return new Panel($this->mwikyscisascoeea() . "\x5f{$aokagokqyuysuksm}", $meqocwsecsywiiqs); } public function iiwyyacwekkgigis($aokagokqyuysuksm, $meqocwsecsywiiqs) : Section { return new Section($aokagokqyuysuksm, $meqocwsecsywiiqs); } public function giiuwsmyumqwwiyq($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = false) { static $qiouiwasaauyaaue; if (isset($qiouiwasaauyaaue[$ymqmyyeuycgmigyo])) { goto owmuceyswmgueasi; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; switch ($this->type) { case "\x74\150\145\155\145\137\x6d\157\x64\x65": $eqgoocgaqwqcimie = DecoratorOption::mqcsicqwemggekye($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); goto wakmayaoqoskekqy; case "\163\x69\x74\145\137\157\160\164\151\x6f\x6e": $eqgoocgaqwqcimie = DecoratorOption::kuaqqosyyoqiueym($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); goto wakmayaoqoskekqy; case "\165\x73\145\x72\x5f\155\x65\164\x61": $eqgoocgaqwqcimie = ManipulateUser::igawqaomowicuayw($ymqmyyeuycgmigyo); goto wakmayaoqoskekqy; } qmuwoecuacmkwgem: wakmayaoqoskekqy: $qiouiwasaauyaaue[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; goto mwsmsguqqkcwiiuk; owmuceyswmgueasi: $eqgoocgaqwqcimie = $qiouiwasaauyaaue[$ymqmyyeuycgmigyo]; mwsmsguqqkcwiiuk: return $eqgoocgaqwqcimie; } public abstract function yogecqociwgqoscg(); }
