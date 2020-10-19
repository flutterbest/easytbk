<?php

namespace NiuGengYun\EasyTBK\TaoBao\Domain;

/**
 * 返回结果
 * @author auto create
 */
class PaginationResult
{
	
	/** 
	 * 当前页码
	 **/
	public $current_page;
	
	/** 
	 * 扩展属性
	 **/
	public $extend;
	
	/** 
	 * 商品数据
	 **/
	public $model_list;
	
	/** 
	 * 错误码
	 **/
	public $msg_code;
	
	/** 
	 * 错误信息
	 **/
	public $msg_info;
	
	/** 
	 * 一页大小
	 **/
	public $page_size;
	
	/** 
	 * 请求是否成功
	 **/
	public $success;
	
	/** 
	 * 商品总数
	 **/
	public $total_item;
	
	/** 
	 * 总页数
	 **/
	public $total_page;
	
	/** 
	 * 埋点信息
	 **/
	public $track_params;	
}
?>