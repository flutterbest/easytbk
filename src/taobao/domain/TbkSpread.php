<?php

namespace NiuGengYun\EasyTBK\TaoBao\Domain;

/**
 * 传播形式对象列表
 * @author auto create
 */
class TbkSpread
{
	
	/** 
	 * 传播形式, 目前只支持短链接
	 **/
	public $content;
	
	/** 
	 * 调用错误信息；由于是批量接口，请重点关注每条请求返回的结果，如果非OK，则说明该结果对应的content不正常，请酌情处理;
	 **/
	public $err_msg;	
}
?>