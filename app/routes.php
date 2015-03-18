<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',array(
	'as' => 'post_show',
	'uses' => 'PostController@index'
));
    
//注册
Route::get('register',array(
    'as' => 'register.index',
    'uses' => 'RegisterController@index'

));
//
    Route::post('register',array(
        'as'=>'register.store',
        'uses'=>'RegisterController@store'
    ));
Route::get('search',array(
	'as' => 'search.index',
	'uses' => 'SearchController@index'
));
Route::post('search/show',array(
	'as' => 'search_show',
	'uses' => 'SearchController@show'
));
Route::get('special','SpecialController@Index');

Route::get('admin',array(
	'before' => 'adminAuth',
	'as' => 'admin.index',
	'uses' => '\admin\AdminController@getIndex'
));

Route::get('post/show/{id}',array(
	'as' => 'post_show',
	'uses' => 'PostController@show'
));
Route::get('post/showtag',array(
	'as' => 'showtag',
	'uses' => 'PostController@showtag'
));
Route::get('post/access-token',array(
	'as' => 'access-token',
	'uses' => 'PostController@getAccessToken'
));

/*微信接口*/
Route::resource('weixin','WechatController');

//粉丝
Route::get('wechat/follow',array(
   'as' => 'wechat.follow',
   'uses' => '\admin\WechatUserController@index'
           
));
//粉丝绑定操作
Route::get('wechat/bind/{openid}/{appid}',array(
    'as' => 'wechat.bind',
    'uses' => 'WechatUserController@bind'
));

Route::get('wechat/merchant',array(
    'as' => 'wechat.merchant',
    'uses' => 'WechatController@merchant'
));
    
/***********************************/
Route::get('admin/login',array(
		'as' => 'admin.login',
		'uses' => '\admin\SessionController@login'
));

Route::post('admin/login',array(
	'as' => 'admin.login',
	'uses' => '\admin\SessionController@doLogin'
));

Route::get('admin/logout',array(
	'as' => 'admin.logout',
	'uses' => '\admin\SessionController@logout'
));

Route::group(array('prefix'=>'admin','before'=>'adminAuth'),function (){
	
	Route::controller('index','\admin\AdminController');
	
	Route::controller('account','\admin\AdminController');
//	Route::controller('user','\admin\UserController');
    
    //系统设置
    Route::get('setting',array(
        'as' => 'setting.index',
        'uses' => '\admin\SettingController@index'
    ));
    //用户设置
	Route::post('user',array(
		'as' => 'user.create',
		'uses' => '\admin\UserController@create'
	));
	Route::get('user',array(
		'as' => 'user.index',
		'uses' => '\admin\UserController@index'
	));
	Route::get('user/add',array(
		'as' => 'user.add',
		'uses' => '\admin\UserController@add'
	));
	Route::get('user/edit/{id}',array(
		'as' => 'user.edit',
		'uses' => '\admin\UserController@edit'
	));
	Route::post('user',array(
		'as' => 'user.delete',
		'uses' => '\admin\UserController@delete'
	));
	Route::get('group',array(
		'as' => 'user.group',
		'uses' => '\admin\GroupController@index'
	));
	
	//文章管理
	Route::get('post',array(
		'as' => 'post',
		'uses' => '\admin\PostController@index'
	));
	Route::get('post',array(
		'as' => 'post.index',
		'uses' => '\admin\PostController@index'
	));
	Route::get('post/add',array(
		'as' => 'post.add',
		'uses' => '\admin\PostController@add'
	));
	Route::get('post/edit/{id}',array(
		'as' => 'post.edit',
		'uses' => '\admin\PostController@edit'
			));
	Route::get('post/tag',array(
		'as' => 'post.tag',
		'uses' => '\admin\PostController@tag'
	));
	Route::get('post/delete/{id}',array(
		'as' => 'post.delete',
		'uses' => '\admin\PostController@delete'
	));
	Route::post('post_create',array(
		'as' => 'post.create',
		'uses' => '\admin\PostController@create'
	));
	Route::post('post_update',array(
		'as' => 'post.update',
		'uses' => '\admin\PostController@update'
	));
	
	//Route::controller('group','\admin\GroupController');
	Route::get('group/index',array(
		'as' => 'group.index',
		'uses' => '\admin\GroupController@index'
	));
	Route::get('group/add',array(
		'as' => 'group.add',
		'uses' => '\admin\GroupController@add'
	));
	Route::get('group/edit/{id}',array(
		'as' => 'group.edit',
		'uses' => '\admin\GroupController@edit'
	));
	
	Route::post('group/update',array(
		'as' => 'group.update',
		'uses' => '\admin\GroupController@update'
	));
	
	Route::post('group',array(
		'as' => 'group.create',
		'uses' => '\admin\GroupController@create'
	));
	Route::post('group/delete/{id}',array(
		'as' => 'group.delete',
		'uses' => '\admin\GroupController@delete'
	));
	Route::get('category',array(
		'as' => 'category.index',
		'uses' => '\admin\CategoryController@index'
	));
	Route::get('category/create',array(
		'as' => 'category.create',
		'uses' => '\admin\CategoryController@create'
	));
	Route::post('category/store',array(
		'as' => 'category.store',
		'uses' => '\admin\CategoryController@store'
	));
	
	Route::get('wechat',array(
		'as' => 'wechat.menu',
		'uses' => '\admin\WechatController@menu'
	));
	Route::get('wechat/create',array(
		'as' => 'wechat.create',
		'uses' => '\admin\WechatController@create'
	));
	Route::post('wechat/store',array(
		'as' => 'wechat.store',
		'uses' => '\admin\WechatController@store'
	));
	Route::post('wechat/postmenu',array(
		'as' => 'post-menu',
		'uses' => '\admin\WechatController@postMenu'
	));	
	Route::get('wechat/edit/{id}',array(
		'as' => 'menu-edit',
		'uses' => '\admin\WechatController@edit'
	));
	Route::get('wechat/destroy/{id}',array(
		'as' => 'menu-destroy',
		'uses' => '\admin\WechatController@destroy'
	));
	
	Route::post('wechat/update',array(
		'as' => 'menu-update',
		'uses' => '\admin\WechatController@update'
	));
	
	Route::get('wechat/user',array(
		'as' => 'wechat.user',
		'uses' => '\admin\WechatController@user'
	));
	/*---------------------------------------*/
	Route::get('wechat/merchant',array(
		'as' => 'wechat.merchant',
		'uses' => '\admin\MerchantController@index'
	));
	Route::get('wechat/merchant/create',array(
		'as' => 'merchant-create',
		'uses' => '\admin\MerchantController@create'
	));
	Route::post('wechat/merchant/store',array(
		'as' => 'merchant-store',
		'uses' => '\admin\MerchantController@store'
	));
	Route::get('wechat/merchant/{id}/edit',array(
		'as' => 'merchant-edit',
		'uses' => '\admin\MerchantController@edit'
	));
    Route::post('wechat/merchant/update',array(
        'as' => 'merchant-update',
        'uses' => '\admin\MerchantController@update'
    ));
	Route::get('wechat/merchant/{id}/delete',array(
		'as' => 'merchant-delete',
		'uses' => '\admin\MerchantController@delete'
	));


	/*------------------转盘------------------*/
	
	Route::get('wechat/lottery',array(
		'as' => 'wechat.lottery',
		'uses' => '\admin\LotteryController@index'
	));
	Route::get('wechat/lottery-create',array(
		'as' => 'lottery-create',
		'uses' => '\admin\LotteryController@create'
	));
	Route::post('wechat/lottery-store',array(
		'as' => 'lottery-store',
		'uses' => '\admin\LotteryController@store'
	));
	Route::get('wechat/lottery-edit/{id}',array(
		'as' => 'lottery-edit',
		'uses' => '\admin\LotteryController@edit'
	));
	Route::get('wechat/lottery-destroy/{id}',array(
		'as' => 'lottery-destroy',
		'uses' => '\admin\LotteryController@destroy'
	));
	
	
	
	//view prize list
	Route::get('wechat/prize-list',array(
		'as' => 'prize-list',
		'uses' => '\admin\LotteryController@prizeList'
	));
	// create prize 
	Route::get('wechat/prize-create',array(
		'as' => 'prize-create',
		'uses' => '\admin\LotteryController@createPrize'
	));
	Route::post('wechat/prize-store',array(
		'as' => 'prize-store',
		'uses' => '\admin\LotteryController@storePrize'
	));
	//edit prize 
	Route::get('wechat/prize-edit/{id}',array(
		'as' => 'prize-edit',
		'uses' => '\admin\LotteryController@editPrize'
	));
	//set prize
// 	Route::get('wechat/prize-set/{id}',array(
// 		'as' => 'prize-set',
// 		'uses' => '\admin\LotteryController@setPrize'
// 	));
	//set prize
	Route::get('wechat/lottery-prize/{id}',array(
		'as' => 'lottery-prize',
		'uses' => '\admin\LotteryController@setPrize'
	));
	//lottery prize add
	Route::get('wechat/lottery-prize-add/{id}',array(
		'as' => 'prize-lottery-add',
		'uses' => '\admin\LotteryController@setPrizeAdd'
	));
	Route::post('wechat/lottery-prize-store',array(
		'as' => 'prize-lottery-store',
		'uses' => '\admin\LotteryController@setPrizeStore'
	));
	
	Route::get('wechat/lottery-winner',array(
		'as' => 'lottery-winner',
		'uses' => '\admin\LotteryController@winner'
	));
	//转盘预览
	Route::get('wechat/lottery-show/{id}',array(
		'as' => 'lottery-show',
		'uses' => '\admin\LotteryController@show'
	));
	
	Route::post('wechat/lottery/{id}',array(
		'as' => 'lottery-join',
		'uses' => '\admin\LotteryController@join'
	));
// 	Route::get('wechat/lottery/{id}',array(
// 		'as' => 'lottery-join',
// 		'uses' => '\admin\LotteryController@join'
// 	));
	Route::post('wechat/lottery-award',array(
		'as' => 'lottery-award',
		'uses' => '\admin\LotteryController@award'
	));
             
    /*  测试文件的路由  */
    Route::get('setting',array(
               'as' => 'setting',
               'uses' => '\admin\SettingController@index'
               ));
             
             
});

View::composer('layouts.main','PermissionComposer');
	
