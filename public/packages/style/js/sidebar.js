var jq = jQuery.noConflict();
jq(function (){
	jq(window).scroll(function(){
		ttop = jq(document).scrollTop();
		if (ttop > 100){
			jq('#sidebar').css('display','block');
		}else {
			jq('#sidebar').css('display','block');
		}

	});
	
	jq("#sidebar .t_1").click(function(){
		jq('body,html').animate({scrollTop:0},1000);
		return false;
	});
	
//	jq(function(){
//		jq(document).scroll(function(){
//			//如果滚动条到了某一个地方我可以弹框
//			var wh=jq(window).height();
//			var dh=jq(document).height();
//			var th=jq(document).scrollTop();
//			if(dh-(wh+th)<20){
//			jq('body').append('<p>11</p><p>22</p><p>33</p><p>44</p><p>55</p><p>66</p><p>77</p><p>88</p><p>99</p><p>10</p><p>11</p><p>12</p><p>13</p><p>14</p><p>15</p><p>16</p>');
//					}
//				});
//			});
//			
	//jq(document).ready(function(){
	//		jq('#qq a').click(function()
	//		{
	//			alert("sdfsadfs>");
	//		}
	//			);
	//	});	
			
});