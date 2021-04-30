<?php

namespace NiuGengYun\EasyTBK\taobao\domain;

/**
 * TbkCoupon
 * @author auto create
 */
class TbkCoupon
{
	
	/** 
	 * 后台一级类目
	 **/
	public $category;
	
	/** 
	 * 佣金比率(%)
	 **/
	public $commission_rate;
	
	/** 
	 * 商品优惠券推广链接
	 **/
	public $coupon_click_url;
	
	/** 
	 * 优惠券结束时间
	 **/
	public $coupon_end_time;
	
	/** 
	 * 优惠券面额
	 **/
	public $coupon_info;
	
	/** 
	 * 优惠券剩余量
	 **/
	public $coupon_remain_count;
	
	/** 
	 * 优惠券开始时间
	 **/
	public $coupon_start_time;
	
	/** 
	 * 优惠券总量
	 **/
	public $coupon_total_count;
	
	/** 
	 * 宝贝描述（推荐理由）
	 **/
	public $item_description;
	
	/** 
	 * 商品详情页链接地址
	 **/
	public $item_url;
	
	/** 
	 * 卖家昵称
	 **/
	public $nick;
	
	/** 
	 * itemId
	 **/
	public $num_iid;
	
	/** 
	 * 商品主图
	 **/
	public $pict_url;
	
	/** 
	 * 卖家id
	 **/
	public $seller_id;
	
	/** 
	 * 店铺名称
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
	 * 卖家类型，0表示集市，1表示商城
	 **/
	public $user_type;
	
	/** 
	 * 30天销量
	 **/
	public $volume;
	
	/** 
	 * 折扣价
	 **/
	public $zk_final_price;	
}
?>