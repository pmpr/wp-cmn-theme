<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc4ae274fd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\Attribute; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class GlobalAttribute extends BaseAttribute { protected ?Model $model = null; public function __construct() { $this->name = "\x67\x6c\157\142\x61\154"; $this->model = Model::symcgieuakksimmu(); parent::__construct(); $this->aoqwywcqmoqaukkq(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x6f\x6f\x63\x6f\155\x6d\145\x72\x63\145\137\x61\x74\164\x72\151\142\x75\x74\145\137\x75\160\x64\x61\164\x65\144", [$this, "\163\x61\x76\x65"])->qcsmikeggeemccuu("\x77\x6f\157\143\x6f\155\155\x65\162\x63\145\x5f\x61\146\164\145\162\x5f\141\x64\144\137\x61\x74\x74\162\x69\142\x75\x74\x65\x5f\146\x69\145\x6c\144\x73", [$this, "\151\151\163\x63\161\143\167\141\x69\x63\145\157\x6b\x6f\x79\x75"])->qcsmikeggeemccuu("\167\x6f\x6f\x63\x6f\155\155\145\x72\x63\145\137\141\x66\164\145\162\x5f\145\144\x69\x74\x5f\x61\x74\x74\162\151\x62\165\164\145\x5f\x66\x69\x65\x6c\x64\163", [$this, "\x67\147\143\171\x67\x61\x79\x63\x6d\x63\143\x63\x65\163\x77\157"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\157\x6f\143\x6f\155\155\x65\x72\x63\145\x5f\141\x74\164\x72\x69\142\x75\164\x65\x5f\164\141\170\x6f\x6e\157\155\151\x65\163", [$this, "\x67\x73\x63\x6b\161\171\163\x6f\x6b\165\155\153\x77\x71\163\x71"]); parent::kgquecmsgcouyaya(); } public function aoqwywcqmoqaukkq() { $iggakkcyoeakgcmq = $this->ocksiywmkyaqseou("\167\x6f\x6f\x63\x6f\155\155\x65\x72\143\x65\x5f\x61\x74\x74\x72\151\142\x75\164\x65\137\x74\x61\x78\x6f\156\x6f\155\151\145\163\x5f\166\141\154\165\x65\x5f\x74\x79\x70\145\x73", [Constants::kumuoysauoagaiiy => __("\104\141\x74\145", PR__CMN__COVER), Constants::eymwucuaaiiciymc => __("\116\x75\x6d\x62\x65\x72", PR__CMN__COVER)]); $this->mkksewyosgeumwsa($this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec(Constants::kmywkmmykgoyyyoy)->gswweykyogmsyawy(__("\126\x61\154\x75\x65\x20\164\171\160\145", PR__CMN__COVER))->acauweqyyugwisqc($iggakkcyoeakgcmq))->mkksewyosgeumwsa($this->caokeucsksukesyo()->wmkogisswkckmeua()->gosycecgwuesyysq(Constants::qgqyauaqwqmqseim)->gswweykyogmsyawy(__("\111\143\x6f\x6e", PR__CMN__COVER))); } public function gsckqysokumkwqsq($oammesyieqmwuwyi) { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (is_array($oammesyieqmwuwyi)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $mqeiemgcoiugcyuc = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, "\141\164\164\x72\151\x62\165\x74\x65\137\151\144"); if ($mqeiemgcoiugcyuc) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $qiuwqmysqigceouo = $aiowsaccomcoikus->mwikyscisascoeea(); $igqsaukqcqscimok = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, [$qiuwqmysqigceouo => $this->qooeaookuemoqecm($qiuwqmysqigceouo, $mqeiemgcoiugcyuc)]); } } $oammesyieqmwuwyi[$momcykaoccoymeig] = $igqsaukqcqscimok; } } return $oammesyieqmwuwyi; } public function mgogaykgkoogasim() : ?Model { return $this->model; } public function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string { return $ymkomoccmymcoiea->get_id(); } public function save($aokagokqyuysuksm) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field && ($ymqmyyeuycgmigyo = $aiowsaccomcoikus->mwikyscisascoeea())) { if ($eqgoocgaqwqcimie = $eiicaiwgqkgsekce->ayueggmoqeeukqmq($ymqmyyeuycgmigyo, '')) { $this->mgogaykgkoogasim()->aawsuyueaaimeqsm($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); } } } } public function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea) { return $this->mgogaykgkoogasim()->eukesgmuogimqwaa($ymkomoccmymcoiea, $qqgocisyeuuqmcwc); } public function iiscqcwaiceokoyu() { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { echo $aoskwucuugeuaeus->qkauysqeioauswys($aiowsaccomcoikus); } } public function ggcygaycmccceswo() { if ($wwgeaeqgacgwooqi = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::awysmmukegasimmq)) { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aiowsaccomcoikus->iygyugseyaqwywyg($this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $wwgeaeqgacgwooqi)); echo $aoskwucuugeuaeus->qkauysqeioauswys($aiowsaccomcoikus, $wwgeaeqgacgwooqi); } } } } }
