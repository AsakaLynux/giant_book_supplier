<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ContactController;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;
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


// Route::get('/book_detail', [BookController::class, 'find']);

Route::get('/book_detail/{id}', [BookController::class, 'find']);




Route::get('/publisher', function () {
    return view('publisher');
});

Route::get('/category/{id}', [CategorieController::class, 'index']);


Route::get('/contact', [ContactController::class, 'showCategorie']);

Route::get('/', [BookController::class, 'showAll']);


