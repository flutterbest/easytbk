<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace NiuGengYun\EasyTBK\Vip\Request;

class PidQueryRequest {

	static $_TSPEC;
	public $pidList = null;
	public $requestId = null;
	public $page = null;
	public $pageSize = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'pidList'
			),
			2 => array(
			'var' => 'requestId'
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


			if (isset($vals['pidList'])){

				$this->pidList = $vals['pidList'];
			}


			if (isset($vals['requestId'])){

				$this->requestId = $vals['requestId'];
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

		return 'PidQueryRequest';
	}

	public function read($input){

		$input->readStructBegin();
		while(true){

			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;


			if ("pidList" == $schemeField){

				$needSkip = false;

				$this->pidList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){

					try{

						$elem1 = null;
						$input->readString($elem1);

						$this->pidList[$_size1++] = $elem1;
					}
					catch(\Exception $e){

						break;
					}
				}

				$input->readListEnd();

			}




			if ("requestId" == $schemeField){

				$needSkip = false;
				$input->readString($this->requestId);

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

		if($this->pidList !== null) {

			$xfer += $output->writeFieldBegin('pidList');

			if (!is_array($this->pidList)){

				throw new \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}

			$output->writeListBegin();
			foreach ($this->pidList as $iter0){

				$xfer += $output->writeString($iter0);

			}

			$output->writeListEnd();

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldBegin('requestId');
		$xfer += $output->writeString($this->requestId);

		$xfer += $output->writeFieldEnd();

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
