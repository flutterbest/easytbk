<?php
/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2018-8-31
 */

namespace NiuGengYun\EasyTBK\SuNing\Request\Netalliance;

use NiuGengYun\EasyTBK\SuNing\SuningRequest;
use NiuGengYun\EasyTBK\SuNing\RequestCheckUtil;

class StorepromotionurlQueryRequest extends SuningRequest
{

    /**
     *
     */
    private $adBookId;

    /**
     *
     */
    private $commCode;

    /**
     *
     */
    private $mertCode;

    /**
     *
     */
    private $urlType;

    public function getAdBookId()
    {
        return $this->adBookId;
    }

    public function setAdBookId($adBookId)
    {
        $this->adBookId = $adBookId;
        $this->apiParams["adBookId"] = $adBookId;
    }

    public function getCommCode()
    {
        return $this->commCode;
    }

    public function setCommCode($commCode)
    {
        $this->commCode = $commCode;
        $this->apiParams["commCode"] = $commCode;
    }

    public function getMertCode()
    {
        return $this->mertCode;
    }

    public function setMertCode($mertCode)
    {
        $this->mertCode = $mertCode;
        $this->apiParams["mertCode"] = $mertCode;
    }

    public function getUrlType()
    {
        return $this->urlType;
    }

    public function setUrlType($urlType)
    {
        $this->urlType = $urlType;
        $this->apiParams["urlType"] = $urlType;
    }

    public function getApiMethodName()
    {
        return 'suning.netalliance.storepromotionurl.query';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

    public function check()
    {
        //非空校验
        RequestCheckUtil::checkNotNull($this->adBookId, 'adBookId');
        RequestCheckUtil::checkNotNull($this->mertCode, 'mertCode');
    }

    public function getBizName()
    {
        return "queryStorepromotionurl";
    }

}

?>