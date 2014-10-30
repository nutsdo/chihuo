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
Route::get('search',array(
	'as' => 'search.index',
	'uses' => 'SearchController@index'
));
Route::post('search/show',array(
	'as' => 'search_show',
	'uses' => 'SearchController@show'
));

Route::get('admin',array(
	'before' => 'adminAuth',
	'as' => 'admin.index',
	'uses' => '\admin\AdminController@getIndex'
));

Route::get('post/{id}',array(
	'as' => 'post_show',
	'uses' => 'PostController@show'
));

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
	
	//Route::controller('post','\admin\PostController');
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
	
});

View::composer('layouts.main', function($view)
{
	if (Sentry::check()) {
		$user = Sentry::getUser();
		if (!$user->isSuperUser()) {
			$id = $user->id;
			// Find the user using the user id
			$user = Sentry::getUserProvider()->findById($id);
			// Get the user permissions
			$has_permissions = $user->getMergedPermissions();
			$permissions = Config::get('permission');
			$view->with('permissions', $permissions)->with('has_permissions',$has_permissions);
		}else {
			$permissions = Config::get('permission');
			$view->with('permissions', $permissions);
		}	
	}	
});
	
