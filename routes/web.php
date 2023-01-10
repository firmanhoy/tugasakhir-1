<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\WakaController;


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

Route::get('/index', function(){
    return view('user.index');
});

Route::get('/masuk', [LoginController::class, 'main'])->name('masuk')->middleware('guest');
Route::get('/masuk', [LoginController::class, 'main'])->name('masuk')->middleware('guest');
Route::post('/masuk', [LoginController::class, 'login'])->name('masuk.login')->middleware('guest');

Route::get('/test', function(){
    return view('testIntegrasi');
});

Route::get('/admin', [DashboardController::class, 'main']);
Route::get('/admins', [DashboardController::class, 'admin']);
Route::resource('admin/kategori', KategoriController::class);
Route::resource('admin/waka', WakaController::class);
