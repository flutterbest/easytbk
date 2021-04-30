<?php

namespace NiuGengYun\EasyTBK\vip\Osp\Protocol;

class ProtocolUtil {
	static $NUMBER = 1;
	static $STRING = 2;
	static $OBJECT = 3;
	static $ARRAY = 4;
	static $BOOLEAN = 5;
	static $UNKNOW = - 1;
	public static function skip($prot) {
		$type = $prot->getType ();
		switch ($type) {
			case self::$NUMBER :
				$prot->readDouble ( $temp );
				break;
			case self::$STRING :
				$prot->readString ( $temp );
				break;
			case self::$OBJECT :
				$schemeStruct = $prot->readStructBegin ();
				while ( true ) {
					$schemeField = $prot->readFieldBegin ();
					if ($schemeField == null)
						break;
					self::skip ( $prot );
					$prot->readFieldEnd ();
				}
				$prot->readStructEnd ();
				break;
			case self::$ARRAY :
				$prot->readListBegin ();
				while ( true ) {
					try {
						self::skip ( $prot );
					} catch ( \Exception $e ) {
						break;
					}
				}
				$prot->readListEnd ();
				break;
			case self::$BOOLEAN :
				$prot->readBool ( $temp );
				break;
			default :
				throw new \NiuGengYun\EasyTBK\vip\Osp\Exception\OspException ( "unknow Type" );
		}
	}
}
