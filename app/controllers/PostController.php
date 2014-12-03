<?php

class PostController extends BaseController{
	
	protected $layout = "layouts.chihuo";
	
	public function index(){
		//查询数据库
		$posts = Post::orderBy('id','DESC')->paginate(10);
		return View::make('template.default.index')->withPosts($posts);
	}

	public function show($id){	
		$post = Post::find($id);
		$views = $post->views+1;
		$post->views=$views;
		$post->save();
		$pre = Post::where('id','>',$id)->orderBy('id','DESC')->first();
		$next = Post::where('id','<',$id)->orderBy('id','ACE')->first();

		return View::make('template.default.show')->withPost($post)
												->withPre($pre)
												->withNext($next);
	}

}