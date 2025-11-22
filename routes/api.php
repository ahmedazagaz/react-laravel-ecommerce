<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;

// Brand API Routes
Route::apiResource('brands', BrandController::class);
