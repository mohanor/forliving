<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create account</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/login.css')}}">
</head>
<body>
    <div class="main-div">
        <div class="left-side">
            <img src="{{ asset('/img/pexels-henry-&-co-1406282.jpg')}}" alt="welcome image" class="welcome-img">
        </div>
        <div class="right-side">
            <div></div>
            <div class="wlecome-back">
                <div class="mb-4">
                    <p class="mb-0">Welcome</p>
                    <h1 class="h1-title">Create account</h1>
                </div>
                <form action="" method="post">
                    @csrf
                    <div class="box mb-3">
                        <label for="name" class="label">Your name</label>
                        <input type="text" id="name" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="box mb-3">
                        <label for="email" class="label">Email</label>
                        <input type="email" id="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="box mb-3">
                        <label for="password" class="label">Password</label>
                        <input type="password" id="password" name="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="box mb-3">
                        <label for="c_password" class="label">Confirme Password</label>
                        <input type="password" id="c_password">
                        @error('confirme-password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-between remember-me-box mb-3">
                        <div class="box d-flex">
                            <input type="checkbox" id="remember-me" class="input-check">
                            <label for="remember-me" class="label">Remember me</label>
                        </div>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-success" value="Create your account">
                    </div>
                </form>
            </div>
            <div class="join-free text-center">
                <span>
                    Already have an account?
                    <a href="{{ route('login')}}">Sign-In</a>
                </span>
            </div>
        </div>
    </div>
</body>
</html>