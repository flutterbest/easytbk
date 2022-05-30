<?php
namespace NiuGengYun\EasyTBK\SuNing\Request\Netalliance;

use NiuGengYun\EasyTBK\SuNing\SuningRequest;
use NiuGengYun\EasyTBK\SuNing\RequestCheckUtil;

/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2019-11-4
 */
class SearchcommodityQueryRequest  extends SuningRequest{

	/**
	 *
	 */
	private $branch;

	/**
	 *
	 */
	private $cityCode;

	/**
	 *
	 */
	private $endPrice;

	/**
	 *
	 */
	private $keyword;

	/**
	 *
	 */
	private $pageIndex;

	/**
	 *
	 */
	private $pgSearch;

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
	private $saleCategoryCode;

	/**
	 *
	 */
	private $size;

	/**
	 *
	 */
	private $sortType;
	/**
	 *
	 */
	private $coupon;

	/**
	 *
	 */
	private $startPrice;

	/**
	 *
	 */
	private $suningService;

	public function getBranch() {
		return $this->branch;
	}

	public function setBranch($branch) {
		$this->branch = $branch;
		$this->apiParams["branch"] = $branch;
	}

	public function getCityCode() {
		return $this->cityCode;
	}

	public function setCityCode($cityCode) {
		$this->cityCode = $cityCode;
		$this->apiParams["cityCode"] = $cityCode;
	}

	public function getEndPrice() {
		return $this->endPrice;
	}

	public function setEndPrice($endPrice) {
		$this->endPrice = $endPrice;
		$this->apiParams["endPrice"] = $endPrice;
	}

	public function getKeyword() {
		return $this->keyword;
	}

	public function setKeyword($keyword) {
		$this->keyword = $keyword;
		$this->apiParams["keyword"] = $keyword;
	}

	public function getPageIndex() {
		return $this->pageIndex;
	}

	public function setPageIndex($pageIndex) {
		$this->pageIndex = $pageIndex;
		$this->apiParams["pageIndex"] = $pageIndex;
	}

	public function getPgSearch() {
		return $this->pgSearch;
	}

	public function setPgSearch($pgSearch) {
		$this->pgSearch = $pgSearch;
		$this->apiParams["pgSearch"] = $pgSearch;
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

	public function getSaleCategoryCode() {
		return $this->saleCategoryCode;
	}

	public function setSaleCategoryCode($saleCategoryCode) {
		$this->saleCategoryCode = $saleCategoryCode;
		$this->apiParams["saleCategoryCode"] = $saleCategoryCode;
	}

	public function getSize() {
		return $this->size;
	}

	public function setSize($size) {
		$this->size = $size;
		$this->apiParams["size"] = $size;
	}

	public function getSortType() {
		return $this->sortType;
	}

	public function setSortType($sortType) {
		$this->sortType = $sortType;
		$this->apiParams["sortType"] = $sortType;
	}
	
	public function getCoupon() {
		return $this->coupon;
	}

	public function setCoupon($coupon) {
		$this->coupon = $coupon;
		$this->apiParams["coupon"] = $coupon;
	}

	public function getStartPrice() {
		return $this->startPrice;
	}

	public function setStartPrice($startPrice) {
		$this->startPrice = $startPrice;
		$this->apiParams["startPrice"] = $startPrice;
	}

	public function getSuningService() {
		return $this->suningService;
	}

	public function setSuningService($suningService) {
		$this->suningService = $suningService;
		$this->apiParams["suningService"] = $suningService;
	}

	public function getApiMethodName(){
		return 'suning.netalliance.searchcommodity.query';
	}

	public function getApiParams(){
		return $this->apiParams;
	}

	public function check(){
		//非空校验
	}

	public function getBizName(){
		return "querySearchcommodity";
	}

}

?>
