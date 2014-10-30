<?php namespace admin;
use \View;
use \Input;
use \Auth;
use \Redirect;
use \Validator;
use \Hash;
use \Session;
use \DB;
use \Sentry;
use \Config;
class SessionController extends \Controller {
	protected $layout = "layouts.main";
	public function login(){
		if (Sentry::check()) {
			return Redirect::to('admin/index');
		}
		return View::make('admin.login');
	}
	
	public function doLogin(){
		//验证用户是否登陆
		if (Sentry::check()) {
			return Redirect::to('admin/index');
		}
		$username = Input::get('username');
		$password = Input::get('password');
		$remember = Input::get('remember')? true :false;
		//验证数据
		$validator = Validator::make(
			array(
				'username'=>$username,
				'password'=>$password,
			),
			array(
				'username'=>'required|between:5,16',
				'password'=>'required|between:5,16',
			)
		);
		
		if ($validator->fails())
		{
			return Redirect::to('admin/login')->withErrors($validator);
		}
		//验证用户
		// Login credentials
		try {
			$credentials = array(
					'username'    => $username,
					'password' => $password,
			);
			$user = Sentry::authenticate($credentials, $remember);
		}
		catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
		{
			echo 'Wrong Login Info, try again.';
		}
		if ($user)
		{
			Session::put('username',$username);
			return Redirect::to('admin/index');
		}
		else
		{
			return Redirect::intended('admin/login');
		}
	
	}
	
	public function getRegister(){
		return View::make('admin.register');
	}
	
	public function postRegister(){
		$input = Input::all();
		$validator = Validator::make(
			array(
				'username'=>$input['username'],
				'email'=>$input['email'],
				'password'=>Hash::make($input['password']),
				'password_confirmation'=>$input['password_confirmation'],
			),
			array(
				'username'=>'required|between:5,16',
				'email'=>'required|email',
				'password'=>'required|between:5,16|confirmed',
				'password_confirmation'=>'required|between:5,16',
			)
		);
		var_dump($input['username']);
		//查询数据库，判断用户名是否存在
		$user = DB::table('users')->where('username', $input['username'])->first();
		var_dump($user);
		return "这是注册";
	}
	
	public function logout(){
		Sentry::logout();
		return Redirect::intended('admin/login');
	}	
}