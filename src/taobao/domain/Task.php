<?php

namespace NiuGengYun\EasyTBK\TaoBao\Domain;

/**
 * 批量异步任务结果
 * @author auto create
 */
class Task
{
	
	/** 
	 * 下载文件的MD5校验码，通过此校验码可以检查下载的文件是否是完整的。
	 **/
	public $check_code;
	
	/** 
	 * 任务创建时间
	 **/
	public $created;
	
	/** 
	 * 大任务结果下载地址。当创建的认任务是大数据量的任务时，获取结果会返回此字段，同时subtasks列表会为空。
通过这个地址可以下载到结果的结构体，格式同普通任务下载的一样。
每次获取到的地址只能下载一次。下载的文件加上后缀名.zip打开。
	 **/
	public $download_url;
	
	/** 
	 * 此任务是由哪个api产生的
	 **/
	public $method;
	
	/** 
	 * 定时类型任务的执行时间点
	 **/
	public $schedule;
	
	/** 
	 * 异步任务处理状态。new（还未开始处理），doing（处理中），done（处理结束）。
	 **/
	public $status;
	
	/** 
	 * 子任务处理结果，如果任务还没有处理完，返回的结果列表为空。如果任务处理完毕，返回子任务结果列表
	 **/
	public $subtasks;
	
	/** 
	 * 异步任务id。创建异步任务时返回的任务id号
	 **/
	public $task_id;	
}
?>