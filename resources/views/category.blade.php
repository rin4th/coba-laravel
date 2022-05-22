@extends('layouts.main')

@section('container')

    <h2> Tags: {{ $title }}</h2>
    @foreach ($categories->post as $name) 
    <article class="mb-5">
    <h3>
        <a href="/blog/{{ $name->slug }}">{{ $name->title }}</a>
    </h3>    
    <h5>by: {{ $name->author }}</h5>
    <p>{{ $name->excerpt }}</p>
    </article>
    @endforeach
     
@endsection
