<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('frontend/css/home.css')}}">
</head>
<body>
    <section>
        <div class="wrapper">
            <div class="ellipse_4"></div>
            <div class="ellipse_5"></div>
            <div class="heart"></div>

        </div>
        <div class="img-box">
            <h2>Welcome</h2>
            <div class="logout">
                <form method="POST" action="{{ url('logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </div>
            @if(! auth()->user()->two_factor_secret)
                <h3>You have not enabled 2fa</h3>
                <form method="POST" action="{{ url('user/two-factor-authentication') }}">
                    @csrf
                    <div class="button">
                        <input name="enable" id="enable" class="btn btn-block login-btn mb-4" type="submit" value="Enable">
                    </div>
                </form>
            @else
                <h3>You have 2fa enabled</h3>
                <form method="POST" action="{{ url('user/two-factor-authentication') }}">
                    @csrf
                    @method('DELETE')
                    <div class="button">
                        <input name="disable" id="disable" class="btn btn-block login-btn mb-4" type="submit" value="Disable">
                    </div>
                </form>
            @endif

            <div class="secure">
                <div class="QR">
                @if (session('status') == 'two-factor-authentication-enabled')
                    <h4>You have now enabled 2fa, please scan the following
                        QR code into your phones authenticator application:</h4>
                    <div class="QR-scan">{!! auth()->user()->twoFactorQrCodeSvg() !!}</div>
                    <br><br>
                </div>
                <div class="codes">
                    <h4>Please store theses recovery
                        codes in a secure location:</h4><br><br>
                    @foreach(json_decode(decrypt(auth()->user()->two_factor_recovery_codes, true)) as $code)
                        <h6>{{ trim($code) }}</h6> <br>
                    @endforeach
                @endif
                </div>
            </div>
            </form>
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
