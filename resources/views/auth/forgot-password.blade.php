<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('frontend/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/forgot-password.css')}}">
</head>
<body>
    <section>
        <div class="wrapper">
            <div class="ellipse_4"></div>
            <div class="ellipse_5"></div>
            <div class="heart"></div>
        </div>
        <div class="img-box">
            <h2>Join Us</h2>
            <h3>Let’s make your dream in reality</h3>
        </div>
        <div class="form-box">
            <div class="form-value">
                <form method="POST" action="{{ route('password.request') }}">
                    @csrf
                    <h2>Reset password</h2>
                    @if(session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            <h5>{{ session('status') }}</h5>
                        </div>
                    @endif
                    <div class="inputbox">
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address">
                        <label for="">Email</label>
                        @error('email')
                                <span class="invalid-feedback is-invalid" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="button">
                        <input name="reset" id="reset" class="btn btn-block login-btn mb-4" type="submit" value="Reset">
                    </div>
                    {{-- <button>Login</button> --}}
                    <div class="register">
                        <p>Don't have an account? <a href="{{ route('register') }}">Create Account</a></p>
                    </div>
                </form>
