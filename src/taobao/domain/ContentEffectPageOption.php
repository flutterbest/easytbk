<?php

namespace NiuGengYun\EasyTBK\TaoBao\Domain;

/**
 * 入参
 * @author auto create
 */
class ContentEffectPageOption
{
	
	/** 
	 * 内容id，如不指定则不做为筛选条件
	 **/
	public $content_id;
	
	/** 
	 * 页码从1开始
	 **/
	public $page_no;
	
	/** 
	 * 页数，最大1000
	 **/
	public $page_size;
	
	/** 
	 * 如若不传则不做为筛选条件
	 **/
	public $pid;
	
	/** 
	 * 选择效果日期，如果不传即按日期倒序排
	 **/
	public $time;	
}
?>