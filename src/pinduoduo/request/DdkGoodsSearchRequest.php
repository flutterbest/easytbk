<?php

namespace NiuGengYun\EasyTBK\pinduoduo\request;

use NiuGengYun\EasyTBK\pinduoduo\RequestInterface;


class DdkGoodsSearchRequest implements RequestInterface
{
    /**
     * 多多进宝商品查询
     * @var string
     */
    private $type = 'pdd.ddk.goods.search';

    /**
     * 商品关键词，与opt_id字段选填一个或全部填写
     * @var
     */
    private $keyword;

    /**
     * 商品标签类目ID，使用pdd.goods.opt.get获取
     * @var
     */
    private $optId;

    /**
     * 默认值1，商品分页数
     * @var
     */
    private $page;

    /**
     * 默认100，每页商品数量
     * @var
     */
    private $pageSize;

    /**
     * 排序方式:0-综合排序;1-按佣金比率升序;2-按佣金比例降序;3-按价格升序;4-按价格降序;5-按销量升序;6-按销量降序;7-优惠券金额排序升序;8-优惠券金额排序降序;9-券后价升序排序;10-券后价降序排序;11-按照加入多多进宝时间升序;12-按照加入多多进宝时间降序;13-按佣金金额升序排序;14-按佣金金额降序排序;15-店铺描述评分升序;16-店铺描述评分降序;17-店铺物流评分升序;18-店铺物流评分降序;19-店铺服务评分升序;20-店铺服务评分降序;27-描述评分击败同类店铺百分比升序，28-描述评分击败同类店铺百分比降序，29-物流评分击败同类店铺百分比升序，30-物流评分击败同类店铺百分比降序，31-服务评分击败同类店铺百分比升序，32-服务评分击败同类店铺百分比降序
     * @var
     */
    private $sortType;

    /**
     * 是否只返回优惠券的商品，false返回所有商品，true只返回有优惠券的商品
     * @var
     */
    private $withCoupon;

    /**
     * 范围列表，可选值：[{"range_id":0,"range_from":1,"range_to":1500},{"range_id":1,"range_from":1,"range_to":1500}]
     * @var
     */
    private $rangeList;

    /**
     * 商品类目ID，使用pdd.goods.cats.get接口获取
     * @var
     */
    private $catId;


    /**
     * 商品ID列表。例如：[123456,123]，当入参带有goods_id_list字段，将不会以opt_id、 cat_id、keyword维度筛选商品
     * @var
     */
    private $goodsIdList;

    /**
     * 店铺类型，1-个人，2-企业，3-旗舰店，4-专卖店，5-专营店，6-普通店（未传为全部）
     * @var
     */
    private $merchantType;

    /**
     * 推广位id
     * @var
     */
    private $pid;

    /**
     * 自定义参数
     * @var
     */
    private $customParameters;

    /**
     * 店铺类型数组
     * @var
     */
    private $merchantTypeList;

    /**
     * 是否为品牌商品
     * @var
     */
    private $isBrandGoods;

    /**
     *商品活动标记数组，例：[4,7]，4-秒杀 7-百亿补贴等
     * @var
     */
    private $activityTags;



    public function setKeyWord($keyword)
    {
        $this->keyword = $keyword;
    }

    public function getKeyWord()
    {
        return $this->keyword;
    }

    public function setOptId($optId)
    {
        $this->optId = $optId;
    }

    public function getOptId()
    {
        return $this->optId;
    }

    public function setPage($page)
    {
        $this->page = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function setSortType($sortType)
    {
        $this->sortType = $sortType;
    }

    public function getSortType()
    {
        return $this->sortType;
    }

    public function setWithCoupon($withCoupon)
    {
        $this->withCoupon = $withCoupon;
    }

    public function getWithCoupon()
    {
        return $this->withCoupon;
    }

    public function setRangeList($rangeList)
    {
        $this->rangeList = $rangeList;
    }

    public function setCatId($catID)
    {
        $this->catId = $catID;
    }

    public function getRangeList()
    {
        return $this->rangeList;
    }

    public function setGoodsIdList($goodsIdList)
    {
        $this->goodsIdList = $goodsIdList;
    }

    public function getGoodsIdList()
    {
        return $this->goodsIdList;
    }


    public function setMerchantType($merchantType)
    {
        $this->merchantType = $merchantType;
    }

    public function getMerchantType()
    {
        return $this->merchantType;
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
    public function setPid($pid): void
    {
        $this->pid = $pid;
    }

    /**
     * @return mixed
     */
    public function getCustomParameters()
    {
        return $this->customParameters;
    }

    /**
     * @param mixed $customParameters
     */
    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    /**
     * @return mixed
     */
    public function getMerchantTypeList()
    {
        return $this->merchantTypeList;
    }

    /**
     * @param mixed $merchantTypeList
     */
    public function setMerchantTypeList($merchantTypeList)
    {
        $this->merchantTypeList = $merchantTypeList;
    }

    /**
     * @return mixed
     */
    public function getIsBrandGoods()
    {
        return $this->isBrandGoods;
    }

    /**
     * @param mixed $isBrandGoods
     */
    public function setIsBrandGoods($isBrandGoods)
    {
        $this->isBrandGoods = $isBrandGoods;
    }

    /**
     * @return mixed
     */
    public function getActivityTags()
    {
        return $this->activityTags;
    }

    /**
     * @param mixed $activityTags
     */
    public function setActivityTags($activityTags)
    {
        $this->activityTags = $activityTags;
    }


    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'keyword' => $this->keyword,
            'opt_id' => $this->optId,
            'page' => $this->page,
            'page_size' => $this->pageSize,
            'sort_type' => $this->sortType,
            'with_coupon' => $this->withCoupon,
            'range_list' => $this->rangeList,
            'cat_id' => $this->catId,
            'goods_id_list' => $this->goodsIdList,
            'merchant_type' => $this->merchantType,
            'pid' => $this->pid,
            'custom_parameters' => $this->customParameters,
            'merchant_type_list' => $this->merchantTypeList,
            'is_brand_goods' => $this->isBrandGoods,
            'activity_tags' => $this->activityTags,
        ];

        return array_filter($params);
    }
}
