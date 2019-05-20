<?php

namespace NiuGengYun\EasyTBK\JingDong\Request;

use NiuGengYun\EasyTBK\JingDong\RequestInterface;


/**
 * Class JdUnionGoodsJingfenQueryRequest
 * @package NiuGengYun\EasyTBK\JingDong\Request
 */
class JdUnionGoodsJingfenQueryRequest implements RequestInterface
{
    /**
     * 京粉精选商品查询接口
     * @url https://union.jd.com/openplatform/api/739
     * @var string
     */
    private $method = 'jd.union.open.goods.jingfen.query';

    /**
     * asc,desc升降序,默认降序
     * @var
     */
    private $sort;

    /**
     * 每页数量，默认20，上限50
     * @var
     */
    private $pageSize;

    /**
     * 频道id：1-好券商品,2-京粉APP-jingdong.大咖推荐,3-小程序-jingdong.好券商品,4-京粉APP-jingdong.主题街1-jingdong.服装运动,5-京粉APP-jingdong.主题街2-jingdong.精选家电,6-京粉APP-jingdong.主题街3-jingdong.超市,7-京粉APP-jingdong.主题街4-jingdong.居家生活,10-9.9专区,11-品牌好货-jingdong.潮流范儿,12-品牌好货-jingdong.精致生活,13-品牌好货-jingdong.数码先锋,14-品牌好货-jingdong.品质家电,15-京仓配送,16-公众号-jingdong.好券商品,17-公众号-jingdong.9.9,18-公众号-jingdong.京仓京配
     * @var
     */
    private $eliteId;


    /**
     * 排序字段(price：单价, commissionShare：佣金比例, commission：佣金， inOrderCount30DaysSku：sku维度30天引单量，comments：评论数，goodComments：好评数)
     * @var
     */
    private $sortName;

    /**
     * 页码
     * @var
     */
    private $pageIndex;

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
    public function getEliteId()
    {
        return $this->eliteId;
    }

    /**
     * @param mixed $eliteId
     */
    public function setEliteId($eliteId): void
    {
        $this->eliteId = $eliteId;
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
    public function getParamJson()
    {
        $params = [
            'sort' => $this->sort,
            'pageSize' => $this->pageSize,
            'eliteId' => $this->eliteId,
            'sortName' => $this->sortName,
            'pageIndex' => $this->pageIndex
        ];

        return json_encode ([
            'goodsReq' => array_filter ($params, function ($val) {
                return $val != null;
            })
        ]);
    }


}
