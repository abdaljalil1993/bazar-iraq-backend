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
Route::post('/register', 'App\Http\Controllers\Api\AuthController@register');
Route::post('/login', 'App\Http\Controllers\Api\AuthController@login');

Route::apiResource('/category', 'App\Http\Controllers\Api\CategoryController');
Route::apiResource('/products', 'App\Http\Controllers\Api\ProductsController');

Route::apiResource('/category_parent', 'App\Http\Controllers\Api\ProductsController');