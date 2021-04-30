<?php

namespace NiuGengYun\EasyTBK\taobao\domain;

/**
 * 用户轨迹
 * @author auto create
 */
class Tracks
{
	
	/** 
	 * 轨迹发生的时间，即用户进入页面的时间
	 **/
	public $enter_time;
	
	/** 
	 * referer_keyword
	 **/
	public $referer_keyword;
	
	/** 
	 * referer_url
	 **/
	public $referer_url;
	
	/** 
	 * 标题
	 **/
	public $title;
	
	/** 
	 * url
	 **/
	public $url;	
}
?>