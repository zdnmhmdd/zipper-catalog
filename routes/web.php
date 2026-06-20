<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/home');

Route::view('/home', 'welcome');

Route::view('/about', 'about');

Route::view('/products', 'products');

Route::view('/contact', 'contact');

Route::view('/products/nylon-zipper', 'products.nylon-zipper');
Route::view('/products/resin-zipper', 'products.resin-zipper');
Route::view('/products/metal-zipper', 'products.metal-zipper');
Route::view('/products/waterproof-zipper', 'products.waterproof-zipper');