<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.topats.task.delete request
 *
 * @author auto create
 * @since 1.0, 2014.03.27
 */
class TopatsTaskDeleteRequest
{
    /**
     * 需要取消的任务ID
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
        return "taobao.topats.task.delete";
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
