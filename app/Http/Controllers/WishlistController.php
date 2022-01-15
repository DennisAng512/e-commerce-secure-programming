<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    public function addWishlist(Book $book) {
        
        $user = Auth::user();

        dd($book);
        
    }
}
