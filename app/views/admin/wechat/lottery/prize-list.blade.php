@extends('layouts.main')
@section('style')
{{ HTML::style('packages/admin/assets/fancybox/source/jquery.fancybox.css') }}
{{ HTML::style('packages/admin/assets/uniform/css/uniform.default.css') }}
@stop
@section('content')
		<!-- BEGIN PAGE -->
		<div id="main-content">
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
							<li><a href="#">活动列表</a><span class="divider-last">&nbsp;</span></li>
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
                       <a class="btn" href="{{route('wechat.lottery')}}"><i class="icon-eye-open"></i> 活动列表</a>
                       <a class="btn btn-warning" id="btn-add" href="{{route('prize-create')}}"><i class="icon-plus icon-white"></i>添加</a>
                       <button class="btn btn-inverse"><i class="icon-refresh icon-white"></i> 更新</button>
                       <button class="btn btn-primary"><i class="icon-pencil icon-white"></i> 编辑</button>

                    </p>
                </div>
            <!-- BEGIN ADVANCED TABLE widget-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN EXAMPLE TABLE widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>活动列表</h4>
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
                                    <th>#ID</th>
                                    <th class="hidden-phone">奖品名称</th>
                                    <th class="hidden-phone">奖品类型</th>
                                    <th class="hidden-phone">兑奖码</th>
                                    <th class="hidden-phone">奖品数量</th>
                                    <th class="hidden-phone">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($prizes as $prize)
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>{{$prize->id}}</td>
                                    <td class="hidden-phone"><a href="##">{{$prize->name}}</a></td>
                                    <td class="hidden-phone"><a href="##">{{$prize->type}}</a></td>
                                    <td class="hidden-phone">{{$prize->prize_sn}}</td>
                                    <td class="center hidden-phone">{{$prize->amount}}</td>
                                    <td class="hidden-phone">
                                    	<a class="btn btn-primary" href="{{route('prize-edit',$prize->id)}}"><i class="icon-pencil icon-white"></i> 修改</a>
	                       				<a href="{{asset('admin/user/delete/')}}" role="button" class="btn btn-danger" data-toggle="modal" onclick="return confirm('确定要删除么')"><i class="icon-remove icon-white"></i>删除</a>
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

@stop
