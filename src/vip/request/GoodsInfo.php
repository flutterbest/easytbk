<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace NiuGengYun\EasyTBK\Vip\Request;

class GoodsInfo {

	static $_TSPEC;
	public $goodsId = null;
	public $goodsName = null;
	public $goodsDesc = null;
	public $destUrl = null;
	public $goodsThumbUrl = null;
	public $goodsCarouselPictures = null;
	public $goodsMainPicture = null;
	public $categoryId = null;
	public $categoryName = null;
	public $sourceType = null;
	public $marketPrice = null;
	public $vipPrice = null;
	public $commissionRate = null;
	public $commission = null;
	public $discount = null;
	public $goodsDetailPictures = null;
	public $cat1stId = null;
	public $cat1stName = null;
	public $cat2ndId = null;
	public $cat2ndName = null;
	public $brandStoreSn = null;
	public $brandName = null;
	public $brandLogoFull = null;
	public $schemeEndTime = null;
	public $sellTimeFrom = null;
	public $sellTimeTo = null;
	public $weight = null;
	public $storeInfo = null;
	public $commentsInfo = null;
	public $storeServiceCapability = null;
	public $brandId = null;
	public $schemeStartTime = null;
	public $saleStockStatus = null;
	public $status = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodsId'
			),
			2 => array(
			'var' => 'goodsName'
			),
			3 => array(
			'var' => 'goodsDesc'
			),
			4 => array(
			'var' => 'destUrl'
			),
			5 => array(
			'var' => 'goodsThumbUrl'
			),
			6 => array(
			'var' => 'goodsCarouselPictures'
			),
			7 => array(
			'var' => 'goodsMainPicture'
			),
			8 => array(
			'var' => 'categoryId'
			),
			9 => array(
			'var' => 'categoryName'
			),
			10 => array(
			'var' => 'sourceType'
			),
			11 => array(
			'var' => 'marketPrice'
			),
			12 => array(
			'var' => 'vipPrice'
			),
			13 => array(
			'var' => 'commissionRate'
			),
			14 => array(
			'var' => 'commission'
			),
			15 => array(
			'var' => 'discount'
			),
			16 => array(
			'var' => 'goodsDetailPictures'
			),
			17 => array(
			'var' => 'cat1stId'
			),
			18 => array(
			'var' => 'cat1stName'
			),
			19 => array(
			'var' => 'cat2ndId'
			),
			20 => array(
			'var' => 'cat2ndName'
			),
			21 => array(
			'var' => 'brandStoreSn'
			),
			22 => array(
			'var' => 'brandName'
			),
			23 => array(
			'var' => 'brandLogoFull'
			),
			24 => array(
			'var' => 'schemeEndTime'
			),
			25 => array(
			'var' => 'sellTimeFrom'
			),
			26 => array(
			'var' => 'sellTimeTo'
			),
			27 => array(
			'var' => 'weight'
			),
			28 => array(
			'var' => 'storeInfo'
			),
			29 => array(
			'var' => 'commentsInfo'
			),
			30 => array(
			'var' => 'storeServiceCapability'
			),
			31 => array(
			'var' => 'brandId'
			),
			32 => array(
			'var' => 'schemeStartTime'
			),
			33 => array(
			'var' => 'saleStockStatus'
			),
			34 => array(
			'var' => 'status'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['goodsId'])){

				$this->goodsId = $vals['goodsId'];
			}


			if (isset($vals['goodsName'])){

				$this->goodsName = $vals['goodsName'];
			}


			if (isset($vals['goodsDesc'])){

				$this->goodsDesc = $vals['goodsDesc'];
			}


			if (isset($vals['destUrl'])){

				$this->destUrl = $vals['destUrl'];
			}


			if (isset($vals['goodsThumbUrl'])){

				$this->goodsThumbUrl = $vals['goodsThumbUrl'];
			}


			if (isset($vals['goodsCarouselPictures'])){

				$this->goodsCarouselPictures = $vals['goodsCarouselPictures'];
			}


			if (isset($vals['goodsMainPicture'])){

				$this->goodsMainPicture = $vals['goodsMainPicture'];
			}


			if (isset($vals['categoryId'])){

				$this->categoryId = $vals['categoryId'];
			}


			if (isset($vals['categoryName'])){

				$this->categoryName = $vals['categoryName'];
			}


			if (isset($vals['sourceType'])){

				$this->sourceType = $vals['sourceType'];
			}


			if (isset($vals['marketPrice'])){

				$this->marketPrice = $vals['marketPrice'];
			}


			if (isset($vals['vipPrice'])){

				$this->vipPrice = $vals['vipPrice'];
			}


			if (isset($vals['commissionRate'])){

				$this->commissionRate = $vals['commissionRate'];
			}


			if (isset($vals['commission'])){

				$this->commission = $vals['commission'];
			}


			if (isset($vals['discount'])){

				$this->discount = $vals['discount'];
			}


			if (isset($vals['goodsDetailPictures'])){

				$this->goodsDetailPictures = $vals['goodsDetailPictures'];
			}


			if (isset($vals['cat1stId'])){

				$this->cat1stId = $vals['cat1stId'];
			}


			if (isset($vals['cat1stName'])){

				$this->cat1stName = $vals['cat1stName'];
			}


			if (isset($vals['cat2ndId'])){

				$this->cat2ndId = $vals['cat2ndId'];
			}


			if (isset($vals['cat2ndName'])){

				$this->cat2ndName = $vals['cat2ndName'];
			}


			if (isset($vals['brandStoreSn'])){

				$this->brandStoreSn = $vals['brandStoreSn'];
			}


			if (isset($vals['brandName'])){

				$this->brandName = $vals['brandName'];
			}


			if (isset($vals['brandLogoFull'])){

				$this->brandLogoFull = $vals['brandLogoFull'];
			}


			if (isset($vals['schemeEndTime'])){

				$this->schemeEndTime = $vals['schemeEndTime'];
			}


			if (isset($vals['sellTimeFrom'])){

				$this->sellTimeFrom = $vals['sellTimeFrom'];
			}


			if (isset($vals['sellTimeTo'])){

				$this->sellTimeTo = $vals['sellTimeTo'];
			}


			if (isset($vals['weight'])){

				$this->weight = $vals['weight'];
			}


			if (isset($vals['storeInfo'])){

				$this->storeInfo = $vals['storeInfo'];
			}


			if (isset($vals['commentsInfo'])){

				$this->commentsInfo = $vals['commentsInfo'];
			}


			if (isset($vals['storeServiceCapability'])){

				$this->storeServiceCapability = $vals['storeServiceCapability'];
			}


			if (isset($vals['brandId'])){

				$this->brandId = $vals['brandId'];
			}


			if (isset($vals['schemeStartTime'])){

				$this->schemeStartTime = $vals['schemeStartTime'];
			}


			if (isset($vals['saleStockStatus'])){

				$this->saleStockStatus = $vals['saleStockStatus'];
			}


			if (isset($vals['status'])){

				$this->status = $vals['status'];
			}


		}

	}


	public function getName(){

		return 'GoodsInfo';
	}

	public function read($input){

		$input->readStructBegin();
		while(true){

			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;


			if ("goodsId" == $schemeField){

				$needSkip = false;
				$input->readString($this->goodsId);

			}




			if ("goodsName" == $schemeField){

				$needSkip = false;
				$input->readString($this->goodsName);

			}




			if ("goodsDesc" == $schemeField){

				$needSkip = false;
				$input->readString($this->goodsDesc);

			}




			if ("destUrl" == $schemeField){

				$needSkip = false;
				$input->readString($this->destUrl);

			}




			if ("goodsThumbUrl" == $schemeField){

				$needSkip = false;
				$input->readString($this->goodsThumbUrl);

			}




			if ("goodsCarouselPictures" == $schemeField){

				$needSkip = false;

				$this->goodsCarouselPictures = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){

					try{

						$elem0 = null;
						$input->readString($elem0);

						$this->goodsCarouselPictures[$_size0++] = $elem0;
					}
					catch(\Exception $e){

						break;
					}
				}

				$input->readListEnd();

			}




			if ("goodsMainPicture" == $schemeField){

				$needSkip = false;
				$input->readString($this->goodsMainPicture);

			}




			if ("categoryId" == $schemeField){

				$needSkip = false;
				$input->readI64($this->categoryId);

			}




			if ("categoryName" == $schemeField){

				$needSkip = false;
				$input->readString($this->categoryName);

			}




			if ("sourceType" == $schemeField){

				$needSkip = false;
				$input->readI32($this->sourceType);

			}




			if ("marketPrice" == $schemeField){

				$needSkip = false;
				$input->readString($this->marketPrice);

			}




			if ("vipPrice" == $schemeField){

				$needSkip = false;
				$input->readString($this->vipPrice);

			}




			if ("commissionRate" == $schemeField){

				$needSkip = false;
				$input->readString($this->commissionRate);

			}




			if ("commission" == $schemeField){

				$needSkip = false;
				$input->readString($this->commission);

			}




			if ("discount" == $schemeField){

				$needSkip = false;
				$input->readString($this->discount);

			}




			if ("goodsDetailPictures" == $schemeField){

				$needSkip = false;

				$this->goodsDetailPictures = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){

					try{

						$elem1 = null;
						$input->readString($elem1);

						$this->goodsDetailPictures[$_size1++] = $elem1;
					}
					catch(\Exception $e){

						break;
					}
				}

				$input->readListEnd();

			}




			if ("cat1stId" == $schemeField){

				$needSkip = false;
				$input->readI64($this->cat1stId);

			}




			if ("cat1stName" == $schemeField){

				$needSkip = false;
				$input->readString($this->cat1stName);

			}




			if ("cat2ndId" == $schemeField){

				$needSkip = false;
				$input->readI64($this->cat2ndId);

			}




			if ("cat2ndName" == $schemeField){

				$needSkip = false;
				$input->readString($this->cat2ndName);

			}




			if ("brandStoreSn" == $schemeField){

				$needSkip = false;
				$input->readString($this->brandStoreSn);

			}




			if ("brandName" == $schemeField){

				$needSkip = false;
				$input->readString($this->brandName);

			}




			if ("brandLogoFull" == $schemeField){

				$needSkip = false;
				$input->readString($this->brandLogoFull);

			}




			if ("schemeEndTime" == $schemeField){

				$needSkip = false;
				$input->readI64($this->schemeEndTime);

			}




			if ("sellTimeFrom" == $schemeField){

				$needSkip = false;
				$input->readI64($this->sellTimeFrom);

			}




			if ("sellTimeTo" == $schemeField){

				$needSkip = false;
				$input->readI64($this->sellTimeTo);

			}




			if ("weight" == $schemeField){

				$needSkip = false;
				$input->readI32($this->weight);

			}




			if ("storeInfo" == $schemeField){

				$needSkip = false;

				$this->storeInfo = new \NiuGengYun\EasyTBK\Vip\Request\StoreInfo();
				$this->storeInfo->read($input);

			}




			if ("commentsInfo" == $schemeField){

				$needSkip = false;

				$this->commentsInfo = new \NiuGengYun\EasyTBK\Vip\Request\GoodsCommentsInfo();
				$this->commentsInfo->read($input);

			}




			if ("storeServiceCapability" == $schemeField){

				$needSkip = false;

				$this->storeServiceCapability = new \NiuGengYun\EasyTBK\Vip\Request\StoreServiceCapability();
				$this->storeServiceCapability->read($input);

			}




			if ("brandId" == $schemeField){

				$needSkip = false;
				$input->readI64($this->brandId);

			}




			if ("schemeStartTime" == $schemeField){

				$needSkip = false;
				$input->readI64($this->schemeStartTime);

			}




			if ("saleStockStatus" == $schemeField){

				$needSkip = false;
				$input->readI32($this->saleStockStatus);

			}




			if ("status" == $schemeField){

				$needSkip = false;
				$input->readI32($this->status);

			}



			if($needSkip){

				\NiuGengYun\EasyTBK\Vip\Osp\Protocol\ProtocolUtil::skip($input);
			}

			$input->readFieldEnd();
		}

		$input->readStructEnd();



	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		if($this->goodsId !== null) {

			$xfer += $output->writeFieldBegin('goodsId');
			$xfer += $output->writeString($this->goodsId);

			$xfer += $output->writeFieldEnd();
		}


		if($this->goodsName !== null) {

			$xfer += $output->writeFieldBegin('goodsName');
			$xfer += $output->writeString($this->goodsName);

			$xfer += $output->writeFieldEnd();
		}


		if($this->goodsDesc !== null) {

			$xfer += $output->writeFieldBegin('goodsDesc');
			$xfer += $output->writeString($this->goodsDesc);

			$xfer += $output->writeFieldEnd();
		}


		if($this->destUrl !== null) {

			$xfer += $output->writeFieldBegin('destUrl');
			$xfer += $output->writeString($this->destUrl);

			$xfer += $output->writeFieldEnd();
		}


		if($this->goodsThumbUrl !== null) {

			$xfer += $output->writeFieldBegin('goodsThumbUrl');
			$xfer += $output->writeString($this->goodsThumbUrl);

			$xfer += $output->writeFieldEnd();
		}


		if($this->goodsCarouselPictures !== null) {

			$xfer += $output->writeFieldBegin('goodsCarouselPictures');

			if (!is_array($this->goodsCarouselPictures)){

				throw new \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}

			$output->writeListBegin();
			foreach ($this->goodsCarouselPictures as $iter0){

				$xfer += $output->writeString($iter0);

			}

			$output->writeListEnd();

			$xfer += $output->writeFieldEnd();
		}


		if($this->goodsMainPicture !== null) {

			$xfer += $output->writeFieldBegin('goodsMainPicture');
			$xfer += $output->writeString($this->goodsMainPicture);

			$xfer += $output->writeFieldEnd();
		}


		if($this->categoryId !== null) {

			$xfer += $output->writeFieldBegin('categoryId');
			$xfer += $output->writeI64($this->categoryId);

			$xfer += $output->writeFieldEnd();
		}


		if($this->categoryName !== null) {

			$xfer += $output->writeFieldBegin('categoryName');
			$xfer += $output->writeString($this->categoryName);

			$xfer += $output->writeFieldEnd();
		}


		if($this->sourceType !== null) {

			$xfer += $output->writeFieldBegin('sourceType');
			$xfer += $output->writeI32($this->sourceType);

			$xfer += $output->writeFieldEnd();
		}


		if($this->marketPrice !== null) {

			$xfer += $output->writeFieldBegin('marketPrice');
			$xfer += $output->writeString($this->marketPrice);

			$xfer += $output->writeFieldEnd();
		}


		if($this->vipPrice !== null) {

			$xfer += $output->writeFieldBegin('vipPrice');
			$xfer += $output->writeString($this->vipPrice);

			$xfer += $output->writeFieldEnd();
		}


		if($this->commissionRate !== null) {

			$xfer += $output->writeFieldBegin('commissionRate');
			$xfer += $output->writeString($this->commissionRate);

			$xfer += $output->writeFieldEnd();
		}


		if($this->commission !== null) {

			$xfer += $output->writeFieldBegin('commission');
			$xfer += $output->writeString($this->commission);

			$xfer += $output->writeFieldEnd();
		}


		if($this->discount !== null) {

			$xfer += $output->writeFieldBegin('discount');
			$xfer += $output->writeString($this->discount);

			$xfer += $output->writeFieldEnd();
		}


		if($this->goodsDetailPictures !== null) {

			$xfer += $output->writeFieldBegin('goodsDetailPictures');

			if (!is_array($this->goodsDetailPictures)){

				throw new \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}

			$output->writeListBegin();
			foreach ($this->goodsDetailPictures as $iter0){

				$xfer += $output->writeString($iter0);

			}

			$output->writeListEnd();

			$xfer += $output->writeFieldEnd();
		}


		if($this->cat1stId !== null) {

			$xfer += $output->writeFieldBegin('cat1stId');
			$xfer += $output->writeI64($this->cat1stId);

			$xfer += $output->writeFieldEnd();
		}


		if($this->cat1stName !== null) {

			$xfer += $output->writeFieldBegin('cat1stName');
			$xfer += $output->writeString($this->cat1stName);

			$xfer += $output->writeFieldEnd();
		}


		if($this->cat2ndId !== null) {

			$xfer += $output->writeFieldBegin('cat2ndId');
			$xfer += $output->writeI64($this->cat2ndId);

			$xfer += $output->writeFieldEnd();
		}


		if($this->cat2ndName !== null) {

			$xfer += $output->writeFieldBegin('cat2ndName');
			$xfer += $output->writeString($this->cat2ndName);

			$xfer += $output->writeFieldEnd();
		}


		if($this->brandStoreSn !== null) {

			$xfer += $output->writeFieldBegin('brandStoreSn');
			$xfer += $output->writeString($this->brandStoreSn);

			$xfer += $output->writeFieldEnd();
		}


		if($this->brandName !== null) {

			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);

			$xfer += $output->writeFieldEnd();
		}


		if($this->brandLogoFull !== null) {

			$xfer += $output->writeFieldBegin('brandLogoFull');
			$xfer += $output->writeString($this->brandLogoFull);

			$xfer += $output->writeFieldEnd();
		}


		if($this->schemeEndTime !== null) {

			$xfer += $output->writeFieldBegin('schemeEndTime');
			$xfer += $output->writeI64($this->schemeEndTime);

			$xfer += $output->writeFieldEnd();
		}


		if($this->sellTimeFrom !== null) {

			$xfer += $output->writeFieldBegin('sellTimeFrom');
			$xfer += $output->writeI64($this->sellTimeFrom);

			$xfer += $output->writeFieldEnd();
		}


		if($this->sellTimeTo !== null) {

			$xfer += $output->writeFieldBegin('sellTimeTo');
			$xfer += $output->writeI64($this->sellTimeTo);

			$xfer += $output->writeFieldEnd();
		}


		if($this->weight !== null) {

			$xfer += $output->writeFieldBegin('weight');
			$xfer += $output->writeI32($this->weight);

			$xfer += $output->writeFieldEnd();
		}


		if($this->storeInfo !== null) {

			$xfer += $output->writeFieldBegin('storeInfo');

			if (!is_object($this->storeInfo)) {

				throw new \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}

			$xfer += $this->storeInfo->write($output);

			$xfer += $output->writeFieldEnd();
		}


		if($this->commentsInfo !== null) {

			$xfer += $output->writeFieldBegin('commentsInfo');

			if (!is_object($this->commentsInfo)) {

				throw new \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}

			$xfer += $this->commentsInfo->write($output);

			$xfer += $output->writeFieldEnd();
		}


		if($this->storeServiceCapability !== null) {

			$xfer += $output->writeFieldBegin('storeServiceCapability');

			if (!is_object($this->storeServiceCapability)) {

				throw new \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}

			$xfer += $this->storeServiceCapability->write($output);

			$xfer += $output->writeFieldEnd();
		}


		if($this->brandId !== null) {

			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeI64($this->brandId);

			$xfer += $output->writeFieldEnd();
		}


		if($this->schemeStartTime !== null) {

			$xfer += $output->writeFieldBegin('schemeStartTime');
			$xfer += $output->writeI64($this->schemeStartTime);

			$xfer += $output->writeFieldEnd();
		}


		if($this->saleStockStatus !== null) {

			$xfer += $output->writeFieldBegin('saleStockStatus');
			$xfer += $output->writeI32($this->saleStockStatus);

			$xfer += $output->writeFieldEnd();
		}


		if($this->status !== null) {

			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}

?>
