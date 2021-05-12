<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace NiuGengYun\EasyTBK\vip\request;

class GoodsInfoResponse {

	static $_TSPEC;
	public $goodsInfoList = null;
	public $total = null;
	public $sortFields = null;
	public $page = null;
	public $pageSize = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodsInfoList'
			),
			2 => array(
			'var' => 'total'
			),
			4 => array(
			'var' => 'sortFields'
			),
			5 => array(
			'var' => 'page'
			),
			6 => array(
			'var' => 'pageSize'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['goodsInfoList'])){

				$this->goodsInfoList = $vals['goodsInfoList'];
			}


			if (isset($vals['total'])){

				$this->total = $vals['total'];
			}


			if (isset($vals['sortFields'])){

				$this->sortFields = $vals['sortFields'];
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

		return 'GoodsInfoResponse';
	}

	public function read($input){

		$input->readStructBegin();
		while(true){

			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;


			if ("goodsInfoList" == $schemeField){

				$needSkip = false;

				$this->goodsInfoList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){

					try{

						$elem0 = null;

						$elem0 = new \NiuGengYun\EasyTBK\vip\request\GoodsInfo();
						$elem0->read($input);

						$this->goodsInfoList[$_size0++] = $elem0;
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




			if ("sortFields" == $schemeField){

				$needSkip = false;

				$this->sortFields = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){

					try{

						$elem1 = null;

						$elem1 = new \NiuGengYun\EasyTBK\vip\request\SortField();
						$elem1->read($input);

						$this->sortFields[$_size1++] = $elem1;
					}
					catch(\Exception $e){

						break;
					}
				}

				$input->readListEnd();

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

				\NiuGengYun\EasyTBK\vip\Osp\Protocol\ProtocolUtil::skip($input);
			}

			$input->readFieldEnd();
		}

		$input->readStructEnd();



	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		if($this->goodsInfoList !== null) {

			$xfer += $output->writeFieldBegin('goodsInfoList');

			if (!is_array($this->goodsInfoList)){

				throw new \NiuGengYun\EasyTBK\vip\Osp\Exception\OspException('Bad type in structure.', \NiuGengYun\EasyTBK\vip\Osp\Exception\OspException::INVALID_DATA);
			}

			$output->writeListBegin();
			foreach ($this->goodsInfoList as $iter0){


				if (!is_object($iter0)) {

					throw new \NiuGengYun\EasyTBK\vip\Osp\Exception\OspException('Bad type in structure.', \NiuGengYun\EasyTBK\vip\Osp\Exception\OspException::INVALID_DATA);
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


		if($this->sortFields !== null) {

			$xfer += $output->writeFieldBegin('sortFields');

			if (!is_array($this->sortFields)){

				throw new \NiuGengYun\EasyTBK\vip\Osp\Exception\OspException('Bad type in structure.', \NiuGengYun\EasyTBK\vip\Osp\Exception\OspException::INVALID_DATA);
			}

			$output->writeListBegin();
			foreach ($this->sortFields as $iter0){


				if (!is_object($iter0)) {

					throw new \NiuGengYun\EasyTBK\vip\Osp\Exception\OspException('Bad type in structure.', \NiuGengYun\EasyTBK\vip\Osp\Exception\OspException::INVALID_DATA);
				}

				$xfer += $iter0->write($output);

			}

			$output->writeListEnd();

			$xfer += $output->writeFieldEnd();
		}


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
