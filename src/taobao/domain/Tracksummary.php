<?php

namespace NiuGengYun\EasyTBK\taobao\domain;

/**
 * 用户最近轨迹信息
 * @author auto create
 */
class Tracksummary
{
	
	/** 
	 * 浏览器
	 **/
	public $browser;
	
	/** 
	 * 城市
	 **/
	public $city;
	
	/** 
	 * 国家
	 **/
	public $country;
	
	/** 
	 * 设备
	 **/
	public $device;
	
	/** 
	 * 额外参数
	 **/
	public $extra_param;
	
	/** 
	 * UI参数
	 **/
	public $extra_ui;
	
	/** 
	 * 渠道
	 **/
	public $from_channel;
	
	/** 
	 * ip地址
	 **/
	public $ip;
	
	/** 
	 * 运营商，如电信，联通
	 **/
	public $isp;
	
	/** 
	 * 操作系统
	 **/
	public $os;
	
	/** 
	 * referer_关键字
	 **/
	public $referer_keyword;
	
	/** 
	 * referer_url
	 **/
	public $referer_url;
	
	/** 
	 * 省份，如浙江省
	 **/
	public $region;
	
	/** 
	 * 访问总时间，以毫秒为单位
	 **/
	public $total_time;
	
	/** 
	 * 访问总次数
	 **/
	public $visit_count;	
}
?>