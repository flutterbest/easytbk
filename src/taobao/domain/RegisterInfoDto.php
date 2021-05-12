<?php

namespace NiuGengYun\EasyTBK\taobao\domain;

/**
 * 线下备案专属信息
 * @author auto create
 */
class RegisterInfoDto
{
	
	/** 
	 * 渠道独有 -经营类型
	 **/
	public $career;
	
	/** 
	 * 渠道独有 -对应的证件证件类型编号
	 **/
	public $certify_number;
	
	/** 
	 * 渠道独有 -详细地址
	 **/
	public $detail_address;
	
	/** 
	 * 渠道独有 -地区
	 **/
	public $location;
	
	/** 
	 * 渠道独有 -手机号码
	 **/
	public $phone_number;
	
	/** 
	 * 渠道独有 -证件类型
	 **/
	public $shop_certify_type;
	
	/** 
	 * 渠道独有 -店铺名称
	 **/
	public $shop_name;
	
	/** 
	 * 渠道独有 -店铺类型
	 **/
	public $shop_type;	
}
?>