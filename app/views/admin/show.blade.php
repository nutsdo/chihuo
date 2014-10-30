@extends('layouts.main')
@section('style')
{{ HTML::style('packages/admin/assets/fancybox/source/jquery.fancybox.css') }}
{{ HTML::style('packages/admin/assets/uniform/css/uniform.default.css') }}
@stop
@section('content')
	
	    <p>{{ $post->content }}</p>
@stop
@section('script1')
{{ HTML::script('packages/admin/js/jquery.blockui.js')}}
@stop
@section('script2')
{{ HTML::script('packages/admin/assets/uniform/jquery.uniform.min.js')}}
{{ HTML::script('packages/admin/assets/data-tables/jquery.dataTables.js')}}
{{ HTML::script('packages/admin/assets/data-tables/DT_bootstrap.js')}}
@stop
