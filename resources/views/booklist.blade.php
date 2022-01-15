@extends('layouts.template')

@section('title')
    {{ $title }}
@endsection

@section('container')
    @foreach($booklist as $content)
    <div class="card" style="width: 18rem; margin: 10px 0;">
        {{$content->book->title}}
    </div>
    @endforeach
@endsection