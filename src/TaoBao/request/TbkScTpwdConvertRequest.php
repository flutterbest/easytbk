<?php
namespace NiuGengYun\EasyTBK\TaoBao\request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.sc.tpwd.convert request
 * 
 * @author auto create
 * @since 1.0, 2019.08.13
 */
class TbkScTpwdConvertRequest
{
	/** 
	 * 广告位ID
	 **/
	private $adzoneId;
	
	/** 
	 * 1表示商品转通用计划链接，其他值或不传表示优先转营销计划链接
	 **/
	private $dx;
	
	/** 
	 * 需要解析的淘口令
	 **/
	private $passwordContent;
	
	/** 
	 * 备案的网站id, mm_xx_xx_xx pid三段式中的第二段
	 **/
	private $siteId;
	
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

	public function setDx($dx)
	{
		$this->dx = $dx;
		$this->apiParas["dx"] = $dx;
	}

	public function getDx()
	{
		return $this->dx;
	}

	public function setPasswordContent($passwordContent)
	{
		$this->passwordContent = $passwordContent;
		$this->apiParas["password_content"] = $passwordContent;
	}

	public function getPasswordContent()
	{
		return $this->passwordContent;
	}

	public function setSiteId($siteId)
	{
		$this->siteId = $siteId;
		$this->apiParas["site_id"] = $siteId;
	}

	public function getSiteId()
	{
		return $this->siteId;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.sc.tpwd.convert";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adzoneId,"adzoneId");
		RequestCheckUtil::checkNotNull($this->passwordContent,"passwordContent");
		RequestCheckUtil::checkNotNull($this->siteId,"siteId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
