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
	 * 商品id
	 **/
	public $item_id;
	
	/** 
	 * 佣金比率(%)
	 **/
	public $max_commission_rate;	
}
?>