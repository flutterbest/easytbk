<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace NiuGengYun\EasyTBK\vip\request;

class QueryGoodsRequest {

	static $_TSPEC;
	public $keyword = null;
	public $fieldName = null;
	public $order = null;
	public $page = null;
	public $pageSize = null;
	public $requestId = null;
	public $priceStart = null;
	public $priceEnd = null;
	public $queryReputation = null;
	public $queryStoreServiceCapability = null;
	public $queryStock = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'keyword'
			),
			2 => array(
			'var' => 'fieldName'
			),
			3 => array(
			'var' => 'order'
			),
			4 => array(
			'var' => 'page'
			),
			5 => array(
			'var' => 'pageSize'
			),
			6 => array(
			'var' => 'requestId'
			),
			7 => array(
			'var' => 'priceStart'
			),
			8 => array(
			'var' => 'priceEnd'
			),
			9 => array(
			'var' => 'queryReputation'
			),
			10 => array(
			'var' => 'queryStoreServiceCapability'
			),
			11 => array(
			'var' => 'queryStock'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['keyword'])){

				$this->keyword = $vals['keyword'];
			}


			if (isset($vals['fieldName'])){

				$this->fieldName = $vals['fieldName'];
			}


			if (isset($vals['order'])){

				$this->order = $vals['order'];
			}


			if (isset($vals['page'])){

				$this->page = $vals['page'];
			}


			if (isset($vals['pageSize'])){

				$this->pageSize = $vals['pageSize'];
			}


			if (isset($vals['requestId'])){

				$this->requestId = $vals['requestId'];
			}


			if (isset($vals['priceStart'])){

				$this->priceStart = $vals['priceStart'];
			}


			if (isset($vals['priceEnd'])){

				$this->priceEnd = $vals['priceEnd'];
			}


			if (isset($vals['queryReputation'])){

				$this->queryReputation = $vals['queryReputation'];
			}


			if (isset($vals['queryStoreServiceCapability'])){

				$this->queryStoreServiceCapability = $vals['queryStoreServiceCapability'];
			}


			if (isset($vals['queryStock'])){

				$this->queryStock = $vals['queryStock'];
			}


		}

	}


	public function getName(){

		return 'QueryGoodsRequest';
	}

	public function read($input){

		$input->readStructBegin();
		while(true){

			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;


			if ("keyword" == $schemeField){

				$needSkip = false;
				$input->readString($this->keyword);

			}




			if ("fieldName" == $schemeField){

				$needSkip = false;
				$input->readString($this->fieldName);

			}




			if ("order" == $schemeField){

				$needSkip = false;
				$input->readI32($this->order);

			}




			if ("page" == $schemeField){

				$needSkip = false;
				$input->readI32($this->page);

			}




			if ("pageSize" == $schemeField){

				$needSkip = false;
				$input->readI32($this->pageSize);

			}




			if ("requestId" == $schemeField){

				$needSkip = false;
				$input->readString($this->requestId);

			}




			if ("priceStart" == $schemeField){

				$needSkip = false;
				$input->readString($this->priceStart);

			}




			if ("priceEnd" == $schemeField){

				$needSkip = false;
				$input->readString($this->priceEnd);

			}




			if ("queryReputation" == $schemeField){

				$needSkip = false;
				$input->readBool($this->queryReputation);

			}




			if ("queryStoreServiceCapability" == $schemeField){

				$needSkip = false;
				$input->readBool($this->queryStoreServiceCapability);

			}




			if ("queryStock" == $schemeField){

				$needSkip = false;
				$input->readBool($this->queryStock);

			}



			if($needSkip){

                \NiuGengYun\EasyTBK\vip\Osp\Protocol\ProtocolUtil::skip($input);
			}

			$input->readFieldEnd();
		}

		$input->readStructEnd();



	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		$xfer += $output->writeFieldBegin('keyword');
		$xfer += $output->writeString($this->keyword);

		$xfer += $output->writeFieldEnd();

		if($this->fieldName !== null) {

			$xfer += $output->writeFieldBegin('fieldName');
			$xfer += $output->writeString($this->fieldName);

			$xfer += $output->writeFieldEnd();
		}


		if($this->order !== null) {

			$xfer += $output->writeFieldBegin('order');
			$xfer += $output->writeI32($this->order);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldBegin('page');
		$xfer += $output->writeI32($this->page);

		$xfer += $output->writeFieldEnd();

		if($this->pageSize !== null) {

			$xfer += $output->writeFieldBegin('pageSize');
			$xfer += $output->writeI32($this->pageSize);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldBegin('requestId');
		$xfer += $output->writeString($this->requestId);

		$xfer += $output->writeFieldEnd();

		if($this->priceStart !== null) {

			$xfer += $output->writeFieldBegin('priceStart');
			$xfer += $output->writeString($this->priceStart);

			$xfer += $output->writeFieldEnd();
		}


		if($this->priceEnd !== null) {

			$xfer += $output->writeFieldBegin('priceEnd');
			$xfer += $output->writeString($this->priceEnd);

			$xfer += $output->writeFieldEnd();
		}


		if($this->queryReputation !== null) {

			$xfer += $output->writeFieldBegin('queryReputation');
			$xfer += $output->writeBool($this->queryReputation);

			$xfer += $output->writeFieldEnd();
		}


		if($this->queryStoreServiceCapability !== null) {

			$xfer += $output->writeFieldBegin('queryStoreServiceCapability');
			$xfer += $output->writeBool($this->queryStoreServiceCapability);

			$xfer += $output->writeFieldEnd();
		}


		if($this->queryStock !== null) {

			$xfer += $output->writeFieldBegin('queryStock');
			$xfer += $output->writeBool($this->queryStock);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}

?>
