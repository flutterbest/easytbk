<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.openim.users.delete request
 *
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class OpenimUsersDeleteRequest
{
    /**
     * 需要删除的用户列表，多个用户用半角逗号分隔，最多一次可以删除100个用户
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
        return "taobao.openim.users.delete";
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
