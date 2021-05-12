<?php

namespace NiuGengYun\EasyTBK\taobao\request;

use NiuGengYun\EasyTBK\taobao\RequestCheckUtil;
/**
 * TOP API: taobao.openim.users.update request
 *
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class OpenimUsersUpdateRequest
{
    /**
     * 用户信息列表
     **/
    private $userinfos;

    private $apiParas = array();

    public function setUserinfos($userinfos)
    {
        $this->userinfos = $userinfos;
        $this->apiParas["userinfos"] = $userinfos;
    }

    public function getUserinfos()
    {
        return $this->userinfos;
    }

    public function getApiMethodName()
    {
        return "taobao.openim.users.update";
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
