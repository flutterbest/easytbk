<?php

namespace NiuGengYun\EasyTBK\JingDong\Request;

use NiuGengYun\EasyTBK\JingDong\RequestInterface;


/**
 * Class JdUnionGoodsQueryRequest
 * @package NiuGengYun\EasyTBK\JingDong\Request
 */
class JdUnionGoodsQueryRequest implements RequestInterface
{
    /**
     * 关键词商品查询接口【申请】
     * @url https://union.jd.com/#/openplatform/api/628
     * @var string
     */
    private $method = 'jd.union.open.goods.query';

    /**
     * 是否是拼购商品，1：拼购商品，0：非拼购商品
     * @var
     */
    private $isPG;

    /**
     * skuid集合(一次最多支持查询100个sku)，数组类型开发时记得加[]
     * @var
     */
    private $skuIds;

    /**
     * asc,desc升降序,默认降序
     */
    private $sort;

    /**
     * 关键词，字数同京东商品名称一致，目前未限制
     * @var
     */
    private $keyword;

    /**
     * 三级类目id
     * @var
     */
    private $cid3;

    /**
     * 二级类目id
     * @var
     */
    private $cid2;

    /**
     * 一级类目id
     * @var
     */
    private $cid1;

    /**
     * 每页数量，单页数最大30，默认20
     * @var
     */
    private $pageSize;

    /**
     * 是否是爆款，1：爆款商品，0：非爆款商品
     * @var
     */
    private $isHot;

    /**
     * 商品价格上限
     * @var
     */
    private $priceto;

    /**
     * 拼购价格区间结束
     * @var
     */
    private $pingouPriceEnd;

    /**
     * 排序字段(price：单价, commissionShare：佣金比例, commission：佣金， inOrderCount30Days：30天引单量， inOrderComm30Days：30天支出佣金)
     * @var
     */
    private $sortName;

    /**
     * 商品价格下限
     * @var
     */
    private $pricefrom;

    /**
     * 拼购价格区间开始
     * @var
     */
    private $pingouPriceStart;

    /**
     * 页码
     * @var
     */
    private $pageIndex;

    /**
     * 佣金比例区间结束
     * @var
     */
    private $commissionShareEnd;

    /**
     * 品牌code
     * @var
     */
    private $brandCode;

    /**
     * 店铺Id
     * @var
     */
    private $shopId;

    /**
     * 商品类型：自营[g]，POP[p]
     * @var
     */
    private $owner;

    /**
     * 是否是优惠券商品，1：有优惠券，0：无优惠券
     * @var
     */
    private $isCoupon;

    /**
     * 佣金比例区间开始
     * @var
     */
    private $commissionShareStart;

    /**
     *1：查询内容商品；其他值过滤掉此入参条件。
     * @var
     */
    private $hasContent;


    /**
     * 1：查询有最优惠券商品；其他值过滤掉此入参条件。
     * @var
     */
    private $hasBestCoupon;


    /**
     * 联盟id_应用iD_推广位id
     * @var
     */
    private $pid;

    /**
     * @return mixed
     */
    public function getisPG()
    {
        return $this->isPG;
    }

    /**
     * @param mixed $isPG
     */
    public function setIsPG($isPG): void
    {
        $this->isPG = $isPG;
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
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @param mixed $keyword
     */
    public function setKeyword($keyword): void
    {
        $this->keyword = $keyword;
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
    public function getisHot()
    {
        return $this->isHot;
    }

    /**
     * @param mixed $isHot
     */
    public function setIsHot($isHot): void
    {
        $this->isHot = $isHot;
    }

    /**
     * @return mixed
     */
    public function getPriceto()
    {
        return $this->priceto;
    }

    /**
     * @param mixed $priceto
     */
    public function setPriceto($priceto): void
    {
        $this->priceto = $priceto;
    }

    /**
     * @return mixed
     */
    public function getPingouPriceEnd()
    {
        return $this->pingouPriceEnd;
    }

    /**
     * @param mixed $pingouPriceEnd
     */
    public function setPingouPriceEnd($pingouPriceEnd): void
    {
        $this->pingouPriceEnd = $pingouPriceEnd;
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
    public function getPricefrom()
    {
        return $this->pricefrom;
    }

    /**
     * @param mixed $pricefrom
     */
    public function setPricefrom($pricefrom): void
    {
        $this->pricefrom = $pricefrom;
    }

    /**
     * @return mixed
     */
    public function getPingouPriceStart()
    {
        return $this->pingouPriceStart;
    }

    /**
     * @param mixed $pingouPriceStart
     */
    public function setPingouPriceStart($pingouPriceStart): void
    {
        $this->pingouPriceStart = $pingouPriceStart;
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
    public function getCommissionShareEnd()
    {
        return $this->commissionShareEnd;
    }

    /**
     * @param mixed $commissionShareEnd
     */
    public function setCommissionShareEnd($commissionShareEnd): void
    {
        $this->commissionShareEnd = $commissionShareEnd;
    }

    /**
     * @return mixed
     */
    public function getBrandCode()
    {
        return $this->brandCode;
    }

    /**
     * @param mixed $brandCode
     */
    public function setBrandCode($brandCode): void
    {
        $this->brandCode = $brandCode;
    }

    /**
     * @return mixed
     */
    public function getShopId()
    {
        return $this->shopId;
    }

    /**
     * @param mixed $shopId
     */
    public function setShopId($shopId): void
    {
        $this->shopId = $shopId;
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
     * @return mixed
     */
    public function getisCoupon()
    {
        return $this->isCoupon;
    }

    /**
     * @param mixed $isCoupon
     */
    public function setIsCoupon($isCoupon): void
    {
        $this->isCoupon = $isCoupon;
    }

    /**
     * @return mixed
     */
    public function getCommissionShareStart()
    {
        return $this->commissionShareStart;
    }

    /**
     * @param mixed $commissionShareStart
     */
    public function setCommissionShareStart($commissionShareStart): void
    {
        $this->commissionShareStart = $commissionShareStart;
    }

    /**
     * @return mixed
     */
    public function getHasContent()
    {
        return $this->hasContent;
    }

    /**
     * @param mixed $hasContent
     */
    public function setHasContent($hasContent)
    {
        $this->hasContent = $hasContent;
    }

    /**
     * @return mixed
     */
    public function getHasBestCoupon()
    {
        return $this->hasBestCoupon;
    }

    /**
     * @param mixed $hasBestCoupon
     */
    public function setHasBestCoupon($hasBestCoupon)
    {
        $this->hasBestCoupon = $hasBestCoupon;
    }

    /**
     * @return mixed
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * @param mixed $pid
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
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
            'isPG' => $this->isPG,
            'skuIds' => $this->skuIds,
            'sort' => $this->sort,
            'keyword' => $this->keyword,
            'cid3' => $this->cid3,
            'cid2' => $this->cid2,
            'cid1' => $this->cid1,
            'pageSize' => $this->pageSize,
            'isHot' => $this->isHot,
            'priceto' => $this->priceto,
            'pingouPriceEnd' => $this->pingouPriceEnd,
            'sortName' => $this->sortName,
            'pricefrom' => $this->pricefrom,
            'pingouPriceStart' => $this->pingouPriceStart,
            'pageIndex' => $this->pageIndex,
            'commissionShareEnd' => $this->commissionShareEnd,
            'brandCode' => $this->brandCode,
            'shopId' => $this->shopId,
            'owner' => $this->owner,
            'isCoupon' => $this->isCoupon,
            'commissionShareStart' => $this->commissionShareStart,
            'hasContent' => $this->hasContent,
            'hasBestCoupon' => $this->hasBestCoupon,
            'pid' => $this->pid,
        ];

        return json_encode([
            'goodsReqDTO' => array_filter ($params, function ($val) {
                return $val != null;
            })
        ]);
    }


}
