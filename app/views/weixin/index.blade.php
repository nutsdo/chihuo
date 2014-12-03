<?php
/** 
 * @function：index.blade.php
 * @description：
 * @date：2014-12-3
 * @author：by Administrator
 * @interpreter
 * @param 
 * @param 
 */ 
?>
<!-- 回复文本消息 -->
<!-- 
<xml>
	<ToUserName><![CDATA[{{ $message->FromUserName }}]]></ToUserName>
	<FromUserName><![CDATA[{{ $message->ToUserName }}]]></FromUserName>
	<CreateTime>{{ time() }}</CreateTime>
	<MsgType><![CDATA[text]]></MsgType>
	<Content><![CDATA[{{ $message->Content }}]]></Content>
</xml>
 -->
<!-- 回复图文消息 -->
<xml>
	<ToUserName><![CDATA[{{ $message->FromUserName }}]]></ToUserName>
	<FromUserName><![CDATA[{{ $message->ToUserName }}]]></FromUserName>
	<CreateTime>{{ time() }}</CreateTime>
	<MsgType><![CDATA[news]]></MsgType>
	<ArticleCount>{{ $count }}</ArticleCount>
	<Articles>
	@foreach( $post as $p)
		<item>
			<Title><![CDATA[{{ $p->title }}]]></Title> 
			<Description><![CDATA[{{summary($p->content,30)}}]]></Description>
			<PicUrl><![CDATA[{{ $p->cover }}]]></PicUrl>
			<Url><![CDATA[{{ asset('post/show/'.$p->id) }}]]></Url>
		</item>
	@endforeach
	</Articles>
</xml> 