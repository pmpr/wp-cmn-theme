<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670ed8558a25f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Media; use WP_Image_Editor_GD; require_once ABSPATH . WPINC . "\x2f\143\x6c\141\163\163\55\167\x70\55\151\155\x61\147\x65\55\145\144\151\x74\x6f\x72\x2e\x70\x68\160"; require_once ABSPATH . WPINC . "\57\x63\154\x61\163\163\55\167\160\55\x69\x6d\x61\147\145\x2d\x65\x64\x69\x74\157\162\55\x67\x64\56\x70\x68\160"; class Editor extends WP_Image_Editor_GD { const mqoakwwmgqqsesmq = 0.01; const keseeyikosacsoem = 1200; const euucyeauiyuyckco = 675; const uuquqqmsmeqyuasw = 1200; const scmawswkkcamgsos = 900; const eoksmcquaikkcyee = 1200; const kwsgiuceksisqqma = 1200; public function generate_filename($yuwymayicwwqiske = null, $dest_path = null, $uwumuuykwookaauo = null) { if (!$yuwymayicwwqiske) { $yuwymayicwwqiske = $this->get_suffix(); } $acyuemiyqmkmewku = explode("\x78", $yuwymayicwwqiske); $mwweeceqggqmogwk = ''; if (1 == get_option(Image::emskikwmugwkeegu) && 2 == count($acyuemiyqmkmewku) && !empty($acyuemiyqmkmewku[1])) { $acyuemiyqmkmewku[0] = (int) $acyuemiyqmkmewku[0]; $acyuemiyqmkmewku[1] = (int) $acyuemiyqmkmewku[1]; if (self::mqoakwwmgqqsesmq >= abs($acyuemiyqmkmewku[0] / $acyuemiyqmkmewku[1] - 16 / 9)) { if (self::keseeyikosacsoem <= $acyuemiyqmkmewku[0] && self::euucyeauiyuyckco <= $acyuemiyqmkmewku[1]) { $mwweeceqggqmogwk = "\x31\x36\x78\71"; } } elseif (self::mqoakwwmgqqsesmq >= abs($acyuemiyqmkmewku[0] / $acyuemiyqmkmewku[1] - 4 / 3)) { if (self::uuquqqmsmeqyuasw <= $acyuemiyqmkmewku[0] && self::scmawswkkcamgsos <= $acyuemiyqmkmewku[1]) { $mwweeceqggqmogwk = "\64\x78\63"; } } elseif (self::mqoakwwmgqqsesmq >= abs($acyuemiyqmkmewku[0] / $acyuemiyqmkmewku[1] - 1)) { if (self::eoksmcquaikkcyee <= $acyuemiyqmkmewku[0] && self::kwsgiuceksisqqma <= $acyuemiyqmkmewku[1]) { $mwweeceqggqmogwk = "\61\170\x31"; } } } $yyimiwcuegayoskq = pathinfo($this->file); $miawkwqioaeasiig = $yyimiwcuegayoskq["\x64\151\x72\x6e\x61\x6d\145"]; $yucgcsieomwqgwws = $yyimiwcuegayoskq["\x65\170\x74\145\x6e\x73\151\x6f\x6e"]; $ymqmyyeuycgmigyo = wp_basename($this->file, "\56{$yucgcsieomwqgwws}"); $new_ext = strtolower($uwumuuykwookaauo ? $uwumuuykwookaauo : $yucgcsieomwqgwws); if (!is_null($dest_path) && ($_dest_path = realpath($dest_path))) { $miawkwqioaeasiig = $_dest_path; } if ('' != $mwweeceqggqmogwk) { return trailingslashit($miawkwqioaeasiig) . "{$mwweeceqggqmogwk}\57{$ymqmyyeuycgmigyo}\56{$new_ext}"; } else { $scqcgogsiaiksiiq = $this->get_suffix(); return trailingslashit($miawkwqioaeasiig) . "{$ymqmyyeuycgmigyo}\55{$scqcgogsiaiksiiq}\56{$new_ext}"; } } }
