<?php

namespace NiuGengYun\EasyTBK\TaoBao\Domain;

/**
 * 复购订单，仅适用于手淘拉新
 * @author auto create
 */
class OrderData
{
	
	/** 
	 * 预估佣金
	 **/
	public $commission;
	
	/** 
	 * 收货时间
	 **/
	public $confirm_receive_time;
	
	/** 
	 * 订单号
	 **/
	public $order_no;
	
	/** 
	 * 支付时间
	 **/
	public $pay_time;	
}
?>