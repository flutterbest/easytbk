<?php

namespace NiuGengYun\EasyTBK\taobao\request;

use NiuGengYun\EasyTBK\taobao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.coupon.get request
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TbkCouponGetRequest
{
    /**
     * 券ID
     **/
    private $activityId;

    /**
     * 商品ID
     **/
    private $itemId;

    /**
     * 带券ID与商品ID的加密串
     **/
    private $me;

    private $apiParas = array();

    public function setActivityId($activityId)
    {
        $this->activityId = $activityId;
        $this->apiParas["activity_id"] = $activityId;
    }

    public function getActivityId()
    {
        return $this->activityId;
    }

    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        $this->apiParas["item_id"] = $itemId;
    }

    public function getItemId()
    {
        return $this->itemId;
    }

    public function setMe($me)
    {
        $this->me = $me;
        $this->apiParas["me"] = $me;
    }

    public function getMe()
    {
        return $this->me;
    }

    public function getApiMethodName()
    {
        return "taobao.tbk.coupon.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
