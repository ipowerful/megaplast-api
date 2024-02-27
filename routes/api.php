<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MeasureController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BadgeController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\ParameterController;
use App\Http\Controllers\ProductColorController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ContactController;


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
Route::apiResource('admin/products', ProductController::class);
Route::apiResource('admin/measures', MeasureController::class);
Route::apiResource('admin/categories', CategoryController::class);
Route::apiResource('admin/badges', BadgeController::class);
Route::apiResource('admin/industries', IndustryController::class);
Route::apiResource('admin/parameters', ParameterController::class);

Route::delete('admin/pcolors/{id}', [ProductColorController::class, 'destroy2']);
Route::put('admin/pcolors/{id}', [ProductColorController::class, 'update2']);
Route::patch('admin/pcolors/{id}', [ProductColorController::class, 'update2']);
Route::apiResource('admin/pcolors', ProductColorController::class);

Route::get('admin/pcolors/{product_id}', [ProductColorController::class, 'colorsByProduct']);

//Route::get('admin/pcolors', [ProductColorController::class, 'index']);
//Route::post('admin/pcolors', [ProductColorController::class, 'store']);
//Route::put('admin/pcolors', [ProductColorController::class, 'create']);

Route::patch('admin/images/{id}', [ImageController::class, 'update']);
Route::apiResource('admin/images', ImageController::class);

Route::apiResource('admin/contacts', ContactController::class);

// ------- USER Routes------------
Route::get('user/products', [ProductController::class, 'userIndex']);
Route::get('user/products/{product}', [ProductController::class, 'userShow']);

Route::get('user/categories', [CategoryController::class, 'index']);
Route::get('user/industries', [IndustryController::class, 'index']);
Route::get('user/badges', [BadgeController::class, 'userIndex']);
Route::get('user/contacts', [ContactController::class, 'index']);
