<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63988f8214cef             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover; use Pmpr\Common\Cover\Breadcrumb\Breadcrumb; use Pmpr\Common\Cover\Comment\Comment; use Pmpr\Common\Foundation\Decorator\DecoratorAsset; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\DecoratorTheme; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateFile; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Cover\Navigation\Navigation; use Pmpr\Common\Cover\Optimization\Optimization; use Pmpr\Common\Cover\Pagination\Pagination; use Pmpr\Common\Cover\Widget\Widget; use Pmpr\Common\Cover\Woocommerce\Woocommerce; use WP_Term; class Cover extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\103\x6f\x6d\155\x6f\x6e\x20\x43\x6f\166\x65\162", PR__CMN__COVER); }, self::wuowaiyouwecckaw => false]); parent::__construct(); if (!$this->quceougqagwauyom()) { goto iwkckkeimmeoquyq; } $this->iemaakgqgqosiecm(); iwkckkeimmeoquyq: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x70\154\x75\x67\x69\156\163\137\154\x6f\141\144\x65\144", [$this, "\151\143\167\x63\147\155\143\x6f\x69\155\161\145\x69\147\x79\x65"], 0); if (!$this->quceougqagwauyom()) { goto masakmomqmeocqqg; } $this->qcsmikeggeemccuu("\151\156\151\164", [$this, "\x69\x6e\151\164"])->qcsmikeggeemccuu("\x77\160\x5f\x66\157\157\x74\145\162", [$this, "\x61\x61\x79\x6b\171\141\167\167\167\145\153\x75\x77\x75\157\x71"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\162\145\x6e\144\145\x72\x5f\x6c\157\147\x6f"), [$this, "\x6e\153\x79\x63\x73\x77\x65\151\141\x67\x67\x75\143\x73\x75\161"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x61\144\x64\137\x74\x77\x69\147\x5f\x66\165\x6e\143\164\x69\x6f\156\163"), [$this, "\163\153\x77\x75\x6d\155\x67\157\157\x63\x63\147\x79\155\141\143"], 0); masakmomqmeocqqg: } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\x70\x5f\x70\162\x65\160\141\162\145\x5f\x74\150\x65\x6d\x65\163\137\x66\157\162\137\x6a\163", [$this, "\x63\x71\171\x73\151\x6d\145\143\x77\167\155\141\x77\155\171\143"])->cecaguuoecmccuse("\x73\x68\157\x77\x5f\141\144\155\151\156\137\x62\x61\x72", [$this, "\165\155\x69\x63\171\147\x6b\147\161\145\x61\165\157\x69\x65\153"], 9999)->cecaguuoecmccuse("\x74\x68\x65\x6d\145\x5f\162\157\x6f\x74\137\x75\x72\x69", [$this, "\151\165\x67\161\x67\x73\147\x75\151\141\147\x63\155\153\157\167"], 999, 3)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x69\143\157\156\x5f\x73\x65\x74"), [$this, "\157\x67\145\171\x67\141\171\147\165\167\x6b\163\x79\x73\153\x69"], 10, 2); $this->cecaguuoecmccuse("\x67\145\x74\137\164\x68\145\x5f\x61\x72\x63\150\151\166\145\137\x64\145\163\x63\x72\151\x70\x74\151\157\156", [$this, "\x61\x73\x63\x61\x6b\143\157\x63\x67\163\x61\157\x73\x69\145\x73"], 999)->cecaguuoecmccuse("\147\x65\164\137\164\150\145\x5f\x61\162\143\x68\x69\166\145\x5f\x74\151\x74\x6c\145", [$this, "\151\x65\x77\x61\x6f\163\x69\163\165\153\143\157\165\147\167\153"], 999, 3); } public function ykqeaoaywqgaoouy() : array { $meqocwsecsywiiqs = $ukwokcuqauuosmoo = $kugsomueokogcawo = false; if (!DecoratorQuery::migkyseymeomymmy()) { goto acgqaeakoyasgkku; } $sqeykgyoooqysmca = ''; $mksyucucyswaukig = DecoratorQuery::imgymusqgccqsqqq(); if ($mksyucucyswaukig instanceof WP_Term) { goto yoqsigmoyaaceqky; } if (!DecoratorQuery::moegwqkekcawsggs()) { goto yksywwikmeksikqc; } $sqeykgyoooqysmca = ManipulatePost::gueasuouwqysmomu(); yksywwikmeksikqc: goto suqckoccuyeeymww; yoqsigmoyaaceqky: $sqeykgyoooqysmca = ManipulateTerm::yyoeeseewqmmyaee($mksyucucyswaukig); suqckoccuyeeymww: if (!$sqeykgyoooqysmca) { goto giugwaeuwaomossq; } $meqocwsecsywiiqs = Setting::eiwcuqigayigimak(Setting::ygiuusywiucccwqk . $sqeykgyoooqysmca, ''); $kugsomueokogcawo = Setting::eiwcuqigayigimak(Setting::gasuscmquiokwcak . $sqeykgyoooqysmca); $ukwokcuqauuosmoo = Setting::eiwcuqigayigimak(Setting::wusmaqmagugmywwe . $sqeykgyoooqysmca, ''); giugwaeuwaomossq: acgqaeakoyasgkku: return [self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::qoawsacmmgmimqaw => $kugsomueokogcawo, self::eqkeooqcsscoggia => $ukwokcuqauuosmoo]; } public function iewaosisukcougwk($meqocwsecsywiiqs, $wsiwwymgaoqsyagc, $yuwymayicwwqiske) { $uiewakwqscemywuo = $this->ykqeaoaywqgaoouy(); if (!$uiewakwqscemywuo[self::qescuiwgsyuikume]) { goto ssagcgqaucssyego; } $meqocwsecsywiiqs = $uiewakwqscemywuo[self::qescuiwgsyuikume]; if (!$yuwymayicwwqiske) { goto sycougcyeqmeiagk; } $meqocwsecsywiiqs = sprintf(_x("\x25\x31\44\163\x20\x25\62\x24\x73", "\141\162\x63\x68\151\166\145\x20\164\x69\x74\154\x65"), $yuwymayicwwqiske, ManipulateHTML::gmqyuaqwgiayskei($meqocwsecsywiiqs)); sycougcyeqmeiagk: ssagcgqaucssyego: return $meqocwsecsywiiqs; } public function ascakcocgsaosies($ukwokcuqauuosmoo) { $uiewakwqscemywuo = $this->ykqeaoaywqgaoouy(); if ($uiewakwqscemywuo[self::qoawsacmmgmimqaw]) { goto ekoqieigyoeyauqa; } $ukwokcuqauuosmoo = ''; goto cuwcsamuuqyuyqsu; ekoqieigyoeyauqa: if (!$uiewakwqscemywuo[self::eqkeooqcsscoggia]) { goto mqgeseysuwcaqwiy; } $ukwokcuqauuosmoo = $uiewakwqscemywuo[self::eqkeooqcsscoggia]; mqgeseysuwcaqwiy: cuwcsamuuqyuyqsu: return $ukwokcuqauuosmoo; } public function init() { $uicgeimguomekwuu = Setting::eiwcuqigayigimak(Setting::qqswqycisgaqiuse); if (!($uicgeimguomekwuu && ManipulateQuery::eewqyocggsagyuis())) { goto mimacwyuueomgwwy; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $egsumesakcaaukem = $eygsasmqycagyayw->owygwqwawqoiusis("\147\157\157\147\154\x65\55\x61\x6e\141\154\x79\x74\151\143\x73", "\x68\164\164\x70\x73\72\x2f\x2f\167\x77\167\56\x67\157\x6f\147\x6c\x65\x74\x61\147\155\x61\x6e\141\x67\x65\x72\x2e\x63\x6f\x6d\57\x67\x74\x61\x67\57\152\x73\77\x69\x64\x3d{$uicgeimguomekwuu}"); $egsumesakcaaukem->yiuoscqaekcgiyuy("\141\x73\x79\x6e\x63", true)->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\x61\156\141\154\171\x74\151\143\163\x2e\152\163", ["\141\x6e\x61\154\x79\164\x69\143\x73\137\151\144" => $uicgeimguomekwuu])); $eygsasmqycagyayw->oeoquuwkoywiuesy($egsumesakcaaukem); mimacwyuueomgwwy: } public function ogeygayguwksyski($muocgugcqiewywag, $ymiuaqwqkqoqkmck) { if (!("\146\x61\x73\x6d" === $ymiuaqwqkqoqkmck && (ManipulateQuery::eewqyocggsagyuis() || ManipulateAjax::uywcakyieooyscis()))) { goto igwkcikeyoowosoi; } if (!($ouucgiwcgsoowqic = Setting::eiwcuqigayigimak(Setting::migwcseqcocyqcge))) { goto ksckqkmwiqggykke; } $muocgugcqiewywag = $ouucgiwcgsoowqic; ksckqkmwiqggykke: igwkcikeyoowosoi: return $muocgugcqiewywag; } public function umicygkgqeauoiek($ekcswiguywieeeoc) { if (!Setting::eiwcuqigayigimak(Setting::mguiyugauoweycka)) { goto iqsgossweywksoia; } $ekcswiguywieeeoc = false; iqsgossweywksoia: return $ekcswiguywieeeoc; } public function nkycsweiaggucsuq($ywmkwiwkosakssii = []) { echo $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\147\145\164\137\x6c\x6f\147\x6f\x5f\x68\164\155\154"), '', $ywmkwiwkosakssii); } public function aaykyawwwekuwuoq() { DecoratorAsset::cawwmsmyseesuyee("\167\160\55\x65\155\142\x65\x64"); } public function iemaakgqgqosiecm() { Asset::symcgieuakksimmu(); Media::symcgieuakksimmu(); Search::symcgieuakksimmu(); Widget::symcgieuakksimmu(); Editor::symcgieuakksimmu(); Element::symcgieuakksimmu(); Comment::symcgieuakksimmu(); Template::symcgieuakksimmu(); Pagination::symcgieuakksimmu(); Navigation::symcgieuakksimmu(); Breadcrumb::symcgieuakksimmu(); if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto awaqksikyomsuaeo; } Admin::symcgieuakksimmu(); Setting::symcgieuakksimmu(); awaqksikyomsuaeo: } public function aqyikqugcomoqqqi() { if ($this->omseesogaocascyo("\157\x70\x74\151\x6d\x69\172\x61\x74\x69\x6f\x6e")) { goto cuommomwmsackoqc; } Optimization::symcgieuakksimmu(); cuommomwmsackoqc: } public function icwcgmcoimqeigye() { $this->aoumqccgqscuwyim(); if (!($this->quceougqagwauyom() && ManipulateWoocommerce::ayseokmqycoqaigc())) { goto ggeoqeowscwkeumy; } Woocommerce::symcgieuakksimmu(); ggeoqeowscwkeumy: } public function skwummgooccgymac($eyoesceegakeygsi) { $eyoesceegakeygsi->kmmegqceukkkawme("\x67\x65\x74\137\x74\x68\145\155\145\x5f\155\x6f\x64\x65", function ($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = false) { return DecoratorOption::mqcsicqwemggekye($ymqmyyeuycgmigyo, $ggauoeuaesiymgee); }); } public function cqysimecwwmawmyc($sgmuqamasucuikqa = []) : array { if (!($giueegeuogwkqoog = self::isyyiqwsgyieiqgu(self::kicaioiokgkqqywe))) { goto kceuusiekagyeoys; } foreach ($sgmuqamasucuikqa as $aaokuekaimigoyue => $mumucmmgemqwqiia) { if (!(strpos($aaokuekaimigoyue, "\167\x70\55" . self::kicaioiokgkqqywe) !== false)) { goto eekaiaeqewiqkkgm; } $oqwkmoswisqwoewg = ManipulateArray::get($mumucmmgemqwqiia, "\163\143\x72\x65\145\156\x73\150\157\164", []); if (!is_array($oqwkmoswisqwoewg)) { goto gkoaeuekqockuoiq; } foreach ($oqwkmoswisqwoewg as $momcykaoccoymeig => $sucqugkssiyoyaso) { if (!$sucqugkssiyoyaso) { goto yqicwmekwuoywyus; } foreach ($giueegeuogwkqoog as $egsqwmeeeowomomi) { if (!(basename($egsqwmeeeowomomi->ikeqsmumgwwuqmkw()) === $aaokuekaimigoyue)) { goto kwmiwaecqcgiaqye; } $sgmuqamasucuikqa[$aaokuekaimigoyue]["\x73\x63\162\x65\x65\156\163\x68\x6f\164"][$momcykaoccoymeig] = ManipulateString::aimgkskucmymyquc("\x2f{$aaokuekaimigoyue}", '', $sucqugkssiyoyaso); goto ukwoswyyogmsygqg; kwmiwaecqcgiaqye: jsmisuccwyukksgc: } ukwoswyyogmsygqg: yqicwmekwuoywyus: yggmaskeguaqkusc: } uqcsksaywyqeumig: gkoaeuekqockuoiq: eekaiaeqewiqkkgm: uwaimsisescsgyqk: } qyeswawykmasuqye: kceuusiekagyeoys: return $sgmuqamasucuikqa; } public function iugqgsguiagcmkow($oywygeeswomqqmcu, $ieokeoyugcmwuumq, $uccyimuwqccawaaq) { if (ManipulateValidation::wmcwegoisyeeosqu($oywygeeswomqqmcu)) { goto mwieyyqamgwicgco; } $wksoawcgagcgoask = self::qmkyymgaecsmakqq(trailingslashit($oywygeeswomqqmcu) . $uccyimuwqccawaaq); if (!$wksoawcgagcgoask) { goto uyeyscsaigimsqwq; } $oywygeeswomqqmcu = $wksoawcgagcgoask->mceoyuqgagciommq(); uyeyscsaigimsqwq: mwieyyqamgwicgco: return $oywygeeswomqqmcu; } public function aoumqccgqscuwyim() { $wyocmuqcwyskkcyo = untrailingslashit(ManipulateFile::cmaecekuqkwmemms("\x42\101\123\105\137\137\122\x4f\x4f\124\x5f\x5f\x50\101\x54\110")); $mwccauiqsaesegqs = "{$wyocmuqcwyskkcyo}\57\x70\x6d\160\x72\57" . self::ykywsqyeckcgqyik; if (is_dir($mwccauiqsaesegqs)) { goto wkiymcoqqiigqaaw; } $mwccauiqsaesegqs = "{$wyocmuqcwyskkcyo}\57\x76\x65\x6e\144\x6f\162\x2f\x70\x6d\x70\x72\55" . self::kicaioiokgkqqywe; wkiymcoqqiigqaaw: if (!is_dir($mwccauiqsaesegqs)) { goto esqwswmoegiqcckg; } DecoratorTheme::mokkauciousseuge($mwccauiqsaesegqs); esqwswmoegiqcckg: } }
