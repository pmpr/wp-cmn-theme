<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678038baa18e0             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce; use Pmpr\Common\Cover\Container; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Variation extends Container { protected array $fields = []; protected array $options = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\x6f\157\x63\157\155\x6d\x65\x72\143\145\x5f\x61\x76\141\x69\x6c\x61\142\x6c\145\x5f\166\x61\x72\x69\x61\164\x69\x6f\156", [$this, "\x61\x73\155\157\165\165\155\x61\x77\x6d\x63\x77\163\x63\x71\171"])->qcsmikeggeemccuu("\167\x6f\x6f\143\157\x6d\155\145\x72\143\x65\137\163\141\x76\x65\137\160\x72\x6f\144\x75\x63\x74\x5f\x76\x61\x72\x69\141\x74\x69\x6f\x6e", [$this, "\x73\x61\x76\x65"], 10, 2)->qcsmikeggeemccuu("\167\157\x6f\x63\x6f\x6d\x6d\x65\162\x63\x65\x5f\166\x61\162\151\x61\164\151\x6f\x6e\x5f\157\x70\164\151\157\156\163", [$this, "\x69\x69\x75\x65\147\x6b\x73\x79\143\x65\x6d\141\x79\x71\171\155"], 10, 3)->qcsmikeggeemccuu("\x77\157\x6f\143\x6f\x6d\155\x65\162\143\145\x5f\x70\x72\157\x64\x75\143\164\137\x61\146\164\x65\162\137\x76\x61\162\x69\x61\142\x6c\x65\x5f\x61\x74\x74\x72\151\142\165\x74\145\163", [$this, "\x71\x63\x77\x6b\x79\155\155\x67\141\x6b\141\x65\171\161\141\x71"], 10, 3); parent::wigskegsqequoeks(); } public function asmouumawmcwscqy($isweyuoisomqyaag) { return $this->ykqmgooyokusewai($this->uyaeumskacgcyskk(), $isweyuoisomqyaag); } public function ykqmgooyokusewai($ikgwqyuyckaewsow, $isweyuoisomqyaag) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $aokagokqyuysuksm = $this->mcogocsgqayggguu($aiowsaccomcoikus); $isweyuoisomqyaag[$aokagokqyuysuksm] = $this->eakquuwmkweaeygy($aiowsaccomcoikus, $isweyuoisomqyaag["\166\x61\x72\x69\141\x74\151\157\156\x5f\151\144"]); } return $isweyuoisomqyaag; } public function uyaeumskacgcyskk() : array { return $this->gkwkqmwweiawigae() + $this->ugmceccgwaaaigiy(); } public function save($yyoiikyymyqcwmky, $ciyackuwsqkoqese) { $oammesyieqmwuwyi = $this->uyaeumskacgcyskk(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $aokagokqyuysuksm = $this->mcogocsgqayggguu($igqsaukqcqscimok); if (isset($_POST[$aokagokqyuysuksm][$ciyackuwsqkoqese])) { $seumokooiykcomco->ksmqawcowkmegigw($aokagokqyuysuksm, $_POST[$aokagokqyuysuksm][$ciyackuwsqkoqese], $yyoiikyymyqcwmky); } else { $seumokooiykcomco->smqukgcyacswysqa($aokagokqyuysuksm, $yyoiikyymyqcwmky); } } } public function iiuegksycemayqym($qgqgaykggoemycsk, $icwicymcioeyeyek, $isweyuoisomqyaag) { $this->iuaucuookgoqiiio($this->gkwkqmwweiawigae(), $qgqgaykggoemycsk, $isweyuoisomqyaag); } public function qcwkymmgakaeyqaq($qgqgaykggoemycsk, $icwicymcioeyeyek, $isweyuoisomqyaag) { $this->iuaucuookgoqiiio($this->ugmceccgwaaaigiy(), $qgqgaykggoemycsk, $isweyuoisomqyaag); } public function iuaucuookgoqiiio($ikgwqyuyckaewsow, $qgqgaykggoemycsk, $isweyuoisomqyaag) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $eqgoocgaqwqcimie = $this->eakquuwmkweaeygy($aiowsaccomcoikus, $isweyuoisomqyaag); $eukwicwqggokmweg = "\x5b{$qgqgaykggoemycsk}\135"; $nsmgceoqaqogqmuw = ''; if ($aiowsaccomcoikus instanceof Field) { $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie)->ggiaseqygioygumq($aiowsaccomcoikus->mwikyscisascoeea() . $eukwicwqggokmweg); $nsmgceoqaqogqmuw = $aiowsaccomcoikus->render(); } else { if (is_array($aiowsaccomcoikus)) { $aiowsaccomcoikus[Constants::ciyoccqkiamemcmm] = $eqgoocgaqwqcimie; $aiowsaccomcoikus[Constants::gouqcwikiiygyasc] .= $eukwicwqggokmweg; switch ($gkyciwoiiisgywcs->get($aiowsaccomcoikus, Constants::squoamkioomemiyi)) { case Constants::semqugiuwygamias: $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wikusamwomuogoau()->uwyscmkeyeuqyukk($aiowsaccomcoikus); break; } } } echo $nsmgceoqaqogqmuw; } } public function mcogocsgqayggguu($aiowsaccomcoikus) { $aokagokqyuysuksm = null; if ($aiowsaccomcoikus instanceof Field) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); } else { if (is_array($aiowsaccomcoikus)) { $aokagokqyuysuksm = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aiowsaccomcoikus, Constants::gouqcwikiiygyasc); } } return $aokagokqyuysuksm; } public function qeaaoyowyqkmusca($aiowsaccomcoikus) { $sqeykgyoooqysmca = null; if ($aiowsaccomcoikus instanceof Field) { $sqeykgyoooqysmca = $aiowsaccomcoikus->gueasuouwqysmomu(); } else { if (is_array($aiowsaccomcoikus)) { $sqeykgyoooqysmca = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aiowsaccomcoikus, Constants::squoamkioomemiyi); } } return $sqeykgyoooqysmca; } public function eakquuwmkweaeygy($aiowsaccomcoikus, $isweyuoisomqyaag) { $eqgoocgaqwqcimie = ''; if ($eywayoukkqcgaski = $this->mcogocsgqayggguu($aiowsaccomcoikus)) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw($eywayoukkqcgaski, $isweyuoisomqyaag, true); } return $eqgoocgaqwqcimie; } public function gkwkqmwweiawigae() : array { if (!$this->options) { $this->options = (array) $this->ocksiywmkyaqseou("\167\x6f\x6f\143\x6f\155\x6d\x65\162\143\145\x5f\166\x61\x72\x69\x61\164\x69\157\156\137\x6f\x70\164\151\157\156\163", []); } return $this->options; } public function ugmceccgwaaaigiy() : array { if (!$this->fields) { $ikgwqyuyckaewsow = []; $wsaagogyucegecck = (array) $this->ocksiywmkyaqseou("\167\157\157\x63\157\155\155\x65\162\143\145\137\x76\141\x72\151\x61\x74\151\x6f\x6e\x5f\x69\x6e\x64\151\x63\141\x74\157\x72\x5f\146\151\x65\x6c\144\137\157\x70\x74\x69\157\x6e\163", []); if ($wsaagogyucegecck) { $ikgwqyuyckaewsow[] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec(Constants::osiiyqycakssssuc)->gswweykyogmsyawy(__("\111\x6e\144\x69\143\141\x74\x6f\162", PR__CMN__COVER))->oikgogcweiiaocka()->acauweqyyugwisqc($wsaagogyucegecck); } $this->fields = (array) $this->ocksiywmkyaqseou("\x77\x6f\x6f\x63\x6f\x6d\x6d\145\162\x63\x65\x5f\x76\x61\162\x69\141\164\x69\x6f\156\137\146\x69\x65\154\144\163", $ikgwqyuyckaewsow); } return $this->fields; } }
