@extends('layouts.template')

@section('title')
    {{ $title }}
@endsection

@section('container')
    @foreach($contents as $content)
        <h1><a href="/books?tags={{ $content->name }}">{{ $content->name }}</a></h1>
    @endforeach
@endsection