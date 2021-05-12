<?php

namespace NiuGengYun\EasyTBK\taobao\request;

use NiuGengYun\EasyTBK\taobao\RequestCheckUtil;

/**
 * TOP API: taobao.hotel.get request
 *
 * @author auto create
 * @since 1.0, 2015.06.04
 */
class HotelGetRequest
{
	/**
	 * true表示查询酒店审核状态，false表示查询已审核通过酒店详细信息
	 **/
	private $checkAudit;

	/**
	 * 要查询的酒店id。必须为数字
	 **/
	private $hid;

	/**
	 * 是否需要返回该酒店的房型列表。可选值：true，false。
	 **/
	private $needRoomType;

	private $apiParas = array();

	public function setCheckAudit($checkAudit)
	{
		$this->checkAudit = $checkAudit;
		$this->apiParas["check_audit"] = $checkAudit;
	}

	public function getCheckAudit()
	{
		return $this->checkAudit;
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

	public function setNeedRoomType($needRoomType)
	{
		$this->needRoomType = $needRoomType;
		$this->apiParas["need_room_type"] = $needRoomType;
	}

	public function getNeedRoomType()
	{
		return $this->needRoomType;
	}

	public function getApiMethodName()
	{
		return "taobao.hotel.get";
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{

		RequestCheckUtil::checkNotNull($this->hid,"hid");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
