@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Post</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td class="d-flex gap-1">
                            <a class="badge bg-primary pt-2" href="/dashboard/posts/{{ $post->slug }}"><i
                                    class="bi bi-eye"></i></a>
                            <a class="badge bg-warning pt-2" href="/dashboard/posts/{{ $post->slug }}/edit"><i
                                    class="bi bi-pencil-square"></i></a>
                            <form action="/dashboard/posts/{{ $post->slug }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger pt-2 border-0 d-inline" onclick="return confirm('Want to delete this post?')"><i class="bi bi-trash3"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
