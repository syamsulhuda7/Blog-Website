@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="my-5">{{ $post->title }}</h1>

                <div class="d-flex gap-2">
                    <a href="/dashboard/posts" class="btn btn-primary">&laquo; Back to all my Post</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i
                            class="bi bi-pencil-square"></i> Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Want to delete this post?')"><i
                                class="bi bi-trash3"></i> Delete</button>
                    </form>
                </div>

                @if ($post->image)
                    <img style="max-height: 350px; overflow:hidden" src="{{ asset('storage/' . $post->image) }}"
                        class="img-fluid my-4" />
                @else
                    <img src="https://source.unsplash.com/1200x500?{{ $post->category->name }}" class="img-fluid my-4" />
                @endif

                {!! $post->body !!}


            </div>
        </div>
    </div>
@endsection
