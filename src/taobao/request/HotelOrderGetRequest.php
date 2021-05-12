<?php

namespace NiuGengYun\EasyTBK\taobao\request;

/**
 * TOP API: taobao.hotel.order.get request
 *
 * @author auto create
 * @since 1.0, 2015.07.02
 */
class HotelOrderGetRequest
{
	/**
	 * 是否需要返回该订单的入住人列表。可选值：true，false。
	 **/
	private $needGuest;

	/**
	 * 是否显示买家留言，可选值true、false
	 **/
	private $needMessage;

	/**
	 * 酒店订单oid，必须为数字。oid，tid必须传一项，同时传递的情况下，作为查询条件的优先级由高到低依次为oid，tid。
	 **/
	private $oid;

	/**
	 * 淘宝订单tid，必须为数字。oid，tid必须传一项，同时传递的情况下，作为查询条件的优先级由高到低依次为oid，tid。
	 **/
	private $tid;

	private $apiParas = array();

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

	public function setOid($oid)
	{
		$this->oid = $oid;
		$this->apiParas["oid"] = $oid;
	}

	public function getOid()
	{
		return $this->oid;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "taobao.hotel.order.get";
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{

	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
