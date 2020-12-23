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
 Route::get('/logout', 'logoutController@index');
 
 Route::group(['middleware'=>['checksession']],function(){
 	Route::get('/home','homeController@index');
 	Route::get('/adminhome','adminHome@index')->name('admin.index');
 	Route::get('/edit/{id}', 'adminHome@edit')->name('admin.edit');
	Route::post('/edit/{id}', 'adminHome@update');
	Route::get('/delete/{id}','adminHome@delete');
	Route::get('/create', 'adminHome@create')->name('admin.create');
	Route::post('/create', 'adminHome@store');
 	Route::get('/userlist','adminHome@userlist')->name('admin.userlist');
 });