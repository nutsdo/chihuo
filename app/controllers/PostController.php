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
	
	public function showtag(){

		$keywords = 'fads';
    	$tags = Tag::where('name','=',$keywords)->first();   	
    	if(empty($tags)){
    		$content = '请输入精准的关键字^ ^';
    		return View::make('weixin.index')->with('message',$message)
    											 ->with('content',$content);
    	}else{
    		$posts = Tag::find($tags->tag_id)->posts;
    		if(!empty($posts)){
    			$count = count($posts);
    			return View::make('weixin.index')->with('posts', $posts)
	    									 ->with('message',$message)
	    									 ->with('count',$count);
    		}else {
    			$content = '请输入精准的关键字^ ^';
    			return View::make('weixin.index')->with('message',$message)
    											 ->with('content',$content);
    		}
    	}
	}

}