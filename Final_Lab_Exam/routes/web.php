<?php

use Illuminate\Support\Facades\Route;

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
 Route::get('/login','loginController@index');
 Route::post('/login','loginController@verify');
 
 Route::group(['middleware'=>['checksession']],function(){
 	Route::get('/home','homeController@index');
 	Route::get('/adminhome','adminhomeController@index');
 	Route::get('/userlist','adminhomeController@userlist')->name('admin.userlist');
 });