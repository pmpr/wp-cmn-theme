<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62b851b2b1962             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Pagination; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateNumber; class Custom extends Common { protected ?string $type = "\x63\x75\x73\164\x6f\155"; public function kooycocagkkmaiay($ywmkwiwkosakssii = []) { if ($ywmkwiwkosakssii[self::ausqeuugegoygouq] > 0) { goto samwkqgwouggsguc; } $ocqawgquwsqioses = []; goto wyuemgggaqogsmsq; samwkqgwouggsguc: $ocqawgquwsqioses = ceil(intval($ywmkwiwkosakssii[self::qiyqwyiiwykeccmo]) / intval($ywmkwiwkosakssii[self::ausqeuugegoygouq])); $ocqawgquwsqioses = self::mucaeaumyoiqkgqs($ocqawgquwsqioses, $ywmkwiwkosakssii["\x63\x75\x72\162\145\156\x74"]); wyuemgggaqogsmsq: $ywmkwiwkosakssii[self::yusuiaeueqwieqqq] = $ocqawgquwsqioses; return $this->iuygowkemiiwqmiw("\143\x75\x73\x74\157\155", $ywmkwiwkosakssii, $ywmkwiwkosakssii); } public function kyseuiqusququcek() : array { return [self::gouqcwikiiygyasc => "\x70\x61\147\151\x6e\x61\164\x69\x6f\x6e", self::qiyqwyiiwykeccmo => 1, self::ausqeuugegoygouq => 10, "\143\165\x72\x72\145\156\164" => 1, "\156\x65\x78\164\137\164\145\170\x74" => __("\x4e\145\170\164", PR__CMN__COVER), "\x70\162\x65\166\137\x74\145\x78\164" => __("\120\162\x65\x76\151\x6f\165\163", PR__CMN__COVER), "\x63\x75\x72\x72\x65\x6e\x74\x5f\x74\x65\x78\164" => __("\x43\x75\162\162\145\156\164", PR__CMN__COVER)]; } public function mucaeaumyoiqkgqs($ocqawgquwsqioses, $yeacayasgueouoqc) : array { $oammesyieqmwuwyi = []; if (!($ocqawgquwsqioses > 1)) { goto aomysykcgikegiau; } if (!($yeacayasgueouoqc > 1)) { goto guykyqecgswcsmws; } $oammesyieqmwuwyi[__("\x50\x72\145\166\x69\x6f\x75\x73", PR__CMN__COVER)] = $yeacayasgueouoqc - 1; guykyqecgswcsmws: if ($ocqawgquwsqioses > 5) { goto ogsaaqsaogcqiouy; } $oammesyieqmwuwyi = $oammesyieqmwuwyi + ManipulateNumber::ywqgcuymeiswqyqc(1, $ocqawgquwsqioses); goto iwekmyyccgiyuecc; ogsaaqsaogcqiouy: $oammesyieqmwuwyi[1] = 1; if (!($yeacayasgueouoqc > 3)) { goto kkumywowcoycymeo; } $oammesyieqmwuwyi["\142\x65\x66\157\x72\x65\x2d\144\157\164"] = "\56\56\x2e"; kkumywowcoycymeo: if (!($yeacayasgueouoqc > 1)) { goto miweggwqeiaeweia; } $oammesyieqmwuwyi[$yeacayasgueouoqc - 1] = $yeacayasgueouoqc - 1; miweggwqeiaeweia: $oammesyieqmwuwyi[$yeacayasgueouoqc] = $yeacayasgueouoqc; if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto kqqiegkuqagcqsya; } $oammesyieqmwuwyi[$yeacayasgueouoqc + 1] = $yeacayasgueouoqc + 1; kqqiegkuqagcqsya: if (!($yeacayasgueouoqc < $ocqawgquwsqioses - 2)) { goto ousiuuwgwkiyikyq; } $oammesyieqmwuwyi["\x61\x66\x74\x65\x72\55\144\x6f\x74"] = "\56\56\x2e"; ousiuuwgwkiyikyq: $oammesyieqmwuwyi[$ocqawgquwsqioses] = $ocqawgquwsqioses; iwekmyyccgiyuecc: if (!($yeacayasgueouoqc < $ocqawgquwsqioses)) { goto ikqqskkqqwmwssoo; } $oammesyieqmwuwyi[__("\x4e\x65\170\164", PR__CMN__COVER)] = $yeacayasgueouoqc + 1; ikqqskkqqwmwssoo: aomysykcgikegiau: return $oammesyieqmwuwyi; } }
