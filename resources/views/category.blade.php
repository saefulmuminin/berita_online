@extends('layout.main')
@section('container')
    <h2 class="text-center mb-3">halaman blog</h2>
    <div class="row ">
        @foreach ($post as $pos)
            <div class="col-4">
                <div class="card border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header text-center">
                        <a class="text-decoration-none " href="/post/{{ $pos->slug }}">{{ $pos->title }}</a>
                        <div class="text-center">
                            <p>by.<a href="/about" class="text-decoration-none">{{ $pos->user->name }} |</a>
                                <a class="text-decoration-none"
                                    href="/categories/{{ $pos->category->slug }}">{{ $pos->category->name }}
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="card-body text-dark">
                        <h5 class="card-title">
                            <h4 class="font-italic text-bold">{{ $pos->autor }}</h4>
                        </h5>
                        <p class="card-text">{{ $pos->excerpt }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
