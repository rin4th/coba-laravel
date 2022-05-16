@extends('layouts.main')

@section('container')
    @foreach ($posts as $post) 
    <article class="mb-5">
    <h3>
        <a href="blog/{{ $post["slug"] }}">{{ $post["judul"] }}</a>
    </h3>    
        <h5>by: {{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>
    @endforeach
     
@endsection
