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

//記事一覧画面を表示
Route::get('/','ArticleController@showList')->name('articles');

//記事登録
Route::post('/','ArticleController@exePost')->name('post');

//記事詳細画面(コメントも一緒に)を表示
Route::get('/article/{id}','ArticleController@showDetail')->name('show');

//コメントを登録
//Route::post('/article/{id}','CommentController@exePostComment')->name('postComment');
Route::post('/article/{id}','ArticleController@exePostComment')->name('postComment');