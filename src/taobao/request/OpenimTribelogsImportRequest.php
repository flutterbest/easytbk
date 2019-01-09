<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.openim.tribelogs.import request
 *
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class OpenimTribelogsImportRequest
{
    /**
     * 消息列表
     **/
    private $messages;

    /**
     * 群号。必须为已存在的群，且群主属于本app
     **/
    private $tribeId;

    private $apiParas = array();

    public function setMessages($messages)
    {
        $this->messages = $messages;
        $this->apiParas["messages"] = $messages;
    }

    public function getMessages()
    {
        return $this->messages;
    }

    public function setTribeId($tribeId)
    {
        $this->tribeId = $tribeId;
        $this->apiParas["tribe_id"] = $tribeId;
    }

    public function getTribeId()
    {
        return $this->tribeId;
    }

    public function getApiMethodName()
    {
        return "taobao.openim.tribelogs.import";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->tribeId, "tribeId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
