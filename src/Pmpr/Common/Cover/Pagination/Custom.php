<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             660dbf0b9b05a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Pagination; class Custom extends Common { protected ?string $type = "\143\x75\163\164\157\x6d"; public function kooycocagkkmaiay($ywmkwiwkosakssii = []) { if ($ywmkwiwkosakssii[self::ausqeuugegoygouq] > 0) { goto yssscwioiyygssec; } $ocqawgquwsqioses = []; goto ieumumsgyguceusy; yssscwioiyygssec: $ocqawgquwsqioses = ceil((int) $ywmkwiwkosakssii[self::qiyqwyiiwykeccmo] / (int) $ywmkwiwkosakssii[self::ausqeuugegoygouq]); $ocqawgquwsqioses = $this->mucaeaumyoiqkgqs($ocqawgquwsqioses, $ywmkwiwkosakssii["\143\x75\162\162\145\156\x74"]); ieumumsgyguceusy: $ywmkwiwkosakssii[self::yusuiaeueqwieqqq] = $ocqawgquwsqioses; return $this->iuygowkemiiwqmiw("\x63\165\163\164\x6f\x6d", $ywmkwiwkosakssii, $ywmkwiwkosakssii); } public function kyseuiqusququcek() : array { return [self::gouqcwikiiygyasc => "\x70\x61\147\151\x6e\x61\x74\151\157\x6e", self::qiyqwyiiwykeccmo => 1, self::ausqeuugegoygouq => 10, "\x63\x75\162\162\x65\156\x74" => 1, "\x6e\x65\170\x74\137\x74\x65\x78\x74" => __("\116\x65\170\x74", PR__CMN__COVER), "\x70\x72\145\x76\x5f\x74\x65\170\x74" => __("\120\x72\x65\x76\x69\157\165\163", PR__CMN__COVER), "\143\165\162\x72\x65\156\x74\137\x74\145\170\164" => __("\103\165\162\x72\x65\156\x74", PR__CMN__COVER)]; } public function mucaeaumyoiqkgqs($ocqawgquwsqioses, $yeacayasgueouoqc) : array { $oammesyieqmwuwyi = []; if (!($ocqawgquwsqioses > 1)) { goto umgaesggesswoaqe; } if (!($yeacayasgueouoqc > 1)) { goto coywmiyqgsweuiic; } $oammesyieqmwuwyi[__("\x50\162\145\166\x69\157\x75\x73", PR__CMN__COVER)] = $yeacayasgueouoqc - 1; coywmiyqgsweuiic: if ($ocqawgquwsqioses > 5) { goto gygawoqywkukmqee; } $oammesyieqmwuwyi += $this->caokeucsksukesyo()->iyowqkwcwiuccgag()->ywqgcuymeiswqyqc(1, $ocqawgquwsqioses); goto kciouyuaqkyqomam; gygawoqywkukmqee: $oammesyieqmwuwyi[1] = 1; if (!($yeacayasgueouoqc > 3)) { goto siqagquguiemuoku; } $oammesyieqmwuwyi["\142\x65\x66\157\162\145\55\144\157\164"] = "\x2e\56\x2e"; siqagquguiemuoku: if (!($yeacayasgueouoqc > 1)) { goto ycakugokkqkuqyiu; } $oammesyieqmwuwyi[$yeacayasgueouoqc - 1] = $yeacayasgueouoqc - 1; ycakugokkqkuqyiu: $oammesyieqmwuwyi[$yeacayasgueouoqc] = $yeacayasgueouoqc; if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto oouoqimaaqcmccay; } $oammesyieqmwuwyi[$yeacayasgueouoqc + 1] = $yeacayasgueouoqc + 1; oouoqimaaqcmccay: if (!($yeacayasgueouoqc < $ocqawgquwsqioses - 2)) { goto sycygoiaiqqageym; } $oammesyieqmwuwyi["\141\x66\x74\145\x72\55\x64\157\x74"] = "\x2e\56\x2e"; sycygoiaiqqageym: $oammesyieqmwuwyi[$ocqawgquwsqioses] = $ocqawgquwsqioses; kciouyuaqkyqomam: if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto wwkgkaecgiwggcck; } $oammesyieqmwuwyi[__("\x4e\x65\170\x74", PR__CMN__COVER)] = $yeacayasgueouoqc + 1; wwkgkaecgiwggcck: umgaesggesswoaqe: return $oammesyieqmwuwyi; } }
