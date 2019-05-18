<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.openuid.change request
 * 
 * @author auto create
 * @since 1.0, 2018.10.26
 */
class OpenuidChangeRequest
{
	/** 
	 * openUid
	 **/
	private $openUid;
	
	/** 
	 * 转换到的appkey
	 **/
	private $targetAppKey;
	
	private $apiParas = array();
	
	public function setOpenUid($openUid)
	{
		$this->openUid = $openUid;
		$this->apiParas["open_uid"] = $openUid;
	}

	public function getOpenUid()
	{
		return $this->openUid;
	}

	public function setTargetAppKey($targetAppKey)
	{
		$this->targetAppKey = $targetAppKey;
		$this->apiParas["target_app_key"] = $targetAppKey;
	}

	public function getTargetAppKey()
	{
		return $this->targetAppKey;
	}

	public function getApiMethodName()
	{
		return "taobao.openuid.change";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->openUid,"openUid");
		RequestCheckUtil::checkNotNull($this->targetAppKey,"targetAppKey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
