<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace NiuGengYun\EasyTBK\vip\request;

class CpsUnionPidGenResponse {

	static $_TSPEC;
	public $pidInfoList = null;
	public $total = null;
	public $remainPidCount = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'pidInfoList'
			),
			2 => array(
			'var' => 'total'
			),
			3 => array(
			'var' => 'remainPidCount'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['pidInfoList'])){

				$this->pidInfoList = $vals['pidInfoList'];
			}


			if (isset($vals['total'])){

				$this->total = $vals['total'];
			}


			if (isset($vals['remainPidCount'])){

				$this->remainPidCount = $vals['remainPidCount'];
			}


		}

	}


	public function getName(){

		return 'CpsUnionPidGenResponse';
	}

	public function read($input){

		$input->readStructBegin();
		while(true){

			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;


			if ("pidInfoList" == $schemeField){

				$needSkip = false;

				$this->pidInfoList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){

					try{

						$elem0 = null;

						$elem0 = new \NiuGengYun\EasyTBK\vip\request\PidInfo();
						$elem0->read($input);

						$this->pidInfoList[$_size0++] = $elem0;
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




			if ("remainPidCount" == $schemeField){

				$needSkip = false;
				$input->readI32($this->remainPidCount);

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

		if($this->pidInfoList !== null) {

			$xfer += $output->writeFieldBegin('pidInfoList');

			if (!is_array($this->pidInfoList)){

				throw new \NiuGengYun\EasyTBK\vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}

			$output->writeListBegin();
			foreach ($this->pidInfoList as $iter0){


				if (!is_object($iter0)) {

					throw new \NiuGengYun\EasyTBK\vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
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


		if($this->remainPidCount !== null) {

			$xfer += $output->writeFieldBegin('remainPidCount');
			$xfer += $output->writeI32($this->remainPidCount);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}

?>
