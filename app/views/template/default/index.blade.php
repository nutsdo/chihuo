@extends('layouts.chihuo')
<title>石家庄吃货小队</title>
@section('left')
	<div class="left">
		@foreach($posts as $post)		
			<div class="focus">
				<div class="jump">{{HTML::image('packages/style/images/jiao.png',null,array('width'=>'35','height'=>'35'))}}</div>
				<!--标题-->
				<h3><a href="{{asset('post/show/'.$post->id)}}" target="_blank">{{$post->title}}</a></h3>
				<!--标题发布时间，关注人数-->
				<div class="focus_on">
					<span class="date"><em>{{$post->post_time}}</em></span>					
					<span class="author">{{HTML::image('packages/style/images/left1.png')}}<em>{{$post->author}}</em>{{HTML::image('packages/style/images/right1.png')}}<div class="clear"></div></span>
					<span class="replay">{{HTML::image('packages/style/images/left2.png')}}<em>{{$post->views}}</em>{{HTML::image('packages/style/images/right2.png')}}<div class="clear"></div></span>
					<div class="clear"></div>		
				</div>
				<div class="new_pic">
				@if($post->post_time == date('m/d/Y'))
					{{HTML::image('packages/style/images/new.png',null,array('width'=>'80','height'=>'80','class'=>'new'))}}
				@endif					
					<a href="{{asset('post/show/'.$post->id)}}" target="_blank">
						{{HTML::image($post->cover,null,array('width'=>'600','height'=>'275'))}}			
					</a>	
				</div>
				<!--关注理由-->
				<div class="focus_reason">{{summary($post->content,200)}}</div>		
				<div class="readall"><a href="{{asset('post/show/'.$post->id)}}" target="_blank">阅读全部</a></div>
				<div class="clear"></div>
			</div>
			@endforeach				
			<!--正在加载-->
			<!--
			<div class="loading">
				{{HTML::image('packages/style/images/jzz.gif',null,array('width'=>'32','height'=>'32'))}}
				<span>正在加载，请您稍后...</span>
			</div>
			-->
			<!--分页-->
			<div class="mtop20"></div>
			{{$posts->links('pages')}}
			<div class="clear"></div>
		</div>
@stop