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
use Post;
class TestController extends BaseController{
	
	public function Index(){
		$wechatObj = new Weixin('chihuo',true);
		$wechatObj->getMsg();
		$type = $wechatObj->msgtype;
		$username = $wechatObj->msg['FromUserName'];
		if ($type==='text') {
			if ($wechatObj->msg['Content']=='Hello2BizUser') {//微信用户第一次关注你的账号的时候，你的公众账号就会受到一条内容为'Hello2BizUser'的消息
				$reply = $wechatObj->makeText('欢迎你关注吃货小队^_^');
			}else{//这里就是用户输入了文本信息
				$keyword = $wechatObj->msg['Content'];   //用户的文本消息内容
				
				$reply = $wechatObj->responseMsg();
			}
		}elseif ($type==='location') {
			//用户发送的是位置信息  稍后的文章中会处理
		}elseif ($type==='image') {
			//用户发送的是图片 稍后的文章中会处理
		}elseif ($type==='voice') {
			//用户发送的是声音 稍后的文章中会处理
		}
		$wechatObj->reply($reply);
	}
}