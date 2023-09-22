<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

//Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
//Route::get('/about', 'App\Http\Controllers\HomeController@about');
Route::get('/', function () {
    return view('home.home');
});
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
