<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ExperienceController;
use App\Models\Experience;
use App\Models\Item;

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
    //エクスペリエンスを定義します。
    $experience = Experience::all();
    //アイテムを定義します。
    $item = Item::all();
    // return view('home');
    return view('home',[
        'experience' => $experience,
        'item' => $item
        ]);
});

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// 体験談一覧表
// Route::get('/experiences', 'App\Http\Controllers\ExperienceController@index');
//コントローラーの指定をしなかったのでエラーが出たのでわけてます
// 体験談の検索用
Route::get('/experiences/serch','App\Http\Controllers\ExperienceController@serch');
// 体験談投稿
Route::get('experiences/create', [ExperienceController::class, 'create'])->middleware('auth');
// 体験談詳細
Route::get('experiences/{id}', [ExperienceController::class, 'show']);
// 体験談保存
Route::post('experiences/store', [ExperienceController::class, 'store']);
// 物件関連
Route::get('/items', 'App\Http\Controllers\ItemController@index');
// 物件検索用
Route::get('/items/serch','App\Http\Controllers\ItemController@serch');
// 物件詳細
Route::get('items/{id}', [ItemController::class, 'show']);