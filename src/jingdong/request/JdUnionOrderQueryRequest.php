<?php

namespace NiuGengYun\EasyTBK\JingDong\Request;

use NiuGengYun\EasyTBK\JingDong\RequestInterface;

/**
 * Class JdUnionOrderQueryRequest
 * @package NiuGengYun\EasyTBK\JingDong\Request
 */
class JdUnionOrderQueryRequest implements RequestInterface
{
    /**
     * 订单查询接口
     * @url https://union.jd.com/#/openplatform/api/650
     * @var string
     */
    private $method = 'jd.union.open.order.query';


    /**
     * 查询时间，建议使用分钟级查询，格式：yyyyMMddHH、yyyyMMddHHmm或yyyyMMddHHmmss，如201811031212 的查询范围从12:12:00--12:12:59
     * @var
     */
    private $time;


    /**
     * 子站长ID（需要联系运营开通PID账户权限才能拿到数据），childUnionId和key不能同时传入
     * @var
     */
    private $childUnionId;

    /**
     * 页码，返回第几页结果
     * @var
     */
    private $pageNo ;

    /**
     * 页码
     * @var
     */
    private $pageSize;


    /**
     * 订单时间查询类型(1：下单时间，2：完成时间，3：更新时间)
     * @var
     */
    private $type;


    /**
     * 其他推客的授权key，查询工具商订单需要填写此项，childUnionid和key不能同时传入
     * @var
     */
    private $key;

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time): void
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getChildUnionId()
    {
        return $this->childUnionId;
    }

    /**
     * @param mixed $childUnionId
     */
    public function setChildUnionId($childUnionId): void
    {
        $this->childUnionId = $childUnionId;
    }

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
    public function setPageNo($pageNo): void
    {
        $this->pageNo = $pageNo;
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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key
     */
    public function setKey($key): void
    {
        $this->key = $key;
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
            'time' => $this->time,
            'pageNo' => $this->pageNo,
            'childUnionId' => $this->childUnionId,
            'pageSize' => $this->pageSize,
            'type' => $this->type,
            'key' => $this->key,
        ];

        return json_encode([
            'orderReq' => array_filter ($params, function ($val) {
                return $val != null;
            })
        ]);
    }


}