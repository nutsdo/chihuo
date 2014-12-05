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

		$keywords = '石家庄';
    	$tags = Tag::where('name','=',$keywords)->first();   	
    	if(empty($tags)){
    		$content = '请输入精准的关键字^ ^';
    		return $content;
    	}else{
    		$posts = Tag::find($tags->tag_id)->posts;
    		if(!empty($posts)){
    			$count = count($posts);
    			return $keywords;
    		}else {
    			$content = '请输入精准的关键字^ ^';
    			return $content;
    		}
    	}
	}
	public function getAccessToken(){
		$appid = "wx89d3ce0065f95ea9";
		$appsecret = "8adda02b0a82e15a23ba3a5644bde8aa";
	
		$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";
	
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($ch);
		curl_close($ch);
		$jsoninfo = json_decode($output, true);
		$access_token = $jsoninfo["access_token"];
		echo $access_token;
	}
}