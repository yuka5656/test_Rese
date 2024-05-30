<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

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

Route::get('/', [ShopController::class, 'index']);
Route::get('/register', [ShopController::class, 'register']);
Route::get('/thanks', [ShopController::class, 'thank']);
Route::get('/login', [ShopController::class, 'login']);
Route::get('/my_page', [ShopController::class, 'my_page']);
Route::get('/done', [ShopController::class, 'done']);
