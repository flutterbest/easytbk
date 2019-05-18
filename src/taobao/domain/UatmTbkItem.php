<?php

namespace NiuGengYun\EasyTBK\TaoBao\Domain;

/**
 * 淘宝联盟选品和招商宝贝信息
 * @author auto create
 */
class UatmTbkItem
{
	
	/** 
	 * 后台一级类目
	 **/
	public $category;
	
	/** 
	 * 淘客地址
	 **/
	public $click_url;
	
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
	 * 招行活动的结束时间；如果该宝贝取自普通的选品组，则取值为1970-01-01 00:00:00
	 **/
	public $event_end_time;
	
	/** 
	 * 招商活动开始时间；如果该宝贝取自普通选品组，则取值为1970-01-01 00:00:00；
	 **/
	public $event_start_time;
	
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
	 * 宝贝状态，0失效，1有效；注：失效可能是宝贝已经下线或者是被处罚不能在进行推广
	 **/
	public $status;
	
	/** 
	 * 商品标题
	 **/
	public $title;
	
	/** 
	 * 收入比例，举例，取值为20.00，表示比例20.00%
	 **/
	public $tk_rate;
	
	/** 
	 * 宝贝类型：1 普通商品； 2 鹊桥高佣金商品；3 定向招商商品；4 营销计划商品;
	 **/
	public $type;
	
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
	 * 无线折扣价，即宝贝在无线上的实际售卖价格。
	 **/
	public $zk_final_price_wap;	
}
?>