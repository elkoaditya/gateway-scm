<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gateway | {{APP_TITLE}}</title>
    <meta name="description" content="Xolio - Creative Agency Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('xolio')}}/assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('xolio')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('xolio')}}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{asset('xolio')}}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('xolio')}}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('xolio')}}/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{asset('xolio')}}/assets/css/odometer.css">
    <link rel="stylesheet" href="{{asset('xolio')}}/assets/css/slick.css">
    <link rel="stylesheet" href="{{asset('xolio')}}/assets/css/default.css">
    <link rel="stylesheet" href="{{asset('xolio')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('xolio')}}/assets/css/responsive.css">
</head>
<body>

<!--Preloader-->
<div id="preloader">
    <div id="loader" class="loader">
        <div class="loader-container">
            <div class="loader-icon"><img src="{{asset('xolio')}}/assets/img/preloader.png" alt="Xolio - Creative Agency HTML5 Template">
            </div>
        </div>
    </div>
</div>
<!--Preloader-end -->

<!-- Custom-cursor -->
<div class="mouseCursor cursor-outer"></div>
<div class="mouseCursor cursor-inner"><span>Drag</span></div>
<!-- Custom-cursor-end -->

<!-- Scroll-top -->
<button class="scroll-top scroll-to-target" data-target="html">
    <i class="fas fa-angle-up"></i>
</button>
<!-- Scroll-top-end-->

<!-- header-area -->
<header>
    <div id="sticky-header" class="menu-area transparent-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav">
                            <div class="logo">
                                <a href="index.html"><img src="{{APP_LOGO}}" alt="Logo"></a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="active"><a href="/">Gateway</a></li>
                                </ul>
                            </div>
                            <div class="header-action">
                                <ul class="list-wrap">
                                    <li class="header-btn"><a href="#!" class="btn" onclick="document.getElementById('form-logout').submit();">Logout <span></span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <nav class="menu-box">
                            <div class="close-btn"><i class="fas fa-times"></i></div>
                            <div class="nav-logo">
                                <a href="index.html"><img src="{{asset('xolio')}}/assets/img/logo/logo.png" alt="Logo"></a>
                            </div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>
                    <!-- End Mobile Menu -->
                    <form id="form-logout" method="post" action="/logout">@csrf

                    </form>

                </div>
            </div>
        </div>
        <div class="body-contact-overlay"></div>
        <!-- header-contact-end -->

    </div>
</header>
<!-- header-area-end -->



<!-- main-area -->
<main>
    <!-- services-area -->
    <section class="inner-services-area pt-110 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title title-style-two text-center mb-60">
                        <span class="sub-title">Afresto System Indonesia</span>
                        <h2 class="title">{{APP_TITLE}}</h2>
                    </div>
                </div>
            </div>
            <div class="inner-services-item-wrap">
                <div class="row justify-content-center">
                    @foreach($result as $res)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="services-item-four">
                                <div class="services-icon-four">
                                    <img src="https://scm-v2.elco.systems/{{$res->parent->icon}}" alt="">
                                </div>
                                <div class="services-content-four">
                                    @php
                                    // generate token url
                                    $token = \Illuminate\Support\Facades\Crypt::encrypt($res->domain);
                                    @endphp
                                    <h2 class="title"><a href="/redirect/{{$token}}">{{$res->parent->nama}}</a></h2>
                                    <p>{{$res->parent->deskripsi}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-end -->

    <!-- brand-area -->
    <div class="brand-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="title">We are Already Build Solution for...</span>
                </div>
            </div>
            <div class="row brand-active">
                <div class="col-12">
                    <div class="brand-item-two">
                        <img src="{{asset('xolio')}}/assets/img/brand/h3_brand_img01.png" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item-two">
                        <img src="{{asset('xolio')}}/assets/img/brand/h3_brand_img02.png" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item-two">
                        <img src="{{asset('xolio')}}/assets/img/brand/h3_brand_img03.png" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item-two">
                        <img src="{{asset('xolio')}}/assets/img/brand/h3_brand_img04.png" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item-two">
                        <img src="{{asset('xolio')}}/assets/img/brand/h3_brand_img05.png" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item-two">
                        <img src="{{asset('xolio')}}/assets/img/brand/h3_brand_img06.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area-end -->

</main>
<!-- main-area-end -->

<!-- footer-area -->
<footer>
    <div class="footer-area">
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="cart-img">
                            <p>
                                everything will be fine
                            </p>
{{--                            <img src="{{asset('xolio')}}/assets/img/images/cart_img.png" alt="">--}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="copyright-text text-end">
                            <p>© 2023 <a href="https://elco.systems">elco.systems</a>. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->



<!-- JS here -->
<script src="{{asset('xolio')}}/assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="{{asset('xolio')}}/assets/js/bootstrap.min.js"></script>
<script src="{{asset('xolio')}}/assets/js/isotope.pkgd.min.js"></script>
<script src="{{asset('xolio')}}/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="{{asset('xolio')}}/assets/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('xolio')}}/assets/js/jquery.odometer.min.js"></script>
<script src="{{asset('xolio')}}/assets/js/swiper-bundle.min.js"></script>
<script src="{{asset('xolio')}}/assets/js/jquery.appear.js"></script>
<script src="{{asset('xolio')}}/assets/js/slick.min.js"></script>
<script src="{{asset('xolio')}}/assets/js/ajax-form.js"></script>
<script src="{{asset('xolio')}}/assets/js/parallax.min.js"></script>
<script src="{{asset('xolio')}}/assets/js/jquery.parallaxScroll.min.js"></script>
<script src="{{asset('xolio')}}/assets/js/tween-max.js"></script>
<script src="{{asset('xolio')}}/assets/js/wow.min.js"></script>
<script src="{{asset('xolio')}}/assets/js/main.js"></script>
</body>
</html>
