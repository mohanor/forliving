<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" type="text/css">
    <title>Document</title>
    <style>
        html,
        body {
            height: 100%;
            font-family: "Cairo", sans-serif;
            -webkit-font-smoothing: antialiased;
            font-smoothing: antialiased;
        }

        body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        input {
            width: 100%;
            height: 35px;
        }

        .main {
            width: 90%;
            padding: 25px;
            box-shadow: 0 1px 2px rgb(0 0 0 / 10%), 0 2px 4px rgb(0 0 0 / 10%);
            margin: 0 auto;
        }

        label {
            padding-right: 0 !important;
            padding-left: 0 !important;
        }

        .h1-title {
            font-size: min(8vw, 30px) !important;
        }

        @media (min-width: 570px) {
            .main {
                width: 80%;
            }
            input {
                width: min(80%, 414px);
            }
        }

        @media (min-width: 900px) {
            .main {
                width: min(50%, 500px);
            }
        }
    </style>
</head>
<body>
    <div></div>
    <div class="main">
        <h1 class="h1-title">{{ __('Verify Your Email Address') }}</h1>
            <div>
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif
                <p>
                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                </p>
                <form method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn btn-success">{{ __('click here to request another') }}</button>.
                </form>
            </div>
        </div>
    </div>
    <div></div>
</body>
</html>            