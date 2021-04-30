<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace NiuGengYun\EasyTBK\vip\request;

class OrderQueryModel {

	static $_TSPEC;
	public $status = null;
	public $orderTimeStart = null;
	public $orderTimeEnd = null;
	public $page = null;
	public $pageSize = null;
	public $requestId = null;
	public $updateTimeStart = null;
	public $updateTimeEnd = null;
	public $orderSnList = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'status'
			),
			2 => array(
			'var' => 'orderTimeStart'
			),
			3 => array(
			'var' => 'orderTimeEnd'
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
			'var' => 'updateTimeStart'
			),
			8 => array(
			'var' => 'updateTimeEnd'
			),
			9 => array(
				'var' => 'orderSnList'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['status'])){

				$this->status = $vals['status'];
			}


			if (isset($vals['orderTimeStart'])){

				$this->orderTimeStart = $vals['orderTimeStart'];
			}


			if (isset($vals['orderTimeEnd'])){

				$this->orderTimeEnd = $vals['orderTimeEnd'];
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


			if (isset($vals['updateTimeStart'])){

				$this->updateTimeStart = $vals['updateTimeStart'];
			}


			if (isset($vals['updateTimeEnd'])){

				$this->updateTimeEnd = $vals['updateTimeEnd'];
			}

			if (isset($vals['orderSnList'])){

				$this->orderSnList = $vals['orderSnList'];
			}


		}

	}


	public function getName(){

		return 'OrderQueryModel';
	}

	public function read($input){

		$input->readStructBegin();
		while(true){

			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;


			if ("status" == $schemeField){

				$needSkip = false;
				$input->readI16($this->status);

			}




			if ("orderTimeStart" == $schemeField){

				$needSkip = false;
				$input->readI64($this->orderTimeStart);

			}




			if ("orderTimeEnd" == $schemeField){

				$needSkip = false;
				$input->readI64($this->orderTimeEnd);

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




			if ("updateTimeStart" == $schemeField){

				$needSkip = false;
				$input->readI64($this->updateTimeStart);

			}




			if ("updateTimeEnd" == $schemeField){

				$needSkip = false;
				$input->readI64($this->updateTimeEnd);

			}


			if ("orderSnList" == $schemeField){

				$needSkip = false;

				$this->orderSnList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){

					try{

						$elem0 = null;
						$input->readString($elem0);

						$this->orderSnList[$_size0++] = $elem0;
					}
					catch(\Exception $e){

						break;
					}
				}

				$input->readListEnd();

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

		if($this->status !== null) {

			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI16($this->status);

			$xfer += $output->writeFieldEnd();
		}


		if($this->orderTimeStart !== null) {

			$xfer += $output->writeFieldBegin('orderTimeStart');
			$xfer += $output->writeI64($this->orderTimeStart);

			$xfer += $output->writeFieldEnd();
		}


		if($this->orderTimeEnd !== null) {

			$xfer += $output->writeFieldBegin('orderTimeEnd');
			$xfer += $output->writeI64($this->orderTimeEnd);

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

		if($this->updateTimeStart !== null) {

			$xfer += $output->writeFieldBegin('updateTimeStart');
			$xfer += $output->writeI64($this->updateTimeStart);

			$xfer += $output->writeFieldEnd();
		}


		if($this->updateTimeEnd !== null) {

			$xfer += $output->writeFieldBegin('updateTimeEnd');
			$xfer += $output->writeI64($this->updateTimeEnd);

			$xfer += $output->writeFieldEnd();
		}


		if($this->orderSnList !== null) {

			$xfer += $output->writeFieldBegin('orderSnList');

			if (!is_array($this->orderSnList)){

				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}

			$output->writeListBegin();
			foreach ($this->orderSnList as $iter0){

				$xfer += $output->writeString($iter0);

			}

			$output->writeListEnd();

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}

?>
