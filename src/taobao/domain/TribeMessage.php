<?php

namespace NiuGengYun\EasyTBK\TaoBao\Domain;

/**
 * 消息列表
 * @author auto create
 */
class TribeMessage
{
	
	/** 
	 * 消息内容节点序列
	 **/
	public $content;
	
	/** 
	 * 发送方
	 **/
	public $from_id;
	
	/** 
	 * 消息时间。UTC时间
	 **/
	public $time;
	
	/** 
	 * 消息类型
	 **/
	public $type;
	
	/** 
	 * 消息UUID
	 **/
	public $uuid;	
}
?>