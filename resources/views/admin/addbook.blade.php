@extends('layouts.template')

@section('title')
    {{ $title }}
@endsection

@section('container')
    <form action="/addbook" method="POST">
        @csrf
        <div class="my-3 mx-3 row">
            <label for="title" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-5">
                <input type="text" name="title">
            </div>
        </div>
        <div class="my-3 mx-3 row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-5">
                <input type="text" name="description">
            </div>
        </div>
        <div class="my-3 mx-3 row">
            <label for="author" class="col-sm-2 col-form-label">Author</label>
            <div class="col-sm-5">
                <input type="text" name="author">
            </div>
        </div>
        <div class="my-3 mx-3 row">
            <label for="price" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-5">
                <input type="text" name="price">
            </div>
        </div>
        <div class="my-3 mx-3 row col-sm-1">
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
    </form>
@endsection