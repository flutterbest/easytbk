<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace NiuGengYun\EasyTBK\Vip\Request;

class RefundOrderDetail {

	static $_TSPEC;
	public $goodsId = null;
	public $sizeId = null;
	public $goodsPrice = null;
	public $goodsCount = null;
	public $commission = null;
	public $totalCost = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodsId'
			),
			2 => array(
			'var' => 'sizeId'
			),
			3 => array(
			'var' => 'goodsPrice'
			),
			4 => array(
			'var' => 'goodsCount'
			),
			5 => array(
			'var' => 'commission'
			),
			6 => array(
			'var' => 'totalCost'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['goodsId'])){

				$this->goodsId = $vals['goodsId'];
			}


			if (isset($vals['sizeId'])){

				$this->sizeId = $vals['sizeId'];
			}


			if (isset($vals['goodsPrice'])){

				$this->goodsPrice = $vals['goodsPrice'];
			}


			if (isset($vals['goodsCount'])){

				$this->goodsCount = $vals['goodsCount'];
			}


			if (isset($vals['commission'])){

				$this->commission = $vals['commission'];
			}


			if (isset($vals['totalCost'])){

				$this->totalCost = $vals['totalCost'];
			}


		}

	}


	public function getName(){

		return 'RefundOrderDetail';
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




			if ("sizeId" == $schemeField){

				$needSkip = false;
				$input->readString($this->sizeId);

			}




			if ("goodsPrice" == $schemeField){

				$needSkip = false;
				$input->readString($this->goodsPrice);

			}




			if ("goodsCount" == $schemeField){

				$needSkip = false;
				$input->readI32($this->goodsCount);

			}




			if ("commission" == $schemeField){

				$needSkip = false;
				$input->readString($this->commission);

			}




			if ("totalCost" == $schemeField){

				$needSkip = false;
				$input->readString($this->totalCost);

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


		if($this->sizeId !== null) {

			$xfer += $output->writeFieldBegin('sizeId');
			$xfer += $output->writeString($this->sizeId);

			$xfer += $output->writeFieldEnd();
		}


		if($this->goodsPrice !== null) {

			$xfer += $output->writeFieldBegin('goodsPrice');
			$xfer += $output->writeString($this->goodsPrice);

			$xfer += $output->writeFieldEnd();
		}


		if($this->goodsCount !== null) {

			$xfer += $output->writeFieldBegin('goodsCount');
			$xfer += $output->writeI32($this->goodsCount);

			$xfer += $output->writeFieldEnd();
		}


		if($this->commission !== null) {

			$xfer += $output->writeFieldBegin('commission');
			$xfer += $output->writeString($this->commission);

			$xfer += $output->writeFieldEnd();
		}


		if($this->totalCost !== null) {

			$xfer += $output->writeFieldBegin('totalCost');
			$xfer += $output->writeString($this->totalCost);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}

?>
