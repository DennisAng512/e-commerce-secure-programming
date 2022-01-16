<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\BooklistController;

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
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{book:slug}', [BookController::class, 'show']);

Route::get('/wishlist', [WishlistController::class, 'index'])->middleware('auth');
Route::post('/books/{book:slug}/add-wishlist', [WishlistController::class, 'addWishlist'])->middleware('auth');
Route::put('/wishlist/delete/{wishlist:id}', [WishlistController::class, 'destroy'])->middleware('auth');

Route::get('/booklist', [BooklistController::class, 'index'])->middleware('auth');
Route::post('/books/{book:slug}/buy', [BooklistController::class, 'buyBook'])->middleware('auth');

Route::get('/tags', [TagController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');



Route::group(['middleware' => ['admin']], function () {
    Route::get('/addbook', [BookController::class, 'addbook_view']);
    Route::post('/addbook', [BookController::class, 'addbook']);

    Route::get('/admin/book', [BookController::class, 'view_admin']);

    Route::get('/admin/book/{slug}', [BookController::class, 'book_detail_admin']);


    Route::get('/admin/book/{slug}/update', [BookController::class, 'update_book_admin_view']);

    Route::post('/admin/book/{slug}/update', [BookController::class, 'update_book_admin_action']);

    Route::post('/admin/book/{slug}/delete', [BookController::class, 'delete_book_admin']);
});