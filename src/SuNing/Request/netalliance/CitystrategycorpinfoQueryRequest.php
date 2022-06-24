<?php
namespace NiuGengYun\EasyTBK\SuNing\Request\Netalliance;

use NiuGengYun\EasyTBK\SuNing\SelectSuningRequest;
use NiuGengYun\EasyTBK\SuNing\RequestCheckUtil;

/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2019-7-17
 */
class CitystrategycorpinfoQueryRequest  extends SelectSuningRequest{



	/**
	 *
	 */
	private $strategyNo;



	public function getStrategyNo() {
		return $this->strategyNo;
	}

	public function setStrategyNo($strategyNo) {
		$this->strategyNo = $strategyNo;
		$this->apiParams["strategyNo"] = $strategyNo;
	}

	public function getApiMethodName(){
		return 'suning.netalliance.citystrategycorpinfo.query';
	}

	public function getApiParams(){
		return $this->apiParams;
	}

	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->pageNo, 'pageNo');
		RequestCheckUtil::checkNotNull($this->pageSize, 'pageSize');
		RequestCheckUtil::checkNotNull($this->strategyNo, 'strategyNo');
	}

	public function getBizName(){
		return "queryCitystrategycorpinfo";
	}

}

?>
