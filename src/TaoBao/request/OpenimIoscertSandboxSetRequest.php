<?php

namespace NiuGengYun\EasyTBK\TaoBao\request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.openim.ioscert.sandbox.set request
 *
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class OpenimIoscertSandboxSetRequest
{
    /**
     * 证书内容,base64编码
     **/
    private $cert;

    /**
     * 系统自动生成
     **/
    private $password;

    private $apiParas = array();

    public function setCert($cert)
    {
        $this->cert = $cert;
        $this->apiParas["cert"] = $cert;
    }

    public function getCert()
    {
        return $this->cert;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        $this->apiParas["password"] = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getApiMethodName()
    {
        return "taobao.openim.ioscert.sandbox.set";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->cert, "cert");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
