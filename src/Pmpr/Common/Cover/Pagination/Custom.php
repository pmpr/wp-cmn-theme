<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e8dcb1ec021             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Pagination; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateNumber; class Custom extends Common { protected ?string $type = "\x63\165\163\164\x6f\x6d"; public function kooycocagkkmaiay($ywmkwiwkosakssii = []) { if ($ywmkwiwkosakssii[self::ausqeuugegoygouq] > 0) { goto uimeeckqksqeekqq; } $ocqawgquwsqioses = []; goto iuuuususuuuaieem; uimeeckqksqeekqq: $ocqawgquwsqioses = ceil(intval($ywmkwiwkosakssii[self::qiyqwyiiwykeccmo]) / intval($ywmkwiwkosakssii[self::ausqeuugegoygouq])); $ocqawgquwsqioses = self::mucaeaumyoiqkgqs($ocqawgquwsqioses, $ywmkwiwkosakssii["\143\165\162\x72\x65\x6e\164"]); iuuuususuuuaieem: $ywmkwiwkosakssii[self::yusuiaeueqwieqqq] = $ocqawgquwsqioses; return $this->iuygowkemiiwqmiw("\143\165\x73\x74\157\x6d", $ywmkwiwkosakssii, $ywmkwiwkosakssii); } public function kyseuiqusququcek() : array { return [self::gouqcwikiiygyasc => "\x70\141\147\151\156\x61\164\x69\157\156", self::qiyqwyiiwykeccmo => 1, self::ausqeuugegoygouq => 10, "\x63\x75\x72\162\145\x6e\x74" => 1, "\x6e\x65\x78\164\137\x74\145\x78\164" => __("\x4e\145\x78\164", PR__CMN__COVER), "\x70\x72\145\166\137\164\145\x78\x74" => __("\x50\x72\x65\166\151\x6f\x75\x73", PR__CMN__COVER), "\x63\x75\162\162\x65\x6e\x74\x5f\x74\x65\x78\164" => __("\103\165\x72\162\x65\x6e\x74", PR__CMN__COVER)]; } public function mucaeaumyoiqkgqs($ocqawgquwsqioses, $yeacayasgueouoqc) : array { $oammesyieqmwuwyi = []; if (!($ocqawgquwsqioses > 1)) { goto oyeyomcgkmgymogq; } if (!($yeacayasgueouoqc > 1)) { goto kocqqoyymosmuksu; } $oammesyieqmwuwyi[__("\x50\x72\145\x76\x69\x6f\165\x73", PR__CMN__COVER)] = $yeacayasgueouoqc - 1; kocqqoyymosmuksu: if ($ocqawgquwsqioses > 5) { goto ieqesiiageaauiuw; } $oammesyieqmwuwyi = $oammesyieqmwuwyi + ManipulateNumber::ywqgcuymeiswqyqc(1, $ocqawgquwsqioses); goto gamqcwuwkikwqoay; ieqesiiageaauiuw: $oammesyieqmwuwyi[1] = 1; if (!($yeacayasgueouoqc > 3)) { goto uqokiksoqcwwqgio; } $oammesyieqmwuwyi["\142\x65\146\x6f\162\x65\x2d\x64\x6f\164"] = "\56\x2e\56"; uqokiksoqcwwqgio: if (!($yeacayasgueouoqc > 1)) { goto qukocuwgakemmyga; } $oammesyieqmwuwyi[$yeacayasgueouoqc - 1] = $yeacayasgueouoqc - 1; qukocuwgakemmyga: $oammesyieqmwuwyi[$yeacayasgueouoqc] = $yeacayasgueouoqc; if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto sioekkmekwygemyc; } $oammesyieqmwuwyi[$yeacayasgueouoqc + 1] = $yeacayasgueouoqc + 1; sioekkmekwygemyc: if (!($yeacayasgueouoqc < $ocqawgquwsqioses - 2)) { goto yiowgigkkwsoqcci; } $oammesyieqmwuwyi["\141\x66\164\x65\x72\55\x64\x6f\x74"] = "\56\56\x2e"; yiowgigkkwsoqcci: $oammesyieqmwuwyi[$ocqawgquwsqioses] = $ocqawgquwsqioses; gamqcwuwkikwqoay: if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto mscyggqcesgqqksu; } $oammesyieqmwuwyi[__("\x4e\x65\x78\x74", PR__CMN__COVER)] = $yeacayasgueouoqc + 1; mscyggqcesgqqksu: oyeyomcgkmgymogq: return $oammesyieqmwuwyi; } }
