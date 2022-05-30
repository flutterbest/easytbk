<?php

namespace NiuGengYun\EasyTBK\TaoBao\Domain;

/**
 * KFC 关键词过滤匹配结果
 * @author auto create
 */
class KfcSearchResult
{
	
	/** 
	 * 过滤后的文本：
当匹配到B等级的词时，文本中的关键词被替换为*号，content即为关键词替换后的文本；
其他情况，content始终为null
	 **/
	public $content;
	
	/** 
	 * 匹配到的关键词的等级，值为null，或为A、B、C、D。
当匹配不到关键词时，值为null，否则值为A、B、C、D中的一个。
A、B、C、D等级按严重程度从高至低排列。
	 **/
	public $level;
	
	/** 
	 * 是否匹配到关键词,匹配到则为true.
	 **/
	public $matched;	
}
?>