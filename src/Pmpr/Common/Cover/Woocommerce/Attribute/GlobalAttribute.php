<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce113365b6d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\Attribute; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class GlobalAttribute extends BaseAttribute { protected ?Model $model = null; public function __construct() { $this->name = "\147\154\x6f\x62\x61\x6c"; $this->model = Model::symcgieuakksimmu(); parent::__construct(); $this->aoqwywcqmoqaukkq(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\157\x6f\x63\x6f\155\155\x65\162\x63\x65\x5f\x61\x74\164\162\151\142\165\x74\145\137\165\160\x64\x61\x74\x65\144", [$this, "\163\141\166\145"])->qcsmikeggeemccuu("\167\157\x6f\x63\157\x6d\155\x65\162\143\145\x5f\x61\146\x74\145\162\137\141\x64\x64\137\141\164\164\162\151\142\x75\164\145\x5f\x66\151\145\154\x64\x73", [$this, "\x69\151\163\143\x71\x63\x77\141\x69\143\x65\157\153\157\x79\x75"])->qcsmikeggeemccuu("\167\157\157\143\157\155\x6d\x65\162\143\145\x5f\141\x66\x74\145\x72\x5f\145\144\x69\164\137\x61\164\164\162\x69\x62\165\164\x65\x5f\146\x69\145\154\144\163", [$this, "\x67\147\143\x79\147\x61\171\x63\x6d\x63\143\143\145\x73\167\157"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\x6f\157\143\x6f\x6d\x6d\145\x72\143\145\x5f\x61\164\x74\x72\151\142\165\164\145\137\164\141\170\x6f\x6e\x6f\x6d\151\x65\x73", [$this, "\147\x73\143\x6b\161\171\x73\157\153\x75\x6d\x6b\167\161\x73\161"]); parent::kgquecmsgcouyaya(); } public function aoqwywcqmoqaukkq() { $iggakkcyoeakgcmq = $this->ocksiywmkyaqseou("\x77\x6f\x6f\143\157\155\x6d\x65\162\143\x65\137\x61\164\x74\x72\x69\x62\165\164\x65\137\164\x61\170\x6f\x6e\x6f\x6d\151\145\163\x5f\x76\141\x6c\x75\145\137\164\171\x70\145\163", [Constants::kumuoysauoagaiiy => __("\x44\x61\x74\x65", PR__CMN__COVER), Constants::eymwucuaaiiciymc => __("\x4e\x75\155\x62\x65\162", PR__CMN__COVER)]); $this->mkksewyosgeumwsa($this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec(Constants::kmywkmmykgoyyyoy)->gswweykyogmsyawy(__("\126\x61\154\x75\x65\40\x74\171\160\145", PR__CMN__COVER))->acauweqyyugwisqc($iggakkcyoeakgcmq))->mkksewyosgeumwsa($this->caokeucsksukesyo()->wmkogisswkckmeua()->gosycecgwuesyysq(Constants::qgqyauaqwqmqseim)->gswweykyogmsyawy(__("\111\x63\x6f\156", PR__CMN__COVER))); } public function gsckqysokumkwqsq($oammesyieqmwuwyi) { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (!is_array($oammesyieqmwuwyi)) { goto yssscwioiyygssec; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $mqeiemgcoiugcyuc = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, "\141\x74\x74\162\x69\142\x75\164\145\x5f\x69\x64"); if (!$mqeiemgcoiugcyuc) { goto qcessicwuikwqsis; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $qiuwqmysqigceouo = $aiowsaccomcoikus->mwikyscisascoeea(); $igqsaukqcqscimok = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, [$qiuwqmysqigceouo => $this->qooeaookuemoqecm($qiuwqmysqigceouo, $mqeiemgcoiugcyuc)]); qwcegcuowwgiccos: } kooskuwkuayiuose: qcessicwuikwqsis: $oammesyieqmwuwyi[$momcykaoccoymeig] = $igqsaukqcqscimok; twkmiuomimomscew: } eyiamcekkgkiawqy: yssscwioiyygssec: return $oammesyieqmwuwyi; } public function mgogaykgkoogasim() : ?Model { return $this->model; } public function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string { return $ymkomoccmymcoiea->get_id(); } public function save($aokagokqyuysuksm) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && ($ymqmyyeuycgmigyo = $aiowsaccomcoikus->mwikyscisascoeea()))) { goto ycakugokkqkuqyiu; } if (!($eqgoocgaqwqcimie = $eiicaiwgqkgsekce->ayueggmoqeeukqmq($ymqmyyeuycgmigyo, ''))) { goto siqagquguiemuoku; } $this->mgogaykgkoogasim()->aawsuyueaaimeqsm($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); siqagquguiemuoku: ycakugokkqkuqyiu: coywmiyqgsweuiic: } ieumumsgyguceusy: } public function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea) { return $this->mgogaykgkoogasim()->eukesgmuogimqwaa($ymkomoccmymcoiea, $qqgocisyeuuqmcwc); } public function iiscqcwaiceokoyu() { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { echo $aoskwucuugeuaeus->qkauysqeioauswys($aiowsaccomcoikus); sycygoiaiqqageym: } oouoqimaaqcmccay: } public function ggcygaycmccceswo() { if (!($wwgeaeqgacgwooqi = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::awysmmukegasimmq))) { goto umgaesggesswoaqe; } $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto wwkgkaecgiwggcck; } $aiowsaccomcoikus->iygyugseyaqwywyg($this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $wwgeaeqgacgwooqi)); echo $aoskwucuugeuaeus->qkauysqeioauswys($aiowsaccomcoikus, $wwgeaeqgacgwooqi); wwkgkaecgiwggcck: kciouyuaqkyqomam: } gygawoqywkukmqee: umgaesggesswoaqe: } }
