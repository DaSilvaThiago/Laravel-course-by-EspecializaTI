<?php

use App\Http\Controllers\Site\AboutController;
use App\Http\Controllers\Site\BuyController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [ContactController::class, 'Contact']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/products', [ProductController::class, 'Product']);

Route::get('/buy', [BuyController::class, 'Buy']);