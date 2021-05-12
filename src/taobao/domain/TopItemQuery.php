<?php

namespace NiuGengYun\EasyTBK\taobao\domain;

/**
 * query
 * @author auto create
 */
class TopItemQuery
{
	
	/** 
	 * 页码,必传
	 **/
	public $current_page;
	
	/** 
	 * 一页大小,必传
	 **/
	public $page_size;
	
	/** 
	 * 媒体pid,必传
	 **/
	public $pid;
	
	/** 
	 * 是否包邮,可不传
	 **/
	public $postage;
	
	/** 
	 * 状态，预热：1，正在进行中：2,可不传
	 **/
	public $status;
	
	/** 
	 * 淘宝类目id,可不传
	 **/
	public $taobao_category_id;
	
	/** 
	 * 搜索关键词,可不传
	 **/
	public $word;	
}
?>