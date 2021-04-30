<?php

namespace NiuGengYun\EasyTBK\taobao\request;

use NiuGengYun\EasyTBK\taobao\RequestCheckUtil;

/**
 * TOP API: taobao.tbk.shop.convert request
 *
 * @author auto create
 * @since 1.0, 2016.07.25
 */
class TbkShopConvertRequest
{
	/**
	 * 广告位ID，区分效果位置
	 **/
	private $adzoneId;

	/**
	 * 需返回的字段列表
	 **/
	private $fields;

	/**
	 * 链接形式：1：PC，2：无线，默认：１
	 **/
	private $platform;

	/**
	 * 自定义输入串，英文和数字组成，长度不能大于12个字符，区分不同的推广渠道
	 **/
	private $unid;

	/**
	 * 卖家ID串，用','分割，从taobao.tbk.shop.get接口获取user_id字段
	 **/
	private $userIds;

	private $apiParas = array();

	public function setAdzoneId($adzoneId)
	{
		$this->adzoneId = $adzoneId;
		$this->apiParas["adzone_id"] = $adzoneId;
	}

	public function getAdzoneId()
	{
		return $this->adzoneId;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setPlatform($platform)
	{
		$this->platform = $platform;
		$this->apiParas["platform"] = $platform;
	}

	public function getPlatform()
	{
		return $this->platform;
	}

	public function setUnid($unid)
	{
		$this->unid = $unid;
		$this->apiParas["unid"] = $unid;
	}

	public function getUnid()
	{
		return $this->unid;
	}

	public function setUserIds($userIds)
	{
		$this->userIds = $userIds;
		$this->apiParas["user_ids"] = $userIds;
	}

	public function getUserIds()
	{
		return $this->userIds;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.shop.convert";
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{

		RequestCheckUtil::checkNotNull($this->adzoneId,"adzoneId");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->userIds,"userIds");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
