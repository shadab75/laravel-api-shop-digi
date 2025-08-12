<?php

use App\Http\Controllers\AttributeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::apiResource('categories', CategoryController::class);
Route::get('/categories/{category}/children',[CategoryController::class,'children']);
Route::get('/categories/{category}/parent',[CategoryController::class,'parent']);
Route::get('/categories/{category}/attributes',[CategoryController::class,'attributes']);
//Route::get('/categories/{category}/product',[CategoryController::class,'product']); //will be written
Route::apiResource('tags', TagController::class);
Route::apiResource('brands', BrandController::class);
Route::apiResource('attributes', AttributeController::class);
Route::apiResource('coupons', CouponController::class);

