<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>石家庄吃货小队</title>
  {{HTML::style('packages/merchant/css/idangerous.swiper.css')}}
  {{HTML::style('packages/merchant/assets/css/amazeui.min.css')}}
  {{HTML::style('packages/merchant/assets/css/app.css')}}
  {{HTML::style('packages/merchant/assets/css/index-list.css')}}
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
<meta name="Keywords" content="石家庄，石家庄吃货小队，吃货小队，吃货，小队" />
<meta name="description" content="石家庄吃货小队优质商家推荐，石家庄，石家庄吃货小队，吃货小队，吃货，小队" />
<style>
html{height:100%}
body {
    height:100%;
	margin: 0;
	position: relative;
	height: 100%;
	box-shadow: 0px 0px 100px #000 inset;
}
.preloader {
	position: absolute;
	left: 0;
	top: 50px;
	z-index: 0;
	color: #FFF;
	text-align:center;
	height: 30px;
	width: 100%;
	opacity: 0;
	font-size:1em;
	-webkit-transition: 300ms;
	-moz-transition: 300ms;
	-ms-transition: 300ms;
	-o-transition: 300ms;
	transition: 300ms;
}
.preloader.visible {
	top: 1.8em;
	opacity: 1;
}
.swiper-container {
	width: 100%;
	height: 100%;
	color: #fff;
	text-align: center;
	position: relative;
	z-index: 10;
}
.swiper-slide {
	height:auto;
	width: 100%;
	padding-bottom:5px;
	opacity: 0.2;
	-webkit-transition: 300ms;
	-moz-transition: 300ms;
	-ms-transition: 300ms;
	-o-transition: 300ms;
	transition: 300ms;
}
.swiper-slide-visible {
	opacity: 1;
}
.swiper-slide .title {
	font-size: 0.8em;
}
.title img{width:100%}
.top{ width:100%; height:auto; background:#F00; margin-bottom:5px;}
</style>
</head>
<body onload='_system._guide(true)'>
<div class="top">热门美食</div>
<div class="preloader">加载中</div>
<div class="swiper-container am-g am-g-fixed">
  <ul data-am-widget="gallery" class="am-avg-sm-1 am-avg-md-1 am-avg-lg-1 am-gallery-overlay swiper-wrapper">
    @foreach($merchants as $m)
    <li class="swiper-slide red-slide">
      <div class="title">
		<div class="am-gallery-item">
		  <a href="{{$m->url}}" class="">
			{{HTML::image($m->cover)}}
			<span class="name">{{$m->title}}</span>
			<span class="content">{{$m->name}}</span>
		  </a>
		</div>
	  </div>
    </li>
    @endforeach
  </ul>
</div>
{{HTML::script('packages/merchant/js/jquery-1.10.1.min.js')}}
{{HTML::script('packages/merchant/js/idangerous.swiper.min.js')}}
<script>
  var holdPosition = 0;
  var mySwiper = new Swiper('.swiper-container',{
    slidesPerView:'auto',
    mode:'vertical',
    watchActiveIndex: true,
    mousewheelControl : true,
    onTouchStart: function() {
      holdPosition = 0;
    },
    onResistanceBefore: function(s, pos){
      holdPosition = pos;
    },
    onTouchEnd: function(){
//      if (holdPosition>100) {
//        mySwiper.setWrapperTranslate(0,30,0)
//        mySwiper.params.onlyExternal=true
//        $('.preloader').addClass('visible');
//        loadNewSlides();
//      }
    }
  })
  var slideNumber = 0;
//  function loadNewSlides(){
//	var list =  '<div class="title">'+
//				'<div class="am-gallery-item">'+
//				  '<a href="#" class="">'+
//					'{{HTML::image("packages/merchant/img/tu.jpg")}}'+
//					'<span class="name">远方 有一个地方我们的梦想</span>'+
//					'<span class="content">我们的梦想</span>'+
//				  '</a>'+
//				'</div>'+
//			  '</div>';
//    setTimeout(function(){
//      //Prepend new slide
//      var colors = ['red','blue','green','orange','pink'];
//      var color = colors[Math.floor(Math.random()*colors.length)];
//      mySwiper.prependSlide(list, 'swiper-slide '+color+'-slide');
//      //Release interactions and set wrapper
//      mySwiper.setWrapperTranslate(0,0,0)
//      mySwiper.params.onlyExternal=false;
//      //Update active slide
//      mySwiper.updateActiveSlide(0)
//      //Hide loader
//      $('.preloader').removeClass('visible');
//    },1000)
//    slideNumber++;
//  }
  </script>

{{HTML::script('packages/merchant/assets/js/jquery.min.js')}}
{{HTML::script('packages/merchant/assets/js/amazeui.min.js')}}
<script>
    var _hmt = _hmt || [];
    (function() {
     var hm = document.createElement("script");
     hm.src = "//hm.baidu.com/hm.js?2abbea738c9249f6a7e118828e4bbd36";
     var s = document.getElementsByTagName("script")[0];
     s.parentNode.insertBefore(hm, s);
     })();
</script>
</body>
</html>