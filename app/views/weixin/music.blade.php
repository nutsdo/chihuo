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
<MsgType><![CDATA[music]]></MsgType>
<Music>
	<Title><![CDATA[{{$musicArray['title']}}]]></Title>
	<Description><![CDATA[{{$musicArray['Ddescription']}}]]></Description>
	<MusicUrl><![CDATA[{{$musicArray['MusicUrl']}}]]></MusicUrl>
	<HQMusicUrl><![CDATA[{{$musicArray['HQMusicUrl']}}]]></HQMusicUrl>
	<ThumbMediaId><![CDATA[{{$musicArray['ThumbMediaId']}}]]></ThumbMediaId>
</Music>
</xml>