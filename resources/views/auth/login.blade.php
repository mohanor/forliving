<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Living el') }} - {{ __('Login')}}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/login.css')}}">
</head>
<body>
    <div class="main-div">
        <div class="left-side">
            <img src="{{ asset('/img/pexels-henry-&-co-1406282.jpg')}}" alt="" class="welcome-img">
        </div>
        <div class="right-side">
            <div></div>
            <div class="wlecome-back">
                <div class="mb-4">
                    <p class="mb-0">{{ __('Welcome back')}}</p>
                    <h1 class="h1-title">{{ __('Login to your account')}}</h1>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="box mb-3">
                        <label for="email" class="label">{{ __('Email')}}</label>
                        <input type="email" id="email" name="email" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="box mb-3">
                        <label for="password" class="label">{{ __('Password')}}</label>
                        <input type="password" name="password" id="password" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-between remember-me-box mb-3">
                        <div class="box d-flex">
                            <input type="checkbox" id="remember-me" class="input-check">
                            <label for="remember-me" class="label">{{ __('Remember me')}}</label>
                        </div>
                        <div class="text-right">
                            <a href="{{ route('password.request') }}" class="forget-password">{{ __('Forgot password?')}}</a>
                        </div>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-success" value="login now">
                    </div>
                </form>
            </div>
            <div class="join-free text-center">
                <span>
                    {{ __('Dont have an account?')}}
                    <a href="{{ route('register')}}">{{ __('Join free today')}}</a>
                </span>
            </div>
        </div>
    </div>
</body>
</html>


