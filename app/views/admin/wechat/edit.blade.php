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
							<li><a href="#">仪表盘</a><span class="divider-last">&nbsp;</span></li>
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
           <!-- BEGIN PAGE CONTENT-->
	            <div class="row-fluid">
	               <div class="span12">
	                  <!-- BEGIN SAMPLE FORM widget-->   
	                  <div class="widget">
	                     <div class="widget-title">
	                        <h4><i class="icon-reorder"></i>添加用户</h4>
	                        <span class="tools">
	                           <a href="javascript:;" class="icon-chevron-down"></a>
	                           <a href="javascript:;" class="icon-remove"></a>
	                        </span>
	                     </div>
	                     <div class="widget-body form">
	                        <!-- BEGIN FORM-->
	                        {{ Form::open(array(
	                        	'route' => 'menu-update',
	                        	'id' => 'addform',
	                        	'class' => 'form-horizontal', 
	                        	'role' => 'form'
	                        	))
	                         }}
	                         {{ Form::hidden('id',$menu->id) }}
	                           <div class="control-group">
	                              <label class="control-label">菜单名称</label>
	                              <div class="controls">
	                                 <input type="text" class="span6 popovers" id="name" name="name" value="{{$menu->name}}" data-trigger="hover" data-content="请输入菜单名称。" data-original-title="提示" />
	                              	 {{ $errors->first('name', '<span class="help-block">:message</span>') }}
	                              </div>
	                           </div>
	                           <div class="control-group">
	                              <label class="control-label">类型</label>
	                              <div class="controls">
	                              	 {{Form::select('type', 
	                              	 	array(
	                              	 		'click' => 'Click',
	                              	 		'view' => 'View',
	                              	 		'scancode_waitmsg' => 'Scancode_waitmsg',
	                              	 		'scancode_push' => 'Scancode_push',
	                              	 		'pic_sysphoto' => 'Pic_sysphoto',
	                              	 		'pic_photo_or_album' => 'Pic_photo_or_album',
	                              	 		'pic_weixin' => 'Pic_weixin',
	                              	 		'location_select' => 'Location_select',
	                              	 	),
	                              	 	array(
	                              	 		$menu->type
	                              	 	)
	                              	 	)}}
	                              </div>
	                           </div>
	                           <div class="control-group">
	                              <label class="control-label">关键字</label>
	                              <div class="controls">
	                              	<input type="text" class="span6  popovers" id="key" name="key" data-trigger="hover" value="{{$menu->key}}" data-content="关键字(关键字和URL任选其一)" data-original-title="提示" />
	                              	{{ $errors->first('description', '<span class="help-block">:message</span>') }}
	                              </div>
	                           </div>
	                           <div class="control-group">
	                              <label class="control-label">URL</label>
	                              <div class="controls">
	                              	<input type="text" class="span6  popovers" id="url" name="url" data-trigger="hover" value="{{$menu->url}}" data-content="URL(关键字和URL任选其一)" data-original-title="提示" />
	                              	{{ $errors->first('url', '<span class="help-block">:message</span>') }}
	                              </div>
	                           </div>
	                           <div class="control-group">
	                              <label class="control-label">菜单</label>
	                              <div class="controls">
	                                 <select id="parent_id" class="span6 " name="parent_id" data-placeholder="选择菜单" tabindex="1">
	                                    <option value="0">一级菜单</option>
	                                    @foreach($menus as $m)
	                                    	@if($m->id==$menu->parent_id)
	                                    	<option value="{{$m->id}}" selected="selected">{{$m->name}}</option>
	                                    	@else
	                                    	<option value="{{$m->id}}">{{$m->name}}</option>
	                                    	@endif
	                                    @endforeach
	                                 </select>
	                                 {{ $errors->first('parent_id', '<span class="help-block">:message</span>') }}
	                              </div>
	                           </div>
	                           <div class="form-actions">
	                              <button type="submit" id="btn-add-user" class="btn btn-success">确认添加</button>
	                              <button type="button" class="btn">取消</button>
	                           </div>
	                        {{Form::close()}}
	                        <!-- END FORM-->
	                     </div>
	                  </div>
	                  <!-- END SAMPLE FORM widget-->
	               </div>
	            </div>
					
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
