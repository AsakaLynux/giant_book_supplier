<?php

use App\Http\Controllers\BookController;
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

Route::get('/category', function () {
    return view('category');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', [BookController::class, 'showAll']);
