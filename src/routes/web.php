<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\RegisterController;

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

Route::middleware('auth')->group(function () {
    Route::get('/', [ShopController::class, 'index']);
});
Route::get('/login', [ShopController::class, 'login']);
Route::get('/thanks', [ShopController::class, 'thank']);

Route::get('/my_page', [ShopController::class, 'my_page']);
Route::post('/my_page/delete', [ShopController::class, 'delete']);
Route::get('/done', [ShopController::class, 'done']);
Route::get('/detail/{restaurant_id}', [ShopController::class, 'detail']);
Route::post('/detail/create', [ShopController::class, 'store']);

