<?php

use App\Http\Controllers\Api\ArticleApiController;
use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\IncomeApiController;
use App\Http\Controllers\Api\PersonApiController;
use App\Http\Controllers\Api\SaleApiController;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('category',CategoryApiController::class);
Route::apiResource('article',ArticleApiController::class);
Route::apiResource('income',IncomeApiController::class);
Route::apiResource('person',PersonApiController::class);
Route::apiResource('sale',SaleApiController::class);
