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
use Api\Weixin\Weixin;
class TestController extends BaseController{
	public function __construct()
	{
		define("TOKEN", "test");
	}
	public function Index(){
		
	}
	public function valid(){
		$wechatObj = new Weixin();
		$wechatObj->valid($_GET['echostr']);
		//valid signature , option
		if($wechatObj->checkSignature()){
			echo $echoStr;
			exit;
		}
	}
}