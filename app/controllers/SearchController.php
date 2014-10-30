<?php

class SearchController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('template.default.search');
	}
	
	public function show(){
		$keywords = Input::get('keywords');
		if ($keywords=='') {
			Redirect::to('search.index');
		}
		$keywords = explode(' ',$keywords);
		$where = '';
		foreach ($keywords as $key=>$kw){
			if ($key==0) {
				$where .= ' title LIKE "%'.$kw.'%" OR content LIKE "%'.$kw.'%"';
			}else {
				$where .= ' OR title LIKE "%'.$kw.'%" OR content LIKE "%'.$kw.'%"';
			}		
		}
		$res = Post::whereRaw($where)->paginate(10);
		return View::make('template.default.search_show')->withRes($res);
	}
	
}
