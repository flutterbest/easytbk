<?php

namespace NiuGengYun\EasyTBK\taobao\domain;

/**
 * 淘宝客店铺
 * @author auto create
 */
class NTbkShop
{
	
	/** 
	 * 淘客地址
	 **/
	public $click_url;
	
	/** 
	 * 店标图片
	 **/
	public $pict_url;
	
	/** 
	 * 卖家昵称
	 **/
	public $seller_nick;
	
	/** 
	 * 店铺名称
	 **/
	public $shop_title;
	
	/** 
	 * 店铺类型，B：天猫，C：淘宝
	 **/
	public $shop_type;
	
	/** 
	 * 店铺地址
	 **/
	public $shop_url;
	
	/** 
	 * 卖家ID
	 **/
	public $user_id;	
}
?>