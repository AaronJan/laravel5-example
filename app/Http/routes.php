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

//首页
Route::get('/', 'WelcomeController@index');

//用户相关
Route::controller('auth', 'AuthController');

//留言
Route::post('/message/store', 'MessageController@store');

