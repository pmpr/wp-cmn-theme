<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6224e46415a81             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Theme\Pagination; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateNumber; class Custom extends Common { protected ?string $type = "\x63\x75\163\164\x6f\x6d"; public function kooycocagkkmaiay($ywmkwiwkosakssii = []) { if ($ywmkwiwkosakssii[self::ausqeuugegoygouq] > 0) { goto kiwqkcaekqqyuegq; } $ocqawgquwsqioses = []; goto quwcqmyokicssyew; kiwqkcaekqqyuegq: $ocqawgquwsqioses = ceil(intval($ywmkwiwkosakssii[self::qiyqwyiiwykeccmo]) / intval($ywmkwiwkosakssii[self::ausqeuugegoygouq])); $ocqawgquwsqioses = self::mucaeaumyoiqkgqs($ocqawgquwsqioses, $ywmkwiwkosakssii["\x63\x75\x72\x72\x65\x6e\x74"]); quwcqmyokicssyew: $ywmkwiwkosakssii[self::yusuiaeueqwieqqq] = $ocqawgquwsqioses; return $this->iuygowkemiiwqmiw("\143\x75\x73\164\x6f\155", $ywmkwiwkosakssii, $ywmkwiwkosakssii); } public function kyseuiqusququcek() : array { return [self::gouqcwikiiygyasc => "\x70\x61\147\151\x6e\141\x74\x69\157\156", self::qiyqwyiiwykeccmo => 1, self::ausqeuugegoygouq => 10, "\143\165\162\x72\x65\x6e\164" => 1, "\x6e\x65\x78\x74\137\x74\145\170\164" => __("\116\145\x78\x74", PR__CMN__THEME), "\160\162\145\166\137\164\x65\170\x74" => __("\x50\x72\145\x76\151\157\x75\163", PR__CMN__THEME), "\143\165\162\162\x65\x6e\164\x5f\164\x65\x78\164" => __("\x43\165\162\162\x65\156\x74", PR__CMN__THEME)]; } public function mucaeaumyoiqkgqs($ocqawgquwsqioses, $yeacayasgueouoqc) : array { $oammesyieqmwuwyi = []; if (!($ocqawgquwsqioses > 1)) { goto kqksuugcgsyeoayy; } if (!($yeacayasgueouoqc > 1)) { goto iqcogmsguwoikame; } $oammesyieqmwuwyi[__("\x50\x72\x65\166\151\157\165\163", PR__CMN__THEME)] = $yeacayasgueouoqc - 1; iqcogmsguwoikame: if ($ocqawgquwsqioses > 5) { goto mosqsmqimqgqoase; } $oammesyieqmwuwyi = $oammesyieqmwuwyi + ManipulateNumber::ywqgcuymeiswqyqc(1, $ocqawgquwsqioses); goto omugkkesagcyagmk; mosqsmqimqgqoase: $oammesyieqmwuwyi[1] = 1; if (!($yeacayasgueouoqc > 3)) { goto gimmuoqwckiseaik; } $oammesyieqmwuwyi["\142\x65\146\x6f\162\145\x2d\x64\157\x74"] = "\x2e\x2e\56"; gimmuoqwckiseaik: if (!($yeacayasgueouoqc > 1)) { goto cmqucgoewuyieoyk; } $oammesyieqmwuwyi[$yeacayasgueouoqc - 1] = $yeacayasgueouoqc - 1; cmqucgoewuyieoyk: $oammesyieqmwuwyi[$yeacayasgueouoqc] = $yeacayasgueouoqc; if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto yqykqysmiquwoasu; } $oammesyieqmwuwyi[$yeacayasgueouoqc + 1] = $yeacayasgueouoqc + 1; yqykqysmiquwoasu: if (!($yeacayasgueouoqc < $ocqawgquwsqioses - 2)) { goto ayyweymyuuiauamo; } $oammesyieqmwuwyi["\x61\146\x74\x65\162\55\x64\157\164"] = "\x2e\56\x2e"; ayyweymyuuiauamo: $oammesyieqmwuwyi[$ocqawgquwsqioses] = $ocqawgquwsqioses; omugkkesagcyagmk: if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto ygcsmkuycoagwyou; } $oammesyieqmwuwyi[__("\x4e\145\170\164", PR__CMN__THEME)] = $yeacayasgueouoqc + 1; ygcsmkuycoagwyou: kqksuugcgsyeoayy: return $oammesyieqmwuwyi; } }
