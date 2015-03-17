@extends('layouts.page')
<title>石家庄吃货小队</title>
@section('page')
    <div class="center_bg">
      <div class="cen_biao">
        {{Form::open(array(
            'route'=>'register.store',
            'id'=>'reg-form',
            'role'=>'form'
        ))}}
       	{{HTML::image('packages/style/images/zhuce_03.png')}}
       	<input type="text" name="name" id="username" class="username"/>
       	{{HTML::image('packages/style/images/zhuce_06.png')}}
        <input type="password" name="passwd" id="pwd" class="username"/>
       	{{HTML::image('packages/style/images/zhuce_08.png')}}
       	<input type="password" name="passwd2" id="pwd2" class="username"/>
       	{{HTML::image('packages/style/images/zhuce_10.png')}}
        <input type="text" name="email" id="email" class="username"/>
        <div class="inputcss">
            {{HTML::image('packages/style/images/zhuce_12.png')}}
            <input type="text" name="code" id="code" class="code"/>
        </div>
        <div class="yzm">
            {{HTML::image('packages/style/images/yanzheng.jpg')}}
        </div>
        <input type="submit" name="btnSubmit" id="btnsb" value="注册" class="login_btn" />
        {{Form::close()}}
      </div>
    </div>
@stop