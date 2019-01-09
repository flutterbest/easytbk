<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.openim.tribelogs.get request
 *
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class OpenimTribelogsGetRequest
{
    /**
     * 查询起始时间，UTC秒数。必须在一个月内。
     **/
    private $begin;

    /**
     * 查询条数
     **/
    private $count;

    /**
     * 查询结束时间，UTC秒数。必须大于起始时间并小于当前时间
     **/
    private $end;

    /**
     * 迭代key
     **/
    private $next;

    /**
     * 群号
     **/
    private $tribeId;

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

    public function setNext($next)
    {
        $this->next = $next;
        $this->apiParas["next"] = $next;
    }

    public function getNext()
    {
        return $this->next;
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

    public function getApiMethodName()
    {
        return "taobao.openim.tribelogs.get";
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
        RequestCheckUtil::checkNotNull ($this->tribeId, "tribeId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
