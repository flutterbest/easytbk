<?php
namespace NiuGengYun\EasyTBK\suning\request\netalliance;

use NiuGengYun\EasyTBK\suning\SuningRequest;
use NiuGengYun\EasyTBK\suning\RequestCheckUtil;

/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2019-10-28
 */
class TwittershareurlQueryRequest  extends SuningRequest{

	/**
	 *
	 */
	private $goodsNo;

	public function getGoodsNo() {
		return $this->goodsNo;
	}

	public function setGoodsNo($goodsNo) {
		$this->goodsNo = $goodsNo;
		$this->apiParams["goodsNo"] = $goodsNo;
	}

	public function getApiMethodName(){
		return 'suning.netalliance.twittershareurl.query';
	}

	public function getApiParams(){
		return $this->apiParams;
	}

	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->goodsNo, 'goodsNo');
	}

	public function getBizName(){
		return "queryTwittershareurl";
	}

}

?>
