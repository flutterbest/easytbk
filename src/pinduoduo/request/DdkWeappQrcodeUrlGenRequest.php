<?php
/**
 * Created by PhpStorm.
 * User: niugengyun
 * Date: 2018/11/19
 * Time: 下午3:03
 */
namespace NiuGengYun\EasyTBK\PinDuoDuo\Request;

use NiuGengYun\EasyTBK\PinDuoDuo\RequestInterface;


class DdkWeappQrcodeUrlGenRequest implements RequestInterface
{

    /**
     * 多多客生成单品推广小程序二维码url
     * @var string
     */
    private $type = 'pdd.ddk.weapp.qrcode.url.gen';

    /**
     * 推广位ID
     * @var
     */
    private $pid;

    /**
     * 商品ID，仅支持单个查询
     * @var
     */
    private $goodsIdList;

    /**
     * 自定义参数，为链接打上自定义标签。自定义参数最长限制64个字节。
     * @var
     */
    private $customParameters;

    /**
     * 招商多多客ID
     * @var
     */
    private $zsduoId;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    public function getPid()
    {
        return $this->pid;
    }

    public function setGoodsIdList($goodsIdList)
    {
        $this->goodsIdList = $goodsIdList;
    }

    public function getGoodsIdList()
    {
        return $this->goodsIdList;
    }

    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    public function getCustomParameters()
    {
        return $this->customParameters;
    }

    public function setZsduoId($zsduoId)
    {
        $this->zsduoId = $zsduoId;
    }

    public function getZsduoId()
    {
        return $this->zsduoId;
    }

    public function getParams()
    {
        $params = [
            'type'                   => $this->type,
            'p_id'                   => $this->pid,
            'goods_id_list'          => $this->goodsIdList,
            'custom_parameters'      => $this->customParameters,
            'zs_duo_id'              => $this->zsduoId,
        ];
        return array_filter($params);
    }
}