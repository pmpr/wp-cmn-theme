<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b6b8a7124             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Media; use WP_Image_Editor_GD; require_once ABSPATH . WPINC . "\57\143\x6c\x61\x73\163\x2d\x77\x70\x2d\x69\x6d\x61\x67\145\x2d\x65\x64\x69\x74\157\x72\56\x70\x68\160"; require_once ABSPATH . WPINC . "\57\x63\x6c\x61\x73\163\x2d\167\x70\x2d\151\x6d\x61\147\x65\x2d\145\x64\x69\x74\157\162\x2d\147\144\x2e\x70\150\x70"; class Editor extends WP_Image_Editor_GD { const mqoakwwmgqqsesmq = 0.01; const keseeyikosacsoem = 1200; const euucyeauiyuyckco = 675; const uuquqqmsmeqyuasw = 1200; const scmawswkkcamgsos = 900; const eoksmcquaikkcyee = 1200; const kwsgiuceksisqqma = 1200; public function generate_filename($yuwymayicwwqiske = null, $dest_path = null, $uwumuuykwookaauo = null) { if (!$yuwymayicwwqiske) { $yuwymayicwwqiske = $this->get_suffix(); } $acyuemiyqmkmewku = explode("\x78", $yuwymayicwwqiske); $mwweeceqggqmogwk = ''; if (1 == get_option(Image::emskikwmugwkeegu) && 2 == count($acyuemiyqmkmewku) && !empty($acyuemiyqmkmewku[1])) { $acyuemiyqmkmewku[0] = (int) $acyuemiyqmkmewku[0]; $acyuemiyqmkmewku[1] = (int) $acyuemiyqmkmewku[1]; if (self::mqoakwwmgqqsesmq >= abs($acyuemiyqmkmewku[0] / $acyuemiyqmkmewku[1] - 16 / 9)) { if (self::keseeyikosacsoem <= $acyuemiyqmkmewku[0] && self::euucyeauiyuyckco <= $acyuemiyqmkmewku[1]) { $mwweeceqggqmogwk = "\x31\x36\x78\71"; } } elseif (self::mqoakwwmgqqsesmq >= abs($acyuemiyqmkmewku[0] / $acyuemiyqmkmewku[1] - 4 / 3)) { if (self::uuquqqmsmeqyuasw <= $acyuemiyqmkmewku[0] && self::scmawswkkcamgsos <= $acyuemiyqmkmewku[1]) { $mwweeceqggqmogwk = "\x34\x78\63"; } } elseif (self::mqoakwwmgqqsesmq >= abs($acyuemiyqmkmewku[0] / $acyuemiyqmkmewku[1] - 1)) { if (self::eoksmcquaikkcyee <= $acyuemiyqmkmewku[0] && self::kwsgiuceksisqqma <= $acyuemiyqmkmewku[1]) { $mwweeceqggqmogwk = "\x31\x78\61"; } } } $yyimiwcuegayoskq = pathinfo($this->file); $miawkwqioaeasiig = $yyimiwcuegayoskq["\144\x69\162\156\141\155\x65"]; $yucgcsieomwqgwws = $yyimiwcuegayoskq["\x65\x78\x74\145\156\163\151\x6f\x6e"]; $ymqmyyeuycgmigyo = wp_basename($this->file, "\x2e{$yucgcsieomwqgwws}"); $new_ext = strtolower($uwumuuykwookaauo ? $uwumuuykwookaauo : $yucgcsieomwqgwws); if (!is_null($dest_path) && ($_dest_path = realpath($dest_path))) { $miawkwqioaeasiig = $_dest_path; } if ('' != $mwweeceqggqmogwk) { return trailingslashit($miawkwqioaeasiig) . "{$mwweeceqggqmogwk}\x2f{$ymqmyyeuycgmigyo}\x2e{$new_ext}"; } else { $scqcgogsiaiksiiq = $this->get_suffix(); return trailingslashit($miawkwqioaeasiig) . "{$ymqmyyeuycgmigyo}\x2d{$scqcgogsiaiksiiq}\56{$new_ext}"; } } }
