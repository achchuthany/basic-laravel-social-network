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
})->name('welcome');

Route::get('/dashboard',[
    'as'=>'dashboard',
    'middleware'=>'auth',
    'uses' => 'PostController@getDashboard'
]);

Route::post('/signup',[
    'uses'=>'UserController@postSignUp',
    'as'=>'signup'
]);
Route::post('/signin',[
    'uses'=>'UserController@postSignIn',
    'as'=>'signin'
]);

Route::get('/signout',[
    'uses'=>'UserController@getSignOut',
    'as'=>'signout'
]);
Route::post('/create/post',[
    'uses'=>'PostController@postCreatePost',
    'as'=>'post.create',
    'middleware'=>'auth'
]);

Route::post('/edit/post',[
    'uses'=>'PostController@postEditPost',
    'as'=>'post.edit',
    'middleware'=>'auth'
]);
Route::get('/delete/post/{post_id}',[
    'uses'=>'PostController@getDeletePost',
    'as'=>'post.delete',
    'middleware' => 'auth'
]);