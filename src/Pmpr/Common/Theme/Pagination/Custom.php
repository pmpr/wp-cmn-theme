<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             621d1b63c0a5c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Theme\Pagination; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateNumber; class Custom extends Common { protected ?string $type = "\x63\x75\163\164\157\x6d"; public function kooycocagkkmaiay($ywmkwiwkosakssii = []) { if ($ywmkwiwkosakssii[self::ausqeuugegoygouq] > 0) { goto siqagquguiemuoku; } $ocqawgquwsqioses = []; goto ycakugokkqkuqyiu; siqagquguiemuoku: $ocqawgquwsqioses = ceil(intval($ywmkwiwkosakssii[self::qiyqwyiiwykeccmo]) / intval($ywmkwiwkosakssii[self::ausqeuugegoygouq])); $ocqawgquwsqioses = self::mucaeaumyoiqkgqs($ocqawgquwsqioses, $ywmkwiwkosakssii["\x63\165\162\162\x65\156\x74"]); ycakugokkqkuqyiu: $ywmkwiwkosakssii[self::yusuiaeueqwieqqq] = $ocqawgquwsqioses; return $this->iuygowkemiiwqmiw("\x63\x75\x73\164\x6f\x6d", $ywmkwiwkosakssii, $ywmkwiwkosakssii); } public function kyseuiqusququcek() : array { return [self::gouqcwikiiygyasc => "\x70\x61\147\x69\156\141\164\151\x6f\156", self::qiyqwyiiwykeccmo => 1, self::ausqeuugegoygouq => 10, "\x63\x75\x72\x72\145\156\164" => 1, "\x6e\145\x78\x74\x5f\164\145\x78\x74" => __("\116\145\x78\x74", PR__CMN__THEME), "\160\x72\145\166\137\164\145\170\164" => __("\120\x72\145\x76\151\157\x75\163", PR__CMN__THEME), "\143\165\162\162\145\x6e\164\x5f\x74\x65\x78\164" => __("\103\165\162\162\145\x6e\x74", PR__CMN__THEME)]; } public function mucaeaumyoiqkgqs($ocqawgquwsqioses, $yeacayasgueouoqc) : array { $oammesyieqmwuwyi = []; if (!($ocqawgquwsqioses > 1)) { goto quwcqmyokicssyew; } if (!($yeacayasgueouoqc > 1)) { goto oouoqimaaqcmccay; } $oammesyieqmwuwyi[__("\x50\x72\x65\166\151\x6f\x75\163", PR__CMN__THEME)] = $yeacayasgueouoqc - 1; oouoqimaaqcmccay: if ($ocqawgquwsqioses > 5) { goto umgaesggesswoaqe; } $oammesyieqmwuwyi = $oammesyieqmwuwyi + ManipulateNumber::ywqgcuymeiswqyqc(1, $ocqawgquwsqioses); goto qsygcycwieukkgwc; umgaesggesswoaqe: $oammesyieqmwuwyi[1] = 1; if (!($yeacayasgueouoqc > 3)) { goto sycygoiaiqqageym; } $oammesyieqmwuwyi["\x62\x65\x66\157\162\145\x2d\x64\157\x74"] = "\x2e\56\x2e"; sycygoiaiqqageym: if (!($yeacayasgueouoqc > 1)) { goto gygawoqywkukmqee; } $oammesyieqmwuwyi[$yeacayasgueouoqc - 1] = $yeacayasgueouoqc - 1; gygawoqywkukmqee: $oammesyieqmwuwyi[$yeacayasgueouoqc] = $yeacayasgueouoqc; if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto kciouyuaqkyqomam; } $oammesyieqmwuwyi[$yeacayasgueouoqc + 1] = $yeacayasgueouoqc + 1; kciouyuaqkyqomam: if (!($yeacayasgueouoqc < $ocqawgquwsqioses - 2)) { goto wwkgkaecgiwggcck; } $oammesyieqmwuwyi["\141\146\164\x65\162\x2d\144\x6f\x74"] = "\x2e\x2e\x2e"; wwkgkaecgiwggcck: $oammesyieqmwuwyi[$ocqawgquwsqioses] = $ocqawgquwsqioses; qsygcycwieukkgwc: if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto kiwqkcaekqqyuegq; } $oammesyieqmwuwyi[__("\x4e\145\x78\164", PR__CMN__THEME)] = $yeacayasgueouoqc + 1; kiwqkcaekqqyuegq: quwcqmyokicssyew: return $oammesyieqmwuwyi; } }
