<?php
/** 
 * @function：TestController.php
 * @description：
 * @date：2014-12-1
 * @author：by Administrator
 * @interpreter
 * @param 
 * @param 
 */ 

class WechatController extends BaseController{
	public function __construct()
	{
		$this->beforeFilter('weixin', array('on' => 'get|post'));
	}	
	public function index()
	{
		return Input::get('echostr');
	}
	public function store(){
		$message = file_get_contents('php://input');
    	$message = simplexml_load_string($message, 'SimpleXMLElement', LIBXML_NOCDATA);
    	
    	$type='text';
    	$content='欢迎关注吃货小队';
    	
    	//查询数据库，匹配关键字
    	$keyword = $message->Content;
    	$tags = Tag::where('name','=',$keyword)->first();
    	if(empty($tags)){
    		$type=='text';
    		$content = '请输入精准的关键字^ ^';
    		return View::make('weixin.index')->with('message',$message)
    										 ->with('content',$content)
    										 ->with('type',$type);
    	}else{
    		$posts = Tag::find($tags->tag_id)->posts;
    		if(!empty($posts)){
    			$type=="news";
    			$count = count($posts);
    			return View::make('weixin.news')->with('posts', $posts)
									    			->with('message',$message)
									    			->with('count',$count)
    												->with('type',$type);
    		}else {
    			$type=='text';
    			$content = '请输入精准的关键字^ ^';
    			return View::make('weixin.index')->with('message',$message)
    												->with('content',$content)
    												->with('type',$type);
    		}
    	}
	}
}