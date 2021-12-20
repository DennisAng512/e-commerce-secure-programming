<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        $title = "Home";

        if(request('tags')) {
            $title = "Tags: " . request('tags');
        } else if(request('search')) {
            $title = "Search: " . request('search');
        }

        return view('index', [
            "title" => $title,
            "contents" => Book::latest()->search(request(['search','tags']))->where('is_deleted', '=', '0')->paginate(5)->withQueryString()
        ]);
    }

    public function show(Book $book) {
        return view('book', [
            "title" => "Book",
            "content" => $book
        ]);
    }

    public function delete(Book $book){

    }
}
