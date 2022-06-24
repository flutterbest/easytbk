<?php

namespace NiuGengYun\EasyTBK\JingDong\Request;

use NiuGengYun\EasyTBK\JingDong\RequestInterface;


/**
 * Class JdUnionPromotionYhdGetRequest
 * @package NiuGengYun\EasyTBK\JingDong\Request
 */
class JdUnionPromotionYhdGetRequest implements RequestInterface
{
    /**
     * 获取一号店推广链接【申请】
     * @url https://union.jd.com/#/openplatform/api/692
     * @var string
     */
    private $method = 'jd.union.open.promotion.yhd.get';

    /**
     * 子联盟ID
     * @var
     */
    private $subUnionId;

    /**
     * 请勿再使用，后续会移除此参数，请求成功一律返回https协议链接
     * @var
     */
    private $protocol;

    /**
     * 扩展字段
     * @var
     */
    private $ext1;

    /**
     * 站点id
     * @var
     */
    private $siteId;

    /**
     * 推广物料
     * @var
     */
    private $materialId;

    /**
     * 推广位id
     * @var
     */
    private $positionId;

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
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * @param mixed $protocol
     */
    public function setProtocol($protocol): void
    {
        $this->protocol = $protocol;
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
    public function setExt1($ext1): void
    {
        $this->ext1 = $ext1;
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
    public function setSiteId($siteId): void
    {
        $this->siteId = $siteId;
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
            'subUnionId' => $this->subUnionId,
            'protocol' => $this->protocol,
            'ext1' => $this->ext1,
            'siteId' => $this->siteId,
            'materialId' => $this->materialId,
            'positionId' => $this->positionId,
        ];

        return json_encode([
            'promotionCodeReq' => array_filter ($params, function ($val) {
                return $val != null;
            })
        ]);
    }


}