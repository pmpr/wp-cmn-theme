<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ce11d2cceaf             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Pagination; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateNumber; class Custom extends Common { protected ?string $type = "\x63\x75\x73\164\x6f\x6d"; public function kooycocagkkmaiay($ywmkwiwkosakssii = []) { if ($ywmkwiwkosakssii[self::ausqeuugegoygouq] > 0) { goto agkmiayuawacakau; } $ocqawgquwsqioses = []; goto syuaummumssgwwee; agkmiayuawacakau: $ocqawgquwsqioses = ceil(intval($ywmkwiwkosakssii[self::qiyqwyiiwykeccmo]) / intval($ywmkwiwkosakssii[self::ausqeuugegoygouq])); $ocqawgquwsqioses = self::mucaeaumyoiqkgqs($ocqawgquwsqioses, $ywmkwiwkosakssii["\x63\x75\x72\x72\145\x6e\x74"]); syuaummumssgwwee: $ywmkwiwkosakssii[self::yusuiaeueqwieqqq] = $ocqawgquwsqioses; return $this->iuygowkemiiwqmiw("\143\165\163\164\157\155", $ywmkwiwkosakssii, $ywmkwiwkosakssii); } public function kyseuiqusququcek() : array { return [self::gouqcwikiiygyasc => "\160\141\x67\151\156\141\164\x69\157\x6e", self::qiyqwyiiwykeccmo => 1, self::ausqeuugegoygouq => 10, "\x63\x75\162\x72\145\x6e\x74" => 1, "\156\145\x78\x74\x5f\164\x65\170\164" => __("\x4e\x65\170\x74", PR__CMN__COVER), "\160\x72\145\x76\137\164\145\x78\164" => __("\120\162\x65\x76\x69\157\165\x73", PR__CMN__COVER), "\x63\x75\x72\162\145\156\x74\x5f\x74\145\170\x74" => __("\x43\x75\162\162\145\156\164", PR__CMN__COVER)]; } public function mucaeaumyoiqkgqs($ocqawgquwsqioses, $yeacayasgueouoqc) : array { $oammesyieqmwuwyi = []; if (!($ocqawgquwsqioses > 1)) { goto cgmgqucewwssmicq; } if (!($yeacayasgueouoqc > 1)) { goto oocuemosmeeekgas; } $oammesyieqmwuwyi[__("\120\162\x65\166\x69\157\x75\163", PR__CMN__COVER)] = $yeacayasgueouoqc - 1; oocuemosmeeekgas: if ($ocqawgquwsqioses > 5) { goto aoquoewagkseayug; } $oammesyieqmwuwyi = $oammesyieqmwuwyi + ManipulateNumber::ywqgcuymeiswqyqc(1, $ocqawgquwsqioses); goto osuscoaaomwcqkew; aoquoewagkseayug: $oammesyieqmwuwyi[1] = 1; if (!($yeacayasgueouoqc > 3)) { goto qkcsykuocwuyaice; } $oammesyieqmwuwyi["\142\145\146\157\162\x65\x2d\144\157\164"] = "\x2e\56\x2e"; qkcsykuocwuyaice: if (!($yeacayasgueouoqc > 1)) { goto uoeasoimegouymka; } $oammesyieqmwuwyi[$yeacayasgueouoqc - 1] = $yeacayasgueouoqc - 1; uoeasoimegouymka: $oammesyieqmwuwyi[$yeacayasgueouoqc] = $yeacayasgueouoqc; if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto egsycocugqyyswsi; } $oammesyieqmwuwyi[$yeacayasgueouoqc + 1] = $yeacayasgueouoqc + 1; egsycocugqyyswsi: if (!($yeacayasgueouoqc < $ocqawgquwsqioses - 2)) { goto qiaimmucomukkeka; } $oammesyieqmwuwyi["\x61\146\x74\145\x72\x2d\144\x6f\x74"] = "\56\56\x2e"; qiaimmucomukkeka: $oammesyieqmwuwyi[$ocqawgquwsqioses] = $ocqawgquwsqioses; osuscoaaomwcqkew: if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto ciucewqgyoiouesq; } $oammesyieqmwuwyi[__("\116\145\x78\x74", PR__CMN__COVER)] = $yeacayasgueouoqc + 1; ciucewqgyoiouesq: cgmgqucewwssmicq: return $oammesyieqmwuwyi; } }
