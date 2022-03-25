<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryController;

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

Route::get('/product', function () {
    return view('product');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/', [QueryController::class, 'getCategory']);

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category', [QueryController::class, 'getCategory']);

Route::get('/about', [AboutController::class, 'index']);
Route::get('/about', [QueryController::class, 'getCategory']);

Route::get('/contact', [ContactController::class, 'index']);
Route::get('/contact', [QueryController::class, 'getCategory']);
