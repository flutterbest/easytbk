<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.item.convert request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TbkItemConvertRequest
{
	/** 
	 * 广告位ID，区分效果位置
	 **/
	private $adzoneId;
	
	/** 
	 * 1表示商品转通用计划链接，其他值或不传表示转营销计划链接
	 **/
	private $dx;
	
	/** 
	 * 需返回的字段列表
	 **/
	private $fields;
	
	/** 
	 * 商品ID串，用','分割，从taobao.tbk.item.get接口获取num_iid字段，最大40个
	 **/
	private $numIids;
	
	/** 
	 * 链接形式：1：PC，2：无线，默认：１
	 **/
	private $platform;
	
	/** 
	 * 自定义输入串，英文和数字组成，长度不能大于12个字符，区分不同的推广渠道
	 **/
	private $unid;
	
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

	public function setDx($dx)
	{
		$this->dx = $dx;
		$this->apiParas["dx"] = $dx;
	}

	public function getDx()
	{
		return $this->dx;
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

	public function setNumIids($numIids)
	{
		$this->numIids = $numIids;
		$this->apiParas["num_iids"] = $numIids;
	}

	public function getNumIids()
	{
		return $this->numIids;
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

	public function getApiMethodName()
	{
		return "taobao.tbk.item.convert";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adzoneId,"adzoneId");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->numIids,"numIids");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
