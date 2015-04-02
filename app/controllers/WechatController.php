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
        $weixin = new Weixin;
        return $weixin->responseMsg();
	}
	

	//...
    
    
    //用户绑定
    public function bind($openid){
        //$openid 为加密字符串
        //解密$openid
        $openid = base64_decode($openid);
        //获取ACCESS_TOKEN
        $Weixin = new Weixin;
        //获取用户基本信息
        $url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=$access_token&openid=$openid&lang=zh_CN";
        $access_token = $Weixin->getAccessToken();
        $data = $Weixin->https_request($url);
        //添加到数据库
        
        //绑定成功，返回文本消息，提示绑定成功
        return "绑定成功";
        //return transmitText($object,$content);
    }
    

    public function merchant(){
        $merchants = Merchant::orderBy('is_top','sort','update_at')->get();
        return View::make('weixin.merchant')->with('merchants',$merchants);
    }
    
}