<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        return view('index', [
            "title" => "Home",
            "contents" => Book::latest()->search(request(['search']))->paginate(5)->withQueryString()
        ]);
    }

    public function show(Book $book) {
        return view('book', [
            "title" => "Book",
            "content" => $book
        ]);
    }
}
