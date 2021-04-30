<?php

namespace NiuGengYun\EasyTBK\taobao\request;

use NiuGengYun\EasyTBK\taobao\RequestCheckUtil;
/**
 * TOP API: taobao.openim.tribe.getalltribes request
 *
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class OpenimTribeGetalltribesRequest
{
    /**
     * 群类型
     **/
    private $tribeTypes;

    /**
     * 用户信息
     **/
    private $user;

    private $apiParas = array();

    public function setTribeTypes($tribeTypes)
    {
        $this->tribeTypes = $tribeTypes;
        $this->apiParas["tribe_types"] = $tribeTypes;
    }

    public function getTribeTypes()
    {
        return $this->tribeTypes;
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
        return "taobao.openim.tribe.getalltribes";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->tribeTypes, "tribeTypes");
        RequestCheckUtil::checkMaxListSize ($this->tribeTypes, 20, "tribeTypes");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
