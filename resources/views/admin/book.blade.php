@extends('layouts.template')

@section('title')
    {{ $title }}
@endsection

@section('container')
    <h1>{{ $book->title }}</h1>
    <p>{{ $book->description }}</p>
    <br>
    <h4>By: {{ $book->author }}</h4>
    <h6>Published at: {{ $book->published_at }}</h6>
    <a href="/admin/book/{{$book -> slug}}/update">Update</a>
    <form action="/admin/book/{{$book -> slug}}/delete" method="POST">
        @csrf
        <button>Delete</button>
    </form>
@endsection