<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638bc0b520799             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\DecoratorTheme; use Pmpr\Common\Foundation\Decorator\Post\DecoratorAttachment; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Tab; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Setting as BaseSetting; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use WP_Post_Type; use WP_Taxonomy; class Setting extends Container { const migwcseqcocyqcge = "\x69\143\x6f\x6e\x5f\163\x65\164"; const qqswqycisgaqiuse = "\147\x6f\157\147\154\x65\137\x61\x6e\x61\x6c\x79\164\151\x63\x73"; const gqgseikcqgoiuqeg = "\151\155\141\x67\x65\x5f\160\x6c\x61\x63\145\x68\157\x6c\x64\x65\162"; const mguiyugauoweycka = "\x64\151\163\x61\142\154\x65\137\x66\162\157\x6e\164\145\156\x64\137\x61\x64\x6d\151\x6e\137\x62\x61\162"; const qmwqkeocouqykuwc = "\144\x69\163\141\142\154\145\137\x64\x65\x6c\141\171"; const mesmawyqgaugkmag = "\144\151\x73\x61\x62\x6c\x65\137\143\x6c\145\141\x6e\x75\x70"; const mgwkysuyugygacma = "\144\x69\163\x61\142\x6c\x65\137\154\141\172\x79\154\x6f\141\144"; const gwucgosagousgoko = "\145\170\143\154\x75\144\145\137\x66\x72\x6f\x6d\137\157\160\x74\x69\155\151\x7a\141\164\151\157\156"; const mgieaomemyywoqwa = "\154\x69\143\145\x6e\x73\145\x73"; const waywmkogcywugikw = "\156\x6f\x74\x5f\146\x6f\x75\156\144\x5f"; const jsemecycggiyookc = self::waywmkogcywugikw . self::TEXT; const csociausugiaiiku = self::waywmkogcywugikw . self::mkousmkiawwousws; const gmssuqwcwmucmymk = self::waywmkogcywugikw . self::qescuiwgsyuikume; const suauoeqsmyyyoiqc = self::waywmkogcywugikw . self::uqgcmmosieyimiku . self::imywcsggckkcywgk; const eocyseaqimgiciso = self::waywmkogcywugikw . self::uqgcmmosieyimiku . self::TEXT; const kcqakokswagkymgy = self::waywmkogcywugikw . self::uqgcmmosieyimiku . self::qgqyauaqwqmqseim; const akgosquwywqyooum = self::waywmkogcywugikw . self::wuasowoqaccigqqu . self::yayciqueeakqwese; const mesmkcqcgusoieck = "\x74\x61\170\x6f\156\x6f\155\171\x5f"; const acsigocoaacakgqs = "\x70\157\x73\164\137\164\171\160\x65\137"; const wsqycwuumsssqqcq = self::acsigocoaacakgqs . self::mesmkcqcgusoieck; const ygiuusywiucccwqk = self::wsqycwuumsssqqcq . "\164\151\x74\154\145\137"; const wusmaqmagugmywwe = self::wsqycwuumsssqqcq . "\x64\x65\163\143\x72\x69\x70\x74\151\x6f\156\137"; const gasuscmquiokwcak = self::wsqycwuumsssqqcq . "\x64\151\x73\x70\x6c\141\171\137\x64\x65\x73\x63\x72\151\x70\x74\151\x6f\x6e\x5f"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\x69\x74", [$this, "\x69\x6e\151\x74"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\151\x6d\141\x67\x65\137\x70\x6c\141\143\145\150\x6f\154\x64\x65\162\x5f\x69\144"), [$this, "\163\145\161\x75\157\x69\x73\151\x63\141\x6b\x6d\141\x67\155\x77"], 10, 0)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x69\x6d\141\x67\x65\x5f\x70\154\x61\143\x65\150\157\154\144\145\x72\x5f\165\x72\154"), [$this, "\163\x71\157\x67\x69\x6b\x73\x6f\x6d\x67\141\157\145\x67\x63\x79"], 10, 0); } public function wuiuecuwkuswaioe() : ?string { $ymqmyyeuycgmigyo = null; $wksoawcgagcgoask = self::eeqqugcowsqysask(DecoratorTheme::ogciwyoqgciosgcw()->get_template()); if (!$wksoawcgagcgoask) { goto sqmoqymckwsogsqg; } $ymqmyyeuycgmigyo = $wksoawcgagcgoask->aakmagwggmkoiiyu(); sqmoqymckwsogsqg: return $ymqmyyeuycgmigyo; } public function youaqkimaoecgsye() : ?string { return $this->wuiuecuwkuswaioe() . "\x5f\163\145\164\164\151\x6e\147\x73"; } public function init() { if (!(DecoratorQuery::goecwaaykqoaaagg() && ($uusmaiomayssaecw = $this->youaqkimaoecgsye()))) { goto uycesqqkoeamocgm; } $this->cecaguuoecmccuse("\142\x65\146\x6f\x72\145\137\x75\160\x64\141\x74\x65\x5f{$uusmaiomayssaecw}", [$this, "\x69\x61\163\171\167\167\153\x67\x75\x79\x61\165\x69\171\167\165"])->cecaguuoecmccuse($uusmaiomayssaecw . self::iusoecsswgekecks . "\x5f\x74\141\x62", [$this, "\157\x65\x6d\143\x69\x73\x67\x75\143\x67\x6b\161\163\143\x71\171"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("{$uusmaiomayssaecw}\x5f\x61\146\x74\x65\162\137\x67\145\x6e\145\x72\x61\x74\x65\137\x66\157\162\x6d"), [$this, "\161\143\x79\167\x79\x75\x77\x6d\147\163\x61\151\x73\147\157\x65"]); uycesqqkoeamocgm: } public function qcywyuwmgsaisgoe($amakmumgguksgmum) { if (!$amakmumgguksgmum instanceof BaseSetting) { goto qkuiwoqksgayqqmg; } $uaqusiikkokccqou = []; $sciomagaqmgggsiu = ManipulatePost::mwoyqeeigwqoamiw([self::aisguagukaewucii => self::ckmqoekmugkggeym]); $micugwgqicqmeoqq = []; foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { $ymqmyyeuycgmigyo = ''; $meqocwsecsywiiqs = ''; $yuwymayicwwqiske = ''; if (!ManipulatePost::ykmyesgqoqaamaqu($useksmwkuswkwcqg)) { goto wkgskiuiukiuyque; } $ymqmyyeuycgmigyo = ManipulatePost::yyqgaciccoiwuwyq($useksmwkuswkwcqg); $meqocwsecsywiiqs = ManipulatePost::gaeyeooascowgiac($useksmwkuswkwcqg); $yuwymayicwwqiske = self::acsigocoaacakgqs; wkgskiuiukiuyque: if (!($ymqmyyeuycgmigyo && $meqocwsecsywiiqs)) { goto oyiuyywyeoskckuw; } $micugwgqicqmeoqq[] = $amakmumgguksgmum::sgsmqaoowiyocqaa($yuwymayicwwqiske . $ymqmyyeuycgmigyo, sprintf(__("\45\x73\40\103\157\x6e\x66\x69\147", PR__CMN__COVER), $meqocwsecsywiiqs))->mkksewyosgeumwsa($amakmumgguksgmum::ymuegqgyuagyucws(self::ygiuusywiucccwqk . $ymqmyyeuycgmigyo, __("\124\151\x74\x6c\x65", PR__CMN__COVER)))->mkksewyosgeumwsa($amakmumgguksgmum::wcwmusaouiqaqeww(self::gasuscmquiokwcak . $ymqmyyeuycgmigyo, __("\x44\x69\x73\160\x6c\x61\x79\x20\x44\x65\x73\143\x72\151\x70\164\151\157\156", PR__CMN__COVER)))->mkksewyosgeumwsa($amakmumgguksgmum::sciaycsmsiekqueg(self::wusmaqmagugmywwe . $ymqmyyeuycgmigyo, __("\x44\x65\x73\x63\162\x69\x70\164\151\157\156", PR__CMN__COVER))->qsecygiycssgacqs(5)->gsomueooycksswcy()); oyiuyywyeoskckuw: ukomuiwukymcoaso: } ceiwqkyquikcemmo: if (!$micugwgqicqmeoqq) { goto goqmywuiicciasyk; } $uaqusiikkokccqou[] = $amakmumgguksgmum::cgygmuguceeosoey("\160\157\x73\x74\137\x74\171\160\x65\137\x6d\x65\164\141\142\157\170", __("\120\157\163\164\40\x54\x79\x70\x65", PR__CMN__COVER))->ciwuiwsyckiiogwo($micugwgqicqmeoqq)->saemoowcasogykak(IconFontawesomeInterface::uaeoasqqyggqoakg); goqmywuiicciasyk: if (!$uaqusiikkokccqou) { goto siecswkggyikqkga; } $amakmumgguksgmum->aucimgwswmgaocae(MetaBox::sgsmqaoowiyocqaa("\x70\157\x73\164\137\x74\171\x70\145\137\164\141\x78\157\x6e\157\155\171", __("\x50\x6f\x73\164\x20\x54\x79\160\x65\40\x26\40\124\x61\x78\157\156\x6f\155\x79", PR__CMN__COVER))->mugcceiwosyciwos($uaqusiikkokccqou)->saemoowcasogykak(IconFontawesomeInterface::mweyiqcsggiwmgmu)); siecswkggyikqkga: $amakmumgguksgmum->aucimgwswmgaocae(MetaBox::sgsmqaoowiyocqaa("\64\60\64\x5f\x70\141\x67\145", __("\64\60\x34\x20\120\141\147\145", PR__CMN__COVER))->sikqggwmmykuiymy(MetaBox::cgygmuguceeosoey("\160\141\x67\x65\137\64\x30\64" . self::iusoecsswgekecks, __("\x47\145\156\x65\x72\x61\154", PR__CMN__COVER))->mkksewyosgeumwsa(MetaBox::kimoeccokowuaiic(self::csociausugiaiiku, __("\x49\x6d\x61\147\x65", PR__CMN__COVER))->esauscaiuyiikmgc())->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::gmssuqwcwmucmymk, __("\x54\151\x74\x6c\145", PR__CMN__COVER))->eyygsasuqmommkua(__("\120\141\x67\x65\40\x4e\x6f\x74\40\106\157\x75\x6e\144", PR__CMN__COVER)))->mkksewyosgeumwsa(MetaBox::uouyygwcgsmygaee(self::jsemecycggiyookc, __("\x54\x65\170\x74", PR__CMN__COVER))->qsecygiycssgacqs(3)->eyygsasuqmommkua(__("\x54\x68\x65\x20\154\x69\x6e\153\40\171\157\165\40\x63\154\151\143\153\x65\144\x20\155\141\x79\x20\x62\x65\40\x62\x72\157\153\x65\x6e\40\x6f\162\40\164\150\x65\x20\160\141\147\x65\x20\155\141\171\40\x68\141\x76\145\x20\x62\145\145\x6e\x20\x72\x65\x6d\157\x76\x65\x64\x2e", PR__CMN__COVER)))->mkksewyosgeumwsa(MetaBox::wcwmusaouiqaqeww(self::akgosquwywqyooum, __("\x44\x69\163\x61\x62\154\x65\40\x53\x65\141\x72\x63\150\x20\x42\x6f\x78", PR__CMN__COVER)))->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::suauoeqsmyyyoiqc, __("\x41\143\164\151\x6f\156\x20\125\x52\x4c", PR__CMN__COVER))->smmismmuuccmscya()->oeewiaacscgyamai(self::imywcsggckkcywgk))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::eocyseaqimgiciso, __("\x41\143\x74\x69\x6f\x6e\40\124\145\170\164", PR__CMN__COVER), __("\x4c\145\x61\x76\145\40\145\155\x70\x74\x79\x20\x69\146\x20\171\157\x75\40\167\141\156\164\x20\163\x68\x6f\167\x20\x70\141\147\x65\x20\164\151\x74\x6c\x65\56", PR__CMN__COVER))->eyygsasuqmommkua(__("\x42\141\143\153\40\x54\157\40\x48\x6f\155\x65\x20\120\x61\147\145", PR__CMN__COVER)))->mkksewyosgeumwsa(MetaBox::scgissgkcwaumgky(self::kcqakokswagkymgy)->usuqmwksoeaayaig(__("\101\143\x74\x69\157\x6e\40\x49\x63\157\x6e", PR__CMN__COVER)))->saemoowcasogykak(IconFontawesomeInterface::aqaocgsqseeqmoii))->saemoowcasogykak(IconFontawesomeInterface::iswakiougekqwsqi)); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x63\x6f\166\145\x72\137\163\x65\x74\164\151\x6e\x67\x5f\x67\x65\156\x65\x72\x61\164\145\137\146\157\x72\x6d"), $amakmumgguksgmum); qkuiwoqksgayqqmg: } public function guowcwummeykeqkm() : array { $qiouiwasaauyaaue = $iwkyyocymeukcceu = []; $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $ucseauqiioaksuou = $eygsasmqycagyayw->ougaackuymsqsawi(); $wkaqekwwgqsqwcoi = IconFontawesomeInterface::dakukcwskocyuook; foreach ($ucseauqiioaksuou as $cekceegqqaoiisei => $pkyyagewkiyckmwy) { $qiouiwasaauyaaue[$cekceegqqaoiisei] = $eygsasmqycagyayw->eyamqkqiykagecsw($wkaqekwwgqsqwcoi, [self::uociqugwegocyuue => $cekceegqqaoiisei]); $iwkyyocymeukcceu[$cekceegqqaoiisei] = $pkyyagewkiyckmwy; yuqgwwmqwqiuwmaw: } easqmyamcmeesgya: return [self::aeweusomuikewuis => $qiouiwasaauyaaue, self::eoaiagsgqsmskugs => $iwkyyocymeukcceu]; } public function oemcisgucgkqscqy($cciauwuwuqaywgce) { if (!$cciauwuwuqaywgce instanceof Tab) { goto quaqmuusokiyqgqe; } $ucseauqiioaksuou = $this->guowcwummeykeqkm(); $wkuikksoimmikkek = DecoratorAttachment::aiiaeiaqiayooqyi(); $cciauwuwuqaywgce->sikqggwmmykuiymy($cciauwuwuqaywgce::cgygmuguceeosoey(self::ioomakeyqiqowgmk, __("\x47\x65\156\x65\x72\x61\154", PR__CMN__COVER))->mkksewyosgeumwsa($cciauwuwuqaywgce::auouusgocuwkgaok(self::migwcseqcocyqcge, $ucseauqiioaksuou[self::aeweusomuikewuis], $ucseauqiioaksuou[self::eoaiagsgqsmskugs])->usuqmwksoeaayaig(__("\x49\143\157\156\40\123\x65\164", PR__CMN__COVER))->ccmwycqioaicegoc(__("\131\157\x75\x20\x63\141\156\x20\143\x68\141\156\x67\x65\40\x69\143\157\x6e\x20\163\x65\164\x20\157\146\x20\x66\162\x6f\x6e\x74\145\156\x64\x20\x62\x79\40\x63\x68\141\x6e\147\x69\x6e\147\x20\x74\150\x69\163\x20\157\160\x74\x69\x6f\156", PR__CMN__COVER)))->mkksewyosgeumwsa($cciauwuwuqaywgce::wcwmusaouiqaqeww(self::mguiyugauoweycka, __("\104\x69\163\141\x62\x6c\x65\40\x41\x64\155\151\x6e\40\x42\141\162", PR__CMN__COVER)))->mkksewyosgeumwsa($cciauwuwuqaywgce::kimoeccokowuaiic(self::gqgseikcqgoiuqeg, __("\x49\155\141\x67\x65\x20\120\x6c\x61\143\145\x68\x6f\x6c\x64\145\x72", PR__CMN__COVER), __("\x44\x65\146\x61\165\154\164\40\151\155\141\x67\x65\x20\146\x6f\x72\40\141\154\154\40\x70\x6f\163\164\40\164\171\x70\x65\x73\56", PR__CMN__COVER)))->mkksewyosgeumwsa($cciauwuwuqaywgce::ymuegqgyuagyucws(self::qqswqycisgaqiuse, __("\107\x6f\x6f\147\x6c\x65\x20\101\x6e\141\154\x79\x74\x69\143\163", PR__CMN__COVER))->yskkmqiusguummwa()->kyiucygqsgequoys("\125\x41\x2d\43\43\x23\x23\x23\x23\43\43\43\x2d\43"))->jyumyyugiwwiqomk(1)->saemoowcasogykak(IconFontawesomeInterface::aqaocgsqseeqmoii))->sikqggwmmykuiymy($cciauwuwuqaywgce::cgygmuguceeosoey("\157\160\164\151\155\151\x7a\141\x74\151\x6f\x6e", __("\117\x70\164\x69\155\151\x7a\x61\x74\x69\x6f\156", PR__CMN__COVER))->mkksewyosgeumwsa($cciauwuwuqaywgce::wcwmusaouiqaqeww(self::mgwkysuyugygacma, __("\x44\151\163\x61\142\154\145\x20\x4c\x61\x7a\171\40\x4c\157\x61\x64", PR__CMN__COVER)))->mkksewyosgeumwsa($cciauwuwuqaywgce::wcwmusaouiqaqeww(self::qmwqkeocouqykuwc, __("\104\151\x73\x61\x62\154\x65\x20\104\145\154\141\x79\x65\144\x20\123\143\x72\x69\160\164\163", PR__CMN__COVER)))->mkksewyosgeumwsa($cciauwuwuqaywgce::wcwmusaouiqaqeww(self::mesmawyqgaugkmag, __("\104\151\163\x61\x62\154\145\x20\103\154\x65\x61\x6e\165\x70", PR__CMN__COVER)))->mkksewyosgeumwsa($cciauwuwuqaywgce::ckuwucygcwsiawms(self::gwucgosagousgoko, __("\x45\x78\143\x6c\165\144\145\x20\x4f\x70\164\x69\155\x69\172\x61\164\x69\157\156", PR__CMN__COVER))->ccmwycqioaicegoc(__("\x43\x68\157\151\x63\x65\x20\160\x6f\163\164\x73\x20\x66\x72\157\155\40\160\157\163\x74\40\164\x79\x70\x65\x20\x74\150\141\x74\x20\x79\x6f\165\40\x77\x61\x6e\164\40\x74\157\x20\151\147\x6e\157\x72\x65\x20\x66\162\x6f\155\x20\x6f\160\x74\151\x6d\151\172\141\x74\x69\157\156", PR__CMN__COVER))->smmismmuuccmscya()->icsmsougoccqosgc(ManipulatePost::mwoyqeeigwqoamiw(self::emgcgiseaoouacge))->oikgogcweiiaocka())->jyumyyugiwwiqomk(2)->saemoowcasogykak(IconFontawesomeInterface::mcwskwcuceqsuomi))->sikqggwmmykuiymy($cciauwuwuqaywgce::cgygmuguceeosoey("\154\x69\143\x65\x6e\x73\145\x73", __("\114\x69\x63\145\x6e\163\x65\163", PR__CMN__COVER))->mkksewyosgeumwsa($cciauwuwuqaywgce::iseogkiymousogom(self::mgieaomemyywoqwa, __("\111\164\x65\155\x73", PR__CMN__COVER))->mkksewyosgeumwsa($cciauwuwuqaywgce::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\x54\x69\164\x6c\145", PR__CMN__COVER), __("\124\151\x74\x6c\145\40\157\x66\x20\x6c\151\x63\145\156\x73\x65\x20\164\x6f\40\163\x68\x6f\167\40\157\x6e\40\x61\x64\155\x69\x6e", PR__CMN__COVER)))->mkksewyosgeumwsa($cciauwuwuqaywgce::ymuegqgyuagyucws(self::ogigqueukwysusii, __("\114\x69\156\153", PR__CMN__COVER))->xkgcwkwsqysqamic())->mkksewyosgeumwsa($cciauwuwuqaywgce::kimoeccokowuaiic(self::mkousmkiawwousws, __("\x49\x6d\141\x67\x65", PR__CMN__COVER), __("\111\x66\40\171\x6f\x75\x20\163\x65\x74\40\x61\x20\155\x61\162\153\165\160\x20\146\x6f\x72\x20\x74\150\151\x73\40\x6c\x69\143\145\156\163\145\54\40\x74\x68\x69\x73\x20\x69\x6d\141\x67\145\40\162\145\160\x6c\141\143\145\x20\167\151\x74\150\x20\164\x68\141\x74\x20\151\155\x61\147\x65\56", PR__CMN__COVER)))->mkksewyosgeumwsa($cciauwuwuqaywgce::ckuwucygcwsiawms(self::qmeuakmyaucgeyeu, __("\111\155\x61\147\145\40\123\x69\172\x65", PR__CMN__COVER))->oeeumggeiyyckkom('', [self::qomookamaskuoswk, self::sogmkkcwuamuqegw])->acauweqyyugwisqc(array_combine($wkuikksoimmikkek, $wkuikksoimmikkek)))->mkksewyosgeumwsa($cciauwuwuqaywgce::ymuegqgyuagyucws(self::qomookamaskuoswk, __("\111\x6d\141\x67\x65\x20\127\151\144\164\150", PR__CMN__COVER))->escqqisecooswqgo())->mkksewyosgeumwsa($cciauwuwuqaywgce::ymuegqgyuagyucws(self::sogmkkcwuamuqegw, __("\x49\x6d\x61\147\145\40\110\x65\151\x67\x68\x74", PR__CMN__COVER))->escqqisecooswqgo())->mkksewyosgeumwsa($cciauwuwuqaywgce::uouyygwcgsmygaee(self::kicoscymgmgqeqgy, __("\x4d\141\162\x6b\165\160", PR__CMN__COVER), __("\x49\x66\40\171\157\x75\40\150\141\x76\x65\x20\141\40\150\164\x6d\x6c\x20\155\x61\162\x6b\165\x70\40\157\x66\x20\x79\x6f\165\162\40\154\x69\x63\x65\156\163\145\54\40\160\165\164\40\x68\145\x72\145\40\164\157\x20\x73\x68\x6f\167\40\x69\x74\56", PR__CMN__COVER))->qsecygiycssgacqs(3)->wcgckeeiiseccqkc())->mkksewyosgeumwsa($cciauwuwuqaywgce::cwiuiiakukcsaakw(self::ascagqcquwgmygkm))->wygoskowywcuyaiq())->saemoowcasogykak(IconFontawesomeInterface::yccqooiyscawgags)); quaqmuusokiyqgqe: return $cciauwuwuqaywgce; } public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; if (!($owgumcsyqsamiemg = self::symcgieuakksimmu())) { goto iksewmsaugayqaqq; } $eqgoocgaqwqcimie = $owgumcsyqsamiemg->sscegwueamckwmcy("\147\x65\x74\137{$owgumcsyqsamiemg->wuiuecuwkuswaioe()}\137\x73\x65\164\164\x69\156\x67", $uusmaiomayssaecw, $ggauoeuaesiymgee, []); if (!($eqgoocgaqwqcimie === $uusmaiomayssaecw)) { goto smiemmcqqukyguuu; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; smiemmcqqukyguuu: iksewmsaugayqaqq: return $eqgoocgaqwqcimie; } public static function siggceeeowgkoaam(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::wkweqssoakmmmguq => [self::qescuiwgsyuikume, self::ascagqcquwgmygkm], self::aisguagukaewucii => self::ckmqoekmugkggeym, self::qwumqqyuasyskkkc => self::eiwcuqigayigimak(self::mgieaomemyywoqwa, [])]); $rsywwkgoeeiscsik = BaseSetting::qkckuwowccaqygke(self::mgieaomemyywoqwa, $ywmkwiwkosakssii); if (!($rsywwkgoeeiscsik && is_array($rsywwkgoeeiscsik))) { goto quyogmwugsyoaaiu; } if (!(self::ckmqoekmugkggeym === $ywmkwiwkosakssii[self::aisguagukaewucii])) { goto skuqigsokaguscas; } foreach ($rsywwkgoeeiscsik as $momcykaoccoymeig => $caicqiiuwsyaeeko) { $mcqieaigyeeyaksm = ManipulateArray::get($caicqiiuwsyaeeko, self::mkousmkiawwousws . self::mswocgcucqoaesaa); if (!($gskuwmeemyeuwogc = ManipulateArray::get($caicqiiuwsyaeeko, self::kicoscymgmgqeqgy))) { goto sgiwoiscywusgmmm; } if (!($mcqieaigyeeyaksm && DOMCrawler::umuecysoywoumgwo($gskuwmeemyeuwogc, "\151\155\147"))) { goto qmoocweoekqueuyy; } $wwgucssaecqekuek = []; if ($weaakkwoqiawsiua = ManipulateArray::get($caicqiiuwsyaeeko, self::qmeuakmyaucgeyeu)) { goto ecouwqosmoyyqmkw; } $wwgucssaecqekuek = ["\x73\162\143" => ManipulateAttachment::iaykyouimqoikagg($mcqieaigyeeyaksm), self::qomookamaskuoswk => ManipulateArray::get($caicqiiuwsyaeeko, self::qomookamaskuoswk, 80), self::sogmkkcwuamuqegw => ManipulateArray::get($caicqiiuwsyaeeko, self::sogmkkcwuamuqegw, 80)]; goto mqiiqkuaoekeuswo; ecouwqosmoyyqmkw: if (!($mcqieaigyeeyaksm = ManipulateAttachment::qaeeusqkgwagwaqc($mcqieaigyeeyaksm, $weaakkwoqiawsiua))) { goto eckcqesiokgwkkiw; } $wcosyisywqggyuie = DOMCrawler::ccekeuwwqqoiwuwy($mcqieaigyeeyaksm, "\151\155\147"); $wwgucssaecqekuek = ["\163\x72\x63" => ManipulateArray::get($wcosyisywqggyuie, "\x73\162\x63"), self::qomookamaskuoswk => ManipulateArray::get($wcosyisywqggyuie, self::qomookamaskuoswk, 80), self::sogmkkcwuamuqegw => ManipulateArray::get($wcosyisywqggyuie, self::sogmkkcwuamuqegw, 80)]; eckcqesiokgwkkiw: mqiiqkuaoekeuswo: $rsywwkgoeeiscsik[$momcykaoccoymeig][self::kicoscymgmgqeqgy] = DOMCrawler::qcgocuceocquqcuw($gskuwmeemyeuwogc, ["\151\x6d\147" => $wwgucssaecqekuek]); qmoocweoekqueuyy: sgiwoiscywusgmmm: yoagcooekomeokwg: } yamyagayiooyeekg: skuqigsokaguscas: quyogmwugsyoaaiu: return $rsywwkgoeeiscsik; } public function iasywwkguyauiywu($eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = BaseSetting::wcoqgwyekgsmiueo($eqgoocgaqwqcimie, self::mgieaomemyywoqwa); return $eqgoocgaqwqcimie; } }
