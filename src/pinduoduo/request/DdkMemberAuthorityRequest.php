<?php
/**
 * Created by PhpStorm.
 * User: niugengyun
 * Date: 2018/11/20
 * Time: 下午6:45
 */
namespace NiuGengYun\EasyTBK\PinDuoDuo\Request;

use NiuGengYun\EasyTBK\PinDuoDuo\RequestInterface;


class DdkMemberAuthorityRequest  implements RequestInterface
{
    /**
     * 查询是否绑定备案
     * @var string
     */
    private $type = 'pdd.ddk.member.authority.query';

    /**
     * 推广位ID
     * @var
     */
    private $pid;

    /**
     * 自定义参数，为链接打上自定义标签。自定义参数最长限制64个字节。
     * @var
     */
    private $customParameters;



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



    public function getParams()
    {
        $params = [
            'type'                   => $this->type,
            'p_id_list'              => $this->pid,
            'custom_parameters'      => $this->customParameters,
            ];
        return array_filter($params);
    }
}
