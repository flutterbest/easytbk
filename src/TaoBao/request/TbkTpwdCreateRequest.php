<?php

namespace NiuGengYun\EasyTBK\TaoBao\request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.tpwd.create request
 *
 * @author auto create
 * @since 1.0, 2018.10.09
 */
class TbkTpwdCreateRequest
{
    /**
     * 扩展字段JSON格式
     **/
    private $ext;

    /**
     * 口令弹框logoURL
     **/
    private $logo;

    /**
     * 口令弹框内容
     **/
    private $text;

    /**
     * 口令跳转目标页
     **/
    private $url;

    /**
     * 生成口令的淘宝用户ID
     **/
    private $userId;

    private $apiParas = array();

    public function setExt($ext)
    {
        $this->ext = $ext;
        $this->apiParas["ext"] = $ext;
    }

    public function getExt()
    {
        return $this->ext;
    }

    public function setLogo($logo)
    {
        $this->logo = $logo;
        $this->apiParas["logo"] = $logo;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function setText($text)
    {
        $this->text = $text;
        $this->apiParas["text"] = $text;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setUrl($url)
    {
        $this->url = $url;
        $this->apiParas["url"] = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
        $this->apiParas["user_id"] = $userId;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function getApiMethodName()
    {
        return "taobao.tbk.tpwd.create";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->text, "text");
        RequestCheckUtil::checkNotNull ($this->url, "url");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
