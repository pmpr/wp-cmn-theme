<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6240190840dd2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Pagination; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateNumber; class Custom extends Common { protected ?string $type = "\x63\x75\163\x74\157\x6d"; public function kooycocagkkmaiay($ywmkwiwkosakssii = []) { if ($ywmkwiwkosakssii[self::ausqeuugegoygouq] > 0) { goto kqksuugcgsyeoayy; } $ocqawgquwsqioses = []; goto iggyqogweyosuikc; kqksuugcgsyeoayy: $ocqawgquwsqioses = ceil(intval($ywmkwiwkosakssii[self::qiyqwyiiwykeccmo]) / intval($ywmkwiwkosakssii[self::ausqeuugegoygouq])); $ocqawgquwsqioses = self::mucaeaumyoiqkgqs($ocqawgquwsqioses, $ywmkwiwkosakssii["\x63\x75\x72\162\145\156\x74"]); iggyqogweyosuikc: $ywmkwiwkosakssii[self::yusuiaeueqwieqqq] = $ocqawgquwsqioses; return $this->iuygowkemiiwqmiw("\x63\165\163\x74\x6f\155", $ywmkwiwkosakssii, $ywmkwiwkosakssii); } public function kyseuiqusququcek() : array { return [self::gouqcwikiiygyasc => "\x70\141\x67\x69\x6e\141\x74\151\x6f\156", self::qiyqwyiiwykeccmo => 1, self::ausqeuugegoygouq => 10, "\x63\x75\162\162\x65\x6e\164" => 1, "\x6e\x65\170\164\x5f\x74\145\170\164" => __("\116\x65\x78\x74", PR__CMN__COVER), "\x70\162\x65\x76\137\x74\x65\170\x74" => __("\x50\x72\145\x76\x69\x6f\x75\163", PR__CMN__COVER), "\x63\165\162\x72\145\156\164\137\x74\145\170\x74" => __("\x43\x75\x72\x72\145\x6e\x74", PR__CMN__COVER)]; } public function mucaeaumyoiqkgqs($ocqawgquwsqioses, $yeacayasgueouoqc) : array { $oammesyieqmwuwyi = []; if (!($ocqawgquwsqioses > 1)) { goto acaqummmoyiemqss; } if (!($yeacayasgueouoqc > 1)) { goto qqewoyookaskiuek; } $oammesyieqmwuwyi[__("\120\x72\x65\x76\151\157\165\163", PR__CMN__COVER)] = $yeacayasgueouoqc - 1; qqewoyookaskiuek: if ($ocqawgquwsqioses > 5) { goto ywqgcegomwaiuquc; } $oammesyieqmwuwyi = $oammesyieqmwuwyi + ManipulateNumber::ywqgcuymeiswqyqc(1, $ocqawgquwsqioses); goto wmmggowmigekyoso; ywqgcegomwaiuquc: $oammesyieqmwuwyi[1] = 1; if (!($yeacayasgueouoqc > 3)) { goto ssoucoucsgccekwe; } $oammesyieqmwuwyi["\142\145\x66\157\x72\x65\55\144\x6f\164"] = "\56\x2e\56"; ssoucoucsgccekwe: if (!($yeacayasgueouoqc > 1)) { goto qkcyqocqqwmqgqww; } $oammesyieqmwuwyi[$yeacayasgueouoqc - 1] = $yeacayasgueouoqc - 1; qkcyqocqqwmqgqww: $oammesyieqmwuwyi[$yeacayasgueouoqc] = $yeacayasgueouoqc; if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto miyqyeiwquwsacsm; } $oammesyieqmwuwyi[$yeacayasgueouoqc + 1] = $yeacayasgueouoqc + 1; miyqyeiwquwsacsm: if (!($yeacayasgueouoqc < $ocqawgquwsqioses - 2)) { goto eegqyykygiccaoeo; } $oammesyieqmwuwyi["\x61\146\164\x65\x72\x2d\144\157\164"] = "\56\56\x2e"; eegqyykygiccaoeo: $oammesyieqmwuwyi[$ocqawgquwsqioses] = $ocqawgquwsqioses; wmmggowmigekyoso: if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto soqqemyioggmoakg; } $oammesyieqmwuwyi[__("\116\x65\x78\x74", PR__CMN__COVER)] = $yeacayasgueouoqc + 1; soqqemyioggmoakg: acaqummmoyiemqss: return $oammesyieqmwuwyi; } }
