<?php namespace admin;
use View;
use Input;
use Validator;
use Hash;
use DB;
use Session;
use Response;
use User;
use Sentry;
class UserController extends \Controller{
	
	protected $layout = "layouts.main";
	
	public function index(){
		$users = Sentry::paginate(15);
		return View::make('admin.user_index')->withUsers($users);
	}
	
	public function add(){
		//遍历用户组
		$groups = Sentry::findAllGroups();
		return View::make('admin.user_add')->withGroups($groups);
	}
	
	public function edit($id){
		$user = Sentry::findUserById($id);
		$userGroups = $user->getGroups();
		foreach ($userGroups as $g ){
			$group = $g;
		}
		$groups = Sentry::findAllGroups();
		return View::make('admin.user_edit')->withGroup($group)->withUser($user)->withGroups($groups);
	}
	public function update($id){
		$user = Sentry::findUserById($id);
		$validator = Validator::make(
				array(
						'username'=>$username,
						'email'=>$email,
						'password'=>$password,
						'password_confirmation'=>$password_confirm,
				),
				array(
						'username'=>'required|between:5,16',
						'email'=>'required|email',
						'password'=>'required|between:5,16|confirmed',
						'password_confirmation'=>'required|between:5,16',
				)
		);
		if ($validator->fails())
		{
			$response = array(
					'status' => 'fail',
					'msg' => $validator->messages()->first(),
			);
		}else {
			//更新用户信息
			$user->username = $username;
			$user->email    = $email;
			$user->password = Hash::make($password);
			$user->activated= true;  //激活状态
			//查找用户组
			if ($user->save()) {
				$group = Sentry::findGroupById(Input::get('groupid'));
				foreach ($user->getGroups() as $group){
					$user->removeGroup($group);
				}
				$user->addGroup($group);
			}
		}
	}
	public function create(){

		//check if its our form
		if ( Session::token() !== Input::get( '_token' ) ) {
			return Response::json( array(
					'msg' => 'Unauthorized attempt to create setting'
			) );
		}
		
		$username = Input::get( 'username' );
		$password = Input::get( 'password' );
		$password_confirm = Input::get('password_confirmation');
		$email = Input::get('email');
		//.....
		//validate data
		//and then store it in DB
		//查询数据库
		$user = User::where('username','=',Input::get( 'username' ))->first();
		if(!$user){
			//$u = new User;
			$validator = Validator::make(
				array(
					'username'=>$username,
					'email'=>$email,
					'password'=>$password,
					'password_confirmation'=>$password_confirm,
				),
				array(
					'username'=>'required|between:5,16',
					'email'=>'required|email',
					'password'=>'required|between:5,16|confirmed',
					'password_confirmation'=>'required|between:5,16',
				)
			);
			if ($validator->fails())
			{
				$response = array(
					'status' => 'fail',
					'msg' => $validator->messages()->first(),
				);
			}else {
				//添加用户
				$u = Sentry::createUser(array(
						'username' => $username,
						'email'     => $email,
						'password'  => Hash::make($password),
						'activated' => true,  //激活状态
				));
				//查找用户组
				$group = Sentry::findGroupById(Input::get('groupid'));
				$u->addGroup($group);
				if ($u->id) {
					$response = array(
						'status' => 'success',
						'msg' => '添加成功！',
					);
				}
			}
		}else {
			$response = array(
					'status' => 'fail',
					'msg' => '用户已存在',
			);
		}
		return Response::json( $response );
	}
	
	public function delete($id){
		$user = User::find($id);
		$user->delete();
		return Redirect::to('admin/user');
	}
}