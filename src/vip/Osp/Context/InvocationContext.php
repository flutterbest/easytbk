<?php

namespace NiuGengYun\EasyTBK\Vip\Osp\Context;

/**
 * 调用上下文
 *
 * @author Jamin.li
 *
 */
class InvocationContext {
	private $calleeIP;
	private $calleePort;
	private $protocol;
	private $serviceName;
	private $method;
	private $callerVersion;
	private $uip;
	private $returnCode; // 返回码
	private $returnMessage; // 返回信息
	private $prot; // 传输协议
	private $transport; // 传输管道
	private static $invocationContext; // 静态自身引用，单例

	private $response;//请求返回信息

	private $appKey;
	private $appSecret;
	private $appURL;
	private $accessToken;
	private $language;
	private $timeOut;
	private $sign;
	public static function getInstance() {
		if (InvocationContext::$invocationContext == null) {
			InvocationContext::$invocationContext = new InvocationContext ();
		}
		return InvocationContext::$invocationContext;
	}

	/**
	 * 重设数据
	 */
	public function reset() {
		$returnCode = 0;
		$returnMessage = null;
		$sign = null;
	}
	public function setCalleeIP($ip) {
		$this->calleeIP = $ip;
	}
	public function setCalleePort($port) {
		$this->calleePort = $port;
	}
	public function getCalleeIP() {
		return $this->calleeIP;
	}
	public function getCalleePort() {
		return $this->calleePort;
	}
	public function setServiceName($serviceName) {
		$this->serviceName = $serviceName;
	}
	public function getServiceName() {
		return $this->serviceName;
	}
	public function setMethod($method) {
		$this->method = $method;
	}
	public function getMethod() {
		return $this->method;
	}
	public function setCallerVersion($callerVersion) {
		$this->callerVersion = $callerVersion;
	}
	public function getCallerVersion() {
		return $this->callerVersion;
	}
	public function setProtocol($protocol) {
		$this->protocol = $protocol;
	}
	public function getProtocol() {
		return $this->protocol;
	}
	public function setTransport($transport) {
		$this->transport = $transport;
	}
	public function getTransport() {
		return $this->transport;
	}
	public function setUip($uip) {
		$this->uip = $uip;
	}
	public function getUip() {
		return $this->uip;
	}
	public function setReturnCode($returnCode) {
		$this->returnCode = $returnCode;
	}
	public function getReturnCode() {
		return $this->returnCode;
	}
	public function setReturnMessage($returnMessage) {
		$this->returnMessage = $returnMessage;
	}
	public function getReturnMessage() {
		return $this->returnMessage;
	}
	public function setProt($prot) {
		$this->prot = $prot;
	}
	public function getProt() {
		return $this->prot;
	}

	public function setResponse($response){
		$this->response = $response;
	}

	public function getResponse(){
		return $this->response;
	}

	public function setAppKey($appKey){
		$this->appKey = $appKey;
	}

	public function getAppKey(){
		return $this->appKey;
	}

	public function setAppSecret($appSecret){
		$this->appSecret = $appSecret;
	}

	public function setAccessToken($accessToken){
		$this->accessToken = $accessToken;
	}

	public function getAppSecret(){
		return $this->appSecret;
	}

	public function setAppURL($appURL){
		$this->appURL = $appURL;
	}

	public function getAppURL(){
		return $this->appURL;
	}

	public function getAccessToken(){
		return $this->accessToken;
	}

	public function setLanguage($language){
		$this->language = $language;
	}

	public function getLanguage(){
		return $this->language;
	}

	public function setTimeOut($timeOut){
	   $this->timeOut = $timeOut;
	}

    public function getTimeOut()
    {
        return $this->timeOut;
    }

    public function setSign($sign){
    	$this->sign = $sign;
    }

    public function getSign()
    {
    	return $this->sign;
    }




}
