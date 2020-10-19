<?php

namespace NiuGengYun\EasyTBK\TaoBao\Request;

use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;

/**
 * TOP API: taobao.hotel.add request
 *
 * @author auto create
 * @since 1.0, 2015.06.04
 */
class HotelAddRequest
{
	/**
	 * 酒店地址。长度不能超过120
	 **/
	private $address;

	/**
	 * 城市编码。参见：http://kezhan.trip.taobao.com/area.html，domestic为false时，输入对应国家的海外城市编码，可调用海外城市查询接口获取
	 **/
	private $city;

	/**
	 * domestic为true时，固定China；domestic为false时，必须传定义的海外国家编码值。参见：http://kezhan.trip.taobao.com/countrys.html
	 **/
	private $country;

	/**
	 * 装修年份。长度不能超过4。
	 **/
	private $decorateTime;

	/**
	 * 酒店介绍。不超过25000个汉字
	 **/
	private $desc;

	/**
	 * 区域（县级市）编码。参见：http://kezhan.trip.taobao.com/area.html
	 **/
	private $district;

	/**
	 * 是否国内酒店。可选值：true，false
	 **/
	private $domestic;

	/**
	 * 酒店级别。可选值：A,B,C,D,E,F。代表客栈公寓、经济连锁、二星级/以下、三星级/舒适、四星级/高档、五星级/豪华
	 **/
	private $level;

	/**
	 * 酒店名称。不能超过60
	 **/
	private $name;

	/**
	 * 开业年份。长度不能超过4。
	 **/
	private $openingTime;

	/**
	 * 酒店定位。可选值：T,B。代表旅游度假、商务出行
	 **/
	private $orientation;

	/**
	 * 酒店ID, 这是卖家自己系统中的ID
	 **/
	private $outerId;

	/**
	 * 酒店图片。最大长度:500K。支持的文件类型：gif,jpg,png
	 **/
	private $pic;

	/**
	 * 省份编码。参见：http://kezhan.trip.taobao.com/area.html，domestic为false时默认为0
	 **/
	private $province;

	/**
	 * 房间数。长度不能超过4。
	 **/
	private $rooms;

	/**
	 * 交通距离与设施服务。JSON格式。cityCenterDistance、railwayDistance、airportDistance分别代表距离市中心、距离火车站、距离机场公里数，为不超过3位正整数，默认-1代表无数据。其他key值true代表有此服务，false代表没有。parking：停车场，airportShuttle：机场接送，rentCar：租车，meetingRoom：会议室，businessCenter：商务中心，swimmingPool：游泳池，fitnessClub：健身中心，laundry：洗衣服务，morningCall：叫早服务，bankCard：接受银行卡，creditCard：接受信用卡，chineseRestaurant：中餐厅，westernRestaurant：西餐厅，cafe：咖啡厅，bar：酒吧，ktv：KTV。
	 **/
	private $service;

	/**
	 * 接入卖家数据主键
	 **/
	private $siteParam;

	/**
	 * 楼层数。长度不能超过4。
	 **/
	private $storeys;

	/**
	 * 酒店电话。格式：国家代码（最长6位）#区号（最长4位）#电话（最长20位）。国家代码提示：中国大陆0086、香港00852、澳门00853、台湾00886
	 **/
	private $tel;

	private $apiParas = array();

	public function setAddress($address)
	{
		$this->address = $address;
		$this->apiParas["address"] = $address;
	}

	public function getAddress()
	{
		return $this->address;
	}

	public function setCity($city)
	{
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setCountry($country)
	{
		$this->country = $country;
		$this->apiParas["country"] = $country;
	}

	public function getCountry()
	{
		return $this->country;
	}

	public function setDecorateTime($decorateTime)
	{
		$this->decorateTime = $decorateTime;
		$this->apiParas["decorate_time"] = $decorateTime;
	}

	public function getDecorateTime()
	{
		return $this->decorateTime;
	}

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setDistrict($district)
	{
		$this->district = $district;
		$this->apiParas["district"] = $district;
	}

	public function getDistrict()
	{
		return $this->district;
	}

	public function setDomestic($domestic)
	{
		$this->domestic = $domestic;
		$this->apiParas["domestic"] = $domestic;
	}

	public function getDomestic()
	{
		return $this->domestic;
	}

	public function setLevel($level)
	{
		$this->level = $level;
		$this->apiParas["level"] = $level;
	}

	public function getLevel()
	{
		return $this->level;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setOpeningTime($openingTime)
	{
		$this->openingTime = $openingTime;
		$this->apiParas["opening_time"] = $openingTime;
	}

	public function getOpeningTime()
	{
		return $this->openingTime;
	}

	public function setOrientation($orientation)
	{
		$this->orientation = $orientation;
		$this->apiParas["orientation"] = $orientation;
	}

	public function getOrientation()
	{
		return $this->orientation;
	}

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setPic($pic)
	{
		$this->pic = $pic;
		$this->apiParas["pic"] = $pic;
	}

	public function getPic()
	{
		return $this->pic;
	}

	public function setProvince($province)
	{
		$this->province = $province;
		$this->apiParas["province"] = $province;
	}

	public function getProvince()
	{
		return $this->province;
	}

	public function setRooms($rooms)
	{
		$this->rooms = $rooms;
		$this->apiParas["rooms"] = $rooms;
	}

	public function getRooms()
	{
		return $this->rooms;
	}

	public function setService($service)
	{
		$this->service = $service;
		$this->apiParas["service"] = $service;
	}

	public function getService()
	{
		return $this->service;
	}

	public function setSiteParam($siteParam)
	{
		$this->siteParam = $siteParam;
		$this->apiParas["site_param"] = $siteParam;
	}

	public function getSiteParam()
	{
		return $this->siteParam;
	}

	public function setStoreys($storeys)
	{
		$this->storeys = $storeys;
		$this->apiParas["storeys"] = $storeys;
	}

	public function getStoreys()
	{
		return $this->storeys;
	}

	public function setTel($tel)
	{
		$this->tel = $tel;
		$this->apiParas["tel"] = $tel;
	}

	public function getTel()
	{
		return $this->tel;
	}

	public function getApiMethodName()
	{
		return "taobao.hotel.add";
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{

		RequestCheckUtil::checkNotNull($this->address,"address");
		RequestCheckUtil::checkMaxLength($this->address,120,"address");
		RequestCheckUtil::checkNotNull($this->city,"city");
		RequestCheckUtil::checkMaxValue($this->city,999999,"city");
		RequestCheckUtil::checkMinValue($this->city,0,"city");
		RequestCheckUtil::checkNotNull($this->country,"country");
		RequestCheckUtil::checkMaxLength($this->decorateTime,4,"decorateTime");
		RequestCheckUtil::checkNotNull($this->desc,"desc");
		RequestCheckUtil::checkMaxLength($this->desc,50000,"desc");
		RequestCheckUtil::checkMaxValue($this->district,999999,"district");
		RequestCheckUtil::checkMinValue($this->district,0,"district");
		RequestCheckUtil::checkNotNull($this->domestic,"domestic");
		RequestCheckUtil::checkNotNull($this->level,"level");
		RequestCheckUtil::checkMaxLength($this->level,1,"level");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkMaxLength($this->name,60,"name");
		RequestCheckUtil::checkMaxLength($this->openingTime,4,"openingTime");
		RequestCheckUtil::checkNotNull($this->orientation,"orientation");
		RequestCheckUtil::checkMaxLength($this->orientation,1,"orientation");
		RequestCheckUtil::checkNotNull($this->pic,"pic");
		RequestCheckUtil::checkNotNull($this->province,"province");
		RequestCheckUtil::checkMaxValue($this->province,999999,"province");
		RequestCheckUtil::checkMinValue($this->province,0,"province");
		RequestCheckUtil::checkMaxValue($this->rooms,9999,"rooms");
		RequestCheckUtil::checkMinValue($this->rooms,0,"rooms");
		RequestCheckUtil::checkMaxLength($this->siteParam,100,"siteParam");
		RequestCheckUtil::checkMaxValue($this->storeys,9999,"storeys");
		RequestCheckUtil::checkMinValue($this->storeys,0,"storeys");
		RequestCheckUtil::checkMaxLength($this->tel,32,"tel");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
