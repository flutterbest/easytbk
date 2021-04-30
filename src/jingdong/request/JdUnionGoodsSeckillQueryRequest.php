<?php

namespace NiuGengYun\EasyTBK\jingdong\request;

use NiuGengYun\EasyTBK\jingdong\RequestInterface;


/**
 * Class JdUnionGoodsSeckillQueryRequest
 * @package NiuGengYun\EasyTBK\JingDong\Request
 */
class JdUnionGoodsSeckillQueryRequest implements RequestInterface
{
    /**
     * 秒杀商品查询接口【申请】
     * @url https://union.jd.com/#/openplatform/api/667
     * @var string
     */
    private $method = 'jd.union.open.goods.seckill.query';

    /**
     * 秒杀价区间开始（单位：元）
     * @var
     */
    private $secKillPriceFrom;

    /**
     * sku id集合，长度最大30
     * @var
     */
    private $skuIds;

    /**
     * desc=降序，asc=升序，可为空（默认降序）
     * @var
     */
    private $sort;

    /**
     * 是否返回未开始秒杀商品。1=返回，0=不返回
     * @var
     */
    private $isBeginSecKill;

    /**
     * 每页数量最大30，默认30
     * @var
     */
    private $pageSize;

    /**
     * 三级类目
     * @var
     */
    private $cid3;

    /**
     * 二级类目
     * @var
     */
    private $cid2;

    /**
     * 一级类目
     * @var
     */
    private $cid1;

    /**
     * 秒杀价区间结束
     * @var
     */
    private $secKillPriceTo;

    /**
     * 排序字段，可为空。 （默认搜索综合排序。允许的排序字段：seckillPrice、commissionShare、inOrderCount30Days、inOrderComm30Days）
     * @var
     */
    private $sortName;

    /**
     * 页码，默认1
     * @var
     */
    private $pageIndex;

    /**
     * 佣金比例区间开始
     * @var
     */
    private $commissionShareFrom;

    /**
     * 佣金比例区间结束
     * @var
     */
    private $commissionShareTo;

    /**
     * g=自营，p=pop
     * @var
     */
    private $owner;

    /**
     * @return mixed
     */
    public function getSecKillPriceFrom()
    {
        return $this->secKillPriceFrom;
    }

    /**
     * @param mixed $secKillPriceFrom
     */
    public function setSecKillPriceFrom($secKillPriceFrom): void
    {
        $this->secKillPriceFrom = $secKillPriceFrom;
    }

    /**
     * @return mixed
     */
    public function getSkuIds()
    {
        return $this->skuIds;
    }

    /**
     * @param mixed $skuIds
     */
    public function setSkuIds($skuIds): void
    {
        $this->skuIds = $skuIds;
    }

    /**
     * @return mixed
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param mixed $sort
     */
    public function setSort($sort): void
    {
        $this->sort = $sort;
    }

    /**
     * @return mixed
     */
    public function getisBeginSecKill()
    {
        return $this->isBeginSecKill;
    }

    /**
     * @param mixed $isBeginSecKill
     */
    public function setIsBeginSecKill($isBeginSecKill): void
    {
        $this->isBeginSecKill = $isBeginSecKill;
    }

    /**
     * @return mixed
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param mixed $pageSize
     */
    public function setPageSize($pageSize): void
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return mixed
     */
    public function getCid3()
    {
        return $this->cid3;
    }

    /**
     * @param mixed $cid3
     */
    public function setCid3($cid3): void
    {
        $this->cid3 = $cid3;
    }

    /**
     * @return mixed
     */
    public function getCid2()
    {
        return $this->cid2;
    }

    /**
     * @param mixed $cid2
     */
    public function setCid2($cid2): void
    {
        $this->cid2 = $cid2;
    }

    /**
     * @return mixed
     */
    public function getCid1()
    {
        return $this->cid1;
    }

    /**
     * @param mixed $cid1
     */
    public function setCid1($cid1): void
    {
        $this->cid1 = $cid1;
    }

    /**
     * @return mixed
     */
    public function getSecKillPriceTo()
    {
        return $this->secKillPriceTo;
    }

    /**
     * @param mixed $secKillPriceTo
     */
    public function setSecKillPriceTo($secKillPriceTo): void
    {
        $this->secKillPriceTo = $secKillPriceTo;
    }

    /**
     * @return mixed
     */
    public function getSortName()
    {
        return $this->sortName;
    }

    /**
     * @param mixed $sortName
     */
    public function setSortName($sortName): void
    {
        $this->sortName = $sortName;
    }

    /**
     * @return mixed
     */
    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param mixed $pageIndex
     */
    public function setPageIndex($pageIndex): void
    {
        $this->pageIndex = $pageIndex;
    }

    /**
     * @return mixed
     */
    public function getCommissionShareFrom()
    {
        return $this->commissionShareFrom;
    }

    /**
     * @param mixed $commissionShareFrom
     */
    public function setCommissionShareFrom($commissionShareFrom): void
    {
        $this->commissionShareFrom = $commissionShareFrom;
    }

    /**
     * @return mixed
     */
    public function getCommissionShareTo()
    {
        return $this->commissionShareTo;
    }

    /**
     * @param mixed $commissionShareTo
     */
    public function setCommissionShareTo($commissionShareTo): void
    {
        $this->commissionShareTo = $commissionShareTo;
    }

    /**
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param mixed $owner
     */
    public function setOwner($owner): void
    {
        $this->owner = $owner;
    }



    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return mixed
     */
    public function getParamJson()
    {
        $params = [
            'secKillPriceFrom' => $this->secKillPriceFrom,
            'skuIds' => $this->skuIds,
            'sort' => $this->sort,
            'isBeginSecKill' => $this->isBeginSecKill,
            'pageSize' => $this->pageSize,
            'cid3' => $this->cid3,
            'cid2' => $this->cid2,
            'cid1' => $this->cid1,
            'secKillPriceTo' => $this->secKillPriceTo,
            'sortName' => $this->sortName,
            'pageIndex' => $this->pageIndex,
            'commissionShareFrom' => $this->commissionShareFrom,
            'commissionShareTo' => $this->commissionShareTo,
            'owner' => $this->owner,
        ];

        return json_encode([
            'goodsReq' => array_filter ($params, function ($val) {
                return $val != null;
            })
        ]);
    }


}