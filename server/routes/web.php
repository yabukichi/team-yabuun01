<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VocabularyController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// TopPage
Route::get('/top', [App\Http\Controllers\TopController::class, 'index'])->name('index');


//Vocabularysーーーーーーーーーーーーーーーーーーーーーーーー
// 一覧
Route::get('/Vocabularys/index' ,[App\Http\Controllers\VocabularyController::class,'index'])->name('Vocabularys.index');

// 追加画面
Route::get('/Vocabularys/create', [App\Http\Controllers\VocabularyController::class,'create'])->name('Vocabularys.create');

// 追加処理
Route::post('/Vocabularys/create',[App\Http\Controllers\VocabularyController::class,'add'])->name('Vocabularys.add');

// 単語一覧
Route::get('/Vocabularys/show', [App\Http\Controllers\VocabularyController::class,'show'])->name('Vocabularys.show');