@extends('layouts.main')

@section('content')
{{ Form::open(array('action' => '\admin\AdminController@postRegister','class' => 'form-horizontal', 'role' => 'form')) }}
{{ Form::token() }}
	<div class="form-group">
      <div class="col-sm-offset-1 col-sm-3">
        <h1>注册</h1>
      </div>
    </div>
	<div class="form-group">
	  <label for="username" class="col-sm-1 control-label">用户名</label>
	  <div class="col-sm-3">
        <input type="text" class="form-control" id=="username" name="username" placeholder="用户名" required autofocus>
	  </div>
	</div>
	<div class="form-group">
	  <label for="email" class="col-sm-1 control-label">邮箱</label>
	  <div class="col-sm-3">
        <input type="email" class="form-control" id=="email" name="email" placeholder="Email地址" required>
	  </div>
	</div>
	<div class="form-group">
	<label for="password" class="col-sm-1 control-label">密码</label>
	<div class="col-sm-3">
      <input type="password" class="form-control" id="password" name="password" placeholder="密码" required>
	  </div>
	</div>
	<div class="form-group">
	<label for="password_confirmation" class="col-sm-1 control-label">确认密码</label>
	<div class="col-sm-3">
      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="确认密码" required>
	  </div>
	</div>
	<div class="form-group">
	  <label for="captcha" class="col-sm-1 control-label">验证码</label>
	  <div class="col-sm-1">
        <input type="text" class="form-control" id="captcha" name="captcha" placeholder="验证码" required>
	  </div>
	  <div class="col-sm-1">
        <input type="text" class="form-control" id="captcha" placeholder="验证码" required>
	  </div>
	</div>
	<div class="form-group">
	  <div class="col-sm-offset-1 col-sm-3">
	    <div class="checkbox">
	      <label>
	        <input type="checkbox" value="1"> 服务条款
	      </label>
	    </div>
	  </div>
	</div>
	<div class="form-group">
      <div class="col-sm-offset-1 col-sm-1">
        <button type="submit" class="btn btn-lg btn-primary btn-block">注册</button>
      </div>
    </div>
  </form>
@stop