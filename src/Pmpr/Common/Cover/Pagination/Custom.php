<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638c7bcb05372             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Pagination; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateNumber; class Custom extends Common { protected ?string $type = "\x63\165\x73\x74\x6f\155"; public function kooycocagkkmaiay($ywmkwiwkosakssii = []) { if ($ywmkwiwkosakssii[self::ausqeuugegoygouq] > 0) { goto eoyiumycaigawmmc; } $ocqawgquwsqioses = []; goto yuoeumyiuqkuouey; eoyiumycaigawmmc: $ocqawgquwsqioses = ceil(intval($ywmkwiwkosakssii[self::qiyqwyiiwykeccmo]) / intval($ywmkwiwkosakssii[self::ausqeuugegoygouq])); $ocqawgquwsqioses = self::mucaeaumyoiqkgqs($ocqawgquwsqioses, $ywmkwiwkosakssii["\x63\165\162\162\145\156\164"]); yuoeumyiuqkuouey: $ywmkwiwkosakssii[self::yusuiaeueqwieqqq] = $ocqawgquwsqioses; return $this->iuygowkemiiwqmiw("\143\165\x73\x74\157\x6d", $ywmkwiwkosakssii, $ywmkwiwkosakssii); } public function kyseuiqusququcek() : array { return [self::gouqcwikiiygyasc => "\x70\x61\x67\151\156\141\x74\151\x6f\x6e", self::qiyqwyiiwykeccmo => 1, self::ausqeuugegoygouq => 10, "\143\165\162\x72\x65\x6e\x74" => 1, "\x6e\x65\x78\x74\137\x74\x65\170\x74" => __("\116\145\170\164", PR__CMN__COVER), "\160\x72\145\166\137\164\145\x78\164" => __("\x50\162\x65\166\x69\157\x75\163", PR__CMN__COVER), "\143\165\x72\x72\145\156\x74\137\164\x65\x78\x74" => __("\x43\165\x72\x72\145\156\164", PR__CMN__COVER)]; } public function mucaeaumyoiqkgqs($ocqawgquwsqioses, $yeacayasgueouoqc) : array { $oammesyieqmwuwyi = []; if (!($ocqawgquwsqioses > 1)) { goto kqyoakickmseyyeq; } if (!($yeacayasgueouoqc > 1)) { goto eyiwqgqcsqakwqss; } $oammesyieqmwuwyi[__("\120\162\x65\166\x69\157\x75\x73", PR__CMN__COVER)] = $yeacayasgueouoqc - 1; eyiwqgqcsqakwqss: if ($ocqawgquwsqioses > 5) { goto wgiygcmqaokywuqa; } $oammesyieqmwuwyi = $oammesyieqmwuwyi + ManipulateNumber::ywqgcuymeiswqyqc(1, $ocqawgquwsqioses); goto iauwuugggmegwisk; wgiygcmqaokywuqa: $oammesyieqmwuwyi[1] = 1; if (!($yeacayasgueouoqc > 3)) { goto sckioayasmkcoeoo; } $oammesyieqmwuwyi["\x62\145\x66\x6f\162\145\55\x64\x6f\164"] = "\x2e\x2e\x2e"; sckioayasmkcoeoo: if (!($yeacayasgueouoqc > 1)) { goto yssqmyoaokkksukc; } $oammesyieqmwuwyi[$yeacayasgueouoqc - 1] = $yeacayasgueouoqc - 1; yssqmyoaokkksukc: $oammesyieqmwuwyi[$yeacayasgueouoqc] = $yeacayasgueouoqc; if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto ooqksueucyagyuoe; } $oammesyieqmwuwyi[$yeacayasgueouoqc + 1] = $yeacayasgueouoqc + 1; ooqksueucyagyuoe: if (!($yeacayasgueouoqc < $ocqawgquwsqioses - 2)) { goto osmmoyqkqoucsgow; } $oammesyieqmwuwyi["\141\x66\164\145\162\x2d\144\157\164"] = "\56\x2e\56"; osmmoyqkqoucsgow: $oammesyieqmwuwyi[$ocqawgquwsqioses] = $ocqawgquwsqioses; iauwuugggmegwisk: if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto aukucaieceiwesmm; } $oammesyieqmwuwyi[__("\116\145\x78\164", PR__CMN__COVER)] = $yeacayasgueouoqc + 1; aukucaieceiwesmm: kqyoakickmseyyeq: return $oammesyieqmwuwyi; } }
