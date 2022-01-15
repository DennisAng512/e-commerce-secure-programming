<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Tag;
use App\Models\Wishlist;
use Illuminate\Support\Str;

class BookController extends Controller
{
    public function index() {
        $title = "Home";

        $books = Book::with(['tag'])->latest()->search(request(['search','tags']))->paginate(5)->withQueryString();

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

    public function showWishlist() {
        $title = "Wishlist";

        $wishlist = Wishlist::with(['wishlists'])->get();

        return view('wishlist', [
            "title" => $title,
            "contents" => $wishlist
        ]);
    }

    public function addWishlist(Book $book) {
        
        $user = Auth::user();

        Wishlist::create([
            'user_id' => $user->id,
            'book_id' => $book->id
        ]);

        return redirect('/');
    }

    public function addbook_view() {
        $title = "admin-addbook";

        return view('admin.addbook', compact('title'));
    }

    public function addbook(Request $request) {
        $validate = $request->validate([
            'title' => 'unique:books', 
            'slug' => 'unique:books',
            'price' => 'integer'
        ]);

        // $slug = Str::of('Laravel Framework')->slug('-');
        // Str::slug($request->title)
        // dd($request->title);
        Book::create([
            'title' => $request->title,
            'slug' => Str::of($request -> title)->slug('-'),
            'description' => $request->description,
            'author' => $request->author,
            'price' => $request->price,
        ]);

        return redirect('/addbook');
    }

    public function view_admin(Request $request) {
        $title = "admin view book";

        $books = Book::with(['tag'])->latest()->search(request(['search','tags']))->paginate(5)->withQueryString();

        return view('admin.index', [
            "title" => $title,
            "contents" => $books
        ]);
    }

    public function book_detail_admin(Request $request) {
        $title = "admin view book";

        $book = Book::where('slug', $request -> slug) -> first();

        // dd($book);

        return view('admin.book', compact('title', 'book'));
    }

    public function update_book_admin_view(Request $request) {
        $title = "admin view book";

        $book = Book::where('slug', $request -> slug) -> first();

        // dd($book);

        return view('admin.updatebook', compact('title', 'book'));
    }

    public function update_book_admin_action(Request $request) {
        // dd($book);
        $book = Book::where('slug', $request -> slug) -> first();

        $validate = $request->validate([
            'title' => 'unique:books', 
            'slug' => 'unique:books',
            'price' => 'integer'
        ]);

        $book -> update([
            'title' => $request->title,
            'slug' => Str::of($request -> title)->slug('-'),
            'description' => $request->description,
            'author' => $request->author,
            'price' => $request->price,
        ]);

        return redirect('/admin/book');
    }

    public function delete_book_admin(Request $request) {

        $book = Book::where('slug', $request -> slug) -> first();
        
        $book -> update([
            'is_deleted' => 1
        ]);
        // dd($book);

        return redirect('/admin/book');
    }
    
}