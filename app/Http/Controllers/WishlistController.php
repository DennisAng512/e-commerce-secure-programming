<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    public function index() {
        $title = "Wishlist";

        $wishlist = Wishlist::where('user_id', Auth::id())->get();

        // dd($wishlist);
        // $user = Auth::user();
        // $wishlists = Wishlist::where("user_id", "=", $user->id)

        return view('wishlist', compact('title', 'wishlist'));
    }

    public function addWishlist(Book $book) {
        
        $user = Auth::user();

        Wishlist::create([
            'book_id' => $book->id,
            'user_id' => $user->id,
        ]);

        return redirect('/');
    }
}
