<?php

namespace NiuGengYun\EasyTBK\taobao\request;

use NiuGengYun\EasyTBK\taobao\RequestCheckUtil;
/**
 * TOP API: taobao.openim.tribe.sendmsg request
 *
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class OpenimTribeSendmsgRequest
{
    /**
     * 发送群消息
     **/
    private $msg;

    /**
     * 群id
     **/
    private $tribeId;

    /**
     * 群消息发送者，只有该群的成员才可以发送群消息
     **/
    private $user;

    private $apiParas = array();

    public function setMsg($msg)
    {
        $this->msg = $msg;
        $this->apiParas["msg"] = $msg;
    }

    public function getMsg()
    {
        return $this->msg;
    }

    public function setTribeId($tribeId)
    {
        $this->tribeId = $tribeId;
        $this->apiParas["tribe_id"] = $tribeId;
    }

    public function getTribeId()
    {
        return $this->tribeId;
    }

    public function setUser($user)
    {
        $this->user = $user;
        $this->apiParas["user"] = $user;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getApiMethodName()
    {
        return "taobao.openim.tribe.sendmsg";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->tribeId, "tribeId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
