<?php
/**
 * 苏宁开放平台接口 - 单笔查询联盟商品信息
 *
 * @author suning
 * @date   2016-1-27
 */

namespace NiuGengYun\EasyTBK\SuNing\Request\Union;

use NiuGengYun\EasyTBK\SuNing\SuningRequest;
use NiuGengYun\EasyTBK\SuNing\RequestCheckUtil;

class UnionInfomationGetRequest extends SuningRequest
{
    /**
     * 商品ID。
     */
    private $goodsCode;

    public function getGoodsCode()
    {
        return $this->goodsCode;
    }

    public function setGoodsCode($goodsCode)
    {
        $this->goodsCode = $goodsCode;
        $this->apiParams["goodsCode"] = $goodsCode;
    }

    public function getApiMethodName()
    {
        return 'suning.netalliance.unioninfomation.get';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

    public function check()
    {
        //非空校验
        RequestCheckUtil::checkNotNull($this->goodsCode, 'goodsCode');
    }

    public function getBizName()
    {
        return "getUnionInfomation";
    }

}

?>