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
	                        	'route' => 'category.store',
	                        	'id' => 'addform',
	                        	'class' => 'form-horizontal', 
	                        	'role' => 'form'
	                        	))
	                         }}
	                           <div class="control-group">
	                              <label class="control-label">分类名称</label>
	                              <div class="controls">
	                                 <input type="text" class="span6 popovers" id="title" name="title" data-trigger="hover" data-content="请输入分类名称。" data-original-title="提示" />
	                              	 {{ $errors->first('title', '<span class="help-block">:message</span>') }}
	                              </div>
	                           </div>
	                           <div class="control-group">
	                              <label class="control-label">类型</label>
	                              <div class="controls">
	                              	 <input id="type" type="text" name="type" placeholder="类型" />
	                              	 {{ $errors->first('type', '<span class="help-block">:message</span>') }}
	                              </div>
	                           </div>
	                           <div class="control-group">
	                              <label class="control-label">描述</label>
	                              <div class="controls">
	                              	<input type="text" class="span6  popovers" id="description" name="description" data-trigger="hover" data-content="分类描述" data-original-title="提示" />
	                              	{{ $errors->first('description', '<span class="help-block">:message</span>') }}
	                              </div>
	                           </div>
	                           <div class="control-group">
	                              <label class="control-label">上级分类</label>
	                              <div class="controls">
	                                 <select id="category_parent_id" class="span6 " name="category_parent_id" data-placeholder="Choose a Category" tabindex="1">
	                                    <option value="0">顶级分类</option>
	                                    {{$cates}}
	                                 </select>
	                                 {{ $errors->first('category_parent_id', '<span class="help-block">:message</span>') }}
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
<script>		
    $( document ).ready( function( $ ) {
        $( '#addform' ).on( 'submit', function() {
            //.....
            //show some spinner etc to indicate operation in progress
            //.....

            $.post(
                $( this ).prop( 'action' ),
                {
                    "_token": $( this ).find( 'input[name=_token]' ).val(),
                    "title": $( '#title' ).val(),
                    "type": $( '#type' ).val(),
                    "description": $( '#description' ).val(),
                    "category_parent_id":$( '#category_parent_id' ).val(),
                },
                function(data,status) {
                    //do something with data/response returned by server
                    alert(data.status);
                    alert(data.msg);
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
