<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('first', function(){
	
	return view('first');
});


Route::get('/', function()
{
	//如果是在網址列中輸入http://網址/資料夾/public/index.php，會看到Hello World。
	return 'Hello World';
});


Route::post('meassage/list', function()
{
	//此為拋送至 http://網址/資料夾/public/index.php/meassage/list，會看到This is Post router。
	return 'This is Post router';
});


Route::any('meassage', function()
{
	//如果是在網址列中不論是使用GET、POST、PUT及DELETE 到http://網址/資料夾/public/index.php/message，會看到Hello World。
	return 'meassage';
});


//這邊為要用GET拋轉參數值要怎麼設定的方式
Route::get('meassage /{id}', function($id)
{
	//定義網址中{id}為他要丟給底下函數的參數值。
	return 'User '.$id;
});


Route::get('meassage /{id?}', function($name = null)
{
	//此為設定不一定會有參數值
	return $name;
});


Route::get('meassage /{id?}', function($name = 'John')
{
	//此種設定方式為如果沒有參數的時候我們預設甚麼參數值給他時候設定。
	return $name;
});


// Route::get('meassage, array('https', function()
// {
// //一定要使用https://網址/資料夾/public/index.php/ 才可以觸發這個路由設定
// return 'Must be over HTTPS';
// }));