@extends('layouts.main')

@section('container')
    <h3>{{ $article->title }}<h3>
    <h5>By: {{ $article->author }}</h5>
    <p>{{ $article->body }}</p>

    <a href="/blog">Back To Blogs</a>
@endsection
