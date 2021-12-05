@extends('layouts.template')

@section('title')
    {{ $title }}
@endsection

@section('container')
    @foreach($contents as $content)
        <h1><a href="/tags/{{ $content->slug }}">{{ $content->name }}</a></h1>
    @endforeach
@endsection