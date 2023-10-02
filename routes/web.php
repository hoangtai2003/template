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
Route::middleware(['auth'])->group(function (){
    Route::get('/admin', [HomeController::class, "admin"])->name('admin');
});
Route::get('/login',[AdminController::class, "index"])->name('login');
Route::post('/admin/users/login/postLogin', [AdminController::class, "postLogin"]);
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

