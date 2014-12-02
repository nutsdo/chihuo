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
	}
}