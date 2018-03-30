<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {
    Route::resource('categories', 'CategoriesController', ['except' => ['create', 'edit']]);
    Route::get('category/search', 'CategoriesController@search');
    Route::resource('users', 'UserController', ['except' => ['create', 'edit']]);
    Route::get('user/approve/{id}', 'UserController@approve');
    Route::get('user/search', 'UserController@search');
    Route::resource('books', 'BookController', ['except' => ['create', 'edit']]);
    Route::get('book/approve/{id}', 'BookController@approve');
    Route::get('book/search', 'BookController@search');
});
