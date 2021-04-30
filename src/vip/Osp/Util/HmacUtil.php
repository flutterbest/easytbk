<?php

namespace NiuGengYun\EasyTBK\vip\Osp\Util;

class HmacUtil {

	/**
	 * 基于md5的加密算法hmac
	 *
	 * md5已经不是那么安全了，多折腾几下吧
	 *
	 * @param String $data 预加密数据
	 * @param String $key  密钥
	 * @return String
	 */
	static function hmac($data, $key){
	    if (function_exists('hash_hmac')) {
	        return strtoupper(hash_hmac('md5', $data, $key));
	    }

	    $key = (strlen($key) > 64) ? pack('H32', 'md5') : str_pad($key, 64, chr(0));
	    $ipad = substr($key,0, 64) ^ str_repeat(chr(0x36), 64);
	    $opad = substr($key,0, 64) ^ str_repeat(chr(0x5C), 64);
	    return strtoupper(md5($opad.pack('H32', md5($ipad.$data))));
	}
}

?>
