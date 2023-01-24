@extends('layouts.frontend.master')
@section('title','Airport Management')

@section('content')
<section class="same-section-spacing bg-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-box">
                    <h2>Airport Management</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Airport Management</li>
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
            <div class="col-sm-6">
                <h3>Airport Management (12 months)</h3>
                <p>It is a diploma level civil aviation course. The course provides students a strong background in the
                    aviation management field as well as business and leadership practices. In this course candidate
                    learn about airport planning, airport security, passenger forecasting, aerodrome works, fire safety,
                    dangerous goods, and many other related topics. The course focuses on issue such as types of
                    aviation management, enterprises in airlines and their relationships. It gives them specialist and
                    management skills that will make a valuable addition to international airlines and airports around
                    the worlds. The course is career orienting in nature that opens many opportunities in many fields
                    both government and private sectors.</p>
                <h3>Age</h3>
                <p>17-27 years as on admitted.</p>
                <h3>Min. Qualification </h3>
                <p>Passed 12th or its equivalent</p>
                <h3>Employment Areas</h3>
                <ul>
                    <li>Academic institutes</li>
                    <li>Airports catering agencies</li>
                    <li>Hospitality industry</li>
                    <li>Security agencies</li>
                    <li>Tour and travel</li>
                    <li>Aviation companies</li>
                    <li>Airport control rooms</li>
                    <li>Aircraft arrival and departure</li>
                    <li>Aircraft Marshalling</li>
                </ul>
                <h3>Job/Post Type</h3>
                <ul>
                    <li>Airport station attendant</li>
                    <li>Cargo ground staff</li>
                    <li>Crew schedule coordinator</li>
                    <li>Customer service executive</li>
                    <li>Flight dispatcher</li>
                    <li>Ground staff</li>
                    <li>Load and trim sheet</li>
                    <li>Ground handing</li>
                    <li>Airport terminal duty manager</li>
                    <li>Cargo scanner</li>
                    <li>Safety manager</li>
                    <li>Security manager</li>
                    <li>Air traffic control officer</li>
                </ul>
                <p>Contact for more Information: <a href="tel:<?= $phone ?>">8800424149</a></p>
            </div>
            <div class="col-sm-6 page-form-apply-now">
                <h3 class="title-left animate__fadeInDown">General Enquiry</h3>
                @include('layouts.frontend.includes.query-form')
            </div>
        </div>
    </div>
</section>
@endsection