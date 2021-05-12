<?php
namespace NiuGengYun\EasyTBK\suning\request\netalliance;

use NiuGengYun\EasyTBK\suning\SuningRequest;
use NiuGengYun\EasyTBK\suning\RequestCheckUtil;

/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2019-9-19
 */
class ThirdpartyproductQueryRequest  extends SuningRequest{

	/**
	 *
	 */
	private $detailUrl;

	/**
	 *
	 */
	private $statParam;

	public function getDetailUrl() {
		return $this->detailUrl;
	}

	public function setDetailUrl($detailUrl) {
		$this->detailUrl = $detailUrl;
		$this->apiParams["detailUrl"] = $detailUrl;
	}

	public function getStatParam() {
		return $this->statParam;
	}

	public function setStatParam($statParam) {
		$this->statParam = $statParam;
		$this->apiParams["statParam"] = $statParam;
	}

	public function getApiMethodName(){
		return 'suning.netalliance.thirdpartyproduct.query';
	}

	public function getApiParams(){
		return $this->apiParams;
	}

	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->detailUrl, 'detailUrl');
		RequestCheckUtil::checkNotNull($this->statParam, 'statParam');
	}

	public function getBizName(){
		return "queryThirdpartyproduct";
	}

}

?>
