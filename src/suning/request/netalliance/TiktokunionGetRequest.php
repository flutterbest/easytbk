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
class TiktokunionGetRequest  extends SuningRequest{

	/**
	 *
	 */
	private $channel;

	/**
	 *
	 */
	private $outerId;

	/**
	 *
	 */
	private $statParam;

	public function getChannel() {
		return $this->channel;
	}

	public function setChannel($channel) {
		$this->channel = $channel;
		$this->apiParams["channel"] = $channel;
	}

	public function getOuterId() {
		return $this->outerId;
	}

	public function setOuterId($outerId) {
		$this->outerId = $outerId;
		$this->apiParams["outerId"] = $outerId;
	}

	public function getStatParam() {
		return $this->statParam;
	}

	public function setStatParam($statParam) {
		$this->statParam = $statParam;
		$this->apiParams["statParam"] = $statParam;
	}

	public function getApiMethodName(){
		return 'suning.netalliance.tiktokgetunion.get';
	}

	public function getApiParams(){
		return $this->apiParams;
	}

	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->channel, 'channel');
		RequestCheckUtil::checkNotNull($this->outerId, 'outerId');
		RequestCheckUtil::checkNotNull($this->statParam, 'statParam');
	}

	public function getBizName(){
		return "getTiktokgetunion";
	}

}

?>
