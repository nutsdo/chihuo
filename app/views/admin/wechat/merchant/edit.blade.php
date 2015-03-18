@extends('layouts.main') 
@section('style') 
{{HTML::style('packages/admin/assets/bootstrap/css/bootstrap-fileupload.css')}}
{{HTML::style('packages/admin/assets/fancybox/source/jquery.fancybox.css')}} 
{{HTML::style('packages/admin/assets/gritter/css/jquery.gritter.css') }}
{{HTML::style('packages/admin/assets/uniform/css/uniform.default.css')}} 
{{HTML::style('packages/admin/assets/chosen-bootstrap/chosen/chosen.css')}} 
{{HTML::style('packages/admin/assets/jquery-tags-input/jquery.tagsinput.css')}} 
{{HTML::style('packages/admin/assets/clockface/css/clockface.css')}} 
{{HTML::style('packages/admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}} 
{{HTML::style('packages/admin/assets/bootstrap-datepicker/css/datepicker.css')}} 
{{HTML::style('packages/admin/assets/bootstrap-timepicker/compiled/timepicker.css')}} 
{{HTML::style('packages/admin/assets/bootstrap-colorpicker/css/colorpicker.css')}}
{{HTML::style('packages/admin/assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css')}}
{{HTML::style('packages/admin/assets/data-tables/DT_bootstrap.css')}} 
{{HTML::style('packages/admin/assets/bootstrap-daterangepicker/daterangepicker.css')}} 
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
					<i class="icon-cogs"></i> <span class="settings"> <span
						class="text">Theme:</span> <span class="colors"> <span
							class="color-default" data-style="default"></span> <span
							class="color-gray" data-style="gray"></span> <span
							class="color-purple" data-style="purple"></span> <span
							class="color-navy-blue" data-style="navy-blue"></span>
					</span>
					</span>
				</div>
				<!-- END THEME CUSTOMIZER-->
				<!-- BEGIN PAGE TITLE & BREADCRUMB-->
				<h3 class="page-title">
					仪表盘 <small> 基本信息 </small>
				</h3>
				<ul class="breadcrumb">
					<li><a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
					</li>
					<li><a href="#">吃货小队</a> <span class="divider">&nbsp;</span></li>
					<li><a href="#">仪表盘</a><span class="divider-last">&nbsp;</span></li>
					<li class="pull-right search-wrap">
						<form class="hidden-phone">
							<div class="search-input-area">
								<input id=" " class="search-query" type="text"
									placeholder="Search"> <i class="icon-search"></i>
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
						<h4>
							<i class="icon-reorder"></i>商家信息修改
						</h4>
						<span class="tools"> <a href="javascript:;"
							class="icon-chevron-down"></a> <a href="javascript:;"
							class="icon-remove"></a>
						</span>
					</div>
					<div class="widget-body form">
						<!-- BEGIN FORM-->
						{{ Form::open(array( 'route' => 'merchant-update', 'id' => 'addform',
						'class' => 'form-horizontal', 'role' => 'form', 'enctype' =>
						'multipart/form-data' )) }}
						{{Form::hidden('id',$merchant->id)}}
                        <div class="control-group @if($errors->first('name')) error @endif">
                            <label class="control-label">商家名称</label>
                            <div class="controls">
                                <input type="text" class="span6 popovers" id="name" name="name" value="{{$merchant->name}}" data-trigger="hover" data-content="请输入文章标题" data-original-title="提示" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">标题</label>
                            <div class="controls">
                                <input type="text" class="span6  popovers" id="title" name="title" value="{{$merchant->title}}" data-trigger="hover" data-content="请输入文章作者" data-original-title="提示" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">封面</label>
                            <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        {{HTML::image($merchant->cover)}}
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file"><span class="fileupload-new">选择图片</span>
                                            <span class="fileupload-exists">选择</span>
                                            <input type="file" class="default" id="cover" name="cover" /></span>
                                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">移除</a>
                                    </div>
                                </div>
                                <span class="label label-important">NOTE!</span>
                                <span>
		                                 	附件图片只支持最新版本的Firefox、Chrome、Opera、Safari和IE10以上版本。
                                </span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">微信链接</label>
                            <div class="controls">
                                <input type="text" class="span6  popovers" id="url" name="url" value="{{$merchant->url}}" data-trigger="hover" data-content="请输入微信文章链接" data-original-title="提示" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">排序</label>
                            <div class="controls">
                                <input type="text" class="span6  popovers" id="sort" name="sort" value="{{$merchant->sort}}" data-trigger="hover" data-content="p排序" data-original-title="提示"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">置顶</label>
                            <div class="controls">
                                <label class="radio">
                                    <div class="radio" id="uniform-undefined">
                                        <span class="checked"><input type="radio" name="is_top" @if($merchant->is_top==0) checked="" @endif value="1" style="opacity: 0;"></span>
                                    </div>是
                                </label>
                                <label class="radio">
                                    <div class="radio" id="uniform-undefined">
                                        <span class=""><input type="radio" name="is_top" value="0" @if($merchant->is_top==0) checked="" @endif style="opacity: 0;"></span>
                                    </div>否
                                </label>
                            </div>
                        </div>
                        <div class="form-actions">
							<button type="submit" id="btn-add-user" class="btn btn-success">更新修改</button>
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
{{HTML::script('packages/admin/assets/bootstrap/js/bootstrap-fileupload.js')}}
{{HTML::script('packages/admin/js/jquery.blockui.js')}} 
@stop
@section('script2') 
{{HTML::script('packages/admin/assets/bootstrap/js/ajaxfileupload.js')}}
{{HTML::script('packages/admin/assets/chosen-bootstrap/chosen/chosen.jquery.min.js')}}
{{HTML::script('packages/admin/assets/uniform/jquery.uniform.min.js')}}
{{HTML::script('packages/admin/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}
{{HTML::script('packages/admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}
{{HTML::script('packages/admin/assets/clockface/js/clockface.js')}}
{{HTML::script('packages/admin/assets/jquery-tags-input/jquery.tagsinput.min.js')}}
{{HTML::script('packages/admin/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js')}}
{{HTML::script('packages/admin/assets/bootstrap-datepicker/js/bootstrap-datepicker.js')}}
{{HTML::script('packages/admin/assets/bootstrap-daterangepicker/date.js')}}
{{HTML::script('packages/admin/assets/bootstrap-daterangepicker/daterangepicker.js')}}
{{HTML::script('packages/admin/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}
{{HTML::script('packages/admin/assets/bootstrap-timepicker/js/bootstrap-timepicker.js')}}
{{HTML::script('packages/admin/assets/bootstrap-inputmask/bootstrap-inputmask.min.js')}}
{{HTML::script('packages/admin/assets/fancybox/source/jquery.fancybox.pack.js')}}
<!-- 加载编辑器的容器 -->
<!-- 配置文件 -->
{{HTML::script('packages/ueditor/ueditor.config.js')}}
<!-- 编辑器源码文件 -->
{{HTML::script('packages/ueditor/ueditor.all.js')}}
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
