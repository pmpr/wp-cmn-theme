<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678030c3dd532             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\Attribute; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class GlobalAttribute extends BaseAttribute { protected ?Model $model = null; public function __construct() { $this->name = "\147\154\x6f\x62\x61\x6c"; $this->model = Model::symcgieuakksimmu(); parent::__construct(); $this->aoqwywcqmoqaukkq(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\157\157\143\x6f\x6d\x6d\x65\162\x63\145\137\141\164\x74\x72\151\142\x75\x74\145\x5f\165\160\144\x61\164\x65\144", [$this, "\x73\141\x76\x65"])->qcsmikeggeemccuu("\x77\x6f\157\x63\x6f\155\x6d\x65\162\143\x65\x5f\x61\x66\x74\x65\x72\137\141\144\x64\137\x61\164\x74\x72\151\142\165\x74\145\137\x66\151\145\154\144\163", [$this, "\x69\x69\x73\143\161\143\167\x61\151\143\145\157\x6b\x6f\171\165"])->qcsmikeggeemccuu("\x77\157\157\x63\157\x6d\x6d\145\162\143\x65\x5f\141\x66\164\145\162\x5f\x65\144\x69\164\x5f\x61\164\164\162\x69\x62\x75\164\145\137\146\151\x65\154\144\x73", [$this, "\147\147\x63\x79\147\141\171\143\x6d\143\x63\x63\x65\x73\167\157"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\157\x6f\143\x6f\155\x6d\145\162\143\x65\x5f\x61\164\164\162\x69\x62\x75\164\145\137\164\141\x78\157\x6e\157\x6d\x69\x65\163", [$this, "\x67\x73\x63\x6b\161\x79\x73\157\153\x75\155\153\167\x71\x73\161"]); parent::kgquecmsgcouyaya(); } public function aoqwywcqmoqaukkq() { $iggakkcyoeakgcmq = $this->ocksiywmkyaqseou("\167\x6f\157\143\157\x6d\155\x65\x72\x63\145\137\141\x74\164\x72\x69\142\x75\x74\145\137\164\141\170\x6f\156\157\155\x69\x65\163\137\166\x61\x6c\165\x65\x5f\164\171\160\145\163", [Constants::kumuoysauoagaiiy => __("\104\141\164\145", PR__CMN__COVER), Constants::eymwucuaaiiciymc => __("\116\x75\155\x62\145\x72", PR__CMN__COVER)]); $this->mkksewyosgeumwsa($this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec(Constants::kmywkmmykgoyyyoy)->gswweykyogmsyawy(__("\x56\141\x6c\165\x65\x20\x74\171\x70\x65", PR__CMN__COVER))->acauweqyyugwisqc($iggakkcyoeakgcmq))->mkksewyosgeumwsa($this->caokeucsksukesyo()->wmkogisswkckmeua()->gosycecgwuesyysq(Constants::qgqyauaqwqmqseim)->gswweykyogmsyawy(__("\x49\143\157\x6e", PR__CMN__COVER))); } public function gsckqysokumkwqsq($oammesyieqmwuwyi) { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (is_array($oammesyieqmwuwyi)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $mqeiemgcoiugcyuc = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, "\141\164\164\x72\x69\x62\x75\x74\x65\137\151\144"); if ($mqeiemgcoiugcyuc) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $qiuwqmysqigceouo = $aiowsaccomcoikus->mwikyscisascoeea(); $igqsaukqcqscimok = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, [$qiuwqmysqigceouo => $this->qooeaookuemoqecm($qiuwqmysqigceouo, $mqeiemgcoiugcyuc)]); } } $oammesyieqmwuwyi[$momcykaoccoymeig] = $igqsaukqcqscimok; } } return $oammesyieqmwuwyi; } public function mgogaykgkoogasim() : ?Model { return $this->model; } public function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string { return $ymkomoccmymcoiea->get_id(); } public function save($aokagokqyuysuksm) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field && ($ymqmyyeuycgmigyo = $aiowsaccomcoikus->mwikyscisascoeea())) { if ($eqgoocgaqwqcimie = $eiicaiwgqkgsekce->ayueggmoqeeukqmq($ymqmyyeuycgmigyo, '')) { $this->mgogaykgkoogasim()->aawsuyueaaimeqsm($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); } } } } public function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea) { return $this->mgogaykgkoogasim()->eukesgmuogimqwaa($ymkomoccmymcoiea, $qqgocisyeuuqmcwc); } public function iiscqcwaiceokoyu() { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { echo $aoskwucuugeuaeus->qkauysqeioauswys($aiowsaccomcoikus); } } public function ggcygaycmccceswo() { if ($wwgeaeqgacgwooqi = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::awysmmukegasimmq)) { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aiowsaccomcoikus->iygyugseyaqwywyg($this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $wwgeaeqgacgwooqi)); echo $aoskwucuugeuaeus->qkauysqeioauswys($aiowsaccomcoikus, $wwgeaeqgacgwooqi); } } } } }
