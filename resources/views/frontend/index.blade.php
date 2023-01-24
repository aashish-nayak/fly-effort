@extends('layouts.frontend.master')
@section('title','Home')
@section('content')
<main class="hero-slide-three ">
    <div class="item">
        <img src="{{asset('frontend/images/slider-1.jpg')}}" alt="hero-1">
        <div class="hero-slider__content-wrapper">
            <div class="container">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-10 text-center">
                        <div class="hero-slider__content">
                            <h2 class="hero-slider__title">The Trip of Your Dream</h2>
                            <p class="hero-slider__text">Our travel agency is ready to offer you an exciting vacation
                                that is designed
                                to fit your own needs and wishes. Whether it’s an exotic cruise or a trip to your
                                favorite resort,
                                you will surely have the best experience.</p>
                            <a class="hero-slider__btn active mr-2" href="{{route('about')}}"> Get Start</a>
                            <a class="hero-slider__btn" href="{{route('contact')}}"> Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <img src="{{asset('frontend/images/slider-2.jpg')}}" alt="hero-1">
        <div class="hero-slider__content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12">
                        <div class="hero-slider__content">
                            <h2 class="hero-slider__title">Choose The Best Tour Package</h2>
                            <p class="hero-slider__text">Lorem ipsum dolor sit amet consectetur adipisicing elit sed
                                do eiusm tempor incididunt ut labore et dolore.</p>
                            <a class="hero-slider__btn active mr-2" href="{{route('about')}}"> Get Start</a>
                            <a class="hero-slider__btn" href="{{route('contact')}}"> Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <img src="{{asset('frontend/images/slider-3.jpg')}}" alt="hero-1">
        <div class="hero-slider__content-wrapper">
            <div class="container">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-10 text-center">
                        <div class="hero-slider__content">
                            <h2 class="hero-slider__title">Planing Trip To Anywhere in The World?</h2>
                            <p class="hero-slider__text">Sed ipsum et eos clita elitr vero invidunt et sanctus. Et
                                takimata ipsum consetetur dolores consetetur amet lorem magna. Justo eos eirmod diam
                                et invidunt dolor amet rebum..</p>
                            <a class="hero-slider__btn active mr-2" href="{{route('about')}}"> Get Start</a>
                            <a class="hero-slider__btn" href="{{route('contact')}}"> Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<section class="light-bg">
    <div class="container">
        <div class="row custom-callout">
            <div class="col-lg-3 col-xs-12">
                <div class="single-choose">
                    <i class="icofont-man-in-glasses"></i>
                    <div class="choose-content">
                        <h4>Best Travel Guide</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing typesetting</p>
                    </div>
                </div>
            </div>
            <!-- END COL -->
            <div class="col-lg-3 col-xs-12">
                <div class="single-choose">
                    <i class="icofont-world"></i>
                    <div class="choose-content">
                        <h4>Best Travel Guide</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing typesetting</p>
                    </div>
                </div>
            </div>
            <!-- END COL -->
            <div class="col-lg-3 col-xs-12">
                <div class="single-choose">
                    <i class="icofont-ui-wifi"></i>
                    <div class="choose-content">
                        <h4>Free Wifi</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing typesetting</p>
                    </div>
                </div>
            </div>
            <!-- END COL -->
            <div class="col-lg-3 col-xs-12">
                <div class="single-choose">
                    <i class="icofont-live-support"></i>
                    <div class="choose-content">
                        <h4>24/7 Support</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing typesetting</p>
                    </div>
                </div>
            </div>
            <!-- END COL -->
        </div>
    </div>
</section>

<section class="dark-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6" data-aos="fade-up">
                <img src="{{asset('frontend/images/hm-about-us.jpg')}}" alt="about-us-img" class="img-fluid">
            </div>
            <div class="col-md-6" data-aos="fade-up">
                <span>About Us</span>
                <h2>Every Time We Provide <br> best Service</h2>
                <p>Ut et justo invidunt et sit takimata dolor accusam erat.
                    Duo amet consetetur diam stet vero dolor no est accusam,
                    aliquyam dolor vero sit sea. No et justo consetetur at lorem clita sit ea.
                    Dolor sed clita dolor ea elitr sed elitr sea. At est ut lorem voluptua lorem elitr.
                    Amet erat nonumy amet sed takimata clita, invidunt lorem ut no sit aliquyam justo.</p>
                <p>Tempor dolor vero dolor sadipscing eos erat dolor sanctus aliquyam et,
                    et justo labore lorem kasd clita sed, sanctus sit consetetur no no ut erat dolor,
                    nonumy sanctus labore takimata erat amet lorem magna nonumy justo.</p>
                <div class="about-content1 read-more">
                    <a href="{{route('about')}}">Read More</a>
                </div>
            </div>
        </div>
    </div><!-- END CONTAINER -->
</section>

<!-- Online-Section-Start -->
<section id="blog" class="light-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                <div class="section-title text-center">
                    <h2>Online Courses</h2>
                </div>
            </div>
            <!-- END COL -->
        </div>
        <!-- END ROW -->
        <div class="row" data-aos="fade-up">
            <!-- Start-item -->
            <div class="col-lg-4 col-md-6">
                <div class="single_blog">
                    <div class="blog_image">
                        <img class="blog-photo" alt="Blog Photo" src="{{asset('frontend/images/cabin-cours.jpg')}}">
                    </div>
                    <div class="blog-text">
                        <h4><a href="#">Airhostess Cabin Crew</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et quam sollicitudin mi
                            tincidunt faucibus
                        </p>
                        <a href="#" class="post-btn">Apply Now <i class="icofont-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!--- END Item -->

            <!-- Start-item -->
            <div class="col-lg-4 col-md-6">
                <div class="single_blog">
                    <div class="blog_image">
                        <img class="blog-photo" alt="Blog Photo" src="{{asset('frontend/images/retail-cours.jpg')}}">
                    </div>
                    <div class="blog-text">
                        <h4><a href="#">Airport Retail</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et quam sollicitudin mi
                            tincidunt faucibus
                        </p>
                        <a href="#" class="post-btn">Apply Now <i class="icofont-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!--- END Item -->

            <!-- Start-item -->
            <div class="col-lg-4 col-md-6">
                <div class="single_blog">
                    <div class="blog_image">
                        <img class="blog-photo" alt="Blog Photo" src="{{asset('frontend/images/management-cours.jpg')}}">
                    </div>
                    <div class="blog-text">
                        <h4><a href="#">Airport Management </a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et quam sollicitudin mi
                            tincidunt faucibus
                        </p>
                        <a href="#" class="post-btn">Apply Now <i class="icofont-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!--- END Item -->
        </div>
        <!--- END ROW -->
    </div>
    <!--- END CONTAINER -->
</section>
<!-- End-Online-Section -->

<!-- Online-Section-Start -->
<section id="blog" class="dark-bg blog_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                <div class="section-title text-center">
                    <h2>Intership</h2>
                </div>
            </div>
            <!-- END COL -->
        </div>
        <!-- END ROW -->
        <div class="row" data-aos="fade-up">
            <!-- Start-item -->
            <div class="col-lg-4 col-md-6">
                <div class="single_blog">
                    <div class="blog_image">
                        <img class="blog-photo" alt="Blog Photo" src="{{asset('frontend/images/inter-crew.jpg')}}">
                    </div>
                    <div class="blog-text">
                        <h4><a href="#">Airhostess Cabin Crew</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et quam sollicitudin mi
                            tincidunt faucibus
                        </p>
                        <a href="#" class="post-btn">Apply Now <i class="icofont-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!--- END Item -->

            <!-- Start-item -->
            <div class="col-lg-4 col-md-6">
                <div class="single_blog">
                    <div class="blog_image">
                        <img class="blog-photo" alt="Blog Photo" src="{{asset('frontend/images/inter-mengment.jpg')}}">
                    </div>
                    <div class="blog-text">
                        <h4><a href="#">Airport Management</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et quam sollicitudin mi
                            tincidunt faucibus
                        </p>
                        <a href="#" class="post-btn">Apply Now <i class="icofont-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!--- END Item -->

            <!-- Start-item -->
            <div class="col-lg-4 col-md-6">
                <div class="single_blog">
                    <div class="blog_image">
                        <img class="blog-photo" alt="Blog Photo" src="{{asset('frontend/images/inter-retail.jpg')}}">
                    </div>
                    <div class="blog-text">
                        <h4><a href="#">Airport Retail</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et quam sollicitudin mi
                            tincidunt faucibus
                        </p>
                        <a href="#" class="post-btn">Apply Now <i class="icofont-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!--- END Item -->
        </div>
        <!--- END ROW -->
    </div>
    <!--- END CONTAINER -->
</section>
<!-- End-Online-Section -->

<section class="light-bg service-one ws-section-spacing">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="center-title3">
                    <h2 class="title3">Why Choose Us</h2>
                    <h4 class="sub-title3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua minim veniam.</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="servicebox-one service-type-two">
                    <div class="service-box-icon"><i class="fas fa-route"></i></div>
                    <h3 class="service-box-title">Best Travel Agent</h3>
                    <p class="service-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore .</p>
                </div>
            </div>
            <!-- item -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="servicebox-one service-type-two">
                    <div class="service-box-icon"><i class="fab fa-avianex"></i></div>
                    <h3 class="service-box-title">Best Price </h3>
                    <p class="service-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore .</p>
                </div>
            </div>
            <!-- item -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="servicebox-one service-type-two">
                    <div class="service-box-icon"><i class="fas fa-bullhorn"></i></div>
                    <h3 class="service-box-title">Trust & Safety</h3>
                    <p class="service-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore .</p>
                </div>
            </div>
            <!-- item -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="servicebox-one service-type-two">
                    <div class="service-box-icon"><i class="fa fa-home"></i></div>
                    <h3 class="service-box-title">Amazing Tour</h3>
                    <p class="service-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore .</p>
                </div>
            </div>
            <!-- item -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="servicebox-one service-type-two">
                    <div class="service-box-icon"><i class="fas fa-ticket-alt"></i></div>
                    <h3 class="service-box-title">Ticket Booking</h3>
                    <p class="service-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore .</p>
                </div>
            </div>
            <!-- item -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="servicebox-one service-type-two">
                    <div class="service-box-icon"><i class="fa fa-bed"></i></div>
                    <h3 class="service-box-title">Hotel Booking</h3>
                    <p class="service-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore .</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="dark-bg contact1 contact-two-page grey-alt-bg">
    <div class="container">
        <div class="row mt-5 align-items-center justify-content-center">
            <div class="col-lg-6 col-md-12">
                <div class="img-wapper">
                    <img src="{{asset('frontend/images/enquiry-form.jpg')}}" alt="about">
                </div>
            </div>
            <div class="col-lg-6 hm-enquiry-form">
                <h3 class="title-left animate__fadeInDown">General Enquiry</h3>
                @include('layouts.frontend.includes.query-form')
            </div>
        </div>
    </div>
</section>

<section class="counterup-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 aos-init aos-animate" data-aos="fade-up">
                <div class="section-title text-center">
                    <h2>We Expert our Goals & We Strive <br> To Provide Best</h2>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-counter">
                    <i class="icofont-users-alt-3"></i>
                    <div class="counter-content">
                        <h2 class="counter-num">22140</h2>
                        <p>Happy Customers <span></span></p>
                    </div>
                </div>
            </div><!-- END COL -->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-counter">
                    <i class="fas fa-umbrella-beach"></i>
                    <div class="counter-content">
                        <h2 class="counter-num">540</h2>
                        <p>Destination <span></span></p>
                    </div>
                </div>
            </div><!-- END COL -->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-counter">
                    <i class="fas fa-luggage-cart"></i>
                    <div class="counter-content">
                        <h2 class="counter-num">5660</h2>
                        <p>Tours <span></span></p>
                    </div>
                </div>
            </div><!-- END COL -->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-counter">
                    <i class="icofont-live-support"></i>
                    <div class="counter-content">
                        <h2 class="counter-num">240</h2>
                        <p>Support Cases <span></span></p>
                    </div>
                </div>
            </div><!-- END COL -->
        </div>
    </div><!-- END CONTAINER -->
</section>

<section class="light-bg testimonial">
    <div class="overlay section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-aos="fade-up">
                    <div class="section-title text-center white-title">
                        <h2>What Travellers Say Tour Reviews</h2>
                    </div>
                </div><!-- END COL -->
            </div><!-- END ROW -->

            <div class="row">
                <div class="col-md-8 d-block mx-auto text-center">
                    <div id="testimonial-slider" class="owl-carousel">

                        <div class="single-testimonial">
                            <div class="testimonial-content">
                                Lorem ipsum dolor sit amet consectetur adipiscing elit. Praesent bibendum dolor eros
                                imperdiet amet hendrerit Lorem ipsum dolor sit amet consectetur adipiscing elit.
                            </div>

                            <div class="testimonial-bottom">
                                <img src="{{asset('frontend/images/testi-1.jpg')}}" width="50" alt="review image">
                                <h3 class="title">Priya Jain</h3>
                                <div class="test-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- END single Testimonials -->

                        <div class="single-testimonial">
                            <div class="testimonial-content">
                                Lorem ipsum dolor sit amet consectetur adipiscing elit. Praesent bibendum dolor eros
                                imperdiet amet hendrerit Lorem ipsum dolor sit amet consectetur adipiscing elit.
                            </div>

                            <div class="testimonial-bottom">
                                <img src="{{asset('frontend/images/testi-2.jpg')}}" width="50" alt="review image">
                                <h3 class="title">Neha Sharma</h3>
                                <div class="test-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- END single Testimonials -->

                        <div class="single-testimonial">
                            <div class="testimonial-content">
                                Lorem ipsum dolor sit amet consectetur adipiscing elit. Praesent bibendum dolor eros
                                imperdiet amet hendrerit Lorem ipsum dolor sit amet consectetur adipiscing elit.
                            </div>

                            <div class="testimonial-bottom">
                                <img src="{{asset('frontend/images/testi-3.jpg')}}" width="50" alt="review image">
                                <h3 class="title">Kavita Gupta</h3>
                                <div class="test-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- END single Testimonials -->

                        <div class="single-testimonial">
                            <div class="testimonial-content">
                                Lorem ipsum dolor sit amet consectetur adipiscing elit. Praesent bibendum dolor eros
                                imperdiet amet hendrerit Lorem ipsum dolor sit amet consectetur adipiscing elit.
                            </div>

                            <div class="testimonial-bottom">
                                <img src="{{asset('frontend/images/testi-4.jpg')}}" width="50" alt="review image">
                                <h3 class="title">Rupali Singh</h3>
                                <div class="test-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- END single Testimonials -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection