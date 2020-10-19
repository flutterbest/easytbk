<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.dg.newuser.order.sum request
 *
 * @author auto create
 * @since 1.0, 2018.07.20
 */
class TbkDgNewuserOrderSumRequest
{
    /**
     * 活动id， 活动名称与活动ID列表，请参见https://tbk.bbs.taobao.com/detail.html?appId=45301&postId=8599277
     **/
    private $activityId;

    /**
     * mm_xxx_xxx_xxx的第三位
     **/
    private $adzoneId;

    /**
     * 页码，默认1
     **/
    private $pageNo;

    /**
     * 页大小，默认20，1~100
     **/
    private $pageSize;

    /**
     * 结算月份
     **/
    private $settleMonth;

    /**
     * mm_xxx_xxx_xxx的第二位
     **/
    private $siteId;

    private $apiParas = array();

    public function setActivityId($activityId)
    {
        $this->activityId = $activityId;
        $this->apiParas["activity_id"] = $activityId;
    }

    public function getActivityId()
    {
        return $this->activityId;
    }

    public function setAdzoneId($adzoneId)
    {
        $this->adzoneId = $adzoneId;
        $this->apiParas["adzone_id"] = $adzoneId;
    }

    public function getAdzoneId()
    {
        return $this->adzoneId;
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

    public function setSettleMonth($settleMonth)
    {
        $this->settleMonth = $settleMonth;
        $this->apiParas["settle_month"] = $settleMonth;
    }

    public function getSettleMonth()
    {
        return $this->settleMonth;
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
        return "taobao.tbk.dg.newuser.order.sum";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->activityId, "activityId");
        RequestCheckUtil::checkNotNull ($this->pageNo, "pageNo");
        RequestCheckUtil::checkNotNull ($this->pageSize, "pageSize");
        RequestCheckUtil::checkMaxValue ($this->pageSize, 100, "pageSize");
        RequestCheckUtil::checkMinValue ($this->pageSize, 1, "pageSize");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
