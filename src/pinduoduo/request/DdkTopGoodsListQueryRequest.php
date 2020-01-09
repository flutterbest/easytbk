<?php

namespace NiuGengYun\EasyTBK\PinDuoDuo\Request;

use NiuGengYun\EasyTBK\PinDuoDuo\RequestInterface;


class DdkTopGoodsListQueryRequest implements RequestInterface
{
    /**
     * 获取热销商品列表
     * @var string
     */
    private $type = 'pdd.ddk.top.goods.list.query';

    /**
     * 推广位ID
     * @var
     */
    private $pid;

    /**
     * 默认值0，商品分页数
     * @var
     */
    private $offset;

    /**
     * 默认400，每页商品数量
     * @var
     */
    private $limit;

    /**
     * 排序方式:1-实时热销榜；2-实时收益榜
     * @var
     */
    private $sortType;




    public function setSortType($sortType)
    {
        $this->sortType = $sortType;
    }

    public function getSortType()
    {
        return $this->sortType;
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
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param mixed $offset
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
    }

    /**
     * @return mixed
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param mixed $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'p_id' => $this->pid,
            'offset' => $this->offset,
            'sort_type' => $this->sortType,
            'limit' => $this->limit,
        ];

        return array_filter($params);
    }
}
