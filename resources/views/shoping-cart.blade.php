<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <style>
        .input-qty {
            width: 50px;
            text-align: center;
            border: none;
        }

        .qtybtn,
        .icon_close {
            border: none;
            background: transparent;
            font-weight: 900;
        }
    </style>
    @livewireStyles
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href=""><img src="img/newlogo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" style="height: 40px" alt=".">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
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
                        <a href="{{ route('home')}}"><i class="fa fa-user"></i> {{ __('Profile')}}</a>
                    </div>
            @endguest
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">{{ __('Home')}}</a></li>
                <li><a href="./shop-grid.html">{{ __('Shop')}}</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
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
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">العربية</a></li>
                                    <li><a href="#">Franch</a></li>
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
                                    <a href="{{ route('home')}}"><i class="fa fa-user"></i> {{ __('Profile')}}</a>
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
                        <a href="{{ route('products.index')}}"><img src="img/newlogo.png" style="height: 40px"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="{{ route('products.index')}}">{{ __('Home')}}</a></li>
                            <li class="active"><a href="{{ route('shoping.cart')}}">{{ __('Shoping Cart')}}</a></li>
                            <li><a href="{{ route('contact')}}">{{ __('Contact')}}</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    @livewire('cart-counter')
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action = "{{ route('result')}}" method="POST">
                                @csrf
                                <div>
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
                        <div class="hero__search__phone">
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
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="https://images.pexels.com/photos/5926217/pexels-photo-5926217.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" style="background-position: 0px -478px;background-size: cover;background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>{{ __('Shopping Cart')}}</h2>
                        <div class="breadcrumb__option">
                            <a href="/index">{{ __('Home')}}</a>
                            <span>{{ __('Shopping Cart')}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    @livewire('shoping-cart')
    <!-- Shoping Cart Section End -->

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
                            <li>{{ __('Email: hello@colorlib.com')}}</li>
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
                        <ul>
                            <li><a href="#">{{ __('Who We Are')}}</a></li>
                            <li><a href="#">{{ __('Our Services')}}</a></li>
                            <li><a href="#">{{ __('Projects')}}</a></li>
                            <li><a href="#">{{ __('Contact')}}</a></li>
                            <li><a href="#">{{ __('Innovation')}}</a></li>
                            <li><a href="#">{{ __('Testimonials')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>{{ __('Join Our Newsletter Now')}}</h6>
                        <p>{{ __('Get E-mail updates about our latest shop and special offers.')}}</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">{{ __('Subscribe')}}</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    @livewireScripts

</body>

</html>