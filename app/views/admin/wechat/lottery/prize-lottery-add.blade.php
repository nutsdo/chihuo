@extends('layouts.main')
@section('style')
   {{ HTML::style('packages/admin/assets/bootstrap/css/bootstrap-fileupload.css') }}
   {{ HTML::style('packages/admin/assets/fancybox/source/jquery.fancybox.css') }}
   {{ HTML::style('packages/admin/assets/gritter/css/jquery.gritter.css') }}
   {{ HTML::style('packages/admin/assets/uniform/css/uniform.default.css') }}
   {{ HTML::style('packages/admin/assets/chosen-bootstrap/chosen/chosen.css') }}
   {{ HTML::style('packages/admin/assets/jquery-tags-input/jquery.tagsinput.css') }}
   {{ HTML::style('packages/admin/assets/clockface/css/clockface.css') }}  
   {{ HTML::style('packages/admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css') }}
   {{ HTML::style('packages/admin/assets/bootstrap-datepicker/css/datepicker.css') }}
   {{ HTML::style('packages/admin/assets/bootstrap-timepicker/compiled/timepicker.css') }}
   {{ HTML::style('packages/admin/assets/bootstrap-colorpicker/css/colorpicker.css') }}
   {{ HTML::style('packages/admin/assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css') }}
   {{ HTML::style('packages/admin/assets/data-tables/DT_bootstrap.css') }}
   {{ HTML::style('packages/admin/assets/bootstrap-daterangepicker/daterangepicker.css') }}
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
	                        <h4><i class="icon-reorder"></i>添加奖品(活动编号{{$id}})</h4>
	                        <span class="tools">
	                           <a href="javascript:;" class="icon-chevron-down"></a>
	                           <a href="javascript:;" class="icon-remove"></a>
	                        </span>
	                     </div>
	                     <div class="widget-body form">
	                        <!-- BEGIN FORM-->
	                        {{ Form::open(array(
	                        	'route' => 'prize-lottery-store',
	                        	'id' => 'addform',
	                        	'class' => 'form-horizontal', 
	                        	'role' => 'form',
	                        	'enctype' => 'multipart/form-data'
	                        	))
	                         }}
	                         {{Form::hidden('lottery_id',$id)}}
							   <div class="control-group">
	                              <label class="control-label">选择奖品</label>
	                              <div class="controls">
	                                 <select id="prize_id" class="span6 " name="prize_id" data-placeholder="Choose a Category" tabindex="1">
	                                    @foreach($prizes as $prize)
	                                    <option value="{{$prize->id}}">{{$prize->name}}</option>
	                                    @endforeach
	                                 </select>
	                              </div>
	                           </div>
	                           <div class="control-group">
	                              <label class="control-label">奖品中奖方式</label>
	                              <div class="controls">
	                                 <select id="type" class="span6 " name="type" data-placeholder="Choose a Category" tabindex="1">
	                                    <option value="0">概率中奖</option>
	                                 </select>
	                              </div>
	                           </div>
	                           <div class="control-group">
	                              <label class="control-label">中奖概率</label>
	                              <div class="controls">
	                                 <input type="text" class="span6 popovers" id="gailv" name="gailv" data-trigger="hover" data-content="请输入每日抽奖次数" data-original-title="提示" />
	                              </div>
	                           </div>
                               <div class="control-group">
	                              <label class="control-label">单日发放上限</label>
	                              <div class="controls">
	                                 <input type="text" class="span6 popovers" id="maxnum" name="maxnum" data-trigger="hover" data-content="请输入每日抽奖次数" data-original-title="提示" />
	                              </div>
	                           </div>
                               <div class="control-group">
	                              <label class="control-label">奖励数量</label>
	                              <div class="controls">
	                                 <input type="text" class="span6 popovers" id="jlnum" name="jlnum" data-trigger="hover" data-content="请输入每日抽奖次数" data-original-title="提示" />
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
@section('script1')
{{ HTML::script('packages/admin/assets/bootstrap/js/bootstrap-fileupload.js')}}
{{ HTML::script('packages/admin/js/jquery.blockui.js')}}
@stop
@section('script2')
   {{ HTML::script('packages/admin/assets/bootstrap/js/ajaxfileupload.js')}}
   {{ HTML::script('packages/admin/assets/chosen-bootstrap/chosen/chosen.jquery.min.js')}}
   {{ HTML::script('packages/admin/assets/uniform/jquery.uniform.min.js')}}
   {{ HTML::script('packages/admin/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}
   {{ HTML::script('packages/admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}
   {{ HTML::script('packages/admin/assets/clockface/js/clockface.js')}}
   {{ HTML::script('packages/admin/assets/jquery-tags-input/jquery.tagsinput.min.js')}}
   {{ HTML::script('packages/admin/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js')}}
   {{ HTML::script('packages/admin/assets/bootstrap-datepicker/js/bootstrap-datepicker.js')}}
   {{ HTML::script('packages/admin/assets/bootstrap-daterangepicker/date.js')}}   
   {{ HTML::script('packages/admin/assets/bootstrap-daterangepicker/daterangepicker.js')}}
   {{ HTML::script('packages/admin/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}
   {{ HTML::script('packages/admin/assets/bootstrap-timepicker/js/bootstrap-timepicker.js')}}  
   {{ HTML::script('packages/admin/assets/bootstrap-inputmask/bootstrap-inputmask.min.js')}}
   {{ HTML::script('packages/admin/assets/fancybox/source/jquery.fancybox.pack.js')}}
	<!-- 加载编辑器的容器 -->
	<!-- 配置文件 -->
	{{ HTML::script('packages/ueditor/ueditor.config.js')}}
	<!-- 编辑器源码文件 -->
	{{ HTML::script('packages/ueditor/ueditor.all.js')}}
	<!-- 实例化编辑器 -->
	<script type="text/javascript">
	    var ue = UE.getEditor('ueditor');
	</script>
	<script>
//     $( document ).ready( function( $ ) {
//         $( '#addform' ).on( 'submit', function() {
//     		$.ajaxFileUpload
//     		(     
//     			{
//     				url:$( this ).prop( 'action' ),
//     				secureuri:false,
//     				fileElementId:'cover',
//     				dataType: 'json',
//     				data:
//         			{
//                         "_token": $( this ).find( 'input[name=_token]' ).val(),
//                         "title": $( '#title' ).val(),
//                         "author": $( '#author' ).val(),
//                         "post_time": $( '#post_time' ).val(),
//                         "content":editorValue,
//                         "tags":$( '#tags_1' ).val()
//                     },
//                     success: function (data, status)
//     				{
//     					if(typeof(data.status) != 'fail')
//     					{
//     						if(data.status != '')
//     						{
//     							alert(data.msg);
//     						}else
//     						{
//     							alert(data.msg);
//     						}
//     					}
//     				}
    				
//     			}
    			
//     		)
//             //.....
//             //do anything else you might want to do
//             //.....
     
//             //prevent the form from actually submitting in browser
//             return false;
//         } );
//     } );			
</script>
@stop
