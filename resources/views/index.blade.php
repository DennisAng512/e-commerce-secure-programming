@extends('layouts.template')

@section('title')
    {{ $title }}
@endsection

@section('container')

    @foreach($contents as $content)
        <h1>{{ $content->title }}</h1>
        <p>{{ $content->description }}</p>
        <br>
        <h4>By: {{ $content->author }}</h4>
        <div>Tag: <a href="/tags/{{ $content->tag->slug }}">{{ $content->tag->name }}</a></div>
        <h6>Published at: {{ $content->published_at }}</h6>
        <a href="/book/{{ $content->slug }}">View book</a>
    @endforeach
@endsection