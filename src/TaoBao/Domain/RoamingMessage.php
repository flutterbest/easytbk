<?php

namespace NiuGengYun\EasyTBK\TaoBao\Domain;

/**
 * 漫游消息
 * @author auto create
 */
class RoamingMessage
{
	
	/** 
	 * 消息内容
	 **/
	public $content_list;
	
	/** 
	 * 消息方向。user1 -> user2 = 0 , user2->user1 = 1
	 **/
	public $direction;
	
	/** 
	 * 消息时间（UTC时间）
	 **/
	public $time;
	
	/** 
	 * 消息类型
	 **/
	public $type;
	
	/** 
	 * 消息唯一ID
	 **/
	public $uuid;	
}
?>