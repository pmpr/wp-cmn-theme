<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             634da3f8bb2f0             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Pagination; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateNumber; class Custom extends Common { protected ?string $type = "\143\x75\163\164\157\x6d"; public function kooycocagkkmaiay($ywmkwiwkosakssii = []) { if ($ywmkwiwkosakssii[self::ausqeuugegoygouq] > 0) { goto oasggeyceiyieuuo; } $ocqawgquwsqioses = []; goto omuauimgkygcecsc; oasggeyceiyieuuo: $ocqawgquwsqioses = ceil(intval($ywmkwiwkosakssii[self::qiyqwyiiwykeccmo]) / intval($ywmkwiwkosakssii[self::ausqeuugegoygouq])); $ocqawgquwsqioses = self::mucaeaumyoiqkgqs($ocqawgquwsqioses, $ywmkwiwkosakssii["\x63\165\162\x72\145\x6e\x74"]); omuauimgkygcecsc: $ywmkwiwkosakssii[self::yusuiaeueqwieqqq] = $ocqawgquwsqioses; return $this->iuygowkemiiwqmiw("\143\x75\x73\164\x6f\155", $ywmkwiwkosakssii, $ywmkwiwkosakssii); } public function kyseuiqusququcek() : array { return [self::gouqcwikiiygyasc => "\x70\141\x67\x69\156\x61\164\151\157\x6e", self::qiyqwyiiwykeccmo => 1, self::ausqeuugegoygouq => 10, "\x63\165\162\x72\x65\x6e\x74" => 1, "\x6e\145\170\164\137\164\145\x78\x74" => __("\116\x65\x78\x74", PR__CMN__COVER), "\160\x72\145\x76\137\164\x65\x78\x74" => __("\x50\162\145\x76\x69\157\165\x73", PR__CMN__COVER), "\143\165\162\162\x65\156\164\x5f\164\145\x78\x74" => __("\103\x75\162\162\x65\156\164", PR__CMN__COVER)]; } public function mucaeaumyoiqkgqs($ocqawgquwsqioses, $yeacayasgueouoqc) : array { $oammesyieqmwuwyi = []; if (!($ocqawgquwsqioses > 1)) { goto ysiqakyaiooyscwy; } if (!($yeacayasgueouoqc > 1)) { goto wwcqoeuwskquakwy; } $oammesyieqmwuwyi[__("\120\x72\x65\166\x69\157\165\163", PR__CMN__COVER)] = $yeacayasgueouoqc - 1; wwcqoeuwskquakwy: if ($ocqawgquwsqioses > 5) { goto qyyyycwaookqaoke; } $oammesyieqmwuwyi = $oammesyieqmwuwyi + ManipulateNumber::ywqgcuymeiswqyqc(1, $ocqawgquwsqioses); goto ssywsaaqqaucesau; qyyyycwaookqaoke: $oammesyieqmwuwyi[1] = 1; if (!($yeacayasgueouoqc > 3)) { goto quamuugoocyyceec; } $oammesyieqmwuwyi["\x62\145\x66\x6f\x72\x65\55\x64\x6f\x74"] = "\56\x2e\56"; quamuugoocyyceec: if (!($yeacayasgueouoqc > 1)) { goto qcssigmcayuyweiy; } $oammesyieqmwuwyi[$yeacayasgueouoqc - 1] = $yeacayasgueouoqc - 1; qcssigmcayuyweiy: $oammesyieqmwuwyi[$yeacayasgueouoqc] = $yeacayasgueouoqc; if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto iymaiwqimisgacmk; } $oammesyieqmwuwyi[$yeacayasgueouoqc + 1] = $yeacayasgueouoqc + 1; iymaiwqimisgacmk: if (!($yeacayasgueouoqc < $ocqawgquwsqioses - 2)) { goto mugscgugcogcasue; } $oammesyieqmwuwyi["\141\x66\164\x65\x72\x2d\x64\x6f\164"] = "\56\56\56"; mugscgugcogcasue: $oammesyieqmwuwyi[$ocqawgquwsqioses] = $ocqawgquwsqioses; ssywsaaqqaucesau: if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto ygcgoaokauigwuus; } $oammesyieqmwuwyi[__("\116\145\170\x74", PR__CMN__COVER)] = $yeacayasgueouoqc + 1; ygcgoaokauigwuus: ysiqakyaiooyscwy: return $oammesyieqmwuwyi; } }
