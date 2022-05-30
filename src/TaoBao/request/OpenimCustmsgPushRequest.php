<?php

namespace NiuGengYun\EasyTBK\TaoBao\request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.openim.custmsg.push request
 *
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class OpenimCustmsgPushRequest
{
    /**
     * 自定义消息内容
     **/
    private $custmsg;

    private $apiParas = array();

    public function setCustmsg($custmsg)
    {
        $this->custmsg = $custmsg;
        $this->apiParas["custmsg"] = $custmsg;
    }

    public function getCustmsg()
    {
        return $this->custmsg;
    }

    public function getApiMethodName()
    {
        return "taobao.openim.custmsg.push";
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
