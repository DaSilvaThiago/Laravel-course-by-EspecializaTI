<?php

use App\Http\Controllers\admin\{SupportController};
use App\Http\Controllers\Site\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [ContactController::class, 'Contact']);

Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');
