<?php

namespace NiuGengYun\EasyTBK\Vip\Osp\Util;

class TimeUtil {

	static function currentTimeMillis() {
		list($t1, $t2) = explode(' ', microtime());
		return (float) (floatval($t1) + floatval($t2)) * 1000;
	}

	static function currentTimeStamp() {
		list($usec, $sec) = explode(' ', microtime());
		$d1 = strftime("%Y-%m-%d %H:%M:%S", $sec);
		$d2 = (int)($usec * 1000);
		$result = $d1 . "." . sprintf("%03d", $d2);
		return $result;
	}
}

?>
