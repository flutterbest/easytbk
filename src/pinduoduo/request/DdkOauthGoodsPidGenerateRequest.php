<?php
namespace NiuGengYun\EasyTBK\pinduoduo\request;

use NiuGengYun\EasyTBK\pinduoduo\RequestInterface;


class DdkOauthGoodsPidGenerateRequest implements RequestInterface
{
    private $type = 'pdd.ddk.oauth.goods.pid.generate';

    private $number;

    private $name;


    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }


    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }


    public function getParams()
    {
        $params = [
            'type'      => $this->type,
            'p_id_name_list'      => $this->name,
            'number' => $this->number,
        ];
        return array_filter($params);
    }
}
