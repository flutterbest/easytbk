<?php
namespace NiuGengYun\EasyTBK\TaoBao\request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.dg.vegas.tlj.instance.report request
 * 
 * @author auto create
 * @since 1.0, 2019.09.11
 */
class TbkDgVegasTljInstanceReportRequest
{
	/** 
	 * 实例ID
	 **/
	private $rightsId;
	
	private $apiParas = array();
	
	public function setRightsId($rightsId)
	{
		$this->rightsId = $rightsId;
		$this->apiParas["rights_id"] = $rightsId;
	}

	public function getRightsId()
	{
		return $this->rightsId;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.dg.vegas.tlj.instance.report";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->rightsId,"rightsId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
