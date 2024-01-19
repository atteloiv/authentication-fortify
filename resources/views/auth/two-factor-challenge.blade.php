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
                <form method="POST" action="{{ url('/two-factor-challenge') }}">
                    @csrf
                    <h2>Enter your authentication code to login</h2>
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="inputbox">
                        <input type="text" name="code" placeholder="Enter code">
                    </div>
                    {{-- <div class="button">
                        <input name="confirm" id="confirm" class="btn btn-block login-btn mb-4" type="submit" value="Confirm">
                    </div> --}}
                    <div class="inputbox">
                        <input type="text" name="recovery_code" placeholder="Enter recovery code">
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
