<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/products', [PageController::class, 'products']);
Route::get('/single-product', [PageController::class, 'singleProduct']);
Route::get('/contact', [PageController::class, 'contact']);