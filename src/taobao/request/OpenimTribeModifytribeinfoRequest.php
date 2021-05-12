<?php

namespace NiuGengYun\EasyTBK\taobao\request;

use NiuGengYun\EasyTBK\taobao\RequestCheckUtil;
/**
 * TOP API: taobao.openim.tribe.modifytribeinfo request
 *
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class OpenimTribeModifytribeinfoRequest
{
    /**
     * 群公告
     **/
    private $notice;

    /**
     * 群id
     **/
    private $tribeId;

    /**
     * 群名称
     **/
    private $tribeName;

    /**
     * 用户信息
     **/
    private $user;

    private $apiParas = array();

    public function setNotice($notice)
    {
        $this->notice = $notice;
        $this->apiParas["notice"] = $notice;
    }

    public function getNotice()
    {
        return $this->notice;
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

    public function setTribeName($tribeName)
    {
        $this->tribeName = $tribeName;
        $this->apiParas["tribe_name"] = $tribeName;
    }

    public function getTribeName()
    {
        return $this->tribeName;
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
        return "taobao.openim.tribe.modifytribeinfo";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->notice, "notice");
        RequestCheckUtil::checkNotNull ($this->tribeId, "tribeId");
        RequestCheckUtil::checkNotNull ($this->tribeName, "tribeName");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
