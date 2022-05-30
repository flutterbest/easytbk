<?php

namespace NiuGengYun\EasyTBK\TaoBao\request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.openim.relations.get request
 *
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class OpenimRelationsGetRequest
{
    /**
     * 查询起始日期。格式yyyyMMdd。不得早于一个月
     **/
    private $begDate;

    /**
     * 查询结束日期。格式yyyyMMdd。不得早于一个月
     **/
    private $endDate;

    /**
     * 用户信息
     **/
    private $user;

    private $apiParas = array();

    public function setBegDate($begDate)
    {
        $this->begDate = $begDate;
        $this->apiParas["beg_date"] = $begDate;
    }

    public function getBegDate()
    {
        return $this->begDate;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        $this->apiParas["end_date"] = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
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
        return "taobao.openim.relations.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->begDate, "begDate");
        RequestCheckUtil::checkNotNull ($this->endDate, "endDate");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
