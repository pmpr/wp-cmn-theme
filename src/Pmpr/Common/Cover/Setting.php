<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63fe352cd71f1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover; use Pmpr\Common\Foundation\Decorator\DecoratorTheme; use Pmpr\Common\Foundation\Decorator\Post\DecoratorAttachment; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Tab; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Setting as BaseSetting; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting as NewSetting; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Setting extends Container { const migwcseqcocyqcge = "\151\143\157\x6e\137\x73\x65\x74"; const qqswqycisgaqiuse = "\147\x6f\157\x67\154\x65\137\x61\x6e\x61\154\171\x74\151\143\163"; const gqgseikcqgoiuqeg = "\x69\x6d\141\147\145\x5f\x70\x6c\x61\x63\145\150\x6f\x6c\144\145\162"; const mguiyugauoweycka = "\x64\151\163\x61\142\154\145\137\x66\162\x6f\156\x74\145\156\144\x5f\141\144\155\x69\x6e\x5f\142\141\x72"; const qmwqkeocouqykuwc = "\144\151\163\x61\142\x6c\145\137\144\x65\154\141\x79"; const mesmawyqgaugkmag = "\144\151\x73\141\x62\154\145\137\143\154\145\x61\156\165\160"; const mgwkysuyugygacma = "\x64\151\x73\x61\142\154\x65\137\x6c\141\x7a\x79\154\157\141\x64"; const gwucgosagousgoko = "\x65\170\x63\154\165\144\x65\137\146\x72\x6f\x6d\137\x6f\x70\164\x69\x6d\x69\x7a\x61\x74\x69\157\x6e"; const mgieaomemyywoqwa = "\x6c\151\x63\x65\x6e\163\x65\163"; const waywmkogcywugikw = "\x6e\x6f\x74\x5f\x66\x6f\165\156\144\137"; const jsemecycggiyookc = self::waywmkogcywugikw . self::TEXT; const csociausugiaiiku = self::waywmkogcywugikw . self::mkousmkiawwousws; const gmssuqwcwmucmymk = self::waywmkogcywugikw . self::qescuiwgsyuikume; const suauoeqsmyyyoiqc = self::waywmkogcywugikw . self::uqgcmmosieyimiku . self::imywcsggckkcywgk; const eocyseaqimgiciso = self::waywmkogcywugikw . self::uqgcmmosieyimiku . self::TEXT; const kcqakokswagkymgy = self::waywmkogcywugikw . self::uqgcmmosieyimiku . self::qgqyauaqwqmqseim; const akgosquwywqyooum = self::waywmkogcywugikw . self::wuasowoqaccigqqu . self::yayciqueeakqwese; const mesmkcqcgusoieck = "\x74\141\x78\157\156\157\155\171\x5f"; const acsigocoaacakgqs = "\x70\157\163\164\x5f\164\x79\x70\x65\x5f"; const wsqycwuumsssqqcq = self::acsigocoaacakgqs . self::mesmkcqcgusoieck; const ygiuusywiucccwqk = self::wsqycwuumsssqqcq . "\x74\x69\x74\x6c\x65\x5f"; const wusmaqmagugmywwe = self::wsqycwuumsssqqcq . "\x64\x65\163\143\x72\151\x70\x74\151\x6f\x6e\137"; const gasuscmquiokwcak = self::wsqycwuumsssqqcq . "\144\151\x73\x70\154\141\x79\x5f\x64\x65\163\143\162\151\160\164\x69\157\x6e\137"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\151\164", [$this, "\151\156\151\164"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x69\x6d\x61\147\145\137\x70\x6c\x61\143\145\150\x6f\x6c\144\x65\x72\x5f\151\144"), [$this, "\163\145\161\165\157\x69\163\151\x63\141\x6b\x6d\141\147\155\167"], 10, 0)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\151\x6d\141\x67\x65\x5f\160\x6c\141\143\x65\150\x6f\154\x64\x65\x72\137\x75\162\x6c"), [$this, "\x73\161\157\147\x69\153\x73\x6f\155\x67\141\157\x65\x67\143\x79"], 10, 0); } public function wuiuecuwkuswaioe() : ?string { $ymqmyyeuycgmigyo = null; $wksoawcgagcgoask = self::eeqqugcowsqysask(DecoratorTheme::ogciwyoqgciosgcw()->get_template()); if (!$wksoawcgagcgoask) { goto mosqsmqimqgqoase; } $ymqmyyeuycgmigyo = $wksoawcgagcgoask->aakmagwggmkoiiyu(); mosqsmqimqgqoase: return $ymqmyyeuycgmigyo; } public function youaqkimaoecgsye() : ?string { return $this->wuiuecuwkuswaioe() . "\137\x73\145\164\x74\x69\156\x67\163"; } public function init() { $uusmaiomayssaecw = $this->youaqkimaoecgsye(); $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("{$uusmaiomayssaecw}\137\x61\146\x74\x65\x72\x5f\147\x65\156\145\x72\x61\164\145\x5f\146\x6f\x72\155"), [$this, "\x71\x63\x79\x77\171\165\167\x6d\147\x73\141\x69\163\147\x6f\145"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\141\146\164\x65\x72\x5f\x67\x65\x6e\145\162\x61\164\145\x5f{$uusmaiomayssaecw}\x5f\x70\141\156\x65\x6c"), [$this, "\167\143\141\x61\x67\145\x61\x65\x71\165\151\x63\x61\x77\161\x63"]); $this->cecaguuoecmccuse("\142\x65\146\157\x72\145\137\165\x70\144\141\164\x65\137{$uusmaiomayssaecw}", [$this, "\151\141\163\171\x77\x77\153\147\165\x79\141\165\x69\x79\167\x75"])->cecaguuoecmccuse($uusmaiomayssaecw . self::iusoecsswgekecks . "\x5f\164\x61\142", [$this, "\157\x65\x6d\143\151\163\x67\x75\143\x67\x6b\161\163\x63\x71\171"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$uusmaiomayssaecw}\137\163\x65\147\155\145\156\164\137\x67\145\x6e\x65\x72\x61\154\x5f\x73\x65\143\x74\151\x6f\156\163"), [$this, "\153\x6d\165\167\x79\141\157\163\x63\x6f\157\x65\x67\171\155\x73"], 10, 3); } public function wcaageaequicawqc($amakmumgguksgmum) { if (!$amakmumgguksgmum instanceof NewSetting) { goto ssoucoucsgccekwe; } $mgiqqesweuqmsymo = []; $sciomagaqmgggsiu = ManipulatePost::mwoyqeeigwqoamiw([self::aisguagukaewucii => self::ckmqoekmugkggeym]); $micugwgqicqmeoqq = []; foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { if (!ManipulatePost::ykmyesgqoqaamaqu($useksmwkuswkwcqg)) { goto kqksuugcgsyeoayy; } $ymqmyyeuycgmigyo = ManipulatePost::yyqgaciccoiwuwyq($useksmwkuswkwcqg); $meqocwsecsywiiqs = ManipulatePost::gaeyeooascowgiac($useksmwkuswkwcqg); $micugwgqicqmeoqq[] = $amakmumgguksgmum::doeuiogekyiwgsgw($ymqmyyeuycgmigyo)->gswweykyogmsyawy(sprintf(__("\x25\163\40\x43\157\156\146\151\x67", PR__CMN__COVER), $meqocwsecsywiiqs))->mkksewyosgeumwsa($amakmumgguksgmum::ymuegqgyuagyucws(self::ygiuusywiucccwqk . $ymqmyyeuycgmigyo)->gswweykyogmsyawy(sprintf(__("\45\x73\40\141\162\143\150\151\x76\x65\x20\164\151\x74\x6c\x65", PR__CMN__COVER), $meqocwsecsywiiqs))->mkmssscwmeekwgqo())->mkksewyosgeumwsa($amakmumgguksgmum::wcwmusaouiqaqeww(self::gasuscmquiokwcak . $ymqmyyeuycgmigyo)->gswweykyogmsyawy(__("\104\x69\x73\160\154\x61\x79\x20\x44\145\x73\143\x72\x69\x70\x74\x69\x6f\156", PR__CMN__COVER))->agywyaaquwawwuiy(self::wusmaqmagugmywwe . $ymqmyyeuycgmigyo))->mkksewyosgeumwsa($amakmumgguksgmum::sciaycsmsiekqueg(self::wusmaqmagugmywwe . $ymqmyyeuycgmigyo)->gswweykyogmsyawy(sprintf(__("\x25\x73\x20\x61\x72\x63\150\x69\166\145\40\x64\145\x73\x63\x72\x69\x70\164\151\x6f\x6e", PR__CMN__COVER), $meqocwsecsywiiqs))->qsecygiycssgacqs(5)->gsomueooycksswcy()); kqksuugcgsyeoayy: ygcsmkuycoagwyou: } omugkkesagcyagmk: if (!$micugwgqicqmeoqq) { goto iggyqogweyosuikc; } $mgiqqesweuqmsymo[] = $amakmumgguksgmum::ycgeeoiieoiakgam(self::uouymeyqasaeckso)->gswweykyogmsyawy(__("\x50\157\x73\x74\40\124\171\160\x65", PR__CMN__COVER))->ciwuiwsyckiiogwo($micugwgqicqmeoqq)->saemoowcasogykak(IconInterface::qgmawmcoyqqkcosk); iggyqogweyosuikc: if (!$mgiqqesweuqmsymo) { goto qqewoyookaskiuek; } $amakmumgguksgmum->ogimmkwaymekmoky($amakmumgguksgmum::mkcwgaeaaweamyyg("\x70\x6f\x73\164\137\164\171\x70\x65\x5f\x74\141\170\157\x6e\x6f\155\x79")->gswweykyogmsyawy(__("\120\157\x73\x74\x20\124\x79\160\x65\x20\46\40\124\x61\x78\x6f\x6e\x6f\155\x79", PR__CMN__COVER))->gucwmccyimoagwcm(__("\101\x72\143\150\151\166\145\x20\x43\x6f\156\146\151\x67\x75\162\x61\x74\151\157\x6e\163", PR__CMN__COVER))->saemoowcasogykak(IconInterface::oiogyiqiyikmsmcm)->mgisqyswkkuceisu($mgiqqesweuqmsymo)); qqewoyookaskiuek: $amakmumgguksgmum->ogimmkwaymekmoky($amakmumgguksgmum::mkcwgaeaaweamyyg("\64\60\64\x5f\x70\x61\147\x65")->gswweykyogmsyawy(__("\x34\x30\x34\40\x50\x61\147\145", PR__CMN__COVER))->gucwmccyimoagwcm(__("\x4c\141\171\x6f\x75\x74\x20\46\x20\x43\x6f\156\x66\x69\x67\165\x72\x61\x74\151\x6f\156", PR__CMN__COVER))->kwkugmqouisgkqig($amakmumgguksgmum::ycgeeoiieoiakgam(self::ioomakeyqiqowgmk)->gswweykyogmsyawy(__("\107\145\x6e\x65\162\x61\x6c", PR__CMN__COVER))->mkksewyosgeumwsa($amakmumgguksgmum::quaegkgkucwyeiqg(self::csociausugiaiiku)->gswweykyogmsyawy(__("\x49\x6d\x61\x67\x65", PR__CMN__COVER))->ycueqsmmommygueu())->mkksewyosgeumwsa($amakmumgguksgmum::ymuegqgyuagyucws(self::gmssuqwcwmucmymk)->gswweykyogmsyawy(__("\124\151\x74\154\145", PR__CMN__COVER))->mkmssscwmeekwgqo()->eyygsasuqmommkua(__("\120\x61\147\145\x20\x4e\x6f\x74\40\x46\157\x75\x6e\144", PR__CMN__COVER)))->mkksewyosgeumwsa($amakmumgguksgmum::uouyygwcgsmygaee(self::jsemecycggiyookc)->gswweykyogmsyawy(__("\x54\145\170\x74", PR__CMN__COVER))->qsecygiycssgacqs(3)->eyygsasuqmommkua(__("\x54\x68\x65\40\x6c\151\156\x6b\x20\x79\157\165\40\143\x6c\151\143\153\x65\144\x20\155\x61\171\40\142\145\40\x62\x72\157\x6b\145\x6e\40\x6f\162\40\x74\150\145\40\x70\141\x67\x65\x20\x6d\x61\171\x20\x68\141\166\145\40\142\x65\x65\x6e\x20\x72\x65\155\157\166\x65\144\56", PR__CMN__COVER)))->mkksewyosgeumwsa($amakmumgguksgmum::wcwmusaouiqaqeww(self::akgosquwywqyooum)->gswweykyogmsyawy(__("\104\x69\x73\141\142\154\x65\x20\x53\145\x61\162\143\x68\x20\102\157\170", PR__CMN__COVER)))->mkksewyosgeumwsa($amakmumgguksgmum::mccagaqeagiikkec(self::suauoeqsmyyyoiqc)->gswweykyogmsyawy(__("\101\x63\x74\151\x6f\156\x20\x55\122\114", PR__CMN__COVER))->ukqywcsoogkyoaoa(self::imywcsggckkcywgk)->mkmssscwmeekwgqo())->mkksewyosgeumwsa($amakmumgguksgmum::ymuegqgyuagyucws(self::eocyseaqimgiciso)->gswweykyogmsyawy(__("\101\143\x74\151\157\x6e\40\124\145\170\x74", PR__CMN__COVER))->mkmssscwmeekwgqo()->gucwmccyimoagwcm(__("\114\x65\x61\x76\x65\x20\145\155\x70\x74\171\40\x69\146\40\171\x6f\x75\40\x77\141\156\x74\x20\x73\x68\157\x77\40\x70\x61\147\x65\x20\164\151\x74\154\x65\x2e", PR__CMN__COVER))->eyygsasuqmommkua(__("\102\x61\x63\153\x20\x54\x6f\40\110\157\x6d\x65\40\120\x61\147\x65", PR__CMN__COVER)))->mkksewyosgeumwsa($amakmumgguksgmum::mccagaqeagiikkec(self::kcqakokswagkymgy)->gswweykyogmsyawy(__("\101\143\164\x69\157\x6e\40\111\143\x6f\x6e", PR__CMN__COVER))->mmwqwkuqkqccuqye()->mkmssscwmeekwgqo())->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy))->saemoowcasogykak(IconInterface::kmuciaqoiwuyagia)); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x63\x6f\x76\145\x72\x5f\x73\x65\164\164\151\156\x67\137\x67\x65\156\x65\162\x61\164\145\137\146\157\x72\155"), $amakmumgguksgmum); ssoucoucsgccekwe: } public function qcywyuwmgsaisgoe($amakmumgguksgmum) { if (!$amakmumgguksgmum instanceof BaseSetting) { goto acaqummmoyiemqss; } $uaqusiikkokccqou = []; $sciomagaqmgggsiu = ManipulatePost::mwoyqeeigwqoamiw([self::aisguagukaewucii => self::ckmqoekmugkggeym]); $micugwgqicqmeoqq = []; foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { $ymqmyyeuycgmigyo = ''; $meqocwsecsywiiqs = ''; $yuwymayicwwqiske = ''; if (!ManipulatePost::ykmyesgqoqaamaqu($useksmwkuswkwcqg)) { goto eegqyykygiccaoeo; } $ymqmyyeuycgmigyo = ManipulatePost::yyqgaciccoiwuwyq($useksmwkuswkwcqg); $meqocwsecsywiiqs = ManipulatePost::gaeyeooascowgiac($useksmwkuswkwcqg); $yuwymayicwwqiske = self::acsigocoaacakgqs; eegqyykygiccaoeo: if (!($ymqmyyeuycgmigyo && $meqocwsecsywiiqs)) { goto ywqgcegomwaiuquc; } $micugwgqicqmeoqq[] = $amakmumgguksgmum::sgsmqaoowiyocqaa($yuwymayicwwqiske . $ymqmyyeuycgmigyo, sprintf(__("\x25\x73\40\103\157\156\x66\x69\147", PR__CMN__COVER), $meqocwsecsywiiqs))->mkksewyosgeumwsa($amakmumgguksgmum::ymuegqgyuagyucws(self::ygiuusywiucccwqk . $ymqmyyeuycgmigyo, __("\124\x69\164\x6c\x65", PR__CMN__COVER)))->mkksewyosgeumwsa($amakmumgguksgmum::wcwmusaouiqaqeww(self::gasuscmquiokwcak . $ymqmyyeuycgmigyo, __("\x44\x69\x73\160\154\141\171\40\104\x65\x73\x63\x72\151\x70\x74\x69\x6f\x6e", PR__CMN__COVER)))->mkksewyosgeumwsa($amakmumgguksgmum::sciaycsmsiekqueg(self::wusmaqmagugmywwe . $ymqmyyeuycgmigyo, __("\x44\x65\x73\x63\162\151\160\x74\151\x6f\x6e", PR__CMN__COVER))->qsecygiycssgacqs(5)->gsomueooycksswcy()); ywqgcegomwaiuquc: miyqyeiwquwsacsm: } qkcyqocqqwmqgqww: if (!$micugwgqicqmeoqq) { goto wmmggowmigekyoso; } $uaqusiikkokccqou[] = $amakmumgguksgmum::cgygmuguceeosoey("\x70\157\x73\x74\x5f\x74\x79\160\145\x5f\155\x65\x74\x61\142\157\x78", __("\x50\x6f\163\x74\40\124\x79\160\x65", PR__CMN__COVER))->ciwuiwsyckiiogwo($micugwgqicqmeoqq)->saemoowcasogykak(IconInterface::qgmawmcoyqqkcosk); wmmggowmigekyoso: if (!$uaqusiikkokccqou) { goto soqqemyioggmoakg; } $amakmumgguksgmum->aucimgwswmgaocae(MetaBox::sgsmqaoowiyocqaa("\160\x6f\163\164\137\164\171\160\145\x5f\x74\x61\x78\157\x6e\157\155\171", __("\120\x6f\x73\x74\40\124\x79\160\x65\40\x26\40\x54\141\x78\x6f\x6e\x6f\x6d\x79", PR__CMN__COVER))->mugcceiwosyciwos($uaqusiikkokccqou)->saemoowcasogykak(IconInterface::oiogyiqiyikmsmcm)); soqqemyioggmoakg: $amakmumgguksgmum->aucimgwswmgaocae(MetaBox::sgsmqaoowiyocqaa("\64\60\64\137\x70\141\x67\x65", __("\x34\60\64\40\120\141\x67\x65", PR__CMN__COVER))->sikqggwmmykuiymy(MetaBox::cgygmuguceeosoey("\x70\x61\147\145\137\64\60\64" . self::iusoecsswgekecks, __("\107\145\156\x65\x72\141\x6c", PR__CMN__COVER))->mkksewyosgeumwsa(MetaBox::kimoeccokowuaiic(self::csociausugiaiiku, __("\x49\155\x61\147\x65", PR__CMN__COVER))->esauscaiuyiikmgc())->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::gmssuqwcwmucmymk, __("\124\151\164\154\145", PR__CMN__COVER))->eyygsasuqmommkua(__("\120\x61\x67\x65\40\x4e\157\x74\x20\106\x6f\165\x6e\144", PR__CMN__COVER)))->mkksewyosgeumwsa(MetaBox::uouyygwcgsmygaee(self::jsemecycggiyookc, __("\124\x65\x78\x74", PR__CMN__COVER))->qsecygiycssgacqs(3)->eyygsasuqmommkua(__("\x54\150\145\x20\154\x69\x6e\x6b\40\x79\x6f\x75\40\143\154\151\x63\153\x65\x64\40\155\141\171\40\142\x65\x20\142\x72\157\153\x65\x6e\x20\157\x72\x20\164\x68\145\40\x70\141\x67\145\x20\155\141\x79\40\x68\141\x76\x65\40\142\x65\145\156\x20\x72\145\155\x6f\166\x65\x64\x2e", PR__CMN__COVER)))->mkksewyosgeumwsa(MetaBox::wcwmusaouiqaqeww(self::akgosquwywqyooum, __("\x44\151\163\141\x62\154\145\40\123\145\x61\162\143\150\40\102\157\170", PR__CMN__COVER)))->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::suauoeqsmyyyoiqc, __("\101\x63\164\151\157\x6e\x20\125\x52\x4c", PR__CMN__COVER))->smmismmuuccmscya()->oeewiaacscgyamai(self::imywcsggckkcywgk))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::eocyseaqimgiciso, __("\x41\x63\x74\x69\x6f\156\40\124\145\x78\164", PR__CMN__COVER), __("\x4c\145\141\166\x65\40\145\155\x70\164\x79\x20\x69\146\40\171\157\x75\x20\x77\x61\x6e\164\40\163\x68\157\x77\40\160\141\x67\145\40\x74\151\164\x6c\x65\x2e", PR__CMN__COVER))->eyygsasuqmommkua(__("\x42\141\x63\x6b\x20\x54\157\40\110\x6f\155\x65\x20\x50\141\147\145", PR__CMN__COVER)))->mkksewyosgeumwsa(MetaBox::scgissgkcwaumgky(self::kcqakokswagkymgy)->usuqmwksoeaayaig(__("\101\x63\x74\x69\157\x6e\x20\111\143\x6f\x6e", PR__CMN__COVER)))->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy))->saemoowcasogykak(IconInterface::kmuciaqoiwuyagia)); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\143\x6f\x76\x65\162\137\163\145\164\x74\x69\156\x67\x5f\147\x65\156\x65\x72\x61\164\145\137\146\x6f\162\x6d"), $amakmumgguksgmum); acaqummmoyiemqss: } public function kmuwyaoscooegyms($mgiqqesweuqmsymo, $oceoauekaygmuoko, $amakmumgguksgmum) { if (!$amakmumgguksgmum instanceof NewSetting) { goto suswcqoyyqkkquuo; } $ucseauqiioaksuou = $this->guowcwummeykeqkm(); $wkuikksoimmikkek = DecoratorAttachment::aiiaeiaqiayooqyi(); $mgiqqesweuqmsymo[] = $amakmumgguksgmum::ycgeeoiieoiakgam(self::ioomakeyqiqowgmk)->gswweykyogmsyawy(__("\107\x65\x6e\145\x72\141\154", PR__CMN__COVER))->jyumyyugiwwiqomk(1)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->mkksewyosgeumwsa($amakmumgguksgmum::mccagaqeagiikkec(self::migwcseqcocyqcge)->acauweqyyugwisqc($ucseauqiioaksuou[self::emgcgiseaoouacge])->gswweykyogmsyawy(__("\111\143\x6f\156\x20\x53\145\x74", PR__CMN__COVER))->mkmssscwmeekwgqo()->gucwmccyimoagwcm(__("\131\157\x75\40\143\141\x6e\40\x63\x68\141\x6e\147\145\x20\151\143\157\x6e\40\x73\145\x74\40\x6f\x66\x20\x66\x72\157\x6e\x74\145\x6e\x64\x20\x62\x79\40\143\x68\141\x6e\147\151\156\147\x20\164\x68\x69\x73\x20\x6f\160\164\151\157\156", PR__CMN__COVER)))->mkksewyosgeumwsa($amakmumgguksgmum::wcwmusaouiqaqeww(self::mguiyugauoweycka)->gswweykyogmsyawy(__("\x44\x69\163\141\142\x6c\145\x20\x41\144\x6d\x69\x6e\x20\x42\x61\162", PR__CMN__COVER)))->mkksewyosgeumwsa($amakmumgguksgmum::quaegkgkucwyeiqg(self::gqgseikcqgoiuqeg)->gswweykyogmsyawy(__("\x49\x6d\141\147\145\40\120\x6c\x61\143\145\150\157\x6c\x64\145\x72", PR__CMN__COVER))->gucwmccyimoagwcm(__("\104\145\146\141\x75\x6c\164\40\x69\155\141\x67\x65\x20\146\x6f\x72\40\141\x6c\154\x20\x70\157\x73\164\x20\164\171\x70\145\x73\56", PR__CMN__COVER)))->mkksewyosgeumwsa($amakmumgguksgmum::ymuegqgyuagyucws(self::qqswqycisgaqiuse)->gswweykyogmsyawy(__("\x47\x6f\157\147\x6c\x65\x20\x41\156\x61\x6c\171\164\x69\x63\x73", PR__CMN__COVER))->kyiucygqsgequoys("\125\x41\x2d\43\x23\x23\43\43\43\43\x23\43\x2d\43")->mkmssscwmeekwgqo()->kqqqugemmqagucuq()); $mgiqqesweuqmsymo[] = $amakmumgguksgmum::ycgeeoiieoiakgam("\154\151\143\145\x6e\x73\x65")->gswweykyogmsyawy(__("\x4c\151\x63\x65\156\x73\x65\x73", PR__CMN__COVER))->jyumyyugiwwiqomk(1)->saemoowcasogykak(IconInterface::oawqokqscewgoogg)->mkksewyosgeumwsa($amakmumgguksgmum::qqmgmgasauucoago(self::mgieaomemyywoqwa)->gswweykyogmsyawy(__("\111\164\x65\155\x73", PR__CMN__COVER))->omsoosuoikgueyke()->mkksewyosgeumwsa($amakmumgguksgmum::ymuegqgyuagyucws(self::qescuiwgsyuikume)->gswweykyogmsyawy(__("\x54\151\x74\x6c\x65", PR__CMN__COVER))->mkmssscwmeekwgqo()->gucwmccyimoagwcm(__("\124\x69\x74\x6c\145\40\157\146\40\x6c\151\x63\x65\156\x73\x65\40\x74\157\40\x73\150\x6f\167\40\x6f\x6e\40\141\x64\155\x69\156", PR__CMN__COVER)))->mkksewyosgeumwsa($amakmumgguksgmum::ymuegqgyuagyucws(self::ogigqueukwysusii)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\114\x69\156\x6b", PR__CMN__COVER))->xkgcwkwsqysqamic())->mkksewyosgeumwsa($amakmumgguksgmum::quaegkgkucwyeiqg(self::mkousmkiawwousws)->gswweykyogmsyawy(__("\111\155\141\147\145", PR__CMN__COVER))->gucwmccyimoagwcm(__("\x49\146\40\171\157\165\x20\x73\x65\164\40\141\x20\155\x61\x72\x6b\x75\x70\x20\146\x6f\162\x20\x74\150\151\x73\40\154\151\x63\145\x6e\163\x65\x2c\x20\x74\x68\151\163\x20\x69\x6d\x61\x67\x65\x20\x72\x65\160\154\141\x63\x65\40\x77\x69\164\150\x20\x74\150\x61\164\x20\151\155\x61\147\x65\56", PR__CMN__COVER)))->mkksewyosgeumwsa($amakmumgguksgmum::mccagaqeagiikkec(self::qmeuakmyaucgeyeu)->gswweykyogmsyawy(__("\111\155\x61\147\145\40\x53\x69\x7a\x65", PR__CMN__COVER))->mkmssscwmeekwgqo()->oeeumggeiyyckkom('', [self::qomookamaskuoswk, self::sogmkkcwuamuqegw])->acauweqyyugwisqc(array_combine($wkuikksoimmikkek, $wkuikksoimmikkek)))->mkksewyosgeumwsa($amakmumgguksgmum::ymuegqgyuagyucws(self::qomookamaskuoswk)->gswweykyogmsyawy(__("\111\x6d\141\147\145\40\127\x69\144\164\150", PR__CMN__COVER))->escqqisecooswqgo()->mkmssscwmeekwgqo())->mkksewyosgeumwsa($amakmumgguksgmum::ymuegqgyuagyucws(self::sogmkkcwuamuqegw)->gswweykyogmsyawy(__("\x49\x6d\141\147\x65\40\x48\x65\151\147\150\x74", PR__CMN__COVER))->escqqisecooswqgo()->mkmssscwmeekwgqo())->mkksewyosgeumwsa($amakmumgguksgmum::uouyygwcgsmygaee(self::kicoscymgmgqeqgy)->gswweykyogmsyawy(__("\115\x61\x72\153\x75\x70", PR__CMN__COVER))->qsecygiycssgacqs(3)->kqqqugemmqagucuq()->gucwmccyimoagwcm(__("\111\x66\40\171\x6f\x75\40\x68\x61\x76\145\x20\141\40\x68\164\155\x6c\x20\155\x61\162\x6b\165\160\x20\157\146\x20\171\x6f\165\162\40\154\151\x63\145\x6e\x73\x65\x2c\x20\160\x75\164\x20\150\145\162\145\40\164\157\x20\x73\150\x6f\167\40\151\x74\56", PR__CMN__COVER)))); suswcqoyyqkkquuo: return $mgiqqesweuqmsymo; } public function oemcisgucgkqscqy($cciauwuwuqaywgce) { if (!$cciauwuwuqaywgce instanceof Tab) { goto eeqesooyqagwawae; } $ucseauqiioaksuou = $this->guowcwummeykeqkm(); $wkuikksoimmikkek = DecoratorAttachment::aiiaeiaqiayooqyi(); $cciauwuwuqaywgce->sikqggwmmykuiymy($cciauwuwuqaywgce::cgygmuguceeosoey(self::ioomakeyqiqowgmk, __("\x47\x65\x6e\145\x72\141\x6c", PR__CMN__COVER))->mkksewyosgeumwsa($cciauwuwuqaywgce::auouusgocuwkgaok(self::migwcseqcocyqcge, $ucseauqiioaksuou[self::aeweusomuikewuis], $ucseauqiioaksuou[self::eoaiagsgqsmskugs])->usuqmwksoeaayaig(__("\x49\x63\157\x6e\40\123\145\164", PR__CMN__COVER))->ccmwycqioaicegoc(__("\131\x6f\165\x20\143\141\x6e\40\x63\150\141\156\x67\145\40\151\x63\157\156\x20\163\145\x74\40\x6f\146\40\x66\162\157\x6e\x74\x65\156\x64\x20\x62\x79\40\143\x68\x61\x6e\x67\151\x6e\x67\x20\x74\150\151\x73\x20\157\160\x74\151\157\x6e", PR__CMN__COVER)))->mkksewyosgeumwsa($cciauwuwuqaywgce::wcwmusaouiqaqeww(self::mguiyugauoweycka, __("\104\151\x73\x61\x62\x6c\x65\40\101\x64\x6d\x69\x6e\x20\102\141\162", PR__CMN__COVER)))->mkksewyosgeumwsa($cciauwuwuqaywgce::kimoeccokowuaiic(self::gqgseikcqgoiuqeg, __("\x49\155\x61\x67\x65\40\x50\154\x61\x63\145\x68\157\x6c\144\145\162", PR__CMN__COVER), __("\104\x65\x66\141\x75\x6c\x74\x20\151\155\x61\x67\145\x20\146\157\x72\x20\141\154\154\40\160\x6f\x73\x74\40\164\171\x70\145\x73\56", PR__CMN__COVER)))->mkksewyosgeumwsa($cciauwuwuqaywgce::ymuegqgyuagyucws(self::qqswqycisgaqiuse, __("\107\x6f\x6f\x67\154\145\x20\101\156\141\x6c\x79\x74\151\x63\163", PR__CMN__COVER))->yskkmqiusguummwa()->kyiucygqsgequoys("\x55\x41\x2d\43\43\43\x23\43\x23\x23\x23\43\x2d\43"))->jyumyyugiwwiqomk(1)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy))->sikqggwmmykuiymy($cciauwuwuqaywgce::cgygmuguceeosoey("\157\160\x74\151\155\151\172\141\164\x69\x6f\156", __("\117\160\164\x69\155\151\172\x61\164\x69\157\156", PR__CMN__COVER))->mkksewyosgeumwsa($cciauwuwuqaywgce::wcwmusaouiqaqeww(self::mgwkysuyugygacma, __("\104\x69\163\x61\142\154\x65\x20\114\x61\x7a\x79\40\114\157\141\x64", PR__CMN__COVER)))->mkksewyosgeumwsa($cciauwuwuqaywgce::wcwmusaouiqaqeww(self::qmwqkeocouqykuwc, __("\x44\x69\163\141\142\154\x65\40\x44\145\154\x61\x79\145\x64\x20\123\143\x72\x69\160\x74\x73", PR__CMN__COVER)))->mkksewyosgeumwsa($cciauwuwuqaywgce::wcwmusaouiqaqeww(self::mesmawyqgaugkmag, __("\104\151\163\x61\x62\x6c\145\x20\103\x6c\x65\141\x6e\165\160", PR__CMN__COVER)))->mkksewyosgeumwsa($cciauwuwuqaywgce::ckuwucygcwsiawms(self::gwucgosagousgoko, __("\105\170\x63\x6c\x75\x64\145\x20\x4f\x70\164\151\155\151\172\x61\x74\x69\157\156", PR__CMN__COVER))->ccmwycqioaicegoc(__("\103\x68\157\x69\x63\x65\x20\x70\157\163\164\163\x20\x66\162\x6f\155\x20\x70\157\x73\x74\40\164\171\x70\x65\40\x74\150\x61\x74\x20\x79\x6f\x75\x20\167\x61\x6e\164\x20\x74\x6f\40\x69\x67\156\x6f\162\145\40\x66\x72\157\x6d\40\x6f\x70\x74\x69\155\151\172\141\164\x69\x6f\156", PR__CMN__COVER))->smmismmuuccmscya()->icsmsougoccqosgc(ManipulatePost::mwoyqeeigwqoamiw(self::emgcgiseaoouacge))->oikgogcweiiaocka())->jyumyyugiwwiqomk(2)->saemoowcasogykak(IconInterface::geywskycossgwwia))->sikqggwmmykuiymy($cciauwuwuqaywgce::cgygmuguceeosoey("\154\151\143\145\x6e\163\x65\x73", __("\114\151\x63\145\x6e\163\145\x73", PR__CMN__COVER))->mkksewyosgeumwsa($cciauwuwuqaywgce::iseogkiymousogom(self::mgieaomemyywoqwa, __("\111\x74\145\x6d\163", PR__CMN__COVER))->mkksewyosgeumwsa($cciauwuwuqaywgce::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\x54\x69\164\154\x65", PR__CMN__COVER), __("\124\x69\x74\154\x65\40\x6f\146\40\x6c\x69\x63\x65\156\x73\145\40\x74\x6f\x20\163\150\x6f\167\40\157\x6e\x20\x61\144\155\151\156", PR__CMN__COVER)))->mkksewyosgeumwsa($cciauwuwuqaywgce::ymuegqgyuagyucws(self::ogigqueukwysusii, __("\x4c\151\x6e\153", PR__CMN__COVER))->xkgcwkwsqysqamic())->mkksewyosgeumwsa($cciauwuwuqaywgce::kimoeccokowuaiic(self::mkousmkiawwousws, __("\x49\x6d\141\x67\145", PR__CMN__COVER), __("\111\x66\40\x79\x6f\x75\40\x73\x65\x74\40\x61\x20\x6d\x61\162\x6b\165\x70\x20\146\157\x72\40\x74\150\151\x73\x20\154\x69\143\145\x6e\x73\145\54\x20\164\150\151\x73\x20\151\x6d\x61\x67\x65\40\162\x65\x70\154\x61\x63\x65\x20\x77\x69\x74\x68\40\164\x68\x61\x74\40\x69\x6d\141\147\145\56", PR__CMN__COVER)))->mkksewyosgeumwsa($cciauwuwuqaywgce::ckuwucygcwsiawms(self::qmeuakmyaucgeyeu, __("\x49\x6d\x61\x67\145\x20\123\151\172\x65", PR__CMN__COVER))->oeeumggeiyyckkom('', [self::qomookamaskuoswk, self::sogmkkcwuamuqegw])->acauweqyyugwisqc(array_combine($wkuikksoimmikkek, $wkuikksoimmikkek)))->mkksewyosgeumwsa($cciauwuwuqaywgce::ymuegqgyuagyucws(self::qomookamaskuoswk, __("\111\x6d\141\x67\145\x20\x57\151\144\164\x68", PR__CMN__COVER))->escqqisecooswqgo())->mkksewyosgeumwsa($cciauwuwuqaywgce::ymuegqgyuagyucws(self::sogmkkcwuamuqegw, __("\111\x6d\x61\147\x65\40\110\x65\x69\x67\x68\164", PR__CMN__COVER))->escqqisecooswqgo())->mkksewyosgeumwsa($cciauwuwuqaywgce::uouyygwcgsmygaee(self::kicoscymgmgqeqgy, __("\115\x61\x72\153\165\160", PR__CMN__COVER), __("\x49\146\x20\x79\x6f\165\40\x68\x61\166\x65\40\141\x20\150\x74\155\x6c\x20\155\141\162\153\x75\160\40\157\x66\40\171\157\165\x72\x20\154\151\143\x65\x6e\163\x65\54\40\x70\x75\164\40\x68\x65\x72\145\40\164\157\40\163\x68\157\x77\40\151\164\x2e", PR__CMN__COVER))->qsecygiycssgacqs(3)->wcgckeeiiseccqkc())->mkksewyosgeumwsa($cciauwuwuqaywgce::cwiuiiakukcsaakw(self::ascagqcquwgmygkm))->wygoskowywcuyaiq())->saemoowcasogykak(IconInterface::oawqokqscewgoogg)); eeqesooyqagwawae: return $cciauwuwuqaywgce; } public function guowcwummeykeqkm() : array { $qiouiwasaauyaaue = $iwkyyocymeukcceu = []; $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $ucseauqiioaksuou = ["\x64\145\146\x61\x75\154\164" => __("\x4c\x69\147\x68\164", PR__CMN__FOUNDATION), "\x64\x75\157\x74\157\x6e\145" => __("\104\x75\157\x74\x6f\x6e\145", PR__CMN__FOUNDATION), "\x72\x65\x67\165\x6c\141\x72" => __("\122\x65\x67\x75\x6c\x61\x72", PR__CMN__FOUNDATION), "\x73\157\154\151\144" => __("\123\x6f\154\151\144", PR__CMN__FOUNDATION), "\x74\150\x69\x6e" => __("\124\150\151\x6e", PR__CMN__FOUNDATION)]; $wkaqekwwgqsqwcoi = IconInterface::cmyakossqyoysoys; foreach ($ucseauqiioaksuou as $cekceegqqaoiisei => $pkyyagewkiyckmwy) { $qiouiwasaauyaaue[$cekceegqqaoiisei] = $eygsasmqycagyayw->eyamqkqiykagecsw($wkaqekwwgqsqwcoi, [self::uociqugwegocyuue => $cekceegqqaoiisei]); $iwkyyocymeukcceu[$cekceegqqaoiisei] = $pkyyagewkiyckmwy; foeeqckqsyockkak: } oqugqwcyomiaaoqu: return [self::emgcgiseaoouacge => $ucseauqiioaksuou, self::aeweusomuikewuis => $qiouiwasaauyaaue, self::eoaiagsgqsmskugs => $iwkyyocymeukcceu]; } public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; if (!($owgumcsyqsamiemg = self::symcgieuakksimmu())) { goto hoeeyiowekaeemko; } $eqgoocgaqwqcimie = $owgumcsyqsamiemg->sscegwueamckwmcy("\x67\145\164\x5f{$owgumcsyqsamiemg->wuiuecuwkuswaioe()}\137\x73\x65\x74\x74\151\156\x67", $uusmaiomayssaecw, $ggauoeuaesiymgee, []); if (!($eqgoocgaqwqcimie === $uusmaiomayssaecw)) { goto iekumemscwieugqw; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; iekumemscwieugqw: hoeeyiowekaeemko: return $eqgoocgaqwqcimie; } public static function siggceeeowgkoaam(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::wkweqssoakmmmguq => [self::qescuiwgsyuikume, self::ascagqcquwgmygkm], self::aisguagukaewucii => self::ckmqoekmugkggeym, self::qwumqqyuasyskkkc => self::eiwcuqigayigimak(self::mgieaomemyywoqwa, [])]); $rsywwkgoeeiscsik = BaseSetting::qkckuwowccaqygke(self::mgieaomemyywoqwa, $ywmkwiwkosakssii); if (!($rsywwkgoeeiscsik && is_array($rsywwkgoeeiscsik))) { goto suqkuqygkkgwyaie; } if (!(self::ckmqoekmugkggeym === $ywmkwiwkosakssii[self::aisguagukaewucii])) { goto aegysmeecgcgayyw; } foreach ($rsywwkgoeeiscsik as $momcykaoccoymeig => $caicqiiuwsyaeeko) { $mcqieaigyeeyaksm = ManipulateArray::get($caicqiiuwsyaeeko, self::mkousmkiawwousws . self::mswocgcucqoaesaa); if (!($gskuwmeemyeuwogc = ManipulateArray::get($caicqiiuwsyaeeko, self::kicoscymgmgqeqgy))) { goto gaomwagkcciesyqy; } if (!($mcqieaigyeeyaksm && DOMCrawler::umuecysoywoumgwo($gskuwmeemyeuwogc, "\x69\x6d\x67"))) { goto esuiysskoweawsue; } $wwgucssaecqekuek = []; if ($weaakkwoqiawsiua = ManipulateArray::get($caicqiiuwsyaeeko, self::qmeuakmyaucgeyeu)) { goto uguigkcmukuouway; } $wwgucssaecqekuek = ["\x73\x72\143" => ManipulateAttachment::iaykyouimqoikagg($mcqieaigyeeyaksm), self::qomookamaskuoswk => ManipulateArray::get($caicqiiuwsyaeeko, self::qomookamaskuoswk, 80), self::sogmkkcwuamuqegw => ManipulateArray::get($caicqiiuwsyaeeko, self::sogmkkcwuamuqegw, 80)]; goto uqqaiagaeqgqgaiy; uguigkcmukuouway: if (!($mcqieaigyeeyaksm = ManipulateAttachment::qaeeusqkgwagwaqc($mcqieaigyeeyaksm, $weaakkwoqiawsiua))) { goto qicwaskssogcokgm; } $wcosyisywqggyuie = DOMCrawler::ccekeuwwqqoiwuwy($mcqieaigyeeyaksm, "\151\x6d\147"); $wwgucssaecqekuek = ["\163\x72\x63" => ManipulateArray::get($wcosyisywqggyuie, "\163\x72\143"), self::qomookamaskuoswk => ManipulateArray::get($wcosyisywqggyuie, self::qomookamaskuoswk, 80), self::sogmkkcwuamuqegw => ManipulateArray::get($wcosyisywqggyuie, self::sogmkkcwuamuqegw, 80)]; qicwaskssogcokgm: uqqaiagaeqgqgaiy: $rsywwkgoeeiscsik[$momcykaoccoymeig][self::kicoscymgmgqeqgy] = DOMCrawler::qcgocuceocquqcuw($gskuwmeemyeuwogc, ["\151\155\x67" => $wwgucssaecqekuek]); esuiysskoweawsue: gaomwagkcciesyqy: usquiuuyiyqaeyiu: } kymkucucyeoeikim: aegysmeecgcgayyw: suqkuqygkkgwyaie: return $rsywwkgoeeiscsik; } public function iasywwkguyauiywu($eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = BaseSetting::wcoqgwyekgsmiueo($eqgoocgaqwqcimie, self::mgieaomemyywoqwa); return $eqgoocgaqwqcimie; } }
