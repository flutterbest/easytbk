<?php
/**
 * 苏宁开放平台接口 - 批量查询联盟商品信息
 *
 * @author suning
 * @date   2015-10-28
 */

namespace NiuGengYun\EasyTBK\suning\request\union;

use NiuGengYun\EasyTBK\suning\SelectSuningRequest;

class UnionInfomationQueryRequest extends SelectSuningRequest
{

    public function getApiMethodName()
    {
        return 'suning.netalliance.unioninfomation.query';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

    public function check()
    {
        //非空校验
    }

    public function getBizName()
    {
        return "queryUnionInfomation";
    }

}

?>