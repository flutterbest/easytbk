<?php

namespace NiuGengYun\EasyTBK\taobao\request;

use NiuGengYun\EasyTBK\taobao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.item.click.extract
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TbkItemClickExtractRequest
{
    /**
     * mm_xxx_xxx_xxx的第三位
     **/
    private $ClickUrl;
    private $apiParas = array();
    public function setClickUrl($ClickUrl)
    {
        $this->ClickUrl = $ClickUrl;
        $this->apiParas["click_url"] = $ClickUrl;
    }
    public function getClickUrl()
    {
        return $this->ClickUrl;
    }
    public function getApiMethodName()
    {
        return "taobao.tbk.item.click.extract";
    }
    public function getApiParas()
    {
        $re = $this->apiParas;
        return $this->apiParas;
    }
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->ClickUrl, "click_url");
    }
    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->{$key} = $value;
    }
}
