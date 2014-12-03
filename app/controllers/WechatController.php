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
use Api\weixin\Weixin;
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
    	
    	//查询数据库，匹配关键字
    	$keywords = $message->content;
    	$tags = Tag::where('name','=',$keywords)->first();
    	$posts = Tag::find($tags->tag_id)->posts;
    	$count = count($posts);
    	return View::make('weixin.index')->with('posts', $posts)
    									 ->with('message',$message)
    									 ->with('count',$count);
	}	
}