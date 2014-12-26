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
<ToUserName><![CDATA[{{$object->toUser}}]]></ToUserName>
<FromUserName><![CDATA[{{$object->fromUser}}]]></FromUserName>
<CreateTime>{{time()}}</CreateTime>
<MsgType><![CDATA[voice]]></MsgType>
<Voice>
	<MediaId><![CDATA[{{$voiceArray['MediaId']}}]]></MediaId>
</Voice>
</xml>