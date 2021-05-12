<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace NiuGengYun\EasyTBK\vip\request;

class UrlInfo {

	static $_TSPEC;
	public $source = null;
	public $url = null;
	public $longUrl = null;
	public $ulUrl = null;
	public $deeplinkUrl = null;
	public $traFrom = null;
	public $noEvokeUrl = null;
	public $noEvokeLongUrl = null;
	public $vipWxUrl = null;
	public $vipWxCode = null;
	public $vipQuickAppUrl = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'source'
			),
			2 => array(
			'var' => 'url'
			),
			3 => array(
			'var' => 'longUrl'
			),
			4 => array(
			'var' => 'ulUrl'
			),
			5 => array(
			'var' => 'deeplinkUrl'
			),
			6 => array(
			'var' => 'traFrom'
			),
			7 => array(
			'var' => 'noEvokeUrl'
			),
			8 => array(
			'var' => 'noEvokeLongUrl'
			),
			9 => array(
			'var' => 'vipWxUrl'
			),
			10 => array(
			'var' => 'vipWxCode'
			),
			11 => array(
			'var' => 'vipQuickAppUrl'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['source'])){

				$this->source = $vals['source'];
			}


			if (isset($vals['url'])){

				$this->url = $vals['url'];
			}


			if (isset($vals['longUrl'])){

				$this->longUrl = $vals['longUrl'];
			}


			if (isset($vals['ulUrl'])){

				$this->ulUrl = $vals['ulUrl'];
			}


			if (isset($vals['deeplinkUrl'])){

				$this->deeplinkUrl = $vals['deeplinkUrl'];
			}


			if (isset($vals['traFrom'])){

				$this->traFrom = $vals['traFrom'];
			}


			if (isset($vals['noEvokeUrl'])){

				$this->noEvokeUrl = $vals['noEvokeUrl'];
			}


			if (isset($vals['noEvokeLongUrl'])){

				$this->noEvokeLongUrl = $vals['noEvokeLongUrl'];
			}


			if (isset($vals['vipWxUrl'])){

				$this->vipWxUrl = $vals['vipWxUrl'];
			}


			if (isset($vals['vipWxCode'])){

				$this->vipWxCode = $vals['vipWxCode'];
			}


			if (isset($vals['vipQuickAppUrl'])){

				$this->vipQuickAppUrl = $vals['vipQuickAppUrl'];
			}


		}

	}


	public function getName(){

		return 'UrlInfo';
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




			if ("url" == $schemeField){

				$needSkip = false;
				$input->readString($this->url);

			}




			if ("longUrl" == $schemeField){

				$needSkip = false;
				$input->readString($this->longUrl);

			}




			if ("ulUrl" == $schemeField){

				$needSkip = false;
				$input->readString($this->ulUrl);

			}




			if ("deeplinkUrl" == $schemeField){

				$needSkip = false;
				$input->readString($this->deeplinkUrl);

			}




			if ("traFrom" == $schemeField){

				$needSkip = false;
				$input->readString($this->traFrom);

			}




			if ("noEvokeUrl" == $schemeField){

				$needSkip = false;
				$input->readString($this->noEvokeUrl);

			}




			if ("noEvokeLongUrl" == $schemeField){

				$needSkip = false;
				$input->readString($this->noEvokeLongUrl);

			}




			if ("vipWxUrl" == $schemeField){

				$needSkip = false;
				$input->readString($this->vipWxUrl);

			}




			if ("vipWxCode" == $schemeField){

				$needSkip = false;
				$input->readString($this->vipWxCode);

			}




			if ("vipQuickAppUrl" == $schemeField){

				$needSkip = false;
				$input->readString($this->vipQuickAppUrl);

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

		if($this->source !== null) {

			$xfer += $output->writeFieldBegin('source');
			$xfer += $output->writeString($this->source);

			$xfer += $output->writeFieldEnd();
		}


		if($this->url !== null) {

			$xfer += $output->writeFieldBegin('url');
			$xfer += $output->writeString($this->url);

			$xfer += $output->writeFieldEnd();
		}


		if($this->longUrl !== null) {

			$xfer += $output->writeFieldBegin('longUrl');
			$xfer += $output->writeString($this->longUrl);

			$xfer += $output->writeFieldEnd();
		}


		if($this->ulUrl !== null) {

			$xfer += $output->writeFieldBegin('ulUrl');
			$xfer += $output->writeString($this->ulUrl);

			$xfer += $output->writeFieldEnd();
		}


		if($this->deeplinkUrl !== null) {

			$xfer += $output->writeFieldBegin('deeplinkUrl');
			$xfer += $output->writeString($this->deeplinkUrl);

			$xfer += $output->writeFieldEnd();
		}


		if($this->traFrom !== null) {

			$xfer += $output->writeFieldBegin('traFrom');
			$xfer += $output->writeString($this->traFrom);

			$xfer += $output->writeFieldEnd();
		}


		if($this->noEvokeUrl !== null) {

			$xfer += $output->writeFieldBegin('noEvokeUrl');
			$xfer += $output->writeString($this->noEvokeUrl);

			$xfer += $output->writeFieldEnd();
		}


		if($this->noEvokeLongUrl !== null) {

			$xfer += $output->writeFieldBegin('noEvokeLongUrl');
			$xfer += $output->writeString($this->noEvokeLongUrl);

			$xfer += $output->writeFieldEnd();
		}


		if($this->vipWxUrl !== null) {

			$xfer += $output->writeFieldBegin('vipWxUrl');
			$xfer += $output->writeString($this->vipWxUrl);

			$xfer += $output->writeFieldEnd();
		}


		if($this->vipWxCode !== null) {

			$xfer += $output->writeFieldBegin('vipWxCode');
			$xfer += $output->writeString($this->vipWxCode);

			$xfer += $output->writeFieldEnd();
		}


		if($this->vipQuickAppUrl !== null) {

			$xfer += $output->writeFieldBegin('vipQuickAppUrl');
			$xfer += $output->writeString($this->vipQuickAppUrl);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}

?>
