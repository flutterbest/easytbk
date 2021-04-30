<?php
namespace NiuGengYun\EasyTBK\suning\request\netalliance;

use NiuGengYun\EasyTBK\suning\SuningRequest;
use NiuGengYun\EasyTBK\suning\RequestCheckUtil;

/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2019-12-6
 */
class QuerypacketQueryRequest  extends SuningRequest{

	/**
	 *
	 */
	private $activityId;

	public function getActivityId() {
		return $this->activityId;
	}

	public function setActivityId($activityId) {
		$this->activityId = $activityId;
		$this->apiParams["activityId"] = $activityId;
	}

	public function getApiMethodName(){
		return 'suning.netalliance.querypacket.query';
	}

	public function getApiParams(){
		return $this->apiParams;
	}

	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityId, 'activityId');
	}

	public function getBizName(){
		return "queryQuerypacket";
	}

}

?>
