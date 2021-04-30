<?php
namespace NiuGengYun\EasyTBK\pinduoduo\request;

use NiuGengYun\EasyTBK\pinduoduo\RequestInterface;



class DdkOrderListIncrementGetRequest implements RequestInterface
{
    /**
     * 按照时间段获取授权多多客下面所有多多客的推广订单信息
     * @var string
     */
    private $type = 'pdd.ddk.order.list.increment.get';

    private $startUpdateTime;

    private $endUpdateTime;

    private $pageSize;

    private $page;



    public function setStartUpdateTime($startUpdateTime)
    {
        $this->startUpdateTime = $startUpdateTime;
    }

    public function getStartUpdateTime()
    {
        return $this->startUpdateTime;
    }

    public function setEndUpdateTime($endUpdateTime)
    {
        $this->endUpdateTime = $endUpdateTime;
    }

    public function getEndUpdateTime()
    {
        return $this->endUpdateTime;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function setPage($page)
    {
        $this->page = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    public function getParams()
    {
        $params = [
            'type'              => $this->type,
            'start_update_time' => $this->startUpdateTime,
            'end_update_time'   => $this->endUpdateTime,
            'page_size'         => $this->pageSize,
            'page'              => $this->page
        ];
        return array_filter($params);
    }
}
