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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// 体験談関連
// Route::resource('/experiences', 'App\Http\Controllers\ExperienceController');
// 体験談の検索と一覧表
Route::get('/experiences', 'App\Http\Controllers\ExperienceController@index');
//コントローラーの指定をしなかったのでエラーが出た
Route::get('/experiences/serch','App\Http\Controllers\ExperienceController@serch');
// Route::get('/experiences/serch','App\Http\Controllers\ExperienceController');