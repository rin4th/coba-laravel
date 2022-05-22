@extends('layouts.main')

@section('container')
    <h3>{{ $article->title }}</h3>
    <p>Tags: <a href="/categories/{{ $article->category->slug }}">{{ $article->category->name }}</a></p>
    <h5>By: {{ $article->author }}</h5>
    <p>{{ $article->body }}</p>

    <a href="/blog">Back To Blogs</a>
@endsection
