<?php

namespace NiuGengYun\EasyTBK\taobao\request;

use NiuGengYun\EasyTBK\taobao\RequestCheckUtil;
/**
 * TOP API: taobao.openuid.get.bytrade request
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OpenuidGetBytradeRequest
{
    /**
     * 订单ID
     **/
    private $tid;

    private $apiParas = array();

    public function setTid($tid)
    {
        $this->tid = $tid;
        $this->apiParas["tid"] = $tid;
    }

    public function getTid()
    {
        return $this->tid;
    }

    public function getApiMethodName()
    {
        return "taobao.openuid.get.bytrade";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->tid, "tid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
