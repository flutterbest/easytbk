<?php
namespace NiuGengYun\EasyTBK\TaoBao\Request;
/**
 * TOP API: taobao.tbk.item.guess.like request
 * 
 * @author auto create
 * @since 1.0, 2018.11.09
 */
use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;

class TbkItemGuessLikeRequest
{
	/** 
	 * 广告位ID
	 **/
	private $adzoneId;
	
	/** 
	 * 应用包名
	 **/
	private $apnm;
	
	/** 
	 * ios广告跟踪id
	 **/
	private $idfa;
	
	/** 
	 * android设备imei
	 **/
	private $imei;
	
	/** 
	 * android设备imeiMD5值，32位小写
	 **/
	private $imeiMd5;
	
	/** 
	 * 客户端ip
	 **/
	private $ip;
	
	/** 
	 * 设备型号
	 **/
	private $mn;
	
	/** 
	 * 联网方式，wifi, cell, unknown
	 **/
	private $net;
	
	/** 
	 * 系统类型，ios, android, other
	 **/
	private $os;
	
	/** 
	 * 第几页
	 **/
	private $pageNo;
	
	/** 
	 * 页大小
	 **/
	private $pageSize;
	
	/** 
	 * userAgent
	 **/
	private $ua;
	
	/** 
	 * 用户数字ID，from cookie : unb
	 **/
	private $userId;
	
	/** 
	 * 用户昵称，from cookie : _nk_或者tracknick ; from百川sdk : nick
	 **/
	private $userNick;
	
	private $apiParas = array();
	
	public function setAdzoneId($adzoneId)
	{
		$this->adzoneId = $adzoneId;
		$this->apiParas["adzone_id"] = $adzoneId;
	}

	public function getAdzoneId()
	{
		return $this->adzoneId;
	}

	public function setApnm($apnm)
	{
		$this->apnm = $apnm;
		$this->apiParas["apnm"] = $apnm;
	}

	public function getApnm()
	{
		return $this->apnm;
	}

	public function setIdfa($idfa)
	{
		$this->idfa = $idfa;
		$this->apiParas["idfa"] = $idfa;
	}

	public function getIdfa()
	{
		return $this->idfa;
	}

	public function setImei($imei)
	{
		$this->imei = $imei;
		$this->apiParas["imei"] = $imei;
	}

	public function getImei()
	{
		return $this->imei;
	}

	public function setImeiMd5($imeiMd5)
	{
		$this->imeiMd5 = $imeiMd5;
		$this->apiParas["imei_md5"] = $imeiMd5;
	}

	public function getImeiMd5()
	{
		return $this->imeiMd5;
	}

	public function setIp($ip)
	{
		$this->ip = $ip;
		$this->apiParas["ip"] = $ip;
	}

	public function getIp()
	{
		return $this->ip;
	}

	public function setMn($mn)
	{
		$this->mn = $mn;
		$this->apiParas["mn"] = $mn;
	}

	public function getMn()
	{
		return $this->mn;
	}

	public function setNet($net)
	{
		$this->net = $net;
		$this->apiParas["net"] = $net;
	}

	public function getNet()
	{
		return $this->net;
	}

	public function setOs($os)
	{
		$this->os = $os;
		$this->apiParas["os"] = $os;
	}

	public function getOs()
	{
		return $this->os;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setUa($ua)
	{
		$this->ua = $ua;
		$this->apiParas["ua"] = $ua;
	}

	public function getUa()
	{
		return $this->ua;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function setUserNick($userNick)
	{
		$this->userNick = $userNick;
		$this->apiParas["user_nick"] = $userNick;
	}

	public function getUserNick()
	{
		return $this->userNick;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.item.guess.like";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adzoneId,"adzoneId");
		RequestCheckUtil::checkNotNull($this->ip,"ip");
		RequestCheckUtil::checkNotNull($this->net,"net");
		RequestCheckUtil::checkNotNull($this->os,"os");
		RequestCheckUtil::checkNotNull($this->ua,"ua");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
