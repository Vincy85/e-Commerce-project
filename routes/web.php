<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;

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

Route::get('/', [PagesController::class, 'index']) ->name('home');
Route::get('/products', [ProductsController::class, 'index']) ->name('shop');
Route::get('/products/search', [ProductsController::class, 'search_product']) ->name('search');
Route::get('/products/categories', [ProductsController::class, 'categories']) ->name('categories');
Route::get('/products/categories/clothes', [ProductsController::class, 'clothes_categorie']) ->name('clothes');
Route::get('/products/categories/hats', [ProductsController::class, 'hats_categorie']) ->name('hats');
Route::get('/products/categories/bags', [ProductsController::class, 'bags_categorie']) ->name('bags');
Route::get('/products/categories/shoes', [ProductsController::class, 'shoes_categorie']) ->name('shoes');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
