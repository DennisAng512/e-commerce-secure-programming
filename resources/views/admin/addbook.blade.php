@extends('layouts.template')

@section('title')
    {{ $title }}
@endsection

@section('container')
    <form action="/addbook" method="POST">
        @csrf
        <label for="">Title</label>
        <input type="text" name="title">
        <label for="">Description</label>
        <input type="text" name="description">
        <label for="">Author</label>
        <input type="text" name="author">
        <label for="">Price</label>
        <input type="text" name="price">
        <button>Submit</button>
    </form>
@endsection