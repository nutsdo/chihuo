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
		//$this->beforeFilter('weixin', array('on' => 'get|post'));
	}

	public function index()
	{
		return Input::get('echostr');
	}
	//自定义回复
	public function store(){
		return $this->responseMsg();
// 		$message = file_get_contents('php://input');
//     	$message = simplexml_load_string($message, 'SimpleXMLElement', LIBXML_NOCDATA);
    	
//     	$type='text';
//     	$content='欢迎关注吃货小队';
    	
    	
    	//查询数据库，匹配关键字
//     	$keyword = $message->Content;
//     	$tags = Tag::where('name','=',$keyword)->first();
//     	if(empty($tags)){
//     		$type=='text';
//     		$content = '请输入精准的关键字^ ^';
//     		return View::make('weixin.index')->with('message',$message)
//     										 ->with('content',$content)
//     										 ->with('type',$type);
//     	}else{
//     		$posts = Tag::find($tags->tag_id)->posts;
//     		if(!empty($posts)){
//     			$type=="news";
//     			$count = count($posts);
//     			return View::make('weixin.news')->with('posts', $posts)
// 									    			->with('message',$message)
// 									    			->with('count',$count)
//     												->with('type',$type);
//     		}else {
//     			$type=='text';
//     			$content = '请输入精准的关键字^ ^';
//     			return View::make('weixin.index')->with('message',$message)
//     												->with('content',$content)
//     												->with('type',$type);
//     		}
//     	}
	}
	
	//响应消息
	public function responseMsg(){
		$postMsg = file_get_contents('php://input');
		if (!empty($postMsg)) {
			$message = simplexml_load_string($postMsg, 'SimpleXMLElement', LIBXML_NOCDATA);
			return View::make('weixin.index')->with('message', $message);
//			$msgType = trim($message->MsgType);
			
// 			switch ($msgType){
// 				case "event":
// 					$result = $this->receiveEvent($message);
// 					break;
			
// 				case "text":
// 					$result = $this->receiveText($message);
// 					break;
						
// 				case "image":
// 					$result = $this->receiveImage($message);
// 					break;
						
// 				case "location":
// 					$result = $this->receiveLocation($message);
// 					break;
						
// 				case "voice":
// 					$result = $this->receiveVoice($message);
// 					break;
			
// 				case "video":
// 					$result = $this->receiveVideo($message);
// 					break;
			
// 				case "link":
// 					$result = $this->receiveLink($message);
// 					break;
						
// 				default:
// 					$result = "unknow msg type :".$msgType;
// 					break;
// 			}
			
//			return $result;
		}else {
			$result = '';
			echo $result;
			exit();
		}

		
	}
	
	//接收事件消息
	public function receiveEvent($object){
		
		$content = '';
		switch ($object->Event){
			case "subscribe": //关注事件
				$content = '欢迎关注石家庄吃货小队';
				$content .= (!empty($object->EventKey))?("\n来自二维码场景 ".str_replace("qrscene_","",$object->EventKey)):"";
				break;
			case "unsubscribe": //取消关注事件
				$content = '取消关注';
				break;
			case "SCAN": //扫描场景
				$content = "扫描场景 ".$object->EventKey;
				break;
			case "CLICK": //点击事件
				/*
				 * 代码
				 * */
				break;
			case "LOCATION": //上报地理位置事件				
				$content = "上传位置：纬度 ".$object->Latitude."经度 ".$object->Longitude;
				break;
					
			case "VIEW": //跳转链接
				$content = "跳转链接 ".$object->EventKey;
				break;
			case "MASSSENDJOBFINISH": //事件推送群发结果
				$content = "消息ID：".$object->MsgID."，结果：".$object->Status."，粉丝数：".$object->TotalCount."，过滤：".$object->FilterCount."，发送成功：".$object->SentCount."，发送失败：".$object->ErrorCount;
				break;
			default: //默认
				$content = "receive a new event: ".$object->Event;
				break;
		}
		if (is_array($content)) {
			
		}
		
		return $result;
	}
	
	//接收文本消息
	public function receiveText($object){
		$keyword = trim($object->Content);
		//多客服人工回复模式
		if (strstr($keyword,"您好") || strstr($keyword,"你好") || strstr($keyword,"在吗")) {
			$result = $this->transmitService($object); //回复
		}else{
			if (strstr($keyword,'文本')) {
				$content = "这是个文本消息";
			}else {
				$content = $keyword;				
			}
			$result = $this->transmitText($object, $content);
		}
		return $result;
		
	}
	//接收图片消息
	public function receiveImage($object){
		//回复图片消息
		$content = array("MediaId"=>$object->MediaId);
        $result = $this->transmitImage($object, $content);
        return $result;
	}
	//接收位置消息
	public function receiveLocation($object){
		$content = "你发送的位置,纬度为：".$object->Location_X.";经度为："."$object->Location_Y".";缩放级别为：".$object->Scale."；位置为：".$object->Label;;
		return $this->transmitText($object,$content);
	}
	//接收语音消息
	public function receiveVoice($object){
		//语音识别结果
		if (isset($object->Recognition) && !empty($object->Recognition)) {
			$content = "您刚才说的是：".$object->Recognition;
			return $this->transmitText($object,$content);
		}else {
			$content = array("MediaId"=>$object->MediaId);
			return $this->transmitVoice($object,$content);
		}
	}
	//接收视频消息
	public function receiveVideo(){
		$content = array("MediaId"=>$object->MediaId, "ThumbMediaId"=>$object->ThumbMediaId, "Title"=>"", "Description"=>"");
		$result = $this->transmitVideo($object, $content);
		return $result;
	}
	//接收链接消息
	public function receiveLink(){
		$content = "你发送的是链接，标题为：".$object->Title."；内容为：".$object->Description."；链接地址为：".$object->Url;
		$result = $this->transmitText($object, $content);
		return $result;
	}
	//回复文本消息
	public function transmitText($object,$content){
		return View::make('weixin.text')->with('object',$object)
										->with('content',$content);
	}
	
	//回复图片消息
	public function transmitImage($object,$imageArray){
		return View::make('weixin.image')->with('object',$object)
										->with('imageArray',$imageArray);
	}
	//回复语音消息
	public function transmitVoice($object,$voiceArray){
		return View::make('weixin.voice')->with('object',$object)
										->with('voiceArray',$voiceArray);
	}
	//回复视频消息
	public function transmitVideo($object,$videoArray){
		return View::make('weixin.video')->with('object',$object)
										->with('videoArray',$videoArray);
	}
	//回复图文消息
	private function transmitNews($object, $newsArray){
		return View::make('weixin.news')->with('object',$object)
									    ->with('newsArray',$newsArray);
	}
	//回复音乐消息text.blade.php
	private function transmitMusic($object, $musicArray){
		return View::make('weixin.music')->with('object',$object)
										->with('musicArray',$musicArray);
	}
	//回复多客服消息
	private function transmitService($object){
		return View::make('weixin.service')->with('object',$object);
	}
	//...
}