<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.top.ipout.get request
 *
 * @author auto create
 * @since 1.0, 2018.08.07
 */
class TopIpoutGetRequest
{

    private $apiParas = array();

    public function getApiMethodName()
    {
        return "taobao.top.ipout.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
