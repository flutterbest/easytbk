<?php

namespace NiuGengYun\EasyTBK\SuNing;

class SelectSuningRequest
{
	protected $apiParams = array();
    /**
     * 页码。取值范围:大于零的整数;默认值为1，即返回第一页数据
     */
    protected $pageNo;

    /**
     * 每页条数。取值范围:大于零的整数;最大值：50。默认值：10
     */
    protected $pageSize;
    
    /**
     * 是否参数校验(默认false,测试及生产建议为true)
     */
    protected $checkParam = false;
    
    public function getCheckParam() {
		return $this->checkParam;
	}

	public function setCheckParam($checkParam) {
		$this->checkParam = $checkParam;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParams["pageNo"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParams["pageSize"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

    public function check($pageNoMin = 1, $pageNoMax = 99999, $pageSizeMin = 10, $pageSizeMax = 50)
    {
    	// 若为空，设置默认值
    	if (RequestCheckUtil::checkEmpty($this->pageNo)){
    		$this->pageNo = $pageNoMin;
    	}
    	
        if (RequestCheckUtil::checkEmpty($this->pageSize)){
    	    $this->pageSize = $pageSizeMin;
    	} 
    	
        RequestCheckUtil::checkPositiveInteger($this->pageNo, 'pageNo');
        RequestCheckUtil::checkMinValue($this->pageNo, $pageNoMin, 'pageNo');
        RequestCheckUtil::checkMaxValue($this->pageNo, $pageNoMax, 'pageNo');

        RequestCheckUtil::checkPositiveInteger($this->pageSize, 'pageSize');
        RequestCheckUtil::checkMinValue($this->pageSize, $pageSizeMin, 'pageSize');
        RequestCheckUtil::checkMaxValue($this->pageSize, $pageSizeMax, 'pageSize');
    }
}
?>