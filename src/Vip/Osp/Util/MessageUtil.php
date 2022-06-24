<?php

namespace NiuGengYun\EasyTBK\Vip\Osp\Util;

/**
 * 输出信息工具类
 *
 * @author drax.li
 *
 */
class MessageUtil {

	/**
	 * 拼接信息，格式：[sign]${sign}[appKey]${appKey}[message]${message}
	 * @param invocationContext $info
	 * @param string $message
	 * @return string
	 */
	public static function getInvocationMsg($info , $message) {
		$result = "";
		if(!empty($info)){
			$sign = empty($info->getSign()) ? "null" : $info->getSign();
			$appKey = empty($info->getAppKey()) ? "null" : $info->getAppKey();
			$result .= "[sign]" . $sign . "[appKey]" . $appKey;
		} else {
			$result .= "[invocation info]null";
		}
		var_dump(empty($info));
		if(!empty($message)){
			$result .= "[message]" . $message;
		}
		return $result;
	}

}

?>
