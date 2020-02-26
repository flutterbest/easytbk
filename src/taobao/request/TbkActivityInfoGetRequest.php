<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;

/**
 * TOP API: taobao.tbk.activity.info.get request
 * 
 * @author auto create
 * @since 1.0, 2020.02.20
 */
class TbkActivityInfoGetRequest
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
	 * mm_xxx_xxx_xxx 仅三方分成场景使用
	 **/
	private $subPid;
	
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

	public function setSubPid($subPid)
	{
		$this->subPid = $subPid;
		$this->apiParas["sub_pid"] = $subPid;
	}

	public function getSubPid()
	{
		return $this->subPid;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.activity.info.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->activityMaterialId,"activityMaterialId");
		RequestCheckUtil::checkNotNull($this->adzoneId,"adzoneId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
