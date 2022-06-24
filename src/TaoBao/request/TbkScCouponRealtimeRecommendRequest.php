<?php

namespace NiuGengYun\EasyTBK\TaoBao\request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.sc.coupon.realtime.recommend request
 *
 * @author auto create
 * @since 1.0, 2017.06.30
 */
class TbkScCouponRealtimeRecommendRequest
{
    /**
     * mm_xxx_xxx_xxx的第三位
     **/
    private $adzoneId;

    /**
     * 频道，支持的值：zonghe    综合 neiyi    内衣 nvzhuang    女装 muying    母婴 nanzhuang    男装 shipin    食品 jiajujiazhuang    家居家装 shumajiadian    数码家电 meizhuanggehu    美妆个护 yundonghuwai    运动户外 xiebaopeishi    鞋包配饰
     **/
    private $channel;

    /**
     * 第几页，默认：1（最多出200个结果）
     **/
    private $pageNo;

    /**
     * 页大小，默认20，1~100
     **/
    private $pageSize;

    /**
     * 1：PC，2：无线，默认：1
     **/
    private $platform;

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

    public function setChannel($channel)
    {
        $this->channel = $channel;
        $this->apiParas["channel"] = $channel;
    }

    public function getChannel()
    {
        return $this->channel;
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

    public function setPlatform($platform)
    {
        $this->platform = $platform;
        $this->apiParas["platform"] = $platform;
    }

    public function getPlatform()
    {
        return $this->platform;
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
        return "taobao.tbk.sc.coupon.realtime.recommend";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->adzoneId, "adzoneId");
        RequestCheckUtil::checkNotNull ($this->siteId, "siteId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
