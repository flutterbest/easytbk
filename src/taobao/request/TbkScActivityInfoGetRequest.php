<?php

namespace NiuGengYun\EasyTBK\taobao\request;

use NiuGengYun\EasyTBK\taobao\RequestCheckUtil;

/**
 * TOP API: taobao.tbk.sc.activity.info.get request
 * 
 * @author auto create
 * @since 1.0, 2020.02.20
 */
class TbkScActivityInfoGetRequest
{
	/** 
	 * 官方的物料id
	 **/
	private $activityMaterialId;
	
	/** 
	 * mm_xxx_xxx_xxx的第三位
	 **/
	private $adzoneId;
	
	/** 
	 * 代理id
	 **/
	private $relationId;
	
	/** 
	 * mm_xxx_xxx_xxx的第二位
	 **/
	private $siteId;
	
	private $apiParas = array();
	
	public function setActivityMaterialId($activityMaterialId)
	{
		$this->activityMaterialId = $activityMaterialId;
		$this->apiParas["activity_material_id"] = $activityMaterialId;
	}

	public function getActivityMaterialId()
	{
		return $this->activityMaterialId;
	}

	public function setAdzoneId($adzoneId)
	{
		$this->adzoneId = $adzoneId;
		$this->apiParas["adzone_id"] = $adzoneId;
	}

	public function getAdzoneId()
	{
		return $this->adzoneId;
	}

	public function setRelationId($relationId)
	{
		$this->relationId = $relationId;
		$this->apiParas["relation_id"] = $relationId;
	}

	public function getRelationId()
	{
		return $this->relationId;
	}

	public function setSiteId($siteId)
	{
		$this->siteId = $siteId;
		$this->apiParas["site_id"] = $siteId;
	}

	public function getSiteId()
	{
		return $this->siteId;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.sc.activity.info.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->activityMaterialId,"activityMaterialId");
		RequestCheckUtil::checkNotNull($this->adzoneId,"adzoneId");
		RequestCheckUtil::checkNotNull($this->siteId,"siteId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
