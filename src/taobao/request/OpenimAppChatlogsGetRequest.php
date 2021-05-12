<?php

namespace NiuGengYun\EasyTBK\taobao\request;

use NiuGengYun\EasyTBK\taobao\RequestCheckUtil;
/**
 * TOP API: taobao.openim.app.chatlogs.get request
 *
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class OpenimAppChatlogsGetRequest
{
    /**
     * 查询结束时间。UTC时间。精度到秒
     **/
    private $beg;

    /**
     * 查询最大条数
     **/
    private $count;

    /**
     * 查询结束时间。UTC时间。精度到秒
     **/
    private $end;

    /**
     * 迭代key
     **/
    private $next;

    private $apiParas = array();

    public function setBeg($beg)
    {
        $this->beg = $beg;
        $this->apiParas["beg"] = $beg;
    }

    public function getBeg()
    {
        return $this->beg;
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

    public function getApiMethodName()
    {
        return "taobao.openim.app.chatlogs.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->beg, "beg");
        RequestCheckUtil::checkNotNull ($this->count, "count");
        RequestCheckUtil::checkMaxValue ($this->count, 1000, "count");
        RequestCheckUtil::checkMinValue ($this->count, 1, "count");
        RequestCheckUtil::checkNotNull ($this->end, "end");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
