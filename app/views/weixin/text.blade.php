<xml>
<ToUserName><![CDATA[{{ $object->FromUserName }}]]></ToUserName>
<FromUserName><![CDATA[{{ $object->ToUserName }}]]></FromUserName>
<CreateTime>{{time()}}</CreateTime>
<MsgType><![CDATA[text]]></MsgType>
<Content><![CDATA[{{ $content }}]]></Content>
</xml>