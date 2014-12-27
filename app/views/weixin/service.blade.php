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
<MsgType><![CDATA[text]]></MsgType>
<MsgType><![CDATA[transfer_customer_service]]></MsgType>
</xml>