<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.wireless.share.tpwd.create request
 *
 * @author auto create
 * @since 1.0, 2017.12.18
 */
class WirelessShareTpwdCreateRequest
{
    /**
     * 口令参数
     **/
    private $tpwdParam;

    private $apiParas = array();

    public function setTpwdParam($tpwdParam)
    {
        $this->tpwdParam = $tpwdParam;
        $this->apiParas["tpwd_param"] = $tpwdParam;
    }

    public function getTpwdParam()
    {
        return $this->tpwdParam;
    }

    public function getApiMethodName()
    {
        return "taobao.wireless.share.tpwd.create";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
