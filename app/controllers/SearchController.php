<?php

class SearchController extends BaseController {

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
		for($n=0;$n<count($keywords);$n++){
			$ks[$n] = '/'.$keywords[$n].'/';
			$kws[$n] = "<b style='color:red'>".$keywords[$n]."</b>";
		}

		$res = Post::whereRaw($where)->paginate(10);
		return View::make('template.default.search_show')->withRes($res)
														 ->withKs($ks)
														 ->withKws($kws);
	}
	
}
