<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63f695169f6fa             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Pagination; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateNumber; class Custom extends Common { protected ?string $type = "\143\x75\163\164\x6f\155"; public function kooycocagkkmaiay($ywmkwiwkosakssii = []) { if ($ywmkwiwkosakssii[self::ausqeuugegoygouq] > 0) { goto kicwiowcogmauwiy; } $ocqawgquwsqioses = []; goto cwswueuqoamqasya; kicwiowcogmauwiy: $ocqawgquwsqioses = ceil(intval($ywmkwiwkosakssii[self::qiyqwyiiwykeccmo]) / intval($ywmkwiwkosakssii[self::ausqeuugegoygouq])); $ocqawgquwsqioses = self::mucaeaumyoiqkgqs($ocqawgquwsqioses, $ywmkwiwkosakssii["\x63\x75\162\x72\x65\156\164"]); cwswueuqoamqasya: $ywmkwiwkosakssii[self::yusuiaeueqwieqqq] = $ocqawgquwsqioses; return $this->iuygowkemiiwqmiw("\x63\x75\163\164\x6f\x6d", $ywmkwiwkosakssii, $ywmkwiwkosakssii); } public function kyseuiqusququcek() : array { return [self::gouqcwikiiygyasc => "\x70\141\147\151\156\x61\x74\x69\157\156", self::qiyqwyiiwykeccmo => 1, self::ausqeuugegoygouq => 10, "\143\165\162\x72\x65\x6e\x74" => 1, "\x6e\145\x78\x74\x5f\x74\x65\170\164" => __("\x4e\x65\170\164", PR__CMN__COVER), "\x70\162\145\166\x5f\x74\145\170\164" => __("\x50\162\145\x76\x69\x6f\165\163", PR__CMN__COVER), "\143\x75\x72\162\x65\x6e\x74\x5f\164\145\170\164" => __("\103\x75\162\162\145\x6e\x74", PR__CMN__COVER)]; } public function mucaeaumyoiqkgqs($ocqawgquwsqioses, $yeacayasgueouoqc) : array { $oammesyieqmwuwyi = []; if (!($ocqawgquwsqioses > 1)) { goto koiscokkkaimiecq; } if (!($yeacayasgueouoqc > 1)) { goto kgmeiwiakwicgkkk; } $oammesyieqmwuwyi[__("\120\x72\x65\166\151\x6f\x75\x73", PR__CMN__COVER)] = $yeacayasgueouoqc - 1; kgmeiwiakwicgkkk: if ($ocqawgquwsqioses > 5) { goto mykiyqcqiegkiqys; } $oammesyieqmwuwyi = $oammesyieqmwuwyi + ManipulateNumber::ywqgcuymeiswqyqc(1, $ocqawgquwsqioses); goto agemwookwseyycqo; mykiyqcqiegkiqys: $oammesyieqmwuwyi[1] = 1; if (!($yeacayasgueouoqc > 3)) { goto suuskagowwgsouqw; } $oammesyieqmwuwyi["\142\x65\146\x6f\x72\145\55\144\x6f\x74"] = "\x2e\56\x2e"; suuskagowwgsouqw: if (!($yeacayasgueouoqc > 1)) { goto omykokikgocoikec; } $oammesyieqmwuwyi[$yeacayasgueouoqc - 1] = $yeacayasgueouoqc - 1; omykokikgocoikec: $oammesyieqmwuwyi[$yeacayasgueouoqc] = $yeacayasgueouoqc; if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto csieaismmmocyacu; } $oammesyieqmwuwyi[$yeacayasgueouoqc + 1] = $yeacayasgueouoqc + 1; csieaismmmocyacu: if (!($yeacayasgueouoqc < $ocqawgquwsqioses - 2)) { goto aquqkiggamaoegoo; } $oammesyieqmwuwyi["\x61\146\x74\145\x72\x2d\x64\157\x74"] = "\56\x2e\x2e"; aquqkiggamaoegoo: $oammesyieqmwuwyi[$ocqawgquwsqioses] = $ocqawgquwsqioses; agemwookwseyycqo: if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto cquecqekuucwoumw; } $oammesyieqmwuwyi[__("\116\x65\x78\164", PR__CMN__COVER)] = $yeacayasgueouoqc + 1; cquecqekuucwoumw: koiscokkkaimiecq: return $oammesyieqmwuwyi; } }
