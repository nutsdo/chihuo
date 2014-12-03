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
<xml>
	<ToUserName><![CDATA[{{ $message->FromUserName }}]]></ToUserName>
	<FromUserName><![CDATA[{{ $message->ToUserName }}]]></FromUserName>
	<CreateTime>{{ time() }}</CreateTime>
	<MsgType><![CDATA[news]]></MsgType>
	<ArticleCount>{{ $count }}</ArticleCount>
	<Articles>
	@foreach( $posts as $p)
		<item>
			<Title><![CDATA[{{ $p->title }}]]></Title> 
			<Description><![CDATA[{{summary($p->content,30)}}]]></Description>
			<PicUrl><![CDATA[{{ $p->cover }}]]></PicUrl>
			<Url><![CDATA[{{ asset('post/show/'.$p->id) }}]]></Url>
		</item>
	@endforeach
	</Articles>
</xml>
