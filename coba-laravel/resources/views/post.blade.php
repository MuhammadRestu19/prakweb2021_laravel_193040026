@extends('layouts.main')
@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
        <h2 class="mb-3">{{ $post->title }}</h2>
        <p>By. <a href="/posts?author={{ $post->author->username}} "  class="text-decoration-none"> $post->author->name  }}></a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
<h5>{{ $post->author }}</h5>

@if ($post->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img class="img-fluid" src="{{ asset('storage/' .$post->image) }}" alt="{{ $post->category->name }}">
            </div>
          @else
            <img class="img-fluid" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}">
          @endif
<article class="my-3 fs-5">
{!! $post->body !!}
</article>
<a href="/blog" class="d-block mt-3">back to posts</a>
        </div>
    </div>
</div>



@endsection
