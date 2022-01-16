@extends('layouts.template')

@section('title')
    {{ $title }}
@endsection

@section('container')
    {{-- @foreach($contents as $content)
        <h1><a href="/books?tags={{ $content->name }}">{{ $content->name }}</a></h1>
    @endforeach --}}

    <section class="category">
        <div class="tag-box" style="height:50vh;">
            <div class="d-flex justify-content-center flex-row" style="padding-top: 15vh">
                <div class="container-group w-25">
                    @foreach($contents as $content)
                    @if ( $loop->index < 4)
                    <div class="text-center">
                        <p><a href="/books?tags={{ $content->name }}">{{ $content->name }}</a></p>
                    </div>
                    @endif
                    @endforeach
                </div>
                <div class="container-group w-25">
                    @foreach($contents as $content)
                    @if ( $loop->index >= 4)
                    <div class="text-center">
                        <p><a href="/books?tags={{ $content->name }}">{{ $content->name }}</a></p>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        
        
    </section>
@endsection