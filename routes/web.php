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

Route::get('/', function () {
    return view('welcome');
});
Route::get('users',function (){

    $user=new App\User();

    return $user->all();
});
#任何方法都可以
Route::any('any',function (){
    return 'test Any';
});
Route::post('post',function (){
    return 'test post';
});

Route::get('about','MyController@getAbout');
Route::resource('user','UserController');