<?php

namespace NiuGengYun\EasyTBK\TaoBao\request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;

/**
 * TOP API: taobao.hotel.room.add request
 *
 * @author auto create
 * @since 1.0, 2015.06.11
 */
class HotelRoomAddRequest
{
	/**
	 * 已废弃
	 **/
	private $area;

	/**
	 * 已废弃
	 **/
	private $bbn;

	/**
	 * 已废弃
	 **/
	private $bedType;

	/**
	 * 早餐。A,B,C,D,E。分别代表：A：无早，B：单早，C：双早，D：三早，E：多早
	 **/
	private $breakfast;

	/**
	 * 销售渠道。如需开通，需要申请权限。如果有多个用","分。目前制定四种渠道：A-集团协议B-双11促销价C-普通促销价M-无线专享价
	 **/
	private $channel;

	/**
	 * 已废弃
	 **/
	private $deposit;

	/**
	 * 宝贝描述。 宝贝描述长度不能超过50000字节
	 **/
	private $desc;

	/**
	 * 产品每日结束销售时间
	 **/
	private $endTime;

	/**
	 * 已废弃
	 **/
	private $fee;

	/**
	 * 生效截止时间，用来控制此rateplan生效的截止时间，配合字段effective_time一起限定rp的有效期
	 **/
	private $gmtDeadline;

	/**
	 * 生效开始时间，用来控制此rateplan生效的开始时间，配合字段deadline_time一起限定rp的有效期
	 **/
	private $gmtEffective;

	/**
	 * 购买须知。 购买须知长度不能超过600字节
	 **/
	private $guide;

	/**
	 * 酒店商品是否提供发票
	 **/
	private $hasReceipt;

	/**
	 * 酒店id。必须为数字。
	 **/
	private $hid;

	/**
	 * 最大提前预定小时数，从入住当天的24点往前计算。例如如果这个字段设置了48，代表最多提前两天预定，那么如果想预定24号入住，,必须在23号零点以后下单。
	 **/
	private $maxAdvHours;

	/**
	 * 最大入住天数（1-90）。默认90
	 **/
	private $maxDays;

	/**
	 * 会员等级。如需开通，需要申请权限，取值为：1,2,3,none。
	 **/
	private $memberLevel;

	/**
	 * 最小提前预定小时数，从入住当天的24点往前计算。例如如果这个字段设置了48，代表必须至少提前两天预定，那么如果想预定24号入住，,必须在23号零点前下单。
	 **/
	private $minAdvHours;

	/**
	 * 最小入住天数（1-90）。默认1
	 **/
	private $minDays;

	/**
	 * 已废弃
	 **/
	private $multiRoomQuotas;

	/**
	 * 支付类型。可选值：A,E,H。分别代表：A：全额预付，E：前台面付，H：信用住
	 **/
	private $paymentType;

	/**
	 * 已废弃
	 **/
	private $pic;

	/**
	 * 已废弃
	 **/
	private $picPath;

	/**
	 * 已废弃
	 **/
	private $priceType;

	/**
	 * 发票说明，不能超过100个字
	 **/
	private $receiptInfo;

	/**
	 * 发票类型为其他时的发票描述,不能超过30个字
	 **/
	private $receiptOtherTypeDesc;

	/**
	 * 发票类型。A,B。分别代表： A:酒店住宿发票,B:其他。注意：B卖家必填该字段，C卖家可选
	 **/
	private $receiptType;

	/**
	 * 退订政策字段，是个json串，参考示例值设置改字段的值。允许变更/取消：在XX年XX月XX日XX时前取消收取Y%的手续费，100>Y>=0允许变更/取消：在入住前X小时前取消收取Y%的手续费，100>Y>=0（不超过10条）。1.表示任意退{"cancelPolicyType":1};2.表示不能退{"cancelPolicyType":2};3.从入住当天24点往前推X小时前取消收取Y%手续费，否则不可取消{"t":3,"p":[{"d":15,"r":30},{"d":10,"r":40}]}表示，从入住日24点往前推提前至少15天取消，收取30%的手续费，从入住日24点往前推提前至少10天取消，收取40%的手续费;
	 **/
	private $refundPolicyInfo;

	/**
	 * 房型id。必须为数字。
	 **/
	private $rid;

	/**
	 * 房态房价信息。可以传今天开始90天内的房态信息。JSON格式传递。date：代表房态房价日期，格式为YYYY-MM-DD，price：代表房价，0～99999999，存储的单位是分，num：代表当天可售间数，0～999。如：[{"date":2015-01-28,"price":10000, "num":10},{"date":2015-01-29,"price":12000,"num":10}]
	 **/
	private $roomQuotas;

	/**
	 * 已废弃
	 **/
	private $service;

	/**
	 * 已废弃
	 **/
	private $siteParam;

	/**
	 * 已废弃
	 **/
	private $size;

	/**
	 * 产品每日开始销售时间
	 **/
	private $startTime;

	/**
	 * 已废弃
	 **/
	private $storey;

	/**
	 * 酒店商品名称。不能超过60字节
	 **/
	private $title;

	private $apiParas = array();

	public function setArea($area)
	{
		$this->area = $area;
		$this->apiParas["area"] = $area;
	}

	public function getArea()
	{
		return $this->area;
	}

	public function setBbn($bbn)
	{
		$this->bbn = $bbn;
		$this->apiParas["bbn"] = $bbn;
	}

	public function getBbn()
	{
		return $this->bbn;
	}

	public function setBedType($bedType)
	{
		$this->bedType = $bedType;
		$this->apiParas["bed_type"] = $bedType;
	}

	public function getBedType()
	{
		return $this->bedType;
	}

	public function setBreakfast($breakfast)
	{
		$this->breakfast = $breakfast;
		$this->apiParas["breakfast"] = $breakfast;
	}

	public function getBreakfast()
	{
		return $this->breakfast;
	}

	public function setChannel($channel)
	{
		$this->channel = $channel;
		$this->apiParas["channel"] = $channel;
	}

	public function getChannel()
	{
		return $this->channel;
	}

	public function setDeposit($deposit)
	{
		$this->deposit = $deposit;
		$this->apiParas["deposit"] = $deposit;
	}

	public function getDeposit()
	{
		return $this->deposit;
	}

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setFee($fee)
	{
		$this->fee = $fee;
		$this->apiParas["fee"] = $fee;
	}

	public function getFee()
	{
		return $this->fee;
	}

	public function setGmtDeadline($gmtDeadline)
	{
		$this->gmtDeadline = $gmtDeadline;
		$this->apiParas["gmt_deadline"] = $gmtDeadline;
	}

	public function getGmtDeadline()
	{
		return $this->gmtDeadline;
	}

	public function setGmtEffective($gmtEffective)
	{
		$this->gmtEffective = $gmtEffective;
		$this->apiParas["gmt_effective"] = $gmtEffective;
	}

	public function getGmtEffective()
	{
		return $this->gmtEffective;
	}

	public function setGuide($guide)
	{
		$this->guide = $guide;
		$this->apiParas["guide"] = $guide;
	}

	public function getGuide()
	{
		return $this->guide;
	}

	public function setHasReceipt($hasReceipt)
	{
		$this->hasReceipt = $hasReceipt;
		$this->apiParas["has_receipt"] = $hasReceipt;
	}

	public function getHasReceipt()
	{
		return $this->hasReceipt;
	}

	public function setHid($hid)
	{
		$this->hid = $hid;
		$this->apiParas["hid"] = $hid;
	}

	public function getHid()
	{
		return $this->hid;
	}

	public function setMaxAdvHours($maxAdvHours)
	{
		$this->maxAdvHours = $maxAdvHours;
		$this->apiParas["max_adv_hours"] = $maxAdvHours;
	}

	public function getMaxAdvHours()
	{
		return $this->maxAdvHours;
	}

	public function setMaxDays($maxDays)
	{
		$this->maxDays = $maxDays;
		$this->apiParas["max_days"] = $maxDays;
	}

	public function getMaxDays()
	{
		return $this->maxDays;
	}

	public function setMemberLevel($memberLevel)
	{
		$this->memberLevel = $memberLevel;
		$this->apiParas["member_level"] = $memberLevel;
	}

	public function getMemberLevel()
	{
		return $this->memberLevel;
	}

	public function setMinAdvHours($minAdvHours)
	{
		$this->minAdvHours = $minAdvHours;
		$this->apiParas["min_adv_hours"] = $minAdvHours;
	}

	public function getMinAdvHours()
	{
		return $this->minAdvHours;
	}

	public function setMinDays($minDays)
	{
		$this->minDays = $minDays;
		$this->apiParas["min_days"] = $minDays;
	}

	public function getMinDays()
	{
		return $this->minDays;
	}

	public function setMultiRoomQuotas($multiRoomQuotas)
	{
		$this->multiRoomQuotas = $multiRoomQuotas;
		$this->apiParas["multi_room_quotas"] = $multiRoomQuotas;
	}

	public function getMultiRoomQuotas()
	{
		return $this->multiRoomQuotas;
	}

	public function setPaymentType($paymentType)
	{
		$this->paymentType = $paymentType;
		$this->apiParas["payment_type"] = $paymentType;
	}

	public function getPaymentType()
	{
		return $this->paymentType;
	}

	public function setPic($pic)
	{
		$this->pic = $pic;
		$this->apiParas["pic"] = $pic;
	}

	public function getPic()
	{
		return $this->pic;
	}

	public function setPicPath($picPath)
	{
		$this->picPath = $picPath;
		$this->apiParas["pic_path"] = $picPath;
	}

	public function getPicPath()
	{
		return $this->picPath;
	}

	public function setPriceType($priceType)
	{
		$this->priceType = $priceType;
		$this->apiParas["price_type"] = $priceType;
	}

	public function getPriceType()
	{
		return $this->priceType;
	}

	public function setReceiptInfo($receiptInfo)
	{
		$this->receiptInfo = $receiptInfo;
		$this->apiParas["receipt_info"] = $receiptInfo;
	}

	public function getReceiptInfo()
	{
		return $this->receiptInfo;
	}

	public function setReceiptOtherTypeDesc($receiptOtherTypeDesc)
	{
		$this->receiptOtherTypeDesc = $receiptOtherTypeDesc;
		$this->apiParas["receipt_other_type_desc"] = $receiptOtherTypeDesc;
	}

	public function getReceiptOtherTypeDesc()
	{
		return $this->receiptOtherTypeDesc;
	}

	public function setReceiptType($receiptType)
	{
		$this->receiptType = $receiptType;
		$this->apiParas["receipt_type"] = $receiptType;
	}

	public function getReceiptType()
	{
		return $this->receiptType;
	}

	public function setRefundPolicyInfo($refundPolicyInfo)
	{
		$this->refundPolicyInfo = $refundPolicyInfo;
		$this->apiParas["refund_policy_info"] = $refundPolicyInfo;
	}

	public function getRefundPolicyInfo()
	{
		return $this->refundPolicyInfo;
	}

	public function setRid($rid)
	{
		$this->rid = $rid;
		$this->apiParas["rid"] = $rid;
	}

	public function getRid()
	{
		return $this->rid;
	}

	public function setRoomQuotas($roomQuotas)
	{
		$this->roomQuotas = $roomQuotas;
		$this->apiParas["room_quotas"] = $roomQuotas;
	}

	public function getRoomQuotas()
	{
		return $this->roomQuotas;
	}

	public function setService($service)
	{
		$this->service = $service;
		$this->apiParas["service"] = $service;
	}

	public function getService()
	{
		return $this->service;
	}

	public function setSiteParam($siteParam)
	{
		$this->siteParam = $siteParam;
		$this->apiParas["site_param"] = $siteParam;
	}

	public function getSiteParam()
	{
		return $this->siteParam;
	}

	public function setSize($size)
	{
		$this->size = $size;
		$this->apiParas["size"] = $size;
	}

	public function getSize()
	{
		return $this->size;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setStorey($storey)
	{
		$this->storey = $storey;
		$this->apiParas["storey"] = $storey;
	}

	public function getStorey()
	{
		return $this->storey;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getApiMethodName()
	{
		return "taobao.hotel.room.add";
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{

		RequestCheckUtil::checkMaxLength($this->area,1,"area");
		RequestCheckUtil::checkMaxLength($this->bbn,1,"bbn");
		RequestCheckUtil::checkNotNull($this->bedType,"bedType");
		RequestCheckUtil::checkMaxLength($this->bedType,1,"bedType");
		RequestCheckUtil::checkNotNull($this->breakfast,"breakfast");
		RequestCheckUtil::checkMaxLength($this->breakfast,1,"breakfast");
		RequestCheckUtil::checkMaxValue($this->deposit,99999900,"deposit");
		RequestCheckUtil::checkMinValue($this->deposit,0,"deposit");
		RequestCheckUtil::checkNotNull($this->desc,"desc");
		RequestCheckUtil::checkMaxLength($this->desc,50000,"desc");
		RequestCheckUtil::checkMaxValue($this->fee,99999900,"fee");
		RequestCheckUtil::checkMinValue($this->fee,0,"fee");
		RequestCheckUtil::checkMaxLength($this->guide,300,"guide");
		RequestCheckUtil::checkNotNull($this->hid,"hid");
		RequestCheckUtil::checkNotNull($this->paymentType,"paymentType");
		RequestCheckUtil::checkMaxLength($this->paymentType,1,"paymentType");
		RequestCheckUtil::checkMaxLength($this->priceType,1,"priceType");
		RequestCheckUtil::checkNotNull($this->rid,"rid");
		RequestCheckUtil::checkMaxLength($this->siteParam,100,"siteParam");
		RequestCheckUtil::checkMaxLength($this->size,1,"size");
		RequestCheckUtil::checkMaxLength($this->storey,8,"storey");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkMaxLength($this->title,90,"title");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
