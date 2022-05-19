@extends('layouts.main')

@section('container')

    <h1>Halaman About</h1>
    <hr>
    <p>Authour : {{ $name }}</p>
    <p>Email    : {{ $email }}</p>
    <p>Universitas : {{ $univ }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200px" class="img-thumbnail rounded-circle">

@endsection
