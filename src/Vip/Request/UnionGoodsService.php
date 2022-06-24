<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace NiuGengYun\EasyTBK\Vip\Request;
interface UnionGoodsServiceIf{


	public function getByGoodsIds( $goodsIdList, $requestId);

	public function getByGoodsIdsWithOauth( $goodsIdList, $requestId);

	public function goodsList(\NiuGengYun\EasyTBK\Vip\Request\GoodsInfoRequest $request);

	public function goodsListWithOauth(\NiuGengYun\EasyTBK\Vip\Request\GoodsInfoRequest $request);

	public function healthCheck();

	public function query(\NiuGengYun\EasyTBK\Vip\Request\QueryGoodsRequest $request);

	public function queryWithOauth(\NiuGengYun\EasyTBK\Vip\Request\QueryGoodsRequest $request);

}

class _UnionGoodsServiceClient extends \NiuGengYun\EasyTBK\Vip\Osp\Base\OspStub implements \NiuGengYun\EasyTBK\Vip\Request\UnionGoodsServiceIf{

	public function __construct(){

		parent::__construct("com.vip.adp.api.open.service.UnionGoodsService", "1.0.0");
	}


	public function getByGoodsIds( $goodsIdList, $requestId){

		$this->send_getByGoodsIds( $goodsIdList, $requestId);
		return $this->recv_getByGoodsIds();
	}

	public function send_getByGoodsIds( $goodsIdList, $requestId){

		$this->initInvocation("getByGoodsIds");
		$args = new \NiuGengYun\EasyTBK\Vip\Request\UnionGoodsService_getByGoodsIds_args();

		$args->goodsIdList = $goodsIdList;

		$args->requestId = $requestId;

		$this->send_base($args);
	}

	public function recv_getByGoodsIds(){

		$result = new \NiuGengYun\EasyTBK\Vip\Request\UnionGoodsService_getByGoodsIds_result();
		$this->receive_base($result);
		if ($result->success !== null){

			return $result->success;
		}

	}


	public function getByGoodsIdsWithOauth( $goodsIdList, $requestId){

		$this->send_getByGoodsIdsWithOauth( $goodsIdList, $requestId);
		return $this->recv_getByGoodsIdsWithOauth();
	}

	public function send_getByGoodsIdsWithOauth( $goodsIdList, $requestId){

		$this->initInvocation("getByGoodsIdsWithOauth");
		$args = new \NiuGengYun\EasyTBK\Vip\Request\UnionGoodsService_getByGoodsIdsWithOauth_args();

		$args->goodsIdList = $goodsIdList;

		$args->requestId = $requestId;

		$this->send_base($args);
	}

	public function recv_getByGoodsIdsWithOauth(){

		$result = new \NiuGengYun\EasyTBK\Vip\Request\UnionGoodsService_getByGoodsIdsWithOauth_result();
		$this->receive_base($result);
		if ($result->success !== null){

			return $result->success;
		}

	}


	public function goodsList(\NiuGengYun\EasyTBK\Vip\Request\GoodsInfoRequest $request){

		$this->send_goodsList( $request);
		return $this->recv_goodsList();
	}

	public function send_goodsList(\NiuGengYun\EasyTBK\Vip\Request\GoodsInfoRequest $request){

		$this->initInvocation("goodsList");
		$args = new \NiuGengYun\EasyTBK\Vip\Request\UnionGoodsService_goodsList_args();

		$args->request = $request;

		$this->send_base($args);
	}

	public function recv_goodsList(){

		$result = new \NiuGengYun\EasyTBK\Vip\Request\UnionGoodsService_goodsList_result();
		$this->receive_base($result);
		if ($result->success !== null){

			return $result->success;
		}

	}


	public function goodsListWithOauth(\NiuGengYun\EasyTBK\Vip\Request\GoodsInfoRequest $request){

		$this->send_goodsListWithOauth( $request);
		return $this->recv_goodsListWithOauth();
	}

	public function send_goodsListWithOauth(\NiuGengYun\EasyTBK\Vip\Request\GoodsInfoRequest $request){

		$this->initInvocation("goodsListWithOauth");
		$args = new \NiuGengYun\EasyTBK\Vip\Request\UnionGoodsService_goodsListWithOauth_args();

		$args->request = $request;

		$this->send_base($args);
	}

	public function recv_goodsListWithOauth(){

		$result = new \NiuGengYun\EasyTBK\Vip\Request\UnionGoodsService_goodsListWithOauth_result();
		$this->receive_base($result);
		if ($result->success !== null){

			return $result->success;
		}

	}


	public function healthCheck(){

		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}

	public function send_healthCheck(){

		$this->initInvocation("healthCheck");
		$args = new \NiuGengYun\EasyTBK\Vip\Request\UnionGoodsService_healthCheck_args();

		$this->send_base($args);
	}

	public function recv_healthCheck(){

		$result = new \NiuGengYun\EasyTBK\Vip\Request\UnionGoodsService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){

			return $result->success;
		}

	}


	public function query(\NiuGengYun\EasyTBK\Vip\Request\QueryGoodsRequest $request){

		$this->send_query( $request);
		return $this->recv_query();
	}

	public function send_query(\NiuGengYun\EasyTBK\Vip\Request\QueryGoodsRequest $request){

		$this->initInvocation("query");
		$args = new \NiuGengYun\EasyTBK\Vip\Request\UnionGoodsService_query_args();

		$args->request = $request;

		$this->send_base($args);
	}

	public function recv_query(){

		$result = new \NiuGengYun\EasyTBK\Vip\Request\UnionGoodsService_query_result();
		$this->receive_base($result);
		if ($result->success !== null){

			return $result->success;
		}

	}


	public function queryWithOauth(\NiuGengYun\EasyTBK\Vip\Request\QueryGoodsRequest $request){

		$this->send_queryWithOauth( $request);
		return $this->recv_queryWithOauth();
	}

	public function send_queryWithOauth(\NiuGengYun\EasyTBK\Vip\Request\QueryGoodsRequest $request){

		$this->initInvocation("queryWithOauth");
		$args = new \NiuGengYun\EasyTBK\Vip\Request\UnionGoodsService_queryWithOauth_args();

		$args->request = $request;

		$this->send_base($args);
	}

	public function recv_queryWithOauth(){

		$result = new \NiuGengYun\EasyTBK\Vip\Request\UnionGoodsService_queryWithOauth_result();
		$this->receive_base($result);
		if ($result->success !== null){

			return $result->success;
		}

	}


}




class UnionGoodsService_getByGoodsIds_args {

	static $_TSPEC;
	public $goodsIdList = null;
	public $requestId = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodsIdList'
			),
			2 => array(
			'var' => 'requestId'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['goodsIdList'])){

				$this->goodsIdList = $vals['goodsIdList'];
			}


			if (isset($vals['requestId'])){

				$this->requestId = $vals['requestId'];
			}


		}

	}


	public function read($input){




		if(true) {


			$this->goodsIdList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){

				try{

					$elem0 = null;
					$input->readString($elem0);

					$this->goodsIdList[$_size0++] = $elem0;
				}
				catch(\Exception $e){

					break;
				}
			}

			$input->readListEnd();

		}




		if(true) {

			$input->readString($this->requestId);

		}






	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		$xfer += $output->writeFieldBegin('goodsIdList');

		if (!is_array($this->goodsIdList)){

			throw new \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}

		$output->writeListBegin();
		foreach ($this->goodsIdList as $iter0){

			$xfer += $output->writeString($iter0);

		}

		$output->writeListEnd();

		$xfer += $output->writeFieldEnd();

		$xfer += $output->writeFieldBegin('requestId');
		$xfer += $output->writeString($this->requestId);

		$xfer += $output->writeFieldEnd();

		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}




class UnionGoodsService_getByGoodsIdsWithOauth_args {

	static $_TSPEC;
	public $goodsIdList = null;
	public $requestId = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodsIdList'
			),
			2 => array(
			'var' => 'requestId'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['goodsIdList'])){

				$this->goodsIdList = $vals['goodsIdList'];
			}


			if (isset($vals['requestId'])){

				$this->requestId = $vals['requestId'];
			}


		}

	}


	public function read($input){




		if(true) {


			$this->goodsIdList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){

				try{

					$elem0 = null;
					$input->readString($elem0);

					$this->goodsIdList[$_size0++] = $elem0;
				}
				catch(\Exception $e){

					break;
				}
			}

			$input->readListEnd();

		}




		if(true) {

			$input->readString($this->requestId);

		}






	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		$xfer += $output->writeFieldBegin('goodsIdList');

		if (!is_array($this->goodsIdList)){

			throw new \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}

		$output->writeListBegin();
		foreach ($this->goodsIdList as $iter0){

			$xfer += $output->writeString($iter0);

		}

		$output->writeListEnd();

		$xfer += $output->writeFieldEnd();

		$xfer += $output->writeFieldBegin('requestId');
		$xfer += $output->writeString($this->requestId);

		$xfer += $output->writeFieldEnd();

		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}




class UnionGoodsService_goodsList_args {

	static $_TSPEC;
	public $request = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['request'])){

				$this->request = $vals['request'];
			}


		}

	}


	public function read($input){




		if(true) {


			$this->request = new \NiuGengYun\EasyTBK\Vip\Request\GoodsInfoRequest();
			$this->request->read($input);

		}






	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		if($this->request !== null) {

			$xfer += $output->writeFieldBegin('request');

			if (!is_object($this->request)) {

				throw new \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}

			$xfer += $this->request->write($output);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}




class UnionGoodsService_goodsListWithOauth_args {

	static $_TSPEC;
	public $request = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['request'])){

				$this->request = $vals['request'];
			}


		}

	}


	public function read($input){




		if(true) {


			$this->request = new \NiuGengYun\EasyTBK\Vip\Request\GoodsInfoRequest();
			$this->request->read($input);

		}






	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		if($this->request !== null) {

			$xfer += $output->writeFieldBegin('request');

			if (!is_object($this->request)) {

				throw new \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}

			$xfer += $this->request->write($output);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}




class UnionGoodsService_healthCheck_args {

	static $_TSPEC;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(

			);

		}

		if (is_array($vals)){


		}

	}


	public function read($input){






	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}




class UnionGoodsService_query_args {

	static $_TSPEC;
	public $request = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['request'])){

				$this->request = $vals['request'];
			}


		}

	}


	public function read($input){




		if(true) {


			$this->request = new \NiuGengYun\EasyTBK\Vip\Request\QueryGoodsRequest();
			$this->request->read($input);

		}






	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		if($this->request !== null) {

			$xfer += $output->writeFieldBegin('request');

			if (!is_object($this->request)) {

				throw new \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}

			$xfer += $this->request->write($output);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}




class UnionGoodsService_queryWithOauth_args {

	static $_TSPEC;
	public $request = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['request'])){

				$this->request = $vals['request'];
			}


		}

	}


	public function read($input){




		if(true) {


			$this->request = new \NiuGengYun\EasyTBK\Vip\Request\QueryGoodsRequest();
			$this->request->read($input);

		}






	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		if($this->request !== null) {

			$xfer += $output->writeFieldBegin('request');

			if (!is_object($this->request)) {

				throw new \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}

			$xfer += $this->request->write($output);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}




class UnionGoodsService_getByGoodsIds_result {

	static $_TSPEC;
	public $success = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['success'])){

				$this->success = $vals['success'];
			}


		}

	}


	public function read($input){




		if(true) {


			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){

				try{

					$elem0 = null;

					$elem0 = new \NiuGengYun\EasyTBK\Vip\Request\GoodsInfo();
					$elem0->read($input);

					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){

					break;
				}
			}

			$input->readListEnd();

		}






	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		if($this->success !== null) {

			$xfer += $output->writeFieldBegin('success');

			if (!is_array($this->success)){

				throw new \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}

			$output->writeListBegin();
			foreach ($this->success as $iter0){


				if (!is_object($iter0)) {

					throw new \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}

				$xfer += $iter0->write($output);

			}

			$output->writeListEnd();

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}




class UnionGoodsService_getByGoodsIdsWithOauth_result {

	static $_TSPEC;
	public $success = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['success'])){

				$this->success = $vals['success'];
			}


		}

	}


	public function read($input){




		if(true) {


			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){

				try{

					$elem1 = null;

					$elem1 = new \NiuGengYun\EasyTBK\Vip\Request\GoodsInfo();
					$elem1->read($input);

					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){

					break;
				}
			}

			$input->readListEnd();

		}






	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		if($this->success !== null) {

			$xfer += $output->writeFieldBegin('success');

			if (!is_array($this->success)){

				throw new \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}

			$output->writeListBegin();
			foreach ($this->success as $iter0){


				if (!is_object($iter0)) {

					throw new \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}

				$xfer += $iter0->write($output);

			}

			$output->writeListEnd();

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}




class UnionGoodsService_goodsList_result {

	static $_TSPEC;
	public $success = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['success'])){

				$this->success = $vals['success'];
			}


		}

	}


	public function read($input){




		if(true) {


			$this->success = new \NiuGengYun\EasyTBK\Vip\Request\GoodsInfoResponse();
			$this->success->read($input);

		}






	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		if($this->success !== null) {

			$xfer += $output->writeFieldBegin('success');

			if (!is_object($this->success)) {

				throw new \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}

			$xfer += $this->success->write($output);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}




class UnionGoodsService_goodsListWithOauth_result {

	static $_TSPEC;
	public $success = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['success'])){

				$this->success = $vals['success'];
			}


		}

	}


	public function read($input){




		if(true) {


			$this->success = new \NiuGengYun\EasyTBK\Vip\Request\GoodsInfoResponse();
			$this->success->read($input);

		}






	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		if($this->success !== null) {

			$xfer += $output->writeFieldBegin('success');

			if (!is_object($this->success)) {

				throw new \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}

			$xfer += $this->success->write($output);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}




class UnionGoodsService_healthCheck_result {

	static $_TSPEC;
	public $success = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['success'])){

				$this->success = $vals['success'];
			}


		}

	}


	public function read($input){




		if(true) {


			$this->success = new \com\vip\hermes\core\health\CheckResult();
			$this->success->read($input);

		}






	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		if($this->success !== null) {

			$xfer += $output->writeFieldBegin('success');

			if (!is_object($this->success)) {

				throw new \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}

			$xfer += $this->success->write($output);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}




class UnionGoodsService_query_result {

	static $_TSPEC;
	public $success = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['success'])){

				$this->success = $vals['success'];
			}


		}

	}


	public function read($input){




		if(true) {


			$this->success = new \NiuGengYun\EasyTBK\Vip\Request\GoodsInfoResponse();
			$this->success->read($input);

		}






	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		if($this->success !== null) {

			$xfer += $output->writeFieldBegin('success');

			if (!is_object($this->success)) {

				throw new \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}

			$xfer += $this->success->write($output);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}




class UnionGoodsService_queryWithOauth_result {

	static $_TSPEC;
	public $success = null;

	public function __construct($vals=null){

		if (!isset(self::$_TSPEC)){

			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),

			);

		}

		if (is_array($vals)){


			if (isset($vals['success'])){

				$this->success = $vals['success'];
			}


		}

	}


	public function read($input){




		if(true) {


			$this->success = new \NiuGengYun\EasyTBK\Vip\Request\GoodsInfoResponse();
			$this->success->read($input);

		}






	}

	public function write($output){

		$xfer = 0;
		$xfer += $output->writeStructBegin();

		if($this->success !== null) {

			$xfer += $output->writeFieldBegin('success');

			if (!is_object($this->success)) {

				throw new \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}

			$xfer += $this->success->write($output);

			$xfer += $output->writeFieldEnd();
		}


		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}

}




?>
