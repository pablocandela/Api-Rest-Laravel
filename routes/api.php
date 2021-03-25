<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('category','App\Http\Controllers\categoryController@getCategory');
Route::get('category/{id}','App\Http\Controllers\categoryController@getCategoryID');

Route::post('addCategory','App\Http\Controllers\categoryController@insertCategory');
Route::put('updateCategory/{id}','App\Http\Controllers\categoryController@updateCategory');
Route::delete('deleteCategory/{id}','App\Http\Controllers\categoryController@deleteCategory');