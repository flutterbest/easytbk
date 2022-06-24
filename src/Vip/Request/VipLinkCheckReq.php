<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace NiuGengYun\EasyTBK\Vip\Request;

class VipLinkCheckReq {

	static $_TSPEC;
	public $source = null;
	public $content = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'source'
			),
			2 => array(
			'var' => 'content'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['source'])){

				$this->source = $vals['source'];
			}


			if (isset($vals['content'])){

				$this->content = $vals['content'];
			}


		}

	}


	public function getName(){

		return 'VipLinkCheckReq';
	}

	public function read($input){

		$input->readStructBegin();
		while(true){

			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;


			if ("source" == $schemeField){

				$needSkip = false;
				$input->readString($this->source);

			}




			if ("content" == $schemeField){

				$needSkip = false;
				$input->readString($this->content);

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

		$xfer += $output->writeFieldBegin('source');
		$xfer += $output->writeString($this->source);

		$xfer += $output->writeFieldEnd();

		$xfer += $output->writeFieldBegin('content');
		$xfer += $output->writeString($this->content);

		$xfer += $output->writeFieldEnd();

		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}

?>
