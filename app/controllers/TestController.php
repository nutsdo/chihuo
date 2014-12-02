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
	
	public function Index(){
		$wechatObj = new Weixin('chihuo',true);
		$wechatObj->responseMsg();
	}
}