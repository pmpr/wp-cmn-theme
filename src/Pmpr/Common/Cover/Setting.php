<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ee0eaf0b376             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\DecoratorTheme; use Pmpr\Common\Foundation\Decorator\Post\DecoratorAttachment; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Segment; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Tab; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Setting as BaseSetting; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting as NewSetting; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Setting extends Container { const migwcseqcocyqcge = "\x69\x63\157\x6e\x5f\163\145\164"; const qqswqycisgaqiuse = "\x67\157\x6f\x67\x6c\145\137\141\x6e\x61\x6c\171\164\x69\143\x73"; const gqgseikcqgoiuqeg = "\x69\x6d\141\147\x65\x5f\160\154\141\x63\145\x68\x6f\154\x64\x65\x72"; const mguiyugauoweycka = "\x64\151\x73\141\x62\154\x65\x5f\x66\162\x6f\156\x74\145\156\x64\x5f\141\x64\x6d\151\x6e\137\x62\x61\x72"; const qmwqkeocouqykuwc = "\144\151\x73\x61\x62\x6c\x65\137\x64\x65\154\x61\x79"; const mesmawyqgaugkmag = "\144\151\x73\x61\142\x6c\x65\x5f\143\x6c\x65\141\156\x75\160"; const mgwkysuyugygacma = "\x64\151\163\x61\x62\x6c\145\x5f\x6c\x61\x7a\171\154\x6f\x61\x64"; const gwucgosagousgoko = "\145\x78\143\x6c\165\x64\x65\137\x66\162\157\x6d\137\157\x70\164\x69\155\x69\x7a\141\x74\x69\157\156"; const mgieaomemyywoqwa = "\154\x69\x63\145\156\x73\145\x73"; const waywmkogcywugikw = "\x6e\x6f\164\x5f\146\157\165\156\x64\x5f"; const jsemecycggiyookc = self::waywmkogcywugikw . self::TEXT; const csociausugiaiiku = self::waywmkogcywugikw . self::mkousmkiawwousws; const gmssuqwcwmucmymk = self::waywmkogcywugikw . self::qescuiwgsyuikume; const suauoeqsmyyyoiqc = self::waywmkogcywugikw . self::uqgcmmosieyimiku . self::imywcsggckkcywgk; const eocyseaqimgiciso = self::waywmkogcywugikw . self::uqgcmmosieyimiku . self::TEXT; const kcqakokswagkymgy = self::waywmkogcywugikw . self::uqgcmmosieyimiku . self::qgqyauaqwqmqseim; const akgosquwywqyooum = self::waywmkogcywugikw . self::wuasowoqaccigqqu . self::yayciqueeakqwese; const mesmkcqcgusoieck = "\x74\x61\170\157\156\x6f\x6d\171\x5f"; const acsigocoaacakgqs = "\x70\157\163\x74\137\x74\x79\160\x65\x5f"; const wsqycwuumsssqqcq = self::acsigocoaacakgqs . self::mesmkcqcgusoieck; const ygiuusywiucccwqk = self::wsqycwuumsssqqcq . "\x74\x69\164\x6c\145\x5f"; const wusmaqmagugmywwe = self::wsqycwuumsssqqcq . "\144\145\x73\143\x72\x69\160\164\x69\x6f\156\x5f"; const gasuscmquiokwcak = self::wsqycwuumsssqqcq . "\x64\x69\x73\x70\x6c\141\171\137\x64\x65\163\x63\x72\151\160\164\151\157\x6e\137"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\x69\164", [$this, "\x69\156\x69\164"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\151\155\x61\147\x65\137\160\154\x61\143\145\x68\157\x6c\x64\145\162\x5f\x69\x64"), [$this, "\163\x65\x71\165\x6f\x69\x73\151\143\x61\x6b\155\141\147\155\167"], 10, 0)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x69\155\x61\x67\x65\137\160\154\141\x63\x65\x68\x6f\154\x64\x65\x72\137\x75\x72\154"), [$this, "\163\x71\x6f\147\x69\x6b\x73\157\155\147\141\x6f\x65\x67\143\x79"], 10, 0); } public function wuiuecuwkuswaioe() : ?string { $ymqmyyeuycgmigyo = null; $wksoawcgagcgoask = self::eeqqugcowsqysask(DecoratorTheme::ogciwyoqgciosgcw()->get_template()); if (!$wksoawcgagcgoask) { goto suuskagowwgsouqw; } $ymqmyyeuycgmigyo = $wksoawcgagcgoask->aakmagwggmkoiiyu(); suuskagowwgsouqw: return $ymqmyyeuycgmigyo; } public function youaqkimaoecgsye() : ?string { return $this->wuiuecuwkuswaioe() . "\x5f\x73\145\164\x74\151\x6e\147\x73"; } public function init() { $uusmaiomayssaecw = $this->youaqkimaoecgsye(); $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("{$uusmaiomayssaecw}\x5f\141\x66\x74\x65\x72\x5f\x67\145\156\145\x72\x61\x74\145\x5f\x66\157\x72\155"), [$this, "\x71\143\171\167\x79\165\167\155\x67\163\x61\151\163\147\x6f\145"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\141\x66\x74\145\x72\x5f\147\145\156\145\162\x61\x74\x65\x5f{$uusmaiomayssaecw}\x5f\160\x61\x6e\145\154"), [$this, "\x77\x63\x61\x61\x67\x65\141\145\x71\x75\151\143\141\167\161\x63"]); $this->cecaguuoecmccuse("\142\145\146\157\162\145\137\x75\x70\x64\x61\164\145\x5f{$uusmaiomayssaecw}", [$this, "\x69\141\163\171\x77\167\x6b\147\165\171\x61\165\x69\x79\167\165"])->cecaguuoecmccuse($uusmaiomayssaecw . self::iusoecsswgekecks . "\137\x74\141\142", [$this, "\x6f\145\x6d\143\x69\x73\147\x75\143\x67\153\161\x73\x63\x71\x79"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$uusmaiomayssaecw}\137\163\145\x67\155\145\156\164\x5f\x67\145\x6e\145\162\141\154\137\163\x65\143\164\151\x6f\156\x73"), [$this, "\153\155\165\x77\171\x61\x6f\163\143\157\157\145\147\171\x6d\x73"], 10, 3); } public function wcaageaequicawqc($amakmumgguksgmum) { if (!$amakmumgguksgmum instanceof NewSetting) { goto koiscokkkaimiecq; } $mgiqqesweuqmsymo = []; $sciomagaqmgggsiu = ManipulatePost::mwoyqeeigwqoamiw([self::aisguagukaewucii => self::ckmqoekmugkggeym]); $micugwgqicqmeoqq = []; foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { $ymqmyyeuycgmigyo = ''; $meqocwsecsywiiqs = ''; $yuwymayicwwqiske = ''; if (!ManipulatePost::ykmyesgqoqaamaqu($useksmwkuswkwcqg)) { goto aquqkiggamaoegoo; } $ymqmyyeuycgmigyo = ManipulatePost::yyqgaciccoiwuwyq($useksmwkuswkwcqg); $meqocwsecsywiiqs = ManipulatePost::gaeyeooascowgiac($useksmwkuswkwcqg); $yuwymayicwwqiske = self::acsigocoaacakgqs; aquqkiggamaoegoo: if (!($ymqmyyeuycgmigyo && $meqocwsecsywiiqs)) { goto mykiyqcqiegkiqys; } $micugwgqicqmeoqq[] = $amakmumgguksgmum::doeuiogekyiwgsgw($yuwymayicwwqiske . $ymqmyyeuycgmigyo)->gswweykyogmsyawy(sprintf(__("\45\163\x20\103\x6f\156\x66\x69\x67", PR__CMN__COVER), $meqocwsecsywiiqs))->mkksewyosgeumwsa($amakmumgguksgmum::ymuegqgyuagyucws(self::ygiuusywiucccwqk . $ymqmyyeuycgmigyo)->gswweykyogmsyawy(sprintf(__("\45\163\40\x61\162\x63\x68\x69\x76\145\40\164\x69\164\154\145", PR__CMN__COVER), $meqocwsecsywiiqs))->mkmssscwmeekwgqo())->mkksewyosgeumwsa($amakmumgguksgmum::wcwmusaouiqaqeww(self::gasuscmquiokwcak . $ymqmyyeuycgmigyo)->gswweykyogmsyawy(__("\104\x69\x73\x70\x6c\141\171\x20\104\145\x73\143\x72\x69\x70\164\151\x6f\156", PR__CMN__COVER))->agywyaaquwawwuiy(self::wusmaqmagugmywwe . $ymqmyyeuycgmigyo))->mkksewyosgeumwsa($amakmumgguksgmum::sciaycsmsiekqueg(self::wusmaqmagugmywwe . $ymqmyyeuycgmigyo)->gswweykyogmsyawy(sprintf(__("\45\x73\40\x61\x72\143\150\151\166\x65\x20\144\145\163\143\162\151\160\164\x69\157\156", PR__CMN__COVER), $meqocwsecsywiiqs))->qsecygiycssgacqs(5)->gsomueooycksswcy()); mykiyqcqiegkiqys: csieaismmmocyacu: } omykokikgocoikec: if (!$micugwgqicqmeoqq) { goto agemwookwseyycqo; } $mgiqqesweuqmsymo[] = $amakmumgguksgmum::ycgeeoiieoiakgam("\160\157\x73\x74\137\x74\171\160\145\x5f\x73\x65\x63\x74\x69\x6f\x6e")->gswweykyogmsyawy(__("\120\x6f\x73\x74\x20\124\171\160\x65", PR__CMN__COVER))->ciwuiwsyckiiogwo($micugwgqicqmeoqq)->saemoowcasogykak(IconInterface::qgmawmcoyqqkcosk); agemwookwseyycqo: if (!$mgiqqesweuqmsymo) { goto cquecqekuucwoumw; } $amakmumgguksgmum->ogimmkwaymekmoky($amakmumgguksgmum::mkcwgaeaaweamyyg("\160\157\163\164\137\x74\x79\x70\x65\x5f\x74\141\170\x6f\156\x6f\155\x79")->gswweykyogmsyawy(__("\x50\x6f\x73\164\40\x54\x79\160\x65\x20\46\40\x54\x61\170\157\x6e\x6f\155\171", PR__CMN__COVER))->gucwmccyimoagwcm(__("\x41\x72\143\150\151\x76\145\x20\103\x6f\156\146\x69\x67\165\x72\x61\x74\x69\x6f\156\x73", PR__CMN__COVER))->saemoowcasogykak(IconInterface::oiogyiqiyikmsmcm)->mgisqyswkkuceisu($mgiqqesweuqmsymo)); cquecqekuucwoumw: $amakmumgguksgmum->ogimmkwaymekmoky($amakmumgguksgmum::mkcwgaeaaweamyyg("\x34\x30\x34\137\x70\141\147\x65")->gswweykyogmsyawy(__("\x34\x30\64\40\x50\x61\x67\145", PR__CMN__COVER))->gucwmccyimoagwcm(__("\114\x61\x79\157\x75\164\40\46\40\103\157\156\146\x69\147\165\x72\141\164\x69\x6f\156", PR__CMN__COVER))->kwkugmqouisgkqig($amakmumgguksgmum::ycgeeoiieoiakgam(self::ioomakeyqiqowgmk)->gswweykyogmsyawy(__("\x47\145\156\x65\162\x61\154", PR__CMN__COVER))->mkksewyosgeumwsa($amakmumgguksgmum::quaegkgkucwyeiqg(self::csociausugiaiiku)->gswweykyogmsyawy(__("\x49\155\141\x67\145", PR__CMN__COVER))->ycueqsmmommygueu())->mkksewyosgeumwsa($amakmumgguksgmum::ymuegqgyuagyucws(self::gmssuqwcwmucmymk)->gswweykyogmsyawy(__("\124\151\x74\x6c\x65", PR__CMN__COVER))->mkmssscwmeekwgqo()->eyygsasuqmommkua(__("\120\x61\x67\x65\40\x4e\157\x74\x20\x46\157\165\x6e\x64", PR__CMN__COVER)))->mkksewyosgeumwsa($amakmumgguksgmum::uouyygwcgsmygaee(self::jsemecycggiyookc)->gswweykyogmsyawy(__("\124\x65\x78\x74", PR__CMN__COVER))->qsecygiycssgacqs(3)->eyygsasuqmommkua(__("\x54\x68\145\x20\154\151\x6e\153\40\x79\x6f\x75\40\x63\154\x69\x63\153\x65\x64\40\155\x61\x79\40\x62\145\40\x62\162\157\x6b\x65\x6e\40\157\x72\40\x74\150\145\x20\160\141\x67\145\40\155\x61\x79\40\150\x61\x76\145\x20\x62\x65\145\x6e\x20\162\145\155\157\x76\145\144\x2e", PR__CMN__COVER)))->mkksewyosgeumwsa($amakmumgguksgmum::wcwmusaouiqaqeww(self::akgosquwywqyooum)->gswweykyogmsyawy(__("\104\x69\x73\141\142\154\145\40\123\x65\x61\x72\x63\150\40\x42\x6f\x78", PR__CMN__COVER)))->mkksewyosgeumwsa($amakmumgguksgmum::mccagaqeagiikkec(self::suauoeqsmyyyoiqc)->gswweykyogmsyawy(__("\x41\x63\164\151\x6f\x6e\x20\125\x52\x4c", PR__CMN__COVER))->ukqywcsoogkyoaoa(self::imywcsggckkcywgk)->mkmssscwmeekwgqo())->mkksewyosgeumwsa($amakmumgguksgmum::ymuegqgyuagyucws(self::eocyseaqimgiciso)->gswweykyogmsyawy(__("\101\x63\164\x69\x6f\x6e\40\x54\x65\170\164", PR__CMN__COVER))->mkmssscwmeekwgqo()->gucwmccyimoagwcm(__("\x4c\x65\x61\x76\x65\x20\145\x6d\x70\x74\x79\x20\x69\146\x20\171\x6f\x75\x20\x77\141\156\164\40\163\150\157\167\x20\x70\141\147\145\x20\x74\x69\x74\154\145\x2e", PR__CMN__COVER))->eyygsasuqmommkua(__("\x42\x61\x63\153\x20\124\157\40\110\157\x6d\x65\x20\120\x61\x67\145", PR__CMN__COVER)))->mkksewyosgeumwsa($amakmumgguksgmum::mccagaqeagiikkec(self::kcqakokswagkymgy)->gswweykyogmsyawy(__("\x41\143\164\x69\x6f\x6e\40\111\143\157\156", PR__CMN__COVER))->mmwqwkuqkqccuqye()->mkmssscwmeekwgqo())->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy))->saemoowcasogykak(IconInterface::kmuciaqoiwuyagia)); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x63\157\166\145\162\x5f\x73\x65\x74\164\151\156\x67\x5f\x67\145\x6e\x65\x72\141\164\145\x5f\146\157\162\155"), $amakmumgguksgmum); koiscokkkaimiecq: } public function qcywyuwmgsaisgoe($amakmumgguksgmum) { if (!$amakmumgguksgmum instanceof BaseSetting) { goto mceucsaeouuwyumm; } $uaqusiikkokccqou = []; $sciomagaqmgggsiu = ManipulatePost::mwoyqeeigwqoamiw([self::aisguagukaewucii => self::ckmqoekmugkggeym]); $micugwgqicqmeoqq = []; foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { $ymqmyyeuycgmigyo = ''; $meqocwsecsywiiqs = ''; $yuwymayicwwqiske = ''; if (!ManipulatePost::ykmyesgqoqaamaqu($useksmwkuswkwcqg)) { goto qwemkcoaseywkuuc; } $ymqmyyeuycgmigyo = ManipulatePost::yyqgaciccoiwuwyq($useksmwkuswkwcqg); $meqocwsecsywiiqs = ManipulatePost::gaeyeooascowgiac($useksmwkuswkwcqg); $yuwymayicwwqiske = self::acsigocoaacakgqs; qwemkcoaseywkuuc: if (!($ymqmyyeuycgmigyo && $meqocwsecsywiiqs)) { goto mqimkwickkgqqeoi; } $micugwgqicqmeoqq[] = $amakmumgguksgmum::sgsmqaoowiyocqaa($yuwymayicwwqiske . $ymqmyyeuycgmigyo, sprintf(__("\45\x73\x20\x43\x6f\x6e\146\x69\x67", PR__CMN__COVER), $meqocwsecsywiiqs))->mkksewyosgeumwsa($amakmumgguksgmum::ymuegqgyuagyucws(self::ygiuusywiucccwqk . $ymqmyyeuycgmigyo, __("\124\151\164\154\145", PR__CMN__COVER)))->mkksewyosgeumwsa($amakmumgguksgmum::wcwmusaouiqaqeww(self::gasuscmquiokwcak . $ymqmyyeuycgmigyo, __("\104\151\163\160\x6c\141\x79\40\x44\x65\163\x63\x72\x69\160\164\151\x6f\x6e", PR__CMN__COVER)))->mkksewyosgeumwsa($amakmumgguksgmum::sciaycsmsiekqueg(self::wusmaqmagugmywwe . $ymqmyyeuycgmigyo, __("\x44\145\163\143\x72\x69\x70\164\x69\x6f\x6e", PR__CMN__COVER))->qsecygiycssgacqs(5)->gsomueooycksswcy()); mqimkwickkgqqeoi: saauykgakaeiyoua: } owuuuiekkaeoeacq: if (!$micugwgqicqmeoqq) { goto kwyimqumkuuyaiku; } $uaqusiikkokccqou[] = $amakmumgguksgmum::cgygmuguceeosoey("\160\157\163\x74\137\x74\171\160\145\137\x6d\145\x74\141\x62\157\170", __("\x50\x6f\163\164\40\124\x79\x70\x65", PR__CMN__COVER))->ciwuiwsyckiiogwo($micugwgqicqmeoqq)->saemoowcasogykak(IconInterface::qgmawmcoyqqkcosk); kwyimqumkuuyaiku: if (!$uaqusiikkokccqou) { goto gkqiqaqecmoogmaa; } $amakmumgguksgmum->aucimgwswmgaocae(MetaBox::sgsmqaoowiyocqaa("\x70\x6f\x73\x74\x5f\164\x79\160\x65\137\164\141\x78\157\156\x6f\x6d\171", __("\120\x6f\x73\x74\40\124\x79\x70\145\x20\46\x20\124\141\x78\157\156\157\155\x79", PR__CMN__COVER))->mugcceiwosyciwos($uaqusiikkokccqou)->saemoowcasogykak(IconInterface::oiogyiqiyikmsmcm)); gkqiqaqecmoogmaa: $amakmumgguksgmum->aucimgwswmgaocae(MetaBox::sgsmqaoowiyocqaa("\x34\60\x34\x5f\x70\x61\147\x65", __("\64\60\64\40\120\141\x67\x65", PR__CMN__COVER))->sikqggwmmykuiymy(MetaBox::cgygmuguceeosoey("\160\141\147\145\x5f\x34\60\x34" . self::iusoecsswgekecks, __("\x47\x65\x6e\145\x72\141\154", PR__CMN__COVER))->mkksewyosgeumwsa(MetaBox::kimoeccokowuaiic(self::csociausugiaiiku, __("\111\155\x61\147\x65", PR__CMN__COVER))->esauscaiuyiikmgc())->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::gmssuqwcwmucmymk, __("\x54\x69\164\154\145", PR__CMN__COVER))->eyygsasuqmommkua(__("\120\x61\x67\x65\40\116\157\x74\40\x46\x6f\165\x6e\x64", PR__CMN__COVER)))->mkksewyosgeumwsa(MetaBox::uouyygwcgsmygaee(self::jsemecycggiyookc, __("\x54\145\170\164", PR__CMN__COVER))->qsecygiycssgacqs(3)->eyygsasuqmommkua(__("\x54\x68\145\x20\154\151\156\153\40\171\x6f\x75\x20\x63\x6c\x69\143\x6b\x65\144\x20\155\x61\171\x20\x62\145\x20\x62\162\157\x6b\145\156\x20\157\162\x20\x74\150\x65\40\160\x61\x67\x65\40\155\141\x79\x20\150\141\x76\145\40\x62\x65\x65\156\x20\x72\x65\x6d\157\x76\145\x64\56", PR__CMN__COVER)))->mkksewyosgeumwsa(MetaBox::wcwmusaouiqaqeww(self::akgosquwywqyooum, __("\x44\x69\x73\141\142\154\x65\x20\x53\x65\x61\x72\143\150\x20\x42\157\x78", PR__CMN__COVER)))->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::suauoeqsmyyyoiqc, __("\x41\x63\164\x69\x6f\156\x20\125\x52\114", PR__CMN__COVER))->smmismmuuccmscya()->oeewiaacscgyamai(self::imywcsggckkcywgk))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::eocyseaqimgiciso, __("\101\143\164\x69\x6f\x6e\40\x54\x65\x78\x74", PR__CMN__COVER), __("\x4c\145\x61\166\x65\40\145\155\x70\164\171\40\151\x66\40\x79\x6f\x75\x20\x77\141\156\164\x20\x73\x68\x6f\x77\40\x70\141\147\x65\40\164\x69\x74\x6c\x65\56", PR__CMN__COVER))->eyygsasuqmommkua(__("\x42\x61\x63\x6b\x20\124\157\x20\110\157\155\145\40\x50\141\x67\145", PR__CMN__COVER)))->mkksewyosgeumwsa(MetaBox::scgissgkcwaumgky(self::kcqakokswagkymgy)->usuqmwksoeaayaig(__("\x41\x63\164\x69\157\156\x20\111\143\x6f\156", PR__CMN__COVER)))->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy))->saemoowcasogykak(IconInterface::kmuciaqoiwuyagia)); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x63\x6f\166\x65\x72\137\163\x65\164\x74\x69\x6e\147\x5f\147\145\x6e\145\162\141\164\x65\137\x66\x6f\162\x6d"), $amakmumgguksgmum); mceucsaeouuwyumm: } public function kmuwyaoscooegyms($mgiqqesweuqmsymo, $oceoauekaygmuoko, $amakmumgguksgmum) { if (!$amakmumgguksgmum instanceof NewSetting) { goto ceiuqsiqgiuiekem; } $ucseauqiioaksuou = $this->guowcwummeykeqkm(); $wkuikksoimmikkek = DecoratorAttachment::aiiaeiaqiayooqyi(); $mgiqqesweuqmsymo[] = $amakmumgguksgmum::ycgeeoiieoiakgam(self::ioomakeyqiqowgmk)->gswweykyogmsyawy(__("\107\x65\x6e\x65\162\x61\154", PR__CMN__COVER))->jyumyyugiwwiqomk(1)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->mkksewyosgeumwsa($amakmumgguksgmum::mccagaqeagiikkec(self::migwcseqcocyqcge)->acauweqyyugwisqc($ucseauqiioaksuou[self::emgcgiseaoouacge])->gswweykyogmsyawy(__("\x49\x63\x6f\x6e\x20\x53\x65\x74", PR__CMN__COVER))->mkmssscwmeekwgqo()->gucwmccyimoagwcm(__("\x59\157\x75\40\x63\141\x6e\x20\x63\150\x61\156\x67\x65\x20\151\143\x6f\x6e\40\x73\x65\164\40\157\146\x20\x66\x72\157\156\164\145\156\144\40\142\171\40\x63\x68\141\156\x67\151\x6e\147\x20\164\150\151\x73\x20\157\160\x74\151\x6f\x6e", PR__CMN__COVER)))->mkksewyosgeumwsa($amakmumgguksgmum::wcwmusaouiqaqeww(self::mguiyugauoweycka)->gswweykyogmsyawy(__("\x44\151\163\x61\x62\x6c\145\x20\101\x64\x6d\151\x6e\40\102\141\162", PR__CMN__COVER)))->mkksewyosgeumwsa($amakmumgguksgmum::quaegkgkucwyeiqg(self::gqgseikcqgoiuqeg)->gswweykyogmsyawy(__("\x49\155\x61\147\145\40\120\154\x61\143\145\x68\x6f\154\x64\x65\162", PR__CMN__COVER))->gucwmccyimoagwcm(__("\104\145\x66\141\165\x6c\164\x20\151\x6d\x61\x67\x65\x20\146\157\x72\x20\141\x6c\154\40\x70\x6f\163\x74\40\164\x79\x70\145\x73\x2e", PR__CMN__COVER)))->mkksewyosgeumwsa($amakmumgguksgmum::ymuegqgyuagyucws(self::qqswqycisgaqiuse)->gswweykyogmsyawy(__("\x47\157\x6f\147\154\x65\x20\x41\x6e\141\x6c\171\164\151\x63\163", PR__CMN__COVER))->kyiucygqsgequoys("\x55\101\x2d\x23\43\43\x23\x23\x23\43\43\43\55\43")->mkmssscwmeekwgqo()->kqqqugemmqagucuq()); $mgiqqesweuqmsymo[] = $amakmumgguksgmum::ycgeeoiieoiakgam("\154\x69\x63\x65\156\163\x65")->gswweykyogmsyawy(__("\114\151\x63\x65\156\x73\145\163", PR__CMN__COVER))->jyumyyugiwwiqomk(1)->saemoowcasogykak(IconInterface::oawqokqscewgoogg)->mkksewyosgeumwsa($amakmumgguksgmum::qqmgmgasauucoago(self::mgieaomemyywoqwa)->gswweykyogmsyawy(__("\x49\164\x65\x6d\x73", PR__CMN__COVER))->omsoosuoikgueyke()->mkksewyosgeumwsa($amakmumgguksgmum::ymuegqgyuagyucws(self::qescuiwgsyuikume)->gswweykyogmsyawy(__("\124\x69\164\x6c\x65", PR__CMN__COVER))->mkmssscwmeekwgqo()->gucwmccyimoagwcm(__("\124\x69\x74\154\x65\40\157\x66\x20\x6c\x69\x63\145\156\x73\145\40\164\x6f\x20\x73\150\x6f\x77\40\x6f\x6e\40\x61\x64\x6d\151\156", PR__CMN__COVER)))->mkksewyosgeumwsa($amakmumgguksgmum::ymuegqgyuagyucws(self::ogigqueukwysusii)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\114\151\156\x6b", PR__CMN__COVER))->xkgcwkwsqysqamic())->mkksewyosgeumwsa($amakmumgguksgmum::quaegkgkucwyeiqg(self::mkousmkiawwousws)->gswweykyogmsyawy(__("\111\x6d\141\x67\145", PR__CMN__COVER))->gucwmccyimoagwcm(__("\x49\x66\x20\x79\x6f\165\40\x73\x65\x74\x20\141\40\x6d\141\162\x6b\165\x70\40\146\157\x72\x20\x74\x68\x69\163\x20\x6c\151\x63\145\156\x73\x65\54\40\164\x68\151\x73\40\x69\155\x61\x67\145\40\x72\145\160\154\x61\143\145\x20\167\x69\164\x68\40\x74\150\141\x74\x20\151\155\x61\147\x65\x2e", PR__CMN__COVER)))->mkksewyosgeumwsa($amakmumgguksgmum::mccagaqeagiikkec(self::qmeuakmyaucgeyeu)->gswweykyogmsyawy(__("\x49\x6d\x61\147\x65\40\x53\x69\x7a\145", PR__CMN__COVER))->mkmssscwmeekwgqo()->oeeumggeiyyckkom('', [self::qomookamaskuoswk, self::sogmkkcwuamuqegw])->acauweqyyugwisqc(array_combine($wkuikksoimmikkek, $wkuikksoimmikkek)))->mkksewyosgeumwsa($amakmumgguksgmum::ymuegqgyuagyucws(self::qomookamaskuoswk)->gswweykyogmsyawy(__("\x49\x6d\141\147\145\x20\127\151\x64\x74\150", PR__CMN__COVER))->escqqisecooswqgo()->mkmssscwmeekwgqo())->mkksewyosgeumwsa($amakmumgguksgmum::ymuegqgyuagyucws(self::sogmkkcwuamuqegw)->gswweykyogmsyawy(__("\x49\x6d\x61\147\145\40\110\x65\151\x67\150\164", PR__CMN__COVER))->escqqisecooswqgo()->mkmssscwmeekwgqo())->mkksewyosgeumwsa($amakmumgguksgmum::uouyygwcgsmygaee(self::kicoscymgmgqeqgy)->gswweykyogmsyawy(__("\x4d\141\162\153\x75\x70", PR__CMN__COVER))->qsecygiycssgacqs(3)->kqqqugemmqagucuq()->gucwmccyimoagwcm(__("\x49\146\x20\x79\x6f\x75\x20\x68\x61\x76\x65\x20\141\40\150\164\x6d\154\x20\x6d\x61\x72\153\165\x70\40\157\146\40\171\157\165\x72\40\x6c\x69\x63\145\x6e\163\145\x2c\40\160\x75\164\x20\150\x65\162\x65\40\164\157\x20\x73\150\157\167\40\151\164\x2e", PR__CMN__COVER)))); ceiuqsiqgiuiekem: return $mgiqqesweuqmsymo; } public function oemcisgucgkqscqy($cciauwuwuqaywgce) { if (!$cciauwuwuqaywgce instanceof Tab) { goto gsymkkskwsgggoic; } $ucseauqiioaksuou = $this->guowcwummeykeqkm(); $wkuikksoimmikkek = DecoratorAttachment::aiiaeiaqiayooqyi(); $cciauwuwuqaywgce->sikqggwmmykuiymy($cciauwuwuqaywgce::cgygmuguceeosoey(self::ioomakeyqiqowgmk, __("\107\145\x6e\x65\x72\141\x6c", PR__CMN__COVER))->mkksewyosgeumwsa($cciauwuwuqaywgce::auouusgocuwkgaok(self::migwcseqcocyqcge, $ucseauqiioaksuou[self::aeweusomuikewuis], $ucseauqiioaksuou[self::eoaiagsgqsmskugs])->usuqmwksoeaayaig(__("\x49\143\x6f\x6e\40\x53\x65\164", PR__CMN__COVER))->ccmwycqioaicegoc(__("\131\x6f\x75\x20\143\141\156\40\x63\150\141\x6e\147\x65\x20\151\x63\157\x6e\x20\x73\x65\164\x20\157\x66\40\x66\x72\157\x6e\164\145\x6e\x64\x20\142\171\40\143\x68\x61\x6e\147\x69\156\x67\40\x74\150\151\x73\40\157\160\x74\151\x6f\x6e", PR__CMN__COVER)))->mkksewyosgeumwsa($cciauwuwuqaywgce::wcwmusaouiqaqeww(self::mguiyugauoweycka, __("\x44\x69\163\141\x62\154\x65\x20\x41\x64\x6d\151\x6e\x20\x42\x61\162", PR__CMN__COVER)))->mkksewyosgeumwsa($cciauwuwuqaywgce::kimoeccokowuaiic(self::gqgseikcqgoiuqeg, __("\111\x6d\x61\147\145\x20\x50\154\141\x63\x65\150\157\154\144\145\x72", PR__CMN__COVER), __("\104\145\146\x61\165\154\x74\x20\151\155\x61\x67\145\x20\x66\x6f\x72\40\141\154\154\x20\160\157\x73\164\40\x74\171\160\x65\163\x2e", PR__CMN__COVER)))->mkksewyosgeumwsa($cciauwuwuqaywgce::ymuegqgyuagyucws(self::qqswqycisgaqiuse, __("\x47\x6f\157\x67\154\x65\x20\x41\156\x61\154\171\164\x69\143\163", PR__CMN__COVER))->yskkmqiusguummwa()->kyiucygqsgequoys("\125\x41\55\x23\43\43\x23\43\43\x23\43\x23\x2d\x23"))->jyumyyugiwwiqomk(1)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy))->sikqggwmmykuiymy($cciauwuwuqaywgce::cgygmuguceeosoey("\x6f\x70\x74\x69\155\151\172\141\x74\x69\157\x6e", __("\x4f\160\164\x69\x6d\x69\x7a\x61\x74\151\x6f\x6e", PR__CMN__COVER))->mkksewyosgeumwsa($cciauwuwuqaywgce::wcwmusaouiqaqeww(self::mgwkysuyugygacma, __("\104\151\163\x61\x62\x6c\x65\x20\114\141\x7a\171\40\x4c\157\141\x64", PR__CMN__COVER)))->mkksewyosgeumwsa($cciauwuwuqaywgce::wcwmusaouiqaqeww(self::qmwqkeocouqykuwc, __("\104\151\x73\141\142\x6c\x65\x20\x44\145\x6c\x61\x79\145\144\x20\x53\x63\x72\x69\160\x74\163", PR__CMN__COVER)))->mkksewyosgeumwsa($cciauwuwuqaywgce::wcwmusaouiqaqeww(self::mesmawyqgaugkmag, __("\x44\151\163\141\142\154\145\40\103\154\x65\x61\156\x75\160", PR__CMN__COVER)))->mkksewyosgeumwsa($cciauwuwuqaywgce::ckuwucygcwsiawms(self::gwucgosagousgoko, __("\105\170\x63\x6c\165\144\x65\x20\117\160\x74\x69\155\x69\x7a\141\x74\x69\157\156", PR__CMN__COVER))->ccmwycqioaicegoc(__("\103\150\157\x69\x63\x65\x20\x70\x6f\163\164\x73\x20\x66\x72\x6f\x6d\40\x70\x6f\x73\x74\x20\164\x79\x70\x65\40\x74\150\141\164\x20\171\157\x75\40\167\x61\x6e\x74\x20\x74\x6f\40\151\x67\156\157\x72\x65\40\x66\x72\x6f\x6d\40\x6f\160\x74\x69\155\x69\x7a\141\x74\151\157\x6e", PR__CMN__COVER))->smmismmuuccmscya()->icsmsougoccqosgc(ManipulatePost::mwoyqeeigwqoamiw(self::emgcgiseaoouacge))->oikgogcweiiaocka())->jyumyyugiwwiqomk(2)->saemoowcasogykak(IconInterface::geywskycossgwwia))->sikqggwmmykuiymy($cciauwuwuqaywgce::cgygmuguceeosoey("\x6c\x69\x63\x65\x6e\163\x65\163", __("\x4c\151\x63\x65\x6e\x73\x65\x73", PR__CMN__COVER))->mkksewyosgeumwsa($cciauwuwuqaywgce::iseogkiymousogom(self::mgieaomemyywoqwa, __("\111\164\145\x6d\x73", PR__CMN__COVER))->mkksewyosgeumwsa($cciauwuwuqaywgce::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\x54\151\x74\154\145", PR__CMN__COVER), __("\124\151\164\154\x65\x20\157\x66\x20\154\x69\143\145\156\x73\145\40\x74\x6f\40\163\x68\157\167\40\x6f\156\40\141\144\x6d\x69\x6e", PR__CMN__COVER)))->mkksewyosgeumwsa($cciauwuwuqaywgce::ymuegqgyuagyucws(self::ogigqueukwysusii, __("\114\151\156\x6b", PR__CMN__COVER))->xkgcwkwsqysqamic())->mkksewyosgeumwsa($cciauwuwuqaywgce::kimoeccokowuaiic(self::mkousmkiawwousws, __("\111\155\141\147\x65", PR__CMN__COVER), __("\111\x66\x20\171\x6f\x75\x20\x73\145\x74\x20\141\x20\155\141\162\x6b\x75\160\40\x66\157\x72\40\164\150\151\163\40\x6c\x69\x63\145\x6e\x73\x65\x2c\40\x74\x68\x69\x73\40\x69\x6d\x61\x67\x65\x20\162\145\x70\154\x61\x63\x65\40\167\x69\164\x68\x20\x74\x68\141\164\x20\151\x6d\x61\147\x65\56", PR__CMN__COVER)))->mkksewyosgeumwsa($cciauwuwuqaywgce::ckuwucygcwsiawms(self::qmeuakmyaucgeyeu, __("\111\155\x61\147\x65\40\x53\151\x7a\x65", PR__CMN__COVER))->oeeumggeiyyckkom('', [self::qomookamaskuoswk, self::sogmkkcwuamuqegw])->acauweqyyugwisqc(array_combine($wkuikksoimmikkek, $wkuikksoimmikkek)))->mkksewyosgeumwsa($cciauwuwuqaywgce::ymuegqgyuagyucws(self::qomookamaskuoswk, __("\111\x6d\141\x67\145\x20\127\151\x64\164\x68", PR__CMN__COVER))->escqqisecooswqgo())->mkksewyosgeumwsa($cciauwuwuqaywgce::ymuegqgyuagyucws(self::sogmkkcwuamuqegw, __("\x49\155\141\x67\145\x20\110\145\151\147\x68\x74", PR__CMN__COVER))->escqqisecooswqgo())->mkksewyosgeumwsa($cciauwuwuqaywgce::uouyygwcgsmygaee(self::kicoscymgmgqeqgy, __("\115\x61\162\153\165\160", PR__CMN__COVER), __("\111\146\x20\171\x6f\165\40\150\141\166\145\40\x61\x20\x68\164\x6d\x6c\40\155\x61\162\153\x75\160\40\157\146\x20\x79\157\x75\162\x20\154\x69\143\x65\x6e\x73\x65\54\x20\160\x75\x74\40\150\x65\x72\145\40\164\x6f\40\x73\150\157\x77\40\151\x74\56", PR__CMN__COVER))->qsecygiycssgacqs(3)->wcgckeeiiseccqkc())->mkksewyosgeumwsa($cciauwuwuqaywgce::cwiuiiakukcsaakw(self::ascagqcquwgmygkm))->wygoskowywcuyaiq())->saemoowcasogykak(IconInterface::oawqokqscewgoogg)); gsymkkskwsgggoic: return $cciauwuwuqaywgce; } public function guowcwummeykeqkm() : array { $qiouiwasaauyaaue = $iwkyyocymeukcceu = []; $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $ucseauqiioaksuou = ["\144\145\x66\x61\165\154\164" => __("\x4c\151\x67\150\164", PR__CMN__FOUNDATION), "\x64\165\157\164\x6f\x6e\145" => __("\104\165\x6f\164\x6f\x6e\145", PR__CMN__FOUNDATION), "\162\x65\x67\x75\x6c\141\x72" => __("\x52\145\x67\165\x6c\x61\x72", PR__CMN__FOUNDATION), "\163\157\154\151\144" => __("\x53\x6f\x6c\151\x64", PR__CMN__FOUNDATION), "\164\150\x69\x6e" => __("\124\150\x69\x6e", PR__CMN__FOUNDATION)]; $wkaqekwwgqsqwcoi = IconInterface::cmyakossqyoysoys; foreach ($ucseauqiioaksuou as $cekceegqqaoiisei => $pkyyagewkiyckmwy) { $qiouiwasaauyaaue[$cekceegqqaoiisei] = $eygsasmqycagyayw->eyamqkqiykagecsw($wkaqekwwgqsqwcoi, [self::uociqugwegocyuue => $cekceegqqaoiisei]); $iwkyyocymeukcceu[$cekceegqqaoiisei] = $pkyyagewkiyckmwy; isewysikysqewkis: } ugykmcouiwiscoqu: return [self::emgcgiseaoouacge => $ucseauqiioaksuou, self::aeweusomuikewuis => $qiouiwasaauyaaue, self::eoaiagsgqsmskugs => $iwkyyocymeukcceu]; } public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; if (!($owgumcsyqsamiemg = self::symcgieuakksimmu())) { goto igmmqwyawcuuckkq; } $eqgoocgaqwqcimie = $owgumcsyqsamiemg->sscegwueamckwmcy("\147\145\164\137{$owgumcsyqsamiemg->wuiuecuwkuswaioe()}\137\x73\x65\x74\164\x69\x6e\x67", $uusmaiomayssaecw, $ggauoeuaesiymgee, []); if (!($eqgoocgaqwqcimie === $uusmaiomayssaecw)) { goto wiwoiyoakywqyaiy; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; wiwoiyoakywqyaiy: igmmqwyawcuuckkq: return $eqgoocgaqwqcimie; } public static function siggceeeowgkoaam(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::wkweqssoakmmmguq => [self::qescuiwgsyuikume, self::ascagqcquwgmygkm], self::aisguagukaewucii => self::ckmqoekmugkggeym, self::qwumqqyuasyskkkc => self::eiwcuqigayigimak(self::mgieaomemyywoqwa, [])]); $rsywwkgoeeiscsik = BaseSetting::qkckuwowccaqygke(self::mgieaomemyywoqwa, $ywmkwiwkosakssii); if (!($rsywwkgoeeiscsik && is_array($rsywwkgoeeiscsik))) { goto eweaaismksecwagy; } if (!(self::ckmqoekmugkggeym === $ywmkwiwkosakssii[self::aisguagukaewucii])) { goto mcqucouuiuoagqwc; } foreach ($rsywwkgoeeiscsik as $momcykaoccoymeig => $caicqiiuwsyaeeko) { $mcqieaigyeeyaksm = ManipulateArray::get($caicqiiuwsyaeeko, self::mkousmkiawwousws . self::mswocgcucqoaesaa); if (!($gskuwmeemyeuwogc = ManipulateArray::get($caicqiiuwsyaeeko, self::kicoscymgmgqeqgy))) { goto syusgosewwkoagoq; } if (!($mcqieaigyeeyaksm && DOMCrawler::umuecysoywoumgwo($gskuwmeemyeuwogc, "\151\x6d\147"))) { goto egesuwkqkmaigaoe; } $wwgucssaecqekuek = []; if ($weaakkwoqiawsiua = ManipulateArray::get($caicqiiuwsyaeeko, self::qmeuakmyaucgeyeu)) { goto ykqsuiyyosyeyscc; } $wwgucssaecqekuek = ["\x73\x72\x63" => ManipulateAttachment::iaykyouimqoikagg($mcqieaigyeeyaksm), self::qomookamaskuoswk => ManipulateArray::get($caicqiiuwsyaeeko, self::qomookamaskuoswk, 80), self::sogmkkcwuamuqegw => ManipulateArray::get($caicqiiuwsyaeeko, self::sogmkkcwuamuqegw, 80)]; goto ugogoekeckgcmuaw; ykqsuiyyosyeyscc: if (!($mcqieaigyeeyaksm = ManipulateAttachment::qaeeusqkgwagwaqc($mcqieaigyeeyaksm, $weaakkwoqiawsiua))) { goto uscokkmquayiukag; } $wcosyisywqggyuie = DOMCrawler::ccekeuwwqqoiwuwy($mcqieaigyeeyaksm, "\x69\x6d\x67"); $wwgucssaecqekuek = ["\x73\x72\x63" => ManipulateArray::get($wcosyisywqggyuie, "\x73\162\x63"), self::qomookamaskuoswk => ManipulateArray::get($wcosyisywqggyuie, self::qomookamaskuoswk, 80), self::sogmkkcwuamuqegw => ManipulateArray::get($wcosyisywqggyuie, self::sogmkkcwuamuqegw, 80)]; uscokkmquayiukag: ugogoekeckgcmuaw: $rsywwkgoeeiscsik[$momcykaoccoymeig][self::kicoscymgmgqeqgy] = DOMCrawler::qcgocuceocquqcuw($gskuwmeemyeuwogc, ["\x69\155\x67" => $wwgucssaecqekuek]); egesuwkqkmaigaoe: syusgosewwkoagoq: sqwuqegeiisoiiuq: } eouwacqiommmeaqc: mcqucouuiuoagqwc: eweaaismksecwagy: return $rsywwkgoeeiscsik; } public function iasywwkguyauiywu($eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = BaseSetting::wcoqgwyekgsmiueo($eqgoocgaqwqcimie, self::mgieaomemyywoqwa); return $eqgoocgaqwqcimie; } }
