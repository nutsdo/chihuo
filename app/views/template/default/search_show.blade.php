<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:wb="http://open.weibo.com/wb">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=7">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="" name="keywords">
<meta content="" name="description">
{{HTML::style('packages/bootstrap3.3/dist/css/bootstrap.min.css')}}
{{HTML::style('packages/bootstrap3.3/docs/assets/css/docs.min.css')}}
{{HTML::style('packages/style/css/index.css')}}
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="http://www.chihuo1408.com">吃货小队</a>
    </div>

      <form class="navbar-form navbar-left" role="search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search">
          <span class="input-group-btn">
			  {{Form::submit('搜索',array('class'=>'btn btn-default'))}} 
		  </span>
        </div>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
@foreach($res as $r)
  <div class="bs-callout bs-callout-info">
    <a href="{{asset('post/'.$r->id)}}"><h4>{{preg_replace($ks,$kws,$r->title)}}</h4></a>
    <p>{{preg_replace($ks,$kws,summary($r->content,200))}}</p>
  </div>
@endforeach
</div>
<div class="footer navbar-fixed-bottom">
	<div class="center">
	工信部备案： 冀ICP备13015451号-1 ©2014 吃货小队 版权所有 <a href="" target="_blank">网站统计</a>
	</div>
</div>
{{HTML::script('packages/style/js/jquery-1.11.1.min.js')}}
{{HTML::script('packages/bootstrap3.3/dist/js/bootstrap.min.js')}}
</body>
</html>