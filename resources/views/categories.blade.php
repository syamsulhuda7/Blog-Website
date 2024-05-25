@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Categories </h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <div class="card text-bg-dark border-0 overflow-hidden">
                        <a href="/posts?category={{ $category->slug }}" class="text-decoration-none">
                            <img src="https://source.unsplash.com/500x300?{{ $category->name }}" class="card-img"
                                alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-end p-0">
                                <h5 class="card-title flex-fill text-white text-center bg-dark bg-opacity-50 py-4 px-3 m-0">
                                    {{ $category->name }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
