<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;

// Brand API Routes
Route::apiResource('brands', BrandController::class);

// Product API Routes
Route::apiResource('products', ProductController::class);
