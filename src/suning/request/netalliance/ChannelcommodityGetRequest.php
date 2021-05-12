<?php
namespace NiuGengYun\EasyTBK\suning\request\netalliance;

use NiuGengYun\EasyTBK\suning\SuningRequest;
use NiuGengYun\EasyTBK\suning\RequestCheckUtil;

/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2019-8-1
 */
class ChannelcommodityGetRequest  extends SuningRequest{

	/**
	 *
	 */
	private $backUrl;

	/**
	 *
	 */
	private $channelCode;

	/**
	 *
	 */
	private $custNum;

	/**
	 *
	 */
	private $visitUrl;

	public function getBackUrl() {
		return $this->backUrl;
	}

	public function setBackUrl($backUrl) {
		$this->backUrl = $backUrl;
		$this->apiParams["backUrl"] = $backUrl;
	}

	public function getChannelCode() {
		return $this->channelCode;
	}

	public function setChannelCode($channelCode) {
		$this->channelCode = $channelCode;
		$this->apiParams["channelCode"] = $channelCode;
	}

	public function getCustNum() {
		return $this->custNum;
	}

	public function setCustNum($custNum) {
		$this->custNum = $custNum;
		$this->apiParams["custNum"] = $custNum;
	}

	public function getVisitUrl() {
		return $this->visitUrl;
	}

	public function setVisitUrl($visitUrl) {
		$this->visitUrl = $visitUrl;
		$this->apiParams["visitUrl"] = $visitUrl;
	}

	public function getApiMethodName(){
		return 'suning.netalliance.channelcommodity.get';
	}

	public function getApiParams(){
		return $this->apiParams;
	}

	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->backUrl, 'backUrl');
		RequestCheckUtil::checkNotNull($this->channelCode, 'channelCode');
		RequestCheckUtil::checkNotNull($this->custNum, 'custNum');
		RequestCheckUtil::checkNotNull($this->visitUrl, 'visitUrl');
	}

	public function getBizName(){
		return "getChannelcommodity";
	}

}

?>
