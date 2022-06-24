<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace NiuGengYun\EasyTBK\Vip\Request;

class RefundOrderResponse {

	static $_TSPEC;
	public $refundOrderInfoList = null;
	public $total = null;
	public $page = null;
	public $pageSize = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'refundOrderInfoList'
			),
			2 => array(
			'var' => 'total'
			),
			3 => array(
			'var' => 'page'
			),
			4 => array(
			'var' => 'pageSize'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['refundOrderInfoList'])){

				$this->refundOrderInfoList = $vals['refundOrderInfoList'];
			}


			if (isset($vals['total'])){

				$this->total = $vals['total'];
			}


			if (isset($vals['page'])){

				$this->page = $vals['page'];
			}


			if (isset($vals['pageSize'])){

				$this->pageSize = $vals['pageSize'];
			}


		}

	}


	public function getName(){

		return 'RefundOrderResponse';
	}

	public function read($input){

		$input->readStructBegin();
		while(true){

			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;


			if ("refundOrderInfoList" == $schemeField){

				$needSkip = false;

				$this->refundOrderInfoList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){

					try{

						$elem0 = null;

						$elem0 = new \NiuGengYun\EasyTBK\Vip\Request\RefundOrderInfo();
						$elem0->read($input);

						$this->refundOrderInfoList[$_size0++] = $elem0;
					}
					catch(\Exception $e){

						break;
					}
				}

				$input->readListEnd();

			}




			if ("total" == $schemeField){

				$needSkip = false;
				$input->readI32($this->total);

			}




			if ("page" == $schemeField){

				$needSkip = false;
				$input->readI32($this->page);

			}




			if ("pageSize" == $schemeField){

				$needSkip = false;
				$input->readI32($this->pageSize);

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

		if($this->refundOrderInfoList !== null) {

			$xfer += $output->writeFieldBegin('refundOrderInfoList');

			if (!is_array($this->refundOrderInfoList)){

				throw new \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}

			$output->writeListBegin();
			foreach ($this->refundOrderInfoList as $iter0){


				if (!is_object($iter0)) {

					throw new \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}

				$xfer += $iter0->write($output);

			}

			$output->writeListEnd();

			$xfer += $output->writeFieldEnd();
		}


		if($this->total !== null) {

			$xfer += $output->writeFieldBegin('total');
			$xfer += $output->writeI32($this->total);

			$xfer += $output->writeFieldEnd();
		}


		if($this->page !== null) {

			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);

			$xfer += $output->writeFieldEnd();
		}


		if($this->pageSize !== null) {

			$xfer += $output->writeFieldBegin('pageSize');
			$xfer += $output->writeI32($this->pageSize);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}

?>
