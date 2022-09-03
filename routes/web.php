<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;//追記App\Http\Contrpllers\FormControllerを読み込む
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Request;

// use App\Models\form;




//フォームを処理する
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
// Route::post('/product', [ProductController::class, 'product']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [FormController::class, 'product']);

Route::get('/form', [FormController::class, 'form']);

Route::get('/menu', [MenuController::class, 'menu']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/form', [FormController::class, 'store']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::post('/form', function (Request $request) );

    