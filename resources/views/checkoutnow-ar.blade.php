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
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/rtl-style.css')}}">

    <style>
        .breadcrumb__option a:after {
            right: auto;
            left: -12px;
        }

        .breadcrumb__option a {
            margin-right: 0;
            margin-left: 20px;
        }

        .checkout__form {
            text-align: right;
        }

        .checkout__order .checkout__order__products span {
            float: left;
        }

        .checkout__order .checkout__order__total span {
            float: left;
        }

        .checkout__order ul li span {
            float: left;
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="{{ asset('img/logo.png')}}" alt="logo" class="logo"></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>????????</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                    <li><a href="#">????????</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">???????????? ????????????????</a></li>
                <li><a href="./shop-grid.html">??????</a></li>
                <li><a href="./contact.html">????????</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@tiiitsuit.com</li>
                <li>?????? ?????????? ?????????? ?????????????? ?????????? 99 ??????????????</li>
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
                                <li>?????? ?????????? ?????????? ?????????????? ?????????? 99 ??????????????</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>????????</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">????????</a></li>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Franch</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> ?????????? ????????????</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-rtl">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{ asset('img/logo.png')}}" class="logo" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.html">???????????? ????????????????</a></li>
                            <li><a href="./shop-grid.html">??????</a></li>
                            <li><a href="./contact.html">????????</a></li>
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
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action = "{{ route('resultar')}}" method="POST">
                                @csrf
                                <div>
                                    <select name="category" id="">
                                        <option value="all" selected>???????? ????????????</option>

                                    </select>
                                </div>
                                <input type="text" placeholder="???????? ????????????">
                                <button type="submit" class="site-btn">??????</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>?????? 24/7 ??????????</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Section End -->


    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcrumb.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>??????????</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">???????????? ????????????????</a>
                            <span>??????????</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>???????????? ????????????????</h4>
                <form action="{{ route('sendOrderar')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>?????????? ????????????<span>*</span></p>
                                        <input type="text" name="full_name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>????????????<span>*</span></p>
                                        <input type="text" name="phone">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>????????</h4>
                                <div class="checkout__order__products">???????????? <span>??????????????</span></div>
                                <ul>
                                    @foreach($order as $item)
                                        <li>
                                            {{ \Illuminate\Support\Str::limit($item->title, $limit = 25, $end = '...') }}
                                            <span>{{ $item->price}} dh</span>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="checkout__order__total">?????????????? <span>{{$order[0]->price}} dh</span></div>
                                <button type="submit" class="site-btn">?????????? ??????????</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="{{ asset('img/logo.png')}}" alt=""></a>
                        </div>
                        <ul>
                            <li>
                                :??????????
                                 60-49 ???????? 11378 ??????????????
                            </li>
                            <li>????????: +65 11.188.888</li>
                            <li>???????? ????????????????????: hello@tiiitsuit.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 offset-lg-left-1">
                    <div class="footer__widget">
                        <h6 class="h5-links">?????????? ??????????</h6>
                        <ul>
                            <li><a href="#">?????????????? ??????</a></li>
                            <li><a href="#">?????? ????????????</a></li>
                            <li><a href="#">???????? ??????</a></li>
                            <li><a href="#">?????????????? ??????????????</a></li>
                            <li><a href="#">?????????? ????????</a></li>
                            <li><a href="#">?????????? ???????????? ???????????? ??????</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>?????????? ?????????????? ??????????????????</h6>
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
    <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{ asset('js/mixitup.min.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>

</body>

</html>