<?php
//摘要
function summary($content,$cut=0,$str="..."){
	$content=strip_tags($content);//去除html标记
	$pattern = "/&[a-zA-Z]+;/";//去除特殊符号
	$content=preg_replace($pattern,'',$content);
	if(!is_numeric($cut))
		return $content;
	if($cut>0)
		$content=mb_strimwidth($content,0,$cut,$str);
	return $content;
}