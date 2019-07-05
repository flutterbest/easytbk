<?php
namespace NiuGengYun\EasyTBK\TaoBao\Request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.sc.invitecode.get request
 * 
 * @author auto create
 * @since 1.0, 2018.06.13
 */
class TbkScInvitecodeGetRequest
{
	/** 
	 * 邀请码类型，1 - 渠道邀请，2 - 渠道裂变
	 **/
	private $codeType;
	
	/** 
	 * 渠道推广的物料类型
	 **/
	private $relationApp;
	
	/** 
	 * 渠道关系ID
	 **/
	private $relationId;
	
	private $apiParas = array();
	
	public function setCodeType($codeType)
	{
		$this->codeType = $codeType;
		$this->apiParas["code_type"] = $codeType;
	}

	public function getCodeType()
	{
		return $this->codeType;
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
		return "taobao.tbk.sc.invitecode.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->codeType,"codeType");
		RequestCheckUtil::checkNotNull($this->relationApp,"relationApp");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
