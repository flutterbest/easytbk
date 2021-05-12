<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace NiuGengYun\EasyTBK\vip\request;

class PidGenRequest {

	static $_TSPEC;
	public $pidNameList = null;
	public $requestId = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'pidNameList'
			),
			2 => array(
			'var' => 'requestId'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['pidNameList'])){

				$this->pidNameList = $vals['pidNameList'];
			}


			if (isset($vals['requestId'])){

				$this->requestId = $vals['requestId'];
			}


		}

	}


	public function getName(){

		return 'PidGenRequest';
	}

	public function read($input){

		$input->readStructBegin();
		while(true){

			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;


			if ("pidNameList" == $schemeField){

				$needSkip = false;

				$this->pidNameList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){

					try{

						$elem0 = null;
						$input->readString($elem0);

						$this->pidNameList[$_size0++] = $elem0;
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

		if($this->pidNameList !== null) {

			$xfer += $output->writeFieldBegin('pidNameList');

			if (!is_array($this->pidNameList)){

				throw new \NiuGengYun\EasyTBK\vip\Osp\Exception\OspException('Bad type in structure.', \NiuGengYun\EasyTBK\vip\Osp\Exception\OspException::INVALID_DATA);
			}

			$output->writeListBegin();
			foreach ($this->pidNameList as $iter0){

				$xfer += $output->writeString($iter0);

			}

			$output->writeListEnd();

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
