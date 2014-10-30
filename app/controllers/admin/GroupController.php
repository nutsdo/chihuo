<?php namespace admin;
use View;
use Input;
use Group;
use Sentry;
use Config;
class GroupController extends \Controller{
	
	public function index(){

		$groups = Group::all();
		return View::make('admin.group_index')->withGroups($groups);
	}
	
	public function add(){
		
		$permission = Config::get('permission');
		return View::make('admin.group_add')->withPermission($permission);
	}
	public function create(){
		$input = Input::all();
		$input = array_except($input,array('_token','to','remove'));
		Sentry::createGroup(array(
			'name' => $input['groupname'],
			'permissions' => $input['permissions'],
		));
	}
	
	public function edit($id){
		//用户组权限
		$group = Sentry::findGroupById($id);
		//所有权限
		$permission = Config::get('permission');
		return View::make('admin.group_edit')->withGroup($group)
											 ->withPermission($permission);
	}
	
	public function update(){
		$input = Input::all();
		// Find the group using the group id
		$group = Sentry::findGroupById($input['group_id']);
		// Update the group details
		$input = array_except($input,array('_token','to','remove'));
		$group->name = $input['groupname'];
		$group->permissions = $input['permissions'];
		if ($group->save()) {
			return Redirect::to('admin/group/index');
		}
	}
	
	public function delete($id){
		// Find the group using the group id
		$group = Sentry::findGroupById($id);
		
		// Delete the group
		$group->delete();
		return Redirect::to('admin/group/index');
	}
}