<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.adzone.create request
 *
 * @author auto create
 * @since 1.0, 2018.03.02
 */
class TbkScAdzoneCreateRequest
{
    /**
     * 广告位名称，最大长度64字符
     **/
    private $adzoneName;

    /**
     * 网站ID
     **/
    private $siteId;

    private $apiParas = array();

    public function setAdzoneName($adzoneName)
    {
        $this->adzoneName = $adzoneName;
        $this->apiParas["adzone_name"] = $adzoneName;
    }

    public function getAdzoneName()
    {
        return $this->adzoneName;
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
        return "taobao.tbk.sc.adzone.create";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->adzoneName, "adzoneName");
        RequestCheckUtil::checkMaxLength ($this->adzoneName, 64, "adzoneName");
        RequestCheckUtil::checkNotNull ($this->siteId, "siteId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
