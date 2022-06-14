<?php

use App\Http\Controllers\Frontend\FrontendController;
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

/******************************* Frontend   ***********************************/


Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('index',[FrontendController::class,'index'])->name('index');
Route::get('cart',[FrontendController::class,'cart'])->name('cart');
Route::get('checkout',[FrontendController::class,'checkout'])->name('checkout');
Route::get('detail',[FrontendController::class,'detail'])->name('detail');
Route::get('shop',[FrontendController::class,'shop'])->name('shop');



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





/********************** Dashboard   ******************************************/


Route::get('/adminLogin', [App\Http\Controllers\Backend\BackendController::class, 'login'])->name('login');
Route::get('/adminRegister', [App\Http\Controllers\Backend\BackendController::class, 'register'])->name('register');
Route::get('/dashboard', [App\Http\Controllers\Backend\BackendController::class, 'dashboard'])->name('Dashboard');
