@extends('layouts.template')

@section('title')
    {{ $title }}
@endsection

@section('container')
    <div style="max-width: 100%; display: flex; flex-wrap: wrap; justify-content: space-around;">
        @foreach($contents as $content)
            <div class="card" style="width: 18rem; margin: 10px 0;">
                <img class="card-img-top" src="assets/test.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $content->title }}</h5>
                    <h6>By: {{ $content->author }} published at: {{ $content->published_at }}</h6>
                    <div>Tag: <a href="/tags/{{ $content->tag->slug }}">{{ $content->tag->name }}</a></div>
                    <p class="card-text">{{ $content->description }}</p>
                    <span>Published at: {{ date('d-m-Y', strtotime($content->published_at)) }}</span>
                    <a href="/book/{{ $content->slug }}" class="btn btn-primary">View Detail</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection