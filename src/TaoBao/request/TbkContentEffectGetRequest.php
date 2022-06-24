<?php

namespace NiuGengYun\EasyTBK\TaoBao\request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.content.effect.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TbkContentEffectGetRequest
{
	/** 
	 * 入参
	 **/
	private $option;
	
	private $apiParas = array();
	
	public function setOption($option)
	{
		$this->option = $option;
		$this->apiParas["option"] = $option;
	}

	public function getOption()
	{
		return $this->option;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.content.effect.get";
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
