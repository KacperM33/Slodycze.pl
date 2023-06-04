<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SweetsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;

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
});

Route::controller(SweetsController::class)->group(function () {
    Route::get('/shop', 'index')->name('shop.index');
    Route::get('/shop/{category}', 'shop')->name('shop.shop');
    Route::get('/item/{id}', 'item')->name('shop.item');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/auth/login', 'login')->name('login');
    Route::post('/auth/login', 'authenticate')->name('login.authenticate');
    Route::get('/auth/logout', 'logout')->name('logout');
});

Route::controller(UsersController::class)->group(function () {
    Route::get('/cart/{id}', 'cart')->name('shop.cart');
    Route::get('/profil/{id}', 'profil')->name('shop.profil');
});
