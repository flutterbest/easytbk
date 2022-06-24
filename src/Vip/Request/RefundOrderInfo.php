<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace NiuGengYun\EasyTBK\Vip\Request;

class RefundOrderInfo {

	static $_TSPEC;
	public $orderSn = null;
	public $applyTime = null;
	public $refundType = null;
	public $commissionTotalCost = null;
	public $commission = null;
	public $goodsCount = null;
	public $commissionEnterTxn = null;
	public $commissionEnterTime = null;
	public $commissionSettledTime = null;
	public $refundOrderDetails = null;
	public $userId = null;
	public $orderTime = null;
	public $originCommEnterTime = null;
	public $originCommEnterTxn = null;
	public $settled = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'applyTime'
			),
			3 => array(
			'var' => 'refundType'
			),
			4 => array(
			'var' => 'commissionTotalCost'
			),
			5 => array(
			'var' => 'commission'
			),
			6 => array(
			'var' => 'goodsCount'
			),
			7 => array(
			'var' => 'commissionEnterTxn'
			),
			8 => array(
			'var' => 'commissionEnterTime'
			),
			9 => array(
			'var' => 'commissionSettledTime'
			),
			11 => array(
			'var' => 'refundOrderDetails'
			),
			12 => array(
			'var' => 'userId'
			),
			13 => array(
			'var' => 'orderTime'
			),
			14 => array(
			'var' => 'originCommEnterTime'
			),
			15 => array(
			'var' => 'originCommEnterTxn'
			),
			16 => array(
			'var' => 'settled'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['orderSn'])){

				$this->orderSn = $vals['orderSn'];
			}


			if (isset($vals['applyTime'])){

				$this->applyTime = $vals['applyTime'];
			}


			if (isset($vals['refundType'])){

				$this->refundType = $vals['refundType'];
			}


			if (isset($vals['commissionTotalCost'])){

				$this->commissionTotalCost = $vals['commissionTotalCost'];
			}


			if (isset($vals['commission'])){

				$this->commission = $vals['commission'];
			}


			if (isset($vals['goodsCount'])){

				$this->goodsCount = $vals['goodsCount'];
			}


			if (isset($vals['commissionEnterTxn'])){

				$this->commissionEnterTxn = $vals['commissionEnterTxn'];
			}


			if (isset($vals['commissionEnterTime'])){

				$this->commissionEnterTime = $vals['commissionEnterTime'];
			}


			if (isset($vals['commissionSettledTime'])){

				$this->commissionSettledTime = $vals['commissionSettledTime'];
			}


			if (isset($vals['refundOrderDetails'])){

				$this->refundOrderDetails = $vals['refundOrderDetails'];
			}


			if (isset($vals['userId'])){

				$this->userId = $vals['userId'];
			}


			if (isset($vals['orderTime'])){

				$this->orderTime = $vals['orderTime'];
			}


			if (isset($vals['originCommEnterTime'])){

				$this->originCommEnterTime = $vals['originCommEnterTime'];
			}


			if (isset($vals['originCommEnterTxn'])){

				$this->originCommEnterTxn = $vals['originCommEnterTxn'];
			}


			if (isset($vals['settled'])){

				$this->settled = $vals['settled'];
			}


		}

	}


	public function getName(){

		return 'RefundOrderInfo';
	}

	public function read($input){

		$input->readStructBegin();
		while(true){

			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;


			if ("orderSn" == $schemeField){

				$needSkip = false;
				$input->readString($this->orderSn);

			}




			if ("applyTime" == $schemeField){

				$needSkip = false;
				$input->readI64($this->applyTime);

			}




			if ("refundType" == $schemeField){

				$needSkip = false;
				$input->readI32($this->refundType);

			}




			if ("commissionTotalCost" == $schemeField){

				$needSkip = false;
				$input->readString($this->commissionTotalCost);

			}




			if ("commission" == $schemeField){

				$needSkip = false;
				$input->readString($this->commission);

			}




			if ("goodsCount" == $schemeField){

				$needSkip = false;
				$input->readI32($this->goodsCount);

			}




			if ("commissionEnterTxn" == $schemeField){

				$needSkip = false;
				$input->readString($this->commissionEnterTxn);

			}




			if ("commissionEnterTime" == $schemeField){

				$needSkip = false;
				$input->readI64($this->commissionEnterTime);

			}




			if ("commissionSettledTime" == $schemeField){

				$needSkip = false;
				$input->readI64($this->commissionSettledTime);

			}




			if ("refundOrderDetails" == $schemeField){

				$needSkip = false;

				$this->refundOrderDetails = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){

					try{

						$elem0 = null;

						$elem0 = new \NiuGengYun\EasyTBK\Vip\Request\RefundOrderDetail();
						$elem0->read($input);

						$this->refundOrderDetails[$_size0++] = $elem0;
					}
					catch(\Exception $e){

						break;
					}
				}

				$input->readListEnd();

			}




			if ("userId" == $schemeField){

				$needSkip = false;
				$input->readI64($this->userId);

			}




			if ("orderTime" == $schemeField){

				$needSkip = false;
				$input->readI64($this->orderTime);

			}




			if ("originCommEnterTime" == $schemeField){

				$needSkip = false;
				$input->readI64($this->originCommEnterTime);

			}




			if ("originCommEnterTxn" == $schemeField){

				$needSkip = false;
				$input->readString($this->originCommEnterTxn);

			}




			if ("settled" == $schemeField){

				$needSkip = false;
				$input->readI32($this->settled);

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

		if($this->orderSn !== null) {

			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);

			$xfer += $output->writeFieldEnd();
		}


		if($this->applyTime !== null) {

			$xfer += $output->writeFieldBegin('applyTime');
			$xfer += $output->writeI64($this->applyTime);

			$xfer += $output->writeFieldEnd();
		}


		if($this->refundType !== null) {

			$xfer += $output->writeFieldBegin('refundType');
			$xfer += $output->writeI32($this->refundType);

			$xfer += $output->writeFieldEnd();
		}


		if($this->commissionTotalCost !== null) {

			$xfer += $output->writeFieldBegin('commissionTotalCost');
			$xfer += $output->writeString($this->commissionTotalCost);

			$xfer += $output->writeFieldEnd();
		}


		if($this->commission !== null) {

			$xfer += $output->writeFieldBegin('commission');
			$xfer += $output->writeString($this->commission);

			$xfer += $output->writeFieldEnd();
		}


		if($this->goodsCount !== null) {

			$xfer += $output->writeFieldBegin('goodsCount');
			$xfer += $output->writeI32($this->goodsCount);

			$xfer += $output->writeFieldEnd();
		}


		if($this->commissionEnterTxn !== null) {

			$xfer += $output->writeFieldBegin('commissionEnterTxn');
			$xfer += $output->writeString($this->commissionEnterTxn);

			$xfer += $output->writeFieldEnd();
		}


		if($this->commissionEnterTime !== null) {

			$xfer += $output->writeFieldBegin('commissionEnterTime');
			$xfer += $output->writeI64($this->commissionEnterTime);

			$xfer += $output->writeFieldEnd();
		}


		if($this->commissionSettledTime !== null) {

			$xfer += $output->writeFieldBegin('commissionSettledTime');
			$xfer += $output->writeI64($this->commissionSettledTime);

			$xfer += $output->writeFieldEnd();
		}


		if($this->refundOrderDetails !== null) {

			$xfer += $output->writeFieldBegin('refundOrderDetails');

			if (!is_array($this->refundOrderDetails)){

				throw new \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException::INVALID_DATA);
			}

			$output->writeListBegin();
			foreach ($this->refundOrderDetails as $iter0){


				if (!is_object($iter0)) {

					throw new \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException::INVALID_DATA);
				}

				$xfer += $iter0->write($output);

			}

			$output->writeListEnd();

			$xfer += $output->writeFieldEnd();
		}


		if($this->userId !== null) {

			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);

			$xfer += $output->writeFieldEnd();
		}


		if($this->orderTime !== null) {

			$xfer += $output->writeFieldBegin('orderTime');
			$xfer += $output->writeI64($this->orderTime);

			$xfer += $output->writeFieldEnd();
		}


		if($this->originCommEnterTime !== null) {

			$xfer += $output->writeFieldBegin('originCommEnterTime');
			$xfer += $output->writeI64($this->originCommEnterTime);

			$xfer += $output->writeFieldEnd();
		}


		if($this->originCommEnterTxn !== null) {

			$xfer += $output->writeFieldBegin('originCommEnterTxn');
			$xfer += $output->writeString($this->originCommEnterTxn);

			$xfer += $output->writeFieldEnd();
		}


		if($this->settled !== null) {

			$xfer += $output->writeFieldBegin('settled');
			$xfer += $output->writeI32($this->settled);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}

?>
