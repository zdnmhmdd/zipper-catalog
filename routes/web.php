<?php

use Illuminate\Support\Facades\Route;

Route::view('/home', 'welcome');

Route::view('/about', 'about');

Route::view('/products', 'products');

Route::view('/contact', 'contact');