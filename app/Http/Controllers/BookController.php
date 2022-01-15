<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Tag;

class BookController extends Controller
{
    public function index() {
        $title = "Home";

        $books = Book::with(['tag'])->paginate(5);

        return view('index', [
            "title" => $title,
            "contents" => $books
        ]);
    }

    public function show(Book $book) {
        return view('book', [
            "title" => "Book",
            "content" => $book
        ]);
    }

}
