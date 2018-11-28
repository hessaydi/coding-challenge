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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', ['as' => 'home' , 'uses' =>'HomeController@index']);
Route::get('/master', 'HomeController@master')->name('master');
Route::get('/main', 'HomeController@main')->name('main');

Route::get('post/like/{id}', ['as' => 'post.like', 'uses' => 'LikeController@likePost']);
