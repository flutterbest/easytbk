<?php
/**
 * 苏宁开放平台接口 - 查询苏宁会员等级
 *
 * @author suning
 * @date   2016-7-12
 */

namespace NiuGengYun\EasyTBK\SuNing\Request\Netalliance;

use NiuGengYun\EasyTBK\SuNing\SuningRequest;
use NiuGengYun\EasyTBK\SuNing\RequestCheckUtil;

class SnMemberLevelGetRequest extends SuningRequest
{

    /**
     * 第三方系统标识。分配第三方的系统标识
     */
    private $extSystemId;

    /**
     * 混淆会员编号。联合登陆完成后产生的编号
     */
    private $mixCustNum;

    public function getExtSystemId()
    {
        return $this->extSystemId;
    }

    public function setExtSystemId($extSystemId)
    {
        $this->extSystemId = $extSystemId;
        $this->apiParams["extSystemId"] = $extSystemId;
    }

    public function getMixCustNum()
    {
        return $this->mixCustNum;
    }

    public function setMixCustNum($mixCustNum)
    {
        $this->mixCustNum = $mixCustNum;
        $this->apiParams["mixCustNum"] = $mixCustNum;
    }

    public function getApiMethodName()
    {
        return 'suning.netalliance.snmemberlevel.get';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

    public function check()
    {
        //非空校验
        RequestCheckUtil::checkNotNull($this->extSystemId, 'extSystemId');
        RequestCheckUtil::checkNotNull($this->mixCustNum, 'mixCustNum');
    }

    public function getBizName()
    {
        return "getSnMemberLevel";
    }

}

?>