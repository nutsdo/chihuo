<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:wb="http://open.weibo.com/wb">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=7">
<meta name="viewport" content="width=device-width, initial-scale=1.0,target-densitydpi=device-dpi">
@yield('title')
<meta content="" name="keywords">
<meta content="" name="description">
{{HTML::style('packages/style/css/index.css')}}
{{HTML::script('packages/style/js/jquery-1.7.2.min.js')}}
{{HTML::script('packages/style/js/sidebar.js')}}
{{HTML::script('http://tjs.sjs.sinajs.cn/open/api/js/wb.js')}}
</head>
<body>
<!---->
<div class="top">
<div class="topbar">
<div class="center">
<div class="right"><wb:follow-button uid="5235985683" type="red_2" width="136" height="24" >加关注</wb:follow-button></div>
<div class="clear"></div>
<div class="logo">
<a href="{{asset('')}}">{{HTML::image('packages/style/images/xd_logo.png',null,array('width'=>'160','height'=>'119'))}}</a>
</div>
<div class="cen_logo">
{{HTML::image('packages/style/images/LOGOPNG.png',null,array('width'=>'1010','height'=>'52'))}}
</div>
</div>
</div>
</div>

<div class="center">

@yield('page')
<div class="clear"></div>
</div>
</div>
<!--页脚-->
<div class="footer">
<div class="center">
工信部备案： 冀ICP备13015451号-1 ©2014 吃货小队 版权所有 <a href="" target="_blank">网站统计</a>
</div>
</div>
<div class="fixed_right">
<!--返回顶部-->
<script src="./js/sidebar1.js" type="text/javascript" type="text/javascript"></script>
<div id="sidebar"><a class="t_1">返回顶部</a></div>
<!--qq客服-->
<div id="qq"><a class="t_1" onclick="showid('smallLay');"></a></div>
<!--分享-->
<div id="share"></div>
</div>
<div id="smallLay" style="display:none;">芯晴网页特效丨CsrCode.Cn 欢迎您的光临！</div>
<script>
$(function (){
  $(window).scroll(function(){
                   fortop = $(document).scrollTop();
                   stop = 1200;
                   if (fortop > stop){
                   $('#fixpar').addClass('fixxd');
                   }else if (fortop <= stop){
                   $('#fixpar').removeClass('fixxd');
                   }
                   });
  });
</script>
<script type="text/javascript">
function showid(idname){
    var isIE = (document.all) ? true : false;
    var isIE6 = isIE && ([/MSIE (\d)\.0/i.exec(navigator.userAgent)][0][1] == 6);
    var newbox=document.getElementById(idname);
    newbox.style.zIndex="9999";
    newbox.style.display="block"
    newbox.style.position = !isIE6 ? "fixed" : "absolute";
    newbox.style.top =newbox.style.left = "50%";
    newbox.style.marginTop = - newbox.offsetHeight / 2 + "px";
    newbox.style.marginLeft = - newbox.offsetWidth / 2 + "px";
    var layer=document.createElement("div");
    layer.id="layer";
    layer.style.width=layer.style.height="100%";
    layer.style.position= !isIE6 ? "fixed" : "absolute";
    layer.style.top=layer.style.left=0;
    <!--layer.style.backgroundColor="#EFEFEF";-->
    <!--layer.style.opacity="0.6";-->
    layer.style.zIndex="9998";
    document.body.appendChild(layer);
    var sel=document.getElementsByTagName("select");
    for(var i=0;i<sel.length;i++){
        sel[i].style.visibility="hidden";
    }
    function layer_iestyle(){
        layer.style.width=Math.max(document.documentElement.scrollWidth, document.documentElement.clientWidth)
        + "px";
        layer.style.height= Math.max(document.documentElement.scrollHeight, document.documentElement.clientHeight) +
        "px";
    }
    function newbox_iestyle(){
        newbox.style.marginTop = document.documentElement.scrollTop - newbox.offsetHeight / 2 + "px";
        newbox.style.marginLeft = document.documentElement.scrollLeft - newbox.offsetWidth / 2 + "px";
    }
    if(isIE){layer.style.filter ="alpha(opacity=60)";}
    if(isIE6){
        layer_iestyle()
        newbox_iestyle();
        window.attachEvent("onscroll",function(){
                           newbox_iestyle();
                           })
        window.attachEvent("onresize",layer_iestyle)
    }
    layer.onclick=function(){newbox.style.display="none";layer.style.display="none";for(var i=0;i<sel.length;i++){
        sel[i].style.visibility="visible";
    }}
}

</script>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F94ccdbb89d6de952b1e7eff952dfcde6' type='text/javascript'%3E%3C/script%3E"));
</script>

</body>
</html>