@extends('layouts.frontend.master')
@section('title','About Us')

@section('content')
<section class="same-section-spacing bg-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-box">
                    <h2>About Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ws-section-spacing about-three">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="video-img-box">
                    <img src="{{asset('frontend/images/hm-about-us.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h2>We make the best for all our customers.</h2>
                    <p>Ut et justo invidunt et sit takimata dolor accusam erat. Duo amet consetetur diam stet vero
                        dolor no est accusam, aliquyam dolor vero sit sea. No et justo consetetur at lorem clita sit
                        ea. Dolor sed clita dolor ea elitr sed elitr</p>
                    <p>Tempor dolor vero dolor sadipscing eos erat dolor sanctus aliquyam et, et justo labore lorem
                        kasd clita sed, sanctus sit consetetur no no ut erat dolor. </p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="servicebox-one ">
                    <div class="service-box-icon"><i class="fas fa-route"></i></div>
                    <h3 class="service-box-title">Best Travel Agent</h3>
                </div>
            </div>
            <!-- item -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="servicebox-one ">
                    <div class="service-box-icon"><i class="fab fa-avianex"></i></div>
                    <h3 class="service-box-title">Best Price Guarantee</h3>
                </div>
            </div>
            <!-- item -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="servicebox-one ">
                    <div class="service-box-icon"><i class="fas fa-bullhorn"></i></div>
                    <h3 class="service-box-title">Trust &amp; Safety</h3>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection