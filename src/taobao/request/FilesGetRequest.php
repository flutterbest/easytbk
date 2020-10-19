<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.files.get request
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class FilesGetRequest
{
    /**
     * 搜索结束时间
     **/
    private $endDate;

    /**
     * 搜索开始时间
     **/
    private $startDate;

    /**
     * 下载链接状态。1:未下载。2:已下载
     **/
    private $status;

    private $apiParas = array();

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        $this->apiParas["end_date"] = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        $this->apiParas["start_date"] = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStatus($status)
    {
        $this->status = $status;
        $this->apiParas["status"] = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getApiMethodName()
    {
        return "taobao.files.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->endDate, "endDate");
        RequestCheckUtil::checkNotNull ($this->startDate, "startDate");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
