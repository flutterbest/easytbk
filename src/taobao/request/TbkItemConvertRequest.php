<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.item.get request
 *
 * @author auto create
 * @since 1.0, 2016.07.25
 */
class TbkItemConvertRequest
{
    private $Fields;

    public function setFields($Fields)
    {
        $this->Fields = $Fields;
        $this->apiParas["fields"] = $Fields;
    }

    public function getFields()
    {
        return $this->Fields;
    }


    private $NumIids;

    public function setNumIids($NumIids)
    {
        $this->NumIids = $NumIids;
        $this->apiParas["num_iids"] = $NumIids;
    }

    public function getNumIids()
    {
        return $this->NumIids;
    }

    private $AdzoneId;

    public function setAdzoneId($AdzoneId)
    {
        $this->AdzoneId = $AdzoneId;
        $this->apiParas["adzone_id"] = $AdzoneId;
    }

    public function getAdzoneId()
    {
        return $this->AdzoneId;
    }

    private $Platform;

    public function setPlatform($Platform)
    {
        $this->Platform = $Platform;
        $this->apiParas["platform"] = $Platform;
    }

    public function getPlatform()
    {
        return $this->Platform;
    }

    private $Unid;

    public function setUnid($Unid)
    {
        $this->Unid = $Unid;
        $this->apiParas["unid"] = $Unid;
    }

    public function getUnid()
    {
        return $this->Unid;
    }

    private $Dx;

    public function setDx($Dx)
    {
        $this->Dx = $Dx;
        $this->apiParas["dx"] = $Dx;
    }

    public function getDx()
    {
        return $this->Dx;
    }

    public function getApiMethodName()
    {
        return "taobao.tbk.item.convert";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }


    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->Fields, "fields");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
