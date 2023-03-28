@extends('layouts.auth')

@section('content')
    <div class="col-lg-6">
        <div class="card mb-4 mx-4">
            <div class="card-body p-4">
                <h1 class="mb-3">Login</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label mb-0">Email</label>
                        <input class="form-control @error('email') is-invalid @enderror" value="{{ @old('email') }}" type="text" name="email" placeholder="Enter your email address" required>
                        @error('email')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label mb-0">Password</label>
                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Enter your password" required>
                        @error('password')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                            <label class="form-check-label" for="remember">
                                Remember me
                            </label>
                        </div>
                    </div>

                    <div class="">
                        <a class="text-decoration-none" href="{{ route('register') }}">Don't have an account?</a>
                        <button class="btn btn-primary float-end" type="submit">{{ __('Login') }}</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection