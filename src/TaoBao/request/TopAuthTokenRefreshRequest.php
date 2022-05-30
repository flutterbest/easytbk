<?php

namespace NiuGengYun\EasyTBK\TaoBao\request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.top.auth.token.refresh request
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TopAuthTokenRefreshRequest
{
    /**
     * grantType==refresh_token 时需要
     **/
    private $refreshToken;

    private $apiParas = array();

    public function setRefreshToken($refreshToken)
    {
        $this->refreshToken = $refreshToken;
        $this->apiParas["refresh_token"] = $refreshToken;
    }

    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    public function getApiMethodName()
    {
        return "taobao.top.auth.token.refresh";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->refreshToken, "refreshToken");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
