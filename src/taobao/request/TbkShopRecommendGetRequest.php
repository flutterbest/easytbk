<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.shop.recommend.get request
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TbkShopRecommendGetRequest
{
    /**
     * 返回数量，默认20，最大值40
     **/
    private $count;

    /**
     * 需返回的字段列表
     **/
    private $fields;

    /**
     * 链接形式：1：PC，2：无线，默认：１
     **/
    private $platform;

    /**
     * 卖家Id
     **/
    private $userId;

    private $apiParas = array();

    public function setCount($count)
    {
        $this->count = $count;
        $this->apiParas["count"] = $count;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setFields($fields)
    {
        $this->fields = $fields;
        $this->apiParas["fields"] = $fields;
    }

    public function getFields()
    {
        return $this->fields;
    }

    public function setPlatform($platform)
    {
        $this->platform = $platform;
        $this->apiParas["platform"] = $platform;
    }

    public function getPlatform()
    {
        return $this->platform;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
        $this->apiParas["user_id"] = $userId;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function getApiMethodName()
    {
        return "taobao.tbk.shop.recommend.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->fields, "fields");
        RequestCheckUtil::checkNotNull ($this->userId, "userId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
