<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store')->middleware('guest');
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login.store')->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/product/{id}', [HomeController::class, 'show'])->name('product.show')->middleware('auth');
Route::post('/product/{id}', [HomeController::class, 'store'])->name('product.store')->middleware('auth');

Route::get('/pre_order/delete/{id}', [CartController::class, 'preOrderDelete'])->name('pre_order.delete')->middleware('auth');
Route::get('/cart', [CartController::class, 'index'])->name('cart')->middleware('auth');
Route::get('/order', [CartController::class, 'order'])->name('order')->middleware('auth');
Route::post('/payment/{id}', [HomeController::class, 'paymentStore'])->name('payment.store')->middleware('auth');
Route::get('/payment/{id}', [HomeController::class, 'payment'])->name('payment')->middleware('auth');


Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/user', [HomeController::class, 'user'])->name('user')->middleware('auth');
Route::put('/user', [HomeController::class, 'updateUser'])->name('update.user')->middleware('auth');
Route::get('/done', function () {
    return view('done');
})->name('done')->middleware('auth');