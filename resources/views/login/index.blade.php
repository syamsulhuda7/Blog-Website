@extends('layouts.main')

@section('container')
    <div class="row justify-content-center align-items-center">
        <div class="col-md-4">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <main class="form-signin w-100 mt-5 p-4 border border-1 rounded">
                <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
                <form action="/login" method="post" class="py-4">
                    @csrf
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="email" placeholder="name@example.com" autofocus required  value="{{ old('email') }}">
                        <label for="email">Email address</label>
                    </div>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                            required">
                        <label for="password">Password</label>
                    </div>
                    <button class="btn btn-warning text-light w-100 py-2" type="submit">Login</button>
                </form>
                <small class="d-block text-center pt-4">Not registered yet? <a class="text-warning"
                        href="/register">Register Now!</a></small>
            </main>
        </div>
    </div>
@endsection
