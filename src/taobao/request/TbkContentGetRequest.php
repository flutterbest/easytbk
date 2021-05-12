<?php

namespace NiuGengYun\EasyTBK\taobao\request;

use NiuGengYun\EasyTBK\taobao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.content.get request
 *
 * @author auto create
 * @since 1.0, 2018.04.03
 */
class TbkContentGetRequest
{
    /**
     * 推广位
     **/
    private $adzoneId;

    /**
     * 表示取这个时间点以前的数据，以毫秒为单位（出参中的last_timestamp是指本次返回的内容中最早一条的数据，下一次作为before_timestamp传过来，即可实现翻页）
     **/
    private $beforeTimestamp;

    /**
     * 类目
     **/
    private $cid;

    /**
     * 默认可不传,内容库类型:1 优质内容
     **/
    private $contentSet;

    /**
     * 表示期望获取条数
     **/
    private $count;

    /**
     * 图片高度
     **/
    private $imageHeight;

    /**
     * 图片宽度
     **/
    private $imageWidth;

    /**
     * 内容类型，1:图文、2: 图集、3: 短视频
     **/
    private $type;

    private $apiParas = array();

    public function setAdzoneId($adzoneId)
    {
        $this->adzoneId = $adzoneId;
        $this->apiParas["adzone_id"] = $adzoneId;
    }

    public function getAdzoneId()
    {
        return $this->adzoneId;
    }

    public function setBeforeTimestamp($beforeTimestamp)
    {
        $this->beforeTimestamp = $beforeTimestamp;
        $this->apiParas["before_timestamp"] = $beforeTimestamp;
    }

    public function getBeforeTimestamp()
    {
        return $this->beforeTimestamp;
    }

    public function setCid($cid)
    {
        $this->cid = $cid;
        $this->apiParas["cid"] = $cid;
    }

    public function getCid()
    {
        return $this->cid;
    }

    public function setContentSet($contentSet)
    {
        $this->contentSet = $contentSet;
        $this->apiParas["content_set"] = $contentSet;
    }

    public function getContentSet()
    {
        return $this->contentSet;
    }

    public function setCount($count)
    {
        $this->count = $count;
        $this->apiParas["count"] = $count;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setImageHeight($imageHeight)
    {
        $this->imageHeight = $imageHeight;
        $this->apiParas["image_height"] = $imageHeight;
    }

    public function getImageHeight()
    {
        return $this->imageHeight;
    }

    public function setImageWidth($imageWidth)
    {
        $this->imageWidth = $imageWidth;
        $this->apiParas["image_width"] = $imageWidth;
    }

    public function getImageWidth()
    {
        return $this->imageWidth;
    }

    public function setType($type)
    {
        $this->type = $type;
        $this->apiParas["type"] = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getApiMethodName()
    {
        return "taobao.tbk.content.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull ($this->adzoneId, "adzoneId");
        RequestCheckUtil::checkMaxValue ($this->imageHeight, 1000, "imageHeight");
        RequestCheckUtil::checkMinValue ($this->imageHeight, 10, "imageHeight");
        RequestCheckUtil::checkMaxValue ($this->imageWidth, 1000, "imageWidth");
        RequestCheckUtil::checkMinValue ($this->imageWidth, 10, "imageWidth");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
