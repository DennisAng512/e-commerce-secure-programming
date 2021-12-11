<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index() {
        return view('tags', [
            "title" => "Tag lists",
            "contents" => Tag::all()
        ]);
    }

    public function show(Tag $tag) {
        return view('index', [
            'title' => $tag->name,
            'contents' => $tag->books,
            'tag' => $tag->name
        ]);
    }
}