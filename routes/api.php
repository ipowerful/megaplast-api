<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UnitController;


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


Route::apiResource('colors', ColorController::class);
Route::apiResource('stocks', StockController::class);
Route::apiResource('products', ProductController::class);
Route::apiResource('units', UnitController::class);

//Route::apiResource('colors', 'App\Http\Controllers\ColorController');
//Route::resource('colors', 'App\Http\Controllers\ColorController');
//Route::get('colors', 'ColorController@index');
