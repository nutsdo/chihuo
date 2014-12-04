<xml>
	<ToUserName><![CDATA[{{ $message->FromUserName }}]]></ToUserName>
	<FromUserName><![CDATA[{{ $message->ToUserName }}]]></FromUserName>
	<CreateTime>{{ time() }}</CreateTime>
@if($type=='text')
	<MsgType><![CDATA[text]]></MsgType>
	<Content><![CDATA[{{ $content }}]]></Content>
@endif

</xml>
