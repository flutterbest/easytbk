<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace NiuGengYun\EasyTBK\vip\request;

class GoodsCommentsInfo {

	static $_TSPEC;
	public $comments = null;
	public $goodCommentsShare = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'comments'
			),
			2 => array(
			'var' => 'goodCommentsShare'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['comments'])){

				$this->comments = $vals['comments'];
			}


			if (isset($vals['goodCommentsShare'])){

				$this->goodCommentsShare = $vals['goodCommentsShare'];
			}


		}

	}


	public function getName(){

		return 'GoodsCommentsInfo';
	}

	public function read($input){

		$input->readStructBegin();
		while(true){

			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;


			if ("comments" == $schemeField){

				$needSkip = false;
				$input->readI32($this->comments);

			}




			if ("goodCommentsShare" == $schemeField){

				$needSkip = false;
				$input->readString($this->goodCommentsShare);

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

		if($this->comments !== null) {

			$xfer += $output->writeFieldBegin('comments');
			$xfer += $output->writeI32($this->comments);

			$xfer += $output->writeFieldEnd();
		}


		if($this->goodCommentsShare !== null) {

			$xfer += $output->writeFieldBegin('goodCommentsShare');
			$xfer += $output->writeString($this->goodCommentsShare);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}

?>
