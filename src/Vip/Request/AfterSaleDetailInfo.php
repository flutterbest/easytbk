<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace NiuGengYun\EasyTBK\Vip\Request;

class AfterSaleDetailInfo {

	static $_TSPEC;
	public $afterSaleChangedCommission = null;
	public $afterSaleChangedGoodsCount = null;
	public $afterSaleSn = null;
	public $afterSaleStatus = null;
	public $afterSaleType = null;
	public $afterSaleFinishTime = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'afterSaleChangedCommission'
			),
			2 => array(
			'var' => 'afterSaleChangedGoodsCount'
			),
			3 => array(
			'var' => 'afterSaleSn'
			),
			4 => array(
			'var' => 'afterSaleStatus'
			),
			5 => array(
			'var' => 'afterSaleType'
			),
			6 => array(
			'var' => 'afterSaleFinishTime'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['afterSaleChangedCommission'])){

				$this->afterSaleChangedCommission = $vals['afterSaleChangedCommission'];
			}


			if (isset($vals['afterSaleChangedGoodsCount'])){

				$this->afterSaleChangedGoodsCount = $vals['afterSaleChangedGoodsCount'];
			}


			if (isset($vals['afterSaleSn'])){

				$this->afterSaleSn = $vals['afterSaleSn'];
			}


			if (isset($vals['afterSaleStatus'])){

				$this->afterSaleStatus = $vals['afterSaleStatus'];
			}


			if (isset($vals['afterSaleType'])){

				$this->afterSaleType = $vals['afterSaleType'];
			}


			if (isset($vals['afterSaleFinishTime'])){

				$this->afterSaleFinishTime = $vals['afterSaleFinishTime'];
			}


		}

	}


	public function getName(){

		return 'AfterSaleDetailInfo';
	}

	public function read($input){

		$input->readStructBegin();
		while(true){

			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;


			if ("afterSaleChangedCommission" == $schemeField){

				$needSkip = false;
				$input->readString($this->afterSaleChangedCommission);

			}




			if ("afterSaleChangedGoodsCount" == $schemeField){

				$needSkip = false;
				$input->readI32($this->afterSaleChangedGoodsCount);

			}




			if ("afterSaleSn" == $schemeField){

				$needSkip = false;
				$input->readString($this->afterSaleSn);

			}




			if ("afterSaleStatus" == $schemeField){

				$needSkip = false;
				$input->readI32($this->afterSaleStatus);

			}




			if ("afterSaleType" == $schemeField){

				$needSkip = false;
				$input->readI32($this->afterSaleType);

			}




			if ("afterSaleFinishTime" == $schemeField){

				$needSkip = false;
				$input->readI64($this->afterSaleFinishTime);

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

		if($this->afterSaleChangedCommission !== null) {

			$xfer += $output->writeFieldBegin('afterSaleChangedCommission');
			$xfer += $output->writeString($this->afterSaleChangedCommission);

			$xfer += $output->writeFieldEnd();
		}


		if($this->afterSaleChangedGoodsCount !== null) {

			$xfer += $output->writeFieldBegin('afterSaleChangedGoodsCount');
			$xfer += $output->writeI32($this->afterSaleChangedGoodsCount);

			$xfer += $output->writeFieldEnd();
		}


		if($this->afterSaleSn !== null) {

			$xfer += $output->writeFieldBegin('afterSaleSn');
			$xfer += $output->writeString($this->afterSaleSn);

			$xfer += $output->writeFieldEnd();
		}


		if($this->afterSaleStatus !== null) {

			$xfer += $output->writeFieldBegin('afterSaleStatus');
			$xfer += $output->writeI32($this->afterSaleStatus);

			$xfer += $output->writeFieldEnd();
		}


		if($this->afterSaleType !== null) {

			$xfer += $output->writeFieldBegin('afterSaleType');
			$xfer += $output->writeI32($this->afterSaleType);

			$xfer += $output->writeFieldEnd();
		}


		if($this->afterSaleFinishTime !== null) {

			$xfer += $output->writeFieldBegin('afterSaleFinishTime');
			$xfer += $output->writeI64($this->afterSaleFinishTime);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}

?>
