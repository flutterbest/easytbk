<?php

namespace NiuGengYun\EasyTBK\JingDong\Request;

use NiuGengYun\EasyTBK\JingDong\RequestInterface;


/**
 * Class JdUnionGoodsPromotiongoodsinfoQueryRequest
 * @package NiuGengYun\EasyTBK\JingDong\Request
 */
class JdUnionGoodsPromotiongoodsinfoQueryRequest implements RequestInterface
{
    /**
     * 获取商品信息接口
     * @url https://union.jd.com/openplatform/api/10422
     * @var string
     */
    private $method = 'jd.union.open.goods.promotiongoodsinfo.query';

    /**
     * 京东skuID串，逗号分割，最多100个（非常重要 请大家关注：如果输入的sk串中某个skuID的商品不在推广中[就是没有佣金]，返回结果中不会包含这个商品的信息
     * @var
     */
    private $skuIds;

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
        return json_encode([
            'skuIds' => $this->skuIds
        ]);
    }


}