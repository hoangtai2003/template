<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, "index"]);
Route::get('/admin', [HomeController::class, "admin"]);
Route::get('/login',[AdminController::class, "loginAdmin"]);
Route::post('/login', [AdminController::class, "postLoginAdmin"]);
Route::get('/about', [
    'as' => 'about.about',
    'uses' => 'App\Http\Controllers\HomeController@about',
]);
Route::get('/contact', [
    'as' => 'contact.contact',
    'uses' => 'App\Http\Controllers\HomeController@contact',
]);
Route::get('/product', [
    'as' => 'product.product',
    'uses' => 'App\Http\Controllers\HomeController@product',
]);
Route::get('/product_detail', [
    'as' => 'product_detail.product_detail',
    'uses' => 'App\Http\Controllers\HomeController@product_detail',
]);

