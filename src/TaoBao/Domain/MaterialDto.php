<?php

namespace NiuGengYun\EasyTBK\TaoBao\Domain;

/**
 * data
 * @author auto create
 */
class MaterialDto
{
	
	/** 
	 * 后台一级类目
	 **/
	public $category_id;
	
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
	 * 优惠券(商品优惠券推广链接中的券)类型，1 公开券，2 私有券，3 妈妈券
	 **/
	public $coupon_type;
	
	/** 
	 * 商品id
	 **/
	public $item_id;
	
	/** 
	 * 商品淘客链接
	 **/
	public $item_url;
	
	/** 
	 * 佣金比率(%)
	 **/
	public $max_commission_rate;
	
	/** 
	 * 商品妈妈优惠券推广链接
	 **/
	public $mm_coupon_click_url;
	
	/** 
	 * 妈妈优惠券结束时间
	 **/
	public $mm_coupon_end_time;
	
	/** 
	 * 妈妈优惠券面额
	 **/
	public $mm_coupon_info;
	
	/** 
	 * 妈妈优惠券剩余量
	 **/
	public $mm_coupon_remain_count;
	
	/** 
	 * 妈妈优惠券开始时间
	 **/
	public $mm_coupon_start_time;
	
	/** 
	 * 妈妈优惠券总量
	 **/
	public $mm_coupon_total_count;	
}
?>