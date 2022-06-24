<?php

namespace NiuGengYun\EasyTBK\TaoBao\request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.top.auth.token.create request
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TopAuthTokenCreateRequest
{
    /**
     * 授权code，grantType==authorization_code 时需要
     **/
    private $code;

    /**
     * 与生成code的uuid配对
     **/
    private $uuid;

    private $apiParas = array();

    public function setCode($code)
    {
        $this->code = $code;
        $this->apiParas["code"] = $code;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        $this->apiParas["uuid"] = $uuid;
    }

    public function getUuid()
    {
        return $this->uuid;
    }

    public function getApiMethodName()
    {
        return "taobao.top.auth.token.create";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->code, "code");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
