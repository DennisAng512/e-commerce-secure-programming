@extends('layouts.template')

@section('title')
    {{ $title }}
@endsection

@section('container')
    <h1>{{ $content->title }}</h1>
    <p>{{ $content->description }}</p>
    <br>
    <h4>By: {{ $content->author }}</h4>
    <h6>Published at: {{ $content->published_at }}</h6>
@endsection