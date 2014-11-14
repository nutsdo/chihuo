
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:wb="http://open.weibo.com/wb">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=7">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="" name="keywords">
<meta content="" name="description">
{{HTML::style('packages/bootstrap3.3/dist/css/bootstrap.min.css')}}
{{HTML::style('packages/style/css/cover.css')}}
</head>
<body>
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">吃货小队</h3>
            </div>
          </div>

          <div class="inner cover">
			<div class="row">
			  <div class="col-lg-12">
			  {{ Form::open(array(
				   'route' => 'search_show',
				   'id' => 'search',
				   'role' => 'form',
			  ))}}
			    <div class="input-group">
			      {{Form::text('keywords','',array('class'=>"form-control",'placeholder'=>"请输入关键字"))}}	
			      <span class="input-group-btn">
			        {{Form::submit('搜索',array('class'=>'btn btn-default'))}}
			      </span>
			    </div>
			    {{Form::close()}}
			  </div>
			</div>
						
          </div>

          <div class="mastfoot navbar-fixed-bottom">
            <div class="inner">
              <p>工信部备案： 冀ICP备13015451号-1 ©2014  <a href="http://www.chihuo1408.com">吃货小队</a> 版权所有, by <a href="http://www.chihuo1408.com">@Mr.lv</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>
{{HTML::script('packages/bootstrap/js/jquery-1.8.3.min.js')}}
{{HTML::script('packages/bootstrap3.3/dist/js/bootstrap.min.js')}}
</body>
</html>