<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.item.click.extract request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TbkItemClickExtractRequest
{
	/** 
	 * 长链接或短链接
	 **/
	private $clickUrl;
	
	private $apiParas = array();
	
	public function setClickUrl($clickUrl)
	{
		$this->clickUrl = $clickUrl;
		$this->apiParas["click_url"] = $clickUrl;
	}

	public function getClickUrl()
	{
		return $this->clickUrl;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.item.click.extract";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->clickUrl,"clickUrl");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
