@extends('layouts.app')

@section('content')
    @php
        $logo = \App\Models\Logo::latest()->first();
    @endphp
    <section class="vh-100" style="background:url({{ asset('assets/login.avif') }});height: 100vh;background-size: cover;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong bg-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <img src="{{ asset($logo->logo_image) }}" class="my-3" width="150px" alt="">
                            <h3 class="mb-5">Sign in</h3>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="login" class="form-label">{{ __('Email Address') }}</label>
                                    <input class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus id="email"
                                        type="email" placeholder="Enter your email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror" required
                                            autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-6 col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="url" value="{{ $url ?? null }}">
                                <input type="hidden" name="book_id" value="{{ $book_id ?? null }}">

                                <div class="text-center d-grid">
                                    <button class="btn btn-info btn-lg btn-block form-control" type="submit">Login</button>
                                </div>

                            </form>

                            <hr class="my-4">

                            <div class="text-center">
                                <p>New member? <a href="{{ route('register') }}">Register</a> here.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
