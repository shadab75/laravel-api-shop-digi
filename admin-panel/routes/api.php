<?php

use App\Http\Controllers\AttributeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::apiResource('categories', CategoryController::class);
Route::get('/categories/{category}/children',[CategoryController::class,'children']);
Route::get('/categories/{category}/parent',[CategoryController::class,'parent']);
Route::get('/categories/{category}/attributes',[CategoryController::class,'attributes']);
Route::get('/category-attributes/{category}' ,[CategoryController::class , 'getCategoryAttributes']);
Route::get('/provinces',[ProvinceController::class,'index']);
Route::get('/provinces/{province}/cities',[ProvinceController::class,'cities']);
Route::get('/cities',[CityController::class,'index']);
Route::get('/cities',[CityController::class,'index']);
Route::get('/categories/{category}/products',[CategoryController::class,'product']);
Route::apiResource('tags', TagController::class);
Route::apiResource('brands', BrandController::class);
Route::apiResource('attributes', AttributeController::class);
Route::apiResource('coupons', CouponController::class);
Route::apiResource('products', ProductController::class);
Route::put('/products/{product}/category-edit',[ProductController::class,'updateCategory']);

