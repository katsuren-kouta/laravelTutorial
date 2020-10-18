<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

$controllerPath = "App\Http\Controllers\\";
// ログイン
Route::get('/', $controllerPath . 'UserController@getSignin');
Route::post('/', $controllerPath . 'UserController@postSignin')->name('signin');

// 選択
Route::get('/select', $controllerPath . 'ShowSelect');

// ユーザー情報
Route::resource('/userlist', $controllerPath . 'UserListController');

// 案件情報
Route::resource('/matterlist', $controllerPath . 'MatterListController');

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
