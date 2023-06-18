@extends('layout.main')
@section('container')
    <h2 class="text-center mb-3">halaman :blog</h2>
    <div class="row ">
        @foreach ($post as $pos)
            <div class="col-sm-4 col-12">
                <div class="card border-dark mb-3">
                    <div class="card-header"><a class="text-decoration-none text-sm-left text-center d-block"
                            href="/post/{{ $pos->slug }}">{{ $pos->title }}</a>
                        <div class="text-center">
                            <p>by.<a href="/author/{{ $pos->user->username }}"
                                    class="text-decoration-none">{{ $pos->user->name }}
                                    |</a>
                                <a class="text-decoration-none"
                                    href="/categories/{{ $pos->category->slug }}">{{ $pos->category->name }}
                                </a>
                            </p>
                        </div>
                        <img src="https://source.unsplash.com/360x200?programming" alt="programmer"
                            class="w-100 img-fluid rounded">
                    </div>
                    <div class="card-body text-dark">
                        <h5 class="card-title">
                            <h4 class="font-italic text-bold">{{ $pos->autor }}</h4>
                        </h5>
                        <p class="card-text">{{ $pos->excerpt }}</p>
                        <a href="/post/{{ $pos->slug }}"> Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
