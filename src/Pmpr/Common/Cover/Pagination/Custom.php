<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             662d45f99e4b5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Pagination; class Custom extends Common { protected ?string $type = "\x63\165\x73\x74\x6f\x6d"; public function kooycocagkkmaiay($ywmkwiwkosakssii = []) { if ($ywmkwiwkosakssii[self::ausqeuugegoygouq] > 0) { goto ewscugeuicukkycc; } $ocqawgquwsqioses = []; goto kqswcsysqawkcgye; ewscugeuicukkycc: $ocqawgquwsqioses = ceil((int) $ywmkwiwkosakssii[self::qiyqwyiiwykeccmo] / (int) $ywmkwiwkosakssii[self::ausqeuugegoygouq]); $ocqawgquwsqioses = $this->mucaeaumyoiqkgqs($ocqawgquwsqioses, $ywmkwiwkosakssii["\x63\x75\162\162\145\x6e\164"]); kqswcsysqawkcgye: $ywmkwiwkosakssii[self::yusuiaeueqwieqqq] = $ocqawgquwsqioses; return $this->iuygowkemiiwqmiw("\143\x75\163\164\157\x6d", $ywmkwiwkosakssii, $ywmkwiwkosakssii); } public function kyseuiqusququcek() : array { return [self::gouqcwikiiygyasc => "\160\x61\x67\x69\156\141\x74\151\x6f\156", self::qiyqwyiiwykeccmo => 1, self::ausqeuugegoygouq => 10, "\143\165\162\162\x65\156\164" => 1, "\156\x65\x78\x74\137\164\x65\x78\164" => __("\x4e\145\170\164", PR__CMN__COVER), "\160\162\145\x76\137\x74\145\170\164" => __("\x50\x72\x65\166\151\157\x75\163", PR__CMN__COVER), "\x63\165\162\x72\x65\156\164\x5f\164\x65\170\164" => __("\x43\165\x72\162\x65\x6e\x74", PR__CMN__COVER)]; } public function mucaeaumyoiqkgqs($ocqawgquwsqioses, $yeacayasgueouoqc) : array { $oammesyieqmwuwyi = []; if (!($ocqawgquwsqioses > 1)) { goto ukqocwewouckikso; } if (!($yeacayasgueouoqc > 1)) { goto wusciwkkckmqigms; } $oammesyieqmwuwyi[__("\120\162\x65\166\151\x6f\x75\x73", PR__CMN__COVER)] = $yeacayasgueouoqc - 1; wusciwkkckmqigms: if ($ocqawgquwsqioses > 5) { goto gygwewcqsmwqismo; } $oammesyieqmwuwyi += $this->caokeucsksukesyo()->iyowqkwcwiuccgag()->ywqgcuymeiswqyqc(1, $ocqawgquwsqioses); goto uougwgeyiokewkkm; gygwewcqsmwqismo: $oammesyieqmwuwyi[1] = 1; if (!($yeacayasgueouoqc > 3)) { goto iiiccouaaqsyikae; } $oammesyieqmwuwyi["\x62\x65\146\157\x72\x65\55\144\x6f\x74"] = "\56\56\56"; iiiccouaaqsyikae: if (!($yeacayasgueouoqc > 1)) { goto ukkcmocamwgiqayu; } $oammesyieqmwuwyi[$yeacayasgueouoqc - 1] = $yeacayasgueouoqc - 1; ukkcmocamwgiqayu: $oammesyieqmwuwyi[$yeacayasgueouoqc] = $yeacayasgueouoqc; if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto mwysseaekcsiesmm; } $oammesyieqmwuwyi[$yeacayasgueouoqc + 1] = $yeacayasgueouoqc + 1; mwysseaekcsiesmm: if (!($yeacayasgueouoqc < $ocqawgquwsqioses - 2)) { goto amgsueumgaguceaa; } $oammesyieqmwuwyi["\x61\x66\x74\x65\162\55\x64\x6f\164"] = "\x2e\x2e\56"; amgsueumgaguceaa: $oammesyieqmwuwyi[$ocqawgquwsqioses] = $ocqawgquwsqioses; uougwgeyiokewkkm: if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto gommacygsykyussk; } $oammesyieqmwuwyi[__("\116\x65\x78\x74", PR__CMN__COVER)] = $yeacayasgueouoqc + 1; gommacygsykyussk: ukqocwewouckikso: return $oammesyieqmwuwyi; } }
