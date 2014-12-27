<?php
/** 
 * @function：text.blade.php
 * @description：
 * @date：2014-12-25
 * @author：by Administrator
 * @interpreter
 * @param 
 * @param 
 */ 
?>
<xml>
<ToUserName><![CDATA[{{ $object->FromUserName }}]]></ToUserName>
<FromUserName><![CDATA[{{ $object->ToUserName }}]]></FromUserName>
<CreateTime>{{time()}}</CreateTime>
<MsgType><![CDATA[video]]></MsgType>
<Video>
	<MediaId><![CDATA[{{$videoArray['MediaId']}}]]></MediaId>
	<Title><![CDATA[{{$videoArray['title']}}]]></Title>
	<Description><![CDATA[{{$videoArray['description']}}]]></Description>
</Video> 
</xml>