@extends('layouts.template')

@section('title')
    {{ $title }}
@endsection

@section('container')
    @foreach($wishlist as $content)
    <div class="card" style="width: 18rem; margin: 10px 0;">
        {{$content->book->title}}
        <form action="/wishlist/delete/{{$content->id}}" method="post">
            @method('put')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
    @endforeach
@endsection