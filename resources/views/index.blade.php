@extends('layouts.template')

@section('title')
    {{ $title }}
@endsection

@section('container')
    <div style="max-width: 100%; display: flex; flex-wrap: wrap; justify-content: space-around;">
        @foreach($contents as $content)
            <div class="card" style="width: 18rem; margin: 10px 0;">
                <img class="card-img-top" src="{{ asset('assets/test.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $content->title }}</h5>
                    <h6>By: {{ $content->author }} published at: {{ $content->published_at }}</h6>
                    <div>Tag: @foreach($content->tag as $tag)
                                <span>{{ $tag->name }}, </span>
                            @endforeach</div>
                    <p class="card-text">{{ $content->description }}</p>
                    <span>Published at: {{ date('d-m-Y', strtotime($content->published_at)) }}</span>
                    <a href="/books/{{ $content->slug }}" class="btn btn-primary">View Detail</a>
                </div>
                @auth
                    <form action="/books/{{ $content->slug }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary">
                            Add to wishlist
                        </button>
                    </form>
                @endauth
            </div>
            
        @endforeach
    </div>

    <div class="d-flex justify-content-center">
        {{ $contents->links() }}
    </div>
@endsection