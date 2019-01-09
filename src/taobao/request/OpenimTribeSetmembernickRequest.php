<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.openim.tribe.setmembernick request
 *
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class OpenimTribeSetmembernickRequest
{
    /**
     * 被设置昵称的群成员
     **/
    private $member;

    /**
     * 设置的昵称
     **/
    private $nick;

    /**
     * 群id
     **/
    private $tribeId;

    /**
     * 发起设置昵称的操作者，如果是设置其他成员的昵称，只有普通组的群主和管理员有权限
     **/
    private $user;

    private $apiParas = array();

    public function setMember($member)
    {
        $this->member = $member;
        $this->apiParas["member"] = $member;
    }

    public function getMember()
    {
        return $this->member;
    }

    public function setNick($nick)
    {
        $this->nick = $nick;
        $this->apiParas["nick"] = $nick;
    }

    public function getNick()
    {
        return $this->nick;
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
        return "taobao.openim.tribe.setmembernick";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->nick, "nick");
        RequestCheckUtil::checkNotNull ($this->tribeId, "tribeId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
