<?php

namespace NiuGengYun\EasyTBK\TaoBao\Domain;

/**
 * 淘宝客选品库
 * @author auto create
 */
class TbkFavorites
{
	
	/** 
	 * 选品库id
	 **/
	public $favorites_id;
	
	/** 
	 * 选品组名称
	 **/
	public $favorites_title;
	
	/** 
	 * 选品库类型，1：普通类型，2高佣金类型
	 **/
	public $type;	
}
?>