<?php

namespace NiuGengYun\EasyTBK\TaoBao\request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;

/**
 * TOP API: taobao.hotel.orders.search request
 *
 * @author auto create
 * @since 1.0, 2015.07.02
 */
class HotelOrdersSearchRequest
{
	/**
	 * 入住时间查询结束时间，格式为：yyyy-MM-dd。不能早于checkin_date_start，间隔不能大于30
	 **/
	private $checkinDateEnd;

	/**
	 * 入住时间查询起始时间，格式为：yyyy-MM-dd
	 **/
	private $checkinDateStart;

	/**
	 * 离店时间查询结束时间，格式为：yyyy-MM-dd。不能早于checkout_date_start，间隔不能大于30
	 **/
	private $checkoutDateEnd;

	/**
	 * 离店时间查询起始时间，格式为：yyyy-MM-dd
	 **/
	private $checkoutDateStart;

	/**
	 * 订单创建时间查询结束时间，格式为：yyyy-MM-dd。不能早于created_start，间隔不能大于30
	 **/
	private $createdEnd;

	/**
	 * 订单创建时间查询起始时间，格式为：yyyy-MM-dd
	 **/
	private $createdStart;

	/**
	 * 商品gid列表，多个gid用英文逗号隔开，一次不超过5个
	 **/
	private $gids;

	/**
	 * 酒店hid列表，多个hid用英文逗号隔开，一次不超过5个
	 **/
	private $hids;

	/**
	 * 是否需要返回该订单的入住人列表。可选值：true，false。
	 **/
	private $needGuest;

	/**
	 * 是否显示买家留言，可选值true、false
	 **/
	private $needMessage;

	/**
	 * 酒店订单oids列表，多个oid用英文逗号隔开，一次不超过20个。oids，tids，hids，rids，gids，（checkin_date_start，checkin_date_end），（checkout_date_start，checkout_date_end），（created_start，created_end）必须传入一项，括号表示需同时存在才做为查询条件。oids，tids，hids，rids，gids同时出现时，优先级按此顺序由高到低只取一项。其他同时出现时，并列使用。
	 **/
	private $oids;

	/**
	 * 分页页码。取值范围，大于零的整数，默认值1，即返回第一页的数据。页面大小为20
	 **/
	private $pageNo;

	/**
	 * 房型rid列表，多个rid用英文逗号隔开，一次不超过5个
	 **/
	private $rids;

	/**
	 * 订单状态。A：等待买家付款。B：买家已付款待卖家发货。C：卖家已发货待买家确认。D：交易成功。E：交易关闭
	 **/
	private $status;

	/**
	 * 淘宝订单tid列表，多个tid用英文逗号隔开，一次不超过20个。
	 **/
	private $tids;

	private $apiParas = array();

	public function setCheckinDateEnd($checkinDateEnd)
	{
		$this->checkinDateEnd = $checkinDateEnd;
		$this->apiParas["checkin_date_end"] = $checkinDateEnd;
	}

	public function getCheckinDateEnd()
	{
		return $this->checkinDateEnd;
	}

	public function setCheckinDateStart($checkinDateStart)
	{
		$this->checkinDateStart = $checkinDateStart;
		$this->apiParas["checkin_date_start"] = $checkinDateStart;
	}

	public function getCheckinDateStart()
	{
		return $this->checkinDateStart;
	}

	public function setCheckoutDateEnd($checkoutDateEnd)
	{
		$this->checkoutDateEnd = $checkoutDateEnd;
		$this->apiParas["checkout_date_end"] = $checkoutDateEnd;
	}

	public function getCheckoutDateEnd()
	{
		return $this->checkoutDateEnd;
	}

	public function setCheckoutDateStart($checkoutDateStart)
	{
		$this->checkoutDateStart = $checkoutDateStart;
		$this->apiParas["checkout_date_start"] = $checkoutDateStart;
	}

	public function getCheckoutDateStart()
	{
		return $this->checkoutDateStart;
	}

	public function setCreatedEnd($createdEnd)
	{
		$this->createdEnd = $createdEnd;
		$this->apiParas["created_end"] = $createdEnd;
	}

	public function getCreatedEnd()
	{
		return $this->createdEnd;
	}

	public function setCreatedStart($createdStart)
	{
		$this->createdStart = $createdStart;
		$this->apiParas["created_start"] = $createdStart;
	}

	public function getCreatedStart()
	{
		return $this->createdStart;
	}

	public function setGids($gids)
	{
		$this->gids = $gids;
		$this->apiParas["gids"] = $gids;
	}

	public function getGids()
	{
		return $this->gids;
	}

	public function setHids($hids)
	{
		$this->hids = $hids;
		$this->apiParas["hids"] = $hids;
	}

	public function getHids()
	{
		return $this->hids;
	}

	public function setNeedGuest($needGuest)
	{
		$this->needGuest = $needGuest;
		$this->apiParas["need_guest"] = $needGuest;
	}

	public function getNeedGuest()
	{
		return $this->needGuest;
	}

	public function setNeedMessage($needMessage)
	{
		$this->needMessage = $needMessage;
		$this->apiParas["need_message"] = $needMessage;
	}

	public function getNeedMessage()
	{
		return $this->needMessage;
	}

	public function setOids($oids)
	{
		$this->oids = $oids;
		$this->apiParas["oids"] = $oids;
	}

	public function getOids()
	{
		return $this->oids;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setRids($rids)
	{
		$this->rids = $rids;
		$this->apiParas["rids"] = $rids;
	}

	public function getRids()
	{
		return $this->rids;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setTids($tids)
	{
		$this->tids = $tids;
		$this->apiParas["tids"] = $tids;
	}

	public function getTids()
	{
		return $this->tids;
	}

	public function getApiMethodName()
	{
		return "taobao.hotel.orders.search";
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{

		RequestCheckUtil::checkMaxLength($this->status,1,"status");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
