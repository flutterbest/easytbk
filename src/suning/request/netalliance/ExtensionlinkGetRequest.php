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
class ExtensionlinkGetRequest  extends SuningRequest{

	/**
	 *
	 */
	private $productUrl;

	/**
	 *
	 */
	private $promotionId;

	/**
	 *
	 */
	private $quanUrl;

	/**
	 *
	 */
	private $subUser;

	public function getProductUrl() {
		return $this->productUrl;
	}

	public function setProductUrl($productUrl) {
		$this->productUrl = $productUrl;
		$this->apiParams["productUrl"] = $productUrl;
	}

	public function getPromotionId() {
		return $this->promotionId;
	}

	public function setPromotionId($promotionId) {
		$this->promotionId = $promotionId;
		$this->apiParams["promotionId"] = $promotionId;
	}

	public function getQuanUrl() {
		return $this->quanUrl;
	}

	public function setQuanUrl($quanUrl) {
		$this->quanUrl = $quanUrl;
		$this->apiParams["quanUrl"] = $quanUrl;
	}

	public function getSubUser() {
		return $this->subUser;
	}

	public function setSubUser($subUser) {
		$this->subUser = $subUser;
		$this->apiParams["subUser"] = $subUser;
	}

	public function getApiMethodName(){
		return 'suning.netalliance.extensionlink.get';
	}

	public function getApiParams(){
		return $this->apiParams;
	}

	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->productUrl, 'productUrl');
	}

	public function getBizName(){
		return "getExtensionlink";
	}

}

?>
