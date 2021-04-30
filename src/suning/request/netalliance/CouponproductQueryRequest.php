<?php
namespace NiuGengYun\EasyTBK\suning\request\netalliance;

use NiuGengYun\EasyTBK\suning\SelectSuningRequest;
use NiuGengYun\EasyTBK\suning\RequestCheckUtil;

/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2017-10-11
 */
class CouponproductQueryRequest extends SelectSuningRequest
{

    /**
     * @var
     */
    protected $pageNo;
    /**
     * @var
     */
    protected $pageSize;

    /**
     * @var
     */
    private $positionId;

    /**
     * @return mixed
     */
    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param mixed $pageNo
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        $this->apiParams["pageNo"] = $pageNo;
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
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        $this->apiParams["pageSize"] = $pageSize;

    }


    public function getPositionId()
    {
        return $this->positionId;
    }

    public function setPositionId($positionId)
    {
        $this->positionId = $positionId;
        $this->apiParams["positionId"] = $positionId;
    }

    public function getApiMethodName()
    {
        return 'suning.netalliance.couponproduct.query';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

//    public function check()
//    {
//        //非空校验
//        RequestCheckUtil::checkNotNull($this->pageNo, 'pageNo');
//        RequestCheckUtil::checkNotNull($this->positionId, 'positionId');
//    }

    public function getBizName()
    {
        return "queryCouponproduct";
    }

}

?>
