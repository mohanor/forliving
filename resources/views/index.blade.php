<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Living el') }}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}" type="text/css">
    @livewireStyles
    <style>
        .featured__item__text h6 {
            margin-bottom: 0px;
        }

        .featured__item__text div {
            margin: 5px 0;
        }

        .shipping {
            padding-top: 80px;
            padding-bottom: 40px;
        }

        .shipping h3 {
            font-size: 27px;
            font-weight: 500;
        }

        .m-auto {
            margin: 0 auto;
        }

        .card-head {
            height: 110px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-head img {
            height: 65px;
        }

        .m-set-bg {
            background-repeat: no-repeat;
            background-size: cover;
        }

        .load-more-btn {
            border: 1px solid #b2b2b2;
            font-size: 14px;
            color: #b2b2b2;
            font-weight: 700;
            line-height: 28px;
            text-align: center;
            -webkit-transition: all, 0.3s;
            -moz-transition: all, 0.3s;
            -ms-transition: all, 0.3s;
            -o-transition: all, 0.3s;
            transition: all, 0.3s;
            padding: 7px 24px;
            background: transparent;
        }

        .add-to-cart-btn {
            font-size: 17px;
            color: #fff;
            line-height: 40px;
            text-align: center;
            border: none;
            background: transparent;
            display: block;
        }

        .add-to-cart-btn:hover,
        .load-more-btn:hover{
            background: #7fad39;
            border-color: #7fad39;
            color: #ffffff;
        }

        .to-details:hover {
            text-decoration: underline;
        }

        .featured__item__pic__hover {
            background: #7fad39;
            color: #fff;
            width: 100%;
            padding: 6px 0;
        }

        .header__cart-sidebar {
            text-align: left;
        }

        .col-lf-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .hero__search__phone {
            margin-top: 0;
        }

        .header__cart {
            padding: 10px 0 10px;
        }

        .what-you-need {
            display: none;
        }

        .hero__search__phone__desktop{
            display: none;
        }

        .hero__item {
            justify-content: center;
            padding-left: 0;
        }

        .hero__text {
            text-align: center;
        }

        .hero__text h1,
        .hero__text h3 {
            text-shadow: 0 0 20px rgb(0 0 0 / 60%), 0 0 5px rgb(0 0 0 / 30%);
            color: #fff;
            margin-bottom: 30px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: max(35px, 60px);
        }

        .hero__text h3 {
            margin-bottom: 0;
            font-size: max(18px, 25px);
        }

        .shipping {
            margin-bottom: 50px;
        }

        @media only screen and (min-width : 991px) {
            .hero__search__phone__desktop{
                display: block;
            }

            .hero__search__phone__mobile {
                display: none;
            }
            
            .col-lf-flex {
                justify-content: flex-end;
            }
        }
    </style>
</head>

<body>
    <!-- Page Preloder 
    <div id="preloder">
        <div class="loader"></div>
    </div>-->

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <svg width="50" height="50" x="0" y="0" viewBox="0 0 228.456 228.455" style="enable-background:new 0 0 512 512"><g>
                <g>
                    <g>
                        <path d="M69.559,116.331c13.25-2.661,29.385,0.719,29.385,0.719s-9.153-25.537-29.385-47.087    C49.326,48.425,25.483,38.769,5.256,12.035C-1.003,32.034-5.342,59.241,14.487,80.75    C34.324,102.269,66.914,107.167,69.559,116.331z" fill="#7fad39" data-original="#000000"></path>
                        <path d="M225.604,18.168c0,0-67.433,22.145-87.895,48.893c-20.47,26.744-13.97,43.342-28.178,52.982    c-5.889,3.998-19.232-0.966-30.106-0.487c-8.728,0.398-19.021,2.376-24.714,9.975c-2.869,3.827-2.494,6.388-2.741,9.305    c-4.577,8.757-1.451,13.726-1.451,13.726s2.475-5.062,6.508-4.801c4.036,0.232,6.478,0.505,9.061,0.2    c2.581-0.32,4.24-3.13,8.76-2.789c4.963,0.353,11.108,4.14,11.311,11.269c0.331,11.129-9.269,19.349-8.518,24.041    c0.817,5.062-0.369,6.685-1.112,8.692c-1.054,2.853-17.855-6.528-21.92,0.601c1.382-0.292,5.12-0.063,7.318,0.718    c-2.443,1.09-3.619,2.641-3.611,4.692c2.26-2.437,6.769-1.547,8.313-1.347c-2.614,0.718-3.767,3.419-4.336,4.412    c6.502-2.974,16.353,0.108,18.606,5.146c2.531-4.071,0.818-9.169,0.818-9.169s1.805-2.3,5.416-2.412    c-1.082,3.639,0.336,4.652,0.487,6.5c0.142,1.84-2.016,6.424-4.018,7.643c-2.012,1.189-12.179-0.129-14.711,5.843    c1.521-0.982,6.953-2.353,8.313-1.804c-1.625,0.722-3.07,2.088-3.25,5.069c2.885-3.258,8.666-3.49,9.842-2.89    c-0.719,0.81-2.344,1.271-2.889,4.244c3.526-1.992,10.473-5.778,18.975-2.252c-0.549-5.154-6.69-6.5-6.69-6.5    s-0.815-7.959,5.977-9.033c4.009-0.645,11.093-15.071,14.523-15.938c3.433-0.85,4.332,3.034,3.739,5.037    c-0.6,1.992-7.893,13.024-7.893,13.024s12.53,11.068,31.548,11.806c19.04,0.762,32.269-11.293,32.269-11.293    s-14.904-11.821-27.66-21.94c-12.755-10.135-9.89-25.667-9.89-25.667s17.328,0.031,23.583-12.896    c15.409-31.795,54.906-25.75,66.239-72.963C232.004,41.077,225.604,18.168,225.604,18.168z M60.029,136.291    c-1.495,0-2.711-1.21-2.711-2.729c0-1.486,1.208-2.697,2.711-2.697c1.499,0,2.705,1.202,2.705,2.697    C62.734,135.065,61.528,136.291,60.029,136.291z" fill="#7fad39" data-original="#000000"></path>
                    </g>
                </g>
            </svg>
        </div>
        <div class="humberger__menu__cart text-left">
            @livewire('cart-counter')
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <div>
                    @foreach(config('app.languages') as $langLocale => $langName)
                        @if ($langLocale == config('app.locale'))
                            {{ $langName }}
                            @break
                        @endif
                    @endforeach  
                </div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li>
                        <a class="dropdown-item" href="{{ route('products.indexar')}}">العربية</a>
                    </li>
                    @foreach(config('app.languages') as $langLocale => $langName)
                        @if ($langLocale != config('app.locale'))
                            <li>
                                <a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ $langName }}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="{{ route('login')}}"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="{{ route('products.index')}}">{{ __('Home')}}</a></li>
                <li><a href="{{ route('shoping.cart')}}">{{ __('Shoping Cart')}}</a></li>
                <li><a href="{{ route('contact')}}">{{ __('Contact')}}</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@tiiitsuit.com</li>
                <li>{{ __('Free Shipping for all Order of $99')}}</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@tiiitsuit.com</li>
                                <li>{{ __('Free Shipping for all Order of $99')}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>
                                    @foreach(config('app.languages') as $langLocale => $langName)
                                        @if ($langLocale == config('app.locale'))
                                            {{ $langName }}
                                            @break
                                        @endif
                                    @endforeach                                    
                                </div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('products.indexar')}}">العربية</a>
                                    </li>
                                    @foreach(config('app.languages') as $langLocale => $langName)
                                        <li>
                                            <a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ $langName }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            @guest
                                @if (Route::has('login'))
                                    <div class="header__top__right__auth">
                                        <a href="{{ route('login')}}"><i class="fa fa-user"></i> {{ __('Login')}}</a>
                                    </div>
                                @endif

                                @if (Route::has('register'))
                                    <div class="header__top__right__auth">
                                        <a href="{{ route('register')}}"><i class="fa fa-user-plus"></i> {{ __('Register')}}</a>
                                    </div>
                                @endif
                            @else
                                <div class="header__top__right__auth">
                                    @if (Auth::user()->role == 'client')
                                        <a href="{{ route('home')}}"><i class="fa fa-user"></i> {{ __('Profile')}}</a>
                                    @else
                                        <a href="{{ route('dashbord')}}"><i class="fa fa-user"></i> {{ __('Profile')}}</a>
                                    @endif
                                </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{ route('products.index')}}">
                            <!-- <img src="img/newlogo.png" style="height: 40px"> -->
                            <svg width="50" height="50" x="0" y="0" viewBox="0 0 228.456 228.455" style="enable-background:new 0 0 512 512"><g>
                                <g>
                                    <g>
                                        <path d="M69.559,116.331c13.25-2.661,29.385,0.719,29.385,0.719s-9.153-25.537-29.385-47.087    C49.326,48.425,25.483,38.769,5.256,12.035C-1.003,32.034-5.342,59.241,14.487,80.75    C34.324,102.269,66.914,107.167,69.559,116.331z" fill="#7fad39" data-original="#000000"></path>
                                        <path d="M225.604,18.168c0,0-67.433,22.145-87.895,48.893c-20.47,26.744-13.97,43.342-28.178,52.982    c-5.889,3.998-19.232-0.966-30.106-0.487c-8.728,0.398-19.021,2.376-24.714,9.975c-2.869,3.827-2.494,6.388-2.741,9.305    c-4.577,8.757-1.451,13.726-1.451,13.726s2.475-5.062,6.508-4.801c4.036,0.232,6.478,0.505,9.061,0.2    c2.581-0.32,4.24-3.13,8.76-2.789c4.963,0.353,11.108,4.14,11.311,11.269c0.331,11.129-9.269,19.349-8.518,24.041    c0.817,5.062-0.369,6.685-1.112,8.692c-1.054,2.853-17.855-6.528-21.92,0.601c1.382-0.292,5.12-0.063,7.318,0.718    c-2.443,1.09-3.619,2.641-3.611,4.692c2.26-2.437,6.769-1.547,8.313-1.347c-2.614,0.718-3.767,3.419-4.336,4.412    c6.502-2.974,16.353,0.108,18.606,5.146c2.531-4.071,0.818-9.169,0.818-9.169s1.805-2.3,5.416-2.412    c-1.082,3.639,0.336,4.652,0.487,6.5c0.142,1.84-2.016,6.424-4.018,7.643c-2.012,1.189-12.179-0.129-14.711,5.843    c1.521-0.982,6.953-2.353,8.313-1.804c-1.625,0.722-3.07,2.088-3.25,5.069c2.885-3.258,8.666-3.49,9.842-2.89    c-0.719,0.81-2.344,1.271-2.889,4.244c3.526-1.992,10.473-5.778,18.975-2.252c-0.549-5.154-6.69-6.5-6.69-6.5    s-0.815-7.959,5.977-9.033c4.009-0.645,11.093-15.071,14.523-15.938c3.433-0.85,4.332,3.034,3.739,5.037    c-0.6,1.992-7.893,13.024-7.893,13.024s12.53,11.068,31.548,11.806c19.04,0.762,32.269-11.293,32.269-11.293    s-14.904-11.821-27.66-21.94c-12.755-10.135-9.89-25.667-9.89-25.667s17.328,0.031,23.583-12.896    c15.409-31.795,54.906-25.75,66.239-72.963C232.004,41.077,225.604,18.168,225.604,18.168z M60.029,136.291    c-1.495,0-2.711-1.21-2.711-2.729c0-1.486,1.208-2.697,2.711-2.697c1.499,0,2.705,1.202,2.705,2.697    C62.734,135.065,61.528,136.291,60.029,136.291z" fill="#7fad39" data-original="#000000"></path>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{ route('products.index')}}">{{ __('Home')}}</a></li>
                            <li><a href="{{ route('shoping.cart')}}">{{ __('Shoping Cart')}}</a></li>
                            <li><a href="{{ route('contact')}}">{{ __('Contact')}}</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-lf-flex">
                    @livewire('cart-counter')
                    <div class="hero__search__phone hero__search__phone__mobile">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+65 11.188.888</h5>
                            <span>{{ __('support 24/7 time')}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action = "{{ route('result')}}" method="POST">
                                @csrf
                                <div class="what-you-need">
                                    <select name="category" id="">
                                        <option value="all" selected>{{ __('all categories')}}</option>
                                        @foreach($categories as $item) 
                                            <option value="{{$item->name}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <input type="text" name="serach" placeholder="What do yo u need?" wire:model="searchWord">
                                <button type="submit" class="site-btn">{{ __('SEARCH')}}</button>
                            </form>
                        </div>
                        <div class="hero__search__phone hero__search__phone__desktop">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>{{ __('support 24/7 time')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="{{ asset('img/nos-produits.jpeg')}}">
                        <div class="hero__text">
                            <h1>{{ __('our products')}}</h1>
                            <h3>{{ __('everything for your well-begin')}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach($categories as $item) 
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="{{asset('/storage/categories/' . $item->photo . '')}}">
                                <h5><a href="#">{{$item->name}}</a></h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    @livewire('products-grid')
    <!-- Featured Section End -->

    <!-- Banner End -->
    <section class="shipping">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-4 col-mg-b">
                    <div class="text-center m-50 m-auto">
                        <div class="card-head">
                            <img src="./img/media/shipping.svg" alt="">
                            <h3>{{ __('FREE SHIPPING')}}</h3>
                        </div>
                        <div class="desc mt-3">
                            <p class="mt-2">
                                {{ __('Products more than 750 dh')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-mg-b">
                    <div class="text-center m-50 m-auto">
                        <div class="card-head align-items-center">
                            <svg width="70" height="70" x="0" y="0" viewBox="0 0 511.992 511.992" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                <g>
                                    <path d="m412.029 340.554 15.39-8.853c10.649-5.746 17.256-16.806 17.256-28.923l-.063-39.351 19.58-33.788c6.09-10.239 6.169-22.99.2-33.297l-19.78-34.135.063-39.35c0-.145-.003-.29-.009-.434-.155-11.561-6.438-22.277-16.467-28.041l-34.134-19.635-19.187-33.353c-5.745-10.648-16.805-17.255-28.922-17.255l-39.352.062-33.783-19.576c-10.238-6.092-22.993-6.172-33.301-.203l-34.135 19.78-39.35-.063c-.137-.002-.279.003-.418.008-11.566.151-22.291 6.435-28.056 16.467l-19.635 34.133-33.356 19.189c-10.646 5.747-17.252 16.806-17.252 28.921l.063 39.351-19.577 33.783c-6.092 10.241-6.172 22.995-.203 33.302l19.78 34.135-.063 39.349c0 .146.003.292.009.438.157 11.559 6.439 22.273 16.467 28.037l16.171 9.302-55.455 96.049c-1.934 3.35-1.763 7.515.44 10.694s6.041 4.804 9.858 4.17l69.012-11.456 24.585 65.494c1.359 3.622 4.685 6.134 8.54 6.452.276.022.551.034.824.034 3.55 0 6.862-1.89 8.658-5l55.432-96.012 17.311 10.031c5.181 3.083 11.004 4.626 16.829 4.625 5.689 0 11.38-1.473 16.473-4.422l17.662-10.234 55.433 96.012c1.796 3.11 5.107 5 8.658 5 .272 0 .548-.011.823-.034 3.855-.318 7.182-2.831 8.541-6.452l24.584-65.494 69.012 11.456c3.813.636 7.654-.991 9.857-4.17s2.375-7.344.44-10.694zm-252.339 138.107-20.036-53.374c-1.679-4.473-6.288-7.13-11-6.351l-56.241 9.336 44.886-77.745.627.361 19.186 33.353c5.746 10.649 16.806 17.255 28.922 17.255l38.24-.06zm102.756-74.753c-4.044 2.342-9.053 2.304-13.072-.099-.039-.023-.077-.046-.116-.068l-36.176-20.963c-1.523-.883-3.253-1.348-5.014-1.348-.005 0-.01 0-.016 0l-42.032.066c-4.754 0-9.099-2.611-11.339-6.814-.051-.095-.103-.19-.157-.284l-20.605-35.82c-.88-1.531-2.151-2.801-3.682-3.682l-36.474-20.981c-3.968-2.28-6.435-6.545-6.439-11.13 0-.107-.002-.213-.005-.32l.066-41.701c.002-1.766-.462-3.501-1.348-5.029l-21.131-36.466c-2.342-4.043-2.304-9.053.098-13.073.023-.039.046-.077.068-.116l20.964-36.176c.885-1.528 1.351-3.263 1.348-5.029l-.066-42.032c0-4.754 2.611-9.1 6.814-11.339.095-.051.19-.103.283-.157l35.821-20.605c1.531-.88 2.801-2.151 3.682-3.682l20.981-36.474c2.28-3.967 6.545-6.435 11.131-6.439.101 0 .202-.002.302-.005l41.718.066h.016c1.761 0 3.49-.465 5.014-1.348l36.466-21.131c4.042-2.342 9.051-2.304 13.072.098.039.023.077.046.116.068l36.177 20.963c1.523.883 3.253 1.348 5.014 1.348h.016l42.032-.066c4.754 0 9.099 2.611 11.339 6.814.051.095.104.19.157.284l20.605 35.82c.881 1.531 2.15 2.801 3.682 3.682l36.475 20.981c3.967 2.28 6.434 6.545 6.438 11.13 0 .106.002.211.006.316l-.066 41.704c-.003 1.766.462 3.501 1.348 5.029l21.131 36.465c2.342 4.044 2.304 9.053-.099 13.072-.022.039-.046.078-.068.117l-20.964 36.177c-.886 1.528-1.351 3.263-1.348 5.029l.066 42.032c0 4.754-2.611 9.1-6.814 11.339-.096.051-.19.103-.284.157l-35.82 20.605c-1.531.88-2.801 2.151-3.682 3.682l-20.981 36.475c-2.28 3.967-6.545 6.434-11.13 6.438-.103 0-.205.002-.307.005l-41.714-.066c-.005 0-.011 0-.016 0-1.761 0-3.49.465-5.014 1.348zm120.891 15.028c-4.71-.785-9.321 1.878-11 6.351l-20.035 53.374-44.586-77.225 38.24.061c.14-.003.281-.003.421-.008 11.565-.152 22.288-6.436 28.053-16.467l19.635-34.133.627-.361 44.886 77.746z" fill="#7fad39" data-original="#000000"></path>
                                    <path d="m403.405 212.818c0-81.282-66.127-147.409-147.409-147.409-22.558 0-44.216 4.969-64.374 14.77-4.967 2.415-7.036 8.399-4.621 13.366 2.414 4.967 8.397 7.036 13.366 4.621 17.41-8.464 36.126-12.756 55.629-12.756 66.888 0 121.901 51.812 127.018 117.409h-254.037c1.221-15.91 5.36-31.222 12.369-45.635 2.415-4.967.347-10.951-4.62-13.366-4.967-2.414-10.951-.346-13.366 4.62-9.803 20.159-14.773 41.82-14.773 64.381 0 81.282 66.128 147.409 147.41 147.409s147.408-66.128 147.408-147.41zm-274.427 10h254.036c-1.361 17.45-6.258 33.922-13.965 48.705h-226.106c-7.708-14.783-12.604-31.255-13.965-48.705zm127.018 117.409c-40.573 0-76.777-19.064-100.126-48.704h200.252c-23.35 29.64-59.553 48.704-100.126 48.704z" fill="#7fad39" data-original="#000000"></path>
                                    <path d="m158.831 125.652c2.721 0 5.432-1.104 7.406-3.275 3.715-4.086 3.414-10.411-.673-14.126-4.086-3.715-10.411-3.414-14.126.673l-.005.005c-3.715 4.086-3.411 10.408.675 14.123 1.916 1.741 4.323 2.6 6.723 2.6z" fill="#7fad39" data-original="#000000">
                                    </path>
                                </g>
                            </svg>
                            <h3 class="mt-2">{{ __('original products')}}</h3>
                        </div>
                        <div class="desc mt-3">
                            <p class="mt-2">
                                {{ __('Follow us on Facebook')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-mg-b">
                    <div class="text-center m-50 m-auto">
                        <div class="card-head align-items-center">
                        <svg width="70" height="70" x="0" y="0" viewBox="0 0 512.003 512.003" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                <g>
                                    <g>
                                        <g>
                                            <path d="M477.958,262.633c-2.06-4.215-2.06-9.049,0-13.263l19.096-39.065c10.632-21.751,2.208-47.676-19.178-59.023l-38.41-20.38    c-4.144-2.198-6.985-6.11-7.796-10.729l-7.512-42.829c-4.183-23.846-26.241-39.87-50.208-36.479l-43.053,6.09    c-4.647,0.656-9.242-0.838-12.613-4.099l-31.251-30.232c-17.401-16.834-44.661-16.835-62.061,0L193.72,42.859    c-3.372,3.262-7.967,4.753-12.613,4.099l-43.053-6.09c-23.975-3.393-46.025,12.633-50.208,36.479l-7.512,42.827    c-0.811,4.62-3.652,8.531-7.795,10.73l-38.41,20.38c-21.386,11.346-29.81,37.273-19.178,59.024l19.095,39.064    c2.06,4.215,2.06,9.049,0,13.263l-19.096,39.064c-10.632,21.751-2.208,47.676,19.178,59.023l38.41,20.38    c4.144,2.198,6.985,6.11,7.796,10.729l7.512,42.829c3.808,21.708,22.422,36.932,43.815,36.93c2.107,0,4.245-0.148,6.394-0.452    l43.053-6.09c4.643-0.659,9.241,0.838,12.613,4.099l31.251,30.232c8.702,8.418,19.864,12.626,31.03,12.625    c11.163-0.001,22.332-4.209,31.03-12.625l31.252-30.232c3.372-3.261,7.968-4.751,12.613-4.099l43.053,6.09    c23.978,3.392,46.025-12.633,50.208-36.479l7.513-42.827c0.811-4.62,3.652-8.531,7.795-10.73l38.41-20.38    c21.386-11.346,29.81-37.273,19.178-59.024L477.958,262.633z M196.941,123.116c29.852,0,54.139,24.287,54.139,54.139    s-24.287,54.139-54.139,54.139s-54.139-24.287-54.139-54.139S167.089,123.116,196.941,123.116z M168.997,363.886    c-2.883,2.883-6.662,4.325-10.44,4.325s-7.558-1.441-10.44-4.325c-5.766-5.766-5.766-15.115,0-20.881l194.889-194.889    c5.765-5.766,15.115-5.766,20.881,0c5.766,5.766,5.766,15.115,0,20.881L168.997,363.886z M315.061,388.888    c-29.852,0-54.139-24.287-54.139-54.139s24.287-54.139,54.139-54.139c29.852,0,54.139,24.287,54.139,54.139    S344.913,388.888,315.061,388.888z" fill="#7fad39" data-original="#000000"></path>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M315.061,310.141c-13.569,0-24.609,11.039-24.609,24.608s11.039,24.608,24.609,24.608    c13.569,0,24.608-11.039,24.608-24.608S328.63,310.141,315.061,310.141z" fill="#7fad39" data-original="#000000"></path>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M196.941,152.646c-13.569,0-24.608,11.039-24.608,24.608c0,13.569,11.039,24.609,24.608,24.609    c13.569,0,24.609-11.039,24.609-24.609C221.549,163.686,210.51,152.646,196.941,152.646z" fill="#7fad39" data-original="#000000"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <h3>{{ __('Offers and discounts')}}</h3>
                        </div>
                        <div class="desc mt-3">
                            <p class="mt-2">
                                {{ __('All products of the American company Forever')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>{{ __('Address: 60-49 Road 11378 New York')}}</li>
                            <li>{{ __('Phone: +65 11.188.888')}}</li>
                            <li>{{ __('Email: hello@tiiitsuit.com')}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>{{ __('Useful Links')}}</h6>
                        <ul>
                            <li><a href="#">{{ __('About Us')}}</a></li>
                            <li><a href="#">{{ __('About Our Shop')}}</a></li>
                            <li><a href="#">{{ __('Secure Shopping')}}</a></li>
                            <li><a href="#">{{ __('Delivery infomation')}}</a></li>
                            <li><a href="#">{{ __('Privacy Policy')}}</a></li>
                            <li><a href="#">{{ __('Our Sitemap')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>{{ __('Join Our Newsletter Now')}}</h6>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{ asset('js/mixitup.min.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
    @livewireScripts
</body>

</html>