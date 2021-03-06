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

        $wishlist = Wishlist::where('user_id', Auth::id())->where('is_deleted', false)->get();

        return view('wishlist', compact('title', 'wishlist'));
    }

    public function addWishlist(Book $book) {
        
        $user = Auth::user();

        $wishlist = Wishlist::where('user_id', Auth::id())->where('is_deleted', false)->where('book_id', $book->id)->first();
        if($wishlist==null){
            Wishlist::create([
                'book_id' => $book->id,
                'user_id' => Auth::id(),
            ]);

            return redirect('/wishlist');
        }

        return redirect('/');
    }

    public function destroy(Wishlist $wishlist) {
        $user = Auth::user();

        $data = [
            'is_deleted' => true
        ];

        Wishlist::where('id', $wishlist->id)->where('user_id', Auth::id())->update($data);

        return redirect ('/wishlist');
    }
}
