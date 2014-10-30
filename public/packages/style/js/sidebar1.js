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
});