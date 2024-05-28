@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create Categories</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create New Category</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td class="d-flex gap-1">
                            <a class="badge bg-primary pt-2" href="/dashboard/categories/{{ $category->slug }}"><i
                                    class="bi bi-eye"></i></a>
                            <a class="badge bg-warning pt-2" href="/dashboard/categories/{{ $category->slug }}/edit"><i
                                    class="bi bi-pencil-square"></i></a>
                            <form action="/dashboard/categories/{{ $category->slug }}" method="post">
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
