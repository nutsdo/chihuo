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
	                        	'route' => 'user.create',
	                        	'id' => 'addform',
	                        	'class' => 'form-horizontal', 
	                        	'role' => 'form'
	                        	))
	                         }}
	                           <div class="control-group">
	                              <label class="control-label">用户名</label>
	                              <div class="controls">
	                                 <input type="text" class="span6 popovers" id="username" name="username" data-trigger="hover" data-content="请输入用户名，必须为英文、数字、下划线。" data-original-title="提示" />
	                              </div>
	                           </div>
	                           <div class="control-group">
	                              <label class="control-label">密码</label>
	                              <div class="controls">
	                                 <input type="password" class="span6  popovers" id="password" name="password" data-trigger="hover" data-content="请输入密码，6-16位。" data-original-title="提示" />
	                              </div>
	                           </div>
	                           <div class="control-group">
	                              <label class="control-label">确认密码</label>
	                              <div class="controls">
	                                 <input type="password" class="span6  popovers" id="password_confirmation" name="password_confirmation" data-trigger="hover" data-content="请务必与密码输入保持一致。" data-original-title="提示" />
	                              </div>
	                           </div>
	                           <div class="control-group">
	                              <label class="control-label">电子邮箱</label>
	                              <div class="controls">
	                                 <div class="input-prepend">
	                                    <span class="add-on">@</span><input id="email" type="email" name="email" placeholder="邮箱地址" />
	                                 </div>
	                              </div>
	                           </div>
	                           <div class="control-group">
	                              <label class="control-label">用户组</label>
	                              <div class="controls">
	                                 <select id="groupid" class="span6 " name="groupid" data-placeholder="Choose a Category" tabindex="1">
	                                 @foreach($groups as $group)
	                                    <option value="{{$group->id}}">{{$group->name}}</option>
	                                 @endforeach
	                                 </select>
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
                    "username": $( '#username' ).val(),
                    "password": $( '#password' ).val(),
                    "password_confirmation": $( '#password_confirmation' ).val(),
                    "email":$( '#email' ).val(),
                    "groupid":$( '#groupid' ).val(),
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
