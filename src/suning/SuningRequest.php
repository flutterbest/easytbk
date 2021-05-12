<?php

namespace NiuGengYun\EasyTBK\suning;

abstract class SuningRequest
{
    protected $apiParams = array();
    /**
     * 是否参数校验(默认false,测试及生产建议为true)
     */
    protected $checkParam = false;

    public function getCheckParam()
    {
        return $this->checkParam;
    }

    public function setCheckParam($checkParam)
    {
        $this->checkParam = $checkParam;
    }

    public function generatorJsonReq($appParams)
    {
        return null;
    }

    public function generatorXmlReq($appParams)
    {
        return null;
    }

    /**
     * 根据请求方式，生成相应请求报文
     *
     * @param
     *            type 请求方式(json或xml)
     */
    abstract function getApiParams();

    /**
     * 获取接口方法名称
     */
    abstract function getApiMethodName();

    /**
     * 数据校验
     */
    abstract function check();
}

?>