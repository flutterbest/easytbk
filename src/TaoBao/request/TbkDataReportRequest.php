<?php

namespace NiuGengYun\EasyTBK\TaoBao\request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.data.report request
 *
 * @author auto create
 * @since 1.0, 2017.02.07
 */
class TbkDataReportRequest
{
    /**
     * dataId必须是唯一的日志id
     **/
    private $data;

    /**
     * 推广日志填1
     **/
    private $type;

    private $apiParas = array();

    public function setData($data)
    {
        $this->data = $data;
        $this->apiParas["data"] = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setType($type)
    {
        $this->type = $type;
        $this->apiParas["type"] = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getApiMethodName()
    {
        return "taobao.tbk.data.report";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->data, "data");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
