<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             622d13d953615             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Theme\Pagination; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateNumber; class Custom extends Common { protected ?string $type = "\x63\x75\x73\164\x6f\x6d"; public function kooycocagkkmaiay($ywmkwiwkosakssii = []) { if ($ywmkwiwkosakssii[self::ausqeuugegoygouq] > 0) { goto kqksuugcgsyeoayy; } $ocqawgquwsqioses = []; goto iggyqogweyosuikc; kqksuugcgsyeoayy: $ocqawgquwsqioses = ceil(intval($ywmkwiwkosakssii[self::qiyqwyiiwykeccmo]) / intval($ywmkwiwkosakssii[self::ausqeuugegoygouq])); $ocqawgquwsqioses = self::mucaeaumyoiqkgqs($ocqawgquwsqioses, $ywmkwiwkosakssii["\143\165\x72\162\145\156\164"]); iggyqogweyosuikc: $ywmkwiwkosakssii[self::yusuiaeueqwieqqq] = $ocqawgquwsqioses; return $this->iuygowkemiiwqmiw("\143\165\x73\x74\x6f\x6d", $ywmkwiwkosakssii, $ywmkwiwkosakssii); } public function kyseuiqusququcek() : array { return [self::gouqcwikiiygyasc => "\160\141\147\151\x6e\141\164\151\x6f\x6e", self::qiyqwyiiwykeccmo => 1, self::ausqeuugegoygouq => 10, "\x63\x75\x72\x72\145\156\x74" => 1, "\156\145\x78\164\137\x74\145\x78\x74" => __("\x4e\145\x78\x74", PR__CMN__THEME), "\160\162\x65\x76\137\164\145\170\x74" => __("\120\162\145\166\x69\x6f\x75\x73", PR__CMN__THEME), "\143\x75\162\162\145\156\164\137\164\x65\170\x74" => __("\103\165\162\x72\145\x6e\x74", PR__CMN__THEME)]; } public function mucaeaumyoiqkgqs($ocqawgquwsqioses, $yeacayasgueouoqc) : array { $oammesyieqmwuwyi = []; if (!($ocqawgquwsqioses > 1)) { goto acaqummmoyiemqss; } if (!($yeacayasgueouoqc > 1)) { goto qqewoyookaskiuek; } $oammesyieqmwuwyi[__("\120\162\145\166\x69\157\x75\x73", PR__CMN__THEME)] = $yeacayasgueouoqc - 1; qqewoyookaskiuek: if ($ocqawgquwsqioses > 5) { goto ywqgcegomwaiuquc; } $oammesyieqmwuwyi = $oammesyieqmwuwyi + ManipulateNumber::ywqgcuymeiswqyqc(1, $ocqawgquwsqioses); goto wmmggowmigekyoso; ywqgcegomwaiuquc: $oammesyieqmwuwyi[1] = 1; if (!($yeacayasgueouoqc > 3)) { goto ssoucoucsgccekwe; } $oammesyieqmwuwyi["\142\x65\146\157\162\145\55\144\x6f\164"] = "\56\56\56"; ssoucoucsgccekwe: if (!($yeacayasgueouoqc > 1)) { goto qkcyqocqqwmqgqww; } $oammesyieqmwuwyi[$yeacayasgueouoqc - 1] = $yeacayasgueouoqc - 1; qkcyqocqqwmqgqww: $oammesyieqmwuwyi[$yeacayasgueouoqc] = $yeacayasgueouoqc; if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto miyqyeiwquwsacsm; } $oammesyieqmwuwyi[$yeacayasgueouoqc + 1] = $yeacayasgueouoqc + 1; miyqyeiwquwsacsm: if (!($yeacayasgueouoqc < $ocqawgquwsqioses - 2)) { goto eegqyykygiccaoeo; } $oammesyieqmwuwyi["\141\146\164\145\162\55\x64\x6f\164"] = "\x2e\x2e\x2e"; eegqyykygiccaoeo: $oammesyieqmwuwyi[$ocqawgquwsqioses] = $ocqawgquwsqioses; wmmggowmigekyoso: if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto soqqemyioggmoakg; } $oammesyieqmwuwyi[__("\x4e\x65\x78\x74", PR__CMN__THEME)] = $yeacayasgueouoqc + 1; soqqemyioggmoakg: acaqummmoyiemqss: return $oammesyieqmwuwyi; } }
