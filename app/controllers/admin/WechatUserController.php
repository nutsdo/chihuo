<?php namespace admin;
/** 
 * @function：WechatUserController.php
 * @description：
 * @date：2014-12-24
 * @author：by Administrator
 * @interpreter
 * @param
 * @param 
 */
    use Follow;
class WechatUserController extends \Controller{
    
    //公众号粉丝首页 为已绑定本站的用户
    public function index(){
        var_dump(Follow::all());
        return "粉丝首页，这里显示已绑定本站的粉丝哦～";
    }
    
    public function action(){
        
    }
    
}