<!DOCTYPE html>
<!--
Template Name: Admin Lab Dashboard build with Bootstrap v2.3.1
Template Version: 1.2
Author: Mosaddek Hossain
Website: http://thevectorlab.net/
-->

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
  <meta charset="utf-8" />
  <title>吃货小队后台登陆</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  {{ HTML::style('packages/admin/assets/bootstrap/css/bootstrap.min.css') }}
  {{ HTML::style('packages/admin/assets/font-awesome/css/font-awesome.css') }}
  {{ HTML::style('packages/admin/css/style.css') }}
  {{ HTML::style('packages/admin/css/style_responsive.css') }}
  {{ HTML::style('packages/admin/css/style_default.css') }}
  <link href="css/style_default.css" rel="stylesheet" id="style_color" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body id="login-body">
  <div class="login-header">
      <!-- BEGIN LOGO -->
      <div id="logo" class="center">
          <img src="../packages/admin/img/logo.png" alt="logo" class="center" />
      </div>
      <!-- END LOGO -->
  </div>

  <!-- BEGIN LOGIN -->
  <div id="login">
    <!-- BEGIN LOGIN FORM -->
    {{ Form::open(array('route' => 'admin.login','id' => 'loginform','class' => 'form-vertical no-padding no-margin', 'role' => 'form')) }}
      <div class="lock">
          <i class="icon-lock"></i>
      </div>
      <div class="control-wrap">
          <h4>管理员登录</h4>
          <div class="control-group">
              <div class="controls">
                  <div class="input-prepend">
                      <span class="add-on"><i class="icon-user"></i></span>
                      {{ Form::text('username','',array('id'=>'input-username','placeholder' => '用户名')) }}
                      {{ $errors->first('username', ':message') }}
                  </div>
              </div>
          </div>
          <div class="control-group">
              <div class="controls">
                  <div class="input-prepend">
                      <span class="add-on"><i class="icon-key"></i></span>
                      {{ Form::password('password',array('id'=>'input-password','placeholder' => '密码')) }}
                      {{ $errors->first('password', ':message') }}
                  </div>
                  <div class="mtop10">
                      <div class="block-hint pull-left small">
                      {{Form::checkbox('remember', 'remember', false)}} 记住密码
                      </div>
                      <div class="block-hint pull-right">
                          <a href="javascript:;" class="" id="forget-password">忘记密码?</a>
                      </div>
                  </div>
                  <div class="clearfix space5"></div>
              </div>

          </div>
      </div>
      <input type="submit" id="login-btn" class="btn btn-block login-btn" value="登录" />
    </form>
    <!-- END LOGIN FORM -->        
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form id="forgotform" class="form-vertical no-padding no-margin hide" action="index.html">
      <p class="center">Enter your e-mail address below to reset your password.</p>
      <div class="control-group">
        <div class="controls">
          <div class="input-prepend">
            <span class="add-on"><i class="icon-envelope"></i></span><input id="input-email" type="text" placeholder="Email"  />
          </div>
        </div>
        <div class="space20"></div>
      </div>
      <input type="button" id="forget-btn" class="btn btn-block login-btn" value="Submit" />
    </form>
    <!-- END FORGOT PASSWORD FORM -->
  </div>
  <!-- END LOGIN -->
  <!-- BEGIN COPYRIGHT -->
  <div id="login-copyright">
      2014 &copy; 吃货小队 仪表盘.
  </div>
  <!-- END COPYRIGHT -->
  <!-- BEGIN JAVASCRIPTS -->
  {{ HTML::script('packages/admin/js/jquery-1.8.3.min.js')}}
  {{ HTML::script('packages/admin/assets/bootstrap/js/bootstrap.min.js')}}
  {{ HTML::script('packages/admin/js/jquery.blockui.js')}}
  {{ HTML::script('packages/admin/js/scripts.js')}}
  <script>
    jQuery(document).ready(function() {     
      App.initLogin();
    });
  </script>
  <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>