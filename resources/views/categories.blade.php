@extends('layout.main')
@section('container')
    <h2 class="text-center mb-3">halaman categories</h2>
    @foreach ($categories as $category)
        <ul>
            <li><a class="text-decoration-none"href="/categories/{{ $category->slug }}">{{ $category->name }}</a></li>
        </ul>
    @endforeach
@endsection
