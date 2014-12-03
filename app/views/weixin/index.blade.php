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
<MsgType><![CDATA[text]]></MsgType>
<Content><![CDATA[{{ $message->Content }}]]></Content>
</xml>