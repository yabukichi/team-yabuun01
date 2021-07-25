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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// practice
Route::get('/practices/index', [App\Http\Controllers\PracticeController::class, 'index'])->name('practices.index');
Route::get('/practices/show', [App\Http\Controllers\PracticeController::class, 'show'])->name('practices.show');
Route::get('/practices/result', [App\Http\Controllers\PracticeController::class, 'result'])->name('practices.result');