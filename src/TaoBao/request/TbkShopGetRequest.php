<?php

namespace NiuGengYun\EasyTBK\TaoBao\request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.shop.get request
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TbkShopGetRequest
{
    /**
     * 累计推广商品上限
     **/
    private $endAuctionCount;

    /**
     * 淘客佣金比率上限，1~10000
     **/
    private $endCommissionRate;

    /**
     * 信用等级上限，1~20
     **/
    private $endCredit;

    /**
     * 店铺商品总数上限
     **/
    private $endTotalAction;

    /**
     * 需返回的字段列表
     **/
    private $fields;

    /**
     * 是否商城的店铺，设置为true表示该是属于淘宝商城的店铺，设置为false或不设置表示不判断这个属性
     **/
    private $isTmall;

    /**
     * 第几页，默认1，1~100
     **/
    private $pageNo;

    /**
     * 页大小，默认20，1~100
     **/
    private $pageSize;

    /**
     * 链接形式：1：PC，2：无线，默认：１
     **/
    private $platform;

    /**
     * 查询词
     **/
    private $q;

    /**
     * 排序_des（降序），排序_asc（升序），佣金比率（commission_rate）， 商品数量（auction_count），销售总数量（total_auction）
     **/
    private $sort;

    /**
     * 累计推广商品下限
     **/
    private $startAuctionCount;

    /**
     * 淘客佣金比率下限，1~10000
     **/
    private $startCommissionRate;

    /**
     * 信用等级下限，1~20
     **/
    private $startCredit;

    /**
     * 店铺商品总数下限
     **/
    private $startTotalAction;

    private $apiParas = array();

    public function setEndAuctionCount($endAuctionCount)
    {
        $this->endAuctionCount = $endAuctionCount;
        $this->apiParas["end_auction_count"] = $endAuctionCount;
    }

    public function getEndAuctionCount()
    {
        return $this->endAuctionCount;
    }

    public function setEndCommissionRate($endCommissionRate)
    {
        $this->endCommissionRate = $endCommissionRate;
        $this->apiParas["end_commission_rate"] = $endCommissionRate;
    }

    public function getEndCommissionRate()
    {
        return $this->endCommissionRate;
    }

    public function setEndCredit($endCredit)
    {
        $this->endCredit = $endCredit;
        $this->apiParas["end_credit"] = $endCredit;
    }

    public function getEndCredit()
    {
        return $this->endCredit;
    }

    public function setEndTotalAction($endTotalAction)
    {
        $this->endTotalAction = $endTotalAction;
        $this->apiParas["end_total_action"] = $endTotalAction;
    }

    public function getEndTotalAction()
    {
        return $this->endTotalAction;
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

    public function setIsTmall($isTmall)
    {
        $this->isTmall = $isTmall;
        $this->apiParas["is_tmall"] = $isTmall;
    }

    public function getIsTmall()
    {
        return $this->isTmall;
    }

    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        $this->apiParas["page_no"] = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        $this->apiParas["page_size"] = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
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

    public function setQ($q)
    {
        $this->q = $q;
        $this->apiParas["q"] = $q;
    }

    public function getQ()
    {
        return $this->q;
    }

    public function setSort($sort)
    {
        $this->sort = $sort;
        $this->apiParas["sort"] = $sort;
    }

    public function getSort()
    {
        return $this->sort;
    }

    public function setStartAuctionCount($startAuctionCount)
    {
        $this->startAuctionCount = $startAuctionCount;
        $this->apiParas["start_auction_count"] = $startAuctionCount;
    }

    public function getStartAuctionCount()
    {
        return $this->startAuctionCount;
    }

    public function setStartCommissionRate($startCommissionRate)
    {
        $this->startCommissionRate = $startCommissionRate;
        $this->apiParas["start_commission_rate"] = $startCommissionRate;
    }

    public function getStartCommissionRate()
    {
        return $this->startCommissionRate;
    }

    public function setStartCredit($startCredit)
    {
        $this->startCredit = $startCredit;
        $this->apiParas["start_credit"] = $startCredit;
    }

    public function getStartCredit()
    {
        return $this->startCredit;
    }

    public function setStartTotalAction($startTotalAction)
    {
        $this->startTotalAction = $startTotalAction;
        $this->apiParas["start_total_action"] = $startTotalAction;
    }

    public function getStartTotalAction()
    {
        return $this->startTotalAction;
    }

    public function getApiMethodName()
    {
        return "taobao.tbk.shop.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->fields, "fields");
        RequestCheckUtil::checkNotNull ($this->q, "q");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
