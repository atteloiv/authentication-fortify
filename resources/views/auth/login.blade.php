<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('frontend/css/login.css')}}">
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
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h2>Hello! Welcome Back</h2>
                    <div class="inputbox">
                        {{-- <input type="email" required> --}}
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email address">
                        <label for="">Email</label>
                        @error('email')
                                <span class="invalid-feedback is-invalid" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="inputbox">
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="***********">
                        <label for="">Password</label>
                        @error('password')
                                <span class="invalid-feedback is-invalid" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="forgot">
                        <label for="">
                            <input type="checkbox"><p>Remember me <a href="{{ route('password.request') }}">Forgot Password?</a></p>
                        </label>
                    </div>
                    <div class="button">
                        <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Login">
                    </div>
                    {{-- <button>Login</button> --}}
                    <div class="register">
                        <p>Don't have an account? <a href="{{ route('register') }}">Create Account</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>

        fetch('/sanctum/csrf-cookie', {
            headers: {
                'content-type': 'application/json',
                'accept': 'application/json'
            },
            credentials: 'include'
        }).then(() =>{

        })

    </script>

</body>
</html>
