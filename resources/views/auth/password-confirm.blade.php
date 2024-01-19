<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="{{asset('frontend/css/register.css')}}">
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
                <form method="POST" action="{{ url('user/confirm-password') }}">
                    @csrf
                    <h2>Confirm your password</h2>
                    <div class="inputbox">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                        <label for="">Password</label>
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="button">
                        <input name="confirm" id="confirm" class="btn btn-block login-btn mb-4" type="submit" value="Confirm">
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
