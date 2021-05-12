<?php
/**
 * Created by PhpStorm.
 * User: niugengyun
 * Date: 2018/11/20
 * Time: 下午6:45
 */

namespace NiuGengYun\EasyTBK\pinduoduo\request;

use NiuGengYun\EasyTBK\pinduoduo\RequestInterface;


class DdkPhraseGenerateRequest implements RequestInterface
{
    /**
     * 生成多多口令接口
     * @var string
     */
    private $type = 'pdd.ddk.phrase.generate';

    /**
     * 推广位ID
     * @var
     */
    private $pid;

    /**
     * 商品ID，仅支持单个查询。例如：[123456]
     * @var
     */
    private $goodsIdList;

    /**
     * 是否多人团，true-是，false-否
     * @var
     */
    private $multiGroup;

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

    /**
     * 1-大图弹框 2-对话弹框
     * @var
     */
    private $style;




    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    public function getPid()
    {
        return $this->pid;
    }

    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    public function getCustomParameters()
    {
        return $this->customParameters;
    }

    /**
     * @return mixed
     */
    public function getGoodsIdList()
    {
        return $this->goodsIdList;
    }

    /**
     * @param mixed $goodsIdList
     */
    public function setGoodsIdList($goodsIdList)
    {
        $this->goodsIdList = $goodsIdList;
    }

    /**
     * @return mixed
     */
    public function getMultiGroup()
    {
        return $this->multiGroup;
    }

    /**
     * @param mixed $multiGroup
     */
    public function setMultiGroup($multiGroup)
    {
        $this->multiGroup = $multiGroup;
    }

    /**
     * @return mixed
     */
    public function getZsduoId()
    {
        return $this->zsduoId;
    }

    /**
     * @param mixed $zsduoId
     */
    public function setZsduoId($zsduoId)
    {
        $this->zsduoId = $zsduoId;
    }

    /**
     * @return mixed
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * @param mixed $style
     */
    public function setStyle($style)
    {
        $this->style = $style;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'p_id' => $this->pid,
            'goods_id_list' => $this->goodsIdList,
            'multi_group' => $this->multiGroup,
            'custom_parameters' => $this->customParameters,
            'zs_duo_id' => $this->zsduoId,
            'style' => $this->style,
        ];
        return array_filter($params);
    }
}
