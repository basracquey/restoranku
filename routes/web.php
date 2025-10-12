<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('menu');
});

Route::get('/menu', [MenuController::class, 'index'])->name('menu');

Route::get('/cart', [MenuController::class, 'cart'])->name('cart');
Route::post('/cart/add', [MenuController::class, 'addToCart'])->name('cart.add');
// Route::post('/cart/update', [App\Http\Controllers\CartController::class, 'update'])->name('cart.update');//sementara
// Route::post('/cart/remove', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');//sementara

Route::get('/checkout', function () {
    return view('customer.cart');
})->name('checkout');