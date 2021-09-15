@extends('layouts.app')

@section('content')

<div class="container sigin" id="container">
    <div class="form-container sign-in-container">
        <form method="POST" action="{{ route('login.user') }}">
            @csrf
            <h1>Sign in</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#" class="social"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                <a href="#" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
            <span>or use your account</span>
            <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" required class="@error('email') is-invalid @enderror"/>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="password" placeholder="Password" name="password" class="@error('password') is-invalid @enderror"/>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <p class="remember">
                <input type="checkbox" id="remember" name="remember_token" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember-me">Remember me</label>
            </p>
            <button type="submit">Sign In</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <a href="{{ route('register') }}"><button class="ghost">Sign Up</button></a>
            </div>
        </div>
    </div>
</div>

@endsection
