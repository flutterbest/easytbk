<?php

namespace NiuGengYun\EasyTBK\vip\Osp\Context;

/**
 * 获取调用上下文环境工厂类
 *
 * @author Jamin.li
 *
 */
class InvocationContextFactory {
	/**
	 * 获取实例
	 */
	public static function getInstance() {
		return InvocationContext::getInstance ();
	}
}
