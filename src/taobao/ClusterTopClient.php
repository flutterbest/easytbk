<?php

namespace NiuGengYun\EasyTBK\TaoBao;

class ClusterTopClient extends TopClient {

	private static $dnsconfig;
	private static $syncDate = 0;
	private static $applicationVar ;
	private static $cfgDuration = 10;

	public function __construct($appkey = "",$secretKey = ""){
		ClusterTopClient::$applicationVar = new ApplicationVar;
		$this->appkey = $appkey;
		$this->secretKey = $secretKey ;
		$saveConfig = ClusterTopClient::$applicationVar->getValue();

		if($saveConfig){
			$tmpConfig = $saveConfig['dnsconfig'];
			ClusterTopClient::$dnsconfig = $this->object_to_array($tmpConfig);
			unset($tmpConfig);

			ClusterTopClient::$syncDate = $saveConfig['syncDate'];
			if(!ClusterTopClient::$syncDate)
				ClusterTopClient::$syncDate = 0;
		}
	}

	public function __destruct(){
		if(ClusterTopClient::$dnsconfig && ClusterTopClient::$syncDate){
			ClusterTopClient::$applicationVar->setValue("dnsconfig",ClusterTopClient::$dnsconfig);
			ClusterTopClient::$applicationVar->setValue("syncDate",ClusterTopClient::$syncDate);
			ClusterTopClient::$applicationVar->write();
		}
	}

	public function execute($request = null, $session = null,$bestUrl = null){
		$currentDate = date('U');
		$syncDuration = $this->getDnsConfigSyncDuration();
		$bestUrl = $this->getBestVipUrl($this->gatewayUrl,$request->getApiMethodName(),$session);
		if($currentDate - ClusterTopClient::$syncDate > $syncDuration * 60){
			$httpdns = new HttpdnsGetRequest;
			ClusterTopClient::$dnsconfig = json_decode(parent::execute($httpdns,null,$bestUrl)->result,true);
			$syncDate = date('U');
			ClusterTopClient::$syncDate = $syncDate ;
		}
		return parent::execute($request,$session,$bestUrl);
	}

	private function getDnsConfigSyncDuration(){
		if(ClusterTopClient::$cfgDuration){
			return ClusterTopClient::$cfgDuration;
		}
		if(!ClusterTopClient::$dnsconfig){
			return ClusterTopClient::$cfgDuration;
		}
		$config = json_encode(ClusterTopClient::$dnsconfig);
		if(!$config){
			return ClusterTopClient::$cfgDuration;
		}
		$config = ClusterTopClient::$dnsconfig['config'];
		$duration = $config['interval'];
		ClusterTopClient::$cfgDuration = $duration;

		return ClusterTopClient::$cfgDuration;
	}

	private function getBestVipUrl($url,$apiname = null,$session = null){
		$config = ClusterTopClient::$dnsconfig['config'];
		$degrade = $config['degrade'];
		if(strcmp($degrade,'true') == 0){
			return $url;
		}
		$currentEnv = $this->getEnvByApiName($apiname,$session);
		$vip = $this->getVipByEnv($url,$currentEnv);
		if($vip)
			return $vip;
		return $url;
	}

	private function getVipByEnv($comUrl,$currentEnv){
		$urlSchema = parse_url($comUrl);
		if(!$urlSchema)
			return null;
		if(!ClusterTopClient::$dnsconfig['env'])
			return null;

		if(!array_key_exists($currentEnv,ClusterTopClient::$dnsconfig['env']))
			return null;

		$hostList = ClusterTopClient::$dnsconfig['env'][$currentEnv];
		if(!$hostList)
			return null ;

		$vipList = null;
		foreach ($hostList as $key => $value) {
			if(strcmp($key,$urlSchema['host']) == 0 && strcmp($value['proto'],$urlSchema['scheme']) == 0){
				$vipList = $value;
				break;
			}
		}
		$vip = $this->getRandomWeightElement($vipList['vip']);

		if($vip){
			return $urlSchema['scheme']."://".$vip.$urlSchema['path'];
		}
		return null;
	}

	private function getEnvByApiName($apiName,$session=""){
		$apiCfgArray = ClusterTopClient::$dnsconfig['api'];
		if($apiCfgArray){
			if(array_key_exists($apiName,$apiCfgArray)){
				$apiCfg = $apiCfgArray[$apiName];
				$userFlag = $apiCfg['user'];
				$flag = $this->getUserFlag($session);
				if($userFlag && $flag ){
					return $this->getEnvBySessionFlag($userFlag,$flag);
				}else{
					return $this->getRandomWeightElement($apiCfg['rule']);
				}
			}
		}
		return $this->getDeafultEnv();
	}

	private function getUserFlag($session){
		if($session && strlen($session) > 5){
			if($session[0] == '6' || $session[0] == '7'){
				return $session[strlen($session) -1];
			}else if($session[0] == '5' || $session[0] == '8'){
				return $session[5];
			}
		}
		return null;
	}

	private function getEnvBySessionFlag($targetConfig,$flag){
		if($flag){
			$userConf = ClusterTopClient::$dnsconfig['user'];
			$cfgArry = $userConf[$targetConfig];
			foreach ($cfgArry as $key => $value) {
				if(in_array($flag,$value))
					return $key;
			}
		}else{
			return null;
		}
	}

	private function getRandomWeightElement($elements){
		$totalWeight = 0;
		if($elements){
			foreach ($elements as $ele) {
				$weight = $this->getElementWeight($ele);
				$r = $this->randomFloat() * ($weight + $totalWeight);
				if($r >= $totalWeight){
					$selected = $ele;
				}
				$totalWeight += $weight;
			}
			if($selected){
				return $this->getElementValue($selected);
			}
		}
		return null;

	}

	private function getElementWeight($ele){
		$params = explode('|', $ele);
		return floatval($params[1]);
	}
	private function getElementValue($ele){
		$params = explode('|', $ele);
		return $params[0];
	}

	private function getDeafultEnv(){
		return ClusterTopClient::$dnsconfig['config']['def_env'];
	}

	private static function startsWith($haystack, $needle) {
    	return $needle === "" || strpos($haystack, $needle) === 0;
	}

	private function object_to_array($obj)
	{
    	$_arr= is_object($obj) ? get_object_vars($obj) : $obj;
    	foreach($_arr as $key=> $val)
    	{
        	$val= (is_array($val) || is_object($val))? $this->object_to_array($val) : $val;
        	$arr[$key] = $val;
    	}
    	return$arr;
	}

	private function randomFloat($min = 0, $max = 1) { return $min + mt_rand() / mt_getrandmax() * ($max - $min); }
}
?>
