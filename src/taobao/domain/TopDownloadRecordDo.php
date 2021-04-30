<?php

namespace NiuGengYun\EasyTBK\taobao\domain;

/**
 * results
 * @author auto create
 */
class TopDownloadRecordDo
{
	
	/** 
	 * 文件创建时间
	 **/
	public $created;
	
	/** 
	 * 下载链接状态。1:未下载。2:已下载
	 **/
	public $status;
	
	/** 
	 * 下载链接
	 **/
	public $url;	
}
?>