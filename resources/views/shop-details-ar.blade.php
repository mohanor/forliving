
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

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
    <link rel="stylesheet" href="{{ asset('css/rtl-style.css')}}" type="text/css">

    <style>
        .product-details {
            text-align: right;
        }

        .breadcrumb__option a {
            margin-left: 20px;
            margin-right: 0;
        }

        .breadcrumb__option a:after {
            right: auto;
            left: -12px;
        }

        .header__logo {
            text-align: right;
        }

        .header__cart {
            text-align: right;
        }

        .humberger__menu__widget .header__top__right__language {
            margin-right: 0;
        }
        
        .header__logo {
            text-align: left;
        }

        .hero__search__phone__desktop {
            display: none;
        }

        .col-lf-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header__cart {
            padding: 10px 0 10px;
        }

        .hero__search__phone {
             margin-top: 0;
        }

        @media only screen and (min-width : 991px) {
            .hero__search__phone__desktop {
                display: block;
            }

            .hero__search__phone__mobile {
                display: none;
            }

            .col-lf-flex {
                display: block;
                margin-bottom: 0;
            }

            .header__cart {
                text-align: right;
                padding: 24px 0;
            }

            .header__cart {
                text-align: left;
            }

            .header .row-rtl {
                align-items: center;
            }

            .header__logo {
                text-align: right;
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
            <a href="#">
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
        <div class="humberger__menu__cart">
             @livewire('cart-counter')
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <div>عربي</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="/index?change_language=fr">français</a></li>
                    <li><a href="/index?change_language=en">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> تسجيل الدخول</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="{{ route('products.indexar')}}">الصفحة الرئيسية</a></li>
                <li><a href="{{ route('shoping.cart.ar')}}">سلة</a></li>
                <li><a href="{{ route('contact.ar')}}">اتصل بنا</a></li>
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
                <li>شحن مجاني لجميع الطلبات بقيمة 99 دولارًا</li>
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
                                <li>شحن مجاني لجميع الطلبات بقيمة 99 دولارًا</li>
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
                                <div>عربي</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Franch</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> تسجيل الدخول</a>
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
                        <a href="{{ route('products.indexar')}}">
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
                            <li class="active"><a href="{{ route('products.indexar')}}">الصفحة الرئيسية</a></li>
                            <li><a href="{{ route('shoping.cart.ar')}}">سلة</a></li>
                            <li><a href="{{ route('contact.ar')}}">اتصل بنا</a></li>
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
                                <span>دعم 24/7 الوقت</span>
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
                            <form action="#">
                                <div class="hero__search__categories">
                                    جميع الفئات
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="ماذا تحتاج؟">
                                <button type="submit" class="site-btn">بحث</button>
                            </form>
                        </div>
                        <div class="hero__search__phone hero__search__phone__desktop">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>دعم 24/7 الوقت</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/culture.jpeg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>تفاصيل المنتج</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ route('products.indexar')}}">الصفحة الرئيسية</a>
                            <span>المنتج</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        @foreach($images as $item)
                            @if($item->type == "primary")
                                <div class="product__details__pic__item">
                                    <img class="product__details__pic__item--large"
                                        src="{{asset('/storage/images/' . $item->src . '')}}" alt="">
                                </div>
                                @break
                            @endif    
                        @endforeach
                        <div class="product__details__pic__slider__ar owl-carousel">
                                @foreach($images as $item)
                                    <img data-imgbigurl="{{asset('/storage/images/' . $item->src . '')}}"
                                        src="{{asset('/storage/images/' . $item->src . '')}}" alt="">
                                @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{$product->title}}</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <div class="product__details__price">{{$product->price}} د.م</div>
                        <p>
                            {{$product->description}}
                        </p>
                        @if ($cart->where('id', $product->product_id)->count())
                            <button class="primary-btn" style="border: none; background: #c02d28;">
                                في السلة
                            </button>
                        @else
                            <form action="{{ route('addToCartFromDetails')}}" method="post" style="display: inline;">
                                @csrf
                                <input type="hidden" name="id" value="{{$product->product_id}}">
                                <button type="submit" class="primary-btn" style="border: none;">أضف إلى السلة</button>
                            </form>
                        @endif

                        <a href="{{ route('checkoutnow.ar', $product->product_id)}}"  class="primary-btn" style="background: #ffa41c">اضغط هنا للطلب</a>

                        
                        <ul>
                            <li><b>التوفر</b> <span>مخزون معد للبيع</span></li>
                            <li><b>شحن</b> <span>شحن ليوم واحد. <samp>بيك اب مجاني اليوم</samp></span></li>
                            <li><b>مشاركه فى</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Reviews <span>(1)</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <p>
                                        {{$product->description}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>المنتجات ذات الصلة</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($Related_product as $item)
                    @if ($item->product == $product->product_id)
                        @continue
                    @endif
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{asset('/storage/images/' . $item->src . '')}}">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="{{ route('product-details', $item->product)}}"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">{{$item->title}}</a></h6>
                                <h5>{{$item->price}} د.م</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="{{ route('products.indexar')}}">
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
                        <ul>
                            <li>
                                :عنوان
                                 60-49 طريق 11378 نيويورك
                            </li>
                            <li>هاتف: +65 11.188.888</li>
                            <li>بريد الالكتروني: hello@tiiitsuit.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 offset-lg-left-1">
                    <div class="footer__widget">
                        <h6 class="h5-links">روابط مفيدة</h6>
                        <ul>
                            <li><a href="#">معلومات عنا</a></li>
                            <li><a href="#">حول متجرنا</a></li>
                            <li><a href="#">تسوق آمن</a></li>
                            <li><a href="#">معلومات التسليم</a></li>
                            <li><a href="#">سياسة خاصة</a></li>
                            <li><a href="#">خريطة الموقع الخاصة بنا</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>وسائل التواصل الاجتماعي</h6>
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


</body>

</html>