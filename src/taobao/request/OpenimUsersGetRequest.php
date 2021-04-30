<?php

namespace NiuGengYun\EasyTBK\taobao\request;

use NiuGengYun\EasyTBK\taobao\RequestCheckUtil;
/**
 * TOP API: taobao.openim.users.get request
 *
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class OpenimUsersGetRequest
{
    /**
     * 用户id序列
     **/
    private $userids;

    private $apiParas = array();

    public function setUserids($userids)
    {
        $this->userids = $userids;
        $this->apiParas["userids"] = $userids;
    }

    public function getUserids()
    {
        return $this->userids;
    }

    public function getApiMethodName()
    {
        return "taobao.openim.users.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->userids, "userids");
        RequestCheckUtil::checkMaxListSize ($this->userids, 100, "userids");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
