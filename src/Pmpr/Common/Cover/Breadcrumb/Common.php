<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6451163a8d657             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const iukiayaokaiiicwo = "\142\162\x65\141\144\143\162\165\155\x62\x5f"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\142\145\x66\x6f\162\145\137\143\162\x65\141\x74\145\x5f"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(SettingSection::mgimioakqsosoqcc)) { goto kyiwsiakwgiwouyi; } $cuakwceieagskoaa = true; if (!($post = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto owgsameoayaogsma; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(SettingSection::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); owgsameoayaogsma: $cuakwceieagskoaa = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x61\154\x6c\157\x77\137\162\x65\x6e\x64\145\x72", $cuakwceieagskoaa, $post); kyiwsiakwgiwouyi: return $cuakwceieagskoaa; } }
