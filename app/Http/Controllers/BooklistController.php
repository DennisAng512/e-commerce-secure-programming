<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Booklist;

class BooklistController extends Controller
{
    public function index() {
        $title = "Booklist";

        $booklist = Booklist::where('user_id', Auth::id())->where('is_deleted', false)->get();

        // dd($wishlist);
        // $user = Auth::user();
        // $wishlists = Wishlist::where("user_id", "=", $user->id)

        return view('booklist', compact('title', 'booklist'));
    }

    public function buyBook(Book $book) {
        $booklist = Booklist::where('user_id', Auth::id())->where('is_deleted', false)->where('book_id', $book->id)->first();
        if($booklist==null){
            Booklist::create([
                'book_id' => $book->id,
                'user_id' => Auth::id(),
            ]);

            return redirect('/booklist');
        }

        return redirect('/');
    }
}
