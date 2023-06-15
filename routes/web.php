<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SweetsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TransactionsController;

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
    Route::get('/shop/{category}/order', 'order')->name('shop.order');
    Route::get('/shop/{category}/orderD', 'orderD')->name('shop.orderD');
    Route::get('/item/{id}', 'item')->name('shop.item');
    Route::get('/create', 'create')->name('shop.create');
    Route::post('/item/{id}/fill', 'fill')->name('sweets.fill');
    Route::put('/item/{id}', 'update')->name('sweets.update');
    Route::delete('/item/{id}', 'delete')->name('sweets.delete');
    Route::post('/create', 'add')->name('sweets.add');
    Route::get('/search', 'search')->name('shop.search');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/auth/login', 'login')->name('login');
    Route::post('/auth/login', 'authenticate')->name('login.authenticate');
    Route::get('/auth/logout', 'logout')->name('logout');
});

Route::controller(UsersController::class)->group(function () {
    Route::get('/cart/{id}', 'cart')->name('shop.cart');
    Route::post('/cart/{id}', 'cartDel')->name('shop.cartDel');
    Route::get('/cart/{id}/buy', 'buy')->name('shop.buy');
    Route::get('/profil/{id}', 'profil')->name('shop.profil');
    Route::put('/profil/{id}', 'update')->name('user.update');
});

Route::controller(TransactionsController::class)->group(function () {
    Route::post('/item/{id}', 'addTrans')->name('shop.addTrans');
});
