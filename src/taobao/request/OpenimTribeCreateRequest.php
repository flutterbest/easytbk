<?php

namespace NiuGengYun\EasyTBK\taobao\request;

use NiuGengYun\EasyTBK\taobao\RequestCheckUtil;
/**
 * TOP API: taobao.openim.tribe.create request
 *
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class OpenimTribeCreateRequest
{
    /**
     * 创建群时候拉入群的成员tribe_type = 1（即为讨论组类型)时  该参数为必选tribe_type = 0 (即为普通群类型)时，改参数无效，可不填
     **/
    private $members;

    /**
     * 群公告
     **/
    private $notice;

    /**
     * 群名称
     **/
    private $tribeName;

    /**
     * 群类型有两种tribe_type = 0  普通群  普通群有管理员角色，对成员加入有权限控制tribe_type = 1  讨论组  讨论组没有管理员，不能解散
     **/
    private $tribeType;

    /**
     * 用户信息
     **/
    private $user;

    private $apiParas = array();

    public function setMembers($members)
    {
        $this->members = $members;
        $this->apiParas["members"] = $members;
    }

    public function getMembers()
    {
        return $this->members;
    }

    public function setNotice($notice)
    {
        $this->notice = $notice;
        $this->apiParas["notice"] = $notice;
    }

    public function getNotice()
    {
        return $this->notice;
    }

    public function setTribeName($tribeName)
    {
        $this->tribeName = $tribeName;
        $this->apiParas["tribe_name"] = $tribeName;
    }

    public function getTribeName()
    {
        return $this->tribeName;
    }

    public function setTribeType($tribeType)
    {
        $this->tribeType = $tribeType;
        $this->apiParas["tribe_type"] = $tribeType;
    }

    public function getTribeType()
    {
        return $this->tribeType;
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
        return "taobao.openim.tribe.create";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->notice, "notice");
        RequestCheckUtil::checkNotNull ($this->tribeName, "tribeName");
        RequestCheckUtil::checkNotNull ($this->tribeType, "tribeType");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
