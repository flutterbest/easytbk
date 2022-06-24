<?php
namespace NiuGengYun\EasyTBK\SuNing;

class ArrayXML {
	/**
	 * 数组转换为xml
	 *
	 * @param array $arr
	 * @param int $level
	 * @return string
	 */
	public static function arrayToXml($arr, $level = 0) {
		$s = $level == 0 ? '<?xml version="1.0" encoding="UTF-8"?>' : '';
		foreach ( $arr as $key => $value ) {
			if (is_array ( $value )) {
				$s .= "<" . $key . ">" . ArrayXML::arrayToXml ( $value, 1 ) . "</" . $key . ">";
			} else {
				$s .= "<" . $key . ">" . $value . "</" . $key . ">";
			}
		}
		return $s;
	}

	/**
	 * 数组转换为xml(去除空节点)
	 *
	 * @param array $arr
	 * @param int $level
	 * @return string
	 */
	public static function customToXml($arr, $level = 0) {
		$s = $level == 0 ? '<?xml version="1.0" encoding="UTF-8"?>' : '';
		foreach ( $arr as $key => $value ) {
			if (is_array ( $value )) {
				$s .= "<" . $key . ">" . ArrayXML::customToXml ( $value, 1 ) . "</" . $key . ">";
			} else {
				if ($value == "0" || !empty($value)) {
					$s .= "<" . $key . ">" . $value . "</" . $key . ">";
				}
			}
		}

		return $s;
	}

	/**
	 * xml转为数组
	 *
	 * @param string $xml
	 * @param string $version
	 * @param string $charset
	 * @return array
	 */
	public static function xmlToarray($xml, $version = "1.0", $charset = "utf-8") {
		$doc = new DOMDocument ( $version, $charset );
		$doc->loadXML ( $xml );
		$result = domNodeToArray ( $doc );
		if (isset ( $result ['#document'] )) {
			$result = $result ['#document'];
		}
		return $result;
	}
}
?>
