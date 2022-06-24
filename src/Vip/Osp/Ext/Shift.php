<?php

/**
 * 无符号左移<<
 *
 * @param unknown $x        	
 * @param unknown $bits        	
 * @return string
 */
function shl($x, $bits) {
	if ($bits == 0)
		return $x; // 移动0位，直接返回原始数
	
	$bits = bcmod ( $bits, 64 ); // 超过64位的，按64取模
	
	if ($x < 0) {
		$x = bcmul ( $x, - 1 ); // 取绝对值
		$x = bcsub ( bcpow ( 2, 64 + $bits - 1 ), $x ); // 取补码
	}
	
	$mul = bcmul ( $x, bcpow ( 2, $bits ) ); // 左移n位为扩大2的n次方倍
	$mod = bcmod ( $mul, bcpow ( 2, 64 ) ); // 超出64位部分要舍弃
	$flag = _getFlag ( $mod, 64 ); // 取2进制序列的首位，为标识位，转为算术正负标识
	$value = _getValue ( $mod, 64 ); // 取2进制序列的其他位，为数据位，计算数值
	
	if ($flag > 0) {
		return $value; // 正数则直接返回结果
	} else {
		// 负数则计算出2进制序列为结果序列的值作为结果
		$sub = bcsub ( bcpow ( 2, 63 ), $value );
		return bcmul ( $sub, $flag );
	}
}

/**
 * 有符号右移>>
 * 1、如果是正数，按位除2
 * 2、如果是负数，-1求补码，对补码按位除2，再加1
 *
 * @param unknown $x        	
 * @param unknown $bits        	
 * @return string
 */
function shr($x, $bits) {
	$bits = bcmod ( $bits, 64 ); // 超过64位的，按64取模
	$pow = bcpow ( 2, $bits );
	if ($x > 0) {
		return bcdiv ( $x, $pow );
	} else {
		return bcadd ( bcdiv ( bcadd ( $x, 1 ), $pow ), - 1 );
	}
}

/**
 * 无符号右移 >>>
 * 原理：
 * 1、正数同有符号右移动一致
 * 2、负数：
 * 以11111111111111101010011101011010为例子
 * 目的根据上述的2进制序列找出序列为011111111111111101010011101011010的正数，对该正数进行有符号移位即可
 * S1：先找出01010011101011010所表示的值：把$x变为正数，用2的n次方的值减去该正数，就求得$x的补码的值了
 * S2：把出111111111111111 01010011101011010前半段的值，2的n次方111111111111111乘以2的01010011101011010的位数次方
 * S3：把S2的结果加上01010011101011010
 * S4：执行有符号右移动作
 *
 * @param 要移动的数值 $x        	
 * @param 要移动的位数 $bits        	
 * @return string 移动后的值
 */
function shr_ns($x, $bits) {
	if ($bits == 0)
		return $x; // 移动0位，直接返回原始数
	
	if ($x > 0) {
		return shr ( $x, $bits ); // 正数的话，与有符号右移一致，符号位与补的位一致
	} else {
		// 先计算总长度
		$len = 32;
		if ($x < - 2147483648) {
			$len = 64;
		}
		
		$x = bcmul ( $x, - 1 ); // 取绝对值
		$powerMin = _powerMin ( $x ); // 正值2进制位数
		$sum = bcpow ( 2, $powerMin ); // 原码与对应负数的补码之和
		$bu = bcsub ( $sum, $x ); // 补码之值
		$leftBit = $len - $powerMin; // 有多少位是1
		$val = bcmul ( bcsub ( bcpow ( 2, $leftBit ), 1 ), $sum ); // 计算位值为1的位所表达的值
		$val = bcadd ( $val, $bu ); // 加上补码的值
		return shr ( $val, $bits ); // 正数的右移
	}
}

/**
 * 返回给定数的2的最小乘方数（2的n次方比$val大，但最接近$val，返回n）
 *
 * @param unknown $val        	
 * @return number
 */
function _powerMin($val) {
	return _powerMax ( $val ) + 1;
}

/**
 * *
 * 返回给定数的2的最大乘方数（2的n次方比$val小，但最接近$val，返回n）
 */
function _powerMax($val) {
	$i = 0;
	while ( $val >= 2 ) {
		$val /= 2;
		$i ++;
	}
	return $i;
}

/**
 * 给定数值及该数值的长度，取出首位作为正负标识，返回该标识值
 *
 * @param unknown $x        	
 * @param unknown $bits        	
 * @return 正数返回1，负数返回-1
 */
function _getFlag($x, $bits) {
	if ($x < 0) {
		$x = bcmul ( $x, - 1 );
	}
	$flag = bcdiv ( $x, bcpow ( 2, $bits - 1 ) );
	if ($flag == 0) {
		return 1;
	} else {
		return - 1;
	}
}

/**
 * 给定数值及该数值的长度，剔除首位为标识位后返回剩余值
 *
 * @param unknown $x        	
 * @param unknown $bits        	
 * @return string
 */
function _getValue($x, $bits) {
	if ($x < 0) {
		$x = bcmul ( $x, - 1 );
	}
	return bcmod ( $x, bcpow ( 2, $bits - 1 ) );
}

?>