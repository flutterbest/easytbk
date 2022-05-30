<?php
/**
 * Created by PhpStorm.
 * User: manbinzheng
 * Date: 2020-03-17
 * Time: 12:12
 */

namespace NiuGengYun\EasyTBK\PinDuoDuo\Request;

use NiuGengYun\EasyTBK\PinDuoDuo\RequestInterface;


class DdkOrderListRangeGetRequest implements RequestInterface
{
    /**
     * 根据支付时间段查询推广订单接口
     * @var string
     */
    private $type = 'pdd.ddk.order.list.range.get';

    private $startPayTime;

    private $endPayTime;

    private $pageSize;

    private $lastOrderId;

    public function setStartPayTime($startPayTime)
    {
        $this->startPayTime = $startPayTime;
    }

    public function getStartPayTime()
    {
        return $this->startPayTime;
    }

    public function setEndPayTime($endPayTime)
    {
        $this->endPayTime = $endPayTime;
    }

    public function getEndPayTime()
    {
        return $this->endPayTime;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function setLastOrderId($lastOrderId)
    {
        $this->lastOrderId = $lastOrderId;
    }

    public function getLastOrderId($lastOrderId)
    {
        return $this->lastOrderId;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'start_time' => $this->startPayTime,
            'end_time' => $this->endPayTime,
            'page_size' => $this->pageSize,
            'last_order_id' => $this->lastOrderId
        ];
        return array_filter($params);
    }
}
