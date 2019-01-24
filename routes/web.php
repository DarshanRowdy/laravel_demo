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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'user', 'namespace' => 'user', 'middleware' => ['user']], function() {
    Route::resource('user', 'UserController');
});

//Route::resource('business', 'BusinessController');
Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function() {
//    Route::get('user', 'UserController@index')->middleware('admin');
    Route::resource('user', 'UserController')->middleware('admin');
});

