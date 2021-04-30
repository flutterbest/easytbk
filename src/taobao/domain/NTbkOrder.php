<?php

namespace NiuGengYun\EasyTBK\taobao\domain;

/**
 * 淘宝客订单
 * @author auto create
 */
class NTbkOrder
{
	
	/** 
	 * 广告位ID
	 **/
	public $adzone_id;
	
	/** 
	 * 广告位名称
	 **/
	public $adzone_name;
	
	/** 
	 * 付款金额
	 **/
	public $alipay_total_price;
	
	/** 
	 * 类目名称
	 **/
	public $auction_category;
	
	/** 
	 * 跟踪时间
	 **/
	public $click_time;
	
	/** 
	 * 推广者获得的收入金额，对应联盟后台报表&ldquo;预估收入&rdquo;
	 **/
	public $commission;
	
	/** 
	 * 推广者获得的分成比率，对应联盟后台报表&ldquo;分成比率&rdquo;
	 **/
	public $commission_rate;
	
	/** 
	 * 淘客订单创建时间
	 **/
	public $create_time;
	
	/** 
	 * 淘客订单结算时间
	 **/
	public $earning_time;
	
	/** 
	 * 收入比率，卖家设置佣金比率+平台补贴比率
	 **/
	public $income_rate;
	
	/** 
	 * 商品数量
	 **/
	public $item_num;
	
	/** 
	 * 商品标题
	 **/
	public $item_title;
	
	/** 
	 * 商品ID
	 **/
	public $num_iid;
	
	/** 
	 * 订单类型，如天猫，淘宝
	 **/
	public $order_type;
	
	/** 
	 * 实际支付金额
	 **/
	public $pay_price;
	
	/** 
	 * 单价
	 **/
	public $price;
	
	/** 
	 * 效果预估，付款金额*(佣金比率+补贴比率)*分成比率
	 **/
	public $pub_share_pre_fee;
	
	/** 
	 * 渠道关系ID
	 **/
	public $relation_id;
	
	/** 
	 * 卖家昵称
	 **/
	public $seller_nick;
	
	/** 
	 * 卖家店铺名称
	 **/
	public $seller_shop_title;
	
	/** 
	 * 来源媒体ID
	 **/
	public $site_id;
	
	/** 
	 * 来源媒体名称
	 **/
	public $site_name;
	
	/** 
	 * 会员运营id
	 **/
	public $special_id;
	
	/** 
	 * 补贴金额
	 **/
	public $subsidy_fee;
	
	/** 
	 * 补贴比率
	 **/
	public $subsidy_rate;
	
	/** 
	 * 补贴类型，天猫:1，聚划算:2，航旅:3，阿里云:4
	 **/
	public $subsidy_type;
	
	/** 
	 * 成交平台，PC:1，无线:2
	 **/
	public $terminal_type;
	
	/** 
	 * 第三方推广者广告位ID
	 **/
	public $tk3rd_adzone_id;
	
	/** 
	 * 第三方推广者ID
	 **/
	public $tk3rd_pub_id;
	
	/** 
	 * 第三方推广者站点ID
	 **/
	public $tk3rd_site_id;
	
	/** 
	 * 第三方服务来源，没有第三方服务，取值为&ldquo;--&rdquo;
	 **/
	public $tk3rd_type;
	
	/** 
	 * 淘客订单状态，3：订单结算，12：订单付款， 13：订单失效，14：订单成功
	 **/
	public $tk_status;
	
	/** 
	 * 佣金金额
	 **/
	public $total_commission_fee;
	
	/** 
	 * 佣金比率
	 **/
	public $total_commission_rate;
	
	/** 
	 * 淘宝订单号
	 **/
	public $trade_id;
	
	/** 
	 * 淘宝父订单号
	 **/
	public $trade_parent_id;
	
	/** 
	 * 推广者unid（已废弃）
	 **/
	public $unid;	
}
?>