<?php

namespace NiuGengYun\EasyTBK\TaoBao\Domain;

/**
 * 根据站点名称查询产品
 * @author auto create
 */
class ApiResult
{
	
	/** 
	 * 执行成功
	 **/
	public $code;
	
	/** 
	 * 执行成功后的结果<br> startTime: 聊天开始时间，现在去敏感数据，精确到天<br> eserviceId：客服nick<br> area：客户所在区域<br> eserviceSendMsgNum：客服发送消息数<br> userSource：用户来源，比如ios, android<br> userSendMsgNum：用户发送消息数<br> channel：客户来源渠道<br> loadingPage：load页面<br> openId：客户nick
	 **/
	public $data;
	
	/** 
	 * 错误信息
	 **/
	public $error_msg;	
}
?>