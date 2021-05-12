<?php
namespace NiuGengYun\EasyTBK\pinduoduo\request;

use NiuGengYun\EasyTBK\pinduoduo\RequestInterface;


class DdkGoodsZsUnitUrlGenRequest implements  RequestInterface
{

    /**
     * 生成普通商品推广链接
     * @var string
     */
    private $type = 'pdd.ddk.goods.zs.unit.url.gen';

    /**
     * 推广位ID
     * @var
     */
    private $pid;

    /**
     * 商品ID，仅支持单个查询
     * @var
     */
    private $source_url;




    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    public function getPid()
    {
        return $this->pid;
    }

    public function setSourceUrl($source_url)
    {
        $this->source_url = $source_url;
    }

    public function getSourceUrl()
    {
        return $this->goodsIdList;
    }

    public function getParams()
    {
        $params = [
            'type'                   => $this->type,
            'pid'                   => $this->pid,
            'source_url'        => $this->source_url,
        ];
        return array_filter($params);
    }
}
