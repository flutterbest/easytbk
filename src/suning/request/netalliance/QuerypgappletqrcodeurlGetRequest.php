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
class QuerypgappletqrcodeurlGetRequest  extends SuningRequest{

	/**
	 *
	 */
	private $activityId;

	/**
	 *
	 */
	private $page;

	/**
	 *
	 */
	private $subPromoter;

	public function getActivityId() {
		return $this->activityId;
	}

	public function setActivityId($activityId) {
		$this->activityId = $activityId;
		$this->apiParams["activityId"] = $activityId;
	}

	public function getPage() {
		return $this->page;
	}

	public function setPage($page) {
		$this->page = $page;
		$this->apiParams["page"] = $page;
	}

	public function getSubPromoter() {
		return $this->subPromoter;
	}

	public function setSubPromoter($subPromoter) {
		$this->subPromoter = $subPromoter;
		$this->apiParams["subPromoter"] = $subPromoter;
	}

	public function getApiMethodName(){
		return 'suning.netalliance.querypgappletqrcodeurl.get';
	}

	public function getApiParams(){
		return $this->apiParams;
	}

	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityId, 'activityId');
		RequestCheckUtil::checkNotNull($this->page, 'page');
	}

	public function getBizName(){
		return "getQuerypgappletqrcodeurl";
	}

}

?>
