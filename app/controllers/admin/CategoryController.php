<?php namespace admin;
use View;
use Input;
use Group;
use Sentry;
use Config;
use Category;
class CategoryController extends \Controller{
	
	public function index(){
		$cates = Category::all();
		return View::make('admin.category_index')->withCates($cates);
	}
	
	public function create(){
		
		return View::make('admin.category_create');
	}
	
	public function store(){
		
	}
	
	public function addNode($data,$parent_id,$level){
		$node = array();
	}
}