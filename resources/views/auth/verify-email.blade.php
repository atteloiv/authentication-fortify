<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('frontend/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/verify-email.css')}}">
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
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <h4>You must verify your email address,
                        please check your email for a verification link.</h4>
                    @if (session('status') == 'verification-link-sent')
                        <div class="mb-4 font-medium text-sm text-green-600">
                            <h5>A new email verification link has been emailed to you!</h5>
                        </div>
                        @endif
                    <div class="button">
                        <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Resend email">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
