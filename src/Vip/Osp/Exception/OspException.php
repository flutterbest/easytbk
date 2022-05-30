<?php

namespace NiuGengYun\EasyTBK\Vip\Osp\Exception;

/**
 * OSP异常信息封装类
 *
 * @author Jamin.li
 *
 */
class OspException extends \Exception {
// 	const UNKNOWN = 0;
// 	const INVALID_DATA = 1;
// 	const NEGATIVE_SIZE = 2;
// 	const SIZE_LIMIT = 3;
// 	const BAD_VERSION = 4;

	const CALLEE_UNKNOWN_EXCEPTION = "OSP_CALLEE_UNKNOWN_EXCEPTION";

	private $returnCode = null; // 返回码
	private $returnMessage = null; // 返回信息

// 	public function __construct($returnMessage, $returnMessage = null) {
// 		$this->returnCode = "99";
// 		$this->returnMessage = $returnMessage;
// 	}

// 	public function __construct($returnCode, $returnMessage) {
// 		$this->returnCode = $returnCode;
// 		$this->returnMessage = $returnMessage;
// 	}

	public function __construct($returnMessage, $returnCode=\NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException::CALLEE_UNKNOWN_EXCEPTION) {
		$this->returnCode = $returnCode;
		$this->returnMessage = $returnMessage;
	}

	public function setReturnCode($returnCode) {
		$this->returnCode = $returnCode;
	}
	public function getReturnCode() {
		return $this->returnCode;
	}
	public function setReturnMessage($returnMessage) {
		$this->returnMessage = $returnMessage;
	}
	public function getReturnMessage() {
		return $this->returnMessage;
	}
}

?>
