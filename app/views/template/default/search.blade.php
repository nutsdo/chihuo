		搜索首页
{{ Form::open(array(
	   'route' => 'search_show',
	   'id' => 'search',
	   'class' => 'form-horizontal', 
	   'role' => 'form',
))}}
{{Form::text('keywords','请输入关键字')}}
{{Form::submit('搜索一下')}}
{{Form::close()}}