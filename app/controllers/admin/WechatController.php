<?php
/** 
 * @function：WechatController.php
 * @description：
 * @date：2014-12-5
 * @author：by Administrator
 * @interpreter
 * @param 
 * @param 
 */ 
namespace admin;

use View;
use Input;
use Validator;
use Redirect;
use CustomMenu;
use Api\weixin\Weixin;
class WechatController extends \Controller{

	protected $layout = "layouts.main";
	
	public function menu(){

		$arr = CustomMenu::all();
		$menu = $this->showTree($arr);
		return View::make('admin.wechat.menu')->with('menu',$menu);
		
	}
	
	public function create(){
		$menu = CustomMenu::where('parent_id','=','0')->get();
		return View::make('admin.wechat.create')->with('menu',$menu);
	}
	
	//添加微信菜单
	public function store(){
		$validator = Validator::make(
			Input::except('_token'),
			array(
					'name'=>'required|between:1,21',
					'type'=>'required',
					'url'=>'required|url',
					'parent_id'=>'required|integer',
			)
		);
		
		if ($validator->fails())
		{
			return Redirect::to('admin/wechat/create')->withErrors($validator);
		}
		
		$menu = New CustomMenu();
		$menu->name = Input::get('name');
		$menu->type = Input::get('type');
		$menu->key = Input::get('key');
		$menu->url = Input::get('url');
		$menu->parent_id = Input::get('parent_id');
		$menu->save();
		if ($menu->id) {
			return Redirect::to('admin/wechat');
		}else {
			return Redirect::to('admin/wechat/create');
		}
	}
	//发送自定义菜单到微信服务器
	public function postMenu(){
		$arr = CustomMenu::all();
		$menu = $this->showTree2($arr);
		$jsonmenu = json_encode($menu,JSON_UNESCAPED_UNICODE);
		
		$wechat = new Weixin();
		$access_token = $wechat->getAccessToken();
		$url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$access_token;

		$result = $wechat->https_request($url,$jsonmenu);
		return $result;
	}
	
	public function edit($id){
		$menus = CustomMenu::where('parent_id','=','0')->get();
		
		$menu = CustomMenu::find($id);
		return View::make('admin.wechat.edit')->with('menus',$menus)
											->with('menu',$menu);
	}
	
	public function update(){
		$menu = CustomMenu::find(Input::get('id'));
		$validator = Validator::make(
				Input::except('_token'),
				array(
						'name'=>'required|between:1,21',
						'type'=>'required',
						'url'=>'required|url',
						'parent_id'=>'required|integer',
				)
		);
		
		if ($validator->fails())
		{
			return Redirect::to('admin/wechat/create')->withErrors($validator);
		}
		$menu->name = Input::get('name');
		$menu->type = Input::get('type');
		$menu->key = Input::get('key');
		$menu->url = Input::get('url');
		$menu->parent_id = Input::get('parent_id');
		$menu->save();
		if ($menu->id) {
			return Redirect::route('wechat.menu');
		}else {
			return Redirect::route('menu-edit');
		}
		
	}
	
	public function destroy($id){
		$menu = CustomMenu::find($id);
		$menu->delete();
		return Redirect::route(wechat.menu);
	}
		
	public function user(){
		
	}
	
	public function showTree($data,$parent_id=0){
		$res = '';
		foreach ($data as $k => $v) {
			if ($v['parent_id']==$parent_id) {
				$res[] = $v;
				$v['parent_id'] = $this->showTree($data, $v['id']);
			}
		}
		return $res;
	}
	public function showTree2($data,$parent_id=0){
		$res = '';
		foreach ($data as $k => $v) {
			if ($v['parent_id']==$parent_id) {
				if ($v['parent_id']==0) {
					$res['button'][] = $v;
					$v['sub_button'] = $this->showTree2($data, $v['id']);
				}else{
					$res[] = $v;
				}
			}
		}
		return $res;
	}
}