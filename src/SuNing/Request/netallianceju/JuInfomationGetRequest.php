<?php
namespace NiuGengYun\EasyTBK\SuNing\Request\Netallianceju;

use NiuGengYun\EasyTBK\SuNing\SuningRequest;
use NiuGengYun\EasyTBK\SuNing\RequestCheckUtil;

/**
 * 苏宁开放平台接口 - 单笔查询大聚会商品信息
 *
 * @author suning
 * @date   2015-9-14
 */
class JuInfomationGetRequest  extends SuningRequest{

	/**
	 * 商品编码。商品编码
	 */
	private $commCode;

	public function getCommCode() {
		return $this->commCode;
	}

	public function setCommCode($commCode) {
		$this->commCode = $commCode;
		$this->apiParams["commCode"] = $commCode;
	}

	public function getApiMethodName(){
		return 'suning.netalliance.juinfomation.get';
	}

	public function getApiParams(){
		return $this->apiParams;
	}

	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->commCode, 'commCode');
	}

	public function getBizName(){
		return "getJuInfomation";
	}

}

?>
