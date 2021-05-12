<?php

namespace NiuGengYun\EasyTBK\taobao\domain;

/**
 * 发送群消息
 * @author auto create
 */
class TribeMsg
{
	
	/** 
	 * 是否是at消息， 0表示不是at消息，1表示at指定的用户，2表示at群里所有人
	 **/
	public $at_flag;
	
	/** 
	 * 当at_flag=1时，必须指定at的用户
	 **/
	public $atmembers;
	
	/** 
	 * 自定义push提醒参数，格式为json字符串，该参数为空时，采用系统默认的push；设置该参数时，json字符串必选包含至少包含指定的三个key，"d", "sound", "title"
	 **/
	public $custom_push;
	
	/** 
	 * 格式为json字符串， 当消息类型为图片或语音时该参数为必选项，用于描述图片，语音的属性； 该参数json格式必须符合msg_type的要求；当消息类型为图片时，格式必须符合如下样例 ： {“height”：10, "width":10, "type":"jpg"}，当前支持3三种图片类型，gif, jpg,jpeg； 当消息类型为语音时，必须符合如下样例：{“playtime”:10,”type”:”amr”}，语音的type只支持arm
	 **/
	public $media_attrs;
	
	/** 
	 * 文本消息最大长度是4K，图片最大为500K。消息内容格式根据type确定。当type为文本时，内容为文本字符串；当类型为图片或语音时，内容为图片和语音的二进制base64编码生成的字符串；当类型为自定义消息时，内容必须为就送字符串格式，该字符串必须包含header字符，即{"header":{"summary":},...}
	 **/
	public $msg_content;
	
	/** 
	 * 消息类型，目前支持四中类型的消息； msg_type=0 表示普通文本消息； msg_type=2 表示语音消息； msg_type = 16表示图片消息； msg_type=17表示用户自定义消息
	 **/
	public $msg_type;
	
	/** 
	 * 该消息是否需要push
	 **/
	public $push;	
}
?>