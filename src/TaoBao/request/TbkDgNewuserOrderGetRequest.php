<?php

namespace NiuGengYun\EasyTBK\TaoBao\request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.dg.newuser.order.get request
 *
 * @author auto create
 * @since 1.0, 2018.07.24
 */
class TbkDgNewuserOrderGetRequest
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
        return "taobao.tbk.dg.newuser.order.get";
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
