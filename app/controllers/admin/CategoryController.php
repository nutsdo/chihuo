<?php namespace admin;
use View;
use Input;
use Categorize;
use Response;
use Session;
use Validator;
use Redirect;
use Category;
class CategoryController extends \Controller{
	
	public function index(){
		$cates = Category::all();
		return View::make('admin.category_index')->withCates($cates);
	}
	
	public function create(){
		$categories = Categorize::getCategoryProvider()->root()->get();
		//print_r($categories);
		//print_r(Categorize::tree($categories)->toArray());
		$cates = $this->showTree(Categorize::tree($categories)->toArray(),'--');
		return View::make('admin.category_create')->withCates($cates);
	}
	
	public function store(){
		$inputs = Input::all();
		//数据验证
		$rules = array(
					'title'=>'required|between:2,16',
					'type'=>'required|between:4,16',
					'description'=>'required|between:4,16',
					'category_parent_id'=>'required|alpha_num',
		);
		//check if its our form
		if ( Session::token() !== Input::get( '_token' ) ) {
			return Response::json( array(
					'msg' => 'Unauthorized attempt to create setting'
			) );
		}
		$validator = Validator::make($inputs, $rules);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		
		//store
		$categorize = Categorize::prepare(array(
				'type'        => $inputs['type'],
				'title'       => $inputs['title'],
				'description' => $inputs['description']
		));
		if($inputs['category_parent_id']==0){
			$categorize->makeRoot();
		}else {
			$parent = Categorize::getCategoryProvider()->findById($inputs['category_parent_id']);
			$categorize->makeChildOf($parent);
		}
		$response = array(
			'status' => 'success',
			'msg' => '添加成功！',
		);
		return Response::json( $response );
	}
	
	public function showTree($data,$prefix = ''){
		$res = '';
	    foreach ($data as $k => $v) {
	        $res .= "<option value='".$v['id']."'>".$prefix.$v['title']."</option>'";
	        if (count($v['children']) > 0) {
	            $this->showTree($v['children'], $prefix.'--');
	        }
	    }
	    return $res;
	}
}