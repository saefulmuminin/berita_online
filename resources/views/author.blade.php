@extends('layout.main')

@section('container')
    <h2 class="text-center mb-3">halaman blog</h2>

    <div class="row">
        @foreach ($posts as $post)
            <div class="col-4">
                <div class="card border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header text-center">
                        <a class="text-decoration-none" href="/post/{{ $post->slug }}">{{ $post->title }}</a>
                        <div class="text-center">
                            <p>by. <a href="/author/{{ $post->user->username }}"
                                    class="text-decoration-none">{{ $post->user->name }}</a> |
                                <a class="text-decoration-none"
                                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                            </p>
                        </div>
                    </div>
                    <div class="card-body text-dark">
                        <h5 class="card-title">
                            <h4 class="font-italic text-bold">{{ $post->autor }}</h4>
                        </h5>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/post/{{ $post->slug }}">baca selengkapnya</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
