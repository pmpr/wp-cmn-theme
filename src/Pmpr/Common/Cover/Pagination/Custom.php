<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668f2a2573623             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Pagination; class Custom extends Common { protected ?string $type = "\x63\165\163\164\157\x6d"; public function kooycocagkkmaiay($ywmkwiwkosakssii = []) { if ($ywmkwiwkosakssii[self::ausqeuugegoygouq] > 0) { goto qogqewiwmwiwskgm; } $ocqawgquwsqioses = []; goto qgoiooayqmqqsiok; qogqewiwmwiwskgm: $ocqawgquwsqioses = ceil((int) $ywmkwiwkosakssii[self::qiyqwyiiwykeccmo] / (int) $ywmkwiwkosakssii[self::ausqeuugegoygouq]); $ocqawgquwsqioses = $this->mucaeaumyoiqkgqs($ocqawgquwsqioses, $ywmkwiwkosakssii["\143\165\162\162\145\x6e\x74"]); qgoiooayqmqqsiok: $ywmkwiwkosakssii[self::yusuiaeueqwieqqq] = $ocqawgquwsqioses; return $this->iuygowkemiiwqmiw("\x63\165\163\164\157\155", $ywmkwiwkosakssii, $ywmkwiwkosakssii); } public function kyseuiqusququcek() : array { return [self::gouqcwikiiygyasc => "\160\141\147\x69\156\141\164\151\157\x6e", self::qiyqwyiiwykeccmo => 1, self::ausqeuugegoygouq => 10, "\x63\x75\162\162\145\x6e\x74" => 1, "\x6e\x65\x78\164\x5f\164\x65\170\x74" => __("\x4e\x65\x78\164", PR__CMN__COVER), "\x70\x72\x65\166\137\164\x65\x78\164" => __("\120\x72\x65\x76\x69\x6f\165\x73", PR__CMN__COVER), "\143\165\x72\162\145\x6e\x74\137\x74\145\x78\164" => __("\x43\165\x72\162\145\x6e\x74", PR__CMN__COVER)]; } public function mucaeaumyoiqkgqs($ocqawgquwsqioses, $yeacayasgueouoqc) : array { $oammesyieqmwuwyi = []; if (!($ocqawgquwsqioses > 1)) { goto eqkauqciwewmgeoi; } if (!($yeacayasgueouoqc > 1)) { goto qwigomakwmyiwkgo; } $oammesyieqmwuwyi[__("\x50\162\145\x76\151\157\x75\x73", PR__CMN__COVER)] = $yeacayasgueouoqc - 1; qwigomakwmyiwkgo: if ($ocqawgquwsqioses > 5) { goto kuicqywysciceggs; } $oammesyieqmwuwyi += $this->caokeucsksukesyo()->iyowqkwcwiuccgag()->ywqgcuymeiswqyqc(1, $ocqawgquwsqioses); goto mkwskuycuyguqqok; kuicqywysciceggs: $oammesyieqmwuwyi[1] = 1; if (!($yeacayasgueouoqc > 3)) { goto myoicgcuugciueis; } $oammesyieqmwuwyi["\142\x65\146\x6f\x72\x65\x2d\x64\157\164"] = "\x2e\x2e\x2e"; myoicgcuugciueis: if (!($yeacayasgueouoqc > 1)) { goto asmecuqiyyswueqe; } $oammesyieqmwuwyi[$yeacayasgueouoqc - 1] = $yeacayasgueouoqc - 1; asmecuqiyyswueqe: $oammesyieqmwuwyi[$yeacayasgueouoqc] = $yeacayasgueouoqc; if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto csscmcacoikwsecs; } $oammesyieqmwuwyi[$yeacayasgueouoqc + 1] = $yeacayasgueouoqc + 1; csscmcacoikwsecs: if (!($yeacayasgueouoqc < $ocqawgquwsqioses - 2)) { goto cuykwgmswkskqkyi; } $oammesyieqmwuwyi["\x61\x66\x74\145\x72\55\144\x6f\164"] = "\56\56\x2e"; cuykwgmswkskqkyi: $oammesyieqmwuwyi[$ocqawgquwsqioses] = $ocqawgquwsqioses; mkwskuycuyguqqok: if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto sciwggaeogcoesiu; } $oammesyieqmwuwyi[__("\116\x65\x78\x74", PR__CMN__COVER)] = $yeacayasgueouoqc + 1; sciwggaeogcoesiu: eqkauqciwewmgeoi: return $oammesyieqmwuwyi; } }
