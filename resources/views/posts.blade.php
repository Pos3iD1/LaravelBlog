@extends('layout')

@section('title')
<title>Posts</title>
@endsection

@section('content')
    @foreach($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{ $post->id; }}">
                    {{ $post->title; }}
                </a>
            </h1>

            <div>
                {{ $post->excerpt; }}
            </div>
        </article>
    @endforeach
@endsection
