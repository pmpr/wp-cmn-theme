<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6261a2d241a33             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Pagination; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateNumber; class Custom extends Common { protected ?string $type = "\x63\x75\163\x74\x6f\x6d"; public function kooycocagkkmaiay($ywmkwiwkosakssii = []) { if ($ywmkwiwkosakssii[self::ausqeuugegoygouq] > 0) { goto kiwqkcaekqqyuegq; } $ocqawgquwsqioses = []; goto quwcqmyokicssyew; kiwqkcaekqqyuegq: $ocqawgquwsqioses = ceil(intval($ywmkwiwkosakssii[self::qiyqwyiiwykeccmo]) / intval($ywmkwiwkosakssii[self::ausqeuugegoygouq])); $ocqawgquwsqioses = self::mucaeaumyoiqkgqs($ocqawgquwsqioses, $ywmkwiwkosakssii["\x63\x75\x72\162\x65\156\x74"]); quwcqmyokicssyew: $ywmkwiwkosakssii[self::yusuiaeueqwieqqq] = $ocqawgquwsqioses; return $this->iuygowkemiiwqmiw("\143\165\163\x74\x6f\155", $ywmkwiwkosakssii, $ywmkwiwkosakssii); } public function kyseuiqusququcek() : array { return [self::gouqcwikiiygyasc => "\x70\141\147\x69\x6e\141\164\x69\x6f\156", self::qiyqwyiiwykeccmo => 1, self::ausqeuugegoygouq => 10, "\143\165\162\x72\145\x6e\x74" => 1, "\x6e\145\170\x74\x5f\x74\145\170\164" => __("\116\x65\x78\164", PR__CMN__COVER), "\160\x72\x65\x76\137\164\145\170\x74" => __("\x50\x72\145\166\151\x6f\165\163", PR__CMN__COVER), "\x63\165\x72\x72\x65\x6e\x74\x5f\164\x65\170\x74" => __("\x43\x75\162\x72\x65\156\x74", PR__CMN__COVER)]; } public function mucaeaumyoiqkgqs($ocqawgquwsqioses, $yeacayasgueouoqc) : array { $oammesyieqmwuwyi = []; if (!($ocqawgquwsqioses > 1)) { goto kqksuugcgsyeoayy; } if (!($yeacayasgueouoqc > 1)) { goto iqcogmsguwoikame; } $oammesyieqmwuwyi[__("\120\162\145\166\151\x6f\165\x73", PR__CMN__COVER)] = $yeacayasgueouoqc - 1; iqcogmsguwoikame: if ($ocqawgquwsqioses > 5) { goto mosqsmqimqgqoase; } $oammesyieqmwuwyi = $oammesyieqmwuwyi + ManipulateNumber::ywqgcuymeiswqyqc(1, $ocqawgquwsqioses); goto omugkkesagcyagmk; mosqsmqimqgqoase: $oammesyieqmwuwyi[1] = 1; if (!($yeacayasgueouoqc > 3)) { goto gimmuoqwckiseaik; } $oammesyieqmwuwyi["\x62\x65\146\157\162\x65\x2d\x64\157\164"] = "\x2e\x2e\x2e"; gimmuoqwckiseaik: if (!($yeacayasgueouoqc > 1)) { goto cmqucgoewuyieoyk; } $oammesyieqmwuwyi[$yeacayasgueouoqc - 1] = $yeacayasgueouoqc - 1; cmqucgoewuyieoyk: $oammesyieqmwuwyi[$yeacayasgueouoqc] = $yeacayasgueouoqc; if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto yqykqysmiquwoasu; } $oammesyieqmwuwyi[$yeacayasgueouoqc + 1] = $yeacayasgueouoqc + 1; yqykqysmiquwoasu: if (!($yeacayasgueouoqc < $ocqawgquwsqioses - 2)) { goto ayyweymyuuiauamo; } $oammesyieqmwuwyi["\141\146\x74\145\x72\x2d\x64\157\x74"] = "\56\x2e\56"; ayyweymyuuiauamo: $oammesyieqmwuwyi[$ocqawgquwsqioses] = $ocqawgquwsqioses; omugkkesagcyagmk: if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto ygcsmkuycoagwyou; } $oammesyieqmwuwyi[__("\116\145\x78\164", PR__CMN__COVER)] = $yeacayasgueouoqc + 1; ygcsmkuycoagwyou: kqksuugcgsyeoayy: return $oammesyieqmwuwyi; } }
