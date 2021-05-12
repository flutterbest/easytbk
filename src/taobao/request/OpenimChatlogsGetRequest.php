<?php

namespace NiuGengYun\EasyTBK\taobao\request;

use NiuGengYun\EasyTBK\taobao\RequestCheckUtil;
/**
 * TOP API: taobao.openim.chatlogs.get request
 *
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class OpenimChatlogsGetRequest
{
    /**
     * 查询开始时间（UTC时间）
     **/
    private $begin;

    /**
     * 查询条数
     **/
    private $count;

    /**
     * 查询结束时间（UTC时间）
     **/
    private $end;

    /**
     * 迭代key
     **/
    private $nextKey;

    /**
     * 用户1信息
     **/
    private $user1;

    /**
     * 用户2信息
     **/
    private $user2;

    private $apiParas = array();

    public function setBegin($begin)
    {
        $this->begin = $begin;
        $this->apiParas["begin"] = $begin;
    }

    public function getBegin()
    {
        return $this->begin;
    }

    public function setCount($count)
    {
        $this->count = $count;
        $this->apiParas["count"] = $count;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setEnd($end)
    {
        $this->end = $end;
        $this->apiParas["end"] = $end;
    }

    public function getEnd()
    {
        return $this->end;
    }

    public function setNextKey($nextKey)
    {
        $this->nextKey = $nextKey;
        $this->apiParas["next_key"] = $nextKey;
    }

    public function getNextKey()
    {
        return $this->nextKey;
    }

    public function setUser1($user1)
    {
        $this->user1 = $user1;
        $this->apiParas["user1"] = $user1;
    }

    public function getUser1()
    {
        return $this->user1;
    }

    public function setUser2($user2)
    {
        $this->user2 = $user2;
        $this->apiParas["user2"] = $user2;
    }

    public function getUser2()
    {
        return $this->user2;
    }

    public function getApiMethodName()
    {
        return "taobao.openim.chatlogs.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->begin, "begin");
        RequestCheckUtil::checkNotNull ($this->count, "count");
        RequestCheckUtil::checkNotNull ($this->end, "end");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
