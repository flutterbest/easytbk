<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.openim.snfilterword.setfilter request
 *
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class OpenimSnfilterwordSetfilterRequest
{
    /**
     * 上传者身份信息，区分不同上传者;只是记录，没有身份校验功能
     **/
    private $creator;

    /**
     * 过滤原因描述
     **/
    private $desc;

    /**
     * 需要过滤的关键词
     **/
    private $filterword;

    private $apiParas = array();

    public function setCreator($creator)
    {
        $this->creator = $creator;
        $this->apiParas["creator"] = $creator;
    }

    public function getCreator()
    {
        return $this->creator;
    }

    public function setDesc($desc)
    {
        $this->desc = $desc;
        $this->apiParas["desc"] = $desc;
    }

    public function getDesc()
    {
        return $this->desc;
    }

    public function setFilterword($filterword)
    {
        $this->filterword = $filterword;
        $this->apiParas["filterword"] = $filterword;
    }

    public function getFilterword()
    {
        return $this->filterword;
    }

    public function getApiMethodName()
    {
        return "taobao.openim.snfilterword.setfilter";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->creator, "creator");
        RequestCheckUtil::checkNotNull ($this->filterword, "filterword");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
