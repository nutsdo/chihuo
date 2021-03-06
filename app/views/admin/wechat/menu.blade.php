@extends('layouts.main')
@section('style')
{{ HTML::style('packages/admin/assets/fancybox/source/jquery.fancybox.css') }}
{{ HTML::style('packages/admin/assets/uniform/css/uniform.default.css') }}
@stop
@section('content')
		<!-- BEGIN PAGE -->
		<div id="main-content">
			<div class="widget-body" id="note">
			</div>
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN THEME CUSTOMIZER-->
						<div id="theme-change" class="hidden-phone">
							<i class="icon-cogs"></i>
							<span class="settings">
                                <span class="text">Theme:</span>
                                <span class="colors">
                                    <span class="color-default" data-style="default"></span>
                                    <span class="color-gray" data-style="gray"></span>
                                    <span class="color-purple" data-style="purple"></span>
                                    <span class="color-navy-blue" data-style="navy-blue"></span>
                                </span>
							</span>
						</div>
						<!-- END THEME CUSTOMIZER-->
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<h3 class="page-title">
							仪表盘
							<small> 基本信息 </small>
						</h3>
						<ul class="breadcrumb">
							<li>
                                <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
							</li>
                            <li>
                                <a href="#">吃货小队</a> <span class="divider">&nbsp;</span>
                            </li>
							<li><a href="#">用户列表</a><span class="divider-last">&nbsp;</span></li>
                            <li class="pull-right search-wrap">
                                <form class="hidden-phone">
                                    <div class="search-input-area">
                                        <input id=" " class="search-query" type="text" placeholder="Search">
                                        <i class="icon-search"></i>
                                    </div>
                                </form>
                            </li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<div class="widget-body">
                    <p>
                       <button class="btn"><i class="icon-eye-open"></i> 查看</button>
                       <a class="btn btn-warning" id="btn-add" href="{{asset('admin/wechat/create')}}"><i class="icon-plus icon-white"></i>添加</a>
                       <a class="btn btn-inverse" id="btn-update" href="javascript:;"><i class="icon-refresh icon-white"></i> 更新</a>
                       <button class="btn btn-primary"><i class="icon-pencil icon-white"></i> 编辑</button>
                       <button class="btn btn-danger"><i class="icon-remove icon-white"></i> 删除</button>
                       <button class="btn btn-info"><i class="icon-ban-circle icon-white"></i> 取消</button>
                       <button class="btn btn-success"><i class="icon-ok icon-white"></i> 审核</button>
                    </p>
                </div>
            <!-- BEGIN ADVANCED TABLE widget-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN EXAMPLE TABLE widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>菜单列表</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <table class="table table-striped table-bordered" id="sample_1">
                            <thead>
                                <tr>
                                    <th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /></th>
                                    <th>菜单</th>
                                    <th class="hidden-phone">类型</th>
                                    <th class="hidden-phone">keyword</th>
                                    <th class="hidden-phone">URL</th>                                    
                                    <th class="hidden-phone">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($menu as $m)
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>@if($m['parent_id']!=0){{$m->name}}@else |--　{{$m->name}} @endif</td>
                                    <td class="hidden-phone"><a href="##">{{$m->type}}</a></td>
                                    <td class="center hidden-phone">@if(isset($m->key)){{$m->key}}@endif</td>
                                    <td class="hidden-phone">{{$m->url}}</td>                                    
                                    <td class="hidden-phone">
                                    	<a class="btn btn-primary" href="{{route('menu-edit',[$m->id])}}"><i class="icon-pencil icon-white"></i> 修改</a>
	                       				<a href="{{route('menu-destroy',[$m->id])}}" role="button" class="btn btn-danger" data-toggle="modal" onclick="return confirm('确定要删除么')"><i class="icon-remove icon-white"></i>删除</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE widget-->
                </div>
            </div>

            <!-- END ADVANCED TABLE widget-->
				
			</div>
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->
@stop
@section('script1')
{{ HTML::script('packages/admin/js/jquery.blockui.js')}}
@stop
@section('script2')
{{ HTML::script('packages/admin/assets/uniform/jquery.uniform.min.js')}}
{{ HTML::script('packages/admin/assets/data-tables/jquery.dataTables.js')}}
{{ HTML::script('packages/admin/assets/data-tables/DT_bootstrap.js')}}
<script>	
var html = '<div class="alert alert-success" id="success">'
	+'<button class="close" data-dismiss="alert">×</button>'+
	'<strong>更新成功!</strong> </div>';
    $( document ).ready( function( $ ) {
        $( '#btn-update' ).click(function() {
            //.....
            //show some spinner etc to indicate operation in progress
            //.....
     
            $.post(
                '{{URL::route('post-menu')}}',
                {},
                function(data) {
                    //do something with data/response returned by server
                    if(data.errcode==0){                        
						$('#note').append(html);
						setTimeout('$("#success").remove()', 3000);
                    }
                },
                'json'
            );
     
            //.....
            //do anything else you might want to do
            //.....
     
            //prevent the form from actually submitting in browser
            return false;
        } );
    } );			
</script>
@stop
