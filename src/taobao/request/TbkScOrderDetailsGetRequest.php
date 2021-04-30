<?php

namespace NiuGengYun\EasyTBK\taobao\request;

use NiuGengYun\EasyTBK\taobao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.sc.order.details.get request
 * 
 * @author auto create
 * @since 1.0, 2019.06.24
 */
class TbkScOrderDetailsGetRequest
{
	/** 
	 * 订单查询结束时间，订单开始时间至订单结束时间，中间时间段日常要求不超过3个小时，但如618、双11、年货节等大促期间预估时间段不可超过20分钟，超过会提示错误，调用时请务必注意时间段的选择，以保证亲能正常调用！
	 **/
	private $endTime;
	
	/** 
	 * 跳转类型，当向前或者向后翻页必须提供,-1: 向前翻页,1：向后翻页
	 **/
	private $jumpType;
	
	/** 
	 * 推广者角色类型,2:二方，3:三方，不传，表示所有角色
	 **/
	private $memberType;
	
	/** 
	 * 场景订单场景类型，1:常规订单，2:渠道订单，3:会员运营订单，默认为1
	 **/
	private $orderScene;
	
	/** 
	 * 第几页，默认1，1~100
	 **/
	private $pageNo;
	
	/** 
	 * 页大小，默认20，1~100
	 **/
	private $pageSize;
	
	/** 
	 * 位点，除第一页之外，都需要传递；前端原样返回。
	 **/
	private $positionIndex;
	
	/** 
	 * 查询时间类型，1：按照订单淘客创建时间查询，2:按照订单淘客付款时间查询，3:按照订单淘客结算时间查询
	 **/
	private $queryType;
	
	/** 
	 * 订单查询开始时间
	 **/
	private $startTime;
	
	/** 
	 * 淘客订单状态，12-付款，13-关闭，14-确认收货，15-结算成功;不传，表示所有状态
	 **/
	private $tkStatus;
	
	private $apiParas = array();
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setJumpType($jumpType)
	{
		$this->jumpType = $jumpType;
		$this->apiParas["jump_type"] = $jumpType;
	}

	public function getJumpType()
	{
		return $this->jumpType;
	}

	public function setMemberType($memberType)
	{
		$this->memberType = $memberType;
		$this->apiParas["member_type"] = $memberType;
	}

	public function getMemberType()
	{
		return $this->memberType;
	}

	public function setOrderScene($orderScene)
	{
		$this->orderScene = $orderScene;
		$this->apiParas["order_scene"] = $orderScene;
	}

	public function getOrderScene()
	{
		return $this->orderScene;
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

	public function setPositionIndex($positionIndex)
	{
		$this->positionIndex = $positionIndex;
		$this->apiParas["position_index"] = $positionIndex;
	}

	public function getPositionIndex()
	{
		return $this->positionIndex;
	}

	public function setQueryType($queryType)
	{
		$this->queryType = $queryType;
		$this->apiParas["query_type"] = $queryType;
	}

	public function getQueryType()
	{
		return $this->queryType;
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

	public function setTkStatus($tkStatus)
	{
		$this->tkStatus = $tkStatus;
		$this->apiParas["tk_status"] = $tkStatus;
	}

	public function getTkStatus()
	{
		return $this->tkStatus;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.sc.order.details.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
