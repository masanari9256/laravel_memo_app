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

Route::get('/', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login.index');
Route::get('/user', [\App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('user.register');
Route::post('/user/register', [\App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('user.exec.register');

Route::group(['middleware' => ['auth']], function(){
  Route::get('/memo', [\App\Http\Controllers\MemoController::class, 'index'])->name('memo.index');
  Route::get('/memo/add', [\App\Http\Controllers\MemoController::class, 'add'])->name('memo.add');
  Route::get('/memo/select', [\App\Http\Controllers\MemoController::class, 'select'])->name('memo.select');
});

Auth::routes();
