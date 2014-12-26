<!-- 头部 -->
<include file="Public/mobile_head"/>
@if($isend==false)
{{HTML::style('packages/admin/wechat/lottery/css/xydzp.css')}}
<body class="xydzp-end">
    <div class="main">
	    <div class="banner">
			    {{HTML::image('packages/admin/wechat/lottery/images/end.jpg')}}
		</div>
        <div class="content" style=" margin-top:10px">
            <div class="boxcontent">
                <div class="box">
                    <div class="title-red">活动结束说明：</div>
                    <div class="Detail">
                        <p> 亲，活动已经结束，请继续关注我们的后续活动哦。</p>
                    </div>
                </div>
    		 </div>
    		<div style="margin: 20px 10px 30px 10px;text-align:center;">
				<input type=button  value="查看中奖记录" onclick="javascript:;" style="color:#000000; background-color: #FEF8B2;width: 45%; font-size: larger;line-height: 30px; border:1px #5F88B7 solid; border-radius:4px;">
			</div>
		</div>
    </div>
	<FOOTER style="text-align: center; color: rgb(255, 216, 0); margin-right: 20px;">
				<p class="copyright">2014&copy;&nbsp;&nbsp;@石家庄吃货小队</p>
	</FOOTER>
</body>
@else

{{HTML::style('packages/admin/wechat/lottery/css/xydzp.css')}}
{{HTML::style('packages/admin/wechat/lottery/css/info.css')}}
<BODY class="xydzp-winning">
{{HTML::script('packages/style/js/jquery-1.11.1.min.js')}}
{{HTML::script('packages/admin/wechat/lottery/js/jQueryRotate.2.2.js')}}
{{HTML::script('packages/admin/wechat/lottery/js/jQueryRotate.2.2.js')}}	
{{HTML::script('packages/admin/wechat/lottery/js/jquery.easing.min.js')}}
{{HTML::script('packages/admin/wechat/lottery/js/init.js')}}
{{--	
{{HTML::script('packages/admin/wechat/lottery/js/initinfo.js')}}
--}}
			<script type="text/javascript">
			   var jplist={{$prizelist}};
			   var joinurl="{{route('lottery-join',$lottery->id)}}";
			   var posturl="{{route('lottery-award')}}";
			   var zpimg ="{{asset('packages/admin/wechat/lottery/images/zp.png')}}";
			</script>
			<DIV class="main">           
				<DIV id="outercont">
					<DIV id="outer-cont">					
						<DIV id="outer">
							<canvas id="wheelcanvas" width="227" height="227">
							</canvas>
						</DIV>
					</DIV>
					<DIV id="inner-cont">
						<DIV id="inner">
							{{HTML::image('packages/admin/wechat/lottery/images/start.png','',['id'=>'startbtn'])}}
						</DIV>
					</DIV>
				</DIV>
				<DIV class="content">
					<DIV class="boxcontent boxyellow" id="result" style="display: none;">
						<DIV class="box">
							<DIV class="title-orange">
								<SPAN>
									恭喜你中奖了
								</SPAN>
							</DIV>
							<DIV class="Detail">
								<P>
									你中了：
									<SPAN class="red" id="prizetype">
										感谢参与
									</SPAN>
								</P>
								<P style="display: none;">
									兑奖SN码：
									<SPAN class="red" id="sncode">
									</SPAN>
								</P>
								
								<P class="red" id="red">
									奖品已经关联您的微信号，你可向公众号发送【大转盘】进行查询!
								</P>
							</DIV>
						</DIV>
					</DIV>
					<DIV class="boxcontent boxyellow">
						<DIV class="box">
							<DIV class="title-orange">
								参与方法:
							</DIV>
							<DIV class="Detail">
								{{$lottery->rules}}
							</DIV>
						</DIV>
					</DIV>
					<DIV class="boxcontent boxyellow">
						<DIV class="box">
							<DIV class="title-orange">
								最新中奖:
							</DIV>
							<DIV class="Detail">
							   <table style="margin:0 auto;" class="table table-bordered">
									<tr>
										<th>昵称</th>
										<th>奖品</th>
										<th>中奖时间</th>
									</tr>
								<volist name="zjuserlist" id="jp">
									<tr>
										<td>您的昵称哟</td>
										<td>奖品哟</td>
										<td>中奖时间哟</td>
									</tr>
								</volist>
								</table>
							</DIV>
						</DIV>
					</DIV>
				</DIV>
				<DIV class="boxcontent boxyellow">
					<DIV class="box">
						<DIV class="title-green">
							<SPAN>
								奖项设置：
							</SPAN>
						</DIV>
						<DIV class="Detail" style="text-align:center;">
							<ul style="margin:0 auto;">
							@foreach($lottery->prize as $prize)
								<li style="float:left; margin:5px;">
								<div><img style="border:2px solid #FFF;" src="{{asset($prize->picurl)}}" width="82px" height="100px"/></div>
								<P>{{$prize->name}}</P>
								</li>
							@endforeach
							</ul>
							<div style="clear:both;"></div>
						</DIV>
					</DIV>
				</DIV>
			</DIV>
			<DIV class="boxcontent boxyellow">
				<DIV class="box">
					<DIV class="title-green">
						活动介绍：
					</DIV>
					<DIV class="Detail">
						<P>
							{{$lottery->description}}
						</P>
					</DIV>
				</DIV>
			</DIV>
			<DIV class="boxcontent boxyellow">
				<DIV class="box">
					<DIV class="title-green">
						活动说明：
					</DIV>
					<DIV class="Detail">
						<P class="red">
							本次活动每天可以转{{$lottery->numbers}}次!
							<br/>
							您还有
							<SPAN id="count">
								{{$row}}
							</SPAN>
							次机会.
						</P>
						<P class="green">
							活动时间:
							<br/>
							{{date('Y/m/d',$lottery->start_time)}}至{{date('Y/m/d',$lottery->end_time)}}
						</P>
						<P>
							欢迎参加幸运大转盘抽奖
							<BR>
							亲，需要绑定账号才可以参加哦
						</P>
					</DIV>
				</DIV>
				<div style="margin: 20px 10px 30px 10px;text-align:center;">
				<input type=button  value="查看我的中奖记录" onclick="location.href='{:U('zjinfo?id='.$xydzp_id)}'" style="color:#000000; background-color: #FEF8B2;width: 45%; font-size: larger;line-height: 30px; border:1px #5F88B7 solid; border-radius:4px;">
				</div>
			</DIV>
			<div id="dail2" style="width: 100%;font-size:20px;opacity: 1;color:#FFF; display: none;left:0px;top:0px;">
				<div style=" margin:0px auto;width:300px; margin-top:40pt;">
					<img src="{:ADDON_PUBLIC_PATH}/images/info_head.png" width="100%"/>
					<div class="p_10"> 
						<!-- 表单 -->          
						  <!-- 基础文档模型 -->
						  <div id="tab1" class="tab-pane">                   
							   <div class="form-item cf">
									<label class="item-label">昵称</label>
									<div class="controls">
									  <input type="text" class="text input-medium" name="truename" id="truename" value="" />
									 </div>
							   </div>                   
							   <div class="form-item cf">
									<label class="item-label">联系电话</label>
									<div class="controls">
									  <input type="text" class="text input-large" name="mobile" id="mobile" value="" />
									</div>
							   </div>
															 
							   <div class="form-item cf tb pt_10">
									 <input type="hidden" class="text input-large" name="id" value="{$_GET['id']}">
									<button class="home_btn submit-btn ajax-post mb_10 flex_1" id="btn_submit" type="button" target-form="form-horizontal">提  交</button>
							  </div>
						</div>           
					</div> 
				</div>
			</div>
			<audio id="playyy" src="{:ADDON_PUBLIC_PATH}/images/m.mp3" style="display:none;">
			</audio>
			<FOOTER style="text-align: center; color: rgb(255, 216, 0); margin-right: 20px;">
				<p class="copyright">2014&copy;&nbsp;&nbsp;@石家庄吃货小队</p>
			</FOOTER>				
</BODY>
@endif

</HTML>