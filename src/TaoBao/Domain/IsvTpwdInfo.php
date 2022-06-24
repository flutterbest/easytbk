<?php

namespace NiuGengYun\EasyTBK\TaoBao\Domain;

/**
 * 口令参数
 * @author auto create
 */
class IsvTpwdInfo
{
	
	/** 
	 * 扩展字段JSON格式
	 **/
	public $ext;
	
	/** 
	 * 口令弹框logoURL
	 **/
	public $logo;
	
	/** 
	 * 口令弹框内容
	 **/
	public $text;
	
	/** 
	 * 口令跳转url
	 **/
	public $url;
	
	/** 
	 * 生成口令的淘宝用户ID
	 **/
	public $user_id;	
}
?>