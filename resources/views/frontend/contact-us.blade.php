@extends('layouts.frontend.master')
@section('title','Contact Us')

@section('content')
<section class="same-section-spacing bg-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-box">
                    <h2>Contact Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="same-section-spacing contact-two-page">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-12">
                <div class="contact-info-two">
                    <h3 class="title-left">Contact Info</h3>
                    <ul>
                        <li>
                            <h4>Address</h4>
                            <p>{{config('info.address')}}</p>
                        </li>
                        <li>
                            <h4>Website</h4>
                            <p>Company123@.com</p>
                        </li>
                        <li>
                            <h4>Mobile</h4>
                            <p>{{config('info.phone')}}</p>
                        </li>
                        <li>
                            <h4>Email</h4>
                            <p>{{config('info.email')}}</p>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="col-lg-7 col-md-12 conatact-us-form">
                <h3 class="title-left">Contact Form</h3>
                @include('layouts.frontend.includes.query-form')
            </div>
        </div>
    </div>
</section>
@endsection