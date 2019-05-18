<?php

namespace NiuGengYun\EasyTBK\TaoBao\Domain;

/**
 * contentEffectList
 * @author auto create
 */
class Contenteffectlist
{
	
	/** 
	 * 当日直接引导订单数
	 **/
	public $alipay_num;
	
	/** 
	 * 内容id
	 **/
	public $content_id;
	
	/** 
	 * cpcFee
	 **/
	public $cpc_fee;
	
	/** 
	 * cpsPreFee
	 **/
	public $cps_pre_fee;
	
	/** 
	 * cpsSettleFee
	 **/
	public $cps_settle_fee;
	
	/** 
	 * 当日该内容下宝贝点击次数
	 **/
	public $ipv;
	
	/** 
	 * 当日该内容下宝贝点击人数
	 **/
	public $iuv;
	
	/** 
	 * 媒体pid
	 **/
	public $pid;
	
	/** 
	 * 时间
	 **/
	public $time;	
}
?>