<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.sc.newuser.order.get request
 *
 * @author auto create
 * @since 1.0, 2018.07.24
 */
class TbkScNewuserOrderGetRequest
{
    /**
     * 活动id， 现有活动id包括： 2月手淘拉新：119013_2 3月手淘拉新：119013_3 4月手淘拉新：119013_4 拉手机支付宝新用户_赚赏金：200000_5
     **/
    private $activityId;

    /**
     * mm_xxx_xxx_xxx的第三位
     **/
    private $adzoneId;

    /**
     * 结束时间，当活动为淘宝活动，表示最晚结束时间；当活动为支付宝活动，表示最晚绑定时间；当活动为天猫活动，表示最晚领取红包的时间
     **/
    private $endTime;

    /**
     * 页码，默认1
     **/
    private $pageNo;

    /**
     * 页大小，默认20，1~100
     **/
    private $pageSize;

    /**
     * mm_xxx_xxx_xxx的第二位
     **/
    private $siteId;

    /**
     * 开始时间，当活动为淘宝活动，表示最早注册时间；当活动为支付宝活动，表示最早绑定时间；当活动为天猫活动，表示最早领取红包时间
     **/
    private $startTime;

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

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        $this->apiParas["end_time"] = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
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

    public function setSiteId($siteId)
    {
        $this->siteId = $siteId;
        $this->apiParas["site_id"] = $siteId;
    }

    public function getSiteId()
    {
        return $this->siteId;
    }

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        $this->apiParas["start_time"] = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function getApiMethodName()
    {
        return "taobao.tbk.sc.newuser.order.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->activityId, "activityId");
        RequestCheckUtil::checkMaxValue ($this->pageSize, 100, "pageSize");
        RequestCheckUtil::checkMinValue ($this->pageSize, 1, "pageSize");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
