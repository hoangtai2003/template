<?php

use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\logout;
use App\Http\Controllers\CategoryController;

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
// Đăng nhập
Route::get('/login',[Login::class, "index"])->name('login');
Route::post('/login/postLogin', [Login::class, "postLogin"]);
Route::post('/logout', [logout::class, 'destroy'])->name('logout');

// Client
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/product', [HomeController::class,'product'])->name('product');
Route::get('/product_detail', [HomeController::class,'product_detail'])->name('product_detail');

// Admin
Route::prefix('categories')->group(function (){
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::get('/index', [CategoryController::class, 'index'])->name('index');
    Route::post('/store', [CategoryController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::post('/update{id}', [CategoryController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [CategoryController::class,'delete'])->name('delete');
});
