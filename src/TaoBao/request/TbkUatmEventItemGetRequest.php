<?php

namespace NiuGengYun\EasyTBK\TaoBao\request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.uatm.event.item.get request
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TbkUatmEventItemGetRequest
{
    /**
     * 推广位id，需要在淘宝联盟后台创建；且属于appkey对应的备案媒体id（siteid），如何获取adzoneid，请参考：http://club.alimama.com/read-htm-tid-6333967.html?spm=0.0.0.0.msZnx5
     **/
    private $adzoneId;

    /**
     * 招商活动id
     **/
    private $eventId;

    /**
     * 需要输出则字段列表，逗号分隔
     **/
    private $fields;

    /**
     * 第几页，默认：１，从1开始计数
     **/
    private $pageNo;

    /**
     * 页大小，默认20，1~100
     **/
    private $pageSize;

    /**
     * 链接形式：1：PC，2：无线，默认：１
     **/
    private $platform;

    /**
     * 自定义输入串，英文和数字组成，长度不能大于12个字符，区分不同的推广渠道
     **/
    private $unid;

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

    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
        $this->apiParas["event_id"] = $eventId;
    }

    public function getEventId()
    {
        return $this->eventId;
    }

    public function setFields($fields)
    {
        $this->fields = $fields;
        $this->apiParas["fields"] = $fields;
    }

    public function getFields()
    {
        return $this->fields;
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

    public function setUnid($unid)
    {
        $this->unid = $unid;
        $this->apiParas["unid"] = $unid;
    }

    public function getUnid()
    {
        return $this->unid;
    }

    public function getApiMethodName()
    {
        return "taobao.tbk.uatm.event.item.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->adzoneId, "adzoneId");
        RequestCheckUtil::checkNotNull ($this->eventId, "eventId");
        RequestCheckUtil::checkNotNull ($this->fields, "fields");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
