@extends('layouts.chihuo')
<title>{{$post->title}}</title>
@section('nav')
<a href="/">首页</a> > <a class="second"> {{$post->title}} </a>
@stop
@section('left')
	<div class="left">		
		<div class="icon"><div class="jump">{{HTML::image('packages/style/images/jiao.png',null,array('width'=>'35','height'=>'35'))}}</div></div>
		<div class="focus_1">
			<div class="content">
				<div class="new_pic">
					<a href="" target="_blank">
						{{HTML::image($post->cover,null,array('width'=>'600','height'=>'275'))}}				
					</a>				
				</div>				
				<!--标题-->
				<h1><a>{{$post->title}}</a></h1>				
				<!--标题发布时间，关注人数-->
				<div class="focus_on">
					<span class="date"><em>{{$post->post_time}}</em></span>					
					<span class="author">{{HTML::image('packages/style/images/left1.png')}}<em>{{$post->author}}</em>{{HTML::image('packages/style/images/right1.png')}}<div class="clear"></div></span>
					<span class="replay">{{HTML::image('packages/style/images/left2.png')}}<em>{{$post->views}}</em>{{HTML::image('packages/style/images/right2.png')}}<div class="clear"></div></span>
					<div class="clear"></div>		
				</div>				
				<!--文章内容-->
				<div class="contents">
					<div class="paragraph">{{$post->content}}</div>
					
					<div class="prev_next">
						<div class="prev"><span>上一篇：</span>@if($pre)<a href="{{asset('post/'.$pre->id)}}"> {{$pre->title}}</a> @else 没有了 @endif</div>
						<div class="next"><span>下一篇：</span>@if($next)<a href="{{asset('post/'.$next->id)}}"> {{$next->title}}</a> @else 没有了 @endif</div>
						<div class="readall1"><a href="" target="_blank">分享</a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="mtop30"></div>
		<div class="comment">
			<div class="n1"></div>
			<div class="n2"></div>
			<div class="comments">
				<!-- UY BEGIN -->
				<div id="uyan_frame"></div>
				<script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=1973389"></script>
				<!-- UY END -->
			</div>
		</div>
	</div>
@stop