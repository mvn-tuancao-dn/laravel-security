@extends('layouts.app')

@section('content')
<div class="container sigin" id="container">

    <div class="container" id="container">
        <div class="form-container sign-up-container">
        <form method="POST" action="{{ route('register') }}">
                        @csrf
                <h1>Sign Up</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#" class="social"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a href="#" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input id="password-confirm" type="password"  placeholder="Password Confirm"class="form-control" name="password_confirmation" required autocomplete="new-password">

                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <a href="{{ route('login') }}"><button class="ghost">Sign In</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


