<?php
namespace NiuGengYun\EasyTBK\PinDuoDuo\Request;

use NiuGengYun\EasyTBK\PinDuoDuo\RequestInterface;


class DdkCateListRequest implements  RequestInterface
{
    /**
     * 获得拼多多商品标签列表
     * @var string
     */
    private $type = 'pdd.goods.opt.get';

    /**
     * 值=0时为顶点opt_id,通过树顶级节点获取opt树
     * @var string
     */
    private $parent_opt_id = '0';


    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }


    public function setParentOptId($parent_opt_id)
    {
        $this->parent_opt_id = $parent_opt_id;
    }

    public function getParentOptId()
    {
        return $this->parent_opt_id;
    }

    public function getParams()
    {
        $params = [
            'type'          => $this->type,
            'parent_opt_id' => $this->parent_opt_id
        ];
        return $params;
    }
}