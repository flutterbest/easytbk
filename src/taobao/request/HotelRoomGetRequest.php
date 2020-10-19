<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

/**
 * TOP API: taobao.hotel.room.get request
 *
 * @author auto create
 * @since 1.0, 2015.06.04
 */
class HotelRoomGetRequest
{
	/**
	 * 酒店房间商品gid。必须为数字。gid和item_id至少要传一个。
	 **/
	private $gid;

	/**
	 * 酒店房间商品item_id。必须为数字。item_id和gid至少要传一个。
	 **/
	private $itemId;

	/**
	 * 是否需要返回该商品的酒店信息。可选值：true，false。
	 **/
	private $needHotel;

	/**
	 * 是否需要返回该商品的宝贝描述。可选值：true，false。
	 **/
	private $needRoomDesc;

	/**
	 * 是否需要返回该商品的房态列表。可选值：true，false。
	 **/
	private $needRoomQuotas;

	/**
	 * 是否需要返回该商品的房型信息。可选值：true，false。
	 **/
	private $needRoomType;

	/**
	 * 卖家房型id
	 **/
	private $outerId;

	/**
	 * 淘宝房型主键
	 **/
	private $rid;

	private $apiParas = array();

	public function setGid($gid)
	{
		$this->gid = $gid;
		$this->apiParas["gid"] = $gid;
	}

	public function getGid()
	{
		return $this->gid;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setNeedHotel($needHotel)
	{
		$this->needHotel = $needHotel;
		$this->apiParas["need_hotel"] = $needHotel;
	}

	public function getNeedHotel()
	{
		return $this->needHotel;
	}

	public function setNeedRoomDesc($needRoomDesc)
	{
		$this->needRoomDesc = $needRoomDesc;
		$this->apiParas["need_room_desc"] = $needRoomDesc;
	}

	public function getNeedRoomDesc()
	{
		return $this->needRoomDesc;
	}

	public function setNeedRoomQuotas($needRoomQuotas)
	{
		$this->needRoomQuotas = $needRoomQuotas;
		$this->apiParas["need_room_quotas"] = $needRoomQuotas;
	}

	public function getNeedRoomQuotas()
	{
		return $this->needRoomQuotas;
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

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
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

	public function getApiMethodName()
	{
		return "taobao.hotel.room.get";
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
