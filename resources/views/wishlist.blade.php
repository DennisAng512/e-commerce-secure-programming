@extends('layouts.template')

@section('title')
    {{ $title }}
@endsection

@section('container')
    <div>
        @foreach($wishlist as $content)
            {{$content->book->title}}
        @endforeach
    </div>
@endsection