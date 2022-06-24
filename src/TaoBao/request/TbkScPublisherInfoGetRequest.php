<?php
namespace NiuGengYun\EasyTBK\TaoBao\request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.sc.publisher.info.get request
 * 
 * @author auto create
 * @since 1.0, 2018.06.25
 */
class TbkScPublisherInfoGetRequest
{
	/** 
	 * 类型，必选 1:渠道备案
	 **/
	private $infoType;
	
	/** 
	 * 第几页
	 **/
	private $pageNo;
	
	/** 
	 * 每页大小
	 **/
	private $pageSize;
	
	/** 
	 * 渠道推广的物料类型
	 **/
	private $relationApp;
	
	/** 
	 * 渠道备案 - 渠道关系ID
	 **/
	private $relationId;
	
	private $apiParas = array();
	
	public function setInfoType($infoType)
	{
		$this->infoType = $infoType;
		$this->apiParas["info_type"] = $infoType;
	}

	public function getInfoType()
	{
		return $this->infoType;
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

	public function setRelationApp($relationApp)
	{
		$this->relationApp = $relationApp;
		$this->apiParas["relation_app"] = $relationApp;
	}

	public function getRelationApp()
	{
		return $this->relationApp;
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

	public function getApiMethodName()
	{
		return "taobao.tbk.sc.publisher.info.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->infoType,"infoType");
		RequestCheckUtil::checkNotNull($this->relationApp,"relationApp");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
