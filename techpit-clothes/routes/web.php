<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LineItemController;
use App\Http\Controllers\CartController;

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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ProductController;

// Route::get('/', [ProductController::class, 'index'])->name('product.index');
// Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::controller(ProductController::class)->group(function(){
    Route::name('product.')->group(function() {
        Route::get('/','index')->name('index');
        Route::get('/product/{id}','show')->name('show');
    });
});

Route::controller(LineItemController::class)->group(function() {
    Route::name('line_item.')->group(function() {
        Route::post('/line_item/create', 'create')->name('create');
        Route::post('/line_item/delete', 'delete')->name('delete');
    });
});

// Route::controller(CartController::class)->group(function() {
//     Route::name('cart.')->group(function() {
//         Route::get('/cart', 'index')->name('index');
//     });
// });

Route::controller(CartController::class)->group(function() { 
    Route::name('cart.')->group(function () {
        Route::get('/cart', 'index')->name('index');
        Route::get('/cart/checkout', 'checkout')->name('checkout');
        Route::get('/cart/success', 'success')->name('success');
        
    });
});