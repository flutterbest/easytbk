<?php

namespace NiuGengYun\EasyTBK\JingDong\Request;

use NiuGengYun\EasyTBK\JingDong\RequestInterface;


/**
 * Class 获取商品推广信息接口
 * @package NiuGengYun\EasyTBK\JingDong\Request
 */
class JdUnionPromotionCommonRequest implements RequestInterface
{
    /**
     * 获取商品推广信息接口
     * @url https://union.jd.com/openplatform/api/10422
     * @var string
     */
    private $method = 'jd.union.open.promotion.common.get 网站/APP获取推广链接接口';


    /**
     * 推广物料
     * https://item.jd.com/23484023378.html
     * @var
     */
    private $materialId;

    /**
     * 站点ID
     * @var
     */
    private $siteId;

    /**
     * 推广位id
     * @var
     */
    private $positionId;

    /**
     * 子联盟ID
     * 618_18_c35***e6a
     * 需申请，申请方法请见https://union.jd.com/helpcenter/13246-13247-46301
     * @var
     */
    private $subUnionId;

    /**
     * @var
     */
    private $ext1;


    /**
     * 联盟子站长身份标识
     * @var
     */
    private $pid;

    /**
     * 优惠券领取链接
     * @var
     */
    private $couponUrl;

    /**
     * 礼金批次号
     * @var
     */
    private $giftCouponKey;

    /**
     * @return mixed
     */
    public function getMaterialId()
    {
        return $this->materialId;
    }

    /**
     * @param mixed $materialId
     */
    public function setMaterialId($materialId)
    {
        $this->materialId = $materialId;
    }

    /**
     * @return mixed
     */
    public function getSiteId()
    {
        return $this->siteId;
    }

    /**
     * @param mixed $siteId
     */
    public function setSiteId($siteId)
    {
        $this->siteId = $siteId;
    }

    /**
     * @return mixed
     */
    public function getPositionId()
    {
        return $this->positionId;
    }

    /**
     * @param mixed $positionId
     */
    public function setPositionId($positionId)
    {
        $this->positionId = $positionId;
    }

    /**
     * @return mixed
     */
    public function getSubUnionId()
    {
        return $this->subUnionId;
    }

    /**
     * @param mixed $subUnionId
     */
    public function setSubUnionId($subUnionId)
    {
        $this->subUnionId = $subUnionId;
    }

    /**
     * @return mixed
     */
    public function getExt1()
    {
        return $this->ext1;
    }

    /**
     * @param mixed $ext1
     */
    public function setExt1($ext1)
    {
        $this->ext1 = $ext1;
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
     * @return mixed
     */
    public function getCouponUrl()
    {
        return $this->couponUrl;
    }

    /**
     * @param mixed $couponUrl
     */
    public function setCouponUrl($couponUrl)
    {
        $this->couponUrl = $couponUrl;
    }

    /**
     * @return mixed
     */
    public function getGiftCouponKey()
    {
        return $this->giftCouponKey;
    }

    /**
     * @param mixed $giftCouponKey
     */
    public function setGiftCouponKey($giftCouponKey)
    {
        $this->giftCouponKey = $giftCouponKey;
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