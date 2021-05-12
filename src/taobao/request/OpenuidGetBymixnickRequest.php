<?php

namespace NiuGengYun\EasyTBK\taobao\request;

use NiuGengYun\EasyTBK\taobao\RequestCheckUtil;
/**
 * TOP API: taobao.openuid.get.bymixnick request
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OpenuidGetBymixnickRequest
{
    /**
     * 无线类应用获取到的混淆的nick
     **/
    private $mixNick;

    private $apiParas = array();

    public function setMixNick($mixNick)
    {
        $this->mixNick = $mixNick;
        $this->apiParas["mix_nick"] = $mixNick;
    }

    public function getMixNick()
    {
        return $this->mixNick;
    }

    public function getApiMethodName()
    {
        return "taobao.openuid.get.bymixnick";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->mixNick, "mixNick");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
