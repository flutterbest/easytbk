<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace NiuGengYun\EasyTBK\vip\request;

class RefundOrderRequest {

	static $_TSPEC;
	public $searchType = null;
	public $searchTimeStart = null;
	public $searchTimeEnd = null;
	public $orderSns = null;
	public $page = null;
	public $pageSize = null;
	public $requestId = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'searchType'
			),
			2 => array(
			'var' => 'searchTimeStart'
			),
			3 => array(
			'var' => 'searchTimeEnd'
			),
			4 => array(
			'var' => 'orderSns'
			),
			5 => array(
			'var' => 'page'
			),
			6 => array(
			'var' => 'pageSize'
			),
			7 => array(
			'var' => 'requestId'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['searchType'])){

				$this->searchType = $vals['searchType'];
			}


			if (isset($vals['searchTimeStart'])){

				$this->searchTimeStart = $vals['searchTimeStart'];
			}


			if (isset($vals['searchTimeEnd'])){

				$this->searchTimeEnd = $vals['searchTimeEnd'];
			}


			if (isset($vals['orderSns'])){

				$this->orderSns = $vals['orderSns'];
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


		}

	}


	public function getName(){

		return 'RefundOrderRequest';
	}

	public function read($input){

		$input->readStructBegin();
		while(true){

			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;


			if ("searchType" == $schemeField){

				$needSkip = false;
				$input->readI32($this->searchType);

			}




			if ("searchTimeStart" == $schemeField){

				$needSkip = false;
				$input->readI64($this->searchTimeStart);

			}




			if ("searchTimeEnd" == $schemeField){

				$needSkip = false;
				$input->readI64($this->searchTimeEnd);

			}




			if ("orderSns" == $schemeField){

				$needSkip = false;

				$this->orderSns = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){

					try{

						$elem0 = null;
						$input->readString($elem0);

						$this->orderSns[$_size0++] = $elem0;
					}
					catch(\Exception $e){

						break;
					}
				}

				$input->readListEnd();

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

		$xfer += $output->writeFieldBegin('searchType');
		$xfer += $output->writeI32($this->searchType);

		$xfer += $output->writeFieldEnd();

		if($this->searchTimeStart !== null) {

			$xfer += $output->writeFieldBegin('searchTimeStart');
			$xfer += $output->writeI64($this->searchTimeStart);

			$xfer += $output->writeFieldEnd();
		}


		if($this->searchTimeEnd !== null) {

			$xfer += $output->writeFieldBegin('searchTimeEnd');
			$xfer += $output->writeI64($this->searchTimeEnd);

			$xfer += $output->writeFieldEnd();
		}


		if($this->orderSns !== null) {

			$xfer += $output->writeFieldBegin('orderSns');

			if (!is_array($this->orderSns)){

				throw new \NiuGengYun\EasyTBK\vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}

			$output->writeListBegin();
			foreach ($this->orderSns as $iter0){

				$xfer += $output->writeString($iter0);

			}

			$output->writeListEnd();

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

		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}

?>
