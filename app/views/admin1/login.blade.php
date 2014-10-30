@extends('layouts.main')

@section('content')
{{ Form::open(array('action' => '\admin\AdminController@postLogin','class' => 'form-horizontal', 'role' => 'form')) }}
{{ Form::token() }}
	<div class="form-group">
      <div class="col-sm-offset-1 col-sm-3">
        <h1>请登录</h1>
      </div>
    </div>
	<div class="form-group">
	{{Form::label('username', '用户名', array('class' => 'col-sm-1 control-label'))}}
	  <div class="col-sm-3">
        <input type="text" class="form-control" id=="username" name="username" placeholder="请输入用户名" required autofocus>
        {{ $errors->first('username') }}
	  </div>
	</div>
	<div class="form-group">
	{{Form::label('password', '密码', array('class' => 'col-sm-1 control-label'))}}
	<div class="col-sm-3">
      <input type="password" class="form-control" id="password" name="password" placeholder="密码" required>

	  </div>
	</div>
	<div class="form-group">
	  <div class="col-sm-offset-1 col-sm-3">
	    <div class="checkbox">
	      <label>
	      {{ Form::checkbox('remember', '1') }} 记住密码
	      </label>
	    </div>
	  </div>
	</div>
	<div class="form-group">
      <div class="col-sm-offset-1 col-sm-1">
        <button type="submit" class="btn btn-lg btn-primary btn-block">登录</button>
      </div>
    </div>
{{ Form::close() }}
@stop