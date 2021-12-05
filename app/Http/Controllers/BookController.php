<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        return view('index', [
            "title" => "Home",
            "contents" => Book::with('tag')->get()
        ]);
    }

    public function show(Book $book) {
        return view('book', [
            "title" => "Book",
            "content" => $book
        ]);
    }
}
