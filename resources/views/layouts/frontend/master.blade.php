<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="robots" content="noindex">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/fv-icon.png" type="image/gif">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&amp;display=swap" rel="stylesheet">
    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <!--animate.css-->
    <link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">
    <!--fontawesome 5-->
    <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}">
    <!--lity.css-->
    <link rel="stylesheet" href="{{asset('frontend/css/lity.min.css')}}">
    <!--slicknav.css-->
    <link rel="stylesheet" href="{{asset('frontend/css/slicknav.min.css')}}">
    <!--slickslider.css-->
    <link rel="stylesheet" href="{{asset('frontend/css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/index-4.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/css/responsive1.css')}}">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{asset('frontend/css/css/font-mytravel.css')}}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/css/font/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/css/font/icofont/icofont.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/css/style1.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/css/travel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/custome.css')}}">
    <title>@yield('title') - Fly Effort</title>
</head>

<body>
    <div id="preloader"></div>
    <header>
        <!-- Topbar-start-area -->
        <div class="header_top_area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-6">
                                <div class="contact_wrapper_top">
                                    <ul class="header_top_contact">
                                        <li><i class="fa fa-phone" aria-hidden="true"></i>{{config('info.phone')}}</li>
                                        <li><i class="fa fa-envelope" aria-hidden="true"></i>{{config('info.email')}}</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Button Section Start -->
                            <div class="col-6 center-btn">
                                <div class="contact_wrapper_top">
                                    <ul class="header_top_contact">
                                        @if (Route::has('login'))
                                        @auth
                                        <li>
                                            <a href="{{ url('dashboard') }}" class="btn-login">Dashboard</a>
                                        </li>
                                        @else
                                        <li>
                                            <a href="{{ route('login') }}" class="btn-login">Log in</a>
                                        </li>
                                        @if (Route::has('register'))
                                        <li>
                                            <a href="{{ route('register') }}" class="btn-singup">Register</a>
                                        </li>
                                        @endif
                                        @endauth
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <!-- End Button Section -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End-Topbar-area -->
        <!-- Menu-start-area -->
        <div class="header-fixed header-one">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="{{asset('frontend/images/logo-wht.png')}}" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse my-lg-0" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route('about')}}">About Us </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Online Courses <i class="fas fa-angle-down"></i></a>
                                <ul class="dropdown">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('airhostess-cabin-crew')}}">Airhostess Cabin Crew</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('airport-management')}}">Airport Management</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('airport-retail')}}">Airport Retail</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Internship <i class="fas fa-angle-down"></i></a>
                                <ul class="dropdown">
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Intership One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Internship Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Internship Three</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('faq')}}">FAQ's</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                            </li>
                        </ul>
                        <div class="log-btn">
                            <div id="search-btn">
                                <form>
                                    <input id="search" name="search" type="text" placeholder="Search here...">
                                    <a href="#" class="fa fa-search"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
                <a href="index.php" class="mobile-menu" data-logo="images/logo-wht.png">
                </a>
            </div>
        </div>
        <!-- End-Menu-area-->
    </header>

    @yield('content')

    <footer class="ws-section-spacing img-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-7 col-sm-12">
                    <div class="footer-widget">
                        <div class="title">
                            <h3>About Us</h3>
                        </div>
                        <p>Ipsum consetetur invidunt magna tempor eirmod takimata ea rebum. Sed labore sit sadipscing
                            magna. Accusam diam ipsum duo stet no diam sadipscing . Sed justo ea eos vero
                            eirmod gubergren magna.</p>
                        <ul class="footer-icon pl-0">
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-2 col-md-5 col-sm-12">
                    <div class="footer-widget">
                        <div class="title">
                            <h3>Links</h3>
                        </div>
                        <ul class="link-widget pl-0">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li><a href="#">Online Course</a></li>
                            <li><a href="#">Internship</a></li>
                            <li><a href="{{route('faq')}}">FAQ's</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-5 col-sm-12">
                    <div class="footer-widget">
                        <div class="title">
                            <h3>Support</h3>
                        </div>
                        <ul class="link-widget pl-0">
                            <li><a href="#">Privacy & Policy</a></li>
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Payment & Refund Policy</a></li>
                            <li><a href="#">Shipping Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12">
                    <div class="footer-widget">
                        <div class="title">
                            <h3>Contact Us</h3>
                        </div>
                        <ul class="link-widget pl-0">
                            <li><i class="fa fa-location-arrow"></i> {{config('info.address')}}</li>
                            <li><a href="mailto:{{config('info.email')}}"><i class="fa fa-envelope"></i> {{config('info.email')}}</a></li>
                            <li><a href="https://api.whatsapp.com/send?phone={{config('info.whatsapp')}}"><i class="fa fa-whatsapp"></i> {{config('info.whatsapp')}}</a></li>
                            <li><a href="tel:{{config('info.phone')}}"><i class="fa fa-phone"></i> {{config('info.phone')}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- copyright-area -->
    <div class="footer-bottom text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="left-text">
                        Copyright © 2020 | All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="social_icon">
        <div class="all-icon mail_color">
            <a href="mailto:{{config('info.email')}}"><i class="fa fa-envelope"></i></a>
        </div>
        <div class="all-icon whatsapp_color">
            <a onclick="return gtag_report_conversion('https://api.whatsapp.com/send?phone={{config('info.whatsapp')}}');"
                href="https://api.whatsapp.com/send?phone={{config('info.whatsapp')}}"><i class="fa fa-whatsapp"></i></a>
        </div>
        <div class="all-icon phone_color">
            <a onclick="return gtag_report_conversion('tel:{{config('info.phone')}}');" href="tel:{{config('info.phone')}}"><i class="fa fa-phone"></i></a>
        </div>
    </div>

    <!-- Jquery.min.js-->
    <script src="{{asset('frontend/js/jquery.1.12.4.js')}}"></script>
    <!--bootstrap.min.js-->
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap-datepicker.js')}}"></script>
    <!--slicknav.min.js-->
    <script src="{{asset('frontend/js/jquery.slicknav.min.js')}}"></script>
    <!--slickslider.min.js-->
    <script src="{{asset('frontend/js/slick.min.js')}}"></script>
    <!-- counterup.min.js -->
    <script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
    <!-- magnific-popup.js -->
    <script src="{{asset('frontend/js/lity.min.js')}}"></script>
    <!-- isotope.pkgd.min.js -->
    <script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/js/imagesloaded.js')}}"></script>
    <!-- main.js -->
    <script src="{{asset('frontend/js/main.js')}}"></script>

    <!-- Latest jQuery -->
    <script src="{{asset('frontend/js/js/jquery.inview.min.js')}}"></script>
    <script src="{{asset('frontend/js/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('frontend/js/js/scripts.js')}}"></script>
    <script src="{{asset('frontend/js/js/owl.carousel.min.js')}}"></script>
    <a id="btn-to-top" class="show"></a>
</body>

</html>