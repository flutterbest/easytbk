<?php

namespace NiuGengYun\EasyTBK\TaoBao\request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.sc.punish.order.get request
 * 
 * @author auto create
 * @since 1.0, 2019.07.04
 */
class TbkScPunishOrderGetRequest
{
	/** 
	 * 入参的对象
	 **/
	private $afOrderOption;
	
	private $apiParas = array();
	
	public function setAfOrderOption($afOrderOption)
	{
		$this->afOrderOption = $afOrderOption;
		$this->apiParas["af_order_option"] = $afOrderOption;
	}

	public function getAfOrderOption()
	{
		return $this->afOrderOption;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.sc.punish.order.get";
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
