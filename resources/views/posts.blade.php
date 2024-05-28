@extends('layouts.main')

@section('container')
    <div class="row mb-5">
        <div class="col-md-8">
            <h1>{{ $title }}</h1>
        </div>
        <div class="col-md-4">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-warning text-white" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if (count($posts))
        <div class="card mb-3 overflow-hidden">
            @if ($posts[0]->image)
                <img style="max-height: 300px; overflow:hidden" src="{{ asset('storage/' . $posts[0]->image) }}"
                    class="img-fluid" />
            @else
                <img src="https://source.unsplash.com/1200x300?{{ $posts[0]->category->name }}" class="card-img-top"
                    alt="{{ $posts[0]->category->name }}">
            @endif
            <div class="card-body text-center">

                <a style="color: black" class="text-decoration-none" href="/posts/{{ $posts[0]->slug }}">
                    <h2 class="card-title">{{ $posts[0]->title }}</h2>
                </a>

                <small class="text-body-secondary">
                    <p>By. <a class="text-decoration-none"
                            href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a
                            class="text-decoration-none"
                            href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}</p>
                </small>

                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                <a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read more &raquo;</a>

            </div>
        </div>



        <div class="container">
            <div class="row justify-content-center">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 my-2">
                        <div class="card overflow-hidden">
                            <a href="/posts?category={{ $post->category->slug }}"
                                class="position-absolute text-decoration-none text-white bg-dark bg-opacity-50 py-2 px-3">{{ $post->category->name }}</a>
                            @if ($post->image)
                                <img style="max-height: 400px; max-width:500px; overflow:hidden"
                                    src="{{ asset('storage/' . $post->image) }}" class="img-fluid" />
                            @else
                                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                    class="card-img-top" alt="{{ $post->category->name }}">
                            @endif

                            <div class="card-body">

                                <h5 class="card-title">{{ $post->title }}</h5>

                                <p>By. <a class="text-decoration-none"
                                        href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> |
                                    {{ $post->created_at->diffForHumans() }}</p>

                                <p class="card-text">{{ $post->excerpt }}</p>

                                <a class="text-decoration-none btn btn-primary" href="/posts/{{ $post->slug }}">Read more
                                    &raquo;</a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">---No Post Found---</p>
    @endif

    <div class="d-flex justify-content-center my-4">
        {{ $posts->links() }}
    </div>

@endsection
