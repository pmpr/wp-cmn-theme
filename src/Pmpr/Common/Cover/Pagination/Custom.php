<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             647450375b2fc             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Pagination; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateNumber; class Custom extends Common { protected ?string $type = "\x63\165\163\x74\x6f\155"; public function kooycocagkkmaiay($ywmkwiwkosakssii = []) { if ($ywmkwiwkosakssii[self::ausqeuugegoygouq] > 0) { goto egkeqqgakieyimuq; } $ocqawgquwsqioses = []; goto cakuguiciaiaeukg; egkeqqgakieyimuq: $ocqawgquwsqioses = ceil(intval($ywmkwiwkosakssii[self::qiyqwyiiwykeccmo]) / intval($ywmkwiwkosakssii[self::ausqeuugegoygouq])); $ocqawgquwsqioses = self::mucaeaumyoiqkgqs($ocqawgquwsqioses, $ywmkwiwkosakssii["\143\x75\162\162\145\156\164"]); cakuguiciaiaeukg: $ywmkwiwkosakssii[self::yusuiaeueqwieqqq] = $ocqawgquwsqioses; return $this->iuygowkemiiwqmiw("\x63\x75\163\164\157\x6d", $ywmkwiwkosakssii, $ywmkwiwkosakssii); } public function kyseuiqusququcek() : array { return [self::gouqcwikiiygyasc => "\160\141\147\x69\156\141\164\x69\157\x6e", self::qiyqwyiiwykeccmo => 1, self::ausqeuugegoygouq => 10, "\x63\x75\162\x72\x65\156\164" => 1, "\156\145\x78\x74\137\164\145\170\x74" => __("\116\x65\170\164", PR__CMN__COVER), "\x70\162\145\x76\137\164\x65\170\x74" => __("\120\162\145\x76\x69\157\165\x73", PR__CMN__COVER), "\x63\x75\x72\162\145\x6e\164\137\x74\x65\x78\x74" => __("\x43\x75\162\x72\145\x6e\164", PR__CMN__COVER)]; } public function mucaeaumyoiqkgqs($ocqawgquwsqioses, $yeacayasgueouoqc) : array { $oammesyieqmwuwyi = []; if (!($ocqawgquwsqioses > 1)) { goto ysweqawmawicakeo; } if (!($yeacayasgueouoqc > 1)) { goto wswikooyuaaouqgk; } $oammesyieqmwuwyi[__("\x50\162\x65\x76\x69\x6f\165\x73", PR__CMN__COVER)] = $yeacayasgueouoqc - 1; wswikooyuaaouqgk: if ($ocqawgquwsqioses > 5) { goto gsqcoqqsioiyoykq; } $oammesyieqmwuwyi = $oammesyieqmwuwyi + ManipulateNumber::ywqgcuymeiswqyqc(1, $ocqawgquwsqioses); goto goaowamiyyamueiw; gsqcoqqsioiyoykq: $oammesyieqmwuwyi[1] = 1; if (!($yeacayasgueouoqc > 3)) { goto awwaiioyywmokwsm; } $oammesyieqmwuwyi["\142\145\146\x6f\x72\x65\55\144\157\164"] = "\56\x2e\56"; awwaiioyywmokwsm: if (!($yeacayasgueouoqc > 1)) { goto ckwmkquuyyugigom; } $oammesyieqmwuwyi[$yeacayasgueouoqc - 1] = $yeacayasgueouoqc - 1; ckwmkquuyyugigom: $oammesyieqmwuwyi[$yeacayasgueouoqc] = $yeacayasgueouoqc; if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto cumeycwmuuqawwyu; } $oammesyieqmwuwyi[$yeacayasgueouoqc + 1] = $yeacayasgueouoqc + 1; cumeycwmuuqawwyu: if (!($yeacayasgueouoqc < $ocqawgquwsqioses - 2)) { goto uaicwcqwauosmsqm; } $oammesyieqmwuwyi["\x61\146\x74\145\162\55\x64\157\164"] = "\x2e\56\x2e"; uaicwcqwauosmsqm: $oammesyieqmwuwyi[$ocqawgquwsqioses] = $ocqawgquwsqioses; goaowamiyyamueiw: if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto iaomqomgiwiegoca; } $oammesyieqmwuwyi[__("\116\145\170\164", PR__CMN__COVER)] = $yeacayasgueouoqc + 1; iaomqomgiwiegoca: ysweqawmawicakeo: return $oammesyieqmwuwyi; } }
