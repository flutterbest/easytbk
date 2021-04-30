<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace NiuGengYun\EasyTBK\vip\request;

class SortField {

	static $_TSPEC;
	public $fieldName = null;
	public $fieldDesc = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'fieldName'
			),
			2 => array(
			'var' => 'fieldDesc'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['fieldName'])){

				$this->fieldName = $vals['fieldName'];
			}


			if (isset($vals['fieldDesc'])){

				$this->fieldDesc = $vals['fieldDesc'];
			}


		}

	}


	public function getName(){

		return 'SortField';
	}

	public function read($input){

		$input->readStructBegin();
		while(true){

			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;


			if ("fieldName" == $schemeField){

				$needSkip = false;
				$input->readString($this->fieldName);

			}




			if ("fieldDesc" == $schemeField){

				$needSkip = false;
				$input->readString($this->fieldDesc);

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

		if($this->fieldName !== null) {

			$xfer += $output->writeFieldBegin('fieldName');
			$xfer += $output->writeString($this->fieldName);

			$xfer += $output->writeFieldEnd();
		}


		if($this->fieldDesc !== null) {

			$xfer += $output->writeFieldBegin('fieldDesc');
			$xfer += $output->writeString($this->fieldDesc);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}

?>
