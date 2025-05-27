<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [ItemController::class, 'storeindex']);
Route::get('/item/:item_id', [ItemController::class, 'storedetails']);
Route::get('/register', [UserController::class, 'user']);
Route::post('/register', [UserController::class, 'storeUser']);
Route::post('/login', [UserController::class, 'loginUser']);
// Route::middleware('auth')->group(function(){
    Route::get('/', [ItemController::class, 'index']);
    Route::get('/?page=mylist', [ItemController::class, 'mylist']);
    Route::get('/item/:item_id', [ItemController::class, 'details']);
    Route::get('/purchase/:item_id', [ItemController::class, 'purchase']);
    Route::post('/purchase/address/:item_id', [ItemController::class, 'show_address']);
    Route::get('/sell', [ItemController::class, 'sell']);
    Route::get('/mypage', [ItemController::class, 'mypage']);
    Route::get('/mypage/profile', [ProfileController::class, 'show_profile']);
    Route::post('/mypage/profile', [ProfileController::class, 'store']);
// });

