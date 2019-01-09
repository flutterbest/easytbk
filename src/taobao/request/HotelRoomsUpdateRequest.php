<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

/**
 * TOP API: taobao.hotel.rooms.update request
 *
 * @author auto create
 * @since 1.0, 2015.06.04
 */
class HotelRoomsUpdateRequest
{
	/**
	 * 多商品房态信息。json encode。每个商品房态参考单商品更新中的room_quota字段。反序列化后入：array(( 'gid'=>1或者'rid'=>1或者'outer_id=>1', 'roomQuota'=>array(('date'=>'2011-01-29', 'price'=>100, 'num'=>1),('date'=>'2011-01-30', 'price'=>100, 'num'=>1)),( 'gid'=>2或者'rid'=>1或者'outer_id=>1', 'roomQuota'=>array(('date'=>'2011-01-29', 'price'=>100, 'num'=>1),('date'=>'2011-01-30', 'price'=>100, 'num'=>1)))
	 **/
	private $gidRoomQuotaMap;

	/**
	 * 为到店支付卖家特殊使用，可传入多种支付类型的房态信息。该参数有值时，忽略gid_room_quota_map参数；该参数无值时，使用gid_room_quota_map参数
	 **/
	private $multiRoomQuotas;

	private $apiParas = array();

	public function setGidRoomQuotaMap($gidRoomQuotaMap)
	{
		$this->gidRoomQuotaMap = $gidRoomQuotaMap;
		$this->apiParas["gid_room_quota_map"] = $gidRoomQuotaMap;
	}

	public function getGidRoomQuotaMap()
	{
		return $this->gidRoomQuotaMap;
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

	public function getApiMethodName()
	{
		return "taobao.hotel.rooms.update";
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
