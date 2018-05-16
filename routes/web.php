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

/**
 * 前台
 */

Route::get('/', function () {
    return view('welcome');
});
Route::group(['namespace' => 'Api', 'prefix' => 'api'], function() {
    // User
    Route::get('/index', 'UserController@getUserInfo');

    // Article
    Route::get('/articlelist', 'ArticleController@getList'); 
    Route::get('/article', 'ArticleController@getOne');

    // Comment
    Route::get('/comments', 'CommentsController@getComments');

    // Category
    Route::get('/getcategorylist', 'CategoryController@getCategory');
    Route::get('/addcategory', 'CategoryController@addCategory');
    Route::get('/updatecategory', 'CategoryController@updateCategory');
    Route::get('/deletecategory', 'CategoryController@delCategory');

    // Error
    Route::get('/error/{errorCode}', 'ErrorController@getErrorPage');
});




/**
 * 后台
 */

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
    // User
    Route::get('/index', 'UserController@getUserInfo');

    // Article
    Route::get('/articlelist', 'ArticleController@getList'); 
    Route::get('/article', 'ArticleController@getOne');
    Route::get('/articleadd', 'ArticleController@addArticle');
    Route::get('/articledel', 'ArticleController@delArticle');

    // Comment
    Route::get('/comments', 'CommentsController@getComments');

    // Category
    Route::get('/getcategorylist', 'CategoryController@getCategory');
    Route::get('/addcategory', 'CategoryController@addCategory');
    Route::get('/updatecategory', 'CategoryController@updateCategory');
    Route::get('/deletecategory', 'CategoryController@delCategory');

});





