<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace NiuGengYun\EasyTBK\vip\request;

class StoreServiceCapability {

	static $_TSPEC;
	public $storeScore = null;
	public $storeRankRate = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'storeScore'
			),
			2 => array(
			'var' => 'storeRankRate'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['storeScore'])){

				$this->storeScore = $vals['storeScore'];
			}


			if (isset($vals['storeRankRate'])){

				$this->storeRankRate = $vals['storeRankRate'];
			}


		}

	}


	public function getName(){

		return 'StoreServiceCapability';
	}

	public function read($input){

		$input->readStructBegin();
		while(true){

			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;


			if ("storeScore" == $schemeField){

				$needSkip = false;
				$input->readString($this->storeScore);

			}




			if ("storeRankRate" == $schemeField){

				$needSkip = false;
				$input->readString($this->storeRankRate);

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

		if($this->storeScore !== null) {

			$xfer += $output->writeFieldBegin('storeScore');
			$xfer += $output->writeString($this->storeScore);

			$xfer += $output->writeFieldEnd();
		}


		if($this->storeRankRate !== null) {

			$xfer += $output->writeFieldBegin('storeRankRate');
			$xfer += $output->writeString($this->storeRankRate);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}

?>
