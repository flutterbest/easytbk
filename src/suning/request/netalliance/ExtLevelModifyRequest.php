<?php
/**
 * 苏宁开放平台接口 - 更新外部会员等级接口
 *
 * @author suning
 * @date   2016-7-12
 */

namespace NiuGengYun\EasyTBK\SuNing\Request\Netalliance;

use NiuGengYun\EasyTBK\SuNing\SuningRequest;
use NiuGengYun\EasyTBK\SuNing\RequestCheckUtil;

class ExtLevelModifyRequest extends SuningRequest
{
    /**
     * 第三方系统标识。分配第三方的系统标识
     */
    private $mixCustNum;

    /**
     * 混淆会员编号。联合登陆完成后产生的编号
     */
    private $extSystemId;

    /**
     * 外部会员等级。外部会员等级
     */
    private $extLevel;

    /**
     * 是否付费会员。如果是付费会员，传1，否则传0
     */
    private $isPayMember;

    public function getMixCustNum()
    {
        return $this->mixCustNum;
    }

    public function setMixCustNum($mixCustNum)
    {
        $this->mixCustNum = $mixCustNum;
        $this->apiParams["mixCustNum"] = $mixCustNum;
    }

    public function getExtSystemId()
    {
        return $this->extSystemId;
    }

    public function setExtSystemId($extSystemId)
    {
        $this->extSystemId = $extSystemId;
        $this->apiParams["extSystemId"] = $extSystemId;
    }

    public function getExtLevel()
    {
        return $this->extLevel;
    }

    public function setExtLevel($extLevel)
    {
        $this->extLevel = $extLevel;
        $this->apiParams["extLevel"] = $extLevel;
    }

    public function getIsPayMember()
    {
        return $this->isPayMember;
    }

    public function setIsPayMember($isPayMember)
    {
        $this->isPayMember = $isPayMember;
        $this->apiParams["isPayMember"] = $isPayMember;
    }

    public function getApiMethodName()
    {
        return 'suning.netalliance.extlevel.modify';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

    public function check()
    {
        //非空校验
        RequestCheckUtil::checkNotNull($this->mixCustNum, 'mixCustNum');
        RequestCheckUtil::checkNotNull($this->extSystemId, 'extSystemId');
    }

    public function getBizName()
    {
        return "modifyExtLevel";
    }

}

?>