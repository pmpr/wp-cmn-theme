<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63fe352cd71f1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Pagination; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateNumber; class Custom extends Common { protected ?string $type = "\x63\x75\163\x74\x6f\155"; public function kooycocagkkmaiay($ywmkwiwkosakssii = []) { if ($ywmkwiwkosakssii[self::ausqeuugegoygouq] > 0) { goto aquqkiggamaoegoo; } $ocqawgquwsqioses = []; goto mykiyqcqiegkiqys; aquqkiggamaoegoo: $ocqawgquwsqioses = ceil(intval($ywmkwiwkosakssii[self::qiyqwyiiwykeccmo]) / intval($ywmkwiwkosakssii[self::ausqeuugegoygouq])); $ocqawgquwsqioses = self::mucaeaumyoiqkgqs($ocqawgquwsqioses, $ywmkwiwkosakssii["\143\x75\x72\162\x65\x6e\x74"]); mykiyqcqiegkiqys: $ywmkwiwkosakssii[self::yusuiaeueqwieqqq] = $ocqawgquwsqioses; return $this->iuygowkemiiwqmiw("\143\165\x73\164\157\x6d", $ywmkwiwkosakssii, $ywmkwiwkosakssii); } public function kyseuiqusququcek() : array { return [self::gouqcwikiiygyasc => "\x70\x61\147\151\156\141\164\151\157\x6e", self::qiyqwyiiwykeccmo => 1, self::ausqeuugegoygouq => 10, "\143\x75\x72\162\145\x6e\x74" => 1, "\156\145\170\164\x5f\164\x65\x78\x74" => __("\116\x65\x78\x74", PR__CMN__COVER), "\160\162\145\x76\x5f\164\145\170\x74" => __("\x50\162\145\x76\151\157\165\163", PR__CMN__COVER), "\143\x75\x72\x72\145\x6e\164\x5f\x74\x65\x78\164" => __("\x43\x75\162\162\x65\x6e\x74", PR__CMN__COVER)]; } public function mucaeaumyoiqkgqs($ocqawgquwsqioses, $yeacayasgueouoqc) : array { $oammesyieqmwuwyi = []; if (!($ocqawgquwsqioses > 1)) { goto gkqiqaqecmoogmaa; } if (!($yeacayasgueouoqc > 1)) { goto agemwookwseyycqo; } $oammesyieqmwuwyi[__("\120\162\x65\166\151\x6f\x75\163", PR__CMN__COVER)] = $yeacayasgueouoqc - 1; agemwookwseyycqo: if ($ocqawgquwsqioses > 5) { goto qwemkcoaseywkuuc; } $oammesyieqmwuwyi = $oammesyieqmwuwyi + ManipulateNumber::ywqgcuymeiswqyqc(1, $ocqawgquwsqioses); goto mqimkwickkgqqeoi; qwemkcoaseywkuuc: $oammesyieqmwuwyi[1] = 1; if (!($yeacayasgueouoqc > 3)) { goto cquecqekuucwoumw; } $oammesyieqmwuwyi["\142\145\146\x6f\162\145\x2d\144\x6f\x74"] = "\x2e\56\x2e"; cquecqekuucwoumw: if (!($yeacayasgueouoqc > 1)) { goto koiscokkkaimiecq; } $oammesyieqmwuwyi[$yeacayasgueouoqc - 1] = $yeacayasgueouoqc - 1; koiscokkkaimiecq: $oammesyieqmwuwyi[$yeacayasgueouoqc] = $yeacayasgueouoqc; if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto owuuuiekkaeoeacq; } $oammesyieqmwuwyi[$yeacayasgueouoqc + 1] = $yeacayasgueouoqc + 1; owuuuiekkaeoeacq: if (!($yeacayasgueouoqc < $ocqawgquwsqioses - 2)) { goto saauykgakaeiyoua; } $oammesyieqmwuwyi["\141\x66\164\x65\x72\55\x64\x6f\164"] = "\56\56\x2e"; saauykgakaeiyoua: $oammesyieqmwuwyi[$ocqawgquwsqioses] = $ocqawgquwsqioses; mqimkwickkgqqeoi: if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto kwyimqumkuuyaiku; } $oammesyieqmwuwyi[__("\116\x65\x78\164", PR__CMN__COVER)] = $yeacayasgueouoqc + 1; kwyimqumkuuyaiku: gkqiqaqecmoogmaa: return $oammesyieqmwuwyi; } }
