<!DOCTYPE html>
@extends('layout.main')
@section('container')
    <div class="row">
        <div class="col-2">
            <img src="{{ $image }}" alt="saeful" width="200px" height="220px" class="rounded img-thumbnail shadow-sm">
        </div>
        <div class="col-10">
            <p> nama lengkap : {{ $name }}</p>
            <p> alamat email : {{ $email }}</p>
        </div>
    </div>
@endsection
