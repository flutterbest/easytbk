<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace NiuGengYun\EasyTBK\vip\request;

class VipLinkCheckResp {

	static $_TSPEC;
	public $successMap = null;
	public $failMap = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'successMap'
			),
			2 => array(
			'var' => 'failMap'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['successMap'])){

				$this->successMap = $vals['successMap'];
			}


			if (isset($vals['failMap'])){

				$this->failMap = $vals['failMap'];
			}


		}

	}


	public function getName(){

		return 'VipLinkCheckResp';
	}

	public function read($input){

		$input->readStructBegin();
		while(true){

			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;


			if ("successMap" == $schemeField){

				$needSkip = false;

				$this->successMap = array();
				$input->readMapBegin();
				while(true){

					try{

						$key0 = '';
						$input->readString($key0);

						$val0 = null;

						$val0 = new \NiuGengYun\EasyTBK\vip\request\VipLinkCheckVO();
						$val0->read($input);

						$this->successMap[$key0] = $val0;
					}
					catch(\Exception $e){

						break;
					}
				}

				$input->readMapEnd();

			}




			if ("failMap" == $schemeField){

				$needSkip = false;

				$this->failMap = array();
				$input->readMapBegin();
				while(true){

					try{

						$key1 = '';
						$input->readString($key1);

						$val1 = null;

						$val1 = new \NiuGengYun\EasyTBK\vip\request\VipLinkCheckVO();
						$val1->read($input);

						$this->failMap[$key1] = $val1;
					}
					catch(\Exception $e){

						break;
					}
				}

				$input->readMapEnd();

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

		if($this->successMap !== null) {

			$xfer += $output->writeFieldBegin('successMap');

			if (!is_array($this->successMap)){

				throw new \NiuGengYun\EasyTBK\vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}

			$output->writeMapBegin();
			foreach ($this->successMap as $kiter0 => $viter0){

				$xfer += $output->writeString($kiter0);


				if (!is_object($viter0)) {

					throw new \NiuGengYun\EasyTBK\vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}

				$xfer += $viter0->write($output);

			}

			$output->writeMapEnd();

			$xfer += $output->writeFieldEnd();
		}


		if($this->failMap !== null) {

			$xfer += $output->writeFieldBegin('failMap');

			if (!is_array($this->failMap)){

				throw new \NiuGengYun\EasyTBK\vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}

			$output->writeMapBegin();
			foreach ($this->failMap as $kiter0 => $viter0){

				$xfer += $output->writeString($kiter0);


				if (!is_object($viter0)) {

					throw new \NiuGengYun\EasyTBK\vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}

				$xfer += $viter0->write($output);

			}

			$output->writeMapEnd();

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}

?>
