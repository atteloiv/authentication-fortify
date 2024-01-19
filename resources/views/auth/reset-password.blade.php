<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="{{asset('frontend/css/register.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/reset-password.css')}}">
</head>
<body>
    <section>
        <div class="wrapper">
            <div class="ellipse_4"></div>
            <div class="ellipse_5"></div>
            <div class="heart"></div>
        </div>
        <div class="form-box">
            <div class="form-value">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    <h2>Enter a new password</h2>
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="inputbox">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $request->email }}" required autocomplete="email" placeholder="Email address">
                        <label for="">Email</label>
                        @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="inputbox">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                        <label for="">Password</label>
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="inputbox">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
                        <label for="" style="white-space: nowrap">Confirm Password</label>
                    </div>
                    <div class="button">
                        <input name="confirm" id="confirm" class="btn btn-block login-btn mb-4" type="submit" value="Confirm">
                    </div>
                    {{-- <button>Registration</button> --}}
                    <div class="register">
                        <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
        <div class="img-box">
            <h2>Join Us</h2>
            <h3>Let’s make your dream in reality</h3>
        </div>
    </section>
</body>
</html>
