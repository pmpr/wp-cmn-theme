<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae85a3b171             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Customizer\Segment; use Pmpr\Common\Foundation\Traits\ToArrayTrait; use Pmpr\Common\Cover\Customizer\Common; use WP_Customize_Manager; abstract class Segment extends Common { use ToArrayTrait; protected ?string $id = ''; protected ?string $type = ''; protected int $priority = 1; protected ?string $title = ''; protected $themeSupports = []; protected $activeCallbak = null; protected ?string $description = ''; protected ?string $capability = "\x6d\141\x6e\x61\147\x65\137\x6f\160\164\x69\x6f\x6e\163"; protected ?WP_Customize_Manager $manager = null; public function __construct(string $aokagokqyuysuksm, string $meqocwsecsywiiqs) { $this->id = $aokagokqyuysuksm; $this->title = $meqocwsecsywiiqs; parent::__construct(); } public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : self { $this->title = $meqocwsecsywiiqs; return $this; } public function mwikyscisascoeea() : ?string { return $this->id; } public function ggiaseqygioygumq(?string $aokagokqyuysuksm) : self { $this->id = $aokagokqyuysuksm; return $this; } public function gueasuouwqysmomu() : ?string { return $this->type; } public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self { $this->type = $sqeykgyoooqysmca; return $this; } public function jyumyyugiwwiqomk(int $sqqewmoeaekuyyas) : self { $this->priority = $sqqewmoeaekuyyas; return $this; } public function oakacewaaowkyeku($koiyuemsqissasyi) : self { $this->themeSupports = $koiyuemsqissasyi; return $this; } public function msmukkgygaokwiii(?callable $ecgmcyeiiqkcausa) : self { $this->activeCallbak = $ecgmcyeiiqkcausa; return $this; } public function gucwmccyimoagwcm(?string $ukwokcuqauuosmoo) : self { $this->description = $ukwokcuqauuosmoo; return $this; } public function womysscuckiacoua(?string $eogowigeyucaauig) : self { $this->capability = $eogowigeyucaauig; return $this; } public function aikqmgaaomwuqagm(?WP_Customize_Manager $eygsasmqycagyayw) : self { $this->manager = $eygsasmqycagyayw; return $this; } }
