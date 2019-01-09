<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.openim.userservice.get request
 *
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class OpenimUserserviceGetRequest
{
    /**
     * 某一天
     **/
    private $date;

    /**
     * 当前页
     **/
    private $pageNo;

    /**
     * 页面记录数
     **/
    private $pageSize;

    private $apiParas = array();

    public function setDate($date)
    {
        $this->date = $date;
        $this->apiParas["date"] = $date;
    }

    public function getDate()
    {
        return $this->date;
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

    public function getApiMethodName()
    {
        return "taobao.openim.userservice.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->date, "date");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
