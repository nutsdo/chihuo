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
	//自定义回复
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
	
	/*
	 * 自定义菜单
	 * */
	
	/*
	 * 查询自定义菜单
	 * */
	public function getMenu(){
		
	}
	
	/*
	 * 创建自定义菜单
	 * */
	public function postMenu(){
		$access_token = $this->getAccessToken();
		$json = '{
			"button":[
			{
				"type":"click",
				"name":"今日歌曲",
				"key":"V1001_TODAY_MUSIC"
			},
			{
				"type":"click",
				"name":"歌手简介",
				"key":"V1001_TODAY_SINGER"
			},
			{
				"name":"菜单",
			"sub_button":[
			{
				"type":"view",
				"name":"搜索",
				"url":"http://www.soso.com/"
			},
			{
				"type":"view",
				"name":"视频",
				"url":"http://v.qq.com/"
			},
			{
				"type":"click",
				"name":"赞一下我们",
				"key":"V1001_GOOD"
			}]
			}]
		}';
		
		$url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$access_token;
		$result = https_request($url, $json);
		return $result;
		
	}
	/*
	 * 删除自定义菜单
	* */
	
	public function postDestroy(){
		
	}
	
	/*
	 * 获取access_token
	 * */
	
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
	
	function https_request($url,$data = null){
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
		if (!empty($data)){
			curl_setopt($curl, CURLOPT_POST, 1);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		}
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($curl);
		curl_close($curl);
		return $output;
	}
}