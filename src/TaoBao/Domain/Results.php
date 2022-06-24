<?php

namespace NiuGengYun\EasyTBK\TaoBao\Domain;

/**
 * 淘抢购对象
 * @author auto create
 */
class Results
{
	
	/** 
	 * 类目名称
	 **/
	public $category_name;
	
	/** 
	 * 商品链接（是淘客商品返回淘客链接，非淘客商品返回普通h5链接）
	 **/
	public $click_url;
	
	/** 
	 * 结束时间
	 **/
	public $end_time;
	
	/** 
	 * 商品ID
	 **/
	public $num_iid;
	
	/** 
	 * 商品主图
	 **/
	public $pic_url;
	
	/** 
	 * 商品原价
	 **/
	public $reserve_price;
	
	/** 
	 * 已抢购数量
	 **/
	public $sold_num;
	
	/** 
	 * 开团时间
	 **/
	public $start_time;
	
	/** 
	 * 商品标题
	 **/
	public $title;
	
	/** 
	 * 总库存
	 **/
	public $total_amount;
	
	/** 
	 * 淘抢购活动价
	 **/
	public $zk_final_price;	
}
?>