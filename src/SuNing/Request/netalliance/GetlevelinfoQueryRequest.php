<?php
namespace NiuGengYun\EasyTBK\SuNing\Request\Netalliance;

use NiuGengYun\EasyTBK\SuNing\SuningRequest;
use NiuGengYun\EasyTBK\SuNing\RequestCheckUtil;

/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2018-11-16
 */
class GetlevelinfoQueryRequest  extends SuningRequest{

	/**
	 *
	 */
	private $memberNo;

	public function getMemberNo() {
		return $this->memberNo;
	}

	public function setMemberNo($memberNo) {
		$this->memberNo = $memberNo;
		$this->apiParams["memberNo"] = $memberNo;
	}

	public function getApiMethodName(){
		return 'suning.netalliance.getlevelinfo.query';
	}

	public function getApiParams(){
		return $this->apiParams;
	}

	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->memberNo, 'memberNo');
	}

	public function getBizName(){
		return "queryGetlevelinfo";
	}

}

?>
