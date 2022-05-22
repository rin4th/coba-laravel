@extends('layouts.main')

@section('container')
    <h2> Category </h2>
    <ul>
    @foreach ($categories as $category) 
    <li>
    <h4>
        <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
    </h4>    
    </li>
    @endforeach
    </ul>
     
@endsection
