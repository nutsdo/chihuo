@extends('layouts.main')

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
							<li><a href="#">商家列表</a><span class="divider-last">&nbsp;</span></li>
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
                       <a class="btn btn-warning" id="btn-add" href="{{route('merchant-create')}}"><i class="icon-plus icon-white"></i>添加</a>
                       <button class="btn btn-inverse"><i class="icon-refresh icon-white"></i> 更新</button>
                    </p>
                </div>
            <!-- BEGIN ADVANCED TABLE widget-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN EXAMPLE TABLE widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>文章列表</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                        	<div class="row-fluid">
								{{$merchants->links('admin-page')}}
							</div>
                            <table class="table table-striped table-bordered" id="sample_1">
	                            <thead>
	                                <tr>                    
	                                    <th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /></th>
	                                    <th>id</th>
	                                    <th>封面</th>
	                                    <th class="hidden-phone">商家名称</th>
	                                    <th class="hidden-phone">描述</th>
	                                    <th class="hidden-phone">更新时间</th>
	                                    <th class="hidden-phone">操作</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                            	@foreach($merchants as $m)
	                                <tr class="odd gradeX">                                	
	                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
	                                    <td>{{$m->id}}</td>
	                                    <td>{{HTML::image($m->cover,null,array('width'=>'100'))}}</td>
	                                    <td class="hidden-phone"><a href=""></a>{{$m->title}}</td>
	                                    <td class="hidden-phone">{{$m->description}}</td>
	                                    <td class="center hidden-phone">{{$m->updated_at}}</td>
	                                    <td class="hidden-phone">
	                                    	<a href="{{route('merchant-edit',$m->id)}}" class="btn"><i class="icon-eye-open"></i> 修改</a>
	                              
	                       					<a href="{{route('merchant-delete',$m->id)}}" role="button" class="btn btn-danger" data-toggle="modal" onclick="return confirm('确定要删除么')"><i class="icon-remove icon-white"></i>删除</a>
	                                    </td>
	                                </tr>
	                                @endforeach
	                            </tbody>
                        	</table>
							<div class="row-fluid">
								{{$merchants->links('admin-page')}}
							</div>
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
@section('script2')
{{ HTML::script('packages/admin/assets/uniform/jquery.uniform.min.js')}}
{{ HTML::script('packages/admin/assets/data-tables/jquery.dataTables.js')}}
{{ HTML::script('packages/admin/assets/data-tables/DT_bootstrap.js')}}
@stop
