<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutContoller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactUsController;

Route::get('/', [PageController::class, 'home']);
Route::get('/about-us', [AboutContoller::class, 'about']);
Route::get('/products', [ProductController::class, 'products']);
use App\Http\Controllers\PortfolioController;

Route::get('/portfolio', [PortfolioController::class, 'index']);
Route::get('/contact-us', [ContactUsController::class, 'contact']);

