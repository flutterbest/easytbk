<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.item.recommend.get request
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TbkItemRecommendGetRequest
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
     * 商品Id
     **/
    private $numIid;

    /**
     * 链接形式：1：PC，2：无线，默认：１
     **/
    private $platform;

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

    public function setNumIid($numIid)
    {
        $this->numIid = $numIid;
        $this->apiParas["num_iid"] = $numIid;
    }

    public function getNumIid()
    {
        return $this->numIid;
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

    public function getApiMethodName()
    {
        return "taobao.tbk.item.recommend.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->fields, "fields");
        RequestCheckUtil::checkNotNull ($this->numIid, "numIid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
