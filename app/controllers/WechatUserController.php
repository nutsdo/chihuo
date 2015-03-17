<?php

use Api\weixin\Weixin;

class WechatUserController extends Controller{
    
    public function __construct()
    {
        //$this->beforeFilter('weixin', array('on' => 'get|post'));
    }
    
    
    //用户绑定
    public function bind($openid,$appid){
        //$openid 为加密字符串
        //解密$openid
        //$openid = base64_decode($openid);
        //获取ACCESS_TOKEN
        $Weixin = new Weixin;
        //获取用户基本信息
        
        $access_token = $Weixin->getAccessToken();
        $url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=$access_token&openid=$openid&lang=zh_CN";
        $data = $Weixin->https_request($url);
        //添加到数据库
        $data = json_decode($data);
        if($data->errcode){
            $content = $data->errcode.':'.$data->errmsg;
        }else{
            $follow = new Follow;
            $follow->openid = $openid;
            $follow->appid = $appid;
            $follow->nickname = $data->nickname;
            $follow->sex = $data->sex;
            $follow->language = $data->language;
            $follow->city = $data->city;
            $follow->province = $data->province;
            $follow->country = $data->country;
            $follow->headimgurl = $data->headimgurl;
            $follow->subscribe_time = $data->subscribe_time;
            $follow->unionid = $data->unionid;
            $follow->save();
            if($follow->id){
                $content = '恭喜绑定成功！';
            }else{
                $content = '绑定失败！';
            }
            
        }
        return $Weixin->transmitTextCustom($appid,$openid,'text',$content);

        
        //绑定成功，返回文本消息，提示绑定成功
        //
    }

    
}