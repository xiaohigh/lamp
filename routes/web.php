<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
DELETE / HTTP/1.1
PUT / HTTP/1.1
*/


Route::get('/login', function(){
	return 'login page';
});

Route::get('/index.asp', function(){
	return 'asp ??????';
});

//前台路由
Route::group([], function(){

	Route::get('/', function () {
	    return view('welcome');
	});

	//更新
	Route::get('/update', function(){
		echo 'update';
	})->middleware('login');

	//删除
	Route::get('/delete', function(){
		echo 'delete';
	})->middleware('login');

	Route::get('/user/{id}', function($id){
		echo '用户id为'.$id;
	})->where('id','\d+');

	Route::get('/admin', function(){
		return '这里是后台页面!!!';
	})->name('admin');

	//创建url的时候
	Route::get('/home', function(){
		return '<a href="'.route('admin').'">后台</a>';
	});

	Route::get('/404', function(){
		if(empty($_GET['id'])) {
			abort(404);
		}
	});
});

//后台路由
Route::get('/user/add', 'UserController@add');
Route::post('/user/insert', 'UserController@insert');

//API接口路由
Route::get('/asdfsadsagdsagasd/{id}', 'UserController@show')->name('user.show');

Route::get('/users', 'UserController@index')->middleware('login');
// Route::get('/test', function(){
// 	echo route('user.show', ['id'=>100]);
// });

//资源控制器  一条顶七条
Route::resource('tiezi','TieziController');

Route::get('/request', 'TieziController@request');

Route::get('/form', 'TieziController@form');

Route::post('/upload', 'TieziController@upload');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cookie', 'HomeController@set');

//闪存
Route::get('/flash', 'HomeController@flash');
//读取闪存
Route::get('/get-flash','HomeController@getFlash');

//闪存 表单
Route::get('/user-2', 'HomeController@user');
//表单提交
Route::post('/user-2', 'HomeController@insert');

//响应
Route::get('/response', 'HomeController@response');
//视图
Route::get('/views', 'HomeController@views');

Route::get('/page-1', 'HomeController@page1');
Route::get('/page-2', 'HomeController@page2');


Route::get('/control', 'HomeController@control');

Route::get('/select', 'DBController@select');
Route::get('/trans', 'DBController@trans');

//join 使用
Route::get('/join', 'DBController@join');


