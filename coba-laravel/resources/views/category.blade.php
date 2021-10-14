
@extends('layouts.main')

@section('container')

@foreach($posts as $post)
    <h1class="mb-5">Post Category : {{ $category }}</h1>
    <h2>
        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
    </h2>
    <h5>by : {{ $post["author"]}}</h5>
    <p>{{ $post->body}}</p>

@endforeach

@endsection