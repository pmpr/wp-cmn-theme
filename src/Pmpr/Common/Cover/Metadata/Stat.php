<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6751a96de33ec             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Metadata; use Pmpr\Common\Cover\Container; use Pmpr\Common\Foundation\Data\Meta; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Stat extends Container { const oswseauqqwwuiwcg = "\155\x65\x74\141\144\x61\164\x61\137"; public function wigskegsqequoeks() { $this->waqewsckuayqguos(self::oswseauqqwwuiwcg . "\163\x74\x61\x74\137\x72\x65\x6e\x64\x65\162", [$this, "\x72\x65\x6e\144\145\x72"])->waqewsckuayqguos(self::oswseauqqwwuiwcg . "\x73\164\x61\x74\137\x67\145\x74\137\x68\164\x6d\x6c", [$this, "\x77\x67\x71\161\x67\x65\167\x63\155\x63\x65\x6d\157\x65\x77\x6f"], 10, 2); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom(self::oswseauqqwwuiwcg . "\x73\x74\141\164\x5f\147\145\164\137\x61\x6c\x6c\x5f\x69\x74\x65\155\163", [$this, "\163\153\163\171\x6b\x71\141\x73\x67\171\x79\x79\x71\153\x69\x65"])->aqaqisyssqeomwom(self::oswseauqqwwuiwcg . "\x73\x74\x61\x74\137\147\145\164\137\151\x74\x65\155\163", [$this, "\167\141\x73\x67\167\163\x6f\x67\155\x75\x71\x75\161\x65\x61\141"], 10, 2); } public function wgqqgewcmcemoewo($nsmgceoqaqogqmuw = '', $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::uwceyikaaaqgkkee => Constants::qwumqqyuasyskkkc, Constants::uouymeyqasaeckso => Constants::mswoacegomcucaik]); $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa([], $ywmkwiwkosakssii); if ($oammesyieqmwuwyi) { $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw($ywmkwiwkosakssii[Constants::uwceyikaaaqgkkee], $ywmkwiwkosakssii); } return $nsmgceoqaqogqmuw; } public function render($ywmkwiwkosakssii = []) { echo $this->wgqqgewcmcemoewo('', $ywmkwiwkosakssii); } public function wasgwsogmuquqeaa($oammesyieqmwuwyi = [], $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::cgiswgcumueqgcmw => 0, Constants::ackcaikowcokggsc => [], Constants::uouymeyqasaeckso => Constants::mswoacegomcucaik]); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $uuyoeicyoayimaoa = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::cgiswgcumueqgcmw, 0); $ooiewiwkegguusum = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ackcaikowcokggsc, []); $useksmwkuswkwcqg = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::uouymeyqasaeckso, Constants::mswoacegomcucaik); if ($uuyoeicyoayimaoa > 0 && $uuyoeicyoayimaoa < count($ooiewiwkegguusum)) { $ooiewiwkegguusum = array_slice($ooiewiwkegguusum, 0, $uuyoeicyoayimaoa); } if ($useksmwkuswkwcqg && $ooiewiwkegguusum) { $eqomywkesmwsiaik = $this->ocksiywmkyaqseou("\x6d\145\164\x61\x64\141\164\x61\137\x73\x74\141\164\x5f\147\x65\x74\137\141\x6c\x6c\x5f\x69\x74\145\x6d\163", []); if (Constants::ALL === $ooiewiwkegguusum) { $ooiewiwkegguusum = array_keys($eqomywkesmwsiaik); } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); foreach ($ooiewiwkegguusum as $momcykaoccoymeig => $igqsaukqcqscimok) { $eqgoocgaqwqcimie = ''; $awmkgwkewqigsgsg = new Meta(); $awmkgwkewqigsgsg->usuqmwksoeaayaig($igqsaukqcqscimok)->jyumyyugiwwiqomk(($momcykaoccoymeig + 1) * 5)->gswweykyogmsyawy($eqomywkesmwsiaik[$igqsaukqcqscimok] ?? ''); switch ($igqsaukqcqscimok) { case Constants::qgmuskygocwmouos: $eqgoocgaqwqcimie = $seumokooiykcomco->wsqeykgqiemswysa($useksmwkuswkwcqg); $awmkgwkewqigsgsg->saemoowcasogykak(IconInterface::qgmawmcoyqqkcosk); break; case Constants::goumieeyyqigueiw: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->gscioiumssogceuc()->gaywomkwewckiwuk($useksmwkuswkwcqg); $awmkgwkewqigsgsg->saemoowcasogykak(IconInterface::qmowyycmkagomiiy); break; } $awmkgwkewqigsgsg->iygyugseyaqwywyg($eqgoocgaqwqcimie); $awmkgwkewqigsgsg = $this->ocksiywmkyaqseou(self::oswseauqqwwuiwcg . "\x73\164\x61\x74\x5f\165\160\x64\x61\164\145\137{$igqsaukqcqscimok}", $awmkgwkewqigsgsg, $useksmwkuswkwcqg, $igqsaukqcqscimok); if ($awmkgwkewqigsgsg->qooeaookuemoqecm()) { $oammesyieqmwuwyi[$igqsaukqcqscimok] = $awmkgwkewqigsgsg; } } } return $oammesyieqmwuwyi; } public function sksykqasgyyyqkie($oammesyieqmwuwyi = []) : array { $oammesyieqmwuwyi[Constants::qgmuskygocwmouos] = __("\x50\x6f\163\164\40\x69\156\40\102\x6c\x6f\147", PR__CMN__COVER); $oammesyieqmwuwyi[Constants::goumieeyyqigueiw] = __("\103\157\155\x6d\145\x6e\x74\x73\40\x6f\x6e\40\120\157\x73\x74\163", PR__CMN__COVER); return $oammesyieqmwuwyi; } }
