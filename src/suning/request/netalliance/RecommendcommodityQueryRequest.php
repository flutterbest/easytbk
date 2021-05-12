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
class RecommendcommodityQueryRequest  extends SuningRequest{

	/**
	 *
	 */
	private $cityCode;

	/**
	 *
	 */
	private $pageIndex;

	/**
	 *
	 */
	private $picHeight;

	/**
	 *
	 */
	private $picWidth;

	/**
	 *
	 */
	private $size;

	public function getCityCode() {
		return $this->cityCode;
	}

	public function setCityCode($cityCode) {
		$this->cityCode = $cityCode;
		$this->apiParams["cityCode"] = $cityCode;
	}

	public function getPageIndex() {
		return $this->pageIndex;
	}

	public function setPageIndex($pageIndex) {
		$this->pageIndex = $pageIndex;
		$this->apiParams["pageIndex"] = $pageIndex;
	}

	public function getPicHeight() {
		return $this->picHeight;
	}

	public function setPicHeight($picHeight) {
		$this->picHeight = $picHeight;
		$this->apiParams["picHeight"] = $picHeight;
	}

	public function getPicWidth() {
		return $this->picWidth;
	}

	public function setPicWidth($picWidth) {
		$this->picWidth = $picWidth;
		$this->apiParams["picWidth"] = $picWidth;
	}

	public function getSize() {
		return $this->size;
	}

	public function setSize($size) {
		$this->size = $size;
		$this->apiParams["size"] = $size;
	}

	public function getApiMethodName(){
		return 'suning.netalliance.recommendcommodity.query';
	}

	public function getApiParams(){
		return $this->apiParams;
	}

	public function check(){
		//非空校验
	}

	public function getBizName(){
		return "queryRecommendcommodity";
	}

}

?>
