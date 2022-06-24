<?php

namespace NiuGengYun\EasyTBK\Vip\Osp\Protocol;

$base_path = dirname(__FILE__).'/../../';

require_once $base_path.'Osp/Ext/Shift.php';

use Thrift\Factory\TStringFuncFactory;

class TCompactProtocol extends \Thrift\Protocol\TCompactProtocol {
	public function __construct($trans) {
		parent::__construct ( $trans );
	}

	/**
	 * 覆盖父类方法，增加无符号处理(non-PHPdoc)
	 *
	 * @see \Thrift\Protocol\TCompactProtocol::fromZigZag()
	 */
	public function fromZigZag($n) {
		return ($n >> 1) & 0x7FFFFFFF ^ - ($n & 1); // 无符号处理
	}

	/**
	 * 覆盖父类方法，增加无符号处理(non-PHPdoc)
	 *
	 * @see \Thrift\Protocol\TCompactProtocol::getVarint()
	 */
	public function getVarint($data) {
		$out = "";
		while ( true ) {
			if (($data & ~ 0x7f) === 0) {
				$out .= chr ( $data );
				break;
			} else {
				$out .= chr ( ($data & 0xff) | 0x80 );
				$data = $data >> 7;
				if ($data < 0)
					$data &= 0x01FFFFFF; // 无符号处理
			}
		}
		return $out;
	}

	/**
	 * 写64位整形数据
	 *
	 * @param $data 要写入的内容
	 * @return number
	 */
	private function writeVarint64($data) {
		$out = $this->getVarint64 ( $data );
		$result = TStringFuncFactory::create ()->strlen ( $out );
		$this->trans_->write ( $out, $result );
		return $result;
	}

	/**
	 * 读64位整形数据
	 *
	 * @param $result 读取结果
	 * @return number
	 */
	private function readVarint64(&$result) {
		$idx = 0;
		$shift = 0;
		$result = 0;
		while ( true ) {
			$x = $this->trans_->readAll ( 1 );
			$arr = unpack ( 'C', $x );
			$byte = $arr [1];
			$idx += 1;
			$result = gmp_strval ( gmp_or ( $result, shl ( gmp_strval ( gmp_and ( $byte, 0x7f ) ), $shift ) ) );

			if (gmp_strval ( gmp_and ( $byte, 0x80 ) ) != 0x80) {
				break;
			}

			$shift += 7;
		}
		return $idx;
	}

	/**
	 * 写64位整形数据
	 *
	 * @param $data 要写入的内容
	 * @return number
	 */
	private function getVarint64($data) {
		$out = "";
		while ( true ) {
			$tmp = gmp_strval ( gmp_and ( $data, gmp_neg ( 0x7f ) ) );
			if ($tmp === 0 || $tmp === 1 || $tmp === "1" || $tmp === "0") {
				$out .= chr ( $data );
				break;
			} else {
				$out .= chr ( gmp_strval ( gmp_or ( gmp_and ( $data, 0x7f ), 0x80 ) ) );
				$data = shr_ns ( $data, 7 );
			}
		}
		return $out;
	}

	/**
	 * 长整形到Zigzag的编码转换
	 *
	 * @param unknown $value
	 */
	private function longToZigzag($value) {
		return gmp_strval ( gmp_xor ( shl ( $value, 1 ), shr ( $value, 63 ) ) );
	}

	/**
	 * Zigzag到长整形的编码转换
	 *
	 * @param unknown $value
	 */
	private function zigzagToLong($value) {
		return gmp_strval ( gmp_xor ( shr_ns ( $value, 1 ), gmp_neg ( gmp_and ( $value, 1 ) ) ) );
	}

	/**
	 * 覆盖父类方法，读取64位整理数据(non-PHPdoc)
	 *
	 * @see \Thrift\Protocol\TCompactProtocol::readI64()
	 */
	public function readI64(&$value) {
		$result = $this->readVarint64 ( $value );
		$value = $this->zigzagToLong ( $value );
		return $result;
	}

	/**
	 * 覆盖父类方法，写入64位整理数据(non-PHPdoc)
	 *
	 * @see \Thrift\Protocol\TCompactProtocol::writeI64()
	 */
	public function writeI64($value) {
		return $this->writeVarint64 ( $this->longToZigzag ( $value ) );
	}
}

?>
