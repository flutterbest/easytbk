<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;

/**
 * TOP API: taobao.hotel.sold.orders.increment.get request
 *
 * @author auto create
 * @since 1.0, 2015.07.02
 */
class HotelSoldOrdersIncrementGetRequest
{
	/**
	 * 查询修改结束时间，必须大于修改开始时间（修改时间跨度不能大于1天）。格式：yyyy-MM-dd HH:mm:ss。
	 **/
	private $endModified;

	/**
	 * 是否需要返回该订单的入住人列表。可选值：true，false。
	 **/
	private $needGuest;

	/**
	 * 是否返回买家留言，可选值true、false
	 **/
	private $needMessage;

	/**
	 * 分页页码。取值范围，大于零的整数，默认值1，即返回第一页的数据。
	 **/
	private $pageNo;

	/**
	 * 页面大小，取值范围1-100，默认大小20。
	 **/
	private $pageSize;

	/**
	 * 查询修改开始时间（修改时间跨度不能大于1天）。格式：yyyy-MM-dd HH:mm:ss
	 **/
	private $startModified;

	/**
	 * 交易状态，默认查询所有交易状态的数据，除了默认值外每次只能查询一种状态。可选值：A：等待买家付款。B：买家已付款待卖家发货。C：卖家已发货待买家确认。D：交易成功。E：交易关闭
	 **/
	private $status;

	/**
	 * 是否使用has_next的分页方式，如果指定true，则返回的结果中不包含总记录数，但是会新增一个是否存在下一页的字段，效率比总记录数高
	 **/
	private $useHasNext;

	private $apiParas = array();

	public function setEndModified($endModified)
	{
		$this->endModified = $endModified;
		$this->apiParas["end_modified"] = $endModified;
	}

	public function getEndModified()
	{
		return $this->endModified;
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

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setStartModified($startModified)
	{
		$this->startModified = $startModified;
		$this->apiParas["start_modified"] = $startModified;
	}

	public function getStartModified()
	{
		return $this->startModified;
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

	public function setUseHasNext($useHasNext)
	{
		$this->useHasNext = $useHasNext;
		$this->apiParas["use_has_next"] = $useHasNext;
	}

	public function getUseHasNext()
	{
		return $this->useHasNext;
	}

	public function getApiMethodName()
	{
		return "taobao.hotel.sold.orders.increment.get";
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{

		RequestCheckUtil::checkNotNull($this->endModified,"endModified");
		RequestCheckUtil::checkNotNull($this->startModified,"startModified");
		RequestCheckUtil::checkMaxLength($this->status,1,"status");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
