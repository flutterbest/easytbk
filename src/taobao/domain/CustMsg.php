<?php

namespace NiuGengYun\EasyTBK\taobao\domain;

/**
 * 自定义消息内容
 * @author auto create
 */
class CustMsg
{
	
	/** 
	 * apns推送的附带数据。客户端收到apns消息后，可以从apns结构体的"d"字段中取出该内容。aps.size() + apns_param.size() < 200
	 **/
	public $apns_param;
	
	/** 
	 * apns推送时，里面的aps结构体json字符串，aps.alert为必填字段。本字段为可选，若为空，则表示不进行apns推送。aps.size() + apns_param.size() < 200
	 **/
	public $aps;
	
	/** 
	 * 发送的自定义数据，sdk默认无法解析消息，该数据需要客户端自己解析
	 **/
	public $data;
	
	/** 
	 * 可以指定发送方的显示昵称，默认为空，自动使用发送方用户id作为nick
	 **/
	public $from_nick;
	
	/** 
	 * 如果为1，则表示发送方是一个淘宝账号，该账号必须是本appkey绑定过的客服账号，并且只能给本appkey的用户发消息。通过该参数可以从服务端发起一个客服到用户的会话。
	 **/
	public $from_taobao;
	
	/** 
	 * 发送方userid
	 **/
	public $from_user;
	
	/** 
	 * 表示消息是否在最近会话列表里面展示。如果为1，则消息不在列表展示，可以认为服务端透明的给客户端下法了一个数据，ios的提示任然通过aps字段控制
	 **/
	public $invisible;
	
	/** 
	 * 客户端最近消息里面显示的消息摘要
	 **/
	public $summary;
	
	/** 
	 * 接收方appkey，不填默认是发送方appkey，如需跨app发送，需要走审批流程，请联系技术答疑
	 **/
	public $to_appkey;
	
	/** 
	 * 接受者userid列表，单次发送用户数小于100
	 **/
	public $to_users;	
}
?>