<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.uatm.event.get request
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TbkUatmEventGetRequest
{
    /**
     * 需要返回的字段列表，不能为空，字段名之间使用逗号分隔
     **/
    private $fields;

    /**
     * 默认1，第几页，从1开始计数
     **/
    private $pageNo;

    /**
     * 默认20,  页大小，即每一页的活动个数
     **/
    private $pageSize;

    private $apiParas = array();

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

    public function getApiMethodName()
    {
        return "taobao.tbk.uatm.event.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->fields, "fields");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
