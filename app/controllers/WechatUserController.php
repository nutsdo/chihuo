<?php
    class WechatUserController extends Controller{
        
//        public function __construct()
//        {
//            $this->beforeFilter('weixin', array('on' => 'get|post'));
//        }
//        
        public function bind($openid){
            return "粉丝绑定操作";
        }
        
        public function userBind($openid){
            //判断是否来自微信服务器
            
            //判断openid 是否已经绑定
            
            //
            
            
        }
    }