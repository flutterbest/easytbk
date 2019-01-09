<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.topats.result.get request
 *
 * @author auto create
 * @since 1.0, 2016.10.12
 */
class TopatsResultGetRequest
{
    /**
     * 任务ID，创建任务时返回的task_id
     **/
    private $taskId;

    private $apiParas = array();

    public function setTaskId($taskId)
    {
        $this->taskId = $taskId;
        $this->apiParas["task_id"] = $taskId;
    }

    public function getTaskId()
    {
        return $this->taskId;
    }

    public function getApiMethodName()
    {
        return "taobao.topats.result.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->taskId, "taskId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
