@extends('layout.main')

@section('container')
    <h1 class="text-center">halaman single post</h1>
    <article>
        <p>By. <a class="text-decoration-none" href="/author/">{{ $post->user->name }} |</a> <a class="text-decoration-none"
                href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <h5>{{ $post->autor }}</h5>
        {!! $post->body !!}
    </article>



    <a href="/blog"> back to post</a>
@endsection
