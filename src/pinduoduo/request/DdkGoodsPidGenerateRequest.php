<?php
namespace NiuGengYun\EasyTBK\PinDuoDuo\Request;

use NiuGengYun\EasyTBK\PinDuoDuo\RequestInterface;


class DdkGoodsPidGenerateRequest implements  RequestInterface
{
    /**
     * 创建多多进宝推广位
     * @var string
     */
    private $type = 'pdd.ddk.goods.pid.generate';

    /**
     * 要生成的推广位数量，默认为10，范围为：1~100
     * @var
     */
    private $number;

    /**
     * 推广位名称，例如["1","2"]
     * @var
     */
    private $pIdNameList;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setPIdNameList($pIdNameList)
    {
        $this->pIdNameList = $pIdNameList;
    }

    public function getPIdNameList()
    {
        return $this->pIdNameList;
    }

    public function getParams()
    {
        $params = [
            'type'           => $this->type,
            'number'         => $this->number,
            'p_id_name_list' => $this->pIdNameList,
        ];
        return array_filter($params);
    }
}