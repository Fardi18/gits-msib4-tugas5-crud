<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
});

// dashboard
Route::prefix('dashboard')->group(
    function () {
        Route::prefix('product')->group(
            function () {
                Route::get('/', [ProductController::class, 'index']);
                Route::get('/add', [ProductController::class, 'create']);
                Route::get('/{id}/edit', [ProductController::class, 'edit']);
                Route::get('/{id}/delete', [ProductController::class, 'destroy']);
                Route::post('/', [ProductController::class, 'store']);
                Route::put('/{id}', [ProductController::class, 'update']);
            }
        );
        Route::prefix('category')->group(function () {
            Route::get('/', [CategoryController::class, 'index']);
            Route::get('/add', [CategoryController::class, 'create']);
            Route::get('/{id}/edit', [CategoryController::class, 'edit']);
            Route::get('/{id}/delete', [CategoryController::class, 'destroy']);
            Route::post('/', [CategoryController::class, 'store']);
            Route::put('/{id}', [CategoryController::class, 'update']);
        });
    }
);

// product
Route::prefix('product')->group(
    function () {
        Route::get('/', [ProductController::class, 'index']);
        Route::get('/add', [ProductController::class, 'create']);
        Route::get('/{id}/edit', [ProductController::class, 'edit']);
        Route::get('/{id}/delete', [ProductController::class, 'destroy']);
        Route::post('/', [ProductController::class, 'store']);
        Route::put('/{id}', [ProductController::class, 'update']);
    }
);


// category
Route::prefix('category')->group(function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::get('/add', [CategoryController::class, 'create']);
    Route::get('/{id}/edit', [CategoryController::class, 'edit']);
    Route::get('/{id}/delete', [CategoryController::class, 'destroy']);
    Route::post('/', [CategoryController::class, 'store']);
    Route::put('/{id}', [CategoryController::class, 'update']);
});

// cart
Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'index']);
    Route::post('/', [CartController::class, 'store']);
    Route::get('/{id}/delete', [CartController::class, 'destroy']);
});
