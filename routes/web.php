<?php

// use App\Http\Controllers\Homecontroller;

use App\Http\Controllers\cekoutController;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\orderController;
// use App\Http\Controllers\propilecontroller;
use Illuminate\Support\Facades\Route;
// use app\Models\User;
// use App\Http\Controllers\CartController;




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

Route::get('/user', [UserController::class, 'user']);
Route::post('/auth', [UserController::class, 'auth']);
Route::get('/user/shop/{id}',[UserController::class, 'show']);
Route::post('/user/create',[UserController::class, 'create']);
// Route::get('/user/co/{id}', [UserController::class,'show']);
Route::get('/cekout', [UserController::class,'cekout']);
Route::get('/checkout', [UserController::class,'checkout']);

// Route::post('/checkout/{id}', [OrderController::class,'checkout']);

//Route::get('/checkout', [UserController::class,'checkout']);

//Route::get('/user', [UserController::class, 'index']);
// Route::post('/cart/add/{productId}', [CartController::class, 'add'])->name('cart.add');
// Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart{id}', 'CartController@destroy')->name('cart.destory');


