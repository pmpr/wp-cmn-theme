<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c0329a4f72f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Theme; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Decorator\Post\DecoratorAttachment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Container extends BaseClass { public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function gckekgcikugasqwu($uusmaiomayssaecw = null) { return ManipulateArray::get($this->wgacmmysecuqoewi(), $uusmaiomayssaecw); } public function wgacmmysecuqoewi($ooiewiwkegguusum = [], $aqykuigiuwmmcieu = self::ckmqoekmugkggeym) : array { $oammesyieqmwuwyi = []; $oeismeeeiouoqouo = $this->weysguygiseoukqw(Setting::ciiosmkakewcqcyy, []); foreach ($oeismeeeiouoqouo as $weowoqykiyuqcwam) { $uusmaiomayssaecw = ManipulateArray::get($weowoqykiyuqcwam, self::ascagqcquwgmygkm); if (!($ooiewiwkegguusum && !in_array($uusmaiomayssaecw, $ooiewiwkegguusum))) { goto qsygcycwieukkgwc; } goto umgaesggesswoaqe; qsygcycwieukkgwc: if (ManipulateArray::uuegkqwagymmusiy($weowoqykiyuqcwam, [self::ascagqcquwgmygkm, self::mscgqqsgosmsqygq, self::qescuiwgsyuikume])) { goto quwcqmyokicssyew; } if (!($aqykuigiuwmmcieu === self::emgcgiseaoouacge)) { goto kiwqkcaekqqyuegq; } $weowoqykiyuqcwam = $weowoqykiyuqcwam[self::qescuiwgsyuikume]; kiwqkcaekqqyuegq: $oammesyieqmwuwyi[$uusmaiomayssaecw] = $weowoqykiyuqcwam; quwcqmyokicssyew: umgaesggesswoaqe: } wwkgkaecgiwggcck: return $oammesyieqmwuwyi; } public function caqyoqkcyoamicmm($ooiewiwkegguusum = [], $aqykuigiuwmmcieu = self::ckmqoekmugkggeym) : array { $oammesyieqmwuwyi = []; $egegwkemucseqaaa = ManipulateArray::yaeiiwwyckwugsem($this->weysguygiseoukqw(Setting::PAGE_LINKS, [])); foreach ($egegwkemucseqaaa as $ucsmiamgwmayyoco) { $uusmaiomayssaecw = ManipulateArray::get($ucsmiamgwmayyoco, self::ascagqcquwgmygkm); if (!($ooiewiwkegguusum && !in_array($uusmaiomayssaecw, $ooiewiwkegguusum))) { goto cmqucgoewuyieoyk; } goto gimmuoqwckiseaik; cmqucgoewuyieoyk: if (ManipulateArray::uuegkqwagymmusiy($ucsmiamgwmayyoco, [self::ascagqcquwgmygkm, self::cyqwkyucgoeyuyyq])) { goto omugkkesagcyagmk; } $suaemuyiacqyugsm = $ucsmiamgwmayyoco[self::cyqwkyucgoeyuyyq]; $suaemuyiacqyugsm = ManipulatePost::get($suaemuyiacqyugsm); if (!($suaemuyiacqyugsm && ManipulatePost::ucwmcwqmqwaymkkc($suaemuyiacqyugsm) === "\160\x75\x62\x6c\x69\163\x68")) { goto mosqsmqimqgqoase; } $meqocwsecsywiiqs = ManipulateArray::get($ucsmiamgwmayyoco, self::qescuiwgsyuikume, ManipulatePost::qcgakseyaikigqco($suaemuyiacqyugsm)); $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($suaemuyiacqyugsm); if ($aqykuigiuwmmcieu === self::emgcgiseaoouacge) { goto yqykqysmiquwoasu; } $ucsmiamgwmayyoco = [self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::sauwwsocmukoaayu => $migiiksoiymissge]; goto ayyweymyuuiauamo; yqykqysmiquwoasu: $ucsmiamgwmayyoco = $meqocwsecsywiiqs; ayyweymyuuiauamo: $oammesyieqmwuwyi[$uusmaiomayssaecw] = $ucsmiamgwmayyoco; mosqsmqimqgqoase: omugkkesagcyagmk: gimmuoqwckiseaik: } iqcogmsguwoikame: return $oammesyieqmwuwyi; } public function sequoisicakmagmw() { return $this->weysguygiseoukqw(Setting::IMAGE_PLACEHOLDER . self::_ID, 0); } public function sqogiksomgaoegcy() { return DecoratorAttachment::oiucukewkckkwiqc($this->sequoisicakmagmw()); } public function iiacsiaagsusawuw($ooiewiwkegguusum = [], $aqykuigiuwmmcieu = self::ckmqoekmugkggeym) : array { $oammesyieqmwuwyi = []; $memkywmosqicmcqs = ManipulateArray::yaeiiwwyckwugsem($this->weysguygiseoukqw(Setting::FOOTER_BADGES, [])); foreach ($memkywmosqicmcqs as $ueecaoicgsgwsgys) { $uusmaiomayssaecw = ManipulateArray::get($ueecaoicgsgwsgys, self::ascagqcquwgmygkm); if (!($ooiewiwkegguusum && !in_array($uusmaiomayssaecw, $ooiewiwkegguusum))) { goto iggyqogweyosuikc; } goto kqksuugcgsyeoayy; iggyqogweyosuikc: if (ManipulateArray::uuegkqwagymmusiy($ueecaoicgsgwsgys, [self::ascagqcquwgmygkm, self::auqoykcmsiauccao, self::mscgqqsgosmsqygq, self::qescuiwgsyuikume])) { goto miyqyeiwquwsacsm; } $meqocwsecsywiiqs = $ueecaoicgsgwsgys[self::qescuiwgsyuikume]; if ($aqykuigiuwmmcieu === self::emgcgiseaoouacge) { goto ssoucoucsgccekwe; } $weowoqykiyuqcwam = ManipulateArray::get($ueecaoicgsgwsgys, self::mscgqqsgosmsqygq . self::_ID); if (!$weowoqykiyuqcwam) { goto qqewoyookaskiuek; } $migiiksoiymissge = $ueecaoicgsgwsgys[self::auqoykcmsiauccao]; $ueecaoicgsgwsgys[self::mscgqqsgosmsqygq] = ManipulateAttachment::qaeeusqkgwagwaqc($weowoqykiyuqcwam, "\163\x6d\141\154\154", ["\144\141\164\x61\x2d\x6f\156" => "\164\x61\160\72\101\x4d\120\x2e\x6e\x61\166\x69\147\141\x74\145\124\x6f\50\x75\x72\x6c\75\x27{$migiiksoiymissge}\47\54\40\x74\141\162\x67\x65\x74\75\x27\137\x62\154\141\x6e\153\47\x29", "\157\156\143\x6c\151\x63\153" => "\x77\x69\156\x64\x6f\x77\56\x6f\x70\145\156\x28\x27{$migiiksoiymissge}\x27\x29", "\143\154\x61\x73\x73" => "\x62\141\x64\147\145\55\154\157\x67\x6f", "\x72\157\x6c\x65" => "\x62\165\x74\x74\157\x6e", "\141\x6c\164" => $meqocwsecsywiiqs]); qqewoyookaskiuek: goto qkcyqocqqwmqgqww; ssoucoucsgccekwe: $ueecaoicgsgwsgys = $meqocwsecsywiiqs; qkcyqocqqwmqgqww: $oammesyieqmwuwyi[$uusmaiomayssaecw] = $ueecaoicgsgwsgys; miyqyeiwquwsacsm: kqksuugcgsyeoayy: } ygcsmkuycoagwyou: return $oammesyieqmwuwyi; } }
