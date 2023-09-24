<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MeasureController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BadgeController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\ParameterController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// ------- ADMIN Routes------------
Route::apiResource('admin/colors', ColorController::class);
Route::apiResource('admin/stocks', StockController::class);
Route::apiResource('admin/products', ProductController::class);
Route::apiResource('admin/measures', MeasureController::class);
Route::apiResource('admin/categories', CategoryController::class);
Route::apiResource('admin/badges', BadgeController::class);
Route::apiResource('admin/industries', IndustryController::class);
Route::apiResource('admin/parameters', ParameterController::class);


// ------- USER Routes------------
Route::get('user/products', [ProductController::class, 'userIndex']);
Route::get('user/products/{product}', [ProductController::class, 'userShow']);

Route::get('user/categories', [CategoryController::class, 'index']);
Route::get('user/industries', [IndustryController::class, 'index']);
