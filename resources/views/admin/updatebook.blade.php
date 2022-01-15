@extends('layouts.template')

@section('title')
    {{ $title }}
@endsection

@section('container')
    <form action="/admin/book/{{$book -> slug}}/update" method="POST">
        @csrf
        <label for="">Title</label>
        <input type="text" name="title" value="{{$book -> title}}">
        <label for="">Description</label>
        <input type="text" name="description" value="{{$book -> description}}">
        <label for="">Author</label>
        <input type="text" name="author" value="{{$book -> author}}">
        <label for="">Price</label>
        <input type="text" name="price" value="{{$book -> price}}">
        <button>Submit</button>
    </form>
@endsection