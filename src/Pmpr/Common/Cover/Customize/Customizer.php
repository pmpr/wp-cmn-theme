<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6451983c39558             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Customize; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\FormMaker\Admin\Field\File; use Pmpr\Common\Foundation\FormMaker\Admin\Traits\FieldTrait; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Cover\Customize\Segment\Panel; use Pmpr\Common\Cover\Customize\Segment\Section; use Pmpr\Common\Cover\Customize\Segment\Segment; use Pmpr\Common\Cover\Customize\Setting\Setting; use Pmpr\Common\Cover\Customize\Setting\SiteOption; use WP_Customize_Control; use WP_Customize_Image_Control; use WP_Customize_Manager; abstract class Customizer extends Common { use FieldTrait; protected ?string $id = null; protected array $types = []; protected ?string $type = "\164\x68\145\155\145\x5f\155\x6f\x64\x65"; protected array $panels = []; protected array $sections = []; public function __construct() { $this->kumkkwiqqiicsswu(); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x63\x75\x73\164\x6f\155\x69\172\145\137\x72\145\147\x69\x73\164\145\162", [$this, "\143\157\155\163\x67\x6d\143\x77\143\x63\171\x77\x6b\151\165\157"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\141\144\144\137\x74\x77\x69\147\137\x66\165\x6e\x63\x74\151\157\156\163"), [$this, "\x73\x6b\x77\x75\x6d\155\x67\157\157\143\x63\147\x79\x6d\x61\x63"]); } public function skwummgooccgymac($eyoesceegakeygsi) { $eyoesceegakeygsi->kmmegqceukkkawme("\x63\165\163\x74\157\155\151\x7a\145\162\x5f\x6f\160\x74\x69\157\156", [$this, "\x67\x69\151\165\167\163\x6d\x79\165\x6d\x71\x77\x77\151\x79\x71"]); } public function mwikyscisascoeea() : ?string { return $this->id; } public function gueasuouwqysmomu() : ?string { $qgeeqyucwycemwmo = $this->mwoyqeeigwqoamiw(); return ManipulateArray::get($qgeeqyucwycemwmo, $this->type); } public function mwoyqeeigwqoamiw() : array { return $this->types; } public function kumkkwiqqiicsswu() { $this->types = ["\164\150\145\155\x65\137\x6d\x6f\x64\x65" => Setting::class, "\x73\151\164\145\x5f\157\160\x74\x69\x6f\x6e" => SiteOption::class]; } public final function comsgmcwccywkiuo($gcggigoeyymgeaoc) { if (!$gcggigoeyymgeaoc instanceof WP_Customize_Manager) { goto uuuceqkseqkqawko; } $this->yogecqociwgqoscg(); $cegumcycsaqqaioo = $this->qeeoggccsyqiegea(); foreach ($cegumcycsaqqaioo as $skeuoeoiuwwyqwou) { if (!$skeuoeoiuwwyqwou instanceof Panel) { goto cwugokqsmiomgmqg; } $mgiqqesweuqmsymo = $skeuoeoiuwwyqwou->suuogccckocgseyg(); if (!$mgiqqesweuqmsymo) { goto wkaoyycsoeoyqcae; } $myusoqwwewieagou = $this->omaiscgewmaukawu($skeuoeoiuwwyqwou, $gcggigoeyymgeaoc); if (!$myusoqwwewieagou) { goto yeemsgmumygmumqw; } $gcggigoeyymgeaoc->add_panel($myusoqwwewieagou); $this->aqoswsqkkogggmkc($gcggigoeyymgeaoc, $mgiqqesweuqmsymo); yeemsgmumygmumqw: wkaoyycsoeoyqcae: cwugokqsmiomgmqg: yimeskeioamqmuwg: } eacysqsegwcqawsa: $this->aqoswsqkkogggmkc($gcggigoeyymgeaoc, $this->suuogccckocgseyg()); uuuceqkseqkqawko: } public function aqoswsqkkogggmkc($gcggigoeyymgeaoc, $mgiqqesweuqmsymo) { if (!is_array($mgiqqesweuqmsymo)) { goto becceuuwokgoaewy; } foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) { if (!$awcmekyiwwkeyisq instanceof Section) { goto qgkiguggkyiycwow; } $ikgwqyuyckaewsow = $awcmekyiwwkeyisq->ugmceccgwaaaigiy(); if (!$ikgwqyuyckaewsow) { goto wwcwmkowgooocaem; } $kqcoqkucyacciaoe = $this->omaiscgewmaukawu($awcmekyiwwkeyisq, $gcggigoeyymgeaoc); if (!$kqcoqkucyacciaoe) { goto ygskksomysgaokek; } $gcggigoeyymgeaoc->add_section($kqcoqkucyacciaoe); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto mocaoayiouggauiy; } $gcggigoeyymgeaoc->add_setting($this->uyosoqisciuoyaqg($aiowsaccomcoikus, $gcggigoeyymgeaoc)); $gcggigoeyymgeaoc->add_control($this->iqumywysgqckgccw($aiowsaccomcoikus, $awcmekyiwwkeyisq->mwikyscisascoeea(), $gcggigoeyymgeaoc)); mocaoayiouggauiy: kskqquqsegiiogek: } akeoaicoieaiekcw: ygskksomysgaokek: wwcwmkowgooocaem: qgkiguggkyiycwow: yksamaucqkqsawkk: } ekoegocuqoycoeyq: becceuuwokgoaewy: } private function omaiscgewmaukawu(Segment $oceoauekaygmuoko, $gcggigoeyymgeaoc) { $ymaucmwyqwuuqyqe = null; if (!($oceoauekaygmuoko && $gcggigoeyymgeaoc)) { goto aeaciamekuqyieys; } $sqeykgyoooqysmca = $oceoauekaygmuoko->gueasuouwqysmomu(); if (!class_exists($sqeykgyoooqysmca)) { goto wyugqoowakyicyic; } $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($gcggigoeyymgeaoc, $oceoauekaygmuoko->mwikyscisascoeea(), $oceoauekaygmuoko->sacmkccceuywoqsq()); wyugqoowakyicyic: aeaciamekuqyieys: return $ymaucmwyqwuuqyqe; } private function iqumywysgqckgccw(Field $aiowsaccomcoikus, $awcmekyiwwkeyisq, $gcggigoeyymgeaoc) : ?WP_Customize_Control { $ymaucmwyqwuuqyqe = null; if (!$gcggigoeyymgeaoc) { goto weouocwmwicayyiy; } $ywmkwiwkosakssii = ["\x6c\x61\142\145\x6c" => $aiowsaccomcoikus->aakmagwggmkoiiyu(), "\163\x65\143\x74\x69\157\x6e" => $awcmekyiwwkeyisq, "\x73\x65\164\164\x69\x6e\x67\x73" => $aiowsaccomcoikus->mwikyscisascoeea(), "\x70\x72\151\x6f\162\x69\164\171" => $aiowsaccomcoikus->yywskysiycwkwsgw(), "\x64\x65\x73\x63\x72\x69\x70\164\151\157\x6e" => $aiowsaccomcoikus->uuwsoaqmkwcgaqes()]; $sqeykgyoooqysmca = Control::class; if (!$aiowsaccomcoikus instanceof File) { goto ugiqiewymimqecsu; } $sqeykgyoooqysmca = WP_Customize_Image_Control::class; ugiqiewymimqecsu: $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($gcggigoeyymgeaoc, $aiowsaccomcoikus->mwikyscisascoeea(), $ywmkwiwkosakssii); if (!$ymaucmwyqwuuqyqe instanceof Control) { goto iuysqgmmgqiywssm; } $ymaucmwyqwuuqyqe->kqgkscycaasckiae($aiowsaccomcoikus); iuysqgmmgqiywssm: weouocwmwicayyiy: return $ymaucmwyqwuuqyqe; } private function uyosoqisciuoyaqg(Field $aiowsaccomcoikus, $gcggigoeyymgeaoc) : ?Setting { $ymaucmwyqwuuqyqe = null; if (!$gcggigoeyymgeaoc) { goto gkkwmqoacciwomqs; } $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); if (class_exists($sqeykgyoooqysmca)) { goto ggyoywwggggekycs; } $sqeykgyoooqysmca = Setting::class; ggyoywwggggekycs: $ymaucmwyqwuuqyqe = new $sqeykgyoooqysmca($aiowsaccomcoikus, $gcggigoeyymgeaoc); gkkwmqoacciwomqs: return $ymaucmwyqwuuqyqe; } public function qeeoggccsyqiegea() : array { return $this->panels; } public function iqkkeyeieoyicoyu(Panel $skeuoeoiuwwyqwou) : self { $this->panels[$skeuoeoiuwwyqwou->mwikyscisascoeea()] = $skeuoeoiuwwyqwou; return $this; } public function suuogccckocgseyg() : array { return $this->sections; } public function kwkugmqouisgkqig(Section $awcmekyiwwkeyisq) : self { $this->sections[$awcmekyiwwkeyisq->mwikyscisascoeea()] = $awcmekyiwwkeyisq; return $this; } public function squkaueaysyeqwuy($aokagokqyuysuksm, $meqocwsecsywiiqs) : Panel { return new Panel($this->mwikyscisascoeea() . "\x5f{$aokagokqyuysuksm}", $meqocwsecsywiiqs); } public function iiwyyacwekkgigis($aokagokqyuysuksm, $meqocwsecsywiiqs) : Section { return new Section($aokagokqyuysuksm, $meqocwsecsywiiqs); } public function giiuwsmyumqwwiyq($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = false) { static $qiouiwasaauyaaue; if (isset($qiouiwasaauyaaue[$ymqmyyeuycgmigyo])) { goto ocmagamuyawyiyka; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; switch ($this->type) { case "\x74\x68\x65\155\145\x5f\x6d\157\144\145": $eqgoocgaqwqcimie = DecoratorOption::mqcsicqwemggekye($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); goto kucqcgeesiccuuia; case "\x73\151\x74\x65\137\157\160\x74\x69\157\156": $eqgoocgaqwqcimie = DecoratorOption::kuaqqosyyoqiueym($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); goto kucqcgeesiccuuia; case "\165\163\x65\162\137\x6d\145\x74\x61": $eqgoocgaqwqcimie = ManipulateUser::igawqaomowicuayw($ymqmyyeuycgmigyo); goto kucqcgeesiccuuia; } oycuaqewsskgkqci: kucqcgeesiccuuia: $qiouiwasaauyaaue[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; goto amqgiisymksuuuss; ocmagamuyawyiyka: $eqgoocgaqwqcimie = $qiouiwasaauyaaue[$ymqmyyeuycgmigyo]; amqgiisymksuuuss: return $eqgoocgaqwqcimie; } public abstract function yogecqociwgqoscg(); }
