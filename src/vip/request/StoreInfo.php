<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace NiuGengYun\EasyTBK\vip\request;

class StoreInfo {

	static $_TSPEC;
	public $storeId = null;
	public $storeName = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'storeId'
			),
			2 => array(
			'var' => 'storeName'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['storeId'])){

				$this->storeId = $vals['storeId'];
			}


			if (isset($vals['storeName'])){

				$this->storeName = $vals['storeName'];
			}


		}

	}


	public function getName(){

		return 'StoreInfo';
	}

	public function read($input){

		$input->readStructBegin();
		while(true){

			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;


			if ("storeId" == $schemeField){

				$needSkip = false;
				$input->readString($this->storeId);

			}




			if ("storeName" == $schemeField){

				$needSkip = false;
				$input->readString($this->storeName);

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

		if($this->storeId !== null) {

			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);

			$xfer += $output->writeFieldEnd();
		}


		if($this->storeName !== null) {

			$xfer += $output->writeFieldBegin('storeName');
			$xfer += $output->writeString($this->storeName);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}

?>
