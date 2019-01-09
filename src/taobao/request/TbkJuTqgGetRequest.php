<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.ju.tqg.get request
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TbkJuTqgGetRequest
{
    /**
     * 推广位id（推广位申请方式：http://club.alimama.com/read.php?spm=0.0.0.0.npQdST&tid=6306396&ds=1&page=1&toread=1）
     **/
    private $adzoneId;

    /**
     * 最晚开团时间
     **/
    private $endTime;

    /**
     * 需返回的字段列表
     **/
    private $fields;

    /**
     * 第几页，默认1，1~100
     **/
    private $pageNo;

    /**
     * 页大小，默认40，1~40
     **/
    private $pageSize;

    /**
     * 最早开团时间
     **/
    private $startTime;

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

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        $this->apiParas["end_time"] = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
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
        return "taobao.tbk.ju.tqg.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->adzoneId, "adzoneId");
        RequestCheckUtil::checkNotNull ($this->endTime, "endTime");
        RequestCheckUtil::checkNotNull ($this->fields, "fields");
        RequestCheckUtil::checkNotNull ($this->startTime, "startTime");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
