<?php

namespace NiuGengYun\EasyTBK\taobao\domain;

/**
 * 商品数据
 * @author auto create
 */
class Items
{
	
	/** 
	 * 聚划算价格，单位分
	 **/
	public $act_price;
	
	/** 
	 * 类目名称
	 **/
	public $category_name;
	
	/** 
	 * itemId
	 **/
	public $item_id;
	
	/** 
	 * 商品卖点
	 **/
	public $item_usp_list;
	
	/** 
	 * 聚划算id
	 **/
	public $ju_id;
	
	/** 
	 * 开团结束时间
	 **/
	public $online_end_time;
	
	/** 
	 * 开团时间
	 **/
	public $online_start_time;
	
	/** 
	 * 原价
	 **/
	public $orig_price;
	
	/** 
	 * 是否包邮
	 **/
	public $pay_postage;
	
	/** 
	 * pc链接
	 **/
	public $pc_url;
	
	/** 
	 * pc主图
	 **/
	public $pic_url_for_p_c;
	
	/** 
	 * 无线主图
	 **/
	public $pic_url_for_w_l;
	
	/** 
	 * 频道id
	 **/
	public $platform_id;
	
	/** 
	 * 价格卖点
	 **/
	public $price_usp_list;
	
	/** 
	 * 展示结束时间
	 **/
	public $show_end_time;
	
	/** 
	 * 开始展示时间
	 **/
	public $show_start_time;
	
	/** 
	 * 淘宝类目id
	 **/
	public $tb_first_cat_id;
	
	/** 
	 * 商品标题
	 **/
	public $title;
	
	/** 
	 * 卖点描述
	 **/
	public $usp_desc_list;
	
	/** 
	 * 无线链接
	 **/
	public $wap_url;	
}
?>