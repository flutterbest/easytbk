<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace NiuGengYun\EasyTBK\Vip\Request;

class GoodsInfoRequest {

	static $_TSPEC;
	public $channelType = null;
	public $page = null;
	public $pageSize = null;
	public $requestId = null;
	public $queryReputation = null;
	public $queryStoreServiceCapability = null;
	public $sourceType = null;
	public $jxCode = null;
	public $fieldName = null;
	public $order = null;
	public $queryStock = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'channelType'
			),
			2 => array(
			'var' => 'page'
			),
			3 => array(
			'var' => 'pageSize'
			),
			4 => array(
			'var' => 'requestId'
			),
			5 => array(
			'var' => 'queryReputation'
			),
			6 => array(
			'var' => 'queryStoreServiceCapability'
			),
			7 => array(
			'var' => 'sourceType'
			),
			8 => array(
			'var' => 'jxCode'
			),
			9 => array(
			'var' => 'fieldName'
			),
			10 => array(
			'var' => 'order'
			),
			11 => array(
			'var' => 'queryStock'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['channelType'])){

				$this->channelType = $vals['channelType'];
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


			if (isset($vals['queryReputation'])){

				$this->queryReputation = $vals['queryReputation'];
			}


			if (isset($vals['queryStoreServiceCapability'])){

				$this->queryStoreServiceCapability = $vals['queryStoreServiceCapability'];
			}


			if (isset($vals['sourceType'])){

				$this->sourceType = $vals['sourceType'];
			}


			if (isset($vals['jxCode'])){

				$this->jxCode = $vals['jxCode'];
			}


			if (isset($vals['fieldName'])){

				$this->fieldName = $vals['fieldName'];
			}


			if (isset($vals['order'])){

				$this->order = $vals['order'];
			}


			if (isset($vals['queryStock'])){

				$this->queryStock = $vals['queryStock'];
			}


		}

	}


	public function getName(){

		return 'GoodsInfoRequest';
	}

	public function read($input){

		$input->readStructBegin();
		while(true){

			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;


			if ("channelType" == $schemeField){

				$needSkip = false;
				$input->readI32($this->channelType);

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




			if ("queryReputation" == $schemeField){

				$needSkip = false;
				$input->readBool($this->queryReputation);

			}




			if ("queryStoreServiceCapability" == $schemeField){

				$needSkip = false;
				$input->readBool($this->queryStoreServiceCapability);

			}




			if ("sourceType" == $schemeField){

				$needSkip = false;
				$input->readI32($this->sourceType);

			}




			if ("jxCode" == $schemeField){

				$needSkip = false;
				$input->readString($this->jxCode);

			}




			if ("fieldName" == $schemeField){

				$needSkip = false;
				$input->readString($this->fieldName);

			}




			if ("order" == $schemeField){

				$needSkip = false;
				$input->readI32($this->order);

			}




			if ("queryStock" == $schemeField){

				$needSkip = false;
				$input->readBool($this->queryStock);

			}



			if($needSkip){

				\Osp\Protocol\ProtocolUtil::skip($input);
			}

			$input->readFieldEnd();
		}

		$input->readStructEnd();



	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		if($this->channelType !== null) {

			$xfer += $output->writeFieldBegin('channelType');
			$xfer += $output->writeI32($this->channelType);

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


		if($this->sourceType !== null) {

			$xfer += $output->writeFieldBegin('sourceType');
			$xfer += $output->writeI32($this->sourceType);

			$xfer += $output->writeFieldEnd();
		}


		if($this->jxCode !== null) {

			$xfer += $output->writeFieldBegin('jxCode');
			$xfer += $output->writeString($this->jxCode);

			$xfer += $output->writeFieldEnd();
		}


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
