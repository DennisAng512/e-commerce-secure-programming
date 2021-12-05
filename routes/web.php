<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Models\Tag;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TagController;

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

Route::get('/', [BookController::class, 'index']);
Route::get('/book/{book:slug}', [BookController::class, 'show']);
Route::get('/tags', [TagController::class, 'index']);
Route::get('/tags/{tag:slug}', [TagController::class, 'show']);
