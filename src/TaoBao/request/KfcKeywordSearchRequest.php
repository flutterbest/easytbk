<?php

namespace NiuGengYun\EasyTBK\TaoBao\request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.kfc.keyword.search request
 *
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class KfcKeywordSearchRequest
{
    /**
     * 应用点，分为一级应用点、二级应用点。其中一级应用点通常是指某一个系统或产品，比如淘宝的商品应用（taobao_auction）；二级应用点，是指一级应用点下的具体的分类，比如商品标题(title)、商品描述(content)。不同的二级应用可以设置不同关键词。
     *
     * 这里的apply参数是由一级应用点与二级应用点合起来的字符（一级应用点+"."+二级应用点），如taobao_auction.title。
     *
     *
     * 通常apply参数是不需要传递的。如有特殊需求（比如特殊的过滤需求，需要自己维护一套自己词库），需传递此参数。
     **/
    private $apply;

    /**
     * 需要过滤的文本信息
     **/
    private $content;

    /**
     * 发布信息的淘宝会员名，可以不传
     **/
    private $nick;

    private $apiParas = array();

    public function setApply($apply)
    {
        $this->apply = $apply;
        $this->apiParas["apply"] = $apply;
    }

    public function getApply()
    {
        return $this->apply;
    }

    public function setContent($content)
    {
        $this->content = $content;
        $this->apiParas["content"] = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setNick($nick)
    {
        $this->nick = $nick;
        $this->apiParas["nick"] = $nick;
    }

    public function getNick()
    {
        return $this->nick;
    }

    public function getApiMethodName()
    {
        return "taobao.kfc.keyword.search";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->content, "content");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
