@extends('layouts.auth')

@section('content')
<main class="form-signin w-100 m-auto">
    <form method="POST" action="{{ route('auth.login') }}">
        @csrf

        <img class="mb-4" src="{{ asset('brand/bootstrap-logo.svg') }}" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please login</h1>

        <div class="form-floating">
            <input type="email"
                class="form-control @error('email') is-invalid @enderror"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="name@example.com"
                required>
            <label for="email">Email address</label>
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="password"
                class="form-control @error('password') is-invalid @enderror"
                id="password"
                name="password"
                placeholder="Password"
                required>
            <label for="password">Password</label>
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
        <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2024</p>
    </form>
</main>

@endsection