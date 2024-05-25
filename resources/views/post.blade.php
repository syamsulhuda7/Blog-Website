@extends('layouts.main')

@section('container')

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h1 class="mb-5">{{ $post->title }}</h1>

                    <p>By. <a class="text-decoration-none"
                            href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                            class="text-decoration-none"
                            href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>

                            <img src="https://source.unsplash.com/1200x500?{{ $post->category->name }}" class="img-fluid mb-2" />

                    {!! $post->body !!}

                    <a class="text-decoration-none" href="/posts">&laquo; Back to Posts</a>

                </div>
            </div>
        </div>

@endsection
