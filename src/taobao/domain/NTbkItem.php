<?php

namespace NiuGengYun\EasyTBK\taobao\domain;

/**
 * 淘宝客商品
 * @author auto create
 */
class NTbkItem
{
	
	/** 
	 * 叶子类目名称
	 **/
	public $cat_leaf_name;
	
	/** 
	 * 一级类目名称
	 **/
	public $cat_name;
	
	/** 
	 * 淘客地址
	 **/
	public $click_url;
	
	/** 
	 * 佣金比例
	 **/
	public $commission_rate;
	
	/** 
	 * couponAmount
	 **/
	public $coupon_amount;
	
	/** 
	 * 优惠券额度
	 **/
	public $coupon_price;
	
	/** 
	 * 优惠券使用门槛金额
	 **/
	public $coupon_start_fee;
	
	/** 
	 * 商品地址
	 **/
	public $item_url;
	
	/** 
	 * 卖家昵称
	 **/
	public $nick;
	
	/** 
	 * 商品ID
	 **/
	public $num_iid;
	
	/** 
	 * 商品主图
	 **/
	public $pict_url;
	
	/** 
	 * 宝贝所在地
	 **/
	public $provcity;
	
	/** 
	 * 商品一口价格
	 **/
	public $reserve_price;
	
	/** 
	 * 卖家id
	 **/
	public $seller_id;
	
	/** 
	 * 
	 **/
	public $shop_title;
	
	/** 
	 * 商品小图列表
	 **/
	public $small_images;
	
	/** 
	 * 商品标题
	 **/
	public $title;
	
	/** 
	 * 
	 **/
	public $tk_rate;
	
	/** 
	 * 卖家类型，0表示集市，1表示商城
	 **/
	public $user_type;
	
	/** 
	 * 30天销量
	 **/
	public $volume;
	
	/** 
	 * 商品折扣价格
	 **/
	public $zk_final_price;
	
	/** 
	 * 
	 **/
	public $zk_final_price_wap;	
}
?>