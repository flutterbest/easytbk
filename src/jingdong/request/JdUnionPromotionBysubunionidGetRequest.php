<?php

namespace NiuGengYun\EasyTBK\jingdong\request;

use NiuGengYun\EasyTBK\jingdong\RequestInterface;


/**
 * Class JdUnionPromotionBysubunionidGetRequest
 * @package NiuGengYun\EasyTBK\JingDong\Request
 */
class JdUnionPromotionBysubunionidGetRequest implements RequestInterface
{
    /**
     * 通过subUnionId获取推广链接【申请】
     * @url https://union.jd.com/#/openplatform/api/634
     * @var string
     */
    private $method = 'jd.union.open.promotion.bysubunionid.get';

    /**
     * 子联盟ID（需要联系运营开通权限才能拿到数据）
     * @var
     */
    private $subUnionId;

    /**
     * 推广物料链接，建议链接使用微Q前缀，能较好适配微信手Q页面
     * @var
     */
    private $materialId;

    /**
     * 推广位ID
     * @var
     */
    private $positionId;

    /**
     * 子帐号身份标识，格式为子站长ID_子站长网站ID_子站长推广位ID
     * @var
     */
    private $pid;

    /**
     * 优惠券领取链接，在使用优惠券、商品二合一功能时入参，且materialId须为商品详情页链接
     * @var
     */
    private $couponUrl;

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
    public function setSubUnionId($subUnionId): void
    {
        $this->subUnionId = $subUnionId;
    }

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
    public function setMaterialId($materialId): void
    {
        $this->materialId = $materialId;
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
    public function setPositionId($positionId): void
    {
        $this->positionId = $positionId;
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
    public function getCouponUrl()
    {
        return $this->couponUrl;
    }

    /**
     * @param mixed $couponUrl
     */
    public function setCouponUrl($couponUrl): void
    {
        $this->couponUrl = $couponUrl;
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
            'subUnionId' =>$this->subUnionId,
            'materialId' =>$this->materialId,
            'positionId' =>$this->positionId,
            'pid' =>$this->pid,
            'couponUrl' =>$this->couponUrl,
        ];

        return json_encode([
            'promotionCodeReq' => array_filter ($params, function ($val) {
                return $val != null;
            })
        ]);
    }


}