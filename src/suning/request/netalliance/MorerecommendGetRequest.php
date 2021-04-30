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
class MorerecommendGetRequest  extends SuningRequest{

	/**
	 *
	 */
	private $cityCode;

	/**
	 *
	 */
	private $commodityCode;

	/**
	 *
	 */
	private $picHeight;

	/**
	 *
	 */
	private $picLocation;

	/**
	 *
	 */
	private $picType;

	/**
	 *
	 */
	private $picWidth;

	/**
	 *
	 */
	private $supplierCode;

	public function getCityCode() {
		return $this->cityCode;
	}

	public function setCityCode($cityCode) {
		$this->cityCode = $cityCode;
		$this->apiParams["cityCode"] = $cityCode;
	}

	public function getCommodityCode() {
		return $this->commodityCode;
	}

	public function setCommodityCode($commodityCode) {
		$this->commodityCode = $commodityCode;
		$this->apiParams["commodityCode"] = $commodityCode;
	}

	public function getPicHeight() {
		return $this->picHeight;
	}

	public function setPicHeight($picHeight) {
		$this->picHeight = $picHeight;
		$this->apiParams["picHeight"] = $picHeight;
	}

	public function getPicLocation() {
		return $this->picLocation;
	}

	public function setPicLocation($picLocation) {
		$this->picLocation = $picLocation;
		$this->apiParams["picLocation"] = $picLocation;
	}

	public function getPicType() {
		return $this->picType;
	}

	public function setPicType($picType) {
		$this->picType = $picType;
		$this->apiParams["picType"] = $picType;
	}

	public function getPicWidth() {
		return $this->picWidth;
	}

	public function setPicWidth($picWidth) {
		$this->picWidth = $picWidth;
		$this->apiParams["picWidth"] = $picWidth;
	}

	public function getSupplierCode() {
		return $this->supplierCode;
	}

	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}

	public function getApiMethodName(){
		return 'suning.netalliance.morerecommend.get';
	}

	public function getApiParams(){
		return $this->apiParams;
	}

	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->commodityCode, 'commodityCode');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}

	public function getBizName(){
		return "getMorerecommend";
	}

}

?>
