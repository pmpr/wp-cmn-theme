<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ee0eaf0b376             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Pagination; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateNumber; class Custom extends Common { protected ?string $type = "\143\x75\163\x74\157\x6d"; public function kooycocagkkmaiay($ywmkwiwkosakssii = []) { if ($ywmkwiwkosakssii[self::ausqeuugegoygouq] > 0) { goto qkcsykuocwuyaice; } $ocqawgquwsqioses = []; goto uoeasoimegouymka; qkcsykuocwuyaice: $ocqawgquwsqioses = ceil(intval($ywmkwiwkosakssii[self::qiyqwyiiwykeccmo]) / intval($ywmkwiwkosakssii[self::ausqeuugegoygouq])); $ocqawgquwsqioses = self::mucaeaumyoiqkgqs($ocqawgquwsqioses, $ywmkwiwkosakssii["\143\165\x72\x72\x65\156\164"]); uoeasoimegouymka: $ywmkwiwkosakssii[self::yusuiaeueqwieqqq] = $ocqawgquwsqioses; return $this->iuygowkemiiwqmiw("\x63\165\163\x74\157\155", $ywmkwiwkosakssii, $ywmkwiwkosakssii); } public function kyseuiqusququcek() : array { return [self::gouqcwikiiygyasc => "\160\x61\x67\x69\x6e\141\x74\151\157\156", self::qiyqwyiiwykeccmo => 1, self::ausqeuugegoygouq => 10, "\x63\x75\x72\162\x65\156\164" => 1, "\x6e\145\x78\164\137\x74\x65\170\x74" => __("\x4e\x65\x78\164", PR__CMN__COVER), "\x70\162\x65\166\x5f\x74\145\x78\164" => __("\120\162\x65\166\x69\157\x75\163", PR__CMN__COVER), "\143\165\162\162\x65\x6e\164\137\164\145\170\x74" => __("\103\165\x72\x72\145\156\164", PR__CMN__COVER)]; } public function mucaeaumyoiqkgqs($ocqawgquwsqioses, $yeacayasgueouoqc) : array { $oammesyieqmwuwyi = []; if (!($ocqawgquwsqioses > 1)) { goto oyiuemaaykgkqqam; } if (!($yeacayasgueouoqc > 1)) { goto egsycocugqyyswsi; } $oammesyieqmwuwyi[__("\x50\162\x65\x76\x69\x6f\165\x73", PR__CMN__COVER)] = $yeacayasgueouoqc - 1; egsycocugqyyswsi: if ($ocqawgquwsqioses > 5) { goto cgmgqucewwssmicq; } $oammesyieqmwuwyi = $oammesyieqmwuwyi + ManipulateNumber::ywqgcuymeiswqyqc(1, $ocqawgquwsqioses); goto mkomygccqkmkumsi; cgmgqucewwssmicq: $oammesyieqmwuwyi[1] = 1; if (!($yeacayasgueouoqc > 3)) { goto qiaimmucomukkeka; } $oammesyieqmwuwyi["\142\145\146\157\162\145\x2d\144\157\x74"] = "\x2e\x2e\56"; qiaimmucomukkeka: if (!($yeacayasgueouoqc > 1)) { goto aoquoewagkseayug; } $oammesyieqmwuwyi[$yeacayasgueouoqc - 1] = $yeacayasgueouoqc - 1; aoquoewagkseayug: $oammesyieqmwuwyi[$yeacayasgueouoqc] = $yeacayasgueouoqc; if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto osuscoaaomwcqkew; } $oammesyieqmwuwyi[$yeacayasgueouoqc + 1] = $yeacayasgueouoqc + 1; osuscoaaomwcqkew: if (!($yeacayasgueouoqc < $ocqawgquwsqioses - 2)) { goto ciucewqgyoiouesq; } $oammesyieqmwuwyi["\141\x66\x74\145\x72\55\144\157\164"] = "\56\x2e\x2e"; ciucewqgyoiouesq: $oammesyieqmwuwyi[$ocqawgquwsqioses] = $ocqawgquwsqioses; mkomygccqkmkumsi: if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto ussceseaimqywuiy; } $oammesyieqmwuwyi[__("\x4e\145\170\x74", PR__CMN__COVER)] = $yeacayasgueouoqc + 1; ussceseaimqywuiy: oyiuemaaykgkqqam: return $oammesyieqmwuwyi; } }
